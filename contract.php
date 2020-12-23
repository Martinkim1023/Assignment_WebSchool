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
						<li><i class="fa fa-angle-double-right" style="padding:0 5px;" aria-hidden="true"></i><a href="contract.html"><span>LIÊN HỆ</span></a></li>
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
				<div class="column-cont">
					<section class="Geolocation">
						<h1><a href="">TRƯỜNG THPT TRƯỜNG THI</a></h1>
						<ul>
							<li><i class="fa fa-map-marker" aria-hidden="true" ></i>81 Trường Thi, Tp. Thanh Hoá, Thanh Hoá, Việt Nam</li>
							<li><i class="fa fa-envelope" aria-hidden="true" style="padding-right:10px;"></i>thpttruongthi.edu.vn</li>
							<li><i class="fa fa-phone" aria-hidden="true" ></i>(+ 84) 92 360 33 38</li>
						</ul>
						<article class="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3753.562396676789!2d105.78291711493347!3d19.816142986667654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3136580714527571%3A0x9f0f7fc19b4d5658!2zVHLGsOG7nW5nIFRIUFQgVHLGsOG7nW5nIFRoaQ!5e0!3m2!1svi!2s!4v1508917787274" width="700" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</article>
					</section>

					<section class="form-contract">
						<h1>FORM LIÊN HỆ</h1>
						<form action="" >
							<ul>
								<li>
									<label for="">Họ tên:<span class="required" >*</span></label>
									<input type="text" name="first" pattern="[a-z]{1,15}" class="first" placeholder="Họ">
									<input type="text" name="last" pattern="[a-z]{1,15}" style="width: 166px;" placeholder="Tên">
								</li>
								<li>
									<label for="">Địa chỉ:<span class="required">*</span></label>
									<input type="text" name="address" pattern="[a-z]{1,15}" style="margin-left: 10px;" class="form-cotr">
								</li>
								<li>
									<label for="">Email:<span class="required">*</span></label>
									<input type="email" name="mail" pattern="[a-z]{1,15}" class="form-cotr">
								</li>
								<li>
									<label for="">Số điện thoại:<span style="padding: 0 27px 0 5px;">*</span></label>
									<input type="number" name="phone"  class="form-cotr">
								</li>
								<li>
									<label for="">Gửi đến bộ phận:<span style="padding: 0 10px 0 5px;">*</span></label>
									<select name="part" id="" style="width:355px;" >
										<option value="Truongthi">Trường THPT Trường Thi</option>
										<option value="Gddt">Sở GD & ĐT TP Thanh Hóa</option>
									</select>
								</li>
								<li>
									<label for="">Nội dung:<span>*</span></label>
									<textarea name="content" id="" cols="72" rows="10"></textarea>
								</li>
								<li >
									<input type="submit" value="Gửi thông tin" style="margin-left: 107px;">
									<input type="submit" value="Xóa">
								</li>
							</ul>
						</form>
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
