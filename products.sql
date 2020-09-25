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
(301, '...', 'bawal-1', '...jpg', 25.00, 'Niqab'), //niqab
(302, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(303, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(304, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(305, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(306, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(307, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(308, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(309, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(310, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(311, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(312, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(313, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(314, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(315, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(316, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'), 
(401, '...', 'bawal-1', '...jpg', 25.00, 'Shawl'), //shawl
(402, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(403, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(404, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(405, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(406, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(407, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(408, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(409, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(410, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(411, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(412, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(413, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(414, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(415, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(416, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(064, 'HAWWA SCARF – Instant Aliyah Kids Sarung Soft Blue', 'bawal-1', 'Image/Sarung/1.jpg', 49.00, 'Sarung'), 
(065, 'HAWWA SCARF – Instant Aliyah Kids Sarung Black', 'bawal-2', 'Image/Sarung/2.jpg', 49.00, 'Sarung'),
(066, 'HAWWA SCARF – Instant Aliyah Kids Sarung Pink', 'bawal-3', 'Image/Sarung/3.jpg', 49.00, 'Sarung'),
(067, 'HAWWA SCARF – Instant Aliyah Kids Sarung Brown', 'bawal-4', 'Image/Sarung/4.jpg', 49.00, 'Sarung'),
(068, 'HAWWA SCARF – Instant Aliyah Kids Sarung Navy Blue', 'bawal-5', 'Image/Sarung/5.jpg', 49.00, 'Sarung'),
(069, 'HAWWA SCARF – Instant Aliyah Adult Bawal Brown', 'bawal-6', 'Image/Sarung/6.jpg', 65.00, 'Sarung'),
(070, 'MAJEEDA – AUFA XXL GARNET RED', 'bawal-7', 'Image/Sarung/7.jpg', 49.00, 'Sarung'),
(071, 'MAJEEDA – AUFA XXL DIJON YELLOW', 'bawal-8', 'Image/Sarung/8.jpg', 44.10, 'Sarung'),
(072, 'MAJEEDA – AUFA XXL TURQUOISE', 'bawal-9', 'Image/Sarung/9.jpg', 44.10, 'Sarung'),
(073, 'Voila Maxi Chiffon Rombo – C49', 'bawal-10', 'Image/Sarung/10.jpg', 90.00, 'Sarung'),
(074, 'BOKITTA – Voila Printed Chiffon Calido', 'bawal-11', 'Image/Sarung/11.jpg', 90.00, 'Sarung'),
(075, 'BOKITTA – Voila Maxi Chiffon Biwi', 'bawal-12', 'Image/Sarung/12.jpg', 90.00, 'Sarung'),
(076, 'Voila Printed Chiffon Aztek', 'bawal-13', 'Image/Sarung/13.jpg', 90.00, 'Sarung'),
(077, 'AIN WARDAH – IZARA EXPRESS HIJAB YELLOW', 'bawal-14', 'Image/Sarung/14.jpg', 59.00, 'Sarung'),
(078, 'AIN WARDAH – IZARA EXPRESS HIJAB MUSTARD', 'bawal-15', 'Image/Sarung/15.jpg', 59.00, 'Sarung'),
(079, 'AIN WARDAH – IZARA EXPRESS HIJAB PEACH', 'bawal-16', 'Image/Sarung/16.jpg', 59.00, 'Sarung'),
(080, 'IZARA EXPRESS HIJAB MERAH BATA – D04', 'bawal-17', 'Image/Sarung/17.jpg', 59.00, 'Sarung'),
(081, 'IZARA EXPRESS HIJAB FUSCHIA – D04', 'bawal-18', 'Image/Sarung/18.jpg', 59.00, 'Sarung'),
(082, 'NYZANOUR – LILY 3.0 EXPRESS (SOFT AWNING) BLUE', 'bawal-19', 'Image/Sarung/19.jpg', 39.75, 'Sarung'),
(083, 'GALERI TUDUNG MAHSUZ – Instant Twist Exclusive El Raissa White Black', 'bawal-20', 'Image/Sarung/20.jpg', 49.00, 'Sarung');

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
