<?php

//connection string

$conn=mysqli_connect('localhost','root','','dblab')
or die('NOT CONNECTED');
// insert query
if (isset($_POST['submitform']))
{

$SQLInsert = "INSERT INTO user(Username,Email) 
VALUES ('".$_POST['username']."',
'".$_POST['email']."')";
mysqli_query($conn,$SQLInsert);

}
$SQL="SELECT * FROM user";

//executing the query

$result=mysqli_query($conn,$SQL);


// start creating a table

echo '<table border="1">

<tr><td>Username</td><td>Email</td></tr>';
//rowwise data fetch links to edit.php and delete.php
while ($row=mysqli_fetch_assoc($result))
{
	
echo'<tr><td>'.$row['Username'].'</td><td>'.$row['Email'].'</td>
<td><a href="edit.php?ID='.$row['ID'].'">Edit</a></td>
<td><a href="delete.php?ID='.$row['ID'].'">Delete</a></td>
</tr>';	
	
}
echo '</table>';

// Creating form to insert data
echo'
<form action="" method="POST">
<table>
<tr><td>Name</td><td><input type="text" name="username"></td></tr>
<tr><td>Email</td><td><input type="email" name="email"></td></tr>
<tr><td colspan="2"><input type="submit" name="submitform" value="Submit"></td></tr>

</table>
</form>
';

?>