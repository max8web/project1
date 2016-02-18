<? 
	require_once ("templates/top.php");  
	
	if ($_POST) {
		$error=array();
		$fio=trim($_POST['fio']);
		$email=trim($_POST['email']);
		$login=trim($_POST['login']);
		$password=trim($_POST['password']);
		$password2=trim($_POST['password2']);
		if (!$fio) {
			$error[]='Поле: Фио обязательно для заполнения';
		}
		if (!$email) {
			$error[]='Поле: Email обязательно для заполнения';
		}
		if (!$login) {
			$error[]='Поле: Login обязательно для заполнения';
		}
		if (!$password) {
			$error[]='Поле: Password обязательно для заполения';
		}
		if ($password!==$password2) {
			$error[]="Введен неверный повторный пароль";
		}
		$query2="SELECT * FROM users WHERE login='$login' or email='$email'";
		$cat2=mysql_query($query2);
		if (!$cat2) {
			exit ($query2);
		}
		$res2=mysql_fetch_array($cat2);
		if ($res2['id']!==NULL) {
			$error[]="Пользователь с таким Login/Email уже существует";
		}
		if (count($error)>0) {
			foreach ($error as $one) {
				echo "<div style='color:red;' class='error'>";
				echo $one;
				echo "</div>";
			}			
		}
		else {
			$query="INSERT INTO users (fio, email, login, password, datereg, lastvisit, blockunblock) VALUES ('$fio', '$email', '$login', '$password', now(), now(), 'unblock')";
			$cat=mysql_query($query);
			if (!$cat) {
				exit ($query);
			}
			?>
			<script>
				document.location.href='index.php';
			</script>
			<?php
		}		
	}
?>
					
				<h2>Регистрация</h2>
				<div class="content">				
				
					<form action="register.php" method="POST">
					
						<div class="form-group">
						<label for="examplefio">ФИО</label>
						<input type="text" class="form-control" id="examplefio" placeholder="ФИО" name="fio">
						</div>
						<div class="form-group">
						<label for="exampleemail">E-mail</label>
						<input type="email" class="form-control" id="exampleemail" placeholder="E-mail" name="email">
						</div>
						<div class="form-group">
						<label for="examplelogin">Логин</label>
						<input type="text" class="form-control" id="examplelogin" placeholder="Логин" name="login">
						</div>
						<div class="form-group">
						<label for="examplepassword">Пароль</label>
						<input type="password" class="form-control" id="examplepassword" placeholder="Пароль" name="password">
						</div>
						<div class="form-group">
						<label for="examplepassword2">Повтор пароля</label>
						<input type="password" class="form-control" id="examplepassword2" placeholder="Повтор пароля" name="password2">
						</div>
					
						<button type="submit" class="btn btn-default">Регистрация</button>
						
					</form>
				
				</div>			
			
<? require_once ("templates/bottom.php"); ?>