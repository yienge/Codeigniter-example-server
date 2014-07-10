// DOM Ready
$(function() {

    var $el, leftPos, newWidth;
    /*  
        EXAMPLE ONE
    */
    /* Add Magic Line markup via JavaScript, because it ain't gonna work without */
    $("#navigator").append("<li id='magic-line'></li>");
    
    /* Cache it */
    var $magicLine = $("#magic-line");
    
    $magicLine
        .width($(".selected").width())
        .css("left", $(".selected a").position().left)
        .data("origLeft", $magicLine.position().left)
        .data("origWidth", $magicLine.width());
     
    $("#navigator li").find("a").hover(function() {
        $el = $(this);
        leftPos = $el.position().left;
        newWidth = $el.parent().width();
     
        $magicLine.stop().animate({
            left: leftPos,
            width: newWidth
        }); 
    }, function() {
        $magicLine.stop().animate({
            left: $magicLine.data("origLeft"),
            width: $magicLine.data("origWidth")
        });    
    });

    /* Kick IE into gear */
    $(".selected a").mouseenter();

});
