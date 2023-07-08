<?php
session_start();
?>


<html>
    <head>
        <title>
            Messages
        </title>
        <link rel="stylesheet" href="formdesign.css">
        <link rel="stylesheet" href="https://resources/demos/style.css">
        <link rel="icon" type="image/x-icon" href="favicon1.ico">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <style>
          body{
            font-family: Arial, Helvetica, sans-serif;
            background:white;
            display:block;
          }
          #btn{
            margin-top:150px;
          }
          .center{
            background-color:#B8C6BF;
            border: 2px solid black;
            max-width:500px;
            height: 650px;
            width:50%;
            margin:auto;
          }
          .button {
    background-color:green; /* Green */
    border: none;
    color: green;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    font-weight:bold;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
  }
  
  .button1 {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
  }
  
  .button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
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

  .formdiv {
  			background-color: rgb(247, 247, 244);
  			width: 75%;
  			margin: auto;
  			margin-top: 40px;
  			text-align: left;
  			padding-bottom: 70px;

		}
		form{
			margin-left: 30px;
		}

		form label {
  			display: inline-block;
  			text-align: right;
  			padding-left: 20px;
  			width: 200px;
  			height: 50px;
  			font-weight: bold;
				font-size: 20px;
				color: #16a085;
		}

		form input {
  			margin-left: 25px;
		}

		form select {
  			margin-left: 25px;
  			padding-top: 5px;
  			padding-bottom: 5px;
  			padding-right: 14px;
  			text-align: left;
		}

		form input {
  			padding: 7px 20px;
  			border: 3px solid #16a085;
  			border-radius: 6px;
  			width: auto;
		}
    #msg{
      position:absolute;
      left:470px;
      top:300px;
      border: 4px solid #17252a;
      margin-bottom:20px;
      margin-left:23px;" 
      border-radius:10%;
    }

        </style>
    </head>
    <body>
    <div class="navbar">
  <a  href="homepage.php"><i class="fa fa-backward" aria-hidden="true"></i>  Go Back to Student Account</a>
  <a  href="course.php"><i class="fa fa-anchor" aria-hidden="true"></i> Tutor Spotlight</a>
  <a  href="createCourse.php"><i class="fa fa-bullseye" aria-hidden="true"></i> Course Enrollment</a>
  <a  href="studentlist.php"><i class="fa fa-list" aria-hidden="true"></i> Student List</a>
  <a class="active" href="formhtml.php"><i class="fa fa-comment" aria-hidden="true"></i> Message</a>
  <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
</div>
<div id="formdiv1" class="formdiv" style="margin-top:10px;"><br />
		<h1 id="h1">Post Your Message, <small>to the students your registered</small></h1>
      <form id="formin" method="post" enctype="multipart/form-data">
      	<label style="font-size: 30px; color:#17252a;">Name</label>
        <input style="border: 4px solid #17252a;margin-bottom:20px;" type="text" name="studentname" id="inp1" class="inputf" size="90px" required/><br />
        <label style="font-size: 30px; color:#17252a;" class="inputl">Course Name </label>
        <input style="border: 4px solid #17252a;margin-bottom:20px;" type="text" name="coursename" class="inputf" size="90px" required /><br />
        <p style="font-size: 30px; color:#17252a;" class="inputl">Message to Send </p>
        <textarea name="msg" id="msg" cols="34" rows="10" placeholder="Enter any Message Here"></textarea> <br>
				<input style="font-size: 1.5em" id="subm" type="submit" name="submit" value="Upload">
      </form>
    </div>
          <?php
             $con=mysqli_connect('localhost','root','','softproj');
             if($con)
             {
              if(isset($_POST['submit']))
             {
              $studentname=$_POST['studentname'];
              $coursename=$_POST['coursename'];
              $username=$_SESSION['username'];
              $message=$_POST['msg'];
              $query1="select * from coursereg where studentname='$studentname' and coursename='$coursename'";
              $result1=mysqli_query($con,$query1);
              $count1=mysqli_num_rows($reuslt1);
              if($count1==0)
              {
                echo "<script>alert('You dont have such student registered under you. Check Again')</script>";
              }
              else
              {
              $query="insert into message values('$studentname','$username','$coursename','$message')";
              $result=mysqli_query($con,$query);
              if($result)
              {
                echo "<script>alert('Message sent Successfully')</script>";
              }
            }
             }
             }
             

          ?>
    </body>
</html>