<?php
$page_title = 'Home | Hillfield Aviaries';
include ('includes/header.html');
?>

	<script src="js/twitter.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/twitterconfig.js" type="text/javascript" charset="utf-8"></script>

</head>

<body id="homepage">
<div id="wrapper">

<div id="header"><img src="images/logo.png" id="logo" alt="Hillfield Aviaries logo" /></div>

	<div id="navigation">
		<div id="navhome"><a href="index.php"></a></div>
		<div id="navabout"><a href="about.php"></a></div>
		<div id="navgallery"><a href="gallery.php"></a></div>
		<div id="navcontact"><a href="contact.php"></a></div>
		<div id="navdivstructure"><a href="divstructure.php"></a></div>
	</div>


<div id="contentwrapperhome">
<div id="contentcolumn">

		<p>Hello and welcome to the Hillfield Aviaries website. This site contains information about birdkeeping and my experiences in the hobby. You can also view the gallery page to see some photographs I have taken of birds I have kept over the years, and where I keep them.</p>
		
		
		<img src="images/insideaviary.jpg" class="homepage" alt="Inside view of the aviary" />
		<img src="images/fawndove.jpg" class="homepage" alt="Fawn coloured dove" />
		<img src="images/bfparrotfinch.jpg" class="homepage" alt="Blue Faced Parrot Finch" />
		<img src="images/tambourinedove.jpg" class="homepage" alt="Tambourine Dove" />
		<div class="clearline"></div>
		
			
		
	<div class="linkscolumn">
	
		<h1>Related links</h1>
		<p><a href="http://www.featheredflyer.co.uk">Feathered Flyer</a><br />
		This is an active bird breeders forum which deals with all topics surrounding the hobby of aviculture</p>
		
		<p><a href="http://www.efinch.com">Efinch.com</a><br />
		A useful website showcasing various types of finch and mannikin</p>
		
		<p><a href="http://www.waxbillfinchsociety.org.uk">Waxbill Finch Society</a><br />
		The official website of the WFS. The society seeks to preserve stocks of waxbills in UK aviculture</p>
	</div>
	
	
		
	<div class="learncolumn">
		<h1>Learn about the species I keep</h1>
		<h3>Star Finches</h3>
		<p class="birddesc">Star Finches are peaceable birds named for the twinkling white spots on their bodies. A medium-size finch, light olive-green, with a red face. <a href="http://www.feathered.flyer.co.uk/finches/starfinch.html">More</a></p>
		<h3>White Headed Nuns</h3>
		<p class="birddesc">An Asian species, chocolate-brown, the under-tail coverts and centre of the belly being almost black. Head, cheeks and throat white. <a href="http://www.feathered.flyer.co.uk/finches/whnuns.html">More</a></p>
		<h3>Red Cheeked Cordon Bleu</h3>
		<p class="birddesc">An African species. Brown with a blue face, throat and breast. Males have dark red patches on the cheeks, which the females lack. <a href="http://www.waxbillfinchsociety.org.uk/profiles.html#rccb">More</a></p>
		<h3>Red Billed Firefinch</h3>
		<p class="birddesc">A small African finch, males are bright red, females are brown. Builds its nest lower down, about one or two feet off the ground. <a href="http://www.waxbillfinchsociety.org.uk/profiles.html#red-billedff">More</a></p>
		<h3>Diamond Doves</h3>
		<p class="birddesc">A miniature Australian dove at 19-20cm. Colours vary. Name gained from the white specks on its wings. The eyes of the adult bird have a pronounced ring. <a href="http://www.diamonddove.info/bird01_Diamonds.htm">More</a></p>
	</div>


</div> <!-- contentcol -->
</div> <!-- contentwrap -->

<div id="homesidebar">
<div id="tweets">
			<h1>I'm tweeting!</h1>
			<div id="twitters">
			<p class="twitter">Please wait while my tweets load <img src="images/indicator.gif" alt="" /></p>
			<p class="twitter">If you can't wait - check out my Twitter page <a href="http://twitter.com/RoseNichols">here</a></p></div>
		</div>
	
<?php
include ('rss2html.php');
?>

</div> <!-- end homesidebar -->

<?php
include ('includes/footer.html');
?>