<html>
<head>
<title>signup</title>
</head>
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
    background-color: PLUM;
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
   td{
	   color:white;
	   width:40%;
   }
</style>

</style>
</head>
<body  background="2.gif">
<br><br><br><br>
<section class="e2" >
<div style="height:70%;" ><br>

<form name="myform" method="post">
<br>
<center>WELCOME TO OUR COMPANY</center><BR><BR>
<center>
<table >
<tr>
<td>NAME</td>
<td><input type="text" name="name" placeholder="Your name.."required/>
</tr>
<tr>
<td>GENDER</td>
<td>   <input type="radio" name="gender" value="Male"/>Male
	<input type="radio" name="gender" value="Female"/>Female<br>
</td>
</tr>
<tr>
<td>MOBILE NUMBER</td>
<td><input type="text" name="mobile"placeholder="Your Mobile number.."required/>
</tr>
<tr>
<td>EMAIL</td>
<td><input type="text" name="email"placeholder="Your email.."required/>
</tr>
<tr>
<td>USERNAME</td>
<td><input type="text" name="username"placeholder="Your username.."required/>
</tr>
<tr>
<td>PASSWORD</td>
<td><input type="password" name="password"placeholder="Your password.."required/>
</tr>

<tr>
<center>
<td colspan="2"><center>
<input type="submit"name="Submit" value="signup" method ="post" formaction="formdata.php" >
</td>
</tr>
</table>
</center>
</form><br><BR></div></section>
</body>
</html>