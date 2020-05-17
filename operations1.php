<html>
<head>
<style>
body
{background-image: url("1.jpg");

    /* Center and scale the image nicely */
	background-size:cover;
	margin:0px;
	padding:2px;

   
   }
   section.e1{
	width:80%;
	height:70px;
	float:left;
    margin-top:40px;
	margin-left:50px;
	

}
input[type=file], select {
    width: 300px;
    padding: 12px 20px;
    margin: 0px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
 section.e111{
	width:20px;
	height:30px;
	float:left;
    border:5px double black;
	margin-left:60px;
	border-radius:50%;
	
}
section.e11{
	width:20%;
	height:30px;
	float:left;
   margin-top:20px;
	margin-left:60px;
	
}
section.e12{
	width:30px;
	height:30px;
	float:left;
	margin-top:20px;
	font-size:20px;
}
section.e2
{
	width:80%;
	height:350px;
	float:left;
	margin-top:40px;
	margin-left:90px;
	
}
input[type=submit] {
    width: 200px;
    background-color:white;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color:cyan;
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
section.e3
{
	width:100%;
	height:80px;
	float:right;
	padding:40px;
	margin-top:40px;
	padding:0px;
	background-color:grey;
	margin-bottom:0px;
}
</style>
<head>
<body>
<center>
<br><br>
<section class="e1" >
		<section class="e11" >
		<section class="e111"></section>
		Starting point/destination
		
		</section>
		<section class="e12"><center>............................</center></section>
		<section class="e11">
		<section class="e111"style="background-color:white"></section>
		Details verification
		
		</section>
		<section class="e12"><center>............................</center></section>
		<section class="e11">
		<section class="e111"></section>
		Final process
		
		</section>
		
</section>
<section class="e2">
<form action="" enctype="multipart/form-data" method="post">
<table>
<tr>
<td>Adhaar Number &nbsp&nbsp&nbsp    </td>
<td><input type="text" name="adharr"placeholder="Your Adhaar number.."required/>
</tr>
<tr><td>Upload License&nbsp&nbsp&nbsp </td>
<td><input type="file" name="file"></td>
</tr>
<tr ><td colspan="2"><center><input type="submit" value="Upload" name="Submit1"></center></tr> <br/>
</table>

</form>
<?php
if(isset($_POST['Submit1']))
{ 
$filepath = "images/" . $_FILES["file"]["name"];

if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
{
echo "<img src=".$filepath." height=200 width=300 />";
} 
else 
{
echo "Error !!";
}
} 
?>

</section>
<section class="e3" >
<form>
<center>
<br>
<input type="submit" name= "Submit"value="NEXT" formaction="operations2.php"method="post">
</center>
</form>
</section>

</center>
</body>
</html>