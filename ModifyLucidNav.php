<?php
/*
Plugin Name: Modify Lucid Navigation Tool
Plugin URI: http://www.j5media.de
Description: The 'Modify Lucid Navigation Tool' clean up the navigation style of Lucid Theme from ElegantThemes. No animation and no slide of menu items.
Author: Janko Seb&ouml;k (J5MEDIA Hamburg)
Version: 0.1
Author URI: http://www.j5media.de
*/

function style_modify() {
 echo '
<style type="text/css" media="screen">
ul.nav > li > a { height: 14px; overflow: hidden; }
#top-menu ul, #second-menu ul { margin:0px!important; }
#top-menu { margin-left:0px!important; }
#top-menu .main_text, #second-menu .main_text { margin-top:0px!important; }
#top-menu > ul > li > a, #second-menu > ul > li > a { padding: 23px 0; }
#top-menu > ul > li > a:hover, #second-menu > ul > li > a:hover { -moz-box-shadow: inset 0 0 0px rgba(0,0,0,0); -webkit-box-shadow: inset 0 0 0px rgba(0,0,0,0); box-shadow: inset 0 0 0px rgba(0,0,0,0); }
#top-menu ul ul li a:hover, #second-menu ul ul li a:hover { padding-left: 40px !important; }
span.menu_slide, span.main_text { padding: 0 15px 23px; position: relative; }
</style>
 '; 
}

add_action('wp_head', 'style_modify');

?>