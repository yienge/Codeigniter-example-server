<!DOCTYPE html>
<head>
  
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Google Map Slider</title>
	
	<link rel='stylesheet' type='text/css' href='/application/views/GoogleMapSlider/style.css' />
  	
  <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
  <script type='text/javascript' src='js/example.js'></script>
  <script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=true'></script>
  
  <script type='text/javascript'>
  
    $(function() {
    
      var chicago = new google.maps.LatLng(41.924832, -87.697456),
          pointToMoveTo, 
          first = true,
          curMarker = new google.maps.Marker({}),
          $el;
      
      var myOptions = {
          zoom: 10,
          center: chicago,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
      
      var map = new google.maps.Map($("#map_canvas")[0], myOptions);
    
      $("#locations li").mouseenter(function() {
      
        $el = $(this);
                
        if (!$el.hasClass("hover")) {
        
          $("#locations li").removeClass("hover");
          $el.addClass("hover");
        
          if (!first) { 
            
            // Clear current marker
            curMarker.setMap(); 
            
            // Set zoom back to Chicago level
            // map.setZoom(10);
          }
          
          // Move (pan) map to new location
          pointToMoveTo = new google.maps.LatLng($el.attr("data-geo-lat"), $el.attr("data-geo-long"));
          map.panTo(pointToMoveTo);
          
          // Add new marker
          curMarker = new google.maps.Marker({
              position: pointToMoveTo,
              map: map,
              icon: "/images/marker.png"
          });
          
          // On click, zoom map
          google.maps.event.addListener(curMarker, 'click', function() {
             map.setZoom(14);
          });
          
          // Fill more info area
          $("#more-info")
            .find("h2")
              .html($el.find("h3").html())
              .end()
            .find("p")
              .html($el.find(".longdesc").html());
          
          // No longer the first time through (re: marker clearing)        
          first = false; 
        }
        
      });
      
      $("#locations li:first").trigger("mouseenter");
      
    });

  </script>

</head>

<body>

	<div id="page-wrap">
	
	   <h1>Google Maps Slider</h1>
	   
	   <ul id="locations">
	   
        <li data-geo-lat="41.9786" data-geo-long="-87.9047">
          <h3>O'Hare Airport</h3>
          <p>Flights n' stuff</p>
          <p class="longdesc"><strong>About:</strong> O'Hare International Airport has been voted the "Best Airport in North America" for 10 years by two separate sources: Readers of the U.S. Edition of Business Traveler Magazine (1998-2003) and Global Traveler Magazine (2004-2007). Travel and Leisure magazine's 2009 "America's Favorite Cities" ranked Chicago's Airport System (O'Hare and Midway) the second-worst for delays, New York City's airport system (JFK, Newark Liberty, and LaGuardia) being the first.</p>
        </li>
        
        <li data-geo-lat="41.927118" data-geo-long="-87.697621">
          <h3>Bueno Terra</h3>
          <p>World-class Italian</p>
          <p class="longdesc"><strong>Random review:</strong> Get the carpaccio</p>
        </li>
        
        <li data-geo-lat="41.921735" data-geo-long="-87.664688">
          <h3>Pequod's Pizza</h3>
          <p>Unique pan-style pizza</p>
          <p class="longdesc"><strong>Random review:</strong> I ate there about a month ago now, and... I've just thought about it over and over again. I think they put something addictive in the food. LOL. The one thing I didn't like was the burnt edges, but... that's the style of pizza, and they nail that style perfectly, so...it's just a difference in ideology on that one. I have to let it slide. Best pizza in Chicago? I don't know. Definitely top 5 though.</p>
        </li>
        
        <li data-geo-lat="41.927568" data-geo-long="-87.705201">
          <h3>The Rocking Horse</h3>
          <p>Nice bar</p>
          <p class="longdesc"><strong>Random review:</strong> The only thing you have to know about the Horse, TOTS. You get a Massive plate of these things. Seriously, it feeds 3, easy.  I get them cajun style, as ranch is just too salty for me.  And that garlic aoli it comes with is flippin' great!</p>
        </li>
        
        <li data-geo-lat="41.927568" data-geo-long="-87.705201">
          <h3>Test Place</h3>
          <p>Test</p>
          <p class="longdesc"><strong>Random review:</strong> Just Test.</p>
        </li>
        
     </ul>

     <div id="map_canvas"></div>
     
     <div id="more-info"><div>
     
        <h2>More Info</h2>
        <p>Hover over location on the left. (JavaScript must be enabled)</p>
     
     </div></div>
			
	</div>
	
</body>

</html>
