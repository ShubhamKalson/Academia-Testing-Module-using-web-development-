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
    <title>OS - ATM</title>
    <link rel="icon" 
     type="image/png" 
     href="./assets/img/Logo.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Ludens---1-Index-Table-with-Search--Sort-Filters-v20.css">
    <link rel="stylesheet" href="assets/css/Table-with-search-1.css">
    <link rel="stylesheet" href="assets/css/Table-with-search.css">
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
                    <h2 class="text-uppercase section-heading">Operating System Questions</h2>
                    <h3 class="text-muted section-subheading"><b>NOTE :</b> All questions are required. There are no negative points. Each question is worth ten points.</h3>
      </div>
		<div class="container">
         
				   <form method="POST" action="ScoreUpload.php">
				   <h6>Question 1 :&nbsp; Which one of the following is true?<br></h6>						
 							<input type="radio" id="Q1O1" class="form-check-input" name="Q1" value="Kernel remains in the memory during the entire computer session." required>
									<label class="form-check-label" for="Q1O1">Kernel remains in the memory during the entire computer session.</label><br>
							<input type="radio" id="Q1O2" class="form-check-input" name="Q1" value="Kernel is the last part of operating system to load into memory during booting." >
									<label class="form-check-label" for="Q1O2">Kernel is the last part of operating system to load into memory during booting.</label><br>
							<input type="radio" id="Q1O3" class="form-check-input" name="Q1" value=" Kernel is made of various modules which cannot be loaded in running operating system.
							">
 									<label class="form-check-label" for="Q1O3"> Kernel is made of various modules which cannot be loaded in running operating system.
									</label><br>
 							<input type="radio" id="Q1O4" class="form-check-input" name="Q1" value="All of the above." >
 									<label class="form-check-label" for="Q1O4">All of the above.
									</label>
								<!-- 
									a
									-->
				<br><br>
				 <h6>Question 2 :&nbsp; Resource management in operating system can be done by:<br></h6>						
 							<input type="radio" id="Q2O1" class="form-check-input" name="Q2" value="Scheduling" required>
									<label class="form-check-label" for="Q2O1">Scheduling</label><br>
							<input type="radio" id="Q2O2" class="form-check-input" name="Q2" value="Time division multiplexing" >
									<label class="form-check-label" for="Q2O2">Time division multiplexing</label><br>
							<input type="radio" id="Q2O3" class="form-check-input" name="Q2" value="both (a) and (b)">
 									<label class="form-check-label" for="Q2O3">both (a) and (b)</label><br>
 							<input type="radio" id="Q2O4" class="form-check-input" name="Q2" value="None of the above" >
 									<label class="form-check-label" for="Q2O4">None of the above</label>
								<!-- 
									b
									-->
				<br><br>
				<h6>Question 3 :&nbsp; Advantages of timesharing operating systems are __________?<br></h6>						
  							<input type="radio" id="Q3O1" class="form-check-input" name="Q3" value="Provide advantage of quick response" required>
  									<label class="form-check-label" for="Q3O1">Provide advantage of quick response</label><br>
  							<input type="radio" id="Q3O2" class="form-check-input" name="Q3" value="Reduces CPU idle time">
  									<label class="form-check-label" for="Q3O2">Reduces CPU idle time</label><br>
  							<input type="radio" id="Q3O3" class="form-check-input" name="Q3" value="Avoids duplication of software">
  									<label class="form-check-label" for="Q3O3">Avoids duplication of software</label><br>
  							<input type="radio" id="Q3O4" class="form-check-input" name="Q3" value="All of the above">
  									<label class="form-check-label" for="Q3O4">All of the above</label>
									<!-- 
									d
									-->
				<br><br>

				<h6>Question 4 :&nbsp; Difference between Long term scheduler and Short term scheduler is?<br></h6>						
  							<input type="radio" id="Q4O1" class="form-check-input" name="Q4" value="The length of their queues" required>
  									<label class="form-check-label" for="Q4O1">The length of their queues</label><br>
  							<input type="radio" id="Q4O2" class="form-check-input" name="Q4" value="The type of processes they schedule">
  									<label class="form-check-label" for="Q4O2">The type of processes they schedule</label><br>
  							<input type="radio" id="Q4O3" class="form-check-input" name="Q4" value="The frequency of their execution">
  									<label class="form-check-label" for="Q4O3">The frequency of their execution</label><br>
  							<input type="radio" id="Q4O4" class="form-check-input" name="Q4" value="All of the above">
  									<label class="form-check-label" for="Q4O4">All of the above</label>
									<!-- 
									c
									-->
				<br><br>

				<h6>Question 5 :&nbsp; If a process is in Blocked state waiting for some I/O service, the next state it goes in is?.<br></h6>				
				
  							<input type="radio" id="Q5O1" class="form-check-input" name="Q5" value="Running state" required>
  									<label class="form-check-label" for="Q5O1">Running state</label><br>
  							<input type="radio" id="Q5O2" class="form-check-input" name="Q5" value="Ready state">
  									<label class="form-check-label" for="Q5O2">Ready state</label><br>
  							<input type="radio" id="Q5O3" class="form-check-input" name="Q5" value="Wait state">
  									<label class="form-check-label" for="Q5O3">Wait state</label><br>
  							<input type="radio" id="Q5O4" class="form-check-input" name="Q5" value="Terminated state">
  									<label class="form-check-label" for="Q5O4">Terminated state</label>
									<!-- 
									b
									-->
				<br><br>

				<h6>Question 6 :&nbsp; Which of the following state transitions are possible?<br></h6>			
								
  							<input type="radio" id="Q6O1" class="form-check-input" name="Q6" value="Blocked to running" required>
  									<label class="form-check-label" for="Q6O1">Blocked to running</label><br>
  							<input type="radio" id="Q6O2" class="form-check-input" name="Q6" value="Ready to terminate">
  									<label class="form-check-label" for="Q6O2">Ready to terminate</label><br>
  							<input type="radio" id="Q6O3" class="form-check-input" name="Q6" value="Blocked to ready">
  									<label class="form-check-label" for="Q6O3">Blocked to ready</label><br>
  							<input type="radio" id="Q6O4" class="form-check-input" name="Q6" value="All of the above">
  									<label class="form-check-label" for="Q6O4">All of the above</label>
									<!-- 
									c
									-->
				<br><br>

				<h6>Question 7 :&nbsp; Which one of the following is a Synchronization tool?<br></h6>						
  							<input type="radio" id="Q7O1" class="form-check-input" name="Q7" value="Thread" required>
  									<label class="form-check-label" for="Q7O1">Thread</label><br>
  							<input type="radio" id="Q7O2" class="form-check-input" name="Q7" value="Pipe">
  									<label class="form-check-label" for="Q7O2">Pipe</label><br>
  							<input type="radio" id="Q7O3" class="form-check-input" name="Q7" value="Semaphore">
  									<label class="form-check-label" for="Q7O3">Semaphore</label><br>
  							<input type="radio" id="Q7O4" class="form-check-input" name="Q7" value=" Socket">
  									<label class="form-check-label" for="Q7O4"> Socket</label>
									<!-- 
									c
									-->
				<br><br>

				<h6>Question 8 :&nbsp; Which one is true about binary semaphores?<br></h6>						
  							<input type="radio" id="Q8O1" class="form-check-input" name="Q8" value="When a resource is available, the process in charge set the semaphore to 1 else 0."required> 
  									<label class="form-check-label" for="Q8O1">When a resource is available, the process in charge set the semaphore to 1 else 0.</label><br>
  							<input type="radio" id="Q8O2" class="form-check-input" name="Q8" value="Value of semaphore once assigned can't be changed.">
  									<label class="form-check-label" for="Q8O2">Value of semaphore once assigned cant be changed.</label><br>
  							<input type="radio" id="Q8O3" class="form-check-input" name="Q8" value=" Both (a) and (b).">
  									<label class="form-check-label" for="Q8O3"> Both (a) and (b).</label><br>
  							<input type="radio" id="Q8O4" class="form-check-input" name="Q8" value="None of the above.">
  									<label class="form-check-label" for="Q8O4">None of the above.</label>
									<!-- 
									a
									-->
				<br><br>

				<h6>Question 9 :&nbsp;Which condition leads to a Deadlock?<br></h6>						
  							<input type="radio" id="Q9O1" class="form-check-input" name="Q9" value="Hold and wait" required>
  									<label class="form-check-label" for="Q9O1">Hold and wait</label><br>
  							<input type="radio" id="Q9O2" class="form-check-input" name="Q9" value=" No Preemption">
  									<label class="form-check-label" for="Q9O2"> No Preemption</label><br>
  							<input type="radio" id="Q9O3" class="form-check-input" name="Q9" value="Mutual principal">
  									<label class="form-check-label" for="Q9O3">Mutual principal</label><br>
  							<input type="radio" id="Q9O4" class="form-check-input" name="Q9" value="Both a and b">
  									<label class="form-check-label" for="Q9O4">Both (a) and (b)</label>
									<!-- 
									d
									-->
				<br><br>
				<h6>Question 10 :&nbsp; The time interval from the time of submission of a process to the time of completion is termed as __________?<br></h6>						
  							<input type="radio" id="Q10O1" class="form-check-input" name="Q10" value="Execution time" required>
  									<label class="form-check-label" for="Q10O1">Execution time</label><br>
  							<input type="radio" id="Q10O2" class="form-check-input" name="Q10" value="Turnaround time">
  									<label class="form-check-label" for="Q10O2">Turnaround time</label><br>
  							<input type="radio" id="Q10O3" class="form-check-input" name="Q10" value="Response time">
  									<label class="form-check-label" for="Q10O3">Response time</label><br>
  							<input type="radio" id="Q10O4" class="form-check-input" name="Q10" value="Throughput">
  									<label class="form-check-label" for="Q10O4">Throughput</label>
									<!-- 
									b
									-->
				<br><br>
				<input type="hidden" id="scored" name="scored"/>
				<input type="hidden" id="coursename" value="os" name="courseName"/>
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
			if(Selected1.value=="Kernel remains in the memory during the entire computer session.") {   
			 total_Score=total_Score+10;
		}	
		}
		}		
		var Selected2 = document.querySelector( 'input[name="Q2"]:checked');   
		{
		if(Selected2.value!=null) {  
				if(Selected2.value=="Time division multiplexing") {   
				total_Score=total_Score+10;	
		}
		}
		}
		
		var Selected3 = document.querySelector( 'input[name="Q3"]:checked');   
		{
		if(Selected3.value!=null) {  
				if(Selected3.value=="All of the above") {   
				total_Score=total_Score+10;
			  
		}
		}
		}
		var Selected4 = document.querySelector( 'input[name="Q4"]:checked');   
		{
		if(Selected4.value!=null) {  
				if(Selected4.value=="The frequency of their execution") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected5 = document.querySelector( 'input[name="Q5"]:checked');   
		{
		if(Selected5.value!=null) {  
				if(Selected5.value=="Ready state") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected6 = document.querySelector( 'input[name="Q6"]:checked');   
		{
		if(Selected6.value!=null) {  
				if(Selected6.value=="Blocked to ready") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected7 = document.querySelector( 'input[name="Q7"]:checked');   
		{
		if(Selected7.value!=null) {  
				if(Selected7.value=="Semaphore") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected8 = document.querySelector( 'input[name="Q8"]:checked');   
		{
		if(Selected8.value!=null) {  
				if(Selected8.value=="When a resource is available, the process in charge set the semaphore to 1 else 0.") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected9 = document.querySelector( 'input[name="Q9"]:checked');   
		{
		if(Selected9.value!=null) {  
				if(Selected9.value=="Both a and b") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected10 = document.querySelector( 'input[name="Q10"]:checked');   
		{
		if(Selected10.value!=null) {  
				if(Selected10.value=="Turnaround time") {   
				total_Score=total_Score+10;		
		}
		}
		}

			document.getElementById('scored').value = total_Score;			
        }

	</script>


</body>

</html>