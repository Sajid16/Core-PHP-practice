<!DOCTYPE html>
<html>
<head>
	<title>php practice</title>
</head>
<body>
	<!-- array practice -->
	<?php

	$x = array(
		"dhaka",
		"rajshahi",
		"khulna"
	);

	$y = array(
		"rangpur",
		"comilla",
		"sylhet",
		"chittagong"
	);

	$z = array(
		"aust",
		"aiub",
		"nsu",
		"brac"
	);

	function lengthcount($x,$y,$input){

		$arraylength1 = count($x);
		$arraylength2 = count($y);

		if($input == 1){
				// echo "it is for first";
			for($i=0; $i<$arraylength1 ;$i++){
				echo "the name of the city is: ".$x[$i];
				echo "<br>";
			}
		}
		else if($input == 2){
				// echo"it is for second";
			for($i=0; $i<$arraylength2 ;$i++){
				echo "the name of the city is: ".$y[$i]."<br>";
				echo "lets go there.<br>";
			}
		}
		else{
			echo "your input is ot of bound";
		}
	}

	$count = 2;
	lengthcount($x,$y,$count);
	

	// <!-- switch case practice -->

	function switch_case_function($param){

		switch ($param) {
			case 'php':
			echo "i am a backend web developer";
			break;

			case 'html':
			echo "i am a frontend developer";
			break;
			
			case 1:
			echo "i am a pregrammer";
			break;

			default:
			echo "i am a full stack developer";
			break;
		}

	}

	$sw_var1 = "html";
	$sw_var2 = "php";
	$sw_var3 = 1;
	// $param = $sw_var2;
	// $param = "javasccript";
	$param = $sw_var3;
	switch_case_function($param);
	?>
</body>
</html>