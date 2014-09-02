<?php 
include('app.php');

   $app = new app;
   
   
   $id = $_POST['id'];
   
   $app->delete_video($id);
		
?>
<br />
<p class="alert bg-success">Item deleted</p>