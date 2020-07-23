<div style="display: none;">
	<?

		for ($i=20; $i >= 0; $i--) { 
$hex="";$h=0;
			for ($j=0; $j < 21; $j++) { 
				if (isset($_POST[$j.'-'.$i.'-1'])) {$hex=$hex.'1';}else{$hex=$hex.'0';}
				if (isset($_POST[$j.'-'.$i.'-2'])) {$hex=$hex.'1';}else{$hex=$hex.'0';}
				if (isset($_POST[$j.'-'.$i.'-3'])) {$hex=$hex.'1';}else{$hex=$hex.'0';}
				switch ($hex) {
					case "000":echo '0';break;
					case "100":echo 'r';break;
					case "010":echo 'g';break;
					case "001":echo 'b';break;
					case "110":echo 'y';break;
					case "011":echo 'c';break;
					case "101":echo 'm';break;
					case "111":echo 'w';break;
				}$hex="";
			}
		}
	?>
</div>
<div style="display:inline-block;font-size:15px;margin-top:35px;margin-left:4px;float:left;transform: translate(0px) rotate(90deg);">
<p id="code" style="">coded picture:</p>
	<?
		echo "{";
		for ($i=20; $i >= 0; $i--) { 
			echo '"';$hex="";$h=0;
			for ($j=0; $j < 21; $j++) { 
				if (isset($_POST[$j.'-'.$i.'-1'])) {$hex=$hex.'1';}else{$hex=$hex.'0';}
				if (isset($_POST[$j.'-'.$i.'-2'])) {$hex=$hex.'1';}else{$hex=$hex.'0';}
				if (isset($_POST[$j.'-'.$i.'-3'])) {$hex=$hex.'1';}else{$hex=$hex.'0';}
				switch ($hex) {
					case "000":echo '<p style="display:inline-block;height:auto;width:17px;color:#000000;background-color:#000000;">0</p>';break;
					case "100":echo '<p style="display:inline-block;height:auto;width:17px;color:#FF0000;background-color:#FF0000;">r</p>';break;
					case "010":echo '<p style="display:inline-block;height:auto;width:17px;color:#00FF00;background-color:#00FF00;">g</p>';break;
					case "001":echo '<p style="display:inline-block;height:auto;width:17px;color:#0000FF;background-color:#0000FF;">b</p>';break;
					case "110":echo '<p style="display:inline-block;height:auto;width:17px;color:#FFFF00;background-color:#FFFF00;">y</p>';break;
					case "011":echo '<p style="display:inline-block;height:auto;width:17px;color:#00FFFF;background-color:#00FFFF;">c</p>';break;
					case "101":echo '<p style="display:inline-block;height:auto;width:17px;color:#FF00FF;background-color:#FF00FF;">m</p>';break;
					case "111":echo '<p style="display:inline-block;height:auto;width:17px;color:#FFFFFF;background-color:#FFFFFF;">w</p>';break;
				}$hex="";
			}
			if ($i>0){echo '",<br>';}else{echo '"}<br>';}
		}
	?>
</div>

<div style="display:inline-block;position:relative;left: 284px;float: left;top: 245px;"><?echo $_POST['n'];?></div>

<div style="display:inline-block;height:310px;width:10px;margin-left:280px;margin-top:35px;">
	<?
		$n=$_POST['n'];
		$deg=0;
		for ($t=0; $t < $n; $t++) { 
			$g=0;
			for ($m=0; $m < 21; $m++) { 
				$deg=$deg+(360/(21*$n));
				$k=0;
				echo '<div style="display:inline-block;float: left;transform: translate(0px) rotate('.$deg.'deg);transform-origin:  0px 220px;position:absolute;">';
				for ($j=0; $j < 21; $j++) { 
					if (isset($_POST[$k.'-'.$g.'-1'])||isset($_POST[$k.'-'.$g.'-2'])||isset($_POST[$k.'-'.$g.'-3'])) {
						$color="";
						if (isset($_POST[$k.'-'.$g.'-1'])){$color=$color."ff";}else{$color=$color."00";}
						if (isset($_POST[$k.'-'.$g.'-2'])){$color=$color."ff";}else{$color=$color."00";}
						if (isset($_POST[$k.'-'.$g.'-3'])){$color=$color."ff";}else{$color=$color."00";}
						echo '<div class="led" style="background-color: #'.$color.';"></div>';
					}else{
						echo '<div class="led" style="visibility: hidden;"></div>';
					}
					
					$k++;
				}
				echo '</div>';
				$g++;
			}
		}
	?>
</div>

