$(document).ready(function() {
    $('#photoimg').live('change', function() {
        $("#preview").html('');
        $("#preview").html('<img src="/images/loader.gif" alt="Uploading...."/>');
        $("#imageform").ajaxForm({
            target: '#preview'
        }).submit();
    });
});
