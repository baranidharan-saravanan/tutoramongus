<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User_Profile</title>
	<link rel="stylesheet" href="https://resources/demos/style.css">
	<link rel="icon" type="image/x-icon" href="favicon1.ico">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<style type="text/css">
		body {font-family: Arial, Helvetica, sans-serif;
    margin:0;
    padding:0;
    background:white;
}
		.top_box{
			overflow: hidden;
			
			position: absolute;
			border: 2px solid #52525b;
			top :0;
			left: 0;
			margin: 0px;
			width: 100%;
			background-color: #71717a;
			height: 35px;
			float: left;
			
		}
		#nav{
			padding-left: 20px;
			text-decoration: none;
			color: white;
			padding-bottom: 20px;
		}
		#img1{
			padding-top: 7px;
			padding-left: 8px;
    		border-radius: 50%;
    		margin-left: 0px;
    		margin-right: 0px;
    		height: 20px;
    		width: 20px;
		}
		#home_btn{
			position: fixed;
			right: 0;
			padding-top:8px ;
			padding-right: 5px;
			padding-bottom: 10px;
			color: whitesmoke;
		}
		ion-icon{
			font-size: 23px;
		}
		.top_box nav a :hover {
			color: black;
		}
		#img2{
			width: 180px;
    		height: 200px;
    		border-radius: 50%;
    		display: block;
    		margin-left: auto;
    		margin-right: auto;
    		margin-top: 10px;

		}
		.main{
			border: solid 2px;
			box-shadow: 0 0 3px 1px;
			margin-top: 80px;
			padding: 30px 30px 10px 30px;
			border-radius: 20px;
			color: black ;
			
		}
		fieldset{
			padding: 0px 40px 0px 40px;
		}	
		.tab{
			border-spacing: 20px;
		}
		p{
			text-align: center;
			color: black;
		}
		legend{
			font-weight: bolder;
			color: black;
		}
		input{
			background: transparent;
			width :200px;
			border : none;
			height : 40px;
			font-weight:600;
			font-size:1.5em;
		}
		#but{
			
			border : solid 1px;
			padding: 0px;
			margin-bottom:80px;
			background-color : white;
			color :black;
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
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
		
	</style>
	<script type="text/javascript">
		function edit(){
				var inputs = document.getElementsByClassName("in");
				for(let i=0;i<inputs.length;i++){
					inputs[i].disabled=false;
				}
				button();
			
		}
		function button(){
			var myDiv = document.getElementById("but");
                 
                // creating button element
                var button = document.createElement('Input');
                button.value = "Submit";
				button.type ="Submit";
				button.style="background-color:green;color:white;";
                // appending button to div
                myDiv.appendChild(button);
		}

	</script>
</head>
<body>
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
<div style="background-color:white">
	<form name="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  

	<table class="main" align="center">
		<tr><td><img id = "img2" src="images/avatar.png"></td></tr>
		
		<tr>
			<td>
			<table align="center" class="tab" >
				<tr>
				<td><fieldset>
					<legend>Name*</legend>
					<input type = "text" id="name" class="in" disabled name="name" value ="<?php echo $_SESSION['username']?>" >
				</fieldset>
				</td>
				<td>
					<fieldset>
						<legend >Reg_No*</legend>
						<input type = "text" id="reg" class="in" disabled name="reg" value ="None" >
					</fieldset>
				</td>
				</tr>
				<tr>
				<td>
					<fieldset>
						<legend>Gender*</legend>
						<input type = "text" id="gen" class="in" disabled name="gen" value ="None" >
					</fieldset>
				</td>
				<td>
					<fieldset>
						<legend>Mobile*</legend>
						<input type = "text" id="mobile" class="in" disabled  name="mobile" value ="None" >
					</fieldset>
				</td>
				</tr>
			
			</table>
			</td>
		</tr>
		<tr>
		<td>

		<table align="center" class="tab">
				<tr>
				<td><fieldset>
					<legend>Pass Out Year*</legend>
					<input type = "text" id="poy" class="in" disabled name="poy" value ="None" >
				</fieldset>
				</td>
				<td>
					<fieldset>
						<legend>Department*</legend>
						<input type = "text" id="dep" class="in" disabled name="dep" value ="None" >
					</fieldset>
				</td>
				<td>
					<fieldset>
						<legend>Branch*</legend>
						<input type = "text" id="branch" class="in" disabled name="branch" value ="None">
					</fieldset>
				</td>
				
			</tr>
			<tr>
				<div ><td colspan="3" align="center"><button class="button button2" type="button" onclick="edit()" style="font-size:28px"><i class="fa fa-pencil-square" aria-hidden="true"></i> Edit</button></div><div  id="but"style="background-color:transparent;border:none;"></div></td>
				
			</tr>
		
		</table>
	</td>

		</tr>
	</table>
	</form>
	</div>
	<?php
		$server = "localhost";
		$username = "root";
		
		
		$conn = new mysqli($server,$username);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
	    }
		$db = mysqli_select_db( $conn, 'softproj' );
		$username=$_SESSION['username'];
		$query = "SELECT * from account where username='$username' ";
		$result = mysqli_query($conn, $query);

		
		while ($row = $result->fetch_assoc()) {

			$name = $row['username'];
			$reg = $row['RegNo'];
			$gen = $row['Gender'];
			if($gen == 'M'){
				$gen = 'Male';
			}
			else if($gen == 'F'){
				$gen = 'Female';
			}
			else{
				$gen='None';
			}
			

			$mobile = $row['Mobile'];
			$poy = $row['poy'];
			$dep = $row['Department'];
			$branch = $row['Branch'];
			
			echo "<script> document.getElementById('name').value = '$username' 
			document.getElementById('reg').value = '$reg'
			document.getElementById('gen').value = '$gen'
			document.getElementById('mobile').value = '$mobile'
			document.getElementById('poy').value = '$poy'
			document.getElementById('dep').value = '$dep'
			document.getElementById('branch').value = '$branch'
			
			</script>";
			break;

			
		
		}
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name1 = $_POST['name'];
			$reg1 = $_POST['reg'];
			$gen1 = $_POST['gen'];
			if($gen1 =="Male"){
				$gen1 = "M";

			}
			else{
				$gen1 = "F";
			}
			$mobile1 = $_POST['mobile'];
			$poy = $_POST['poy'];
			$dep1 = $_POST['dep'];
			$branch1 = $_POST['branch'];
			$sql = "UPDATE account SET  RegNo='$reg1', Gender='$gen1' , Mobile=$mobile1 ,username='$username', poy='$poy' , Department ='$dep1'  , Branch = '$branch1'   WHERE  username='$username'";
			$conn->query($sql);
			echo("<meta http-equiv='refresh' content='1'>");
			

		}
		
	?>
	

</body>
</html>