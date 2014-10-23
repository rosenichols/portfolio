<?php
function _feature_wysiwyg_editor_theme_lists() {
  return '<h2>Nested And Mixed Lists</h2>
<p>Nested and mixed lists are an interesting beast. It&#8217;s a corner case to make sure that</p>
<ul>
<li>Lists within lists do not break the ordered list numbering order</span></li>
<li>Your list styles go deep enough.</span></li>
</ul>
<h3>Ordered &#8211; Unordered &#8211; Ordered</h3>
<ol>
<li>ordered item</li>
<li>ordered item
<ul>
<li><strong>unordered</strong></li>
<li><strong>unordered</strong>
<ol>
<li>ordered item</li>
<li>ordered item</li>
</ol>
</li>
</ul>
</li>
<li>ordered item</li>
<li>ordered item</li>
</ol>
<h3>Ordered &#8211; Unordered &#8211; Unordered</h3>
<ol>
<li>ordered item</li>
<li>ordered item
<ul>
<li><strong>unordered</strong></li>
<li><strong>unordered</strong>
<ul>
<li>unordered item</li>
<li>unordered item</li>
</ul>
</li>
</ul>
</li>
<li>ordered item</li>
<li>ordered item</li>
</ol>
<h3>Unordered &#8211; Ordered &#8211; Unordered</h3>
<ul>
<li>unordered item</li>
<li>unordered item
<ol>
<li>ordered</li>
<li>ordered
<ul>
<li>unordered item</li>
<li>unordered item</li>
</ul>
</li>
</ol>
</li>
<li>unordered item</li>
<li>unordered item</li>
</ul>
<h3>Unordered &#8211; Unordered &#8211; Ordered</h3>
<ul>
<li>unordered item</li>
<li>unordered item
<ul>
<li>unordered</li>
<li>unordered
<ol>
<li><strong>ordered item</strong></li>
<li><strong>ordered item</strong></li>
</ol>
</li>
</ul>
</li>
<li>unordered item</li>
<li>unordered item</li>
</ul>';
}




function _feature_wysiwyg_editor_theme_markup() {
return '<h2>Markup And Formatting</h2>
<h1>Header one</h1>
<h2>Header two</h2>
<h3>Header three</h3>
<h4>Header four</h4>
<h5>Header five</h5>
<h6>Header six</h6>
<h2>Blockquotes</h2>
<p>Single line blockquote:</p>
<blockquote><p>Stay hungry. Stay foolish.</p></blockquote>
<p>Multi line blockquote with a cite reference:</p>
<blockquote><p>People think focus means saying yes to the thing you&#8217;ve got to focus on. But that&#8217;s not what it means at all. It means saying no to the hundred other good ideas that there are. You have to pick carefully. I&#8217;m actually as proud of the things we haven&#8217;t done as the things I have done. Innovation is saying no to 1,000 things. <cite>Steve Jobs &#8211; Apple Worldwide Developers&#8217; Conference, 1997</cite></p></blockquote>
<h2>Tables</h2>
<table>
<tbody>
<tr>
<th>Employee</th>
<th class="views">Salary</th>
<th></th>
</tr>
<tr class="odd">
<td><a href="http://john.do/">John Saddington</a></td>
<td>$1</td>
<td>Because that&#8217;s all Steve Job&#8217; needed for a salary.</td>
</tr>
<tr class="even">
<td><a href="http://tommcfarlin.com/">Tom McFarlin</a></td>
<td>$100K</td>
<td>For all the blogging he does.</td>
</tr>
<tr class="odd">
<td><a href="http://jarederickson.com/">Jared Erickson</a></td>
<td>$100M</td>
<td>Pictures are worth a thousand words, right? So Tom x 1,000.</td>
</tr>
<tr class="even">
<td><a href="http://chrisam.es/">Chris Ames</a></td>
<td>$100B</td>
<td>With hair like that?! Enough said&#8230;</td>
</tr>
</tbody>
</table>
<h2>Definition Lists</h2>
<dl>
<dt>Definition List Title</dt>
<dd>Definition list division.</dd>
<dt>Startup</dt>
<dd>A startup company or startup is a company or temporary organization designed to search for a repeatable and scalable business model.</dd>
<dt>#dowork</dt>
<dd>Coined by Rob Dyrdek and his personal body guard Christopher &#8220;Big Black&#8221; Boykins, &#8220;Do Work&#8221; works as a self motivator, to motivating your friends.</dd>
<dt>Do It Live</dt>
<dd>I&#8217;ll let Bill O&#8217;Reilly will <a title="Well Do It Live" href="https://www.youtube.com/watch?v=O_HyZ5aW76c">explain</a> this one.</dd>
</dl>
<h2>Unordered Lists (Nested)</h2>
<ul>
<li>List item one
<ul>
<li>List item one
<ul>
<li>List item one</li>
<li>List item two</li>
<li>List item three</li>
<li>List item four</li>
</ul>
</li>
<li>List item two</li>
<li>List item three</li>
<li>List item four</li>
</ul>
</li>
<li>List item two</li>
<li>List item three</li>
<li>List item four</li>
</ul>
<h2>Ordered List (Nested)</h2>
<ol>
<li>List item one
<ol>
<li>List item one
<ol>
<li>List item one</li>
<li>List item two</li>
<li>List item three</li>
<li>List item four</li>
</ol>
</li>
<li>List item two</li>
<li>List item three</li>
<li>List item four</li>
</ol>
</li>
<li>List item two</li>
<li>List item three</li>
<li>List item four</li>
</ol>
<h2>HTML Tags</h2>
<p>These supported tags come from the WordPress.com code <a title="Code" href="http://en.support.wordpress.com/code/">FAQ</a>.</p>
<p><strong>Address Tag</strong></p>
<address>1 Infinite Loop<br />
Cupertino, CA 95014<br />
United States</address>
<p><strong>Anchor Tag (aka. Link)</strong></p>
<p>This is an example of a <a title="Apple" href="http://apple.com">link</a>.</p>
<p><strong>Abbreviation Tag</strong></p>
<p>The abbreviation <abbr title="Seriously">srsly</abbr> stands for &#8220;seriously&#8221;.</p>
<p><strong>Acronym Tag</strong></p>
<p>The acronym <acronym title="For The Win">ftw</acronym> stands for &#8220;for the win&#8221;.</p>
<p><strong>Big Tag</strong></p>
<p>These tests are a <big>big</big> deal, but this tag is no longer supported in HTML5.</p>
<p><strong>Cite Tag</strong></p>
<p>&#8220;Code is poetry.&#8221; &#8211;<cite>Automattic</cite></p>
<p><strong>Code Tag</strong></p>
<p>You will learn later on in these tests that <code>word-wrap: break-word;</code> will be your best friend.</p>
<p><strong>Delete Tag</strong></p>
<p>This tag will let you <del>strikeout text</del>, but this tag is no longer supported in HTML5 (use the <code>&lt;strike&gt;</code> instead).</p>
<p><strong>Emphasize Tag</strong></p>
<p>The emphasize tag should <em>italicize</em> text.</p>
<p><strong>Insert Tag</strong></p>
<p>This tag should denote <ins>inserted</ins> text.</p>
<p><strong>Keyboard Tag</strong></p>
<p>This scarsly known tag emulates <kbd>keyboard text</kbd>, which is usually styled like the <code>&lt;code&gt;</code> tag.</p>
<p><strong>Preformatted Tag</strong></p>
<p>This tag styles large blocks of code.</p>
<pre>.post-title {
  margin: 0 0 5px;
  font-weight: bold;
  font-size: 38px;
  line-height: 1.2;
}</pre>
<p><strong>Quote Tag</strong></p>
<p><q>Developers, developers, developers&#8230;</q> &#8211;Steve Ballmer</p>
<p><strong>Strong Tag</strong></p>
<p>This tag shows <strong>bold<strong> text.</strong></strong></p>
<p><strong>Subscript Tag</strong></p>
<p>Getting our science styling on with H<sub>2</sub>O, which should push the &#8220;2&#8243; down.</p>
<p><strong>Superscript Tag</strong></p>
<p>Still sticking with science and Isaac Newton&#8217;s E = MC<sup>2</sup>, which should lift the 2 up.</p>
<p><strong>Teletype Tag</strong></p>
<p>This rarely used tag emulates <tt>teletype text</tt>, which is usually styled like the <code>&lt;code&gt;</code> tag.</p>
<p><strong>Variable Tag</strong></p>
<p>This allows you to denote <var>variables</var>.</p>';

}


function _feature_wysiwyg_editor_theme_images() {
  $path = '/' .  drupal_get_path('module','feature_wysiwyg_editor');
  return '  <p><span style="line-height: 1.714285714; font-size: 1rem;">Welcome to image alignment! The best way to demonstrate the ebb and flow of the various image positioning options is to nestle them snuggly among an ocean of words. Grab a paddle and let&#8217;s get started.</span></p>
<p>On the topic of alignment, it should be noted that users can choose from the options of <em>None</em>, <em>Left</em>, <em>Right, </em>and <em>Center</em>. In addition, they also get the options of <em>Thumbnail</em>, <em>Medium</em>, <em>Large</em> &amp; <em>Fullsize</em>.</p>
<p style="text-align: center;"><img class="size-full wp-image-906 aligncenter" title="Image Alignment 580x300" alt="Image Alignment 580x300" src="' . $path . '/img/image-alignment-580x300.jpg" width="580" height="300" /></p>
<p>The image above happens to be <em><strong>centered</strong></em>.</p>
<p><strong><img class="size-full wp-image-904 alignleft" title="Image Alignment 150x150" alt="Image Alignment 150x150" src="' . $path . '/img/image-alignment-150x150.jpg" width="150" height="150" /></strong>The rest of this paragraph is filler for the sake of seeing the text wrap around the 150&#215;150 image, which is <em><strong>left aligned</strong></em>. <strong></strong></p>
<p>As you can see the should be some space above, below, and to the right of the image. The text should not be creeping on the image. Creeping is just not right. Images need breathing room too. Let them speak like you words. Let them do their jobs without any hassle from the text. In about one more sentence here, we&#8217;ll see that the text moves from the right of the image down below the image in seamless transition. Again, letting the do it&#8217;s thang. Mission accomplished!</p>
<p>And now for a <em><strong>massively large image</strong></em>. It also has <em><strong>no alignment</strong></em>.</p>
<p><img class="alignnone  wp-image-907" title="Image Alignment 1200x400" alt="Image Alignment 1200x400" src="' . $path . '/img/image-alignment-1200x4002.jpg" width="1200" height="400" /></p>
<p>The image above, though 1200px wide, should not overflow the content area. It should remain contained with no visible disruption to the flow of content.</p>
<p><img class="size-full wp-image-905 alignright" title="Image Alignment 300x200" alt="Image Alignment 300x200" src="' . $path . '/img/image-alignment-300x200.jpg" width="300" height="200" /></p>
<p>And now we&#8217;re going to shift things to the <em><strong>right align</strong></em>. Again, there should be plenty of room above, below, and to the left of the image. Just look at him there&#8230; Hey guy! Way to rock that right side. I don&#8217;t care what the left aligned image says, you look great. Don&#8217;t let anyone else tell you differently.</p>
<p>In just a bit here, you should see the text start to wrap below the right aligned image and settle in nicely. There should still be plenty of room and everything should be sitting pretty. Yeah&#8230; Just like that. It never felt so good to be right.</p>
<p>And just when you thought we were done, we&#8217;re going to do them all over again with captions!</p>';
}


function _feature_wysiwyg_editor_theme_video() {
  $text = '<h2>Youtube</h2><p>http://www.youtube.com/watch?v=zlfKdbWwruY</p>
    <p>http://www.youtube.com/watch?v=Pwe-pA6TaZk</p>
  ';
  if (function_exists('_feature_wysiwyg_editor_process')) {
    return  _feature_wysiwyg_editor_process($text, null);
  }
  return  $text;
}
