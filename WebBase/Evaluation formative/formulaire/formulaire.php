<!DOCTYPE html>
<html>
<head>
	<title>Donnée du formulaire</title>
</head>
<body>

<?php
	echo "<h1>Données du formulaire</h1>";
	if(isset($_POST['NOM'])&&isset($_POST['EMAIL'])){
		$name = $_POST['NOM'];
		$email = $_POST['EMAIL'];
		$iam = $_POST['JESUIS'];
		$news = $_POST['NEWSLETTER'];
		if($news!=1){
			$news = " non";
		}else
		{	
			$news = " oui";
		}
		// echo $name;
		echo "<table border=\"1px\"><thead><tr><th scope=\"col\">NOM</th> <th scope=\"col\">VALEURS</th></tr> </thead><tbody>";

		echo "<tr><td>NOM</td><td><i>".$name ."</i></td></tr>";
		echo "<tr><td>EMAIL</td><td><i>".$email ."</i></td></tr>";
		echo "<tr><td>JESUIS</td>";
		switch ($iam) {
		 	case 'ETUD':
		 		echo "<td><i>";
				echo "Vous êtes bien un étudiant";
				echo "</i></td>";
				break;
			case 'PARETUD':
				echo "<td><i>";
				echo "un parent d'élève vous êtes sur ? ";
				echo "</i></td>";
				break;
			case 'PROFESSEUR':
				 if(($name != "LAWAREE Xavier")&&($name != "Xavier LAWAREE"))
				 {
					echo "<td><i>";
					echo "Vous n'êtes pas un professeur !!!!!";
					echo "</i></td>";
				}
				else
				{
					echo "<td><i>";
					echo "Bonjour Xavier!";
					echo "</i></td>";
				}
				 break;
			case 'PARTIC':
				echo "<td><i>";
				echo "Bonjour ".$name." vous vous êtes identifié comme particulier";
				echo "</i></td>";
				break;
			case 'PRO':
				echo "<td><i>";
				echo "Bonjour ".$name." vous vous êtes identifié comme professionel";
				echo "</i></td>";
		}
		echo "</tr><tr><td>MESSAGE</td>";
		if(isset($_POST['MESSAGE'])&& $_POST['MESSAGE']!=""){
			echo "<td>";
			echo "<i>".$_POST['MESSAGE'];
			echo "</i></td></tr>";
		}
		echo "<tr><td>NEWSLETTER</td><td><i>".$news."</i></td></tr>";
		echo "</tbody></table>";
		
	}
?>
</body>
</html>
