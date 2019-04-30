<?php include_once 'includes/head.inc.php' ?>
<?php include_once 'includes/header.inc.php' ?>

<div class="sign-up-background">
	<div class="sign-up-form-background">
		<section>
			<form action="database/signup-db.php" method="post" class="sign-up-form">
				<div>
					<label for="uid">Choose a Username</label>
					<input type="text" name="uid">
					<label for="mail">Email</label>
					<input type="text" name="mail">
					<label for="pwd">Password</label>
					<input type="password" name="pwd">
					<label for="pwd-repeat">Repeat your password</label>
					<input type="password" name="pwd-repeat">
					</br>
					<p>By creating your account via any of the options below, you agree to our <a href="/">terms of service</a>.</p>
					<?php 
					if (isset($_GET['error'])) {
						if ($_GET['error'] == "emptyfields") {
							echo "<p class='error-message'>Fill in all  fields!</p>";
						}
						elseif ($_GET['error'] == "invalidmailuid") {
							echo "<p class='error-message'>Invalid email and unsername!</p>";
						}
						elseif ($_GET['error'] == "invalidmail") {
							echo "<p class='error-message'>This email is invalid!</p>";
						}
						elseif ($_GET['error'] == "invaliduid") {
							echo "<p class='error-message'>This unsername is invalid!</p>";
						}
						elseif ($_GET['error'] == "passwordcheck") {
							echo "<p class='error-message'>Your passwords do not match!</p>";
						}
						elseif ($_GET['error'] == "usertaken") {
							echo "<p class='error-message'>This username is already taken!</p>";
						}
					}
				?>
					<button type="submit" name="signup-submit">Create your account</button>	
				</div>
				<div class="back-to-sign-in">
					<a href="signin.php">Already have a blog engine account?</a>
				</div>
			</form>
		</section>
	</div>
</div>

<?php include_once 'includes/footer.inc.php' ?>