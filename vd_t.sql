-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 08:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vd&t`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_design`
--

CREATE TABLE `add_design` (
  `Design_no` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Color` varchar(50) NOT NULL,
  `req_Price` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `Comment` varchar(500) NOT NULL,
  `dimage` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_design`
--

INSERT INTO `add_design` (`Design_no`, `name`, `Type`, `Color`, `req_Price`, `gender`, `Comment`, `dimage`) VALUES
(1, 'sasa', 'eqwe', '#6f3939', 500, 'unisex', 'kjkjkkkj', ''),
(2, 'blbln', 'hjhjh', '#1e8049', 500, 'unisex', 'kjkjkkkj', 0x4c616231342e64726177696f2e706e67),
(3, 'sasa', 'eqwe', '#a93737', 54, 'Male', 'dadsadadadsadas', 0x696d616765732e6a7067),
(4, 'Dress', 'ds', '#0076f5', 540, 'Male', 'adjajkd ajnsdjadnajsn jadnjsad', 0x696d616765732e6a7067),
(5, 'blbln', 'dada', '#0f43ff', 845, 'female', 'das adasd aseweqqdasd asdasx ', '');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `Career_ID` varchar(10) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Job_title` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`Career_ID`, `Description`, `Job_title`) VALUES
('C12', 'You will show your leadership and interpersonal strengths to maximize the Front Office Operations, a', 'Assistant Manager'),
('C25', 'Point of IT contact for internal customers to assist with technology needs. Takes calls and handles ', 'System Admin'),
('C45', 'You will show your leadership and interpersonal strengths to maximize the Front Office Operations, a', 'Manager'),
('C60', 'Point of IT contact for internal customers to assist with technology needs. Takes calls and handles ', 'System Adminstrator'),
('C65', 'This powerful purpose is our promise to humankind that we will dream, design and deliver breakthroug', 'Designer'),
('C98', 'You will show your leadership and interpersonal strengths to maximize the Front Office Operations, a', 'Designer');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Cart_no` int(11) NOT NULL,
  `size` varchar(10) NOT NULL,
  `color` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Cart_no`, `size`, `color`, `quantity`) VALUES
(1, 'S', 'Black', 2),
(2, '', 'Blue', 0),
(3, '', 'Blue', 0),
(4, '', 'Blue', 0),
(5, 'M', 'Black', 5),
(6, 'M', 'White', 2),
(7, 'M', 'White', 2),
(8, 'L', 'White', 2),
(9, 'L', 'White', 2),
(10, 'L', 'White', 2),
(11, 'L', 'White', 2);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `FID` int(11) NOT NULL,
  `ques` varchar(500) NOT NULL,
  `ans` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`FID`, `ques`, `ans`) VALUES
(1, '                    but y', '                    yes'),
(2, '                    but y', '                    yes'),
(3, '                    but y', '                    yes'),
(4, '                    but y', '                    yes'),
(5, '                    but y', '                    yes'),
(6, '       what             ', '                 no   '),
(7, '              oh noo     ', '                oh noo    ');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feed_no` int(11) NOT NULL,
  `Feedback` varchar(1000) NOT NULL,
  `CCO_reply` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Feed_no`, `Feedback`, `CCO_reply`) VALUES
(1, 'I absolutely loved this suit. My husband wore it for our wedding day and all we had to do was take it out of the box and run it through a de-wrinkling cycle in the dryer. The teal color is so beautiful. For size reference he is 5’11, 175 lbs and typically wears and medium and I bought a medium and it fit him great.', ''),
(2, 'Highly recommend you make some adjustments with sizes, e.g. shirt/pants. In my case I wear a 2XXL in shirt but not in pants, my size in pants is XL. Need to be able to order the different size for shirt and pants, not one size for entire outfit.', ''),
(3, 'I really wanted to like these because they look great in the picture. The \'black\' is a gray. Not black at all. And they are VERY thin and cheap feeling. The last dislike is not their fault but more for me. I have a wide hip structure and these are built for a man with a very narrow hip structure. I wear a 38 pant and bought these in 38. They fit but were tight. I\'m attributing that misfit from my having wide hips. Again, I really wanted to like these but returned them.', ''),
(4, 'I needed a conservative skirt that wasnt black for entering dog shows so I tried this one out. Its lightweight, lined, and tailored. It looks professional, it isnt too fitted at the knees, and has a slit in the back so when I am running around the ring it isnt restrictive at all. I like that the fabric has a bit of stretch also. All around comfortable skirt while looking polished.', ''),
(5, 'Reading the size chart and item description, I assumed it would fit me like a dress… I was wrong. It fits like a long shirt. Without the shorts on the “dress” completely receives my butt cheeks in the back. The front is fully covered but the back is awful. I am tall and plus sized and would recommend if you are as well, to skip this set.', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `P_ID` int(11) NOT NULL,
  `First_name` varchar(30) NOT NULL,
  `Last_name` varchar(30) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Shipping_address` varchar(100) NOT NULL,
  `Zip_Code` varchar(10) NOT NULL,
  `Province` varchar(30) NOT NULL,
  `District` varchar(30) NOT NULL,
  `Card_name` varchar(20) NOT NULL,
  `Card_holder_name` varchar(30) NOT NULL,
  `Card_No` int(11) NOT NULL,
  `Exp_year` int(11) NOT NULL,
  `Exp_month` int(11) NOT NULL,
  `CVV` int(11) NOT NULL,
  `Tot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`P_ID`, `First_name`, `Last_name`, `Email`, `Shipping_address`, `Zip_Code`, `Province`, `District`, `Card_name`, `Card_holder_name`, `Card_No`, `Exp_year`, `Exp_month`, `CVV`, `Tot`) VALUES
(1, 'Chavindu', 'De Alwis', 'chavindu@gmail.com', 'No 69/8 Malwatu Road, Maththegoda , Kottawa', '80020', 'Western Province', 'Colombo', 'BOC', 'Chavindu', 4584, 2025, 8, 654, 15850),
(2, 'Ashen', 'Pradeep', 'ashen@yahoo.com', 'No 32/4 Pinthaliya Road, Kadawatha', '85421', 'Western Province', 'Gampaha', 'NSB', 'Ashen', 9856, 2024, 4, 235, 24000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Price` int(11) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `2_pic` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Name`, `Description`, `Price`, `pic`, `Category`, `2_pic`) VALUES
(1, 'CHIFFON', 'Chiffon is a lightweight, balanced plain-woven sheer fabric, or gauze, like gossamer, woven of alternate S- and Z-twist crepe (high-twist) yarns. \r\n\r\nThe twist in the crepe yarns puckers the fabric slightly in both directions after weaving, giving it some stretch and a slightly rough feel', 550, 'images/material_1.jpg', 'Material', 'images/mat1.jpg'),
(2, 'COTTON', 'Cotton is a soft, fluffy staple fiber that grows in a boll, or protective case, around the seeds of the cotton plants of the genus Gossypium in the mallow family Malvaceae. The fiber is almost pure cellulose, and can contain minor percentages of waxes, fats, pectins, and water. Under natural conditions, the cotton bolls will increase the dispersal of the seeds.', 400, 'images/material_2.jpg', 'Material', 'images/mat2.jpg'),
(3, 'SILK', 'Silk is a natural protein fiber, some forms of which can be woven into textiles. The protein fiber of silk is composed mainly of fibroin and is produced by certain insect larvae to form cocoons. The best-known silk is obtained from the cocoons of the larvae of the mulberry silkworm Bombyx mori reared in captivity.', 850, 'images/material_3.jpg', 'Material', 'images/mat3.jpg'),
(4, 'DENIM', 'Denim is a sturdy cotton warp-faced textile in which the weft passes under two or more warp threads. This twill weaving produces a diagonal ribbing that distinguishes it from cotton duck.', 600, 'images/material_4.jpg', 'Material', 'images/mat4.jpg'),
(5, 'WOOL', 'Wool is the textile fibre obtained from sheep and other animals, including cashmere and mohair from goats, qiviut from muskoxen, hide and fur clothing from bison, angora from rabbits, and other types of wool from camelids. Wool consists of protein together with a small percentage of lipids.', 1300, 'images/material_5.jpg', 'Material', 'images/mat5.jpg'),
(6, 'SYNTHETIC', 'The liquid from chemicals are forced through tiny holes called spinnerets to produce a filament. As the liquid comes out of the spinnerets and into the air, it cools and forms into tiny threads of continuous filament fibre. A twisting process twists the filament into a yarn. Dyes are added before they are woven together to make fabric.\r\n\r\n', 350, 'images/material_6.jpg', 'Material', 'images/mat6.jpg'),
(7, 'STRIPED DRESS', '<ul>\r\n<li>Self: 55% linen, 45% rayon Lining: 100% rayon</li>\r\n<li> Hand wash</li>\r\n<li>Partially lined</li>\r\n<li>Pull-on styling</li>\r\n<li>Smocked waist</li>\r\n<li>Lightweight linen fabric with ladder trim throughout</li>\r\n</ul>', 1350, 'images/phpjj7ShfPM.jpg', 'Products', 'images/prd1.jpg'),
(8, 'LIGHT DRESS', '<ul>\r\n<li></li>\r\n<li>Self: 100% poly Lining: 92% poly, 8% spandex</li>\r\n<li>Hand wash</li>\r\n<li>Fully lined</li>\r\n<li>Hidden side zipper closure</li>\r\n<li>One-shoulder styling Side ruched detail</li>\r\n<li>Hammered satin fabric</li>\r\n</ul>', 1440, 'images/php8SZzmQPM.jpg', 'Products', 'images/prd2.jpg'),
(9, 'TARA MIDI DRESS', '<ul>\r\n<li></li>\r\n<li>Self: 100% poly Lining: 92% poly, 8% spandex</li>\r\n<li>Hand wash</li>\r\n<li>Fully lined</li>\r\n<li>Hidden side zipper closure</li>\r\n<li>One-shoulder styling Side ruched detail</li>\r\n<li>Hammered satin fabric</li>\r\n</ul>', 900, 'images/phpvJT47aPM.jpg', 'Products', 'images/prd3.jpg'),
(10, 'QUINN DRESS', '<ul>\r\n<li></li>\r\n<li>Self: 100% poly Lining: 92% poly, 8% spandex</li>\r\n<li>Hand wash</li>\r\n<li>Fully lined</li>\r\n<li>Hidden side zipper closure</li>\r\n<li>One-shoulder styling Side ruched detail</li>\r\n<li>Hammered satin fabric</li>\r\n</ul>', 1530, 'images/phpH82tI3PM.jpg', 'Products', 'images/prd4.jpg'),
(11, 'BABY OUTFIT', '<ul>\r\n<li>100% Cotton</li>\r\n<li>Imported</li>\r\n<li>Drawstring closure</li>\r\n<li>Machine Wash</li>\r\n<li>Bodysuits feature expandable shoulders</li>\r\n<li>Everyday made better: we listen to customer feedback and fine-tune every detail to ensure quality, fit, and comfort</li>\r\n</ul>', 900, 'images/phpNevtuhPM.jpg', 'Products', 'images/prd5.jpg'),
(12, 'REGINA MAXI DRESS', '<ul>\r\n<li></li>\r\n<li>Self: 100% poly Lining: 92% poly, 8% spandex</li>\r\n<li>Hand wash</li>\r\n<li>Fully lined</li>\r\n<li>Hidden side zipper closure</li>\r\n<li>One-shoulder styling Side ruched detail</li>\r\n<li>Hammered satin fabric</li>\r\n</ul>', 1800, 'images/pexels-chalo-garcia-8050084 (1).jpg', 'Products', 'images/prd6.jpg'),
(13, 'MEN\'S SUIT ', '<ul>\r\n<li>94% Wool, 6% Lycra Spandex</li>\r\n<li>Button closure</li>\r\n<li>Dry Clean Only</li>\r\n<li>This classic performance wool fabric with its refined aesthetic is easy to wear in any climate all year round.</li>', 2340, 'images/phpgKrm5OPM.jpg', 'Products', 'images/prd7.jpg'),
(14, 'INDIAN DRESS', '<ul>\r\n<li>Self: 55% linen, 45% rayon Lining: 100% rayon</li>\r\n<li> Hand wash</li>\r\n<li>Partially lined</li>\r\n<li>Pull-on styling</li>\r\n<li>Smocked waist</li>\r\n<li>Lightweight linen fabric with ladder trim throughout</li>\r\n</ul>', 1350, 'images/R .jpg', 'Products', 'images/prd8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `user_no` int(11) NOT NULL,
  `Rating_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`user_no`, `Rating_no`) VALUES
(1, 4),
(2, 2),
(3, 4),
(4, 4),
(5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `registered_customer`
--

CREATE TABLE `registered_customer` (
  `C_ID` int(11) NOT NULL,
  `Title` varchar(5) NOT NULL,
  `F_name` varchar(30) NOT NULL,
  `S_name` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact_no` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `cpassword` varchar(30) NOT NULL,
  `uphoto` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_customer`
--

INSERT INTO `registered_customer` (`C_ID`, `Title`, `F_name`, `S_name`, `DOB`, `Address`, `Email`, `Contact_no`, `Username`, `cpassword`, `uphoto`) VALUES
(1, 'Mr', 'Ashen', 'Pradeep', '2000-12-27', '23/4 Pinthaliya Road Kaduwela Gampaha', 'ashen@gmail.com', 718596425, 'ggashen', 'saduni1234', ''),
(2, 'Ms', 'Saduni', 'Jayawardena', '2002-05-10', '89/09 \"Gamunupura\" Malabe colombo ', 'saduni@gmail.com', 716969420, '12saduni#', 'sad15a1f4a', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff_account`
--

CREATE TABLE `staff_account` (
  `Staff_no` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_account`
--

INSERT INTO `staff_account` (`Staff_no`, `Username`, `Password`) VALUES
(1, 'admin123', 'admin123'),
(2, 'cco123', 'cco123'),
(3, 'tech123', 'tech123');

-- --------------------------------------------------------

--
-- Table structure for table `technical_issue`
--

CREATE TABLE `technical_issue` (
  `T_ID` int(11) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technical_issue`
--

INSERT INTO `technical_issue` (`T_ID`, `Description`) VALUES
(1, 'Slow loading time \r\n'),
(2, 'Poor mobile experience. \r\nImages That Are Not Search Friendly'),
(3, 'Non-Specific Page Titles.\r\n Out-Of-Date Copyright Legislation'),
(4, 'No Share Buttons for Key Pages'),
(5, 'Multiple 404 Errors and Redirects');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_design`
--
ALTER TABLE `add_design`
  ADD PRIMARY KEY (`Design_no`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`Career_ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Cart_no`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`FID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Feed_no`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`user_no`);

--
-- Indexes for table `registered_customer`
--
ALTER TABLE `registered_customer`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `staff_account`
--
ALTER TABLE `staff_account`
  ADD PRIMARY KEY (`Staff_no`);

--
-- Indexes for table `technical_issue`
--
ALTER TABLE `technical_issue`
  ADD PRIMARY KEY (`T_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_design`
--
ALTER TABLE `add_design`
  MODIFY `Design_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Cart_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `FID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Feed_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `user_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registered_customer`
--
ALTER TABLE `registered_customer`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `technical_issue`
--
ALTER TABLE `technical_issue`
  MODIFY `T_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
