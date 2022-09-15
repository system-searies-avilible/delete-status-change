<!-- Login form and also see if the email exist or not-->

<form method="post">
<table border="2">


<tr>
<th>Name </th>
<td><input type="text" name="txtname"/></td>
</tr>


<tr>
<th>Email</th>
<td><input type="email" name="txtemail"/></td>
</tr>



<tr>
<th>:</th>
<td><input type="submit" name="btn_sub" value="register"/></td>
</tr>
</table>
</form>
</br></br>


<table border="2">
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>status</th>
<?php
$connect=mysqli_connect("localhost","root","","mytest");

if(isset($_POST['btn_sub'])){
	$name=$_POST['txtname'];
	$email=$_POST['txtemail'];
	
	
$insert=mysqli_query($connect,"insert into tbl_status values ('','$name','$email','1')");

if($insert){
	echo"<script> alert('data inserted');</script>";	
}
else{
	echo"<script> alert('data can't be insert');</script>";
	
}
}

//status '1' show:   status'0' hide :
$select=mysqli_query($connect,"select * from tbl_status where status='1'");
$num=mysqli_num_rows($select);

for($i=0; $i<$num; $i++){
	$row=mysqli_fetch_array($select);
	echo"<tr>";
	echo"<td>".$row[0]."</td>";
	echo"<td>".$row[1]."</td>";
	echo"<td>".$row[2]."</td>";
	echo"<td>".'<a href="delete.php?id='.$row[0].'"> Delete</a>'."</td>";
	echo"</tr>";
	
}

?>
</table>