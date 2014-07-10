(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-42737351-2', 'ec2-54-212-205-188.us-west-2.compute.amazonaws.com');
ga('send', 'pageview');

$('.ga_tracking').click(function() {
        var element = $(this);
            _gaq.push(['_trackEvent', element.attr('data-category'), element.attr('data-action'), element.attr('data-label')]);
});
