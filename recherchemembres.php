<!DOCTYPE html>
<html>
<?php
	require_once('fonctions.php');
	Menu();
	?>
	<h3 align="center">Entrer pour rechercher un membre</h3>
		<form align="center" id="formRecherche" name="formRecherche" method="post" action="resultrecherchemembres.php">
		<p>
				Âge:
				<br/>
				<input type="text" name="agemb_saisi" id="agemb_saisi" placeholder ="16-50" />
			</p>
			<p>
				Nom:
				<br/> 
				<input type="text" name="nommb_saisi" id="nommb_saisi" placeholder ="Belva Lindgren" />
			</p>
			<p>
				Nombre de participations:
				<br/>
				<input type="text" name="nbpart_saisi" id="nbpart_saisi" placeholder ="Minimum 1 fois" />
			</p>
			<p>
			<label for="responsable">As-t-il été déjà responsable:</label>
			<select id="responsable" name="responsable">
				<option value="-1">N/A</option>
				<option value="1">Oui</option>
				<option value="0">Non</option>
			</select>
			</p>
			<input type=submit value="Valider"/>
		</form>
<?php
	require_once('fonctions.php');
	Footer();
	?>
</body>
</html>