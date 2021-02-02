<footer>
	<p>Copyright © 2020 All rights reserved.</p>
	<address><p>Indian Lake is owned and operated by:</br>
	Confederated Tribes of the Umatilla Indian Reservation | Department of Economic and Community Development</br>	
	Indian Lake Campground’s Office</p>
	<p>Office Address: 46411 Timíne Way | Pendleton, OR 97801</br>
	Campground GPS Coordinates: N 45.371255,  W -118.557573</p></address>
    <p>Reservations | p:541-276-3873 | f:541-429-7472</p>

<div id="navSocialMedia">
  <a  id='fb' href="https://www.facebook.com/pages/Indian-Lake-Campground/135704959778996" target="_blank"></a>
  <a  id='in' href="https://www.instagram.com/indianlakecampground" target="_blank"></a>
  <a  id='em' href="mailto:info@campindianlake.com" target="_blank"></a>
</div> 
</footer>


<script src="http://campindianlake.com/js/jsFile.js"></script>

<script>
window.onload = rotate;

var theAd = 0;
var adImages = new Array("img/lake-banner1.jpg","img/lake-banner2.jpg");

function rotate() {
	theAd++;
	if (theAd == adImages.length) {
		theAd = 0;
	}
	document.getElementById("banner").src = adImages[theAd];
	
	setTimeout(rotate, 4 * 1000);
	}

</script>