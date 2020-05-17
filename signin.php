<html>
<head>
<title>
signin

</title>
<style>
p{
background-color:white;
font-size:20px;
color:black;
width:50px;
text-decoration:none;
cursor:progress;
}
input[type=text], select {
    width: 300px;
    padding: 12px 20px;
    margin: 0px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 200px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 200px;
    background-color:skyblue;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: plum;
}

div {
	width:400px;
    border-radius: 52px;
    background-color:cream;
    margin-left: 60px;
	float:left;
	color:white;
	Font-size:20px;
}
td{
	   color:white;
	   width:40%;
   }
section.s1{
	width:10%;
	height:50px;
	float:left;margin-top:10px;

}
section.s3{
	width:10%;
	height:50px;
	float:right;margin-top:10px;

}section.s2{
	width:80%;
	height:50px;
	float:left;

}
img{
	width:70px;
	height:100px;
}
body
{background-image: url("1.jpeg");

    /* Center and scale the image nicely */
	background-size:cover;
	margin:0px;
	padding:2px;

   
   }

</style>

</style>
</head>
<body >
<center>
<br><br><br><br><br>

<section class="e2">

<div>
  <form action="" method="post"><table><tr>
    <td><label for="fname">USERNAME</label></td>
    <td><input type="text" name="user" placeholder="Your username.."required></td></tr>

    <tr><td><label for="lname">PASSWORD</label></td>
    <td><input type="password"  name="pass" placeholder="Your password.."required></td></tr>
   
   <tr><td colspan="2"><center> <input type="submit" name= "Submit"value="LOGIN" formaction=""method="post"></center></td></tr></table>
  </form><form>

  <label for="signup">CREATE ACCOUNT! IF NOT A USER</label>
  <input type="submit" value="SIGNUP" formaction="signup.php"/></form>

   </div><BR><BR><BR>
</center></section>
</body>
<?php

$servername="localhost";
$username="root";
$password="aaaa";
$dbname="mydb";
if (isset($_POST['Submit'])) 
{ 
	$user=$_POST["user"];
	$pass=$_POST["pass"];
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn)
	{
		die("connection failed".mysqli_connect_error());
	}


	$sql="SELECT * FROM `register` WHERE username='$user'and password='$pass' ";
	$result = mysqli_query($conn,$sql);
	$rows = mysqli_num_rows($result);
		
    if($rows>0)
	{$_SESSION["user"] = $user;
	
		header("Location: operations.php");
	
	 }else{
				echo "<center><h3 style= 'color:white;'>Username/password is incorrect.</h3></center>";
		}

	
	
mysqli_close($conn);
}?>
</html>