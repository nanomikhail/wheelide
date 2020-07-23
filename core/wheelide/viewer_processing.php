<div style="display:inline-block;margin-left: 70px;margin-top: 85px;position: absolute;">
	<?

		$code=$_POST['code'];
		$chars = array("{", "}", '"', ",", chr(9), chr(10), chr(13), chr(32));
		$code=str_replace($chars,'',$code);
		$width=strlen($code)/21;

		for ($i=0;$i<$width;$i++) { 
			for ($j=20; $j >= 0; $j--) { 
				$px=substr($code, (($j*21)+$i), 1);
				switch ($px) {
					case "0":echo '<div style="display:inline-block;height:10px;width:10px;color:black;background-color:black;"></div>';break;
					case "r":echo '<div style="display:inline-block;height:10px;width:10px;color:red;background-color:red;"></div>';break;
					case "g":echo '<div style="display:inline-block;height:10px;width:10px;color:green;background-color:green;"></div>';break;
					case "b":echo '<div style="display:inline-block;height:10px;width:10px;color:blue;background-color:blue;"></div>';break;
					case "y":echo '<div style="display:inline-block;height:10px;width:10px;color:yellow;background-color:yellow;"></div>';break;
					case "c":echo '<div style="display:inline-block;height:10px;width:10px;color:cyan;background-color:cyan;"></div>';break;
					case "m":echo '<div style="display:inline-block;height:10px;width:10px;color:magenta;background-color:magenta;"></div>';break;
					case "w":echo '<div style="display:inline-block;height:10px;width:10px;color:white;background-color:white;"></div>';break;
				}
			}echo "<br>";
		}


		// echo $code;
		// echo "---".$width;
	?>
</div>

<div style="display:inline-block;height:310px;width:10px;margin-left: 550px;position: absolute;margin-top: 30px;">
	<?
		$n=6;
		$deg=0;
		for ($t=0; $t < $n; $t++) { 
			$g=0;
			for ($m=0; $m < 21; $m++) { 
				$deg=$deg-(360/(21*$n));
				$k=0;
				echo '<div style="display:inline-block;float: left;transform: translate(0px) rotate('.$deg.'deg);transform-origin:  0px 220px;position:absolute;">';
				for ($j=0; $j < 21; $j++) { 
					$px=substr($code, (($g*21)+$k), 1);
					switch ($px) {
						case "0":echo '<div class="led" style="visibility: hidden;"></div>';break;
						case "r":echo '<div class="led" style="background-color: #ff0000;"></div>';break;
						case "g":echo '<div class="led" style="background-color: #00ff00;"></div>';break;
						case "b":echo '<div class="led" style="background-color: #0000ff;"></div>';break;
						case "y":echo '<div class="led" style="background-color: #ffff00;"></div>';break;
						case "c":echo '<div class="led" style="background-color: #00ffff;"></div>';break;
						case "m":echo '<div class="led" style="background-color: #ff00ff;"></div>';break;
						case "w":echo '<div class="led" style="background-color: #ffffff;"></div>';break;
					}
					
					$k++;
				}
				echo '</div>';
				$g++;
			}
		}
	?>
</div>