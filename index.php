<?php
session_start();

// Destroy session on ?logout
if (isset($_GET['logout'])) {
	$_SESSION = array();
	if (ini_get('session.use_cookies')) {
		$params = session_get_cookie_params();
		setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
	}
	session_destroy();
}

// Redirect logged in users to the file manager
if ($_SESSION['user'])
	header('Location: dashboard.php');

?><!doctype html>
<html>
<head>
	<title>Terraria HostPanel</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/smooth.css" id="smooth-css">
	<meta name="author" content="Alan Hardman (http://alanaktion.com)">
	<style type="text/css">
		body {
			background-image: url(img/background.gif);
			-webkit-background-size: cover;
			-moz-background-size: cover;
			background-size: cover;
		}
	</style>
</head>
<body>
<noscript>
	<p class="alert alert-warning"><strong>Enable Javascript:</strong> Javascript is required to use MCHostPanel.</p>
</noscript>
<form class="modal form-horizontal" action="dashboard.php" method="post">
	<div class="modal-header">
		<h3>Terraria HostPanel</h3>
	</div>
	<div class="modal-body">
		<?php
		if ($_GET['error'] == 'badlogin')
			echo '<p class="alert alert-error">Invalid login details.</p>';
		?>
		<div class="control-group">
			<label class="control-label" for="user">Username</label>

			<div class="controls">
				<div class="input-prepend">
					<span class="add-on"><i class="icon-user"></i></span>
					<input class="span2" type="text" name="user" id="user">
				</div>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="pass">Password</label>

			<div class="controls">
				<div class="input-prepend">
					<span class="add-on"><i class="icon-lock"></i></span>
					<input class="span2" type="password" name="pass" id="pass">
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button class="btn btn-primary" type="submit">Log In</button>
	</div>
</form>
<small class="muted pull-left" style="position:absolute;bottom:15px;left:15px;">&copy; <?php echo date('Y'); ?> <a href="http://alanaktion.com/">Alan Hardman</a></small>
</body>