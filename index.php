<?php
require_once("config.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="el">
<?php include('webkit/head'); ?>
<bodyclass="home blog">
<?php include("webkit/servicebar") ?>
<link rel="stylesheet" href="assets/themes/arkgr/css/red_css/post.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<link rel="stylesheet" href="assets/themes/arkgr/css/red_css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<div id="main_wrapper">
<?php include('webkit/social'); ?>
<div id="main_in">
<div id="menu_wrapper">
<div id="menu_left"></div>
<ul id="menu">
<div class="menu-main-container"><ul id="menu-main" class="menu">
<li id="menu-item-1306" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-1306"><a href="index.html">Home</a></li>
<li id="menu-item-1285" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1285"><a href="#">Upcoming Features</a>
<ul class="sub-menu" style="visibility: hidden;">
<li id="menu-item-1286" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1286"><a href="#">Wiki</a></li>
<li id="menu-item-1287" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1287"><a href="#">Forum</a></li>
<li id="menu-item-1288" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1288"><a href="#">Guides</a></li>
</ul>
</li>
</li>
</ul>
</div>
</ul>
<a href="#" id="pull">Menu</a>
<div id="menu_right"></div>
<div class="clear"></div>
</div>
<!-- Video -->
<script type="text/javascript">var lsjQuery = jQuery;</script>
<script type="text/javascript"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == "undefined") { lsShowNotice('layerslider_1','jquery'); } else { lsjQuery("#layerslider_1").layerSlider({responsiveUnder: 1000, layersContainer: 960, skinsPath: 'http://skywarriorthemes.com/orizon/wp/wp-content/plugins/layerslider/static/skins/'}) } }); </script>
<div style="width:960px;height:350px;margin:0 auto;margin-bottom: 0px;margin-left: 1px;">
<iframe id="layerslider_1" class="ls-wp-container" style="width:958px;height:376px;margin:0 auto;margin-bottom: 0px;" class="embed-responsive-item" id="ytplayer" type="text/html" src="https://www.youtube.com/embed/FW9vsrPWujI?&vq=hd1080&hd=1&autoplay=0&loop=1&rel=0&fs=1&showinfo=0&color=white&iv_load_policy=3&playlist=FW9vsrPWujI" frameborder="0" allowfullscreen></iframe>
</div>
<!-- Video -->
<div id="hot_news">
<div class="header">
<h2 id="hot_news_title"><span>ARK GR //&nbsp;</span>PATCHES </h2> 
</div><!-- Previous and next selector -->
<a id="prev" class="prev" href="#" name="prev">
<img alt="alt_example" src="assets/themes/arkgr/css/red_css/images/blank.gif" width="21" height="33" border="0"></a>
<a id="next" class="next" href="#" name="next">
<img alt="alt_example" src="assets/themes/arkgr/css/red_css/images/blank.gif" width="21" height="33" border="0"></a>
<ul id="hot_news_box">
<?php
$sql = "SELECT * FROM hot_news";
/* Changing the character set to utf8 for Greek Display*/
if (!$arkcon->set_charset("utf8")) {
printf("Error loading character set utf8: %s\n", $arkcon->error);
} else {}
$result = mysqli_query($arkcon,$sql)or die(mysqli_error());
while($row = mysqli_fetch_array($result)) {
$id = $row['id'];
$title = $row['title'];
$img = $row['img'];
$content = substr(strip_tags($row['content']),0,290);
$comments = $row['comments'];
echo '
<li>
<h2>
<a href="#"><i class="icon-gears"></i> '.$title.'</a>
</h2><div class="image">
<a href="#"><img width="120" height="120" src="assets/uploads/2013/01/'.$img.'.png" class="attachment-120x120 wp-post-image" alt="'.$id.'" /></a>
</div><div class="content">
<p>'.$content.'...</p>
<div class="info">
<span class="comment_count"><a href="#">'.$comments.' Σχόλια</a></span>
<a href="#" class="read_more">Συνέχεια</a>
</div>
</div>
</li>
';
}
?>
</ul>
</div>
<div id="main_news_wrapper">
<div id="row">
<!-- Left wrapper Start -->
<div id="left_wrapper">
<div class="header">
<h2> <span>ARK GR //&nbsp;</span>NEWS</h2>
</div>
<?php include("webkit/news"); ?>
<ul id="pager">
<li>
<li><a href='#' class='active'>1</a></li>
<li><a href='#' class='inactive' >2</a></li>
<li><a href='#' ><img class='right' src=assets/themes/arkgr/css/red_css/images/right_pager.jpg></a></li>
</li>
</ul>
<div class="clear"></div>
</div><!-- Left wrapper end -->
<div id="right_wrapper">
<?php include('webkit/recposts'); ?>
<div class="right_navi">
<?php include('webkit/downld'); ?>
<div class="bootom_image">
</div>
</div>
<div class="right_navi">
<?php include('webkit/comments'); ?>
<div class="bootom_image">
</div>
</div>
<div class="right_navi">
<?php include('webkit/facebook'); ?>
<div class="bootom_image"></div>
</div>
<?php include('webkit/categories'); ?>
</div>
<div class="clear"></div>
</div>
</div><div class="bottom_shadow"></div>
<div class="main_advert">
<a target="_blank" href="#"><img src="assets/uploads/2014/05/700x90banner2.png" /></a>
</div>
<?php include('webkit/footer'); ?>
<div class="clear"></div>
<?php mysqli_close($arkcon); ?>
<?php include('webkit/footscripts'); ?>
</body>
</html>