<?php
$page_title = 'Audio Sampler | HelloGoodbye';
include ('includes/header.html');
?>

<div class="maintextbox">

<div class="audioplayer">
<object width="380" height="430">
<param name="movie" value="flash/audioplayer.swf">
<embed src="flash/audioplayer.swf" width="380" height="430">
</embed>
</object>
</div>

</div> <!--EOF maintextbox-->

<div class="HG"><img src="images/HelloGoodbye.png" /></div>

<div class="LHwrapper">
<div class="twitter"><h1 class="twitter">Twitter</h1>

<div class="twitters" id="itshellogoodbye">
 <p class="twitter">Please wait while our tweets load <img src="images/indicator.gif" /></p>
 <p class="twitter">If you can't wait - check out our Twitter page <a href="http://twitter.com/itshellogoodbye">here</a></p></div>


</div>
<div class="contact">

<h1 class="contact">Upcoming Shows</h1>

<p class="twitter">
<strong>Apr 5th</strong> Chicago, IL<br />
<strong>Apr 7th</strong> Englewood, CO<br />
<strong>Apr 9th</strong> Salt Lake City, UT<br />
<strong>Apr 11th</strong> Seattle, WA<br />

<br />

<strong>See more</strong></p>

<h1 class="contact">Contact Info</h1>

<a href="http://twitter.com/itshellogoodbye"><img src="images/socialmedia/squaretwitter.png" class="socialmedia" /></a>
<a href="http://twitter.com/itshellogoodbye"><img src="images/socialmedia/squaretwitterbird.png" class="socialmedia" /></a>
<a href="http://www.facebook.com/hellogoodbyeband"><img src="images/socialmedia/squarefacebook.png" class="socialmedia" /></a>
<a href="http://www.myspace.com/hellogoodbye"><img src="images/socialmedia/squaremyspace.png" class="socialmedia" /></a>
<a href="http://www.last.fm/music/Hellogoodbye"><img src="images/socialmedia/squarelastfm.png" class="socialmedia" /></a>
<img src="images/socialmedia/squaredelicious.png" class="socialmedia" /></a>

<p class="contact">Mgmt: Dave, Dirk & Danny<br />
Booking: Matt Galle</p>

</div>
</div>

</div> <!--EOF wrapper-->

</div> <!--EOF glowine wrapper-->

</div> <!--EOF bottomright wrapper-->


<script src='twitter.js' type='text/javascript' charset='utf-8'></script>
    <script type='text/javascript' charset='utf-8'>
    getTwitters('itshellogoodbye', {
        id: 'itshellogoodbye', 
        count: 3, 
        withFriends: false,
        enableLinks: true, 
        ignoreReplies: true,
        template: "<p><span id='tweet'><a href='http://twitter.com/%user_screen_name%/'><img height='16' width='16' src='%user_profile_image_url%' /></a> %text% <br /><span class='time'><a href='http://twitter.com/%user_screen_name%/statuses/%id%' class='twittertime'>%time%</a></span></p></span>"
    });
    </script>


</body>
</html>
