<?php 


	if( $_GET['id'] != -1 ){
		$blogData = $con->getTravelBy($_GET['id'])[0]; 
	// echo "<pre>";print_r($blogData);
		$title = $blogData['title'];
		$description = $blogData['description'];
		$content = $blogData['content'];
		  	include_once('travelNear/header.php'); 

	  	include_once('travelNear/postn.php');
	}
?>