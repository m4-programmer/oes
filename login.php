	<?php
session_start();
if(isset($_SESSION["email"])){
session_destroy();
}
include_once 'dbConnection.php';
$ref=@$_GET['q'];

//check url link
if (@$_GET['q']='index.php') {
	
$password = $_POST['password'];
$logindetails = $_POST['name'];

$logindetails = stripslashes($logindetails);
$logindetails = addslashes($logindetails);
$password = stripslashes($password); 
$password = addslashes($password);
	
		if (empty($logindetails) or empty($password)) {
				header("location:$ref?w=Empty Username or Password");
			}	
		$result = mysqli_query($con,"SELECT name FROM user WHERE regno = '$logindetails' and password = '$password'") or die('Error');
$count=mysqli_num_rows($result);
if($count==1){
while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
}
$_SESSION["name"] = $name;
$_SESSION["email"] = $logindetails;
header("location:account.php?q=1");
}
else
header("location:$ref?w=Wrong Username or Password");

}
/*
//$password=md5($password); 
*/

?>