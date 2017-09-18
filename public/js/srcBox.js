function initMap(){
  var input = document.getElementById('srcBox');
  var bscBox = new google.maps.places.Autocomplete(input);
  
  google.maps.event.addListener(bscBox, 'place_changed', function(){
    var place = bscBox.getPlace();
    var location =  place.formatted_address;
    var lat =  place.geometry.location.lat();
    var lng =  place.geometry.location.lng();
    document.getElementById('latitud').value = lat;
    document.getElementById('longitud').value = lng;
    console.log(location);
    console.log(lat);
    console.log(lng);
  });
}