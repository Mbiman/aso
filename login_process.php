<?php
    include('connection/conn.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);

		$sql = "SELECT * FROM registration WHERE email = '$email' AND password = '$password' LIMIT 1";
		$query = mysqli_query($conn, $sql);

		if ($query) {
			$num= mysqli_num_rows($query);
			if ($num == 1) {
				while ($rows = mysqli_fetch_array($query)) {
					session_start();
					$_SESSION['first_name'] = $rows['first_name'];
					$_SESSION['reg_id'] = $rows['reg_id'];

					$succ = "Login Successful.......";
					header('location:index.php?succ='.$succ);
				}
			}else{
				$err = "Please register before you login";
			header('location:login.php?err='.$err);
			}
		}else{
			$err = "Login failed..";
			header('location:login.php?err='.$err);
		}
	}

?>