<?php include_once 'includes/head.inc.php' ?>
<?php include_once 'includes/header.inc.php' ?>
<?php session_start() ?>

<div class="sign-up-background">
	<div class="sign-up-form-background">
		<section>
			<form action="banco_de_dados/create.php" method="post" class="sign-up-form">
				<div>
					<label for="email">Your email adress</label>
					<input type="email" name="email" id="email" maxlength="50" required>
				</div>
				<div>
					<label for="nome">Choose a username</label>
					<input type="text" name="name" id="name" maxlength="20" required autofocus>
				</div>
					<label for="password">Choose a password</label>
					<input type="password" name="password" maxlength="30" required>
				<div>
					<?php if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						session_unset();
					}
					?>
					</br>
					<p>By creating your account via any of the options below, you agree to our <a href="/">terms of service</a>.</p>
					<button>Create your account</button>	
				</div>
				<div class="back-to-sign-in">
					<a href="sign-in.php">Already have a blog engine account?</a>
				</div>
			</form>
		</section>
	</div>
</div>

<?php include_once 'includes/footer.inc.php' ?>