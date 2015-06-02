<?php
$page_title = 'ITTW Exam Revision | ITTW PAL';
$body_id = 'concepts';
include ('includes/header.html');
?>

<div id="content">

	<h1>ITTW Exam Revision</h1>
	
	<p><strong>Remember</strong> The exam lasts for 2 hours, and contains 2 sections A and B. You must answer ALL the questions in section A. You must answer from a choice of questions in section B.</p>
	
	<p>On this page I'll go through each question on the 2009 ITTW exam paper. It's a year since I took the exam so don't take what I write to be model answers. I make no claim that following the answers I give here will get you good marks. It is meant as a guide only for assistance in your further revision.</p>
	
	<p>If you haven't got a copy of the paper I'll be going through you can download it here - <a href="revision/ITTW_May_2009.pdf">ITTW_May_2009.pdf</a></p>
	
	<h2>Section A</h2>
	
	<p>Hopefully you all already know the structure of the exam paper. Section A consists of code extracts which you must explain line-by-line. The most important thing to remember about this section is that you need to state the blindingly obvious. State what each individual part of the line does, or it'll be assumed you don't know. Also, try and ignore the fact that the code extracts are really, really badly written.</p>
	
	<br class="clearline" />
		
		<div class="sectionL">
		
			<h2>Code Extract 1 (HTML)</h2>
		
			<p class="code">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;</p>
	
			<p>Specifies the character encoding used for the document.</p>
			
			<p class="code">&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.0 Transitional//EN&quot;<br />&quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd&quot;&gt;</p>
			
			<p>This line contains the Document Type Definition (DTD). The DTD specifies the rules for the markup language, so that the browsers render the content correctly.</p>
			
			<p class="code">&lt;html xmlns=&quot;http://www.w3.org/1999/xhtml&quot;&gt;</p>
			
			<p>This line begins the html document and specifies the namespace (xmlns) to use (this is needed for XHTML documents only).</p>
			
			<p class="code">&lt;head&gt; &lt;title&gt;First Page&lt;/title&gt;</p>
			
			<p>Begin the header section of the document. The title tag defines the title of the page. 'First Page' will be displayed in the title bar of the browser. The tag is opened and closed on this line.</p>
			
			<p class="code">&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;basic.css&quot;/&gt;</p>
			
			<p>This line provides a link to an external CSS stylesheet. This enables the styles to be applied to the page. The rel attribute specifies the relationship between the current document and the linked document. The type attribute tells the browser what kind of content to expect. The href attribute contains the filepath to the CSS document. In this case the filepath is relative.</p>
			
			<p class="code">&lt;/head&gt; &lt;body&gt; &lt;h2&gt; &lt;b&gt; First &lt;/b&gt; &lt;/h2&gt;</p>
			
			<p>End of the header section (&lt;/head&gt;). Beginning of the page body (&lt;body&gt;). A bold (&lt;b&gt; tag)secondary header (&lt;h2&gt; tag) is displayed of the word First.</p>
			
			<p class="code">&lt;a href=&quot;http://www.w3schools.com&quot;&gt;Reference&lt;/a&gt;</p>
			
			<p>An anchor tag (&lt;a&gt;) provides a link to the w3schools website. The word Reference is displayed on the screen.</p>
			
			<p class="code">&lt;img src=&quot;smile.gif&quot; alt=&quot;Happy face&quot; /&gt;</p>
			
			<p>An image is displayed. The file path to the image is contained in the src="" attribute. The text contained within the alt attribute will be displayed if for some reason the image cannot be. The tag is self-closing, meaning it is opened and closed in the same tag.</p>
			
			<p class="code">&lt;form name=&quot;pwd&quot; action=&quot;s1.php&quot; method=&quot;post&quot;&gt;</p>
			
			<p>The form tag is opened to denote the beginning of a form. The form has a name attribute which can be used to reference the form in PHP. The action attribute specifies the page which opens when the submit button is clicked. The method attribute describes how the form data is to be sent, post sends data as a HTTP post transaction.</p>
			
			<p class="code">Your name: &lt;input type=&quot;text&quot; id=&quot;name&quot; name=&quot;name&quot; /&gt;</p>
			
			<p>This line prints 'Your name:' and then a text box into which data can be entered. Type="text" means that the field expects text to be entered. The input field is given a unique identifier (id="name"). The tag is self-closing.</p>
			
			<p class="code">&lt;p&gt; Your password: &lt;input type=&quot;password&quot; id=&quot;pwd&quot; name=&quot;pwd&quot; size=&quot;10&quot; /&gt;</p>
			
			<p>Open paragraph (&lt;p&gt;) tag. This line prints 'Your password:' and then a text box into which data can be entered. Type="password" means that the text entered will be displayed as asterisks or dots instead of letters. The input field is given a unique identifier (id="pwd"). The size attribute specifies the character length of the field. The tag is self-closing.</p>
			
			<p class="code">&lt;/p&gt; &lt;input type=&quot;submit&quot; value=&quot;Enter&quot; /&gt; &lt;/form&gt;</p>
			
			<p>The paragraph tag is closed. A button is displayed which will submit the form (input type="submit"). On the button the word 'Enter' is displayed, overriding the default 'Submit' (value="Enter"). The input tag is closed. The form tag is closed.</p>

		
		</div> <!-- EOF sectionL -->
		
		<div class="sectionR">
		
			<h2>Code Extract 2 (CSS)</h2>
			
			<p>Before we continue, let's recap CSS syntax...</p>
			
			<img src="images/css_syntax.png" />
			
			<p>Make sure you're ok with what each bit is called. Now we'll continue with the question.</p>
			
			<p class="code">#leftcol {</p>
			
			<p>#leftcol is the selector in this declartion. The # means that the styles within the curly braces affect the html element with the id of 'leftcol'.</p>
			
			<p class="code">background-color: #ffff00;</p>
			
			<p>This line affects the background colour of the selector. It changes it using a hexadecimal colour code to yellow.</p>
			
			<p class="code">font-size: 100%;</p>
			
			<p>This line specifies that the font size of text contained within the selector should be 100% of its default value. The default value is usually 16px.</p>
			
			<p class="code">margin: 0px 10px 10px 10px;</p>
			
			<p>This line uses the shorthand declaration of the margin property, which specifies all four sides in one go. The top of the element is set to 0px, and the right, bottom and left margins are to be 10px. Margins create whitespace around elements.</p>
			
			<p class="code">float: left;</p>
			
			<p>The float property means that the element will move as far left as it can within its containing element. The float property allows for elements to be placed alongside one another.</p>
			
			<p class="code">width: 150px;}</p>
			
			<p>The width of the element is set to 150 pixels.</p>
			
			<p class="code">a:link {</p>
			
			<p>The a:link selector targets all unvisited links. This is a pseudo-class, which are used to add special effects to some selectors.</p>
			
			<p class="code">color: #b76666;</p>
			
			<p>Specifies the colour of the text using a hexadecimal colour code.</p>
			
			<p class="code">text-decoration: none;</p>
			
			<p>Specifies that text is to be displayed plainly, without underline etc.</p>
			
			<p class="code">border-bottom: thin dotted #b76666; }</p>
			
			<p>Affects the bottom border of the element only. Changes to a thin dotted line in the specified colour.</p>
			
			<p class="code">.myheading {</p>
			
			<p>This selector affects all elements with a class of 'myheading'. These could include elements of different types.</p>
			
			<p class="code">text-align: center;</p>
			
			<p>Centers the text within its confines.</p>
			
			<p class="code">line-height: 1.8em; }</p>
			
			<p>Specifies the line height of the text to be 1.8 times the size of the default text size of the page, whether this is set manually or by the browser.</p>
		
		
		</div> <!-- EOF sectionR -->
		
	<br class="clearline" />
			
	<h2>Section B</h2>
	
	<p>You will be given a choice of five questions but you only need to answer three. For the purposes of this exercise I'll go through all of the questions on the 2009 paper. I will answer in bullet point form in order to prevent any verbatim copying, but you should write in full sentences in the actual exam. For some questions I may point to another resource. Remember these questions will not be the ones that you have to answer, you will be asked different ones.</p>
	
	<h3>Question 2</h3>
	
	<p><strong>(a) Explain the term "topology of a network"</strong></p>
	
	<ul>
		<li>Network topology is the layout pattern of interconnections of the various elements (links, nodes, etc.) of a computer network</li>
		<li>Network topologies may be physical or logical</li>
		<li>Physical topology means the physical design of a network including the devices, location and cable installation.</li>
		<li>A topology is a network's virtual shape or structure. This shape does not necessarily correspond to the actual physical layout of the devices on the network</li>
	</ul>
	
	<p><strong>(b) Explain ring, bus and star topologies with the aid of a sketch of each</strong></p>
	
	<p><a href="http://en.wikipedia.org/wiki/Network_topology">This wikipedia page</a> has diagrams and explanations of the different topologies. Also I'd recommend looking through the lecture slides that deal with this subject.</p>
	
	<p><a href="http://compnetworking.about.com/od/networkdesign/ig/Computer-Network-Topologies/">This page</a> also has excellent diagram examples.</p>
	
	<p><strong>(c) What is the topology of a home network with a wireless router, one computer connected via WiFi and one computer connected via a network cable? Explain your answer with the aid of a sketch</strong></p>
	
	<p><a href="http://compnetworking.about.com/od/homenetworking/ig/Home-Network-Diagrams/Wi-Fi-Router-Network-Diagram.htm">This page</a> has some great information on this topic.</p>
	
	
	<h3>Question 3</h3>
	
	<p><strong>(a) Explain the four elements of the following url:</strong></p>
	
	<p class="code">http://www.garfield.com/comics/todays_comic.html</p>
	
	<p>The four parts you should break this down into are:</p>
	
	<p class="code">http://</p>
	
	<p>HTTP stands for Hypertext Transfer Communication Protocol. This allows for the controlled communication of documents over the internet.</p>
	
	<p class="code">www.garfield.com</p>
	
	<p>This is the domain name of the address which is mapped to an IP address. This is the destination for the address.</p>
	
	<p class="code">comics/</p>
	
	<p>This is part of a filepath to a document. This is a folder, or directory.</p>
	
	<p class="code">todays_comic.html</p>
	
	<p>This is the name of the document being requested.</p>
	
	<p><strong>(b) Explain and differentiate between the terms 'absolute' and 'relative' in respect of hyperlinks, giving examples of each type of hyperlink</strong></p>
	
	<ul>
		<li>An absolute hyperlink is one in which the entire path, including the domain, is included in the reference. An example of an absolute hyperlink is http://www.example.com/example/example.html</li>
		<li>This path will work when used anywhere on any webpage.</li>
		<li>Absolute paths are typically used when pointing to elements that are on another domain than ones own.</li>
		<li>Another form of absolute hyperlinks are used when linking within your own domain, beginning from the root directory. An example of this type is link is /example/example.html. Once again, this link will work no matter where it is used in ones own domain.</li>
		<li>If you share code across multiple pages and directories on your site, using absolute paths will speed up maintenance.</li>
		<li>A relative hyperlink path changes depending on what page the links are located on.</li>
		<li>A link to a resource in the same directory as the current location needs no other path information. An example is 'anotherpage.html'.</li>
		<li>Sub-directories are listed without any preceding slashes, for example 'directory/anotherpage.html'.</li>
		<li>To link to directories above the current location, the following format is used, '../directory/anotherdirectory/page.html'. The ../ means go up one directory and then follow the file path.</li>
	</ul>
	
	<p><strong>(c) Explain what a communication protocol is, illustrating your answer with descriptions of two communication protocols that are widely used in the Internet of World Wide Web</strong></p>
	
	<ul>
		<li>A protocol is a set of rules and procedures that allow controlled communication.</li>
		<li>Examples of communication protocols used on the web are HTTP, FTP, TCP/IP and SMTP.</li>
		<li>HTTP - Hypertext Transfer Communication Protocol.</li>
		<li>FTP - File Transfer Protocol.</li>
		<li>TCP/IP - Transmission Control Protocol/Internet Protocol</li>
		<li>SMTP - Simple Mail Transfer Protocol.</li>
		<li>Research two of these in more detail.</li>
	</ul>
	
	
	<h3>Question 4</h3>
	
	<p><strong>(a) What do style sheets (as in CSS) consist of, and what do they do?</strong></p>
	
	<ul>
		<li>Style sheets consist of many statements comprising selectors and declarations containing property/value pairs.</li>
		<li>Style sheets are used to contain information regarding the style and display of elements of pages in a website.</li>
	</ul>
	
	<p><strong>(b) Describe and differentiate between external style sheets, embedded styles and inline styles. Provide examples in your answer.</strong></p>
	<ol>
		<li>External - Separate documents containing style information. You may have rose.html and rose.css.</li>
		<li>Embedded - Styles are contained within the head of the html page.</li>
		<li>Inline - Styles are contained in the actual html tags of pages, eg &lt;p style=&quot;color: red; font-weight: bold;&quot;&gt;...&lt;/p&gt;</li>
	</ol>
	
	<p><strong>(c) Explain how a web browser deals with multiple, possibly conflicting styles.</strong></p>
	
	<ol>
		<li>A web browser applies styles according to specificity. A more specific style will be applied over a less specific style.</li>
		<li>For example, if paragraph styles are defined in p {...}; this will be applied to all paragraphs except where a more specific style can be found. So if a particular paragraph has a class of 'first', then the styles found in p.first {...}; will be applied to that paragraph, overriding styles found in the generic p declaration where conflicts are found. In the same way, an id will override a class because it is more specific.</li>
	</ol>
	
	<p><strong>(d) What are the advantages for Web designers in using style sheets?</strong></p>
	
	<p>Google for 'advantages of CSS'</p>
	
	
	<h3>Question 5</h3>
	
	<p><strong>(a) What is a scripting language?</strong></p>
	
	<ol>
		<li>A programming language in which programs are a series of commands that are interpreted and then executed one by one. The programs do not need to be compile</li>
	</ol>
	
	<p><strong>(b) Explain what the JavaScript language is, and how it can be used.</strong></p>
	
	<ol>
		<li>A scripting language used in web content development, primarily to create functions that can be embedded in or included from HTML (Hypertext Markup Language) documents and that interact with the DOM (Document Object Model).</li>
	</ol>
	
	<p><strong>(c) Using a 'mouseover' event as an example, explain how JavaScript can "react to Web page events".</strong></p>
	
	<ol>
		<li>A mouseover event is an action which occurs when the mouse is hovered over a given element on a webpage.</li>
		<li>The mouseover function is supported by most HTML tags.</li>
		<li>Code specified within the function is called and run when the element is moused over.</li>
	</ol>
	
	
	<h3>Question 6</h3>
	
	<p>I didn't do this question because I don't know much about browser plug-ins. I wouldn't worry too much about revising this topic as you have a choice of questions and there are easier options. For your information if you wish to revise the subject, the questions were:
	
	<p><strong>(a) Explain what a browser plug-in is and how it can be used by a browser.</strong></p>
	
	<p><strong>(b) Name 3 broswer plug-ins.</strong></p>
	
	<p><strong>(c) What are the main functions of browser plug-ins.</strong></p>
	
	<p><strong>(d) Various formats are used for still images. In web page design, how would you choose between BMP, JPG, GIF and PNG formats?</strong></p>
	
	
	<h1>I hope this helps!</h1>


</div> <!-- EOF content -->


<?php
include ('includes/footer.html');
?>