<?php
$connect=mysqli_connect("localhost","root","","mytest");
$id=$_GET['id'];
//in delete page we chang the status  that from our visiter is delete but in database its safe
$delete=mysqli_query($connect,"update tbl_status set status='0' where id='$id'");
if($delete){
	
	echo"<script>alert('Data deleted sucessfully')</script>";
	echo"<script>window.location.assign('file1.php')</script>";
}
else{
	echo"<script>alert('Data  can't be deleted ')</script>";
	
}
?>