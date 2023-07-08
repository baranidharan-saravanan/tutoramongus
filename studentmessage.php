
<html>
    <head><link rel="icon" type="image/x-icon" href="favicon1.ico"></head>
</html>
<?php
session_start();
$username=$_SESSION['username'];
$con=mysqli_connect('localhost','root','','softproj');
$query="select * from coursereg where studentname='$username';";
$result=mysqli_query($con,$query);
$count=mysqli_num_rows($result);
echo "";
if($count==0)
{
    echo '<div id="cont1">
				<p>
				You did not enroll in any courses. Click here to Enroll now!
                <a href="courseregistration.php"> Enroll for Courses </a>
				</p>
			</div>';
}
else
{
    echo "<div> <h1> The courses enrolled by you are: </h1>";
    echo "<table>";
    echo "<tr id='header'>";
    echo "<td>S.No</td>";
    echo "<td>Course Name</td>";
    echo "<td>Course Code</td>";
    echo "<td> Tutor Name</td>";
    echo "<td>See Messages</td>";
    echo "</tr>";
    while($row=mysqli_fetch_assoc($result))
    {
        $i=1;
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$row['coursename']."</td>";
        echo "<td>".$row['coursecode']."</td>";
        echo "<td>".$row['tutorname']."</td>";
        echo "<td><a href='seemessage.php>Click Here</a></td>";
        echo "</tr>";
        $i=$i+1;
    }
    echo "</table>";
}
?>