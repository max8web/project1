			</div>
			
			<div class="col-md-3">	
				<? if (($_SESSION['id'])AND($_SESSION['admin'])==1) { ?>
				<a href="cabinet.php" class="btn btn-default btn-block">Кабинет администратора</a>
				<a href="my_orders_admin.php" class="btn btn-default btn-block">Все заказы</a>
				<a href="prices.php" class="btn btn-default btn-block">Добавить прайс</a>
				<a href="category.php" class="btn btn-default btn-block">Управление категориями</a>
				<? } ?>
				<? if (($_SESSION['id'])AND($_SESSION['admin'])==0) { ?>
				<a href="my_orders.php" class="btn btn-default btn-block">Мои заказы</a>
				<? } ?>
				<a href="index.php?url=development" class="btn btn-primary btn-block">Разработка сайтов</a>
				<a href="index.php?url=promotion" class="btn btn-primary btn-block">Продвижение</a>
				<a href="index.php?url=rework" class="btn btn-primary btn-block">Доработка</a>
				<a href="index.php?url=testing" class="btn btn-primary btn-block">Тестирование</a>
				<a href="index.php?url=support" class="btn btn-primary btn-block">Поддержка</a>	
				
				<br style="clear:both;">
				
				<div class="pogoda_menu">
				  <button type="button" class="btn btn-default btn-primary" data-title="minsk">Погода в Минске</button>
				  <button type="button" class="btn btn-default" data-title="moskva">Погода в Москве</button>
				</div>
				
				<div class="pogoda" id="minsk">
					<table class="my_table0" width="100%" height="180">
					<tr><td class="my_table1_td1"><a href="http://6.pogoda.by/26850" target="_blank">Погода в Минске</a></td></tr>
					<tr><td>
					<table class="my_table1" width="100%" height="100%"><tr><td>
					<script type="text/javascript" charset="windows-1251" src="http://pogoda.by/meteoinformer/js/26850_1.js"></script>
					</td></tr>
					</table>
					</td></tr>
					</table>
					<br />
				</div>
				
				<div class="pogoda" id="moskva">
					<table class="my_table0" width="100%" height="180">
					<tr><td class="my_table1_td1"><a href="http://6.pogoda.by/27612" target="_blank">Погода в Москве</a></td></tr>
					<tr><td>
					<table class="my_table1" width="100%" height="100%"><tr><td>
					<script type="text/javascript" charset="windows-1251" src="http://pogoda.by/meteoinformer/js/27612_1.js"></script>
					</td></tr>
					</table>
					</td></tr>
					</table>
					<br />
				</div>
				
			</div>	
		</div>
	</div>
		<!--<br style="clear:both;">-->
		<div class="footer">
		Copyright &copy; max-web - 2016
		</div>
	</body>
</html>