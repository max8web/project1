<?
	$ch=curl_init(); //������� ������ cURL
	curl_setopt($ch,CURLOPT_URL,'http://bsn.by/register_enter.php'); //����� ���������, ������� �� ������
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_POST,1);
	curl_setopt($ch,CURLOPT_POSTFIELDS,'name=global&pass=2244'); //������������-������
	curl_setopt($ch,CURLOPT_COOKIEJAR,$_SERVER['DOCUMENT_ROOT'].'/curl/cookiefile.txt'); //��������� � ���������� �����, �������� ��������� html-��������
	$result=curl_exec($ch); //����������
	curl_setopt($ch,CURLOPT_URL,'http://bsn.by/register_success.php');
	curl_setopt($ch,CURLOPT_POST,0);
	curl_setopt($ch,CURLOPT_COOKIEFILE,$_SERVER['DOCUMENT_ROOT'].'/curl/cookiefile.txt'); //��������� � cookiefile
	$result=curl_exec($ch); 
	curl_close($ch); //���������
	echo $result;
?>