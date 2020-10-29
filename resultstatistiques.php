<!DOCTYPE html>
	<html>
		<?php
			require_once('fonctions.php');
			Menu();
		?>

		<?php
			require_once('fonctions.php');
			if (!empty($_POST['5Vol'])) 
			{		
				TopVolontaires();
			}

			if (!empty($_POST['5Buv'])) 
			{	
				TopBuvettes();
			}

			if (!empty($_POST['BuOuv'])) 
			{	
				$code = $_POST['BuOuv2'];
				StatMatch($code);
			}		 
		?>


		<?php
			require_once('fonctions.php');
			Footer();
		?>

	</html>