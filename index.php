<?php
	require('database.class.php');
	$server = Server::get();
	$dbs = $server->query( 'SHOW DATABASES' );
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="js/bootstrap.file-input.js"></script>

	<script src="js/main.jquery.js"></script>
</head>

<body>

	<div class="container-fluid">

		<div class="swap-form">
			<form enctype="multipart/form-data">
				<div class="btn-group btn-block">
				  <button type="button" class="btn btn-default dropdown-toggle btn-block" data-toggle="dropdown">
				    Databases <span class="caret"></span>
				  </button>
				  <ul class="database dropdown-menu btn-block" role="menu">
					<?php
						while( ( $db = $dbs->fetchColumn( 0 ) ) !== false ) {
						    echo "<li><a>$db</a></option>";
						}
					?>
				  </ul>

				</div>
				<input type="hidden" name="database" val="">
				<br/>
				<span class="display-message display-database">&nbsp;</span>
				<br/>
				<input class="btn btn-warning btn-block" type="file" title="SQL file">
				<br/>
				<span class="display-sql"></span>
				<button class="btn btn-success btn-block run-sql">Run</button>
				<span class="display-message display-database-destroy">&nbsp;</span>
				<span class="display-message display-database-upload">&nbsp;</span>
			</form>
		</div>

	</div>

</body>

</html>