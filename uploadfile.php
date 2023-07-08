	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Upload_material</title>
  <link rel="stylesheet" href="uploadmaterials.css">

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="favicon1.ico">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
</script>
<style media="screen">

#formin input{
	font-weight:bold;
	font-size: 15px;
}
	#subm{
		margin: 12px 10px;
	  padding: 10px;
	  color:white;
	  background-color: #17252a ;
	  height: auto;
	  width:10%;
	  font-weight: bolder;
	  font-size: 2em;
		border-color:#17252a ;
		position: absolute;
		left:265px;
	}
	#goback{
		margin: 12px 10px;
	  padding: 10px;
	  color:white;
	  background-color: grey ;
	  height: auto;
	  width:10%;
	  font-weight: bolder;
	  font-size: 2em;
		border-color:#17252a ;
		position: absolute;
		left:500px;
	}
	#bd1{
		background: url("images/bgnotes1.png");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  margin: 0px;
  margin-top: 220px;
  background-color: rgba(0, 0, 0, 0.6);
  background-blend-mode: saturation;
	}
	#formdiv1{
		background-color: white;
		position: absolute;
		top:100px;
		left:200px;
		box-shadow: 2px 2px 12px rgba(0,0,0,0.2), -1px -1px 8px rgba(0,0,0,0.2);
	}
	#h1{
		text-align: center;
		padding-top: 5px;
		font-size: 45px;
		color:#17252a ;
		margin-top:0;
		margin-bottom: 0;
		font-weight:bold;
	}
	#cont1{
		align-items: center;
		width:500px;
		padding: 10px;
		font-size:30px;
		position: absolute;
		left:500px;
		top:750px;
		background-color:white;
		color:green ;
		text-align:center;
		font-weight:bolder;
	}
	#cont2{
		align-items: center;
		width:500px;
		position: absolute;
		left:500px;
		top:750px;
		padding: 10px;
		font-size:30px;
		background-color:white;
		color:red ;
		text-align:center;
		font-weight:bolder;
	}
	.navbar {
		position: absolute;
	  top:0;
		margin:auto;
		width:100%;
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
</head>
<body id="bd1">
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
		<h1 id="h1">Share your materials</h1>
      <form id="formin" method="post" enctype="multipart/form-data">
      	<label style="font-size: 30px; color:#17252a;">Name</label>
        <input style="border: 4px solid #17252a;margin-bottom:20px;" type="text" name="studentname" id="inp1" class="inputf" size="90px" required/><br />
        <label style="font-size: 30px; color:#17252a;" class="inputl" >Reg_No</label>
        <input style="border: 4px solid #17252a;margin-bottom:20px;" type="text" name="studentregno" class="inputf" size="90px" placeholder="11XXX0000" required/><br />
        <label style="font-size: 30px; color:#17252a;" class="inputl">Course Code </label>
        <input style="border: 4px solid #17252a;margin-bottom:20px;" type="text" name="coursecode" class="inputf" size="90px" placeholder="XXX0000" required/><br />
        <label style="font-size: 30px; color:#17252a;" class="inputl">Course Name </label>
        <input style="border: 4px solid #17252a;margin-bottom:20px;" type="text" name="coursename" class="inputf" size="90px" required /><br />
        <label style="font-size: 30px; color:#17252a;" class="inputl">Chapter Name </label>
        <input style="border: 4px solid #17252a;margin-bottom:20px;" type="text" class="inputf" size="90px" required/><br />
        <label style="font-size: 30px; color:#17252a;" class="inputl">Concept </label>
        <input style="border: 4px solid #17252a;margin-bottom:20px;" type="text" class="inputf" size="90px" required/><br />
        <label style="font-size: 30px; color:#17252a;" class="inputl">Material </label>
        <input style="border: 4px solid #17252a;margin-bottom:20px;" type="file" class="inputf" name="pdf_file" accept="application/pdf" ><br>
				<input style="font-size: 1.5em" id="subm" type="submit" name="submit" value="Upload">
      </form>
    </div>
<?php
$con=mysqli_connect('localhost','root','','softproj');
if(isset($_POST['submit']))
{
  $coursecode=$_POST['coursecode'];
  $coursename=$_POST['coursename'];
  $studentregno=$_POST['studentregno'];
  $studentname=$_POST['studentname'];
  $file_name=$_FILES['pdf_file']['name'];
  $file_tmp=$_FILES['pdf_file']['tmp_name'];
  $query="select * from material where fname='$file_name';";
  $result1=mysqli_query($con,$query);
  $count=mysqli_num_rows($result1);
  if($count>0)
  {
    echo '<div id="cont2">
<p>
Error!Filename is already present
</p>
		</div>';
  }
  else {
    move_uploaded_file($file_tmp,"materialsfolder/".$file_name);
    $insert="insert into material(coursecode,coursename,sregno,sname,fname) values('$coursecode','$coursename','$studentregno','$studentname','$file_name');";
    $result=mysqli_query($con,$insert);
			echo '<div id="cont1">
				<p>
				File Uploaded Successfully
				</p>
			</div>';
  }
}
?>
</body>

</html>
