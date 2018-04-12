<?php
include_once '..\db.php';
?>
<?php

if (isset($_POST['username'])){

$unname=$_POST['username'];
$password=$_POST['password'];

$sql="select * from loginform where username='".$unname."' AND password='".$password."' limit 1";
$result=mysql_query($sql);

if(mysql_num_rows(result)==1){
	echo"You have successfully logged in";
	exit();
}
else{
	echo"You have entered incorrect password";
	exit();
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin panel</title>
	<style type="text/css">
	body{


		margin: 0px;
		border: 0px;
	}
	#header{
		width: 100%;
		height: 120px;
		background: black;
		color:white;

	}	
	#sidebar{
		width:300px;
		height:400px;
		background:#27ae60;
		float : left; 

	}
	#data{
		height: 700px;
		background: #c0392b;

	}
	#adminlogo{
		background: white;
		border-radius: 50px;

	}
	ul li{
		padding: 20px;
		border-bottom: 2px solid grey;
	}
	ul li:hover{
		background: #c0392b;
		color: white;
	}

	</style>
</head>
	<body>
<div id="header">
		<center>
			<img src="admin_icon.png" alt="adminlogo" id="adminlogo"><br>This is Admin Panel</br>
		</center>
		

	</div>
	<div id="sidebar">
		<ul>
			<li><a href="gallery.php">Update Gallery</a></li>
			<li><a href="news_events.php">Update News and Events</a></li>
			<li><a href="query.php">Response to Queries</a></li>

		</ul>
		

	</div>

<div id="data">
	</div>
	
			<form>
				<div class="form_input">
					<input type="text" name="username" placeholder="Enter your username"/>					
		</div>
		<div class="form_input">
		<input type="password" name="password" placeholder="Enter you password"/>
	</div>
<input type="submit" name="submit" value="LOGIN" class="btn-login"/>
</form>
</div>
	</body>
	</html>


