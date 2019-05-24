<?php
session_start();
require_once('account2.php');
if (isset($_POST['Login']))
{
	if(empty($_POST['username']) || empty($_POST['password']) )
	{
		header("location:index.php?Empty=Please Fill in blank spaces");
	}
	else
	{
		$query="select * from landlord where username='".$_POST['username']."' and password='".$_POST['password']."'";
		$result=mysqli_query($conn,$query);
		if (mysqli_fetch_assoc($result))
		{
			$_SESSION['User']=$_POST['username'];
			header("location:welcome2.php");
		}
		else
		{
			header("location:landlordindex.php?Invalid=Please Fill in blank spaces");
		}

			}

} 
else
{
	echo "Finished";
}


?>