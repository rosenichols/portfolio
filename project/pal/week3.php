<?php
$page_title = 'Week 3 | ITTW PAL';
$body_id = 'sessions';
include ('includes/header.html');
?>
	
	<div id="weekswrapper">
	
	<?php
	include ('includes/sidenav.html');
	?>
	
	<div id="weekscontent">
	
		<h1 class="first">Week 3 - HTML/XHTML</h1>
		
		<p>Resource material - <a href="resources/week3PAL.ppt">week3PAL.ppt</a> (click to download)</p>
		
		<h2>XHTML</h2>
		
		<p>XHML stands for Extensible Hypertext Markup Language. It's almost identical to HTML 4.01. It was intended to replace HTML with "a stricter and cleaner version of HTML." XHTML became a W3C Recommendation January, 2000. There are some differences in syntax between the two.</p>
		
		<h2>Syntactical Differences</h2>
		
		<p>In XHTML, all tags must be written in lower case. Eg, &lt;p&gt; instead of &lt;P&gt;</p>
		
		<p>All tags must be closed, for example &lt;img="image.png" /&gt;.</p>
		
		<h2>Which should we use?</h2>
		
		<p>We should use XHTML (or HTML5) for the following reasons<br />
		More modern<br />
		More cross-browser compatible<br />
		Preferred professionally<br />
		Allows greater flexibility</p>
	
	</div> <!-- EOF weekscontent -->
	
	</div> <!-- EOF weekswrapper -->
	
<div class="clearline"></div>

<?php
include ('includes/footer.html');
?>