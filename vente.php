<!DOCTYPE html>
<html>
	<head>
		<title>Vente</title>
		<!-- redirection automatique -->
		<meta charset="utf-8" http-equiv="refresh" content="2;stock.php"/>
	</head>
	<body>
<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=site-web;charset=utf8', 'root', 'user');
$bdd->exec('UPDATE Article SET dateVente="' . $_POST['date'] . '" WHERE modele = "' . $_POST['modele'] . '" AND modele IN (SELECT * FROM Article GROUP BY modele)');

echo 'Licenciement effectué, redirection ...';
?>
	</body>
</html>
