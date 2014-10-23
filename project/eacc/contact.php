<?php
$page_title = 'Contact Us | EACC';
include ('includes/header.html');
?>

<div class="main">
<p>You can send us a message using the form below</p>
<p>* denotes a required field</p>
<form action="FormMail.php" onsubmit="return validate_form(this);" method="post">
<table class="form" cellspacing="8">
<tr>
<td class="form">First name*</td>
<td class="form"><input type="text" name="firstname" size="22" /></td>
<td class="form">Surname*</td>
<td class="form"><input type="text" name="surname" size="22" /></td>
</tr>
<tr>
<td class="form">Gender</td>
<td class="form" colspan="3"><input type="radio" name="gender" value="Male">Male <input type="radio" name="gender" value="Female">Female</td>
</tr>
<tr>
<td class="form">Email address</td>
<td class="form" colspan="3"><input type="text" name="email" size="24" /> (if you require a response)</td>
</tr>
<tr>
<td class="form">Subject*</td>
<td class="form" colspan="3"><input type="text" name="subject" size="24" /></td>
</tr>
<tr>
<td class="form">Message*</td>
<td class="form" colspan="3"><textarea name="message" rows="4" cols="40"></textarea></td>
</tr></table>
<div class="formbuttons"><input type="reset" /> &nbsp;&nbsp;<input type="submit" /></div></form>

</div> <!--EOF main-->


<div class="sidebar1">
	<h1 class="sidebar">Latest News</h1>
    <p><a href="news/carbon-capture-will-generate-100000-jobs.html">Carbon Capture Storage will generate 100,000 jobs and £6.5 bn a year</a></p>
  	<p><a href="news/britainsrarestbutterfly.html">Downpours threaten extinction for Britain's rarest butterfly</a></p>
		<p><a href="news/one-billion-participate-in-earth-hour.html">Organisers hope one billion will participate in Earth Hour</a></p>
</div>

<div class="sidebar2">
	<h1 class="sidebar">Popular Links</h1>
      <p class="sidebarlinks"><a href="events.html">Recent member events</a><br />
  	<a href="news.html">Global news</a><br />
  	<a href="members.html">Become a member</a><br />
  	<a href="upcomingactions.html">Upcoming actions</a><br />
  	<a href="news/q-and-a-climate-change.html">Q&A Climate Change</a></br>
  	<a href="news/reduce-your-carbon-footprint.html">Reduce your carbon footprint</a><br />
  	<a href="news/live-more-sustainable.html">Live more sustainably</a></p>
</div>

<div class="sidebar3">
	<h1 class="sidebar">Learn About</h1>
<p class="sidebarlinks">Energy conservation<br />
Causes of climate change<br />
Physical evidence of climate change<br />
Green energy</p>
</div>

<div class="sidebar4">
	<h1 class="sidebar">Related Websites</h1>
	<p class="sidebarlinks"><a href="http://www.denmark.dk/en/menu/Climate-Energy/COP15-Copenhagen-2009/cop15.htm">UN Climate Change Conference</a><br />
	<a href="http://www.denmark.dk/en/menu/Climate-Energy/COP15-Copenhagen-2009/cop15.htm">IPCC</a><br />
	<a href="http://ec.europa.eu/environment/networks/cbn-e/index_en.html">CBNE</a><br />
	<a href="http://www.wmo.int/pages/index_en.html">World Meteorological Organisation</a><br />
	<a href="http://www.metoffice.gov.uk/climatechange/science/hadleycentre/">Hadley Centre</a></p>
</div>

<?php
include ('includes/footer.html');
?>