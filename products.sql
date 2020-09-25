--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producst`
--

INSERT INTO `products` (`id`, `name`, `code`, `image`, `price`, `category`) VALUES
(101, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(102, '...', 'bawal-2', '...jpg', 25.00, 'Bawal'),
(103, '...', 'bawal-3', '...jpg', 25.00, 'Bawal'),
(104, '...', 'bawal-4', '...jpg', 25.00, 'Bawal'),
(105, '...', 'bawal-5', '...jpg', 25.00, 'Bawal'),
(106, '...', 'bawal-6', '...jpg', 25.00, 'Bawal'),
(107, '...', 'bawal-7', '...jpg', 25.00, 'Bawal'),
(108, '...', 'bawal-8', '...jpg', 25.00, 'Bawal'),
(109, '...', 'bawal-9', '...jpg', 25.00, 'Bawal'),
(110, '...', 'bawal-10', '...jpg', 25.00, 'Bawal'),
(111, '...', 'bawal-11', '...jpg', 25.00, 'Bawal'),
(112, '...', 'bawal-12', '...jpg', 25.00, 'Bawal'),
(113, '...', 'bawal-13', '...jpg', 25.00, 'Bawal'),
(114, '...', 'bawal-14', '...jpg', 25.00, 'Bawal'),
(115, '...', 'bawal-15', '...jpg', 25.00, 'Bawal'),
(116, '...', 'bawal-16', '...jpg', 25.00, 'Bawal'),
(117, '...', 'bawal-17', '...jpg', 25.00, 'Bawal'),
(118, '...', 'bawal-18', '...jpg', 25.00, 'Bawal'),
(119, '...', 'bawal-19', '...jpg', 25.00, 'Bawal'),
(120, '...', 'bawal-20', '...jpg', 25.00, 'Bawal'),
(201, '...', 'bawal-1', '...jpg', 25.00, 'Turban'), //turban
(202, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(203, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(204, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(205, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(206, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(207, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(208, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(209, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(210, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(211, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(301, 'Niqab Belani - Black', 'niqab-1', 'Image/Niqab/belani-black.jpg', 20.00, 'Niqab'), //niqab
(302, 'Niqab Belani - Brown', 'niqab-2', 'Image/Niqab/belani-brown.jpg', 20.00, 'Niqab'),
(303, 'Niqab Belani - Emerald Green', 'niqab-3', 'Image/Niqab/belani-green.jpg', 20.00, 'Niqab'),
(304, 'Niqab Belani - Charmine Pink', 'niqab-4', 'Image/Niqab/belani-pink.jpg', 20.00, 'Niqab'),
(305, 'Niqab Melani - Dark Blue', 'niqab-5', 'Image/Niqab/melani-darkblue.jpg', 35.00, 'Niqab'),
(306, 'Niqab Melani - Maroon', 'niqab-6', 'Image/Niqab/melani-maroon.jpg', 35.00, 'Niqab'),
(307, 'Niqab Khimar - Black', 'niqab-7', 'Image/Niqab/khimar-black.jpg', 69.00, 'Niqab'),
(308, 'Niqab Khimar - White & Black', 'niqab-8', 'Image/Niqab/khimar-white_black.jpg', 69.00, 'Niqab'),
(309, 'Niqab Khimar (Sumayyah) - Black', 'niqab-9', 'Image/Niqab/khimar-sumayyah.jpg', 69.00, 'Niqab'),
(310, 'Niqab Khimar (Sara 4XL) - Black', 'niqab-10', 'Image/Niqab/khimar-sara4xl.jpg', 99.00, 'Niqab'),
(311, 'Niqab Khimar (Sara 4XL) - Latte', 'niqab-11', 'Image/Niqab/khimar_sara4xl-latte.jpg', 99.00, 'Niqab'),
(312, 'Niqab Sara - Black', 'niqab-12', 'Image/Niqab/sara-black.jpg', 39.00, 'Niqab'),
(313, 'Niqab Fiona - Black', 'niqab-13', 'Image/Niqab/fiona.jpg', 55.00, 'Niqab'),
(314, 'Niqab Laora - Black', 'niqab-14', 'Image/Niqab/laora-black.jpg', 69.00, 'Niqab'),
(315, 'Niqab Layla - Black', 'niqab-15', 'Image/Niqab/layla-black.jpg', 39.00, 'Niqab'),
(316, 'Niqab Sofya - Black', 'niqab-16', 'Image/Niqab/sofya-black.jpg', 65.00, 'Niqab'),
(401, 'Instant Shawl Eva - Candy Pink', 'shawl-1', 'Image/Shawl/naelofar_eva-candypink.jpg', 79.00, 'Shawl'), //shawl
(402, 'Instant Shawl Eva - Ambrosia', 'shawl-2', 'Image/Shawl/naelofar_eva-ambrosia.jpg', 79.00, 'Shawl'),
(403, 'Semi Instant Hijab Audrey Exclusive - Plain Blue', 'shawl-3', 'Image/Shawl/lady_semi-plainblue.jpg', 129.90, 'Shawl'),
(404, 'Semi Instant Hijab Audrey Exclusive - Plain Green', 'shawl-4', 'Image/Shawl/lady_semi-plaingreen.jpg', 129.90, 'Shawl'),
(405, 'Instant Shawl Alyah - Purple', 'shawl-5', 'Image/Shawl/rayzara_alyah-purple.jpg', 55.00, 'Shawl'),
(406, 'Instant Shawl Alyah - Red', 'shawl-6', 'Image/Shawl/rayzara_alyah-red.jpg', 55.00, 'Shawl'),
(407, 'Satin Shawl Shayla - Purple', 'shawl-7', 'Image/Shawl/rayzara_shayla-purple.jpg', 39.00, 'Shawl'),
(408, 'Satin Shawl Shayla - Turquoise', 'shawl-8', 'Image/Shawl/rayzara_shayla-turquoise.jpg', 39.00, 'Shawl'),
(409, 'Instant Shawl - Black', 'shawl-9', 'Image/Shawl/rayzara-instant_shawl-black.jpg', 35.00, 'Shawl'),
(410, 'Instant Shawl - Red Chilli', 'shawl-10', 'Image/Shawl/rayzara-instant_shawl-red.jpg', 35.00, 'Shawl'),
(411, 'Square Scarf Flowers - Purple', 'shawl-11', 'Image/Shawl/meylana-scarf-flowers.jpg', 89.00, 'Shawl'),
(412, 'Square Scarf Flowers - Peach', 'shawl-12', 'Image/Shawl/meylana-scarf-flowers1.jpg', 89.00, 'Shawl'),
(413, 'Ozel Collection Egypt', 'shawl-13', 'Image/Shawl/adara-ozel_collection_egypt.jpg', 159.00, 'Shawl'),
(414, 'Ozel Collection Qatar', 'shawl-14', 'Image/Shawl/adara-ozel_collection_qatar.jpg', 159.00, 'Shawl'),
(415, 'Shawl Dream Catcher - Mason Blue', 'shawl-15', 'Image/Shawl/fateema_dream-masonblue.jpg', 49.00, 'Shawl'),
(416, 'Shawl Dream Catcher - Mustard', 'shawl-16', 'Image/Shawl/fateema_dream-mustard.jpg', 49.00, 'Shawl'),
(501, 'HAWWA SCARF – Instant Aliyah Kids Sarung Soft Blue', 'sarung-1', 'Image/Sarung/1.jpg', 49.00, 'Sarung'), 
(502, 'HAWWA SCARF – Instant Aliyah Kids Sarung Black', 'sarung-2', 'Image/Sarung/2.jpg', 49.00, 'Sarung'),
(503, 'HAWWA SCARF – Instant Aliyah Kids Sarung Pink', 'sarung-3', 'Image/Sarung/3.jpg', 49.00, 'Sarung'),
(504, 'HAWWA SCARF – Instant Aliyah Kids Sarung Brown', 'sarung-4', 'Image/Sarung/4.jpg', 49.00, 'Sarung'),
(505, 'HAWWA SCARF – Instant Aliyah Kids Sarung Navy Blue', 'sarung-5', 'Image/Sarung/5.jpg', 49.00, 'Sarung'),
(506, 'HAWWA SCARF – Instant Aliyah Adult Bawal Brown', 'sarung-6', 'Image/Sarung/6.jpg', 65.00, 'Sarung'),
(507, 'MAJEEDA – AUFA XXL GARNET RED', 'sarung-7', 'Image/Sarung/7.jpg', 49.00, 'Sarung'),
(508, 'MAJEEDA – AUFA XXL DIJON YELLOW', 'sarung-8', 'Image/Sarung/8.jpg', 44.10, 'Sarung'),
(509, 'MAJEEDA – AUFA XXL TURQUOISE', 'sarung-9', 'Image/Sarung/9.jpg', 44.10, 'Sarung'),
(510, 'Voila Maxi Chiffon Rombo – C49', 'sarung-10', 'Image/Sarung/10.jpg', 90.00, 'Sarung'),
(511, 'BOKITTA – Voila Printed Chiffon Calido', 'sarung-11', 'Image/Sarung/11.jpg', 90.00, 'Sarung'),
(512, 'BOKITTA – Voila Maxi Chiffon Biwi', 'sarung-12', 'Image/Sarung/12.jpg', 90.00, 'Sarung'),
(513, 'Voila Printed Chiffon Aztek', 'sarung-13', 'Image/Sarung/13.jpg', 90.00, 'Sarung'),
(514, 'AIN WARDAH – IZARA EXPRESS HIJAB YELLOW', 'sarung-14', 'Image/Sarung/14.jpg', 59.00, 'Sarung'),
(515, 'AIN WARDAH – IZARA EXPRESS HIJAB MUSTARD', 'sarung-15', 'Image/Sarung/15.jpg', 59.00, 'Sarung'),
(516, 'AIN WARDAH – IZARA EXPRESS HIJAB PEACH', 'sarung-16', 'Image/Sarung/16.jpg', 59.00, 'Sarung'),
(517, 'IZARA EXPRESS HIJAB MERAH BATA – D04', 'sarung-17', 'Image/Sarung/17.jpg', 59.00, 'Sarung'),
(518, 'IZARA EXPRESS HIJAB FUSCHIA – D04', 'sarung-18', 'Image/Sarung/18.jpg', 59.00, 'Sarung'),
(519, 'NYZANOUR – LILY 3.0 EXPRESS (SOFT AWNING) BLUE', 'sarung-19', 'Image/Sarung/19.jpg', 39.75, 'Sarung'),
(520, 'GALERI TUDUNG MAHSUZ – Instant Twist Exclusive El Raissa White Black', 'sarung-20', 'Image/Sarung/20.jpg', 49.00, 'Sarung');

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
