<?php
	require_once ("../config/config.php");
	require_once ("phpQuery/phpQuery/phpQuery.php");
		
	$query="SELECT * FROM products WHERE picture='no_image.jpg'";
	$res=mysql_query($query);
	if (!$res) {
		exit ($query);
	}
	if (mysql_num_rows($res)) {
		while ($result=mysql_fetch_array($res)) {
			$str=@ereg_replace(" ","+",$result['name']);
			$http='http://www.google.by/search?q='.$str.'&hl=ru&biw=1280&bih=887&site=webhp&source=lnms&tbm=isch&sa=X&sqi=2&ved=0ahUKEwiKyoO2uqbLAhUJLZoKHWqXAhIQ_AUIBigB';
			$hab=file_get_contents($http);
			$document=phpQuery::newDocument($hab);
			$hentry=$document->find('.images_table img')->attr('src');
			$dir=$_SERVER['DOCUMENT_ROOT'].'/media/uploads/';
			$newfile='google'.time().'.jpg';
			if (!copy($hentry,$dir.$newfile)) {
				echo "Изображение не скопировано!";
			}
			else {
				$query2="UPDATE products SET picture='$newfile' WHERE id=".$result['id']."";
				if (!mysql_query($query2)) {
					echo $query2;
				}
				echo "<img src='/media/uploads/$newfile' />";
			}
			sleep (1);
		}
	}
	else {
	echo "Все изображения заполнены!";
	}
?>