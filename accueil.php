<!DOCTYPE html>
<html>
	<?php
	require_once('fonctions.php');
	Menu();
	?>
	<?php
		require_once('Connect.php');
		$dbh = doConnect();
		$sql = "SELECT idE, pays from equipe";
		$sth = $dbh->query($sql);
		$result = $sth->fetchAll(PDO::FETCH_ASSOC);
		$pays = null;
		if(isset($_POST['formEquipes'])){
			$pays = $_POST['formEquipes'];
		}
		$dbh = null;
	?>
	<br/><br/>
	<form align="center" method="post" action="" name="formacceuil">
		<label for='formEquipes'><h3>Sélectionner une équipe pour avoir ses matchs:</h3></label><br>
		<select name="formEquipes" onchange="this.form.submit()">
			<?php
				foreach ($result as $row) {
					echo '<option'.(($pays == $row['pays'] ) ? ' selected ' : ' ').'value="'.$row['pays'].'">'.$row['pays'].'</option>';
				}
			?>
		</select>
	</form>

	<?php
		require_once('fonctions.php');
		$equipe = null;
		if(isset($_POST['formEquipes'])){
			$equipe = $_POST['formEquipes'];
			AfficheMatch($equipe);
		}
	?>
	<?php
	require_once('fonctions.php');
	Footer();
	?>
</body>
</html>