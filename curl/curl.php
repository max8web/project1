<?
	$ch=curl_init(); //создали объект cURL
	curl_setopt($ch,CURLOPT_URL,'http://bsn.by/register_enter.php'); //опции настройки, переход по ссылке
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_POST,1);
	curl_setopt($ch,CURLOPT_POSTFIELDS,'name=global&pass=2244'); //пользователь-пароль
	curl_setopt($ch,CURLOPT_COOKIEJAR,$_SERVER['DOCUMENT_ROOT'].'/curl/cookiefile.txt'); //настройка к текстовому файлу, хранение временной html-страницы
	$result=curl_exec($ch); //выполнение
	curl_setopt($ch,CURLOPT_URL,'http://bsn.by/register_success.php');
	curl_setopt($ch,CURLOPT_POST,0);
	curl_setopt($ch,CURLOPT_COOKIEFILE,$_SERVER['DOCUMENT_ROOT'].'/curl/cookiefile.txt'); //обращение к cookiefile
	$result=curl_exec($ch); 
	curl_close($ch); //закрываем
	echo $result;
?>