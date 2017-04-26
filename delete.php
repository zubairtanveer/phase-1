<?php

//connection string
$conn=mysqli_connect('localhost','root','','dblab')
or die('NOT CONNECTED');
//$conn = mysqli_connect("localhost","root","","dblab");

// insert query

$SQL = 'DELETE FROM user
WHERE ID='.$_GET['ID'].'
';
mysqli_query($conn,$SQL);

header('Location: userdetails.php');


?>