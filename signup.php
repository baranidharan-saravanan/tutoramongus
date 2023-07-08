<?php
session_start();
 ?>
<html>
    <head>
        <title>
            Login Page
        </title>
        <link rel="stylesheet" href="signupdesign.css">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,600&display=swap" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="favicon1.ico">
        <style media="screen">
        *
        {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }
        body{
          justify-content: center;
          align-items: center;
          min-height: 100vh;
          background: white;

        }
        .box{
          font-family: sans-serif;
          position: relative;
          width: 436px;
          height: 455px;
          background: white;
          border-radius: 8px;
          overflow: hidden;
          margin-top: 300px;
        }
        .box::before
        {
          content: '';
          position: absolute;
          top:-50%;
          left:-50%;
          width: 500px;
          height: 600px;
          background: linear-gradient(0deg,transparent,
        #17252A,#17252A);
          transform-origin: bottom right;
          animation: animate 6s linear infinite;
        }
        .box::after
        {
          content: '';
          position: absolute;
          top:-50%;
          left:-50%;
          width: 500px;
          height: 600px;
          background: linear-gradient(0deg,transparent,
            #17252A,#17252A);
          transform-origin: bottom right;
          animation: animate 6s linear infinite;
          animation-delay: -3s;
        }
        @keyframes animate {
          0%{
            transform: rotate(0deg);
          }
          100%{
            transform: rotate(360deg);
          }
        }
        .form{
          margin:auto;
          position: absolute;
          inset: 6px;
          border-radius: 8px;
          background: white;
          z-index: 10;
          padding: 50px 40px;
          display: flex;
          flex-direction: column;
          justify-content: space-evenly;
        }
        .form h2{
          color: #17252A;
          /*font*/
          text-align: center;
          letter-spacing: 0.1em;
          font-size: 2.5em;
        }
        .inputBox{
          position: relative;
          width: 300px;
          margin-top: 35px;
        }
        .inputBox input{
          position: relative;
          width: 300px;
          padding: 20px 0px 10px;
          background: transparent;
          border: none;
          color: white;
          font-size: 1.5em;
          letter-spacing: 0.05em;
          z-index: 10;
          font-weight: bold;
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
        .inputBox input:valid ~ span,.inputBox input:focus ~ span{
          color: #17252A;
          transform: translateX(0px) translateY(-34px);
          font-size: 0.75em;
        }
        .inputBox i{
          position: absolute;
          left: 0;
          bottom: 0;
          width: 100%;
          height: 2px;
          background: #17252A;
          border-radius: 4px;
          transition: 0.5s;
          pointer-events: none;
          z-index: 9;
        }
        .inputBox input:valid ~ i,.inputBox input:focus ~ i{
          height: 48px;

        }
        .links{
          display: flex;
          justify-content: space-between;
          flex-direction: column;
        }
        .links a{
          margin: 20px 0;
          font-size: 1.5em;
          color: #17252A;
          text-decoration: none;
        }
        input[type="submit"]
        {
          border: none;
          outline:none;
          background: #17252A;
          padding: 11px 25px;
          width: 120px;
          margin-top: 10px;
          border-radius: 4px;
          font-weight: 600;
          cursor: pointer;
          font-size: 1.5em;
        }
        input[type="submit"]:active{
          opacity: 0.8;
        }

        .box::before
        {
        width: 400px;
        height: 500px;}
        .box::after
        {
        width: 400px;
        height: 500px;}
        .links a{
          font-size: 1em;
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
          width:300px;
          font-size: 1.5em;
        }
        .form{
          justify-content: space-evenly;
        }
        .form h2{
          font-size: 2.5em;
        }

      	#bd1{
      		background: url("images/tt.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        margin: 0px;
        background-color: rgba(0, 0, 0, 0.6);
        background-blend-mode: saturation;
        overflow: hidden;
      	}
        #imgdivhead{
  position:absolute;
  left:380px;
  top:80px;
  border-radius:50%;
  width:100px;
  height:100px;
}
        </style>
    </head>
    <body  id="bd1" style="display:block;font-family: sans-serif;">
      <div><img id="imgdivhead" src="Avatar.png" alt="favicon"><h1 style="color:white;text-align:center;font-size:3.5em;margin-top:100px;margin-bottom:0px;padding-bottom:0px;font-family:Georgia;">TUTORS AMONG US!</h1></div>
      <div class="box" style="width:450px;height:500px;margin:auto;margin-top:50px;">
        <div class="form" style="display:flex">
          <form method="post">
          <h2>Login Here!</h2>
          <div class="inputBox">
            <input name="email" type="text" required="required">
            <span>Username</span>
            <i></i>
          </div>
          <div class="inputBox">
            <input name="password" type="password" required="required">
            <span>Password</span>
            <i></i>
          </div>
          <div class="links" style="font-size:1.5em">
            <a href="signuppage.php"><span style="text-decoration:none">Don't Have an Account?</span>Sign Up!</a>
          </div>
          <input type="submit" name="btnsub" value="Login" style="color:ghostwhite;background: #17252A;">
        </form>
      </div>
      </div>
    </body>
    <?php

        if(isset($_POST['btnsub']))
        {
          $con=mysqli_connect('localhost','root','','softproj');
          $email = $_POST['email'];
          $password = $_POST['password'];
          $query="select email,password,phone from login where email='$email' and
          password='$password';";
          $result=mysqli_query($con,$query);
          $count=mysqli_num_rows($result);
          if($count==1)
          {
            $_SESSION['username']=$email;
            if(isset($_SESSION['count']))
            {
              $_SESSION['count']+=1;
            }
            else {
              $_SESSION['count']=1;
            }
            echo "<script>window.location.assign('homepage.php')</script>";
          }
          else{
            echo '<script>alert("Password or Username is Incorrect")</script>';
          }
        }
    ?>
</html>
