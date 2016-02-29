$(document).ready(function(){	

	$(function () {
		var text2=$('.logotext p').text();
		$('.topmenu a').bind ({
				'mouseover':function () {
					url2=$(this).attr('data-url');
					title=$(this).attr('data-title');
					$('.header').css ('background', 'url('+url2+')');
					$('.logotext p').append (' '+title);
				},
				'mouseout':function () {
					$('.header').css ('background', 'url("media/img/fon.jpg"') ;
					$('.logotext p').text (text2);
				}
			});
	});

	$(function () {
		$('.pogoda_menu button').bind ({
			'click':function () {
				title2=$(this).attr('data-title');
				$('.pogoda').css ('display', 'none');
				$('#'+title2).css ('display', 'block');
				$('.pogoda_menu button').removeClass('btn-primary');
				$(this).addClass('btn-primary');
			},
			'mouseout':function () {

			}

		});	
	});
	
});