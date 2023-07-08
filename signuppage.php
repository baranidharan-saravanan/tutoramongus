<?php
session_start();
 ?>
<html>
    <head>
        <title>
            SignUp page
        </title>
        <link rel="stylesheet" href="signupdesign.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,600&display=swap" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="favicon1.ico">
        <style media="screen">
        .box{
          margin:auto;
          width:50%;
          height:690px;
          -webkit-box-shadow: 0 0 10px black;
           box-shadow: 0 0 10px black;
        }
        .box::before
        {
        width: 450px;
        height: 600px;}
        .box::after
        {
        width: 450px;
        height: 600px;}
        .links a{
          color:#17252A;
        }
        input[type="submit"]
        {
        font-size: 1.5em;
        width:215px;}
        .links{
          justify-content: space-between;
        }
        .inputBox input:valid ~ i,.inputBox input:focus ~ i{
          height: 56px;

        }
        .inputBox input:valid ~ span,.inputBox input:focus ~ span{
          color: #17252A;
          transform: translateX(0px) translateY(-34px);
          font-size: 1.5em;
        }
        .inputBox span{
          position: absolute;
          left: 0;
          font-size: 1.5em;
          color: #8f8f8f;
          pointer-events: none;
          letter-spacing: 0.05em;
          transition: 0.5s;
        }
        .inputBox input{
          width:350px;
          font-size: 1.5em;
          color:white;
        }
        .form{
          justify-content: space-evenly;
        }
        .form h2{
          font-size: 2.5em;
        }
        .about{
          margin-left: 100px;
          margin-right:100px;
          border:2px solid #17252A;
          padding: 40px 40px 40px 40px;
          width:700px;
          height:650px;
          -webkit-box-shadow: 0 10px 20px #17252A;
           box-shadow: 0 0 10px #17252A;
        }
        .inputBox{
          position: relative;
          width: 350px;
          margin-top: 35px;
        }
        .fa {
  padding: 20px;
  font-size: 30px;
  width: 62px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}
footer {
  position: absolute;
  width: 100%;
  height: auto;
  left:330px;
  bottom: 70px;
}
#bd1{
  background: url("images/tt.png");
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
background-position: center;
margin: 0px;
background-color: rgba(0, 0, 0, 0.6);
background-blend-mode: saturation;
}
.form{
  inset:4px;
}
#head{
  margin-top:20px;
}
#imgdivhead{
  position:absolute;
  left:420px;
  top:17px;
  border-radius:50%;
  width:100px;
  height:100px;
}
        </style>
    </head>
    <body id="bd1" style="display:block;font-family: sans-serif;">
    <div><img id="imgdivhead" src="Avatar.png" alt="favicon"><h1 style="color:white;text-align:center;font-size:3em;padding-top:30px;padding-bottom:40px;font-family:Georgira;font-size:3.5em">TUTORS AMONG US!</h1></div>
      
        <div class="box" style="width:500px;height:690px">
          <div class="form" style="background-color:white">
            <br>
            <form method="post">
            <h2 id="head">SignUp</h2>
            <div class="inputBox">
              <input name="email" type="text" required="required">
              <span>Username</span>
              <i></i>
            </div> <br>
            <div class="inputBox">
              <input name="password" type="password" required="required">
              <span>Password</span>
              <i></i>
            </div> <br>
            <div class="inputBox">
              <input name="password1" type="password" required="required">
              <span>Confirm Password</span>
              <i></i>
            </div> <br>
            <div class="inputBox">
              <input name="phone" type="text" required="required">
              <span>Phone Number</span>
              <i></i>
            </div> <br>
            <div class="links" style="font-size:1em">
              <a href="signup.php"><span style="text-decoration:none;color:grey">Already a User? <span style="font-size:1.5em;font-weight:bold">|</span> </span>Login here</a>
            </div>
            <input type="submit" name="btnsub" value="Create Account" style="color:white;margin-left:100px;margin-bottom:20px">
          </form>
        </div>
        </div>
        <?php
          $con=mysqli_connect('localhost','root','','softproj');
          if(isset($_POST['btnsub']))
          {
            $email = $_POST['email'];
              $query1="select * from login where email='$email';";
              $result1=mysqli_query($con,$query1);
              $count=mysqli_num_rows($result1);
              if($count>0)
              {
                  echo "<script>alert('Email already exists')</script>";
              }
              else{
              $password = $_POST['password'];
              $password1 = $_POST['password1'];
              $phone=$_POST['phone'];
              if($password==$password1)
              {
              $query = "insert into login (email,password,phone) values('$email',
              '$password','$phone');";
              $query1 = "insert into account(username) values('$email');";
              $result = mysqli_query($con,$query);
              if($result)
              {
                $res1=mysqli_query($con,$query1);
                $_SESSION['username']=$email;
                $_SESSION['count']=1;
                echo "<script>window.location.assign('about.php')</script>";
              }
              else{
                  echo "<script>alert('Error Cannot Login!Try Again')</script>";
              }
              }
              else{
                  echo "<script>alert('Passwords Does Not Match.Check Again')</script>";
              }
          }

      }


        ?>
      </body>

      </html>
