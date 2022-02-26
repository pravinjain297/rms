
<?php

	$con=mysqli_connect("localhost","root","","ship")or die(mysqli_error());



	if(mysqli_connect_errno())
	{
		echo mysqli_connect_errno();
	}

?>
