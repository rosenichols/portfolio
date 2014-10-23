<?php

#####################################################################
# script  : dsa assignment configuartion file example               #
# file    : dsa_config.php                                          #
# author  : prakash @ prakash.chatterjee@uwe.ac.uk                  #
# version : 0.2                                                     #
# date    : 30 Nov 2009                                             #
#####################################################################

# set the timezone to GMT
@date_default_timezone_set("GMT");

$winhampuk = array (
  'flickr_landmark_imgs' => 'http://api.flickr.com/services/feeds/photos_public.gne?tags=winchester,viaduct&tagmode=all',
  'weather' => 'http://www.winchesterweather.org.uk/clientraw.txt',
  'twitter_news_rss' => 'http://twitter.com/statuses/user_timeline/31083491.rss'
);

$winchesterva = array (
  'flickr_landmark_imgs' => 'http://api.flickr.com/services/feeds/photos_public.gne?tags=virginia,historic,district&tagmode=all',
  'weather' => 'http://www.weatherroanoke.com/wxst/clientraw.txt',
  'twitter_news_rss' => 'http://twitter.com/statuses/user_timeline/15099017.rss'
);

$longislandny = array (
  'flickr_landmark_imgs' => 'http://api.flickr.com/services/feeds/photos_public.gne?tags=long,island,hamptons&tagmode=all',
  'weather' => 'http://www.massapequanyweather.com/clientraw.txt',
 'twitter_news_rss' => 'http://twitter.com/statuses/user_timeline/121714303.rss'
);

$hackneylondon = array (
  'flickr_landmark_imgs' => 'http://api.flickr.com/services/feeds/photos_public.gne?tags=hackney,st,john&tagmode=all',
  'weather' => 'http://www.hackneyfree.hackney.sch.uk/curriculum/geography/clientraw.txt',
  'twitter_news_rss' => 'http://twitter.com/statuses/user_timeline/94912445.rss'
);

# various api keys to go below
# not shown as not used in this example
?>
