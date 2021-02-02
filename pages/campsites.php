k<!DOCTYPE html>
<head>
<title>Campsites | Camp Indian Lake</title>
<style>
/* Image maps styles */
#mapContainer {position: relative;margin-bottom:200px;}
.imageMap {width:100%; left:0; position:relative;border-radius:20px;}
.imageMap img {display:block; width:100%; }
.imageMap .hotspots {width:100%; height:100%; position:absolute; left:0; top:0; visibility:hidden;}
.imageMap a {display:block; position:absolute; background:#330000; z-index:1; opacity:0.2; filter: alpha(opacity=20); border:1px solid transparent; border-radius:10px;}

.imageMap a + p {position:absolute; left:0; top:102%; width:90%;display:none; background-color:#fff; border: 2px solid #f0efde; border-radius:20px;padding: 10px;}

.imageMap p strong {display:block; padding:0; margin:0; font: bold 15px/18px 'Arial, Helvetica', sans-serif; color:#5c8435;}
.imageMap p {padding:0; margin:0; font: normal 15px/18px;z-index: 10;}

.imageMap:hover .hotspots {visibility:visible;}

.imageMap .hotspots div:hover p {display:block;}
.imageMap .hotspots div:hover a {background:#fff; z-index:5; opacity:0.3; filter: alpha(opacity=30); border:1px solid #330000;}	
	
	
/* Regional Image map styles */
.imageMap a.piTest {left:0%; top:26%;width:9.5%; height:4%;}
	
.imageMap a.p1 {left:26%; top:61%;width:1.5%; height:4%;}
.imageMap a.p2 {left:32.9%; top:62.5%;width:1.5%; height:4%;}
.imageMap a.p3 {left:35.4%; top:62.25%;width:1.5%; height:4%;}
.imageMap a.p4 {left:35.9%; top:55%;width:1.5%; height:4%;}
.imageMap a.p5 {left:30.4%; top:57.9%;width:1.5%; height:4%;}
.imageMap a.p6 {left:40.15%; top:66.5%;width:1.5%; height:4%;}
.imageMap a.p7-8 {left:41%; top:61%;width:1.5%; height:4%;}
.imageMap a.p9 {left:44.5%; top:67.75%;width:1.5%; height:4%;}
.imageMap a.p10 {left:42.75%; top:84.25%;width:1.5%; height:4%;}
.imageMap a.p11 {left:44.5%; top:81.25%;width:1.5%; height:4%;}
.imageMap a.p12 {left:44.35%; top:58.9%;width:1.5%; height:4%;}
.imageMap a.p13-14 {left:47.75%; top:54.25%;width:2.4%; height:5.25%;}
.imageMap a.p15-16 {left:49.25%; top:58.5%;width:2.4%; height:5.25%;}
.imageMap a.p17-18 {left:54.4%; top:51.5%;width:2.4%; height:5.25%;}
.imageMap a.p19-20 {left:52.4%; top:47.5%;width:2.4%; height:5.25%;}
.imageMap a.p21-22 {left:59.1%; top:44.9%;width:2.4%; height:5.25%;}
.imageMap a.p23-24 {left:59.7%; top:36.5%;width:2.4%; height:5.25%;}
.imageMap a.p25 {left:75%; top:39%;width:1.5%; height:4%;}
.imageMap a.pCove {left:63.15%; top:49.5%;width:2.4%; height:5.25%;}
.imageMap a.p26 {left:74.8%; top:27.5%;width:1.5%; height:4%;}
.imageMap a.p27 {left:71.8%; top:24.75%;width:1.5%; height:4%;}
.imageMap a.p28 {left:68.6%; top:24.75%;width:1.5%; height:4%;}
.imageMap a.p29 {left:65.25%; top:23.4%;width:1.5%; height:4%;}
.imageMap a.p30 {left:67.4%; top:20.8%; width:1.5%; height:4%;}
.imageMap a.p31 {left:69.6%; top:19.5%; width:1.5%; height:4%;}
.imageMap a.p32 {left:75%; top:21.75%; width:1.5%; height:4%;}
.imageMap a.p33 {left:76.75%; top:23.4%; width:1.5%; height:4%;}
.imageMap a.p34 {left:78.25%; top:29.9%; width:1.5%; height:4%;}
.imageMap a.p35 {left:84.25%; top:25.6%; width:1.5%; height:4%;}
.imageMap a.p36 {left:85.6%; top:29.9%; width:1.5%; height:4%;}
.imageMap a.p37 {left:86.6%; top:24.75%; width:1.5%; height:4%;}
.imageMap a.p38 {left:88.75%; top:29.1%; width:1.5%; height:4%;}
.imageMap a.p39 {left:90.1%; top:24.5%; width:1.5%; height:4%;}
.imageMap a.p40 {left:88.25%; top:43.5%; width:1.5%; height:4%;}
.imageMap a.p41 {left:91.75%; top:42%; width:1.5%; height:4%;}
.imageMap a.p42 {left:93.25%; top:38%; width:1.5%; height:4%;}
.imageMap a.p43 {left:1.7%; top:40.75%; width:1.5%; height:4%;}
.imageMap a.pArbor {left:95%; top:35.25%; width:2.4%; height:5.25%;}

	
@media only screen and (min-width: 20em) {
.imageMap {margin-bottom:200px;}
.imageMap a + p {left:0; top:102%; width:92%;}
}

@media only screen and (min-width: 30em) {
.imageMap {margin-bottom:200px;}	
.imageMap a + p {left:0; top:102%; width:95%;}		
}

@media only screen and (min-width: 37.5em) {
.imageMap {margin-bottom:200px;}		
.imageMap a + p {left:0; top:102%; width:97%;}
}

@media only screen and (min-width: 48em) {
.imageMap {margin-bottom:200px;}		
.imageMap a + p {left:0%; top:102%; width:97%;}
}

@media only screen and (min-width : 64em) {
.imageMap {margin-bottom:50px;}		
.imageMap a + p {left:15%; top:0%; width:25%;}

@media only screen and (min-width : 120em) {
.imageMap a + p {left:15%; top:0%; width:25%;}
}
</style>
</head>
<body>
<div id="container">
<?php  include "../php/header.php"; ?>
     
<main>
<h1>Campsites</h1>
 <div class="grid_12">   
    <p>We have 43 different campsites to choose from.  All lake side spaces require a 2-day minimum stay on the weekends.  Enjoy your stay!</p>
    <h2>Site Information</h2>
    <p>Hover or tap a site number for detailed informaton. The infomation may appear below the map.</p>  
	 
	 
	<p class="noPrint">Download the map for printing or saving:  <A href="/download/campground.pdf" target="_blank" style="text-decoration:none; font-weight:bold;"><img style="height:14px; margin-top:10px;" src="../image/buttons/pdf.png"/>PDF version</A><br/>
	 
	 
	</div>
</main>  
	
<!-- imap start -->  
<div id="mapContainer">
<map name="Map">
    
<div onclick="">
<div class="imageMap" aria-haspopup="true">
                    
<img src="../img/campsite-map.svg" alt="Area map of the lake with images of each campsite." />

<div class="hotspots">
                                                                                                     
<div title="Space 1"><a href="#" class="p1" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 1</strong>will fit a 40 foot RV and may accommodate 3 tents.<img src="../img/sites/site1.jpg"></p></div>
              
<div title="Space 2"><a href="#" class="p2" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 2</strong>will fit a 40 foot RV and 2 tents. (Width is 21 ft.) Horseshoe pits located across the road.<img src="../img/sites/site2.jpg"></p></div>

<div title="Space 3"><a href="#" class="p3" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 3</strong>will fit a 40 foot RV and 1 tent. (Width is 22 ft.) Horseshoe pits located across the road.<img src="../img/sites/site3.jpg"></p></div> 
                                                                                     
<div title="Space 4"><a href="#" class="p4" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 4</strong>will fit a 40 foot RV and 2 tents. (Width is 20 ft.) Private space.<img src="../img/sites/site4.jpg"></p></div>     
     
<div title="Space 5"><a href="#" class="p5" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 5</strong>will fit a 40 foot RV. (Width is 21 ft.) Slight incline.<img src="../img/sites/site5-vs2.jpg"></p></div>                 
           
 <div title="Space 6"><a href="#" class="p6" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 6</strong>will fit a 43 foot RV. (Width is 24 ft.) Accommodate 4 tents. Beach for swimming.<img src="../img/sites/site6.jpg"></p></div> 
            
<div title="Space 7 & 8"><a href="#" class="p7-8" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 7 & 8</strong> is a DOUBLE SPACE. As a double space, you may be required to share this space with another party. Total length is 48 feet and total width is 21 feet. Space 7 will fit 2 tents and Space 8 will fit 3 tents.<img src="../img/sites/site7.jpg"></p></div> 
            
 <div title="Space 9"><a href="#" class="p9" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 9</strong>will fit a 30 foot RV. (Width is 26 ft.) Accommodate 2 tents.<img src="../img/sites/site9.jpg"></p></div>           
   
<div title="Space 10"><a href="#" class="p10" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 10</strong>will fit 60 foot RV. (Width is 26 ft.) Great for large motor homes. Will fit 2 tents. Has beach.<img src="../img/sites/site10-vs2.jpg"></p></div>            

<div title="Space 11"><a href="#" class="p11" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 11</strong>will fit 60 foot RV. (Width is 35 ft.) Great for large motor homes. Will fit as many as 4 tents. Most popular site in the campground. Call for reservations for this popular space. Beach on both sides of this space on the 'point'.<img src="../img/sites/site11-vs2.jpg"></p></div>
            
<div title="Space 12"><a href="#" class="p12" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 12</strong>will fit 35 foot RV. (Width is 16 ft.) Will fit 2 tents. Extra parking available in this space.<img src="../img/sites/site12.jpg"></p></div>   
            
<div title="Space 13 & 14"><a href="#" class="p13-14" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 13 & 14</strong>is a DOUBLE SPACE. As a double space, you may be required to share this space with another party. Total length is 46 feet and total width is 21 feet. Space 13 will fit 2 tents and Space 14 will fit 1 tent.<img src="../img/sites/site13 and 14.jpg"></p></div>  
            
<div title="Space 15 & 16"><a href="#" class="p15-16" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 15 & 16</strong>As a double space, you may be required to share this space with another party. Total length is 48 feet and total width is 22 feet. Space 15 will fit 3 tents and Space 16 will fit 2 tents.<img src="../img/sites/site15 and 16.jpg"></p></div>
            
<div title="Space 17 & 18"><a href="#" class="p17-18" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 17 & 18</strong> As a double space, you may be required to share this space with another party. Total length is 50 feet and total width is 24 feet. Space 17 will fit 3 tents and Space 18 will fit 4 tents. These are steep angled spaces so it is hard to level longer trailers. We recommend shorter trailers.<img src="../img/sites/site17 and 18.jpg"></p></div>  
            
 <div title="Space 19 & 20"><a href="#" class="p19-20" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 19 & 20</strong> As a double space, you may be required to share this space with another party. Total length is 44 feet and total width is 34 feet. Space 19 will fit 2 tents and Space 20 will fit 1 tent.<img src="../img/sites/site19 and 20.jpg"></p></div>     
                            
<div title="Space 21 & 22"><a href="#" class="p21-22" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 21 & 22</strong>As a double space, you may be required to share this space with another party. Total length is 45 feet and total width is 25 feet. Space 21 will fit 3 tents and Space 22 will fit 3 tents.<img src="../img/sites/site21 and 22.jpg"></p></div> 

<div title="Space 23 & 24"><a href="#" class="p23-24" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 23 & 24</strong>DOUBLE SPACE. As a double space, you may be required to share this space with another party. Total length is 44 feet and total width is 24 feet. Space 23 has 2 tent spaces and Space 24 has 2 tent spaces.<img src="../img/sites/site23 and 24.jpg"></p></div> 

<div title="Space 25"><a href="#" class="p25" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 25</strong>will fit 24 foot RV. (Width is 19 feet.) Will fit 3 tents. Slight incline.<img src="../img/sites/site25.jpg"></p></div>  

                    
<div title="Space Cove"><a href="#" class="pCove" rel="nofollow" aria-haspopup="false"></a><p><strong>Space Cove</strong>Is a campsite on the lake.<img src="../img/sites/cove2.jpg"></p></div>      
                            
<div title="Space 26"><a href="#" class="p26" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 26</strong>will fit 38 foot RV. (Width is 21 ft.) Will fit 3 tents. Play horseshoes among the pines.<img src="../img/sites/site26.jpg"></p></div>     
  
<div title="Space 27"><a href="#" class="p27" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 27</strong>will fit 38 foot RV. (Width is 19 ft.) Will fit 2 tents. Next to horseshoe pits.<img src="../img/sites/site27.jpg"></p></div>  
            
<div title="Space 28"><a href="#" class="p28" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 28</strong>will fit 42 foot RV. (Width is 19 ft.) Will fit 3 tents.<img src="../img/sites/site28.jpg"></p></div>
            
<div title="Space 29"><a href="#" class="p29" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 29</strong>will fit 29 foot RV. (Width is 18 ft.) Will fit 2 tents. It is a secluded and quiet tent site.<img src="../img/sites/site29.jpg"></p></div> 
            
<div title="Space 30"><a href="#" class="p30" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 30</strong> will fit 28 foot RV. (Width is 19 ft.) Will fit 2 tents.<img src="../img/sites/site30.jpg"></p></div>    
                         
<div title="Space 31"><a href="#" class="p31" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 31</strong>will fit 35 foot RV. (Width is 18 ft.) Will fit 3 tents.<img src="../img/sites/site31.jpg"></p></div>
            
<div title="Space 32"><a href="#" class="p32" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 32</strong>will fit 32 foot RV. (Width is 20 ft.) Will fit 4 tents.<img src="../img/sites/site32.jpg"></p></div>
           
<div title="Space 33"><a href="#" class="p33" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 33</strong>will fit 39 foot RV. (Width is 22 ft.) Will fit 2 tents.<img src="../img/sites/site33.jpg"></p></div>    
           
<div title="Space 34"><a href="#" class="p34" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 34</strong>will fit 30 foot RV. (Width is 22 ft.) Will fit 2 tents.<img src="../img/sites/site34.jpg"></p></div>     
  
<div title="Space 35"><a href="#" class="p35" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 35</strong>will fit 44 foot RV. (Width is 25 ft.) Will fit 2 tents.<img src="../img/sites/site35-vs2.jpg"></p></div>  
            
<div title="Space 36"><a href="#" class="p36" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 36</strong>will fit a 33 foot RV. (Width is 22 ft.) Will fit 4 tents.<img src="../img/sites/site36.jpg"></p></div>
            
<div title="Space 37"><a href="#" class="p37" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 37</strong>will fit 45 foot RV. (Width is 22 ft.) Will fit 2 tents. Excellent space for large RV or bus.<img src="../img/sites/site37.jpg"></p></div> 
            
<div title="Space 38"><a href="#" class="p38" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 38</strong>will fit 35 foot RV. (Width is 22 ft.) Will fit 3 tents.<img src="../img/sites/site38.jpg"></p></div>        
                     
<div title="Space 39"><a href="#" class="p39" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 39</strong>will fit 30 foot RV. (Width is 24 ft.) Will fit 4 tents.<img src="../img/sites/site39.jpg"></p></div>

<div title="Space 40"><a href="#" class="p40" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 40</strong>will fit 40 foot RV. (Width is 25 ft.) Will fit 5 tents. Tribal Members only unless there is a special event being held in the Arbor. Please call the Department of Economic and Community Development at 541-276-3873 to reserve the Arbor area.<img src="../img/sites/site40-vs2.jpg"></p></div>
           
<div title="Space 41"><a href="#" class="p41" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 41</strong>will fit 35 foot RV. (Width is 22 ft.) Will fit 2 tents. Tribal Members only unless there is a special event being held in the Arbor. Please call the Department of Economic and Community Development at 541-276-3873 to reserve the Arbor area.<img src="../img/sites/site41.jpg"></p></div>           
                       
<div title="Space 42"><a href="#" class="p42" rel="nofollow" aria-haspopup="false"></a><p><strong>Space 42</strong>will fit 23 foot RV. (Width is 21 ft.) Will fit 2 tents. Tribal Members only unless there is a special event being held in the Arbor. Please call the Department of Economic and Community Development at 541-276-3873 to reserve the Arbor area.<img src="../img/sites/site42.jpg"></p></div>
           
<div title="Space 43"><a href="#" class="p43" rel="nofollow" aria-haspopup="false"></a><p><strong>Space A aka 43</strong>This space is over 100 feet long and 35 feet wide. Will fit 3 tents. This is a very good site for groups. There is not much shade during the hot summer months. It also has a large private beach.<img src="../img/sites/site43.jpg"></p></div>                                           
 
<div title="Arbor"><a href="#" class="pArbor" rel="nofollow" aria-haspopup="false"></a><p><strong>Arbor</strong>The arbor is available for events during the day. Please call the Department of Economic and Community Development at 541-276-3873 to reserve the Arbor area.</p></div>                                                                         
	  </div>
  </div>
</map>
</div>
<!-- imap end -->   

</div>  

<div class="clearfix"></div>
 
<?php  include "../php/footer.php"; ?>
</div>
</body>
</html>