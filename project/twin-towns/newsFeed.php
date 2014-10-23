<?php
# Mike Collins 
include('config.php');

?>

<html>
<head>
<title>BBC News Feed</title>
<style type="text/css">


body {

margin-top:10px;

}
h1 {
font-size:18px;
font-type:bold;
color:#00578A;
}

a {
font-size:18px;
text-decoration:none;
color:#25587A;
}

a:hover {
text-decoration:underline;
color:red;
}

a:visited {
color:maroon;
}

p {
margin-top:-12px;
padding:5px;
}

#newsSide {
margin-top:10px;
width:220px;
float:left;
margin-right:6px;


}

#newsSide .caption {
margin-top:10px;
padding-top:50px;
text-align:center;

color:#000;

}

#newYorkNews {
margin-top:10px;
width:220px;
float:left;
margin-right:6px;


}
#newYorkNews .caption {
text-align:center;

color:#000;

}

</style>
</head>
<body>

<?php
        echo "<div id='newsSide'>";
        
            $i = 0;
           foreach ($rss->channel->item as $feedItem) {
               $i++;
        echo "<p><a href='$feedItem->link' title='$feedItem->title'>" . $feedItem->title . "</a></p>";
        echo "<p>$feedItem->description. </p>";
        
            if($i >= 2) break;
}
        echo '</div>';
?>
<?php
        
        echo "<div id='newYorkNews'>";
        
            $i = 0;
            foreach ($xml->channel->item as $newYorkNewsURL) {
            $i++;
        echo "<p><a href='$newYorkNewsURL->link' title='$newYorkNewsURL->title'>" . $newYorkNewsURL->title . "</a></p>";
        echo "<p>$newYorkNewsURL->description. </p>";
        if($i >= 2) break;
}
        
        echo '</div>';
?>
<?php
        
        echo "<div id='newYorkNews'>";
        
            $i = 0;
            foreach ($newsxml->channel->item as $newsfeed) {
            $i++;
        echo "<p><a href='$newsfeed->link' title='$newsfeed->title'>" . $newsfeed->title . "</a></p>";
        echo "<p>$newsfeed->description. </p>";
        if($i >= 2) break;
}
        
        echo '</div>';
?>
<?php
        
        echo "<div id='newYorkNews'>";
        
            $i = 0;
            foreach ($bbcxml->channel->item as $bbcfeed) {
            $i++;
        echo "<p><a href='$bbcfeed->link' title='$bbcfeed->title'>" . $bbcfeed->title . "</a></p>";
        echo "<p>$bbcfeed->description. </p>";
        if($i >= 2) break;
}
        
        echo '</div>';
?>

</body>
</html> 