<?php print $doctype; ?>
<!--[if IE 7]>     <html class="ie ie7 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 8]>     <html class="ie ie8 lte9 lte8"> <![endif]-->
<!--[if IE 9]>     <html class="ie ie9 lte9"> <![endif]-->
<!--[if gt IE 9]>  <html> <![endif]-->
<!--[if !IE]><!--> <html lang="<?php print $language->language; ?>">             <!--<![endif]-->
<head<?php print $rdf->profile; ?>>
  <?php print $head; ?>
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
  <link rel="icon" type="image/png" href="/favicon-196x196.png" sizes="196x196">
  <link rel="icon" type="image/png" href="/favicon-160x160.png" sizes="160x160">
  <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <meta name="msapplication-TileColor" content="#2b5797">
  <meta name="msapplication-TileImage" content="/mstile-144x144.png">
  <title><?php print $head_title; ?></title>  
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body<?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>