<?php
$page_title = 'Week 5 | ITTW PAL';
$body_id = 'sessions';
include ('includes/header.html');
?>
	
	<div id="weekswrapper">
	
		<?php
		include ('includes/sidenav.html');
		?>
		
		<div id="weekscontent">
		
			<h1 class="first">Week 5 - CSS Column Layouts</h1>
			
			<p>Resource material - <a href="resources/week5PAL.pdf">week5PAL.pdf</a> (click to download)</p>
			
			<p>This week we practiced using the CSS float property to create multi-column layouts.</p>
			
			<h2>Important</h2>
			
			<p>Before you begin, the following information may prove useful to bear in mind about floating divs</p>
			
			<p class="troubleshooting">* By default, divs are only as large as what is contained within them. This means that we need to specify the height and width in the CSS.</p>
			
			<p class="troubleshooting">* By default, divs are invisible. To see what's going on with them it is a good idea during the development of the site to set a visible border or to set a solid background colour.</p>
			
			<p class="troubleshooting">* The header section won't need to be floated as it is going to span across the width of the page.</p>
			
			<p class="troubleshooting">* When adding padding (see box model) to your divs, the amount of width created by the padding is added on, therefore this needs to be taken into account when calculating how wide you want the elements on your page to be.</p>
			
			<p class="troubleshooting">* It is a good idea to set margins to the elements of your page, at least during the development phase, to in order that the different elements are clearly distinct from one another.</p>
			
			<p class="troubleshooting">* You can only float elements left or right, not up or down.</p>
			
			<p class="troubleshooting">* When floating elements, for example when floating an element left, the element moves as far to the left as it can go. The trouble with this is that more often than not, we want our layout to sit in the middle of the page. What we need is another div to contain the columns and center them. This div is often called a container div or a wrapper div.</p>
			
			<h2>Ok, so where do we begin?</h2>
			
			<p>You should have an XHTML template to begin.</p>
			
			<p>In the body of the document, create four divs.</p>
			
			<p>Give each div an id property relevant to the information that will be contained within. So, for example, the header div would be created using the following code:</p>
			
			<p class="code">&lt;div id="header"&gt;header&lt;/div&gt;</p>
			
			<p>The name in the id property is what you use to reference each div in the CSS document.</p>
			
			<p>The content between the opening and closing tags, in the case the word 'header', is what is displayed inside that section.
			
			<p>For the development of this layout only, I have inserted the names of the divs. If something goes wrong while you are creating this layout, you will see how useful this becomes.</p>
			
			<p>Remember that when you have made your layout, you will take those words out and put real content in their places, for example in the left column you might want to take the word 'left' out and put your main navigation links there instead.</p>
			
			<p>We also need to add a wrapper div in order to centre the content on the page. The div needs the beginning tag to be before the other divs, and the end tag after them.</p>
			
			<p>So you should now have something that looks like this in between the body tags of your page.</p>
			
			<p class="code">&lt;div id="wrapper"&gt;<br />
			&nbsp;&nbsp;&lt;div id="header"&gt;header&lt;/div&gt;<br />
			&nbsp;&nbsp;&lt;div id="left"&gt;left&lt;/div&gt;<br />
			&nbsp;&nbsp;&lt;div id="main"&gt;main&lt;/div&gt;<br />
			&nbsp;&nbsp;&lt;div id="right"&gt;right&lt;/div&gt;<br />
			&lt;/div&gt;
			</p>
			
			<p>Before we are finished with the XHTML page we need to reference the CSS document itself (it doesn't matter that we haven't created it yet) using the following code in the head of the document:</p>
			
			<p class="code">&lt;link rel="stylesheet" type="text/css" href="threecolumn.css" /&gt;</p>
			
			<p>(I called my CSS document threecolumn.css, if you call yours something else you will need to change that part of the code.)</p>
			
			
			<h2>Now let's style these divs using CSS!</h2>
			
			<p>Create a new document as save it as a CSS document (make sure it ends .css).</p>
			
			<p>Because we have used id's in the XHTML (as opposed to classes, click <a href="#">here</a> to read more about the difference between the two) we reference the divs using #s, for example</p>
			
			<p class="code">#header {<br />
			&nbsp;&nbsp;CSS code here<br />
			}
			</p>
			
			<p>(Replace the 'CSS code here' with your actual CSS code.)</p>
			
			<p>For each div we will need to specify styles so the browser knows how to present the different elements.</p>
			
			<p>It is good practice to order the code in your CSS document as similarly as possible to the order that you specified the elements in your HTML document. So, as we specified our elements in the following order: wrapper, header, left, main, right, it would be a good idea to mirror the order in the CSS.</p>
			
			<p>So you'll have:</p>
			
			<p class="code">
			#wrapper {<br />
			&nbsp;&nbsp;CSS code goes here<br />
			}
			</p>
			
			<p class="code">
			#header {<br />
			&nbsp;&nbsp;CSS code goes here<br />
			}
			</p>
			
			<p class="code">
			#left {<br />
			&nbsp;&nbsp;CSS code goes here<br />
			}
			</p>
			
			<p class="code">
			#main {<br />
			&nbsp;&nbsp;CSS code goes here<br />
			}
			</p>
			
			<p class="code">
			#right {<br />
			&nbsp;&nbsp;CSS code goes here<br />
			}
			</p>
			
			<h2>The code we will need . . .</h2>
			
			<p>To work out some of the code that we will need, we must consider the width and height of our layout.</p>
			
			<p>The overall width of our layout will be 960px. This means that our wrapper divs will need to be 960px in width. In order to centre the wrapper div we also need to change the margins as follows</p>
			
			<p class="code">
			#wrapper {<br />
			&nbsp;&nbsp;margin: 0 auto;<br />
			&nbsp;&nbsp;width: 960px;<br />
			}
			</p>
			
			<p>The left and right hand columns will be 180px each. However, taking into account the padding which you will specify of 10px, this takes the actual width that we will specify down to 160px (minus the 10px from either side of the element). The width of the main column will be 540px (again we have taken 20px off to account for padding). The height of the left, main and right columns will be 480px.</p>
			
			<p>Excluding the wrapper div which we have already styled, for each div we will also specify padding of 10px, a float position of left, a width and a background colour which you can choose.</p>
			
			<p>These are the lines that you will need (Replace the X's with numbers. To change to background colour, use a hexidecimal code of your choice).</p>
			
			<p class="code">
			&nbsp;&nbsp;padding: 10px;<br />
			&nbsp;&nbsp;height: 480px;<br />
			&nbsp;&nbsp;float: left;<br />
			&nbsp;&nbsp;width: XXXpx;<br />
			&nbsp;&nbsp;background-color: #888888;
			</p>
			
			<p>Finally we need to specify margins for some of the divs (if you are unsure of the difference between margins and padding, click here to review that information).</p>
			
			<p>For the header div, we will set a bottom margin of 10px (use margin-bottom: 10px;), for the left div we will set a right hand margin of 10px (use margin-right: 10px;) and for the main div we will again set a right hand margin of 10px. We will not set a margin for the right hand div.</p>
			
			<p>You should now have a working three column layout!</p>
			
			<h2>Useful Resources</h2>
			<p><a href="www.w3schools.com/css/css_boxmodel.asp">www.w3schools.com/css/css_boxmodel.asp</a></p>
			<p><a href="www.w3schools.com/css/css_float.asp">www.w3schools.com/css/css_float.asp</a></p>
		
		</div> <!-- EOF weekscontent -->
		
	</div> <!-- EOF weekswrapper -->
	
<div class="clearline"></div>

<?php
include ('includes/footer.html');
?>