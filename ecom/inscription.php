<?php include("src/header.php"); ?>

<div class="hh container">

         <?php
		 if (isset($_POST['ss'])) {
			 $username = escape_string($_POST['username']);
			 $email = escape_string($_POST['email']);
			 $password = escape_string(sha1($_POST['password']));
			 $sql = "INSERT INTO userrs VALUES ('','$username','$email','$password')";
			 if (query($sql)) {
				echo ' <div class="alert alert-success mt-2 ">Compte cree .</div>';
			 }
			 else {
				echo ' <div class="alert alert-danger mt-2 ">Erreur .</div>';
			 }
		 }
		 ?>
	
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" required>
			</div>
			<div class="input-group">
				<button type="submit" name="ss" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="conexion.php">Login Here.</a></p>
		</form>
	</div>


    <?php include("src/footere.php"); ?>