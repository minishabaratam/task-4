<html>
<head>
	<title>PHP File Uploader Form Example - codescracker</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<style type="text/css">
	body{
		 background-color:#b3d9ff;
	    }
	.a{
	height:250px;
	position:absolute;
	left:250px;
	top:170px;
	border:3px solid black;
	border-radius:30px;
	}
	.sub{
	position:absolute;
	left:70px;
	top:200px;
	font-size:18px;
	border-radius:20px;
	}
	.b{
	position:absolute;
	left:70px;
	font-size:20px;
	}
	.c{
		position:absolute;
		left:30px;
		top:30px;
		height:15px;
	}
	.cc{
		position:absolute;
		left:30px;
		top:80px;
		height:15px;
	}
	.cd{
		position:absolute;
		left:40px;
		font-size:19px;
	}
	
	.h2{
    font-size:50px;
	position:absolute;
	left:150px;
	top:80px;
	}
	.k{
		position:absolute;
		top:110px;
		left:10px;
	}
	.i{
		position:absolute;
		left:650px;
		top:5px;
		opacity:0.95;
		border-radius:250px;
	}
	</style>
</head>
<body>
    <?php
	include('connect.php');
	?>
	<i class="h2">UPLOAD YOUR FILE</i>
	<img src="6.jpg"  class="i"/>
	<div class="a">
	<form action="file-upload.php" method="post" enctype="multipart/form-data">
	    <label class="b"><i>NAME:</i></label><br/>
		<input type ="text" name="name" class="c"><br/><br/>
		<label class="b" ><i>Roll Number : </i></label><br/>
	    <input  type="number" name="roll" class="cc"><br/><br/>
		<label class="cd"><i>Select your file to upload:</i></label><br/><br/>
		<input type="file" name="myfile" ><br/><br/>
		<input type="submit" value="Upload File" class="sub">		
		<div class="k">
		<i class="far fa-file-upload"></i>
		</div>
	</form>
	</div>
</body>
</html>