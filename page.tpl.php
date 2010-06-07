<?php // $Id: page.tpl.php,v 1.1.2.5.2.6 2009/03/12 13:24:30 psynaptic Exp $ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
<title><?php print $head_title ?></title>
<meta http-equiv="content-language" content="<?php print $language->language ?>" />
<?php print $head ?><?php print $styles ?><?php print $scripts ?>
<!--[if IE]><link rel="stylesheet" href="<?php print $path ?>ie.css" type="text/css"><![endif]-->
<!--[if lte IE 6]><link rel="stylesheet" href="<?php print $path ?>ie6.css" type="text/css"><![endif]-->
</head>
<body class="<?php print $body_classes ?>">
<div id="wrapper">
  <div id="header">
    <?php if ($header || $site_slogan): ?>
    <div id="header-right"> <?php print $header ?>
      <?php if ($primary_links): ?>
      <div id="header-nav"> <?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?> </div>
        <?php endif ?>
		<?php if ($site_slogan): ?>
		<span id="slogan"><?php print $site_slogan ?></span>
		<?php endif ?>
    </div>
    <?php endif ?>
    <?php if ($logo): ?>
    <a id="logo" href="<?php print $base_path ?>"> <?php print theme('image', $logo) ?> </a>
    <?php endif ?>
    <?php if ($site_name): ?>
    <h1> <a id="site-name" href="<?php print $base_path ?>"> <?php print $site_name ?> </a> </h1>
    <?php endif ?>
  </div>
  <!-- //Header -->
    <?php if ($secondary_links) : ?>
    <div id="navigation">
    <?php print theme('links', $secondary_links, array('class' => 'links secondary-links')) ?>
    </div>
    <?php endif ?>
  <?php print $breadcrumb ?>
  <?php if ($rotato): ?>
  <div id="rotato"><?php print $rotato ?></div>
  <?php endif ?>
  <?php if ($search_box): ?>
  <div id="search">
	<?php print $search_box ?>
  </div>
  <?php endif ?>
  <div id="content">
      <div id="main">
	  <?php print $messages ?>
      <?php if ($tabs): ?>
      <div class="tabs"><?php print $tabs ?></div>
      <?php endif ?>
      <?php print $help ?>
	  <?php if (!$is_front): ?>
      <?php if ($title): ?>
      <h1 class="page-title"><?php print $title ?></h1>
      <?php endif ?>
	  <?php print $content ?>
	  <?php endif ?>

  	</div><!--// main -->
      <?php if ($left): ?>
      <div id="left_col" class="column">
      <?php print $left ?>
      </div>
      <?php endif ?>
      <?php if ($center): ?>
      <div id="center_col" class="column">
      <?php print $center ?>
      </div>
      <?php endif ?>
      <?php if ($right): ?>
      <div id="right_col" class="column">
      <?php print $right ?>
      </div>
      <?php endif ?>
    <div class="spacer"></div>
  <?php if ($footer || $footer_message): ?>
  <div id="footer">
    <h3>Powered by: Drupal Latinamerica</h3>
	  <?php print $footer ?>
      <?php print $footer_message ?>
  	  <?php print $feed_icons ?>
  </div>
  <?php endif ?>
  </div>
  <!--// content -->
</div>
<!--// wrapper -->
<?php print $closure ?>
</body>
</html>
