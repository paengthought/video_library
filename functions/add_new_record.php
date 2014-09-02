<?php 

include('app.php');

   $app = new app;
   
   // Validation
   $search_title =  count($app->select_video(array('title' => $_POST['title'])));
   
    if($search_title > 0):
		echo '<div class="alert bg-danger">Title is already exist</div>';
	elseif(empty($_POST['title'])):
		echo '<div class="alert bg-danger">Title must have a value</div>';
	else:
		echo '<div class="alert bg-success">New record Added</a>';
		
		$app->add_video(array(
					'title'		=> htmlentities($_POST['title']),
					'genre'		=> htmlentities($_POST['genre']),
					'artist'	=> htmlentities($_POST['artist']),
					'year'		=> $_POST['year'],
					'ratings'	=> $_POST['ratings'],
					'details' 	=> htmlentities(addslashes($_POST['details']))
				));
    endif;
   
   
   
   

?>
