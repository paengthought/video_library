
<?php require_once('app.php'); ?>
<?php $app = new app;

	$search_videos = $app->search_videos(array(
		'title'		=>	$_POST['title'],
		'genre'		=>	$_POST['genre'],
		'artist'	=>	$_POST['artist'],
		'year'		=>	$_POST['year'],
		'ratings'	=>	$_POST['ratings']
	));	
 ?>
		<table class="table table-striped">
			<thead>
				<tr class="row">
				<th class="col-sm-3">Title</th>
				<th class="col-sm-2">Genre</th>
				<th class="col-sm-2">Artist</th>
				<th class="col-sm-2">Year</th>
				<th class="col-sm-1">Ratings</th>
				<th class="col-sm-2"></th>
				<th> </th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($search_videos as $videos): ?>
				<tr class="row">
					<td><?php echo $videos['title']; ?> </td>
					<td><?php echo $videos['genre']; ?> </td>
					<td><?php echo $videos['artist']; ?> </td>
					<td><?php echo $videos['year']; ?> </td>
					<td><?php echo $videos['ratings']; ?> </td>
					<td>
						<a href="#" class="view-detail" data-id="<?php echo $videos['id']; ?>"  data-toggle="modal" data-target="#myModal"> View</a> |
						<a href="#" class="delete" data-id="<?php echo $videos['id']; ?>"> Delete</a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>