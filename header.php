<!doctype html>
<html <?php language_attributes(); ?>>

<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&#8211;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime(get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />
<link rel="stylesheet"
    href="<?php bloginfo('stylesheet_directory'); echo '/print.css?'.filemtime(get_stylesheet_directory().'/print.css'); ?>" type="text/css" media="print" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<?php
      if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
?>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="alternate" href="<?php bloginfo('rss2_url'); ?>" type="application/rss+xml" />

<?php wp_head(); ?>

<link href='http://fonts.googleapis.com/css?family=Goudy+Bookletter+1911' rel='stylesheet' type='text/css'>

</head>
<body <?php body_class(); ?>>

  <div id="frame">

  <div id='influads_block' class='influads_block'></div><script type='text/javascript'>(function(){var acc='acc_963d701_pub';var st='css';var or='130';var e=document.getElementsByTagName('script')[0];var d=document.createElement('script');d.src=('https:' == document.location.protocol ?'https://' : 'http://') +'engine.influads.com/show/'+or+'/'+st+'/'+acc;d.type='text/javascript';d.async=true;d.defer=true; e.parentNode.insertBefore(d,e);})();</script>

  <nav>
    <ul>
      <?php wp_list_pages('title_li=&depth=1');?>
      <li><a href="<?php bloginfo('rss2_url'); ?>">Feed</a></li>
    </ul>
  </nav>


  <div class="title">
    <h1>
      <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
    </h1>

    <p class="description"><?php bloginfo('description'); ?></p>
  </div>

<div id="main">
  <div class="hr"></div>
<!--end header.php-->
