<?php
include 'dbconnection.php';
$uid=$_POST["uid"];
$pwd=$_POST["pwd"];

try{
	$sql="select * from login where email='$uid' and pwd='$pwd'";
$res=$conn->query($sql);
if($res->rowcount()>0)
{
	session_start();
	$_SESSION['sid']=$uid;
	//echo $_session['sid'];
	include 'view2.php';	
}
else{
	echo "invalid username and password";
}
}
       catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
?>