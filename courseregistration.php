
<?php
session_start();
?>
<html>
  <head>
  <link rel="stylesheet" href="https://resources/demos/style.css">
  <link rel="icon" type="image/x-icon" href="favicon1.ico">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
       body {font-family: Arial, Helvetica, sans-serif;
    margin:0;
    padding:0;
    background-color: #d4d4c4;}
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
      	
		.formdiv {
  			
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
		#myFile{
			border: none;

		}

		#btn1{
  			margin-left: 475px;
  			padding: 6px 6px;
  			background-color: #16a085;
		}
		#btn2{
  			margin-left: 50px;
  			padding: 6px 6px;
  			background-color: #16a085;
		}
		.bg{
			margin-left: 35px;
			width: 95%;
			height: 100%;
			background-color:rgb(247, 247, 244) ;
		}
.inputf{
	border: 2px solid #16a085;
  font-size:15px;
  font-weight:600;
}
.inputl{
	font-size: 30px; color:#16a085;
}
#subm{
  margin-left:0px;
}
#subm:hover{
  background-color:#16a085;
  color:white;
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

    </style>
  </head>
  <body>
    <?php 
    $username=$_SESSION['username'];
    $coursename=$_SESSION['coursename'];
     $con=mysqli_connect('localhost','root','','softproj');
     $query="select coursecode from cc where coursename='$coursename'; ";
     $result=mysqli_query($con,$query);
     $row=mysqli_fetch_row($result);
     $coursecode=$row[0];
     $query1="select RegNo from account where username='$username'; ";
     $result1=mysqli_query($con,$query1);
     $row1=mysqli_fetch_row($result1);
     $studentregno=$row1[0];

?>
    
  
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
<div id="formdiv1" class="formdiv" style="margin-top:10px;"><br />
		
      <form id="formin" method="post">
      <h1 id="h1">Register for the course</h1>
      	<label class="input1" style="font-size:30px">Name</label>
        <input  type="text" name="studentname" class="inputf" size="90px"  value="<?php echo $_SESSION['username']?>" /><br />
        <label class="inputl" >Reg_No</label>
        <input  type="text" name="studentregno" id="inp1" class="inputf" size="90px"  value="<?php echo $studentregno ?>"/> <br>
        <label  class="inputl">Course Code </label>
        <input  type="text" name="coursecode" class="inputf" size="90px" placeholder="XXX0000"  value="<?php echo $coursecode ?>"/><br />
        <label  class="inputl">Course Name </label>
        <input  type="text" name="coursename" class="inputf" size="90px" value="<?php echo $_SESSION['coursename']?>"  /><br />
        <input style="font-size: 1.5em" c
        lass="subm" type="submit" name="subm" value="Search Tutors">
      
        <?php
        if(isset($_POST['subm']))
        {
          
          $coursename=$_POST['coursename'];
          $coursecode=$_POST['coursecode'];
        echo "<h1 id='h1'>Available Tutors For the Course You Selected</h1> ";
  $query2="Select * from course where coursename='$coursename' and email <> '$username';";
  $result2=mysqli_query($con,$query2);
  $rowcount=mysqli_num_rows($result2);
  $arr=[];
  if($rowcount==0)
  {
    echo '<div id="cont2">
    <p>
    Sorry, There are no tutors available for this course at this moment.
    </p>
        </div>';
  }
  else{
  
  $i=1;
  echo "<div class='div1'>";
  echo "<table>";
  echo "<tr id='header'>";
  echo "<td>S.No</td>";
  echo "<td> Course Name</td>";
  echo "<td> Course Code</td>";
  echo "<td> Tutor Name</td>";
  echo "<td>Register Here</td>";
  echo "</tr>";
  echo "<tbody>";
  while($row=mysqli_fetch_assoc($result2))
  {
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$row['coursename']."</td>";
    echo "<td>".$row['courseid']."</td>";
    echo "<td>".$row['email']."</td>";
    $arr[]=$row['email'];
    echo "<td><input type='radio' name='radio' value='$i'> Register</td>";
    $i=$i+1;
    echo "</tr>";
  }

  echo "</tbody>";
  echo "</table>";
  echo "</div>";
}
echo "<br>";
 echo "<input style='font-size: 1.5em' class='subm' type='submit' name='submit' value='Register'>";
        }
?>
        <br>
				
      </form>
    </div>
    <?php 
       if(isset($_POST['submit']))
       {
        if(isset($_POST['radio']))
        
        {
          
          $coursename=$_POST['coursename'];
          $coursecode=$_POST['coursecode'];
          $value=$_POST['radio'];
          $tutorname= $arr[$value-1];
        $query4="select studentname from coursereg where tutorname='$tutorname' and coursename='$coursename'";
        $result4=mysqli_query($con,$query4);
        $row4=mysqli_fetch_assoc($result4);
        if($row4['studentname']==$username)
        {
          echo "<script>alert('You have already registered under this tutor for this course! Check Again')</script>";
        }
        else
        {
        $query5="select * from coursereg where coursename='$coursename' and studentname='$username'";
        $result5=mysqli_query($con,$query5);
        $row5=mysqli_num_rows($result5);
        if($row5>0)
        {
          echo "<script>alert('You have already Registered this course but have choosed a different tutor. Do you want to change the tutor?')</script>";
          $query6="update coursereg set tutorname='$tutorname' where studentname='$username' and coursename='$coursename'";
          $result6=mysqli_query($con,$query6);
        if($result6)
        {
          echo "<script>alert('Tutor Updated Successfully!. Your New Tutor will contact you')</script>";
        }
        else{
          echo "<script>alert('Course Updation Failed! Try again')</script>";
        }
        }
        else
        {
          $query3="insert into coursereg values('$coursename','$coursecode','$tutorname','$username')";
          $result3=mysqli_query($con,$query3);
          if($result3)
          {
            echo "<script>alert('Course Registered Successfully. Your Tutor will contact you')</script>";
          }
          else{
            echo "<script>alert('Course Registered Failed! Try again')</script>";
          }
        }
        }
      }
      
      else{
        echo "<script>alert('Select Any Tutor First!')</script>";
      }
    }


    ?>

    </body>
</html>