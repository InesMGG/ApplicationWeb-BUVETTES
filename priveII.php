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
		header('Location: insertionII.php');	
	}
	?>
			
	<?php
	if (empty($_POST['pass_saisi']) or $_POST['pass_saisi'] <> "hello") 
	{
		echo "<form align='center' id='formAcces' name='formAcces' method='post' action='priveII.php'>";
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