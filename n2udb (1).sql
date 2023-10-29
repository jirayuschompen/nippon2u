-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2023 at 12:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `n2udb`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(3) NOT NULL,
  `payment_method` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_description` varchar(150) NOT NULL,
  `product_price` double NOT NULL,
  `product_sock` int(11) NOT NULL,
  `product_img` varchar(300) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_description`, `product_price`, `product_sock`, `product_img`) VALUES
(101, 'Monkey D. Luffy Figu', 'Luffy is seen in his newly awakened Gear 5 form during his intense fight against Kaido. Lighting and dust clouds surround Luffy as he leaps forward, h', 7000, 0, 'https://store.crunchyroll.com/on/demandware.static/-/Sites-crunchyroll-master-catalog/default/dwa564796c/images/4573102656629_one-piece-monkey-d-luffy-figuarts-figure-gear-5-gigant-ver_05.jpg'),
(102, 'Chainsaw Man - Denji', 'LOOKUP is a word taken from LOOK and UP, figures are always sitting and looking up at you. If you put them on your desk, compared to the other figures', 1700, 0, 'https://store.crunchyroll.com/on/demandware.static/-/Sites-crunchyroll-master-catalog/default/dw7e7a9f3a/images/6982112673836-3-crunchyroll-chibi-figures-chainsaw-man-denji-look-up-figure-31957940371500.jpg'),
(103, 'Satoru Gojo FIGURIZM', 'Unleash the limitless power of Satoru Gojo with the FIGURIZM Figure in his Shibuya Incident Unlimited Void Ver. from JUJUTSU KAISEN. Gojo\'s unparallel', 2500, 0, 'https://store.crunchyroll.com/on/demandware.static/-/Sites-crunchyroll-master-catalog/default/dwad2e2cd6/images/4580779540144_jujutsu-kaisen-satoru-gojo-figurizm-figure-shibuya-incident-unlimited-void-ver_01.jpg'),
(104, 'Anya Forger Pop Up P', 'From the anime series SPY x FAMILY comes a POP UP PARADE figure of the mind-reading telepath Anya Forger! Anya has been captured in figure form with a', 1700, 0, 'https://store.crunchyroll.com/on/demandware.static/-/Sites-crunchyroll-master-catalog/default/dwdd1e4fb4/rightstuf/4580416946155_figure-anya-forger-spy-x-family-pop-up-parade-primary.jpg'),
(105, 'RADWIMPS Weathering ', 'Weathering With You released on December 11, 2019, limited edition of the complete made-to-order analog vinyl version in clear sky blue vinyl.-2 heavy', 2600, 0, 'https://d.line-scdn.net/obs/r/ect/ect/image_1676654172995507982b57a7879t112bdd4d/s640p'),
(106, 'Fujii Kaze / 藤井 風 2n', 'Kaze Fujii to release the second album with 11 songs in total, including six unreleased ones. Sound produced and arranged by Yaffle. This edition come', 950, 0, 'https://d.line-scdn.net/obs/r/ect/ect/image_166430859369274443219cd8312t106f7c61/s640p'),
(107, 'YOASOBI 3rd EP『THE B', 'YOASOBI brings an EP with a special binder. Includes Idol the opening theme song for the TV animation \"Oshi no Ko\"', 1800, 0, 'https://d.line-scdn.net/obs/r/ect/ect/image_16934985529486457296c6a6471t122ce3a8/s640p'),
(108, 'BOCCHI THE ROCK! ぼっち', 'Includes two episodes. Comes with a bonus CD: original soundtrack vol.1, special leaflet, and ED illustration sticker sheet.\r\nSpecial Feature / Bonus ', 1400, 0, 'https://d.line-scdn.net/obs/r/ect/ect/image_16719674968493290656c6c9194t10e459f8/s640p'),
(109, 'Elden Ring Official ', 'The two-volume Elden Ring: Official Art Book contains a plethora of artworks from the game’s ‘Lands Between’ and its inhabitants in stunning oversized', 2500, 0, 'https://store.crunchyroll.com/on/demandware.static/-/Sites-crunchyroll-master-catalog/default/dw452ad55b/rightstuf/9781772942699_artbook-elden-ring-official-art-book-volume-I-hardcover-primary.jpg'),
(110, 'One Piece Color Walk', 'One Piece Color Walk Compendium: New World to Wano Art Book features art by Eiichiro Oda and is book 3 of the series.Gorgeous color art from Eiichiro ', 2250, 0, 'https://store.crunchyroll.com/on/demandware.static/-/Sites-crunchyroll-master-catalog/default/dw8b60c195/rightstuf/9781974728534_artbook-one-piece-color-walk-compendium-new-world-to-wano-hardcover-primary.jpg'),
(111, 'Wotakoi Love Is Hard', 'Wotakoi: Love Is Hard for Otaku Official Art Works includes over 100 pages of exclusive color artwork by Fujita plus behind-the-scenes details never b', 1300, 0, 'https://store.crunchyroll.com/on/demandware.static/-/Sites-crunchyroll-master-catalog/default/dw4277e0bc/rightstuf/9781646518210_artbook-wotakoi-love-is-hard-for-otaku-official-art-works-artbook-primary.jpg'),
(112, 'The Art of Haikyu!! ', 'The Art of Haikyu!!: Endings and Beginnings features art byHaruichi Furudate.A deluxe art book showcasing Haruichi Furudate’s incredible artwork from ', 2300, 0, 'https://store.crunchyroll.com/on/demandware.static/-/Sites-crunchyroll-master-catalog/default/dwce508744/rightstuf/9781974733538_artbook-the-art-of-haikyu-hardcover-primary.jpg'),
(113, 'Junji Ito - Spiral H', 'Officially licensed and exclusive to Crunchyroll!\r\nMidweight (5.5 oz/yd_)\r\n100% ring-spun cotton\r\nReactive-dyed for longer lasting color\r\nTranslation:', 2200, 0, 'https://store.crunchyroll.com/on/demandware.static/-/Sites-crunchyroll-master-catalog/default/dw47400d2d/images/6854261866540-1-ripple-junction-unisex-t-shirts-junji-ito-spiral-head-long-sleeve-crunchyroll-exclusive-30549510455340.jpg'),
(114, 'Hunter x Hunter - Go', 'Officially licensed\r\n100% cotton\r\nLightweight (4.5 oz./sq. yard)\r\nPre-shrunk cotton', 1500, 0, 'https://store.crunchyroll.com/on/demandware.static/-/Sites-crunchyroll-master-catalog/default/dw988485ba/images/6843011104812-1-bioworld-unisex-t-shirts-hunter-x-hunter-gon-killua-hand-t-shirt-30451417088044.png'),
(115, 'Naruto Shippuden - I', 'Officially licensed and exclusive to Crunchyroll!\r\nMaterial: 60% cotton / 40% polyester\r\nCare: machine was cold with like colors, lay flat to dry', 1900, 0, 'https://store.crunchyroll.com/on/demandware.static/-/Sites-crunchyroll-master-catalog/default/dw0c0ff428/images/6780497297452-1-ripple-junction-hoodies-outerwear-naruto-shippuden-ichiraku-ramen-shop-holiday-sweater-crunchyroll-exclusive-31500747800620.jpg'),
(116, 'Kirby - Peek Snapbac', 'Officially licensed\r\nSize: one size fits all\r\nMaterial: polyester\r\nCare: hand wash cold and lay flat to dry\r\nTraditional snapback\r\nStructured cap\r\nPri', 1400, 0, 'https://store.crunchyroll.com/on/demandware.static/-/Sites-crunchyroll-master-catalog/default/dw467f558c/images/6945140539436-1-bioworld-hats-kirby-peek-snapback-hat-31610691584044.jpg'),
(117, 'Lycoris Recoil - Chi', 'Chisato Nishikigi joins the figma lineup!\r\nFrom the anime series Lycoris Recoil comes a figma of Takina Inoue!\r\nFace plates:\r\n-Standard face\r\n-Combat ', 4500, 0, 'https://store.crunchyroll.com/on/demandware.static/-/Sites-crunchyroll-master-catalog/default/dw15edc179/images/4545784069059_lycoris-recoil-chisato-nishikigi-figma_01.jpg'),
(118, 'Persona 5 - Haru Oku', 'Myname is Beauty Thief! Haru Okumura Phantom Thief Ver., from the super popular Persona 5 figure series, is going to be re-issued to celebrate the sal', 13000, 0, 'https://store.crunchyroll.com/on/demandware.static/-/Sites-crunchyroll-master-catalog/default/dwcf5df375/rightstuf/4981932518763_figure-haru-okumura-re-run-phantom-thief-ver-persona-5-royal-primary.jpg'),
(119, 'Komi Can\'t Communica', 'Shoko Komi may be the queen of quiet, but we\'re here to help her communicate that this Crunchyroll Exclusive is MAID for your collection. Featuring Ko', 1700, 0, 'https://store.crunchyroll.com/on/demandware.static/-/Sites-crunchyroll-master-catalog/default/dw6cd7552a/Figures/4580416948630/4580416948630%201.jpg'),
(120, 'Mobile Suit Gundam S', 'This Shinn Asuka\'s SSSword Impulse Gundam made it\'s flashy introduction in the first episode of the anime Mobile Suit Gundam Seed Destiny and now is o', 1530, 0, 'https://store.crunchyroll.com/on/demandware.static/-/Sites-crunchyroll-master-catalog/default/dw13b82e30/rightstuf/4573102661524_model-kit-mobile-suit-gundam-seed-destiny-sword-impulse-gundam-primary.jpg'),
(121, 'Gundam Build Metaver', 'The Gundam 00 Diver Arc from the upcoming Gundam Build Series 10th anniversary video Gundam Build Metaverse gets a new High Grade (HG) model kit from ', 1400, 0, 'https://store.crunchyroll.com/on/demandware.static/-/Sites-crunchyroll-master-catalog/default/dw8b381cd6/rightstuf/4573102657206_modelkit-gundam-build-metaverse-gundam-00-diver-arc-hg-1-144-primary.jpg'),
(122, '1/144 HG Plutine Gun', 'The Plutine Gundam from the upcoming Gundam Build Series 10th anniversary video Gundam Build Metaverse gets a new High Grade (HG) model kit from Banda', 1300, 0, 'https://www.hlj.com/productimages/ban/bans65721_0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sendaddress`
--

CREATE TABLE `sendaddress` (
  `sendaddress_id` int(3) NOT NULL,
  `sendaddress_name` varchar(50) NOT NULL,
  `sendaddress_lastname` varchar(50) NOT NULL,
  `sendaddress_houseno` varchar(50) NOT NULL,
  `sendaddress_alley` varchar(50) NOT NULL,
  `sendaddress_street` varchar(50) NOT NULL,
  `sendaddress_subdistrict` varchar(50) NOT NULL,
  `sendaddress_district` varchar(50) NOT NULL,
  `sendaddress_province` varchar(50) NOT NULL,
  `sendaddress_postcode` varchar(20) NOT NULL,
  `sendaddress_telephone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_info`
--

CREATE TABLE `shipping_info` (
  `shipp_id` int(3) NOT NULL,
  `address` varchar(150) NOT NULL,
  `shipp_deli` varchar(50) NOT NULL,
  `shipp_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `cart_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sendaddress`
--
ALTER TABLE `sendaddress`
  ADD PRIMARY KEY (`sendaddress_id`);

--
-- Indexes for table `shipping_info`
--
ALTER TABLE `shipping_info`
  ADD PRIMARY KEY (`shipp_id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
