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
    <title>PYTHON - ATM</title>
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
                    <h2 class="text-uppercase section-heading">Python Questions</h2>
                    <h3 class="text-muted section-subheading"><b>NOTE :</b> All questions are required. There are no negative points. Each question is worth ten points.</h3>
      </div>
		<div class="container">
                   <form method="POST" action="ScoreUpload.php">
				   
				   <h6>Question 1 :&nbsp; Which one of these is not a part of standard data types in Python?<br></h6>						
 							<input type="radio" id="Q1O1" class="form-check-input" name="Q1" value="Numbers" required="">
									<label class="form-check-label" for="Q1O1">Numbers</label><br>
							<input type="radio" id="Q1O2" class="form-check-input" name="Q1" value="Character">
									<label class="form-check-label" for="Q1O2">Character</label><br>
							<input type="radio" id="Q1O3" class="form-check-input" name="Q1" value="String">
 									<label class="form-check-label" for="Q1O3">String</label><br>
 							<input type="radio" id="Q1O4" class="form-check-input" name="Q1" value="List">
 									<label class="form-check-label" for="Q1O4">List</label>
								<!-- 
									b
									-->
				<br><br>
				 <h6>Question 2 :&nbsp; Reference to a number object can be deleted using which statement?<br></h6>						
 							<input type="radio" id="Q2O1" class="form-check-input" name="Q2" value="del" required="">
									<label class="form-check-label" for="Q2O1">del</label><br>
							<input type="radio" id="Q2O2" class="form-check-input" name="Q2" value="delete">
									<label class="form-check-label" for="Q2O2">delete</label><br>
							<input type="radio" id="Q2O3" class="form-check-input" name="Q2" value="free">
 									<label class="form-check-label" for="Q2O3">free</label><br>
 							<input type="radio" id="Q2O4" class="form-check-input" name="Q2" value="malloc">
 									<label class="form-check-label" for="Q2O4">malloc</label>
								<!-- 
									a
									-->
				<br><br>
				<h6>Question 3 :&nbsp; What is the difference between Lists and Arrays?<br></h6>						
  							<input type="radio" id="Q3O1" class="form-check-input" name="Q3" value="Unlike array, items belonging to Lists can be of different data type" required="">
  									<label class="form-check-label" for="Q3O1">Unlike array, items belonging to Lists can be of different data type</label><br>
  							<input type="radio" id="Q3O2" class="form-check-input" name="Q3" value="Unlike array, list uses parentheses to store items">
  									<label class="form-check-label" for="Q3O2">Unlike array, list uses parentheses to store items</label><br>
  							<input type="radio" id="Q3O3" class="form-check-input" name="Q3" value="There is no difference between Lists and Arrays">
  									<label class="form-check-label" for="Q3O3">There is no difference between Lists and Arrays</label><br>
  							<input type="radio" id="Q3O4" class="form-check-input" name="Q3" value="None of the above">
  									<label class="form-check-label" for="Q3O4">None of the above</label>
									<!-- 
									a
									-->
				<br><br>

				<h6>Question 4 :&nbsp; Python supports which types of operators?<br></h6>						
  							<input type="radio" id="Q4O1" class="form-check-input" name="Q4" value="Arithmetic, Relational, Assignment and Logical operators" required="">
  									<label class="form-check-label" for="Q4O1">Arithmetic, Relational, Assignment and Logical operators</label><br>
  							<input type="radio" id="Q4O2" class="form-check-input" name="Q4" value="Arithmetic, Relational, Assignment, Logical and Bitwise operators">
  									<label class="form-check-label" for="Q4O2">Arithmetic, Relational, Assignment, Logical and Bitwise operators</label><br>
  							<input type="radio" id="Q4O3" class="form-check-input" name="Q4" value=" Arithmetic, Relational, Assignment, Logical, Bitwise and Membership operators">
  									<label class="form-check-label" for="Q4O3"> Arithmetic, Relational, Assignment, Logical, Bitwise and Membership operators</label><br>
  							<input type="radio" id="Q4O4" class="form-check-input" name="Q4" value="Arithmetic, Relational, Assignment, Logical, Bitwise, Membership and Identity operators">
  									<label class="form-check-label" for="Q4O4">Arithmetic, Relational, Assignment, Logical, Bitwise, Membership and Identity operators</label>
									<!-- 
									d
									-->
				<br><br>

				<h6>Question 5 :&nbsp; What is the order of precedence in python?.<br></h6>				
					
  							<input type="radio" id="Q5O1" class="form-check-input" name="Q5" value="Parentheses, Exponential, Division, Multiplication, Addition, Subtraction" required="">
  									<label class="form-check-label" for="Q5O1">Parentheses, Exponential, Division, Multiplication, Addition, Subtraction</label><br>
  							<input type="radio" id="Q5O2" class="form-check-input" name="Q5" value="Parentheses, Multiplication, Division, Exponential, Addition, Subtraction">
  									<label class="form-check-label" for="Q5O2">Parentheses, Multiplication, Division, Exponential, Addition, Subtraction</label><br>
  							<input type="radio" id="Q5O3" class="form-check-input" name="Q5" value="Parentheses, Division, Multiplication, Addition, Subtraction, Exponential">
  									<label class="form-check-label" for="Q5O3">Parentheses, Division, Multiplication, Addition, Subtraction, Exponential</label><br>
  							<input type="radio" id="Q5O4" class="form-check-input" name="Q5" value="None of the above">
  									<label class="form-check-label" for="Q5O4">None of the above</label>
									<!-- 
									a
									-->
				<br><br>

				<h6>Question 6 :&nbsp; What is the value of following expression:<br></h6>			
							<p> 3*1**3</p>
  							<input type="radio" id="Q6O1" class="form-check-input" name="Q6" value="1" required="">
  									<label class="form-check-label" for="Q6O1">1</label><br>
  							<input type="radio" id="Q6O2" class="form-check-input" name="Q6" value="3">
  									<label class="form-check-label" for="Q6O2">3</label><br>
  							<input type="radio" id="Q6O3" class="form-check-input" name="Q6" value="9">
  									<label class="form-check-label" for="Q6O3">9</label><br>
  							<input type="radio" id="Q6O4" class="form-check-input" name="Q6" value="None.">
  									<label class="form-check-label" for="Q6O4">27</label>
									<!-- 
									b
									-->
				<br><br>

				<h6>Question 7 :&nbsp;  What is the value of following expression:<br></h6>	
							<p>24//6%3</p>				
  							<input type="radio" id="Q7O1" class="form-check-input" name="Q7" value="0" required="">
  									<label class="form-check-label" for="Q7O1">0</label><br>
  							<input type="radio" id="Q7O2" class="form-check-input" name="Q7" value="1">
  									<label class="form-check-label" for="Q7O2">1</label><br>
  							<input type="radio" id="Q7O3" class="form-check-input" name="Q7" value="2">
  									<label class="form-check-label" for="Q7O3">2</label><br>
  							<input type="radio" id="Q7O4" class="form-check-input" name="Q7" value="3">
  									<label class="form-check-label" for="Q7O4">3</label>
									<!-- 
									b
									-->
				<br><br>

				<h6>Question 8 :&nbsp;What is pass statement in Python?<br></h6>						
  							<input type="radio" id="Q8O1" class="form-check-input" name="Q8" value="It declares variables" required=""> 
  									<label class="form-check-label" for="Q8O1">It declares variables</label><br>
  							<input type="radio" id="Q8O2" class="form-check-input" name="Q8" value="It defines function">
  									<label class="form-check-label" for="Q8O2">It defines function</label><br>
  							<input type="radio" id="Q8O3" class="form-check-input" name="Q8" value="It is a null statement">
  									<label class="form-check-label" for="Q8O3">It is a null statement</label><br>
  							<input type="radio" id="Q8O4" class="form-check-input" name="Q8" value="None of the above">
  									<label class="form-check-label" for="Q8O4">None of the above</label>
									<!-- 
									c
									-->
				<br><br>

				<h6>Question 9 :&nbsp;Which of the following is the use of id() function in python?<br></h6>						
  							<input type="radio" id="Q9O1" class="form-check-input" name="Q9" value="Every object doesn’t have a unique id" required="">
  									<label class="form-check-label" for="Q9O1">Every object doesn’t have a unique id</label><br>
  							<input type="radio" id="Q9O2" class="form-check-input" name="Q9" value="Id returns the identity of the object">
  									<label class="form-check-label" for="Q9O2">Id returns the identity of the object</label><br>
  							<input type="radio" id="Q9O3" class="form-check-input" name="Q9" value="All of the mentioned">
  									<label class="form-check-label" for="Q9O3">All of the mentioned</label><br>
  							<input type="radio" id="Q9O4" class="form-check-input" name="Q9" value="None of the mentioned">
  									<label class="form-check-label" for="Q9O4">None of the mentioned</label>
									<!-- 
									b
									-->
				<br><br>
				<h6>Question 10 :&nbsp; What will be the output of the following Python function?<br></h6>	
								<p> min(max(False,-3,-4),2,7)</p>
  							<input type="radio" id="Q10O1" class="form-check-input" name="Q10" value="-4" required="">
  									<label class="form-check-label" for="Q10O1">-4</label><br>
  							<input type="radio" id="Q10O2" class="form-check-input" name="Q10" value="-3">
  									<label class="form-check-label" for="Q10O2">-3</label><br>
  							<input type="radio" id="Q10O3" class="form-check-input" name="Q10" value="2">
  									<label class="form-check-label" for="Q10O3">2</label><br>
  							<input type="radio" id="Q10O4" class="form-check-input" name="Q10" value="False">
  									<label class="form-check-label" for="Q10O4">False</label>
									<!-- 
									d
									-->
				<br><br><input type="hidden" id="scored" name="scored"/>
				<input type="hidden" id="coursename" value="python" name="courseName"/>
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
			if(Selected1.value=="Character") {   
			 total_Score=total_Score+10;
		}	
		}
		}		
		var Selected2 = document.querySelector( 'input[name="Q2"]:checked');   
		{
		if(Selected2.value!=null) {  
				if(Selected2.value=="del") {   
				total_Score=total_Score+10;	
		}
		}
		}
		
		var Selected3 = document.querySelector( 'input[name="Q3"]:checked');   
		{
		if(Selected3.value!=null) {  
				if(Selected3.value=="Unlike array, items belonging to Lists can be of different data type") {   
				total_Score=total_Score+10;
			  
		}
		}
		}
		var Selected4 = document.querySelector( 'input[name="Q4"]:checked');   
		{
		if(Selected4.value!=null) {  
				if(Selected4.value=="Arithmetic, Relational, Assignment, Logical, Bitwise, Membership and Identity operators") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected5 = document.querySelector( 'input[name="Q5"]:checked');   
		{
		if(Selected5.value!=null) {  
				if(Selected5.value=="Parentheses, Exponential, Division, Multiplication, Addition, Subtraction") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected6 = document.querySelector( 'input[name="Q6"]:checked');   
		{
		if(Selected6.value!=null) {  
				if(Selected6.value=="3") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected7 = document.querySelector( 'input[name="Q7"]:checked');   
		{
		if(Selected7.value!=null) {  
				if(Selected7.value=="1") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected8 = document.querySelector( 'input[name="Q8"]:checked');   
		{
		if(Selected8.value!=null) {  
				if(Selected8.value=="It is a null statement") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected9 = document.querySelector( 'input[name="Q9"]:checked');   
		{
		if(Selected9.value!=null) {  
				if(Selected9.value=="Id returns the identity of the object") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected10 = document.querySelector( 'input[name="Q10"]:checked');   
		{
		if(Selected10.value!=null) {  
				if(Selected10.value=="False") {   
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