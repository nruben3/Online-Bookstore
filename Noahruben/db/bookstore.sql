-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 09:34 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mococo_updated`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`, `role`) VALUES
(2, 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment_text` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `num_useful` int(11) NOT NULL,
  `num_not` int(11) NOT NULL,
  `num_very` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `date` varchar(10) DEFAULT NULL,
  `products_ordered` varchar(99) DEFAULT NULL,
  `customer_name` varchar(19) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `city` varchar(16) DEFAULT NULL,
  `address` varchar(92) DEFAULT NULL,
  `delivery` varchar(25) DEFAULT NULL,
  `charged` varchar(6) DEFAULT NULL,
  `total_price` varchar(10) DEFAULT NULL,
  `product_price` varchar(15) DEFAULT NULL,
  `charge` varchar(6) DEFAULT NULL,
  `profits` varchar(7) DEFAULT NULL,
  `tracking_code` varchar(13) DEFAULT NULL,
  `delete_id` varchar(9) DEFAULT NULL,
  `date_created` datetime DEFAULT current_timestamp(),
  `created` varchar(222) DEFAULT NULL,
  `modified` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

/*INSERT INTO `customers` (`id`, `date`, `products_ordered`, `customer_name`, `phone`, `city`, `address`, `delivery`, `charged`, `total_price`, `product_price`, `charge`, `Profits`, `tracking_code`, `delete_id`, `date_created`, `created`, `modified`) VALUES
(1, 'Date', 'Products Ordered', 'Customer Name', 'Phone Number', 'City', 'Address', 'Delivery Method', 'Charged', 'Total Price', 'Product Price', 'Charge', 'profits', 'Tracking Code', 'delete_id', '2020-05-15 00:00:00', NULL, NULL);
*/
-- --------------------------------------------------------

--
-- Table structure for table `deleterec`
--

CREATE TABLE `deleterec` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `items_id` int(11) NOT NULL,
  `feemanag_id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `itemused_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deleterec`
--

/*INSERT INTO `deleterec` (`id`, `customer_id`, `employee_id`, `items_id`, `feemanag_id`, `purchase_id`, `itemused_id`) VALUES
(4, 0, 0, 0, 20, 0, 0),
(5, 0, 0, 0, 2, 0, 0),
(6, 0, 0, 0, 2, 0, 0),
(7, 0, 0, 0, 2, 0, 0),
(8, 0, 0, 0, 2, 0, 0),
(9, 0, 0, 0, 2, 0, 0),
(10, 0, 0, 0, 2, 0, 0),
(13, 0, 0, 0, 1, 0, 0),
(14, 0, 0, 0, 251, 0, 0),
(15, 0, 0, 0, 83, 0, 0),
(16, 0, 0, 0, 80, 0, 0),
(17, 0, 0, 0, 85, 0, 0),
(18, 0, 0, 0, 84, 0, 0),
(19, 0, 0, 0, 82, 0, 0),
(20, 0, 0, 0, 87, 0, 0),
(21, 0, 0, 0, 90, 0, 0),
(22, 0, 0, 0, 89, 0, 0),
(23, 0, 0, 0, 92, 0, 0),
(24, 0, 0, 0, 81, 0, 0);*/

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(99) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `avg_rat` varchar(255) DEFAULT NULL,
  `isbn` varchar(255) DEFAULT NULL,
  `isbn13` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `num_pages` varchar(255) DEFAULT NULL,
  `ratings_count` varchar(255) DEFAULT NULL,
  `text_reviews_count` varchar(255) DEFAULT NULL,
  `publication_date` varchar(255) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `delete_id` varchar(9) DEFAULT NULL,
  `date` varchar(11) DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `charge` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `author`, `avg_rat`, `isbn`, `isbn13`, `language`, `num_pages`, `ratings_count`, `text_reviews_count`, `publication_date`, `publisher`, `delete_id`, `date`, `date_created`, `charge`) VALUES
(2, 'Harry Potter and the Order of the Phoenix (Harry Potter  #5)', '200', 'J.K. Rowling/Mary GrandPré', '4.49', '439358078', '9.78044E+12', 'eng', '870', '2153167', '29221', '9/1/2004', 'Scholastic Inc.', '1', '', '0000-00-00', 0),
(3, 'Harry Potter and the Chamber of Secrets (Harry Potter  #2)', '25', 'J.K. Rowling', '4.42', '439554896', '9.78044E+12', 'eng', '352', '6333', '244', '11/1/2003', 'Scholastic', '1', '', '0000-00-00', 0),
(4, 'Harry Potter and the Prisoner of Azkaban (Harry Potter  #3)', '77', 'J.K. Rowling/Mary GrandPré', '4.56', '043965548X', '9.78044E+12', 'eng', '435', '2339585', '36325', '5/1/2004', 'Scholastic Inc.', '1', '', '0000-00-00', 0),
(5, 'Harry Potter Boxed Set  Books 1-5 (Harry Potter  #1-5)', '18', 'J.K. Rowling/Mary GrandPré', '4.78', '439682584', '9.78044E+12', 'eng', '2690', '41428', '164', '9/13/2004', 'Scholastic', '1', '', '0000-00-00', 0),
(6, 'Unauthorized Harry Potter Book Seven News: \"Half-Blood Prince\" Analysis and Speculation', '25', 'W. Frederick Zimmerman', '3.74', '976540606', '9.78098E+12', 'en-US', '152', '19', '1', '4/26/2005', 'Nimble Books', '1', '', '0000-00-00', 0),
(7, 'Harry Potter Collection (Harry Potter  #1-6)', '99', 'J.K. Rowling', '4.73', '439827604', '9.78044E+12', 'eng', '3342', '28242', '808', '9/12/2005', 'Scholastic', '1', '', '0000-00-00', 0),
(8, 'The Ultimate Hitchhiker''s Guide: Five Complete Novels and One Story (Hitchhiker''s Guide to the Gala', '100', 'Douglas Adams', '4.38', '517226952', '9.78052E+12', 'eng', '815', '3628', '254', '11/1/2005', 'Gramercy Books', '1', '', '0000-00-00', 0),
(9, 'The Ultimate Hitchhiker''s Guide to the Galaxy (Hitchhiker''s Guide to the Galaxy  #1-5)', '100', 'Douglas Adams', '4.38', '345453743', '9.78035E+12', 'eng', '815', '249558', '4080', '4/30/2002', 'Del Rey Books', '1', '', '0000-00-00', 0),
(10, 'The Hitchhiker''s Guide to the Galaxy (Hitchhiker''s Guide to the Galaxy  #1)', '200', 'Douglas Adams', '4.22', '1400052920', '9.7814E+12', 'eng', '215', '4930', '460', '8/3/2004', 'Crown', '1', '', '0000-00-00', 0),
(11, 'The Hitchhiker''s Guide to the Galaxy (Hitchhiker''s Guide to the Galaxy  #1)', '100', 'Douglas Adams/Stephen Fry', '4.22', '739322206', '9.78074E+12', 'eng', '6', '1266', '253', '3/23/2005', 'Random House Audio', '1', '', '0000-00-00', 0),
(12, 'The Ultimate Hitchhiker''s Guide (Hitchhiker''s Guide to the Galaxy  #1-5)', '50', 'Douglas Adams', '4.38', '517149257', '9.78052E+12', 'eng', '815', '2877', '195', '1/17/1996', 'Wings Books', '1', '', '0000-00-00', 0),
(13, 'A Short History of Nearly Everything', '22', 'Bill Bryson', '4.21', '076790818X', '9.78077E+12', 'eng', '544', '248558', '9396', '9/14/2004', 'Broadway Books', '1', '', '0000-00-00', 0),
(14, 'Bill Bryson''s African Diary', '200', 'Bill Bryson', '3.44', '767915062', '9.78077E+12', 'eng', '55', '7270', '499', '12/3/2002', 'Broadway Books', '1', '', '0000-00-00', 0),
(15, 'Bryson''s Dictionary of Troublesome Words: A Writer''s Guide to Getting It Right', '100', 'Bill Bryson', '3.87', '767910435', '9.78077E+12', 'eng', '256', '2088', '131', '9/14/2004', 'Broadway Books', '1', '', '0000-00-00', 0),
(16, 'In a Sunburned Country', '88', 'Bill Bryson', '4.07', '767903862', '9.78077E+12', 'eng', '335', '72451', '4245', '5/15/2001', 'Broadway Books', '1', '', '0000-00-00', 0),
(17, 'I''m a Stranger Here Myself: Notes on Returning to America After Twenty Years Away', '99', 'Bill Bryson', '3.9', '076790382X', '9.78077E+12', 'eng', '304', '49240', '2211', '6/28/2000', 'Broadway Books', '1', '', '0000-00-00', 0),
(18, 'The Lost Continent: Travels in Small Town America', '127.4666667', 'Bill Bryson', '3.83', '60920084', '9.78006E+12', 'eng', '299', '45712', '2257', '8/28/1990', 'William Morrow Paperbacks', '1', '', '0000-00-00', 0),
(19, 'Neither Here nor There: Travels in Europe', '137.2666667', 'Bill Bryson', '3.86', '380713802', '9.78038E+12', 'eng', '254', '48701', '2238', '3/28/1993', 'William Morrow Paperbacks', '1', '', '0000-00-00', 0),
(20, 'Notes from a Small Island', '147.0666667', 'Bill Bryson', '3.91', '380727501', '9.78038E+12', 'eng', '324', '80609', '3301', '5/28/1997', 'William Morrow Paperbacks', '1', '', '0000-00-00', 0),
(21, 'The Mother Tongue: English and How It Got That Way', '156.8666667', 'Bill Bryson', '3.93', '380715430', '9.78038E+12', 'eng', '270', '28489', '2085', '9/28/1991', 'William Morrow Paperbacks', '1', '', '0000-00-00', 0),
(22, 'J.R.R. Tolkien 4-Book Boxed Set: The Hobbit and The Lord of the Rings', '166.6666667', 'J.R.R. Tolkien', '4.59', '345538374', '9.78035E+12', 'eng', '1728', '101233', '1550', '9/25/2012', 'Ballantine Books', '1', '', '0000-00-00', 0),
(23, 'The Lord of the Rings (The Lord of the Rings  #1-3)', '176.4666667', 'J.R.R. Tolkien', '4.5', '618517650', '9.78062E+12', 'eng', '1184', '1710', '91', '10/21/2004', 'Houghton Mifflin Harcourt', '1', '', '0000-00-00', 0),
(24, 'The Fellowship of the Ring (The Lord of the Rings  #1)', '186.2666667', 'J.R.R. Tolkien', '4.36', '618346252', '9.78062E+12', 'eng', '398', '2128944', '13670', '9/5/2003', 'Houghton Mifflin Harcourt', '1', '', '0000-00-00', 0),
(25, 'The Lord of the Rings (The Lord of the Rings  #1-3)', '196.0666667', 'J.R.R. Tolkien/Alan  Lee', '4.5', '618260587', '9.78062E+12', 'en-US', '1216', '1618', '140', '10/1/2002', 'Houghton Mifflin Harcourt', '1', '', '0000-00-00', 0),
(26, 'The Lord of the Rings: Weapons and Warfare', '205.8666667', 'Chris   Smith/Christopher  Lee/Richard Taylor', '4.53', '618391002', '9.78062E+12', 'eng', '218', '19822', '46', '11/5/2003', 'Houghton Mifflin Harcourt', '1', '', '0000-00-00', 0),
(27, 'The Lord of the Rings: Complete Visual Companion', '215.6666667', 'Jude Fisher', '4.5', '618510826', '9.78062E+12', 'eng', '224', '359', '6', '11/15/2004', 'Houghton Mifflin Harcourt', '1', '', '0000-00-00', 0),
(28, 'Agile Web Development with Rails: A Pragmatic Guide', '225.4666667', 'Dave Thomas/David Heinemeier Hansson/Leon Breedt/Mike Clark/Thomas  Fuchs/Andreas  Schwarz', '3.84', '097669400X', '9.78098E+12', 'eng', '558', '1430', '59', '7/28/2005', 'Pragmatic Bookshelf', '1', '', '0000-00-00', 0),
(29, 'Hatchet (Brian''s Saga  #1)', '235.2666667', 'Gary Paulsen', '3.72', '689840926', '9.78069E+12', 'eng', '208', '270244', '12017', '4/1/2000', 'Atheneum Books for Young Readers: Richard Jackson Books', '1', '', '0000-00-00', 0),
(30, 'Hatchet: A Guide for Using \"Hatchet\" in the Classroom', '245.0666667', 'Donna Ickes/Edward Sciranko/Keith Vasconcelles', '4', '1557344493', '9.78156E+12', 'eng', '48', '36', '2', '8/28/1994', 'Teacher Created Resources', '1', '', '0000-00-00', 0),
(31, 'Guts: The True Stories behind Hatchet and the Brian Books', '254.8666667', 'Gary Paulsen', '3.88', '385326505', '9.78039E+12', 'eng', '144', '2067', '334', '1/23/2001', 'Delacorte Press', '1', '', '0000-00-00', 0),
(32, 'Molly Hatchet - 5 of the Best', '264.6666667', 'Molly Hatchet', '4.33', '1575606240', '9.78158E+12', 'eng', '56', '6', '0', '6/10/2003', 'Cherry Lane Music Company', '1', '', '0000-00-00', 0),
(33, 'Hatchet Jobs: Writings on Contemporary Fiction', '274.4666667', 'Dale Peck', '3.45', '1595580271', '9.7816E+12', 'en-US', '228', '99', '16', '11/1/2005', 'The New Press', '1', '', '0000-00-00', 0),
(34, 'A Changeling for All S', '22', 'Angela Knight/Sahara Kelly/Judy Mays/Marteeka Karland/Kate Douglas/Shelby Morgen/Lacey Savage/Kate Hill/Willa Okati', '3.76', '1595962808', '9.7816E+12', 'eng', '304', '167', '4', '11/1/2005', 'Changeling Press', '1', '', '0000-00-00', 0),
(35, 'Changeling (Changeling  #1)', '294.0666667', 'Delia Sherman', '3.6', '670059676', '9.78067E+12', 'eng', '256', '978', '111', '8/17/2006', 'Viking Juvenile', '1', '', '0000-00-00', 0),
(36, 'The Changeling Sea', '303.8666667', 'Patricia A. McKillip', '4.06', '141312629', '9.78014E+12', 'eng', '137', '4454', '302', '4/14/2003', 'Firebird', '1', '', '0000-00-00', 0),
(37, 'The Changeling', '313.6666667', 'Zilpha Keatley Snyder', '4.17', '595321801', '9.7806E+12', 'eng', '228', '1176', '96', '6/8/2004', 'iUniverse', '1', '', '0000-00-00', 0),
(38, 'The Changeling', '323.4666667', 'Kate Horsley', '3.55', '1590301943', '9.78159E+12', 'eng', '339', '301', '43', '4/12/2005', 'Shambhala', '1', '', '0000-00-00', 0),
(39, 'The Changeling (Daughters of England  #15)', '333.2666667', 'Philippa Carr', '3.98', '449146979', '9.78045E+12', 'eng', '369', '345', '12', '8/28/1990', 'Ivy Books', '1', '', '0000-00-00', 0),
(40, 'The Known World', '343.0666667', 'Edward P. Jones', '3.83', '61159174', '9.78006E+12', 'eng', '388', '29686', '2626', '8/29/2006', 'Amistad', '1', '', '0000-00-00', 0),
(41, 'The Known World', '352.8666667', 'Edward P. Jones/Kevin R. Free', '3.83', '006076273X', '9.78006E+12', 'en-US', '14', '55', '12', '6/15/2004', 'HarperAudio', '1', '', '0000-00-00', 0),
(42, 'The Known World', '362.6666667', 'Edward P. Jones', '3.83', '60749911', '9.78006E+12', 'eng', '576', '22', '3', '6/15/2004', 'Harper', '1', '', '0000-00-00', 0),
(43, 'Traders  Guns & Money: Knowns and Unknowns in the Dazzling World of Derivatives', '372.4666667', 'Satyajit Das', '3.83', '273704745', '9.78027E+12', 'eng', '334', '1456', '82', '5/15/2006', 'FT Press', '1', '', '0000-00-00', 0),
(44, 'Artesia: Adventures in the Known World', '382.2666667', 'Mark Smylie', '4.13', '1932386106', '9.78193E+12', 'eng', '352', '52', '4', '12/14/2005', 'Archaia', '1', '', '0000-00-00', 0),
(45, 'The John McPhee Reader (John McPhee Reader  #1)', '392.0666667', 'John McPhee/William Howarth', '4.42', '374517193', '9.78037E+12', 'eng', '416', '562', '37', '6/1/1982', 'Farrar  Straus and Giroux', '1', '', '0000-00-00', 0),
(46, 'Uncommon Carriers', '401.8666667', 'John McPhee', '3.95', '374280398', '9.78037E+12', 'en-US', '248', '1630', '203', '5/16/2006', 'Farrar Straus Giroux', '1', '', '0000-00-00', 0),
(47, 'Heirs of General Practice', '411.6666667', 'John McPhee', '4.17', '374519749', '9.78037E+12', 'eng', '128', '268', '22', '4/1/1986', 'Farrar  Straus and Giroux', '1', '', '0000-00-00', 0),
(48, 'The Control of Nature', '421.4666667', 'John McPhee', '4.24', '374522596', '9.78037E+12', 'en-US', '288', '3498', '305', '9/1/1990', 'Farrar  Straus and Giroux', '1', '', '0000-00-00', 0),
(49, 'Annals of the Former World', '431.2666667', 'John McPhee', '4.34', '374518734', '9.78037E+12', 'eng', '720', '3115', '228', '1/6/1999', 'Farrar  Straus and Giroux', '1', '', '0000-00-00', 0),
(50, 'Coming Into the Country', '441.0666667', 'John McPhee', '4.22', '374522871', '9.78037E+12', 'eng', '448', '5704', '261', '4/1/1991', 'Farrar  Straus and Giroux', '1', '', '0000-00-00', 0),
(51, 'La Place de la Concorde Suisse', '450.8666667', 'John McPhee', '3.92', '374519323', '9.78037E+12', 'fre', '160', '698', '52', '4/1/1994', 'Farrar  Straus and Giroux', '1', '', '0000-00-00', 0),
(52, 'Giving Good Weight', '460.6666667', 'John McPhee', '4.23', '374516006', '9.78037E+12', 'eng', '288', '542', '36', '4/1/1994', 'Farrar  Straus and Giroux', '1', '', '0000-00-00', 0),
(53, 'Rising from the Plains', '470.4666667', 'John McPhee', '4.23', '374520658', '9.78037E+12', 'eng', '208', '1341', '98', '11/1/1987', 'Farrar  Straus and Giroux', '1', '', '0000-00-00', 0),
(54, 'The Heidi Chronicles', '480.2666667', 'Wendy Wasserstein', '3.75', '822205106', '9.78082E+12', 'eng', '81', '1423', '70', '3/1/2002', 'Dramatists Play Service', '1', '', '0000-00-00', 0),
(55, 'The Heidi Chronicles: Uncommon Women and Others & Isn''t It Romantic', '490.0666667', 'Wendy Wasserstein', '3.84', '679734996', '9.78068E+12', 'eng', '249', '2766', '64', '7/2/1991', 'Vintage', '1', '', '0000-00-00', 0),
(56, 'Active Literacy Across the Curriculum: Strategies for Reading  Writing  Speaking  and Listening', '499.8666667', 'Heidi Hayes Jacobs', '3.94', '1596670231', '9.7816E+12', 'eng', '138', '31', '1', '3/29/2006', 'Routledge', '1', '', '0000-00-00', 0),
(57, 'Simply Beautiful Beaded Jewelry', '509.6666667', 'Heidi Boyd', '3.77', '1581807740', '9.78158E+12', 'en-US', '128', '62', '4', '3/14/2006', 'North Light Books', '1', '', '0000-00-00', 0),
(58, 'Always Enough: God''s Miraculous Provision Among the Poorest Children on Earth', '519.4666667', 'Heidi Baker/Rolland Baker', '4.46', '800793617', '9.7808E+12', 'eng', '192', '860', '53', '9/1/2003', 'Chosen Books', '1', '', '0000-00-00', 0),
(59, 'Mapping the Big Picture: Integrating Curriculum & Assessment K-12', '529.2666667', 'Heidi Hayes Jacobs', '3.68', '871202867', '9.78087E+12', 'en-US', '108', '77', '2', '1/28/1997', 'Association for Supervision & Curriculum Development', '1', '', '0000-00-00', 0),
(60, 'Heidi (Heidi  #1-2)', '539.0666667', 'Johanna Spyri/Beverly Cleary/Angelo  Rinaldi', '3.99', '753454947', '9.78075E+12', 'eng', '352', '153317', '2257', '11/15/2002', 'Kingfisher', '1', '', '0000-00-00', 0),
(61, 'Getting Results with Curriculum Mapping', '548.8666667', 'Heidi Hayes Jacobs', '3.25', '871209993', '9.78087E+12', 'eng', '192', '55', '5', '11/15/2004', 'ASCD', '1', '', '0000-00-00', 0),
(62, 'There''s Always Enough: The Miraculous Move of God in Mozambique', '558.6666667', 'Rolland Baker/Heidi Baker', '4.46', '1852402873', '9.78185E+12', 'eng', '192', '34', '6', '4/28/2003', 'Sovereign World', '1', '', '0000-00-00', 0),
(63, 'What to Expect the First Year (What to Expect)', '568.4666667', 'Heidi Murkoff/Sharon Mazel/Arlene Eisenberg/Sandee Hathaway/Mark D. Widome', '3.89', '761129588', '9.78076E+12', 'eng', '832', '11797', '659', '10/16/2003', 'Workman Publishing Company', '1', '', '0000-00-00', 0),
(64, 'The Player''s Handbook: The Ultimate Guide on Dating and Relationships', '578.2666667', 'Heidi Fleiss/Libby Keatinge', '3.82', '972016414', '9.78097E+12', 'eng', '123', '34', '8', '5/10/2004', 'One Hour Entertainment', '1', '', '0000-00-00', 0),
(65, 'Simply Beautiful Beading: 53 Quick and Easy Projects', '588.0666667', 'Heidi Boyd', '3.78', '1581805632', '9.78158E+12', 'en-US', '128', '78', '4', '8/19/2004', 'North Light Books', '1', '', '0000-00-00', 0);

UPDATE items SET stock = 20;

--
-- Table structure for table `itemused`
--

CREATE TABLE `itemused` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `street_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `qty` int(100) NOT NULL,
  `recovery_by` int(11) NOT NULL,
  `recovery_amount` int(100) NOT NULL,
  `date_created` date NOT NULL,
  `delete_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemused`
--
/*
INSERT INTO `itemused` (`id`, `employee_id`, `item_id`, `street_id`, `description`, `qty`, `recovery_by`, `recovery_amount`, `date_created`, `delete_id`) VALUES
(4, 4, 3, 19, 'Used for connection and damage wirer', 5, 11, 275, '1970-01-01', 1),
(5, 6, 3, 7, 'This product is used for new connections.', 10, 15, 550, '1970-01-01', 1),
(6, 6, 2, 7, 'hhh', 6, 0, 72, '2019-07-01', 1);*/

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `grand_total` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive',
  `date_created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `grand_total`, `created`, `modified`, `status`, `date_created`) VALUES
(2, 95, 3000.00, '2020-05-15 07:14:38', '2020-05-15 07:14:38', '1', '2020-05-15 10:14:38'),
(3, 96, 12000.00, '2020-05-15 12:19:24', '2020-05-15 12:19:24', '1', '2020-05-15 15:19:24'),
(4, 97, 200000.00, '2020-05-15 12:45:06', '2020-05-15 12:45:06', '1', '2020-05-15 15:45:06'),
(5, 98, 1600132.00, '2020-05-15 13:02:12', '2020-05-15 13:02:12', '1', '2020-05-15 16:02:12'),
(6, 99, 200.00, '2020-05-15 13:21:18', '2020-05-15 13:21:18', '1', '2020-05-15 16:21:18'),
(7, 100, 4000.00, '2020-05-15 13:46:03', '2020-05-15 13:46:03', '1', '2020-05-15 16:46:03'),
(8, 101, 44.00, '2021-04-16 00:44:23', '2021-04-16 00:44:23', '1', '2021-04-15 15:44:23');*/

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL,
  `sub_total` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_items`
--

/*INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `sub_total`) VALUES
(3, 2, 42, 1, 0.00),
(4, 2, 63, 1, 0.00),
(5, 2, 91, 1, 3000.00),
(6, 3, 42, 2, 0.00),
(7, 3, 91, 4, 12000.00),
(8, 4, 89, 1, 200000.00),
(9, 5, 86, 8, 1600000.00),
(10, 5, 92, 2, 132.00),
(11, 6, 84, 1, 200.00),
(12, 6, 42, 1, 0.00),
(13, 7, 95, 5, 1000.00),
(14, 7, 91, 1, 3000.00),
(15, 8, 13, 1, 22.00),
(16, 8, 34, 1, 22.00);*/

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `purchase_price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `date_purchased` date NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `delete_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Dumping data for table `purchase`
--

/*
INSERT INTO `purchase` (`id`, `item_id`, `purchase_price`, `qty`, `total_amount`, `date_purchased`, `date_created`, `delete_id`) VALUES
(2, 2, 0, 0, 0, '0000-00-00', '2019-08-06 05:17:52', 0),
(3, 3, 50, 10, 500, '0000-00-00', '2019-08-05 07:00:00', 1),
(4, 3, 4, 10, 40, '2019-08-05', '2019-06-13 07:00:00', 1),
(5, 3, 50, 6, 300, '2019-07-30', '0000-00-00 00:00:00', 1),
(6, 2, 40, 10, 400, '0000-00-00', '0000-00-00 00:00:00', 1),
(7, 2, 5, 10, 50, '0000-00-00', '0000-00-00 00:00:00', 1),
(8, 2, 50, 5, 250, '0000-00-00', '0000-00-00 00:00:00', 1);*/

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deleterec`
--
ALTER TABLE `deleterec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itemused`
--
ALTER TABLE `itemused`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `street_id` (`street_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `deleterec`
--
ALTER TABLE `deleterec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `itemused`
--
ALTER TABLE `itemused`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
