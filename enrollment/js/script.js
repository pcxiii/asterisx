$(function() {
	  $('#teachertlisttable').dataTable();
	  $('#tschedtable').dataTable();
	  $('#tmaster').dataTable();
	  $('#studschedtable').dataTable();
	  $('#deptlisttable').dataTable();
	  $('#roomlisttable').dataTable();
	  $('#studlisttable').dataTable();
	  $('#subjectlisttable').dataTable();

	   $('#teachertlisttable').dataTable();

 $('a').removeClass('ui-btn-active');

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

	$('#pop_login').popup("open") .on("popupafteropen", function () {
            $(this).popup("reposition", {
                "positionTo": "window"
            });
        });
            
        
      $('.popup_close').click(function(){
      		$('#popup_login').popup('close');
      });

	
	$('#add_rom').click({
			
	});
});