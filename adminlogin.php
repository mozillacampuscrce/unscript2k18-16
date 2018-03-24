<?php
echo "dhgjgkhj";
	$username=$_POST['username'];
	$password=$_POST['password'];
	function redirect($url) {
    	ob_start();
    	header('Location: '.$url);
   	ob_end_flush();
    	die();
	};
echo $username ."   "  .$password ;
if($username=="admin" && $password=="password"){
		echo "Valid Login";
		redirect('http://localhost/ams/unscript2k18-16/admin.html');
		echo "Valid Login";
}
	else {
	echo "Invalid Login";
}
?>
