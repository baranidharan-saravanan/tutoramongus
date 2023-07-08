<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Online Tutorial Portal Site</title>
          <link rel="stylesheet" href="https://resources/demos/style.css">
          <link rel="icon" type="image/x-icon" href="favicon1.ico">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
         <!-- jQuery -->
        <script src="http://localhost/otps/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="http://localhost/otps/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- SweetAlert2 -->
        <script src="http://localhost/otps/plugins/sweetalert2/sweetalert2.min.js"></script>
        <!-- Toastr -->
        <script src="http://localhost/otps/plugins/toastr/toastr.min.js"></script>
        <script>
            var base_url = 'http://localhost/otps/';
        </script>
        <!-- <script src="http://localhost/otps/dist/js/script.js"></script> -->
       <script>
        start_loader()
      </script>

      <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap');

*, *:after, *:before {
	box-sizing: border-box;
}

body {
  background-image:url('images/courseregbg.jpeg');
  background-position: fixed;
  background-repeat: no-repeat;
  background-size:cover;
	line-height: 1.5;
	background-color: #f1f3fb;
  font-family: Arial, Helvetica, sans-serif;
    margin:0;
    padding:0;
}

img {
	max-width: 100%;
	display: block;
}


// iOS Reset 
input {
	appearance: none;
	border-radius: 0;
}

.card {
	margin: 4rem auto;
	display: flex;
	flex-direction: column;
	width: 100%;
	max-width: 600px;
	background-color: #FFF;
	border-radius: 10px;
	box-shadow: 0 10px 20px 0 rgba(#999, .25);
	padding: 30px 30px 10px 30px;
}

.card-image {
	border-radius: 8px;
	overflow: hidden;
	padding-bottom: 65%;

	background-image: url('images/coursereg.jpeg');
	background-repeat: no-repeat;
	background-size: 100%;
	background-position: center;
	position: relative;
}

.card-heading {
	position: absolute;
	left: 10%;
	top: 15%;
	right: 10%;
	font-size: 1.75rem;
	font-weight: 700;
	color: #735400;
	line-height: 1.222;
	
}



.input {
	display: flex;
	flex-direction: column-reverse;
	position: relative;
	padding-top: 1.5rem;
	&+.input {
		margin-top: 1.5rem;
	}
}

.input-label {
	color: #8597a3;
	position: absolute;
	top: 1.5rem;
	transition: .25s ease;
}

.input-field {
	border: 0;
	z-index: 1;
	background-color: transparent;
	border-bottom: 2px solid #eee; 
	font: inherit;
	font-size: 1.125rem;
	padding: .25rem 0;
	&:focus, &:valid {
		outline: 0;
		border-bottom-color: #6658d3;
		&+.input-label {
			color: #6658d3;
			transform: translateY(-1.5rem);
		}
	}
}

.action {
	margin-top: 2rem;
    text-align: center;
}

.action-button {
	font: inherit;
	font-size: 20px;
	padding: 5px 40px ;
	
	font-weight: 500;
	background-color: #6658d3;
	border-radius: 6px;
	color: #FFF;
	border: 0;
	&:focus {
		outline: 0;
	}
}

.card-info {
	padding: 1rem 1rem;
	text-align: center;
	font-size: .875rem;
	color: #8597a3;
	a{
		display: block;
		color: #6658d3;
		text-decoration: none;
	}
}


#hidden{
   visibility:hidden;
}
#btn1{
    font: inherit;
	font-size: 20px;
	padding: 20 px 40px ;
	
	font-weight: 500;
	background-color: transparent;

	border-radius: 6px;
	color: #6658d3;
	border: solid #6658d3 ;
	&:focus {
		outline: 0;
	}
}
.navbar {
  width: 100%;
  background-color: #17252A;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 20px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: whitesmoke;
  color:#17252A;
  font-weight: bold;

}

.active {
  background-color: #04AA6D;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}


      </style>
      <script>
        function myfun(){
            document.getElementsByClassName("input-label").value = ""; 
            
        }
    </script>

</head>
<body>
<div class="container">
	<!-- code here -->
  <div class="navbar">
  <a  href="homepage.php"><i class="fa fa-backward" aria-hidden="true"></i>  Go Back to Student Account</a>
  <a href="course.php"><i class="fa fa-anchor" aria-hidden="true"></i> Tutor Spotlight</a>
  <a class="active" href="courseCreation.php"><i class="fa fa-bullseye" aria-hidden="true"></i> Course Enrollment</a>
  <a href="studentlist.php"><i class="fa fa-list" aria-hidden="true"></i> Student List</a>
  <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
</div>
	<div class="card">
		<div class="card-image">	
			
		</div>
        <form id="register-form"class="card-form" action="" method="post">
            <input type="hidden" name="id">
          <div class="row">
              
                  <div class="input">
                      
                      <input type="text" onkeypress="myfun()" class="input-field" reqiured="" placeholder="Course Name" name="coursename" id="coursename">
                  </div>
                  <div class="input">
                  
                      <input type="text"  onkeypress="myfun()"  class="input-field" placeholder="Course ID"  name="courseid" id="courseid">
                  </div>
                  <div class="input">
                      
                      <input type="text" onkeypress="myfun()"  class="input-field" placeholder="Email" reqiured="" name="email" id="email">
                  </div>
                  <div class="input">
                      
                      <input type="text" onkeypress="myfun()"  class="input-field" placeholder="Description" reqiured="" name="description" id="description">
                  </div>
              
              <div>
                <p  id="file_name"></p>
              </div>
              
              
              <div class="action" >
                
                <button type="submit"  name="btn1" id="btn1">Go Back</button>&emsp;
                <button type="submit" class="action-button" name="btn-course">Create Course</button>
                
                
              </div>

          </div>
         
        </form>
        

		
	</div>
</div>
<?php
$con=mysqli_connect('localhost','root','','softproj');
if(isset($_POST['btn-course']))
{
  $coursename=$_POST['coursename'];
  $courseid=$_POST['courseid'];
  $email=$_POST['email'];
  $description=$_POST['description'];
  
  $query="insert into course values('$email','$coursename','$courseid','$description');";
  $result1=mysqli_query($con,$query);
  if($result)
  {
	echo "<script>alert('Course Added Successfully')</script>";
  }
}
if(isset($_POST['btn1'])){
  echo "<script>window.location.assign('course.php')</script>";
}
?>
</body>
</html>