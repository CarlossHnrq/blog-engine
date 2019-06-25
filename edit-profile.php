<?php include_once 'database/connection.php' ?>
<?php include_once 'includes/head.inc.php' ?>
<?php include_once 'includes/header.inc.php' ?>

<?php 

$userid = $_SESSION['userid'];

$sql= "SELECT uidusers FROM users WHERE idusers = '$userid'";
$result= mysqli_query($conn,$sql);
$user= mysqli_fetch_assoc($result);


$sql2= "SELECT emailusers FROM users WHERE idusers = '$userid'";
$result2= mysqli_query($conn,$sql2);
$email= mysqli_fetch_assoc($result2);

?>
<section>
	<div class="profile-background">
		<?php 	
		echo 	'<div class="profile-section-one">
					<h2 class="profile-username">'.$user['uidusers'].'</h2>
					<a href="#">1 following</a>
					<form action="database/edit-profile-db.php" method="post">
						<textarea type="text" name="bio" placeholder="Enter a short bio" class="profile-bio" rows="6" cols="30"></textarea>
					<button class="edit-buttom-save" name="bio-submit">Save</button>
					<button class="edit-buttom-cancel" name="bio-cancel">Cancel</button>
					</form>
				</div>';
		?>
		<div class="profile-section-one">
			<img src="">
		</div>
	</div>
	<div class="profile-posts">
		<div>
			<?php 	
		echo 	'<p>'.$user['uidusers'].' hasn’t been active on Medium yet. Check back later to see their stories</p>';
			?>
		</div>
	</div>
</section>


<?php include_once 'includes/footer.inc.php' ?>

