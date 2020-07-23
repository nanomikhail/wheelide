<?
	ob_start();
	session_start();

	$mysqli = mysqli_connect("server", "user", "pass", "db");
	if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());exit();
	}mysqli_query($mysqli, "SET NAMES utf8");

	if (isset($_POST['savenamemain'])&&isset($_POST['place'])){
		$code=substr($_POST['place'], 28, 471);
		mysqli_query($mysqli, "INSERT INTO `gallery`(`name`, `code`, `empty`) VALUES('".$_POST['savenamemain']."','".$code."', '1')");
		header("Location: https://sweet.udevteam.com/index.php?prt=wheelide&page=gallery&s=1/");
	}else{
		header("Location: https://sweet.udevteam.com/index.php?prt=wheelide&page=gallery/");

	}
?>