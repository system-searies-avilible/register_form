

<form method="post">
<table border="2">
<tr>
<th>Name :</th>
<td><input type="text" name="txtname"/> </td>
</tr>
<tr>
<th>Email :</th>
<td><input type="text" name="txtemail"/> </td>
</tr>
<tr>
<th>Password :</th>
<td><input type="password" name="txtpass"/> </td>
</tr>
<tr>

<td><input type="submit" name="btn_sub"/> </td>
</tr>

</table>


</form>




<?php
$server="localhost";
$username="root";
$password="";
$database="test";

//insert query
$connect=mysqli_connect($server,$username,$password,$database);
if(isset($_POST['btn_sub'])){
	$name=$_POST['txtname'];
	$email=$_POST['txtemail'];
	$pass=$_POST['txtpass'];
$insert=mysqli_query($connect,"insert into register values('','$name','$email','$pass');");
	
	if($insert){
	echo"Rigister sucessfully";
	
}
else{
	echo"Some thing went wronge in rigister";
	
}
	
}







?>