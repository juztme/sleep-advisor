<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>First-time Settings</title>
<link rel="stylesheet" type="text/css" href="firstpage.css">
<link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, user-scalable=no" />
</head>

<body> 
<!--inputs that the user makes the first time they enter the app-->
<div id="wrapper">
	<p id="first-text">But first, let me take a selfie!</p>
    <p id="usual-bedtime">Usual bedtime: <br /><select>
												<option value="">00:00 AM</option>
												<option value="">01:00 AM</option>
												<option value="">02:00 AM</option>
												<option value="">03:00 AM</option>
												<option value="">04:00 AM</option>
												<option value="">05:00 AM</option>
												<option value="">06:00 AM</option>
												<option value="">07:00 AM</option>
												<option value="">08:00 AM</option>
												<option value="">09:00 AM</option>
												<option value="">10:00 AM</option>
												<option value="">11:00 AM</option>
												<option value="">12:00 AM</option>
												<option value="">01:00 PM</option>
												<option value="">02:00 PM</option>
												<option value="">03:00 PM</option>
												<option value="">04:00 PM</option>
												<option value="">05:00 PM</option>
												<option value="">06:00 PM</option>
												<option value="">07:00 PM</option>
												<option value="">08:00 PM</option>
												<option value="">09:00 PM</option>
												<option value="">10:00 PM</option>
												<option value="">11:00 PM</option>
												<option value="">12:00 PM</option>
										</select>
	</p>
    <hr>
    <p id="wakeup-time">Usual wake up time: <br /><select>
												<option value="">00:00 AM</option>
												<option value="">01:00 AM</option>
												<option value="">02:00 AM</option>
												<option value="">03:00 AM</option>
												<option value="">04:00 AM</option>
												<option value="">05:00 AM</option>
												<option value="">06:00 AM</option>
												<option value="">07:00 AM</option>
												<option value="">08:00 AM</option>
												<option value="">09:00 AM</option>
												<option value="">10:00 AM</option>
												<option value="">11:00 AM</option>
												<option value="">12:00 AM</option>
												<option value="">01:00 PM</option>
												<option value="">02:00 PM</option>
												<option value="">03:00 PM</option>
												<option value="">04:00 PM</option>
												<option value="">05:00 PM</option>
												<option value="">06:00 PM</option>
												<option value="">07:00 PM</option>
												<option value="">08:00 PM</option>
												<option value="">09:00 PM</option>
												<option value="">10:00 PM</option>
												<option value="">11:00 PM</option>
												<option value="">12:00 PM</option>
										</select>
	</p>
    <hr>
    <p id="sleep-hours">I'd like to sleep at least: <br /><select>
												<option value="">5 hours</option>
												<option value="">6 hours</option>
												<option value="">7 hours</option>
												<option value="">8 hours</option>
												<option value="">9 hours</option>
												<option value="">10 hours</option>
												<option value="">11 hours</option>
												<option value="">12 hours</option>
												<option value="">13 hours</option>
												<option value="">14 hours</option>
												<option value="">15 hours</option>
										</select>
	
	</p>
    <hr>
    <p id="meal-intervals">Meal Intervals: ...---...<form> 
											Breakfast: <br /><input type="time" name="breakfast"><br />
											Lunch: <br /><input type="time" name="lunch"><br />
											Dinner: <br /><input type="time" name="dinner">
											</form></p>
    <hr>
    <p id="medical-conditions">Any medical conditions: <br />
		<input type="checkbox" name="conditions" value="insomnia" />Insomnia<br />
		<input type="checkbox" name="conditions" value="diabetes" />Diabetes<br />
		<input type="checkbox" name="conditions" value="apnea" >Apnea<br />
		Other: <input type="message" name="conditions" placeholder="please specify" ><br />
		
	</p>
    <hr>
    <p id="places">Most visited places: <br />
		<input type="text" name="conditions" placeholder="please separate places with comma" size="39" multiple="multiple" /><br />
	</p>
    <p id="changes">*You can always change these at a later time.</p>
    <a href="mainmenunologin.html"><input type="submit" value="Save" name="send" class="btnLogin" /></a>
	<br />
	<br />
</div>

</body>
</html>
