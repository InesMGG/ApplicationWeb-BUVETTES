<!DOCTYPE html>
<html>
<?php
	require_once('fonctions.php');
	Menu();
	?>
	<?php
    require_once('fonctions.php');
		if (!empty($_POST['NouvRes'])) 
		{
			$idbu = $_POST['NomBu'];
			$idres = $_POST['NomPr'];
			NouvResponsable($idbu,$idres);
			/*$sql = "UPDATE Buvette SET responsable = $idres WHERE idB = $idbu ";
			$dbh->exec($sql);
			$sql = "INSERT INTO EstOuverte(idB,idM) VALUES ($idbu, $idm)";
			$dbh->exec($sql);
			echo "<h3>Votre demande a été effectuée</h3>";
			echo "<table border = 1px;>";
				echo "<thead>";
					echo "<tr>";
						echo "<td>Identifiant de la buvette</td>";
						echo "<td>Nom de la buvette</td>";
						echo "<td>Emplacemnt de la buvette</td>";
						echo "<td>Identifiant du nouveau responsable</td>";
					echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
					$sql = "SELECT * FROM Buvette WHERE idB = $idbu";
					$sth = $dbh-> query($sql);
					$result = $sth->fetchAll(PDO::FETCH_ASSOC);
					foreach ($result as $row) 
					{
						echo '<tr>';
                		echo '<td align="center">'.$row['idB'].'</td>';
                		echo '<td align="center">'.$row['nomB'].'</td>';
                		echo '<td align="center">'.$row['emplacement'].'</td>';
                		echo '<td align="center">'.$row['responsable'].'</td>';
                		echo '</tr>';
					}
					$dbh = NULL;
				echo "</tbody>";
				echo "</table>";*/
			}
			if (!empty($_POST['NouvVol'])) 
			{
				$idvo = $_POST['NomPr'];
				$idbu = $_POST['NomBu'];
				$idm = $_POST['Mat'];
				$hd = $_POST['hdeb'];
				$hf = $_POST['hfin'];
				NouvVolontaire($idvo,$idbu,$idm,$hd,$hf);
				/*$sql = "INSERT INTO EstPresent(idV,idB,idM,hdeb,hfin) VALUES ($idvo,$idbu,$idm,$hd,$hf)";
				$dbh->exec($sql);
				echo "<h3>Votre demande a été effectuée</h3>";
				echo "<table border = 1px;>";
					echo "<thead>";
						echo "<tr>";
							echo "<td>Identifiant du volontaire</td>";
							echo "<td>Identifiant de la buvette</td>";
							echo "<td>Identifiant du match</td>";
						echo "</tr>";
					echo "</thead>";
					echo "<tbody>";
						$sql = "SELECT * FROM EstPresent WHERE idV = $idvo AND idB = $idbu";
						$sth = $dbh-> query($sql);
						$result = $sth->fetchAll(PDO::FETCH_ASSOC);
						foreach ($result as $row) 
						{
							echo '<tr>';
                			echo '<td align="center">'.$row['idV'].'</td>';
                			echo '<td align="center">'.$row['idB'].'</td>';
                			echo '<td align="center">'.$row['idM'].'</td>';
                			echo '</tr>';
						}
						$dbh = NULL;
				echo "</tbody>";
				echo "</table>";*/
			}
			if (!empty($_POST['BuvOuv'])) 
			{
				$idbu = $_POST['NomBu'];
				$idm = $_POST['Mat'];
				NouvBuvetteOuv($idbu,$idm);
				/*$sql = "INSERT INTO EstOuverte(idB,idM) VALUES ($idbu,$idm)";
				$dbh->exec($sql);
				echo "<h3>Votre demande a été effectuée</h3>";
				echo "<table border = 1px;>";
					echo "<thead>";
						echo "<tr>";
							echo "<td>Identifiant de la buvette</td>";
							echo "<td>Identifiant du match</td>";
						echo "</tr>";
					echo "</thead>";
					echo "<tbody>";
						$sql = "SELECT * FROM EstPresent WHERE idV = $idvo AND idB = $idbu";
						$sth = $dbh-> query($sql);
						$result = $sth->fetchAll(PDO::FETCH_ASSOC);
						foreach ($result as $row) 
						{
							echo '<tr>';
                			echo '<td align="center">'.$row['idB'].'</td>';
                			echo '<td align="center">'.$row['idM'].'</td>';
                			echo '</tr>';
						}
						$dbh = NULL;
				echo "</tbody>";
				echo "</table>";*/
			}
	?>
<?php
	require_once('fonctions.php');
	Footer();
	?>
</body>
</html>