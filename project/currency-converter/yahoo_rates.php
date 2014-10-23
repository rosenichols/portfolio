<?php

# Modified from code given by Prakash Chatterjee. Thanks!
# uses the yahoo YQL rest service to return a specified rate 

function get_yahoo_rest_rate($to) {

   # YQL rest url head & tail 
   $yql_base_uri = "http://query.yahooapis.com/v1/public/yql";
   $yql_tail_uri = '&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys';

   # enter parameters into the query 
   $yql_query = 'select * from yahoo.finance.xchange where pair in ("'.BASERATE.$to.'")';

   # build the the complete YQL query 
   $yql_query_url = $yql_base_uri."?q=".urlencode($yql_query).$yql_tail_uri;


   $xml_string = file_get_contents_proxy($yql_query_url);

   # send the query via proxy and get as string and load as simplexml object 
   $xml_object = @simplexml_load_string($xml_string);
   
   $newrate = $xml_object->results->rate->Rate;
   
   if ($newrate != '0.00') {
      return $newrate;
   } else {
      return false;
   }
}