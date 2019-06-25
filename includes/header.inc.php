<div class="superinfo-bg">
			<div class="superinfo">
				<div>
					<span>The best platform</span>
				</div>
				<div>
					<?php 
						if (isset($_SESSION['userid'])) {
							echo '<div class="space-superinfo">
									<div class= "space-profile">
										<a class="profile" href="postpage.php">Write</a>
										<a class="profile" href="profile.php">Profile</a>
									</div>
									<div class= "space-login-logout">
										<form action="database/logout-db.php" method="post">
										<button class= "botao-superinfo" type="submit" 
										name="logout-submit">Logout</button></form>	
									</div>
								</div>';
						}
						else{
							echo '<a class= "botao-superinfo" href="signin.php">Sign in</a>';
						}
					?>
				</div>
			</div>
		</div>
		<header class="menu-bg">
			<div class="menu">
				<div class="space">
					
				</div>
				<div class="menu-logo">
					<a href="index.php">Blog Engine</a>
				</div>
				<div class="menu-form">
					<form>
						<input type="text" name="search" placeholder="Search...">
						<button type="submit"><i class="fas fa-search"></i></button>
					</form>
				</div>
			</div>
		</header>