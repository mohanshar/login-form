<?php
$conn=mysqli_connect("localhost","root","","loginform");
?>

<html>
<body>
<?php

if(!isset($_POST['login'])) {

	extract($_POST);

	$query="SELECT * FROM loginform WHERE User='$username' AND Pass='$password'";

	$run_query=mysqli_query($conn, $query);
	if ($run_query) {
		if (mysqli_num_rows($run_query)>0) {
			$_SESSION['User'] = $username;
			$_SESSION['Pass'] = $password;
			header("location:np.html");
		}

		else {			
			echo '<script>';
			echo 'alert("Warning! Login not successful..");';
			echo 'alert("Try again, using your login info!")';
			echo '</script>';
		}
	}

}

?>
</body>
</html>