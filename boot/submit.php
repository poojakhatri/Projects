<?php
	include_once 'connection/Connection.php';
	
	$con = new Connection();

	$con->insertData( $_POST['name'], $_POST['mobile'], $_POST['email'] );

	echo 'Thank you for the information, we will reach you soon';

?>