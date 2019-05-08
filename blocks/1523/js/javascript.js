$(function() {
	
	
	 	
	$("#endfalse-list").hover(function(){
            if (window.matchMedia("(min-width: 1000px)").matches) {
                    
                $("#endfalse-list").height('30px');
	    	$("#endfalse-list .menu-left ul").height('20px');
	    	$(this).stop(true, false).animate({ width: '600px'});
            }
            else if (window.matchMedia("(min-width: 768px)").matches) {
                    
                $("#endfalse-list").height('30px');
	    	$("#endfalse-list .menu-left ul").height('20px');
	    	$(this).stop(true, false).animate({ width: '510px'});
            }
	    else if (window.matchMedia("(min-width: 500px)").matches) {
	    	$("#endfalse-list").height('50px');
	    	$("#endfalse-list .menu-left ul").height('40px');
	    	$(this).stop(true, false).animate({ width: '308px'});
	    }
            else if (window.matchMedia("(min-width: 300px)").matches) {
	    	$("#endfalse-list").height('70px');
	    	$("#endfalse-list .menu-left ul").height('60px');
	    	$(this).stop(true, false).animate({ width: '210px'});
	    }}, function() {
	    $(this).stop(true, false).animate({ width: '130px'});
	    $("#endfalse-list").height('30px');
	    $("#endfalse-list .menu-left ul").height('20px');
	});	

});