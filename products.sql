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
(001, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(002, '...', 'bawal-2', '...jpg', 25.00, 'Bawal'),
(003, '...', 'bawal-3', '...jpg', 25.00, 'Bawal'),
(004, '...', 'bawal-4', '...jpg', 25.00, 'Bawal'),
(005, '...', 'bawal-5', '...jpg', 25.00, 'Bawal'),
(006, '...', 'bawal-6', '...jpg', 25.00, 'Bawal'),
(007, '...', 'bawal-7', '...jpg', 25.00, 'Bawal'),
(008, '...', 'bawal-8', '...jpg', 25.00, 'Bawal'),
(009, '...', 'bawal-9', '...jpg', 25.00, 'Bawal'),
(010, '...', 'bawal-10', '...jpg', 25.00, 'Bawal'),
(011, '...', 'bawal-11', '...jpg', 25.00, 'Bawal'),
(012, '...', 'bawal-12', '...jpg', 25.00, 'Bawal'),
(013, '...', 'bawal-13', '...jpg', 25.00, 'Bawal'),
(014, '...', 'bawal-14', '...jpg', 25.00, 'Bawal'),
(015, '...', 'bawal-15', '...jpg', 25.00, 'Bawal'),
(016, '...', 'bawal-16', '...jpg', 25.00, 'Bawal'),
(017, '...', 'bawal-17', '...jpg', 25.00, 'Bawal'),
(018, '...', 'bawal-18', '...jpg', 25.00, 'Bawal'),
(019, '...', 'bawal-19', '...jpg', 25.00, 'Bawal'),
(020, '...', 'bawal-20', '...jpg', 25.00, 'Bawal'),
(021, '...', 'bawal-1', '...jpg', 25.00, 'Turban'), //turban
(022, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(023, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(024, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(025, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(026, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(027, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(028, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(029, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(030, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(031, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(032, '...', 'bawal-1', '...jpg', 25.00, 'Niqab'), //niqab
(033, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(034, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(035, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(036, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(037, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(038, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(039, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(040, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(041, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(042, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(043, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(044, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(045, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(046, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(047, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'), 
(048, '...', 'bawal-1', '...jpg', 25.00, 'Shawl'), //shawl
(049, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(050, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(051, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(052, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(053, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(054, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(055, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(056, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(057, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(058, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(059, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(060, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(061, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(062, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
(063, '...', 'bawal-1', '...jpg', 25.00, 'Bawal'),
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
