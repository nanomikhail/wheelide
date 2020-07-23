<?
	$raw=$_POST['cashcalc'];
	$num='';$sum=0;$one=0;$both=0;
	for ($i=0; $i < strlen($_POST['cashcalc']); $i++) { 
		if (is_numeric(substr($_POST['cashcalc'], $i, 1))) {
			$num=$num.substr($_POST['cashcalc'], $i, 1);
		}else{
			$num=intval($num);
			if (substr($_POST['cashcalc'], $i, 1) == 'a') {
				$sum=$sum+$num;
				$one=$one+$num;
			}elseif (substr($_POST['cashcalc'], $i, 1) == 's'){
				$sum=$sum+($num/2);
				$both=$both+$num;
			}
			$num='';
		}
	}
	echo '<span style="font-size: 18px;">sum: </span><div style="background-color:#7199ff;" id="cost">'.$sum.'₽</div><br>';
	echo '<span style="font-size: 18px;">one: </span><div style="background-color:#41d092;" id="cost">'.$one.'₽</div><br>';
	echo '<span style="font-size: 18px;">both: </span><div style="background-color:#de9e45;" id="cost">'.$both.'₽</div><br>';
?>