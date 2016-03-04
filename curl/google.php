<?
	
	header("Content-type: text/html; charset=utf-8");
	
	//парсинг
	function get_content ($hostname, $path) {
		$line='';
		$fd=fsockopen($hostname,80,$error,$errstr,30);
		if (!$fd) {
			echo $error.'('.$errstr.')';
		}
		else {
			$headers="GET $path HTTP/1.1\r\n";
			$headers.="Host: $hostname\r\n";
			$headers.="Connection: Close\r\n\r\n";


			fwrite($fd,$headers);
			while (!feof($fd)) {
				$line.=fgets($fd,1024);
			}
			fclose($fd);
		}
		return $line;
	}
	
	$hostname='www.google.by';
	$path='/search?q=Разработка+сайтов+под+ключ&ie=utf-8&oe=utf-8&aq=+&rls=org.mozilla:ru:official&client=firefox';
	//echo $hostname.$path;
	$content=get_content($hostname,$path);
	$content=strstr($content, '<');
	preg_match_all ("/<cite>.*<\/cite>/isu",$content,$cont,PREG_PATTERN_ORDER); //находит регулярное выражение
	echo "<pre>";
	print_r ($cont);
	
?>