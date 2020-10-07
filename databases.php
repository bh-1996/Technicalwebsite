<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="register";


$con=mysqli_connect($servername,$username ,$password,$dbname);
if($con)
{
  ?>

		<script>
			alert("Welcome my website Bhandari Technical!!");
		</script>
	<?php	

}

