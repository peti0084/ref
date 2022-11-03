<?php
    include("dbh.php");
    $user= mysqli_query($conn," SELECT * FROM user WHERE unick='$_POST[unick]' AND updw1='$_POST[updw1]'");
    
    if( mysqli_num_rows($user)== 0) die("<script> alert('Hibás felhasználó név vagy jelszó.')</script>");
    else ;
	mysqli_close($conn);
?>