<?php 
	require 'connection.php';
	
	$name=$_POST['name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$emailid=$_POST['emailid'];
	
	$subject=$_POST['subject'];
	

	echo $name ."   "  .$username."  ".$password;

	$sql="INSERT INTO `students` (`username`,`password`,`name`,`email_id`,`class`,`division`,`branch`,`roll_no`,`contact_no`) VALUES('$username','$password','$name','$userid','$class','$division','$branch','$rollno','$mobileno')";

	$result=mysqli_query($conn,$sql);
	if ($result) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>