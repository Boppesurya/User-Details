<?php 
$con=mysqli_connect('localhost','root');

if($con){
    echo "Connection successful";
}
else{
    echo "Connection Failed";
}
mysqli_select_db($con, 'pss');
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Number=$_POST['Number'];

$query="insert into users (Name,Email,Number)values('$Name','$Email','$Number')";

mysqli_query($con, $query);
header('location:home.php#contacts');
?>