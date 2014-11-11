<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Main Menu - logged in</title>
<link rel="stylesheet" type="text/css" href="menuloggedin.css">
<link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, user-scalable=no" />
</head>

<body>
<div id="wrapper">
<a href="inputNewData.html"><img id="new-data" src="img/new-data-300px.png" alt="input new data"/></a>
<p id="andrew">Hi Andrew! Feeling sleepy today?</p>
<a href="logout.php"><img id="logout" src="img/logout-60px.png" alt="logout"/></a>
<div id="meal-dot"></div>
<p id="meal-tips">Meal tips</p>
<div id="location-dot"></div>
<p id="location-tips">Location-based tips</p>
<div id="auto-sleep-dot"></div>
<p id="auto-sleep-mode">Auto sleep mode at bedtime hours</p>
<div id="bedtime-reminders-dot"></div>
<p id="bedtime-reminders">Bedtime reminders</p>
<div id="sleep-tracking-dot"></div>
<p id="sleep-tracking">Sleep tracking</p>
<div id="steps-dot"></div>
<p id="steps-counter">Steps counter</p>
<p id="see-stats"><a href="results.php">See your stats ></a></p>
<img id="need-advice" src="img/need-advice-150px.png" alt="i need advice"/>
<img id="go-sleep" src="img/going-to-sleep-170px.png" alt="going to sleep"/>
</div>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/sweetalert-master/lib/sweet-alert.min.js"></script> <!--alert styling taken from //http://tristanedwards.me/sweetalert-->

<script> 

/*Originally, we planned on changing the dot's color and making the font thicker when the user clicked on it. The code for that looks like this:

$("#auto-sleep-dot").click(function(){ 
	var clicks1 = $(this).data('clicks1');
	if (clicks1){
		this.style.backgroundColor = "#5ea6c7";
		} else {
			this.style.backgroundColor = "#483652";
		}
		$(this).data("clicks1", !clicks1);
});

$("#auto-sleep").click(function(){ 
	var clicks2 = $(this).data('clicks2');
	if (clicks2){
		this.style.fontWeight = "700";
		} else {
			this.style.fontWeight = "100";
		}
		$(this).data("clicks2", !clicks2);
});

But we have decided that since this is a prototype, we're going to use alerts to demonstrate how the app would work.
*/

$("#meal-dot").click(function(){ 
	swal({   
	title: "Hey buddy, are you going to eat lunch?",
	imageUrl:"img/sloth-and-coffee.png",    
	showCancelButton: true,   
	confirmButtonColor: "#DD6B55",   
	confirmButtonText: "Yes!",   
	cancelButtonText: "Nope!",   
	closeOnConfirm: false,   
	closeOnCancel: false }, 
	
	function(isConfirm){   if (isConfirm) {     swal({
	title:"Marvellous!", 
	imageUrl:"img/healthy-food-colored.png"});   } else {     swal({
	title:"I'm disappointed in you.",
	imageUrl:"img/no-food-colored.png"});   } });		
});
	
$("#meal-tips").click(function(){
swal({   
	title: "Hey buddy, are you going to eat lunch?",
	imageUrl:"img/sloth-and-coffee.png",    
	showCancelButton: true,   
	confirmButtonColor: "#DD6B55",   
	confirmButtonText: "Yes!",   
	cancelButtonText: "Nope!",   
	closeOnConfirm: false,   
	closeOnCancel: false }, 
	function(isConfirm){   if (isConfirm) {     swal({
	title:"Marvellous!", 
	imageUrl:"img/healthy-food-colored.png"});   } else {     swal({
	title:"I'm disappointed in you.",
	imageUrl:"img/no-food-colored.png"});   } });	
});

$("#location-dot").click(function(){ 
	swal({
		title:"Hey buddy, you shouldn't go to the gym 4 hours before bedtime!", 
		imageUrl: "img/sports-colored.png"});
});

$("#location-tips").click(function(){ 
	swal({
		title:"Hey buddy, you shouldn't go to the gym 4 hours before bedtime!", 
		imageUrl: "img/sports-colored.png"});
	
});

$("#bedtime-reminders-dot").click(function(){ 
	swal({
	title:"Hey buddy, it's late. Maybe you should go to sleep soon!",
	imageUrl:"img/no-sleep.png"});
});

$("#bedtime-reminders").click(function(){ 
	swal({
	title:"Hey buddy, it's late. Maybe you should go to sleep soon!",
	imageUrl:"img/no-sleep.png"});
});

$("#sleep-tracking-dot").click(function(){ 
	swal("Sleep tracking started.");
});

$("#sleep-tracking").click(function(){
	swal("Sleep tracking started.");
});

$("#steps-dot").click(function(){ 
	swal({
		title:"Walking is good!", 
		imageUrl: "img/sports-colored.png"});
});

$("#steps-counter").click(function(){ 
	swal({
		title:"Walking is good!", 
		imageUrl: "img/sports-colored.png"});
});

$("#need-advice").click(function(){
	swal({
	title:"Hey buddy, it's late. Maybe you should go to sleep soon!",
	imageUrl:"img/no-sleep.png"});
});

$("#go-sleep").click(function(){
	swal("Sleep tracking started.");
});

</script>


</body>
</html>








