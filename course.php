<?php
session_start();
?>
<link rel="stylesheet" href="https://resources/demos/style.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="favicon1.ico">
<style>
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
      tr:hover{
        background-color: lightblue;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0,0,0,0.2), -1px -1px 8px rgba(0,0,0,0.2);

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
      
      #page-title{
      text-shadow: 6px 4px 7px black;
      font-size: 3.5em;
      color: #fff4f4 !important;
      background: #8080801c;
    }
    body{
      background-image: url('images/tutor.webp');
      background-size:cover;
      background-repeat:no-repeat;
      backdrop-filter: contrast(1);
      overflow-x:hidden;
      font-family: Arial, Helvetica, sans-serif;
    margin:0;
    padding:0;
    }
    /* a:link, a:visited{
  background-color: #f44336;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}


a:hover, a:active {
  background-color: red;
} */

#gb{
  background-color: #f44336;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  background-color: red;
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
      <div class="navbar">
  <a  href="homepage.php"><i class="fa fa-backward" aria-hidden="true"></i>  Go Back to Student Account</a>
  <a class="active" href="course.php"><i class="fa fa-anchor" aria-hidden="true"></i> Tutor Spotlight</a>
  <a  href="createCourse.php"><i class="fa fa-bullseye" aria-hidden="true"></i> Course Enrollment</a>
  <a href="studentlist.php"><i class="fa fa-list" aria-hidden="true"></i> Student List</a>
  <a href="formhtml.php"><i class="fa fa-comment" aria-hidden="true"></i> Message</a>
  <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
</div>
      <h1 style="font-size:3em;text-align:center;color:black"><b>Course List </b> <small>, Tutored By You</small></h1>
<?php

$con=mysqli_connect('localhost','root','','softproj');

$email=$_SESSION['username'];
$query="select * from course where email='$email'";
$result1=mysqli_query($con,$query);
?>
<table border=0>
   <tr id="header"><td>Course Name</td>
    <td>Course ID</td>
    <td>Description</td>
    <td>Number of Students Registered</td>
  </tr>
    <?php
while($arr=mysqli_fetch_array($result1)){
    echo "<tr>";
    echo "<td>".$arr["coursename"]."</td>";
    $temp=$arr["coursename"];
    $query1="select studentname from coursereg where tutorname='$email' and coursename='$temp' ";
    $resulttemp=mysqli_query($con,$query1);
    $counttemp=mysqli_num_rows($resulttemp);
    echo "<td>".$arr["courseid"]." </td>";
    echo "<td>".$arr["description"]."</td>";
    echo "<td>".$counttemp."</td>";
    echo "</tr>";
}
            
?>
</table>
<?php
   
?>



