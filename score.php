<?php 
	require 'db.php';
	
	session_start();
	if(isset($_SESSION['user_id'])){
		$user_id = $_SESSION['user_id'];
		$sql = "select * from user_info where user_id = $user_id";
		$result = mysqli_query($connection, $sql);  
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
		// print_r($row);
		// exit();
		$Name = $row['Name'];
		$c_score = $row['c_score'];
		$java_score = $row['java_score'];
		$python_score = $row['python_score'];
		$dbms_score = $row['dbms_score'];
		$cn_score = $row['cn_score'];
		$os_score = $row['os_score'];
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
    <title>Home - Brand</title>
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
                    <li class="nav-item"><a class="nav-link disabled">WELCOME <?php echo $Name ;?></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="courses.php">COURSES</a></li>
                    <li class="nav-item"><a class="nav-link disabled" href="#scores">SCORE</a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.php">PROFILE</a></li>
					<li class="nav-item"><a class="nav-link" href="signOut.php">SIGN OUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('assets/img/header-bg.jpg');">
        <div class="container"></div>
    </header>
    <section id="scores">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">SCORES</h2>
                    <h3 class="text-muted section-subheading"> </h3>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="card" id="TableSorterCard">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-striped table tablesorter" id="ipi-table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-center">SUBJECT</th>
                                        <th class="text-center">SCORE</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td>C++</td>
                                        <td><?php echo $c_score ;?></td>
                                    </tr>
                                    <tr>
                                        <td>JAVA</td>
                                        <td><?php echo $java_score ;?></td>
                                    </tr>
                                    <tr>
                                        <td>PYTHON</td>
                                        <td><?php echo $python_score ;?></td>
                                    </tr>
                                    <tr>
                                        <td>Database Management System</td>
                                        <td><?php echo $dbms_score ;?></td>
                                    </tr>
                                    <tr>
                                        <td>Computer Networks</td>
                                        <td><?php echo $cn_score ;?></td>
                                    </tr>
                                    <tr>
                                        <td>Operating System</td>
                                        <td><?php echo $os_score ;?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/agency.js"></script>
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