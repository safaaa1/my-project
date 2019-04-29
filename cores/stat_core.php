<?PHP
include "../config.php";


class Stat_core
 {

	function afficherStat(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT ville,sum(nbr) FROM  stat GROUP BY ville";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


}

?>