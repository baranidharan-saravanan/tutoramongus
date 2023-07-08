<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon1.ico">
  	<title>Tutor Signup Page</title>
    
  </head> <script>
    start_loader()
  </script>
  <style>
    html, body{
        width:100%;
        height:100% !important;
    }
    body{
      background-size:cover;
      background-repeat:no-repeat;
      backdrop-filter: contrast(1);
      overflow-x:hidden
    }
    #page-title{
      text-shadow: 6px 4px 7px black;
      font-size: 3.5em;
      color: #fff4f4 !important;
      background: #8080801c;
    }
    img#cimg{
      height: 5em;
      width: 5em;
      object-fit: cover;
      border-radius: 100% 100%;
    }
.btn{
  background-color: #f44336;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300);
* {
  font-family: 'Open Sans', sans-serif;
}

body {
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-repeat: no-repeat;
  background:rgb(247, 247, 244);
}

.signupSection {
  background-repeat: no-repeat;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 1000px;
  height: 670px;
  text-align: center;
  display: flex;
  color: white;
  box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .5);
}

.info {
  width: 60%;
  background: rgba(20, 20, 20, .8);
  padding: 30px 0;
  border-right: 5px solid rgba(30, 30, 30, .8);
  h2 {
    padding-top: 30px;
    font-weight: 300;
  }
  p {
    font-size: 18px;
  }
  .icon {
    font-size: 8em;
    padding: 20px 0;
    color: rgba(10, 180, 180, 1);
  }
}

.signupForm {
  width: 70%;
  padding: 30px 0;
  background: rgba(20, 40, 40, .8);
  transition: .2s;		
  width: 90%;
  text-align: left;
  padding-left:30px;
}
form label{
    display: inline-block;
  	text-align: right;
  	padding-left: 20px;
  	width: 200px;
  	height: 50px;
  	font-weight: bold;
	font-size: 20px;
	color: #d4d4c4;
}

.inputFields {
  margin: 15px 0;
  font-size: 16px;
  padding: 10px;
  margin-left:10px;
  width: 250px;
  border: 1px solid #16a085;
  border-top: none;
  border-left: none;
  border-right: none;
  background: rgba(20, 20, 20, .2);
  color: white;
  outline: none;
}

.noBullet {
  list-style-type: none;
  padding: 0;
}

#join-btn {
    margin-left:234px;
  border: 1px solid #16a085;
  background: rgba(20, 20, 20, .6);
  font-size: 18px;
  color: white;
  margin-top: 20px;
  padding: 10px 50px;
  cursor: pointer;
  transition: .4s;
}
#join-btn:hover {
    background: #d4d4c4;
    padding: 10px 80px;
    color:black;
    font-size:1.5em;
    font-weight:600;
  }
  .btn{
    position:absolute;
    top:150px;
    left:1024px;
    border: 1px solid #ff4d4d;
  background: rgba(20, 20, 20, .6);
  font-size: 18px;
  color: white;
  margin-top: 20px;
  padding: 10px 50px;
  cursor: pointer;
  transition: .4s;
  }
  .btn:hover {
    background: #d4d4c4;
    padding: 10px 40px;
    color:black;
    font-size:1.5em;
    font-weight:600;
  }

  .lb{
    text-align:left;
    
  }
  #heading
  {
    position:absolute;
    top:20px;
    left:265px;
    text-align:center;
    margin-bottom:0;
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
  #delbtn{
    border:none;
    background:transparent;
    color:white;
    margin-top:30px;
    font-size:1.3em;
  }
  </style>
  <script>
    function myfunc()
    {
        window.location.assign('homepage.php');
    }
  </script>
<body style="background-color:#d4d4c4">
  <h1 id="heading"><b>Tutor SignUp, </b> <small>Create Your Tutor Accout Here</small></h1>
  <div class="signupSection">
  <div class="info">
    <h2>Mission to Goal</h2>
   <img src="images/tutorimg.webp" alt="summa" width="300" height="300"> <br> <br>
   <h2 style="margin-bottom:0;">When one teaches, two learn</h2>
   <p style="margin-top:10px;"> -Robert Heinlein</p>
   <p style="margin-top:50px;margin-bottom:0">Click Here to Delete Your Previous Tutor Account</p>
   <form method="POST">
   <input type="submit" id="delbtn" name='del'value="Delete?">
   </form>
  </div>
  <form method="POST" class="signupForm" name="signupform" enctype="multipart/form-data">
    <h1>Sign Up</h1>
    <ul class="noBullet">
      <li>
      <label class="lb" for="Email">Username</label>
        <input type="text" class="inputFields" name="email" placeholder="Email" value="<?php echo $_SESSION['username'] ?>" required/>
      </li>
      <li>
        <label class="lb" for="Firstname">First Name</label>
        <input type="text" class="inputFields"  name="firstname" placeholder="Firstname" value="" required/>
      </li>
      <li>
      <label class="lb" for="Middlename">Middle Name</label>
        <input type="text" class="inputFields"  name="middlename" placeholder="Middle Name" value=""/>
      </li>
      <li>
      <label class="lb" for="Lastname">Lastname</label>
        <input type="text" class="inputFields" name="lastname" placeholder="Last name" value="" required/>
      </li>
      <li>
      <label class="lb" for="Resume">Resume</label>
        <input type="file" class="inputFields"  name="pdf_file" placeholder="Resume" accept="application/pdf" value="" required/>
      </li>
      <li>
      <label class="lb" for="Avatar">Avatar</label>
        <input type="file" class="inputFields"  name="img" placeholder="Avatar" accept="image/png, image/jpeg" value="" required/>
      </li>
      <li id="center-btn">
        <input type="submit" id="join-btn" name="btn" alt="Join" value="Join">
        
      </li>
      <li id="center-btn">
        <h2>Already a Tutor?<a style="color:white" href="tutorLogin.php">Login here!</a></h2>
        
      </li>
    </ul>
  </form>
  
</div>
<button type="submit" class="btn" name="btn1" id="btn1" onclick="myfunc()">Go Back</button>
<?php
$con=mysqli_connect('localhost','root','','softproj');
if($con)
{
if(isset($_POST['btn']))
{
  $email=$_SESSION["username"];
  $query="select * from tutor where email='$email'";
  $result=mysqli_query($con,$query);
  $count=mysqli_num_rows($result);
  if($count>0)
  {
    echo "<script>alert('You already have a tutor Account.Do you want to Login?)'</script>";
    $update="update login set tutorstat=1 where email='$email'";
    $result2=mysqli_query($con,$update);
    echo "<script>window.location.assign('tutorLogin.php')</script>";
  }
  else{
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    
    $file_name=$_FILES['pdf_file']['name'];
    $file_tmp=$_FILES['pdf_file']['tmp_name'];
    $file_img=$_FILES['img']['name'];
    $file_tmp1=$_FILES['img']['tmp_name'];
    move_uploaded_file($file_tmp,"resumefolder/".$file_name);
    move_uploaded_file($file_tmp1,"imagefolder/".$file_img);
    $insert="insert into tutor(firstname,middlename,lastname,email,file_name,file_img) values('$firstname','$middlename','$lastname','$email','$file_name','$file_img');";
    
    $result1=mysqli_query($con,$insert);
    if($result1)
    {
      $update="update login set tutorstat=1 where email='$email'";
      $result2=mysqli_query($con,$update);
      if($result2)
      {
        echo "<script>alert('You are now a tutor')</script>";
      }
      echo '<div id="cont1">
          <p>
          Tutor Account Created Successfully
          </p>
        </div>';
        echo "<script>window.location.assign('tutorLogin.php)</script>";
    }
  }
}
}
if(isset($_POST['del']))
{
  $username=$_SESSION['username'];
  $query="update login set tutorstat=0 where email='$username'";
  $result=mysqli_query($con,$query);
  $query1="delete * from tutor where email='$username'";
  $result1=mysqli_query($con,$query1);
  if($result && $result1)
  {
    echo "<script>alert('Successfully deleted your tutor account!')</script>";
  }
}
?>

</body>
</html>