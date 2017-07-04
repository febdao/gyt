<?php
	$json = file_get_contents('content.json');
	$data = json_decode($json, TRUE);
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gocyeuthuong.net | Góc nhỏ để yêu thương</title>
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<meta name="description" content="Góc nhỏ để yêu thương | Truyện ngắn | Blog tình yêu">
	<meta name="keywords" content="Góc nhỏ để yêu thương | Truyện ngắn | Blog tình yêu">
	<meta property="fb:pages" content="421944548010384" />
	<link rel="stylesheet" href="style.css">

</head>
<body>
	<div class="banner desktop-only">
		<a href="https://www.facebook.com/gocyeuthuong.net/" target="_blank">
		  <img src="banner2.jpg" alt="Góc yêu thương | Góc nhỏ để yêu thương" title="Góc yêu thương | Góc nhỏ để yêu thương">
		</a>
	</div>

	<div class="main-content">
		<div class="grid js--grid">
			<div class="grid__item list--post sidebar">
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fgocyeuthuong.net%2F&tabs&width=340&height=70&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=292300460886432" width="340" height="70" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

				<h3>10 bài ngẫu nhiên</h3>
				<ul class="list-post">
				<?php
					$random_keys = array_rand($data['ids'], 10);

					// Random post
					for( $i = 0; $i<10; $i++ ) {
	            print '<li><a href="https://www.facebook.com/gocyeuthuong.net/posts/'.$data['ids'][$random_keys[$i]]["id"].'" target="_blank">⊹ '.$data['ids'][$random_keys[$i]]["title"].'</a></li>';
	         }

					// Get all post
					// foreach ($random_data['ids'] as $item) {
					// 	print '<li><a href="https://www.facebook.com/gocyeuthuong.net/posts/'.$item["id"].'">⊹ '.$item["title"].'</a></li>';
					// }
				?>
				</ul>
			</div>

			<?php
				foreach ($data['ids'] as $item) {
					print '<div class="grid__item">';
					print $item["iframe"];
					print '</div>';
				}
			?>

	</div>

	<div class="footer">
		<a href="http://gocyeuthuong.net" title="Gocyeuthuong">GocYeuThuong.Net © 2017 </a>
	</div>

	<script
	  src="https://code.jquery.com/jquery-1.12.4.min.js"
	  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
	  crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js" integrity="sha256-JklDYODbg0X+8sPiKkcFURb5z7RvlNMIaE3RA2z97vw=" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

	<script type="text/javascript" src="script.js"></script>

</body>
</html>
