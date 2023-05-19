-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 18, 2023 lúc 06:10 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `book_store`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_name` varchar(200) NOT NULL,
  `ad_phone` varchar(10) NOT NULL,
  `ad_email` varchar(200) NOT NULL,
  `ad_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_name`, `ad_phone`, `ad_email`, `ad_password`) VALUES
(1, 'Đạt', '0981486775', 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(200) NOT NULL,
  `author_description` varchar(1000) NOT NULL,
  `author_img` varchar(200) NOT NULL,
  `author_email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `author`
--

INSERT INTO `author` (`author_id`, `author_name`, `author_description`, `author_img`, `author_email`) VALUES
(5, 'Guillaume Musso', '', 'Guillaume_Musso.jpg', ''),
(6, 'Đường Tửu Khanh', '', 'vô danh.png', ''),
(7, 'Lâu Vũ Tình', '', 'vô danh.png', ''),
(8, 'Nikolai Gogol', '', 'gogol.jpeg', ''),
(9, 'Diệp Lạc Vô Tâm', '', 'vô danh.png', ''),
(10, 'Trần Đức Hiền', '', 'vô danh.png', ''),
(11, 'Macxim Gorki', '', 'Maxim_Gorky_LOC_Restored_edit1.jpg', ''),
(12, 'Anton Pavlovich Chekhov', '', 'aston.jpg', ''),
(13, 'Nam Cao', '', 'Nam-Cao.jpg', ''),
(14, 'Nguyễn Du', '', 'Tượng_đài_cụ_Nguyễn_Du.jpg', ''),
(15, 'Diệp Tử', '', 'vô danh.png', ''),
(16, 'Cố Tây Tước', '', 'vô danh.png', ''),
(17, 'Vãn Tình', '', 'vô danh.png', ''),
(19, 'Khiêu Dược Hoả Diễm', '', 'vô danh.png', ''),
(21, 'Minato Kanae', '', 'minato.jpeg', ''),
(22, 'Higashino Keigo', '', 'higashino-keigo-3797.png', ''),
(23, 'Lưu Hiểu Huy', '', 'vô danh.png', ''),
(24, 'Hà Mạt Bì', '', 'vô danh.png', ''),
(25, 'Tống Ngọc', '', 'vô danh.png', ''),
(26, 'Nguyễn Ngọc Thạch', '', 'vô danh.png', ''),
(27, 'Nguyễn Văn Ba', '', 'vô danh.png', ''),
(28, ' Quỷ Cổ Nữ', '', 'vô danh.png', ''),
(29, 'Neil Gaiman', '', 'gaiman.jpg', ''),
(30, 'Bob Tricker', '', 'tricker.jpeg', ''),
(31, 'Jocko Willink', '', 'jocko willink.jpg', ''),
(32, 'Jacob Morgan', '', 'jacob morgan.jpg', ''),
(33, 'Robin Sharma', '', 'robin sharna.jpeg', ''),
(34, 'Michael. H. Hugos', '', 'michael-h-hugos.jpg', ''),
(35, 'Allan Dib', '', 'allan dib.jpeg', ''),
(36, 'Seth Godin', '', 'seth godin.jpg', ''),
(37, 'Markus Rach', '', 'markus-rach.jpg', ''),
(38, 'Rio Creative', '', 'vô danh.png', ''),
(39, 'John J Murphy', '', 'murphy.jpeg', ''),
(40, 'Yuichiro Ichikawa', '', 'yuichiro.jpeg', ''),
(41, 'Roger E. A. Farmer', '', 'roger-e-a-farmer.jpeg', ''),
(42, 'Michael Goodwin', '', 'goodwin.jpg', ''),
(43, ' Matthew Wride', '', '20160113185015-MatthewWride.jpeg', ''),
(44, 'Timothy Ferris', '', 'vô danh.png', ''),
(45, 'Vương Ni', '', 'vô danh.png', ''),
(46, 'Lâm Minh Chánh', '', 'vô danh.png', ''),
(47, 'Nguyễn Văn Ngọc', '', 'vô danh.png', ''),
(48, 'Frederic S. Mishkin', '', 'Frederic_Mishkin,_Federal_Reserve_photo_portrait.jpg', ''),
(49, 'McGraw-Hill', '', 'mcgraw.jpeg', ''),
(50, 'Rubén Villahermosa Chaves', '', 'ruben villaa.jpg', ''),
(51, 'The Zhishi', '', 'vô danh.png', ''),
(52, 'Nhật Phạm', '', 'vô danh.png', ''),
(53, 'Minh Tâm', '', 'vô danh.png', ''),
(54, 'Trang Anh', '', 'vô danh.png', ''),
(55, ' Moon', '', 'vô danh.png', ''),
(56, 'Kim Hye Ri', '', 'kim hye ri.jpeg', ''),
(57, 'Trung Tâm Hàn Ngữ Seoul', '', 'hàn ngữ.png', ''),
(58, 'The Changmi', '', 'vô danh.png', ''),
(59, 'Yu Semi', '', 'vô danh.png', ''),
(60, 'Huy Khang', '', 'vô danh.png', ''),
(61, 'Eriko Sato', '', 'sato.jpg', ''),
(62, 'Tiểu Dã', '', 'vô danh.png', ''),
(63, ' Nguyễn Hiến Lê', '', 'vô danh.png', ''),
(64, 'Trác Nhã', '', 'vô danh.png', ''),
(65, 'Dương Minh Hào', '', 'vô danh.png', ''),
(66, 'Đậu Thị Nhung', '', 'vô danh.png', ''),
(67, 'Việt An', '', 'vô danh.png', ''),
(69, 'Grimm Story', '', 'vô danh.png', ''),
(71, 'Khương Nguy', '', 'vô danh.png', ''),
(72, 'Shannon Thomas', '', 'thomas.jpg', ''),
(73, 'Jo Hemmings', '', 'jo_hemmings_ads_.jpg', ''),
(74, 'Trần Lộ', '', 'vô danh.png', ''),
(75, 'Rolf Dobelli', '', '1200px-Rolf_dobelli_2010.jpg', ''),
(76, 'Albert Rutherford', '', 'vô danh.png', ''),
(77, 'Lý Tử Quyên', '', 'vô danh.png', ''),
(78, 'Phan Đăng', '', 'vô danh.png', ''),
(79, 'Jennifer Moore', '', 'moore.jpeg', ''),
(80, 'John C. Maxwell', '', 'John_C._Maxwell.jpg', ''),
(81, 'Hầu Gia', '', 'vô danh.png', ''),
(82, 'Nguyễn Thị Thu Huế', '', 'vô danh.png', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `user_id` int(11) NOT NULL,
  `prd_id` int(11) NOT NULL,
  `cart_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `ctg_id` int(11) NOT NULL,
  `ctg_name` varchar(100) NOT NULL,
  `ctg_description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`ctg_id`, `ctg_name`, `ctg_description`) VALUES
(5, 'Sách tiểu thuyết', 'Tiểu thuyết là một thể loại văn xuôi có hư cấu, thông qua nhân vật, hoàn cảnh, sự việc để phản ánh bức tranh xã hội rộng lớn và những vấn đề của cuộc sống con người, biểu hiện tính chất tường thuật, tính chất kể chuyện bằng ngôn ngữ văn xuôi theo những chủ đề xác định'),
(6, 'Truyện ngắn', 'Truyện ngắn là một thể loại văn học. Nó thường là các câu chuyện kể bằng văn xuôi và có xu hướng ngắn gọn, súc tích và hàm nghĩa hơn các câu truyện dài như tiểu thuyết. Thông thường truyện ngắn có độ dài chỉ từ vài dòng đến vài chục trang, trong khi đó tiểu thuyết rất khó dừng lại ở con số đó. Vì thế, tình huống truyện luôn là vấn đề quan trọng bậc nhất của nghệ thuật truyện ngắn'),
(7, 'Sách ngôn tình', 'Tiểu thuyết lãng mạn hay tiểu thuyết tình cảm là một thuật ngữ tạm thời để mô tả dòng văn xuôi (hoặc đôi khi văn vần) khai thác các mối quan hệ hoan lạc - tình ái giữa người với người, thông thường có một kết thúc hạnh phúc và có hậu. Ngôn tình được biết đến là loại tiểu thuyết tình cảm có nguồn gốc từ Trung Quốc. Hoàn cảnh xảy ra của ngôn tình thì rất đa dạng phong phú như có thể diễn ra ở thời hiện đại, thời xưa, thần tiên…'),
(8, 'Truyện trinh thám', 'Truyện trinh thám hay tiểu thuyết trinh thám (tiếng Pháp: roman détective) là một tiểu loại của tiểu thuyết phiêu lưu. Bản thân tên gọi thể loại đã làm nổi bật một vài đặc điểm riêng của nó.\r\n\r\nNó nói lên nghề nghiệp của nhân vật chính. Nhân vật chính có thể là “thám tử”, là “mật thám”, hay “điều tra viên” gì đó, nhưng đều có nghề nghiệp chung là dò la, điều tra, khám phá cái bí mật còn nằm trong bóng tối.\r\nNó chứng tỏ, đây là truyện vụ án, truyện viết về tội phạm, một loại truyện rất phổ biến ở các nước phương Tây.\r\nNó mách bảo người sáng tác cách thức xây dựng cốt truyện: phải giữ đến cùng những bí mật của tội phạm để tạo nên sự hấp dẫn, khiến người đọc luôn luôn ở trong trạng thái căng thẳng.\r\nCái bí mật bao giờ cũng tạo nên sự hứng thú, hấp dẫn đối với người đọc. Nhưng chắc chắn, nghề “trinh thám” không thể trở thành cốt truyện phổ biến trong văn học, khi phạm tội chưa trở thành một hiện tượng xã hội phổ biến.'),
(9, 'Truyện kinh dị', 'Truyện kinh dị hay giả tưởng kinh dị là một thể loại biểu đạt với mục đích hoặc có khả năng tạo ra những cảm xúc tiêu cực như lo lắng, sợ hãi hay làm độc giả, khán giả giật mình bằng những nội dung kinh hoàng. Nhà văn-sử gia J. A. Cuddon định nghĩa những câu chuyện kinh dị là \"một tác phẩm viết bằng văn xuôi dài hay ngắn mà trong đó tạo nên những cú sốc hay thậm chí là nỗi sợ hãi đối với người đọc, hoặc gây ra một cảm giác thù ghét hay kinh tởm\"'),
(10, 'Sách quản trị lãnh đạo', 'là tài liệu cung cấp kiến thức và kỹ năng để quản lý và lãnh đạo hiệu quả các tổ chức, đội nhóm và doanh nghiệp\r\n'),
(11, 'Sách marketing bán hàng', 'là tài liệu giúp người đọc hiểu và áp dụng các phương pháp, kỹ năng để tiếp cận khách hàng, tạo nhu cầu và tăng doanh số bán hàng'),
(12, 'Sách phân tích kinh tế', 'là tài liệu cung cấp các phương pháp và kỹ thuật phân tích dữ liệu, đánh giá về kinh tế, tình hình thị trường và hoạt động kinh doanh của các tổ chức'),
(13, 'Sách nhân sự việc làm', 'là tài liệu giúp người đọc hiểu và áp dụng các kỹ năng và phương pháp để quản lý, đào tạo, tuyển dụng và phát triển nguồn nhân lực trong tổ chức'),
(14, 'Sách tài chính ngân hàng', 'là tài liệu cung cấp các kiến thức và kỹ năng về tài chính, ngân hàng, đầu tư và quản lý rủi ro tài chính cho các tổ chức và cá nhân'),
(15, 'Sách tiếng Anh', 'là tài liệu cung cấp kiến thức, ngữ pháp, từ vựng và kỹ năng để học và sử dụng tiếng Anh trong giao tiếp, đọc và viết.'),
(16, 'Sách tiếng Nhật', 'là tài liệu cung cấp kiến thức, từ vựng và kỹ năng để học và sử dụng tiếng Nhật trong giao tiếp, đọc và viết'),
(17, 'Sách tiếng Trung', 'là tài liệu cung cấp kiến thức, từ vựng và kỹ năng để học và sử dụng tiếng Trung trong giao tiếp, đọc và viết'),
(18, 'Sách tiếng Hàn', 'là tài liệu cung cấp kiến thức, từ vựng và kỹ năng để học và sử dụng tiếng Hàn trong giao tiếp, đọc và viết'),
(19, 'Sách luyện thi', ' là tài liệu giúp người đọc chuẩn bị và rèn luyện kiến thức và kỹ năng để đạt được kết quả tốt nhất trong các kỳ thi, bao gồm các kỳ thi đại học, chứng chỉ ngoại ngữ và các kỳ thi chuyên ngành khác'),
(20, 'Sách kỹ năng sống', 'là tài liệu giúp người đọc nắm vững những kỹ năng cần thiết để tự quản lý cuộc sống của mình, bao gồm kỹ năng lập kế hoạch, quản lý thời gian, giải quyết vấn đề, tăng cường sức khỏe và cải thiện chất lượng cuộc sống'),
(21, 'Sách tâm lý', 'là tài liệu cung cấp kiến thức về tâm lý học, các khía cạnh tâm lý của con người, các bệnh tâm lý và các phương pháp điều trị'),
(22, 'Sách kỹ năng giao tiếp', 'là tài liệu giúp người đọc nâng cao kỹ năng giao tiếp, bao gồm các kỹ năng lắng nghe, nói, viết và đọc hiểu để tạo ra một môi trường giao tiếp hiệu quả và đạt được mục tiêu'),
(23, 'Sách rèn luyện nhân cách', 'là tài liệu giúp người đọc hiểu và phát triển nhân cách của mình, bao gồm các kỹ năng quản lý cảm xúc, tư duy tích cực, xây dựng lòng tự trọng, và thúc đẩy sự phát triển bản thân.'),
(24, 'Sách tư duy', 'là tài liệu giúp người đọc rèn luyện và phát triển kỹ năng tư duy, bao gồm các kỹ năng như phân tích, suy luận, đánh giá, giải quyết vấn đề và sáng tạo để giải quyết các tình huống phức tạp trong cuộc sống');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `discount`
--

CREATE TABLE `discount` (
  `discount_id` int(11) NOT NULL,
  `discount_name` varchar(200) NOT NULL,
  `discount_content` varchar(200) NOT NULL,
  `discount_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_money` int(11) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL,
  `prd_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `prd_id` int(11) NOT NULL,
  `prd_name` varchar(200) NOT NULL,
  `prd_in_stock` int(11) NOT NULL,
  `prd_in_order` int(11) NOT NULL,
  `prd_price` int(11) NOT NULL,
  `prd_img` varchar(200) NOT NULL,
  `prd_release` date NOT NULL,
  `publisher_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `ctg_id` int(11) NOT NULL,
  `discount_id` int(11) DEFAULT NULL,
  `prd_description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`prd_id`, `prd_name`, `prd_in_stock`, `prd_in_order`, `prd_price`, `prd_img`, `prd_release`, `publisher_id`, `author_id`, `ctg_id`, `discount_id`, `prd_description`) VALUES
(7, 'Cuộc Đời Là Một Tiểu Thuyết', 20, 0, 134000, '1.png', '2023-03-18', 3, 5, 5, NULL, 'Với anh, mọi thứ đã được viết sẵn\r\n\r\nVới cô, mọi thứ đang đợi viết tiếp\r\n\r\n“Sáu tháng trước, ngày 12 tháng Tư năm 2010, con gái ba tuổi của tôi, Carrie Conway, đã bị bắt cóc trong lúc hai mẹ con đang chơi trốn tìm trong căn hộ nhà mình ở Williamsburg.”\r\n\r\nCâu chuyện của Flora Conway, nữ tiểu thuyết gia nổi tiếng sống kín đáo, đã bắt đầu như thế. Carrie đột ngột mất tích, không cách nào lý giải được. Cửa chính và các cửa sổ đều đóng kín, các camera giám sát trong tòa nhà không phát hiện điều khả nghi nào. Cuộc điều tra của cảnh sát không mang lại kết quả gì.\r\nCùng thời điểm ấy, ở bờ kia Đại Tây Dương, một nhà văn với trái tim tan nát trốn tránh xã hội trong một ngôi nhà xập xệ, bế tắc với tiểu thuyết đang viết dở'),
(8, 'Thương tiến tửu - Tập 1 (Tiểu thuyết đam mỹ)', 25, 0, 150000, '2.webp', '2023-03-18', 4, 6, 5, NULL, '“Vận mệnh đã muốn ta suốt kiếp chôn chân tại chốn này, nhưng số mệnh ấy nào phải con đường ta lựa chọn. Cát vàng chôn vùi huynh đệ ta, ta không muốn tiếp tục thần phục số mệnh hư vô nữa. Thánh chỉ không cứu được sĩ tốt của ta, triều đình không nuôi nổi chiến mã của ta, ta không muốn liều mạng vì những thứ đó nữa. Ta muốn băng qua núi xanh kia, ta muốn đánh một trận, vì chính mình.'),
(9, 'Tiểu Thuyết Ngược Tâm Trung Quốc Đặc Sắc: Thất Tịch Không Mưa', 20, 0, 86000, '3.webp', '2023-03-18', 4, 7, 5, NULL, 'Từ nhỏ cô đã thầm yêu anh, như số kiếp không thể thay đổi tình yêu trong sáng ấy, như lần đầu được nếm mùi vị của quả khế mới chín. Sau đó cô và anh xa nhau, gặp lại đều cách nhau ba năm. 15 tuổi, anh lên phía bắc học, từ đó mất liên lạc; 18 tuổi, cô nông nổi đi gặp anh, đổi lại là sự đau lòng; 21 tuổi, cuối cùng anh cũng quay về để chịu tang mẹ; 24 tuổi, anh kết hôn, đưa người vợ mới cưới tới tận nơi xa. Anh từng là thần hộ mệnh của cô, dịu dàng, cẩn thận che chở, bao dung. Đã từng ngoắc tay với cô, thề sẽ mãi mãi ở bên nhau. Cô có thể mất đi tất cả, nhưng không thể không có anh - người hiểu cô nhất. Ngày 7-7 là ngày gặp mặt của Ngưu Lang Chức Nữ, mưa ngày 7-7 là nước mắt của nỗi nhớ nhung vậy. Giờ cô 27 tuổi, liệu có thể có một ngày 7-7 không mưa, để cô được gặp lại anh một lần nữ'),
(10, 'Cuốn Sách Tiểu Thuyết Lãng Mạn Hay Của Nikolai Gogol: Những Linh Hồn Chết', 30, 0, 153000, '4.webp', '2023-03-18', 8, 8, 5, NULL, 'Ít có cuốn tiểu thuyết nào có nhân vật chính “khó ưa” như vậy nhưng lại cuốn hút đến như vậy. Những linh hồn chết là câu hỏi lớn mà Nikolai Gogol đặt ra không chỉ cho người Nga cùng thời với ông mà cho con người ở mọi nước, mọi thời: bạn sống như thế nào để cho không phải bạn sống mà cũng bằng như chết, như một thân xác sống mà bên trong đó là một linh hồn đã chết? Sự mục ruỗng về tâm hồn của Chichikov và những người như y phải chăng là căn bệnh ung thư của riêng người Nga cùng thời với Gogol, hay đúng hơn là căn bệnh ung thư chung của loài người trong thời đại chúng ta đây?'),
(11, 'Tiểu Thuyết Lãng Mạn Trung Quốc: Chờ Em Lớn Nhé Được Không?', 25, 0, 99000, '5.webp', '2023-03-18', 4, 9, 5, NULL, 'Hàn Mạt Mạt, từ năm 8 tuổi đến năm 18 tuổi, cả cuộc sống của cô chỉ biết có anh, cần anh, theo anh, vì anh…\r\n\r\nNếu đó không phải là tình yêu, phải chăng Mạt Mạt sẽ không cần đau lòng thêm nữa? Khi nhận ra tình yêu trẻ thơ của mình đối với anh chỉ là gánh nặng, cô đã quyết định buông tay, rời xa sự che chở của anh, rời xa sự ấm áp của anh. Nếu hạnh phúc của cô phải đánh đổi bằng sự chịu đựng của anh thì có lẽ cả đời này Mạt Mạt không cần thứ hạnh phúc xa xỉ ấy nữa.'),
(12, 'Vầng Sáng', 30, 0, 150000, '6.webp', '2023-03-18', 4, 10, 6, NULL, 'Vầng sáng\r\n\r\n“ Tôi cảm thấy mình bất lực trước những số phận , hoàn cảnh khổ đau,bi thương trong đời sống.\r\nVăn chương là cách để tôi tìm sự đồng cảm ấy cũng những giá trị nhân văn!”\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....'),
(13, ' Tuyển Truyện Ngắn Macxim Gorki', 15, 0, 113000, '7.webp', '2023-03-18', 3, 11, 6, NULL, 'Trong truyện ngắn Macxim Gorki bộc lộ niềm khao khát tự do và ca ngợi ý chí hào hùng, bất khuất của con người, phơi bày tính chất tàn bạo của chế độ xã hội – chính trị trước cách mạng, cái chế độ giết chết mọi cái có sức sống trong con người; quá trình trăn trở, tự ý thức đầy gian khổ của các tầng lớp “dưới đáy” để vươn tới sự đổi đời; đề cao và thi vị hoá lao động: phê phán lối sống và tâm lý ươn hèn của tầng lớp trí thức tiểu tư sản và tư sản; những truyện ngắn triết lý, những truyện có tính chất tự thuật'),
(15, 'Tuyển Truyện Ngắn Antôn Sêkhốp', 25, 0, 154000, '8.webp', '2023-03-18', 8, 12, 6, NULL, 'Phải đến giữa thế kỷ XX, văn học Nga, văn học Xô viết mới đến với đông đảo bạn đọc nước ta. Tuy trước đó, những người Nga đầu tiên đã sớm có mặt ở Việt Nam ngay vào thời điểm thực dân Pháp xâm chiếm nước ta. Một trong những người Nga đầu tiên đó là trung úy hải quân Nga Konxtantin Mikhailovich Stannhiukovich (1843-1903), được nhà nước Nga hoàng phái tới Sài gòn suốt mấy tháng trời. Sau này trở thành nhà văn dân chủ nổi tiếng, năm 1885 ông đã công bố bút ký về chuyến đi mấy chục năm trước của mình: \"Ba tháng ở Sài Gòn\" trong tác phẩm \"Chuyến đi vòng quang thế giới trên chiến hạm Con Ó\"'),
(16, 'Tinh Hoa Văn Học Việt Nam - Truyện Ngắn Nam Cao', 25, 0, 75000, '9.jpg', '2023-03-18', 3, 13, 6, NULL, 'ập truyện ngắn của nhà văn Nam Cao  thực sự là người bạn lý tưởng cho những độc giả yêu thích văn học, và nhất là những tác phẩm văn học trong nước thấm đẫm tinh thần nhân đạo.\r\n\r\nNhững tác phẩm đặc sắc của nhà văn phần lớn được viết trước chiến tranh với đề tài chủ yếu là cuộc sống khổ đau của dân quê dưới bao tầng áp bức bóc lột, với những hủ tục của một thời mà người nông dân nghèo chỉ biết bám víu vào những hư vị hão trong thôn đảng cùng những thói tật của họ như các truyện Chí Phèo, Lão Hạc, Nghèo, Một đám cưới, Mua danh, Trẻ con không được ăn thịt chó,… Đó còn là cuộc sống quẩn quanh tẻ nhạt, nghèo khó, bế tắc của tầng lớp trí thức tiểu tư sản như trong Đời thừa, Giăng sáng, Quên điều độ…'),
(17, 'Nguyễn Du - Truyện Thúy Kiều (Bản Đặc Biệt) ', 20, 0, 80000, '10.webp', '2023-03-18', 3, 13, 6, NULL, 'Từ lâu, Truyện Kiều của Nguyễn Du đã hiện diện trong đời sống của dân tộc Việt Nam ta và trở thành một phần quan trọng làm nên vẻ đẹp của tâm hồn Việt, tinh hoa văn hóa Việt. Vượt qua thăng trầm lịch sử, “Truyện Kiều” đã thực sự có một đời sống phong phú và sinh động trong lòng nhân dân ta, đồng thời, với những giá trị tự thân của mình, tác phẩm dường như cũng trở thành một chiếc chìa khóa mở đường cho bè bạn quốc tế đến với nền văn hóa, văn học, nghệ thuật của dân tộc ta. Càng đọc Kiều, càng hiểu Kiều, ta càng trân trọng di sản tinh thần vô giá mà cha ông đã để lại và tin rằng: “Truyện Kiều còn, tiếng ta còn, tiếng ta còn, nước ta còn” (Phạm Quỳnh).\r\n\r\n'),
(18, 'Bạn Trai Tôi Mắc Chứng Hoang Tưởng', 20, 0, 180000, '11.webp', '2023-03-18', 5, 15, 7, NULL, 'Một tai nạn kinh hoàng biến chàng chủ tịch đẹp trai, đa tài thành bệnh nhân mắc chứng hoang tưởng kỳ quặc.\r\n\r\nMột món nợ khổng lồ khiến cô nàng bác sĩ tâm lý mới ra trường liều mình nhảy vào hố lửa.\r\n\r\nTrong thế giới của Chu Tuyên Văn, anh là hoàng đế cao cao tại thượng, cô là phi tử rất mực nhu mì.\r\n\r\nTrong thế giới của La Khai Hoài, anh là bệnh nhân tâm thần IQ cực đỉnh, còn cô là bác sĩ nghèo rớt mồng tơi.\r\n\r\nHai người bất đắc dĩ trở thành một cặp đôi “oan gia”, cùng nhau trải qua những tình huống bi hài khó đỡ.\r\n\r\nAnh bày ra thiên la địa võng, cuối cùng, mắc bẫy lại chính là trái tim của anh…'),
(19, 'Yêu Đúng Lúc, Gặp Đúng Người', 10, 0, 118000, '12.webp', '2023-03-18', 4, 16, 7, NULL, 'Một câu chuyện ấm áp đáng yêu khiến tất cả mọi người đều vui vẻ. Một câu chuyện đáng yêu khác tiếp nối sau “All in love” của Cố Tây Tước. Cuốn sách được biết đến với tên trân mạng “ĐÚNG NGƯỜI, ĐÚNG THỜI ĐIỂM”.\r\n\r\n“Đúng thời điểm, gặp đúng người, không phải là rung động mãnh liệt, mà là yên bình vĩnh cửu.”\r\n\r\nCó người nói, Giang An Lan lạnh lùng cao ngạo, vênh váo coi trời bằng vung; Có người nói, trêu trời chọc đất cũng tuyệt đối không được chọc vào Giang An Lan, bởi vì anh ta luôn có thể khiến bạn hối hận chỉ mong làm lại từ đầu; Có người nói, Giang An Lan, đến cả “mặt dày” cũng là đẳng cấp đại thần.'),
(20, 'Rất Thích Rất Thích Em', 20, 0, 149000, '13.webp', '2023-03-18', 8, 17, 7, NULL, 'Sự trở lại của nữ hoàng dòng sách truyền cảm hứng Vãn Tình, cùng một cuốn sách mới lạ và hấp dẫn. Dành tặng bạn một giấc mơ thanh xuân vừa ngọt ngào vừa có chút đắng ngắt, vừa hết mình vừa pha lẫn ít nhiều tiếc nuối.\r\n\r\n“Trong cuộc đời này, thật sự không dễ gặp được người mình thích mà vừa hay cũng thích mình, nếu đã gặp được rồi thì phải nâng niu tình cảm đó hệt như nâng niu đôi mắt của bản thân, bởi vì chưa chắc kiếp sau còn có thể gặp lại nhau. Đi cứu vãn, đi tìm chưa chắc đã giành lại được người ta, nhưng nếu không cố gắng làm gì đó thì nhất định sẽ đánh mất.”\r\n– Rất thích rất thích em (Vãn Tình'),
(21, 'Chờ Em Lớn Nhé Được Không (Tái Bản 2019)', 15, 0, 99000, '14.webp', '2023-03-18', 10, 9, 7, NULL, 'Hàn Mạt Mạt, từ năm 8 tuổi đến năm 18 tuổi, cả cuộc sống của cô chỉ biết có anh, cần anh, theo anh, vì anh… Nếu đó không phải là tình yêu, phải chăng Mạt Mạt sẽ không cần đau lòng thêm nữa? Khi nhận ra tình yêu trẻ thơ của mình đối với anh chỉ là gánh nặng, cô đã quyết định buông tay, rời xa sự che chở của anh, rời xa sự ấm áp của anh. Nếu hạnh phúc của cô phải đánh đổi bằng sự chịu đựng của anh thì có lẽ cả đời này Mạt Mạt không cần thứ hạnh phúc xa xỉ ấy nữa.'),
(22, 'Quan Hệ Nguy Hiểm (Tái Bản)', 20, 0, 118000, '15.webp', '2023-03-18', 7, 19, 7, NULL, 'Sơ Vũ là bác sỹ Hoa kiều ở Thái. Một lần, cô vô tình bị bọn buôn thuốc phiện bắt cóc. Xuất hiện một người đàn ông bí ẩn như câu đố, bất cần và lạnh lùng ra tay cứu cô, một người không quen biết trong vụ nổ. Lục Tử Mặc, Tam ca của tập đoàn buôn ma túy lớn nhất Thái Lan.\r\n\r\nAnh đem mạng sống của mình du ngoạn ở quỷ môn quan. Trong thời khắc đen tối nhất, vận mệnh đã trói buộc anh và một người phụ nữ vào mối quan hệ nguy hiểm. Tất nhiên, do thân phận khác biệt, đen và trắng, họ như hai đường thẳng song song không bao giờ tiếp cận và cắt nhau.\r\n\r\nTrong cuộc truy sát đến ngừng thở, họ bắt đầu dính vào nhau như hình với bóng. Cuối cùng, Tử Mặc và Sơ Vũ làm thế nào mới thoát ra khỏi mưa máu gió tanh, tìm lại bình yên cho riêng mình?'),
(23, 'Án Mạng Mười Một Chữ', 25, 0, 110000, '16.webp', '2023-03-18', 11, 22, 8, NULL, 'Tình cờ phát hiện những điều bất thường sau cái chết thảm khốc của người yêu, nhân vật “tôi”, một nữ nhà văn viết tiểu thuyết trinh thám đã cùng bạn mình, Hagio Fuyuko, cũng là biên tập viên phụ trách sách của “tôi” quyết định điều tra về cái chết này. Trong quá trình điều tra hai người phát hiện người yêu của “tôi” đã từng gặp tai nạn lật thuyền trong chuyến du lịch đảo một năm trước. Và khi họ tìm tới những người cũng tham gia chuyến đi đó để tìm hiểu thì những người này cũng lần lượt bị sát hại. Cuối cùng “tôi” buộc phải tự mình phán đoán, điều tra để tìm ra chân tướng sự việc.\r\n\r\nÁn mạng mười một chữ cũng đã được chuyển thể thành phim truyền hình vào năm 2011'),
(25, 'Thú Tội', 15, 0, 154000, '17.webp', '2023-03-18', 4, 21, 8, NULL, 'Cảnh sát nhận định đây là vụ tai nạn nhưng Moriguchi biết ai đã sát hại con gái mình -  kẻ ở ngay trong lớp học do mình chủ nhiệm. Moriguchi bắt đầu kế hoạch báo thù của riêng cô\r\n\r\n\"Một câu chuyện tâm lý kinh dị, ớn lạnh, thuyết phục, gây bất ngờ không chỉ một lầ dứt, tàn nhẫn và choáng váng.\"\r\n\r\n- WALL STREET JOURNAL\r\n\r\n\"Cuốn sách đáng đọc này vừa tăm tối, gây xáo động và biết đánh lừa độc giả, với giọng văn sắc bén, dồn dập, mỗi chương đều đưa người đọc tới tận cùng căng thẳng.\"'),
(26, 'Hung Khí Hoàn Mỹ', 15, 0, 134, '18.webp', '2023-03-18', 6, 22, 8, NULL, 'Từng là những vận động viên thể thao đã chạm đến đỉnh vinh quang nhưng Anjo Takuma, Niwa Junya, Hiura Yusuke và Sakura Shoko lại cùng nhau chia sẻ một phần quá khứ đáng chôn vùi. Để bảo vệ tương lai của họ, một vụ sát hại đã xảy ra với người biết rõ điều bí mật, cùng mọi dữ liệu liên quan bị tiêu hủy. Kế hoạch tưởng chừng đã êm xuôi và mọi chuyện sẽ mãi mãi chìm vào tro bụi …\r\n\r\nNhưng một cái bóng xinh đẹp và tàn bạo, như con nhện độc Tarantula, đang lẩn lút qua các ngõ ngách thành phố, lần lượt tìm đến từng người báo oán\r\n\r\nDồn dập, kinh hoàng, gói ghém những sự thật sửng sốt. Một kiệt tác đầy chất hành động của bậc thầy truyện trinh thám.'),
(27, 'Ghi Chép Pháp Y – Những Cái Chết Bí Ẩn', 25, 0, 113000, '19.webp', '2023-03-18', 8, 23, 8, NULL, 'Làm cách nào để một “xác chết lên tiếng”? - đó là công việc của bác sĩ pháp y.\r\n\r\n“Ghi chép pháp y - Những cái chết bí ẩn” là cuốn sách nằm trong hệ liệt với “Pháp y Tần Minh” - bộ tiểu thuyết nổi đình đám của xứ Trung đã được chuyển thể thành series phim. Cuốn sách tổng hợp những vụ án có thật, được viết bởi bác sĩ pháp y Lưu Hiểu Huy - người có 15 năm kinh nghiệm và từng mổ xẻ hơn 800 tử thi.\r\n\r\nTrải qua 15 câu chuyện kinh hoàng, cuốn sách sẽ đưa bạn bước vào hiện trường của những vụ án man rợ như: xác chết phi tang dưới cánh đồng ngô, thi thể thiếu nữ không lành lặn, xác chết nhầy nhụa đang bị giòi bọ đục khoét hay một thi thể co cứng trong màng bọc nilon…lần theo những dấu vết, ghép lại sự thật từ những mảnh vụn thi thể, nguyên nhân của cái chết sẽ dần được hé mở.'),
(28, 'Vườn Hoa Mạt Dược Ký Sự - Những Kỳ Án Nổi Tiếng Chưa Có Lời Giải', 10, 0, 118000, '20.webp', '2023-03-18', 6, 24, 8, NULL, 'VƯỜN HOA MẠT DƯỢC KÝ SỰ - Những kỳ án nổi tiếng chưa có lời giải\r\nTừ những thước phim tài liệu của Netflix, cho tới những tài liệu mật chỉ được thẩm tra nhằm phục vụ cho quá trình phá án, “Vườn Hoa Mạt Dược” đã lần lượt thu thập và đăng tải hồ sơ về mười lăm kỳ án trên thế giới. Phần lớn trong số đó là các vụ án chưa tìm được lời giải sau nhiều năm điều tra.\r\n\r\nMười lăm vụ án được phân tích trong bộ hồ sơ trinh thám này là mười lăm kỳ án mà thế giới không bao giờ quên.\r\n\r\nAi đã làm điều đó?\r\nHọ đã làm điều đó như thế nào?'),
(29, 'Những Đồ Vật Có Linh Hồn', 20, 0, 150000, '21.webp', '2023-03-18', 7, 25, 9, NULL, '“Những đồ vật tồn tại ở cõi nhân gian qua nhiều năm sẽ có thần linh hoặc linh hồn đến trú ngụ.” – Bạn có tin không?\r\n\r\n“Cây dừa cao thật là cao \r\n\r\nĐi qua không chào lộn cổ chết tươi…”\r\n\r\nNhững Đồ Vật Có Linh Hồn được viết theo góc nhìn của một người bình thường khi lần đầu biết đến thế giới tồn tại song song với cuộc sống của mình, bao gồm mười câu chuyện ngắn được tác giả biên soạn lại qua lời kể của những người từng có trải nghiệm tâm linh.\r\n\r\nTrần sao âm vậy, những người chết đi ở thế giới này, họ sẽ lại sống ở thế giới khác, có khi là ngay bên cạnh chúng ta, vô tình hoặc hữu ý can thiệp vào cuộc  sống mà chúng ta không biết. Thông qua những đồ vật bình dị, gần gũi, có khi là chiếc lược các bà các mẹ chải đầu, con búp bê vẫn ôm ngày nhỏ hay thậm chí là điếu thuốc hút dở trên tay… nhưng lại được đặt vào những bối cảnh ma mị.'),
(30, 'Đô Thị Linh Dị', 10, 0, 113000, '22.webp', '2023-03-18', 9, 26, 9, NULL, 'Tác phẩm mới nhất của Nguyễn Ngọc Thạch là những câu chuyện có tính chất kỳ dị xảy ra trong chính thành phố mà chúng ta ít nhiều gì cũng đã từng nhìn thấy, nghe thấy để thốt lên rằng, “Sao chuyện này quen vậy!”\r\n\r\nĐó là một cô gái làm mukbang, với tham vọng leo lên vị trí ngôi sao mà bất chấp dùng đủ mọi cách. Cho đến cuối cùng phải trả giá bằng cơn đói kinh khủng hành hạ mỗi phút giây.\r\n\r\nĐó là một chàng trai nhân viên văn phòng nghiện game. Để giải tỏa áp lực từ công việc đã tìm cách hành hạ sếp trong game thực tế ảo.'),
(31, 'Ngôi Làng Linh Thiêng', 15, 0, 99000, '23.webp', '2023-03-18', 11, 27, 9, NULL, 'Ở vùng đồng bằng Bắc Bộ có một ngôi làng cổ tên Đình Long, ngôi làng với nhiều di tích lịch sử, nhiều công trình cổ kính và cũng nhiều điều kỳ lạ xảy ra. Trong làng Đình Long có một cậu con trai tên là Nguyên mồ côi cha từ nhỏ, Nguyên căn cao số nặng lại mang nghiệp âm vì thế cậu đã trải qua rất nhiều sóng gió mới có thể sống sót được. Lớn lên Nguyên luôn gặp trắc trở cả về cuộc sống lẫn tình cảm.\r\n\r\nTừ những trải nghiệm tâm linh, Nguyên dần dần hiểu được số phận của cậu, cậu bắt đầu xâm nhập vào thế giới Tâm Linh huyền bí. Một ngày nọ Nguyên gặp một người con gái rất xinh đẹp nhưng vô cùng bí ẩn, Nguyên không rõ cô gái là ai, xuất hiện với mục đích gì, cô ta thoắt ẩn thoắt hiện như một bóng ma luôn ám ảnh cậ'),
(32, 'Hồ Tuyệt Mệnh', 15, 0, 113000, '24.webp', '2023-03-18', 6, 28, 9, NULL, 'Dù rằng so với những tác phẩm đình đám một thời của Quỷ Cổ Nữ như Kỳ Án Ánh Trăng hay Đau Thương Đến Chết thì Hồ Tuyệt Mệnh không đáng sợ và ma mị bằng nhưng vẫn không thể phủ nhận rằng tác phẩm này có một sức hút rất riêng.\r\n\r\nPhần dẫn truyện ở đầu tác phẩm khá rùng rợn và liêu trai, tuy đi sâu vào mạch truyện tình tiết này đã giảm bớt yếu tố ma quái nhưng quả thật độc giả vẫn không thể đặt quyển sách xuống ngay được.\r\n\r\nĐiểm nhấn của tác phẩm là mối quan hệ giữa Na Lan và Tần Hoài và cách miêu tả độc đáo cuốn hút của tác giả về tính cách anh chàng này khiến nhiều người phải tò mò, đi sâu vào tìm hiểu thực hư. Và lời cảnh báo “Gặp Tần Hoài, lỡ cả một đời người” như càng khiến người đọc lo lắng hơn cho số phận của Na Lan, thót tim cùng từng cuộc hành trình đi tìm sự thật về những cái chết bí ẩn cũng như truyền thuyết từ chiếc hồ Chiêu Dương'),
(33, 'Coraline (Tái Bản 2018)', 25, 0, 154000, '25.webp', '2023-03-18', 8, 29, 9, NULL, 'Khi Coraline bước qua cánh cửa, nó nhìn thấy một ngôi nhà giống hệt nhà mình. Chỉ có điều, mọi thứ dường như tốt đẹp và hấp dẫn hơn. \r\n\r\nNơi ấy có mẹ khác của nó, và cả cha khác nữa. Họ muốn nó ở lại làm con gái bé bỏng của họ. Họ muốn thay đổi nó và giữ nó bên mình mãi mãi.\r\n\r\nNhưng từ phía sau cánh cửa, Coraline mới biết điều nó thật sự cần. Nó khao khát trở lại cuộc sống đích thực của mình. Bằng tất cả trí khôn và lòng dũng cảm, Coraline đã thực hiện một hành trình phi thường, ly kỳ và vô cùng bất ngờ. '),
(35, 'Kiểm Soát Quản Trị (Corporate Governance)', 22, 0, 118000, '26.webp', '2023-03-18', 7, 30, 10, NULL, 'Thế kỷ XX chứng kiến những bước tiến to lớn trong tư tưởng quản lý (management thought); các lý thuyết về tổ chức thực sự đã tiến những bước rất dài về quản trị chiến lược (strategic management). Tuy nhiên, nếu quản lý là tâm điểm chú ý ở thế kỷ XX, kiểm soát quản trị lại là mối quan tâm chính ở thế kỷ XXI. Bob Tricker được xem là “cha đẻ” của Corporate Governance / Kiểm soát quản trị.'),
(36, '12 Quy Tắc Lãnh Đạo Từ Seal (Trách Nhiệm Tối Thượng - Thành Công Tối Đa', 22, 0, 118000, '27.webp', '2023-03-18', 4, 31, 10, NULL, '“Các tác giả này thật mãnh liệt. Và học mang ngọn lửa mãnh liệt ấy vào lời kể của họ trong cuốn sách này. Hãy nghe những sĩ quan SEAL có năng lực điên cuồng này cho bạn biết cách chính xác để tạo dựng một đội nhóm thành công qua những trải nghiệm từ chính họ trong kinh doanh cũng như trong chiến đấu.” - The Hustle\r\n\r\n12 quy tắc chiến đấu trên chiến trường của lực lượng SEAL Mỹ đã được các tác giả đúc rút thành những quy tắc ứng dụng vào môi trường kinh doanh. Khi được áp dụng đúng lúc đúng chỗ, những quy tắc đó sẽ mang lại cho bất kỳ đội nhóm hoặc tổ chức nào, trong bất kỳ môi trường hoạt động nào những thắng lợi và phát triển tương tự.'),
(37, 'Nhà Lãnh Đạo Tương Lai', 20, 0, 110000, '28.webp', '2023-03-18', 4, 32, 10, NULL, 'BẠN CÓ PHẢI LÀ MỘT NHÀ LÃNH ĐẠO TƯƠNG LAI?\r\n\r\nTrong tiểu thuyết The Sun Also Rises (Mặt trời vẫn mọc) của Ernest Hemingway, có đoạn thoại thế này: “‘Thế làm sao mà anh phá sản?’, Bill hỏi. ‘Bằng hai cách thôi. Nó đến từ từ; và rồi đùng một cái, tôi trắng tay!’, Mike đáp.”\r\n\r\n\r\nNHÀ LÃNH ĐẠO TƯƠNG LAI: TẦM NHÌN 10 NĂM VÀ HƠN THẾ NỮA\r\nDường như thế giới kinh doanh đang ngày càng tràn ngập những ý tưởng và chiến lược lãnh đạo mới. Trong khi một vài trong số đó tạo ra được các nhà lãnh đạo xuất sắc, vẫn còn rất nhiều việc phải làm và mọi thứ đang thay đổi rất nhanh!'),
(38, 'Nhà Lãnh Đạo Không Chức Danh', 25, 0, 113000, '29.webp', '2023-03-18', 6, 33, 10, NULL, 'Suốt hơn 15 năm, Robin Sharma đã thầm lặng chia sẻ với những công ty trong danh sách Fortune 500 và nhiều người siêu giàu khác một công thức thành công đã giúp ông trở thành một trong những nhà cố vấn lãnh đạo được theo đuổi nhiều nhất thế giới. Đây là lần đầu tiên Sharma công bố công thức độc quyền này với bạn, để bạn có thể đạt được những gì tốt nhất, đồng thời giúp tổ chức của bạn có thể có những bước đột phá đến một cấp độ thành công mới trong thời đại thiên biến vạn hóa như hiện nay.'),
(39, 'Nguyên Lý Quản Trị Chuỗi Cung Ứng', 10, 0, 200000, '30.webp', '2023-03-18', 4, 34, 10, NULL, 'Nguyên Lý Quản Trị Chuỗi Cung Ứng\r\n\r\nCuốn sách này hướng tới ba độc giả: chủ doanh nghiệp – người quyết định mô hình chuỗi cung ứng phù hợp cũng như chi phí bỏ ra cho nó; các nhà quản lý và nhân viên – những người sớm muộn gì cũng phải chịu trách nhiệm thiết lập và điều hành một phần của chuỗi cung ứng; và cuối cùng là những ai mong muốn được nhanh chóng tiếp cận và tham gia vào các cuộc trao đổi về cơ hội cũng như thách thức mà chuỗi cung ứng mang lại. Những khái niệm và kỹ thuật được trình bày ở đây đều rất thông dụng và ai cũng có thể sử dụng khi bàn luận về đề tài quản lý chuỗi cung ứng.'),
(40, 'Kế Hoạch Marketing Trên Một Trang Giấy (Những Chỉ Dẫn Dễ Hiểu Nhất Cho Một Kế Hoạch Marketing Thông Minh)', 12, 0, 195000, '31.webp', '2023-03-18', 8, 35, 11, NULL, 'Kế Hoạch Marketing Trên Một Trang Giấy\r\n\r\nNhắc đến marketing, với những doanh nghiệp thực sự quan tâm, họ thường nghĩ ngay đến những buổi diễn thuyết nhiều tiếng đồng hồ, hàng nghìn đầu sách “nặng đô”, hàng tá chiến lược dài lê thê và phức tạp với cơ man biểu đồ, diễn giả\r\n\r\nTrên thực tế, chiến lược Marketing của doanh nhân thành công Allan Dib chỉ là chín ô vuông gói gọn trong một trang giấy. Bằng việc kết hợp giữa các chiến lược, chiến thuật và các khái niệm đã được bảo chứng thành công sau nhiều thập kỷ thử nghiệm và đo lường bởi các bậc thầy về marketing phản hồi trực tiếp; cộng với những chiến lược thực tiễn do chính Allan đề xướng và áp dụng hiệu quả trong thực tiễn, Kế hoạch marketing một-trang-giấy là một bước đột phá trong khâu thực hiện. Với Kế hoạch marketing một-trang-giấy, marketing là thực sự trở thành một kỹ năng kinh doanh bậc thầy'),
(41, 'Thế Mới Là Marketing (This Is Marketing)', 15, 0, 180000, '32.webp', '2023-03-18', 8, 36, 11, NULL, 'Một cách tiếp cận mang tính “thay đổi cuộc chơi đối” với MARKETING, KINH DOANH và QUẢNG CÁO.\r\n\r\nDù dịch vụ hay sản phẩm của bạn là gì đi nữa, thì cuốn sách này sẽ chỉ cho bạn cách tô điểm “diện mạo” sao cho thật hấp dẫn, từ đó thu hút được những khách hàng tiềm năng mong muốn nhất. Seth đã kết hợp tài tình tầm nhìn, quan sát và những ví dụ đáng nhớ để chỉ cho bạn:\r\n\r\nGây dựng chữ tín và thiện cảm với khách hàng mục tiêu.\r\nLàm chủ nghệ thuật định vị - xác định cả khách hàng mục tiêu cũng như khách hàng không phải mục tiêu.\r\nTìm ra cách tốt nhất để đạt được các mục tiêu marketing là giúp những người khác trở thành người họ muốn trở thành.\r\nTại sao những phương pháp quảng cáo, marketing và quảng bá thương hiệu không còn hiệu quả.\r\nVai trò quan trọng của áp lực trước bất cứ quyết định mua (không mua) hàng…\r\nHãy làm mọi điều tuyệt vời cho những người bạn quan tâm và cuốn sách này sẽ chỉ cho bạn cách thực hiện điều đó!'),
(42, 'Tiktok Marketing', 22, 0, 200000, '33.webp', '2023-03-18', 7, 37, 11, NULL, 'TikTok đang bùng nổ ở mọi nơi và đã trở thành một trong những ứng dụng được tải xuống nhiều nhất thế giới. Không có gì ngạc nhiên khi các nhà tiếp thị đã bắt đầu nhìn thấy tiềm năng của nền tảng này. Kinh doanh đi cùng với xu hướng thì mới có thể phát triển và tiếp cận gần hơn với nhiều tập khách hàng. TikTok đã thu hút được sự chú ý lớn từ nhiều nhà kinh doanh khi mạng xã hội này có thể tạo ra những content vô cùng đặc sắc, đồng thời còn là một kênh marketing hiệu quả.'),
(43, 'Giao dịch với Phân tích Liên thị trường', 20, 0, 348000, '36.webp', '2023-03-18', 4, 39, 12, NULL, 'Khi một Ngân hàng Trung ương lớn nâng/hạ lãi suất cơ bản hoặc khi có một rủi ro lớn nào đó đe dọa toàn cầu như đại dịch, chiến tranh, căng thẳng giữa các quốc gia … thì thị trường tài chính mà cụ thể là thị trường cổ phiếu bị tác động ra sao, từ đó kéo theo thị trường tiền tệ, thị trường trái phiếu, giá dầu, giá vàng thay đổi thế nào, và quan trọng nhất là cơ hội nào cho nhà đầu tư/nhà giao dịch. Câu trả lời nằm ở Phân tích Liên thị trường.\r\n\r\nNếu không biết tới hoặc chưa hiểu, chưa sử dụng được Phân tích Liên thị trường một cách thuần thục, bạn đã bỏ lỡ một công cụ mà hầu như tất cả các nhà đầu tư/nhà giao dịch chuyên nghiệp, đặc biệt là các tổ chức tài chính lớn, đều sử dụng hàng ngày để đánh bại thị trường, đạt hiệu suất lợi nhuận cao và ổn định.'),
(44, 'Kỹ Thuật Phân Tích Đầu Tư Chứng Khoán', 30, 0, 169000, '37.webp', '2023-03-18', 6, 40, 12, NULL, 'Hiện nay, đang có rất nhiều người giữ những quan điểm hết sức sai lệch về đầu tư. Những quan điểm đó khiến những nhà đầu tư thiếu kiến thức rất dễ sa lầy và gặp phải thua lỗ lớn, thậm chí có thể dẫn tới phá sản.'),
(45, 'Cách Nền Kinh Tế Vận Hành', 10, 0, 154000, '38.webp', '2023-03-18', 7, 41, 12, NULL, 'Cuốn sách Cách Nền Kinh Tế Vận Hành được xuất bản lần đầu tiên vào năm 2010. Thời điểm này cũng là lúc thế giới đang phải vật lộn với cuộc suy thoái tồi tệ nhất kể từ những năm 1930. Đã nhiều năm trôi qua kể từ thời điểm Cục nghiên cứu Kinh tế Quốc gia Hoa Kì (NBER) tuyên bố cuộc khủng hoảng kinh tế lần này đã chấm dứt, nhưng vào tháng 6 năm 2009, Chính phủ Hoa Kì vẫn còn rất nhiều việc phải làm để có thể phục hồi số việc làm cho người lao động về mức trước khủng hoảng. Cuốn sách này nhằm giúp các bạn hiểu rõ hơn tại sao những điều tồi tệ này lại xảy ra, và đưa ra một số ý tưởng nhằm ngăn chặn các cuộc khủng khoảng tài chính tương tự có thể xảy ra trong tương lai. Qua đó sẽ đúc kết cho bạn những kiến thức kinh tế, để tìm thấy cơ hội trước và sau những đợt khủng hoảng kinh tế.'),
(46, 'Trải Nghiệm Nhân Viên', 21, 0, 130000, '41.webp', '2023-03-18', 12, 43, 13, NULL, 'Trải nghiệm Nhân viên là gì?\r\n\r\nTrong nhiều thập kỷ qua, nhiều nhà quản lý doanh nghiệp luôn bị ám ảnh bởi việc tạo ra lợi nhuận và thúc đẩy tăng trưởng bằng cách liên tục cải tiến sản phẩm, thực hiện các cuộc khảo sát khách hàng cũng như đổ chi phí vào các chương trình khuyến mãi. Thế nhưng, phần lớn những nỗ lực đó đều đổ sông đổ bể.\r\n\r\nTuy nhiên, vẫn có những tổ chức khác điềm tĩnh xây dựng đội ngũ nhân viên ưu tú và liên tiếp đạt được mục tiêu kinh doanh từ năm này qua năm khác, bởi họ hiểu rằng: Mọi thành quả quan trọng của doanh nghiệp đều được tạo nên từ trải nghiệm và nhiệt huyết của những người làm việc trong tổ chức.'),
(47, 'Tuần Làm Việc 4 Giờ (Tái Bản)', 22, 0, 99000, '42.webp', '2023-03-18', 9, 44, 13, NULL, 'Timothy Ferress – tác giả của cuốn sách Tuần làm việc 4 giờ đã chỉ cho bạn thấy những suy nghĩ và mục tiêu sống của bạn đang có vấn đề. Bạn cần thay đổi để vừa có thể tận hưởng được cuộc sống vừa hoàn thành tốt công việc của mình.\r\n\r\nDù ước mơ của bạn là gì: thoát khỏi cuộc đua tranh khốc liệt, du lịch tận hưởng cuộc sống, đi du ngoạn dài ngày, thiết lập kỷ lục thế giới hay chỉ đơn giản là thay đổi công việc, cuốn sách này sẽ cung cấp những công cụ cần thiết để biến ước mơ đó thành hiện thực ngay lúc này, ngay tại đây thay vì đợi đến khi nghỉ hưu. Luôn có cách nhận được phần thưởng cho sự nỗ lực vượt qua những khó khăn của cuộc sống thay vì phải đợi đến tận cuối đời.'),
(48, '3 Giờ Làm Việc Hết Việc Một Ngày - Phong Cách Làm Việc Của Người Thành Công', 10, 0, 113000, '43.webp', '2023-03-18', 4, 45, 13, NULL, 'Cùng làm việc trong một khoảng thời gian như nhau, tại sao người khác làm tốt hơn bạn? Tại sao người khác làm dễ dàng hơn bạn? Tại sao đồng nghiệp được thưởng cao hơn bạn? Và còn nữa, tại sao bạn bỏ công sức ra mà kết quả không được như ý, trong khi đồng nghiệp của bạn làm gì cũng thành công?\r\n\r\nMọi người đều phải làm việc, vậy làm thế nào để nâng cao hiệu quả công việc? Có nhiều yếu tố khác nhau tạo nên thành công, một trong số đó là quá trình tích lũy từng chút một trong công việc. Rèn luyện một số thói quen tốt trong công việc sẽ giúp bạn nâng cao hiệu quả công việc, vừa giúp bạn tạo được ấn tượng tốt với những người xung quanh, vừa cho bạn nhiều thời gian hơn để nghỉ ngơi; một tâm trạng tốt cũng là bắt đầu vòng tuần hoàn tốt.'),
(49, 'Sách Tài Chính Cá Nhân Cho Người Việt Nam', 15, 0, 200000, '44.webp', '2023-03-18', 6, 46, 14, NULL, 'Cuốn sách “Tài chính cá nhân dành cho người Việt Nam” và bộ bài giảng trực tuyến tặng kèm, gồm tất cả những nội dung về tài chính cá nhân, như sau:\r\n\r\nKiếm tiền: Khi còn có thể làm việc, chúng ta cần kiếm tiền, tạo ra thu nhập với \"công suất\" lớn nhất.\r\nTiết kiệm tiền, sử dụng tiền: Chúng ta phải quản lý tiền hiệu quá, sử dụng tiền khôn ngoan. Đặc biệt, chúng ta phải tiết kiệm trước khi sử dụng.\r\nBảo vệ tiền: Chúng ta phải biết bảo vệ tiền, sự mất mát của tiền trước những rủi ro.\r\nĐầu tư tiền: Tiền phải sinh ra tiền. Chúng ta phải đầu tư để tiền tăng trưởng và đạt được mục tiêu tài chính cá nhân.\r\nMục tiêu tài chính cá nhân: An toàn, Đảm bảo, Độc lập, và Tự do tài chính.'),
(50, 'Tiền Tệ Ngân Hàng Và Thị Trường Tài Chính', 22, 0, 338000, '45.webp', '2023-03-18', 7, 47, 14, NULL, 'Phần 1: Tổng quan\r\nPhần 2: Thị trường tài chính\r\nPhần 3: Các định chế tài chính\r\nPhần 4: Ngân hàng trung ương và thực thi chính sách tiền tệ\r\nPhần 5: Tài chính quốc tế và chính sách tiền tệ\r\nPhần 6: Lý thuyết tiền tệ'),
(51, 'Kinh tế học về Tiền, Ngân hàng và Thị trường Tài chính', 15, 0, 754800, '46.webp', '2023-03-18', 12, 48, 12, NULL, 'Tác giả: Frederic S. Mishkin\r\nDịch giả: PGS. TS. Phan Trần Trung Dũng\r\nKhổ: 20.32 x 25.4 cm\r\nSố trang: 688\r\nHình thức: In màu trên giấy couche 100 gsm, bìa cứng\r\n\r\n'),
(52, 'Sách ID Tiếng ANh cho người mới bắt đầu', 22, 0, 99000, '47.webp', '2023-03-18', 7, 55, 15, NULL, 'Sách Tiếng Anh Cho Người Mất Gốc Cô Trang Anh:\r\n\r\n- Học ngữ pháp từ con số 0.\r\n- Hiểu tiếng anh theo cách đơn giản nhất.\r\n- Đầy đủ 4 kỹ năng: Nghe - Nói - Đọc - Viết.\r\n- Học giao tiếp theo chuyên đề ngữ pháp.\r\n- Bài tập luyện tập hướng tới từng kỹ năng.'),
(53, 'Vocabulary For Ielts - Từ Vựng Luyện Thi Ielts ', 10, 0, 150000, '48.webp', '2023-03-18', 10, 55, 15, NULL, 'VOCABULARY FOR IELTS - Từ Vựng Luyện Thi IELTS sẽ cung cấp cho bạn đọc một cách đầy đủ về từ vựng trong kì thi IELTS. Với cuốn sách này bạn  sẽ có thêm nhiều kĩ năng về cách đánh vần từ vựng, chủ động học từ vựng và cách học từ vựng IELTS .\r\n\r\n\'Từ vựng Luyện Thi IELTS\' sẽ giúp bạn có được có được cách nhìn mới về cách học Tiếng Anh:\r\n\r\nHãy dành thời gian thích hợp để học từ vựng IELTS.\r\n\r\nHọc cách đánh vần khi học từ vựng IELTS.\r\n\r\nHãy chủ động với cách học từ vựng IELTS.\r\n\r\nHãy thụ động trong cách học từ vựng IELTS.\r\n\r\nCách học từ vựng IELTS đúng là phải học đúng từ vựng trong doanh mục học thuật.'),
(54, '3500 từ vựng tiếng Anh theo chủ đề', 30, 0, 65000, '49.webp', '2023-03-18', 7, 82, 15, NULL, 'Điều quan trọng nhất khi học từ vựng tiếng Anh là bạn phải sử dụng từ mới (new word). Cách tốt nhất là bạn nên học từ vựng trong một ngữ cảnh liên quan, không phải chỉ đọc một danh sách dài các từ mớ Dưới đây là 7 bí quyết giúp bạn học từ vựng tiếng Anh nhanh và hiệu quả:\r\n\r\n1. Dùng từ mới vào một câu văn cụ thể\r\n\r\n2. Tìm hiểu các cách sử dụng khác nhau về ngữ pháp của từ mới\r\n\r\n3. Liên kết các từ vựng với nhau\r\n\r\n4. Mang theo một cuốn sổ note về từ vựng để bạn có thể học mọi lúc mọi nơi\r\n\r\n5. Tạo flash cards\r\n\r\n6. Tìm ví dụ về từ mới trên Internet (Google)\r\n\r\n7. Học lại từ mới vào một ngày đẹp trời khác'),
(55, 'Tự Học Tiếng Trung Cho Người Mới Bắt Đầu', 20, 0, 118000, '51.webp', '2023-03-18', 7, 51, 17, NULL, 'Tiếng Trung chính là chìa khóa mở cánh cửa bước vào đất nước với nền văn hóa lâu đời và phức tạp nhất thế giới. Với lịch sử lâu đời như vậy, tiếng Trung không phải là một ngôn ngữ quá khó nhưng cũng không hề dễ dàng. Làm thế nào để tự học tiếng Trung cho người mới bắt đầu? Cuốn sách cùng tên: “Tự học tiếng trung cho người mới bắt đầu” chính là câu trả lời cho câu hỏi đó.\r\n\r\nVăn hóa Trung Quốc đã để lại ảnh hưởng sâu sắc đến Việt Nam hàng trăm năm nay từ từ mượn Hán Việt, đến phim ảnh, ca nhạc, hàng hóa dịch vụ và văn hóa. Đó chính là lợi thế vô cùng lớn của người Việt khi học tiếng Trung. Vì vậy tại sao chúng ta không học tiếng Trung để mở ra cả một bầu trời cơ hội:\r\n\r\nHàng trăm ngàn cơ hội việc làm tại các tập đoàn công ty nhà đầu tư Trung Quốc\r\nHoạt động thương mại giữa hai nước Việt Trung cũng như của Trung quốc với thế giới chưa bao giờ hết nóng, biết tiếng Trung sẽ là một lợi thế vô cùng lớn giúp bạn thực hiện công việc kinh doanh được thuận lợi.\r\nHọc tiếng Trung giúp phục vụ công'),
(56, 'Bài tập luyện dịch tiếng Trung ứng dụng', 25, 0, 150000, '52.webp', '2023-03-18', 11, 52, 17, NULL, 'Sách dành cho những ai:\r\nĐang tìm một cuốn SÁCH BÀI TẬP TIẾNG TRUNG hỗ trợ cải thiện, củng cố ngữ pháp, cấu trúc.\r\nNhững ai đang muốn gia tăng kho từ vựng, lượng từ vựng tổng hợp.\r\nNhững ai đang muốn gia tăng hàng trăm cấu trúc dịch hay phục vụ văn nói và viết của mình\r\nNhững ai đang thiếu cảm hứng học tập vì quá nhiều lý thuyết nhồi vào nhưng không có bài tập dịch thực hành\r\nNhững ai đang muốn thử thách bản thân với những bài dịch hấp dẫn từ cơ bản đến nâng cao'),
(58, 'Học Nhanh Nhớ Lâu 1500 Từ Vựng Tiếng Trung Thông Dụng', 15, 0, 169000, '53.webp', '2023-03-18', 8, 51, 17, NULL, 'Học Nhanh Nhớ Lâu 1500 Từ Vựng Tiếng Trung Thông Dụng\r\nSự phát triển kinh tế Trung Quốc kéo theo nhu cầu học tiếng Trung tăng cao, từ du học, kinh doanh đến mở rộng các cơ hội việc làm,… Việc học thêm ngôn ngữ Trung Quốc sẽ giúp bạn có thêm nhiều cơ hội tìm hiểu văn hóa cũng như nâng cao thu nhập. Tuy nhiên, việc học tiếng Trung chưa bao giờ là dễ dàng bởi hệ thống chữ Hán phức tạp và khó ghi nhớ.\r\nMuốn chinh phục một ngôn ngữ thì TỪ VỰNG chắc chắn là yếu tố quan trọng tiên quyết. Vậy làm thế nào để xây dựng được vốn từ vựng tiếng Trung nhanh chóng và có hệ thống để có thể đọc thông – nói thạo?'),
(59, 'Tiếng Hàn cơ bản cùng Cheri Hyeri', 15, 0, 239000, '54.webp', '2023-03-18', 6, 56, 18, NULL, 'Sách tự học tiếng Hàn cơ bản CHO NGƯỜI MỚI BẮT ĐẦU thật dễ dàng\r\n\r\nSách tiếng Hàn sơ cấp được tác giả Cheri Hyeri biên soạn dành riêng cho người Việt Nam\r\n\r\nPhong cách thiết kế bài giảng tiếng Hàn dễ hiểu, hiệu quả được công nhận bởi hơn 1 triệu người theo dõi\r\n\r\nGiáo trình tiếng Hàn được mọi người mong đợi nhất\r\n\r\nVinh dự được chọn giới thiệu trên đài truyền hình SBS hàn quốc năm 2019'),
(60, 'Cẩm Nang Luyện Thi Năng Lực Tiếng Hàn TOPIK', 10, 0, 239000, '', '2023-03-18', 7, 57, 18, NULL, 'Cẩm nang Luyện thi Năng lực tiếng Hàn TOPIK được biên soạn dành cho người học chuẩn bị tham dự Kỳ thi Năng lực tiếng Hàn. TOPIK I tương ứng với trình độ Sơ cấp, còn TOPIK II tương ứng với trình độ Trung – Cao cấp của kỳ thi tiếng Hàn này.\r\n\r\nTOPIK là kỳ thi năng lực tiếng Hàn được tổ chức tại 76 quốc gia và có đến 375.871 thí sinh khắp thế giới đăng ký dự thi trong năm 2019, tính từ lần đầu tổ chức kỳ thi TOPIK vào năm 1997 đến hết năm 2019 đã có hơn 2,5 triệu thí sinh đã đăng ký dự thi.'),
(61, '6000 Câu Giao Tiếp Tiếng Hàn Theo Chủ Đề', 20, 0, 154000, '56.webp', '2023-03-18', 8, 58, 18, NULL, 'Với tốc độ ảnh hưởng của nền văn hóa Hàn Quốc đến Việt Nam hiện nay, tiếng Hàn đang ngày càng trở thành mối quan tâm và là công cụ cho nhiều người muốn tìm hiểu nền văn hóa Hàn Quốc hay những nhu cầu thích đáng khác. Nhằm đáp ứng nhu cầu học tiếng Hàn ngày càng lớn của nhiều người Việt Nam, có rất nhiều tài liệu giảng dạy tiếng Hàn xuất hiện trên thị trường. Tuy nhiên, không phải tài liệu nào cũng giúp người học có thể củng cố kiến thức giao tiếp.'),
(62, '28 Ngày Tự Học Tiếng Nhật', 10, 0, 239000, '58.webp', '2023-03-18', 6, 59, 16, NULL, 'Cấu trúc cuốn sách 28 Ngày Tự Học Tiếng Nhật\r\n\r\nSách bao gồm các phần chính như Cấu trúc bài học và gợi ý sử dụng sách, Lộ trình tự học, Chữ cái và phát âm trong tiếng Nhật và 14 unit tương ứng với 14 chủ đề quen thuộc và cơ bản nhất trong tiếng Nhật. Mỗi bài học này chủ yếu được trình bày dưới dạng chuỗi tuần tự các mục: từ vựng, giới thiệu ngữ pháp, hội thoại thực tế và cuối cùng là bài tập thực hành. Các mục này sắp xếp từ dễ đến khó, giúp người học từ từ làm quen và nâng cao trình độ tiếng Nhật\r\n\r\nĐi kèm với bộ sách còn có sổ tay và sách bài tập, sách bỏ túi, tài liệu nghe, tài liệu bổ trợ và bài giảng video online.'),
(63, '7000 Từ Vựng Tiếng Nhật Theo Chủ Đề ', 35, 0, 180000, '59.webp', '2023-03-18', 10, 60, 16, NULL, '7000 Từ Vựng Tiếng Nhật Theo Chủ Đề\r\n\r\nCác bạn độc giả thân mến!\r\n\r\n“Học ngoại ngữ quan trọng nhất là từ vựng, có từ vựng sẽ giải quyết tất cả mọi vấn đề,\r\n\r\nĐi dịch, ăn nhau ở khối lượng từ vựng\r\n\r\nĐi thi trình độ năng lực nhật ngữ, cao thấp đều do từ vựng quyết định\r\n\r\nKhả năng lĩnh hội, mọi thứ nhờ từ vựng\r\n\r\nBạn đừng tiếc thời gian và công sức nâng cao khối lượng từ vựng\r\n\r\nChỉ cần tìm ra cách học từ vựng, bạn sẽ giải quyết mọi thứ dễ dàng…”'),
(64, 'Kỷ Luật Tự Giác', 22, 0, 84000, '60.webp', '2023-03-18', 4, 62, 20, NULL, '\r\nTheo bạn thì, thế nào là tự do?\r\n\r\nLà có thể nằm ườn trên ghế sô pha xem phim, ôm điện thoại lướt mạng cả ngày?\r\n\r\nHay là được ăn thoải mái các thể loại đồ ăn nhanh, trà sữa… bất chấp ảnh hưởng của chúng tới sức khỏe?\r\n\r\nTrời mưa thì tự cho phép bản thân nghỉ làm, thích đồ gì thì mua luôn đồ nấy, dù cho chưa đến cuối tháng đã hết sạch tiền?\r\n\r\nNhững điều trên trông thì có vẻ thoải mái thật đấy, nhưng dần dần bạn sẽ nhận ra cuộc sống của mình ngày càng mơ hồ, sợ sệt, bởi bạn không có SỰ LỰA CHỌN. Lãng phí thời gian, tiền bạc vô ích chỉ càng tạo nên sự chậm chạp trong tư duy, bệnh tật cho cơ thể và sự cằn cỗi trong tâm hồn mà thôi.'),
(65, 'Tối Giản Thông Thái', 10, 0, 113000, '61.webp', '2023-03-18', 8, 62, 20, NULL, 'ạn đã từng vứt bỏ hết đồ đạc, nhưng khi ngồi trong căn phòng trống trơn, tâm hồn của bạn vẫn nặng nề và không được giải phóng. Vậy thế nào mới là tối giản?\r\n\r\nĐáp án nằm trong cuốn sách “Tối giản thông thái”. Lần này, tác giả Tiểu Dã - nhà văn, nhà thiết kế, người truyền cảm hứng sống hàng đầu Trung Quốc - tiếp tục mang đến cho đọc giả cẩm nang sống hữu ích với lối sống tối giản.\r\n\r\nTác giả không đơn giản khuyên bạn bỏ bớt đồ đạc, mà còn giúp bạn nhận thức lại bản chất của cuộc sống. Điều quan trọng nhất là giúp chúng ta nhận biết chính xác “tối giản” là gì và thực hành nó như thế nào? Từ thế giới bên ngoài như bàn làm việc, phòng ốc, nhà cửa, những không gian trực tiếp ảnh hưởng đến hiệu năng làm việc và tận hưởng cuộc sống; đến thế giới nội tâm, nơi mà cảm xúc, thái độ, tư duy, những bí ẩn để đạt được hạnh phúc và tự do; tất cả những yếu tố tạo nên một cuộc sống tối giản thực thụ đã được trình bày trong cuốn sách này.'),
(67, 'Trí Tuệ Nội Tâm', 20, 0, 99000, '62.webp', '2023-03-18', 4, 61, 20, NULL, 'Nội tâm là thứ hoàn toàn thuộc quyền sở hữu của chúng ta, nhưng thực tế là chúng ta không biết cách khai thác và điều khiển nó. Đó là nguyên nhân khiến cho nhiều người không thể hiểu được chính bản thân mình. Và đó cũng là lý do chính khiến con người sợ hãi trưởng thành. Thế giới đang không ngừng thay đổi, nếu muốn tiến xa hơn, bạn không thể giậm chân tại chỗ mãi được, bạn phải tích cực tìm kiếm sự đổi mới để nắm quyền chủ động trong cuộc sống.'),
(68, 'Tủ Sách Rèn Luyện Nhân Cách Sống - Câu Chuyện Nhỏ Ý Nghĩa Lớn', 25, 0, 180000, '65.webp', '2023-03-18', 4, 65, 23, NULL, 'Cuốn sách tổng hợp hơn những câu chuyện đặc sắc nhất trong và ngoài nước từ trước đến nay. Nội dung xoay quanh những phương diện liên quan đến sự trưởng thành lành mạnh, phát triển thuận lợi của thanh thiếu niên. Cuốn sách rất hữu ích đối với việc mở rộng kiến thức, bồi dưỡng văn hóa, nâng cao cảnh giới tinh thần của người đọc.'),
(69, '30 Ngày Thực Hành Lòng Biết Ơn – Bộ Sách Rèn Luyện Phẩm Chất Cho Trẻ', 18, 0, 180000, '66.webp', '2023-03-18', 6, 66, 23, NULL, 'Nằm trong Bộ sách rèn luyện phẩm chất cho trẻ, 30 Ngày thực hành lòng biết ơn là cuốn sách giúp các bạn nhỏ học cách nói lời cảm ơn, suy nghĩ biết ơn, dành trọn cảm xúc và hành động với lòng biết ơn trong 30 ngày. Biết ơn sẽ giúp các bạn thấy mình luôn giàu có, hạnh phúc và thành công hơn trong tương lai.\r\nĐây sẽ là công thức để các bạn nhỏ thực hành lòng biết ơn như một phần quan trọng trong cuộc sống, trân quý vạn vật và cuộc sống từ đó giúp các bạn có động lực trở thành một người vừa có tài vừa có đức. Bên cạnh đó, các bạn cũng vui vẻ, tự tin, duy trì năng lượng tích cực, xây dựng và phát triển trí tuệ cảm xúc.'),
(71, '21 Ngày Thực Hành NLP - Thay Đổi Thói Quen, Xây Dựng Nền Tảng Để Thành Công(Tái Bản 2020)', 12, 0, 150000, '67.webp', '2023-03-18', 6, 66, 23, NULL, 'Là cuốn sách được viết trên sự trải nghiệm của tác giả Đậu Thị Nhung - người trực tiếp đã giảng dạy chương trình NPL trong nhiều năm, đồng thời cũng là thông dịch viên của Tiến sĩ Biswaroop - một kỷ lục gia về tư duy não bộ và sức khỏe trên thế giới.\r\n\r\nTrong cuốn sách, chúng ta sẽ từng ngày được thực hành theo những hướng dẫn chi tiết:\r\n\r\nCách thiết lập bánh xe cuộc đời qua 06 khía cạnh của cuộc sống: Sức khỏe, gia đình, sự nghiệp, các mối quan hệ, phát triển bản thân, rèn luyện đời sống tinh thần.'),
(72, 'Tâm Lý Học Hành Vi', 18, 0, 99000, '71.webp', '2023-03-18', 6, 71, 21, NULL, 'Tâm Lý Học Hành Vi\r\n\r\nCuốn sách giúp bạn thấu hiểu bản thân mình và tâm lý những người xung quanh!\r\n\r\nĐược chấp bút bởi bậc thầy tâm lý hàng đầu Trung Quốc Khương Nguy.\r\n\r\nTâm lý học theo chủ nghĩa hành vi phát triển đến đỉnh cao vào những năm 1920 của thế kỷ XX tại Mỹ, giữ vị trí chủ đạo trong lĩnh vực tâm lý học trong suốt ba mươi năm sau đó tại đất nước này.'),
(73, 'Thao Túng Tâm Lý', 24, 0, 169000, '72.webp', '2023-03-18', 10, 72, 21, NULL, 'Trong cuốn “Thao túng tâm lý”, tác giả Shannon Thomas giới thiệu đến độc giả những hiểu biết liên quan đến thao túng tâm lý và lạm dụng tiềm ẩn.\r\n\r\n“Thao túng tâm lý” là một dạng của lạm dụng tâm lý. Cũng giống như lạm dụng tâm lý, thao túng tâm lý có thể xuất hiện ở bất kỳ môi trường nào, từ bất cứ đối tượng độc hại nào. Đó có thể là bố mẹ ruột, anh chị em ruột, người yêu, vợ hoặc chồng, sếp hay đồng nghiệp… của bạn. Với tính chất bí hiểm, âm thầm gây hại, thao túng, lạm dụng tâm lý làm tổn thương cảm xúc, lòng tự trọng, cuộc sống của mỗi nạn nhân. Những người từng bị lạm dụng tâm lý thường không thể miêu tả rõ ràng điều gì đã xảy ra với mình. Trong nhiều trường hợp, nạn nhân bị thao túng đến mức tự hỏi có phải họ là người có lỗi, thậm chí họ có phải là người độc hại trong mối quan hệ đó.'),
(74, 'How Psychology Works - Hiểu Hết Về Tâm Lý Học', 15, 0, 300000, '74.webp', '2023-03-18', 11, 73, 21, NULL, 'MỘT TRONG NHỮNG CUỐN SÁCH MỞ KHÓA HỮU ÍCH NHẤT VỀ TƯ DUY, KÝ ỨC VÀ CẢM XÚC CỦA CON NGƯỜI!\r\n\r\nÁm sợ là gì, ám sợ có thực sự đáng sợ không? Rối loạn tâm lý là gì, làm thế nào để thoát khỏi tình trạng suy nhược và xáo trộn đó? Trầm cảm là gì, vì sao con người hiện đại thường xuyên gặp và chống chọi với tình trạng u uất, mệt mỏi và tuyệt vọng này?\r\n\r\nTìm hiểu về các vấn đề tâm trí của con người luôn đầy sức hấp dẫn và lôi cuốn, vì vậy mà tâm lý học ra đời, hình thành và phát triển rất nhiều các học thuyết và trường phái. Cuốn sách này dẫn dắt bạn đọc qua hành trình tìm hiểu các học thuyết và trường phái đó, về cách các nhà tâm lý diễn giải hành xử và tâm trí con người. Tại sao chúng ta có những hành vi, suy nghĩ và cảm xúc như vậy, chúng diễn ra và kết thúc như thế nào, chúng ảnh hưởng lâu dài, gián đoạn hay ngắn ngủỉ đến đời sống của chúng ta ra sao, làm thế nào để chúng ta thoát khỏi những tác động tiêu cực của chúng?'),
(75, 'Nghệ Thuật Tư Duy Rành Mạch (Tái Bản)', 10, 0, 150000, '76.webp', '2023-03-18', 9, 75, 24, NULL, 'Mọi người đều mắc sai lầm.\r\n\r\nNhững sai lầm trong việc ra quyết định đều bắt nguồn từ các lỗi tư duy tưởng như đơn giản, nhưng dần dà chúng tích tụ thành những thành kiến khó bỏ. Vậy mà hiếm khi chúng ta nhận ra điều đó, nên sai lầm cứ nối tiếp sai lầm, dẫn đến bao hối tiếc vì những quyết định không đúng cho cuộc đời mình: Cứ mãi đeo bám một công việc dù biết trước chẳng thu được lợi lộc gì; cho rằng một dự án thành công suôn sẻ là do tài năng và trí lực, còn thất bại do ngoại cảnh khách quan; bán cổ phiếu lúc đã quá trễ, hoặc bán quá sớm… Và đó chỉ là một vài trong số hàng loạt các sai lầm “cơ bản” được Dobelli mổ xẻ phân tích qua 99 chương sách ngắn gọn, súc tích với những ví dụ minh họa thiết thực giúp ta có thể nhận diện và né tránh chúng.'),
(76, 'Rèn Luyện Tư Duy Phản Biện', 22, 0, 99000, '78.webp', '2023-03-18', 4, 76, 24, NULL, 'Như bạn có thể thấy, chìa khóa để trở thành một người có tư duy phản biện tốt chính là sự tự nhận thức. Bạn cần phải đánh giá trung thực những điều trước đây bạn nghĩ là đúng, cũng như quá trình suy nghĩ đã dẫn bạn tới những kết luận đó. Nếu bạn không có những lý lẽ hợp lý, hoặc nếu suy nghĩ của bạn bị ảnh hưởng bởi những kinh nghiệm và cảm xúc, thì lúc đó hãy cân nhắc sử dụng tư duy phản biện! Bạn cần phải nhận ra được rằng con người, kể từ khi sinh ra, rất giỏi việc đưa ra những lý do lý giải cho những suy nghĩ khiếm khuyết của mình. Nếu bạn đang có những kết luận sai lệch này thì có một sự thật là những đức tin của bạn thường mâu thuẫn với nhau và đó thường là kết quả của thiên kiến xác nhận, nhưng nếu bạn biết điều này, thì bạn đã tiến gần hơn tới sự thật rồi!'),
(77, 'Tâm Trí Logic', 22, 0, 180000, '79.webp', '2023-03-18', 9, 76, 24, NULL, 'Cuộc sống hằng ngày của chúng ta chứa đầy những quyết định và giải pháp kém hoặc không hiệu quả. Bị choáng ngợp bởi mức độ lớn của các vấn đề khiến chúng ta khó có thể suy nghĩ rõ ràng.'),
(78, 'Tư Duy Sâu', 22, 0, 154000, '80.webp', '2023-03-18', 8, 15, 22, NULL, 'TƯ DUY SÂU – TẬP HỢP 9 PHƯƠNG PHÁP TƯ DUY GIÚP BẠN ĐỘT PHÁ GIỚI HẠN BẢN THÂN\r\n\r\nFrancis Bacon đã từng phải thốt lên một câu kinh điển thế này: “Tri thức chính là lực lượng”\r\n\r\nTrong quá trình phát triển của xã hội loài người, nhân tố quyết định sự mạnh yếu của một cá thể luôn luôn thay đổi.\r\n\r\nĐiểm chung lớn nhất của giới tinh hoa không phải là tài năng xuất chúng, mà là tư duy sâu. Bạn có thể lập được kế hoạch chiến lược như thế nào? Bạn có khả năng tư duy để giải quyết các vấn đề trong cuộc sống hay không? Hay bạn có thể đưa ra được những điều ấy đều cần đến một thứ vũ khí tốt nhất cho não bộ đấy là phương pháp tư duy sâu.'),
(79, 'Sách - Nghệ thuật kết nối đỉnh cao trong giao tiếp', 18, 0, 159000, '84.webp', '2023-03-18', 11, 80, 22, NULL, 'Tên Nhà Cung Cấp Alpha Books\r\n\r\nTác giả John C. Maxwell\r\n\r\nNgười Dịch Thảo Nguyên\r\n\r\nNXB NXB Lao Động\r\n\r\nNăm XB 2018\r\n\r\nTrọng lượng (gr) 470\r\n\r\nKích thước 13 x 20.5\r\n\r\nSố trang 348\r\n\r\nHình thức Bìa Mềm\r\n\r\nNgôn ngữ Sách tiếng Việt'),
(80, 'Kỹ Năng Giao Tiếp Đỉnh Cao', 25, 0, 154000, '81.webp', '2023-03-18', 7, 77, 22, NULL, 'Kỹ Năng Giao Tiếp Đỉnh Cao:\r\n\r\n√ Lắng nghe đúng cách\r\n\r\n√ Đàm phán hiệu quả\r\n\r\n√ Từ chối không mất lòng\r\n\r\n√ Cải thiện mối quan hệ\r\n\r\n√ Những đòn tâm lý trong thuyết phục\r\n\r\n√ Nói để được tôn trọng\r\n\r\nNgạn ngữ xưa có câu “Học ăn, học nói, học gói, học mở” đã chỉ ra sự quan trọng của việc ăn nói.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(11) NOT NULL,
  `publisher_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `publisher_name`) VALUES
(3, 'Nhà Xuất Bản Văn Học'),
(4, 'Nhà Xuất Bản Hà Nội'),
(5, 'Nhà Xuất Bản Phụ Nữ'),
(6, 'Nhà Xuất Bản Dân Trí'),
(7, 'Nhà Xuất Bản Thanh Niên'),
(8, 'Nhà Xuất Bản Thế Giới'),
(9, 'Nhà Xuất Bản Tổng hợp TP.HCM'),
(10, 'NXB Trẻ'),
(11, 'Nhà Xuất Bản Lao Động'),
(12, 'Nhà Xuất Bản Kinh Tế TPHCM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `review`
--

CREATE TABLE `review` (
  `user_id` int(11) NOT NULL,
  `prd_id` int(11) NOT NULL,
  `review_level` int(11) NOT NULL,
  `review_content` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`status_id`, `status_name`) VALUES
(1, 'Thành công'),
(2, 'Đang xử lý');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_phone` varchar(10) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_address` varchar(200) NOT NULL,
  `user_sex` varchar(10) NOT NULL,
  `user_birthday` date NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_phone`, `user_email`, `user_password`, `user_address`, `user_sex`, `user_birthday`, `role`) VALUES
(1, 'Mạnh Đạt', '3456765432', 'manhdat6112002@gmail.com', 'datmox10', 'rty', 'regtr', '2023-03-15', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wishlist`
--

CREATE TABLE `wishlist` (
  `prd_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Chỉ mục cho bảng `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD KEY `prd_id` (`prd_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ctg_id`);

--
-- Chỉ mục cho bảng `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`discount_id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `prd_id` (`prd_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prd_id`),
  ADD KEY `ctg_id` (`ctg_id`),
  ADD KEY `publisher_id` (`publisher_id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `discount_id` (`discount_id`);

--
-- Chỉ mục cho bảng `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Chỉ mục cho bảng `review`
--
ALTER TABLE `review`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `prd_id` (`prd_id`);

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `wishlist`
--
ALTER TABLE `wishlist`
  ADD KEY `prd_id` (`prd_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `ctg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `discount`
--
ALTER TABLE `discount`
  MODIFY `discount_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `prd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT cho bảng `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`prd_id`) REFERENCES `product` (`prd_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`);

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`prd_id`) REFERENCES `product` (`prd_id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`ctg_id`) REFERENCES `category` (`ctg_id`),
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`discount_id`) REFERENCES `discount` (`discount_id`),
  ADD CONSTRAINT `product_ibfk_4` FOREIGN KEY (`publisher_id`) REFERENCES `publisher` (`publisher_id`);

--
-- Các ràng buộc cho bảng `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`prd_id`) REFERENCES `product` (`prd_id`);

--
-- Các ràng buộc cho bảng `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`prd_id`) REFERENCES `product` (`prd_id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
