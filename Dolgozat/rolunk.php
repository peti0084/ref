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
        position: relative;
        top: -200px;
        color: white;
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
        <a href="prof.php">
            <img src="Kepek/profile.png" width="49" height="49">
        </a>
        <div class="login">
        <a href="login.php">
            <img src="Kepek/Login.png" width="45" height="45">
        </a>
        </div>
        </div>
        <center>
        <font size="50">
            <h2>Rólunk</h2>
        </font>
            <h2>
            </h2>
        </center>
    </body>
</html>