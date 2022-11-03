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
</style>
    <body>
        <head>
            <meta charset="utf-8">
    <title>
        <?php 
        if(isset($_GET['p'])) $p=$_GET['p'];
	    else $p="";
	    if	($p=="") 		$cim="Kezdolap"								;else
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
        </center>
    <?php
	    if(isset($_GET['p'])) $p=$_GET['p'];
	    else $p="";
	    if	($p=="") 		include("kezdolap.php")									;else
	    print ("Error");
    ?>
    </body>
</html>