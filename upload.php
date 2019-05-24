<?php

if (isset($_POST["submit"])){
	$check = getimagesize($_FILES["image"]["tmp_name"]);
	if ($check !== false){
		$image = $_FILES['image']['tmp_name'];
		$imgContent = addslashes(file_get_contents($image));
		$name=$_POST["property"];
		$group=$_POST["group"];
		$comment=$_POST["comment"];
		$worth=$_POST['worth'];

		require_once('account.php');

		$dataTime =date("Y-m-d H:i:s");

		$insert = $conn->query("INSERT into images(fname,groups,image,created,comment,worth) VALUES ('$name','$group','$imgContent','$dataTime','$comment','$worth')");
		echo "The information has been uploaded";

	}
	else
	{
		echo 'error';
	}
}

?>
<body>
	<hr>
	<button style="background-color: green; color:white; font-size: 20px; width: 400px; height:25px;"><a style="text-decoration: none;" href="welcome2.php">Proceed</a></button>
</body>