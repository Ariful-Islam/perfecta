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
	
	$.fn.submitForm = function() {
		var form = this.parents('form');
		form.submit();
	};
 
}( jQuery ));

$(document).ready(function(){
	$("body").on('click','.del_msg',function(){
		$(this).deleteRow();
	});
	
	$("body").on('click','.img-thumb',function(){
		$(this).showBigImage();
	});
	
	$("body").on('change','.category_search',function(){
		$(this).submitForm();
	});
	
	$("body").on('click','#mail_to_admin',function(){
		var useremail = $('#recipient-name').val();
		var ppname = $('#product_id').val();
		
		$.ajax({
			url: BASE_URL+'order/order_online',
			method: 'POST',
			data: { useremail: useremail, ppname: ppname},
			dataType: 'JSON',
			success: function(data) {
				$('.for_h, .modal-footer').fadeOut('fast', function () {
					$('.successs').removeClass('hide');
				});
			}
		});
		
		return false;
	});
});