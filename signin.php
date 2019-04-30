<?php include_once 'includes/head.inc.php' ?>
<?php include_once 'includes/header.inc.php' ?>

<div class="sign-in-background">
	<section>
		<div class="form-background">
			<div class="info-form-sign-in">
				<div class="separate-info">
					<h2>Discover</h2>
					<p>a wealth of genuine, unique information</p>
				</div>
				<div class="separate-info">
					<h2>Create</h2>
					<p>original, in-depht, usefull, media-rich articles</p>
				</div>
				<div class="separate-info">
					<h2>Connect</h2>
					<p>with a passionate community of writers and enthusiasts</p>
				</div>
				<div class="separate-info">
					<a href="signup.php">Sign up now!</a>
				</div>
			</div>
			<div>
				<form class="form-sign-in" action="" method="post">
					<div class="separate-sign-in">
						<input type="text" name="username" placeholder="Username">
					</div>
					<div class="separate-sign-in">
						<input type="password" name="password" placeholder="Password">
					</div>
					<div class="separate-sign-in">
						<input class="botao-sign-in" type="submit" value="Sign In" name="sign-in">
					</div>
					<div class="separate-sign-in">
						<a href="signup.php" class="link-sign-in">Sign up</a> | <a href="/" class="link-sign-in">Can't access your account?</a>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>

<?php include_once 'includes/footer.inc.php' ?>