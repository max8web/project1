<?
	require_once ('libs/middleware_auth.php');
	require_once ('templates/top.php');	
	
	// добавление новых товаров
	if($_POST) {
		$error=array();
		$name=trim($_POST['name']);
		$body=trim($_POST['body']);
		$picture='';
		$price=trim($_POST['price']);
		$cat_id=trim($_POST['cat_id']);
		$vip=trim($_POST['vip']);
		$product_code=trim($_POST['product_code']);
		if (!$name) {
			$error[]="Введите название товара";
		}
		if (!$body) {
			$error[]="Введите описание";
		}
		if (count($error)>0) {
			foreach ($error as $one) {
				echo "<div style='color:red;' class='error'>";
				echo $one;
				echo "</div>";
			}
		}
		else {
			if ($_FILES['picture']['size']==!0) {
				$tmp=$_FILES['picture']['tmp_name'];
				$dir=$_SERVER['DOCUMENT_ROOT'].'/media/uploads/';
				$picture='image'.time().'.jpg';
				if (!move_uploaded_file($tmp,$dir.$picture)) {
					echo "Ошибка загрузки файла";
				}
			}
			else {
				$picture='no_image.jpg';
			}
			$query="INSERT INTO products (`name`,`body`,`picture`,`price`,`cat_id`,`vip`,`product_code`,`user_id`,`putdate`) VALUES ('$name','$body','$picture','$price','$cat_id','$vip','$product_code',".$_SESSION['id'].",now())";
			$cat=mysql_query($query);
			if (!$cat) {
				exit ($query);
			}
		}
	}	
	
?>
	<h2>Кабинет администратора</h2>
	
	<div class="content">

		<form enctype="multipart/form-data" method="POST" action="cabinet.php">
		
			<p><strong>Добавление нового товара:</strong></p>
		
			<div class="form-group">
			<label for="examplename">Название</label>
			<input type="text" class="form-control" id="examplename" name="name">
			</div>
			
			<div class="form-group">
			<label for="examplebody">Описание</label>
			<textarea class="ckeditor" id="examplebody" name="body"></textarea>
			</div>
			
			<div class="form-group">
			<label for="examplepicture">Изображение</label>
			<input type="file" id="examplepicture" name="picture">
			</div>
			
			<div class="form-group">
			<label for="exampleprice">Цена</label>
			<input type="text" class="form-control" id="exampleprice" name="price">
			</div>
			
			<div class="form-group">
			<label for="examplecat_id">Категория</label>
			<input type="text" class="form-control" id="examplecat_id" name="cat_id">
			</div>
								
			<div class="form-group">
			<p><label for="examplevip">Vip</label></p>
			<input type="number" id="examplevip" name="vip">
			</div>
			
			<div class="form-group">
			<label for="exampleproduct_code">Код продукта</label>
			<input type="text" class="form-control" id="exampleproduct_code" name="product_code">
			</div>
		
			<button type="submit" class="btn btn-default">Сохранить</button>
		
		</form>
		
		<p><strong>Добавленные товары:</strong></p>
	
<?
	// вывод списка добавленных товаров	
	$session_id=$_SESSION['id'];
	$query="SELECT * FROM products WHERE user_id=$session_id";
	$cat=mysql_query($query);
	if (!$cat) {
		exit ($query);
	}
	echo "<table class='content_table1'><tr><th>Фото</th><th>Название</th><th>Цена</th><th>Дата создания</th><th>Действия</th></tr>";
	while ($rows=mysql_fetch_array($cat)) {
		if ($rows['showhide']=='show') {
			$class='show1';
			$showhide="<a href='admin/cabinet/showhide.php?status=hide&id=".$rows['id']."'>Скрыть</a>";
		}
		else {
			$class='hide1';
			$showhide="<a href='admin/cabinet/showhide.php?status=show&id=".$rows['id']."'>Отобразить</a>";
		}
		echo "<tr class='".$class."'>";
		echo "<td><a target='_blank' href='/media/uploads/".$rows['picture']."'><img src='/media/uploads/".$rows['picture']."'/></a></td>";
		echo "<td>".$rows['name']."</td>";
		echo "<td>".$rows['price']."</td>";
		echo "<td>".$rows['putdate']."</td>";
		echo "<td><a href='admin/cabinet/delete.php?id=".$rows['id']."'>Удалить</a> / <a href='cabinet_edit.php?id=".$rows['id']."'>Редактировать</a><br />".$showhide."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>
	
	</div>
	
<? require_once ('templates/bottom.php'); ?>

<script src="media/ckeditor/ckeditor.js"></script>