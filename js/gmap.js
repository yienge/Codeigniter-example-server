function initialize() {
    // 給定起始地點，設定地圖。
    var latlng = new google.maps.LatLng(24.8633104, 121.2161992);
    var myOptions = {
      zoom: 15,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

  // Try W3C Geolocation (Preferred)
  if(navigator.geolocation) {
    browserSupportFlag = true;
    navigator.geolocation.getCurrentPosition(function(position) {
      initialLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
      map.setCenter(initialLocation);

      // set InfoWindow
      var contentString = '<div><p>Hello!<p><a href="http://www.yahoo.com.tw">Yahoo!</a></div>';
      var infowindow = new google.maps.InfoWindow({
        content: contentString,
        maxWidth: "100"
      });

      // the following comment code has js error, plz fix it.
      /*
      var lat = [];
      jQuery('p#lat').each( function(i) {
          lat[i] = jQuery(this).text();
      });

      var lng = [];
      jQuery('p#lng').each( function(i) {
          lng[i] = jQuery(this).text();
      });

      var name = [];
      jQuery('p#name').each( function(i) {
          name[i] = jQuery(this).text();
      });

      // set marker on map
      var loc = [];
      for ( var i=0;i<lat.length;i++) {
        loc[i] = new google.maps.LatLng(lat[i], lng[i]);
        var marker = new google.maps.Marker({
            position: loc[i],
            title: name[i],
            map: map
        });
      }
      */

      // add overlay
      var marker = new google.maps.Marker({
          //icon: 'http://2.bp.blogspot.com/-DofnnyZPGb4/T1EcqQfrErI/AAAAAAAAJNQ/AXVT3uO3v1U/s320/angry_birds_icon_for_mac_by_feniheti-d36lpfo.png',
          position: initialLocation,
          title: '這是marker註解，請填入店家名稱之類的',
          //animation: google.maps.Animation.BOUNCE,
          animation: google.maps.Animation.DROP,
          map: map
      });
      /*
      */

      //alert(position.coords.latitude+' '+position.coords.longitude);

      google.maps.event.addListener(marker, 'click', function() {
          infowindow.open(map,marker);
      });

    }, function() {
      handleNoGeolocation(browserSupportFlag);
    });
  // Try Google Gears Geolocation
  } else if (google.gears) {
    browserSupportFlag = true;
    var geo = google.gears.factory.create('beta.geolocation');
    geo.getCurrentPosition(function(position) {
      initialLocation = new google.maps.LatLng(position.latitude,position.longitude);
      map.setCenter(initialLocation);
      // set marker on map
      var marker = new google.maps.Marker({
        position: initialLocation,
        title:"Hello World!"
      });
      marker.setMap(map);

    }, function() {
      handleNoGeoLocation(browserSupportFlag);
    });
  // Browser doesn't support Geolocation
  } else {
    browserSupportFlag = false;
    handleNoGeolocation(browserSupportFlag);
  }

  function handleNoGeolocation(errorFlag) {
    if (errorFlag == true) {
      alert("Geolocation service failed.");
      initialLocation = newyork;
    } else {
      alert("Your browser doesn't support geolocation. We've placed you in Siberia.");
      initialLocation = siberia;
    }
    map.setCenter(initialLocation);
  }


  function detectBrowser() {
    var useragent = navigator.userAgent;
    var mapdiv = document.getElementById("map_canvas");

    if (useragent.indexOf('iPhone') != -1 || useragent.indexOf('Android') != -1 ) {
      mapdiv.style.width = '100%';
      mapdiv.style.height = '100%';
    } else {
      mapdiv.style.width = '600px';
      mapdiv.style.height = '800px';
    }
  }

}
