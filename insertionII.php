<!DOCTYPE html>
<html>
	<?php
	require_once('fonctions.php');
	Menu();
	?>
	<?php
	require_once('Connect.php');
	$dbh = doConnect();
	?>
	<form align='center' method='post' action='insertionII.php'>
		<button name='NouvBuv' type='submit' value='Valider' class='button'>Entrer une nouvelle buvette</button>
		<button name='NouvVol' type='submit' value='Valider' class='button'>Entrer un nouveau volontaire</button>
		<button name='NouvMat' type='submit' value='Valider' class='button'>Entrer un nouveau match</button>
		<button name='ModifMat' type='submit' value='Valider' class='button'>Mettre à jour un match</button>
	</form>
	<?php
	if (!empty($_POST['NouvBuv'])) 
			{
				echo "<br>";
				echo "<form method='post' action='insertionII.php'>";
				echo "<fieldset>";
				echo "<legend>Nom de la nouvelle buvette</legend>";
				echo "<label>Nom à 5 caractère: </label><input type='text' name='NomBuv' placeholder='Ex: cavwv'>";
				echo "</fieldset>";
				echo "<fieldset>";
				echo "<legend>Emplacement de la buvette</legend>";
				echo "<select name='EmpBu' id='EmpBu'>";
				$sql = "SELECT DISTINCT emplacement FROM buvette";
            	$sth = $dbh->query($sql);
            	while ($donnees=$sth->fetch())
            	{
            	?>	
            		<option value='<?php echo $donnees['emplacement']; ?>'> <?php echo $donnees['emplacement']; ?></option>
            	<?php	
            	} 
            	echo "</select>";
				echo "</fieldset>";
				echo "<fieldset>";
				echo "<legend>Nom du nouveau responsable</legend>";
				echo "<select name='NomPr' id='NomPr'>";
				$sql = "SELECT * FROM volontaire";
           		$sth = $dbh->query($sql);
            	while ($donnees=$sth->fetch())
            	{
            	?>	
            		<option value='<?php echo $donnees['idV']; ?>'> <?php echo $donnees['nomV']; ?></option>
            	<?php
            	} 
            	echo "</select>";
				echo "</fieldset>";
				echo "<button name='NouvBuv' type='submit' value='Valider'>Valider</button>";
				echo "<input type='reset' name='Annuler'>";
				echo "</form>";
			}
	?>
	<?php
		if (!empty($_POST['NouvVol']))
		{
			echo "<br>";
			echo "<form method='post' action='insertionII.php'>";
			echo "<fieldset>";
			echo "<legend>Entrer le prénom et le nom du nouveau volontaire</legend>";
			echo "<label>Volontaire: </label><input type='text' name='nomvo' placeholder='Ex: Inès MGGQUEEN'>";
			echo "</fieldset>";
			echo "<fieldset>";
			echo "<legend>Entrer l'age du nouveau volontaire</legend>";
			echo "<label>Age: </label><input type='number' name='agevo' min='0' max='100'>";
			echo "</fieldset>";
			echo "<button name='NouvVol' type='submit' value='Valider'>Valider</button>";
			echo "<input type='reset' name='Annuler'>";
			echo "</form>";
		}	  
	?>
	<?php
		if (!empty($_POST['NouvMat']))
		{
			echo "<br>";
			echo "<form method='post' action='insertionII.php'>";
			echo "<fieldset>";
			echo "<legend>Entrer la date du match</legend>";
			echo "<input type='date' name='dateMa'>";
			echo "</fieldset>";
			echo "<fieldset>";
			echo "<legend>Entrer la première équipe</legend>";
			echo "<select name='eq1'>";
	?>
	<?php 
            $sql = "SELECT * FROM Matchs";
            $sth = $dbh->query($sql);
            while ($donnees=$sth->fetch()) 
            {
    ?>
            	<option value="<?php echo $donnees['eqA']; ?>"> <?php echo $donnees['eqA']; ?></option> 
    <?php  
            }
    ?>
    <?php 	
			echo "</select>";
			echo "</fieldset>";
			echo "<fieldset>";
			echo "<legend>Entrer la deuxième équipe</legend>";
			echo "<select name='eq2'>";
	?>
	<?php 
            $sql = "SELECT * FROM Matchs";
            $sth = $dbh->query($sql);
            while ($donnees=$sth->fetch()) 
            {
    ?>
            	<option value="<?php echo $donnees['eqB']; ?>"> <?php echo $donnees['eqB']; ?></option> 
    <?php  
            }
    ?> 
    <?php	
			echo "</select>";
			echo "</fieldset>";
			echo "<button name='NouvMat' type='submit' value='Valider'>Valider</button>";
			echo "<input type='reset' name='Annuler'>";
			echo "</form>";
		}	  
	?>
	<?php
		if (!empty($_POST['ModifMat']))
		{
			echo "<br>";
			echo "<form method='post' action='insertionII.php'>";
			echo "<fieldset>";
			echo "<legend>Entrer l'ancienne date du match</legend>";
			echo "<select name='adateMa'>";
	?>
	<?php 
            $sql = "SELECT dateM FROM Matchs";
            $sth = $dbh->query($sql);
            while ($donnees=$sth->fetch()) 
            {
    ?>
            	<option value="<?php echo $donnees['dateM']; ?>"> <?php echo $donnees['dateM']; ?></option> 
    <?php  
            }
    ?>
    <?php 	
			echo "</select>";
			echo "</fieldset>";
			echo "<fieldset>";
			echo "<legend>Entrer la nouvelle date du match</legend>";
			echo "<input type='date' name='dateMa'>";
			echo "</fieldset>";
			echo "<fieldset>";
			echo "<legend>Entrer la première équipe</legend>";
			echo "<select name='eq1'>";
	?>
	<?php 
            $sql = "SELECT * FROM Matchs";
            $sth = $dbh->query($sql);
            while ($donnees=$sth->fetch()) 
            {
    ?>
            	<option value="<?php echo $donnees['eqA']; ?>"> <?php echo $donnees['eqA']; ?></option> 
    <?php  
            }
    ?>
    <?php 	
			echo "</select>";
			echo "</fieldset>";
			echo "<fieldset>";
			echo "<legend>Entrer la deuxième équipe</legend>";
			echo "<select name='eq2'>";
	?>
	<?php 
            $sql = "SELECT * FROM Matchs";
            $sth = $dbh->query($sql);
            while ($donnees=$sth->fetch()) 
            {
    ?>
            <option value="<?php echo $donnees['eqB']; ?>"> <?php echo $donnees['eqB']; ?></option> 
    <?php  
            }
   ?>
   <?php 	
			echo "</select>";
			echo "</fieldset>";
			echo "<button name='ModifMat' type='submit' value='Valider'>Valider</button>";
			echo "<input type='reset' name='Annuler'>";
			echo "</form>";
	}
	?>
	<?php
	require_once('fonctions.php');
	if (!empty($_POST['NouvBuv']))  
	{
		$nombu = $_POST['NomBuv'];
		$emp = $_POST['EmpBu'];
		$nomres = $_POST['NomPr'];
		InsertBuvette ($nombu,$emp,$nomres);
	}
	if (!empty($_POST['NouvVol']))
	{
		$nomvo = $_POST['nomvo'];
		$voage = $_POST['agevo'];
		InsertVolontaire($nomvo,$voage);
	}
	if (!empty($_POST['NouvMat']))
	{
		$date = $_POST['dateMa'];
		$e1 = $_POST['eq1'];
		$e2 = $_POST['eq2'];
		InsertMatchs($date,$e1,$e2);
	}
	if (!empty($_POST['ModifMat']))
	{
		$adate = $_POST['adateMa'];
		$nouvD = $_POST['dateMa'];
		$e1 = $_POST['eq1'];
		$e2 = $_POST['eq2'];
		UpdateMatchs($adate,$nouvD,$e1,$e2);
	}
	?>
<?php
	require_once('fonctions.php');
	Footer();
	?>
</body>
</html>