<? 
require_once ("templates/top.php"); 
$query="SELECT * FROM maintexts WHERE url='index'";
$adr=mysql_query($query);
if (!$adr) {
	exit ('no query');
}
$tbl=mysql_fetch_array($adr);
?>	

				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
					<div class="item active">
					  <img src="media/img/slide1.jpg" alt="...">
					  <div class="carousel-caption">
						
					  </div>
					</div>
					<div class="item">
					  <img src="media/img/slide2.jpg" alt="...">
					  <div class="carousel-caption">
						
					  </div>
					</div>
					<div class="item">
					  <img src="media/img/slide3.jpg" alt="...">
					  <div class="carousel-caption">
						
					  </div>
					</div>
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>

				<h2><?php echo $tbl['name']; ?></h2>
				<div class="content">
				<?php echo $tbl['body']; ?>
				</div>			
			
<? require_once ("templates/bottom.php") ?>