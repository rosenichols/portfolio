<?php
$page_title = 'Box Model | Concepts | ITTW PAL';
$body_id = 'concepts';
include ('../includes/headerconcepts.html');
?>

<div id="content">

	<h1>CSS Box Model</h1>
	
	<p>Information taken from <a href="http://www.w3schools.com/css/css_boxmodel.asp">W3Schools</a></p>
	
	<p>All web page elements can be considered as boxes. In CSS, the term "box model" is used when talking about design and layout.</p>
	
	<p>The CSS box model is essentially a box that wraps around HTML elements, and it consists of: margins, borders, padding, and the actual content.</p>
	
	<p>The box model allows us to place a border around elements and space elements in relation to other elements.</p>
	
	<p>The image below illustrates the box model:</p>
	
	<img src="../images/boxmodel.png" alt="CSS box model" id="boxmodel" />
	
	<h2>Explanation of the different parts</h2>
	
	<p>Margin - Clears an area around the border. The margin does not have a background color, it is completely transparent<br />
	Border - A border that goes around the padding and content. The border is affected by the background color of the box<br />
	Padding - Clears an area around the content. The padding is affected by the background color of the box<br />
	Content - The content of the box, where text and images appear<br />
	In order to set the width and height of an element correctly in all browsers, you need to know how the box model works.</p>
	
	<h2>Width and Height of an Element</h2>
	
	<p>Important: When you specify the width and height properties of an element with CSS, you are just setting the width and height of the content area. To know the full size of the element, you must also add the padding, border and margin.</p>
	
	<p>The total width of the element in the example below is 300px.</p>
	
	<p class="code">width:250px;<br />
	padding:10px;<br />
	border:5px solid gray;<br />
	margin:10px;<br />
	</p>
	
	<h2>How did we work this out?</h2>
	
	<p>250px (width)<br />
	+ 20px (left and right padding)<br />
	+ 10px (left and right border)<br />
	+ 20px (left and right margin)<br />
	= 300px<br />
	</p>
	
	<p>The total width of an element should always be calculated like this</p>
	
	<p>Total element width = width + left and right padding + left and right border + left and right margin</p>
	
	<p>Likewise, the total height of an element should always be calculated like this</p>
	
	<p>Total element height = height + top and bottom padding + top and bottom border + top and bottom margin</p>
	
	<h2>Key Takeaways</h2>
	
	<ul>
	<li>All web page elements can be considered as boxes.</li>
	
	<li>When you specify the width of an element in CSS, you are specifying the width of the content, not of the entire element.</li>
	
	
</div> <!-- EOF content -->

<?php
include ('../includes/footer.html');
?>