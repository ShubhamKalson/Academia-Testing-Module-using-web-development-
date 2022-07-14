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
    <title>C++ - ATM</title>
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
                    <h2 class="text-uppercase section-heading">C++ Questions</h2>
                    <h3 class="text-muted section-subheading"><b>NOTE :</b> All questions are required. There are no negative points. Each question is worth ten points.</h3>
      </div>
		<div class="container">
                   <form method="POST" action="ScoreUpload.php">
				   <h6>Question 1 :&nbsp; Which data type is used to create a variable that should store text?<br></h6>						
 							<input type="radio" id="Q1O1" class="form-check-input" name="Q1" value="string" required="">
									<label class="form-check-label" for="Q1O1">string</label><br>
							<input type="radio" id="Q1O2" class="form-check-input" name="Q1" value="String">
									<label class="form-check-label" for="Q1O2">String</label><br>
							<input type="radio" id="Q1O3" class="form-check-input" name="Q1" value="txt">
 									<label class="form-check-label" for="Q1O3">txt</label><br>
 							<input type="radio" id="Q1O4" class="form-check-input" name="Q1" value="char">
 									<label class="form-check-label" for="Q1O4">char</label>
								<!-- 
									a
									-->
				<br><br>
				<h6>Question 2 :&nbsp;Operators sizeof and ?: <br></h6>
				
				<input type="radio" id="Q2O1" class="form-check-input" name="Q2" value="Both can be overloaded" required="">
  									<label class="form-check-label" for="Q2O1">Both can be overloaded</label><br>
  							<input type="radio" id="Q2O2" class="form-check-input" name="Q2" value="Both cannot be overloaded">
  									<label class="form-check-label" for="Q2O2">Both cannot be overloaded</label><br>
  							<input type="radio" id="Q2O3" class="form-check-input" name="Q2" value="Only sizeof can be overloaded">
  									<label class="form-check-label" for="Q2O3">Only sizeof can be overloaded</label><br>
  							<input type="radio" id="Q2O4" class="form-check-input" name="Q2" value="Only ?: can be overloaded">
  									<label class="form-check-label" for="Q2O4">Only ?: can be overloaded</label>
									<!-- 
									b
									-->
				<br><br>
				<h6>Question 3 :&nbsp; What is the output of the following program?.<br></h6>
				<p>
				main(&nbsp;) {<br> 
					&nbsp;&nbsp;&nbsp;int a[&nbsp;] = {1, 2}, *p = a;<br>
					&nbsp;&nbsp;&nbsp;cout&lt;&lt;p[1]; <br>
				}<br>
				</p>				
  							<input type="radio" id="Q3O1" class="form-check-input" name="Q3" value="1" required="">
  									<label class="form-check-label" for="Q3O1">1</label><br>
  							<input type="radio" id="Q3O2" class="form-check-input" name="Q3" value="2">
  									<label class="form-check-label" for="Q3O2">2</label><br>
  							<input type="radio" id="Q3O3" class="form-check-input" name="Q3" value="Compile error">
  									<label class="form-check-label" for="Q3O3">Compile error</label><br>
  							<input type="radio" id="Q3O4" class="form-check-input" name="Q3" value="Runtime error">
  									<label class="form-check-label" for="Q3O4">Runtime error</label>
									<!-- 
									b
									-->
				<br><br>

				<h6>Question 4 :&nbsp; Which operator is used to add together two values?<br></h6>						
  							<input type="radio" id="Q4O1" class="form-check-input" name="Q4" value="The plus sign" required="">
  									<label class="form-check-label" for="Q4O1">The + sign</label><br>
  							<input type="radio" id="Q4O2" class="form-check-input" name="Q4" value="The * sign">
  									<label class="form-check-label" for="Q4O2">The * sign</label><br>
  							<input type="radio" id="Q4O3" class="form-check-input" name="Q4" value="The &amp; sign">
  									<label class="form-check-label" for="Q4O3">The &amp; sign</label><br>
  							<input type="radio" id="Q4O4" class="form-check-input" name="Q4" value="The | sign">
  									<label class="form-check-label" for="Q4O4">The | sign</label>
									<!-- 
									a
									-->
				<br><br>

				<h6>Question 5 :&nbsp; How do you call a function in C++?<br></h6>						
  							<input type="radio" id="Q5O1" class="form-check-input" name="Q5" value=" functionName[];" required="">
  									<label class="form-check-label" for="Q5O1"> functionName[&nbsp;];</label><br>
  							<input type="radio" id="Q5O2" class="form-check-input" name="Q5" value="functionName paranthesis">
  									<label class="form-check-label" for="Q5O2">functionName(&nbsp;);</label><br>
  							<input type="radio" id="Q5O3" class="form-check-input" name="Q5" value="functionName;">
  									<label class="form-check-label" for="Q5O3">functionName;</label><br>
  							<input type="radio" id="Q5O4" class="form-check-input" name="Q5" value="(functionName);">
  									<label class="form-check-label" for="Q5O4">(functionName);</label>
									<!-- 
									b
									-->
				<br><br>

				<h6>Question 6 :&nbsp; How do you create a reference variable of an existing variable?<br></h6>						
  							<input type="radio" id="Q6O1" class="form-check-input" name="Q6" value="With the operator">
  									<label class="form-check-label" for="Q6O1">With the &amp; operator.</label><br>
  							<input type="radio" id="Q6O2" class="form-check-input" name="Q6" value="With the ref word">
  									<label class="form-check-label" for="Q6O2">With the ref word</label><br>
  							<input type="radio" id="Q6O3" class="form-check-input" name="Q6" value="With the new word">
  									<label class="form-check-label" for="Q6O3">With the new word</label><br>
  							<input type="radio" id="Q6O4" class="form-check-input" name="Q6" value=" With the star operator">
  									<label class="form-check-label" for="Q6O4"> With the * operator</label>
									<!-- 
									a
									-->
				<br><br>

				<h6>Question 7 :&nbsp; Abstract class is __<br></h6>						
  							<input type="radio" id="Q7O1" class="form-check-input" name="Q7" value="A class must contain all pure virtual functions">
  									<label class="form-check-label" for="Q7O1">A class must contain all pure virtual functions</label><br>
  							<input type="radio" id="Q7O2" class="form-check-input" name="Q7" value="A class must contain at least one pure virtual function">
  									<label class="form-check-label" for="Q7O2">A class must contain at least one pure virtual function</label><br>
  							<input type="radio" id="Q7O3" class="form-check-input" name="Q7" value="A class may not contain pure virtual function.">
  									<label class="form-check-label" for="Q7O3">A class may not contain pure virtual function.</label><br>
  							<input type="radio" id="Q7O4" class="form-check-input" name="Q7" value="A class must contain a pure virtual function defined outside the class.">
  									<label class="form-check-label" for="Q7O4">A class must contain a pure virtual function defined outside the class.</label>
									<!-- 
									b
									-->
				<br><br>

				<h6>Question 8 :&nbsp; What is the output of the following program?<br></h6>	
				<p>
				class Base {&nbsp;};<br>
				class Derived: public Base {&nbsp;};<br>
					&nbsp;&nbsp;&nbsp;int main(&nbsp;)<br>
					{<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Base *bp = new Derived;<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Derived *dp = new Base;<br>
					}<br>
				</p>				
  							<input type="radio" id="Q8O1" class="form-check-input" name="Q8" value="No Compiler Error">
  									<label class="form-check-label" for="Q8O1">No Compiler Error</label><br>
  							<input type="radio" id="Q8O2" class="form-check-input" name="Q8" value="Error">
  									<label class="form-check-label" for="Q8O2">Compiler Error in line “Base *bp = new Derived;”</label><br>
  							<input type="radio" id="Q8O3" class="form-check-input" name="Q8" value="Compiler Error in" >
  									<label class="form-check-label" for="Q8O3">Compiler Error in line ” Derived *dp = new Base;”</label><br>
  							<input type="radio" id="Q8O4" class="form-check-input" name="Q8" value="Runtime Error">
  									<label class="form-check-label" for="Q8O4">Runtime Error</label>
									<!-- 
									c
									-->
				<br><br>

				<h6>Question 9 :&nbsp; How to define a stack in C++ stl?<br></h6>						
  							<input type="radio" id="Q9O1" class="form-check-input" name="Q9" value=" create stack name;">
  									<label class="form-check-label" for="Q9O1"> create &lt;stack &gt; name;</label><br>
  							<input type="radio" id="Q9O2" class="form-check-input" name="Q9" value="stack st=new stack">
  									<label class="form-check-label" for="Q9O2">stack st=new stack();</label><br>
  							<input type="radio" id="Q9O3" class="form-check-input" name="Q9" value="stack datatype name">
  									<label class="form-check-label" for="Q9O3">stack &lt;datatype&gt; name;</label><br>
  							<input type="radio" id="Q9O4" class="form-check-input" name="Q9" value=" int stack">
  									<label class="form-check-label" for="Q9O4"> int stack;</label>
									<!-- 
									c
									-->
				<br><br>
				<h6>Question 10 :&nbsp; Advantage of dequeue in C++ over other languages<br></h6>						
  							<input type="radio" id="Q10O1" class="form-check-input" name="Q10" value="deletion/insertion from front.">
  									<label class="form-check-label" for="Q10O1">deletion/insertion from front.</label><br>
  							<input type="radio" id="Q10O2" class="form-check-input" name="Q10" value="deletion/insertion from back.">
  									<label class="form-check-label" for="Q10O2">deletion/insertion from back.</label><br>
  							<input type="radio" id="Q10O3" class="form-check-input" name="Q10" value="Random access">
  									<label class="form-check-label" for="Q10O3">Random access</label><br>
  							<input type="radio" id="Q10O4" class="form-check-input" name="Q10" value="None">
  									<label class="form-check-label" for="Q10O4">None</label>
									<!-- 
									c
									-->
				<br><br>
				<input type="hidden" id="scored" name="scored"/>
				<input type="hidden" id="coursename" value="c" name="courseName"/>
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
			if(Selected1.value=="string") {   
			 total_Score=total_Score+10;
		}	
		}
		}		
		var Selected2 = document.querySelector( 'input[name="Q2"]:checked');   
		{
		if(Selected2.value!=null) {  
				if(Selected2.value=="Both cannot be overloaded") {   
				total_Score=total_Score+10;	
		}
		}
		}
		
		var Selected3 = document.querySelector( 'input[name="Q3"]:checked');   
		{
		if(Selected3.value!=null) {  
				if(Selected3.value=="2") {   
				total_Score=total_Score+10;
			  
		}
		}
		}
		var Selected4 = document.querySelector( 'input[name="Q4"]:checked');   
		{
		if(Selected4.value!=null) {  
				if(Selected4.value=="The plus sign") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected5 = document.querySelector( 'input[name="Q5"]:checked');   
		{
		if(Selected5.value!=null) {  
				if(Selected5.value=="functionName paranthesis") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected6 = document.querySelector( 'input[name="Q6"]:checked');   
		{
		if(Selected6.value!=null) {  
				if(Selected6.value=="With the operator") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected7 = document.querySelector( 'input[name="Q7"]:checked');   
		{
		if(Selected7.value!=null) {  
				if(Selected7.value=="A class must contain at least one pure virtual function") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected8 = document.querySelector( 'input[name="Q8"]:checked');   
		{
		if(Selected8.value!=null) {  
				if(Selected8.value=="Compiler Error in") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected9 = document.querySelector( 'input[name="Q9"]:checked');   
		{
		if(Selected9.value!=null) {  
				if(Selected9.value=="stack datatype name") {   
				total_Score=total_Score+10;		
		}
		}
		}
		
		var Selected10 = document.querySelector( 'input[name="Q10"]:checked');   
		{
		if(Selected10.value!=null) {  
				if(Selected10.value=="Random access") {   
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