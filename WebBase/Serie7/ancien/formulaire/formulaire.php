<!DOCTYPE html>
<html>
<head>
	<title>Donnée du formulaire</title>
</head>
<body>

<?php
	echo "<h1>Données du formulaire</h1>";
	if(isset($_POST['NOM']))){
		$name = $_POST['NOM'];
		$prenom = $_POST['PRENOM'];
		$gender = $_POST['GENDER'];
		
		// echo $name;
		echo "<table border=\"1px\"><thead><tr><th scope=\"col\">NOM</th> <th scope=\"col\">VALEURS</th></tr> </thead><tbody>";

		echo "<tr><td>NOM</td><td><i>".$name ."</i></td></tr>";
		echo "<tr><td>PRENOM</td><td><i>".$prenom ."</i></td></tr>";
		echo "<tr><td>NEWSLETTER</td><td><i>".$gender."</i></td></tr>";
		echo "</tbody></table>";
		
	}
?>
</body>
</html>
