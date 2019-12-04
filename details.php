<?php include('config.php') ?>
<?php 

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$result = mysqli_query($db, "SELECT * FROM posts WHERE id=$id");

		$post = mysqli_fetch_assoc($result);
	}
?>
<title>Uploading images in CKEditor using PHP</title>


<body>
	
<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 post-div">
				<div class="post-details">
					<h2><?php echo $post['title'] ?></h2>
					<p><?php echo html_entity_decode($post['body']); ?></p>
				</div>				
			</div>
		</div>
	</div>

<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- JQuery scripts -->
<script>

</script>

</body>
</html>