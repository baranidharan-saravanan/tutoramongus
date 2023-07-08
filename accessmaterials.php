<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Access Material Page</title>

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
      }
      table{
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
#cont2{
  margin:auto;
		align-items: center;
		width:500px;
		padding: 10px;
		font-size:30px;
		background-color:white;
		color:red ;
		text-align:center;
		font-weight:bolder;
	}

.active {
  background-color: #04AA6D;
}
.container
{
  margin-top: 60px;
}
    </style>
</head>
<body style="background-color:white">
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
<h1 style="margin-bottom:0;padding-bottom:0">Access Materials</h1>
<h3 style="text-align:center;margin-top:0;">Download materials of your choice anytime here... </h3>
<div class="ui-widget">
  <form method="post" >
  <label for="tags" id="label1">Search By CourseName: </label> <br>
  <input id="tags" name="tag" required> <br>
  <input id="btn" type="submit" name="subtn" value="Search" onclick="myfunc()"/> <br>
  </form>
</div>
</div>
<?php
$con=mysqli_connect('localhost','root','','softproj');
if(isset($_POST['subtn']))
{
  $x=$_POST['tag'];
  $query="Select * from material where coursename='$x';";
  $result1=mysqli_query($con,$query);
  $rowcount=mysqli_num_rows($result1);
  if($rowcount==0)
  {
    echo '<div id="cont2">
    <p>
    Sorry, There are no files available for this course at this moment.
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
  echo "<td> Student Reg No</td>";
  echo "<td> Uploaded File<td>";
  echo "</tr>";
  echo "<tbody>";
  while($row=mysqli_fetch_array($result1))
  {
    echo "<tr>";
    echo "<td>".$i++."</td>";
    echo "<td>".$row['coursename']."</td>";
    echo "<td>".$row['coursecode']."</td>";
    echo "<td>".$row['sname']."</td>";
    echo "<td>".$row['sregno']."</td>";
    $temp=$row['fname'];
    $path='materialsfolder\\'.$temp;
    echo "<td><a download='$path' href='$path'>$temp</a></td>";
    echo "</tr>";
  }
  echo "</tbody>";
  echo "</table>";
  echo "</div>";
}
}
?>


</body>
</html>
