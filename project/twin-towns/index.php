<?php
 // Include the HTML header file:
include ('includes/head.php');
?>

<?php 
# include the utility file 
require_once('dsa_utility.php'); 
# set $city array 
$city = array($winhampuk, $winchesterva, $hackneylondon, $longislandny);
?>

<div id="head_container">
<div id="header">
<div id="container">
		<div id="page_title">
		<h1>UK and US Twin Towns</h1>
		</div>
		<br /><br /><br />

		<div class="button">
			<ul>
				<li><a class="button1 active" rel="1" href="#">Map</a></li>
				<li><a class="button2" rel="2" href="#">Satellite</a></li>
				<li><a class="button3" rel="3" href="#">Flickr</a></li>
				<li><a class="button4" rel="4" href="#">Weather</a></li>
				<li><a class="button5" rel="5" href="#">News</a></li>
				<li><a class="button6" rel="6" href="#">Twitter</a></li>
			</ul>
		</div>

	 <br class="clearboth" />	
	</div>
</div>
</div>



<div id="main_content">
	<div id="myslide">
		<div class="cover">
		
			
			<div class="mystuff"> <!-- Martins Google map start -->
				<object type="text/html" data="http://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=http:%2F%2Fwww.martinfrancis.org%2Fdsa1%2Fconfig_to_kml.php&amp;sll=53.800651,-4.064941&amp;sspn=17.256447,45.043945&amp;ie=UTF8&amp;ll=45.336702,-39.023437&amp;spn=49.300505,168.574219&amp;z=3&amp;output=embed" width="960" height="400"></object>
			</div><!-- end of Martins Google map -->
			
			
			 			<div class="mystuff"><!-- Martins Google satalite map start -->
<!-- Link came from Google Maps embed feature. Used object tag rather than use Google's supplied embed code that includes iframe because Google's code does not validate XHTML strict. -->
				<object type="text/html" data="http://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=http:%2F%2Fwww.martinfrancis.org%2Fdsa1%2Fconfig_to_kml.php&amp;sll=53.800651,-4.064941&amp;sspn=17.256447,45.043945&amp;ie=UTF8&amp;t=h&amp;ll=45.336702,-39.023437&amp;spn=49.300505,168.574219&amp;z=3&amp;output=embed" width="960" height="400"></object>
			
			</div><!-- end of Martins Google satalite map -->
			
			
			<div class="mystuff">   
 				<div class ="subtitle">
		<!-- Pull the sub titles which are the place name from the CONFIG file -->
		<?php foreach ($xml->weather->station as $station) { echo '<div class="town_title">' . $station->title . '</div>';}  ?>
	</div>
				
				<!-- Start of Mehreen's Flickr  -->
				
				<div id="flickrwrapper">
						
 				<?php    
 					foreach ($city as $value){ 
 						echo '<div class="quarter"><div class="centrecontents">'; 
 				   $img = get_flickr_images_atom_as_array($value); 
 				       
 						for ($count = 0; $count < 8; $count++) {
 							echo $img[$count];
 						}
 				       
 				   echo '</div></div>';
 					}
 				?>
				</div>
			</div>
			
			<!-- End of Mehreen's Flickr -->
			
			<div class="mystuff"> 
			<div class="subtitle">
		<!-- Pull the sub titles which are the place name from the CONFIG file -->
		<?php foreach ($xml->weather->station as $station) { echo '<div class="town_title">' . $station->title . '</div>';}  ?>
	</div>
	
				<!-- Start of Rose's weather info -->
				<div id="weatherwrapper">
			       
					<?php
						foreach ($city as $value){
							echo '<div class="quarterweather">';  
							$data = get_weather_data($value);
							echo '<span>Summary:</span> ' . $data[SUMMARY] . '<br />';
							echo '<span>Time:</span> ' . $data[TIMEHH] . ':' . $data[TIMEMM] . '<br />';
							echo '<span>Temperature:</span> ' . $data[TEMPERATURE] . 'degreesC' . '<br />';
							echo '<span>Wind speed:</span> ' . $data[WINDSPEED] . '<br />'; 
							echo '<span>Wind Direction:</span> ' . $data[WINDDIRECTION] . '<br />';
							echo '<span>Barometric Pressure:</span> ' . $data[BAROMETER] . '<br />';
							echo '<span>Station:</span> ' . $data[STATION] . '<br />';
							echo '</div>'; 
					    } 
					?>
					</div>
		     </div>
		     
		     <!-- End of Rose's weather info -->
			 
			 <div class="mystuff"><!-- Mike's News Feed start --> 
                 <div class="subtitle">
                        <!-- Pull the sub titles which are the place name from the dsa_xml_config.xml file -->
                        <?php foreach ($xml->weather->station as $station) { echo '<div class="town_title">' . $station->title . '</div>';}  ?>
                </div>
                <div id="mikes_news">
                <object type="text/html" data="newsFeed.php" width="960" height="400"></object>
                </div>
            </div><!-- end of Mike's News Feed --> 
            
            <div class="mystuff"><!-- Martins Twitter Feed start --> 
                <div class="subtitle">
                    <!-- Pull the sub titles which are the place name from the dsa_xml_config.xml file -->
                    <?php foreach ($xml->weather->station as $station) { echo '<div class="town_title">' . $station->title . '</div>';}  ?>
                </div>
                                    
                    <?php    
                        foreach ($city as $value){ 
                        echo '<div class="tweet_quarter"><p class="small">'; 
                        $news = get_twitter_news_rss_as_array($value); 
                        foreach ($news as $val) { 
                        echo $val.'<br/>'; 
                        } 
                        echo '</p></div>    '; 
                        } 
                    ?> 
            </div><!-- end of Martins Twitter Feed --> 
                   
		  
		 
		</div> <!-- end of div cover -->
	</div>  <!-- end of div myslide -->
</div><!--  end of main contant. -->

<?php // Include the HTML header file:
include ('includes/footer.html');
?>


