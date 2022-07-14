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
    <title>JAVA - ATM</title>
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
                    <h2 class="text-uppercase section-heading">Java Questions</h2>
                    <h3 class="text-muted section-subheading"><b>NOTE :</b> All questions are required. There are no negative points. Each question is worth ten points.</h3>
      </div>
		<div class="container">
                 <form method="POST" action="ScoreUpload.php">  				   
				   <h6>Question 1 :&nbsp; Which method in java can be used to return a string in upper case letters?<br></h6>						
 							<input type="radio" id="Q1O1" class="form-check-input" name="Q1" value="uppercase()" required="">
									<label class="form-check-label" for="Q1O1">uppercase()</label><br>
							<input type="radio" id="Q1O2" class="form-check-input" name="Q1" value="toUppercase()">
									<label class="form-check-label" for="Q1O2">toUppercase()</label><br>
							<input type="radio" id="Q1O3" class="form-check-input" name="Q1" value="tuc()">
 									<label class="form-check-label" for="Q1O3">tuc()</label><br>
 							<input type="radio" id="Q1O4" class="form-check-input" name="Q1" value="touppercase()">
 									<label class="form-check-label" for="Q1O4">touppercase()</label>
								<!-- 
									b
									-->
				<br><br>
				 <h6>Question 2 :&nbsp; What is the correct way to create an object called myObj of MyClass?<br></h6>						
 							<input type="radio" id="Q2O1" class="form-check-input" name="Q2" value="class myObj = new myObj();" required="">
									<label class="form-check-label" for="Q2O1">class myObj = new myObj();</label><br>
							<input type="radio" id="Q2O2" class="form-check-input" name="Q2" value="MyClass myObj = new MyClass();">
									<label class="form-check-label" for="Q2O2">MyClass myObj = new MyClass();</label><br>
							<input type="radio" id="Q2O3" class="form-check-input" name="Q2" value="class myObj = new MyClass();">
 									<label class="form-check-label" for="Q2O3">class myObj = new MyClass();</label><br>
 							<input type="radio" id="Q2O4" class="form-check-input" name="Q2" value="new myObj = MyClass();">
 									<label class="form-check-label" for="Q2O4">new myObj = MyClass();</label>
								<!-- 
									b
									-->
				<br><br>
				<h6>Question 3 :&nbsp; What is the correct way to create an object called myObj of MyClass?<br></h6>						
  							<input type="radio" id="Q3O1" class="form-check-input" name="Q3" value="A copy of the array" required="">
  									<label class="form-check-label" for="Q3O1">A copy of the array</label><br>
  							<input type="radio" id="Q3O2" class="form-check-input" name="Q3" value="Length of the array">
  									<label class="form-check-label" for="Q3O2">Length of the array</label><br>
  							<input type="radio" id="Q3O3" class="form-check-input" name="Q3" value="The reference of the array">
  									<label class="form-check-label" for="Q3O3">The reference of the array</label><br>
  							<input type="radio" id="Q3O4" class="form-check-input" name="Q3" value="Copy of first element">
  									<label class="form-check-label" for="Q3O4">Copy of first element</label>
									<!-- 
									c
									-->
				<br><br>

				<h6>Question 4 :&nbsp; Identify the corrected definition of a package.<br></h6>						
  							<input type="radio" id="Q4O1" class="form-check-input" name="Q4" value="A package is a collection of editing tools" required="">
  									<label class="form-check-label" for="Q4O1">A package is a collection of editing tools</label><br>
  							<input type="radio" id="Q4O2" class="form-check-input" name="Q4" value="A package is a collection of classes">
  									<label class="form-check-label" for="Q4O2">A package is a collection of classes</label><br>
  							<input type="radio" id="Q4O3" class="form-check-input" name="Q4" value="A package is a collection of classes and interfaces">
  									<label class="form-check-label" for="Q4O3">A package is a collection of classes and interfaces</label><br>
  							<input type="radio" id="Q4O4" class="form-check-input" name="Q4" value="A package is a collection of interfaces">
  									<label class="form-check-label" for="Q4O4">A package is a collection of interfaces</label>
									<!-- 
									c
									-->
				<br><br>

				<h6>Question 5 :&nbsp; Identify the correct restriction on static methods.<br></h6>				
					<p>
					1. They must access only static data<br>
					2. They can only call other static methods.<br>
					3. They cannot refer to this or super.
					</p>
  							<input type="radio" id="Q5O1" class="form-check-input" name="Q5" value="I and II" required="">
  									<label class="form-check-label" for="Q5O1">I and II</label><br>
  							<input type="radio" id="Q5O2" class="form-check-input" name="Q5" value="II and III">
  									<label class="form-check-label" for="Q5O2">II and III</label><br>
  							<input type="radio" id="Q5O3" class="form-check-input" name="Q5" value="Only III">
  									<label class="form-check-label" for="Q5O3">Only III</label><br>
  							<input type="radio" id="Q5O4" class="form-check-input" name="Q5" value="I, II and III">
  									<label class="form-check-label" for="Q5O4">I, II and III</label>
									<!-- 
									d
									-->
				<br><br>

				<h6>Question 6 :&nbsp; What does the following string do to given string str1.<br></h6>			
				<p>String str1 = “Academia-testing-module”.replace(‘e’,’s’);</p>				
  							<input type="radio" id="Q6O1" class="form-check-input" name="Q6" value="Replaces single occurrence of ‘e’ to ‘s’." required="">
  									<label class="form-check-label" for="Q6O1">Replaces a single occurrence of ‘e’ to ‘s’.</label><br>
  							<input type="radio" id="Q6O2" class="form-check-input" name="Q6" value="Replaces all occurrences of ‘e’ to ‘s’.">
  									<label class="form-check-label" for="Q6O2">Replaces all occurrences of ‘e’ to ‘s’.</label><br>
  							<input type="radio" id="Q6O3" class="form-check-input" name="Q6" value="Replaces single occurrence of ‘s’ to ‘e’.">
  									<label class="form-check-label" for="Q6O3">Replaces a single occurrence of ‘s’ to ‘e’.</label><br>
  							<input type="radio" id="Q6O4" class="form-check-input" name="Q6" value="None.">
  									<label class="form-check-label" for="Q6O4">None.</label>
									<!-- 
									b
									-->
				<br><br>

				<h6>Question 7 :&nbsp; Where does the system store parameters and local variables whenever a method is invoked?<br></h6>						
  							<input type="radio" id="Q7O1" class="form-check-input" name="Q7" value="Heap" required="">
  									<label class="form-check-label" for="Q7O1">Heap</label><br>
  							<input type="radio" id="Q7O2" class="form-check-input" name="Q7" value="Stack">
  									<label class="form-check-label" for="Q7O2">Stack</label><br>
  							<input type="radio" id="Q7O3" class="form-check-input" name="Q7" value="Array">
  									<label class="form-check-label" for="Q7O3">Array</label><br>
  							<input type="radio" id="Q7O4" class="form-check-input" name="Q7" value="Tree">
  									<label class="form-check-label" for="Q7O4">Tree</label>
									<!-- 
									b
									-->
				<br><br>

				<h6>Question 8 :&nbsp; What is the implicit return type of constructor?<br></h6>						
  							<input type="radio" id="Q8O1" class="form-check-input" name="Q8" value="No return type" required=""> 
  									<label class="form-check-label" for="Q8O1">No return type</label><br>
  							<input type="radio" id="Q8O2" class="form-check-input" name="Q8" value="A class object in which it is defined">
  									<label class="form-check-label" for="Q8O2">A class object in which it is defined</label><br>
  							<input type="radio" id="Q8O3" class="form-check-input" name="Q8" value="void">
  									<label class="form-check-label" for="Q8O3">void</label><br>
  							<input type="radio" id="Q8O4" class="form-check-input" name="Q8" value="None">
  									<label class="form-check-label" for="Q8O4">None</label>
									<!-- 
									b
									-->
				<br><br>

				<h6>Question 9 :&nbsp;What does the operator &gt;&gt;&gt;&gt; do?<br></h6>						
  							<input type="radio" id="Q9O1" class="form-check-input" name="Q9" value="Right shift operator" required="">
  									<label class="form-check-label" for="Q9O1">Right shift operator</label><br>
  							<input type="radio" id="Q9O2" class="form-check-input" name="Q9" value="Left shift operator">
  									<label class="form-check-label" for="Q9O2">Left shift operator</label><br>
  							<input type="radio" id="Q9O3" class="form-check-input" name="Q9" value="Zero fill left shift">
  									<label class="form-check-label" for="Q9O3">Zero fill left shift</label><br>
  							<input type="radio" id="Q9O4" class="form-check-input" name="Q9" value="Zero fill right shift">
  									<label class="form-check-label" for="Q9O4">Zero fill right shift</label>
									<!-- 
									d
									-->
				<br><br>
				<h6>Question 10 :&nbsp; Identify the incorrect Java feature.<br></h6>						
  							<input type="radio" id="Q10O1" class="form-check-input" name="Q10" value="Object oriented" required="">
  									<label class="form-check-label" for="Q10O1">Object oriented</label><br>
  							<input type="radio" id="Q10O2" class="form-check-input" name="Q10" value="Use of pointers">
  									<label class="form-check-label" for="Q10O2">Use of pointers</label><br>
  							<input type="radio" id="Q10O3" class="form-check-input" name="Q10" value="Dynamic">
  									<label class="form-check-label" for="Q10O3">Dynamic</label><br>
  							<input type="radio" id="Q10O4" class="form-check-input" name="Q10" value="Architectural neural">
  									<label class="form-check-label" for="Q10O4">Architectural neural</label>
									<!-- 
									d
									-->
				<br><br>
				<input type="hidden" id="scored" name="scored"/>
				<input type="hidden" id="coursename" value="java" name="courseName"/>
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
			if(Selected1.value=="toUppercase()") {   
			 total_Score=total_Score+10;
		}	
		}
		}		
		var Selected2 = document.querySelector( 'input[name="Q2"]:checked');   
		{
		if(Selected2.value!=null) {  
				if(Selected2.value=="MyClass myObj = new MyClass();") {   
				total_Score=total_Score+10;	
		}
		}
		}
		
		var Selected3 = document.querySelector( 'input[name="Q3"]:checked');   
		{
		if(Selected3.value!=null) {  
				if(Selected3.value=="The reference of the array") {   
				total_Score=total_Score+10;
			  
		}
		}
		}
		var Selected4 = document.querySelector( 'input[name="Q4"]:checked');   
		{
		if(Selected4.value!=null) {  
				if(Selected4.value=="A package is a collection of classes and interfaces") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected5 = document.querySelector( 'input[name="Q5"]:checked');   
		{
		if(Selected5.value!=null) {  
				if(Selected5.value=="I, II and III") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected6 = document.querySelector( 'input[name="Q6"]:checked');   
		{
		if(Selected6.value!=null) {  
				if(Selected6.value=="Replaces all occurrences of ‘e’ to ‘s’.") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected7 = document.querySelector( 'input[name="Q7"]:checked');   
		{
		if(Selected7.value!=null) {  
				if(Selected7.value=="Stack") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected8 = document.querySelector( 'input[name="Q8"]:checked');   
		{
		if(Selected8.value!=null) {  
				if(Selected8.value=="A class object in which it is defined") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected9 = document.querySelector( 'input[name="Q9"]:checked');   
		{
		if(Selected9.value!=null) {  
				if(Selected9.value=="Zero fill right shift") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected10 = document.querySelector( 'input[name="Q10"]:checked');   
		{
		if(Selected10.value!=null) {  
				if(Selected10.value=="Architectural neural") {   
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