<!DOCTYPE html>
<head>
<title>Area Map | Camp Indian Lake</title>
<script>

function hideDiv(){
document.getElementById('footer').style.display = "none";
}

</script>
</head>
<body onunload="GUnload()"  onload="hideDiv()">
	

<?php  include "../php/header.php"; ?>
     
<main>
<div class="grid_12">  
  		<div id="mapGoogle"></div> 
</div>  

</main>  
 
	<div id="footer"><?php  include "../php/footer.php"; ?></div>
	
</div>
    <script>
      function initMap() {
        var uluru = {lat: 45.365937, lng: -118.550835};
        var map = new google.maps.Map(document.getElementById('mapGoogle'), {
          zoom:11,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiW0Li8vUNLYWovuKZs0tIfdg5mXxrXr0&callback=initMap">
    </script>
</body>
</html>