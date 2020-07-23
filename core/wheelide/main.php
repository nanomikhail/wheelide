
<div>
	<div style="display:inline-block;float: left;">
		<form action="index.php" method="POST" id="ch">
			<div id="set2">
				<p id="set1">the number of repeats</p>
				<div id="set4">
				<p id="set3">1</p><input type="range" name="n" min="1" max="15" step="1" value="6" id="set5"><p id="set3">15</p>
				</div>
			</div>
			<? $colors = array('0','<div class="clable" style="color:red">Red</div>','<div class="clable" style="color:green">Green</div>','<div class="clable" style="color:blue">Blue</div>');
				for ($c=1; $c <= 3; $c++) {
					echo '<div style="display:inline-block;float: left; padding:5px;">';echo $colors[$c];
						for ($i=0; $i <= 20; $i++) { 
							echo '<p style="height: 13px;"><input type="checkbox" name="'.$i.'-0-'.$c.'" value="1">';
							for ($j=1; $j < 20; $j++) { 
								echo '<input style="margin:0px;" type="checkbox" name="'.$i.'-'.$j.'-'.$c.'" value="1">';
							}
							echo '<input style="margin:0px;" type="checkbox" name="'.$i.'-20-'.$c.'" value="1"></p>';
						}
					echo '</div>';
				}
			?>
		</form><br>
		<form action="/core/wheelide/savemain.php" method="POST" id="savemain" style="position: absolute;margin-left: 240px;top: 162px;">
			<input type="text" name="savenamemain" placeholder="Name for image..." autocomplete="off">
			<textarea style="display:none;" name="place" id="cplace"cols="30" rows="10"></textarea>
			<button>Save!</button>
		</form>	
	</div>
	<div style="display:inline-block;float: left;" id="prw"></div>
</div>