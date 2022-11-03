<style type="text/css">
    #main{
        background-color: #6cbff8;
        width: 550px;
        height: 250px;
        border-radius: 30px;
    }

    h1{
        position: relative;
        top: -4px;
        color: white;
        background-color: blue;
        text-align: center;
    }

    h2{
        color: white;
        background-color: darkblue;
        border-top-right-radius: 30px;
        border-top-left-radius: 30px;
    }
    
    body{
        background-color: lightblue;
    }

    .text{
        background-color: #6cbff8;
        color: white;
        width: 250px;
        font-weight: bold;
        font-size: 20px;
        border: none;
    }

    .text:focus{
        outline: none;
    }

    #sub{
        width: 250px;
        height:  30px;
        background-color: greenyellow;
        border: none;
    }

    hr{
        width: 250px;
        margin-top: 0px;
    }

    .img{
        position: relative;
        top: -150px;
    }
</style>
        <font size="50">
            <h1>Silent Voice</h1>
        </font>
        <div class="img">
        <a href="./"	        id="keres">
            <img src="Kepek/845022.png" width="50" height="50">
        </a>
        </div>
<center>
    <div id="main">
        <h2 style="font-size:45px">Bejelentkezés</h2>
        <form action='loginform.php' method='post'>
            <input name="unick" type="text" class="text" placeholder="Felhasználónév"><br><hr>
            <input name="updw1" type="password" class="text" placeholder="Jelszó"><br><hr>
            <input type="submit" value="Bejelentkezés" id="sub"><br><hr>
        </form>
        <a href="signup.php">
            <input type="button" value="Regisztráció" id="sub">
        </a>
    </div>
</center>
</form>