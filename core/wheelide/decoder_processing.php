<?
	$code=$_POST['ohtecode'];
	$chars = array("{", "}", '"', ",", chr(9), chr(10), chr(13), chr(32));
	$code=str_replace($chars,'',$code);
	// ohte - one hundred twenty eight
	$ohte_num=array('0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','а','б','в','г','д','е','ё','ж','з','и',"й",'к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я','А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я');
	
	mb_internal_encoding("UTF-8");

	$colorcode='';
	for ($i=0; $i < mb_strlen($code); $i++) { 
		$bin = sprintf( "%07d", decbin(array_search(mb_substr($code, $i, 1), $ohte_num)));
		$colorcode=$colorcode.$bin;
	}

	$colors=array('0','b','g','c','r','m','y','w');
	$fcode='';
	for ($i=0; $i < mb_strlen($colorcode); $i=$i+3) { 
		$fcode=$fcode.$colors[bindec(mb_substr($colorcode, $i, 3))];
	}

	echo $fcode;

?>