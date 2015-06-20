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

	  $('#tschedtable').dataTable();
	  $('#tmaster').dataTable();
	  $('#studschedtable').dataTable();
	  $('#deptlisttable').dataTable();
	  $('#roomlisttable').dataTable();
	  $('#studlisttable').dataTable();
	  $('#subjectlisttable').dataTable();
	  $('#teachertlisttable').dataTable();



	
});