<?php

# uses http://themoneyconverter.com USD rss feed to return a specified rate 

function get_rss_rate($to) {

   $rss_url = 'http://themoneyconverter.com/rss-feed/'.BASERATE.'/rss.xml';

   $xml_string = file_get_contents_proxy($rss_url);

   # send the query via proxy and get as string and load as simplexml object 
   $xml_object = @simplexml_load_string($xml_string);

   $item = $xml_object->xpath('channel/item[title="'.$to.'/'.BASERATE.'"]');
  
   $item = is_array($item) ? current($item) : false;

   // match just the rate number out of result
   if($item instanceOf SimpleXMLElement) {
     // matchs equals space [numbers one or more times] dot [numbers zero or more times] space
     preg_match('/= ([0-9]+\.?[0-9]*) /', $item->description, $matches);
   }
   
   var_dump($matches);

   return isset($matches[1]) ? $matches[1] : false; 
}