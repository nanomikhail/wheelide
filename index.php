<!DOCTYPE HTML>
<? include 'base.php'; ?>
<html>
	<head>
		<title>not Form converter</title>
		<link rel="stylesheet" href="style.css">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="scripts/script.js"></script>
	</head>
	<body>
		<div id="wrapper">
			<?
				$mainmenu='
					<a href="?prt=wheelide" class="btnmainmenu">Wheel_IDE</a>
					<a href="?prt=cash" class="btnmainmenu">Cash_calc</a>
				';
				$prt="";$title="";$menu='';
				switch ($_GET['prt']){
					case "wheelide":
						$prt="wheelide";
						$title="Wheel editor";
						$txtcolor="#24773A";
						$bgcolor="rgb(77, 187, 82)";
						$menu='
							<a href="?prt='.$prt.'" class="btnmenu">editor</a>
							<a href="?prt='.$prt.'&page=viewer" class="btnmenu">viewer</a>
							<a href="?prt='.$prt.'&page=encoder" class="btnmenu">encoder</a>
							<a href="?prt='.$prt.'&page=decoder" class="btnmenu">decoder</a>
							<a href="?prt='.$prt.'&page=gallery" class="btnmenu">gallery</a>
						';
					break;
					case "cash":
						$prt="cash";
						$title="Cash calc";
						$txtcolor="#225b96";
						$bgcolor="#748dbf";
						$menu='
							<a href="?prt='.$prt.'" class="btnmenu">check calc</a>
							<a href="?prt='.$prt.'&page=empty" class="btnmenu">check multi</a>
						';
					break;	
					default:
					break;
				}
				echo '<div id="head" style="background-color:'.$bgcolor.';">';
				echo '<div id="title" style="color:'.$txtcolor.';">'.$title.'</div>';
				echo '<div style="display: inline-block;"><div style="margin-bottom: 5px;">'.$mainmenu.'</div>';
				echo '<div>'.$menu.'</div></div>';
				echo '</div>';
			?>
			<div id="body">
				<?
					if (empty($_GET['prt'])) {
						header("Location: https://sweet.udevteam.com/index.php?prt=wheelide");
					}else{
						switch ($_GET['prt']){
							case "wheelide":
								if(empty($_GET['page'])){
									include 'core/wheelide/main.php';
								}elseif ($_GET['page']=="viewer") {
									include 'core/wheelide/viewer.php';
								}elseif ($_GET['page']=="encoder") {
									include 'core/wheelide/encoder.php';
								}elseif ($_GET['page']=="decoder") {
									include 'core/wheelide/decoder.php';
								}elseif ($_GET['page']=="gallery") {
									include 'core/wheelide/gallery.php';
								}
							break;
							case "cash":
								if(empty($_GET['page'])){
									include 'core/cash/main.php';
								}elseif ($_GET['page']=="test") {

								}
							break;
						}
					}
				?>
			</div> 
			<div id="foot">
				<span id="copy">&nbsp© 2020 MOLOTOW universal platform.</span>
			</div>
		</div>
	</body>

</html>