<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Input new data</title>
<link rel="stylesheet" type="text/css" href="firstpage.css">
<link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, user-scalable=no"/>
<script src="js/jquery-1.11.1.min.js"></script>
</head>

<body>

<div id="wrapper">
	<p id="need-data">Need to input new data?</p>
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
    <p id="meal-intervals">Meal Intervals: <form> 
											Breakfast: <br /><input type="time" name="breakfast"><br />
											Lunch: <br /><input type="time" name="lunch"><br />
											Dinner: <br /><input type="time" name="dinner">
											</form></p>
    <hr>
    <p id="medical-conditions">Any medical conditions: <br />
		<input type="checkbox" name="conditions" value="insomnia" />Insomnia<br />
		<input type="checkbox" name="conditions" value="diabetes" />Diabates<br />
		<input type="checkbox" name="conditions" value="apnea" >Apnea<br />
		Other: <input type="message" name="conditions" placeholder="please specify" ><br />
		
	</p>
    <hr>
    <p id="places">Exclude places: <br />
						&nbsp;&nbsp;&nbsp;<span id="places1">- Home</span><br />
						&nbsp;&nbsp;&nbsp;<span id="places2">- Work</span><br />
						&nbsp;&nbsp;&nbsp;<span id="places3">- School</span><br />
						&nbsp;&nbsp;&nbsp;<span id="places4">- Store</span><br />
	</p>
    <a href="mainmenunologin.html"><input type="submit" value="Save" name="send" class="btnLogin" /></a>
	<br />
	<br />
</div>

<script>
	$("#places1").click(function(){ 
	var clicks1 = $(this).data('clicks1');
	if (clicks1){
		this.style.color = "#302536";
		}
		$(this).data("clicks1", !clicks1);
});

$("#places2").click(function(){ 
	var clicks1 = $(this).data('clicks1');
	if (clicks1){
		this.style.color = "#302536";
		}
		$(this).data("clicks1", !clicks1);
});

$("#places3").click(function(){ 
	var clicks1 = $(this).data('clicks1');
	if (clicks1){
		this.style.color = "#302536";
		}
		$(this).data("clicks1", !clicks1);
});

$("#places4").click(function(){ 
	var clicks1 = $(this).data('clicks1');
	if (clicks1){
		this.style.color = "#302536";
		}
		$(this).data("clicks1", !clicks1);
});

</script>

</body>
</html>
