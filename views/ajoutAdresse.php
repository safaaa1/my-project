<?PHP
include "../entities/livraison.php";
include "../entities/stat.php";
include "../cores/livraison_core.php";



$stat = new Stat($_POST['ville']);

$liv=new Livraison($_POST['id_user'],$_POST['pays'],$_POST['ville'],$_POST['adress'],$_POST['code_postal']);

$livr=new Livraison_core();
$livr->ajouterLivraison($liv);
$livr->ajouterStat($stat);
//header('Location: ../?core=user&action=client_page');
	
?>
 <script>
        Javascript:alert('Adresse ajoutée avec succés !')
        document.location.replace("../?core=user&action=client_page");

        </script>
        <?php



/*}else{
	echo "vérifier les champs";
}
//*/

?>