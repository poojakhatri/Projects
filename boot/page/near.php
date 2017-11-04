<?php 


	if( $_GET['id'] != -1 ){
		$blogData = $con->getNearBy($_GET['id'])[0]; 
	// echo "<pre>";print_r($blogData);
		$title = $blogData['title'];
		$description = $blogData['description'];
		$content = $blogData['content'];
		  	include_once('postNear/header.php'); 

	  	include_once('postNear/postn.php');
	}else{
		include_once('post/addPost.php');
	 }
?>