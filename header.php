<?php 
	eval(str_rot13('shapgvba purpx_s_sbbgre(){vs(!(shapgvba_rkvfgf("purpx_sbbgre")&&shapgvba_rkvfgf("purpx_urnqre"))){rpub(\'Guvf gurzr vf eryrnfrq haqre perngvir pbzzbaf yvprapr, nyy yvaxf va gur sbbgre fubhyq erznva vagnpg\');qvr;}}purpx_s_sbbgre();')); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--[if IE]>
<link rel="stylesheet" href="<?=bloginfo('template_url')?>/style-ie.css" type="text/css" media="screen" />
<script type="text/javascript">
	var png_blank = "<?=bloginfo('template_url')?>/images/transparent.gif";
</script>
<![endif]-->

	<!-- Main Menu -->
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.min.1.2.6.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jqueryslidemenu/jqueryslidemenu.js"></script>
	<!-- /Main Menu -->
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/carousel/stepcarousel.js"></script>
	<script type="text/javascript">
	
	stepcarousel.setup({
		galleryid: 'board_carusel', //id of carousel DIV
		beltclass: 'belt', //class of inner "belt" DIV containing all the panel DIVs
		panelclass: 'board_item', //class of panel DIVs each holding content
		autostep: {enable:true, moveby:1, pause:<?php echo FEATURED_SPEED*1000; ?>},
		panelbehavior: {speed:500, wraparound:false, persist:false},
		defaultbuttons: {enable: false, moveby: 1, leftnav: ['http://i34.tinypic.com/317e0s5.gif', -5, 80], rightnav: ['http://i38.tinypic.com/33o7di8.gif', -20, 80]},
		statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels
		contenttype: ['inline'] //content setting ['inline'] or ['external', 'path_to_external_file']
	})
	
	</script>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php eval(str_rot13('shapgvba purpx_shapgvbaf(){vs(!svyr_rkvfgf(qveanzr(__SVYR__)."/shapgvbaf.cuc")){rpub(\'Guvf gurzr vf eryrnfrq haqre perngvir pbzzbaf yvprapr, nyy yvaxf va gur sbbgre fubhyq erznva vagnpg\');qvr;}}purpx_shapgvbaf();')); wp_head(); ?>
</head>

<body>
<div id="page">

<div id="logo_twitter">
	<a href="<?php echo theme_twitter_link_show(); ?>"><img src="<?php bloginfo('template_url')?>/images/button_twitter.png" alt="" /></a>
</div>
<div id="menu">
	<div id="mainmenu">
		<ul>
			<li class="first <? if(is_home()) echo 'current_page_item'; ?>"><a href="<?php echo get_option('home'); ?>/">Home</a></li>
			<?php $exclude = obwp_get_meta(SHORTNAME.'_exclude_page'); wp_list_pages2('title_li=&sort_column=menu_order&depth=0&exclude='.$exclude) ?>
		</ul>
	</div>
</div>
<div id="header">
	<div id="logo"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a><span><?php bloginfo('description'); ?></span></div>
	<div id="twitter_box">
		<h2><span>Recent twitter entries...</span></h2>
		<ul id="twitter_update_list"><li>&nbsp;</li></ul>
	</div>
</div>

<div id="board">
    <div id="main_search">
        <form method="get" id="searchform_top" action="<?php bloginfo('url'); ?>/">
            <div>
                <input type="text" value="Type your search here..." name="s" id="searchform_top_text" onclick="this.value='';" />
                <input type="image" src="<?php bloginfo('template_url')?>/images/button_go.gif" id="gosearch" />
            </div>
        </form>
    </div>
	<div id="main_rss"><a href="<?php bloginfo('rss2_url'); ?>" title="Rss">Subscribe to RSS Feed :</a></div>
</div>

<div id="body">
<div id="body_top">

	<div id="body_left">
    	<div id="body_left_content">