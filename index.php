<? 
	require_once ("templates/top.php"); 
	
	$file=(isset($_GET['url']))?$_GET['url']:'index';	
	$query="SELECT * FROM maintexts WHERE url='$file'";
	$adr=mysql_query($query);
	if (!$adr) {
		exit ('no query');
	}
	$tbl=mysql_fetch_array($adr);
	$title_name=$tbl['name'];
	if ($file=='index') require_once ("templates/carousel.php");
?>
					
				<h2><?php echo $tbl['name']; ?></h2>
				<div class="content">
				<?php echo $tbl['body']; ?>
				</div>			
			
<? require_once ("templates/bottom.php"); ?>