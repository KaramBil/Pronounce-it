<?php
$json_in = file_get_contents('php://input');
$in = json_decode($json_in);

try
{
$bdd = new mysqli('localhost', 'root', '','tutorial2');


}catch (Exception $e){die('Erreur : ' . $e->getMessage());}

    
       $receiver = $_GET['rec'];

	

 $stmt = $bdd->prepare("UPDATE `users` SET `invited` = '0' WHERE `users`.`email` = ?; ");
        $stmt->bind_param("s",$receiver);
         $stmt->execute();


 $stmt = $bdd->prepare("UPDATE `users` SET `sender` = null WHERE `users`.`email` = ?; ");
        $stmt->bind_param("s",$receiver);
		$stmt->execute();

		 $stmt = $bdd->prepare("UPDATE `users` SET `categ` = 0 WHERE `users`.`email` = ?; ");
        $stmt->bind_param("s",$receiver);
		$stmt->execute();


	

	   
	

?>