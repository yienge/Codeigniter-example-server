function processData(data) {
    $('#msg').html(data.msg);
    $('#msg').fadeIn();
    setTimeout(function(){
        $('#msg').fadeOut();
        //$('#btn').attr('disabled', false);
    }, 3000);
}

function AjaxShowMsg(e) {
    //$(e.target).attr('disabled', true);
    $.ajax({
        // url must be changed into the web service, since .htaccess block this url.
        url: '/application/views/general/ajax_test.php',
        dataType: 'jsonp',
        jsonp: 'processData',
        data: {gender: $('#gender').val(), name: $('#name').val(), callback: 'processData'},
        /*
           error: function(xhr) {
           alert('Ajax request 發生錯誤');
           $(e.target).attr('disabled', false);
           }
           */
    });
}

function showSuccessToast() {
    $().toastmessage('showSuccessToast', "Hello");
}

function showStickySuccessToast() {
    $().toastmessage('showToast', {
        text     : 'Success Dialog which is sticky',
        sticky   : true,
        position : 'top-right',
        type     : 'success',
        closeText: '',
        close    : function () {
            console.log("toast is closed ...");
        }
    });
}

$(document).ready(
    function(e){
        // event registration
        $('#btn').click(AjaxShowMsg);
        // $('#btn').attr('disabled', false);
        // the above line is the same with $('#btn').bind('click', AjaxShowMsg);

        // showing the android-style toast
        $('#sticky_toast').click(showStickySuccessToast);
        $('#nonsticky_toast').click(showSuccessToast);

        // setting ajax loading image
        $('#loading').ajaxStart(function(e){
            $(e.target).show();
        });
        $('#loading').ajaxComplete(function(e){
            $(e.target).hide();
        });

        // used in book_store/register for keyup delay autocomplete ajax function
        var i = 0;
        var timer;
        $('input[name=user_name]').keyup(function(){
            var query = $(this).val();
            if (timer) {
                clearTimeout(timer);
            }
            timer = setTimeout(function(){
                console.log(query);
            }, 500);
        });
    }

);
