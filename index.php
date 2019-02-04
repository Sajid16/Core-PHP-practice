<!DOCTYPE html>
<html>
<head>
	<title>php practice</title>
</head>
<body>
	
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

			foreach ($variable as $key => $value) {
				# code...
			}

			if($input == 1){
				// echo "it is for first";
				for($i=0; $i<$arraylength1 ;$i++){
					echo "the name of the city is: ".$x[$i];
					echo "<br>";
				}
			}
			else{
				// echo"it is for second";
				for($i=0; $i<$arraylength2 ;$i++){
					echo "the name of the city is: ".$y[$i]."<br>";
					echo "lets go there.<br>";
				}
			}
		}

		// $arraylength2 = count($y);
		// echo $arraylength;
		$count = 12;
		lengthcount($x,$y,$count);
	?>

</body>
</html>