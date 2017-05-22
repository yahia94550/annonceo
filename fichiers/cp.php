<?php
/**
Script sql qui va chercher les strings(cp) qui commencent par les lettres 
que l'user commence à saisir ( information renvoyer par jQuery )
Et renvoi a chaque frappe une liste de résultat correspondante ( format Json traiter et afficher par jQuery)
Même pricipe pour ville.php - cp.php - pays.php - kws.php
**/
include '../include/init.php';
$resultat = array();
if (isset($_POST['cp'])) {

	$chiffre = $_POST['cp'];
	$query='SELECT distinct(cp_ville) FROM annonceo.ville WHERE cp_ville LIKE :cp ORDER BY cp_ville  limit 10 ;';
	$stmt = $pdo->prepare($query);
	$stmt->bindValue(':cp',"$chiffre%" , PDO::PARAM_STR);
	$stmt->execute();
	while($mot = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$resultat[] = $mot['cp_ville'];
	}
}
echo json_encode($resultat);
