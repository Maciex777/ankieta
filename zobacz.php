<?php
$polaczenie=mysql_connect("localhost","user","password");

mysql_select_db("sonda",$polaczenie);

$rezultat=mysql_query("select * from sonda");

   
    while($r = mysql_fetch_array($rezultat)) { 
	      echo "<table cellpadding=\"3\" border=1>"; 
	      echo "<tr bgcolor=\"#CCCCFF\">"; 
        echo "<td><strong>Czarna</strong></td>"; 
        echo "<td><strong>Earl Grey</strong></td>"; 
        echo "<td><strong>Zielona</strong></td>"; 
        echo "<td><strong>Szałwiowa</strong></td>"; 
        echo "<td><strong>Miętowa</strong></td>"; 
        echo "<td><strong>Melisowa</strong></td>"; 
        echo "<td><strong>Rumiankowa</strong></td>"; 
        echo "<td><strong>Dziurawcowa</strong></td>"; 
        echo "<td><strong>Jaśminowa</strong></td>"; 
        echo "</tr>"; 
        echo "<tr>"; 
        echo "<td>".$r[0]."</td>"; 
        echo "<td>".$r[1]."</td>"; 
        echo "<td>".$r[2]."</td>"; 
        echo "<td>".$r[3]."</td>"; 
        echo "<td>".$r[4]."</td>"; 
        echo "<td>".$r[5]."</td>"; 
        echo "<td>".$r[6]."</td>"; 
        echo "<td>".$r[7]."</td>"; 
        echo "<td>".$r[8]."</td>"; 
        echo "</tr>"; 
		    echo "</table>";
        }    

mysql_close($polaczenie);
?>
