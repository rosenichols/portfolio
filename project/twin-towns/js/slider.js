
$(document).ready(function (){
	$('.button a').click(function(){
		var integer = $(this).attr('rel');
		$('#myslide .cover').animate({left:-960*(parseInt(integer)-1)})  /*----- Width of div mystuff (here 960) ------ */
		$('.button a').each(function(){
		$(this).removeClass('active');
			if($(this).hasClass('button'+integer)){
				$(this).addClass('active')}
		});
	});	
});
