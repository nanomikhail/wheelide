<?
	ob_start();
	session_start();

	$mysqli = mysqli_connect("server", "user", "pass", "db");
	if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());exit();
	}mysqli_query($mysqli, "SET NAMES utf8");

	if (isset($_POST['savecode'])&&isset($_POST['imgname'])){
		mysqli_query($mysqli, "INSERT INTO `gallery`(`name`, `code`, `empty`) VALUES('".$_POST['imgname']."','".$_POST['savecode']."', '1')");
		header("Location: https://sweet.udevteam.com/index.php?prt=wheelide&page=gallery&s=1/");
	}else{
		header("Location: https://sweet.udevteam.com/index.php?prt=wheelide&page=gallery/");

	}
?>