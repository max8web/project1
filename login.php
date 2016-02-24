<? 
	require_once ("templates/top.php"); 
	
	if ($_POST) {
		$login=trim($_POST['login']);
		$password=trim($_POST['password']);
		$query="SELECT * FROM users WHERE login='$login' AND password='$password'";
		$cat=mysql_query($query);
		if (!$cat) {
			exit ($query);
		}
		$res=mysql_fetch_array($cat);
		if ($res['id']) {
			$_SESSION['id']=$res['id'];
			$_SESSION['admin']=$res['isadmin'];
			if ($_SESSION['admin']=='1') {
			?>
				<script>
					document.location.href='cabinet.php';
				</script>
			<?php } else { ?>
				<script>
					document.location.href='my_orders.php';
				</script>
			<?
			}
		}
		else {
			echo "<div style='color:red;'>Неверно набрал логин/пароль</div>";
		}
	}
?>
					
				<h2>Авторизация</h2>
				<div class="content">
				
					<form action="login.php" method="POST">
					
						<div class="form-group">
						<label for="examplelogin">Логин</label>
						<input type="text" class="form-control" id="examplelogin" placeholder="Логин" name="login">
						</div>
						<div class="form-group">
						<label for="examplepassword">Пароль</label>
						<input type="password" class="form-control" id="examplepassword" placeholder="Пароль" name="password">
						</div>
					
						<button type="submit" class="btn btn-default">Войти</button>
						
					</form>
				
				</div>			
			
<? require_once ("templates/bottom.php"); ?>