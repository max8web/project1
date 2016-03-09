<?php
	if ($_GET['url']) {
		$file=$_GET['url'];
	}
	else {
		$file='page.php';
	}
	include ("templates/".$file);
?>