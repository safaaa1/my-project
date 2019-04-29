<?PHP
include "../config.php";
//include "../entities/stat.php";

class Livraison_core
 {

	function ajouterLivraison($livraison){
		$sql="INSERT into livraison (id_user,pays,ville,adress,code_postal) values (:id_user,:pays,:ville,:adress,:code_postal)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_user=$livraison->getId_user();
        $pays=$livraison->getPays();
        $ville=$livraison->getVille();
        $adress=$livraison->getAdress();       
        $code_postal=$livraison->getCode_postal();       
        
        //$etat=$commande->getEtat();
		
		$req->bindValue(':id_user',$id_user);
		$req->bindValue(':pays',$pays);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':adress',$adress);
		$req->bindValue(':code_postal',$code_postal);

		//$req->bindValue(':etat',$etat);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function ajouterStat($stat){
		$sql="INSERT into stat (ville) values (:ville)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $ville=$stat->getVille();
       
        //$etat=$commande->getEtat();
		
		$req->bindValue(':ville',$ville);
		

		//$req->bindValue(':etat',$etat);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	


}
?>
