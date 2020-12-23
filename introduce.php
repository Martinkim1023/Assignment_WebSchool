<?php 
// Kết nối database 
  require 'core/init.php';

  require('./includes/header.php');

  require('nav.php');
?>

		<section class="container">
				<section class="time-search main-cate">
					<ul>
						<li><a  href="index.html" ><i class="fa fa-home"  aria-hidden="true" style="font-size: 23px;"></i></a></li>
						<li><i class="fa fa-angle-double-right" style="padding:0 5px;" aria-hidden="true"></i><a href=""><span>GIỚI THIỆU</span></a></li>
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
				<div class="column1">
					<!--END-CONTENT-slider-->
					<section class="cont-news">
						<article class="title">
								<h3><a href="#">Giới thiệu trường</a></h3>
						</article>
						<section class="cont-news1">
							<div class="intro-titl">
								<figure>						
									<a href="#"><img src="Images/Introduce-img1.png" ></a>
								</figure>
								<article>
									<h2><a href="intro-school.php">Trường THPT Trường Thi - TP.Thanh Hoá</a></h2>
									<p>Đội ngũ cán bộ quản lý, giáo viên đều đạt trình độ chuẩn và trên chuẩn; nhiệt tình, trách nhiệm cao, có nhiều tâm huyết với sự nghiệp giáo dục.</p>
									<h4><a href="intro-school.php">Xem tiếp <i class="fa fa-sign-out" aria-hidden="true"></i></a></h4>
								</article>
							</div>
						</section>
					</section>
<!--END-CONTENT-NEWS-1-->
					<section class="cont-news">
						<article class="title">
							<h3><a href="intro-Devoloment-school.php">Lịch sử phát triển</a></h3>
						</article>
						<section class="cont-news1">
							<div class="intro-titl">
								<figure>						
									<a href="intro-Devoloment-school.php"><img src="Images/Introduce-img2.jpg"></a>
								</figure>
								<article>
									<h2><a href="intro-Devoloment-school.php">THPT Trường Thi - Hành trình phát triển</a></h2>
									<p>Trường THPT Trường Thi (trước kia là THPT Trần Xuân Soạn) được thành lập theo Quyết định số 1690/QĐ-UBND của Chủ tịch UBND tỉnh Thanh Hóa ngày 8 - 8 - 1997.</p>
									<h4><a href="Devoloment-school.php">Xem tiếp<i class="fa fa-sign-out" aria-hidden="true"></i></a></h4>
								</article>
							</div>
						</section>
					</section>
<!--END-CONTENT-NEWS-2-->
					<section class="cont-news" style="width:auto;">
						<article class="title">
							<h3><a href="intro-function-school.php">Chức năng nhiệm vụ</a></h3>
						</article>
						<section class="cont-news1">
							<div class="intro-titl">
								<figure>						
									<a href="intro-function-school.php"><img src="Images/Introduce-img3.png"></a>
								</figure>
								<article>
									<h2><a href="intro-function-school.php">CHỨC NĂNG - NHIỆM VỤ</a></h2>
									<p>Trường THPT Trường Thi có chức năng đào tạo trình độ phổ thông; phát hiện những học sinh có tư chất thông minh, đạt kết quả xuất sắc trong học tập và phát triển năng khiếu của các em về một trong các môn Toán học, Tin học, Vật LÝ, Hóa học, Sinh học và tiếng Anh;</p>
									<h4 style="margin: 30px 50px 0 0;"><a href="intro-function-school.php">Xem tiếp  <i class="fa fa-sign-out" aria-hidden="true"></i></a></h4>
								</article>
							</div>
						</section>
					</section>
<!--END-CONTENT-NEWS-3-->
					<section class="cont-news">
						<article class="title">
							<h3><a href="#">Các danh hiệu và thành tích</a></h3>
						</article>
						<section class="cont-news1">
							<div class="intro-titl">
								<figure>						
									<a href="intro-achiavement-school.php"><img src="Images/Introduce-img4.jpg" alt=""></a>
								</figure>
								<article>
									<h2><a href="intro-achiavement-school.php">Một số thành tích nổi bật của trường</a></h2>
									<p>Các thầy cô giáo trường THPT Trường Thi vinh dự nhận giấy khen của Sở Giáo Dục tỉnh Thanh Hoá trong lễ khai giảng năm học mới 2017-2018 .</p>
									<h4><a href="intro-achiavement-school.php">Xem tiếp  <i class="fa fa-sign-out" aria-hidden="true"></i></a></h4>
								</article>
							</div>
						</section>
					</section>
<!--END-CONTENT-NEWS-4-->
				</div>
			</section>

<!--END-CONTENT-NEWS-4-->

<!--END-CONT-LEFT-->
			<?php 
				  require('aside.php');
			?>

		</div>
	</section>

<!--THE-END-CONTENT-->

		<?php 
			require('./includes/footer.php');
		?>
	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</main>
</body>
</html>