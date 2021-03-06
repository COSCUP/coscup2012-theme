<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>"><head>

	<title><?php print $head_title; ?></title>

<?php 	print $head;
//	print $styles;
//	print $scripts;
?>
<!-- COSCUP 2011 -->
<link rel="stylesheet" type="text/css" href="http://coscup.org/2011-theme/assets/mobile.css" media="handheld, screen and (max-width: 480px)" />
<link rel="stylesheet" type="text/css" href="http://coscup.org/2011-theme/assets/style.css" media="print, screen and (min-width: 481px)" />
<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="http://coscup.org/2011-theme/assets/style.css" media="print, screen"/><![endif]-->
<meta name="viewport" content="width=device-width" />
<meta property="og:image" content="http://coscup.org/2011-theme/assets/coscup.png" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="apple-touch-fullscreen" content="yes" />
<link rel="apple-touch-icon" href="http://coscup.org/2011-theme/assets/coscup-icon-iphone.png" />
<link rel="apple-touch-icon" sizes="72x72" href="http://coscup.org/2011-theme/assets/coscup-icon-ipad.png" />
<link rel="apple-touch-icon" sizes="114x114" href="http://coscup.org/2011-theme/assets/coscup-icon-iphone4.png" />
</head>

<body class="<?php print $body_classes; ?>">
<div id="header">
	<div class="info">
		<h1><a href="http://coscup.org/2011/" title="首頁">COSCUP</a></h1>
		<p id="title">開源人年會</p>
		<p id="title_en">Conference for Open Source <span id="coders">Coders</span>, <span id="users">Users</span> and <span id="promoters">Promoters</span></p>
		<p id="date_place" title="2011 年 8 月 20 – 21 日"><span id="date">8/20 – 21, 2011</span><span id="place">台灣台北</span></p>
		<div id="nav" class="empty">
		<!-- 上面的 class="empty" 會觸發 script 拉遠端資料顯示 -->
		</div>
		<!--
		<div id="language">
			<ul>
				<li><a href="#" title="English" lang="en">English</a></li>
				<li><a href="#" title="正體中文" lang="zh-TW">正體中文</a></li>
				<li><a href="#" title="简体中文" lang="zh-CN">简体中文</a></li>
			</ul>
		</div>
		-->
		<div id="message">
			<p>Come on rock with <em>Gadgets beyond Smartphones</em>!</p>
		</div>
		<p id="mascot_icon"></p>
		<div id="connect_box">
			<ul>
				<li><a title="加到 Google 日曆" target="_blank" href="https://www.google.com/calendar/event?action=TEMPLATE&amp;text=COSCUP+2011&amp;dates=20110820T010000Z/20110821T100000Z&amp;details=http%3A%2F%2Fcoscup.org/2011/&amp;trp=true&amp;sprop=http%3A%2F%2Fcoscup.org/2011/&amp;sprop=name:COSCUP"><span class="sprite gcal"></span></a></li>
				<li><a title="訂閱電子報" target="_blank" href="http://coscup.org/2011/zh-tw/contact/#subscribe"><span class="sprite newspaper"></span></a></li>
				<li><a title="Facebook 粉絲團" href="https://www.facebook.com/coscup" target="_blank"><span class="sprite facebook"></span></a></li>
				<li><a title="Twitter" href="https://twitter.com/coscup" target="_blank"><span class="sprite twitter"></span></a></li>
				<li><a title="噗浪" href="http://www.plurk.com/coscup" target="_blank"><span class="sprite plurk"></span></a></li>
				<li><a title="Flickr" href="http://www.flickr.com/photos/coscup/" target="_blank"><span class="sprite flickr"></span></a></li>
				<li><a title="YouTube" href="http://www.youtube.com/user/thecoscup" target="_blank"><span class="sprite youtube"></span></a></li>
				<li><a title="部落格 RSS Feed" href="http://feeds.feedburner.com/coscup" target="_blank"><span class="sprite rss"></span></a></li>
			</ul>
		</div>
	</div>
</div>
	
<div id="content">

<?php  if ($tabs) { ?>
	<div class="nav tabs">
<?php	print $tabs; ?>
	</div>
<?php  } ?>

<?php	if ($show_messages && $messages)
		 print $messages;
?>

<?php	print $content; ?>
			
</div>

<div id="sidebar"> 
	<div class="sponsors empty"> 
		<!-- 上面的 class="empty" 會觸發 script 拉遠端資料顯示 --> 
	</div> 
</div>
<div id="footer">
	<div class="info">
		<p id="copyright">&copy; 2011 COSCUP. <a href="http://coscup.org/2011/contact">Contact us</a>.</p>
		<p id="tagline">We <span class="heart">(heart)</span> Open.</p>
		<p id="archives">
			<a href="http://coscup.org/2006/">2006</a>
			<span class="separator"> | </span><a href="http://coscup.org/2007/">2007</a>
			<span class="separator"> | </span><a href="http://coscup.org/2008/">2008</a>
			<span class="separator"> | </span><a href="http://coscup.org/2009/">2009</a>
			<span class="separator"> | </span><a href="http://coscup.org/2010/">2010</a>
		</p>
	</div>
</div>

<?php print $closure; ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript" src="http://coscup.org/2011-theme/assets/script.js"></script>
</body></html>
