<?php
require 'db.php';
	
	
	session_start();
	
	if(isset($_SESSION['user_id'])){
		$user_id = $_SESSION['user_id'];
		$score = $_POST['scored'];
		$course = $_POST['courseName'];
		
		if($course == "java"){
			$sql_query ="UPDATE user_info SET java_score = $score WHERE user_id = $user_id";
		
			if(!mysqli_query($connection,$sql_query))
			{
				echo ("<script LANGUAGE='JavaScript'>
				window.alert('Something went wrong');
				window.location.href='sign_in.html';
				</script>");
			}
			else
			{
				echo ("<script LANGUAGE='JavaScript'>
				window.alert('Well done! You scored : '+$score+'/100');
				window.location.href='score.php';
				</script>");
			}
		}
		if($course == "cn"){
			$sql_query ="UPDATE user_info SET cn_score = $score WHERE user_id = $user_id";
			
			if(!mysqli_query($connection,$sql_query))
			{
				echo ("<script LANGUAGE='JavaScript'>
				window.alert('Something went wrong');
				window.location.href='sign_in.html';
				</script>");
			}
			else
			{
				echo ("<script LANGUAGE='JavaScript'>
				window.alert('Well done! You scored : '+$score+'/100');
				window.location.href='score.php';
				</script>");
			}
		}
		if($course == "c"){
			$sql_query ="UPDATE user_info SET c_score = $score WHERE user_id = $user_id";
		
			if(!mysqli_query($connection,$sql_query))
			{
				echo ("<script LANGUAGE='JavaScript'>
				window.alert('Something went wrong');
				window.location.href='sign_in.html';
				</script>");
			}
			else
			{
				echo ("<script LANGUAGE='JavaScript'>
				window.alert('Well done! You scored : '+$score+'/100');
				window.location.href='score.php';
				</script>");
			}
		}
		if($course == "dbms"){
			$sql_query ="UPDATE user_info SET dbms_score = $score WHERE user_id = $user_id";
		
			if(!mysqli_query($connection,$sql_query))
			{
				echo ("<script LANGUAGE='JavaScript'>
				window.alert('Something went wrong');
				window.location.href='sign_in.html';
				</script>");
			}
			else
			{
				echo ("<script LANGUAGE='JavaScript'>
				window.alert('Well done! You scored : '+$score+'/100');
				window.location.href='score.php';
				</script>");
			}
		}
		if($course == "os"){
			$sql_query ="UPDATE user_info SET os_score = $score WHERE user_id = $user_id";
		
			if(!mysqli_query($connection,$sql_query))
			{
				echo ("<script LANGUAGE='JavaScript'>
				window.alert('Something went wrong');
				window.location.href='sign_in.html';
				</script>");
			}
			else
			{
				echo ("<script LANGUAGE='JavaScript'>
				window.alert('Well done! You scored : '+$score+'/100');
				window.location.href='score.php';
				</script>");
			}
		}
		if($course == "python"){
			$sql_query ="UPDATE user_info SET python_score = $score WHERE user_id = $user_id";
		
			if(!mysqli_query($connection,$sql_query))
			{
				echo ("<script LANGUAGE='JavaScript'>
				window.alert('Something went wrong');
				window.location.href='sign_in.html';
				</script>");
			}
			else
			{
				echo ("<script LANGUAGE='JavaScript'>
				window.alert('Well done! You scored : '+$score+'/100');
				window.location.href='score.php';
				</script>");
			}
		}
		
		
	}else{
		header("Location: sign_in.html");
		exit();
	}
?>