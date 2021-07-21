<!DOCTYPE htmal>
<html>
	<head>
		<meta charset="utf-8">
		<title>Robot Arm </title>
		
		<link href ="combined.css" type="text/css" rel="stylesheet">
	
	</head>
	
	<body>
	<h1 style="margin: 10px auto 10 400 ; background-color:#677b7b47; color:white; text-align:center; ">Robot Arm Control Panel</h1>
	
	<div class="slideContainer">
	
	<form id="myForm"  action="combined.php" method="POST">
	
	<div class="margintext">
	
			<p>Motor1<span id= "M1"></span> </p>
			<input type="range" min="0" max="180" value="0" id="FirstSliderRange" class="FirstSlider" name="S1">
			<p class="valuetext">Valiue:<span id="FirstValue"></span></p>
		
		
		</br>
		
			<p>Motor2<span id= "M2"></span> </p>
			<input type="range" min="0" max="180" value="0" id="SecondSliderRange" class="SecondSlider" name="S2">
			<p class="valuetext">Valiue:<span id="Secondvalue"></span></p>

		
		</br>
		
			<p>Motor3<span id= "M3"></span> </p>
			<input type="range" min="0" max="180" value="0" id="ThirdSliderRange" class="ThirdSlider" name="S3">
			<p class="valuetext">Valiue:<span id="Thierdvalue"></span></p>
		
		
		</br>
			<p>Motor4<span id= "M4"></span> </p>
			<input type="range" min="0" max="180" value="0" id="FourthSliderRange" class="FourthSlider" name="S4">
			<p class="valuetext">Valiue:<span id="Fourthvalue"></span></p>
		
		
		</br>
		
		<p>Motor5<span id= "M5"></span> </p>
		
			<input type="range" min="0" max="180" value="0" id="FifthSliderRange" class="FifthSlider" name="S5">
			<p class="valuetext">Valiue:<span id="Fifthvalue"></span></p>
		
		
		</br>
		
			<p>Motor6<span id= "M6"></span> </p>
			<input type="range" min="0" max="180" value="0" id="SixthSliderRange" class="SixthSlider" name="S6">
			<p class="valuetext">Valiue:<span id="Sixthvalue"></span></p>
		
		
		</br>
																			<!.......Button style......>
		<input type="submit" value = "Save and Run" name="Save_and_Run" style="font-size: 23px; background: rgb(159 ,189 ,214); border-radius: 60px; color:white;"> </br></br>		
		<button><a href= "combined2task.php " style="font-size: 23px; background: #F0F8FF ; color:black;"> Go to the Base Controlling -> </a> </button>
		</div>
		
		
	<script src= "combined.js"></script>
<script>
  window.watsonAssistantChatOptions = {
      integrationID: "c4c2306a-19e4-45e7-a0f0-83fb8b8cfd23", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "7a456052-533b-4a7f-a4f2-e06917b011e3", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>
	
	</body>

</html>
<?php 
error_reporting(E_ALL&~E_NOTICE);
ini_set('display_errors',1);


$ServerName = "localhost";
$UserName = "root";
$dbName = "combinedtask";
$password = "";

// Create connection
$conn = mysqli_connect($ServerName, $UserName, $password ,$dbName );

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


//ارسال المعلومات المدخله الي قاعدة البيانات 

if(isset($_POST['save_and_run'])){

$p1 =$_POST['S1'];
$p2 =$_POST['S2'];
$p3 =$_POST['S3'];
$p4 =$_POST['S4'];
$p5 =$_POST['S5'];
$p6 =$_POST['S6'];



	
$query ="INSERT INTO robotarm (Id,Motor1,Motor2,Motor3,Motor4,Motor5,Motor6,Save_and_Run)VALUES('','$p1','$p2','$p3','$p4','$p5','$p6','S')";


if(mysqli_query($conn,$query)){

	echo "Save";
}
	
else
{
	echo "Soryy Is Not Save Data";
}
mysqli_close($conn);
}

?>
