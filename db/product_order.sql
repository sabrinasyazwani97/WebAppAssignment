--
-- Table structure for table `product_order`
--
CREATE TABLE `product_order` (
	`po_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`product_id` int(8) NOT NULL,
	`user_id` int(11) NOT NULL,
	`quantity` int(11) NOT NULL,
	`subtotal` decimal(6,2) NOT NULL,
	FOREIGN KEY (product_id) REFERENCES PRODUCTS(product_id),
	FOREIGN KEy (user_id) REFERENCES USERS(user_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
