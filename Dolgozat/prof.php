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

    .profile_p{
        position: fixed;
        left: 75px;
        top: 150px;
    }
</style>
    <body>
        <head>
            <meta charset="utf-8">
    <title>
    </title>
        </head>
        <font size="50">
            <h1>Silent Voice</h1>
        </font>
        <div class="img">
        <a href="./"	        id="keres">
            <img src="Kepek/845022.png" width="50" height="50">
        </a>
        <div class="login">
        <a href="login.php">
            <img src="Kepek/Login.png" width="45" height="45">
        </a>
        </div>
        </div>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file">
            <button type="submit" name="submit">Feltöltés</button>
        </form>
    </body>
</html>