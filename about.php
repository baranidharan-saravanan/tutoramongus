<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>About Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://resources/demos/style.css">
    <link rel="icon" type="image/x-icon" href="favicon1.ico">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style media="screen">
      .about{
        margin:auto;
        width:50%;
        padding:10px;
        border: 2px solid black;
        
        background-image: linear-gradient(144deg,#AF40FF, #5B42F3 50%,#00DDEB);
      }
      .innerdiv{
        padding: 30px;

      }
      .fa {
padding: 20px;
font-size: 30px;
width: 50px;
text-align: center;
text-decoration: none;
margin: 2px 2px;
border-radius: 50%;
}
      .fa:hover {
          opacity: 0.7;
      }

      .fa-linkedin {
  background: #007bb5;
  color: white;
}

      .fa-twitter {
        background: #55ACEE;
        color: white;
      }
.button-64 {
  
  margin:auto;
  align-items: center;
  background-image: linear-gradient(144deg,#AF40FF, #5B42F3 50%,#00DDEB);
  border: 0;
  border-radius: 8px;
  box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
  box-sizing: border-box;
  color: #FFFFFF;
  display: flex;
  font-family: Phantomsans, sans-serif;
  font-size: 20px;
  justify-content: center;
  line-height: 1em;
  max-width: 100%;
  min-width: 140px;
  padding: 3px;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  cursor: pointer;
}

.button-64:active,
.button-64:hover {
  outline: 0;
}

.button-64 span {
  background-color: rgb(5, 6, 45);
  padding: 16px 24px;
  border-radius: 6px;
  width: 100%;
  height: 100%;
  transition: 300ms;
}

.button-64:hover span {
  background: none;
}

@media (min-width: 768px) {
  .button-64 {
    font-size: 24px;
    min-width: 196px;
  }
}
.line{
  height:2px;
  background-image: linear-gradient(144deg,#AF40FF, #5B42F3 50%,#00DDEB);
}body {font-family: Arial, Helvetica, sans-serif;
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
</style>
    <script>
      function myfunc()
      {
        window.location.assign('homepage.php');
      }
    </script>
  </head>
  <body>
    <h1 style="text-align:center;font-size:3em;margin-bottom:0;">About Us Page</h1> <br><br><br>
    <div class="about" style="background-color:white;font-family:sans-serif;text-align:center">
    <div class="innerdiv" style="background-color:white">
      <h1 style="color:#17252A;text-align:center;font-size:3em;">Welcome,<?php echo $_SESSION['username']?></h1>
      <hr class="line">
      <h3 style="color:#17252A;font-size:2em;">About our Website:</h3>
      <p style="color:#17252A;text-align:justify;text-indent:10px;font-size:1.09em;">Most students in their schooling go to tuition centers in order to understand concepts better than what is taught in the schools. Likewise, among the students who pursue their Graduate, some may find difficulty in understanding the concepts. Our portal helps to reduce the gap between students and their academic performances.
      Through this software users will be able to get help on the particular courses they lack their knowledge with the help of the other peer students who are also registered as users.</p>
        <h3><a href="#">To know more about Us!</a></h3> <hr class="line">
      <h3 style="color:#17252A;font-size:2em;">For queries, Contact Us:</h3>
      <h2><a href="mailto:baranidharansaravanan36@gmail.com"> Post your Queries as Mail</a></h2> <hr class="line">
      <h3 style="color:#17252A;font-size:1.5em;">Give your feedbacks and support through:</h3>
      <a href="https://www.linkedin.com/in/barani-dharan-saravanan-5a2677249/" class="fa fa-linkedin"></a>
      <a href="https://twitter.com/b_a_r_a_n_i_" class="fa fa-twitter"></a> <hr class="line">
      <button style="margin-top:20px;" class="button-64" role="button" onclick="myfunc()"><span class="text">Redirect to Home Page</span></button>
      <h3 style="color:blue;padding-top:20px;margin-bottom:0;">©Created by Team TUTORS, 2022</h3>
      </div>
    </div>
    
  </body>
</html>
