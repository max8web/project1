$(document).ready(function(){	

	$(function () {
		var fx={
		'initModal':function() {
			if ($('.modal-window').length==0) {
				$('<div>').attr('id','jquery-overlay').fadeIn('slow').appendTo('body');
				return $('<div>').addClass('modal-window').appendTo('body');
			}
			else {
				return $('.modal-window');
			}		
		}};
		$('.works a').bind ({
				'click':function (e) {
					e.preventDefault();
					data=$(this).attr('data-id');
					modal=fx.initModal();
					$('<a>').attr('href','#').addClass('modal-close-btn').html('&times').click(function(event) {
						event.preventDefault();
						modal.remove();
						$('#jquery-overlay').remove();
					}).appendTo(modal);
					
					$.ajax ({
						'type':'POST',
						'url':'ajax.php',
						'data':'id='+data,
						'success':function(data){
							modal.append(data);
						},
						'error':function(msg){
							modal.append(msg);
						}
					});
				}
			});
	});
	
});