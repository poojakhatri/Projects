<?php 


	if( $_GET['id'] != -1 ){
		$blogData = $con->getSpecialityBy($_GET['id'])[0]; 
	// echo "<pre>";print_r($blogData);
		$title = $blogData['title'];
		$description = $blogData['description'];
		$content = $blogData['content'];
		  	include_once('specialityNear/header.php'); 

	  	include_once('specialityNear/postn.php');
	}else{
		include_once('post/addPost.php');
	 }
?>