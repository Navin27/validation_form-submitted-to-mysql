<?php
$connect=mysqli_connect('localhost','root','navin123','mydatabase');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
} 
echo" connected successfully";
 
?>

 
