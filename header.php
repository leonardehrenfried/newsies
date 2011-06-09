<!doctype html>
<html <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&#8211;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime(get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />
<link rel="stylesheet" 
    href="<?php bloginfo('stylesheet_directory'); echo '/print.css?'.filemtime(get_stylesheet_directory().'/print.css'); ?>" type="text/css" media="print" />
<?php wp_enqueue_script("jquery"); ?>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="alternate" href="<?php bloginfo('rss2_url'); ?>" type="application/rss+xml" />

<?php wp_head(); ?>

<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/cufon.js"></script>

</head>
<body <?php body_class(); ?>>
  
  
  <div id="frame">
  
  <nav>
    <ul>
      <?php wp_list_pages('title_li=&depth=1');?>
      <li><a href="<?php bloginfo('rss2_url'); ?>">Feed</a></li>
    </ul>
  </nav>
  

  <div class="title">
    <h1>
      <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
    </h1>
  
    <p class="description"><?php bloginfo('description'); ?></p>
    <div class="clear"></div>
  </div>

<div id="main">
  <div class="hr"></div>
<!--end header.php-->
