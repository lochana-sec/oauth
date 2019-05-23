<?php

require_once('settings.php');

?>
<html>
<head>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-social.css" rel="stylesheet">
    <link href="bootstrap/css/font-awesome.css" rel="stylesheet">
<script src="bootstrap/js/jquery-1.9.0.min.js"></script>
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
<!--
<a id="login-button" href="<?= 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online' ?>">Login with Google</a>
-->
<div class="wrapper">
	<div class="container">
		<h1>Welcome To WebOAth</h1>
		
		<form id="login_form" class="form"  autocomplete="off" >
			<input type="text" name="username"  placeholder="Username" required >
			<input type="password" name="password" placeholder="Password" required >
			<button>Login</button>
		</form>
	</div>

	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>

  <div class="col-sm-2 col-sm-offset-5" style="position: absolute; bottom: 15%;">
    <a class="btn btn-block btn-social btn-google-plus" href="<?= 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online' ?>"">
            <i class="fa fa-google-plus"></i> Login with Gmail
          </a>
  </div>

</body>
</html>