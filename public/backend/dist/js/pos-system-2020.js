setTimeout(function() {
    $('.alert-success').remove();
}, 6000);

/* CHI TIẾT ĐƠN HÀNG */
$(function(){
    $(".js_view_orders").click(function(event){
        event.preventDefault();
        let url = $(this).attr("href");
        $(".modal-body").html('');
        $(".get-transactions-id").text("").text($(this).attr("data-id"));
        $("#staticBackdrop").modal('show');
        $.ajax({
        	url: url,
        }).done(function(result){
        	console.log(result);
        	if(result) {
        		$(".modal-body").append(result);
        	}
        });
        console.log(url);
    });
})

