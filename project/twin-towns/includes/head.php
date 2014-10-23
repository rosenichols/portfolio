<?php
// Define which config file to use
define('CONFIG','dsa_xml_config.xml'); 
 // Read the XML data into an object
$xml = simplexml_load_file(CONFIG);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="en" />
<meta name="copyright" content="Rose Nichols" />
<!-- Pull the title of the assignment twin towns from the dsa_xml_config.xml file -->
<title>UWE DSA assignment 1 | </title>

<link rel="shortcut icon" type="image/ico" href="favicon.gif" />
<link rel="stylesheet" type="text/css" href="css/twintowns.css" />

<link  href="//fonts.googleapis.com/css?family=Lobster:regular" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAAsLx0QfYG6u07XTZhSLPefRQUT7pyskLPdjE2S8H0o31-KajqyBSWJiQiYFI86sey-cRsNGd1FqhJ_A">

</script>

<script type="text/JavaScript">
$(document).ready(function (){
	$('.button a').click(function(){
		var integer = $(this).attr('rel');
		$('#myslide .cover').animate({left:-960*(parseInt(integer)-1)})  /*----- Width of div mystuff (here 960) ------ */
		$('.button a').each(function(){
		$(this).removeClass('active');
			if($(this).hasClass('button'+integer)){
				$(this).addClass('active')}
		});
	});	
});
</script>
<script type="text/javascript" src="gfeedfetcher.js">

/***********************************************
* gAjax RSS Feeds Displayer- (c) Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>



</head>
<body>