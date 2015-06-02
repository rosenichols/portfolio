<?php
$page_title = 'CSS Navigation | Concepts | ITTW PAL';
$body_id = 'concepts';
include ('../includes/headerconcepts.html');
?>

<div id="content">

	<h1>CSS Navigation Sprites!</h1>
	
	<p>There are several different methods which can be used to create similar effects. I will give an overview to each of these methods so that you can decide which is most appropriate to use in any given occasion.</p>
	
	<h2>A Simple Method</h2>

	<p>A really simple method can be found on the W3Schools site (<a href="http://www.w3schools.com/css/tryit.asp?filename=trycss_link_advanced">here</a>) which basically uses divs to create rectangular buttons with a rollover effect that changes the colour of the button.</p>
	
	<div id="w3example">
		<a href="default.asp" target="_blank">This is a link</a>
		<a href="default.asp" target="_blank">This is a link</a>
		<a href="default.asp" target="_blank">This is a link</a>
	</div>
	
	
	<div class="sectionL">
		<h2>Advantages</h2>
		
		<ul>
			<li>The loading time will be faster versus a method which relies on images</li>
			<li>This method is also useful for websites built in ems as the buttons are free to scale perfectly along with the rest of the site (you will look at this more in your second year).</li>
			<li>A relatively small amount of code is used to create the effect.</li>
		</ul>
	</div>
		
	<div class="sectionR">
		<h2>Disadvantages</h2>
		
		<ul>
			<li>Perhaps not as visually appealing as a technique which uses images</li>
			<li>There is no active state used in this example</li>
		</ul>
	</div>
	
	<div class="clearline"></div>
	
	
	
	
	
	<h2>Using Lists</h2>
	
	<p>An extension of the above method is one which uses a list to organise the links into more of a sensible structure. This information is also taken from the W3Schools site (<a href="http://www.w3schools.com/css/tryit.asp?filename=trycss_navbar_horizontal_float_advanced">here</a>).</p>
	
	<div id="w3example2">
		<ul>
			<li><a href="#home">Home</a></li>
			<li><a href="#news">News</a></li>
			<li><a href="#contact">Contact</a></li>
			<li><a href="#about">About</a></li>
		</ul>
	</div>
	
		<div class="sectionL">
		<h2>Advantages</h2>
		
		<ul>
			<li>Faster loading time versus images</li>
			<li>Scaleable</li>
			<li>A relatively small amount of code is used to create the effect.</li>
			<li>Beginning to look more like a navigation bar</li>
		</ul>
	</div>
		
	<div class="sectionR">
		<h2>Disadvantages</h2>
		
		<ul>
			<li>Perhaps not as visually appealing as a technique which uses images</li>
			<li>There is no active state used in this example</li>
		</ul>
	</div>
	
	<div class="clearline"></div>
	
	
	<h2>Advanced Effects</h2>
	
	<p>The above methods are perfectly functional, but they don't look that great. To really lift your website design to a more professional level, you will need to use some kind of image based enhancement, be it a background image and transparent buttons with some kind of advanced rollover effect, or constructing slick looking images for the buttons themselves. Photoshop skills are necessary.</p>
	
	<p>Let's look at the navigation on this site as a basic example of the technique. It's simple really, but there are a few important points that you will need to bear in mind.</p>
	
	<p><img src="../images/equalnavigation.gif" alt="Navigation should have equal sections" id="navexample" /><span class="bold">Equality</span>. In order for the rollover effect to be seamless, it is important that the sections of the navigation are of equal height (see example to the right) and also that the text is positioned with equal height above and below consistently.</p>
	
	<p><span class="bold">Active States</span>. The active state in navigation is the means by which to convey to the user which page they are currently on. On this website, the current page is indicated by a dark blue arrow, and the hover state is indicated by a light blue arrow. This is a simple point but is so often overlooked. For another great tutorial on active states, click <a href="http://www.sohtanaka.com/web-design/active-state-in-css-navigations/">here</a>.</p>
	
	<p><span class="bold">Order of links</span>. The order in which you lay out the states of your navigation (see in my example I have default, then below is hover, then below is active) determines the order in which you set out your code. You will see this a bit further down the page.</p>
	
	<p>One image is used per navigation item. This is not mandatory, but for now it's the easiest way of doing it. Let's take a look at how it works on a wider scale.</p>
	
	<div id="wholenavigation"><img src="../images/wholenavigation.gif" alt="Navigation example" /></div>
	
	<p>Only the section encompassed by the grey box is visible to the user, the rest is usually hidden, but this image shows how by changing the background position, you can create effective rollover effects. Of course, this example makes use of only basic graphical elements, but it is possible to create really cool effects using this technique.</p>
	
	<div class="sectionL">
		<h2>Advantages</h2>
		
		<ul>
			<li>Visually effective</li>
			<li>The active state shows the user which page/section they are currently on</li>
			<li>Including the hover and active states as part of the same image (rather than using three separate images) negates any delay that might otherwise be caused in changing one image to another</li>
		</ul>
	</div>
		
	<div class="sectionR">
		<h2>Disadvantages</h2>
		
		<ul>
			<li>The images add fractionally to the total load time of the page</li>
		</ul>
	</div>
	
	<div class="clearline"></div>
	
	<h2>How does it work?</h2>
	
	<p>Let's have a look at the code for the last example to see how it works.</p>
	
	<p class="code">#navhome a {<br />
	&nbsp;&nbsp;float: left;<br />
	&nbsp;&nbsp;display: block;<br />
	&nbsp;&nbsp;padding: 0;<br />
	&nbsp;&nbsp;border: 0;<br />
	&nbsp;&nbsp;width: 60px; height: 20px;<br />
	&nbsp;&nbsp;overflow: hidden;<br />
	&nbsp;&nbsp;background: url('../images/navhome.png') left top no-repeat;<br />
	&nbsp;&nbsp;margin-left: 23px;<br />
	&nbsp;&nbsp;margin-right: 23px;<br />
}</p>
	
	<p><span class="bold">float: left;</span> This line is used to line the links up horizontally. Leave this out if you want a vertical navigation structure.</p>
	
	<p><span class="bold">display: block;</span> This is necessary, if you take it out it breaks.</p>
	
	<p><span class="bold">padding: 0;</span> Remember that padding adds white space inside the image. We don't want this.</p>
	
	<p><span class="bold">border: 0;</span> Unless you want a border, leave this as 0.</p>
	
	<p><span class="bold">width: 60px; height: 20px;</span> Important! Here you are specifying the height and width of the div, not of the whole image. My image is 60px total height with three sections, so the height of the div is 20px so that only one section is visible at any one time. I've specified both attributes on one line purely for convenience.</p>
	
	<p><span class="bold">overflow: hidden;</span> This line makes sure that the parts of your image which overlap the div are not visible (see previous image).</p>
	
	<p><span class="bold">background: url(...) left top no-repeat;</span> This line uses the shorthand attribute 'background:' rather than specifying each attribute separately. Change the url to the correct file path for your image. The ../ before images denotes to go up one directory, and then look for the directory images etc. The 'left top' is the background-position property, and is important. If you have set your default state to the top of your image then you won't need to change this.</p>
	
	<p><span class="bold">margins</span> The margins are used to space out the links.</p>
	
	<h2>Now set out the hover states</h2>
	
	<p class="code">
	#navhome a:hover,<br />
	#navwhatispal a:hover,<br />
	#navpalsessions a:hover,<br />
	#navkeyconcepts a:hover,<br />
	#navcontact a:hover {<br />
		&nbsp;&nbsp;background-position: 0 -20px;<br />
	}
	</p>
	
	<p>Here we have applied an attribute to several different selectors. Multiple selectors are broken up using commas. So in plain english, we are saying when the cursor hovers over #navhome (name of the div) change the background position as I specify. In this case we tell it to go down by 20 pixels to reveal the hover state.</p>
	
	<h2>And the active states</h2>
	
	<p class="code">
		HTML<br />
		&lt;body id=&quot;home&quot;&gt;
	</p>
	
	<p class="code">
	CSS<br />
	#home #navhome a,<br />
	#whatispal #navwhatispal a,<br />
	#sessions #navpalsessions a,<br />
	#concepts #navkeyconcepts a,<br />
	#contact #navcontact a {<br />
		&nbsp;&nbsp;background-position: left bottom;<br />
	}</p>
	
	<p>Active states are a little bit more complicated. Without you telling it so, how is the browser supposed to know which of your navigation sprites correspond to the page you are currently on? So how do we tell it? You may have guessed from the above code that we need to give the body of each page a unique id, different to the name of the div. Again, in plain english, what we are saying is: if you are on the home page, take the div called #navhome and apply the background position change. But if you are on the sessions page, apply the background position change to the corresponding div, and so on. Note that due to the conditions set in place here, only one change will be made per page.</p>
	
	
	
	
	
	
	
	<h2>Creative Inspiration</h2>
	
	<ol>
	<li><a href="http://webdesignledger.com/inspiration/30-examples-of-clean-and-minimal-website-navigation">Examples of minimal navigation</a></li>
	<li><a href="http://webdesignledger.com/inspiration/30-examples-of-excellent-website-navigation">Examples of excellent website navigation</a></li>
	<li><a href="http://webdesignledger.com/inspiration/30-inspiring-website-navigation-menus">Inspiring navigation menus</a></li>
	<li><a href="http://webdesignledger.com/inspiration/a-showcase-of-website-navigations-with-serious-click-appeal">Navigation with "serious click appeal" (their words not mine)</a></li>
	<li><a href="http://webdesignledger.com/inspiration/30-website-navigations-that-make-you-wanna-click-it">Navigations that "make you wanna click it" (again, their words)</a></li>
	<li><a href="http://webdesignledger.com/tutorials/16-best-photoshop-tutorials-for-creating-web-designs">Some useful photoshop tutorials, including a couple of navigation tutorials.</a></li>

</div> <!-- EOF content -->

<?php
include ('../includes/footer.html');
?>





