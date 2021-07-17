<html>
<head>
<style type="text/css">
      body{
		 background-image: url('3.jpg');
         background-repeat: no-repeat;
         background-attachment: fixed;
         background-size: cover;
	    }
     .a{
		font-size:40px;
		border-radius:30px;
	 }
	 .as{
		 position:absolute;
		 left:-50px;
		font-size:40px;
		border-radius:30px;
		
	 }
	.bb{
		 position:absolute;
		 left:470px;
		 top:150px;
	}
	.b{
		 font-size:40px;
	     position:absolute;
		 left:400px;
		 top:40px;	
	}
	table{
		position:absolute;
		top:320px;
		left:480px;
		font-size:20px;
	}
	</style>
</head>
<body>
<h1 class="b"> CHECK YOUR  FILES LIST </h1>
<form    method="post" enctype="multipart/form-data">
	<div class="bb">
	<input  type="submit" name="butt1"  class="a" value="open pdf files(.pdf)"><br/><br/>
	<input type="submit" name="butt2" class="as" value="open document files(.docx)">
	</div>
	</form>
<?php
include('connect.php');

   
	if(isset($_POST['butt1'])){
		$query="select * from `files` where `exten` in (select `exten` where `exten`='application/pdf')";
		$de=mysqli_query($con,$query);
		$i=0;
        echo "<table border='1'>
        <tr>
        <th>name</th>
        <th>myfile</th>
        </tr>";
        while($row = mysqli_fetch_array($de))
           {
               echo "<tr>";
               echo "<td>" . $row['name'] . "</td>";
               echo "<td>" . $row['myfile'] . "</td>";
               echo "</tr>";
			   $i++;
           }
           echo "</table>";
	}
	if(isset($_POST['butt2'])){
		$query="select * from `files` where `exten` in (select `exten` where `exten`='application/octet-stream')";
		$de=mysqli_query($con,$query);
		$i=0;
        echo "<table border='1'>
        <tr>
        <th>name</th>
        <th>myfile</th>
        </tr>";
        while($row = mysqli_fetch_array($de))
           {
               echo "<tr>";
               echo "<td>" . $row['name'] . "</td>";
               echo "<td>" . $row['myfile'] . "</td>";
               echo "</tr>";
			   $i++;
           }
           echo "</table>";
	}	
	?>
</body>
</html>