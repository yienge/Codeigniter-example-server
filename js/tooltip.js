// Initialize.
function init_tooltip() {

    // Does element exist? 若沒有使用tooltip則離開，js效能會比較好
    if (!$('.tooltip').length) {
        // If not, exit.
        return;
    }   

    // Insert tooltip (hidden)，顯示tooltip時用來存放title，沒顯示時會將title放回原本的容器裡面
    $('body').append('<div id="tooltip_outer"><div id="tooltip_inner"></div></div>');

    // Empty variables.
    var $tt_title, $tt_alt;

    var $tt = $('#tooltip_outer');
    var $tt_i = $('#tooltip_inner');

    // Watch for hover. hover有兩個參數皆可為函數，之後用chaining接watchMovement去監控tooltip位置，如果超過視窗就處理 
    $('.tooltip').hover(function() {

        // Store title, empty it.
        if ($(this).attr('title')) {
            $tt_title = $(this).attr('title');
            $(this).attr('title', '');
        }   
        // Store alt, empty it.
        if ($(this).attr('alt')) {
            $tt_alt = $(this).attr('alt');
            $(this).attr('alt', '');
        }   
        // Insert text.
        $tt_i.html($tt_title);
        // Show tooltip.
        $tt.show();
    },
    function() {

        // Hide tooltip.
        $tt.hide();
        // Empty text.
        $tt_i.html('');
        // Fix title.
        if ($tt_title) {
            $(this).attr('title', $tt_title);
        }
        // Fix alt.
        if ($tt_alt) {
            $(this).attr('alt', $tt_alt);
        }

    // Watch for movement.
    }).mousemove(function(ev) {

        // Event coordinates.
        var $ev_x = ev.pageX;
        var $ev_y = ev.pageY;
        // Tooltip coordinates.
        var $tt_x = $tt.outerWidth();
        var $tt_y = $tt.outerHeight();
        // Body coordinates.
        var $bd_x = $('body').outerWidth();
        var $bd_y = $('body').outerHeight();
        // Move tooltip.
        $tt.css({
            'top': $ev_y + $tt_y > $bd_y ? $ev_y - $tt_y : $ev_y,
            'left': $ev_x + $tt_x + 20 > $bd_x ? $ev_x - $tt_x - 10 : $ev_x + 15
        });
    });
}

// Kick things off.
$(document).ready(function() {
    init_tooltip();
});
