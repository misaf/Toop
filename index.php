<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="images/favicon.ico">
		<title>پایگاه اطلاع رسانی ورزشی توپ</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.min.css" rel="stylesheet">
		<link href="css/carousel.min.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

<body>
	<!-- Begin page content -->
	<div class="container">
		<div class="page-header text-danger">
			<h1>پایگاه اطلاع رسانی خبری توپ</h1><h4><small>برترین مرجع رسمی اخبار ورزشی</small></h4>
		</div>
		<div class="row">
			<div class="col-md-7 pull-left">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img src="images/pele1.jpg">
					</div>
					<div class="item">
						<img src="images/pele2.jpg">
					</div>
					<div class="item">
						<img src="images/messi1.jpg">
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
			</div>
			<div class="col-md-5 pull-right">
				<div class="panel panel-info">
					<div class="panel-heading">اخبار روز دنیای ورزش</div>
					<div class="panel-body">
						<?php
							$rss = new DOMDocument();
							$rss->load('http://www.varzesh3.com/rss/');
							$feed = array();
							foreach ($rss->getElementsByTagName('item') as $node) {
							$item = array (
								'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
								'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
								'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
							);
							array_push($feed, $item);
							}
							$limit = 3;
							for($x=0;$x<$limit;$x++){
								$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
								$link = $feed[$x]['link'];
								$description = $feed[$x]['desc'];
								echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
								echo '<p>'.$description.'</p>';
							}
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="well"><span class="glyphicon glyphicon-bell"></span>&nbsp;&nbsp;جدیدترین خبرهای ورزشی روز دنیا را از ما بخواهید</div>
		<div class="row">
			<div class="col-md-6 pull-left">
				<div class="panel panel-danger">
					<div class="panel-heading"><span class="glyphicon glyphicon-globe"></span>&nbsp;&nbsp;آخرین اخبار ورزشی</div>
					<div class="panel-body">
						<?php
							$rss = new DOMDocument();
							$rss->load('http://www.farsnews.com/rss.php?srv=4');
							$feed = array();
							foreach ($rss->getElementsByTagName('item') as $node) {
							$item = array (
							'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
							'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
							'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
							);
							array_push($feed, $item);
							}
							$limit = 5;
							for($x=0;$x<$limit;$x++) {
							$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
							$link = $feed[$x]['link'];
							$description = $feed[$x]['desc'];
							echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
							echo '<p>'.$description.'</p>';
							}
						?>
					</div>
				</div>
			</div>
			<div class="col-md-6 pull-right">
				<div class="panel panel-danger">
					<div class="panel-heading"><span class="glyphicon glyphicon-globe"></span>&nbsp;&nbsp;آخرین اخبار فوتبال</div>
					<div class="panel-body">
						<?php
							$rss = new DOMDocument();
							$rss->load('http://www.shahrekhabar.com/rss.jsp?type=8');
							$feed = array();
							foreach ($rss->getElementsByTagName('item') as $node) {
							$item = array (
							'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
							'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
							'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
							);
							array_push($feed, $item);
							}
							$limit = 7;
							for($x=0;$x<$limit;$x++) {
							$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
							$link = $feed[$x]['link'];
							$description = $feed[$x]['desc'];
							echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
							echo '<p>'.$description.'</p>';
							}
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 pull-left">
				<div class="panel panel-success">
					<div class="panel-heading"><span class="glyphicon glyphicon-globe"></span>&nbsp;&nbsp;جدول نتایج جام جهانی والیبال</div>
					<div class="panel-body">
						<center>
							<p><script src="http://www.varzesh3.com/standingforsites.do?league=IranBartar&a2header=FFFFFF&aheader=FFFFFF&trheader=FFFFFF&row1=FFFFFF&tr2header=686868&row2=DBDBDB&width=410&show=1111111111&border=0&bc=DBDBDB" type="text/javascript" language="javascript"></script><div style="display:none;"></div></p>
						</center>
					</div>
				</div>
			</div>
			<div class="col-md-6 pull-right">
				<div class="panel panel-success">
					<div class="panel-heading"><span class="glyphicon glyphicon-globe"></span>&nbsp;&nbsp;جدول نتایج جام جهانی</div>
					<div class="panel-body">
						<center>
							<p><script src="http://www.varzesh3.com/standingforsites.do?league=IranBartar&a2header=FFFFFF&aheader=FFFFFF&trheader=FFFFFF&row1=FFFFFF&tr2header=686868&row2=DBDBDB&width=410&show=1111111111&border=0&bc=DBDBDB" type="text/javascript" language="javascript"></script><div style="display:none;"></div></p>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>