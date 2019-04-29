<?PHP
include "../cores/notification_core.php";
$notif = new Notification_core();
//if (isset($_POST["id"])){
	$notif->supprimerNotif();
?>
	 <script>
        Javascript:alert('Votre commande a été validée !!!!!')
        document.location.replace("../map/user-map.php");
        </script>
		<?php//header('Location: ../?core=user&action=client_page');

//}

?>