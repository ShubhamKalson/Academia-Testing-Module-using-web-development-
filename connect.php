<?php

	$Name=$_POST['Name'];
	$Email=$_POST['Email'];
	$pass1=$_POST['password_1'];
	$pass2=$_POST['password_2'];
	if($Name=="" || $Email=="" || $pass1==""|| $pass2==""){
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('All fields are necessary');
    window.location.href='Sign_up.php';
    </script>");
	}
	
	else if($pass1==$pass2)
		$final_password=$pass1;
	
	else if($pass1!=$pass2){
		echo ("<script LANGUAGE='JavaScript'>
    window.alert('Password and Confirm Password are not same.');
    window.location.href='Sign_up.php';
    </script>");
	}
	
	require 'db.php';
	
		
		if($pass1==$pass2 && ($Name!="" && $Email!="" && $pass1!=""))
		{
		$sql_query ="insert into user_info values('','$Name', '$Email', '$final_password',0,0,0,0,0,0)";
		
		if(!mysqli_query($connection,$sql_query))
		{
			echo '<script>alert("Try Again")</script>';
		}
		else
		{
			echo ("<script LANGUAGE='JavaScript'>
			window.alert('ACCOUNT CREATED. Welcome to Academia Testing Module.');
			window.location.href='sign_in.html';
			</script>");
		}
		}
		
?>
