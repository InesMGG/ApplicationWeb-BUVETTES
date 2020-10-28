<!DOCTYPE html>
<html>
	<?php
	require_once('fonctions.php');
	Menu();
	?>
	<form align="center" method="post" action="affectations.php">
			<button name='NouvRes' type='submit' value='Valider' class="button">Entrer un nouveau responsable</button>
			<button name='NouvVol' type='submit' value='Valider'class="button">Entrer un nouveau volontaire à une buvette </button>
			<button name='BuvOuv' type='submit' value='Valider'class="button">Entrer une nouvelle buvette ouverte</button>
	</form>
	<?php
		if (!empty($_POST['NouvRes'])) 
		{
			echo "<form align='center' method='post'>";
			echo "<label>Sélectionner un match</label><br>";	
			echo "<select name='formMatch' onchange='this.form.submit()''>";	
			require_once('Connect.php');
			$dbh = doConnect();
			$sql = "SELECT * FROM matchs";
			$sth = $dbh ->query($sql);
			while($donnees=$sth->fetch())
				{
				?>
					<option value="<?php echo $donnees['idM']; ?>"><?php echo $donnees['dateM']; ?> : <?php echo $donnees['eqA']; ?> vs <?php echo $donnees['eqB']; ?></option>
				<?php	
				}
			echo "</select>";
			echo "</form>";
			echo "<br>";
		}
	?>
	<?php
		require_once('fonctions.php');
			if(isset($_POST['formMatch']))
			{
				$cm = $_POST['formMatch'];
				AfficheRes($cm);
				require_once('Connect.php');
				$dbh = doConnect();
				echo "<br>";
				echo "Identifiant du match: $cm";
				echo "<form method='post' action='confirmation.php'>";
				echo "<fieldset>";
				echo "<legend>Nom du nouveau responsable</legend>";
				echo "<select name='NomPr'>";
				$sql = "SELECT * FROM volontaire";
            	$sth = $dbh->query($sql);
            	while ($donnees=$sth->fetch()) 
            	{
        		?>
            		<option value="<?php echo $donnees['idV']; ?>"> <?php echo $donnees['nomV']; ?></option> 
        		<?php  
            	}
        		?> 
    <?php	
    			echo "</select>";
				echo "</fieldset>";
				echo "<fieldset>";
				echo "<legend>Nom de la buvette</legend>";
				echo "<select name='NomBu'>";	
				$sql = "SELECT * FROM buvette";
            	$sth = $dbh->query($sql);
            	while ($donnees=$sth->fetch()) 
            	{
        		?>
            		<option value="<?php echo $donnees['idB']; ?>"> <?php echo $donnees['nomB']; ?></option>
        		<?php  
            	}
        		?> 
    <?php
        		echo "</select><br>";
				echo "</fieldset>";
				echo "<button name='NouvRes' type='submit' value='Valider'>Valider</button>";
				echo "<input type='reset' name='Annuler'>";	
				echo "</form>";	
			}
	?>	
	<?php
		if (!empty($_POST['NouvVol'])) 
		{
			echo "<form align='center' method='post'>";
			echo "<label>Sélectionner un match</label><br>";	
			echo "<select name='formMatch2' onchange='this.form.submit()''>";	
			require_once('Connect.php');
			$dbh = doConnect();
			$sql = "SELECT * FROM matchs";
			$sth = $dbh ->query($sql);
			while($donnees=$sth->fetch())
				{
				?>
					<option value="<?php echo $donnees['idM']; ?>"><?php echo $donnees['dateM']; ?> : <?php echo $donnees['eqA']; ?> vs <?php echo $donnees['eqB']; ?></option>
				<?php	
				}
			echo "</select>";
			echo "</form>";
			echo "<br>";
		}
	?>
	<?php
		require_once('fonctions.php');
			if(isset($_POST['formMatch2']))
			{
				$cm = $_POST['formMatch2'];
				AfficheVol($cm);
				require_once('Connect.php');
				$dbh = doConnect();
				echo "<br>";
				echo "Identifiant du match: $cm";
				echo "<form method='post' action='confirmation.php'>";
				echo "<fieldset>";
				echo "<legend>Nom du volontaire</legend>";
				echo "<select name='NomPr'>";
				$sql = "SELECT * FROM volontaire";
            	$sth = $dbh->query($sql);
            	while ($donnees=$sth->fetch()) 
            	{
        		?>
            		<option value="<?php echo $donnees['idV']; ?>"> <?php echo $donnees['nomV']; ?></option> 
        		<?php  
            	}
        		?> 
    <?php	
    			echo "</select>";
				echo "</fieldset>";
				echo "<fieldset>";
				echo "<legend>Nom de la buvette</legend>";
				echo "<select name='NomBu'>";	
				$sql = "SELECT * FROM buvette";
            	$sth = $dbh->query($sql);
            	while ($donnees=$sth->fetch()) 
            	{
        		?>
            		<option value="<?php echo $donnees['idB']; ?>"> <?php echo $donnees['nomB']; ?></option>
        		<?php  
            	}
        		?> 
    <?php
        		echo "</select><br>";
				echo "</fieldset>";
				echo "<fieldset>";
				echo "<legend>Les Horaires</legend>";
				echo "<label> Heure de début: </label><input type='number' min = 0 max = 24 name='hdeb'/>";
				echo "<br>";	
				echo "<label> Heure de fin: </label><input type='number' min = 0 max = 24 name='hfin'/>";
				echo "</fieldset>";
				echo '<input required type="hidden" name="Mat" value="'.$cm.'">';
				echo "<button name='NouvVol' type='submit' value='Valider'>Valider</button>";
				echo "<input type='reset' name='Annuler'>";	
				echo "</form>";	
			}
	?>
	<?php
		if (!empty($_POST['BuvOuv'])) 
		{
			echo "<form align='center' method='post'>";
			echo "<label>Sélectionner un match</label><br>";	
			echo "<select name='formMatch3' onchange='this.form.submit()''>";	
			require_once('Connect.php');
			$dbh = doConnect();
			$sql = "SELECT * FROM matchs";
			$sth = $dbh ->query($sql);
			while($donnees=$sth->fetch())
				{
				?>
					<option value="<?php echo $donnees['idM']; ?>"><?php echo $donnees['dateM']; ?> : <?php echo $donnees['eqA']; ?> vs <?php echo $donnees['eqB']; ?></option>
				<?php	
				}
			echo "</select>";
			echo "</form>";
			echo "<br>";
		}
	?>
	<?php
		require_once('fonctions.php');
			if(isset($_POST['formMatch3']))
			{
				$cm = $_POST['formMatch3'];
				AfficheBuvOuv($cm);
				require_once('Connect.php');
				$dbh = doConnect();
				echo "<br>";
				echo "Identifiant du match: $cm";
				echo "<form method='post' action='confirmation.php'>";
				echo "<fieldset>";
				echo "<legend>Nom de la buvette</legend>";
				echo "<select name='NomBu'>";
				$sql = "SELECT * FROM buvette";
            	$sth = $dbh->query($sql);
            	while ($donnees=$sth->fetch()) 
            	{
        		?>
            		<option value="<?php echo $donnees['idB']; ?>"> <?php echo $donnees['nomB']; ?></option> 
        		<?php  
            	}
        		?> 
    <?php	
    			echo "</select>";
    			echo "</fieldset>";
    			echo '<input required type="hidden" name="Mat" value="'.$cm.'">';
				echo "<button name='BuvOuv' type='submit' value='Valider'>Valider</button>";
				echo "<input type='reset' name='Annuler'>";	
				echo "</form>";	
			}
	?>
	<?php
	require_once('fonctions.php');
	Footer();
	?>			
</body>
</html>