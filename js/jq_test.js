function showMsg(e) {
	// e在這裡指得是事件 e.target則是那顆按鈕
    $(e.target).attr('disabled', true);

    if ($('#msg').html().length == 0) {
        $('#msg').html('<h1>Hello</h1>');
    }

    $('#msg').fadeIn();

    setTimeout(
		function(){ 
			$('#msg').fadeOut();
			$(e.target).attr('disabled', false);
		}, 
		2000
	);

}

// $('body').load(
//
// );
$(document).ready(
	function(e){
	// event registration
	$('#btn').click(showMsg);
	//  the above line is the same with $('#btn').bind('click', showMsg);
	}
);
