<?php
 
$title_error_404 = 'Không tìm thấy trang';
 
// Url bài viết
if (isset($_GET['sp']) && isset($_GET['id'])) {
    $slug_post = trim(htmlspecialchars($_GET['sp']));
    $id_post = trim(htmlspecialchars($_GET['id']));
 
    // Kiểm tra bài viết tồn tại
    $sql_check_post = "SELECT id_post, slug, title FROM posts WHERE slug = '$slug_post' AND id_post = '$id_post'";
    if ($db->num_rows($sql_check_post)) {
        $data_post = $db->fetch_assoc($sql_check_post, 1);
 
        $title = $data_post['title'];
        // ...
    } else {
        $title = $title_error_404;
    }
// Url chuyên mục
} else if (isset($_GET['sc'])) {
    $slug_cate = trim(htmlspecialchars($_GET['sc']));
 
    // Kiểm tra chuyên mục tồn tại
    $sql_check_cate = "SELECT url, label FROM categories WHERE url = '$slug_cate'";
    if ($db->num_rows($sql_check_cate)) {
        $data_cate = $db->fetch_assoc($sql_check_cate, 1);
 
        $title = $data_cate['label'];
        // ...
    } else {
        $title = $title_error_404;
    }
} else {
    $title = $data_web['title'];
    // ...
}
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
    <title><?php echo $title; ?>Trường thi</title>
    <link rel="shortcut icon" href="Images/icon/favicon.png"/>
	<link type="text/css" rel="stylesheet" href="<?php echo $_DOMAIN; ?>css/style.css">
	<link type="text/css" rel="stylesheet" href="<?php echo $_DOMAIN; ?>css/main.css">
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="css/jquery-fancybox-134.css">
	<script language="javascript" type="text/javascript" src="<?php echo $_DOMAIN; ?>js/jquery.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo $_DOMAIN; ?>js/jquery.easing.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo $_DOMAIN; ?>js/js-slider.js" ></script>
	<link type="text/css" rel="stylesheet" href="<?php echo $_DOMAIN; ?>css/js-slider.css">
	<script language="javascript" type="text/javascript" src="<?php echo $_DOMAIN; ?>js/script.js"></script>
	<!--<link rel="stylesheet" href="css/bootstrap.css">-->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110867490-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-110867490-1');
	</script>

</head>
<body>
	<main>
	<div class="wrapper">
		<div class="body-bg">
		<header>
			<section class="container">
				<section class="header">
					<div class="logo">
						<img src="Images/logo-truong.png" alt="truong-thpt-truongthi" width="100px">
					</div>
					<div class="name-school">
						<h2>SỞ GIÁO DỤC & ĐÀO TẠO THANH HÓA</h2>
						<h1>TRƯỜNG THPT TRƯỜNG THI - TP. THANH HÓA</h1>
						<p>ĐT: (037) 3.858.799 - Email: thpt.truongthi.thanhhoa@gmail.com</p>
					</div>
					<div class="banner">
						<img src="Images/banner.png" height="120px"; width="545px"; alt="truongthi">
					</div>
				</section>
			</section>
		</header><!-- /header -->