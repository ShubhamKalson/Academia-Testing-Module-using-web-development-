<?php 
	require 'db.php';
	
	session_start();
	if(isset($_SESSION['user_id'])){
		$user_id = $_SESSION['user_id'];
		$sql = "select Name,Email from user_info where user_id = $user_id";
		$result = mysqli_query($connection, $sql);  
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
		// print_r($row);
		// exit();
		$Name = $row['Name'];
	}else{
		header("Location: sign_in.html");
		exit();
	}
	  
?>

<!DOCTYPE html>
<html>
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Courses - ATM</title>
    <link rel="icon" 
     type="image/png" 
     href="./assets/img/Logo.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="assets/css/FontAwesome.css">
    <link rel="stylesheet" href="assets/css/Ionicons.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
</head>

<body><nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="courses.php">Academia Testing Module</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link disabled">WELCOME <?php echo $Name;?></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link disabled" href="#courses">COURSES</a></li>
                    <li class="nav-item"><a class="nav-link" href="score.php">SCORE</a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.php">PROFILE</a></li>
                    <li class="nav-item"><a class="nav-link" href="signOut.php">SIGN OUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('assets/img/header-bg.jpg');">
        <div class="container"></div>
    </header>
    <section id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
				 
                    <h2 class="text-uppercase section-heading">COURSES&nbsp;</h2>
                    <h3 class="text-muted section-subheading">The website essentially offers six courses that can aid in both your college preparation and placement. To view these topics, users must first register or sign in. The available topics are :</h3>
					
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
					<img src="assets/img/1.png" width="200" height="200">
                    <h4 class="section-heading">C++&nbsp;</h4>
                    <p class="text-muted">Ten questions in this course revolve around fundamental of C++ topics including constructors, operators, coding challenges and many more.</p>
					<a class="btn btn-dark btn-lg" role="button" href="c++.php">START NOW</a>
                    <p class="text-muted">&nbsp;&nbsp;</p>
                </div>
                <div class="col-md-4">
				<img src="assets/img/2.png" width="200" height="200">
				<h4 class="section-heading">Java</h4>
                    <p class="text-muted">The ten questions in this course revolve around many fundamentals of Java concepts, including objects, functions, and many more.</p>
					<a class="btn btn-dark btn-lg" role="button" href="java.php">START NOW</a>
                    <p class="text-muted">&nbsp;&nbsp;</p>
                </div>
                <div class="col-md-4">
				<img src="assets/img/3.jpg" width="200" height="200">
				<h4 class="section-heading">Python</h4>
                    <p class="text-muted">This course has 10 questions that revolve on several fundamental of Python topics, including objects, operators, expressions, and more.</p><a class="btn btn-dark btn-lg" role="button" href="python.php">START NOW</a>
                    <p class="text-muted">&nbsp;&nbsp;</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
				<img src="assets/img/4.png" width="200" height="200">
				<h4 class="section-heading">DBMS</h4>
                    <p class="text-muted">The course has ten questions centred on several fundamental database management system principles such as SQL commands, datatypes, and many more.</p><a class="btn btn-dark btn-lg" role="button" href="DBMS.php">START NOW</a>
                    <p class="text-muted">&nbsp;&nbsp;</p>
                </div>
                <div class="col-md-4">
				<img src="assets/img/5.jpg" width="200" height="200">
				<h4 class="section-heading">Computer Networks</h4>
                    <p class="text-muted">The course has ten questions centred on several fundamental computer network topics such as layers, servers, and many more.</p><a class="btn btn-dark btn-lg" role="button" href="CN.php">START NOW</a>
                    <p class="text-muted">&nbsp;&nbsp;</p>
                </div>
                <div class="col-md-4">
				<img src="assets/img/6.png" width="200" height="200">
				<h4 class="section-heading">Operating System</h4>
                    <p class="text-muted">This course has ten questions centred on several fundamental operating system principles such as scheduling, and synchronisation, among others.</p><a class="btn btn-dark btn-lg" role="button" href="OS.php">START NOW</a>
                    <p class="text-muted">&nbsp;&nbsp;</p>
                </div>
            </div>
        </div>
    </section>
    <footer class="text-white bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center"><span class="copyright">&nbsp;</span></div>
                <div class="col-md-4 text-center"><span class="copyright">Copyright&nbsp;© Academia Testing Module 2021</span></div>
                <div class="col-md-4 text-center"><span class="copyright">&nbsp;</span></div>
            </div>
        </div>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/agency.js"></script>
    <script src="assets/js/countdown-timer.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-1.js"></script>
    <script src="assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20.js"></script>
    <script src="assets/js/Table-with-search.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>