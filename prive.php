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
	<br>
	<?php
	if (!empty($_POST['pass_saisi']) and $_POST['pass_saisi'] == "hello") 
	{
	?>	
		<form align='center' method='post' action='prive.php'>
		<button name='NouvBuv' type='submit' value='Valider' class='button'>Entrer une nouvelle buvette</button>
		<button name='NouvVol' type='submit' value='Valider' class='button'>Entrer un nouveau volontaire</button>
		<button name='NouvMat' type='submit' value='Valider' class='button'>Entrer un nouveau match</button>
		<button name='ModifMat' type='submit' value='Valider' class='button'>Mettre à jour un match</button>
		</form>
	<?php		
	}
	?>
	<?php
	if (!empty($_POST['NouvBuv'])) 
			{
				echo "<br>";
				echo "<form method='post' action='insertion.php'>";
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
			echo "<form method='post' action='insertion.php'>";
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
			echo "<form method='post' action='insertion.php'>";
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
			echo "<form method='post' action='insertion.php'>";
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
	if (empty($_POST['pass_saisi']) or $_POST['pass_saisi'] <> "hello") 
	{
		echo "<form align='center' id='formAcces' name='formAcces' method='post' action='prive.php'>";
			if(isset($_POST['pass_saisi']) && $_POST['pass_saisi'] <> "hello")
			{
				echo "<p style='color:red;'>Mot de passe incorrect</p>";
			}
		echo "<h3>Entrer le mot de passe pour accéder aux formulaires privés:</h3>";
		echo "<br/>";
		echo "<input type='password' name='pass_saisi' id='pass_saisi' required />";
		echo "<input type=submit value='Valider'/>";
		echo "</form>	";
	}	
	?>
<?php
	require_once('fonctions.php');
	Footer();
	?>
</body>
</html>