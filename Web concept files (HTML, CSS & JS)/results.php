<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
<title>Input new data</title>
<link rel="stylesheet" type="text/css" href="firstpage.css">
<link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, user-scalable=no"/>
	</head>
	<body>
		<section id="wrapper">
		<h2>Results:</h2>
		<form method="post">
			<input type="radio" id="sleepbot" name="tables" value="sleepbot" > SleepBot </input>
			&nbsp;&nbsp;&nbsp;
			<input type="radio" id="moves" name="tables" value="moves" > Moves </input>
			<input type="submit" action="results.php">
		</form>
		
		<?php
		
$servername = "localhost";
$username = "marinagherghe";
$password = "password";
$dbname = "hiperstyle_sleepapp";

$radio = $_POST['tables'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if( $radio == "sleepbot" ) {

$sql = "SELECT Date, Sleep, Awake, Duration FROM sleepbot";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div id='resultstable'>Date ". " - Sleep ". " - Awake " ." - Duration </div><div>". $row["Date"]. $row["Sleep"]. $row["Awake"]. $row["Duration"]. "</div>";
    }
} else {echo "<h3>0 results</h3>";}}



if( $radio == "moves" ) {

$sql = "SELECT Date, Steps FROM moves";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<p id='resultstable'>Date ". " - Steps </p><p>". $row["Date"]. $row["Steps"]. "</p>";
    }
} else {echo "<h3>0 results</h3>";}}


$conn->close();
?>
		
		</section>
	</body>
</html>











