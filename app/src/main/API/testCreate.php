<?php
$json_in = file_get_contents('php://input');
$in = json_decode($json_in);

try
{
$bdd = new mysqli('localhost', 'root', '','tutorial2');


}catch (Exception $e){die('Erreur : ' . $e->getMessage());}

    	$email=$_GET["email"];
       $sender=$_GET['sender'];
       $categ=$_GET['categ'];

     $a=$_GET['a'];
      $b=$_GET['b'];
       $c=$_GET['c'];
       $d=$_GET['d'];
       $e=$_GET['e'];
        $f=$_GET['f'];
       $g=$_GET['g'];
  
    
	

 $stmt = $bdd->prepare("INSERT INTO `game` (`id`,`etat`, `sender`, `receiver`, `scoresender`, `scorereceiver`, `categ`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`) VALUES (NULL,1,?,?,0,0,?,?,?,?,?,?,?,?);");
        $stmt->bind_param("ssssssssss",$sender,$email,$categ,$a,$b,$c,$d,$e,$f,$g);
        $stmt->execute();



	

	   
	

?>