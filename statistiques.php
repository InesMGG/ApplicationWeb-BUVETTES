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
    <h3 align="center">Choisisser votre type de statistique</h3>
	<form align="center" method="post" action="resultstatistiques.php">
		<button name='5Vol' type='submit' value='Valider' class="button">5 volontaires les plus présents</button>
		<button name='5Buv' type='submit' value='Valider' class="button">5 buvettes ayant mobilisé le plus de volontaires</button>
	</form>
	<br>
	<form align="center" method="post" action="statistiques.php">
		<button name="stat3" type="submit" value="Valider" class="button">Les buvettes ouvertes durant un match</button>
	</form>
	<br>
	<?php 
		if (!empty($_POST['stat3'])) 
		{
			echo "<form align='center' method='post' action='resultstatistiques.php'>";
			echo "<label>Selectionnez un match: </label>";
			echo "<select name='BuOuv2' id='BuOuv2'>";
            $sql = "SELECT * FROM matchs";
            $sth = $dbh->query($sql);
            while ($donnees=$sth->fetch()) 
            {
        ?>
            <option value="<?php echo $donnees['idM']; ?>"> <?php echo $donnees['eqA']; ?> - <?php echo $donnees['eqB']; ?></option> 
        <?php  
            }
        	echo "</select>";	
        	echo "<br>";
			echo "<button name='BuOuv' type='submit' value='Valider' class='button'>Valider</button>";	
			echo "</form>";	
		}
	 ?>
<?php
	require_once('fonctions.php');
	Footer();
	?>
</body>
</html>