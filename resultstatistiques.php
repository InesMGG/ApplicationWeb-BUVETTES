<!DOCTYPE html>
<html>
<?php
	require_once('fonctions.php');
	Menu();
	?>
	<?php
	require_once('fonctions.php');
	if (!empty($_POST['5Vol'])) 
	{		TopVolontaires();
			/*echo "<h3>Top 5 des Volontaires les plus actifs</h3>";
			echo "<table border=1px>";
			echo "<thead>";
			echo "<tr>";
			echo "<td>Identifiant</td>";
			echo "<td align=center>Nom</td>";
			echo "<td>Age</td>";
			echo "</tr>";
			echo "</thead>";
			$sql = "SELECT V.idV, count(E.idV) as NombreApp,nomV,age FROM EstPresent E, Volontaire V WHERE E.idv = V.idV Group By idv Order By NombreApp DESC LIMIT 5";
        	$sth = $dbh->query($sql);
        	$result = $sth->fetchAll(PDO::FETCH_ASSOC);
        	$vs = 'vs';
            foreach ($result as $row)
            {
                echo '<tr>';
                echo '<td align="center">'.$row['idV'].'</td>';
                echo '<td align="center">'.$row['nomV'].'</td>';
                echo '<td align="center">'.$row['age'].'</td>';
                echo '</tr>';
            }
            echo'</table>';
            $dbh=NULL;*/
	}
	if (!empty($_POST['5Buv'])) 
	{	TopBuvettes();
		/*echo "<h3>Top 5 des Buvettes ayant mobilisés le plus de volontaires</h3>";
		echo "<table border=1px>";
		echo "<thead>";
		echo "<tr>";
		echo "<td>Identifiant</td>";
		echo "<td align=center>Nom</td>";
		echo "<td>Emplacement</td>";
		echo "</tr>";
		echo "</thead>";
		$sql = "SELECT B.idB,count(E.idB) as OF,nomB,emplacement FROM EstPresent E, Buvette B WHERE E.idB=B.idB Group By idB Order By OF DESC LIMIT 5";
        	$sth = $dbh->query($sql);
        	$result = $sth->fetchAll(PDO::FETCH_ASSOC);
        	$vs = 'vs';
            foreach ($result as $row)
            {
                echo '<tr>';
                echo '<td align="center">'.$row['idB'].'</td>';
                echo '<td align="center">'.$row['nomB'].'</td>';
                echo '<td align="center">'.$row['emplacement'].'</td>';
                echo '</tr>';
            }
            echo'</table>';
            $dbh=NULL;*/
	}
	if (!empty($_POST['BuOuv'])) 
	{	$code = $_POST['BuOuv2'];
		StatMatch($code);
		/*echo "<h3>Buvettes ouvertes lors du match</h3>";
		echo "<table border=1px>";
		echo "<thead>";
		echo "<tr>";
		echo "<td>Nom Buvette</td>";
		echo "<td>Emplacement</td>";
		echo "<td>IDResponsable</td>";
		echo "<td>Nom Volontaire</td>";
		echo "<td>Age</td>";
		echo "<td>Heure Début</td>";
		echo "<td>Heure Fin</td>";
		echo "</tr>";
		echo "</thead>";
		$sql = "SELECT nomB,emplacement,responsable,nomV,age,hdeb,hfin FROM Buvette b,Volontaire v,EstPresent e,EstOuverte o WHERE e.idV=v.idV AND e.idB=b.idB AND b.idB=o.idB AND o.idM=e.idM AND e.idM=$code";
        	$sth = $dbh->query($sql);
        	$result = $sth->fetchAll(PDO::FETCH_ASSOC);
        	$vs = 'vs';
            foreach ($result as $row)
            {
                echo '<tr>';
                echo '<td align="center">'.$row['nomB'].'</td>';
                echo '<td align="center">'.$row['emplacement'].'</td>';
                echo '<td align="center">'.$row['responsable'].'</td>';
                echo '<td align="center">'.$row['nomV'].'</td>';
                echo '<td align="center">'.$row['age'].'</td>';
                echo '<td align="center">'.$row['hdeb'].'</td>';
                echo '<td align="center">'.$row['hfin'].'</td>';
                echo '</tr>';
            }
            echo'</table>';
            $dbh=NULL;*/
	} 
	?>
<?php
	require_once('fonctions.php');
	Footer();
	?>
</body>
</html>