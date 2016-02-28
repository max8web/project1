<?
	require_once ('libs/middleware_auth.php');
	require_once ('libs/middleware_admin_auth.php');
	require_once ('templates/top.php');				
?>
	<h2>Все заказы</h2>
	
	<div class="content">
		
<?  
	//вывод всех заказов
	$query="SELECT COUNT(*) FROM orders";
	$res=mysql_query($query);
	$row=mysql_fetch_row($res);
	if ($row[0]==0) {
		echo "У вас нет заказов";
	}
	else {
		$query="SELECT * FROM orders";
		$res=mysql_query($query);
		echo "<table class='content_table1'><tr><th>Имя</th><th>Email</th><th>Телефон</th><th>Заказ</th><th>Действия</th></tr>";
		while ($result=mysql_fetch_array($res)) {
			$ch1=''; $ch2=''; $ch3='';
			$sch1=''; $sch2=''; $sch3='';
			$status=$result['status'];
			$checked="checked='checked'";
			$style_cheched="class='radio_checked'";
			switch ($status) {
				case "Обрабатывается": $ch1=$checked; $sch1=$style_cheched; break;
				case "Отправлен": $ch2=$checked; $sch2=$style_cheched; break;
				case "Завершен": $ch3=$checked; $sch3=$style_cheched; break;				
			}
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
				<td><a href='admin/orders/orders_delete.php?id=".$result['id']."'>Удалить</a><br /> 
					<form method='POST' action='admin/orders/orders_edit.php?id=".$result['id']."'>
						<input type='radio' name='status' ".$ch1." value='Обрабатывается'><span ".$sch1."> Обрабатывается</span><Br>
						<input type='radio' name='status' ".$ch2." value='Отправлен'><span ".$sch2."> Отправлен</span><Br>
						<input type='radio' name='status' ".$ch3." value='Завершен'><span ".$sch3."> Завершен</span><Br>
						<input type='submit' value='Сменить статус'/>
					</form>					
				</td>
			</tr>
			";
		}
		echo "</table>";
	}
?>
	
	</div>
	
<? require_once ('templates/bottom.php'); ?>