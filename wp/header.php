echo '<!DOCTYPE html>
<html amp lang="id">
<head>
<script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
<script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="yellow" />
<meta name="msapplication-navbutton-color" content="yellow" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="yellow" />
<link rel="profile" href="http://gmpg.org/xfn/11" />';
  ?>
<?php if (is_singular() && pings_open(get_queried_object())) : ?>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php endif; ?>
<?php wp_head(); ?>
	<style>
    html {
    cursor: url(https://nagacdn.netlify.app/css/pesawat.ani), url(https://nagacdn.netlify.app/css/pesawat.png), auto;
    }
.widget_archive li a, .widget_categories li a, .widget_pages li a, .widget_meta li a, .widget_nav_menu li a, .widget_rss li {
    font-weight: bold;
	display: inline-grid;
    padding: 5px 0;
	}	
@media (min-width: 768px){
.navbar-brand {
    display: table-cell;
    float: none;
    position: relative;
    height: auto;
    min-height: 100px;
    font: 700 32px/1 "Roboto", Verdana, sans-serif;
    text-align: center;
    vertical-align: middle;
    -webkit-transition: color 0.3s ease;
    transition: color 0.3s ease;
}	
.col-sm-3 {
    width: 3%;
}
.bfastmag-a-d-v {
    display: table-cell;
    float: none;
    text-align: right;
    vertical-align: middle;
	padding-right: 7px;
}
.col-sm-9 {
	width: 10%;
    padding-right: 3%;
}
}

@media (max-width: 760px){
.bfastmag-a-d-v {
	background: yellow;
	padding: 7px;}
.mh-main-nav, .mh-main-nav-wrap {
	display: none;
}
	}
.mh-copyright-wrap {
    text-align: center;
}	
h1, h2, h3 { text-transform: capitalize; }		
.mh-widget .search-form {
    background: #eaea98;
}
.mh-main-nav, .mh-main-nav-wrap {
    background: linear-gradient(to right,#f70c07,#ff6900);
    border-bottom: none;
}
a { color: #057d19; }
.widget_archive li, .widget_categories li, .widget_pages li a, .widget_meta li, .widget_nav_menu .menu>li, .widget_rss li {
    border-bottom: 1px dotted #0f8fff;
}
.widget_recent_entries li, .recentcomments {
    border-bottom: 1px dashed #cf2e2e;
}
article { text-align: justify; }
#ad { padding-bottom: 3px; }
	</style>
</head>
<body id="mh-mobile" <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php mh_before_header();
get_template_part('content', 'header');
mh_after_header(); ?>

	
