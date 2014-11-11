<?php 
	
	$error = false;
	if(isset($_POST['login'])){
		$username = preg_replace('/[^A-Za-z]/', '', $_POST['username']);
		$password = md5($_POST['password']);

		
		if(file_exists('users/' . $username . '.xml')){
			$xml = new SimpleXMLElement('users/' . $username . '.xml', 0, true);
			if($password == $xml->password){
				session_start();
				$_SESSION['usergroup'] = 'employees';
				$_SESSION['username'] = $username;
				header('Location: menuwithlogin.php');
				die;
			}
		}
		
		$error = true;
		
	}
 ?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="firstpage.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, user-scalable=no" />
	</head>
	
	<body>
		<div id="wrapper">
		<br />
		<br />
		<div><form method="post" action="" class="lgin">
		<p><label class="userpass">Username: &nbsp;</label><input type="text" name="username" size="20" class="inputFields" /></p><br />
		<p><label class="userpass">Password: &nbsp;&nbsp;</label><input type="password" name="password" size="20" class="inputFields" /></p><br />
		<?php 
		
			if($error){
				echo '<p>Wrong username/password!</p>';
			}
		
		?>
		<p><input type="submit" value="Login" name="login" class="btnLogin" /></p>
		
		<br />
		<hr />
			<div id="tip">
				<h2>Did you know that:</h2>
				More than 42% of college students throw the nap from 5 to 6 times per week.
			</div>
		</div>
	</body>	
</html>








