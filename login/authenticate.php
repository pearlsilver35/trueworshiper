<?php 
	require 'database-config.php';

	session_start();

	$Name = "";
	$Password = "";
	
	if(isset($_POST['Name'])){
		$Name = $_POST['Name'];
	}
	if (isset($_POST['Password'])) {
		$Password = $_POST['Password'];

	}
	
	echo $Name ." : ".$Password;

	$q = 'SELECT * FROM tb1 WHERE Name=:Name AND Password=:Password';

	$query = $dbh->prepare($q);

	$query->execute(array(':Name' => $Name, ':Password' => $Password));


	if($query->rowCount() == 0){
		header('Location: index.php?err=1');
	}else{

		$row = $query->fetch(PDO::FETCH_ASSOC);

		session_regenerate_id();
		$_SESSION['sess_user_id'] = $row['id'];
		$_SESSION['sess_username'] = $row['Name'];
        $_SESSION['sess_userrole'] = $row['Role'];

        echo $_SESSION['sess_userrole'];
		session_write_close();

		if( $_SESSION['sess_userrole'] == "admin"){
			header('Location: ../admin/index.php');
		}else{
			header('Location: index.php?err=3');
		}
		
		
	}


?>