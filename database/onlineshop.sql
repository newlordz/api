-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 06:01 PM
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
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` INT(11) NOT NULL,
  `warehouse` VARCHAR(500) NOT NULL,
  `Productname` VARCHAR(500) NOT NULL,
  `price` DECIMAL(10, 2) NOT NULL, -- Changed from VARCHAR(500) to DECIMAL for proper numeric handling
  `c_price` DECIMAL(10, 2) NOT NULL, -- Changed from VARCHAR(5000) to DECIMAL for proper numeric handling
  `details` TEXT NOT NULL, -- Changed from VARCHAR(500) to TEXT to accommodate longer descriptions
  `Photo1` VARCHAR(500) NOT NULL,
  `Photo2` VARCHAR(500) NOT NULL,
  `Photo3` VARCHAR(500) NOT NULL,
  `cat` VARCHAR(100) NOT NULL,
  `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `warehouse`, `Productname`, `price`, `c_price`, `details`, `Photo1`, `Photo2`, `Photo3`, `cat`, `date`) VALUES
(37, '', 'Prine class', 80.00, 80.00, 'The interaction framework is presented as a means to judge the overall usability \r\nof an entire interactive system. In reality, all of the analysis that is suggested by the\r\nframework is dependent on the current task (or set of tasks) in which the User is\r\nengaged. This is not surprising since it is only in attempting to perform a particular\r\ntask within some domain that we are able to determine if the tools we use are \r\nadequate. For example, different text editors are better at different thing', 'products/_1693923130n5.jpg', 'products/_1693923130n2.jpg', 'products/_1693923130n5.jpg', 'Jacket', '2023-09-05 14:12:10'),
(38, '', 'Iphone 13', 1900.00, 1900.00, 'Another category depends on energy-efficient protocols at all layers of the \r\nnetwork model. Hence, MAC protocols that are power aware are needed. Another \r\nclass of MAC protocols uses directional antennas. The advantage of this method is \r\nthat the signals are transmitted in only one direction. The nodes in other directions \r\nare, therefore, no longer prone to interference or collision effects, and spatial reuse \r\nis facilitated. Several MAC schemes have been proposed for unidirectional links.\r', 'products/_1694253875electronic2.jpg', 'products/_1694253876_1693407823p2.jpg', 'products/_1694805497air2.jpg', 'IOS', '2023-09-09 10:04:36'),
(44, '1', 'BEAT BOX HEAD PHONES', 1000.00, 1000.00, 'Applicable to all kinds of electronic equipment, computers, etc., all brands of Android smartphones are compatible, the best choice for hands-free calling. The stereo sound of the headset is very good, the bass is strong and the vocals are very clear. The overall feeling is that the sound quality is very balanced, especially suitable for listening to popular music. There are four colors to choose from.\r\n\r\nThe sound quality is perfect, the bass is strong, deeply loved by the fans, the sponge cove', 'products/_1694804662head6.jpg', 'products/_1694804662head1.jpg', 'products/_1694804662head4.jpg', 'HeadPhones', '2023-09-15 19:04:22'),
(45, '1', 'Summer Cartoon T-Shirts', 190.00, 190.00, 'Give your wardrobe an eye-catching update as you shop our matching men\'s co ords. From tropical palm printed shorts and shirts sets to classic checks and stripes, we\'ve got the perfect print for you. Hit the town with your squad in only the fiercest cuts and colours and keep things chill on those dress down days as you step into hoodie and shorts with your fave sliders for maximum comfort.\r\n\r\nWe\'re here to help you embrace your own signatures style with our men\'s two piece outfits and get your n', 'products/_1694805090P1.jpg', 'products/_1694805090m3.jpg', 'products/_1694805090M1.jpeg', 'T-Shirts', '2023-09-15 19:11:30'),
(47, '1', 'Nike Air Force 1', 250.00, 250.00, 'All for 1. Nike air force 1 shadow pays tribute to women who bring change in their community and set an example to the new generations. The design of the sneaker reflects this philosophy through double swoosh, double height and double strength. 2 thin eyelets, 2 mud guards, 2 rear tabs and 2 swoosh are designed for a layered look that doubles the brand.\r\n\r\nFoam midsole and cut-out sole ensure lightness, flexibility and comfort. With the same iconic shape as the original air force 1, the slightly', 'products/_1694805335shoe_1.jpg', 'products/_1694805335shoe_3.jpg', 'products/_1694805335shoe_4.jpg', 'Sneakers', '2023-09-15 19:15:35'),
(48, '1', 'Air Pods Pro', 199.00, 199.00, 'The second-generation AirPods Pro are Apple\'s premium in-ear wireless earbuds, offering a range of features including precision finding, touch volume controls, and more. Released in September 2022, the second-generation AirPods Pro are still relatively new in Apple\'s product lineup and the company does not release new AirPods models often.\r\n\r\nApple has now debuted six different versions of the AirPods, giving a sign of how often AirPods are updated. Apple released new AirPods Pro in October 2019', 'products/_1694805497air4.jpg', 'products/_1694805497air3.jpg', 'products/_1694805497air2.jpg', 'IOS', '2023-09-15 19:18:17'),
(49, '1', 'Designer Jackets', 299.00, 299.00, 'select satisfactory products for you. Fashion Men Winter Solid Color Trench Coat Outwear Overcoat Long Sleeve JacketSpecifications:Solid color， easy to match with your bottoming top and pants.High grade material made， breathable and comfortable to wear all the day.A must-have in your winter wardrobe to keep you warm in a stylish way.\r\n\r\nType: Trench CoatGender: Men\'sSize Type: RegularMaterial: Nylon， Polyester， SpandexStyle: FashionSleeve Type: Long SleeveGarment Care: Hand-washOccasions: Daily ', 'products/_1694805657apparel4.jpg', 'products/_1694805657apparel2.jpg', 'products/_1694805657apparel4.jpg', 'Jackets', '2023-09-15 19:20:57'),
(51, '1', 'Itel Phones', 199.00, 199.00, 'Applicable to all kinds of electronic equipment, computers, etc., all brands of Android smartphones are compatible, the best choice for hands-free calling. The stereo sound of the headset is very good, the bass is strong and the vocals are very clear. The overall feeling is that the sound quality is very balanced, especially suitable for listening to popular music. There are four colors to choose from.\r\n\r\nThe sound quality is perfect, the bass is strong, deeply loved by the fans, the sponge cove', 'products/_16948075011 (1).jpg', 'products/_16948075012 (1).jpg', 'products/_16948075013 (1).jpg', 'Android', '2023-09-15 19:51:41'),
(52, '1', 'SAMSUNG A21', 600.00, 600.00, 'Applicable to all kinds of electronic equipment, computers, etc., all brands of Android smartphones are compatible, the best choice for hands-free calling. The stereo sound of the headset is very good, the bass is strong and the vocals are very clear. The overall feeling is that the sound quality is very balanced, especially suitable for listening to popular music. There are four colors to choose from.\r\n\r\nThe sound quality is perfect, the bass is strong, deeply loved by the fans, the sponge cove', 'products/_16948075431.jpg', 'products/_16948075433.jpg', 'products/_16948075432.jpg', 'Android', '2023-09-15 19:52:23'),
(53, '1', 'Dynamic Blender', 350.00, 350.00, 'Applicable to all kinds of electronic equipment, computers, etc., all brands of Android smartphones are compatible, the best choice for hands-free calling. The stereo sound of the headset is very good, the bass is strong and the vocals are very clear. The overall feeling is that the sound quality is very balanced, especially suitable for listening to popular music. There are four colors to choose from.\r\n\r\nThe sound quality is perfect, the bass is strong, deeply loved by the fans, the sponge cove', 'products/_16948076111 (2).jpg', 'products/_16948076113 (2).jpg', 'products/_16948076115.jpg', 'Electronics', '2023-09-15 19:53:31'),
(55, '1', 'Beautiful Beds', 600.00, 600.00, 'Give your wardrobe an eye-catching update as you shop our matching men\'s co ords. From tropical palm printed shorts and shirts sets to classic checks and stripes, we\'ve got the perfect print for you. Hit the town with your squad in only the fiercest cuts and colours and keep things chill on those dress down days as you step into hoodie and shorts with your fave sliders for maximum comfort.\r\n\r\nWe\'re here to help you embrace your own signatures style with our men\'s two piece outfits and get your n', 'products/_1694807729k-s-oss-1683641003493m6Ea8Gymnc.jpg', 'products/_1694807729k-s-oss-1683641003493DdHs37SF8X.png', 'products/_1694807729k-s-oss-1683641003493SWCrMcBWyf.jpg', 'Accessories', '2023-09-15 19:55:29'),
(56, '1', 'Hoodies', 190.00, 190.00, 'Give your wardrobe an eye-catching update as you shop our matching men\'s co ords. From tropical palm printed shorts and shirts sets to classic checks and stripes, we\'ve got the perfect print for you. Hit the town with your squad in only the fiercest cuts and colours and keep things chill on those dress down days as you step into hoodie and shorts with your fave sliders for maximum comfort.\r\n\r\nWe\'re here to help you embrace your own signatures style with our men\'s two piece outfits and get your n', 'products/_1694807769upload-productImg-1638168311239.jpeg', 'products/_1694807769upload-productImg-1638168312008.jpeg', 'products/_1694807769upload-productImg-1638168312688.jpeg', 'Hoodies', '2023-09-15 19:56:09'),
(57, '1', 'Bicycle', 344.00, 344.00, 'Applicable to all kinds of electronic equipment, computers, etc., all brands of Android smartphones are compatible, the best choice for hands-free calling. The stereo sound of the headset is very good, the bass is strong and the vocals are very clear. The overall feeling is that the sound quality is very balanced, especially suitable for listening to popular music. There are four colors to choose from.\r\n\r\nThe sound quality is perfect, the bass is strong, deeply loved by the fans, the sponge cove', 'products/_1694807816upload-productImg-16057732722521772.jpg', 'products/_1694807816upload-productImg-16057735133725601.jpg', 'products/_1694807816upload-productImg-16057738283584588.jpg', 'Accessories', '2023-09-15 19:56:56'),
(58, '1', 'Cute Sneakers', 199.00, 199.00, 'Give your wardrobe an eye-catching update as you shop our matching men\'s co ords. From tropical palm printed shorts and shirts sets to classic checks and stripes, we\'ve got the perfect print for you. Hit the town with your squad in only the fiercest cuts and colours and keep things chill on those dress down days as you step into hoodie and shorts with your fave sliders for maximum comfort.\r\n\r\nWe\'re here to help you embrace your own signatures style with our men\'s two piece outfits and get your n', 'products/_1694807870upload-productImg-46949666220554858.jpg', 'products/_1694807870upload-productImg-46949669599632630.jpg', 'products/_1694807870upload-productImg-46949671245302169.jpg', 'Sneakers', '2023-09-15 19:57:50'),
(60, '1', 'Designer Necklace', 199.00, 199.00, 'Give your wardrobe an eye-catching update as you shop our matching men\'s co ords. From tropical palm printed shorts and shirts sets to classic checks and stripes, we\'ve got the perfect print for you. Hit the town with your squad in only the fiercest cuts and colours and keep things chill on those dress down days as you step into hoodie and shorts with your fave sliders for maximum comfort.\r\n\r\nWe\'re here to help you embrace your own signatures style with our men\'s two piece outfits and get your n', 'products/_1694808036upload-productImg-35948361899727348.jpg', 'products/_1694808036upload-productImg-35948363202480474.jpg', 'products/_1694808036upload-productImg-35948364234750877.jpg', 'Accessories', '2023-09-15 20:00:36'),
(61, '1', 'X-Box Controller', 350.00, 350.00, 'Applicable to all kinds of electronic equipment, computers, etc., all brands of Android smartphones are compatible, the best choice for hands-free calling. The stereo sound of the headset is very good, the bass is strong and the vocals are very clear. The overall feeling is that the sound quality is very balanced, especially suitable for listening to popular music. There are four colors to choose from.\r\n\r\nThe sound quality is perfect, the bass is strong, deeply loved by the fans, the sponge cove', 'products/_1694808108pexels-roman-odintsov-12719140.jpg', 'products/_1694808108pexels-thiago-japyassu-4068701.jpg', 'products/_1694808108pexels-anthony-📷📹🙂-139038.jpg', 'X-Box', '2023-09-15 20:01:48'),
(63, '1', 'Classic Slipper', 344.00, 344.00, 'Give your wardrobe an eye-catching update as you shop our matching men\'s co ords. From tropical palm printed shorts and shirts sets to classic checks and stripes, we\'ve got the perfect print for you. Hit the town with your squad in only the fiercest cuts and colours and keep things chill on those dress down days as you step into hoodie and shorts with your fave sliders for maximum comfort.\r\n\r\nWe\'re here to help you embrace your own signatures style with our men\'s two piece outfits and get your n', 'products/_1694811039k-s-oss-1655793676256Ek8EJ4J6wS.jpg', 'products/_1694811039k-s-oss-16557936762564hJJZPQJQX.jpg', 'products/_1694811039k-s-oss-1655793676256nT8TFF6jyn.jpg', 'Shoes', '2023-09-15 20:50:39'),
(64, '1', 'Designer Slipper', 600.00, 600.00, 'Give your wardrobe an eye-catching update as you shop our matching men\'s co ords. From tropical palm printed shorts and shirts sets to classic checks and stripes, we\'ve got the perfect print for you. Hit the town with your squad in only the fiercest cuts and colours and keep things chill on those dress down days as you step into hoodie and shorts with your fave sliders for maximum comfort.\r\n\r\nWe\'re here to help you embrace your own signatures style with our men\'s two piece outfits and get your n', 'products/_1694811083k-s-oss-1675838807986tAKNPw7AKs.jpg', 'products/_1694811083k-s-oss-1675838807986GN3HwdPbhP.jpg', 'products/_1694811083k-s-oss-1675838807986xrc3Kw3txz.jpg', 'Slippers', '2023-09-15 20:51:23'),
(65, '1', 'Bracelet', 190.00, 190.00, 'Give your wardrobe an eye-catching update as you shop our matching men\'s co ords. From tropical palm printed shorts and shirts sets to classic checks and stripes, we\'ve got the perfect print for you. Hit the town with your squad in only the fiercest cuts and colours and keep things chill on those dress down days as you step into hoodie and shorts with your fave sliders for maximum comfort.\r\n\r\nWe\'re here to help you embrace your own signatures style with our men\'s two piece outfits and get your n', 'products/_1694811153upload-productImg-1521465527758.jpeg', 'products/_1694811153upload-productImg-1521465527708.jpeg', 'products/_1694811153upload-productImg-1521465527494.jpeg', 'Bracelets', '2023-09-15 20:52:33'),
(66, '1', 'Towels', 199.00, 199.00, 'Give your wardrobe an eye-catching update as you shop our matching men\'s co ords. From tropical palm printed shorts and shirts sets to classic checks and stripes, we\'ve got the perfect print for you. Hit the town with your squad in only the fiercest cuts and colours and keep things chill on those dress down days as you step into hoodie and shorts with your fave sliders for maximum comfort.\r\n\r\nWe\'re here to help you embrace your own signatures style with our men\'s two piece outfits and get your n', 'products/_1694811203upload-productImg-1632378140665.jpeg', 'products/_1694811203upload-productImg-1632378141110.jpeg', 'products/_1694811203upload-productImg-1632378141792.jpeg', 'Towels', '2023-09-15 20:53:23');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` INT(11) NOT NULL,
  `name` VARCHAR(200) NOT NULL,
  `email` VARCHAR(200) NOT NULL,
  `paymentMethod` VARCHAR(200) NOT NULL,
  `items` VARCHAR(5000) NOT NULL,
  `totalAmount` VARCHAR(1000) NOT NULL, -- Consider changing to DECIMAL for calculations
  `paymentCheck` VARCHAR(1100) NOT NULL,
  `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` VARCHAR(50) NOT NULL,
  `password` VARCHAR(255) NOT NULL, -- Increased length for hashed passwords. IMPORTANT: Always hash passwords!
  `email` VARCHAR(255) NOT NULL, -- Increased length for email addresses
  `profilePicture` VARCHAR(50) DEFAULT NULL,
  `gender` VARCHAR(2) NOT NULL,
  `contact` VARCHAR(20) NOT NULL, -- Increased length for phone numbers
  `id` INT(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `password`, `email`, `profilePicture`, `gender`, `contact`, `id`) VALUES
('Elizabeth', 'Kyeremeh', 'elizabethagyemangk@gmail.com', NULL, 'fe', '0550775955', 61),
('Essel', 'essel', 'enochessel5@gmail.com', NULL, 'ma', '0554981159', 62),
('menlah keziah ', 'urieL23+KE', 'menlahkeziah23@gmail.com', NULL, 'fe', '0592771659', 63);

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `name` VARCHAR(50) NOT NULL,
  `password` VARCHAR(255) NOT NULL, -- Increased length for hashed passwords. IMPORTANT: Always hash passwords!
  `email` VARCHAR(255) NOT NULL, -- Increased length for email addresses
  `profilePicture` VARCHAR(50) DEFAULT NULL,
  `gender` VARCHAR(2) NOT NULL,
  `contact` VARCHAR(20) NOT NULL, -- Increased length for phone numbers
  `id` INT(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`name`, `password`, `email`, `profilePicture`, `gender`, `contact`, `id`) VALUES
('myself', 'myself', 'enochessel5@gmail.com', NULL, 'ma', '0554981159', 59),
('shardey', 'shardey', 'hannahyomle17@gamil.com', NULL, 'Fe', '0555351270', 63);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
