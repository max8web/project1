<?
	require_once ('config/config.php');	
	
	$id=($_POST['id']);
	$query="SELECT * FROM products WHERE id='$id'";
	$res=mysql_query($query);
	if (!$res) {
		exit($query);
	}
	$result=mysql_fetch_array($res);
	echo "
		<div class='modal-content'>
			<h2>".$result['name']."</h2>
			<img src='/media/uploads/".$result['picture']."'/>
			<h4><strong>Стоимость: ".$result['price']."</strong></h4>
			<h4>Описание: ".$result['body']."</h4>
			<h5>Дата создания: ".$result['putdate']."</h5>
		</div>
	";

?>