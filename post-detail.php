<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Tin Tức</title>
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<link type="text/css" rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--<link rel="stylesheet" href="css/bootstrap.css">-->
</head>
<body>
	<main>
	<div class="wrapper">
		<div class="body-bg">
		<header>
			<section class="container">
				<section class="header">
					<div class="logo">
						<img src="images/logo-truong.png" alt="truong-thpt-truongthi" width="100px">
					</div>
					<div class="name-school">
						<h2>SỞ GIÁO DỤC & ĐÀO TẠO THANH HÓA</h2>
						<h1>TRƯỜNG THPT TRƯỜNG THI - TP. THANH HÓA</h1>
						<p>ĐT: (037) 3.858.799 - Email: thpt.truongthi.thanhhoa@gmail.com</p>
					</div>
					<div class="banner">
						<img src="images/banner.png" height="120px"; width="545px"; alt="truongthi">
					</div>
				</section>
			</section>
		</header><!-- /header -->
		<nav class="secont-nav">
			<section class="container">
					<ul class="navigation navbar_nav">
						<li><a  href="index.php" ><i class="fa fa-home"  aria-hidden="true" style="font-size: 25px;"></i></a></li>
						<li><a href="introduce.php" class="first">Giới thiệu<strong class=" fa fa-caret-down"></strong></a>
							<ul class="sub-menu">
								<li><a href="intro-school.php">Giới thiệu trường</a></li>
								<li><a href="intro-Devoloment-school.">Lịch sử phát triển</a></li>	
								<li><a href="intro-function-school.php">Chức năng nhiệm vụ</a></li>
								<li><a href="intro-achiavement-school.php">Danh hiệu và thành tích</a></li>
							</ul>
						</li>
						<li>
							<a href="index.php" >Tin tức<strong class=" fa fa-caret-down">&nbsp;</strong></a>
							<ul class="sub-menu">
								<li><a href="news.php">Tin nhà trường</a></li>
								<li><a href="news-education.php">Tin giáo dục-khoa học </a></li>
								<li><a href="news-huong-nghiep.php">Hướng nghiệp</a></li>
								<li><a href="news-tiepsuc.php">Tiếp sức mùa thi</a></li>
								<li><a href="news-TeachAndLearn.php">Hoạt động dạy và học</a></li>
							</ul>
						</li>
						<li>
							<a href="Library.php"  >Thư viện<strong class=" fa fa-caret-down">&nbsp;</strong></a>
							<ul class="sub-menu">
								<li><a href="#">Văn bản</a></li>
								<li><a href="#">Biểu mẫu</a></li>
							</ul>
						</li>
						<li>
							<a  href="thoikhoabieu.php" >Thời khóa biểu<strong class=" fa fa-caret-down">&nbsp;</strong></a>
							<ul class="sub-menu">
								<li><a href="#">TKB Giáo viên</a></li>
								<li><a href="#">TKB Học Sinh</a></li>
							</ul>
						</li>
						<li><a href="images.php">Hình ảnh</a></li>
						<li class="active"><a href="contract.php" >Liên Hệ</a></li>
					</ul>	
			</section>
		</nav>
		<nav class="nav-header">
			<section class="container">
				<p>TRƯỜNG THPT TRƯỜNG THI ĐC: Số 81 Đường Trường Thi, Phường Trường Thi, Thành Phố Thanh Hóa</p>
			</section>
		</nav>

<!--THE-END-NAV-->

		<section class="container">
				<section class="time-search main-cate">
					<ul>
						<li><a  href="index.php" ><i class="fa fa-home"  aria-hidden="true" style="font-size: 23px;"></i></a></li>
						<li><i class="fa fa-angle-double-right" style="padding:0 5px;" aria-hidden="true"></i><a href=""><span>Tin tức</span></a></li>
						<li><i class="fa fa-angle-double-right" style="padding:0 5px;" aria-hidden="true"></i><a href=""><span>Tin nhà trường</span></a></li>
					</ul>
					<div class="search">
						<form action="#" method="post">
						<input type="search" placeholder="Search..." id="mysearch" name="search">
						<button type="button"><i class="fa fa-search" aria-hidden="true" style="font-size: 15px; color: #fff; padding: 5.5px 10px 8px 10px;"></i></button>
						</form>
					</div>
				</section>
		</section>

<!--THE-END-TIME-SEARCH-->

	<section class="container">
		<div id="content">
			<section id="cont-left">
				<article class="column-cont">
					<?php 
						require_once 'config.php';
						if (isset($_GET['id'])) {
							$id = $_GET['id'];
							$sql_check_id_post = "SELECT * FROM posts WHERE id_post = '$id'";
							$result=mysqli_query($db,$sql_check_id_post);

							$row=mysqli_fetch_assoc($result);
					?>
					<div class="intro-school">
						
						<div class="news-school">
							<h2><?= $row['title'] ?></h2>	
							<img src="Images/<?= $row['url_thumb'] ?>" alt="teacher-school">
							<div>
								<?= $row['body'] ?>
							</div>
   						</div>
					</div>

					<?php }?>
					<div class="intro-school">
						<div class="danh-gia">
							<a style="color:#3b5998;" href=""><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
							<a style="color:#1da1f2;" href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
							<a style="color:#db4437;" href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
							<a style="color:#db4437;" href=""><i class="fa fa-envelope" aria-hidden="true"></i></a>
						</div>
					</div>
				</article>
			</section>

<!--END-CONTENT-NEWS-4-->

<!--END-CONT-LEFT-->

		<aside id="aside">
			<div class="column">
				<section class="cont-asi">
					<article class="news-report">
							<h3>Thành viên</h3>
					</article>
					<section id="cont-form">
						<form action="#" name="form-login">
							<div class="input-form">
								<span class="fa fa-user"></span>
								<input type="text" id="user" placeholder="Tên đăng nhập">
							</div>
							<div class="input-form">
								<span class="fa fa-key"></span>
								<input type="password" id="pass" placeholder="Password">
							</div>
								<p><a href="#">Quên mật khẩu ?</a></p>
							<input type="submit" value="Đăng nhập"  >
							<input type="submit" value="Nhập lại"  >
						</form>
					</section>
				</section>

				<section class="cont-asi"><!--TIÊU-ĐIỂM-->
					<article class="td-tt">
						<span><h3 style="margin:0 2px 0 10px" ><a href="#">Tin tiêu điểm</a></h3></span>
						<span><h3><a href="#">Bình luận mới</a></h3></span>
					</article>
					<section class="comment-td">
						<div class="tieu-diem">
							<article class="td-tt">
								<img src="Images/truong-news.png" >
								<p><a href="#">Một số quy định về nề nếp chuyên môn đối với thầy cô giáo trường THPT Trường Thi</a></p>
							</article>
							<article class="td-tt">
								<img src="Images/thongbao.png" />
								<p><a href="#">THÔNG BÁO TUYỂN DỤNG GIÁO VIÊN 2017 </a></p>
							</article>
							<article class="td-tt">
								<img src="images/tuyen-dung.jpg" alt="">
								<p><a href="#">THÔNG BÁO TUYỂN SINH</a></p>
							</article>
							<article class="td-tt">
								<img src="Images/khong-han-che.jpg"/>
								<p><a href="#">Ngành Công An</a></p>
							</article>
							<article class="td-tt">	
								<img src="Images/truong-news.png" />
								<p>	<a href="#">Trường THPT Trường Thi tổ chức sinh hoạt ngoại khóa đầu năm</a></p>
							</article>
						</div>		
					</section>
				</section>	
				<section class="cont-asi"><!--OPINION-->
					<article class="news-report">
							<h3>Thăm dò ý kiến</h3>
					</article>
					<section class="opinion">
						<h4>Bạn thấy giao diện website thế nào?</h4>
						<article>
							<form action="">
									<input type="radio" name="render" value="Đẹp" checked><span>Đẹp</span><br>
									<input type="radio" name="render" value="Bình thường"><span>Bình thường </span><br>
									<input type="radio" name="render" value="Xấu"> <span>Xấu</span>
								<div class="bt-sm">
									<input type="submit" value="Bình chọn">
									<input type="submit" value="Kết quả">
								</div>
							</form>
						</article>
					</section>
				</section>			
				<div class="cont-asi"><!--THỐNG KÊ-->
					<article class="news-report">
							<h3>Thống kê truy cập</h3>
					</article>
					<section class="truy-cap">
						<p><i class="fa fa-bolt" aria-hidden="true"></i>Đang truy cập:3</p>
						<p><i class="fa fa-sun-o" aria-hidden="true"></i>Hôm nay:90</p>
						<p><i class="fa fa-calendar" aria-hidden="true"></i>Tháng hiện tại:1852 </p>
						<p><i class="fa fa-list-alt" aria-hidden="true"></i>Tổng lượng truy cập: 411321</p>			
					</section>
				</div>
			</div>
			</aside>
		</div>
	</section>

<!--THE-END-CONTENT-->
		<?php
			require('./includes/footer.php');
		?>
	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</div>
	</main>
	
</body>
</html> 