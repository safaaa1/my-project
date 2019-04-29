<?PHP
include "../cores/commandeC_core.php";
$commandeC=new CommandeC_core();
if (isset($_POST["id"])){
	$commandeC->supprimerCommande($_POST["id"]);
	header('Location: ui-buttons-valide.php');
}

?>