<?php 

	$blogId = false;

	if( isset($_POST['title']) ){
		$title = $_POST['title'];
		$desc = $_POST['description'];
		$content = $_POST['content'];
		$blogId = $con->addBlog( $title, $desc, $content );
	}else{
		if( $_GET['id'] != -1 ){
			$blogId = $_GET['id'];
		}
	}

	if( $blogId !== false ){
		$blogData = $con->getBlog($blogId)[0]; 
		// echo "<pre>";print_r($blogData);
		$title = $blogData['title'];
		$description = $blogData['description'];
		$content = $blogData['content'];
	  	include_once('post/header.php'); 
	  	include_once('post/postn.php');

	}else{
		include_once('post/addPost.php');
	}
?>