<?php
$page_title = 'XHTML Structure | Concepts | ITTW PAL';
$body_id = 'concepts';
include ('../includes/headerconcepts.html');
?>

<div id="content">

	<h1>Basic XHTML Page Structure</h1>
	
	<p>Download the template <a href="../resources/xhtmltemplate.txt">xhtmltemplate.txt</a> or copy it from below.</p>
	
	<h2>Template</h2>
	
	
	<div id="linenumbers">
		<p class="code">
			1<br />
			2<br />
			3<br />
			4<br />
			5<br />
			6<br />
			7<br /><br />
			8<br />
			9<br />
			10<br /><br />
			11
		</p>
	</div>
	
	<div id="code">
		<p class="code">
		&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;<br />
		&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;<br />
		&lt;head&gt;<br />
		&lt;meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /&gt;<br />
		&lt;title&gt;Title Goes Here&lt;/title&gt;<br />
		&lt;/head&gt;</p>
		
		<p class="code">&lt;body&gt;<br />
		Content goes in here<br />
		&lt;/body&gt;</p>
		
		<p class="code">&lt;/html&gt;</p>
	</div>
	
	
	<h2>What are meta tags?</h2>
	
	<p>Meta elements are elements used to provide structured metadata about a web page. Such elements must be placed as tags in the head section of an HTML or XHTML document. Meta elements can be used to specify page description, keywords and any other metadata not provided through the other head elements and attributes.</p>
	
	<h2>What are DTDs?</h2>
	
	<p>The purpose of a DTD (Document Type Definition) is to define the legal building blocks of a document.</p>
	
	<p>A DTD defines the document structure with a list of legal elements and attributes.</p>
	
	<p>For more about DTDs, see the W3Schools page <a href="http://www.w3schools.com/DTD/dtd_intro.asp">here</a></p>
	
	
	<h2>Key Takeaways</h2>
	
	<ul>
	<li>You will use the same basic template for each page of websites you make this year.</li>
	
	<li>It is better to start using XHTML sooner rather than later.</li>
	
	<li>Meta tags provide structured metadata about a web page. They are defined in the head of the document.</li>
	
	<li>DTDs (Document Type Definition) define document structures.</li>
	</ul>

</div> <!-- EOF content -->

<?php
include ('../includes/footer.html');
?>