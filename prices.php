<?
	require_once ('libs/middleware_auth.php');
	require_once ('templates/top.php');	
	
	// загрузка файла
	set_time_limit(0);
	if ($_FILES) {
		$tmp_name=$_FILES['price']['tmp_name'];
		$name=$_FILES['price']['name'];
		$dir=$_SERVER['DOCUMENT_ROOT'].'/media/prices/';
		if (is_uploaded_file($tmp_name)) {
			move_uploaded_file($tmp_name,$dir.$name);
			$handle=fopen($dir.$name, 'r');
			while ($data=fgetcsv($handle, 1000, ";")) {
				$query="SELECT * FROM catalogs WHERE name='$data[0]'";
				$res=mysql_query($query);
				if (!$res) {
					exit ($query);
				}
				$result=mysql_fetch_array($res);
				if (!$result['id']) {
					echo "<p style='color:red;'>Не существует: ".$data[0]."</p>";
				}
				else {
					$cat_id=$result['id'];
					$query="SELECT * FROM prices WHERE name='".$data[2]."'";
					$res=mysql_query($query);
					if (!$res) {
						exit ($query);
					}
					$result=mysql_fetch_array($res);
					if ($result['id']) {
						echo "<p style='color:black;'>Товар: ".$data[2]." - обновлен</p>";
						
					}
					else {						
						$query="INSERT INTO prices (
													name,					
													price
													) 
											VALUES (
													'".$data[2]."',
													'$data[3]'
													)";
						$res=mysql_query($query);							
						if (!$res) {
							exit ($query);
						}
						echo "<p style='color:green;'>Товар: ".$data[1]." - добавлен</p>";
					}
				}
			}
		}
		else {
			echo "Ошибка загрузки файла";
		}
	}
?>
	<h2>Добавление прайс-листа</h2>
	
	<div class="content">

		<form enctype="multipart/form-data" method="POST" action="prices.php">
			
			<div class="form-group">
			<label for="exampleprice">Выберите файл:</label>
			<input type="file" id="exampleprice" name="price">
			</div>
		
			<button type="submit" class="btn btn-default">Загрузить прайс</button>
		
		</form>
	
	</div>
	
<? require_once ('templates/bottom.php'); ?>