<!DOCTYPE html>
<html>
<?php
	require_once('fonctions.php');
	Menu();
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