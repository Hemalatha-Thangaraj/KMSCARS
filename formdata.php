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
<?php 

$servername="localhost";
$username="root";
$password="aaaa";
$dbname="mydb";
if(isset($_POST["Submit"]))
{
			$name=$_POST["name"];
			$gender=$_POST["gender"];
			$mobile=$_POST["mobile"];
			$email=$_POST["email"];
			$user=$_POST["username"];
			$pass=$_POST["password"];
			$conn=mysqli_connect($servername,$username,$password,$dbname);
			if(!$conn)
			{
				die("connection failed".mysqli_connect_error());
			}
			$query = "SELECT * FROM `register` WHERE username='$user'";
			$result = mysqli_query($conn,$query);
			$rows = mysqli_num_rows($result);
			if($rows>0)
			{
				echo "<center><h1>Username Already Exists</h1><br><h3>Click here to <a href='signup.php'>Insert your details again</a></h3></center>";
			}
			else
			{
						$sql="INSERT INTO `register`(`name`, `gender`, `mobile`, `email`, `username`, `password`) VALUES('".$name."','".$gender."','".$mobile."','".$email."','".$user."','".$pass."')";
						if (mysqli_query($conn,$sql))
						{
						header("Location: signin.php");

						}
						else
						{
							echo "error in inserting ".mysqli_error($conn);
						}	
						
			}
  			mysqli_close($conn);
}
?>
</body>
</html>