<?php 
//retrieve the data from database table

//lets pretend this comes from user
if(isset($_GET['prod-id'])){
	$prodId = $_GET['prod-id'];//clothing from nav

	//SQL for web server means nothing more than any other string
	$x = "SELECT * FROM `products` WHERE `code` = ?";

	//prepare() method gets the ready
	//for the datbase server
	$prepared = $pdo->prepare($x);

	//replace placeholders with values
	$prepared->bindParam(1, $prodId);

	//perform database query
	$prepared->execute();

	//extract the data from our $prepared object
	$items = $prepared->fetchAll(PDO::FETCH_ASSOC);
}else{
	$x = "SELECT * FROM `products`";

	//prepare() method gets the ready
	//for the datbase server
	$prepared = $pdo->prepare($x);

	//perform database query
	$prepared->execute();

	//extract the data from our $prepared object
	$items = $prepared->fetchAll(PDO::FETCH_ASSOC);
}
//print_r($items);

?>