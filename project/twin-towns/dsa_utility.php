<?php 

##################################################################### 
# script  : dsa assignment utility file                             # 
# file    : dsa_utility.php  
# Original author  : prakash @ prakash.chatterjee@uwe.ac.uk         # 
# author  : Rose  and elelment added by Martin                      # 
# date    : 4 Dec 2010                                              # 
##################################################################### 

require_once('dsa_config.php'); 


function get_file($uri) { 
 // get a file via UWE proxy and stop caching 
  


/*
    $context = stream_context_create( 
    array('http'=> 
        array('proxy'=>'proxysg01.uwe.ac.uk:80', 
              'header'=>'Cache-Control: no-cache' 
             ) 
     )); 
*/

  
    $contents = file_get_contents($uri,false,$context); 
    return $contents; 
}; 


# function to return a requested rss/atom feed as a simplexml object 
function get_feed($url) { 
    $feed = @simplexml_load_string(get_file($url), NULL, LIBXML_NOCDATA); 
    return $feed; 
} 

# function to get iamges from flickr atom feed & return an array of image links 
function get_flickr_images_atom_as_array($city) { 
    
    $atom = get_feed($city['flickr_landmark_imgs']); 
         
    if($atom) {  
 
        $img = array(); 
        foreach($atom->entry as $entry) { 
             
            # pull out req. fragment from the returned xml using regular expression 
            preg_match('/img src="(.*jpg)"/s', $entry->content, $matches); 
             
            # build the img link 
            $link = '<img src=\''.$matches[1].'\' alt="" class="flickrimg" />'; 
             
                        # save to array 
            $img[] = $link;
            
        } 
     }  
    # return the img array 
    return $img; 
}

function get_weather_data($place) {

    $weatherurl = $place['weather'];
    $rawdatafile = $weatherurl;
      $csv = get_file($rawdatafile);
    $data = explode(' ',$csv);
    $data[STATION] = str_replace ('_', ' ', $data[STATION]);
    $data[SUMMARY] = str_replace ('_', ' ', $data[SUMMARY]);
    $data[WINDDIRECTION] = degree_to_compass_point($data[WINDDIRECTION]);
        
return $data;
}

// define the positions of commonly used values in the array 

define ('WINDSPEED',1);
define ('WINDDIRECTION',3);
define('TEMPERATURE',4);
define('TIMEHH',29);
define ('TIMEMM',30);
define('STATION',32);
define('SUMMARY',49);
define('BAROMETER', 6);

function degree_to_compass_point($d){
   $dp = $d + 11.25;
   $dp = $dp % 360;
   $dp = floor($dp / 22.5) ;
   $points = array("N","NNE","NE","ENE","E","ESE","SE" ,"SSE" ,"S", "SSW","SW","WSW","W", "WNW","NW","NNW","N");
   $dir = $points[$dp];
   return $dir;
 };

// twitter feed added by Martin Francis 90944425 adapted from prakashes news feed. 


# function to get yahoo news rss as an array of html(linked) elements 
function get_twitter_news_rss_as_array($city) { 
     
    $rss = get_feed($city['twitter_news_rss']); 
    
    if($rss) {   
        $news = array(); 
        foreach($rss->channel->item as $item) {       
             
            # populate array 
            $news[] = '<a href=\''.$item->link.'\'>'.trim($item->title).'</a><br/>'; 
        } 

    } else echo "Can't get $city news twitter RSS!"; 
     
    # return the news array 
    return $news; 
} 




 
?> 