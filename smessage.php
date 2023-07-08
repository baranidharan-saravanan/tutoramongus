<?php
  session_start();
  $username=$_SESSION['username'];

?>
<html>
    <head>
        <title> Student Messages</title>
        <link rel="stylesheet" href="https://resources/demos/style.css">
        <link rel="icon" type="image/x-icon" href="favicon1.ico">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <style>
            body {font-family: Arial, Helvetica, sans-serif;
    margin:0;
    padding:0;
    background:#e6ffff;
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

.divide{
    background:white;
    border: 2px solid black;
}
#p{
    font-size:1.5em;
}
#cont2{
  margin:auto;
		align-items: center;
		width:500px;
		padding: 10px;
		font-size:30px;
		background-color:white;
		color:green ;
		text-align:center;
		font-weight:bolder;
	}

        </style>
    </head>
    <body>
    <div class="navbar">
  <a class="active" href="homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
  <a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i> Account</a>
  <a href="tsignup.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Tutor Account</a>
  <a href="courseregistration.php"><i class="fa fa-line-chart" aria-hidden="true"></i> Enroll Courses</a>
  <a href="uploadfile.php"><i class="fa fa-book" aria-hidden="true"></i> Upload Materials</a>
  <a href="accessmaterials.php"><i class="fa fa-upload" aria-hidden="true"></i> Access Materials</a>
  <a href="smessage.php"><i class="fa fa-comments" aria-hidden="true"></i> Messages</a>
  <a href="about.php"><i class="fa fa-info-circle" aria-hidden="true"></i> About Us</a>
  <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
</div>
        <h1>Here, You can see the messages received from your tutor!</h1>
       <?php
         $con=mysqli_connect('localhost','root','','softproj');
         $query="select * from message where studentname='$username'";
         $result=mysqli_query($con,$query);
         $rowcount=mysqli_num_rows($result);
  if($rowcount==0)
  {
    echo '<div id="cont2">
    <p>
    Sorry, There are no messages available for you at this moment. Come Back Later
    </p>
        </div>';
  }
  else
  {
         while($row=mysqli_fetch_assoc($result))
         {
            echo "<div class='divide'>";
            echo "<h2> Tutor Name <i class='fa fa-arrow-right' aria-hidden='true'></i> ".$row['tutorname']."&emsp;&emsp;&emsp;Course Name <i class='fa fa-arrow-right' aria-hidden='true'></i> ".$row['coursename']."</h2>";
            echo "<p id='p'> Message Sent is: ".$row['message']."</p>";
            echo "</div>";
         }
        }

       ?>
    </body>
    


</html>