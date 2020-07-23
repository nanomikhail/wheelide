<?
	$code=$_POST['ccode'];
	$chars = array("{", "}", '"', ",", chr(9), chr(10), chr(13), chr(32));
	$code=str_replace($chars,'',$code);
	$bincode='';
	for ($i=0; $i < strlen($code); $i++) { 
		$px=substr($code, $i, 1);
		switch ($px) {
			case "0": $bincode=$bincode.'000';break;
			case "b": $bincode=$bincode.'001';break;
			case "g": $bincode=$bincode.'010';break;
			case "c": $bincode=$bincode.'011';break;
			case "r": $bincode=$bincode.'100';break;
			case "m": $bincode=$bincode.'101';break;
			case "y": $bincode=$bincode.'110';break;
			case "w": $bincode=$bincode.'111';break;
		}
	}
	// ohte - one hundred twenty eight
	$ohte_num=array('0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я','А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я');
	$ohte_code='';
	for ($i=0; $i < strlen($bincode); $i=$i+7) {$ohte_code=$ohte_code.$ohte_num[bindec(substr($bincode, $i, 7))];}

	echo $ohte_code;

?>
