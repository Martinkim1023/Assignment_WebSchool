-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 04, 2017 lúc 01:43 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `truongthi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `descr` text COLLATE utf8_unicode_ci NOT NULL,
  `url_thumb` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `cate_1_id` int(11) NOT NULL,
  `cate_2_id` int(11) NOT NULL,
  `cate_3_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `date_posted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id_post`, `title`, `descr`, `url_thumb`, `slug`, `keywords`, `body`, `cate_1_id`, `cate_2_id`, `cate_3_id`, `author_id`, `status`, `view`, `date_posted`) VALUES
(6, 'THÔNG BÁO TUYỂN DỤNG GIÁO VIÊN VĂN', 'Để đáp ứng yêu cầu phát triển của nhà trường, Trường THPT Trường Thi, TP.Thanh Hóa thông báo tuyển dụng giáo viên với các điều kiện cụ thể như sau:', 'http://localhost:8888/truongthi/Images/thongbao.png', 'thong-bao-tuyen-dung-giao-vien-van', 'tuyen-dung', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;\n\n&lt;p&gt;&lt;strong&gt;1. Đối tượng tuyển dụng:&lt;/strong&gt;&lt;br /&gt;\n-&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Giáo viên môn&amp;nbsp;&lt;strong&gt;Ngữ văn&lt;/strong&gt;:&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 01 người&lt;br /&gt;\n&lt;br /&gt;\n&lt;strong&gt;2. Yêu cầu công việc:&lt;/strong&gt;&lt;br /&gt;\n-&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Tốt nghiệp Đại học sư phạm chính quy, bằng TN xếp loại khá trở lên.&lt;br /&gt;\n-&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Tuổi đời từ 22 - 35&lt;br /&gt;\n-&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Thành thạo tin học văn phòng, phần mềm ứng dụng, các phương pháp và phương tiện dạy học hiện đại.&lt;br /&gt;\n-&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Có kỹ năng giao tiếp, thuyết trình, giải quyết tình huống sư phạm và làm việc nhóm tốt.&lt;br /&gt;\n-&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Nhanh nhẹn, năng động, có tinh thần học hỏi và sẵn sàng đổi mới phương pháp dạy học.&lt;br /&gt;\n-&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Tâm huyết với nghề nghiệp và có phẩm chất đạo đức tốt.&lt;br /&gt;\n-&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Ngoại hình ưa nhìn, phát âm chuẩn.&lt;br /&gt;\n&lt;br /&gt;\n&lt;strong&gt;&lt;em&gt;*) Ưu tiên ứng viên đáp ứng các yêu cầu sau:&lt;/em&gt;&lt;/strong&gt;&lt;br /&gt;\n-&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Có phương pháp giảng dạy sáng tạo, phù hợp với lứa tuổi THPT;&lt;br /&gt;\n-&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Có khả năng tổ chức các hoạt động trải nghiệm sáng tạo, các cuộc thi, rèn luyện kỹ năng sống cho học sinh.&lt;br /&gt;\n&amp;nbsp;&lt;/p&gt;\n\n&lt;p&gt;&lt;strong&gt;3. Hồ sơ xin việc&lt;/strong&gt;&lt;br /&gt;\n-&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Đơn xin việc viết tay&lt;br /&gt;\n-&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Sơ yếu lý lịch (có dán ảnh và xác nhận của cơ quan có thẩm quyền)&lt;br /&gt;\n-&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Hộ khẩu, Chứng minh nhân dân (sao y)&lt;br /&gt;\n-&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Bằng tốt nghiệp Đại học và bảng điểm (sao y)&lt;br /&gt;\n-&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Giấy khám sức khỏe mới nhất (không quá 6 tháng)&lt;br /&gt;\n-&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Các văn bằng khác có liên quan (sao y).&lt;br /&gt;\n&lt;br /&gt;\n&lt;strong&gt;4. Hình thức nhận hồ sơ:&amp;nbsp;&lt;/strong&gt;nộp trực tiếp tại:&lt;/p&gt;\n\n&lt;p&gt;&lt;strong&gt;&lt;em&gt;Phòng Hội đồng trường THPT Trường Thi&lt;/em&gt;&lt;/strong&gt;&lt;br /&gt;\n&lt;strong&gt;&lt;em&gt;Số 81, đường Trường Thi, phường Trường Thi, Thành phố Thanh Hóa&lt;/em&gt;&lt;/strong&gt;&lt;br /&gt;\n&lt;strong&gt;&lt;em&gt;Điện thoại liên hệ: 0237.3.723.977 - 0237.3.856.799&lt;/em&gt;&lt;/strong&gt;&lt;/p&gt;\n\n&lt;p&gt;Người tiếp nhận hồ sơ: Thầy Lê Thanh Cán&lt;br /&gt;\n&lt;strong&gt;Hạn nộp hồ sơ: 30/09/2017&lt;/strong&gt;.&lt;br /&gt;\n&lt;br /&gt;\n&lt;strong&gt;&lt;em&gt;Lưu ý:&lt;/em&gt;&lt;/strong&gt;&lt;br /&gt;\n-&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Nhận hồ sơ tuyển dụng mỗi ngày.&lt;br /&gt;\n-&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Nhà trường không hoàn lại hồ sơ không được tuyển dụng.&lt;/p&gt;', 3, 12, 0, 1, 1, 0, '2017-11-30 11:50:29'),
(7, 'THPT TRƯỜNG THI - “VÌ MỘT HỌC ĐƯỜNG KHÔNG MA TÚY”', 'Nếu như trước đây khi nhắc đến ma túy là người ta nghĩ ngay đến heroin, thuốc phiện thì giờ đây đã xuất hiện thêm cần sa, cỏ mỹ đặc biệt là ketamim, ma túy tổng hợp (hay còn gọi là ma túy đá) ...', '', 'thpt-truong-thi-â€œvi-mot-hoc-duong-khong-ma-tuyâ€', 'tin-nha-truong', '&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;Nếu như trước đây khi nhắc đến ma túy là người ta nghĩ ngay đến heroin, thuốc phiện thì giờ đây đã xuất hiện thêm cần sa, cỏ mỹ đặc biệt là ketamim, ma túy tổng hợp (hay còn gọi là ma túy đá) với mức độ nguy hiểm gấp hàng trăm lần so với ma túy truyền thống. Khi mà các cơ quan chức năng đang đau đầu chưa tìm ra được biện pháp, giải pháp điều trị triệt để thì hiện tại những loại ma túy tổng hợp đó đã trở thành xưa cũ để nhường chỗ cho &amp;ldquo;bùa lưỡi&amp;rdquo;, &amp;ldquo;nước vui&amp;rdquo;, &amp;ldquo;trà sữa&amp;rdquo;, &amp;ldquo;lá khát&amp;rdquo; &amp;hellip;.&lt;br /&gt;\n&lt;br /&gt;\n&amp;nbsp; &amp;nbsp;&amp;nbsp;Chúng đã và đang tung hoành ngang dọc trong giới trẻ trên thế giới và tại Việt Nam. Chúng len lỏi vào trong cuộc sống của nhiều gia đình không phân biệt già trẻ, gái trai, hủy hoại tương lai của nhiều người trong đó có một số lượng lớn là học sinh. Vậy phải làm sao đây? Nguyên nhân nào? Tại sao lại như vậy?&lt;br /&gt;\n&lt;br /&gt;\n&amp;nbsp; &amp;nbsp;&amp;nbsp;Phải chăng một phần là do công tác truyền thông, vận động để nâng cao nhận thức và hiểu biết cho các em chưa được cao và đặc biệt là chủ đề, nội dung còn chưa phù hợp với từng đối tượng cụ thể? Và một phần do các em với tâm lý chủ quan, tò mò, dễ bị lôi kéo, kích động đã dẫn đến tình trạng học sinh sa ngã vào tệ nạn ma túy tiếp tục tăng.&amp;nbsp;&lt;br /&gt;\n&lt;br /&gt;\n&amp;nbsp; &amp;nbsp;&amp;nbsp;Hơn thế nữa ngoài xã hội đâu đó vẫn còn có những con người, những trái tim thờ ơ, vô cảm trước tệ nạm ma túy, họ cho rằng ma túy không phải là việc của họ, là việc của nhà hàng xóm, của xã hội. Nếu nhìn thấy một ai đó sử dụng ma túy trái phép ngay trước mặt họ, miễn không phải là chồng con họ, họ không quan tâm, để ý. Rất nhiều phụ huynh suy nghĩ chủ quan rằng chỉ cần mình có tiền, cho con cuộc sống đầy đủ, học hành đến nơi, đến chốn thì con cái sẽ thành đạt và không bao giờ dính vào ma túy. Nhưng nếu chúng ta không lường trước mọi việc và có biện pháp ngăn ngừa thì sẽ là quá muộn khi con cái đã dấn sâu vào con đường ma túy.&lt;br /&gt;\n&lt;br /&gt;\n&amp;nbsp; &amp;nbsp; &amp;nbsp;Đứng trên quan điểm lập trường&amp;nbsp;&lt;em&gt;&amp;ldquo;học đi đôi với hành&amp;rdquo;, &amp;ldquo;Lý thuyết gắn liền&lt;/em&gt;&amp;nbsp;&lt;em&gt;với hành động&amp;rdquo;&lt;/em&gt;chúng tôi có quan điểm khác, đó là trước khi dạy dỗ, đào tạo các em thành người tài người giỏi cho xã hội, cho đất nước thì phải dạy các em nhân cách làm người và giữ gìn nhân cách trong mọi hoàn cảnh.&lt;br /&gt;\n&lt;br /&gt;\n&amp;nbsp; &amp;nbsp; &amp;nbsp;Thực hiện chủ trương đổi mới của Bộ GD&amp;amp;ĐT, xuất phát từ nhu cầu, nguyện vọng cũng như mong muốn của bản thân học sinh nói riêng và xã hội nói chung về vấn đề nâng cao nhận thức về ma túy, kỹ năng phòng chống ma túy, nói &amp;ldquo;không&amp;rdquo; với ma túy, kỹ năng ứng phó với những tình huống dẫn tới nguy cơ sử dụng ma túy, ngày 21/9/2016 vừa qua, trường THPT Trường Thi đã phối hợp với Viện nghiên cứu tâm lý và hỗ trợ người sử dụng ma túy - PSD tổ chức chương trình truyền thông&amp;nbsp;&lt;em&gt;&amp;ldquo;Vì một học đường không ma túy&amp;rdquo;.&lt;/em&gt;&lt;/p&gt;', 3, 12, 0, 1, 1, 0, '2017-11-30 12:29:43'),
(10, 'LỄ KẾT NẠP ĐẢNG VIÊN MỚI CỦA CHI BỘ TRƯỜNG THPT TRƯỜNG THI', 'Sáng ngày 27/12/2014, tại trường THPT Trường Thi, Chi bộ trường THPT Trường Thi thuộc Đảng bộ phường Trường Thi đã tiến hành lễ kết nạp Đảng viên mới cho quần chúng ưu tú Đào Thị Ngọc Thùy hiện đang công tác ở vị trí Phó chủ tịch HĐQT nhà trường. Lễ kết nạp diễn ra trong không khí trang nghiêm và theo đúng các trình tự, thủ tục được quy định.', 'http://localhost:8888/truongthi/Images/dangvien.jpg', 'le-ket-nap-dang-vien-moi-cua-chi-bo-truong-thpt-truong-thi', 'dang-vien', '&lt;p&gt;Sáng ngày 27/12/2014, tại trường THPT Trường Thi, Chi bộ trường THPT Trường Thi thuộc Đảng bộ phường Trường Thi đã tiến hành lễ kết nạp Đảng viên mới cho quần chúng ưu tú Đào Thị Ngọc Thùy hiện đang công tác ở vị trí Phó chủ tịch HĐQT nhà trường. Lễ kết nạp diễn ra trong không khí trang nghiêm và theo đúng các trình tự, thủ tục được quy định.&lt;br /&gt;\nBồi dưỡng, kết nạp đảng viên mới là nhiệm vụ thường xuyên có ý nghĩa quan trọng trong công tác xây dựng Đảng, góp phần phát triển, nâng cao chất lượng và sức chiến đấu của tổ chức cơ sở Đảng nói chung và các cá nhân đảng viên nói riêng. Đặc biệt hơn nữa, chi bộ Đảng trường THPT Trường Thi đang còn rất non trẻ nên lễ kết nạp Đảng viên lần này được xem là bước tiến mới của chi bộ nhà trường. Với ý nghĩa đó, được sự giúp đỡ của chi bộ nhà trường và sự nỗ lực không ngừng của bản thân, đồng chí Đào Thị Ngọc Thùy đã được chi bộ long trọng tổ chức lễ kết nạp vào hồi 9h ngày 27/12/2014.&lt;br /&gt;\n&lt;br /&gt;\n(Ảnh: Lễ kết nạp được diễn ra trong không khí trang nghiêm)&lt;br /&gt;\nTại buổi lễ, đồng chí bí thư chi bộ nhà trường đã trao Quyết định kết nạp và phân công nhiệm vụ cho đảng viên mới, đồng thời phân công các đồng chí trong chi bộ tiếp tục giúp đỡ đồng chí Thùy trong thời gian thử thách là 12 tháng. Đứng trước cờ, đồng chí Thùy đã đọc lời tuyên thệ&lt;br /&gt;\nLễ kết nạp đảng viên mới đã trở thành động lực, là mục tiêu phấn đấu, rèn luyện không ngừng của cán bộ, giáo viên nhà trường với để được đứng vào hàng ngũ của Đảng.&lt;br /&gt;\nMột số hình ảnh trong buổi lễ:&lt;/p&gt;', 3, 12, 0, 1, 1, 0, '2017-12-01 14:23:11');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
