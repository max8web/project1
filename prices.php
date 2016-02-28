<?
	require_once ('libs/middleware_auth.php');
	require_once ('libs/middleware_admin_auth.php');
	require_once ('templates/top.php');	
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
		
<? 
	// загрузка файла
	set_time_limit(0);
	if ($_FILES) {
		$tmp_name=$_FILES['price']['tmp_name'];
		$name=$_FILES['price']['name'];
		$dir=$_SERVER['DOCUMENT_ROOT'].'/media/prices/';
		if (is_uploaded_file($tmp_name)) {
			echo "<p><strong>Статус загрузки:</strong></p>";
			move_uploaded_file($tmp_name,$dir.$name);
			$handle=fopen($dir.$name, 'r');
			$handle2=fopen($dir.$name, 'r');
			while ($data=fgetcsv($handle, 1000, ";")) {
				$session_id=$_SESSION['id'];
				$query="SELECT * FROM catalogs WHERE name='$data[0]'";
				$res=mysql_query($query);
				if (!$res) {
					exit ($query);
				}
				$result=mysql_fetch_array($res);
				if (!$result['id']) {
					echo "<p style='color:red;'>Категория: ".$data[0]." - не существует</p>";
				}
				else {
					$cat_id=$result['id'];
					
					$query="SELECT * FROM prices WHERE name='".$data[3]."'";
					$res=mysql_query($query);
					if (!$res) {
						exit ($query);
					}
					$result=mysql_fetch_array($res);
					
					$query2="SELECT * FROM products WHERE name='".$data[3]."'";
					$res2=mysql_query($query2);
					if (!res2) { 
						exit ($query2); 
					}
					$result2=mysql_fetch_array($res2);
					$product_id=($result2['id'])?$result2['id']:0;						
					if ($result['id']) {
						$query="UPDATE prices SET
													cat_id='$cat_id',
													product_id='$product_id',
													price='$data[4]',
													dostavka='$data[6]',
													body='$data[9]',
													availability='$data[15]',
													status='update',
													user_id='$session_id',
													updated_at=now()
								WHERE name='".$result['name']."'
						";
						$res=mysql_query($query);							
						if (!$res) {
							exit ($query);
						}
						echo "<p style='color:#336699;'>Товар: ".$data[3]." - обновлен</p>";						
					}
					else {						
						$query="INSERT INTO prices (
													cat_id,
													product_id,
													product_code,
													name,														
													price,
													currency,
													dostavka,
													brand,
													address_facture,
													body,
													warranty,
													dostavka_day_minsk,
													price_dostavka_minsk,
													dostavka_day_belarus,
													price_dostavka_belarus,
													availability,
													address_service_centre,
													address_import,
													status,
													user_id,
													created_at,
													updated_at
													) 
											VALUES (
													'$cat_id',
													'$product_id',
													'$data[2]',
													'$data[3]',
													'$data[4]',
													'$data[5]',
													'$data[6]',
													'$data[7]',
													'$data[8]',
													'$data[9]',
													'$data[10]',
													'$data[11]',
													'$data[12]',
													'$data[13]',
													'$data[14]',
													'$data[15]',
													'$data[16]',
													'$data[17]',
													'new',
													'$session_id',
													now(),
													now()
													)";
						$res=mysql_query($query);							
						if (!$res) {
							exit ($query);
						}
						echo "<p style='color:green;'>Товар: ".$data[3]." - добавлен</p>";
					}				
				}
			}
		}
		else {
			echo "Ошибка загрузки файла";
		}
	}
?>

	</div>	
	
<? require_once ('templates/bottom.php'); ?>