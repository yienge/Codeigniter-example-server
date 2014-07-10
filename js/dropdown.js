$(function(){

    $("ul#navigator li").hover(
        function(){
            $(this).addClass("hover");
            $('ul:first',this).css('visibility', 'visible');
        },  
        function(){
            $(this).removeClass("hover");
            $('ul:first',this).css('visibility', 'hidden');
        }   
    );  
    
    // insert >> in the li
    $("ul#navigator li ul li:has(ul)").find("a:first").append(" &raquo; ");

});
