<?php
include 'database.php';
echo "<center><h2>Welcome:".$_POST['userid']."</h2></center><br>";
$name=$_POST['username'];
$address=$_POST['address'];
$country=$_POST['country'];
$zip=$_POST['zip'];
$email=$_POST['email'];
$gender=$_POST['sex'];

echo"Name   :".$name."<br>";
echo"Address:".$address."<br>";
echo"Country:".$country."<br>";
echo"Zip    :".$zip."<br>";
echo"Email  :".$email."<br>";
echo"Gender :".$gender."<br>";
$sql="INSERT INTO myinfo(name,address,country,zip,email,gender)VALUES('$name','$address','$country','$zip','$email','$gender')";
if($connect->query($sql)==True)
{
	echo"<h3>data is inserted</h3>";
}
else
{
	echo "error in inserting";
}
$connect->close();
?>
