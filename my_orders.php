<?
	require_once ('libs/middleware_auth.php');
	require_once ('templates/top.php');				
?>
	<h2>Мои заказы</h2>
	
	<div class="content">
		
<?  //вывод моих заказов
	$session_id=$_SESSION['id'];
	$query="SELECT COUNT(*) FROM orders WHERE user_id='$session_id'";
	$res=mysql_query($query);
	$row=mysql_fetch_row($res);
	if ($row[0]==0) {
		echo "У вас нет заказов";
	}
	else {
		$query="SELECT * FROM orders WHERE user_id='$session_id'";
		$res=mysql_query($query);
		echo "<table class='content_table1'><tr><th>Имя</th><th>Email</th><th>Телефон</th><th>Заказ</th><th>Статус заказа</th></tr>";
		while ($result=mysql_fetch_array($res)) {
			echo "
			<tr>
				<td>".$result['name']."</td>
				<td>".$result['email']."</td>
				<td>".$result['phone']."</td>
				<td>
					<table class='content_table2'><tr><th>Изображение</th><th>Название</th><th>Цена</th><th>Кол-во</th><th>Сумма</th></tr>
				";
				$arr=unserialize($result['zakaz']);
				foreach ($arr as $key=>$value) {
					$query2="SELECT * FROM products WHERE id='$key'";
					$res2=mysql_query($query2);
					$result2=mysql_fetch_array($res2);
					$summ=$result2['price']*$value;
					echo "
					<tr>
						<td><img src='/media/uploads/".$result2['picture']."' /></td>
						<td>".$result2['name']."</td>
						<td>".$result2['price']."</td>
						<td>".$value."</td>
						<td>".$summ."</td>
					</tr>
					";
				}
			echo "
					</table>
				</td>
				<td>".$result['status']."</td>
			</tr>
			";
		}
		echo "</table>";
	}
?>
	
	</div>
	
<? require_once ('templates/bottom.php'); ?>