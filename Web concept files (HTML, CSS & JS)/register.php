<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="firstpage.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, user-scalable=no" />
	</head>
	<body>
		<?php
	$errors = array();
	if(isset($_POST['login'])){
		$username = preg_replace('/[^A-Za-z]/', '', $_POST['username']);
		$email = $_POST['email'];
		$password = $_POST['password'];
		$c_password = $_POST['c_password'];
		
			if(file_exists('users/' . $username . '.xml')){
				$errors[] = 'User Exists';
			}
			if($username == ''){
				$errors[] = 'Username is blank';
			}
			if($email == ''){
				$errors[] = 'Email is blank';
			}
			if($password == '' || $c_password == ''){
				$errors[] = 'Passwords is blank';
			}
			if($password != $c_password){
				$errors[] = 'Passwords do not match';
			}
			if(count($errors) == 0){
				$xml = new SimpleXMLElement('<user></user>');
				$xml->addChild('password', md5($password));
				$xml->addChild('email', $email);
				$xml->asXML('users/' . $username . '.xml');
				header('Location: login.php');
				die;
			}
		}
?>
<form method="post" action="" id="wrapper">
			<?php 
				if(count($errors) > 0){
					echo '<ul>';
					foreach($errors as $e){
						echo '<li>' . $e . '</li>';
					}
					echo '</ul>';
				}
			?>
			<section id="registerblock">
			<h1>Register</h1><br />
			
			<p><span class="userpass">Username: </span><br /><input type="text" name="username" size="20" class="inputFields" required="required" /></p>
			<p><span class="userpass">E-Mail: </span><br /><input type="email" name="email" size="20" class="inputFields" required="required" /></p>
			<p><span class="userpass">Password: </span><br /><input type="password" name="password" size="20" class="inputFields" required="required" /></p>
			<p><span class="userpass">Confirm Password: </span><br /><input type="password" name="c_password" size="20" class="inputFields" required="required" /></p>
			<br />
			<p><input type="submit" name="login" value="Register" class="btnLogin" /></p>
		</form>
		</section>
	</body>
</html>









