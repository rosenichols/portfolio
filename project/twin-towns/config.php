<?php
# Mike Collins 
function get_file($uri) { 
    # get a file via UWE proxy and stop caching 
/*
    $context = stream_context_create( 
    array('http'=> 
        array('proxy'=>'proxysg.uwe.ac.uk:8080', 
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


$feedURL = "http://newsrss.bbc.co.uk/rss/local/hampshire/front_page/rss.xml";
$rss = simplexml_load_string(get_file($feedURL), NULL, LIBXML_NOCDATA);
    
$newYorkNewsURL = "http://feeds.bbci.co.uk/news/science_and_environment/rss.xml";
$xml = simplexml_load_string(get_file($newYorkNewsURL), NULL, LIBXML_NOCDATA);

$bbcfeed = "http://downloads.bbc.co.uk/podcasts/worldservice/globalnews/rss.xml";
$bbcxml = simplexml_load_string(get_file($bbcfeed), NULL, LIBXML_NOCDATA);

$newsfeed = "http://newsrss.bbc.co.uk/rss/local/london/front_page/rss.xml";
$newsxml = simplexml_load_string(get_file($newsfeed), NULL, LIBXML_NOCDATA);        
?> 