<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>myTodo Task Manager</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="brand" href="#">myTodo</a>
				<div class="nav-collapse collapse">
					<p class="navbar-text pull-right">
						
					</p>
					<ul class="nav">
						<li><a href="#">Home</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span3">
				<div class="well sidebar-nav">
				<div style="margin: 0 0 10px 10px;">
					<?php $this->load->view('users/login') ?>
				</div>	
				</div>
			</div>

			<div class="span9">
				<?php $this->load->view($main_content);?>
			</div>
			</div>
		
		<hr>
		<footer>
			<p>&copy: Copyright 2021</p>
		</footer>

	</div>
</body>
</html>