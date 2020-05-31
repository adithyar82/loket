<input id="lat" type="text" value=""> 
 <input id="long" type="text" value=""> 
 <button onclick="getLocation();">GO</button>
 <script>
    function getLocation()
      {
       navigator.geolocation.getCurrentPosition(function(position)
        {
         var coordinates = position.coords;
         document.getElementById('lat').value = coordinates.latitude;
         document.getElementById('long').value = coordinates.longitude;
       });
     }
 </script>