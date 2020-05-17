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
	margin-left:100px;
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
	
</style>
<head>
<body>
<center>
<br><br>
<section class="e1" >
		<section class="e11" >
		<section class="e111"style="background-color:white"></section>
		Starting point/destination
		
		</section>
		<section class="e12"><center>............................</center></section>
		<section class="e11">
		<section class="e111"></section>
		Details verification
		
		</section>
		<section class="e12"><center>............................</center></section>
		<section class="e11">
		<section class="e111"></section>
		Final process
		
		</section>
		
</section>
<section class="e2"><br><br><br>
<form name="myform" method="post">
<br>
<center>
<table >
<tr>
<td>STARTING LOCATION&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp         </td>
<td>
<select>
    <option value="">Your Location....</option>
    <option value="Coimbatore">Coimbatore</option>
  <option value="Erode">Erode</option>
  <option value="Chennai">Chennai</option>
  <option value="Madurai">Madurai</option>
</select></td>
</tr>
<tr>
<td>PICKUP POINT              </td>
<td>   
<input type="text" name="pickpoint"placeholder="Your pickup point.."required/>
</td>
</tr>
<tr>
<td>DROPING LOCATION        </td>
<td>
<select>
    <option value="">Your Location....</option>
    <option value="Coimbatore">Coimbatore</option>
  <option value="Erode">Erode</option>
  <option value="Chennai">Chennai</option>
  <option value="Madurai">Madurai</option>
</select></td>
</tr>
<tr>
<td>DROP POINT       </td>
<td><input type="text" name="droppoint"placeholder="Your drop point.."required/>
</tr>
<tr>
<center>
</table>
</center>

</section>

</center>
<section class="e3" >
<form>
<center>
<br>
<input type="submit" name= "Submit"value="NEXT" formaction="operations1.php"method="post">
</center>
</form>
</section>
</body>
</html>