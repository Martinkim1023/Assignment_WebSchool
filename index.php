
<?php
// Kết nối database 
  require 'core/init.php';

  require('/includes/header.php');

  require('nav.php');
?>
		<section class="container">
				<section class="time-search">
					<div class="time">
					<div id="clock">Loading...</div>
						<script type="text/javascript"> 
						function refrClock() {
						var d=new Date();
						var s=d.getSeconds();
						var m=d.getMinutes();
						var h=d.getHours();
						var day=d.getDay();
						var date=d.getDate();
						var month=d.getMonth();
						var year=d.getFullYear();
						var days=new Array("Chủ nhật", "Thứ hai","Thứ 3","Thứ 4","Thứ 5","Thứ 6","Thứ 7" );
						var months=new Array("1","2","3","4","5","6","7","8","9","10","11","12"); var am_pm;
						if (s<10) {s="0" + s}
						if (m<10) {m="0" + m}
						if (h>12) {h-=12;AM_PM = "PM"}
						else {AM_PM="AM"}
						if (h<10) {h="0" + h}
						document.getElementById("clock").innerHTML=days[day] + ", " + date + "/" +months[month] + "/" + year + " , "+ " " + h + ":" + m + ":" + s + " " + AM_PM; setTimeout("refrClock()",1000); } refrClock();
						</script>	 
					</div>
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
	<div class="column">
	 <div id="sliderFrame">
        <div id="slider">
            <a href="#" class="sliden"><img src="Images/slider-school.jpg" alt="THÔNG BÁO TUYỂN SINH LỚP 10 NĂM HỌC 2017 - 2018" /></a>
            <a href="#"><img src="Images/HD_Doan_01.png" alt="SÔI NỔI CÁC HOẠT ĐỘNG CHÀO MỪNG NGÀY THÀNH LẬP ĐOÀN..." /></a>
            <a href="#"><img src="Images/slider3.jpg" alt="THÔNG BÁO TUYỂN SINH LỚP 10 NĂM HỌC 2017 - 2018" /></a>
        	<a href="#"><img src="Images/slider2.jpg" alt="THÔNG BÁO TUYỂN SINH LỚP 10 NĂM HỌC 2015 - 2016" /></a>
        </div>
        <!--thumbnails-->
        <div id="thumbs">
            <div class="thumb">
                <div class="frame"><img src="Images/slider-school.jpg" /></div>
                <div class="thumb-content"><p><a href="#">Tin Giáo Dục</a></p>THÔNG BÁO TUYỂN SINH LỚP 10 NĂM HỌC 2017 - 2018</div>
                <div style="clear:both;"></div>
            </div>
            <div class="thumb">
                <div class="frame"><img src="Images/HD_Doan_01.jpg" /></div>
                <div class="thumb-content"><p><a href="#">Hoạt động đoàn</a></p>SÔI NỔI CÁC HOẠT ĐỘNG CHÀO MỪNG NGÀY THÀNH LẬP ĐOÀN...</a></div>
                <div style="clear:both;"></div>
            </div>
            <div class="thumb">
                <div class="frame"><img src="Images/slider3.jpg" /></div>
                <div class="thumb-content"><p><a href="#">Tin giáo dục-khoa học</a></p>Những điểm mới của kỳ thi THPT Quốc Gia</div>
                <div style="clear:both;"></div>
            </div>
            <div class="thumb">
                <div class="frame"><img src="Images/slider2.jpg" /></div>
                <div class="thumb-content"><p><a href="">Tin Giáo Dục</a></p>THÔNG BÁO TUYỂN SINH LỚP 10 NĂM HỌC 2015 - 2016</div>
                <div style="clear:both;"></div>
            </div>
    	</div>
    	<div style="clear:both;height:0;"></div>
	</div>
<!--END-CONTENT-slider-->
					<section class="cont-news">
						<article class="title">
								<h3><i class="fa fa-folder-open-o" aria-hidden="true"></i><a href="#">Tin nhà trường</a></h3>
						</article>
						<section class="cont-news1">
							<article class="cont-titl">
								<h2><a href="#">THÔNG BÁO TUYỂN DỤNG GIÁO VIÊN VĂN</a></h2>
								<figure>						
									<a href="#"><img src="Images/tuyen-dung.jpg" alt="tuyen_dung"></a>
									<p>Để đáp ứng yêu cầu phát triển của nhàtrường, Trường THPT Trường Thi, TP.Thanh Hóa thông báo tuyển dụng giáo viên với các điều kiện cụ thể như sau:</p>
								</figure>
								<h4><a href="">Xem tiếp...</a></h4>
							</article>
							<article class="cont-link">
								<ul>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">THÔNG BÁO TUYỂN DỤNG GIÁO VIÊN NĂM 2017</a></li>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">THPT TRƯỜNG THI-"VÌ MỘT HỌC ĐƯỜNG KHÔNG MA TÚY"</a></li>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">THÔNG BÁO TUYỂN SINH LỚP 10 NĂM HỌC 2017 - 2018</a></li>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">THÔNG BÁO TUYỂN SINH LỚP 10 NĂM 2016 - 2017</a></li>
								</ul>
							</article>
						</section>
					</section>
					<section class="clear"></section>
<!--END-CONTENT-NEWS-1-->
					<section class="cont-news">
						<article class="title">
							<h3><i class="fa fa-folder-open-o" aria-hidden="true"></i><a href="#">Tin giáo dục - khoa học</a></h3>
						</article>
						<section class="cont-news1">
							<article class="cont-titl">
								<h2><a href="">Cơ hội duy nhất để thí sinh thay đổi nguyện vọng xét tuyển đại học</a></h2>
								<figure>						
									<a href="#"><img src="images/Tin_gd.jpg" alt=""></a>
								<p>Từ ngày 15/7 đến 23/7, thí sinh có thể thay đổi nguyện vọng xét tuyển đại học duy nhất một lần.</p>
								</figure>
								<h4><a href="">Xem tiếp...</a></h4>
							</article>
							<article class="cont-link">
								<ul>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">Công bố các cụm thi THPT Quốc gia 2017</a></li>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">Công bố quy chế thi THPT Quốc gia 2017</a></li>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">Các trường hối hả xét tốt nghiệp, in phiếu điểm cho thi sinh</li>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">Danh sách 65 cụm thi tỉnh kỳ thi thpt Quốc gia</a></li>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">Danh sách 38 cụm thi THPT Quốc gia</a></li>
								</ul>
							</article>
						</section>
					</section>
					<section class="clear"></section>
<!--END-CONTENT-NEWS-2-->
					<section class="cont-news">
						<article class="title">
							<h3><i class="fa fa-folder-open-o" aria-hidden="true"></i><a href="#">Hướng nghiệp</a></h3>
						</article>
						<section class="cont-news1">
							<article class="cont-titl">
								<h2><a href="#">Định hướng nghề cho con: Cha mẹ là người đồng hành</a></h2>
								<figure>					
									<a href="#"><img src="Images/chon-nghe-cho-con.jpg" alt=""></a>
									<p>Hiện nay, nhiều bậc phụ huynh vẫn mang nặng quan điểm: Cha mẹ mới là người quyết định việc chọn trường cho con. Họ tin rằng, người lớn có kinh nghiệm của người đi trước và luôn mong những điều tốt nhất cho con mình...
									</p>
								</figure>
								<h4><a href="">Xem tiếp...</a></h4>
							</article>
							<article class="cont-link">
								<ul>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">Chọn nghề, sao quá chên vênh</a></li>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">Thí sinh nên chọn trường nào, ngành nào khi biết điểm thi?</a></li>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">Những điểm mới của kỳ thi THPT Quốc gia</a></li>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">Nguyễn Hà Đông có thể sẽ "hồi sinh" Flappy Bird</a></li>
								</ul>
							</article>
						</section>
					</section>
					<section class="clear"></section>
<!--END-CONTENT-NEWS-3-->
					<section class="cont-news">
						<article class="title">
							<h3><i class="fa fa-folder-open-o" aria-hidden="true"></i><a href="#">Tiếp sức mùa thi</a></h3>
						</article>
						<section class="cont-news1">
							<article class="cont-titl">
								<h2><a href="#">Đáp án kỳ thi THPT quốc gia 2017 chính thức của bộ GD-ĐT.</a></h2>
								<figure>						
									<a href="#"><img src="Images/tiep_suc.jpg" alt=""></a>
									<p>Đáp án kỳ thi THPT quốc gia 2017chính thức của bộ GD-ĐT.</p>
								</figure>
								<h4><a href="">Xem tiếp...</a></h4>
							</article>
							<article class="cont-link">
								<ul>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Bộ GD-ĐT thống nhất mẫu đơn xin phúc khảo bài thi</a></li>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Thủ tục phúc khảo bài thi tốt nghiệp THPT Quốc gia</a></li>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Công bố quy chế thi THPT quốc gia 2017</a></li>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Danh sách máy tính cầm tay được phép mang vào phòng thi</a></li>
								</ul>
							</article>
						</section>
					</section>
					<section class="clear"></section>
<!--END-CONTENT-NEWS-4-->
					<section class="cont-news">
						<article class="title">
							<h3><i class="fa fa-folder-open-o" aria-hidden="true"></i><a href="#">Hoạt đông dạy và học</a></h3>
						</article>
						<section class="cont-news1">
							<article class="cont-titl">
								<h2><a href="#">HOẠT ĐỘNG TRẢI NGHIỆM SÁNG TẠO MÔN TOÁN THPT TRƯỜNG THI NĂM HỌC 1016-2017</a></h2>
								<figure>						
									<a href="#"><img src="images/1_2.jpg" alt=""></a>
									<p> Nhờ được tham gia hoạt động trải nghiệm sáng tạo hữu ích và thiết thực với môn học, học sinh không những có thêm nhiều cơ hội vận dụng kiến thức trong sách vở vào thực tiễn,..</p>
								</figure>
								<h4><a href="">Xem tiếp...</a></h4>
							</article>
							<article class="cont-link">
								<ul>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">HOẠT ĐỘNG TRẢI NGHIỆM SÁNG TẠO MÔN VẬT LÝ - CHẾ TẠO VÀ BẮN TÊN LỬA NƯỚC</a></li>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">KẾ HOẠCH KHẢO SÁT CHẤT LƯỢNG LỚP 12 THPT NĂM HỌC 2015- 2016</a></li>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">HỘI NGHỊ CÁN BỘ - GIÁO VIÊN - NHÂN VIÊN TRƯỜNG THPH TRƯỜNGTHI NĂM HỌC 2016 - 2017</a></li>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">Học văn là học chơi với chữ</a></li>
								</ul>
							</article>
						</section>
					</section>
				</div>
			</section>

<!--END-CONTENT-NEWS-4-->

<!--END-CONT-LEFT-->

		<aside id="aside">
			<div class="column">
				<div class="cont-asi">
						<article class="news-report">
							<h3>Thông báo mới</h3>
						</article>
					<section class="news">
						<marquee onmouseover="this.stop()" onmouseout="this.start()" behavior="scroll" direction="up" scrolldelay="5" scrollamount="2" height="200">
						<article class="asi-link">
						<ul>
						<li><a href="#">THÔNG BÁO TUYỂN DỤNG GIÁO VIÊN VĂN</a></li>
						<li><a href="#">THÔNG BÁO TUYỂN SINH LỚP 10 NĂM HỌC 2016 - 2017</a></li>
						<li><a href="#">LỄ KẾT NẠP ĐẢNG VIÊN MỚI CỦA CHI BỘ TRƯỜNG THPT TRƯỜNG THI</a></li>
						<li><a href="#">CHO THUÊ PHÒNG HỌC</a></li>
						<li><a href="#">CHƯƠNG TRÌNH LỄ SƠ KẾT HỌC KỲ I</a></li>
						<li><a href="#">Mức PHẠT UỐNG RƯỢU BIA QUÁ QUY ĐỊNH KHI ĐIỀU KHIỂN XE</a></li>
						</ul>	
						</article>
						</marquee>
					</section>
				</div>
				<div class="cont-asi">
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
				</div>
				<div class="cont-asi"><!--OPINION-->
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
				</div>				
				<div class="cont-asi"><!--THỐNG KÊ-->
					<article class="news-report">
							<h3>Thống kê truy cập</h3>
					</article>
					<section class="truy-cap">
						<p><i class="fa fa-bolt" aria-hidden="true"></i>Đang truy cập: 3</p>
						<p><i class="fa fa-sun-o" aria-hidden="true"></i>Hôm nay: 90</p>
						<p><i class="fa fa-calendar" aria-hidden="true"></i>Tháng hiện tại: 1852 </p>
						<p><i class="fa fa-list-alt" aria-hidden="true"></i>Tổng lượng truy cập: 411321</p>			
					</section>
				</div>
				<div class="cont-asi" style="border:none;"><!--VIDEO-->
					<article class="news-report">
							<h3>Video</h3>
					</article>
						<iframe width="100%" height="210" src="https://www.youtube.com/embed/XzSS90FHPpU" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="asi-link"><!--LIÊN-KẾT-->
					<article class="news-report">
							<h3>Liên kết website</h3>
					</article>
					<article class="lienket-link">
						<a href="#"><img src="Images/AVST.jpg" alt=""></a>
						<a href="#"><img src="Images/fpt-polytechnic.jpg" alt=""></a>
					</article>
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