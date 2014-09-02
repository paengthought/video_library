<!Doctyp>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<script type="text/javascript" src="libs/jquery/jquery-1.11.1.js"></script>
	
	<link href="libs/bootstrap/bootstrap-3.2.0.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="libs/bootstrap/bootstrap-3.2.0.js"></script>
	
	<link href="css/style.css" type="text/css" rel="stylesheet" />
	 
	<script type="text/javascript" src="scripts/app.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="col-sm-12 header">
			<h3>Library</h3>
		</div>
		<div class="col-sm-2 sidebar">
			<?php include('sidebar.php'); ?>
		</div>
		<div class="col-sm-10 main">
			<div class="video-list"></div>
		</div>
	</div>
	
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		</div>
	  </div>
	</div>
</body>
</html>