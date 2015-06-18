$( function() {


  	var header = $('[data-role=header]').outerHeight();
	var panel = $('body').height();
	var panelheight = panel - header;
	$('.ui-panel').css({
	    'top': header,
	    'min-height': panelheight
	});
	console.log("header: " + header);
	console.log("panel: " + panel);
	console.log("panelheight: " + panelheight);


	$('#container').children().hide();

	  $('#tschedtable').dataTable();

	$('.menu_cl').click(function(){
			var value = $(this).text();
			
			$('.contents').empty();
			$('.contents').load(value+".php",function(){
			$('.contents').fadeOut(0);
				$('.contents').fadeIn('1000');
				$('.contents').trigger('create');
				
			$('.function').bind('click',function(){
							id = $(this).attr('id');
			$('#container').children().hide();
				$("#container div[class='"+id+"']").fadeIn();

			});
			});


	});

	
});