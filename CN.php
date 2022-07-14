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
    <title>CN - ATM</title>
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
                    <li class="nav-item"><a class="nav-link disabled" href="sign_in.html">WELCOME <?= $Name; ?></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="courses.php">COURSES</a></li>
                    <li class="nav-item"><a class="nav-link" href="score.php">SCORE</a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.php">PROFILE</a></li>
                </ul>
            </div>
        </div>
    </nav>
        
	

    <section id="courses">
	<div class="container">
		</div>
     <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Computer Network Questions</h2>
                    <h3 class="text-muted section-subheading"><b>NOTE :</b> All questions are required. There are no negative points. Each question is worth ten points.</h3>
      </div>
		<div class="container">
                   <form method="POST" action="ScoreUpload.php">
				   
				   <h6>Question 1 :&nbsp; DHCP is the abbreviation of __________.<br></h6>						
 							<input type="radio" id="Q1O1" class="form-check-input" name="Q1" value="Dynamic Hyper Control Protocol" required="">
									<label class="form-check-label" for="Q1O1">Dynamic Hyper Control Protocol</label><br>
							<input type="radio" id="Q1O2" class="form-check-input" name="Q1" value="Dynamic Hyper Configuration Protocol">
									<label class="form-check-label" for="Q1O2">Dynamic Hyper Configuration Protocol</label><br>
							<input type="radio" id="Q1O3" class="form-check-input" name="Q1" value="Dynamic Host Control Protocol">
 									<label class="form-check-label" for="Q1O3">Dynamic Host Control Protocol</label><br>
 							<input type="radio" id="Q1O4" class="form-check-input" name="Q1" value="Dynamic Host Configuration Protocol">
 									<label class="form-check-label" for="Q1O4">Dynamic Host Configuration Protocol</label>
								<!-- 
									d
									-->
				<br><br>
				 <h6>Question 2 :&nbsp; IPv4 address is __________.<br></h6>						
 							<input type="radio" id="Q2O1" class="form-check-input" name="Q2" value="8 bit" required="">
									<label class="form-check-label" for="Q2O1">8 bit</label><br>
							<input type="radio" id="Q2O2" class="form-check-input" name="Q2" value="32 bit">
									<label class="form-check-label" for="Q2O2">32 bit</label><br>
							<input type="radio" id="Q2O3" class="form-check-input" name="Q2" value="16 bit">
 									<label class="form-check-label" for="Q2O3">16 bit</label><br>
 							<input type="radio" id="Q2O4" class="form-check-input" name="Q2" value="64 bit">
 									<label class="form-check-label" for="Q2O4">64 bit</label>
								<!-- 
									b
									-->
				<br><br>
				<h6>Question 3 :&nbsp; Ad-hoc networks are also called as __________.<br></h6>						
  							<input type="radio" id="Q3O1" class="form-check-input" name="Q3" value="MAN" required="">
  									<label class="form-check-label" for="Q3O1">MAN</label><br>
  							<input type="radio" id="Q3O2" class="form-check-input" name="Q3" value="MANET">
  									<label class="form-check-label" for="Q3O2">MANET</label><br>
  							<input type="radio" id="Q3O3" class="form-check-input" name="Q3" value="LAN">
  									<label class="form-check-label" for="Q3O3">LAN</label><br>
  							<input type="radio" id="Q3O4" class="form-check-input" name="Q3" value="LANET">
  									<label class="form-check-label" for="Q3O4">LANET</label>
									<!-- 
									b
									-->
				<br><br>

				<h6>Question 4 :&nbsp; An example for dynamic routing algorithm is __________.<br></h6>						
  							<input type="radio" id="Q4O1" class="form-check-input" name="Q4" value="Shortest path" required="">
  									<label class="form-check-label" for="Q4O1">Shortest path</label><br>
  							<input type="radio" id="Q4O2" class="form-check-input" name="Q4" value="Flooding">
  									<label class="form-check-label" for="Q4O2">Flooding</label><br>
  							<input type="radio" id="Q4O3" class="form-check-input" name="Q4" value="Dijkstra">
  									<label class="form-check-label" for="Q4O3">Dijkstra</label><br>
  							<input type="radio" id="Q4O4" class="form-check-input" name="Q4" value="Distance vector">
  									<label class="form-check-label" for="Q4O4">Distance vector</label>
									<!-- 
									d
									-->
				<br><br>

				<h6>Question 5 :&nbsp;  If a computer on a network provides shared resources for others to use, it is called __________.<br></h6>				
				
  							<input type="radio" id="Q5O1" class="form-check-input" name="Q5" value="Server" required="">
  									<label class="form-check-label" for="Q5O1">Server</label><br>
  							<input type="radio" id="Q5O2" class="form-check-input" name="Q5" value="Client">
  									<label class="form-check-label" for="Q5O2">Client</label><br>
  							<input type="radio" id="Q5O3" class="form-check-input" name="Q5" value="Mainframe">
  									<label class="form-check-label" for="Q5O3">Mainframe</label><br>
  							<input type="radio" id="Q5O4" class="form-check-input" name="Q5" value="Microcomputer">
  									<label class="form-check-label" for="Q5O4">Microcomputer</label>
									<!-- 
									a
									-->
				<br><br>

				<h6>Question 6 :&nbsp; For large networks, __________ topology is used.<br></h6>			
						
  							<input type="radio" id="Q6O1" class="form-check-input" name="Q6" value="Bus" required="">
  									<label class="form-check-label" for="Q6O1">Bus</label><br>
  							<input type="radio" id="Q6O2" class="form-check-input" name="Q6" value="Ring">
  									<label class="form-check-label" for="Q6O2">Ring</label><br>
  							<input type="radio" id="Q6O3" class="form-check-input" name="Q6" value="Star">
  									<label class="form-check-label" for="Q6O3">Star</label><br>
  							<input type="radio" id="Q6O4" class="form-check-input" name="Q6" value="Irregular">
  									<label class="form-check-label" for="Q6O4">Irregular</label>
									<!-- 
									c
									-->
				<br><br>

				<h6>Question 7 :&nbsp; X.25 is an example of __________ network.<br></h6>						
  							<input type="radio" id="Q7O1" class="form-check-input" name="Q7" value="Packet switched" required="">
  									<label class="form-check-label" for="Q7O1"> Packet switched</label><br>
  							<input type="radio" id="Q7O2" class="form-check-input" name="Q7" value=" Circuit switched">
  									<label class="form-check-label" for="Q7O2"> Circuit switched</label><br>
  							<input type="radio" id="Q7O3" class="form-check-input" name="Q7" value=" Frame relay">
  									<label class="form-check-label" for="Q7O3">Frame relay</label><br>
  							<input type="radio" id="Q7O4" class="form-check-input" name="Q7" value="Ring based">
  									<label class="form-check-label" for="Q7O4">Ring based</label>
									<!-- 
									a
									-->
				<br><br>

				<h6>Question 8 :&nbsp;  Terminators are used in __________ topology.<br></h6>						
  							<input type="radio" id="Q8O1" class="form-check-input" name="Q8" value="Bus" required=""> 
  									<label class="form-check-label" for="Q8O1">Bus</label><br>
  							<input type="radio" id="Q8O2" class="form-check-input" name="Q8" value="Ring">
  									<label class="form-check-label" for="Q8O2">Ring</label><br>
  							<input type="radio" id="Q8O3" class="form-check-input" name="Q8" value="Star">
  									<label class="form-check-label" for="Q8O3">Star</label><br>
  							<input type="radio" id="Q8O4" class="form-check-input" name="Q8" value="Irregular">
  									<label class="form-check-label" for="Q8O4">Irregular</label>
									<!-- 
									a
									-->
				<br><br>

				<h6>Question 9 :&nbsp;_________ layer decides which physical path the data will take.<br></h6>						
  							<input type="radio" id="Q9O1" class="form-check-input" name="Q9" value="Network" required="">
  									<label class="form-check-label" for="Q9O1">Network</label><br>
  							<input type="radio" id="Q9O2" class="form-check-input" name="Q9" value="Transport">
  									<label class="form-check-label" for="Q9O2">Transport</label><br>
  							<input type="radio" id="Q9O3" class="form-check-input" name="Q9" value="Physical">
  									<label class="form-check-label" for="Q9O3">Physical</label><br>
  							<input type="radio" id="Q9O4" class="form-check-input" name="Q9" value="Data Link">
  									<label class="form-check-label" for="Q9O4">Data Link</label>
									<!-- 
									c
									-->
				<br><br>
				<h6>Question 10 :&nbsp; Print server uses spool which is a __________ that holds data before it is sent to the printer?<br></h6>						
  							<input type="radio" id="Q10O1" class="form-check-input" name="Q10" value="Queue" required="">
  									<label class="form-check-label" for="Q10O1">Queue</label><br>
  							<input type="radio" id="Q10O2" class="form-check-input" name="Q10" value="Buffer">
  									<label class="form-check-label" for="Q10O2">Buffer</label><br>
  							<input type="radio" id="Q10O3" class="form-check-input" name="Q10" value="Node">
  									<label class="form-check-label" for="Q10O3">Node</label><br>
  							<input type="radio" id="Q10O4" class="form-check-input" name="Q10" value="Ring">
  									<label class="form-check-label" for="Q10O4">Ring</label>
									<!-- 
									b
									-->
				<br><br>
				<input type="hidden" id="scored" name="scored"/>
				<input type="hidden" id="coursename" value="cn" name="courseName"/>
				<center><button class="btn btn-primary btn-lg" id="sub" onclick="show()">Submit</button></center>
					</form>
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
    </footer>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/agency.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-1.js"></script>
    <script src="assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20.js"></script>
    <script src="assets/js/Table-with-search.js"></script>
<script>
	function show() {
		var total_Score=0;
		
		var Selected1 = document.querySelector( 'input[name="Q1"]:checked');   	
		{
		if(Selected1.value!=null) {  
			if(Selected1.value=="Dynamic Host Configuration Protocol") {   
			 total_Score=total_Score+10;
		}	
		}
		}		
		var Selected2 = document.querySelector( 'input[name="Q2"]:checked');   
		{
		if(Selected2.value!=null) {  
				if(Selected2.value=="32 bit") {   
				total_Score=total_Score+10;	
		}
		}
		}
		
		var Selected3 = document.querySelector( 'input[name="Q3"]:checked');   
		{
		if(Selected3.value!=null) {  
				if(Selected3.value=="MANET") {   
				total_Score=total_Score+10;
			  
		}
		}
		}
		var Selected4 = document.querySelector( 'input[name="Q4"]:checked');   
		{
		if(Selected4.value!=null) {  
				if(Selected4.value=="Distance vector") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected5 = document.querySelector( 'input[name="Q5"]:checked');   
		{
		if(Selected5.value!=null) {  
				if(Selected5.value=="Server") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected6 = document.querySelector( 'input[name="Q6"]:checked');   
		{
		if(Selected6.value!=null) {  
				if(Selected6.value=="Star") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected7 = document.querySelector( 'input[name="Q7"]:checked');   
		{
		if(Selected7.value!=null) {  
				if(Selected7.value=="Packet switched") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected8 = document.querySelector( 'input[name="Q8"]:checked');   
		{
		if(Selected8.value!=null) {  
				if(Selected8.value=="Bus") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected9 = document.querySelector( 'input[name="Q9"]:checked');   
		{
		if(Selected9.value!=null) {  
				if(Selected9.value=="Physical") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected10 = document.querySelector( 'input[name="Q10"]:checked');   
		{
		if(Selected10.value!=null) {  
				if(Selected10.value=="Buffer") {   
				total_Score=total_Score+10;		
		}
		}
		}

		document.getElementById('scored').value = total_Score;	
        }

	</script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>