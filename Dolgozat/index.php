<?php
    session_start();
    include_once 'dbh.php';
?>
<!DOCTYPE html>
<html>
<style type="text/css">
    h1{
        position: relative;
        top: -60px;
        color: white;
        background-color: blue;
        text-align: center;
    }

    h2{
        top: -10px;
    }
    
    
    table, th, td {
        border: 0px solid;
    }
    
    th {
        height: 170px;
    }

    body{
        background-color: lightblue;
    }

    .img{
        position: relative;
        top: -207px;
    }

    .login{
        position: fixed;
        right: 10px;
        top: 35px;
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      width: 10%;
      position: relative;
      top: -150px;
    }

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    .container {
      padding: 2px 16px;
    }
</style>
    <body>
        <head>
            <meta charset="utf-8">
    <title>
        <?php 
        if(isset($_GET['p'])) $p=$_GET['p'];
	    else $p="";
	    if	($p=="") 		$cim="Kezdolap"								;else
	    if 	($p=="tanar") 	$cim="tanar"	    						;else
        if ($p=="rolunk")   $cim="rolunk"                               ;else
	    print $cim;
        ?>
    </title>
        </head>
        <font size="50">
            <h1>Silent Voice</h1>
        </font>
        <div class="img">
        <a href="./"	        id="keres">
            <img src="Kepek/845022.png" width="50" height="50">
        </a>
        <a href="prof.php"               >
            <img src="Kepek/profile.png" width="49" height="49">
        </a>
        <div class="login">
        <a href="login.php">
            <img src="Kepek/Login.png" width="45" height="45">
        </a>
        </div>
        </div>
        <center>
            <table>
                <tr>
                <td>
                    <div class="card">
                        <a href="tanar.php">
                            <img src="Kepek/img_avatar.png" alt="Avatar" style="width:400%">
                            <div class="container">
                            <h4><b>Tanárok</b></h4>
                        </a>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="card">
                        <a href="rolunk.php">
                            <img src="Kepek/img_avatar.png" alt="Avatar" style="width:400%">
                            <div class="container">
                            <h4><b>Rólunk</b></h4>
                        </a>
                        </div>
                    </div>
                </td>
                </tr>
            </table>
        </center>
    <?php
	    if(isset($_GET['p'])) $p=$_GET['p'];
	    else $p="";
	    if	($p=="") 		include("kezdolap.php")									;else
	    if 	($p=="tanar") 	include("tanar.php")							    	;else
        if  ($p=="rolunk")  include("rolunk.php")                                   ;else
	    print ("Error");
    ?>
    </body>
</html>