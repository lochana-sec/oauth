<?php
require_once('settings.php');
require_once('google-login-api.php');

// Google passes a parameter 'code' in the Redirect Url
if(isset($_GET['code'])) {
	try {
		$gapi = new GoogleLoginApi();
		//echo $_GET['code'];
		// Get the access token 
		$data = $gapi->GetAccessToken(CLIENT_ID, CLIENT_REDIRECT_URL, CLIENT_SECRET, $_GET['code']);
		
		// Get user information
		$user_info = $gapi->GetUserProfileInfo($data['access_token']);
	}
	catch(Exception $e) {
		echo $e->getMessage();
		exit();
	}
}
?>
<head>
<style type="text/css">

#information-container {
	width: 400px;
	margin: 50px auto;
	padding: 20px;
	border: 1px solid #cccccc;
}

.information {
	margin: 0 0 30px 0;
}

.information label {
	display: inline-block;
	vertical-align: middle;
	width: 150px;
	font-weight: 700;
}

.information span {
	display: inline-block;
	vertical-align: middle;
}

.information img {
	display: inline-block;
	vertical-align: middle;
	width: 100px;
}

</style>
    <link rel="stylesheet" type="text/css" media="screen" href="upload/upload.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="upload/upload.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.w3-button {width:150px;}
</style>

</head>

<body>

<div id="information-container">
	<div class="information">
		<label>Name</label><span><?= $user_info['name'] ?></span>
	</div>
	<div class="information">
		<label>Email</label><span><?= $user_info['email'] ?></span>
	</div>
	<div class="information">
		<label>Email Verified</label><span><?= $user_info['verified_email'] == true ? 'Yes' : 'No' ?></span>
	</div>
	<div class="information">
		<label>Picture</label><img src="<?= $user_info['picture'] ?>" />
	</div>
</div>

<div>
	<div style="margin: 0 34%; position: relative;">
     <input id="files" type="file" name="files[]" multiple/>
     <button id="upload" class="w3-button w3-cyan">Upload</button>
	<div>
     <div id="progress-wrp">
        <div class="progress-bar"></div>
        <div class="status">0%</div>
    </div>
   </div> 
   <div id="result">
       
   </div>

<p style="margin: 0 35%; position: relative;"><a class="w3-button w3-red" href="logout.php">Logout</a></p>

</body>
</html>