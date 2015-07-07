(function( $ ) {
 
    $.fn.deleteRow = function() {
        var answer = confirm("Are you sure, you want to delete");
		if(!answer)
		{
			return false;
		}
		
		var elem = this;
		var id = this.data('id');
		var url = this.data('link');
		
		$.ajax({
			method: "POST",
			url: url,
			data: { id : id },
			dataType: "json",
			complete: function(){
				elem.parents("tr").hide("slow");
			}
		});
    };
	
	$.fn.showBigImage = function() {
		var elem = this;
		var src = this.attr('src');
		$(".img-main").attr('src',src);
	};
 
}( jQuery ));

$(document).ready(function(){
	$("body").on('click','.del_msg',function(){
		$(this).deleteRow();
	});
	
	$("body").on('click','.img-thumb',function(){
		$(this).showBigImage();
	});

});