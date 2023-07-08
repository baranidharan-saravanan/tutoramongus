<?php
session_start();
?>
<?php
$email=$_SESSION['username'];
$con=mysqli_connect('localhost','root','','softproj');
$query="select * from login where email='$email'";
$record=mysqli_query($con,$query);
$stat=mysqli_fetch_row($record);
if($stat[3]==0){
  echo "<script>alert('OOPS! It seems you do not have an tutor account!')</script>";
  echo "<script>window.location.assign('tsignup.php')</script>";
}
else{
  echo "<script>window.location.assign('course.php')</script>";
}
?>