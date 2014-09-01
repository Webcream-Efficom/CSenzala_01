 /* UTILISÉ POUR LA PAGE LA CAPOEIRA ET GRUPO SENZALA DU SITE (CAPOEIRASENZALA78.FR)*/
$(document).ready(function(){
	
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

})