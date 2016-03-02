<? 
	require_once ("templates/top.php"); 
	
	if (!$_POST) {
		$name=(isset($_GET['search']))?trim($_GET['search']):'';
		$query="SELECT * FROM products WHERE name like '%".$name."%' LIMIT 50";
		$res=mysql_query($query);
		if (!$res) {
			exit($query);
		}
	}
	elseif ($_POST) {
		$name=(isset($_POST['name']))?trim($_POST['name']):'';
		$price1=(isset($_POST['price1'])!='')?trim($_POST['price1']):'';
		$price2=(isset($_POST['price2'])!='')?trim($_POST['price2']):'';
		$category=(isset($_POST['category'])!='')?trim($_POST['category']):'';
		if ($price1!='') { $pr1=' AND (price>='.$price1.')'; }
		if ($price2!='') { $pr2=' AND (price<='.$price2.')'; }
		if ($category!='') { 
			$query2="SELECT * FROM catalogs WHERE name='$category'";
			$res2=mysql_query($query2);
			if (!$res2) { 
				exit ($query2); 
			}
			$result2=mysql_fetch_array($res2);
			$category_id=$result2['id'];
			if ($result2['id']) {
				$cat=' AND (cat_id='.$category_id.')'; 
			}
			else {
				$cat=' AND (cat_id=0)';
			}
		}
		$query="SELECT * FROM products WHERE (name like '%".$name."%') ".$pr1.$pr2.$cat." LIMIT 50";
		$res=mysql_query($query);
		if (!$res) {
			exit($query);
		}
	}
?>
	
	<h2>Поиск по товарам</h2>
	
	<div class="content">
	
		
<?
	$count=mysql_num_rows($res);
	if ($count>0) {
?>
		<div class="filter">
		
			<form class="form-inline" action="search.php" method="POST">
			  <div class="form-group">
				<label for="examplename">Название:</label>
				<input name="name" type="text" class="form-control" id="examplename" value="<?=$name;?>">
			  </div>
			  <div class="form-group">
				<label for="exampleprice1">Цена от:</label>
				<input name="price1" type="text" class="form-control" id="exampleprice1" value="<?=$price1;?>">
			  </div>
			   <div class="form-group">
				<label for="exampleprice2">Цена до:</label>
				<input name="price2" type="text" class="form-control" id="exampleprice2" value="<?=$price2;?>">
			  </div>
			  <div class="form-group">
				<label for="examplecategory">Категория:</label>
				<input name="category" type="text" class="form-control" id="examplecategory" value="<?=$category;?>">
			  </div>
			  <button type="submit" class="btn btn-default">Расширенный поиск</button>
			</form>
			
		</div>
<?
		require ('templates/works_all.php');
	}
	else {
		echo "Ничего не найдено!";
	}
?>
		
		<br style="clear:both;">
	</div>
	
<? require_once ("templates/bottom.php"); ?>