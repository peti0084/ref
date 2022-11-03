<h1 color="blue">Regisztrációs írás<h1>
<?php
	if($_POST["unick"]=="" )					die("<script> alert('Nem adtad meg a neved!')</script>");
	if($_POST["umail"]=="" )					die("<script> alert('Nem adtad meg az email címed!')</script>");
	if( strlen($_POST["updw1"]) < 4)			die("<script> alert('A jelszónak legalább 4 karakteresnek kell lennie!')</script>");
	if( $_POST["updw1"] !=$_POST["updw2"])		die("<script> alert('Nem egyező jelszavak!')</script>");
	include("dbh.php");

	mysqli_query($conn,"	INSERT INTO user (uid, unick, umail, updw1, uip, udatum, ustatus) 
						VALUES 			   (NULL, '$_POST[unick]', '$_POST[umail]', '$_POST[updw1]', '$_SERVER[REMOTE_ADDR]', NOW(), 'A')");
						print "<script>Sikeres regisztráció</script>";
						mysqli_close($conn);
?>