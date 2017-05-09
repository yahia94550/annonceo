# Dans le dossier include veuillez créer un fichier connexion.php
# qui doit contenir les informations suivantes :
$options = [
  PDO::ATTR_ERRMODE =>
  PDO::ERRMODE_WARNING,
  PDO::MYSQL_ATTR_INIT_COMMAND =>
  'SET NAMES utf8',
  PDO::ATTR_DEFAULT_FETCH_MODE =>
  PDO::FETCH_ASSOC
];
define("PDO_HOST", "127.0.0.1");
define("PDO_DBBASE", "LE_NOM_DE_VOTRE_BASE_DE_DONNEE");
define("PDO_USER", "LE_NOM_DE_USER");
define("PDO_PW", "VOTRE_PASSWORD");
try{
$pdo = new PDO(
"mysql:host=" . PDO_HOST . ";".
"dbname=" . PDO_DBBASE, PDO_USER, PDO_PW, $options );
}
catch (PDOException $e){
print "Erreur !: " . $e->getMessage() . "<br/>";
die();
}

# annonceo
# annonceo
