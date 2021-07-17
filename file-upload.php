<?php
    include('connect.php');
    $name=$_POST["name"];
	$roll=$_POST["roll"];
	$filename = $_FILES["myfile"]["name"];
	$filetype = $_FILES["myfile"]["type"];
	$filesize = $_FILES["myfile"]["size"];
	$tempfile = $_FILES["myfile"]["tmp_name"];
	$filenameWithDirectory = "uploaded-file/".$filename;
	move_uploaded_file($tempfile, $filenameWithDirectory);
?>
<html>
<head>
	<title>PHP File Uploading Script Example - codescracker</title>
	
</head>
<body>
<?php
	$query="INSERT INTO `files`( name,roll,myfile,exten) VALUES('$name','$roll','$filename','$filetype')";
    $de=mysqli_query($con,$query);
	if($de){
	echo "<script>alert('succesful')</script>";
	echo "<script>window.location='check.php'</script>";
}
else{
	echo "<script>alert('unsuccesful')</script>";
}
?>
</body>
</html>