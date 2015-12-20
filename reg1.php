<?php

$name = $_POST['Username'];
$email = $_POST['Email'];
$location =$_POST['Location'];
$conn=new mysqli("localhost","root","","movie")or die("unable to connect");
$sql= "INSERT INTO `registration` (`id`, `name`, `email`, `location`) VALUES (NULL, '$name', '$email', '$location')";
$result = mysql_query($sql,$conn);
if($conn->query($sql))
{
echo "details inserted successfully";
}

if($sql)
{
echo 'OK';
}





?>
