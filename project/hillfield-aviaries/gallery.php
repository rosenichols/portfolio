<?php
$page_title = 'Gallery | Hillfield Aviaries';
include ('includes/header.html');
?>

	<link rel="stylesheet" href="stylesheets/lightbox.css" type="text/css" media="screen" />
	
	<script type="text/javascript" src="js/prototype.js"></script>
	<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	
</head>

<body id="gallerypage">

<!-- I found help on liquid CSS layouts at http://www.dynamicdrive.com/style/layouts/category/C9/ -->


<div id="wrapper">

<div id="header"><img src="images/logo.png" id="logo" alt="Hillfield Aviaries logo" /></div>

<div id="navigation">
	<div id="navhome"><a href="index.php"></a></div>
	<div id="navabout"><a href="about.php"></a></div>
	<div id="navgallery"><a href="gallery.php"></a></div>
	<div id="navcontact"><a href="contact.php"></a></div>
	<div id="navdivstructure"><a href="divstructure.php"></a></div>
</div>

<div id="columnwrapper">

<div id="contentwrapper">

<div id="content">

<p class="intro">During my many years bird keeping, I have taken many pictures to document my journey from junior novice to expert bird breeder. It is always enjoyable to be able to look back on photos taken when I had just started out, and compare it to the present to see how far I have come. I have many pictures of the different species of bird that I have kept. I am particularly interested in colour mutations and genetics, so I've tried to document all the colour birds of each particular species that I have kept.</p>

	<div id="thumbwrapper">
		<div class="thumb" id="aviary">
			<a href="images/aviary.jpg" rel="lightbox[hillfieldaviaries]" title="This is the main portion of the aviary, there have been numerous expansions since this photograph was taken." class="tooltip"><span class="tooltip">Outdoor flights</span></a>
		</div>
		<div class="thumb" id="bichenofinches">
			<a href="images/bicheno.jpg" rel="lightbox[hillfieldaviaries]" title="This is a Bicheno, or Owl, Finch. As recently as mid 2010 I ceased keeping these birds. Although they were a wonderful addition when I had them, I wanted a new challenge." class="tooltip"><span class="tooltip">A.k.a Owl Finches</span></a>
		</div>
		<div class="thumb" id="parrotfinch">
			<a href="images/parrotfinch.jpg" rel="lightbox[hillfieldaviaries]" title="This is a Blue Faced Parrot Finch. Specifically, this is a Lutino mutation of the bird, hence why it is lacking the blue face that gives it its name." class="tooltip"><span class="tooltip">Lutino colour</span></a>
		</div>
		<div class="thumb" id="diamonddoves">
			<a href="images/diamonddove.jpg" rel="lightbox[hillfieldaviaries]" title="This is a diamond dove feeding two chicks." class="tooltip"><span class="tooltip">Feeding chicks</span></a>
		</div>
		<br />
		<div class="thumb" id="fledglings">
			<a href="images/starfinchchick.jpg" rel="lightbox[hillfieldaviaries]" title="This is a young Star Finch, recently fledged from the nest. It takes them a few days to learn to fly confidently." class="tooltip"><span class="tooltip">Young birds</span></a>
		</div>
		<div class="thumb" id="parsonfinches">
			<a href="images/parsonfinch.jpg" rel="lightbox[hillfieldaviaries]" title="This is a Parson Finch. Males and females of the species look very much the same." class="tooltip"><span class="tooltip">An Australian Finch</span></a>
		</div>
		<div class="thumb" id="barbarydove">
			<a href="images/barbarydove.jpg" rel="lightbox[hillfieldaviaries]" title="This is a Barbary Dove. These doves come in a plethora of different colours, most of which I have kept at one time or another. I gave up keeping these birds because they are prolific breeders and I kept running out of space." class="tooltip"><span class="tooltip">Domestic birds</span></a>
		</div>
		<div class="thumb" id="starfinch">
			<a href="images/starfinch.jpg" rel="lightbox[hillfieldaviaries]" title="This is an adult Star Finch, this particular bird is a Yellow mutation, a muted form of the natural form. This bird is female." class="tooltip"><span class="tooltip">Yellow variety</span></a>
		</div>
	</div>

<p class="outro">I have found birds to be excellent models for improving my photography skills also, as they rarely stay still and are incredibly physically intricate. In the perfect photograph, individual feathers can be distinguished. The photos I have taken recently are vastly better than those from several years ago. This is partly because I have more experience with lighting, framing and composition, but mostly because digital cameras are continually becoming more forgiving of the novice user, and have greater ability to capture detail in less than perfect conditions.</p>


</div>
</div>


<div id="sidebar">
<p>You are here: <a href="index.php">Home</a> -> <a href="gallery.php">Gallery</a></p>
<p id="gallery">This is my new image gallery showing some of the pictures I've been taking this year.</p>
<p>I've divided them up into sections to allow you to browse through them.</p>
<p>You can rollover them to get a more complete description from the groovy CSS-only tooltips I put on them. If you want to see more, just click them to see them larger!</p>


</div>
</div>


<?php
include ('includes/footer.html');
?>