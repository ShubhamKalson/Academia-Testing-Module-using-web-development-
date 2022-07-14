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
    <title>DBMS - ATM</title>
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
                    <li class="nav-item"><a class="nav-link disabled" href="sign_in.html">WELCOME <?= $Name;?></a></li>
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
                    <h2 class="text-uppercase section-heading">DBMS Questions</h2>
                    <h3 class="text-muted section-subheading"><b>NOTE :</b> All questions are required. There are no negative points. Each question is worth ten points.</h3>
      </div>
		<div class="container">
                   <form method="POST" action="ScoreUpload.php">
				   
				   <h6>Question 1 :&nbsp; CREATE command is _________ .<br></h6>						
 							<input type="radio" id="Q1O1" class="form-check-input" name="Q1" value="DML command" required="">
									<label class="form-check-label" for="Q1O1">DML command</label><br>
							<input type="radio" id="Q1O2" class="form-check-input" name="Q1" value="DCL command">
									<label class="form-check-label" for="Q1O2">DCL command</label><br>
							<input type="radio" id="Q1O3" class="form-check-input" name="Q1" value="DDL command">
 									<label class="form-check-label" for="Q1O3">DDL command</label><br>
 							<input type="radio" id="Q1O4" class="form-check-input" name="Q1" value="TCL command">
 									<label class="form-check-label" for="Q1O4">TCL command</label>
								<!-- 
									c
									-->
				<br><br>
				 <h6>Question 2 :&nbsp;  Which of the following is the correct syntax of UPDATE Command?<br></h6>						
 							<input type="radio" id="Q2O1" class="form-check-input" name="Q2" value="UPDATE table_name" required="">
									<label class="form-check-label" for="Q2O1">UPDATE table_name where condition SET column_name = (value)</label><br>
							<input type="radio" id="Q2O2" class="form-check-input" name="Q2" value="UPDATE">
									<label class="form-check-label" for="Q2O2">UPDATE table_name SET column_name = (value) WHERE (condition)MyClass myObj = new MyClass();</label><br>
							<input type="radio" id="Q2O3" class="form-check-input" name="Q2" value="UPDATE table table_name">
 									<label class="form-check-label" for="Q2O3">UPDATE table table_name set column_name = (value) WHERE (condition)</label><br>
 							<input type="radio" id="Q2O4" class="form-check-input" name="Q2" value="UPDATE IN table_name">
 									<label class="form-check-label" for="Q2O4">UPDATE IN table_name WHERE condition set column_name = (value)new myObj = MyClass();</label>
								<!-- 
									b
									-->
				<br><br>
				<h6>Question 3 :&nbsp; _________ command removes all records from a table and also destroy the tables structure.<br></h6>						
  							<input type="radio" id="Q3O1" class="form-check-input" name="Q3" value="Truncate" required="">
  									<label class="form-check-label" for="Q3O1">Truncate</label><br>
  							<input type="radio" id="Q3O2" class="form-check-input" name="Q3" value="Drop">
  									<label class="form-check-label" for="Q3O2">Drop</label><br>
  							<input type="radio" id="Q3O3" class="form-check-input" name="Q3" value="Delete">
  									<label class="form-check-label" for="Q3O3">Delete</label><br>
  							<input type="radio" id="Q3O4" class="form-check-input" name="Q3" value="All of the above">
  									<label class="form-check-label" for="Q3O4">All of the above</label>
									<!-- 
									b
									-->
				<br><br>

				<h6>Question 4 :&nbsp;  
					4.  Which command is used to change datatype of any column or to modify its size?<br></h6>						
  							<input type="radio" id="Q4O1" class="form-check-input" name="Q4" value="Alter" required="">
  									<label class="form-check-label" for="Q4O1">Alter</label><br>
  							<input type="radio" id="Q4O2" class="form-check-input" name="Q4" value="Modify">
  									<label class="form-check-label" for="Q4O2">Modify</label><br>
  							<input type="radio" id="Q4O3" class="form-check-input" name="Q4" value=" Update">
  									<label class="form-check-label" for="Q4O3"> Update</label><br>
  							<input type="radio" id="Q4O4" class="form-check-input" name="Q4" value="None of the above">
  									<label class="form-check-label" for="Q4O4">None of the above</label>
									<!-- 
									a
									-->
				<br><br>

				<h6>Question 5 :&nbsp; Which of the following statement is not correct?<br></h6>				

  							<input type="radio" id="Q5O1" class="form-check-input" name="Q5" value="Rollback" required="">
  									<label class="form-check-label" for="Q5O1">Rollback command restores the database to last savepoint.</label><br>
  							<input type="radio" id="Q5O2" class="form-check-input" name="Q5" value="savepoint">
  									<label class="form-check-label" for="Q5O2"> savepoint command is used to temporarily save a transaction.</label><br>
  							<input type="radio" id="Q5O3" class="form-check-input" name="Q5" value="Revoke is a DCL Command.">
  									<label class="form-check-label" for="Q5O3">Revoke is a DCL Command.</label><br>
  							<input type="radio" id="Q5O4" class="form-check-input" name="Q5" value="All DML commands are auto committed">
  									<label class="form-check-label" for="Q5O4">All DML commands are auto-committed</label>
									<!-- 
									d
									-->
				<br><br>

				<h6>Question 6 :&nbsp; Which command will allow create Table permission to a user?<br></h6>			
							
  							<input type="radio" id="Q6O1" class="form-check-input" name="Q6" value="allow create table to USERNAME" required="">
  									<label class="form-check-label" for="Q6O1">allow create table to USERNAME</label><br>
  							<input type="radio" id="Q6O2" class="form-check-input" name="Q6" value="grant create table to USERNAME">
  									<label class="form-check-label" for="Q6O2">grant create table to USERNAME</label><br>
  							<input type="radio" id="Q6O3" class="form-check-input" name="Q6" value="grant USERNAME create table">
  									<label class="form-check-label" for="Q6O3">grant USERNAME create table</label><br>
  							<input type="radio" id="Q6O4" class="form-check-input" name="Q6" value="None of the above">
  									<label class="form-check-label" for="Q6O4">None of the above</label>
									<!-- 
									b
									-->
				<br><br>

				<h6>Question 7 :&nbsp;  SQL query and modification commands comes under ________ .<br></h6>						
  							<input type="radio" id="Q7O1" class="form-check-input" name="Q7" value="DCL commands" required="">
  									<label class="form-check-label" for="Q7O1">DCL commands</label><br>
  							<input type="radio" id="Q7O2" class="form-check-input" name="Q7" value="SDDL commands">
  									<label class="form-check-label" for="Q7O2">DDL commands</label><br>
  							<input type="radio" id="Q7O3" class="form-check-input" name="Q7" value="DML commands">
  									<label class="form-check-label" for="Q7O3">DML commands</label><br>
  							<input type="radio" id="Q7O4" class="form-check-input" name="Q7" value="TCL commands">
  									<label class="form-check-label" for="Q7O4">TCL commands</label>
									<!-- 
									c
									-->
				<br><br>

				<h6>Question 8 :&nbsp; Which SQL commands reads data from a table?<br></h6>						
  							<input type="radio" id="Q8O1" class="form-check-input" name="Q8" value="select1" required=""> 
  									<label class="form-check-label" for="Q8O1">SELECT</label><br>
  							<input type="radio" id="Q8O2" class="form-check-input" name="Q8" value="READ">
  									<label class="form-check-label" for="Q8O2">READ</label><br>
  							<input type="radio" id="Q8O3" class="form-check-input" name="Q8" value="QUERY">
  									<label class="form-check-label" for="Q8O3">QUERY</label><br>
  							<input type="radio" id="Q8O4" class="form-check-input" name="Q8" value="None of the above.">
  									<label class="form-check-label" for="Q8O4">None of the above.</label>
									<!-- 
									a
									-->
				<br><br>

				<h6>Question 9 :&nbsp;Subquery of an SQL SELECT statement is enclosed in:
					<br></h6>						
  							<input type="radio" id="Q9O1" class="form-check-input" name="Q9" value="braces" required="">
  									<label class="form-check-label" for="Q9O1">braces {}</label><br>
  							<input type="radio" id="Q9O2" class="form-check-input" name="Q9" value="parenthesis">
  									<label class="form-check-label" for="Q9O2">parenthesis ()</label><br>
  							<input type="radio" id="Q9O3" class="form-check-input" name="Q9" value="brackets">
  									<label class="form-check-label" for="Q9O3">brackets []</label><br>
  							<input type="radio" id="Q9O4" class="form-check-input" name="Q9" value="none of the above">
  									<label class="form-check-label" for="Q9O4">none of the above</label>
									<!-- 
									b
									-->
				<br><br>
				<h6>Question 10 :&nbsp; The result of a SQL statement is an ________?<br></h6>						
  							<input type="radio" id="Q10O1" class="form-check-input" name="Q10" value="character form" required="">
  									<label class="form-check-label" for="Q10O1">character form</label><br>
  							<input type="radio" id="Q10O2" class="form-check-input" name="Q10" value="string form">
  									<label class="form-check-label" for="Q10O2">string form</label><br>
  							<input type="radio" id="Q10O3" class="form-check-input" name="Q10" value="file form">
  									<label class="form-check-label" for="Q10O3"> file form</label><br>
  							<input type="radio" id="Q10O4" class="form-check-input" name="Q10" value="table form">
  									<label class="form-check-label" for="Q10O4">table form</label>
									<!-- 
									d
									-->
				<br><br><input type="hidden" id="scored" name="scored"/>
				<input type="hidden" id="coursename" value="dbms" name="courseName"/>
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
			if(Selected1.value=="DDL command") {   
			 total_Score=total_Score+10;
		}	
		}
		}		
		var Selected2 = document.querySelector( 'input[name="Q2"]:checked');   
		{
		if(Selected2.value!=null) {  
				if(Selected2.value=="UPDATE") {   
				total_Score=total_Score+10;	
		}
		}
		}
		
		var Selected3 = document.querySelector( 'input[name="Q3"]:checked');   
		{
		if(Selected3.value!=null) {  
				if(Selected3.value=="Drop") {   
				total_Score=total_Score+10;
			  
		}
		}
		}
		var Selected4 = document.querySelector( 'input[name="Q4"]:checked');   
		{
		if(Selected4.value!=null) {  
				if(Selected4.value=="Alter") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected5 = document.querySelector( 'input[name="Q5"]:checked');   
		{
		if(Selected5.value!=null) {  
				if(Selected5.value=="All DML commands are auto committed") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected6 = document.querySelector( 'input[name="Q6"]:checked');   
		{
		if(Selected6.value!=null) {  
				if(Selected6.value=="grant create table to USERNAME") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected7 = document.querySelector( 'input[name="Q7"]:checked');   
		{
		if(Selected7.value!=null) {  
				if(Selected7.value=="DML commands") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected8 = document.querySelector( 'input[name="Q8"]:checked');   
		{
		if(Selected8.value!=null) {  
				if(Selected8.value=="select1") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected9 = document.querySelector( 'input[name="Q9"]:checked');   
		{
		if(Selected9.value!=null) {  
				if(Selected9.value=="parenthesis") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected10 = document.querySelector( 'input[name="Q10"]:checked');   
		{
		if(Selected10.value!=null) {  
				if(Selected10.value=="table form") {   
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