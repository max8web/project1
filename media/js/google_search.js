$(function(){

	$.ajaxSetup ({
		url:'libs/google_ajax.php',
		type:'POST',
		success:function(data) {
			$('.empty').html(data);
		},
		error:function(msg) {
			$('.empty').html(msg);
		},
		beforeSend:function() {
			$('.empty').html("<img src='/media/img/loader.gif' />")
		}
	});
	
	$('.google_search').click(function() {
		$.ajax();
	});

});