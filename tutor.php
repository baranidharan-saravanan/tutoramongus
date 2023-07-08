<?php
session_start();
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
    <script>
    $( function() {
      var availableTags = ["Information Security","Software Engineering","Internet and Web Programming","Artificial Intelligence","C","C++","Human Computer Interaction","Natural Language Processing","Internet of Things","Principles of Cloud Computing","BlockChain","Engineering Maths","Networks","JavaProgramming","JavaScript","Data Structures","Database Management","Operating System","Python","Computer Organization","Statisticts"];
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
    background:white;
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
    height: 40px;
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


    </style>

  </head>
<body id="bg1">

<div class="navbar">
  <a  href="homepage.php"><i class="fa fa-backward" aria-hidden="true"></i>  Go Back to Student Account</a>
  <a href="course.php"><i class="fa fa-anchor" aria-hidden="true"></i> Tutor Spotlight</a>
  <a class="active" href="courseCreation.php"><i class="fa fa-bullseye" aria-hidden="true"></i> Course Enrollment</a>
  <a href="studentlist.php"><i class="fa fa-list" aria-hidden="true"></i> Student List</a>
  <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
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
<div class="fade-in-text">
  <h3 style="font-size:2em">Welcome Tutor!</h3>
</div>
<div class="table_1" >
<table style="border-spacing: 25px 30px;">

  <tr >
    <td class="it" style="margin-left:30px"><a href="#"><img src="student.png" height="100px" width="100px" alt="java" align = "center"></a><div align="center"></div><br>Student list<br><ion-icon id="tutoricon" title="Tutors_available"name="contacts" size="small"></ion-icon><ion-icon name="time"></ion-icon></div></td>
    <td class="it" style="padding-left:30px"><a href="createCourse.php"><img src="createcourse.jpg" height="100px" width="100px" alt="python" ></a><div align="center"><br>Create Course<br><ion-icon id="tutoricon" title="Tutors_available"name="contacts" size="small"></ion-icon><ion-icon name="time"></ion-icon></div></td>
    <td class="it" style="padding-left:30px"><a href="course.php"><img src="courselist.jpg" height="100px" width="100px" alt="python" ></a><div align="center"><br>Course List<br><ion-icon id="tutoricon" title="Tutors_available"name="contacts" size="small"></ion-icon><ion-icon name="time"></ion-icon></div></td>
  </tr>
</table>
</div>
</div>

</body>
</html>
