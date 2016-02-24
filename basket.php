<?
	require_once ('templates/top.php');	
?>

	<h2>Корзина пользователя</h2>
	
	<div class="content">
<?
		// формирование списка товаров в корзине
		if (isset($_COOKIE['basket'])) {
			$arr=unserialize($_COOKIE['basket']);
			echo "<table class='content_table1'><tr><th>Фото</th><th>Название</th><th>Цена</th><th>Кол-во</th><th>Сумма</th><th>Действия</th></tr>";
			$summ_main=0;
			$value_main=0;
			foreach ($arr as $key=>$value) {
				$query="SELECT * FROM products WHERE id='$key'";
				$res=mysql_query($query);
				if (!$res) {
					exit ($query);
				}
				$result=mysql_fetch_array($res);
				$summ=$result['price']*$value;
				$summ_main+=$summ;
				$value_main+=$value;
				?>
				<tr>
					<td><a target='_blank' href='/media/uploads/<?=$result['picture']?>'><img src='/media/uploads/<?=$result['picture'];?>'/></a></td>
					<td><?=$result['name'];?></td>
					<td><?=$result['price'];?></td>
					<td>
						<form name="basket_count" method="POST" action="edit_card.php?id=<?=$result['id'];?>">
						<input type="number" name="count" value="<?=$value;?>"/>				
						<input type="submit" value="Edit">
						</form>
					</td>
					<td><?=$summ;?></td>
					<td>				
						<a href="card_dell.php?id=<?=$result['id']?>">Удалить</a>
					</td>
				</tr>
				<?
			}
			echo "<tr><td>Итого:</td><td></td><td></td><td>".$value_main."</td><td>".$summ_main."</td><td></td></tr>";
			echo "</table>";
		}
		else {
			echo "Ваша корзина пуста";
		}	
		
		
		// автозаполнение формы
		if ($_SESSION['id']) {
			$session_id=$_SESSION['id'];
			$query="SELECT * FROM users WHERE id='$session_id'";
			$res=mysql_query($query);
			$result=mysql_fetch_array($res);
			$name=$result['fio'];
			$email=$result['email'];
		}
		
		
		// оформление заявки
		if ($_POST) {
			$error=array();
			$name=trim($_POST['name']);
			$email=trim($_POST['email']);
			$phone=trim($_POST['phone']);
			if (!$name) {
				$error[]='Поле: ИМЯ обязательно для заполнения';
			}
			if (!$email) {
				$error[]='Поле: EMAIL обязательно для заполнения';
			}
			if (!$phone) {
				$error[]='Поле: PHONE обязательно для заполнения';
			}
			if (count($error)>0) {
				foreach ($error as $one) {
					echo "<div style='color:red;' class='error'>";
					echo $one;
					echo "</div>";
				}			
			}
			else {
				$session=(isset($_SESSION['id']))?$_SESSION['id']:0;
				$query="INSERT INTO orders VALUES (null,'$name','$email','$phone','".$_COOKIE['basket']."','Обрабатывается','$session')";
				$res=mysql_query($query);
				if (!$res) {
					exit ($query);
				}
				?>
				<script>
				document.location.href='libs/clear_cookie.php';
				</script>
				<?
			}
		}
		
?>

<? if (isset($_COOKIE['basket'])) { ?>
			<form action="basket.php" method="POST">
				<p><strong>Оформление заказа:</strong></p>
				<div class="form-group">
				<label for="examplefio">Имя</label>
				<input type="text" class="form-control" id="examplefio" placeholder="Имя" name="name" value="<?=$name;?>">
				</div>
				<div class="form-group">
				<label for="exampleemail">E-mail</label>
				<input type="email" class="form-control" id="exampleemail" placeholder="E-mail" name="email" value="<?=$email;?>">
				</div>
				<div class="form-group">
				<label for="examplelogin">Телефон</label>
				<input type="text" class="form-control" id="examplelogin" placeholder="Телефон" name="phone">
				</div>
			
				<button type="submit" class="btn btn-default">Подтвердить</button>
				
			</form>
			
<? } ?>

	</div>

<? require_once ('templates/bottom.php'); ?>