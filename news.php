<?php
require_once("config.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="el">
<?php include('webkit/head'); ?>
<body class="single single-post postid-38 single-format-standard">
<?php include("webkit/servicebar") ?>
<link rel="stylesheet" href="assets/themes/arkgr/css/red_css/post.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<link rel="stylesheet" href="assets/themes/arkgr/css/red_css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<div id="main_wrapper">
<?php include('webkit/social'); ?>
<div id="main_in">
<?php include('webkit/menu'); ?>
<div id="main_news_wrapper">
<div id="row">
<div id="left_wrapper">
<div class="header">
<h2>
<?php
$sql_n = "SELECT * FROM main_news WHERE id = '".$_GET["id"]."'";
if (!$arkcon->set_charset("utf8")) {
printf("Error loading character set utf8: %s\n", $arkcon->error);
} else {}
$news = mysqli_query($arkcon,$sql_n)or die(mysqli_error());
while($row_n = mysqli_fetch_array($news)) {
$id = $row_n['id'];
$title = $row_n['title'];
$author = $row_n['author'];
$date = $row_n['date'];
$content = $row_n['content'];
$content_ink = $row_n['contentlnk'];
$blockquote = $row_n['blockquote'];
$content = $row_n['content'];
$comments = $row_n['comments'];
$image = $row_n['image'];
$from = $row_n['from'];
$continue = $row_n['continue'];
echo '
<a href="index.php">Home</a> // <a href="index.php">NEWS</a>  // '.$title.'</h2>
</div>
<div id="post_wrapper">
<div id="header">
<div class="info">
<h2>'.$title.'</h2>  
<div class="date_n_author">'.$from.' '.$author.' &gt; στα <a href="#">Νέα</a> - '.$date.'</div>
</div>
<div class="image">
<div class="comments">
<a href="news.php?id='.$content_ink.'">'.$comments.'</a></div>
<div class="img_in">
<img width="900" height="637" src="assets/uploads/2013/01/'.$image.'-big.png" class="attachment-post-thumbnail wp-post-image" alt="5"></div>
</div>
</div>
<div id="body">
<p></p>
<p>'.$content.'</p>
<blockquote><p>'.$blockquote.'</p></blockquote>
<p></p>
<p></p>
</div>
<div id="response">
<div class="header">'.$comments.' Σχόλια<span> στό "<span class="cyan">'.$title.'</span>"</span></div>
<div id="comments">
';
}
?>
<div id="respond">
<div class="header">Αφίστε ένα Σχόλιο</div>
<div class="cancel-comment-reply" style="margin-top:50px;margin-right:20px;" align="center">
<small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Click here to cancel reply.</a></small>
</div>
<small><a rel="nofollow" id="cancel-comment-reply-link" href="#">Τα Σχόλια σύντομα κοντά σας!</a></small>

<!--<form action="" method="post" id="commentform"><div id="comment-status"></div>

<div class="form_left">

<label>Name <small><em>(required)</em></small></label>
<input type="text" name="author" id="author" value="" size="22" tabindex="1" class="text-input">
 <label>Email  <small>(required)</small></label>
<input type="text" name="email" id="email" value="" size="22" tabindex="2" class="text-input">
 <label>Website </label>
<input type="text" name="url" id="url" value="" size="22" tabindex="3">
 </div>


/*<p><small><strong>XHTML:</strong> You can use these tags: <code>&lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=&quot;&quot;&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=&quot;&quot;&gt; &lt;s&gt; &lt;strike&gt; &lt;strong&gt; </code></small></p>
 */
  <div class="form_right">
	  <p class="text">
     <label>Your Message <small><em>(required)</em></small></label>
<textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4" class="text-input"></textarea></p></div>

<div class="form_submit"><input name="submit" type="submit" id="submit" tabindex="5" value="post" class="read_more2">
<input type="hidden" name="comment_post_ID" value="38" id="comment_post_ID">
<input type="hidden" name="comment_parent" id="comment_parent" value="0">
</div>

</form>-->

</div>
</div><!-- #comments -->
</div>
<!-- Leave a response end -->
<div class="clear"></div>
</div>
</div>
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