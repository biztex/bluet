var latestMarker = [];
$.fn.modalMap2 = function(){
  // すでに前画面で座標があれば入力
  if ($('.lat2').text() != '' && $('.lng2').text() != '') {
    var latlng = new google.maps.LatLng( $('.lat2').text(), $('.lng2').text() );
/*
  } else if ($('select[name="place_prefecture"]').val() != '' && $('select[name="place_address"]').val() != ''){
    var geocoder = new google.maps.Geocoder();
    var placePrefecture = $('select[name="place_prefecture"]').val(),
        placeAddress = $('input[name="place_address"]').val();
      geocoder.geocode(
        {
          'address': placePrefecture + placeAddress,
          'region': 'jp'
        },
        function(results, status){
          if (status == google.maps.GeocoderStatus.OK){
            var latlng = results[0].geometry.location; 
          }
        }
      );
*/
  } else {
      var latlng = new google.maps.LatLng( 43.06417, 141.34694 );
  }

  // マップ設定
  var opt = {
    zoom: 15,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    scaleControl: true
  };

  var map = new google.maps.Map( document.getElementById( 'map_canvas2' ), opt );
  map.setCenter( latlng );

  var marker = new google.maps.Marker({
    position: latlng,
    map: map
  });

  // マップをクリックしたらマーカーを移動
  map.addListener('click', function(e) {
    getClickLatLng2(e.latLng, map, marker);
  });
  
  // 住所から座標を出してマップ移動 
  $('div[name="map-from-address2"]').click(function() {
     // 住所を座標へ変換
     var geocoder = new google.maps.Geocoder();
     if ($('select[name="meeting_point_prefecture"]').val() != '' && $('select[name="meeting_point_address"]').val() != '') {
       marker.setMap(null);
       if (latestMarker.length > 0) {
           latestMarker[0].setMap(null);
       }
       var placePrefecture = $('select[name="meeting_point_prefecture"]').val(),
           placeAddress = $('input[name="meeting_point_address"]').val();
         geocoder.geocode(
           {
             'address': placePrefecture + placeAddress,
             'region': 'jp'
           },
           function(results, status){
             if (status == google.maps.GeocoderStatus.OK){
               var lat_lng = results[0].geometry.location; 
               $('input[name="tmp_lat2"]').val(lat_lng.lat());
               $('input[name="tmp_lng2"]').val(lat_lng.lng());
               // マーカーを設置
               var marker = new google.maps.Marker({
                 position: lat_lng,
                 map: map
               });
               // 今回のマーカーを配列に保持
               latestMarker[0] = marker;
               // 座標の中心をずらす
               map.panTo(lat_lng);
             }
           }
         );
     } else {
     }
  });
};

function getClickLatLng2(lat_lng, map, marker) {
    marker.setMap(null);
    if (latestMarker.length > 0) {
        latestMarker[0].setMap(null);
    }
    $('input[name="tmp_lat2"]').val(lat_lng.lat());
    $('input[name="tmp_lng2"]').val(lat_lng.lng());

    // マーカーを設置
    var marker = new google.maps.Marker({
      position: lat_lng,
      map: map
    });
    // 今回のマーカーを配列に保持
    latestMarker[0] = marker;

    // 座標の中心をずらす
    map.panTo(lat_lng);
}

$(document).ready(function(){
    $('div[name="map-from-location2"]').click(function() {
        var cfmLat = $('input[name="tmp_lat2"]').val(),
            cfmLng = $('input[name="tmp_lng2"]').val();
        $('.lat2').text(cfmLat);
        $('input[name="meeting_point_latitude"]').val(cfmLat);
        $('.lng2').text(cfmLng);
        $('input[name="meeting_point_longitude"]').val(cfmLng);
        $('#cboxClose').trigger('click');
    });
});
