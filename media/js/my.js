$(function () {
	var text=$('.logotext p').text();
	$('.topmenu a').bind ({
			'mouseover':function () {
				url2=$(this).attr('data-url');
				title=$(this).attr('data-title');
				$('.header').css ('background', 'url('+url2+')');
				$('.logotext p').append (' '+title);
			},
			'mouseout':function () {
				$('.header').css ('background', 'url("media/img/fon.jpg"') ;
				$('.logotext p').text (text);
			}
		});
});