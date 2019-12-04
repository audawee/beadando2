
<?php include('images_function.php') ?>
<?php include('head.php'); ?>
<title>Upload</title>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 post-div">

		<?php if (isset($posts)): ?>
	<?php foreach ($posts as $post): ?>
		<div class="post">
			<h3>
				<a href="details.php?id=<?php echo $post['id'] ?>"><?php echo $post['title'] ?></a>
			</h3>
		</div>
	<?php endforeach ?>
<?php else: ?>
	<h2>No posts available</h2>
<?php endif ?>

			<!-- Form to create posts -->
			<form action="posts.php" method="post" enctype="multipart/form-data" class="post-form">
				<h1 class="text-center">Add Blog Post</h1>
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" class="form-control" >
				</div>

				<div class="form-group" style="position: relative;">
					<label for="post">Body</label>
					
					<!-- Upload image button -->
					<a href="#" class=" btn-xs btn-default pull-right upload-img-btn" data-toggle="modal" data-target="#myModal">Upload image</a>

					<!-- Input to browse your machine and select image to upload -->
					<input type="file" id="image-input" style="display: none;">

					<textarea name="body" id="body" class="form-control" cols="30" rows="5"></textarea>

					</div>
					<div class="form-group">
						<button type="submit" name="save-post" class="btn btn-success pull-right">Save Post</button>
					</div>
					
			</form>

			<!-- Pop-up Modal to display image URL -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Click below to copy image url</h4>
			      </div>
			      <div class="modal-body">
					<!-- returned image url will be displayed here -->
					<input 
						type="text" 
						id="post_image_url" 
						onclick="return copyUrl()" 
						class="form-control"
						>
					<p id="feedback_msg" style="color: green; display: none;"><b>Image url copied to clipboard</b></p>
			      </div>
			    </div>
			  </div>
			</div>
		</div>

	</div>
</div>
<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- CKEditor -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js"></script>
<script src="scripts.js"></script>

</body>
</html>