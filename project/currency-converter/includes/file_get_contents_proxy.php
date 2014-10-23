<?php

# This function makes use of the get_file_contents function
# to return a file globbed as a string but accounts for
# the pecularities of this app. - i.e getting through the
# UWE proxy when required otherwise using localhost.

function file_get_contents_proxy($file) {

  $a_context = array(
    'http' => array(
      'proxy' => 'proxysg.uwe.ac.uk:8080',
      'request_fulluri' => true,
      ),
    );

  if (preg_match("/uwe/i", $_SERVER['SERVER_NAME'])) {

    $cx_context = stream_context_create($a_context);
    $file_string = @file_get_contents($file, False, $cx_context);
  }
  else {
    $file_string = @file_get_contents($file);
  }

  if ($file_string) {
    return $file_string;
  }
  else {
    return FALSE;
  }
}
