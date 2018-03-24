<?php 
	require 'connection.php';
	$name=$_POST['name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$branch=$_POST['branch'];
	$class=$_POST['class'];
	$division=$_POST['division'];
	$rollno=$_POST['rollno'];
	$userid=$_POST['emailid'];
	$mobileno=$_POST['mobileno'];
echo $name ."   "  .$username."  ".$password;

$sql="INSERT INTO `students` (`username`,`password`,`name`,`email_id`,`class`,`division`,`branch`,`roll_no`,`contact_no`) VALUES('$username','$password','$name','$userid','$class','$division','$branch','$rollno','$mobileno')";

	$result=mysqli_query($conn,$sql);
	if ($result) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn):
?>
