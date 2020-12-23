<?php 
// Kết nối database 
  require 'core/init.php';

  require('./includes/header.php');

  require('nav.php');
?>

<!--THE-END-NAV-->

		<section class="container">
				<section class="time-search main-cate">
					<ul>
						<li><a  href="index.html" ><i class="fa fa-home"  aria-hidden="true" style="font-size: 23px;"></i></a></li>
						<li><i class="fa fa-angle-double-right" style="padding:0 5px;" aria-hidden="true"></i><a href="thoikhoabieu.html"><span>THỜI KHÓA BIỂU</span></a></li>
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
					<section class="tkb-cont">
						<article class="title">
							<h3><a href="#">TKB Giáo viên</a></h3>
						</article>
						<section class="cont-news1">
							<article class="box-tkb">
								<h2><a href="">Thời khóa biểu Phòng trực nề nếp (thực hiện từ 06/11/2017)</a></h2>
							</article>
							<article class="link-tkb">
								<ul>
									<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Thời khóa biểu kì I số 04 (thực hiện từ 30/10/2017)</a></li>
									<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Thời khóa biểu số 05 kì I  Phòng trực nề nếp (thực hiện từ 06/11/2017)</a></li>
									<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Thời khóa biểu kì I số 04 (thực hiện từ 30/10/2017)</a></li>
								</ul>
							</article>
						</section>
					</section>
					<section class="tkb-cont">
						<article class="title">
							<h3><a href="#">TKB Giáo viên</a></h3>
						</article>
						<section class="cont-news1">
							<article class="box-tkb">
								<h2><a href="">Thời khóa biểu lớp 11A1 (30/10/2017)</a></h2>
							</article>						
							<article class="link-tkb">
								<ul>
									<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Thời khóa biểu lớp 10A1 kì I (thực hiện từ 06/3/2017)</a></li>
									<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Thời khóa biểu lớp 11A1 (30/10/2017) </a></li>
									<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Thời khóa biểu lớp 11B1 (30//2017) </a></li>
									<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Thời khóa biểu lớp 12C1 (30/10/2017)</a></li>
								</ul>
							</article>
						</section>
					</section>
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
	</div>
	</main>
	
</body>
</html>