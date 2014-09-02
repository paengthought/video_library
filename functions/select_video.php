<?php 

require('app.php');

$app = new app;

$result = $app->select_video(array('id' => $_POST['id']));
	
?>

<div class="modal-header">
	<h4 class="modal-title"><?php echo $result['title']; ?></a>
</div>

<div class="modal-body">
	<div class="row">
		<div class="col-sm-2">Genre</div><div class="col-sm-10"> <?php echo $result['genre']; ?> </div>
	</div>
	<div class="row">
		<div class="col-sm-2">Artist</div><div class="col-sm-10"> <?php echo $result['artist']; ?> </div>
	</div>
	<div class="row">
		<div class="col-sm-2">Year</div><div class="col-sm-10"> <?php echo $result['year']; ?> </div>
	</div>
	<div class="row">
		<div class="col-sm-2">Ratings</div><div class="col-sm-10"> <?php echo $result['ratings']; ?> </div>
	</div>
	<div class="row">
		<div class="col-sm-2">Location</div><div class="col-sm-10"> <?php echo $result['details']; ?> </div>
	</div>
</div>