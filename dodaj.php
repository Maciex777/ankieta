<!DOCTYPE html>
<html lang="pl">
<head>
<title>Ankieta - dodano głos</title>
<meta charset="utf-8">
<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>

<div class="container">
	
<?php
$odp=$_POST["odp"];

$polaczenie=

mysql_connect("localhost","user","password");

mysql_select_db("sonda",$polaczenie);

$rezultat=mysql_query("SELECT odp".$odp." from sonda",$polaczenie);

$wartosc=mysql_fetch_array($rezultat);

$liczba=$wartosc["odp".$odp];

$liczba+=1;

$sql=mysql_query("UPDATE sonda SET odp".$odp."=".$liczba,$polaczenie);

echo "<h2>Dodano głos!</h2>";

if ($odp == "A") { echo "<h2>Twoja ulubiona herbata to czarna</h2>";} 
elseif ($odp == "B") { echo "<h2>Twoja ulubiona herbata to Earl Grey</h2>"; } 
elseif ($odp == "C") { echo "<h2>Twoja ulubiona herbata to zielona</h2>";} 
elseif ($odp == "D") { echo "<h2>Twoja ulubiona herbata to szałwiowa</h2>";} 
elseif ($odp == "E") { echo "<h2>Twoja ulubiona herbata to mietowa</h2>";} 
elseif ($odp == "F") { echo "<h2>Twoja ulubiona herbata to melisowa</h2>";} 
elseif ($odp == "G") { echo "<h2>Twoja ulubiona herbata to rumiankowa</h2>";} 
elseif ($odp == "H") { echo "<h2>Twoja ulubiona herbata to dziurawcowa</h2>";} 
elseif ($odp == "I") { echo "<h2>Twoja ulubiona herbata to jaśminowa</h2>";}
else { echo "<h2>Nie wybrano żadnej herbaty</h2>"; }	

mysql_close($polaczenie);
?>

<h2>Dziękujemy za wypełnienie ankiety</h2>
</div>
</body>
</html>	
