--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `cart`
--

ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- AUTO_INCREMENT for table `cart`
--

ALTER TABLE `cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT;
