<?php 
// Kết nối database 
  require 'core/init.php';

  require('./includes/header.php');

// Content
require 'templates/content.php';
 
  require('nav.php');
?>
		<section class="container">
				<section class="time-search main-cate">
					<ul>
						<li><a  href="index.html" ><i class="fa fa-home"  aria-hidden="true" style="font-size: 23px;"></i></a></li>
						<li><i class="fa fa-angle-double-right" style="padding:0 5px;" aria-hidden="true"></i><a href="index.html"><span>TIN TỨC</span></a></li>
						<li><i class="fa fa-angle-double-right" style="padding:0 5px;" aria-hidden="true"></i><a href="news.html"><span>Tin nhà trường</span></a></li>
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
			<section id="cont-left" class="news-sc">
					<?php 
						$sql_check_id_cate = "SELECT * FROM posts";

			            foreach ($db->fetch_assoc($sql_check_id_cate, 0) as $value) {     
					?>
					<section class="cont-news">
						<article class="school-news">
							<div class="intro-titl">
								<a href="post-detail.php?id=<?= $value['id_post'] ?>"><img src="Images/tuyen-giao-vien.jpg" alt=""></a>
								<div class="school-muted">
									<h2><a href="post-detail.php?id=<?= $value['id_post'] ?>"><?= $value['title'] ?></a></h2>
									<ul>
										<li></li>
										<li></li>
									</ul>
									<p>Để đáp ứng yêu cầu phát triển của nhà trường, Trường THPT Trường Thi, TP.Thanh Hóa thông báo tuyển dụng giáo viên với các điều kiện cụ thể như sau:...</p>
								</div><!--PHP date-->
							</div>
						</article>
					</section>
					
					<?php } ?>
					<section class="news-link">
						<h2>Các tin khác</h2>
						<ul>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="">HOẠT ĐỘNG THAO GIẢNG MẪU CỦA GIÁO VIÊN</a></li>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="">LỄ MÍT TINH KỶ NIỆM 83 NĂM NGÀY THÀNH LẬP ĐOÀN THANH NIÊN CỘNG SẢN HỒ CHÍ MINH</a></li>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="">Lễ ra mắt ban chấp hành công đoàn cơ sở trường THPT Trường Thi</a></li>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="">HỘI GIẢNG CHÀO MỪNG NGÀY NHÀ GIÁO VIỆT NAM 20 THÁNG 11</a></li>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="">Thông báo khẩn phòng chống bão trong trường học</a></li>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="">Trường THPT Trường Thi tổ chức sinh hoạt ngoại khóa đầu năm</a></li>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="">Trường THPT Trường Thi vinh dự đón Đoàn giám sát của UBTV Quốc Hội về thăm và làm việc</a></li>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="">THÔNG BÁO TUYỂN SINH</a></li>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="">Trường THPT Trường Thi vinh dự đón Đoàn giám sát của UBTV Quốc Hội về thăm và làm việc</a></li>

						</ul>
					</section>
					<section class="pagin_bt">
						<ul class="pagination">
							<li><a href="#" class="current">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
						</ul>
					</section>
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