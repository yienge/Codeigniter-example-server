// first we need to get the last piece of the url.
// alert(window.location.pathname);
// var x = document.getElementById('index');
// x.setAttribute('class','selected');
$(document).ready(function(e){
    $('li').filter(function(){
        var pageName = $('#pageName').text();
        return pageName == $(this).attr('id');
    }).addClass('selected');
});
