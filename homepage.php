<?php
session_start();
$_SESSION['coursename']="";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="icon" type="image/x-icon" href="favicon1.ico">
    <link rel='stylesheet' href='courselist.css'>
    <script>
    $( function() {
      var availableTags = ["Information Security","Software Engineering","Internet and Web Programming","Artificial Intelligence","C Language","C++ Language","Human Computer Interaction","Natural Language Processing","Internet of Things","Principles of Cloud Computing","BlockChain","Engineering Maths","Networks","JavaProgramming","JavaScript","Data Structures","Database Management","Operating System","Python","Computer Organization","Statisticts"];
      $( "#tags" ).autocomplete({source: availableTags});
    } );
      </script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <style media="screen">
    body {font-family: Arial, Helvetica, sans-serif;
    margin:0;
    padding:0;
    background:#b3d9ff;
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
.container{
  margin-left:20px;
}
#wel{
  font-style: italic;
  margin-bottom: 0;
}
#time{
  margin-top: 2px;
  font-style: italic;
}
.ui-widget{
	 right: 0;
	 top: 0;
	 position: absolute;

	 margin-top: 80px;
	 margin-right:80px;
}
.ui-widget{
    background: #fff;
    border-radius: 30px;
    padding: 10px 20px;
    cursor: pointer;
    box-shadow:inset 2px 2px 2px 2px rgba(255,255,255,.5),
    inset -7px -7px 10px 0px rgba(0,0,0,.1),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
   text-shadow:  0px 0px 6px rgba(255,255,255,.3),
              -4px -4px 6px rgba(116, 125, 136, .2);
  text-shadow: 2px 2px 3px rgba(255,255,255,0.5);
  box-shadow:  4px 4px 6px 2px rgba(255,255,255,.3),
              -4px -4px 6px 2px rgba(116, 125, 136, .2),
    inset -4px -4px 6px 0 rgba(255,255,255,.2),
    inset 4px 4px 6px 0 rgba(0, 0, 0, .2);
}
.ui-widget .search-input{
    background: transparent;
    border: none;
    outline:none;
    width: 0px;
    font-weight: 500;
    font-size: 25px;
	width: 400px;
}

.fade-in-text {
  font-family: Arial;
  font-size: 18px;
  animation: fadeIn 5s;
  position: relative;
}
.recommend{
	margin-top:12px ;
	margin-left: 320px;
	position: relative;
	color: #17252A;
}
@keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}
.recom tr td{
	border: solid 1px;
	padding: 20px;

}
.recom tr td img {
	border-radius: 40%;
	height: 100px;
	width: 100px;
	text-align: center;
}

.it{
  margin-right:30px;
padding: 10px 30px 10px 30px;
border: thin 2px;
box-shadow: 0 0 1px 1px;
border-color: #A1a1aa;
text-align: center;
border-radius: 35px;

}
img:hover{
  opacity:0.3;
}
#btn{
  border:none;
  background:transparent;
}
table td{
  background-color:white;
}
#cont1{
		align-items: center;
		width:570px;
		padding: 10px;
		font-size:30px;
		background-color:white;
		color:green ;
		text-align:center;
		font-weight:bolder;
    width:60%;
    margin:auto;
    
	}
  #cont1 span{
      color:red;
  }

  #header td{
    background-color: #17252A ;
    color:#fff;
    font-size: 1.5em;
  }
  #course td a{
    text-decoration:none;
    color:black;  
  }
    </style>

  </head>
<body id="bg1">

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
<div class="container">
  <?php
  $c=$_SESSION['count'];
  if($c==1)
  {
    echo "<h1 id='wel'>Welcome, ".$_SESSION['username']."</h1>";
  }
  else {
    echo "<h1 id='wel'>Welcome Back,".$_SESSION['username']."</h1>";
  }?>
  <h3 id="time"> <span id="salute"></span> What's Your Main Focus Today?</h3>
</div>
<script>
  var time = new Date();
  var t = time.getHours();
  var sal ;
  if(t>4 && t<12){
    sal = "GOOD MORNING...";
  }
  else if(t>11 && t<5){
    sal = "GOOD AFTERNOON...";
  }
  else if(t>4 && t<8){
    sal = "GOOD EVENING...";
  }
  else{
    sal = "GN";
  }
  document.getElementById("salute").innerHTML = sal;
</script>
<div class="ui-widget">
  <form method="POST">
  <input id="tags" name="search" placeholder="Enter Course name to Search..." class="search-input" required>
  <button type="submit" name="btn" id="btn" ><i class='fa fa-search' aria-hidden='true' style='color:green;font-size:25px'></i></button>
</form>
</div>
<?php
$con=mysqli_connect('localhost','root','','softproj');
$username=$_SESSION['username'];
$query="select * from coursereg where studentname='$username';";
$result=mysqli_query($con,$query);
$count=mysqli_num_rows($result);
echo "";
if($count==0)
{
    echo '<div id="cont1">
				<p>
				<span> You did not enroll in any courses.</span> Click here to Enroll now!
                <br> <a href="courseregistration.php"> Enroll for Courses </a>
				</p>
			</div>';
}
else
{
    echo "<div class='coursetable'> <h1 style='margin-left:20px;'> The courses enrolled by you are: </h1>";
    echo "<table id='course'>";
    echo "<tr id='header'>";
    echo "<td>S.No</td>";
    echo "<td>Course Name</td>";
    echo "<td>Course Code</td>";
    echo "<td> Tutor Name</td>";
    echo "<td>See Messages</td>";
    echo "</tr>";
    $i=1;

    while($row=mysqli_fetch_assoc($result))
    {
       
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$row['coursename']."</td>";
        echo "<td>".$row['coursecode']."</td>";
        echo "<td>".$row['tutorname']."</td>";
        echo "<td><a href='smessage.php'>Click Here</a></td>";
        echo "</tr>";
        $i=$i+1;
    }
    echo "</table>";
    echo "</div>";
}
?>


<div class="fade-in-text">
  <h3 style="font-size:2em;margin-left:20px;margin-bottom:0">Recommended Courses</h3>
</div>

<div class="table_1" >
<table style="border-spacing: 25px 30px;">

  <tr >
    <td class="it" style="margin-left:30px"><a href="courseregistration.php"><img src="images/java.png" height="100px" width="100px" alt="java" align = "center"></a><div align="center"></div><br>JAVA<br><ion-icon id="tutoricon" title="Tutors_available"name="contacts" size="small"></ion-icon>&nbsp;55&nbsp;|&nbsp;CSE1007&nbsp;|<ion-icon name="time"></ion-icon>&nbsp;30hrs</div></td>
    <td class="it" style="padding-left:30px"><a href="courseregistration.php"><img src="images/oss.png" height="100px" width="100px" alt="python" ></a><div align="center"><br>Python<br><ion-icon id="tutoricon" title="Tutors_available"name="contacts" size="small"></ion-icon>&nbsp;38&nbsp;|&nbsp;CSE1034&nbsp;|<ion-icon name="time"></ion-icon>&nbsp;30hrs</div></td>
    <td class="it" style="padding-left:30px"><a href="courseregistration.php"><img src="images/dsa.png" height="100px" width="100px" alt="dsa"></a><div align="center"><br>Data Structures<br><ion-icon id="tutoricon" title="Tutors_available"name="contacts" size="small"></ion-icon>&nbsp;72&nbsp;|&nbsp;CSE1041&nbsp;|<ion-icon name="time"></ion-icon>&nbsp;30hrs</div></td>
    <td class="it" style="padding-left:30px"><a href="courseregistration.php"><img src="images/sql.jpeg" height="100px" width="100px" alt="sql"></a><div align="center"><br>SQL<br><ion-icon id="tutoricon" title="Tutors_available"name="contacts" size="small"></ion-icon>&nbsp;72&nbsp;|&nbsp;CSE1025&nbsp;|<ion-icon name="time"></ion-icon>&nbsp;30hrs</div></td>
  </tr>
</table>
</div>

<div class="table_1" >
  <table style="border-spacing: 25px 30px;">

    <tr >
      <td class="it"><a href="courseregistration.php"><img src="images/os.jpg" height="100px" width="100px" alt="java" align = "center"></a><div align="center"></div><br>Operating System<br><ion-icon id="tutoricon" title="Tutors_available"name="contacts" size="small"></ion-icon>&nbsp;55&nbsp;|&nbsp;CSE1007&nbsp;|<ion-icon name="time"></ion-icon>&nbsp;30hrs</div></td>
      <td class="it"><a href="courseregistration.php"><img src="images/python.png" height="100px" width="100px" alt="python" ></a><div align="center"><br>Python<br><ion-icon id="tutoricon" title="Tutors_available"name="contacts" size="small"></ion-icon>&nbsp;38&nbsp;|&nbsp;CSE1123&nbsp;|<ion-icon name="time"></ion-icon>&nbsp;30hrs</div></td>
      <td class="it"><a href="courseregistration.php"><img src="images/webdev.png" height="100px" width="100px" alt="webdev"></a><div align="center"><br>Web Development<br><ion-icon id="tutoricon" title="Tutors_available"name="contacts" size="small"></ion-icon>&nbsp;72&nbsp;|&nbsp;CSE1125&nbsp;|<ion-icon name="time"></ion-icon>&nbsp;30hrs</div></td>
      <td class="it"><a href="courseregistration.php"><img src="images/bck.jpg" height="100px" width="100px" alt="sql"></a><div align="center"><br>Blockchain<br><ion-icon id="tutoricon" title="Tutors_available"name="contacts" size="small"></ion-icon>&nbsp;72&nbsp;|&nbsp;CSE1178&nbsp;|<ion-icon name="time"></ion-icon>&nbsp;30hrs</div></td>
    </tr>
  </table>
</div>
<?php 
if(isset($_POST['btn']))
{
   $coursename=$_POST['search'];
   $_SESSION['coursename']=$coursename;
   echo "<script>window.location.assign('courseregistration.php')</script>";
}
?>


</body>

</html>
