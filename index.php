<?php
	$json = file_get_contents('content.json');
	$data = json_decode($json, TRUE);
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gocyeuthuong.net | Góc nhỏ để yêu thương</title>
	<meta name="description" content="Góc nhỏ để yêu thương | Truyện ngắn | Blog tình yêu">
	<meta name="keywords" content="Góc nhỏ để yêu thương | Truyện ngắn | Blog tình yêu">
	<style type="text/css">
		body {
			margin: 0;
			text-align: center;
		}

		iframe {
			vertical-align: top;
			max-width: 100%;
			margin: 5px;
		}

		img {
			max-width: 100%;
			height: auto;
		}

		.content,
		.sidebar {
			padding: 10px 5px;
			display: inline-block;
			vertical-align: top;
			max-width: 100%;
		}

		.content {
			max-width: 740px;
		}

		.sidebar {
			width: 350px;
			background: #eee;
			margin-top: 17px;
		}

		.footer {
			background: #456;
			padding: 10px;
		}

		.footer a {
			color: #FFF;
			text-decoration: none;
		}

		.list-post {
			text-align: left;
		}

	</style>
</head>
<body>
	<div class="banner desktop-only">
		<a href="https://www.facebook.com/gocyeuthuong.net/" target="_blank">
		  <img src="banner.jpg" alt="Góc yêu thương | Góc nhỏ để yêu thương" title="Góc yêu thương | Góc nhỏ để yêu thương">
		</a>
	</div>

	<div class="main-content">
		<div class="content">
		<?php 
			foreach ($data['ids'] as $item) {
				print '<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fgocyeuthuong.net%2Fposts%2F'.$item["id"].'%3A0&width=350" width="350" height="529" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>';
				
			}
		?>
		</div>

		<div class="sidebar">
		<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fgocyeuthuong.net%2F&tabs&width=340&height=70&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=292300460886432" width="340" height="70" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

			<ul class="list-post">
			<?php 
				foreach ($data['ids'] as $item) {
					print '<li><a href="https://www.facebook.com/gocyeuthuong.net/posts/'.$item["id"].'">'.$item["title"].'</a></li>';
				}
			?>
			</ul>
		</div>
	</div>

	<div class="footer">
		<a href="https://www.facebook.com/gocyeuthuong.net" target="_blank" title="Gocyeuthuong on Facebool">GocYeuThuong.Net © 2017 </a>
	</div>
</body>
</html>
