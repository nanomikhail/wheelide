<div id="saver">
	<form action="/core/wheelide/save.php" method="POST" id="saveform">
		Name:<br>
		<input type="text" name="imgname" style="width: 176px;"><br><br>
		Code:<br>
		<textarea name="savecode" cols="23" rows="10" autofocus style="resize: none;"></textarea><br>
		<button style="width:180px;height:30px;" placeholder="Name for image..." autocomplete="off">Save this image!</button>
	</form>
	<?if (!empty($_GET['s'])) {echo "Saved!";}?>
</div>
<div id="gall">
<?

$result = mysqli_query($mysqli, 'SELECT * FROM gallery');
$j=0;
while($cycle = mysqli_fetch_assoc($result)) {
	$images[$j]["id"] = $cycle["id"];
    $images[$j]["name"] = $cycle["name"];
    $images[$j]["code"] = $cycle["code"];
    $j=$j+1;
}

if(empty($_GET['image'])){

	for ($i=count($images)-1; $i > 0; $i--) { 

			echo '<div class="prwpad">
				<div class="preview">';
				$code=$images[$i]["code"];
				$chars = array("{", "}", '"', ",", chr(9), chr(10), chr(13), chr(32));
				$code=str_replace($chars,'',$code);
				$width=strlen($code)/21;

				$n=6;
				$deg=0;
				for ($t=0; $t < $n; $t++) { 
					$g=0;
					for ($m=0; $m < 21; $m++) { 
						$deg=$deg-(360/(21*$n));
						$k=0;
						echo '<div class="plank" style="transform: translate(120px, -100px) rotate('.$deg.'deg);">';
						for ($j=0; $j < 21; $j++) { 
							$px=substr($code, (($g*21)+$k), 1);
							switch ($px) {
								case "0":echo '<div class="ledprw" style="visibility: hidden;"></div>';break;
								case "r":echo '<div class="ledprw" style="background-color: #ff0000;"></div>';break;
								case "g":echo '<div class="ledprw" style="background-color: #00ff00;"></div>';break;
								case "b":echo '<div class="ledprw" style="background-color: #0000ff;"></div>';break;
								case "y":echo '<div class="ledprw" style="background-color: #ffff00;"></div>';break;
								case "c":echo '<div class="ledprw" style="background-color: #00ffff;"></div>';break;
								case "m":echo '<div class="ledprw" style="background-color: #ff00ff;"></div>';break;
								case "w":echo '<div class="ledprw" style="background-color: #ffffff;"></div>';break;
							}
							
							$k++;
						}
						echo '</div>';
						$g++;
					}
				}

			echo '	</div>
			<a  href="'.$_SERVER[REQUEST_URI].'&image='.$i.'"><div class="open">OPEN</div></a>
				<div class="prwlablepad">		
					<div class="prwlable">'.$images[$i]["name"].'</div>
				</div>

			</div>';

	}
}else{
	echo $images[$_GET['image']]["name"];
}
?>
</div>

