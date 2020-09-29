--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producst`
--

INSERT INTO `products` (`product_id`, `name`, `code`, `image`, `price`, `category`) VALUES
(101, 'Kekaboo – Fairy Green', 'bawal-1', 'images/Fairy Green.jpg', 25.00, 'Bawal'),
(102, 'Kekaboo – Blush Pink', 'bawal-2', 'images/Blush Pink.jpg', 25.00, 'Bawal'),
(103, 'Kekaboo – Coffee Au Lait', 'bawal-3', 'images/Coffee Au Lait.jpg', 25.00, 'Bawal'),
(104, 'Kekaboo – Paddlepop', 'bawal-4', 'images/Paddlepop.jpg', 25.00, 'Bawal'),
(105, 'Kekaboo – Puteri Tiana', 'bawal-5', 'images/Puteri Tiana.jpg', 25.00, 'Bawal'),
(106, 'Kekaboo – Safiya Medina', 'bawal-6', 'images/Safiya Medina.jpg', 25.00, 'Bawal'),
(107, 'Kekaboo – Malikha Aura', 'bawal-7', 'images/Malikha Aura.jpg', 25.00, 'Bawal'),
(108, 'Kekaboo – Ameyrah Bella', 'bawal-8', 'images/Ameyrah Bella.jpg', 25.00, 'Bawal'),
(109, 'Kekaboo – Zayton Aisya', 'bawal-9', 'images/Zayton Aisya.jpg', 25.00, 'Bawal'),
(110, 'Kekaboo – Liyana Zahra', 'bawal-10', 'images/Liyana Zahra.jpg', 25.00, 'Bawal'),
(111, 'Kekaboo – Mirabelle Sri Hanim', 'bawal-11', 'images/Mirabelle Sri.jpg', 20.00, 'Bawal'),
(112, 'Mirabelle Maria Clara', 'bawal-12', 'images/MARIA CARLA.jpg', 20.00, 'Bawal'),
(113, 'Mirabelle Violet Aurora', 'bawal-13', 'images/MARIA CARLA.jpg', 20.00, 'Bawal'),
(114, 'Mirabelle Isobelle', 'bawal-14', 'images/ISOBELLE.jpg', 20.00, 'Bawal'),
(115, 'Kekaboo – Mirabelle Daisie', 'bawal-15', 'images/Daisie.jpg', 20.00, 'Bawal'),
(116, 'Kekaboo – Mirabelle Kadija', 'bawal-16', 'images/Kadija.jpg', 20.00, 'Bawal'),
(117, 'Kekaboo – Mirabelle Louisa', 'bawal-17', 'images/Louisa.jpg', 20.00, 'Bawal'),
(118, 'Kekaboo – Mirabelle Rossaluna', 'bawal-18', 'images/Rossaluna.jpg', 20.00, 'Bawal'),
(119, 'Kekaboo – Mirabelle Amalea', 'bawal-19', 'images/Amalea.jpg', 20.00, 'Bawal'),
(120, 'Kekaboo – Mirabelle Violetta', 'bawal-20', 'images/Violetta.jpg', 20.00, 'Bawal'),
(201, 'Anisalidrus Turban - Turban Femme Baby Blue', 'turban-1', 'images/FEMME-BABY-BLUE.jpg', 75.00, 'Turban'),
(202, 'Anisalidrus Turban - Turban Femme Pretty Pink', 'turban-2', 'images/FEMME-PRETTY-PINK.jpg', 75.00, 'Turban'),
(203, 'Anisalidrus Turban - Turban Femme Choco Grey', 'turban-3', 'images/FEMME-CHOCO-GREY.jpg', 75.00, 'Turban'),
(204, 'Anisalidrus Turban - Turban Femme Mint Green', 'turban-4', 'images/FEMME-MINT-GREEN.jpg', 75.00, 'Turban'),
(205, 'Anisalidrus Turban - Denim Blue', 'turban-5', 'images/DENIM-BLUE.jpg', 55.00, 'Turban'),
(206, 'Anisalidrus Turban – Denim Grey', 'turban-6', 'images/DENIM-GREY.jpg', 55.00, 'Turban'),
(207, 'Anisalidrus Turban – Denim Mustard', 'turban-7', 'images/DENIM-MUSTARD.jpg', 55.00, 'Turban'),
(208, 'Anisalidrus Turban – Denim Green', 'turban-8', 'images/DENIM-GREEN.jpg', 55.00, 'Turban'),
(209, 'Anisalidrus Turban - Denim Pink', 'turban-9', 'images/DENIM-PINK.jpg', 55.00, 'Turban'),
(210, 'Anisalidrus Turban – Basic Blue', 'turban-10', 'images/BASIC-BLUE.jpg', 50.00, 'Turban'),
(211, 'Anisalidrus Turban – Basic White', 'turban-11', 'images/BASIC-WHITE.jpg', 50.00, 'Turban'),
(301, 'Niqab Belani - Black', 'niqab-1', 'images/Niqab/belani-black.jpg', 20.00, 'Niqab'),
(302, 'Niqab Belani - Brown', 'niqab-2', 'images/Niqab/belani-brown.jpg', 20.00, 'Niqab'),
(303, 'Niqab Belani - Emerald Green', 'niqab-3', 'images/Niqab/belani-green.jpg', 20.00, 'Niqab'),
(304, 'Niqab Belani - Charmine Pink', 'niqab-4', 'images/Niqab/belani-pink.jpg', 20.00, 'Niqab'),
(305, 'Niqab Melani - Dark Blue', 'niqab-5', 'images/Niqab/melani-darkblue.jpg', 35.00, 'Niqab'),
(306, 'Niqab Melani - Maroon', 'niqab-6', 'images/Niqab/melani-maroon.jpg', 35.00, 'Niqab'),
(307, 'Niqab Khimar - Black', 'niqab-7', 'images/Niqab/khimar-black.jpg', 69.00, 'Niqab'),
(308, 'Niqab Khimar - White & Black', 'niqab-8', 'images/Niqab/khimar-white_black.jpg', 69.00, 'Niqab'),
(309, 'Niqab Khimar (Sumayyah) - Black', 'niqab-9', 'images/Niqab/khimar-sumayyah.jpg', 69.00, 'Niqab'),
(310, 'Niqab Khimar (Sara 4XL) - Black', 'niqab-10', 'images/Niqab/khimar-sara4xl.jpg', 99.00, 'Niqab'),
(311, 'Niqab Khimar (Sara 4XL) - Latte', 'niqab-11', 'images/Niqab/khimar_sara4xl-latte.jpg', 99.00, 'Niqab'),
(312, 'Niqab Sara - Black', 'niqab-12', 'images/Niqab/sara-black.jpg', 39.00, 'Niqab'),
(313, 'Niqab Fiona - Black', 'niqab-13', 'images/Niqab/fiona.jpg', 55.00, 'Niqab'),
(314, 'Niqab Laora - Black', 'niqab-14', 'images/Niqab/laora-black.jpg', 69.00, 'Niqab'),
(315, 'Niqab Layla - Black', 'niqab-15', 'images/Niqab/layla-black.jpg', 39.00, 'Niqab'),
(316, 'Niqab Sofya - Black', 'niqab-16', 'images/Niqab/sofya-black.jpg', 65.00, 'Niqab'),
(401, 'NAELOFAR - Instant Shawl Eva Candy Pink', 'shawl-1', 'images/Shawl/naelofar_eva-candypink.jpg', 79.00, 'Shawl'),
(402, 'NAELOFAR - Instant Shawl Eva Ambrosia', 'shawl-2', 'images/Shawl/naelofar_eva-ambrosia.jpg', 79.00, 'Shawl'),
(403, 'LADY ARISSA COUTURE - Semi Instant Hijab Audrey Exclusive Plain Blue', 'shawl-3', 'images/Shawl/lady_semi-plainblue.jpg', 129.90, 'Shawl'),
(404, 'LADY ARISSA COUTURE - Semi Instant Hijab Audrey Exclusive Plain Green', 'shawl-4', 'images/Shawl/lady_semi-plaingreen.jpg', 129.90, 'Shawl'),
(405, 'RAYZARA - Instant Shawl Alyah Purple', 'shawl-5', 'images/Shawl/rayzara_alyah-purple.jpg', 55.00, 'Shawl'),
(406, 'RAYZARA - Instant Shawl Alyah Red', 'shawl-6', 'images/Shawl/rayzara_alyah-red.jpg', 55.00, 'Shawl'),
(407, 'RAYZARA - Satin Shawl Shayla Purple', 'shawl-7', 'images/Shawl/rayzara_shayla-purple.jpg', 39.00, 'Shawl'),
(408, 'RAYZARA - Satin Shawl Shayla Turquoise', 'shawl-8', 'images/Shawl/rayzara_shayla-turquoise.jpg', 39.00, 'Shawl'),
(409, 'RAYZARA - Instant Shawl Black', 'shawl-9', 'images/Shawl/rayzara-instant_shawl-black.jpg', 35.00, 'Shawl'),
(410, 'RAYZARA - Instant Shawl Red Chilli', 'shawl-10', 'images/Shawl/rayzara-instant_shawl-red.jpg', 35.00, 'Shawl'),
(411, 'MEYLANA - Square Scarf Flowers Purple', 'shawl-11', 'images/Shawl/meylana-scarf-flowers.jpg', 89.00, 'Shawl'),
(412, 'MEYLANA - Square Scarf Flowers Peach', 'shawl-12', 'images/Shawl/meylana-scarf-flowers1.jpg', 89.00, 'Shawl'),
(413, 'ADARA - Ozel Collection Egypt', 'shawl-13', 'images/Shawl/adara-ozel_collection_egypt.jpg', 159.00, 'Shawl'),
(414, 'ADARA - Ozel Collection Qatar', 'shawl-14', 'images/Shawl/adara-ozel_collection_qatar.jpg', 159.00, 'Shawl'),
(415, 'FATEEMA COUTURE - Shawl Dream Catcher Mason Blue', 'shawl-15', 'images/Shawl/fateema_dream-masonblue.jpg', 49.00, 'Shawl'),
(416, 'FATEEMA COUTURE - Shawl Dream Catcher Mustard', 'shawl-16', 'images/Shawl/fateema_dream-mustard.jpg', 49.00, 'Shawl'),
(501, 'HAWWA SCARF – Instant Aliyah Kids Sarung Soft Blue', 'sarung-1', 'images/Sarung/1.jpg', 49.00, 'Sarung'),
(502, 'HAWWA SCARF – Instant Aliyah Kids Sarung Black', 'sarung-2', 'images/Sarung/2.jpg', 49.00, 'Sarung'),
(503, 'HAWWA SCARF – Instant Aliyah Kids Sarung Pink', 'sarung-3', 'images/Sarung/3.jpg', 49.00, 'Sarung'),
(504, 'HAWWA SCARF – Instant Aliyah Kids Sarung Brown', 'sarung-4', 'images/Sarung/4.jpg', 49.00, 'Sarung'),
(505, 'HAWWA SCARF – Instant Aliyah Kids Sarung Navy Blue', 'sarung-5', 'images/Sarung/5.jpg', 49.00, 'Sarung'),
(506, 'HAWWA SCARF – Instant Aliyah Adult Bawal Brown', 'sarung-6', 'images/Sarung/6.jpg', 65.00, 'Sarung'),
(507, 'MAJEEDA – AUFA XXL GARNET RED', 'sarung-7', 'images/Sarung/7.jpg', 49.00, 'Sarung'),
(508, 'MAJEEDA – AUFA XXL DIJON YELLOW', 'sarung-8', 'images/Sarung/8.jpg', 44.10, 'Sarung'),
(509, 'MAJEEDA – AUFA XXL TURQUOISE', 'sarung-9', 'images/Sarung/9.jpg', 44.10, 'Sarung'),
(510, 'Voila Maxi Chiffon Rombo – C49', 'sarung-10', 'images/Sarung/10.jpg', 90.00, 'Sarung'),
(511, 'BOKITTA – Voila Printed Chiffon Calido', 'sarung-11', 'images/Sarung/11.jpg', 90.00, 'Sarung'),
(512, 'BOKITTA – Voila Maxi Chiffon Biwi', 'sarung-12', 'images/Sarung/12.jpg', 90.00, 'Sarung'),
(513, 'Voila Printed Chiffon Aztek', 'sarung-13', 'images/Sarung/13.jpg', 90.00, 'Sarung'),
(514, 'AIN WARDAH – IZARA EXPRESS HIJAB YELLOW', 'sarung-14', 'images/Sarung/14.jpg', 59.00, 'Sarung'),
(515, 'AIN WARDAH – IZARA EXPRESS HIJAB MUSTARD', 'sarung-15', 'images/Sarung/15.jpg', 59.00, 'Sarung'),
(516, 'AIN WARDAH – IZARA EXPRESS HIJAB PEACH', 'sarung-16', 'images/Sarung/16.jpg', 59.00, 'Sarung'),
(517, 'IZARA EXPRESS HIJAB MERAH BATA – D04', 'sarung-17', 'images/Sarung/17.jpg', 59.00, 'Sarung'),
(518, 'IZARA EXPRESS HIJAB FUSCHIA – D04', 'sarung-18', 'images/Sarung/18.jpg', 59.00, 'Sarung'),
(519, 'NYZANOUR – LILY 3.0 EXPRESS (SOFT AWNING) BLUE', 'sarung-19', 'images/Sarung/19.jpg', 39.75, 'Sarung'),
(520, 'GALERI TUDUNG MAHSUZ – Instant Twist Exclusive El Raissa White Black', 'sarung-20', 'images/Sarung/20.jpg', 49.00, 'Sarung');

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_code` (`code`);

