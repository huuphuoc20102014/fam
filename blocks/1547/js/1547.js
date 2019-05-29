$(document).ready(function() {
	$(function() {
		var selectedClass = "";
		// Chọn bộ chọn button 
		$(".fil-cat").click(function(){ 
			selectedClass = $(this).attr("data-rel");  // chọn class từ data-rel => là thành .all -- .webs 
		    $("#portfolio").fadeTo(100, 0.1); // lấy cái id này cho nó ẩn hiện 1 cách toàn bộ 
		    // remove class : scale-anm
			$("#portfolio div").not("."+selectedClass).fadeOut().removeClass('scale-anm');
		    // đặt thời gian 
		    setTimeout(function() {
		    	$("."+selectedClass).fadeIn().addClass('scale-anm'); // lấy bọ chọn + thời gian hiển thị cái class 
		     	$("#portfolio").fadeTo(300, 1); // thời gian nó hiển thị 
		    }, 300); 	
		});
	});
});