<?php

//connection string

$conn=mysqli_connect('localhost','root','','dblab')
or die('NOT CONNECTED');
//fetching prior values
$SQL="SELECT * FROM user WHERE ID='".$_GET['ID']."'";

//executing the query

$result=mysqli_query($conn,$SQL);
//fetching result row

$row=mysqli_fetch_assoc($result);


// update query
if (isset($_POST['submitform']))
{

 $SQLUpdate = "UPDATE user
 
SET Username='".$_POST['username']."',

Email='".$_POST['email']."'

WHERE ID='".$_GET['ID']."'

";
mysqli_query($conn,$SQLUpdate);

header('Location: userdetails.php');


}

// Creating form to update data with prior values
echo'
<form action="" method="POST">
<table>
<tr>
<td>Name</td><td><input type="text" name="username" value="'.$row['Username'].'"></td>
</tr>
<tr>
<td>Email</td><td><input type="email" name="email" value="'.$row['Email'].'"></td>
</tr>
<tr><td colspan="2"><input type="submit" name="submitform" value="Submit"></td></tr>

</table>
</form>
';

?>