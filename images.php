<?php 
// Kết nối database 
  require 'core/init.php';

  require('./includes/header.php');

  require('nav.php');
?>
		<section class="container">
				<section class="time-search main-cate">
					<ul>
						<li><a  href="index.php" ><i class="fa fa-home"  aria-hidden="true" style="font-size: 23px;"></i></a></li>
						<li><i class="fa fa-angle-double-right" style="padding:0 5px;" aria-hidden="true"></i><a href="images.html"><span>HÌNH ẢNH</span></a></li>
					</ul>
					<div class="search">
						<form action="<?php echo $_DOMAIN; ?>" method="GET">
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
					<section class="cont-news">
						<article class="title sch-img">
							<h3><a href="#">Một số hình ảnh về trường</a></h3>
							<a class="see_all" href="#"><i class="fa fa-picture-o" aria-hidden="true"></i>Xem tất cả</a>
						</article>
						<section class="cont-image">
							<article class="intro-image">
								<figure style="margin-left: 12px;">	
									<a href="#"><img src="images/img_school_03.jpg"></a>
								</figure>
								<figure>						
									<a href="#"><img src="images/img_school_02.jpg"></a>
								</figure>
								<figure>						
									<a href="#"><img src="images/img_school_01.jpg"></a>
								</figure>
							</article>
						</section>
					</section>

					<section class="cont-news">
						<article class="title sch-img">
							<h3><a href="#">Lễ khai giảng 2017-2018</a></h3>
							<a class="see_all" href="#"><i class="fa fa-picture-o" aria-hidden="true"></i>Xem tất cả</a>
						</article>
						<section class="cont-image">
							<article class="intro-image">
								<figure style="margin-left: 12px;">						
									<a href="#"><img src="images/khai_giang_2017_3.jpg"></a>
								</figure>
								<figure>						
									<a href="#"><img src="images/khai_giang_2017_2.jpg"></a>
								</figure>
								<figure>						
									<a href="#"><img src="images/khai_giang_2017.jpg"></a>
								</figure>
							</article>
						</section>
					</section>

					<section class="cont-news">
						<article class="title sch-img">
							<h3><a href="#">Đội ngũ giáo viên trường THPT Trường Thi</a></h3>
							<a class="see_all" href="#"><i class="fa fa-picture-o" aria-hidden="true"></i>Xem tất cả</a>
						</article>
						<section class="cont-image">
							<article class="intro-image">
								<figure style="margin-left: 12px;">						
									<a href="#"><img src="images/img_doi_ngu_giao_vien_02.jpg"></a>
								</figure>
								<figure>						
									<a href="#"><img src="images/img_doi_ngu_giao_vien_01.jpg"></a>
								</figure>
								<figure>						
									<a href="#"><img src="images/img_doi_ngu_giao_vien.jpg"></a>
								</figure>
							</article>
						</section>
					</section>

					<section class="cont-news">
						<article class="title sch-img">
							<h3><a href="#">Lễ khai giảng năm học 2011-2012</a></h3>
							<a class="see_all" href="#"><i class="fa fa-picture-o" aria-hidden="true"></i>Xem tất cả</a>
						</article>
						<section class="cont-image">
							<article class="intro-image">
								<figure style="margin-left: 12px;">						
									<a href="#"><img src="images/img_khai_giang_2011.jpg"></a>
								</figure>
								<figure>						
									<a href="#"><img src="images/img_khai_giang_2011_01.jpg"></a>
								</figure>
								<figure>						
									<a href="#"><img src="images/img_khai_giang_2011_02.jpg"></a>
								</figure>
							</article>
						</section>
					</section>

					<section class="cont-news">
						<article class="title sch-img">
							<h3><a href="#">Kỷ niệm 20 Thành lập trường THPT Trường Thi</a></h3>
							<a class="see_all" href="#"><i class="fa fa-picture-o" aria-hidden="true"></i>Xem tất cả</a>
						</article>
						<section class="cont-image">
							<article class="intro-image">
								<figure style="margin-left: 12px;">						
									<a href="#"><img src="images/20_year.jpg"></a>
								</figure>
								<figure>						
									<a href="#"><img src="images/HD_Doan_2.jpg"></a>
								</figure>
								<figure>						
									<a href="#"><img src="images/Introduce-img2.jpg"></a>
								</figure>
							</article>
						</section>
					</section>

					<section class="cont-news">
						<article class="title sch-img">
							<h3><a href="#">CHƯƠNG TRÌNH KẾT NỐI YÊU THƯƠNG</a></h3>
							<a class="see_all" href="#"><i class="fa fa-picture-o" aria-hidden="true"></i>Xem tất cả</a>
						</article>
						<section class="cont-image">
							<article class="intro-image">
								<figure style="margin-left: 12px;">						
									<a href="#"><img src="images/img_ket_noi_yeu_thuong_1.jpg"></a>
								</figure>
								<figure>						
									<a href="#"><img src="images/img_ket_noi_yeu_thuong_2.jpg"></a>
								</figure>
								<figure>						
									<a href="#"><img src="images/img_ket_noi_yeu_thuong.jpg"></a>
								</figure>
							</article>
						</section>
					</section>
					<section class="pagin_bt">
						<ul class="pagination">
							<li><a href="#" class="current">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
						</ul>
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
	
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
		<script type="text/javascript">
		    $(function($){
		        var addToAll = true;
		        var gallery = true;
		        var titlePosition = 'inside';
		        $(addToAll ? 'img' : 'img.fancybox').each(function(){
		            var $this = $(this);
		            var title = $this.attr('title');
		            var src = $this.attr('data-big') || $this.attr('src');
		            var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
		            $this.wrap(a);
		        });
		        if (gallery)
		            $('a.fancybox').attr('rel', 'fancyboxgallery');
		        $('a.fancybox').fancybox({
		            titlePosition: titlePosition
		        });
		    });
		    $.noConflict();
		</script>
	</div>
</main>
	
</body>
</html>