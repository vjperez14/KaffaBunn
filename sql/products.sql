-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 09:12 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaffabunn`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(10) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `category`, `description`, `price`) VALUES
(1, 'ICED MOCHA', 'drink', 'An espresso-based drink with chocolate syrup, chilled milk, crushed ice and topped with whipped milk', 165),
(2, 'HOT CAPPUCINO', 'drink', 'Espresso based drink with equal parts of steamed milk and foamed milk.', 135),
(3, 'WHITE MOCHA PUDDING FRAPPE', 'drink', 'Chewy and soft mocha pudding on a frappuccino.', 215),
(4, 'ICED LATTE', 'drink', 'An espresso-based drink with chilled milk, sugar syrup, topped with whipped milk.', 145),
(5, 'HOT MAPLE LATTE', 'drink', 'An espresso-based drink with sugar syrup mixed with whipped milk and crushed ice.', 185),
(6, 'CAFÉ AU LAIT', 'drink', 'Equal parts of drip coffee and steamed milk with a foamy cap.', 125),
(7, 'CAFE AMERICANO', 'drink', 'An espresso with hot water, giving it a similar strength to, but different flavor from traditionally', 125),
(8, 'CAFE MISTO', 'drink', 'A one-to-one combination of fresh-brewed coffee and steamed milk add up to one distinctly delicious ', 145),
(9, 'PUMPKIN CREAM COLD BREW', 'drink', 'Sweetened with vanilla, and then topped with a pumpkin cream cold foam and a dusting of pumpkin spic', 195),
(10, 'ICED SALTED CARAMEL MOCHA', 'drink', 'A delightful combination of espresso, milk, mocha sauce and toffeenut–flavored syrup over ice, toppe', 205),
(11, 'MACADAMIA LATTE', 'drink', 'Accented with vanilla and topped with a delicate float of house-made vanilla sweet cream that cascad', 215),
(12, 'BLACK WHIP LATTE', 'drink', 'Chocolate powder melted in a small amount of water and mixed fresh milk.', 200),
(13, 'ADOBO FLAKES KARE-KARE', 'food', 'Classic Pork Adobo flakes, served with Java rice & Kare-kare Soup. Served with 12oz. Lemonade and De', 269),
(14, 'DORY PROVENCAL', 'food', 'Pan fried dory fish fillet infused in zesty Provencal Sauce. Add ₱35 for a 12 oz. of Iced Tea or Lem', 270),
(15, 'MUSHROOM AND CHEESE CREPE', 'food', 'Cooked shiitake mushroom, cheese and mayonnaise, rolled in a specially made soft and thin piece of c', 155),
(16, 'GOURMET SPANISH CHORIZO CUBANA', 'food', 'A unique garlicky and smoky blend of Spanish Chorizo sauteed in bell peppers.', 275),
(17, 'FRENCH MUSHROOM OMELETTE', 'food', 'Eggs, beaten light and fluffy, generously filled with Shitake mushroom and cheese and folded over.', 225),
(18, 'PASTA ALA CARLO', 'food', 'Our Signature Pasta, sweet and spicy medley of flavors, light tomato basil sauce, capers, tuna chunk', 235),
(19, 'CHICKEN BARBEQUE', 'food', 'Slices of fluffy & soft milk bread, topped with grilled chicken bits, special BBQ sauce and cheese, ', 135),
(20, 'SWEET HAWAIIAN HOLIDAY PIZZA', 'food', 'Sweet ham, pineapple chunks, bacon, a special blend of three cheeses on a tangy Texas BBQ sauce.', 245),
(21, 'LEMON BUTTER FISH FILLET', 'food', 'Pan-fried Dory fillet, topped with Lemon Butter sauce; served with carrots and green peas and Jasmin', 220),
(22, 'GARDEN HERB PESTO', 'food', 'Basil, olive oil, garlic, almond nuts, salt, pepper, parmesan cheese and sundried tomatoes.', 235),
(23, 'ASIAN CHICKEN SALAD', 'food', 'A medley of crisp greens, red tomatoes, grilled chicken, sesame seeds, candied walnuts, parmesan che', 220),
(24, 'GOURMET SPANISH CHORIZO BURGER', 'food', 'Premium Spanish Chorizo, fresh greens, grilled bell peppers and caramelized onions.', 290),
(25, 'TABLEA BLACKOUT CAKE', 'pastry', 'A moist dark chocolate chiffon with dark chocolate mousse and dark chocolate crumbs on top.', 175),
(26, 'STRAWBERRY CHEESECAKE', 'pastry', 'Sweet, juicy strawberries in a rich, cream cheese mousse base, nestled on a buttery melt in the mout', 205),
(27, 'MUFFINS', 'pastry', 'Rich, moist muffin mixed with blueberry and sprinkled with crunchy toping made of crumbled flavored ', 70),
(28, 'FOOD FOR THE GODS', 'pastry', 'Rich fruit bar made in dates and walnuts.', 59),
(29, 'BANOFEE PIE', 'pastry', 'Made from bananas, cream and toffee, combined with a buttery biscuit base.', 170),
(30, 'TUNA PIE', 'pastry', 'A deliciously light flaky pastry made from many layers of specially prepared pastry dough filled wit', 60),
(31, 'ECLAIR', 'pastry', 'An oblong pastry made with choux dough filled with a cream and topped with chocolate icing.', 78),
(32, 'ASADO PIE', 'pastry', 'Stewed shredded pork in sweet brown sauce and baked in a flaky crust.', 60),
(33, 'DEVILS MOCHA', 'pastry', 'An American classic, devils food cake has a moist, tender crumb and satisfying chocolate flavor.', 60),
(34, 'SALTED CARAMEL CHEESECAKE', 'pastry', 'Features layers of salted caramel and smooth, creamy cheesecake on top of graham cracker.', 270),
(35, 'RED VELVET CAKE', 'pastry', 'The best red velvet cake with superior buttery, vanilla, and cocoa flavors, as well as a delicious t', 255),
(36, 'BUTTERSCOTCH PUDDING', 'pastry', 'Sweet desserts of milk or fruit juice variously flavoured and thickened with cornstarch, arrowroot, ', 230);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
