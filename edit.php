<?
	require_once ('templates/top.php');	
	$id=(isset($_GET['id']))?$_GET['id']:0;
	$query="SELECT * FROM products WHERE id='$id'";
	$cat=mysql_query($query);
	if (!$cat) {
		exit ($query);
		}
	$result=mysql_fetch_array($cat);		
	if (($id==!0)AND(!$_POST)) {
		$name=$result['name'];
		$picture=$result['picture'];
		$price=$result['price'];
		}
	if ($_POST){
		$name=$_POST['name'];
		$price=$_POST['price'];
		$picture=$result['picture'];
		if ($_FILES['picture']['size']==!0) {
				$tmp=$_FILES['picture']['tmp_name'];
				$dir=$_SERVER['DOCUMENT_ROOT'].'/media/uploads/';
				$picture='image'.time().'.jpg';
				if (!move_uploaded_file($tmp,$dir.$picture)) {
					echo "Ошибка загрузки файла";
				}
			}
		$query2="UPDATE products SET name='$name', price='$price', picture='$picture' WHERE id='$id'";
		$cat2=mysql_query($query2);
		if (!$cat2) {
			exit ($query2);
		}
		?>
		<script>
			document.location.href='cabinet.php';
		</script>
		<?
	}
?>
	
<h2>Редактирование товара</h2>	

	<div class="content">

		<form enctype="multipart/form-data" method="POST" action="edit.php?id=<?=$id?>">
		
			<div class="form-group">
			<label for="examplename">Название</label>
			<input type="text" class="form-control" id="examplename" name="name" value="<?=$name;?>">
			</div>
			
			<div class="form-group">
			<label for="examplepicture">Изображение</label>
			<p><img width="200px" src="/media/uploads/<?=$picture;?>" /></p>
			<input type="file" id="examplepicture" name="picture">
			</div>
			
			<div class="form-group">
			<label for="exampleprice">Цена</label>
			<input type="text" class="form-control" id="exampleprice" name="price" value="<?=$price;?>">
			</div>
		
			<button type="submit" class="btn btn-default">Сохранить</button>
		
		</form>
	
	</div>
		
<? require_once ('templates/bottom.php'); ?>	