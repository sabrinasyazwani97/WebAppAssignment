--
-- Table structure for table `orders`
--
CREATE TABLE `orders` (
	`order_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`user_id` int(11) NOT NULL,
	`quantity_product` int(11) NOT NULL,
	`total` decimal(6,2) NOT NULL,
	FOREIGN KEY (user_id) REFERENCES USERS(user_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
