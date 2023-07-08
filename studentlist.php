
<?php 
session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student List</title>

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://resources/demos/style.css">
  <link rel="icon" type="image/x-icon" href="favicon1.ico">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {
    var availableTags = ["Information Security","Software Engineering","Internet and Web Programming","Artificial Intelligence","C","C++","Human Computer Interaction","Natural Language Processing","Internet of Things","Principles of Cloud Computing","BlockChain","Engineering Maths","Networks","JavaProgramming","JavaScript","Data Structures","Database Management","Operating System","Python","Computer Organization","Statisticts"];
    $( "#tags" ).autocomplete({source: availableTags});
  } );
    </script>
    <style media="screen">
      body{
        font-family: Verdana,Geneva,Tahoma, sans-serif;
        background-color:#d4d4c4;
        background-image: url('images/fileup.jpeg');
	    background-repeat: no-repeat;
	    background-size: cover;
      }
      table{
        position: absolute;
		left:200px;
		top:250px;
        align-content: center;
        border-collapse: collapse;
        border: 1px solid #17252A;
        margin-left: auto;
        margin-right: auto;
        width:1100px;
        box-shadow: 2px 2px 12px rgba(0,0,0,0.2), -1px -1px 8px rgba(0,0,0,0.2);
      }

      tr{
        transition: all .2s ease-in;
        cursor: pointer;
      }

      #header td{
        background-color: #17252A ;
        color:#fff;
        font-size: 1.5em;
      }
      td{
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #17252A;
        background-color: white;
      }
      td a{
        color:black;
        text-decoration:none;
      }
      h1{
        font-weight: 600;
        text-align: center;
        color:#17252A ;
        padding: 10px 0px;
      }
      #h2{
        color:#17252A ;
        text-align: center;
        margin-bottom: 0;
        padding-bottom: 0;
      }
      #tags{
        font-weight: bold;
        height: 30px;
        width:30%;
        border: 2px solid #17252A ;
        margin: 12px 10px;
        box-shadow: 2px 2px 12px rgba(0,0,0,0.2), -1px -1px 8px rgba(0,0,0,0.2);
      }
      #label1{
        margin: 12px 10px;
        color: #17252A ;
        text-decoration: underline;
        font-weight: bolder;
        font-size: 27px;
        height: 30px;
        width:30%;
      }
      #btn{
        margin: 12px 10px;
        padding: 10px;
        color:white;
        background-color: #17252A;
        height: auto;
        width:10%;
        font-weight: bolder;
        font-size: 1.5em;
        border-radius: 5%;
      }
      tr:hover{
        background-color: lightblue;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0,0,0,0.2), -1px -1px 8px rgba(0,0,0,0.2);

      }
.navbar {
  position: absolute;
  top:0;
  left:0;
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
#cont2{
		align-items: center;
		width:auto;
		position: absolute;
		left:150px;
		top:250px;
		padding: 10px;
		font-size:30px;
		background-color:white;
		color:red ;
		text-align:center;
		font-weight:bolder;
	}
    #h1{
        font-size:2.5em;
        margin-bottom:0;
        margin-top:100px;
        color:white;
    }
    #div3
    {
       color:white;
       text-align:center;
    }
    </style>
</head>
<body style="background-color:#d4d4c4">
<div class="navbar">
  <a  href="homepage.php"><i class="fa fa-backward" aria-hidden="true"></i>  Go Back to Student Account</a>
  <a  href="course.php"><i class="fa fa-anchor" aria-hidden="true"></i> Tutor Spotlight</a>
  <a  href="createCourse.php"><i class="fa fa-bullseye" aria-hidden="true"></i> Course Enrollment</a>
  <a class="active" href="studentlist.php"><i class="fa fa-list" aria-hidden="true"></i> Student List</a>
  <a href="formhtml.php"><i class="fa fa-comment" aria-hidden="true"></i> Message</a>
  <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
</div>
<div id="div3">
<h1 id="h1">Students List </h1> 
<h2 style="margin-top:0;">You can find students registered under you!</h2>
</div>
<?php
$username=$_SESSION['username'];
$con=mysqli_connect('localhost','root','','softproj');
$query="Select * from coursereg where tutorname='$username';";
$result1=mysqli_query($con,$query);
$count=mysqli_num_rows($result1);

if($count==0)
{
    echo '<div id="cont2">
    <p>
    Sorry! We find that there is no student registered under you! <br>
    We will soon let you know when someone registers under you! Good Luck
    </p>
            </div>';
}
else
{
  $i=1;
  
  echo "<div class='div1'>";
  echo "<table>";
  echo "<tr id='header'>";
  echo "<td>S.No</td>";
  echo "<td> Course Name</td>";
  echo "<td> Course Code</td>";
  echo "<td> Student Name</td>";
  echo "<td>Total Number of Students Registered</td>";
  echo "<td> Contact</td>";
  echo "</tr>";
  echo "<tbody>";
  while($row=mysqli_fetch_array($result1))
  {
    echo "<tr>";
    echo "<td>".$i++."</td>";
    echo "<td>".$row['coursename']."</td>";
    echo "<td>".$row['coursecode']."</td>";
    echo "<td>".$row['studentname']."</td>";
    $temp=$row["coursename"];
    $query1="select studentname from coursereg where tutorname='$username' and coursename='$temp' ";
    $resulttemp=mysqli_query($con,$query1);
    $counttemp=mysqli_num_rows($resulttemp);
    echo "<td>".$counttemp."</td>";
    echo "<td><a href='message.php'>Message</td>";
    echo "</tr>";
  }
  echo "</tbody>";
  echo "</table>";
  echo "</div>";
}
?>


</body>
</html>
