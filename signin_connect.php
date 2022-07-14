<?php
	$Email=$_POST['Email'];
	$Password=$_POST['Password'];
	if($Email=="" || $Password==""){

	echo ("<script LANGUAGE='JavaScript'>
    window.alert('All fields are necessary.');
    window.location.href='sign_in.html';
    </script>");
	}
	require 'db.php';
		$Email = stripcslashes($Email);  
        $Password = stripcslashes($Password);  
        $Email = mysqli_real_escape_string($connection, $Email);  
        $Password = mysqli_real_escape_string($connection, $Password);  
      
	  if($Email!="" || $Password!="")
	  {
		
        $sql = "select * from user_info where Email = '$Email' and Password = '$Password'";  
        $result = mysqli_query($connection, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
		
		// var_dump($row);
        
		if($count == 1){  
	
			session_start();
			$_SESSION['user_id'] = $row['user_id'];
            header("Location: courses.php"); 
        }  
        else{
            	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Invalid Username or Password');
    window.location.href='sign_in.html';
    </script>");
        } 
	  }
?>
