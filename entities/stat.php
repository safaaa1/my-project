<?PHP
class Stat
{
	private $ville;
	private $nbr;



	function __construct($ville){
		
		$this->ville=$ville;
		

		//$this->etat=$etat;
	}
	
	function getVille(){
		return $this->ville;
	}

	function getNbr(){
		return $this->nbr;
	}

}

?>