<?php include("src/header.php"); ?>

<div class="hh container">

        <?php
		 if (isset($_POST['ss'])) {
			 $email = escape_string($_POST['email']);
			 $password = escape_string(sha1($_POST['password']));
			 $sql = "SELECT * FROM userrs WHERE email='$email' AND password='$password'";
			 $result = query($sql);
			 $userrs = fetch_array($result);
			 if ($userrs != null) {
				$_SESSION['logged'] = true;
				$_SESSION['nom']= $userrs['username'];
				$_SESSION['user_id']= $userrs['id'];
				redirect("index.php");
			 }
			 else {
				echo ' <div class="alert alert-danger mt-2 ">EMAIL OU MOT DE PASSE EST INCORRECT .</div>';
			 }
		 }
		 ?>

		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" required>
			</div>
			<div class="input-group">
				<button name="ss" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="inscription.php">Register Here.</a></p>
		</form>
	</div>






<?php include("src/footere.php"); ?>