<?php include_once 'includes/head.inc.php' ?>
<?php include_once 'includes/header.inc.php' ?>
<?php require 'database/connection.php'; ?>

<div>
	<div>
		<div class="postpage-bg">
			<div>
				<h1 class="postpage-h1">Create an Article</h1>
				<form class="postpage-form" action="" method="post">
					<label for="title">Title</label>
					<input type="text" name="title">
					<label for="topic">Topic</label>
					<select name="topic">
						<option value="">Selecione</option>
						<?php 
						$sql = "SELECT idtopic, topicname FROM topics";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()){
								echo '<option value="' . $row["idtopic"] . '" name="topic">'.$row["topicname"].'</option>';
							}
						}

						?>
					<h3>Start your Story</h3>
					<textarea id="summernote" name="editordata"></textarea>
 					<script type="text/javascript">
 			 			$(document).ready(function() {
       		 			$('#summernote').summernote();
       		 		});
 			 		</script>
 			 		<button type="submit" class="botao-superinfo" name="post-submit">Finish</button>
				</form>
			</div>
		</div>
	</div>
</div>		

<?php include_once 'includes/footer.inc.php' ?>

<?php 

if (isset($_POST['post-submit'])) {

	$textpost = $_POST['editordata'];
	$titlepost = $_POST['title'];
	$topic = $_POST['topic'];
	$idusers = $_SESSION['userid'];

	$sql = "SELECT posts.textposts, posts.titleposts
			FROM posts 
			INNER JOIN users ON posts.idauthor = users.idusers";

	$sql = "SELECT posts.idtopic, topics.topicname
			FROM posts
			INNER JOIN topics ON posts.idtopic = topics.idtopic";

	$sql = "INSERT INTO posts (titleposts, textposts, idtopic, idauthor) VALUES ('$titlepost', '$textpost', '$topic', '$idusers')";

	if (empty($titlepost) || empty($textpost) || empty($topic)) {
		echo "Don't leave it empty";
	}
	else{
		if ($conn->query($sql) === TRUE) {
			echo "Your post has benn successefuly created";
			header("Location: index.php");
			exit();
		}
		else{
			echo "Error: ". $sql ."</br>" . $conn->error;
		}
	}
}
?>
