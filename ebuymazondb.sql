-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2016 at 02:19 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebuymazondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL,
  `name` longtext,
  `phone` longtext,
  `address` longtext,
  `email` longtext,
  `password` longtext,
  `role` varchar(10) DEFAULT NULL,
  `timestamp` varchar(20) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `phone`, `address`, `email`, `password`, `role`, `timestamp`) VALUES
(1, 'Mr. Master Admin', '00491722311392', 'Kleine Burgholzstr.11, 44145 Dortmund, Germany', 'b.atik@hotmail.de', 'e542ab8962879650018519f73ceed35cf5b23d7d', '1', '1457134194'),
(2, 'Mr. Accountant', '017', 'dhk', 'accountant@shop.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '4', '1430737266'),
(3, 'Mr manager', '021525566', 'Niketon Dhaka', 'manager@shop.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '6', '1433682938'),
(4, 'B?nyamin Atik', '01722311392', 'Kleine Burgholzstr.11\r\n44145 Dortmund\r\nGERMANY', 'b.atik@hotmail.de', '59a5111efef02eade5b229c22889f30735bc8ac7', '1', '1457208827'),
(5, 'adnan', '', '', 'adnan2010chief@gmail.com', 'ce22c0a6d3e3273a5e6f44f17fb76170585a4270', '1', '1460228185'),
(6, 'Mehedi', '', 'Savar', 'MehediDracula@gmail.com', '91a1fac62f70696397226f73da99baae023e0637', '1', '1466069752');

-- --------------------------------------------------------

--
-- Table structure for table `api_users`
--

CREATE TABLE IF NOT EXISTS `api_users` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `api_users`
--

INSERT INTO `api_users` (`id`, `vendor_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 12, 0, '2016-06-28 01:18:31', '2016-06-28 01:28:52');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE IF NOT EXISTS `attributes` (
  `attribute_id` int(11) NOT NULL,
  `attribute_name` longtext NOT NULL,
  `attribute_group_id` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`attribute_id`, `attribute_name`, `attribute_group_id`, `sort_order`) VALUES
(1, 'Blue', 1, 1),
(2, '1GB', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `attribute_group`
--

CREATE TABLE IF NOT EXISTS `attribute_group` (
  `attribute_group_id` int(11) NOT NULL,
  `attribute_group_name` longtext NOT NULL,
  `sort_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attribute_group`
--

INSERT INTO `attribute_group` (`attribute_group_id`, `attribute_group_name`, `sort_id`) VALUES
(1, 'Colors', 1),
(2, 'Memory', 2);

-- --------------------------------------------------------

--
-- Table structure for table `banned_ip`
--

CREATE TABLE IF NOT EXISTS `banned_ip` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banned_ip`
--

INSERT INTO `banned_ip` (`id`, `user_id`, `ip_address`) VALUES
(1, NULL, '127.0.0.1'),
(2, 2, '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `banner_id` int(11) NOT NULL,
  `page` longtext,
  `place` longtext,
  `num` longtext,
  `status` longtext,
  `link` longtext
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `page`, `place`, `num`, `status`, `link`) VALUES
(1, 'home', 'after_slider', '1', 'ok', ''),
(2, 'home', 'after_slider', '2', 'ok', ''),
(3, 'home', 'after_slider', '3', 'ok', ''),
(4, 'home', 'after_slider', '4', '0', ''),
(5, 'home', 'after_featured', '1', '0', ''),
(6, 'home', 'after_featured', '2', '0', ''),
(7, 'home', 'after_featured', '3', '0', ''),
(8, 'home', 'after_featured', '4', '0', ''),
(9, 'home', 'after_search', '1', '0', ''),
(10, 'home', 'after_search', '2', '0', ''),
(11, 'home', 'after_search', '3', '0', ''),
(12, 'home', 'after_search', '4', '0', ''),
(13, 'home', 'after_category', '1', '0', ''),
(14, 'home', 'after_category', '2', '0', ''),
(15, 'home', 'after_category', '3', '0', ''),
(16, 'home', 'after_category', '4', '0', ''),
(17, 'home', 'after_latest', '1', '0', ''),
(18, 'home', 'after_popular', '1', '0', ''),
(19, 'home', 'after_most_viewed', '1', '0', ''),
(20, 'category', 'after_filters', '1', 'ok', ''),
(21, 'featured', 'after_most_sold', '1', '0', ''),
(22, 'featured', 'after_most_viewed', '1', '0', ''),
(23, 'vendor_home', 'after_filter', '1', 'ok', '');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `summery` varchar(1000) NOT NULL,
  `author` varchar(500) NOT NULL,
  `date` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `blog_category` varchar(25) NOT NULL,
  `number_of_view` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `summery`, `author`, `date`, `description`, `status`, `blog_category`, `number_of_view`) VALUES
(1, 'Quibusdam deleniti dicta molestiae quia mollitia ', '<p [removed]="line-height: 17.1429px;">Nobis adipisci quia enim repellendus. Et placeat, velit ipsum, illum, minus rerum reiciendis ut dolor et molestiae sunt, eum est autem porro eum et sint cupiditate reprehenderit, incidunt, est dolore animi, voluptas e</p>', 'Consequatur', '2015-09-23', '<p [removed]="line-height: 17.1429px;"></p><p [removed]="line-height: 17.1429px;" 17.1429px;"="">Nobis adipisci quia enim repellendus. Et placeat, velit ipsum, illum, minus rerum reiciendis ut dolor et molestiae sunt, eum est autem porro eum et sint cupiditate reprehenderit, incidunt, est dolore animi, voluptas et quo facilis omnis libero dolor reiciendis est beatae est ut eiusmod sed deserunt ullamco cillum deserunt et beatae deserunt sapiente modi excepteur tempor doloremque irure ex accusantium quasi ratione nihil ipsa, deserunt dolor quia quasi ab cupiditate aperiam atque a irure dicta odio non perferendis est, nulla ut dolor ut duis aliquam non earum totam deserunt molestiae voluptatibus qui tenetur hic eius et et exercitation ex Nam.</p><div [removed]="line-height: 17.1429px;">Nobis adipisci quia enim repellendus. Et placeat, velit ipsum, illum, minus rerum reiciendis ut dolor et molestiae sunt, eum est autem porro eum et sint cupiditate reprehenderit, incidunt, est dolore animi, voluptas et quo facilis omnis libero dolor reiciendis est beatae est ut eiusmod sed deserunt ullamco cillum deserunt et beatae deserunt sapiente modi excepteur tempor doloremque irure ex accusantium quasi ratione nihil ipsa, deserunt dolor quia quasi ab cupiditate aperiam atque a irure dicta odio non perferendis est, nulla ut dolor ut duis aliquam non earum totam deserunt molestiae voluptatibus qui tenetur hic eius et et exercitation ex Nam.</div><div [removed]="line-height: 17.1429px;">??</div>', '', '1', 1),
(2, 'Pariatur At a ut ut cupidatat velit explicabo', 'Ea itaque dignissimos anim corrupti, aliquam necessitatibus iste pariatur. Ipsam ea temporibus aspernatur quia odio dolorem sit, ullam alias beatae aliquam modi incidunt, est fugiat vel tenetur et molestias ut culpa consequatur, dolorum sit, nesciunt, vel ut harum corporis amet, ex et sed aperiam minim blanditiis sit, minima ad et iusto quis aut reprehenderit, velit optio, animi, autem provident, vel aute.', 'Cupiditate ', '2002-06-18', 'Ipsum et ad vel est, quas rem minima ex in cillum sit reprehenderit in odit eum rerum sit, illum, nobis saepe est voluptates quis placeat, repellendus. Autem ut est Nam iure quam fugiat, cumque incididunt magnam dolor quae architecto dolor facilis duis qui esse, laboriosam, nihil qui obcaecati voluptatibus duis eos omnis occaecat temporibus eu dolor voluptatem.<span [removed]="line-height: 17.1429px;"><p [removed]="line-height: 17.1429px;" 17.1429px;"="">Nobis adipisci quia enim repellendus. Et placeat, velit ipsum, illum, minus rerum reiciendis ut dolor et molestiae sunt, eum est autem porro eum et sint cupiditate reprehenderit, incidunt, est dolore animi, voluptas et quo facilis omnis libero dolor reiciendis est beatae est ut eiusmod sed deserunt ullamco cillum deserunt et beatae deserunt sapiente modi excepteur tempor doloremque irure ex accusantium quasi ratione nihil ipsa, deserunt dolor quia quasi ab cupiditate aperiam atque a irure dicta odio non perferendis est, nulla ut dolor ut duis aliquam non earum totam deserunt molestiae voluptatibus qui tenetur hic eius et et exercitation ex Nam.</p><div [removed]="line-height: 17.1429px;">Nobis adipisci quia enim repellendus. Et placeat, velit ipsum, illum, minus rerum reiciendis ut dolor et molestiae sunt, eum est autem porro eum et sint cupiditate reprehenderit, incidunt, est dolore animi, voluptas et quo facilis omnis libero dolor reiciendis est beatae est ut eiusmod sed deserunt ullamco cillum deserunt et beatae deserunt sapiente modi excepteur tempor doloremque irure ex accusantium quasi ratione nihil ipsa, deserunt dolor quia quasi ab cupiditate aperiam atque a irure dicta odio non perferendis est, nulla ut dolor ut duis aliquam non earum totam deserunt molestiae voluptatibus qui tenetur hic eius et et exercitation ex Nam.</div><div [removed]="line-height: 17.1429px;">??</div></span>', '', '1', 1),
(3, 'Ab quis quod voluptas proident amet aute odit consequatur voluptas at architecto fugiat', 'Eum numquam aut labore voluptates commodo id eos, Nam et eum quidem delectus, tempor fuga. Sit, quo autem ut sunt, do autem soluta enim et cupidatat illum, iure in voluptate esse, exercitationem qui numquam nostrum voluptate accusamus consectetur quis libero in.', 'Hic facere omnis ut sunt enim commodi similique', '1974-10-05', '<p [removed]="line-height: 17.1429px;"></p><p [removed]="line-height: 17.1429px;" 17.1429px;"="">Nobis adipisci quia enim repellendus. Et placeat, velit ipsum, illum, minus rerum reiciendis ut dolor et molestiae sunt, eum est autem porro eum et sint cupiditate reprehenderit, incidunt, est dolore animi, voluptas et quo facilis omnis libero dolor reiciendis est beatae est ut eiusmod sed deserunt ullamco cillum deserunt et beatae deserunt sapiente modi excepteur tempor doloremque irure ex accusantium quasi ratione nihil ipsa, deserunt dolor quia quasi ab cupiditate aperiam atque a irure dicta odio non perferendis est, nulla ut dolor ut duis aliquam non earum totam deserunt molestiae voluptatibus qui tenetur hic eius et et exercitation ex Nam.</p><div [removed]="line-height: 17.1429px;">Nobis adipisci quia enim repellendus. Et placeat, velit ipsum, illum, minus rerum reiciendis ut dolor et molestiae sunt, eum est autem porro eum et sint cupiditate reprehenderit, incidunt, est dolore animi, voluptas et quo facilis omnis libero dolor reiciendis est beatae est ut eiusmod sed deserunt ullamco cillum deserunt et beatae deserunt sapiente modi excepteur tempor doloremque irure ex accusantium quasi ratione nihil ipsa, deserunt dolor quia quasi ab cupiditate aperiam atque a irure dicta odio non perferendis est, nulla ut dolor ut duis aliquam non earum totam deserunt molestiae voluptatibus qui tenetur hic eius et et exercitation ex Nam.</div><div [removed]="line-height: 17.1429px;">??</div>', '', '1', 1),
(4, 'Ad aut tenetur aut enim quod doloribus quia ', 'Voluptatem id accusantium exercitation et cumque repellendus. Accusamus rerum aute nisi amet, duis aliquip in tempora sed qui expedita molestiae unde fugit, aut pariatur? Eiusmod.', 'Quia veniam', '1983-08-20', '<p [removed]="line-height: 17.1429px;">Accusamus sit, consectetur, impedit, quae distinctio. Vel voluptas amet, blanditiis ut consectetur, consequatur, nesciunt, sint aliquam odio occaecat non ex laudantium, et dolorem ex laborum architecto odit magni qui maiores architecto qui et et eu accusantium labore elit, corrupti, nobis amet, elit, qui sed exercitationem deserunt vel voluptatem, est fugiat, sed tempore, enim tempore, nihil ea eligendi eligendi qui culpa, repudiandae odio consectetur, voluptas consequuntur animi, non.</p><p [removed]="line-height: 17.1429px;">Accusamus sit, consectetur, impedit, quae distinctio. Vel voluptas amet, blanditiis ut consectetur, consequatur, nesciunt, sint aliquam odio occaecat non ex laudantium, et dolorem ex laborum architecto odit magni qui maiores architecto qui et et eu accusantium labore elit, corrupti, nobis amet, elit, qui sed exercitationem deserunt vel voluptatem, est fugiat, sed tempore, enim tempore, nihil ea eligendi eligendi qui culpa, repudiandae odio consectetur, voluptas consequuntur animi, non.</p><p [removed]="line-height: 17.1429px;">Accusamus sit, consectetur, impedit, quae distinctio. Vel voluptas amet, blanditiis ut consectetur, consequatur, nesciunt, sint aliquam odio occaecat non ex laudantium, et dolorem ex laborum architecto odit magni qui maiores architecto qui et et eu accusantium labore elit, corrupti, nobis amet, elit, qui sed exercitationem deserunt vel voluptatem, est fugiat, sed tempore, enim tempore, nihil ea eligendi eligendi qui culpa, repudiandae odio consectetur, voluptas consequuntur animi, non.</p><p [removed]="line-height: 17.1429px;">?</p>', '', '2', 1),
(5, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', '<p><span [removed]="line-height: 1.42857; text-align: justify;">?is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,</span><br></p>', '', '2015-10-14', '<div [removed]="text-align: justify;">Lorem Ipsum?is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></div><div [removed]="margin-bottom: 14px; padding: 0px;">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p></div>', NULL, '6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE IF NOT EXISTS `blog_category` (
  `blog_category_id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`blog_category_id`, `name`) VALUES
(1, 'Delevary'),
(2, 'Product Quality'),
(3, 'Vendorship'),
(4, 'Problem Related'),
(5, 'Others'),
(6, 'Science & technology');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `brand_id` int(11) NOT NULL,
  `name` longtext,
  `description` longtext,
  `category` varchar(10) DEFAULT NULL,
  `added_by` varchar(30) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `name`, `description`, `category`, `added_by`) VALUES
(1, 'Apple', '0', '1', ''),
(2, 'Huawei', '0', '1', ''),
(3, 'Demo Brand 3', '0', '2', ''),
(4, 'Demo Brand 4', '0', '2', ''),
(5, 'Samsung', '0', '1', ''),
(6, 'Automobile', '0', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `business_settings`
--

CREATE TABLE IF NOT EXISTS `business_settings` (
  `business_settings_id` int(11) NOT NULL,
  `type` longtext,
  `status` varchar(10) DEFAULT NULL,
  `value` longtext CHARACTER SET utf8 COLLATE utf8_bin
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_settings`
--

INSERT INTO `business_settings` (`business_settings_id`, `type`, `status`, `value`) VALUES
(1, 'paypal_email', 'ok', 'b.atik@hotmail.de'),
(2, 'shipping_cost', 'ok', '0'),
(3, 'shipping_cost_type', '', 'product_wise'),
(4, 'currency', '', '?'),
(6, 'shipment_info', '', '<p></p><p></p><span style="color: rgb(255, 0, 0);"><span style="font-style: italic;">Wir versenden mit DHL oder Hermes Versand </span></span><br><p></p><p></p>'),
(7, 'currency_name', '', 'Euro'),
(8, 'exchange', '', '0'),
(9, 'paypal_set', '', 'ok'),
(10, 'paypal_type', '', 'original'),
(11, 'faqs', '', '[]'),
(12, 'cash_set', '', 'ok'),
(13, 'stripe_set', '', 'no'),
(14, 'stripe_secret', '', ''),
(15, 'stripe_publishable', '', ''),
(16, 'market_place_type', '', 'free');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL,
  `category_name` longtext,
  `description` longtext,
  `category_key` longtext,
  `category_icon` varchar(100) DEFAULT NULL,
  `meta_description` varchar(500) DEFAULT NULL,
  `meta_keywords` varchar(500) DEFAULT NULL,
  `meta_title` varchar(100) DEFAULT NULL,
  `is_visible_user` int(11) DEFAULT NULL,
  `display_categories` int(11) DEFAULT NULL,
  `user_group` int(11) DEFAULT NULL,
  `password_protected` int(11) DEFAULT NULL,
  `access_password` longtext,
  `subcate_on_catelog_page` int(11) DEFAULT NULL,
  `navigation_help` varchar(50) DEFAULT NULL,
  `show_subcate_images` varchar(50) DEFAULT NULL,
  `priority` varchar(50) DEFAULT NULL,
  `cat_description_top` longtext,
  `cat_description_bottom` longtext,
  `is_active` int(2) DEFAULT NULL,
  `vendor_id` longtext
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `description`, `category_key`, `category_icon`, `meta_description`, `meta_keywords`, `meta_title`, `is_visible_user`, `display_categories`, `user_group`, `password_protected`, `access_password`, `subcate_on_catelog_page`, `navigation_help`, `show_subcate_images`, `priority`, `cat_description_top`, `cat_description_bottom`, `is_active`, `vendor_id`) VALUES
(1, 'Electronics', NULL, '', '', '', '', '', 0, 0, 0, 0, '', 0, '', '', '0', '', '', 0, NULL),
(2, 'Auto & Motorrad', NULL, '', '', '', '', '', 0, 0, 0, 0, '', 0, '', '', '0', '', '', 0, NULL),
(3, 'Women', NULL, '', '', '', '', '', 0, 0, 0, 0, '', 0, '', '', '0', '', '', 0, NULL),
(4, 'Men', NULL, '', '', '', '', '', 0, 0, 0, 0, '', 0, '', '', '0', '', '', 0, NULL),
(5, 'Kids', NULL, '', '', '', '', '', 0, 0, 0, 0, '', 0, '', '', '0', '', '', 0, NULL),
(6, 'Digital Product', NULL, '', '', '', '', '', 0, 0, 0, 0, '', 0, '', '', '0', '', '', 0, NULL),
(13, 'B?cher & Filme', NULL, '', '', '', '', '', 0, 0, 0, 0, '', 0, '', '', '0', '', '', 0, NULL),
(14, 'B?ro & Schreibwaren', NULL, '', '', '', '', '', 0, 0, 0, 0, '', 0, '', '', '0', '', '', 0, NULL),
(15, 'Beauty & Wellnes', NULL, '', '', '', '', '', 0, 0, 0, 0, '', 0, '', '', '0', '', '', 0, NULL),
(16, 'Computer & Zubeh?r', NULL, '', '', '', '', '', 0, 0, 0, 0, '', 0, '', '', '0', '', '', 0, NULL),
(17, 'Lebensmittel ', NULL, '', '', '', '', '', 0, 0, 0, 0, '', 0, '', '', '0', '', '', 0, NULL),
(18, 'Haus & Garten', NULL, '', '', '', '', '', 0, 0, 0, 0, '', 0, '', '', '0', '', '', 0, NULL),
(19, 'Heimwerken & Hobby', NULL, '', '', '', '', '', 0, 0, 0, 0, '', 0, '', '', '0', '', '', 0, NULL),
(20, 'Wohnen & Mehr', NULL, '', '', '', '', '', 0, 0, 0, 0, '', 0, '', '', '0', '', '', 0, NULL),
(21, 'Mode ', NULL, '', '', '', '', '', 0, 0, 0, 0, '', 0, '', '', '0', '', '', 0, NULL),
(22, 'Spiele & Sport', NULL, '', '', '', '', '', 0, 0, 0, 0, '', 0, '', '', '0', '', '', 0, NULL),
(23, 'Tierbedarf', NULL, '', '', '', '', '', 0, 0, 0, 0, '', 0, '', '', '0', '', '', 0, NULL),
(24, 'Uhren & Schmuck2', NULL, '', '', '', '', '', 0, 0, 0, 0, '', 0, '', '', '0', '', '', 0, NULL),
(31, 'clothing   ', NULL, 'clothing', 'category_clothing.png', 'test', 'test', 'test', 1, 1, 1, 1, 'test', 1, '', 'global', '3', '<p>test<br></p>', '<p>test<br></p>', 0, '["0"]'),
(32, 'gift', NULL, 'test_1', 'category_test_1.png', 'test2', 'test2', 'test2', 1, 1, 0, 1, 'test2', 1, '', 'global', '2', '<p>dzdfd sfsdfsdf<br></p>', '<p>dfsd sfsdf dsff<br></p>', 1, '["9"]'),
(33, 'Home Applications                                        ', NULL, 'home_applications', 'category_home_applications.png', 'Home Applicatios desc', 'Home Application key', 'Home Applications Title', 0, 0, 1, 0, '0', 1, '', 'no', '10 lowest priority', '<p>home category description top<br></p>', '<p>home bottom<br></p>', 0, '["9","11","12"]'),
(36, 'test ', NULL, 'test', 'category_test.png', 'dfdsf', 'fsdfd', 'test', 1, 0, 1, 0, '', 0, '', 'global', '6', '<p>dsfdsf</p>', '<p>dsfsdf</p>', 1, '["0"]');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('2922198df13a5ec5e0a80e2868aba883edf0781b', '::1', 1469077029, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436393037343833373b74696d657374616d707c693a313436393037373032393b7375726665725f696e666f7c733a35383a227b226d657373616765223a2272657365727665642072616e6765222c227175657279223a223a3a31222c22737461747573223a226661696c227d223b6c6f67696e7c733a333a22796573223b61646d696e5f6c6f67696e7c733a333a22796573223b61646d696e5f69647c733a313a2231223b61646d696e5f6e616d657c733a31363a224d722e204d61737465722041646d696e223b7469746c657c733a353a2261646d696e223b),
('52d15bd0978362a9ab7890d71aaa78e531398329', '::1', 1469016570, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436393031363536393b74696d657374616d707c693a313436393031363536393b7375726665725f696e666f7c733a35383a227b226d657373616765223a2272657365727665642072616e6765222c227175657279223a223a3a31222c22737461747573223a226661696c227d223b),
('7de06df13c7eceaa7c2e44a9ece9289b6e34577b', '127.0.0.1', 1469017324, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436393031313730393b74696d657374616d707c693a313436393031363438303b7375726665725f696e666f7c733a36343a227b226d657373616765223a2272657365727665642072616e6765222c227175657279223a223132372e302e302e31222c22737461747573223a226661696c227d223b636f6d706172657c733a323a225b5d223b66625f5f73746174657c733a33323a223035383637393639666530646665663431643337356533303131323061343962223b6c6f67696e7c733a333a22796573223b61646d696e5f6c6f67696e7c733a333a22796573223b61646d696e5f69647c733a313a2231223b61646d696e5f6e616d657c733a31363a224d722e204d61737465722041646d696e223b7469746c657c733a353a2261646d696e223b),
('9f7085006680f733b9ff8f7d8db228db67b86739', '127.0.0.1', 1469103557, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436393130323131383b74696d657374616d707c693a313436393130333235363b7375726665725f696e666f7c733a36343a227b226d657373616765223a2272657365727665642072616e6765222c227175657279223a223132372e302e302e31222c22737461747573223a226661696c227d223b6c6f67696e7c733a333a22796573223b61646d696e5f6c6f67696e7c733a333a22796573223b61646d696e5f69647c733a313a2231223b61646d696e5f6e616d657c733a31363a224d722e204d61737465722041646d696e223b7469746c657c733a353a2261646d696e223b636f6d706172657c733a323a225b5d223b66625f5f73746174657c733a33323a223130373064316563333866366638366165366230636130633234306133663864223b),
('fc5b79504d606b7fb11111062f1ee3dbcceb13b9', '127.0.0.1', 1469086492, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436393038343235313b74696d657374616d707c693a313436393038363139313b7375726665725f696e666f7c733a36343a227b226d657373616765223a2272657365727665642072616e6765222c227175657279223a223132372e302e302e31222c22737461747573223a226661696c227d223b6c6f67696e7c733a333a22796573223b61646d696e5f6c6f67696e7c733a333a22796573223b61646d696e5f69647c733a313a2231223b61646d696e5f6e616d657c733a31363a224d722e204d61737465722041646d696e223b7469746c657c733a353a2261646d696e223b);

-- --------------------------------------------------------

--
-- Table structure for table `company_information`
--

CREATE TABLE IF NOT EXISTS `company_information` (
  `company_id` int(11) NOT NULL,
  `type` longtext NOT NULL,
  `status` varchar(10) NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_information`
--

INSERT INTO `company_information` (`company_id`, `type`, `status`, `value`) VALUES
(1, 'register_no', '', ''),
(2, 'company_name', '', 'IXXO Internet Solutions'),
(3, 'address1', '', 'TechnologiePark BGL'),
(4, 'address2', '', 'Friedrich-Ebert-Strasse'),
(5, 'city', '', 'Bergisch Gladbach'),
(6, 'state', '', 'Nordrhein-Westfalen'),
(7, 'zip', '', '51429'),
(8, 'country', '', 'Germany'),
(9, 'phone', '', '+49 2204 473920'),
(10, 'fax', '', '+49 2204 473920'),
(11, 'website', '', 'http://www.ixxocart.com'),
(12, 'email', '', 'myixxo@gmail.com'),
(13, 'slogan', '', 'Making ecommerce work');

-- --------------------------------------------------------

--
-- Table structure for table `contact_message`
--

CREATE TABLE IF NOT EXISTS `contact_message` (
  `contact_message_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `subject` varchar(1000) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `message` longtext,
  `timestamp` varchar(20) DEFAULT NULL,
  `view` varchar(10) DEFAULT NULL,
  `reply` longtext,
  `other` longtext
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_message`
--

INSERT INTO `contact_message` (`contact_message_id`, `name`, `subject`, `email`, `message`, `timestamp`, `view`, `reply`, `other`) VALUES
(1, 'Barrett Shepard', NULL, 'zape@gmail.com', '', '1444834552', 'no', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL,
  `country_name` varchar(30) NOT NULL,
  `iso1` varchar(10) NOT NULL,
  `iso2` varchar(10) NOT NULL,
  `address_format` longtext NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_name`, `iso1`, `iso2`, `address_format`, `status`) VALUES
(1, 'Aaland Islands', 'AX', 'ALA', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE IF NOT EXISTS `coupon` (
  `coupon_id` int(11) NOT NULL,
  `title` varchar(1000) DEFAULT NULL,
  `spec` varchar(1000) DEFAULT NULL,
  `added_by` varchar(300) DEFAULT NULL,
  `till` varchar(30) DEFAULT NULL,
  `code` varchar(30) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE IF NOT EXISTS `currency` (
  `currency_id` int(11) NOT NULL,
  `currency_code` varchar(20) NOT NULL,
  `currency_name` varchar(40) NOT NULL,
  `exchange_rate` varchar(40) NOT NULL,
  `decimal_point` int(10) NOT NULL,
  `left_symbol` varchar(40) NOT NULL,
  `right_symbol` varchar(40) NOT NULL,
  `is_default` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

--
-- Table structure for table `custom_option`
--

CREATE TABLE IF NOT EXISTS `custom_option` (
  `custom_option_id` int(11) NOT NULL,
  `option_name` varchar(100) NOT NULL,
  `option_type` varchar(50) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `option_value` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custom_option`
--

INSERT INTO `custom_option` (`custom_option_id`, `option_name`, `option_type`, `sort_order`, `option_value`) VALUES
(1, 'test', 'radio', 5, '[{"option_name":"ssas","color":"rgba(204,204,204,1)","sort_order":"2"}]');

-- --------------------------------------------------------

--
-- Table structure for table `default_form_settings`
--

CREATE TABLE IF NOT EXISTS `default_form_settings` (
  `product_condition` varchar(10) NOT NULL,
  `product_inventory_control` varchar(30) NOT NULL,
  `product_taxable` varchar(10) NOT NULL,
  `product_is_free_ship` varchar(10) NOT NULL,
  `product_stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `default_form_settings`
--

INSERT INTO `default_form_settings` (`product_condition`, `product_inventory_control`, `product_taxable`, `product_is_free_ship`, `product_stock`) VALUES
('new', 'no', 'yes', 'yes', 0);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE IF NOT EXISTS `donation` (
  `donation_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_id` longtext NOT NULL,
  `amount` decimal(20,2) NOT NULL DEFAULT '0.00',
  `date_added` datetime NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `payment_status` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donation_id`, `user_id`, `transaction_id`, `amount`, `date_added`, `payment_type`, `payment_status`) VALUES
(2, 2, '1939FY2548924769H', '20.00', '2016-07-05 00:00:00', 'paypal', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `download_id` int(11) NOT NULL,
  `download_name` longtext NOT NULL,
  `added_date` longtext NOT NULL,
  `mask` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`download_id`, `download_name`, `added_date`, `mask`) VALUES
(1, 'Test', '1468409811', 'dir\\*.*');

-- --------------------------------------------------------

--
-- Table structure for table `dynamic_selection_lists`
--

CREATE TABLE IF NOT EXISTS `dynamic_selection_lists` (
  `id` int(11) NOT NULL,
  `item_id` varchar(200) NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `list_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `email_settings`
--

CREATE TABLE IF NOT EXISTS `email_settings` (
  `setting_id` int(11) NOT NULL,
  `driver` varchar(20) NOT NULL,
  `settings` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_settings`
--

INSERT INTO `email_settings` (`setting_id`, `driver`, `settings`) VALUES
(1, 'smtp', '{"smtp_host":"127.0.0.1","smtp_port":"127.0.0.1","smtp_username":"test","smtp_password":"test"}'),
(2, 'mailchimp', '{"mailchimp_api_key":"127.0.0.1"}');

-- --------------------------------------------------------

--
-- Table structure for table `email_template`
--

CREATE TABLE IF NOT EXISTS `email_template` (
  `email_template_id` int(11) NOT NULL,
  `top_html_email` longtext NOT NULL,
  `bottom_html_email` longtext NOT NULL,
  `top_text_email` longtext NOT NULL,
  `bottom_text_email` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_template`
--

INSERT INTO `email_template` (`email_template_id`, `top_html_email`, `bottom_html_email`, `top_text_email`, `bottom_text_email`) VALUES
(1, '{$CompanyName|htmlspecialchars}<table [removed]="background-color:#FFFFFF"><strong>{$CompanyName|htmlspecialchars} - {$EmailTitle|htmlspecialchars}</strong></td></tr><tr><td [removed]><br></td></tr></tbody></table>', '<p>{$CompanyName|htmlspecialchars}<br><a data-cke-saved-href="{$GlobalHttpUrl}" href="http://demo-admin.ixxomultivendor.com/{$GlobalHttpUrl}">{$msg.email.click_to_visit_us}</a><br></p>', '{$CompanyName} - {$EmailTitle}\r\n------------------------------------------------------------------------\r\n\r\n\r\n', '------------------------------------------------------------------------\r\n{$CompanyName}\r\n{$GlobalHttpUrl}\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `filters`
--

CREATE TABLE IF NOT EXISTS `filters` (
  `filter_id` int(11) NOT NULL,
  `filter_group_name` longtext NOT NULL,
  `filter_group_order` int(11) NOT NULL,
  `filter_name` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filters`
--

INSERT INTO `filters` (`filter_id`, `filter_group_name`, `filter_group_order`, `filter_name`) VALUES
(1, 'Brands', 1, '[{"filter_name":"Adidas","sort_order":"1"},{"filter_name":"Nike","sort_order":"2"},{"filter_name":"Puma","sort_order":"3"}]'),
(2, 'Size', 2, '[{"filter_name":"S","sort_order":"1"},{"filter_name":"M","sort_order":"2"},{"filter_name":"L","sort_order":"3"}]');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE IF NOT EXISTS `general_settings` (
  `general_settings_id` int(11) NOT NULL,
  `type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `value` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`general_settings_id`, `type`, `value`) VALUES
(1, 'system_name', 'Ebuymazon'),
(2, 'system_email', 'admin@ebuymazon.com'),
(3, 'system_title', 'Ebuymazon'),
(4, 'address', ''),
(5, 'phone', ''),
(6, 'language', 'english'),
(9, 'terms_conditions', ''),
(10, 'fb_appid', ''),
(11, 'fb_secret', ''),
(12, 'google_languages', '{}'),
(24, 'meta_description', ''),
(25, 'meta_keywords', 'Ebay, amazon, ebaymazon, ebuymazon, ebuy, mazon, marketplace, e-commerce, ebay-mazon, onliinebazar, online-bazar,bazar, gittigidiyor, sanal pazar, sanalpazar, sanalcarsi,carsi'),
(26, 'meta_author', 'Ebuymazon,'),
(27, 'captcha_public', '6LdsXPQSAAAAALRQB-m8Irt6-2_s2t10QsVnndVN'),
(28, 'captcha_private', '6LdsXPQSAAAAAFEnxFqW9qkEU_vozvDvJFV67yho'),
(29, 'application_name', 'Super Shop'),
(30, 'client_id', ''),
(31, 'client_secret', ''),
(32, 'redirect_uri', ''),
(33, 'api_key', ''),
(44, 'contact_about', '<p>Seite is im Aufbau.....<br></p>'),
(39, 'contact_phone', '00xx/xxxx/xxxx392'),
(40, 'contact_email', 'xxxxxx@ebuymazon.com'),
(41, 'contact_website', 'www.ebuymazon.com'),
(42, 'footer_text', '<p><br></p>'),
(43, 'footer_category', '["1","2"]'),
(38, 'contact_address', 'Lortzingstr.43, 44145 Dortmund, Germany'),
(45, 'admin_notification_sound', 'no'),
(46, 'admin_notification_volume', '10.00'),
(47, 'privacy_policy', ''),
(48, 'discus_id', 'activeittest'),
(49, 'home_notification_sound', 'no'),
(50, 'homepage_notification_volume', '10.00'),
(51, 'fb_login_set', 'ok'),
(52, 'g_login_set', 'ok'),
(53, 'slider', 'no'),
(54, 'revisit_after', '2'),
(55, 'default_member_product_limit', '5'),
(56, 'fb_comment_api', ''),
(57, 'comment_type', 'facebook'),
(58, 'vendor_system', 'ok'),
(59, 'cache_time', '5'),
(60, 'file_folder', 'jfkfkiriwnfjkmskdcsdfas'),
(62, 'slides', 'ok'),
(66, 'subscribed_products', 'no'),
(67, 'customers_cancel_subscriptions', 'ok'),
(68, 'customer_change_subscription_period', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `is_delete` int(1) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`group_id`, `group_name`, `date`, `is_delete`) VALUES
(1, 'Book', '2016-06-01', 0),
(5, 'test group edit reza', '2016-06-03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `word_id` int(11) NOT NULL,
  `word` longtext NOT NULL,
  `english` longtext CHARACTER SET utf8 COLLATE utf8_bin,
  `Bangla` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `Spanish` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `Arabic` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `French` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `Chinese` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `german` longtext,
  `T?rkce` longtext
) ENGINE=InnoDB AUTO_INCREMENT=2050 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`, `german`, `T?rkce`) VALUES
(1536, 'login', 'Login', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1537, 'sign_in_to_your_account', 'Sign In To Your Account', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1538, 'email', 'Email', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1539, 'password', 'Password', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1540, 'forget_password', 'Forget Password', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1541, 'email_sent_with_new_password!', 'Email Sent With New Password!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1542, 'forgot_password', 'Forgot Password', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1543, 'sign_in', 'Sign In', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1544, 'cancelled', 'Cancelled', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1545, 'this_field_is_required', 'This Field Is Required', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1546, 'signing_in...', 'Signing In...', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1547, 'new_password_sent_to_your_email', 'New Password Sent To Your Email', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1548, 'login_failed!', 'Login Failed!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1549, 'wrong_e-mail_address!_try_again', 'Wrong E-mail Address! Try Again', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1550, 'login_successful!', 'Login Successful!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1551, 'SUCCESS!', 'SUCCESS!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1552, 'reset_password', 'Reset Password', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1553, 'account_not_approved._wait_for_approval.', 'Account Not Approved. Wait For Approval.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1554, 'visit_home_page', 'Visit Home Page', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1555, 'profile', 'Profile', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1556, 'logout', 'Logout', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1557, 'dashboard', 'Dashboard', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1558, '24_hours_stock', '24 Hours Stock', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1559, '24_hours_sale', '24 Hours Sale', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1560, '24_hours_destroy', '24 Hours Destroy', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1561, 'total_vendors', 'Total Vendors', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1562, 'pending_vendors', 'Pending Vendors', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1563, 'vendor_stattistics', 'Vendor Stattistics', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1564, 'pending_order_map', 'Pending Order Map', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1565, 'present_customer_live_on_your_store', 'Present Customer Live On Your Store', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1566, 'category_wise_monthly_stock', 'Category Wise Monthly Stock', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1567, 'category_wise_monthly_sale', 'Category Wise Monthly Sale', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1568, 'category_wise_monthly_destroy', 'Category Wise Monthly Destroy', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1569, 'category_wise_monthly_grand_profit', 'Category Wise Monthly Grand Profit', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1570, 'cost', 'Cost', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1571, 'value', 'Value', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1572, 'loss', 'Loss', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1573, 'profit', 'Profit', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1574, 'products', 'Products', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1575, 'category', 'Category', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1576, 'sub-category', 'Sub-category', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1577, 'brands', 'Brands', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1578, 'all_products', 'All Products', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1579, 'filters', 'Filters', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1580, 'manage_tags', 'Manage Tags', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1581, 'product_stock', 'Product Stock', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1582, 'promo_categories', 'Promo Categories', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1583, 'recommended_products', 'Recommended Products', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1584, 'weight_based_price', 'Weight Based Price', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1585, 'bulk_product_upload', 'Bulk Product Upload', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1586, 'attributes_&_properties', 'Attributes & Properties', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1587, 'manage_attributes', 'Manage Attributes', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1588, 'attributes', 'Attributes', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1589, 'attribute_groups', 'Attribute Groups', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1590, 'custom_product_properties', 'Custom Product Properties', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1591, 'product_field_group', 'Product Field Group', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1592, 'product_field', 'Product Field', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1593, 'custom_options', 'Custom Options', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1594, 'download', 'Download', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1595, 'blog', 'Blog', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1596, 'all_blogs', 'All Blogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1597, 'all_blog_categories', 'All Blog Categories', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1598, 'sales_info', 'Sales Info', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1599, 'sales', 'Sales', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1600, 'sales_statistics', 'Sales Statistics', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1601, 'rma_info', 'Rma Info', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1602, 'reports', 'Reports', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1603, 'product_compare', 'Product Compare', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1604, 'product_wishes', 'Product Wishes', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1605, 'top_sellers', 'Top Sellers', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1606, 'top_buyers', 'Top Buyers', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1607, 'product_comments', 'Product Comments', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1608, 'discount_coupon', 'Discount Coupon', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1609, 'vendors', 'Vendors', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1610, 'vendor_list', 'Vendor List', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1611, 'api_users', 'Api Users', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1612, 'membership_payments', 'Membership Payments', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1613, 'membership_type', 'Membership Type', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1614, 'manage_news', 'Manage News', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1615, 'vendor_reviews_and_rating', 'Vendor Reviews And Rating', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1616, 'vendor_reports', 'Vendor Reports', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1617, ' ordered_vendor_services', ' Ordered Vendor Services', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1618, 'vendor_services', 'Vendor Services', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1619, 'vendor_monthly_fees', 'Vendor Monthly Fees', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1620, 'vendor_packages', 'Vendor Packages', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1621, 'tickets', 'Tickets', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1622, 'tickets_list', 'Tickets List', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1623, 'closed_tickets', 'Closed Tickets', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1624, 'new_tickets', 'New Tickets', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1625, 'on_hold_tickets', 'On Hold Tickets', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1626, 'pending_tickets', 'Pending Tickets', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1627, 'create_new_page', 'Create New Page', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1628, 'slider_settings', 'Slider Settings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1629, 'layer_slider', 'Layer Slider', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1630, 'top_slides', 'Top Slides', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1631, 'front_settings', 'Front Settings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1632, 'banner_settings', 'Banner Settings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1633, 'admin_management', 'Admin Management', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1634, 'manage_profile', 'Manage Profile', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1635, 'all_admins', 'All Admins', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1636, 'admin_permissions', 'Admin Permissions', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1637, 'User', 'User', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1638, 'all_user_list', 'All User List', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1639, 'add_user', 'Add User', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1640, 'search_user', 'Search User', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1641, 'customer_group', 'Customer Group', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1642, 'order_attachment', 'Order Attachment', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1643, 'subscribed_products', 'Subscribed Products', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1644, 'browse_donations', 'Browse Donations', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1645, 'banned IP', 'Banned IP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1646, 'customers', 'Customers', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1647, 'messaging', 'Messaging', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1648, 'newsletters', 'Newsletters', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1649, 'contact_messages', 'Contact Messages', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1650, 'product_update_mail', 'Product Update Mail', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1651, 'sent_email_archive', 'Sent Email Archive', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1652, 'default_email_top_&_bottom', 'Default Email Top & Bottom', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1653, 'notification_emails', 'Notification Emails', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1654, 'email_list_management', 'Email List Management', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1655, 'SMS notifications', 'SMS Notifications', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1656, 'send_SMS', 'Send SMS', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1657, 'email_template', 'Email Template', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1658, 'export_quickbooks', 'Export Quickbooks', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1659, 'email_settings', 'Email Settings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1660, 'language', 'Language', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1661, 'business_settings', 'Business Settings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1662, 'site_settings', 'Site Settings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1663, 'shipping_statuses', 'Shipping Statuses', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1664, 'Marketing', 'Marketing', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1665, 'sales_price', 'Sales Price', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1666, 'price_offers', 'Price Offers', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1667, 'product_reviews', 'Product Reviews', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1668, 'site_maintenance', 'Site Maintenance', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1669, 'system_settings', 'System Settings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1670, 'localisation', 'Localisation', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1671, 'manage_country', 'Manage Country', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1672, 'global_settings', 'Global Settings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1673, 'default_form_settings', 'Default Form Settings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1674, 'product_tamplate', 'Product Tamplate', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1675, 'paypal_address_varify', 'Paypal Address Varify', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1676, 'product_features', 'Product Features', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1677, 'order_cart_settings', 'Order Cart Settings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1678, 'security_settings', 'Security Settings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1679, 'bestsellers_settings', 'Bestsellers Settings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1680, 'proxy_settings', 'Proxy Settings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1681, 'poision_message', 'Poision Message', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1682, 'printable_invoice_settings', 'Printable Invoice Settings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1683, 'digital_products', 'Digital Products', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1684, 'veratad_settings', 'Veratad Settings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1685, 'activate', 'Activate', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1686, 'SEO_proggres', 'SEO Proggres', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1687, 'online_tutorial', 'Online Tutorial', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1688, 'checkout', 'Checkout', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1689, 'deleted_successfully', 'Deleted Successfully', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1690, 'cancel', 'Cancel', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1691, 'required', 'Required', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1692, 'must_be_a_number', 'Must Be A Number', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1693, 'must_be_a_valid_email_address', 'Must Be A Valid Email Address', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1694, 'save', 'Save', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1695, 'product_published!', 'Product Published!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1696, 'product_unpublished!', 'Product Unpublished!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1697, 'product_featured!', 'Product Featured!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1698, 'product_unfeatured!', 'Product Unfeatured!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1699, 'product_in_todays_deal!', 'Product In Todays Deal!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1700, 'product_removed_from_todays_deal!', 'Product Removed From Todays Deal!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1701, 'slider_published!', 'Slider Published!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1702, 'slider_unpublished!', 'Slider Unpublished!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1703, 'page_published!', 'Page Published!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1704, 'page_unpublished!', 'Page Unpublished!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1705, 'notification_sound_enabled!', 'Notification Sound Enabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1706, 'notification_sound_disabled!', 'Notification Sound Disabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1707, 'google_login_enabled!', 'Google Login Enabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1708, 'google_login_disabled!', 'Google Login Disabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1709, 'facebook_login_enabled!', 'Facebook Login Enabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1710, 'facebook_login_disabled!', 'Facebook Login Disabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1711, 'paypal_payment_disabled!', 'Paypal Payment Disabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1712, 'paypal_payment_enabled!', 'Paypal Payment Enabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1713, 'slider_enabled!', 'Slider Enabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1714, 'slider_disabled!', 'Slider Disabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1715, 'cash_payment_enabled!', 'Cash Payment Enabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1716, 'cash_payment_disabled!', 'Cash Payment Disabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1717, 'enabled!', 'Enabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1718, 'disabled!', 'Disabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1719, 'notification_email_sent_to_vendor!', 'Notification Email Sent To Vendor!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1720, 'subscribed_products_enabled!', 'Subscribed Products Enabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1721, 'subscribed_products_disabled!', 'Subscribed Products Disabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1722, 'cancel_subscriptions_enabled!', 'Cancel Subscriptions Enabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1723, 'cancel_subscriptions_disabled!', 'Cancel Subscriptions Disabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1724, 'customers_change_subscription_period_enabled!', 'Customers Change Subscription Period Enabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1725, 'customers_change_subscription_period_disabled!', 'Customers Change Subscription Period Disabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1726, 'SMS_on_order_received_admin_enabled!', 'SMS On Order Received Admin Enabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1727, 'SMS_on_order_received_admin_disabled!', 'SMS On Order Received Admin Disabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1728, 'SMS_on_order_completed_customer_enabled!', 'SMS On Order Completed Customer Enabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1729, 'SMS_on_order_completed_customer_disabled!', 'SMS On Order Completed Customer Disabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1730, 'SMS_on_manual_order_received_enabled !', 'SMS On Manual Order Received Enabled !', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1731, 'SMS_on_manual_order_received_disabled!', 'SMS On Manual Order Received Disabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1732, 'SMS_on_due_notification_enabled!', 'SMS On Due Notification Enabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1733, 'SMS_on_due_notification_disabled!', 'SMS On Due Notification Disabled!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1734, 'changed_save_successfully', 'Changed Save Successfully', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1735, 'company_information', 'Company Information', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1736, 'manage_company_information', 'Manage Company Information', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1737, 'Business Register Number :', 'Business Register Number :', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1738, 'Company Name :', 'Company Name :', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1739, 'Address Line 1 :', 'Address Line 1 :', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1740, 'Address Line 2 :', 'Address Line 2 :', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1741, 'City :', 'City :', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1742, 'State/Province :', 'State/Province :', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1743, 'Company Zip :', 'Company Zip :', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1744, 'Country :', 'Country :', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1745, 'Company Phone :', 'Company Phone :', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1746, 'Company Fax :', 'Company Fax :', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1747, 'Company Website :', 'Company Website :', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1748, 'Company Email :', 'Company Email :', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1749, 'CompanySlogan :', 'CompanySlogan :', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1750, 'saving', 'Saving', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1751, 'settings_updated!', 'Settings Updated!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1752, 'home', 'Home', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1753, 'toggle_navigation', 'Toggle Navigation', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1754, 'featured_product', 'Featured Product', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1755, 'see_more', 'See More', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1756, 'compare', 'Compare', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1757, 'contact', 'Contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1758, 'vendor_locator', 'Vendor Locator', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1759, 'vendor', 'Vendor', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1760, 'product', 'Product', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1761, 'search_vendor_by_title,_location,_address_etc.', 'Search Vendor By Title, Location, Address Etc.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1762, 'search_product_by_title,_description_etc.', 'Search Product By Title, Description Etc.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1763, 'todays_deal', 'Todays Deal', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1764, 'our_vendors', 'Our Vendors', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1765, 'quick_view', 'Quick View', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1766, 'add_to_cart', 'Add To Cart', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1767, 'wish', 'Wish', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1768, 'off', 'Off', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1769, 'out_of_stock', 'Out Of Stock', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1770, 'choose_category', 'Choose Category', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1771, 'choose_sub_category', 'Choose Sub Category', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1772, 'search_product', 'Search Product', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1773, 'latest_blogs', 'Latest Blogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1774, 'latest_products', 'Latest Products', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1775, 'add_to_wishlist', 'Add To Wishlist', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1776, 'most_sold', 'Most Sold', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1777, 'most_viewed_products', 'Most Viewed Products', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1778, 'our_available_brands', 'Our Available Brands', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1779, 'close', 'Close', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1780, 'email_address', 'Email Address', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1781, 'subscribe', 'Subscribe', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1782, 'categories', 'Categories', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1783, 'useful_links', 'Useful Links', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1784, 'featured', 'Featured', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1785, 'contact_us', 'Contact Us', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1786, 'phone', 'Phone', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1787, 'website', 'Website', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1788, 'facebook', 'Facebook', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1789, 'twitter', 'Twitter', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1790, 'google_plus', 'Google Plus', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1791, 'youtube', 'Youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1792, 'all_rights_reserved', 'All Rights Reserved', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1793, 'terms_&_condition', 'Terms & Condition', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1794, 'privacy_policy', 'Privacy Policy', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1795, 'product_added_to_cart', 'Product Added To Cart', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1796, 'added_to_cart', 'Added To Cart', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1797, 'product_quantity_exceed_availability!', 'Product Quantity Exceed Availability!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1798, 'product_already_added_to_cart!', 'Product Already Added To Cart!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1799, 'product_added_to_wishlist', 'Product Added To Wishlist', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1800, 'wished', 'Wished', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1801, 'wishing..', 'Wishing..', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1802, 'product_removed_from_wishlist', 'Product Removed From Wishlist', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1803, 'product_added_to_compared', 'Product Added To Compared', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1804, 'compared', 'Compared', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1805, 'working..', 'Working..', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1806, 'product_removed_from_compare', 'Product Removed From Compare', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1807, 'compare_category_full', 'Compare Category Full', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1808, 'product_already_added_to_compare', 'Product Already Added To Compare', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1809, 'product_rated_successfully', 'Product Rated Successfully', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1810, 'product_rating_failed', 'Product Rating Failed', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1811, 'you_already_rated_this_product', 'You Already Rated This Product', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1812, 'you_already_subscribed', 'You Already Subscribed', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1813, 'you_subscribed_successfully', 'You Subscribed Successfully', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1814, 'you_already_subscribed_thrice_from_this_browser', 'You Already Subscribed Thrice From This Browser', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1815, 'logging_in..', 'Logging In..', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1816, 'you_logged_in_successfully', 'You Logged In Successfully', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1817, 'login_failed!_try_again!', 'Login Failed! Try Again!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1818, 'you_registered_successfully', 'You Registered Successfully', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1819, 'registration_failed!_try_again!', 'Registration Failed! Try Again!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1820, 'submitting..', 'Submitting..', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1821, 'email_sent_successfully', 'Email Sent Successfully', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1822, 'email_does_not_exist!', 'Email Does Not Exist!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1823, 'email_sending_failed!_try_again', 'Email Sending Failed! Try Again', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1824, 'logging_in', 'Logging In', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1825, 'adding_to_cart..', 'Adding To Cart..', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1826, 'product_removed_from_cart', 'Product Removed From Cart', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1827, 'the_field_is_required', 'The Field Is Required', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1828, 'vendor_registration', 'Vendor Registration', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1829, 'customer_login', 'Customer Login', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1830, 'customer_registration', 'Customer Registration', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1831, 'be_a_seller', 'Be A Seller', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1832, 'already_a_seller?', 'Already A Seller?', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1833, 'click', 'Click', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1834, 'to_login_your_account', 'To Login Your Account', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1835, 'name', 'Name', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1836, 'company', 'Company', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1837, 'confirm_password', 'Confirm Password', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1838, 'display_name', 'Display Name', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1839, 'address_line_1', 'Address Line 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1840, 'address_line_2', 'Address Line 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1841, 'registering..', 'Registering..', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1842, 'register', 'Register', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1843, 'registration_successful!', 'Registration Successful!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1844, 'please_check_your_email_inbox', 'Please Check Your Email Inbox', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1845, 'sign_up', 'Sign Up', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1846, 'already_signed Up?_click', 'Already Signed Up? Click', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1847, 'your_first_name', 'Your First Name', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1848, 'your_last_name', 'Your Last Name', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1849, 'city', 'City', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1850, 'ZIP', 'ZIP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1851, 'password_mismatched', 'Password Mismatched', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1852, 'do_not_have_account_?_click_', 'Do Not Have Account ? Click ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1853, 'to_registration_.', 'To Registration .', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1854, 'forget_your_password_?', 'Forget Your Password ?', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1855, 'log_in', 'Log In', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1856, 'submit', 'Submit', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1857, 'cart_emptied', 'Cart Emptied', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1858, 'tax', 'Tax', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1859, 'shipping', 'Shipping', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1860, 'total', 'Total', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1861, 'grand_total', 'Grand Total', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1862, 'empty_cart', 'Empty Cart', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1863, 'my_cart', 'My Cart', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1864, 'shopping_cart', 'Shopping Cart', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1865, 'review_&_edit_your_product', 'Review & Edit Your Product', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1866, 'choices', 'Choices', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1867, 'price', 'Price', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1868, 'qty', 'Qty', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1869, 'option', 'Option', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1870, 'change_choices', 'Change Choices', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1871, 'shipping_info', 'Shipping Info', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1872, 'shipping_and_address_info', 'Shipping And Address Info', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1873, 'shipping_address', 'Shipping Address', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1874, 'first_name', 'First Name', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1875, 'last_name', 'Last Name', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1876, 'zip/postal_code', 'Zip/postal Code', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1877, 'payment', 'Payment', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1878, 'select_payment_method', 'Select Payment Method', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1879, 'choose_a_payment_method', 'Choose A Payment Method', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1880, 'frequently_asked_questions', 'Frequently Asked Questions', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1881, 'apply_coupon', 'Apply Coupon', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1882, 'applying..', 'Applying..', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1883, 'coupon_not_valid', 'Coupon Not Valid', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1884, 'coupon_discount_successful', 'Coupon Discount Successful', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1885, 'subtotal', 'Subtotal', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1886, 'coupon_discount', 'Coupon Discount', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1887, 'your_email_address', 'Your Email Address', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1888, 'bulk_category_upload', 'Bulk Category Upload', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1889, 'latest_subscriptions', 'Latest Subscriptions', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1890, 'point_system_management', 'Point System Management', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1891, 'subscribed_at', 'Subscribed At', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1892, 'options', 'Options', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1893, 'really_want_to_delete_this?', 'Really Want To Delete This?', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1894, 'delete', 'Delete', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1895, 'point_management_system', 'Point Management System', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1896, 'settings', 'Settings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1897, 'range', 'Range', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1898, 'points', 'Points', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1899, 'yes', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1900, 'no', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1901, 'min_amount', 'Min Amount', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1902, 'max_amount', 'Max Amount', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1903, 'edit_range', 'Edit Range', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1904, 'successfully_viewed!', 'Successfully Viewed!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1905, 'edit', 'Edit', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1906, 'username', 'Username', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1907, 'expire', 'Expire', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1908, 'edit_points', 'Edit Points', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1909, 'latest_orders', 'Latest Orders', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1910, 'manage_sale', 'Manage Sale', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1911, 'ID', 'ID', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1912, 'sale_code', 'Sale Code', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1913, 'buyer', 'Buyer', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1914, 'date', 'Date', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1915, 'delivery_status', 'Delivery Status', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1916, 'payment_status', 'Payment Status', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1917, 'admin', 'Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1918, 'title', 'Title', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1919, 'successfully_edited!', 'Successfully Edited!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1920, 'full_invoice', 'Full Invoice', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1921, 'delivery_payment', 'Delivery Payment', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1922, 'payment_details', 'Payment Details', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1923, 'manage_latest_orders', 'Manage Latest Orders', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1924, 'invoice_for', 'Invoice For', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1925, 'invoice_no:', 'Invoice No:', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1926, 'date_:', 'Date :', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1927, 'client_information', 'Client Information', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1928, 'payment_detail', 'Payment Detail', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1929, 'fully_paid', 'Fully Paid', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1930, 'payment_method', 'Payment Method', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1931, 'payment_date', 'Payment Date', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1932, 'payment_invoice', 'Payment Invoice', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1933, 'item', 'Item', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1934, 'quantity', 'Quantity', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1935, 'unit_cost', 'Unit Cost', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1936, 'sub_total_amount', 'Sub Total Amount', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1937, 'zipcode', 'Zipcode', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1938, 'e-mail', 'E-mail', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1939, 'print', 'Print', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1940, 'marker_location', 'Marker Location', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1941, 'due', 'Due', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1942, 'global_cart_settings', 'Global Cart Settings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1943, 'wholesales_settings', 'Wholesales Settings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1944, 'global_systems_settings', 'Global Systems Settings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1945, 'manage_bestsellers_settings', 'Manage Bestsellers Settings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1946, 'activate_wholesaler_discounts_at : ', 'Activate Wholesaler Discounts At : ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1947, 'I dont have a wholesalers', 'I Dont Have A Wholesalers', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1948, 'add_discount_at_product_level', 'Add Discount At Product Level', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1949, 'calculate_discounts_globally', 'Calculate Discounts Globally', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1950, 'wholesale_global_discounts', 'Wholesale Global Discounts', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1951, 'How many wholesale levels do you have?', 'How Many Wholesale Levels Do You Have?', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1952, 'Discount percentage level 1 :', 'Discount Percentage Level 1 :', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1953, 'case_pack', 'Case Pack', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1954, 'Allow wholesale case pack? ', 'Allow Wholesale Case Pack? ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1955, 'wholesale_case_pack_enabled', 'Wholesale Case Pack Enabled', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1956, 'wholesale_case_pack_disabled', 'Wholesale Case Pack Disabled', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1957, 'Allow wholesale inter pack?', 'Allow Wholesale Inter Pack?', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1958, 'wholesale_inter_pack_enabled', 'Wholesale Inter Pack Enabled', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1959, 'wholesale_inter_pack_disabled', 'Wholesale Inter Pack Disabled', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1960, 'manage_security_settings', 'Manage Security Settings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1961, 'Security Mode', 'Security Mode', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1962, 'standard', 'Standard', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1963, 'complete', 'Complete', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1964, 'Security Cookies Prefix :', 'Security Cookies Prefix :', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1965, 'Security User Timeout :', 'Security User Timeout :', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1966, 'Security Account Blocking :', 'Security Account Blocking :', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1967, 'security_account_blocking_enabled', 'Security Account Blocking Enabled', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1968, 'security_account_blocking_disabled', 'Security Account Blocking Disabled', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1969, 'Security Account Blocking Attempts :', 'Security Account Blocking Attempts :', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1970, ' SecurityAccountBlockingHours : ', ' SecurityAccountBlockingHours : ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1971, 'Security Display Clean Payment Page :', 'Security Display Clean Payment Page :', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1972, 'Security Admin Time Out :', 'Security Admin Time Out :', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1973, 'Log User IP :', 'Log User IP :', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1974, ' User eMail Verification required :', ' User EMail Verification Required :', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1975, 'updating..', 'Updating..', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1976, 'form_settings_updated!', 'Form Settings Updated!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1977, 'save_settings', 'Save Settings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1978, 'bulk_product_image_upload', 'Bulk Product Image Upload', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1979, 'dynamic_selection_lists', 'Dynamic Selection Lists', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1980, 'manage_business_settings', 'Manage Business Settings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1981, 'cash_payment', 'Cash Payment', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1982, 'paypal_payment', 'Paypal Payment', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1983, 'paypal_email', 'Paypal Email', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1984, 'paypal_account_type', 'Paypal Account Type', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1985, 'stripe_payment', 'Stripe Payment', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1986, 'stripe_secret_key', 'Stripe Secret Key', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1987, 'stripe_publishable_key', 'Stripe Publishable Key', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1988, 'currency_name', 'Currency Name', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1989, 'currency_symbol', 'Currency Symbol', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1990, 'marketplace_type', 'Marketplace Type', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1991, 'subscriptions_based', 'Subscriptions Based', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1992, 'free', 'Free', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1993, 'shipping_cost_type', 'Shipping Cost Type', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1994, 'product_wise', 'Product Wise', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1995, 'fixed', 'Fixed', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1996, 'shipping_cost_(If_fixed)', 'Shipping Cost (If Fixed)', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1997, 'shipment_info', 'Shipment Info', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1998, 'FAQs', 'FAQs', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1999, 'add_more_FAQs', 'Add More FAQs', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2000, 'question', 'Question', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2001, 'answer', 'Answer', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2002, 'manage_details', 'Manage Details', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2003, 'manage_lists', 'Manage Lists', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2004, 'product_condition_new', 'Product Condition New', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2005, 'localisation_settings', 'Localisation Settings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2006, 'localization_settings', 'Localization Settings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2007, 'local_settings', 'Local Settings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2008, 'currency', 'Currency', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2009, 'date_format', 'Date Format', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2010, 'local_time/Date_format', 'Local Time/Date Format', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2011, 'local_date_format', 'Local Date Format', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2012, 'weight_format', 'Weight Format', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2013, 'weight_unit', 'Weight Unit', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2014, 'lbs', 'Lbs', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2015, 'kg', 'Kg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2016, 'weight_decimal_places', 'Weight Decimal Places', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2017, 'weight_decimal_symbol', 'Weight Decimal Symbol', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2018, 'weight_thousands_separating_symbol', 'Weight Thousands Separating Symbol', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2019, 'length_format', 'Length Format', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2020, 'length_unit', 'Length Unit', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2021, 'inches', 'Inches', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2022, 'feet', 'Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2023, 'centimeters', 'Centimeters', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2024, 'length_decimal_places', 'Length Decimal Places', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2025, 'length_decimal_symbol', 'Length Decimal Symbol', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2026, 'length_thousands_separating_symbol', 'Length Thousands Separating Symbol', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2027, 'currency_format', 'Currency Format', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2028, 'currency_decimal_symbol', 'Currency Decimal Symbol', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2029, 'currency_thousands_separating_symbol', 'Currency Thousands Separating Symbol', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2030, 'add_currency', 'Add Currency', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2031, 'successfully_added!', 'Successfully Added!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2032, 'back_to_currency_list', 'Back To Currency List', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2033, 'default', 'Default', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2034, 'code', 'Code', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2035, 'exchange._rate', 'Exchange. Rate', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2036, 'decimal', 'Decimal', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2037, 'symbol', 'Symbol', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2038, 'right', 'Right', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2039, 'action', 'Action', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2040, 'new_currency', 'New Currency', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2041, 'currency_code', 'Currency Code', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2042, 'exchange_rate', 'Exchange Rate', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2043, 'decimal_point', 'Decimal Point', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2044, 'right_symbol', 'Right Symbol', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2045, 'add_category', 'Add Category', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2046, 'reset', 'Reset', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2047, 'currency_has_been_uploaded!', 'Currency Has Been Uploaded!', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2048, 'edit_currency', 'Edit Currency', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2049, 'currency_edit', 'Currency Edit', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `local_settings`
--

CREATE TABLE IF NOT EXISTS `local_settings` (
  `local_settings_id` int(11) NOT NULL,
  `type` longtext NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `local_settings`
--

INSERT INTO `local_settings` (`local_settings_id`, `type`, `value`) VALUES
(1, 'datetime_format', '%m/%d/%Y - %r'),
(2, 'date_format', '%m/%d/%Y'),
(3, 'weight_unit', 'lbs'),
(4, 'weight_decimal_places', '2'),
(5, 'weight_decimal_symbol', '.'),
(6, 'weight_thousands_separating_symbol', ','),
(7, 'length_unit', 'inches'),
(8, 'length_decimal_places', '2'),
(9, 'length_decimal_symbol', '.'),
(10, 'length_thousands_separating_symbol', ','),
(11, 'currency_decimal_symbol', '.'),
(12, 'currency_thousands_separating_symbol', ',');

-- --------------------------------------------------------

--
-- Table structure for table `manage_tags`
--

CREATE TABLE IF NOT EXISTS `manage_tags` (
  `tag_name` longtext,
  `tag_code` longtext,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `membership_id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `timespan` varchar(50) DEFAULT NULL,
  `pay_interval` varchar(50) DEFAULT NULL,
  `product_limit` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`membership_id`, `title`, `price`, `timespan`, `pay_interval`, `product_limit`) VALUES
(1, 'Gold', '14.99', '30', '', 5000),
(2, 'Platinum', '29.99', '30', '', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `membership_payment`
--

CREATE TABLE IF NOT EXISTS `membership_payment` (
  `membership_payment_id` int(11) NOT NULL,
  `vendor` int(11) DEFAULT NULL,
  `timestamp` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `details` longtext,
  `membership` int(11) DEFAULT NULL,
  `method` varchar(30) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership_payment`
--

INSERT INTO `membership_payment` (`membership_payment_id`, `vendor`, `timestamp`, `amount`, `details`, `membership`, `method`, `status`) VALUES
(1, 12, 1460589027, 15, NULL, 1, 'paypal', 'due');

-- --------------------------------------------------------

--
-- Table structure for table `merchants_packages`
--

CREATE TABLE IF NOT EXISTS `merchants_packages` (
  `merchants_packages_id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `merchant_type` longtext NOT NULL,
  `period` int(11) NOT NULL,
  `period_types` longtext NOT NULL,
  `item` int(11) NOT NULL,
  `package_type` longtext NOT NULL,
  `commission` float NOT NULL,
  `price` float NOT NULL,
  `help_text` longtext NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merchants_packages`
--

INSERT INTO `merchants_packages` (`merchants_packages_id`, `title`, `merchant_type`, `period`, `period_types`, `item`, `package_type`, `commission`, `price`, `help_text`, `description`) VALUES
(1, 'Free plan', 'free', 0, 'day', 0, 'commission', 20, 0, '<p>A plan with absolutely no fees.  </p>', '<p>A sample plan for everyone to try out the seller features.  </p>'),
(2, 'Monthly Unlimited Plan', 'per_item', 1, 'month', 0, 'commission', 1, 20, '<p>1 month unlimited plan  </p>', '<p>Fixed monthly fee, no listing fee and no commission. Unlimited item submission.  </p>'),
(3, 'Monthly Subscription Plan with 12% Commission', 'subscription', 30, 'day', 0, 'commission', 12, 10, '<p>Monthly Subscription Plan with 12% Commission  </p>', '<p>Monthly Subscription Plan with 12% Commission that will give you unlimited product submission and creation of discount codes.  </p>');

-- --------------------------------------------------------

--
-- Table structure for table `notification_emails`
--

CREATE TABLE IF NOT EXISTS `notification_emails` (
  `notification_email_id` int(11) NOT NULL,
  `notification_email_type` longtext NOT NULL,
  `notification_email_html` longtext NOT NULL,
  `notification_email_text` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification_emails`
--

INSERT INTO `notification_emails` (`notification_email_id`, `notification_email_type`, `notification_email_html`, `notification_email_text`) VALUES
(1, 'New user registered - for Administrators', '<p>{include file="emails/email_top_html.html"}<br></p><blockquote><p><strong>{lang msg=$msg.email.new_user_registered s=$CompanyName}</strong></p><p><u>{$msg.email.user_registration_details}</u>:</p><ul><li>{$msg.billing.name} : {$user_data.fname} {$user_data.lname}</li><li>{$msg.billing.company} : {$user_data.company}</li><li>{$msg.billing.address_line1} : {$user_data.address1}</li><li>{$msg.billing.address_line2} : {$user_data.address2}</li><li>{$msg.billing.city} : {$user_data.city|htmlspecialchars}</li><li>{$msg.billing.state_province} : {$user_data.province}</li><li>{$msg.billing.country} : {$user_data.country_name}</li><li>{$msg.billing.postal_code} : {$user_data.zip}</li><li>{if $cf_billing} {foreach from=$cf_billing item="cf"}</li><li>{$cf.field_name} : {$cf.value_translated}</li><li>{/foreach} {/if}</li><li>{$msg.account.email_address} : {$user_data.email|htmlspecialchars}</li><li>{$msg.billing.phone_number} : {$user_data.phone|htmlspecialchars}</li><li>{$msg.account.login} : {$user_data.login|htmlspecialchars}</li><li>{if $cf_account} {foreach from=$cf_account item="cf"}</li><li>{$cf.field_name} : {$cf.value_translated}</li><li>{/foreach} {/if} {if $cf_signup} {foreach from=$cf_signup item="cf"}</li><li>{$cf.field_name} : {$cf.value_translated}</li><li>{/foreach} {/if}</li></ul><p><br></p><p><br></p><ul><li><a data-cke-saved-href="{$GlobalHttpUrl}/{$admin_index}p=user&uid={$user_data.uid}" href="http://demo-admin.ixxomultivendor.com/{$GlobalHttpUrl}/{$admin_index}p=user&uid={$user_data.uid}">{$msg.email.click_to_edit}</a></li></ul><p><br></p></blockquote><p>{include file="emails/email_bottom_html.html"}<br></p>', '{include file="emails/email_top_text.html"}\r\n\r\n {lang msg=$msg.email.new_user_registered s=$CompanyName}\r\n\r\n {$msg.email.user_registration_details}:\r\n ------------------------------\r\n\r\n {$msg.billing.name} : {$user_data.fname|stripslashes} {$user_data.lname}\r\n {$msg.billing.company} : {$user_data.company}\r\n {$msg.billing.address_line1} : {$user_data.address1}\r\n {$msg.billing.address_line2} : {$user_data.address2}\r\n {$msg.billing.city} : {$user_data.city}\r\n {$msg.billing.state_province} : {$user_data.province}\r\n {$msg.billing.country} : {$user_data.country_name}\r\n {$msg.billing.postal_code} : {$user_data.zip}\r\n\r\n{if $cf_billing}\r\n {foreach from=$cf_billing item="cf"}\r\n{$cf.field_name} : {$cf.value_translated}\r\n {/foreach}\r\n{/if}\r\n\r\n {$msg.account.email_address} : {$user_data.email}\r\n {$msg.billing.phone_number} : {$user_data.phone}\r\n {$msg.account.login} : {$user_data.login}\r\n\r\n{if $cf_account}\r\n {foreach from=$cf_account item="cf"}\r\n{$cf.field_name} : {$cf.value_translated}\r\n {/foreach}\r\n{/if}\r\n\r\n{if $cf_signup}\r\n {foreach from=$cf_signup item="cf"}\r\n{$cf.field_name} : {$cf.value_translated}\r\n {/foreach}\r\n{/if}\r\n\r\n {$msg.email.click_to_edit}:\r\n {$GlobalHttpUrl}/{$admin_index}p=user&uid={$user_data.uid}\r\n\r\n{include file="emails/email_bottom_text.html"}'),
(2, 'New user registered - for Users', '<p>{include file="emails/email_top_html.html"}<br></p><blockquote><p><strong>{lang msg=$msg.email.dear fname=$user_data.fname lname=$user_data.lname}</strong></p><p><strong>{$msg.email.thanks_for_registration}</strong><br></p><p><u>{$msg.email.your_registration_details}</u>:</p><ul><li>{$msg.billing.name} : {$user_data.fname|htmlspecialchars} {$user_data.lname|htmlspecialchars}</li><li>{$msg.billing.company} : {$user_data.company|htmlspecialchars}</li><li>{$msg.billing.address_line1} : {$user_data.address1|htmlspecialchars}</li><li>{$msg.billing.address_line2} : {$user_data.address2|htmlspecialchars}</li><li>{$msg.billing.city} : {$user_data.city|htmlspecialchars}</li><li>{$msg.billing.state_province} : {$user_data.province|htmlspecialchars}</li><li>{$msg.billing.country} : {$user_data.country_name|htmlspecialchars}</li><li>{$msg.billing.postal_code} : {$user_data.zip|htmlspecialchars}</li><li>{if $cf_billing} {foreach from=$cf_billing item="cf"}</li><li>{$cf.field_name} : {$cf.value_translated}</li><li>{/foreach} {/if}</li><li>{$msg.account.email_address} : {$user_data.email|htmlspecialchars}</li><li>{$msg.billing.phone_number} : {$user_data.phone|htmlspecialchars}</li><li>{$msg.account.login} : {$user_data.login|htmlspecialchars}</li><li>{if $cf_account} {foreach from=$cf_account item="cf"}</li><li>{$cf.field_name} : {$cf.value_translated}</li><li>{/foreach} {/if} {if $cf_signup} {foreach from=$cf_signup item="cf"}</li><li>{$cf.field_name} : {$cf.value_translated}</li><li>{/foreach} {/if}</li></ul><p><br></p>{if $SecurityUserVerificationRequired==''YES''}<p><strong>{$msg.email.activate_your_account}:</strong><br><br><a data-cke-saved-href="{$GlobalHttpUrl}/{$site_index}p=verify_account&uid={$user_data.uid}&verification_token={$user_data.verification_token}" href="http://demo-admin.ixxomultivendor.com/{$GlobalHttpUrl}/{$site_index}p=verify_account&uid={$user_data.uid}&verification_token={$user_data.verification_token}">{$msg.account.verify_account} </a></p> {/if}<p>{$msg.email.sincerely},<br>{$CompanyName|htmlspecialchars}</p></blockquote><p>{include file="emails/email_bottom_html.html"}</p>', '{include file="emails/email_top_text.html"}\r\n\r\n {lang msg=$msg.email.dear fname=$user_data.fname lname=$user_data.lname}\r\n\r\n {$msg.email.thanks_for_registration}\r\n\r\n {$msg.email.your_registration_details}:\r\n ------------------------------\r\n\r\n {$msg.billing.name} : {$user_data.fname} {$user_data.lname}\r\n {$msg.billing.company} : {$user_data.company}\r\n {$msg.billing.address_line1} : {$user_data.address1}\r\n {$msg.billing.address_line2} : {$user_data.address2}\r\n {$msg.billing.city} : {$user_data.city}\r\n {$msg.billing.state_province} : {$user_data.province}\r\n {$msg.billing.country} : {$user_data.country_name}\r\n {$msg.billing.postal_code} : {$user_data.zip}\r\n\r\n{if $cf_billing}\r\n {foreach from=$cf_billing item="cf"}\r\n{$cf.field_name} : {$cf.value_translated}\r\n {/foreach}\r\n{/if}\r\n\r\n {$msg.account.email_address} : {$user_data.email}\r\n {$msg.billing.phone_number} : {$user_data.phone}\r\n {$msg.account.login} : {$user_data.login}\r\n\r\n{if $cf_account}\r\n {foreach from=$cf_account item="cf"}\r\n{$cf.field_name} : {$cf.value_translated}\r\n {/foreach}\r\n{/if}\r\n\r\n{if $cf_signup}\r\n {foreach from=$cf_signup item="cf"}\r\n{$cf.field_name} : {$cf.value_translated}\r\n {/foreach}\r\n{/if}\r\n\r\n {if $SecurityUserVerificationRequired==''YES''}\r\n  {$msg.email.activate_your_account}:\r\n\r\n  {$msg.account.verify_account}:\r\n  {$GlobalHttpUrl}/{$site_index}p=verify_account&uid={$user_data.uid}&verification_token={$user_data.verification_token}\r\n {/if}\r\n\r\n {$msg.email.sincerely},\r\n {$CompanyName}\r\n\r\n{include file="emails/email_bottom_text.html"}'),
(3, 'New vendor registered - for Administrators', '<p>{include file="emails/email_top_html.html"}<br></p><blockquote><p><strong>{lang msg=$msg.email.new_user_registered s=$CompanyName}</strong></p><br>{if $AutoApproveVendor!="Yes"}<p><strong>{$msg.email.vendor_account_admin_activation_needed}</strong></p><br>{/if}<p><u>{$msg.email.vendor_registration_details}</u>:</p><ul><li>{$msg.billing.name} : {$user_data.fname} {$user_data.lname}</li><li>{$msg.billing.company} : {$user_data.company}</li><li>{$msg.billing.address_line1} : {$user_data.address1}</li><li>{$msg.billing.address_line2} : {$user_data.address2}</li><li>{$msg.billing.city} : {$user_data.city|htmlspecialchars}</li><li>{$msg.billing.state_province} : {$user_data.province}</li><li>{$msg.billing.country} : {$user_data.country_name}</li><li>{$msg.billing.postal_code} : {$user_data.zip}</li><li>{if $cf_vsignup} {foreach from=$cf_vsignup item="cf"}</li><li>{$cf.field_name} : {$cf.value_translated}</li><li>{/foreach} {/if}</li></ul><p><br></p><p><a data-cke-saved-href="{$GlobalHttpUrl}/{$admin_index}p=user&uid={$user_data.uid}" href="http://demo-admin.ixxomultivendor.com/{$GlobalHttpUrl}/{$admin_index}p=user&uid={$user_data.uid}">{$msg.email.click_to_edit}</a></p></blockquote><p>{include file="emails/email_bottom_html.html"}</p>', '{include file="emails/email_top_text.html"}\r\n\r\n {lang msg=$msg.email.new_user_registered s=$CompanyName}\r\n\r\n {if $AutoApproveVendor!="Yes"}\r\n  {$msg.email.vendor_account_admin_activation_needed}\r\n {/if}\r\n\r\n {$msg.email.vendor_registration_details}:\r\n ------------------------------\r\n\r\n {$msg.billing.name} : {$user_data.fname|stripslashes} {$user_data.lname}\r\n {$msg.billing.company} : {$user_data.company}\r\n {$msg.billing.address_line1} : {$user_data.address1}\r\n {$msg.billing.address_line2} : {$user_data.address2}\r\n {$msg.billing.city} : {$user_data.city}\r\n {$msg.billing.state_province} : {$user_data.province}\r\n {$msg.billing.country} : {$user_data.country_name}\r\n {$msg.billing.postal_code} : {$user_data.zip}\r\n\r\n {if $cf_vsignup}\r\n {foreach from=$cf_vsignup item="cf"}\r\n {$cf.field_name} : {$cf.value_translated}\r\n {/foreach}\r\n {/if}\r\n\r\n {$msg.email.click_to_edit}:\r\n {$GlobalHttpUrl}/{$admin_index}p=user&uid={$user_data.uid}\r\n\r\n{include file="emails/email_bottom_text.html"}'),
(4, 'New vendor registered - for Vendor', '<p>{include file="emails/email_top_html.html"}<br></p><blockquote><p><strong>{lang msg=$msg.email.dear fname=$user_data.fname lname=$user_data.lname}</strong></p><br><p><strong>{$msg.email.thanks_for_vendor_registration}</strong></p><br><p><u><strong>{$msg.email.your_registration_details}</strong></u>:</p><ul><li>{$msg.billing.name} : {$user_data.fname|htmlspecialchars} {$user_data.lname|htmlspecialchars}</li><li>{$msg.billing.company} : {$user_data.company|htmlspecialchars}</li><li>{$msg.billing.address_line1} : {$user_data.address1|htmlspecialchars}</li><li>{$msg.billing.address_line2} : {$user_data.address2|htmlspecialchars}</li><li>{$msg.billing.city} : {$user_data.city|htmlspecialchars}</li><li>{$msg.billing.state_province} : {$user_data.province|htmlspecialchars}</li><li>{$msg.billing.country} : {$user_data.country_name|htmlspecialchars}</li><li>{$msg.billing.postal_code} : {$user_data.zip|htmlspecialchars}</li><li>{$msg.account.email_address} : {$user_data.email|htmlspecialchars}</li><li>{$msg.billing.phone_number} : {$user_data.phone|htmlspecialchars}</li><li>{$msg.account.login} : {$user_data.login|htmlspecialchars}</li><li>{if $cf_vsignup} {foreach from=$cf_vsignup item="cf"}</li><li>{$cf.field_name} : {$cf.value_translated}</li><li>{/foreach} {/if}</li></ul><p><br></p><br>{if $AutoApproveVendor!="Yes"}<p><strong>{$msg.email.vendor_account_pending_status}</strong></p><br>{/if} {if $SecurityUserVerificationRequired==''YES'' && $user_data.verified==0}<p><strong>{$msg.email.vendor_account_verification_needed} {$msg.email.verify_your_account}:</strong><br><br><a data-cke-saved-href="{$GlobalHttpUrl}/{$site_index}p=verify_account&uid={$user_data.uid}&verification_token={$user_data.verification_token}" href="http://demo-admin.ixxomultivendor.com/{$GlobalHttpUrl}/{$site_index}p=verify_account&uid={$user_data.uid}&verification_token={$user_data.verification_token}">{$msg.account.verify_account} </a></p><br>{/if} {if $AutoApproveVendor=="Yes"}<p>{if $SecurityUserVerificationRequired==''YES'' && $user_data.verified==0} <strong>{$msg.email.vendor_account_activated_verify}</strong> {else} <strong>{$msg.email.vendor_account_activated_login}</strong> {/if}</p><p><br></p><p>{if $user_data.vendor_backend_access==''Yes''} <a data-cke-saved-href="{$GlobalHttpUrl}/{$admin_index}" href="http://demo-admin.ixxomultivendor.com/{$GlobalHttpUrl}/{$admin_index}"> {$msg.account.access_vendor_admin} </a><br><br>{/if} {if $user_data.vendor_frontend_access==''Yes''} <a data-cke-saved-href="{$GlobalHttpUrl}/{$site_index}p=vendor_home" href="http://demo-admin.ixxomultivendor.com/{$GlobalHttpUrl}/{$site_index}p=vendor_home"> {$msg.account.access_vendor_dashboard} </a> {/if}</p> {else}<p><strong>{$msg.email.vendor_account_pending_activation}</strong></p> {/if}<p>{$msg.email.sincerely},<br>{$CompanyName|htmlspecialchars}</p></blockquote><p>{include file="emails/email_bottom_html.html"}</p>', '{include file="emails/email_top_text.html"}\r\n\r\n {lang msg=$msg.email.dear fname=$user_data.fname lname=$user_data.lname}\r\n\r\n {$msg.email.thanks_for_vendor_registration}\r\n\r\n {$msg.email.your_registration_details}:\r\n ------------------------------\r\n\r\n {$msg.billing.name} : {$user_data.fname} {$user_data.lname}\r\n {$msg.billing.company} : {$user_data.company}\r\n {$msg.billing.address_line1} : {$user_data.address1}\r\n {$msg.billing.address_line2} : {$user_data.address2}\r\n {$msg.billing.city} : {$user_data.city}\r\n {$msg.billing.state_province} : {$user_data.province}\r\n {$msg.billing.country} : {$user_data.country_name}\r\n {$msg.billing.postal_code} : {$user_data.zip}\r\n\r\n {$msg.account.email_address} : {$user_data.email}\r\n {$msg.billing.phone_number} : {$user_data.phone}\r\n {$msg.account.login} : {$user_data.login}\r\n\r\n {if $cf_vsignup}\r\n {foreach from=$cf_vsignup item="cf"}\r\n {$cf.field_name} : {$cf.value_translated}\r\n {/foreach}\r\n {/if}\r\n\r\n {if $AutoApproveVendor!="Yes"}\r\n {$msg.email.vendor_account_pending_status}\r\n\r\n {/if}\r\n {if $SecurityUserVerificationRequired==''YES'' && $user_data.verified==0}\r\n {$msg.email.vendor_account_verification_needed} {$msg.email.verify_your_account}:\r\n\r\n {$msg.account.verify_account}:\r\n {$GlobalHttpUrl}/{$site_index}p=verify_account&uid={$user_data.uid}&verification_token={$user_data.verification_token}\r\n {/if}\r\n {if $AutoApproveVendor=="Yes"}\r\n {if $SecurityUserVerificationRequired==''YES'' && $user_data.verified==0}\r\n {$msg.email.vendor_account_activated_verify}\r\n {else}\r\n {$msg.email.vendor_account_activated_login}\r\n {/if}\r\n\r\n {if $user_data.vendor_backend_access==''Yes''}\r\n {$msg.account.access_vendor_admin}:\r\n {$GlobalHttpUrl}/{$admin_index}\r\n\r\n {/if}\r\n {if $user_data.vendor_frontend_access==''Yes''}\r\n {$msg.account.access_vendor_dashboard}:\r\n {$GlobalHttpUrl}/{$site_index}p=vendor_home\r\n\r\n {/if}\r\n\r\n {else}\r\n  {$msg.email.vendor_account_pending_activation}\r\n {/if}\r\n\r\n {$msg.email.sincerely},\r\n {$CompanyName}\r\n\r\n{include file="emails/email_bottom_text.html"}'),
(5, 'Vendor activate', '<p>{include file="emails/email_top_html.html"}<br></p><blockquote><p><strong>{lang msg=$msg.email.dear fname=$user_data.name lname=''''}</strong></p><br><p><strong>{$msg.email.thanks_for_vendor_registration}</strong></p><br><p><u><strong>{$msg.email.your_registration_details}</strong></u>:</p><ul><li>{$msg.billing.name} : {$user_data.name|htmlspecialchars}</li><li>{$msg.account.email_address} : {$user_data.email|htmlspecialchars}</li><li>{$msg.account.login} : {$user_data.username|htmlspecialchars}</li></ul><p><br></p>{if $SecurityUserVerificationRequired==''YES'' && $user_data.verified==0}<p><strong>{$msg.email.vendor_account_verification_needed} {$msg.email.verify_your_account}:</strong><br><br><a data-cke-saved-href="{$GlobalHttpUrl}/{$site_index}p=verify_account&uid={$user_data.uid}&verification_token={$user_data.verification_token}" href="http://demo-admin.ixxomultivendor.com/{$GlobalHttpUrl}/{$site_index}p=verify_account&uid={$user_data.uid}&verification_token={$user_data.verification_token}">{$msg.account.verify_account} </a></p> {else}<p><strong>{$msg.email.thanks_vendor_for_registration_active}</strong></p> {/if}<p><a data-cke-saved-href="{$GlobalHttpUrl}/{$admin_index}" href="http://demo-admin.ixxomultivendor.com/{$GlobalHttpUrl}/{$admin_index}">{$msg.email.login_url}</a></p><br><p>{$msg.email.sincerely},<br>{$CompanyName|htmlspecialchars}<br></p></blockquote><p>{include file="emails/email_bottom_html.html"}</p>', '{include file="emails/email_top_text.html"}\r\n\r\n {lang msg=$msg.email.dear fname=$user_data.name  lname='''' }\r\n\r\n {$msg.email.thanks_for_vendor_registration}\r\n\r\n {$msg.email.your_registration_details}:\r\n ------------------------------\r\n\r\n {$msg.billing.name} : {$user_data.name}\r\n\r\n {$msg.account.email_address} : {$user_data.email}\r\n {$msg.account.login} : {$user_data.username}\r\n\r\n {if $SecurityUserVerificationRequired==''YES'' && $user_data.verified==0}\r\n {$msg.email.vendor_account_verification_needed} {$msg.email.verify_your_account}:\r\n\r\n {$msg.account.verify_account}:\r\n {$GlobalHttpUrl}/{$site_index}p=verify_account&uid={$user_data.uid}&verification_token={$user_data.verification_token}\r\n {else}\r\n {$msg.email.thanks_vendor_for_registration_active}\r\n {/if}\r\n           \r\n {$msg.email.login_url}:\r\n {$GlobalHttpUrl}/{$admin_index}\r\n\r\n {$msg.email.sincerely},\r\n {$CompanyName}\r\n\r\n{include file="emails/email_bottom_text.html"}'),
(6, 'New order - for Administrators', '<p>{include file="emails/email_top_html.html"}<br></p><p><strong>{lang msg=$msg.email.new_order_placed s=$CompanyName|htmlspecialchars}</strong></p><p>{include file="emails/email_order_received_html.html"}<br></p><table [removed]="background-color:#e0e0e0">{$msg.cart.payment}</td></tr><tr><td [removed]><blockquote>{if !empty($gate_way_name)} {foreach from=$gate_way_name item="single_gateway"} <strong>{$single_gateway.name|htmlspecialchars}</strong><br>{$single_gateway.msg}<br><br>{/foreach} {else} <strong>{$payment_method_name|htmlspecialchars}</strong><br>{$payment_method_thankyou} {/if}</blockquote>{if $receipt_data}<blockquote><strong>{$msg.order.payment_method}</strong>: {$payment_method_name} {foreach from=$receipt_data item="receipt_value" key="receipt_key"}<br><strong>{$receipt_key}</strong>: {$receipt_value} {/foreach}</blockquote> {/if}</td></tr></tbody></table><p>{include file="emails/email_bottom_html.html"}<br></p>', '{include file="emails/email_top_text.html"}\r\n\r\n{lang msg=$msg.email.new_order_placed s=$CompanyName}\r\n\r\n{include file="emails/email_order_received_text.html"}\r\n{$msg.cart.payment}:\r\n {if !empty($gate_way_name)}\r\n  {foreach from=$gate_way_name item="single_gateway"}\r\n   {$single_gateway.name|htmlspecialchars}\r\n   {$single_gateway.msg}\r\n\r\n  {/foreach}\r\n {else}\r\n  {$payment_method_name}\r\n  {$payment_method_thankyou|strip_tags}\r\n {/if}\r\n {if $receipt_data}\r\n  {$msg.order.payment_method}: {$payment_method_name}\r\n  {foreach from=$receipt_data item="receipt_value" key="receipt_key"}\r\n  {$receipt_key}: {$receipt_value}\r\n  {/foreach}\r\n {/if}\r\n{include file="emails/email_bottom_text.html"}\r\n'),
(7, 'New order - for Users', '', ''),
(8, 'Manual Order Received - for Users', '', ''),
(9, 'Password reset - for Users', '', ''),
(10, 'Deposit Received - for Users', '', ''),
(11, 'Payment Due - for Users', '', ''),
(12, 'Email to a Friend', '', ''),
(13, 'Send Payment Request', '', ''),
(14, 'More Info Request - for Users', '', ''),
(15, 'Order Note Email - for Users', '', ''),
(16, 'Contact Us Email - for Administrators', '', ''),
(17, 'Contact Us Email - for Users', '', ''),
(18, 'Price Alert - for Users', '', ''),
(19, 'Price Offer Accepted - for Users', '', ''),
(20, 'Price Offer Declined - for Users', '', ''),
(21, 'Points eMail - Points Expire', '', ''),
(22, 'Points eMail - Points Updated', '', ''),
(23, 'Points eMail - Monthly Report', '', ''),
(24, 'Product Approval Notification - for Vendors', '', ''),
(25, 'Product Approval Notification - for Admins', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ordered_vendor_services`
--

CREATE TABLE IF NOT EXISTS `ordered_vendor_services` (
  `order_id` int(11) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  `from_date` datetime NOT NULL,
  `to_date` datetime NOT NULL,
  `service` varchar(50) NOT NULL,
  `item_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `time_added` datetime NOT NULL,
  `time_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ordered_vendor_services`
--

INSERT INTO `ordered_vendor_services` (`order_id`, `vendor`, `from_date`, `to_date`, `service`, `item_id`, `amount`, `time_added`, `time_update`, `status`) VALUES
(1, 'Alex', '2015-12-01 00:00:00', '2016-06-30 00:00:00', 'vendor_service_1', 100, 50, '2016-06-11 00:00:00', '2016-06-11 16:20:54', 1),
(2, 'Robert Bucky', '2016-06-01 00:00:00', '2016-06-23 00:00:00', 'vendor_service_2', 101, 500, '2016-06-12 00:00:00', '2016-06-12 11:13:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_attachment`
--

CREATE TABLE IF NOT EXISTS `order_attachment` (
  `order_attach_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `file_name` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_attachment`
--

INSERT INTO `order_attachment` (`order_attach_id`, `order_id`, `product_id`, `file_name`) VALUES
(1, 4, 2, 'test.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_cart_settings`
--

CREATE TABLE IF NOT EXISTS `order_cart_settings` (
  `id` int(11) NOT NULL,
  `type` longtext NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_cart_settings`
--

INSERT INTO `order_cart_settings` (`id`, `type`, `value`) VALUES
(1, 'visitor_see_price', 'ok'),
(2, 'visitor_may_add_item', 'ok'),
(3, 'only_customer_group_members_can_add_items', 'no'),
(4, 'allow_create_account', 'allow_user_to_decide'),
(5, 'showcase_mode', 'no'),
(6, 'visitor_mode', 'all'),
(7, 'checkout_process_mode', 'traditional'),
(8, 'checkout_payment_mode', 'mall'),
(9, 'min_order_number', '1'),
(10, 'use_captcha_verfification_when_registering', 'no'),
(11, 'max_unique_items_in_the_cart', '0'),
(12, 'display_password_strength_meter', 'no'),
(13, 'display_terms_and_conditions_checkbox', 'ok'),
(14, 'always_display_terms_and_conditions_checkbox', 'no'),
(15, 'inventory_stock_update_at', 'order_completed'),
(16, 'activate_shipping_for_each_product_separately', 'no'),
(17, 'activate_product_reviews_for_all_products', 'no'),
(18, 'enable_vendor_ratings', 'no'),
(19, 'product_subscribe_cancel_option', 'ok'),
(20, 'product_subscribe_change_period_option', 'no'),
(21, 'min_order_subtotal_level_0', '0.00'),
(22, 'min_order_subtotal_level_1', '0.00'),
(23, 'min_order_subtotal_level_2', '0.00'),
(24, 'min_order_subtotal_level_3', '0.00'),
(25, 'after_login_go_to', 'cart'),
(26, 'after_signup_go_to', 'homepage'),
(27, 'after_product_added_go_to', 'current_page'),
(28, 'continue_shopping_to', 'last_page'),
(29, 'after_removing_go_to', 'last_page'),
(30, 'show_additional_profile_navigation', 'no'),
(31, 'cart_button_sequence', 'reverse'),
(32, 'displaythe_EMPTY_CART_button_in_your_cart', 'ok'),
(33, 'attribute_option_style_in_cart', 'short'),
(34, 'cart_style_when_cart_is_empty', 'text'),
(35, 'display_tabs_in_product_details_page', 'no'),
(36, 'allows_you_to_share_to_facebook_twitter', 'no'),
(37, 'email_updates_available', 'ok'),
(38, 'email_newsletters_available', 'ok'),
(39, 'email_confirmations_necessary', 'no'),
(40, 'wish_list_enabled', 'no'),
(41, 'rma_enabled', 'ok'),
(42, 'allows_admin_to_enable_RMA_for_all_products', 'no'),
(43, 'deposit_enabled', 'ok'),
(44, 'deposit_percentage', '250'),
(45, 'donation_option_at_invoice_page', '');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `page_id` int(11) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `page_name` varchar(100) DEFAULT NULL,
  `parmalink` varchar(100) DEFAULT NULL,
  `content` longtext,
  `parts` longtext,
  `tag` longtext
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE IF NOT EXISTS `permission` (
  `permission_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `codename` varchar(30) DEFAULT NULL,
  `parent_status` varchar(30) DEFAULT NULL,
  `description` longtext
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`permission_id`, `name`, `codename`, `parent_status`, `description`) VALUES
(1, 'staff', 'admin', 'parent', ''),
(2, 'edit', 'admin_edit', '1', ''),
(3, 'view', 'admin_view', '1', ''),
(4, 'delete', 'admin_delete', '1', ''),
(5, 'banner', 'banner', 'parent', ''),
(6, 'edit', 'banner_edit', '5', ''),
(7, 'view', 'banner_view', '5', ''),
(8, 'delete', 'banner_delete', '5', ''),
(9, 'brand', 'brand', 'parent', ''),
(10, 'edit', 'brand_edit', '9', ''),
(11, 'view', 'brand_view', '9', ''),
(12, 'delete', 'brand_delete', '9', ''),
(13, 'business settings', 'business_settings', 'parent', ''),
(14, 'edit', 'business_settings_edit', '13', ''),
(15, 'view', 'business_settings_view', '13', ''),
(16, 'delete', 'business_settings_delete', '13', ''),
(17, 'category', 'category', 'parent', ''),
(18, 'edit', 'category_edit', '17', ''),
(19, 'view', 'category_view', '17', ''),
(20, 'delete', 'category_delete', '17', ''),
(21, 'contact message', 'contact_message', 'parent', ''),
(22, 'edit', 'contact_message_edit', '21', ''),
(23, 'view', 'contact_message_view', '21', ''),
(24, 'delete', 'contact_message_delete', '21', ''),
(25, 'site settings', 'site_settings', 'parent', ''),
(26, 'edit', 'site_settings_edit', '25', ''),
(27, 'view', 'site_settings_view', '25', ''),
(28, 'delete', 'site_settings_delete', '25', ''),
(29, 'product', 'product', 'parent', ''),
(30, 'edit', 'product_edit', '29', ''),
(31, 'view', 'product_view', '29', ''),
(32, 'delete', 'product_delete', '29', ''),
(33, 'report', 'report', 'parent', ''),
(34, 'edit', 'report_edit', '33', ''),
(35, 'view', 'report_view', '33', ''),
(36, 'delete', 'report_delete', '33', ''),
(37, 'role', 'role', 'parent', ''),
(38, 'edit', 'role_edit', '37', ''),
(39, 'view', 'role_view', '37', ''),
(40, 'delete', 'role_delete', '37', ''),
(41, 'sale', 'sale', 'parent', ''),
(42, 'edit', 'sale_edit', '41', ''),
(43, 'view', 'sale_view', '41', ''),
(44, 'delete', 'sale_delete', '41', ''),
(45, 'slider', 'slider', 'parent', ''),
(46, 'edit', 'slider_edit', '45', ''),
(47, 'view', 'slider_view', '45', ''),
(48, 'delete', 'slider_delete', '45', ''),
(49, 'stock', 'stock', 'parent', ''),
(50, 'edit', 'stock_edit', '49', ''),
(51, 'view', 'stock_view', '49', ''),
(52, 'delete', 'stock_delete', '49', ''),
(53, 'sub category', 'sub_category', 'parent', ''),
(54, 'edit', 'sub_category_edit', '53', ''),
(55, 'view', 'sub_category_view', '53', ''),
(56, 'delete', 'sub_category_delete', '53', ''),
(57, 'user', 'user', 'parent', ''),
(58, 'edit', 'user_edit', '57', ''),
(59, 'view', 'user_view', '57', ''),
(60, 'delete', 'user_delete', '57', ''),
(61, 'newsletter', 'newsletter', 'parent', ''),
(62, 'language', 'language', 'parent', ''),
(63, 'page', 'page', 'parent', ''),
(64, 'Discount Coupon', 'coupon', 'parent', ''),
(65, 'vendor', 'vendor', 'parent', ''),
(66, 'membership', 'membership', 'parent', ''),
(67, 'SEO', 'seo', 'parent', ''),
(68, 'Membership Payments', 'membership_payment', 'parent', ''),
(69, 'blog', 'blog', 'parent', NULL),
(70, 'slides', 'slides', 'parent', NULL),
(71, 'maintenance', 'site_maintenance', 'parent', NULL),
(72, 'Manage News', 'manage_news', '65', 'Create and manage news & announcements for your vendors. The messages will appear at the vendor home page as long as they remain active.'),
(73, 'Add News', 'add_news', '65', NULL),
(81, 'vendor reports', 'vendor_reports', 'parent', NULL),
(82, 'edit vendor report', 'edit_vendor_report', '81', 'edit vendor report'),
(83, 'delete vendor report', 'delete_vendor_report', '81', 'delete vendor report'),
(84, 'tickets', 'tickets', 'parent', 'tickets'),
(85, 'Email settings', 'email_settings', 'parent', 'Email settings'),
(86, 'Api users', 'api_users', 'parent', 'Api users'),
(87, 'Top sellers', 'top_sellers', 'parent', 'Top sellers'),
(88, 'Top buyers', 'top_buyers', 'parent', 'Top buyers'),
(89, 'Rma infos', 'rma_infos', 'parent', 'Rma infos'),
(92, 'Sales statistics', 'sales_statistics', 'parent', 'Sales statistics'),
(93, 'Latest subscriptions', 'latest_subscriptions', 'parent', 'Latest subscriptions'),
(94, 'Latest orders', 'latest_orders', 'parent', 'Latest orders');

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE IF NOT EXISTS `points` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `expire` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`id`, `user_id`, `points`, `expire`) VALUES
(1, 1, 6, 15);

-- --------------------------------------------------------

--
-- Table structure for table `points_range`
--

CREATE TABLE IF NOT EXISTS `points_range` (
  `id` int(11) NOT NULL,
  `min_amount` decimal(22,2) NOT NULL,
  `max_amount` decimal(22,2) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `points_range`
--

INSERT INTO `points_range` (`id`, `min_amount`, `max_amount`, `points`) VALUES
(1, '40.50', '98.50', 57);

-- --------------------------------------------------------

--
-- Table structure for table `point_system_settings`
--

CREATE TABLE IF NOT EXISTS `point_system_settings` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `expiry_day` int(11) NOT NULL,
  `point_equivalent_to` decimal(20,2) NOT NULL DEFAULT '0.00',
  `free_points_on_registration` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `point_system_settings`
--

INSERT INTO `point_system_settings` (`id`, `status`, `expiry_day`, `point_equivalent_to`, `free_points_on_registration`) VALUES
(1, 1, 15, '0.01', 50);

-- --------------------------------------------------------

--
-- Table structure for table `price_offers`
--

CREATE TABLE IF NOT EXISTS `price_offers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `suggested_price` varchar(60) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price_offers`
--

INSERT INTO `price_offers` (`id`, `user_id`, `product_id`, `suggested_price`, `status`) VALUES
(1, 5, 119, '30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL,
  `rating_num` int(11) NOT NULL DEFAULT '0',
  `rating_total` int(11) NOT NULL DEFAULT '0',
  `rating_user` longtext COLLATE utf8_unicode_ci NOT NULL,
  `title` longtext COLLATE utf8_unicode_ci,
  `category` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sub_category` int(11) DEFAULT NULL,
  `num_of_imgs` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sale_price` decimal(20,2) NOT NULL DEFAULT '0.00',
  `purchase_price` decimal(20,2) NOT NULL DEFAULT '0.00',
  `shipping_cost` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0.00',
  `add_timestamp` longtext COLLATE utf8_unicode_ci NOT NULL,
  `featured` longtext COLLATE utf8_unicode_ci,
  `tag` longtext COLLATE utf8_unicode_ci,
  `status` longtext COLLATE utf8_unicode_ci NOT NULL,
  `front_image` longtext COLLATE utf8_unicode_ci,
  `brand` longtext COLLATE utf8_unicode_ci,
  `current_stock` int(11) DEFAULT '0',
  `unit` longtext COLLATE utf8_unicode_ci,
  `additional_fields` longtext COLLATE utf8_unicode_ci,
  `number_of_view` int(11) NOT NULL DEFAULT '0',
  `background` longtext COLLATE utf8_unicode_ci,
  `discount` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0.00',
  `discount_type` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tax` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0.00',
  `tax_type` longtext COLLATE utf8_unicode_ci NOT NULL,
  `color` longtext COLLATE utf8_unicode_ci,
  `options` longtext COLLATE utf8_unicode_ci,
  `main_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `added_by` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `download` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `download_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deal` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=133 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(1, 0, 0, '', 'Apple Macbook', 1, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nulla tincidunt, posuere lacus sit amet, feugiat ligula. Pellentesque nisl sem, venenatis in tortor congue, aliquam fermentum neque. Cras lectus libero, malesuada id nisl vel, pulvinar finibus ex. Morbi id purus ac ex tempor mollis sed quis arcu. Vivamus eget luctus ipsum. Suspendisse vel vulputate orci, sit amet pretium erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vestibulum odio sed mi efficitur semper. Fusce quis odio rhoncus sapien tristique hendrerit. Sed mattis tellus vel magna aliquam feugiat.</span><br></p>', 1, '4', '1200.00', '1000.00', '10', '1434108235', 'ok', 'apple,mac', '0', '0', '11', 76, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '5', 'percent', '["rgba(235,235,235,1)","rgba(212,183,83,1)","rgba(133,133,133,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, 'ok'),
(2, 0, 0, '', 'i-mac', 1, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nulla tincidunt, posuere lacus sit amet, feugiat ligula. Pellentesque nisl sem, venenatis in tortor congue, aliquam fermentum neque. Cras lectus libero, malesuada id nisl vel, pulvinar finibus ex. Morbi id purus ac ex tempor mollis sed quis arcu. Vivamus eget luctus ipsum. Suspendisse vel vulputate orci, sit amet pretium erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vestibulum odio sed mi efficitur semper. Fusce quis odio rhoncus sapien tristique hendrerit. Sed mattis tellus vel magna aliquam feugiat.</span><br></p>', 2, '2', '1200.00', '850.00', '15', '1434108411', '0', 'imac,apple', '0', '0', '11', 86, 'pc', '{"name":"false","value":"false"}', 0, NULL, '2.5', 'percent', '10', 'percent', '["rgba(227,227,227,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(3, 0, 0, '', 'Apple watch', 1, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nulla tincidunt, posuere lacus sit amet, feugiat ligula. Pellentesque nisl sem, venenatis in tortor congue, aliquam fermentum neque. Cras lectus libero, malesuada id nisl vel, pulvinar finibus ex. Morbi id purus ac ex tempor mollis sed quis arcu. Vivamus eget luctus ipsum. Suspendisse vel vulputate orci, sit amet pretium erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vestibulum odio sed mi efficitur semper. Fusce quis odio rhoncus sapien tristique hendrerit. Sed mattis tellus vel magna aliquam feugiat.</span><br></p>', 3, '4', '700.00', '550.00', '10', '1434123841', '0', 'apple ,apple watch,watch,modern watch', '0', '0', '11', 43, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '2', 'percent', '["rgba(255,255,255,1)","rgba(219,219,219,1)","rgba(61,61,61,1)","rgba(255,189,110,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(4, 0, 0, '', 'ipad', 1, '<h1 style="font-size: 20px; margin-top: 7px; margin-bottom: 7px; color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; line-height: normal;"><span style="font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere velit eu turpis efficitur gravida. Nunc mollis felis nec faucibus viverra. Pellentesqueut sapien sit amet purus finibus ornare. Ut posuere nec massa ut mattis. Morbi nec viverra neque, nec semper urna. Suspendisse potenti. Suspendisse blandit volutpat enim sit amet malesuada. Duis congue arcu in egestas volutpat. Cras sapien ex, fermentum ac purus in, gravida congue felis. Vestibulum quis ornare quam. In vestibulum condimentum quam ac pharetra. Vivamus auctor et magna et maximus. Phasellus et ipsum et lacus dictum iaculis a a quam. Donec aliquam dictum suscipit. Donec ante quam, lacinia eget elit nec, facilisis interdum neque.</span><br></h1>', 12, '1', '500.00', '350.00', '10', '1434124301', '0', 'tablet,pad,ipad', '0', '0', '11', 18, 'pc', '{"name":"false","value":"false"}', 1, NULL, '2', 'percent', '4', 'percent', '["rgba(255,255,255,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(5, 0, 0, '', 'Man casual suit', 4, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum odio felis, mattis nec cursus non, consectetur et lacus. Maecenas non faucibus leo. Suspendisse vestibulum justo justo, in mattis elit aliquam sed. Vestibulum eget nisi malesuada, convallis eros quis, posuere turpis. Sed placerat sapien vitae scelerisque tincidunt. Suspendisse imperdiet eros a quam ultricies viverra. Nunc dui felis, pulvinar ut mattis sit amet, volutpat non risus. Fusce lobortis sapien a risus venenatis tempor. Vivamus sodales tellus ex, vitae commodo dolor lacinia ac. Morbi mattis tempor dolor at viverra.&nbsp;</span><br></p>', 7, '5', '90.00', '60.00', '', '1434194676', '0', 'suit men,manz suit,menz wear', '0', '0', '', 95, 'pc', '{"name":"false","value":"false"}', 0, NULL, '2', 'percent', '', 'percent', '["rgba(173,186,255,1)","rgba(84,84,84,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(6, 0, 0, '', 'Mans shirt', 4, '<p style="text-align: center;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify;">Praesent feugiat, tellus at mollis molestie, urna arcu imperdiet eros, id efficitur justo ex ac risus. Mauris a purus nec lectus fermentum hendrerit. Donec porttitor fringilla tellus et finibus. Aliquam venenatis urna nec tincidunt tempor. Suspendisse potenti. Nullam porttitor bibendum purus, nec scelerisque elit ultricies ac. Integer tincidunt congue diam id congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur ligula nulla, malesuada sed quam cursus, convallis pharetra nibh. &nbsp;</span><br></p>', 7, '2', '35.00', '25.00', '', '1434195639', '0', 'shirt,mans shirt,shirt for man,casual shirt', '0', '0', '', 29, 'pc', '{"name":"false","value":"false"}', 0, NULL, '1', 'percent', '0', 'percent', '["rgba(84,73,73,1)","rgba(0,0,0,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(7, 0, 0, '', 'shoe', 4, '<p><span style="text-align: justify;">Aenean varius erat sit amet metus cursus convallis. Integer elementum nec metus consectetur efficitur. Curabitur varius quam arcu, vitae imperdiet massa lacinia in. Vestibulum posuere arcu quis enim condimentum molestie. Integer sed lacus porta, ultrices sapien sit amet, rhoncus neque. Morbi vitae pharetra nunc. Pellentesque non imperdiet libero. Vivamus ac nisl nec enim pharetra congue.</span><br></p>', 9, '3', '40.00', '33.00', '', '1434195983', '0', 'male shoe ,shoe for male', '0', '0', '', 80, 'pc', '{"name":"[\\"\\"]","value":"[\\"\\"]"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(0,0,0,1)","rgba(245,7,7,1)","rgba(0,0,0,1)"]', '[{"no":"0","title":"size","name":"choice_0","type":"single_select","option":["X","XL","XXL"]}]', '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(8, 0, 0, '', 'casual leather jacket', 4, '<p><span style="text-align: justify;">Aenean varius erat sit amet metus cursus convallis. Integer elementum nec metus consectetur efficitur. Curabitur varius quam arcu, vitae imperdiet massa lacinia in. Vestibulum posuere arcu quis enim condimentum molestie. Integer sed lacus porta, ultrices sapien sit amet, rhoncus neque. Morbi vitae pharetra nunc. Pellentesque non imperdiet libero. Vivamus ac nisl nec enim pharetra congue.</span></p><p><span style="text-align: justify;"><br></span><br></p>', 7, '1', '65.00', '50.00', '4', '1434196305', '0', 'jacket,man jacket,leather jacket', '0', '0', '', 51, 'pc', '{"name":"false","value":"false"}', 0, NULL, '4', 'percent', '', 'percent', '["rgba(10,0,0,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(9, 0, 0, '', 'stylish leather jacket', 4, '<p><span style="text-align: justify;">Aenean varius erat sit amet metus cursus convallis. Integer elementum nec metus consectetur efficitur. Curabitur varius quam arcu, vitae imperdiet massa lacinia in. Vestibulum posuere arcu quis enim condimentum molestie. Integer sed lacus porta, ultrices sapien sit amet, rhoncus neque. Morbi vitae pharetra nunc. Pellentesque non imperdiet libero. Vivamus ac nisl nec enim pharetra congue.</span></p><p><span style="text-align: justify;"><br></span><br></p>', 7, '1', '55.00', '34.00', '4', '1434196498', '0', 'jacket,stylish jacket', '0', '0', '', 4, '4', '{"name":"false","value":"false"}', 0, NULL, '7', 'percent', '', 'percent', '["rgba(87,1,1,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(10, 0, 0, '', 'Mans sunglass', 4, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;? un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum ? considerato il testo segnaposto standard sin dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di caratteri e li assembl? per preparare un testo campione. ? sopravvissuto non solo a pi? di cinque secoli, ma anche al passaggio alla videoimpaginazione, pervenendoci sostanzialmente inalterato. Fu reso popolare, negli anni ?60, con la diffusione dei fogli di caratteri trasferibili ?Letraset?, che contenevano passaggi del Lorem Ipsum, e pi? recentemente da software di impaginazione come Aldus PageMaker, che includeva versioni del Lorem Ipsum. &nbsp;</span><br></p>', 7, '2', '25.00', '15.00', '2', '1434196909', '0', 'sunglass,manz shades,mans sunglass', '0', '0', '', 29, 'pc', '{"name":"false","value":"false"}', 1, NULL, '2', 'percent', '', 'percent', '["rgba(115,4,4,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(11, 0, 0, '', 'Mans black suit ', 4, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;? un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum ? considerato il testo segnaposto standard sin dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di caratteri e li assembl? per preparare un testo campione. ? sopravvissuto non solo a pi? di cinque secoli, ma anche al passaggio alla videoimpaginazione, pervenendoci sostanzialmente inalterato. Fu reso popolare, negli anni ?60, con la diffusione dei fogli di caratteri trasferibili ?Letraset?, che contenevano passaggi del Lorem Ipsum, e pi? recentemente da software di impaginazione come Aldus PageMaker, che includeva versioni del Lorem Ipsum.</span><br></p>', 7, '1', '98.00', '79.00', '2', '1434197039', '0', 'black suit,manz black suit,stylish black suit', '0', '0', '', 98, '5', '{"name":"false","value":"false"}', 1, NULL, '8', 'percent', '', 'percent', '["rgba(204,204,204,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(12, 0, 0, '', 'Manz jacket', 4, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;? un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum ? considerato il testo segnaposto standard sin dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di caratteri e li assembl? per.</span><br></p>', 7, '1', '51.00', '43.00', '', '1434197186', '0', 'jacket,black jacket,black stylish jacket,stylish jacket', '0', '0', '', 85, 'pc', '{"name":"false","value":"false"}', 1, NULL, '5', 'percent', '', 'percent', '["rgba(204,204,204,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(13, 0, 0, '', 'Manz casual black suit', 4, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;? un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum ? considerato il testo segnaposto standard sin dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di caratteri e li assembl? per preparare un testo campione. ? sopravvissuto non solo a pi? di cinque secoli, ma anche al passaggio alla videoimpaginazione, pervenendoci sostanzialmente inalterato. Fu reso popolare, negli anni ?60, con la diffusione dei fogli di caratteri trasferibili ?Letraset?, che contenevano passaggi del Lorem Ipsum, e pi? recentemente da software di impaginazione come Aldus PageMaker, che includeva versioni del Lorem Ipsum.</span></p>', 7, '5', '99.00', '68.00', '8', '1434197364', '0', 'suit,black suit,manz black suit,manz black stylish suit', '0', '0', '', 75, '55', '{"name":"false","value":"false"}', 1, NULL, '6', 'percent', '', 'percent', '["rgba(204,204,204,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(14, 0, 0, '', 'Mac pro', 1, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sem nibh, aliquam sed sapien rutrum, rhoncus egestas justo. Proin faucibus, ante vitae aliquam blandit, justo erat porttitor felis, in interdum nibh neque eu orci. Morbi tincidunt sapien diam, vel commodo augue aliquet ac. Nulla eu maximus est. Morbi a consequat urna. Ut ac condimentum elit. Quisque pharetra mollis odio, vitae accumsan erat gravida id. Quisque nec lacinia dui, nec cursus ipsum. In pretium mattis bibendum. Nulla vehicula tincidunt augue, ac pellentesque odio tristique eget. Curabitur suscipit enim velit, vitae tempor metus varius pellentesque. Nam dictum id libero sed rhoncus.&nbsp;</span><br></p>', 2, '5', '1200.00', '900.00', '20', '1434230565', '0', 'mac,macpro,apple', '0', '0', '11', 93, 'pc', '{"name":"[\\"Model\\",\\"Year\\",\\"Compant\\"]","value":"[\\"Mac pro 2015\\",\\"2012\\",\\"Apple inc\\"]"}', 1, NULL, '', 'percent', '2', 'percent', '["rgba(0,0,0,1)","rgba(224,224,224,1)","rgba(179,179,179,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(15, 0, 0, '', 'Mac mini', 1, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sem nibh, aliquam sed sapien rutrum, rhoncus egestas justo. Proin faucibus, ante vitae aliquam blandit, justo erat porttitor felis, in interdum nibh neque eu orci. Morbi tincidunt sapien diam, vel commodo augue aliquet ac. Nulla eu maximus est. Morbi a consequat urna. Ut ac condimentum elit. Quisque pharetra mollis odio, vitae accumsan erat gravida id. Quisque nec lacinia dui, nec cursus ipsum. In pretium mattis bibendum. Nulla vehicula tincidunt augue, ac pellentesque odio tristique eget. Curabitur suscipit enim velit, vitae tempor metus varius pellentesque. Nam dictum id libero sed rhoncus.&nbsp;</span><br></p>', 2, '1', '700.00', '500.00', '10', '1434230773', 'ok', 'apple,mac mini', '0', '0', '11', 53, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '5', 'percent', '["rgba(232,232,232,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(16, 1, 5, '["4"]', 'Mini mac', 1, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sem nibh, aliquam sed sapien rutrum, rhoncus egestas justo. Proin faucibus, ante vitae aliquam blandit, justo erat porttitor felis, in interdum nibh neque eu orci. Morbi tincidunt sapien diam, vel commodo augue aliquet ac. Nulla eu maximus est. Morbi a consequat urna. Ut ac condimentum elit. Quisque pharetra mollis odio, vitae accumsan erat gravida id. Quisque nec lacinia dui, nec cursus ipsum. In pretium mattis bibendum. Nulla vehicula tincidunt augue, ac pellentesque odio tristique eget. Curabitur suscipit enim velit, vitae tempor metus varius pellentesque. Nam dictum id libero sed rhoncus.&nbsp;</span><br></p>', 2, '2', '600.00', '450.00', '10', '1434230991', '0', 'apple,macmin,mini computer', '0', '0', '11', 1, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '5', 'percent', '["rgba(204,204,204,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(17, 0, 0, '', 'Macbook pro', 1, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sem nibh, aliquam sed sapien rutrum, rhoncus egestas justo. Proin faucibus, ante vitae aliquam blandit, justo erat porttitor felis, in interdum nibh neque eu orci. Morbi tincidunt sapien diam, vel commodo augue aliquet ac. Nulla eu maximus est. Morbi a consequat urna. Ut ac condimentum elit. Quisque pharetra mollis odio, vitae accumsan erat gravida id. Quisque nec lacinia dui, nec cursus ipsum. In pretium mattis bibendum. Nulla vehicula tincidunt augue, ac pellentesque odio tristique eget. Curabitur suscipit enim velit, vitae tempor metus varius pellentesque. Nam dictum id libero sed rhoncus.&nbsp;</span><br></p>', 1, '2', '1200.00', '900.00', '10', '1434232469', '0', 'mac,apple,macbook pro', '0', '0', '11', 50, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '5', 'percent', '["rgba(204,204,204,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(18, 0, 0, '', 'Apple Watch', 1, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sem nibh, aliquam sed sapien rutrum, rhoncus egestas justo. Proin faucibus, ante vitae aliquam blandit, justo erat porttitor felis, in interdum nibh neque eu orci. Morbi tincidunt sapien diam, vel commodo augue aliquet ac. Nulla eu maximus est. Morbi a consequat urna. Ut ac condimentum elit. Quisque pharetra mollis odio, vitae accumsan erat gravida id. Quisque nec lacinia dui, nec cursus ipsum. In pretium mattis bibendum. Nulla vehicula tincidunt augue, ac pellentesque odio tristique eget. Curabitur suscipit enim velit, vitae tempor metus varius pellentesque. Nam dictum id libero sed rhoncus.&nbsp;</span><br></p>', 3, '5', '700.00', '500.00', '10', '1434232558', 'ok', 'apple watch,watch', '0', '0', '11', 18, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '5', 'percent', '["rgba(204,204,204,1)","rgba(38,38,38,1)","rgba(255,215,110,1)","rgba(247,247,247,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(19, 0, 0, '', 'Toyota v6', 2, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus dapibus lorem. Praesent non suscipit justo. Quisque leo diam, mattis sit amet fermentum non, rutrum vitae mi. Mauris magna nibh, finibus non hendrerit non, aliquet eget ex. Morbi semper molestie malesuada. Pellentesque id nunc varius, gravida magna tristique, vulputate metus. Nulla et lobortis urna. Ut dictum nisi et arcu pretium mattis.</span><br></p>', 10, '1', '5999.00', '4000.00', '150', '1434277334', '0', 'toyota,car,v6', '0', '0', '4', 48, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '5', 'percent', '["rgba(252,234,205,1)","rgba(0,0,0,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(20, 0, 0, '', 'Marcedez E', 2, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus dapibus lorem. Praesent non suscipit justo. Quisque leo diam, mattis sit amet fermentum non, rutrum vitae mi. Mauris magna nibh, finibus non hendrerit non, aliquet eget ex. Morbi semper molestie malesuada. Pellentesque id nunc varius, gravida magna tristique, vulputate metus. Nulla et lobortis urna. Ut dictum nisi et arcu pretium mattis. &nbsp;</span><br></p>', 10, '1', '9800.00', '7800.00', '150', '1434277565', '0', 'marcedez,car', '0', '0', '2', 43, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '5', 'percent', '["rgba(150,150,150,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(21, 0, 0, '', 'BMW Bike', 2, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus dapibus lorem. Praesent non suscipit justo. Quisque leo diam, mattis sit amet fermentum non, rutrum vitae mi. Mauris magna nibh, finibus non hendrerit non, aliquet eget ex. Morbi semper molestie malesuada. Pellentesque id nunc varius, gravida magna tristique, vulputate metus. Nulla et lobortis urna. Ut dictum nisi et arcu pretium mattis.&nbsp;</span><br></p>', 11, '2', '3900.00', '2500.00', '100', '1434278511', '0', 'bike,bmw,superbike', '0', '0', '5', 15, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '20', 'percent', '["rgba(204,204,204,1)","rgba(54,54,54,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(22, 0, 0, '', 'Audi R8', 2, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus dapibus lorem. Praesent non suscipit justo. Quisque leo diam, mattis sit amet fermentum non, rutrum vitae mi. Mauris magna nibh, finibus non hendrerit non, aliquet eget ex. Morbi semper molestie malesuada. Pellentesque id nunc varius, gravida magna tristique, vulputate metus. Nulla et lobortis urna. Ut dictum nisi et arcu pretium mattis.&nbsp;</span><br></p>', 10, '2', '8999.00', '6999.00', '200', '1434278658', '0', 'audi,car', '0', '0', '1', 33, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '15', 'percent', '["rgba(204,204,204,1)","rgba(77,72,72,1)","rgba(255,255,255,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(23, 0, 0, '', 'Marcedez 2015', 2, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus dapibus lorem. Praesent non suscipit justo. Quisque leo diam, mattis sit amet fermentum non, rutrum vitae mi. Mauris magna nibh, finibus non hendrerit non, aliquet eget ex. Morbi semper molestie malesuada. Pellentesque id nunc varius, gravida magna tristique, vulputate metus. Nulla et lobortis urna. Ut dictum nisi et arcu pretium mattis. &nbsp;</span><br></p>', 10, '1', '5900.00', '4000.00', '100', '1434278930', '0', 'marcedez,car,supercar', '0', '0', '2', 0, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '20', 'percent', '["rgba(255,247,205,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(24, 0, 0, '', 'HMV Hummer', 2, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus dapibus lorem. Praesent non suscipit justo. Quisque leo diam, mattis sit amet fermentum non, rutrum vitae mi. Mauris magna nibh, finibus non hendrerit non, aliquet eget ex. Morbi semper molestie malesuada. Pellentesque id nunc varius, gravida magna tristique, vulputate metus. Nulla et lobortis urna. Ut dictum nisi et arcu pretium mattis.&nbsp;</span><br></p>', 10, '8', '15000.00', '8000.00', '500', '1434279056', '0', 'hummer,hmv', '0', '0', '7', 35, 'pc', '{"name":"false","value":"false"}', 1, NULL, '5', 'percent', '20', 'percent', '["rgba(0,0,0,1)","rgba(255,250,223,1)","rgba(204,204,204,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(26, 0, 0, '', 'Canon 5D', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 13, '1', '1200.00', '800.00', '20', '1434326950', '0', 'camera,dslr', '0', '0', '16', 48, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '7', 'percent', '["rgba(64,64,64,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(27, 0, 0, '', 'Nikon 6D', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 13, '2', '1400.00', '900.00', '20', '1434327041', '0', 'camera,nikon,DSLR camera', '0', '0', '15', 48, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '7', 'percent', '["rgba(54,54,54,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(28, 0, 0, '', 'Nikon 7D', 1, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 13, '2', '800.00', '450.00', '10', '1434327112', '0', 'camera,nikon,DSLR camera', '0', '0', '15', 48, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '5', 'percent', '["rgba(204,204,204,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(29, 0, 0, '', 'Apple Thunderbolt', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 3, '2', '700.00', '500.00', '20', '1434327483', '0', 'apple,thunderbolt,thunderbolt display,computer monitor', '0', '0', '11', 48, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '5', 'percent', '["rgba(0,0,0,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(30, 0, 0, '', 'Women lingerie', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 14, '1', '25.00', '10.00', '2', '1434328497', '0', 'women', '0', '0', '', 142, '', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(255,159,217,1)","rgba(0,0,0,1)","rgba(171,171,171,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(32, 0, 0, '', 'Ladies Nightwear', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 14, '4', '20.00', '12.00', '', '1434328882', '0', 'women,nightwear', '0', '0', '', 187, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(132,0,179,1)","rgba(33,0,0,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(33, 0, 0, '', 'Women glass', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 15, '1', '50.00', '35.00', '', '1434331644', '0', 'glass,women glass', '0', '0', '', 191, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(107,107,107,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(34, 0, 0, '', 'Ladies Jeans', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 4, '1', '50.00', '30.00', '', '1434331799', '0', 'dress', '0', '0', '', 20, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(200,228,255,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(35, 0, 0, '', 'Ladies Scirt', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 4, '1', '25.00', '12.00', '2', '1434350044', '0', 'skirt,ladies skirt', '0', '0', '', 192, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(255,184,244,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(36, 0, 0, '', 'Ladies Gaon', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 4, '1', '35.00', '20.00', '', '1434350203', '0', 'skirt,dress', '0', '0', '', 126, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '2', 'percent', '["rgba(38,38,38,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(37, 0, 0, '', 'Hair Oil', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 15, '5', '10.00', '5.00', '', '1434350428', '0', 'women hair', 'ok', '0', '', 90, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(15,15,15,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(38, 0, 0, '', 'Ladies Nightwear', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 14, '3', '45.00', '30.00', '', '1434350906', '0', 'women,nightwear', 'ok', '0', '', 185, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(192,156,250,1)","rgba(124,224,237,1)","rgba(255,215,215,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(39, 0, 0, '', 'Red Hat', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 15, '1', '20.00', '10.00', '', '1434350994', '0', 'women,hat,red hat', 'ok', '0', '', 190, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(204,204,204,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(40, 0, 0, '', 'Sunroof Glass', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 15, '0', '100.00', '60.00', '10', '1434351364', '0', 'women glass,glass', 'ok', '0', '', 293, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '5', 'percent', '["rgba(56,56,56,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(58, 0, 0, '', 'Mini Nightwear', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 14, '1', '50.00', '22.00', '', '1434380882', '0', 'women,ladies', 'ok', '0', '', 183, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '2', 'percent', '["rgba(43,43,43,1)","rgba(199,0,12,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(59, 0, 0, '', 'Ladies Nightwear', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 14, '3', '60.00', '35.00', '', '1434381049', '0', 'women,nightwear', 'ok', '0', '', 164, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(3,0,173,1)","rgba(69,69,69,1)","rgba(155,0,250,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(60, 0, 0, '', 'Hp Envy', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 1, '2', '700.00', '550.00', '10', '1434387711', '0', 'hp,laptop', 'ok', '0', '13', 60, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '2', 'percent', '["rgba(204,204,204,1)","rgba(125,125,125,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(61, 0, 0, '', 'Alienware Gamnig', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 1, '2', '900.00', '750.00', '20', '1434387815', '0', 'gaming laptop,gaming pc,alienware', 'ok', '0', '14', 37, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '5', 'percent', '["rgba(113,229,255,1)","rgba(255,49,62,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(62, 0, 0, '', 'Dell Inspiron', 1, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. &nbsp;</span><br></p>', 1, '2', '600.00', '450.00', '10', '1434388149', '0', 'dell,laptop', 'ok', '0', '12', 136, 'pc', '{"name":"false","value":"false"}', 1, NULL, '5', 'percent', '5', 'percent', '["rgba(240,240,240,1)","rgba(61,61,61,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(63, 0, 0, '', 'Samsung Galaxy', 1, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. &nbsp;</span><br></p>', 12, '2', '500.00', '350.00', '', '1434391302', '0', 'samsung,tablet', 'ok', '0', '', 199, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(122,122,122,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(64, 0, 0, '', 'Samsung Galaxy S6', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 17, '4', '500.00', '350.00', '10', '1434392970', '0', 'samsung,smartphone', 'ok', '0', '', 200, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(0,112,4,1)","rgba(255,248,190,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(65, 0, 0, '', 'Nikon', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 13, '2', '2000.00', '1200.00', '20', '1434393757', '0', 'camera,DSLR,nikon,HD photo', 'ok', '0', '15', 199, 'pc', '{"name":"false","value":"false"}', 1, NULL, '15', 'percent', '10', 'percent', '["rgba(54,54,54,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(66, 0, 0, '', 'Lumia 535', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 17, '2', '500.00', '300.00', '10', '1434403357', '0', 'nokia,microsoft,lumia', 'ok', '0', '', 29, 'pc', '{"name":"false","value":"false"}', 1, NULL, '25', 'percent', '5', 'percent', '["rgba(1,148,255,1)","rgba(255,255,255,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(67, 0, 0, '', 'Beats ', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 3, '5', '1000.00', '750.00', '', '1434404376', '0', 'beats,headphone', 'ok', '0', '', 98, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(255,229,179,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(68, 0, 0, '', 'Xperia z', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 17, '2', '500.00', '300.00', '', '1434404735', '0', 'sony,xperia', 'ok', '0', '', 1, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(41,41,41,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(69, 0, 0, '', 'i-phone 6', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 17, '2', '1000.00', '800.00', '10', '1434404933', '0', 'iphone,phone,smartphone', 'ok', '0', '11', 98, 'pc', '{"name":"false","value":"false"}', 1, NULL, '5', 'percent', '5', 'percent', '["rgba(204,204,204,1)","rgba(0,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(70, 0, 0, '', 'i-phone 6 plus', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 17, '2', '900.00', '750.00', '10', '1434454359', '0', 'iphone,iphone 6,smartphone', 'ok', '0', '11', 100, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '5', 'percent', '["rgba(33,33,33,1)","rgba(255,255,255,1)","rgba(255,231,144,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(71, 0, 0, '', 'Ducati 1000', 2, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 11, '2', '2000.00', '1200.00', '120', '1434468268', '0', 'Superbike,racing bike,ducati', 'ok', '0', '9', 20, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '10', 'percent', '["rgba(196,0,0,1)","rgba(0,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(72, 0, 0, '', 'BMW 1200', 2, '<h6 style="margin-top: 0px; margin-bottom: 13px; padding: 0px; border: 0px; display: table-cell; vertical-align: top; width: 824px; word-wrap: break-word; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;<br></h6>', 11, '2', '2500.00', '1800.00', '200', '1434469309', '0', 'BMW,super bike,bike', 'ok', '0', '5', 3, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '7', 'percent', '["rgba(0,0,0,1)","rgba(250,219,58,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(73, 0, 0, '', 'Yamaha R15', 2, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 11, '2', '1500.00', '1100.00', '100', '1434469993', '0', 'bike,yamaha,r15,yamaha R15', 'ok', '0', '8', 44, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '5', 'percent', '["rgba(0,35,217,1)","rgba(0,0,0,1)","rgba(232,5,5,1)","rgba(242,242,242,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(74, 0, 0, '', 'Yamaha R-1', 2, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 11, '2', '2200.00', '1500.00', '200', '1434470074', '0', 'Yamaha,Yamaha R1', 'ok', '0', '8', 44, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '7', 'percent', '["rgba(0,0,0,1)","rgba(255,255,255,1)","rgba(255,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(75, 0, 0, '', 'Honda', 2, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 11, '2', '2000.00', '1500.00', '100', '1434470143', '0', 'Honda', 'ok', '0', '6', 44, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '10', 'percent', '["rgba(255,153,0,1)","rgba(0,0,0,1)","rgba(222,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(76, 0, 0, '', 'Kids wear', 5, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 19, '1', '25.00', '10.00', '', '1434470580', '0', 'kids,dress', 'ok', '0', '', 200, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(208,255,192,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(77, 0, 0, '', 'Kids casual', 5, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. &nbsp;</span><br></p>', 19, '1', '30.00', '18.00', '', '1434470631', '0', 'kids', 'ok', '0', '', 100, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(176,0,0,1)","rgba(192,225,255,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(78, 0, 0, '', 'School Dress', 5, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. &nbsp;</span><br></p>', 19, '1', '100.00', '75.00', '', '1434470742', '0', 'school dress,dress kids', 'ok', '0', '', 100, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(255,255,255,1)","rgba(0,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(80, 0, 0, '', 'Monkey Hat', 5, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 19, '1', '10.00', '5.00', '', '1434471241', '0', 'kids', 'ok', '0', '', 200, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(255,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(81, 0, 0, '', 'Kidz skirt', 5, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 19, '1', '45.00', '30.00', '', '1434473219', '0', 'kids', 'ok', '0', '', 100, '', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(247,242,221,1)","rgba(255,182,248,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(82, 0, 0, '', 'Mini Skirt', 5, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 19, '1', '25.00', '10.00', '', '1434473389', '0', 'kids,baby skirt', 'ok', '0', '', 108, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(215,250,255,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(83, 0, 0, '', 'Casual Dress', 5, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 19, '0', '50.00', '25.00', '', '1434473866', '0', 'kids wear', 'ok', '0', '', 48, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(255,243,243,1)","rgba(186,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(84, 0, 0, '', 'Baby wear', 5, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 19, '1', '50.00', '30.00', '', '1434474195', '0', 'baby wear,kids wear', 'ok', '0', '', 104, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(212,237,255,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(85, 0, 0, '', 'Kids keds', 5, '<span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span>', 20, '1', '60.00', '35.00', '', '1434474575', '0', 'kids shos', 'ok', '0', '', 50, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '5', 'percent', '["rgba(255,255,255,1)","rgba(154,176,255,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(86, 0, 0, '', 'Girl''s shoes', 5, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 20, '1', '20.00', '10.00', '', '1434474693', '0', 'girls shoe,shoe', 'ok', '0', '', 50, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '5', 'percent', '["rgba(255,255,255,1)","rgba(247,157,222,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(87, 0, 0, '', 'Casual shoes', 5, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 20, '1', '50.00', '30.00', '', '1434474971', '0', '', 'ok', '0', '', 4, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(168,61,80,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(88, 0, 0, '', 'Sports shoes', 5, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 20, '1', '80.00', '60.00', '', '1434475064', '0', 'shoes,kids', 'ok', '0', '', 15, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(0,16,163,1)","rgba(71,191,242,1)","rgba(255,233,37,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(89, 0, 0, '', 'Kids accessories', 5, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 19, '1', '25.00', '10.00', '', '1434477111', '0', 'kids', 'ok', '0', '', 153, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(255,255,255,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(90, 0, 0, '', 'Kids Sneakers', 5, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 20, '1', '120.00', '80.00', '', '1434477486', '0', 'kids,sneakers,comfort,shoes', 'ok', '0', '', 14, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(255,255,255,1)","rgba(201,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(91, 0, 0, '', 'Bridal Dress', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 18, '2', '500.00', '300.00', '', '1434477688', '0', 'bridal,bridal dress', 'ok', '0', '', 20, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '5', 'percent', '["rgba(255,255,255,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(92, 0, 0, '', 'Wedding dress', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 18, '1', '400.00', '250.00', '', '1434477888', '0', '', 'ok', '0', '', 3, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '5', 'percent', '["rgba(204,204,204,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(93, 0, 0, '', 'Wedding wear', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 18, '1', '250.00', '100.00', '8', '1434478018', '0', '', 'ok', '0', '', 3, 'pc', '{"name":"false","value":"false"}', 1, NULL, '10', 'percent', '5', 'percent', '["rgba(255,255,255,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(94, 0, 0, '', 'Bride Wear', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 18, '3', '500.00', '250.00', '5', '1434478127', '0', '', 'ok', '0', '', 33, 'pc', '{"name":"false","value":"false"}', 1, NULL, '10', 'percent', '5', 'percent', '["rgba(255,255,255,1)","rgba(214,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(95, 1, 3, '["21"]', 'Wedding Dress', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 18, '1', '500.00', '300.00', '3', '1434478274', 'ok', '', 'ok', '0', '', 0, 'pc', '{"name":"false","value":"false"}', 1, NULL, '10', 'percent', '3', 'percent', '["rgba(255,255,255,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(96, 0, 0, '', 'i-pad 2', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 12, '2', '700.00', '500.00', '20', '1434543996', '0', 'apple,ipad ,ipad 2', 'ok', '0', '11', 20, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '5', 'percent', '["rgba(255,255,255,1)","rgba(248,250,152,1)","rgba(28,27,27,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(97, 0, 0, '', 'Alienware Gaming', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 2, '1', '800.00', '600.00', '100', '1434544767', '0', '', 'ok', '0', '14', 50, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(0,0,0,1)","rgba(227,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(98, 1, 4, '["22"]', 'Lenovo Gaming', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 2, '1', '2000.00', '1500.00', '80', '1434545096', '0', 'gaming pc,game', 'ok', '0', '', 44, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(8,8,8,1)","rgba(0,82,204,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(99, 0, 0, '', 'i-pad mini', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 12, '2', '500.00', '350.00', '20', '1434561266', '0', 'ipad,pad,ipad mini', 'ok', '0', '11', 48, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '10', 'percent', '["rgba(255,212,161,1)","rgba(130,130,130,1)","rgba(255,255,255,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(100, 0, 0, '', 'Black shoes', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 6, '1', '120.00', '75.00', '5', '1434562633', '0', 'show,ladies shoes', 'ok', '0', '', 94, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '2', 'percent', '["rgba(0,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(101, 0, 0, '', 'Wedding shoes', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 6, '2', '150.00', '90.00', '10', '1434563072', '0', 'shoe,wedding shoe', 'ok', '0', '', 49, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '5', 'percent', '["rgba(227,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(102, 0, 0, '', 'Women shoes', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 6, '1', '80.00', '60.00', '5', '1434563166', '0', 'ladies shoes', 'ok', '0', '', 54, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(230,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(103, 0, 0, '', 'Stylish Shoes', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. &nbsp;</span><br></p>', 6, '2', '100.00', '80.00', '10', '1434563274', '0', 'ladies shoes,shoes', 'ok', '0', '', 78, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(255,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(104, 0, 0, '', 'Casual shoes', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. &nbsp;</span><br></p>', 6, '2', '150.00', '100.00', '15', '1434563583', '0', 'ladies shoes,casual shoes', 'ok', '0', '', 99, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(229,191,134,1)","rgba(0,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(105, 1, 5, '["4"]', 'Lamborghini veneno', 2, '<p><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 1.42857143; text-align: justify;">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 21, '2', '20000.00', '18000.00', '400', '1434575898', '0', 'Super car,car,Lamborghini veneno,Lamborghini,veneno', 'ok', '0', '10', 15, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '20', 'percent', '["rgba(87,87,87,1)","rgba(207,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(106, 0, 0, '', 'Audi R8', 2, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. &nbsp;</span><br></p>', 21, '1', '16000.00', '14000.00', '1000', '1434576559', 'ok', 'car,audi', 'ok', '0', '1', 0, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '12', 'percent', '["rgba(255,255,255,1)","rgba(0,0,0,1)","rgba(224,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(107, 0, 0, '', 'BMW M8', 2, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 21, '1', '18000.00', '16000.00', '1500', '1434576757', '0', 'sports car,audi,bmw', 'ok', '0', '5', 0, 'pc', '{"name":"[\\"Speed\\",\\"Engine\\"]","value":"[\\"450MPH\\",\\"6000cc\\"]"}', 1, NULL, '', 'percent', '15', 'percent', '["rgba(255,255,255,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(108, 0, 0, '', 'Audi i-8', 2, '<p><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 1.42857143; text-align: justify;">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 21, '4', '22000.00', '18000.00', '400', '1434578272', '0', 'audi i 8,audi,super car', 'ok', '0', '1', 3, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '15.5254', 'percent', '["rgba(204,204,204,1)","rgba(255,255,255,1)","rgba(25,25,25,1)","rgba(49,218,255,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(109, 0, 0, '', 'Ladies underwear', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 14, '2', '15.00', '8.00', '', '1434658318', '0', 'ladies underwear', 'ok', '0', '', 489, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '5', 'percent', '["rgba(255,215,251,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(110, 0, 0, '', 'Mini skirt', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 4, '1', '100.00', '50.00', '20', '1434658738', '0', '', 'ok', '0', '', 100, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(255,200,200,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(111, 0, 0, '', 'winter coat', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 4, '2', '220.00', '120.00', '5', '1434659328', '0', '', 'ok', '0', '', 38, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '5', 'percent', '["rgba(217,0,0,1)","rgba(51,41,41,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(112, 0, 0, '', 'Ladies T-shirt', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 4, '2', '55.00', '25.00', '5', '1434659416', '0', '', 'ok', '0', '', 492, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '5', 'percent', '["rgba(41,41,41,1)","rgba(255,255,255,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(113, 0, 0, '', 'Silk', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 4, '2', '120.00', '75.00', '', '1434659802', '0', '', 'ok', '0', '', 81, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(144,255,235,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(114, 0, 0, '', 'Casual Dress', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 4, '1', '200.00', '120.00', '5', '1434659860', '0', '', 'ok', '0', '', 64, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '5', 'percent', '["rgba(0,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(115, 0, 0, '', 'Nightwear', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 14, '1', '150.00', '90.00', '5', '1434659990', 'ok', '', 'ok', '0', '', 61, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '2', 'percent', '["rgba(255,207,207,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(116, 1, 4, '["23"]', 'Ladies Nightdress', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 4, '1', '100.00', '60.00', '', '1434660084', '0', '', 'ok', '0', '', 70, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(255,136,136,1)","rgba(46,45,45,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(117, 1, 2, '["1"]', 'Men Perfume', 4, '														<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. &nbsp;</span><br></p>', 8, '1', '1200.00', '1000.00', '100', '1435080539', 'ok', 'men perfume,perfume', 'ok', '0', '', 3, 'pc', '{"name":"false","value":"false"}', 1, NULL, '500', 'amount', '50', 'percent', '["rgba(0,39,138,1)","rgba(250,250,250,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(123, 0, 0, '[]', '3D Mockup', 6, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 25, '1', '0.00', '0.00', '0.00', '1444989604', '0', 'mockup', 'ok', NULL, '', NULL, 'pc', '{"name":"null","value":"null"}', 1, NULL, '', 'percent', '0.00', 'percent', '["rgba(204,204,204,1)"]', '[]', '0', '{"type":"admin","id":"1"}', 'ok', '123_c9d473f735b8433e41ed_product_123_1.jpg', NULL),
(119, 0, 0, '[]', 'Product Box Mockup', 6, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 25, '1', '39.00', '39.00', '0', '1444673552', '0', 'graphics,mockup', 'ok', NULL, '', 0, 'pc', '{"name":"null","value":"null"}', 1, NULL, '0', 'percent', '0', 'percent', '["rgba(119,0,212,1)"]', '[]', '0', '{"type":"admin","id":"1"}', 'ok', '119_413c44bcbe44e486b5b2_banner.zip', 'ok'),
(120, 0, 0, '[]', 'James Bond Spectre', 6, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. &nbsp;</span><br></p>', 26, '1', '10.00', '10.00', '0', '1444772708', 'ok', '', 'ok', NULL, '', 0, 'pc', '{"name":"null","value":"null"}', 1, NULL, '0', 'percent', '0', 'percent', '["rgba(204,204,204,1)"]', '[]', '0', '{"type":"admin","id":"1"}', 'ok', '120_0728a868d798cf5f0ccd_New folder (2).zip', 'ok');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(121, 0, 0, '[]', 'HTML 5 Documentation', 6, '<span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><p><br></p>', 27, '1', '0.00', '0.00', '0.00', '1444773967', '0', 'html,html5,book,pdf', 'ok', NULL, '', 0, 'pc', '{"name":"null","value":"null"}', 1, NULL, '100', 'percent', '0.00', 'percent', '["rgba(204,204,204,1)"]', '[]', '0', '{"type":"admin","id":"1"}', 'ok', '121_ba5615c1817ed8de6329_html5_tutorial.pdf', NULL),
(122, 0, 0, '[]', 'CSS3 Documentation', 6, '<span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', 27, '1', '0.00', '0.00', '0.00', '1444776167', '0', 'css,html,css3', 'ok', NULL, '', 0, 'pc', '{"name":"null","value":"null"}', 1, NULL, '100', 'percent', '0.00', 'percent', '["rgba(204,204,204,1)"]', '[]', '0', '{"type":"admin","id":"1"}', 'ok', '122_24f682a3658c2e6a4cc4_css3-cheat-sheet.pdf', '0'),
(124, 0, 0, '[]', 'Creative Logo', 6, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 25, '1', '0.00', '0.00', '0.00', '1444989671', '0', 'logo', 'ok', NULL, '', NULL, 'pc', '{"name":"null","value":"null"}', 1, NULL, '', 'percent', '0.00', 'percent', '["rgba(204,204,204,1)"]', '[]', '0', '{"type":"admin","id":"1"}', 'ok', '124_824e73a9d9ebe57b338d_product_125_1.jpg', NULL),
(125, 0, 0, '[]', 'Macbook Mockup', 6, '<p><span style="line-height: 17.1429px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.1429px; text-align: justify;">&nbsp;</span><span style="line-height: 17.1429px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 25, '1', '0.00', '0.00', '0.00', '1444989729', '0', 'graphics', 'ok', NULL, '', NULL, 'pc', '{"name":"null","value":"null"}', 1, NULL, '', 'percent', '0.00', 'percent', '["rgba(204,204,204,1)"]', '[]', '0', '{"type":"admin","id":"1"}', 'ok', '125_6950ab5091a10ea8d9f0_product_126_1.jpg', NULL),
(126, 0, 0, '[]', 'Some Thing', 1, '<p><br></p>', 1, '1', '111.00', '111.00', '1', '1457135348', '0', '', 'ok', NULL, '1', 1, '1', '{"name":"null","value":"null"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(204,204,204,1)"]', '[]', '0', '{"type":"admin","id":"1"}', 'no', NULL, 'ok'),
(127, 0, 0, '[]', '2in1 Netzteil Ladekabel Ladeger?t Datenkabel 5V 1A,  und Microusb Kabel, Schwarz', 1, '                                        <h1 class="it-ttl" itemprop="name" id="itemTitle">2in1 Netzteil Ladekabel Ladeger?t Datenkabel</h1><h1 class="it-ttl" itemprop="name" id="itemTitle"><br></h1><h1 class="it-ttl" itemprop="name" id="itemTitle"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Tahoma"><span><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Tahoma"><p align="left"><font color="black"><font face="Arial" size="2">Dieses kompakte Netzteil erlaubt Ihnen zu Hause, im B?ro oder unterwegs schnelle und effiziente Ladevorg?nge. </font></font><font color="black"><font size="2"><span [removed]="" "times="" new="" roman","serif";="" font-size:="" 12pt;="" mso-fareast-font-family:="" roman";="" mso-fareast-language:="" de;"=""></span></font></font></p><font color="black"><font size="2"><font size="2">\r\n<div align="left">\r\n<li><font face="Arial">Netzteil Ladeger?t 230V f?r h?usliche Anwendung </font>\r\n</li><li><font face="Arial">USB Datenkabel als USB Ladekabel verwendbar </font>\r\n</li><li><font face="Arial">USB Datenkabel f?r Datenaustausch </font>\r\n</li><li><font face="Arial">Schonende Schnellladung f?r Ihren Akku durch intelligente Ladeelektronik </font>\r\n</li><li><font face="Arial">?berhitzungs- und ?berladungsschutz </font>\r\n</li><li><font face="Arial">Ist der Ladevorgang beendet, schaltet das Ladeger?t auf Erhaltungsladung um. </font>\r\n</li><li><font face="Arial">Das Ladeger?t entspricht den Normen der Europ?ischen Gemeinschaft <br></font></li></div></font></font></font></font></font></font></span></font></font></font></h1><p><br></p>', 3, '1', '4.49', '1.50', '0', '1457179505', 'ok', 'Ladeger?t, Charger,Chargeuer,Adapter,Adaptor', 'ok', NULL, '1', 1999, '1000', '{"name":"null","value":"null"}', 1, NULL, '', 'percent', '19', 'percent', '["rgba(204,204,204,1)"]', '[]', '0', '{"type":"vendor","id":"11"}', 'no', NULL, 'ok'),
(128, 0, 0, '[]', 'Photo Akku f?r Canon BP-208', 1, '<p [removed]="FONT-FAMILY: Arial; COLOR: black; FONT-SIZE: 10pt"><u>Technische Daten:</u></span></p>\r\n<ul><li>\r\n<div [removed]="FONT-FAMILY: Arial; COLOR: black; FONT-SIZE: 10pt"><strong>Technology: Li-ion</strong></span></div></li></ul>\r\n<p align="left"><font face="Arial" size="2"><u>passend f?r folgende Kameras:</u> </font></p>\r\n<ul><li>\r\n<div align="left"><font face="Arial" size="2"><strong>Canon DC10 / DC20 / DC21 / DC40 / DC50 / DC95 / DC100 / DC210 / DC220 / DC230 / HR10 / MVX1S / MVX450 / MVX460 / Elura 100 </strong></font></div></li></ul>\r\n<p align="left"><font face="Arial" size="2"><u>ersetzt folgende Akkus:</u></font></p>\r\n<ul><li>\r\n<div align="left"><font face="Arial" size="2"><strong>BP-208 / BP-308 / BP-315</strong></font></div></li></ul>', 36, '1', '8.99', '3.00', '0', '1460589338', '0', '', 'ok', NULL, '', 100, 'St?ck', '{"name":"null","value":"null"}', 1, NULL, '', 'percent', '0', 'percent', '["rgba(204,204,204,1)"]', '[]', '0', '{"type":"vendor","id":"12"}', 'no', NULL, NULL),
(132, 0, 0, '', '800', 1, 'test attr option', NULL, NULL, '10.00', '10.00', '0', '1468424699', '', NULL, 'ok', NULL, NULL, NULL, NULL, NULL, 1, NULL, '0', 'percent', '0', 'percent', NULL, NULL, '0', '{''type'':''vendor'',''id'':''0''}', NULL, NULL, NULL),
(131, 0, 0, '', '800', 1, 'test attr option', NULL, NULL, '10.00', '10.00', '0', '1468424630', '', NULL, 'ok', NULL, NULL, NULL, NULL, NULL, 1, NULL, '0', 'percent', '0', 'percent', NULL, NULL, '0', '{''type'':''vendor'',''id'':''0''}', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_comment`
--

CREATE TABLE IF NOT EXISTS `product_comment` (
  `product_comment_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` longtext NOT NULL,
  `ip` longtext NOT NULL,
  `comment_status` varchar(20) DEFAULT NULL,
  `date_added` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_field_group`
--

CREATE TABLE IF NOT EXISTS `product_field_group` (
  `product_field_group_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `group_name` varchar(200) NOT NULL,
  `category_id` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_field_group`
--

INSERT INTO `product_field_group` (`product_field_group_id`, `vendor_id`, `group_name`, `category_id`) VALUES
(2, 9, 'Test Mixers ', '["23","21","16"]'),
(3, 0, 'Q & A', '["24","23","22"]'),
(4, 0, 'Test Group', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE IF NOT EXISTS `product_reviews` (
  `product_review_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `review_title` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` tinyint(4) DEFAULT NULL,
  `posted_date` int(20) DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_reviews`
--

INSERT INTO `product_reviews` (`product_review_id`, `product_id`, `review_title`, `user_id`, `rating`, `posted_date`, `status`) VALUES
(1, 2, 'test', 4, 4, 1465250400, 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `product_setting`
--

CREATE TABLE IF NOT EXISTS `product_setting` (
  `product_setting_id` int(11) NOT NULL,
  `type` longtext,
  `value` longtext
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_setting`
--

INSERT INTO `product_setting` (`product_setting_id`, `type`, `value`) VALUES
(1, 'activate_product_reviews', 'ok'),
(2, 'auto_approve_product_reviews', 'ok'),
(3, 'activate_product_fields', 'ok'),
(4, 'activate_product_fields_compare', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `promo_categories`
--

CREATE TABLE IF NOT EXISTS `promo_categories` (
  `promo_id` int(11) NOT NULL,
  `promo_name` varchar(50) NOT NULL,
  `priority` tinyint(4) NOT NULL,
  `primary_category` int(11) NOT NULL,
  `promo_url` text NOT NULL,
  `selected_products` mediumtext NOT NULL,
  `time_added` datetime NOT NULL,
  `time_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `promo_categories`
--

INSERT INTO `promo_categories` (`promo_id`, `promo_name`, `priority`, `primary_category`, `promo_url`, `selected_products`, `time_added`, `time_modified`, `status`) VALUES
(2, 'Spring Offer', 10, 1, 'https://www.messenger.com/t/shishir.srabon.3', '[1,2,3,4,9,15,17,16]', '2016-06-28 12:01:12', '2016-06-28 11:40:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `recommended_porducts`
--

CREATE TABLE IF NOT EXISTS `recommended_porducts` (
  `rp_id` int(11) NOT NULL,
  `rp_name` varchar(255) NOT NULL,
  `rp_products` text NOT NULL,
  `time_added` datetime NOT NULL,
  `time_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recommended_porducts`
--

INSERT INTO `recommended_porducts` (`rp_id`, `rp_name`, `rp_products`, `time_added`, `time_modified`, `status`) VALUES
(3, 'Spring Offer 111', '[3,5,8,9]', '2016-06-29 20:01:00', '2016-06-29 12:06:00', 1),
(4, 'test item', '[10,2,11,13]', '2016-06-29 20:01:22', '2016-06-29 12:08:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rma_infos`
--

CREATE TABLE IF NOT EXISTS `rma_infos` (
  `id` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `approval` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rma_infos`
--

INSERT INTO `rma_infos` (`id`, `sale_id`, `product_id`, `user_id`, `vendor_id`, `status`, `approval`, `created_at`, `updated_at`) VALUES
(1, 4, 119, 5, 11, 1, 0, '2016-07-04 15:21:30', '2016-07-04 18:12:08');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `permission` varchar(100) DEFAULT NULL,
  `description` longtext
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `name`, `permission`, `description`) VALUES
(1, 'master', '', 'Master Admin. Adds Admin. Provides account roles.'),
(5, 'Product Manager', '["13","17","21","37","41","45","49"]', 'Manages Products'),
(4, 'Accountant', '["9","13","17","21"]', 'Accountancy and Support'),
(6, 'Manager', '["5","13","29","33","37","41","57","63"]', 'Manager of Active Super shop'),
(7, 'Support manager', '["29","65","84"]', 'Ticket Support manager');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE IF NOT EXISTS `sale` (
  `sale_id` int(11) NOT NULL,
  `sale_code` longtext,
  `buyer` longtext,
  `product_details` longtext,
  `shipping_address` longtext,
  `vat` longtext,
  `vat_percent` varchar(10) DEFAULT NULL,
  `shipping` longtext,
  `payment_type` varchar(100) DEFAULT NULL,
  `payment_status` longtext,
  `payment_details` longtext,
  `payment_timestamp` longtext,
  `grand_total` longtext,
  `sale_datetime` longtext,
  `delivary_datetime` longtext,
  `delivery_status` longtext,
  `viewed` longtext,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`sale_id`, `sale_code`, `buyer`, `product_details`, `shipping_address`, `vat`, `vat_percent`, `shipping`, `payment_type`, `payment_status`, `payment_details`, `payment_timestamp`, `grand_total`, `sale_datetime`, `delivary_datetime`, `delivery_status`, `viewed`, `created_at`, `updated_at`) VALUES
(4, '2015104', '1', '{"07e1cd7dca89a1678042477183b7ac3f":{"id":"119","qty":1,"option":"{\\"color\\":{\\"title\\":\\"Color\\",\\"value\\":\\"\\"}}","price":39,"name":"Product-Box-Mockup","shipping":"0","tax":0,"image":"http:\\/\\/localhost\\/activesupershop\\/v1.3\\/uploads\\/product_image\\/product_119_1_thumb.jpg","coupon":"","rowid":"07e1cd7dca89a1678042477183b7ac3f","subtotal":39},"eb160de1de89d9058fcb0b968dbbbd68":{"id":"117","qty":1,"option":"{\\"color\\":{\\"title\\":\\"Color\\",\\"value\\":\\"\\"}}","price":700,"name":"Men-Perfume","shipping":"100","tax":600,"image":"http:\\/\\/localhost\\/activesupershop\\/v1.3\\/uploads\\/product_image\\/product_117_1_thumb.jpg","coupon":"","rowid":"eb160de1de89d9058fcb0b968dbbbd68","subtotal":700}}', '{"firstname":"Mr. Customer","email":"customer@shop.com","lastname":"Boy","phone":"(88) 090 0938","address1":"Dhaka","address2":"Bangladesh","city":"Dhaka","zip":"1212","langlat":"(12.44819535767321, 76.66826244013669)","payment_type":"cash_on_delivery"}', '600', '', '100', 'cash_on_delivery', '[{"admin":"","status":"paid"}]', '', NULL, '1439', '1444743436', '', '[{"admin":"","status":"delivered","delivery_time":""}]', 'ok', '2016-07-19 12:01:31', '2016-07-19 12:01:31'),
(2, '2015102', '1', '{"735b90b4568125ed6c3f678819b6e058":{"id":"67","qty":1,"option":"{\\"color\\":{\\"title\\":\\"Color\\",\\"value\\":\\"rgba(255,229,179,1)\\"}}","price":1000,"name":"Beats","shipping":0,"tax":0,"image":"http:\\/\\/localhost:10\\/shop13\\/uploads\\/product_image\\/product_67_1_thumb.jpg","coupon":"","rowid":"735b90b4568125ed6c3f678819b6e058","subtotal":1000},"5ef059938ba799aaa845e1c2e8a762bd":{"id":"118","qty":1,"option":"{\\"color\\":{\\"title\\":\\"Color\\",\\"value\\":\\"rgba(204,204,204,1)\\"}}","price":50,"name":"digital-2","shipping":"100","tax":10,"image":"http:\\/\\/localhost:10\\/shop13\\/uploads\\/product_image\\/product_118_1_thumb.jpg","coupon":"","rowid":"5ef059938ba799aaa845e1c2e8a762bd","subtotal":50}}', '{"firstname":"Mr. Customer","email":"customer@shop.com","lastname":"Boy","phone":"(88) 090 0938","address1":"Dhaka","address2":"Bangladesh","city":"Dhaka","zip":"1212","langlat":"(12.44819535767321, 76.66826244013669)","payment_type":"cash_on_delivery"}', '10', '', '100', 'cash_on_delivery', '[{"admin":"","status":"paid"}]', '', NULL, '1160', '1444344245', '', '[{"admin":"","status":"pending","delivery_time":""}]', 'ok', '2016-07-19 12:01:31', '2016-07-19 12:38:01'),
(3, '2015103', '1', '{"07e1cd7dca89a1678042477183b7ac3f":{"id":"119","qty":1,"option":"{\\"color\\":{\\"title\\":\\"Color\\",\\"value\\":\\"rgba(119,0,212,1)\\"}}","price":39,"name":"Product-Box-Mockup","shipping":"0","tax":0,"image":"http:\\/\\/localhost\\/activesupershop\\/v1.3\\/uploads\\/product_image\\/product_119_1_thumb.jpg","coupon":"","rowid":"07e1cd7dca89a1678042477183b7ac3f","subtotal":39}}', '{"firstname":"Mr. Customer","email":"customer@shop.com","lastname":"Boy","phone":"(88) 090 0938","address1":"Dhaka","address2":"Bangladesh","city":"Dhaka","zip":"1212","langlat":"(12.44819535767321, 76.66826244013669)","payment_type":"cash_on_delivery"}', '0', '', '0', 'cash_on_delivery', '[{"admin":"","status":"paid"}]', '', NULL, '39', '1444673766', '', '[{"admin":"","status":"delivered","delivery_time":""}]', 'ok', '2016-07-19 12:01:31', '2016-07-19 12:01:31'),
(5, '2015105', '1', '{"5ef059938ba799aaa845e1c2e8a762bd":{"id":"118","qty":1,"option":"{\\"color\\":{\\"title\\":\\"Color\\",\\"value\\":\\"\\"}}","price":50,"name":"digital-2","shipping":"100","tax":10,"image":"http:\\/\\/localhost\\/activesupershop\\/v1.3\\/uploads\\/product_image\\/product_118_1_thumb.jpg","coupon":"","rowid":"5ef059938ba799aaa845e1c2e8a762bd","subtotal":50},"da4fb5c6e93e74d3df8527599fa62642":{"id":"120","qty":1,"option":"{\\"color\\":{\\"title\\":\\"Color\\",\\"value\\":\\"rgba(204,204,204,1)\\"}}","price":10,"name":"James-Bond-Spectre","shipping":"0","tax":0,"image":"http:\\/\\/localhost\\/activesupershop\\/v1.3\\/uploads\\/product_image\\/product_120_1_thumb.jpg","coupon":"","rowid":"da4fb5c6e93e74d3df8527599fa62642","subtotal":10}}', '{"firstname":"Mr. Customer","email":"customer@shop.com","lastname":"Boy","phone":"(88) 090 0938","address1":"Dhaka","address2":"Bangladesh","city":"Dhaka","zip":"1212","langlat":"(12.44819535767321, 76.66826244013669)","payment_type":"cash_on_delivery"}', '10', '', '100', 'cash_on_delivery', '[{"admin":"","status":"paid"}]', '', NULL, '170', '1444772995', '', '[{"admin":"","status":"delivered","delivery_time":""}]', 'ok', '2016-07-19 12:01:31', '2016-07-19 12:01:31'),
(6, '2015106', '1', '{"4c56ff4ce4aaf9573aa5dff913df997a":{"id":"121","qty":1,"option":"{\\"color\\":{\\"title\\":\\"Color\\",\\"value\\":\\"rgba(204,204,204,1)\\"}}","price":0,"name":"HTML-5-Documentation","shipping":"0.00","tax":0,"image":"http:\\/\\/localhost\\/activesupershop\\/v1.3\\/uploads\\/product_image\\/product_121_1_thumb.jpg","coupon":"","rowid":"4c56ff4ce4aaf9573aa5dff913df997a","subtotal":0}}', '{"firstname":"Mr. Customer","email":"customer@shop.com","lastname":"Boy","phone":"(88) 090 0938","address1":"Dhaka","address2":"Bangladesh","city":"Dhaka","zip":"1212","langlat":"(12.44819535767321, 76.66826244013669)","payment_type":"cash_on_delivery"}', '0', '', '0', 'cash_on_delivery', '[{"admin":"","status":"paid"}]', '', NULL, '0', '1444774847', '', '[{"admin":"","status":"delivered","delivery_time":""}]', 'ok', '2016-07-19 12:01:31', '2016-07-19 12:01:31'),
(7, '2015107', '1', '{"a0a080f42e6f13b3a2df133f073095dd":{"id":"122","qty":1,"option":"{\\"color\\":{\\"title\\":\\"Color\\",\\"value\\":\\"\\"}}","price":0,"name":"CSS3-Documentation","shipping":"0.00","tax":0,"image":"http:\\/\\/localhost\\/activesupershop\\/v1.3\\/uploads\\/product_image\\/product_122_1_thumb.jpg","coupon":"","rowid":"a0a080f42e6f13b3a2df133f073095dd","subtotal":0},"4c56ff4ce4aaf9573aa5dff913df997a":{"id":"121","qty":1,"option":"{\\"color\\":{\\"title\\":\\"Color\\",\\"value\\":\\"\\"}}","price":0,"name":"HTML-5-Documentation","shipping":"0.00","tax":0,"image":"http:\\/\\/localhost\\/activesupershop\\/v1.3\\/uploads\\/product_image\\/product_121_1_thumb.jpg","coupon":"","rowid":"4c56ff4ce4aaf9573aa5dff913df997a","subtotal":0}}', '{"firstname":"Mr. Customer","email":"customer@shop.com","lastname":"Boy","phone":"(88) 090 0938","address1":"Dhaka","address2":"Bangladesh","city":"Dhaka","zip":"1212","langlat":"(12.44819535767321, 76.66826244013669)","payment_type":"cash_on_delivery"}', '0', '', '0', 'cash_on_delivery', '[{"admin":"","status":"paid"}]', '', NULL, '0', '1444776296', '', '[{"admin":"","status":"delivered","delivery_time":""}]', 'ok', '2016-07-19 12:01:31', '2016-07-19 12:01:31'),
(10, '20160410', '3', '{"da4fb5c6e93e74d3df8527599fa62642":{"id":"120","qty":1,"option":"{\\"color\\":{\\"title\\":\\"Color\\",\\"value\\":\\"rgba(204,204,204,1)\\"}}","price":10,"name":"James-Bond-Spectre","shipping":0,"tax":0,"image":"http:\\/\\/www.ebuymazon.com\\/uploads\\/product_image\\/product_120_1_thumb.jpg","coupon":"","rowid":"da4fb5c6e93e74d3df8527599fa62642","subtotal":10}}', '{"firstname":"iqbalhossan@gmail.com","email":"iqbalhossan@gmail.com","lastname":"Hossan","phone":"004917686201694","address1":"burg","address2":"fff","city":"dortmund","zip":"44145","langlat":"(51.5135872, 7.465298100000041)","payment_type":"cash_on_delivery"}', '0', '', '0', 'cash_on_delivery', '[{"admin":"","status":"due"}]', '', NULL, '10', '1460543035', '', '[{"admin":"","status":"pending","delivery_time":""}]', 'ok', '2016-07-19 12:01:31', '2016-07-19 12:45:12'),
(11, '20160411', '3', '{"7647966b7343c29048673252e490f736":{"id":"89","qty":1,"option":"{\\"color\\":{\\"title\\":\\"Color\\",\\"value\\":\\"rgba(255,255,255,1)\\"}}","price":25,"name":"Kids-accessories","shipping":0,"tax":0,"image":"http:\\/\\/www.ebuymazon.com\\/uploads\\/product_image\\/product_89_1_thumb.jpg","coupon":"","rowid":"7647966b7343c29048673252e490f736","subtotal":25}}', '{"firstname":"iqbalhossan@gmail.com","email":"iqbalhossan@gmail.com","lastname":"Hossan","phone":"004917686201694","address1":"burg","address2":"fff","city":"dortmund","zip":"44145","langlat":"(51.5135872, 7.465298100000041)","payment_type":"cash_on_delivery"}', '0', '', '0', 'cash_on_delivery', '[{"admin":"","status":"due"}]', '', NULL, '25', '1460567731', '', '[{"admin":"","status":"pending","delivery_time":""}]', 'ok', '2016-07-19 12:01:31', '2016-07-19 12:01:31');

-- --------------------------------------------------------

--
-- Table structure for table `sale_price`
--

CREATE TABLE IF NOT EXISTS `sale_price` (
  `sp_id` int(11) NOT NULL,
  `sp_vendor` int(11) DEFAULT NULL,
  `sp_discount` float NOT NULL,
  `discount_unit` tinyint(4) NOT NULL COMMENT '1 = percentage, 2= Euro, 3 = doller',
  `sp_cats` mediumtext NOT NULL,
  `sp_start_date` datetime NOT NULL,
  `sp_end_date` datetime NOT NULL,
  `time_added` datetime NOT NULL,
  `time_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sale_price`
--

INSERT INTO `sale_price` (`sp_id`, `sp_vendor`, `sp_discount`, `discount_unit`, `sp_cats`, `sp_start_date`, `sp_end_date`, `time_added`, `time_modified`, `status`) VALUES
(1, NULL, 0, 0, 'null', '2016-07-01 00:00:00', '2016-07-31 00:00:00', '2016-07-03 00:00:00', '2016-07-03 14:47:35', 1),
(2, NULL, 100, 0, 'null', '2016-07-01 00:00:00', '2016-07-31 00:00:00', '2016-07-03 00:00:00', '2016-07-03 14:48:02', 1),
(3, NULL, 0, 0, 'null', '2016-04-01 00:00:00', '2017-01-31 00:00:00', '2016-07-03 00:00:00', '2016-07-03 14:48:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sent_email_archive`
--

CREATE TABLE IF NOT EXISTS `sent_email_archive` (
  `sent_email_id` int(11) NOT NULL,
  `email` longtext NOT NULL,
  `email_type` longtext NOT NULL,
  `subject` longtext NOT NULL,
  `message` longtext NOT NULL,
  `sent_datetime` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sent_email_archive`
--

INSERT INTO `sent_email_archive` (`sent_email_id`, `email`, `email_type`, `subject`, `message`, `sent_datetime`) VALUES
(1, 'abc@gmailcom', 'newsletter', 'test', 'test', '1444834552');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_statuses`
--

CREATE TABLE IF NOT EXISTS `shipping_statuses` (
  `shipping_status_id` int(11) NOT NULL,
  `shipping_status_title` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_statuses`
--

INSERT INTO `shipping_statuses` (`shipping_status_id`, `shipping_status_title`) VALUES
(1, 'New'),
(2, 'Shipped'),
(3, 'Processing ');

-- --------------------------------------------------------

--
-- Table structure for table `site_maintenance`
--

CREATE TABLE IF NOT EXISTS `site_maintenance` (
  `setting_id` int(11) NOT NULL,
  `setting_name` varchar(50) DEFAULT NULL,
  `message` varchar(256) DEFAULT NULL,
  `only_access_ip` varchar(256) DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `vendor` tinyint(4) NOT NULL DEFAULT '0',
  `front` tinyint(1) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site_maintenance`
--

INSERT INTO `site_maintenance` (`setting_id`, `setting_name`, `message`, `only_access_ip`, `admin`, `vendor`, `front`, `status`) VALUES
(1, 'setting1', ' <p>Sorry for the inconvenience but we?re performing some maintenance at the moment. If you need to you can always <a href="mailto:#">contact us</a>, otherwise we?ll be back online shortly!</p>         <p>? The Team</p>', NULL, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(11) NOT NULL,
  `elements` longtext,
  `status` longtext,
  `title` longtext,
  `style` varchar(20) DEFAULT NULL,
  `serial` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `elements`, `status`, `title`, `style`, `serial`) VALUES
(1, '{"images":["ase"],"texts":[{"name":"text_1","text":"WELCOME TO","color":"rgba(255,255,255,1)","background":"rgba(196,4,189,1)"},{"name":"text_2","text":"YOUR SHOP NAME","color":"rgba(255,255,255,1)","background":"rgba(141,0,176,1)"}]}', 'ok', 'Welcome', '2', 2),
(2, '{"images":[],"texts":[{"name":"text_1","text":"WELCOME","color":"rgba(255,255,255,1)","background":"rgba(0,0,0,0)"},{"name":"text_2","text":"YOUR SHOP NAME","color":"rgba(255,255,255,1)","background":"rgba(0,0,0,0)"},{"name":"text_3","text":"SHOP TITLE","color":"rgba(255,255,255,1)","background":"rgba(0,0,0,0)"}]}', 'ok', 'Welcome 2', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider_style`
--

CREATE TABLE IF NOT EXISTS `slider_style` (
  `slider_style_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `value` longtext
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_style`
--

INSERT INTO `slider_style` (`slider_style_id`, `name`, `value`) VALUES
(1, 'WELCOME TYPE 1', '{\r\n   "full_slide_style":"data-ls=\\"slidedelay:6500;transition2d:all;transition3d:15;\\"",\r\n   "background":"bg",\r\n   "images":[\r\n\r\n   ],\r\n   "texts":[\r\n      {\r\n         "element":"h1",\r\n         "show_name":"WELCOME",\r\n         "name":"text_1",\r\n         "style":"top:30%; left:50%; text-shadow: 0px 0px 20px white;  font-weight: 300; font-size:50px;",\r\n         "data_ls":"offsetxin:0; durationin:2500; offsetxout:0; durationout:2500; showuntil:1;",\r\n         "color":"#ffffff",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h1",\r\n         "show_name":"YOUR SHOP NAME",\r\n         "name":"text_2",\r\n         "style":"top:50%; left:50%; text-shadow: 0px 0px 20px white;  font-weight: 300; font-size:100px;  white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; durationin:2500; delayin:500; offsetxout:0; durationout:2500; showuntil:1;",\r\n         "color":"#ffffff",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h1",\r\n         "show_name":"SHOP TITLE",\r\n         "name":"text_3",\r\n         "style":"top:70%; left:50%; text-shadow: 0px 0px 20px white;  font-weight: 300; font-size:40px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; durationin:2500; delayin:1200; offsetxout:0; durationout:2500; showuntil:1;",\r\n         "color":"#ffffff",\r\n         "background":"rgba(0,0,0,0)"\r\n      }\r\n   ]\r\n}'),
(2, 'WELCOME TYPE 2', '{\r\n   "full_slide_style":"data-ls=\\"slidedelay:4500;transition2d:24,25,27,28,34,35,37,38,110,113;\\"",\r\n   "background":"bg_apple",\r\n   "images":[\r\n      {\r\n         "show_name":"Image 1",\r\n         "name":"ase",\r\n         "style":"top:20px; left:50%;width:220px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; offsetyin:top; durationin:4600; easingin:easeOutQuad; fadein:false; rotatein:-10; offsetxout:0; durationout:1500;"\r\n      }\r\n   ],\r\n   "texts":[\r\n      {\r\n         "element":"h5",\r\n         "show_name":"WELCOME TO",\r\n         "name":"text_1",\r\n         "style":"top:260px; left:50%; text-align: center;  font-weight: 300; width:300px; height:60px; font-size:30px; line-height:60px; border-radius:5px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; scalexin:0; scaleyin:0; offsetxout:0; offsetyout:top; durationout:750; durationin:1000; fadeout:false;",\r\n         "color":"#ffffff",\r\n         "background":"#C404BD"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"YOUR SHOP NAME",\r\n         "name":"text_2",\r\n         "style":"top:340px; left:50%; text-align: center; font-weight: 300; width:500px; height:100px; font-size:40px; line-height:100px; border-radius:5px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; scalexin:0; scaleyin:0; offsetxout:0; offsetyout:bottom; durationin:1000; durationout:750; fadeout:false;",\r\n         "color":"#ffffff",\r\n         "background":"#8D00B0"\r\n      }\r\n   ]\r\n}'),
(3, 'SLIDER TYPE 1', '{\r\n   "full_slide_style":"data-ls=\\"slidedelay:7000;transition2d:76,77,78,79;\\"",\r\n   "background":"bg_apple",\r\n   "images":[\r\n      {\r\n         "show_name":"Product Image 1",\r\n         "name":"circle_1",\r\n         "style":"top:35%; left:60%;width:200px; white-space: nowrap; ",\r\n         "data_ls":"offsetxin:0; offsetyin:top; durationin:750; delayin:1500; easingin:easeOutQuart; fadein:false; offsetxout:right; durationout:1000; showuntil:1; easingout:easeInQuart; fadeout:false; "\r\n      },\r\n      {\r\n         "show_name":"Product Image 2",\r\n         "name":"circle_2",\r\n         "style":"top:35%; left:60%;width:200px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; offsetyin:top; durationin:750; delayin:3000; easingin:easeOutQuart; fadein:false; offsetxout:right; durationout:1000; showuntil:1; easingout:easeInQuart; fadeout:false; "\r\n      },\r\n      {\r\n         "show_name":"Product Image 3",\r\n         "name":"circle_3",\r\n         "style":"top:35%; left:60%;width:200px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; offsetyin:top; durationin:750; delayin:4500; easingin:easeOutQuart; fadein:false; offsetxout:right; durationout:1000; easingout:easeInQuart; fadeout:false; "\r\n      }\r\n   ],\r\n   "texts":[\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_1",\r\n         "style":"top:105px; left:30px; text-align: center; font-weight: 300; width:30px; height:30px; font-size:30px; line-height:30px; border-radius:100px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; durationin:750; easingin:easeOutQuint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5;",\r\n         "color":"#ffffff",\r\n         "background":"#C404BD",\r\n         "other":"fixed"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 1",\r\n         "name":"product_feature_1",\r\n         "style":"top:100px; left:85px; font-weight: 300; font-size:25px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:left; easingin:easeOutBack; fadein:false; scalexin:0.1; scaleyin:0.1; offsetxout:left; durationout:750; fadeout:false; scalexout:0.1; scaleyout:0.1;",\r\n         "color":"#000",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_2",\r\n         "style":"top:155px; left:30px; font-weight: 300; text-align: center; width:30px; height:30px; font-size:30px; line-height:30PX; border-radius:100px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; durationin:750; delayin:500; easingin:easeOutQuint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#C404BD",\r\n         "other":"fixed"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 2",\r\n         "name":"product_feature_2",\r\n         "style":"top:150px; left:85px; font-weight: 300; font-size:25px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:left; delayin:500; easingin:easeOutBack; fadein:false; scalexin:0.1; scaleyin:0.1; offsetxout:left; durationout:750; fadeout:false; scalexout:0.1; scaleyout:0.1;",\r\n         "color":"#000",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_3",\r\n         "style":"top:205px; left:30px; font-weight: 300; text-align: center; width:30px; height:30px; font-size:30px; line-height:30PX; border-radius:100px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; durationin:750; delayin:1000; easingin:easeOutQuint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#C404BD",\r\n         "other":"fixed"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 3",\r\n         "name":"product_feature_3",\r\n         "style":"top:200px; left:85px;  font-weight: 300; font-size:25px; white-space: nowrap; ",\r\n         "data_ls":"offsetxin:left; delayin:1000; easingin:easeOutBack; fadein:false; scalexin:0.1; scaleyin:0.1; offsetxout:left; durationout:750; fadeout:false; scalexout:0.1; scaleyout:0.1;",\r\n         "color":"#000",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_4",\r\n         "style":"top:255px; left:30px; font-weight: 300; text-align: center; width:30px; height:30px; font-size:30px; line-height:30PX;  border-radius:100px; white-space: nowrap; ",\r\n         "data_ls":"offsetxin:0; durationin:750; delayin:1500; easingin:easeOutQuint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5;",\r\n         "color":"#ffffff",\r\n         "background":"#C404BD",\r\n         "other":"fixed"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 4",\r\n         "name":"product_feature_4",\r\n         "style":"top:250px; left:85px;  font-weight: 300; font-size:25px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:left; delayin:1500; easingin:easeOutBack; fadein:false; scalexin:0.1; scaleyin:0.1; offsetxout:left; durationout:750; fadeout:false; scalexout:0.1; scaleyout:0.1;",\r\n         "color":"#000",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_5",\r\n         "style":"top:305px; left:30px; font-weight: 300; text-align: center; width:30px; height:30px; font-size:30px; line-height:30PX; border-radius:100px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; durationin:750; delayin:2000; easingin:easeOutQuint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#C404BD",\r\n         "other":"fixed"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 5",\r\n         "name":"product_feature_5",\r\n         "style":"top:300px; left:85px;  font-weight: 300; font-size:25px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:left; delayin:2000; easingin:easeOutBack; fadein:false; scalexin:0.1; scaleyin:0.1; offsetxout:left; durationout:750; fadeout:false; scalexout:0.1; scaleyout:0.1;",\r\n         "color":"#000",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT TITLE 1",\r\n         "name":"product_title_1",\r\n         "style":"top:65%; left:60%; font-weight: 300; font-size:30px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; durationin:450; delayin:1750; easingin:easeOutQuart; scalexin:0; scaleyin:0; offsetxout:0; durationout:1000; showuntil:51; easingout:easeInQuart; scalexout:3; scaleyout:3;",\r\n         "color":"#000",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT TITLE 2",\r\n         "name":"product_title_2",\r\n         "style":"top:65%; left:60%; font-weight: 300; font-size:30px; white-space: nowrap; ",\r\n         "data_ls":"offsetxin:0; durationin:450; delayin:3250; easingin:easeOutQuart; scalexin:0; scaleyin:0; offsetxout:0; durationout:1000; showuntil:51; easingout:easeInQuart; scalexout:3; scaleyout:3;",\r\n         "color":"#000",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT TITLE 3",\r\n         "name":"product_title_3",\r\n         "style":"top:65%; left:60%; font-weight: 300; font-size:30px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; durationin:450; delayin:4750; easingin:easeOutQuart; scalexin:0; scaleyin:0; offsetxout:0; durationout:1000; easingout:easeInQuart; scalexout:3; scaleyout:3;",\r\n         "color":"#000",\r\n         "background":"rgba(0,0,0,0)"\r\n      }\r\n   ]\r\n}'),
(4, 'SLIDER TYPE 2', '{\r\n   "full_slide_style":"data-ls=\\"slidedelay:4500;transition2d:105,106;\\"",\r\n   "background":"bg_apple",\r\n   "images":[\r\n      {\r\n         "style":"top:100px;left:80px; white-space:nowrap; width:220px;",\r\n         "data_ls":"offsetxin:left;durationin:1500; delayin:1400; fadein:false; offsetxout:left; durationout:1000; fadeout:false; ",\r\n         "name":"semi_long_1",\r\n         "show_name":"PRODUCT IMAGE 1"\r\n      },\r\n      {\r\n         "style":"top:100px;left:180px; white-space:nowrap;width:220px; ",\r\n         "data_ls":"offsetxin:left;durationin:1500; delayin:1200; fadein:false; offsetxout:left; durationout:1000; fadeout:false; ",\r\n         "name":"semi_long_2",\r\n         "show_name":"PRODUCT IMAGE 2"\r\n      },\r\n      {\r\n         "style":"top:100px;left:280px; white-space:nowrap; width:220px;",\r\n         "data_ls":"offsetxin:left;durationin:1500; delayin:1000; fadein:false; offsetxout:left; durationout:1000; fadeout:false; ",\r\n         "name":"semi_long_3",\r\n         "show_name":"PRODUCT IMAGE 3"\r\n      }\r\n   ],\r\n   "texts":[\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT TITLE",\r\n         "name":"product_title",\r\n         "style":"top:20px;left:700px; font-weight:300; font-size:40px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:1000; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#000",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 1",\r\n         "name":"product_feature_1",\r\n         "style":"top:100px;left:761px; font-weight:300; font-size:30px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;delayin:800; easingin:easeoutquint; scalexin:0.8; scaleyin:0.8; offsetxout:0; durationout:750; scalexout:0.8; scaleyout:0.8; ",\r\n         "color":"#8d00b0",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 2",\r\n         "name":"product_feature_2",\r\n         "style":"top:150px;left:761px; font-weight:300; font-size:30px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;delayin:1300; easingin:easeoutquint; scalexin:0.8; scaleyin:0.8; offsetxout:0; durationout:750; scalexout:0.8; scaleyout:0.8; ",\r\n         "color":"#8d00b0",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURe 3",\r\n         "name":"product_feature_3",\r\n         "style":"top:200px;left:761px; font-weight:300; font-size:30px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;delayin:1800; easingin:easeoutquint; scalexin:0.8; scaleyin:0.8; offsetxout:0; durationout:750; scalexout:0.8; scaleyout:0.8; ",\r\n         "color":"#8d00b0",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 4",\r\n         "name":"product_feature_4",\r\n         "style":"top:250px;left:761px; font-weight:300; font-size:30px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;delayin:2300; easingin:easeoutquint; scalexin:0.8; scaleyin:0.8; offsetxout:0; durationout:750; scalexout:0.8; scaleyout:0.8; ",\r\n         "color":"#8d00b0",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 5",\r\n         "name":"product_feature_5",\r\n         "style":"top:300px;left:761px; font-weight:300; font-size:30px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;delayin:2800; easingin:easeoutquint; scalexin:0.8; scaleyin:0.8; offsetxout:0; durationout:750; scalexout:0.8; scaleyout:0.8; ",\r\n         "color":"#8d00b0",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 6",\r\n         "name":"product_feature_6",\r\n         "style":"top:350px;left:761px; font-weight:300; font-size:30px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;delayin:3300; easingin:easeoutquint; scalexin:0.8; scaleyin:0.8; offsetxout:0; durationout:750; scalexout:0.8; scaleyout:0.8; ",\r\n         "color":"#8d00b0",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_1",\r\n         "style":"top:107px;left:710px; font-weight:300; text-align:center; width:30px; height:30px; font-size:30px; line-height:30px; border-radius:100px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:750; delayin:500; easingin:easeoutquint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#c404bd"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_2",\r\n         "style":"top:157px;left:710px; font-weight:300; text-align:center; width:30px; height:30px; font-size:30px; line-height:30px; border-radius:100px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:750; delayin:1000; easingin:easeoutquint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#c404bd"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_3",\r\n         "style":"top:207px;left:710px; font-weight:300; text-align:center; width:30px; height:30px; font-size:30px; line-height:30px; border-radius:100px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:750; delayin:1500; easingin:easeoutquint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#c404bd"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_4",\r\n         "style":"top:257px;left:710px; font-weight:300; text-align:center; width:30px; height:30px; font-size:30px; line-height:30px; border-radius:100px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:750; delayin:2000; easingin:easeoutquint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#c404bd"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_5",\r\n         "style":"top:307px;left:710px; font-weight:300; text-align:center; width:30px; height:30px; font-size:30px; line-height:30px; border-radius:100px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:750; delayin:2500; easingin:easeoutquint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#c404bd"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_6",\r\n         "style":"top:357px;left:710px; font-weight:300; text-align:center; width:30px; height:30px; font-size:30px; line-height:30px; border-radius:100px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:750; delayin:3000; easingin:easeoutquint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#c404bd"\r\n      }\r\n   ]\r\n}'),
(5, 'SLIDER TYPE 3', '{\r\n   "full_slide_style":"data-ls=\\"slidedelay:7500;transition2d:105,106;\\"",\r\n   "background":"bg_apple",\r\n   "images":[\r\n      {\r\n         "style":"top:100px;left:580px;width:220px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:right;durationin:1500; delayin:1400; fadein:false; offsetxout:left; durationout:1000; fadeout:false; ",\r\n         "name":"semi_long_1",\r\n         "show_name":"PRODUCT IMAGE 1"\r\n      },\r\n      {\r\n         "style":"top:100px;left:680px;width:220px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:right;durationin:1500; delayin:1200; fadein:false; offsetxout:left; durationout:1000; fadeout:false; ",\r\n         "name":"semi_long_2",\r\n         "show_name":"PRODUCT IMAGE 2"\r\n      },\r\n      {\r\n         "style":"top:100px;left:780px;width:220px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:right;durationin:1500; delayin:1000; fadein:false; offsetxout:left; durationout:1000; fadeout:false; ",\r\n         "name":"semi_long_3",\r\n         "show_name":"PRODUCT IMAGE 3"\r\n      }\r\n   ],\r\n   "texts":[\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT TITLE",\r\n         "name":"product_title",\r\n         "style":"top:20px;left:80px; font-weight:300; font-size:40px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:1000; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#000",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_1",\r\n         "style":"top:107px;left:71px; font-weight:300; text-align:center; width:30px; height:30px; font-size:30px; line-height:30px; border-radius:100px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:750; delayin:500; easingin:easeoutquint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#c404bd"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 1",\r\n         "name":"product_feature_1",\r\n         "style":"top:100px;left:116px; font-weight:300; font-size:30px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;delayin:800; easingin:easeoutquint; scalexin:0.8; scaleyin:0.8; offsetxout:0; durationout:750; scalexout:0.8; scaleyout:0.8; ",\r\n         "color":"#8d00b0",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_2",\r\n         "style":"top:157px;left:71px; font-weight:300; text-align:center; width:30px; height:30px; font-size:30px; line-height:30px; border-radius:100px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:750; delayin:1000; easingin:easeoutquint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#c404bd"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 2",\r\n         "name":"product_feature_2",\r\n         "style":"top:150px;left:116px; font-weight:300; font-size:30px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;delayin:1300; easingin:easeoutquint; scalexin:0.8; scaleyin:0.8; offsetxout:0; durationout:750; scalexout:0.8; scaleyout:0.8; ",\r\n         "color":"#8d00b0",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_3",\r\n         "style":"top:207px;left:71px; font-weight:300; text-align:center; width:30px; height:30px; font-size:30px; line-height:30px; border-radius:100px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:750; delayin:1500; easingin:easeoutquint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#c404bd"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 3",\r\n         "name":"product_feature_3",\r\n         "style":"top:200px;left:116px; font-weight:300; font-size:30px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;delayin:1800; easingin:easeoutquint; scalexin:0.8; scaleyin:0.8; offsetxout:0; durationout:750; scalexout:0.8; scaleyout:0.8; ",\r\n         "color":"#8d00b0",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_4",\r\n         "style":"top:257px;left:71px; font-weight:300; text-align:center; width:30px; height:30px; font-size:30px; line-height:30px; border-radius:100px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:750; delayin:2000; easingin:easeoutquint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#c404bd"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 4",\r\n         "name":"product_feature_4",\r\n         "style":"top:250px;left:116px; font-weight:300; font-size:30px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;delayin:2300; easingin:easeoutquint; scalexin:0.8; scaleyin:0.8; offsetxout:0; durationout:750; scalexout:0.8; scaleyout:0.8; ",\r\n         "color":"#8d00b0",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_5",\r\n         "style":"top:307px;left:71px; font-weight:300; text-align:center; width:30px; height:30px; font-size:30px; line-height:30px; border-radius:100px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:750; delayin:2500; easingin:easeoutquint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#c404bd"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 5",\r\n         "name":"product_feature_5",\r\n         "style":"top:300px;left:116px; font-weight:300; font-size:30px; white-space:nowrap;",\r\n         "data_ls":"offsetxin:0;delayin:2800; easingin:easeoutquint; scalexin:0.8; scaleyin:0.8; offsetxout:0; durationout:750; scalexout:0.8; scaleyout:0.8; ",\r\n         "color":"#8d00b0",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_6",\r\n         "style":"top:357px;left:71px; font-weight:300; text-align:center; width:30px; height:30px; font-size:30px; line-height:30px; border-radius:100px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:750; delayin:3000; easingin:easeoutquint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#c404bd"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 6",\r\n         "name":"product_feature_6",\r\n         "style":"top:350px;left:116px; font-weight:300; font-size:30px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;delayin:3300; easingin:easeoutquint; scalexin:0.8; scaleyin:0.8; offsetxout:0; durationout:750; scalexout:0.8; scaleyout:0.8; ",\r\n         "color":"#8d00b0",\r\n         "background":"rgba(0,0,0,0)"\r\n      }\r\n   ]\r\n}'),
(6, 'SLIDER TYPE 4', '{\r\n   "full_slide_style":"data-ls=\\"slidedelay:7500;transition2d:105,106;\\"",\r\n   "background":"bg_apple",\r\n   "images":[\r\n      {\r\n         "name":"long_1",\r\n         "style":"top:60px;left:578px;width:200px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:4000; delayin:1500; easingin:easeinoutquad; scalexin:1.1; scaleyin:1.1; offsetxout:0; durationout:1000; scalexout:0.9; scaleyout:0.9; ",\r\n         "show_name":"PRODUCT IMAGE 1"\r\n      },\r\n      {\r\n         "name":"semi_long_1",\r\n         "style":"top:170px;left:800px;width:200px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:4000; delayin:1500; easingin:easeinoutquad; scalexin:1.1; scaleyin:1.1; offsetxout:0; durationout:1000; scalexout:0.9; scaleyout:0.9; ",\r\n         "show_name":"PRODUCT IMAGE 2"\r\n      },\r\n      {\r\n         "name":"square_1",\r\n         "style":"top:265px;left:1020px;width:200px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:4000; delayin:1500; easingin:easeinoutquad; scalexin:1.1; scaleyin:1.1; offsetxout:0; durationout:1000; scalexout:0.9; scaleyout:0.9; ",\r\n         "show_name":"PRODUCT IMAGE 3"\r\n      }\r\n   ],\r\n   "texts":[\r\n      {\r\n         "element":"h1",\r\n         "show_name":"PRODUCT TITLE",\r\n         "name":"product_title",\r\n         "style":"top:20px;left:50px; font-size:50px; font-weight:300; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:3000; delayin:500; easingin:easeoutelastic; rotatexin:90; transformoriginin:50; bottom; 0; offsetxout:0; rotatexout:90; transformoriginout:50; ",\r\n         "color":"#000",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"div",\r\n         "show_name":"PRODUCT FEATURE 1",\r\n         "name":"product_feature_1",\r\n         "style":"top:100px;left:50px; text-align:justify; width:500px; font-size:20px; ",\r\n         "data_ls":"offsetxin:-150;durationin:2000; delayin:500; easingin:easeinoutquart; rotateyin:-40; offsetxout:-150; durationout:1000; rotateyout:-40; ",\r\n         "color":"#470467",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"div",\r\n         "show_name":"PRODUCT FEATURE 2",\r\n         "name":"product_feature_2",\r\n         "style":"top:150px;left:50px; text-align:justify; width:500px; font-size:20px; ",\r\n         "data_ls":"offsetxin:-150;durationin:2000; delayin:1000; easingin:easeinoutquart; rotateyin:-40; offsetxout:-150; durationout:1000; rotateyout:-40; ",\r\n         "color":"#470467",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"div",\r\n         "show_name":"PRODUCT FEATURE 3",\r\n         "name":"product_feature_3",\r\n         "style":"top:200px;left:50px; text-align:justify; width:500px; font-size:20px; ",\r\n         "data_ls":"offsetxin:-150;durationin:2000; delayin:1500; easingin:easeinoutquart; rotateyin:-40; offsetxout:-150; durationout:1000; rotateyout:-40; ",\r\n         "color":"#470467",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"div",\r\n         "show_name":"PRODUCT FEATURE 4",\r\n         "name":"product_feature_4",\r\n         "style":"top:250px;left:50px; text-align:justify; width:500px; font-size:20px; ",\r\n         "data_ls":"offsetxin:-150;durationin:2000; delayin:2000; easingin:easeinoutquart; rotateyin:-40; offsetxout:-150; durationout:1000; rotateyout:-40; ",\r\n         "color":"#470467",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"div",\r\n         "show_name":"PRODUCT FEATURE 5",\r\n         "name":"product_feature_5",\r\n         "style":"top:300px;left:50px; text-align:justify; width:500px; font-size:20px; ",\r\n         "data_ls":"offsetxin:-150;durationin:2000; delayin:2500; easingin:easeinoutquart; rotateyin:-40; offsetxout:-150; durationout:1000; rotateyout:-40; ",\r\n         "color":"#470467",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"div",\r\n         "show_name":"PRODUCT FEATURE 6",\r\n         "name":"product_feature_6",\r\n         "style":"top:350px;left:50px; text-align:justify; width:500px; font-size:20px; ",\r\n         "data_ls":"offsetxin:-150;durationin:2000; delayin:3000; easingin:easeinoutquart; rotateyin:-40; offsetxout:-150; durationout:1000; rotateyout:-40; ",\r\n         "color":"#470467",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"div",\r\n         "show_name":"PRODUCT FEATURE 7",\r\n         "name":"product_feature_7",\r\n         "style":"top:400px;left:50px; text-align:justify; width:500px; font-size:20px; ",\r\n         "data_ls":"offsetxin:-150;durationin:2000; delayin:3500; easingin:easeinoutquart; rotateyin:-40; offsetxout:-150; durationout:1000; rotateyout:-40; ",\r\n         "color":"#470467",\r\n         "background":"rgba(0,0,0,0)"\r\n      }\r\n   ]\r\n}'),
(7, 'SLIDER TYPE 5', '{\r\n   "full_slide_style":"data-ls=\\"slidedelay:7500;transition2d:73,102;\\"",\r\n   "background":"bg_apple",\r\n   "images":[\r\n      {\r\n         "name":"long_1",\r\n         "style":"top:50%; left:50%;width:200px; white-space:nowrap;",\r\n         "data_ls" : "",\r\n         "show_name":"IMAGE"\r\n      }\r\n   ],\r\n   "texts":[\r\n      {\r\n         "element":"h6",\r\n         "show_name":"PRICE",\r\n         "name":"price",\r\n         "style":"top:55%; left:39%; durationin:500; delayin:600; fadein:false; rotatein:30; durationout:500; fadeout:false; slidedirection:fade; slideoutdirection:fade; scalein:0.1; scaleout:0.1; font-weight:300; box-shadow:0px 2px 8px -2px black; padding-top:5px; padding-right:20px; padding-bottom:5px; padding-left:20px; font-size:30px; color:#ffffff; background:#B816B2; border-radius:5px; white-space:nowrap;",\r\n         "data_ls" : "",\r\n         "color":"#ffffff",\r\n         "background":"#b816b2"\r\n      },\r\n      {\r\n         "element":"h6",\r\n         "show_name":"PRODUCT TITLE",\r\n         "name":"product_title",\r\n         "style":"top:45%; left:36%; durationin:500; delayin:500; fadein:false; rotatein:-30; durationout:500; fadeout:false; slidedirection:fade; slideoutdirection:fade; scalein:0.1;scaleout:0.1; font-weight:300; box-shadow:0px 2px 8px -2px black; padding-top:5px; padding-right:20px; padding-bottom:5px; padding-left:20px; font-size:30px; color:#ffffff; background:#760093;border-radius:5px; white-space:nowrap;",\r\n         "data_ls" : "",\r\n         "color":"#ffffff",\r\n         "background":"#760093"\r\n      }\r\n   ]\r\n}'),
(8, 'SLIDER TYPE 6', '{\r\n   "full_slide_style":"data-ls=\\"slidedelay:7500;transition2d:73,102;\\"",\r\n   "background":"bg_apple",\r\n   "images":[\r\n      {\r\n         "style":"top:100px;left:100px; width:250px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:3000; delayin:1500; rotateyin:90; transformoriginin:left; 0; offsetxout:0; durationout:750; rotateyout:90; transformoriginout:left; ",\r\n         "name":"semi_long_1",\r\n         "show_name":"PRODUCT IMAGE 1"\r\n      },\r\n      {\r\n         "style":"top:100px;left:400px; width:250px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:3000; delayin:1500; rotateyin:-90; transformoriginin:right; 0; offsetxout:0; durationout:750; rotateyout:90; transformoriginout:right; ",\r\n         "name":"semi_long_2",\r\n         "show_name":"PRODUCT IMAGE 2"\r\n      }\r\n   ],\r\n   "texts":[\r\n      {\r\n         "element":"h1",\r\n         "show_name":"PRODUCT TITLE",\r\n         "name":"product_title",\r\n         "style":"font-family:Roboto;top:25px; left:192px; font-weight:100; text-align:center; width:340px; font-size:40px; border-radius:5px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:2500; delayin:2000; easingin:easeoutelastic; rotatexin:90; transformoriginin:50; bottom; 0; offsetxout:0; rotateout:-90; transformoriginout:left; ",\r\n         "color":"#34009d",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":" DUMMY TEXT 1",\r\n         "name":"dummy_text_1",\r\n         "style":"top:50px;left:800px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; border-radius:4px; white-space:nowrap; ",\r\n         "data_ls":"durationin:1500;delayin:2300; rotatein:20; rotatexin:30; scalexin:1.5; scaleyin:1.5; transformoriginin:left; 0; durationout:750; rotateout:20; rotatexout:-30; scalexout:0; scaleyout:0; transformoriginout:left; ",\r\n         "color":"#ffffff",\r\n         "background":"#740091"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 2",\r\n         "name":"dummy_text_2",\r\n         "style":"top:90px;left:800px; font-weight:300; font-size:24px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:1500; delayin:2700; rotateyin:90; skewxin:60; transformoriginin:25; 0; offsetxout:100; durationout:750; skewxout:60; ",\r\n         "color":"#ff00f6",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 3",\r\n         "name":"dummy_text_3",\r\n         "style":"top:150px;left:800px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; border-radius:4px; white-space:nowrap; ",\r\n         "data_ls":"durationin:1500;delayin:3000; rotatein:20; rotatexin:30; scalexin:1.5; scaleyin:1.5; transformoriginin:left; 0; durationout:750; rotateout:20; rotatexout:-30; scalexout:0; scaleyout:0; transformoriginout:left; ",\r\n         "color":"#ffffff",\r\n         "background":"#740091"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 4",\r\n         "name":"dummy_text_4",\r\n         "style":"top:190px;left:800px; font-weight:300; font-size:24px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:1500; delayin:3400; rotateyin:90; skewxin:60; transformoriginin:25; 0; offsetxout:100; durationout:750; skewxout:60; ",\r\n         "color":"#ff00f6",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 5",\r\n         "name":"dummy_text_5",\r\n         "style":"top:250px;left:800px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; border-radius:4px; white-space:nowrap; ",\r\n         "data_ls":"durationin:1500;delayin:3700; rotatein:20; rotatexin:30; scalexin:1.5; scaleyin:1.5; transformoriginin:left; 0; durationout:750; rotateout:20; rotatexout:-30; scalexout:0; scaleyout:0; transformoriginout:left; ",\r\n         "color":"#ffffff",\r\n         "background":"#740091"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 6",\r\n         "name":"dummy_text_6",\r\n         "style":"top:290px;left:799px; font-weight:300; font-size:24px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:1500; delayin:4100; rotateyin:90; skewxin:60; transformoriginin:25; 0; offsetxout:100; durationout:750; skewxout:60; ",\r\n         "color":"#ff00f6",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 7",\r\n         "name":"dummy_text_7",\r\n         "style":"top:360px;left:800px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; border-radius:4px; white-space:nowrap; ",\r\n         "data_ls":"durationin:1500;delayin:4400; rotatein:20; rotatexin:30; scalexin:1.5; scaleyin:1.5; transformoriginin:left; 0; durationout:750; rotateout:20; rotatexout:-30; scalexout:0; scaleyout:0; transformoriginout:left; ",\r\n         "color":"#ffffff",\r\n         "background":"#740091"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 8",\r\n         "name":"dummy_text_8",\r\n         "style":"top:400px;left:799px; font-weight:300; font-size:24px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:1500; delayin:4800; rotateyin:90; skewxin:60; transformoriginin:25; 0; offsetxout:100; durationout:750; skewxout:60; ",\r\n         "color":"#ff00f6",\r\n         "background":"rgba(0,0,0,0)"\r\n      }\r\n   ]\r\n}'),
(9, 'SLIDER TYPE 7', '{\r\n   "full_slide_style":"data-ls=\\"slidedelay:7500;transition2d:73,102;\\"",\r\n   "background":"bg_apple",\r\n   "images":[\r\n      {\r\n         "style":"top:50px; left:50%;width:278px; white-space:nowrap;",\r\n         "data_ls":"durationin:1500;scalexin:0.8; scaleyin:0.8; scalexout:0.8; scaleyout:0.8; ",\r\n         "name":"semi_long_1",\r\n         "show_name":"IMAGE"\r\n      }\r\n   ],\r\n   "texts":[\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 1",\r\n         "name":"dummy_text_1",\r\n         "style":"top:80px;left:20px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;durationin:2000; delayin:1000; offsetxout:-50; durationout:1000; ",\r\n         "color":"#fd2931",\r\n         "background":"rgba(255,255,255,0.85)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 2",\r\n         "name":"dummy_text_2",\r\n         "style":"top:140px;left:20px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;durationin:2000; delayin:1500; offsetxout:-50; durationout:1000; ",\r\n         "color":"#fd2931",\r\n         "background":"rgba(255,255,255,0.85)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 3",\r\n         "name":"dummy_text_3",\r\n         "style":"top:200px;left:20px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;durationin:2000; delayin:2000; offsetxout:-50; durationout:1000; ",\r\n         "color":"#fd2931",\r\n         "background":"rgba(255,255,255,0.85)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 4",\r\n         "name":"dummy_text_4",\r\n         "style":"top:260px;left:20px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;durationin:2000; delayin:2500; offsetxout:-50; durationout:1000; ",\r\n         "color":"#fd2931",\r\n         "background":"rgba(255,255,255,0.85)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 5",\r\n         "name":"dummy_text_5",\r\n         "style":"top:320px;left:20px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;durationin:2000; delayin:3000; offsetxout:-50; durationout:1000; ",\r\n         "color":"#fd2931",\r\n         "background":"rgba(255,255,255,0.85)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 6",\r\n         "name":"dummy_text_6",\r\n         "style":"top:380px;left:20px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;durationin:2000; delayin:3500; offsetxout:-50; durationout:1000; ",\r\n         "color":"#fd2931",\r\n         "background":"rgba(255,255,255,0.85)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"PRODUCT TITLE",\r\n         "name":"product_title",\r\n         "style":"top:50%;left:900px; font-weight:100; text-align:right; padding:15px; font-size:40px; line-height:37px; font-family:roboto; border-radius:4px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:2500; delayin:3250; easingin:easeoutelastic; rotatexin:90; transformoriginin:50; top; 0; offsetxout:0; durationout:1000; rotatexout:90; transformoriginout:50; bottom; ",\r\n         "color":"#fff",\r\n         "background":"#11008b"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 6",\r\n         "name":"dummy_text_6",\r\n         "style":"top:505px;left:983px; font-family:; flower; font-size:30px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;delayin:3500; skewxin:60; scalexin:1.5; offsetxout:-50; durationout:1000; skewxout:60; scalexout:1.5; ",\r\n         "color":"#d9482b",\r\n         "background":"rgba(0,0,0,0)"\r\n      }\r\n   ]\r\n}'),
(10, 'SLIDER TYPE 8', '{\r\n   "full_slide_style":"data-ls=\\"slidedelay:7000;transition2d:76,77,78,79;\\"",\r\n   "background":"bg_apple",\r\n   "images":[\r\n      {\r\n         "style":"top:120px; left:42%;width:180px; white-space:nowrap; ",\r\n         "data_ls":"durationin:1500;scalexin:0.8; scaleyin:0.8; scalexout:0.8; scaleyout:0.8; ",\r\n         "name":"semi_long_1",\r\n         "show_name":"PRODUCT IMAGE 1"\r\n      },\r\n      {\r\n         "style":"top:120px; left:58%;width:180px; white-space:nowrap; ",\r\n         "data_ls":"durationin:1500;scalexin:0.8; scaleyin:0.8; scalexout:0.8; scaleyout:0.8; ",\r\n         "name":"semi_long_2",\r\n         "show_name":"PRODUCT IMAGE 2"\r\n      },\r\n      {\r\n         "style":"top:50px; left:50%;width:200px; white-space:nowrap; ",\r\n         "data_ls":"durationin:1500;scalexin:0.8; scaleyin:0.8; scalexout:0.8; scaleyout:0.8; ",\r\n         "name":"long_1",\r\n         "show_name":"PRODUCT IMAGE 3"\r\n      }\r\n   ],\r\n   "texts":[\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 1",\r\n         "name":"dummy_text_1",\r\n         "style":"top:80px;left:20px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;durationin:2000; delayin:1000; offsetxout:-50; durationout:1000; ",\r\n         "color":"#fd2931",\r\n         "background":"rgba(255,255,255,0.85)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 2",\r\n         "name":"dummy_text_2",\r\n         "style":"top:140px;left:20px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;durationin:2000; delayin:1500; offsetxout:-50; durationout:1000; ",\r\n         "color":"#fd2931",\r\n         "background":"rgba(255,255,255,0.85)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 3",\r\n         "name":"dummy_text_3",\r\n         "style":"top:200px;left:20px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;durationin:2000; delayin:2000; offsetxout:-50; durationout:1000; ",\r\n         "color":"#fd2931",\r\n         "background":"rgba(255,255,255,0.85)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 4",\r\n         "name":"dummy_text_4",\r\n         "style":"top:260px;left:20px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;durationin:2000; delayin:2500; offsetxout:-50; durationout:1000; ",\r\n         "color":"#fd2931",\r\n         "background":"rgba(255,255,255,.85)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 5",\r\n         "name":"dummy_text_5",\r\n         "style":"top:320px;left:20px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;durationin:2000; delayin:3000; offsetxout:-50; durationout:1000; ",\r\n         "color":"#fd2931",\r\n         "background":"rgba(255,255,255,0.85)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 6",\r\n         "name":"dummy_text_6",\r\n         "style":"top:380px;left:20px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;durationin:2000; delayin:3500; offsetxout:-50; durationout:1000; ",\r\n         "color":"#fd2931",\r\n         "background":"rgba(255,255,255,0.85)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"PRODUCT TITLE",\r\n         "name":"product_title",\r\n         "style":"top:50%;left:900px; font-weight:100; text-align:right; padding:15px; font-size:40px; line-height:37px; font-family:roboto; border-radius:4px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:2500; delayin:3250; easingin:easeoutelastic; rotatexin:90; transformoriginin:50; top; 0; offsetxout:0; durationout:1000; rotatexout:90; transformoriginout:50; bottom; ",\r\n         "color":"#fff",\r\n         "background":"#11008b"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 7",\r\n         "name":"dummy_text_7",\r\n         "style":"top:505px;left:983px; font-family:; flower; font-size:30px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;delayin:3500; skewxin:60; scalexin:1.5; offsetxout:-50; durationout:1000; skewxout:60; scalexout:1.5; ",\r\n         "color":"#000",\r\n         "background":"rgba(0,0,0,0)"\r\n      }\r\n   ]\r\n}');
INSERT INTO `slider_style` (`slider_style_id`, `name`, `value`) VALUES
(11, 'WELCOME TYPE 3', '{\r\n   "full_slide_style":"data-ls=\\"slidedelay:8000;transition2d:4;\\"",\r\n   "background":"bg_apple",\r\n   "images":[\r\n      {\r\n         "show_name":"Image 1",\r\n         "name":"ase",\r\n         "style":"top:45%; left:45%;width:200px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; durationin:1500; delayin:3000; rotateyin:90; transformoriginin:right 50% 0; offsetxout:0; durationout:1500; showuntil:1000; rotateyout:-90; transformoriginout:right 50% 0;"\r\n      }\r\n   ],\r\n   "texts":[\r\n      {\r\n         "element":"p",\r\n         "show_name":"Introducing",\r\n         "name":"text_1",\r\n         "style":"top:40%; left:50%; font-weight: 300; font-size:30px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:50; durationin:750; easingin:easeOutBack; skewxin:-50; offsetxout:-50; durationout:600; showuntil:1500; easingout:easeInBack; skewxout:50;",\r\n         "color":"#C505BD",\r\n         "background":"rgba(1,1,1,0)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"Your Shop Name",\r\n         "name":"text_2",\r\n         "style":"top:50%; left:50%; font-weight: 300; font-size:50px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:-100; durationin:750; delayin:250; easingin:easeOutBack; skewxin:-50; offsetxout:100; durationout:600; showuntil:1500; easingout:easeInBack; skewxout:50;",\r\n         "color":"#8D00AF",\r\n         "background":"rgba(1,1,1,0)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"your Shop Slogan",\r\n         "name":"text_3",\r\n         "style":"top:47%; left:690px; font-weight: 300; font-size:35px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; durationin:1500; delayin:3000; rotateyin:90; transformoriginin:left 50% 0; offsetxout:0; durationout:1500; showuntil:1500; rotateyout:-90; transformoriginout:left 50% 0;",\r\n         "color":"#8D00AF",\r\n         "background":"rgba(1,1,1,0)"\r\n      }\r\n   ]\r\n}'),
(12, 'SLIDER TYPE 9', '{\r\n   "full_slide_style":"data-ls=\\"slidedelay:9500;transition2d:5;timeshift:-3000;\\"",\r\n   "background":"bg_apple",\r\n   "images":[\r\n      {\r\n         "show_name":"Image 1",\r\n         "name":"semi_long_1",\r\n         "style":"top:120px; left:300px; width:200px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; offsetyin:100; durationin:2000; delayin:1000; offsetxout:-100; offsetyout:50; durationout:2000; showuntil:2010;"\r\n      },\r\n      {\r\n         "show_name":"Image 2",\r\n         "name":"semi_long_2",\r\n         "style":"top:120px; left:200px; width:200px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; offsetyin:100; durationin:2000; delayin:2000; offsetxout:-100; offsetyout:50; durationout:2000; showuntil:2010;"\r\n      },\r\n      {\r\n         "show_name":"Image 3",\r\n         "name":"semi_long_3",\r\n         "style":"top:120px; left:100px; width:200px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; offsetyin:100; durationin:2000; delayin:3000; offsetxout:-100; offsetyout:50; durationout:2000; showuntil:2010;"\r\n      }\r\n   ],\r\n   "texts":[\r\n      {\r\n         "element":"h1",\r\n         "show_name":"PRODUCT TITLE",\r\n         "name":"text_1",\r\n         "style":"top:60px; left:800px; font-weight: 300; font-size:50px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:50; durationin:3000; rotateyin:60; transformoriginin:right 50% 0; offsetxout:-50; durationout:3000; rotateyout:-60; transformoriginout:left 50% 0;",\r\n         "color":"#730091",\r\n         "background":"rgba(1,1,1,0)"\r\n      },\r\n      {\r\n         "element":"h2",\r\n         "show_name":"BIG SALE",\r\n         "name":"text_2",\r\n         "style":"top:120px; left:801px; font-weight: 300; font-size:30px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:-50; durationin:3000; delayin:500; rotateyin:-60; transformoriginin:left 50% 0; offsetxout:50; durationout:3000; rotateyout:60; transformoriginout:right 50% 0;",\r\n         "color":"#FA6BF3",\r\n         "background":"rgba(1,1,1,0)"\r\n      },\r\n      {\r\n         "element":"h3",\r\n         "show_name":"$99",\r\n         "name":"text_3",\r\n         "style":"top:200px; left:850px; font-weight: 300; font-size:120px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; durationin:4000; delayin:2000; rotateyin:450; transformoriginin:left 50% 0; offsetxout:0; durationout:500; easingout:easeInBack; rotateyout:90; transformoriginout:left 50% 0;",\r\n         "color":"#730091",\r\n         "background":"rgba(1,1,1,0)"\r\n      }\r\n   ]\r\n}');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE IF NOT EXISTS `slides` (
  `slides_id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`slides_id`, `name`) VALUES
(1, 'ddd'),
(2, ''),
(3, ''),
(4, '');

-- --------------------------------------------------------

--
-- Table structure for table `sms_notification_settings`
--

CREATE TABLE IF NOT EXISTS `sms_notification_settings` (
  `sms_notification_settings_id` int(11) NOT NULL,
  `type` longtext,
  `value` longtext
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_notification_settings`
--

INSERT INTO `sms_notification_settings` (`sms_notification_settings_id`, `type`, `value`) VALUES
(1, 'sms_on_order_received_admin', 'no'),
(2, 'sms_on_order_completed_customer', 'ok'),
(3, 'sms_on_manual_order_received_customer', 'ok'),
(4, 'sms_on_due_notification_customer', 'ok'),
(5, 'admin_mobile_number ', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `sms_services`
--

CREATE TABLE IF NOT EXISTS `sms_services` (
  `sms_services_id` int(11) NOT NULL,
  `sms_gateway` longtext,
  `sms_provider_name` longtext NOT NULL,
  `url_to_gateway` longtext,
  `sms_protocol` longtext,
  `user_name` longtext,
  `password` longtext,
  `api_id` longtext,
  `active` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_services`
--

INSERT INTO `sms_services` (`sms_services_id`, `sms_gateway`, `sms_provider_name`, `url_to_gateway`, `sms_protocol`, `user_name`, `password`, `api_id`, `active`) VALUES
(1, 'clickatell', 'Clickatell SMS ', '  ', 'HTTPS', 'root', 'c58b598a9d17e028ab0f2bde395daa3cf772a8d9', '', 0),
(2, 'smskaufen ', ' 	SMSKaufen ', NULL, NULL, NULL, NULL, NULL, 1),
(3, 'cardboardfish ', 'CardBoardFish SMS', '', 'HTTPS', 'root', '7e6cb7261098dfbde11fd7f0921a1898c1a4f957', '', 0),
(4, NULL, 'Deactivate All Gateways ', NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE IF NOT EXISTS `social_links` (
  `social_links_id` int(11) NOT NULL,
  `type` longtext COLLATE utf8_unicode_ci,
  `value` longtext COLLATE utf8_unicode_ci
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`social_links_id`, `type`, `value`) VALUES
(1, 'facebook', 'http://facebook.com/'),
(2, 'google-plus', 'http://google.com/'),
(3, 'twitter', 'http://twitter.com/'),
(4, 'skype', 'active-classified'),
(5, 'pinterest', 'http://pinterest.com/'),
(6, 'youtube', 'http://youtube.com/');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `stock_id` int(11) NOT NULL,
  `type` longtext,
  `category` longtext,
  `sub_category` longtext,
  `product` longtext,
  `quantity` longtext,
  `rate` longtext,
  `total` longtext,
  `reason_note` longtext,
  `datetime` longtext,
  `sale_id` varchar(30) DEFAULT NULL,
  `added_by` varchar(50) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `type`, `category`, `sub_category`, `product`, `quantity`, `rate`, `total`, `reason_note`, `datetime`, `sale_id`, `added_by`) VALUES
(1, 'add', '1', '1', '1', '101', '80', '8080', '', '1436646573', '', ''),
(2, 'add', '1', '2', '2', '100', '80', '8000', '', '1436646648', '', ''),
(3, 'add', '2', '4', '3', '100', '80', '8000', '', '1436646728', '', ''),
(4, 'add', '2', '4', '4', '100', '80', '8000', '', '1436646794', '', ''),
(5, 'add', '1', '1', '9', '100', '100', '10000', '', '1438969394', '', ''),
(69, 'destroy', '1', '3', '67', '1', NULL, '0', 'sale', '1444344245', '2', NULL),
(70, 'destroy', '1', '3', '118', '1', NULL, '0', 'sale', '1444344245', '2', NULL),
(71, 'destroy', '6', '25', '119', '1', NULL, '0', 'sale', '1444673766', '3', NULL),
(72, 'destroy', '6', '25', '119', '1', NULL, '0', 'sale', '1444743436', '4', NULL),
(73, 'destroy', '4', '8', '117', '1', NULL, '0', 'sale', '1444743436', '4', NULL),
(74, 'destroy', '1', '3', '118', '1', NULL, '0', 'sale', '1444772995', '5', NULL),
(75, 'destroy', '6', '26', '120', '1', NULL, '0', 'sale', '1444772995', '5', NULL),
(76, 'destroy', '6', '27', '121', '1', NULL, '0', 'sale', '1444774847', '6', NULL),
(77, 'destroy', '6', '27', '122', '1', NULL, '0', 'sale', '1444776296', '7', NULL),
(78, 'destroy', '6', '27', '121', '1', NULL, '0', 'sale', '1444776296', '7', NULL),
(79, 'add', '1', '1', '126', '1', '111.00', '111', '', '1457135369', NULL, NULL),
(85, 'destroy', '6', '26', '120', '1', NULL, '0', 'sale', '1460543035', '10', NULL),
(86, 'destroy', '5', '19', '89', '1', NULL, '0', 'sale', '1460567731', '11', NULL),
(87, 'add', '1', '36', '128', '100', '3.00', '300', '', '1460589428', NULL, '{"type":"vendor","id":"12"}'),
(84, 'add', '1', '3', '127', '1000', '1.50', '1500', '', '1457179671', NULL, '{"type":"vendor","id":"11"}');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE IF NOT EXISTS `subscribe` (
  `subscribe_id` int(11) NOT NULL,
  `email` varchar(600) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`subscribe_id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'MehediDracula@gmail.com', '2016-07-19 11:45:04', '2016-07-19 11:45:04');

-- --------------------------------------------------------

--
-- Table structure for table `subscribed_products`
--

CREATE TABLE IF NOT EXISTS `subscribed_products` (
  `subscribed_list_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pricing type` enum('Normal','Monthly','Weekly','Quartely','Half Yearly','Yearly') NOT NULL,
  `payment_status` enum('expired','awaiting','paid') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribed_products`
--

INSERT INTO `subscribed_products` (`subscribed_list_id`, `product_id`, `order_id`, `user_id`, `pricing type`, `payment_status`) VALUES
(1, 2, 4, 2, 'Monthly', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `sub_category_id` int(11) NOT NULL,
  `sub_category_name` longtext,
  `category` int(11) DEFAULT NULL,
  `meta_title` varchar(256) NOT NULL,
  `meta_keywords` varchar(500) NOT NULL,
  `meta_description` longtext,
  `sub_category_icon` varchar(100) NOT NULL,
  `is_active` int(1) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_category_id`, `sub_category_name`, `category`, `meta_title`, `meta_keywords`, `meta_description`, `sub_category_icon`, `is_active`, `category_id`) VALUES
(3, 'test', 2, 'sss', 'ss', 'sssssssss', 'sub_category_test.png', 1, 0),
(4, 'Sub-category Name xxx', 2, ' Meta Title ', ' Meta Keywords ', ' Meta Description ', 'sub_category_Sub-category Name xxx.png', 1, 0),
(5, 'reza', 5, 'fff', 'ff', 'ddd', 'sub_category_reza.png', 1, 0),
(6, 'sss  xxxx', 1, 'ss', 'ss', 'ss', 'sub_category_sss  xxxx.png', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE IF NOT EXISTS `system_settings` (
  `system_settings_id` int(11) NOT NULL,
  `type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `value` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`system_settings_id`, `type`, `value`) VALUES
(1, 'pt_search', 'ok'),
(2, 'pt_search_vendor_products', 'ok'),
(3, 'pt_search_admin_products', 'ok'),
(4, 'pt_search_tamplate_products', 'ok'),
(5, 'username', ''),
(6, 'password', '23e339ebfc6e9ddb24ec830eab2ac719d666192a'),
(7, 'signature', ''),
(8, 'url_to_gateway', ''),
(9, 'paypal_test_mode', 'ok'),
(10, 'street_match', 'ok'),
(11, 'zip_match', 'ok'),
(12, 'vendor_signup_address_verify', 'ok'),
(13, 'product_condition', 'ok'),
(14, 'product_returns_and_refunds', 'ok'),
(15, 'product_tags_option', 'ok'),
(16, 'product_expire_date_option', 'ok'),
(17, 'product_available_date_option', 'no'),
(18, 'order_attachments_active', 'ok'),
(19, 'order_attachments_file_types', ''),
(20, 'order_attachments_max_file_size', ''),
(21, 'security_mode', 'complete'),
(22, 'security_cookies', 'CartUserCookie'),
(23, 'security_user_timeout', '3600'),
(24, 'security_account_blocking', 'no'),
(25, 'security_account_blocking_attempts', '3'),
(26, 'security_account_blocking_hours', '24'),
(27, 'display_clean_payment_page', 'no'),
(28, 'admin_time_out', '60'),
(29, 'user_ip', 'yes'),
(30, 'user_email_verification', 'yes'),
(31, 'seller_available', 'ok'),
(32, 'seller_count', '8'),
(33, 'seller_period', '2 Months'),
(34, 'seller_view', 'Thumb'),
(35, 'customer_avai', 'ok'),
(36, 'customer_count', '6'),
(37, 'customer_view', 'Text'),
(38, 'proxy_available', 'no'),
(39, 'proxy_type', 'scocks5'),
(40, 'proxy_address', 'test'),
(41, 'proxy_port', '3128'),
(42, 'proxy_authorization', 'no'),
(43, 'proxy_username', 'admin'),
(44, 'proxy_password', '9f79ad38ba370baf5ffb07fb2a34c5ea7fd53596'),
(45, 'gift_card_active', 'ok'),
(46, 'message_length', '225'),
(47, 'print_invoice_height', '950'),
(48, 'invoice_company_name', 'no'),
(49, 'invoice_company_address', 'no'),
(50, 'invoice_company_phone', 'no'),
(51, 'invoice_company_fax', 'no'),
(52, 'invoice_company_email', 'ok'),
(53, 'invoice_company_logo_alignment', 'left'),
(54, 'invoice_order_date', 'no'),
(55, 'invoice_mpn', 'no'),
(56, 'invoice_date', 'no'),
(57, 'invoice_gtin', 'no'),
(58, 'products_active', 'no'),
(59, 'download_limit', '10'),
(60, 'time_limit', '1');

-- --------------------------------------------------------

--
-- Table structure for table `templates_email`
--

CREATE TABLE IF NOT EXISTS `templates_email` (
  `template_email_id` int(11) NOT NULL,
  `tempalte_name` longtext NOT NULL,
  `subject` longtext NOT NULL,
  `message` longtext NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `templates_email`
--

INSERT INTO `templates_email` (`template_email_id`, `tempalte_name`, `subject`, `message`, `status`) VALUES
(1, 'Account Register', '{store} - Thank you so much for registering ', '<p>Most Welcome and thank you for registering at {store} !<br>\r\nCustomer : {firstname} {lastname}</p>\r\n\r\n<p>Your account must be approved before you can login. Once approved you\r\n can log in by using your email address and password by visiting our \r\nwebsite or at the following URL:<br>\r\n{link}<br>\r\nUpon logging in, you will be able to access other services including \r\nreviewing past orders, printing invoices and editing your account \r\ninformation.</p><p>\r\n<br>\r\nThanks,<br>\r\n{store}</p>\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `ticket_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `claim` int(11) NOT NULL COMMENT '1.didn''t receive  2.mismatch 3.haven''t receive payment 4.cancel transaction',
  `want` int(11) NOT NULL COMMENT '1.product 2.refund',
  `priority` int(11) NOT NULL,
  `claimed_by` varchar(10) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `replied` int(11) NOT NULL DEFAULT '0',
  `new` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL COMMENT '1.closed 2.on hold 3.pending vendor 4.pending buyer 5.pending support manager',
  `filename` varchar(250) DEFAULT NULL,
  `review` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ticket_id`, `title`, `description`, `claim`, `want`, `priority`, `claimed_by`, `user_id`, `vendor_id`, `product_id`, `replied`, `new`, `status`, `filename`, `review`, `created_at`, `updated_at`) VALUES
(1, 'test', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.', 2, 1, 1, 'user', 2, 0, 1, 1, 0, 1, '', 0, '2016-06-14 00:16:53', '2016-06-26 11:56:18');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_replies`
--

CREATE TABLE IF NOT EXISTS `ticket_replies` (
  `reply_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `message` varchar(250) NOT NULL,
  `replied_by` varchar(10) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `filename` varchar(250) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_replies`
--

INSERT INTO `ticket_replies` (`reply_id`, `ticket_id`, `message`, `replied_by`, `user_id`, `vendor_id`, `admin_id`, `filename`, `created_at`, `updated_at`) VALUES
(1, 1, 'test', 'vendor', NULL, 11, NULL, NULL, '2016-06-13 18:55:42', '2016-06-16 17:51:37'),
(2, 1, 'test1', 'admin', NULL, NULL, 1, NULL, '2016-06-16 11:49:46', '2016-06-16 17:52:54'),
(3, 1, 'another test', 'user', 2, NULL, NULL, NULL, '2016-06-16 17:52:10', '2016-06-16 17:52:56');

-- --------------------------------------------------------

--
-- Table structure for table `ui_settings`
--

CREATE TABLE IF NOT EXISTS `ui_settings` (
  `ui_settings_id` int(11) NOT NULL,
  `type` longtext,
  `value` longtext
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ui_settings`
--

INSERT INTO `ui_settings` (`ui_settings_id`, `type`, `value`) VALUES
(1, 'side_bar_pos', NULL),
(2, 'latest_item_div', NULL),
(3, 'most_popular_div', NULL),
(4, 'most_view_div', NULL),
(5, 'filter_div', 'on'),
(6, 'admin_login_logo', '5'),
(7, 'admin_nav_logo', '18'),
(8, 'home_top_logo', '5'),
(9, 'home_bottom_logo', '5'),
(10, 'home_category', '["1","2","3","6"]'),
(11, 'fav_ext', 'png'),
(12, 'side_bar_pos_category', 'left'),
(13, 'home_brand', '["1","2","3","4","5","6"]'),
(14, 'footer_color', NULL),
(15, 'header_color', 'grey');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `username` longtext,
  `surname` varchar(100) DEFAULT NULL,
  `email` longtext,
  `phone` longtext,
  `address1` longtext,
  `address2` longtext,
  `city` varchar(100) DEFAULT NULL,
  `zip` varchar(30) DEFAULT NULL,
  `langlat` varchar(100) DEFAULT NULL,
  `password` longtext,
  `fb_id` longtext,
  `g_id` varchar(50) DEFAULT NULL,
  `g_photo` longtext,
  `creation_date` longtext,
  `google_plus` longtext,
  `skype` longtext,
  `facebook` longtext,
  `wishlist` longtext,
  `last_login` varchar(50) DEFAULT NULL,
  `downloads` longtext NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `surname`, `email`, `phone`, `address1`, `address2`, `city`, `zip`, `langlat`, `password`, `fb_id`, `g_id`, `g_photo`, `creation_date`, `google_plus`, `skype`, `facebook`, `wishlist`, `last_login`, `downloads`) VALUES
(1, 'Mr. Customer', 'Boy', 'customer@shop.com', '(88) 090 0938', 'Dhaka', 'Bangladesh', 'Dhaka', '1212', '(12.44819535767321, 76.66826244013669)', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '', '', '', '1436652284', '', '', '', '["115","106","95","117","118"]', '1444986151', '[{"sale":2,"product":"118"},{"sale":4,"product":"119"},{"sale":5,"product":"118"},{"sale":5,"product":"120"},{"sale":6,"product":"121"},{"sale":7,"product":"122"},{"sale":7,"product":"121"}]'),
(2, 'B?nymin', 'Atik', 'b.atik@hotmail.de', '01722311392', 'Kleine ', 'Burgholzstr.11', 'Dortmund', '44145 , Germany', '(51.5254296, 7.462302899999941)', 'e542ab8962879650018519f73ceed35cf5b23d7d', NULL, NULL, NULL, '1457208120', NULL, NULL, NULL, '[]', '1460627781', ''),
(4, 'test', 'email', 'testemail@gmail.com', '1234567890', 'My Address', 'My Address2', 'Hyd', '500072', '', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '1462802700', NULL, NULL, NULL, '[]', '1462802732', ''),
(5, 'tets-user', 'Hassan', 'test@ebuymazon.com', '+8801727396374', NULL, NULL, NULL, NULL, NULL, 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, NULL, NULL, '1466862771', NULL, NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_account_info_tbl`
--

CREATE TABLE IF NOT EXISTS `user_account_info_tbl` (
  `aid` int(20) NOT NULL,
  `acc_company_name` varchar(200) DEFAULT NULL,
  `acc_group_discount` varchar(200) DEFAULT NULL,
  `acc_group_of_product` varchar(200) DEFAULT NULL,
  `acc_email_mode` varchar(200) DEFAULT NULL,
  `acc_email_newsletter` varchar(200) DEFAULT NULL,
  `acc_email_pro_update` varchar(200) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_account_info_tbl`
--

INSERT INTO `user_account_info_tbl` (`aid`, `acc_company_name`, `acc_group_discount`, `acc_group_of_product`, `acc_email_mode`, `acc_email_newsletter`, `acc_email_pro_update`, `user_id`) VALUES
(1, 'test', '1', '1', '1', '1', '1', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_billing_info_tbl`
--

CREATE TABLE IF NOT EXISTS `user_billing_info_tbl` (
  `bid` bigint(20) NOT NULL,
  `address1` varchar(500) DEFAULT NULL,
  `address2` varchar(500) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip` varchar(100) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_billing_info_tbl`
--

INSERT INTO `user_billing_info_tbl` (`bid`, `address1`, `address2`, `city`, `country`, `state`, `zip`, `user_id`) VALUES
(1, 'Savar', 'Savar', 'Dhaka', 'Bangladesh', 'AK', '1344', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_shipping_info_tbl`
--

CREATE TABLE IF NOT EXISTS `user_shipping_info_tbl` (
  `sid` bigint(20) NOT NULL,
  `billingsameshipping` int(11) DEFAULT NULL,
  `sname` varchar(200) DEFAULT NULL,
  `scompany` varchar(200) DEFAULT NULL,
  `saddress1` varchar(300) DEFAULT NULL,
  `saddress2` varchar(300) DEFAULT NULL,
  `scity` varchar(100) DEFAULT NULL,
  `scountry` varchar(150) DEFAULT NULL,
  `sstate` varchar(150) DEFAULT NULL,
  `szip` varchar(100) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_shipping_info_tbl`
--

INSERT INTO `user_shipping_info_tbl` (`sid`, `billingsameshipping`, `sname`, `scompany`, `saddress1`, `saddress2`, `scity`, `scountry`, `sstate`, `szip`, `user_id`) VALUES
(1, 0, 'tets-user', 'test', 'Savar', 'Savar', 'Dhaka', 'Bangladesh', 'AK', '1344', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_total_point_tbl`
--

CREATE TABLE IF NOT EXISTS `user_total_point_tbl` (
  `tid` bigint(20) NOT NULL,
  `total_point` varchar(100) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_total_point_tbl`
--

INSERT INTO `user_total_point_tbl` (`tid`, `total_point`, `user_id`) VALUES
(1, '50', 5);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
  `vendor_id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `company` varchar(500) DEFAULT NULL,
  `display_name` varchar(500) DEFAULT NULL,
  `address1` longtext,
  `address2` longtext,
  `status` varchar(10) DEFAULT NULL,
  `membership` varchar(50) DEFAULT NULL,
  `create_timestamp` int(20) DEFAULT NULL,
  `approve_timestamp` int(20) DEFAULT NULL,
  `member_timestamp` int(20) DEFAULT NULL,
  `member_expire_timestamp` int(11) DEFAULT NULL,
  `details` longtext,
  `last_login` int(20) DEFAULT NULL,
  `facebook` varchar(300) DEFAULT NULL,
  `skype` varchar(300) DEFAULT NULL,
  `google_plus` varchar(300) DEFAULT NULL,
  `twitter` varchar(300) DEFAULT NULL,
  `youtube` varchar(300) DEFAULT NULL,
  `pinterest` varchar(300) DEFAULT NULL,
  `stripe_details` varchar(500) DEFAULT NULL,
  `paypal_email` varchar(200) DEFAULT NULL,
  `preferred_payment` varchar(100) DEFAULT NULL,
  `cash_set` varchar(20) DEFAULT NULL,
  `stripe_set` varchar(20) DEFAULT NULL,
  `paypal_set` varchar(20) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `keywords` longtext,
  `description` longtext,
  `lat_lang` varchar(300) NOT NULL DEFAULT '(0,0)'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `name`, `email`, `password`, `company`, `display_name`, `address1`, `address2`, `status`, `membership`, `create_timestamp`, `approve_timestamp`, `member_timestamp`, `member_expire_timestamp`, `details`, `last_login`, `facebook`, `skype`, `google_plus`, `twitter`, `youtube`, `pinterest`, `stripe_details`, `paypal_email`, `preferred_payment`, `cash_set`, `stripe_set`, `paypal_set`, `phone`, `keywords`, `description`, `lat_lang`) VALUES
(9, 'Ishmael Dodson', 'vuharupy@gmail.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 'Mayo and Zimmerman Trading', 'Randall Garcia', 'Corrupti amet quos placeat velit odit labore labore est et voluptatibus amet aliquam quos sint et obcaecati debitis mollit incidunt', 'Anim rerum ad velit est aut aute iure reprehenderit labore in ipsum', 'approved', '0', 1444818277, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '(0,0)'),
(11, 'Atik', 'b.atik@haktel.de', 'e542ab8962879650018519f73ceed35cf5b23d7d', 'Haktel-Trade', 'HAKTEL-TRADE', 'Lortzingstr.43', '44145 Dortmund, Germany', 'approved', '0', 1457178524, 0, NULL, NULL, 'Wri Verkaufen Mobilfunkzubeh?r Ersatzteile und Reparieren Mobilfunkger?te !!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '(51.5282692, 7.46206200000006)'),
(12, 'Atik', 'b.atik@hotmail.de', 'df1eb40aa9a1827c7c5f0a7bec29af73b7e2569a', 'ATIK', 'ATIK', 'Kleine Burgholzstr.11', '44145 Dortmund ', 'approved', '0', 1460588633, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{"publishable":"","secret":""}', 'payhaktel@haktel.de', NULL, 'ok', NULL, 'ok', NULL, 'Mobilfunkzubeh?r, Photo,Accessories,Panzerglas,ersatzteile,LCD,Handyreparatur', 'Gross und Einzelhandel mit Mobilfunkzubeh?r und Photo', '(0,0)');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_invoice`
--

CREATE TABLE IF NOT EXISTS `vendor_invoice` (
  `vendor_invoice_id` int(11) NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `amount` varchar(50) DEFAULT NULL,
  `timestamp` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `method` varchar(100) DEFAULT NULL,
  `payment_details` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_monthly_fees`
--

CREATE TABLE IF NOT EXISTS `vendor_monthly_fees` (
  `fee_id` int(11) NOT NULL,
  `vendor` int(11) NOT NULL,
  `fix_fee_per_item` float NOT NULL,
  `percentage_fee_per_item` int(11) NOT NULL,
  `max_item_upload` int(11) DEFAULT NULL,
  `start_date` date NOT NULL,
  `time_added` datetime NOT NULL,
  `time_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendor_monthly_fees`
--

INSERT INTO `vendor_monthly_fees` (`fee_id`, `vendor`, `fix_fee_per_item`, `percentage_fee_per_item`, `max_item_upload`, `start_date`, `time_added`, `time_modified`, `status`) VALUES
(2, 11, 1, 20, 200, '2016-03-01', '2016-06-17 00:00:00', '2016-06-18 20:42:23', 1),
(3, 9, 0, 10, 100, '2016-04-01', '2016-06-19 00:00:00', '2016-06-18 21:45:04', 1),
(4, 12, 100, 10, 100, '2016-04-01', '2016-06-19 00:00:00', '2016-06-19 01:48:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_news`
--

CREATE TABLE IF NOT EXISTS `vendor_news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_text` tinytext NOT NULL,
  `time_added` datetime NOT NULL,
  `time_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_payments`
--

CREATE TABLE IF NOT EXISTS `vendor_payments` (
  `payment_id` int(11) NOT NULL,
  `vendor` int(11) NOT NULL,
  `amount` float NOT NULL,
  `time_added` datetime NOT NULL,
  `method` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `aaaaaaaa` int(11) NOT NULL,
  `sdfsfsf` int(11) NOT NULL,
  `sdfsfs` int(11) NOT NULL,
  `sdfs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_ratings`
--

CREATE TABLE IF NOT EXISTS `vendor_ratings` (
  `rating_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `company` varchar(50) NOT NULL,
  `rating` tinyint(4) DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `from_where` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `time_added` datetime NOT NULL,
  `time_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendor_ratings`
--

INSERT INTO `vendor_ratings` (`rating_id`, `vendor_id`, `company`, `rating`, `order_id`, `product_id`, `from_where`, `status`, `time_added`, `time_modified`) VALUES
(2, 11, 'Haktel-Trade', 3, 3, 119, 1, 1, '2016-06-29 21:05:27', '2016-06-29 16:24:37'),
(3, 11, 'Haktel-Trade', 4, 1, 119, 1, 1, '2016-06-29 21:06:24', '2016-06-29 16:24:49'),
(4, 12, 'ATIK', 5, 7, 122, 1, 1, '2016-06-29 21:07:55', '2016-06-29 15:13:18');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_rating_setting`
--

CREATE TABLE IF NOT EXISTS `vendor_rating_setting` (
  `setting_id` int(11) NOT NULL,
  `enable_rating` tinyint(4) NOT NULL,
  `time_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendor_rating_setting`
--

INSERT INTO `vendor_rating_setting` (`setting_id`, `enable_rating`, `time_update`, `status`) VALUES
(1, 1, '2016-06-05 12:19:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_reports`
--

CREATE TABLE IF NOT EXISTS `vendor_reports` (
  `report_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_reports`
--

INSERT INTO `vendor_reports` (`report_id`, `title`, `description`, `vendor_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'test', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.', 9, 2, '2016-06-17 07:09:08', '2016-06-17 21:46:54');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_reviews`
--

CREATE TABLE IF NOT EXISTS `vendor_reviews` (
  `review_id` int(11) NOT NULL,
  `company` varchar(50) NOT NULL,
  `rating` tinyint(4) DEFAULT NULL,
  `time_added` datetime NOT NULL,
  `time_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendor_reviews`
--

INSERT INTO `vendor_reviews` (`review_id`, `company`, `rating`, `time_added`, `time_modified`, `status`) VALUES
(1, 'Technetium', 5, '2016-06-01 00:00:00', '2016-06-01 07:01:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_review_setting`
--

CREATE TABLE IF NOT EXISTS `vendor_review_setting` (
  `setting_id` int(11) NOT NULL,
  `enable_review` tinyint(4) NOT NULL,
  `enable_auto_approve` tinyint(4) NOT NULL,
  `time_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendor_review_setting`
--

INSERT INTO `vendor_review_setting` (`setting_id`, `enable_review`, `enable_auto_approve`, `time_modified`, `status`) VALUES
(1, 1, 1, '2016-06-05 11:09:48', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_services`
--

CREATE TABLE IF NOT EXISTS `vendor_services` (
  `service_id` int(11) NOT NULL,
  `paid_featured_vendor` tinytext NOT NULL,
  `paid_featured_vendor_fee` double NOT NULL,
  `vendor_packaged_time` tinyint(4) NOT NULL,
  `paid_featured_product` tinyint(4) NOT NULL,
  `featured_product_fee` double NOT NULL,
  `featured_product_package_time` tinyint(4) NOT NULL,
  `time_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendor_services`
--

INSERT INTO `vendor_services` (`service_id`, `paid_featured_vendor`, `paid_featured_vendor_fee`, `vendor_packaged_time`, `paid_featured_product`, `featured_product_fee`, `featured_product_package_time`, `time_update`, `status`) VALUES
(1, '1', 5, 7, 1, 5, 7, '2016-06-08 19:22:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `veratad_settings`
--

CREATE TABLE IF NOT EXISTS `veratad_settings` (
  `veratad_id` int(11) NOT NULL,
  `activate_veratad` longtext NOT NULL,
  `veratad_username` longtext NOT NULL,
  `veratad_password` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `veratad_settings`
--

INSERT INTO `veratad_settings` (`veratad_id`, `activate_veratad`, `veratad_username`, `veratad_password`) VALUES
(1, 'yes', 'demo-admin', '23e339ebfc6e9ddb24ec830eab2ac719d666192a');

-- --------------------------------------------------------

--
-- Table structure for table `wholesales_settings`
--

CREATE TABLE IF NOT EXISTS `wholesales_settings` (
  `wholesale_id` int(11) NOT NULL,
  `type` longtext NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wholesales_settings`
--

INSERT INTO `wholesales_settings` (`wholesale_id`, `type`, `value`) VALUES
(1, 'wholesaler_discounts', 'wholesales'),
(2, 'wholesale_level', '1'),
(3, 'discount_level', '10.10'),
(4, 'wholesale_case_pack', 'ok'),
(5, 'wholesale_inter_pack', 'ok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `api_users`
--
ALTER TABLE `api_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`attribute_id`);

--
-- Indexes for table `attribute_group`
--
ALTER TABLE `attribute_group`
  ADD PRIMARY KEY (`attribute_group_id`);

--
-- Indexes for table `banned_ip`
--
ALTER TABLE `banned_ip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`blog_category_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `business_settings`
--
ALTER TABLE `business_settings`
  ADD PRIMARY KEY (`business_settings_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `company_information`
--
ALTER TABLE `company_information`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `contact_message`
--
ALTER TABLE `contact_message`
  ADD PRIMARY KEY (`contact_message_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`currency_id`);

--
-- Indexes for table `custom_option`
--
ALTER TABLE `custom_option`
  ADD PRIMARY KEY (`custom_option_id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donation_id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`download_id`);

--
-- Indexes for table `dynamic_selection_lists`
--
ALTER TABLE `dynamic_selection_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_settings`
--
ALTER TABLE `email_settings`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `email_template`
--
ALTER TABLE `email_template`
  ADD PRIMARY KEY (`email_template_id`);

--
-- Indexes for table `filters`
--
ALTER TABLE `filters`
  ADD PRIMARY KEY (`filter_id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`general_settings_id`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`word_id`);

--
-- Indexes for table `local_settings`
--
ALTER TABLE `local_settings`
  ADD PRIMARY KEY (`local_settings_id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`membership_id`);

--
-- Indexes for table `membership_payment`
--
ALTER TABLE `membership_payment`
  ADD PRIMARY KEY (`membership_payment_id`);

--
-- Indexes for table `merchants_packages`
--
ALTER TABLE `merchants_packages`
  ADD PRIMARY KEY (`merchants_packages_id`);

--
-- Indexes for table `notification_emails`
--
ALTER TABLE `notification_emails`
  ADD PRIMARY KEY (`notification_email_id`);

--
-- Indexes for table `ordered_vendor_services`
--
ALTER TABLE `ordered_vendor_services`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_attachment`
--
ALTER TABLE `order_attachment`
  ADD PRIMARY KEY (`order_attach_id`);

--
-- Indexes for table `order_cart_settings`
--
ALTER TABLE `order_cart_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `points_range`
--
ALTER TABLE `points_range`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `point_system_settings`
--
ALTER TABLE `point_system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price_offers`
--
ALTER TABLE `price_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_comment`
--
ALTER TABLE `product_comment`
  ADD PRIMARY KEY (`product_comment_id`);

--
-- Indexes for table `product_field_group`
--
ALTER TABLE `product_field_group`
  ADD PRIMARY KEY (`product_field_group_id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`product_review_id`);

--
-- Indexes for table `product_setting`
--
ALTER TABLE `product_setting`
  ADD PRIMARY KEY (`product_setting_id`);

--
-- Indexes for table `promo_categories`
--
ALTER TABLE `promo_categories`
  ADD PRIMARY KEY (`promo_id`),
  ADD UNIQUE KEY `promo_id_2` (`promo_id`),
  ADD KEY `promo_id` (`promo_id`);

--
-- Indexes for table `recommended_porducts`
--
ALTER TABLE `recommended_porducts`
  ADD PRIMARY KEY (`rp_id`),
  ADD UNIQUE KEY `rp_id` (`rp_id`);

--
-- Indexes for table `rma_infos`
--
ALTER TABLE `rma_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `sale_price`
--
ALTER TABLE `sale_price`
  ADD PRIMARY KEY (`sp_id`),
  ADD UNIQUE KEY `sp_id` (`sp_id`);

--
-- Indexes for table `sent_email_archive`
--
ALTER TABLE `sent_email_archive`
  ADD PRIMARY KEY (`sent_email_id`);

--
-- Indexes for table `shipping_statuses`
--
ALTER TABLE `shipping_statuses`
  ADD PRIMARY KEY (`shipping_status_id`);

--
-- Indexes for table `site_maintenance`
--
ALTER TABLE `site_maintenance`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `slider_style`
--
ALTER TABLE `slider_style`
  ADD PRIMARY KEY (`slider_style_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`slides_id`);

--
-- Indexes for table `sms_notification_settings`
--
ALTER TABLE `sms_notification_settings`
  ADD PRIMARY KEY (`sms_notification_settings_id`);

--
-- Indexes for table `sms_services`
--
ALTER TABLE `sms_services`
  ADD PRIMARY KEY (`sms_services_id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`social_links_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`subscribe_id`);

--
-- Indexes for table `subscribed_products`
--
ALTER TABLE `subscribed_products`
  ADD PRIMARY KEY (`subscribed_list_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_category_id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`system_settings_id`);

--
-- Indexes for table `templates_email`
--
ALTER TABLE `templates_email`
  ADD PRIMARY KEY (`template_email_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `ticket_replies`
--
ALTER TABLE `ticket_replies`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `ui_settings`
--
ALTER TABLE `ui_settings`
  ADD PRIMARY KEY (`ui_settings_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_account_info_tbl`
--
ALTER TABLE `user_account_info_tbl`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `user_billing_info_tbl`
--
ALTER TABLE `user_billing_info_tbl`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `user_shipping_info_tbl`
--
ALTER TABLE `user_shipping_info_tbl`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user_total_point_tbl`
--
ALTER TABLE `user_total_point_tbl`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- Indexes for table `vendor_invoice`
--
ALTER TABLE `vendor_invoice`
  ADD PRIMARY KEY (`vendor_invoice_id`);

--
-- Indexes for table `vendor_monthly_fees`
--
ALTER TABLE `vendor_monthly_fees`
  ADD PRIMARY KEY (`fee_id`);

--
-- Indexes for table `vendor_news`
--
ALTER TABLE `vendor_news`
  ADD KEY `news_id` (`news_id`);

--
-- Indexes for table `vendor_payments`
--
ALTER TABLE `vendor_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `vendor_ratings`
--
ALTER TABLE `vendor_ratings`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `vendor_rating_setting`
--
ALTER TABLE `vendor_rating_setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `vendor_reports`
--
ALTER TABLE `vendor_reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `vendor_reviews`
--
ALTER TABLE `vendor_reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `vendor_review_setting`
--
ALTER TABLE `vendor_review_setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `vendor_services`
--
ALTER TABLE `vendor_services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `veratad_settings`
--
ALTER TABLE `veratad_settings`
  ADD PRIMARY KEY (`veratad_id`);

--
-- Indexes for table `wholesales_settings`
--
ALTER TABLE `wholesales_settings`
  ADD PRIMARY KEY (`wholesale_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `api_users`
--
ALTER TABLE `api_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `attribute_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `attribute_group`
--
ALTER TABLE `attribute_group`
  MODIFY `attribute_group_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `banned_ip`
--
ALTER TABLE `banned_ip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `blog_category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `business_settings`
--
ALTER TABLE `business_settings`
  MODIFY `business_settings_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `company_information`
--
ALTER TABLE `company_information`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `contact_message`
--
ALTER TABLE `contact_message`
  MODIFY `contact_message_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `currency_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `custom_option`
--
ALTER TABLE `custom_option`
  MODIFY `custom_option_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `download_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dynamic_selection_lists`
--
ALTER TABLE `dynamic_selection_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `email_settings`
--
ALTER TABLE `email_settings`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `email_template`
--
ALTER TABLE `email_template`
  MODIFY `email_template_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `general_settings_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `word_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2050;
--
-- AUTO_INCREMENT for table `local_settings`
--
ALTER TABLE `local_settings`
  MODIFY `local_settings_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `membership_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `membership_payment`
--
ALTER TABLE `membership_payment`
  MODIFY `membership_payment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `merchants_packages`
--
ALTER TABLE `merchants_packages`
  MODIFY `merchants_packages_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `notification_emails`
--
ALTER TABLE `notification_emails`
  MODIFY `notification_email_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `ordered_vendor_services`
--
ALTER TABLE `ordered_vendor_services`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `order_attachment`
--
ALTER TABLE `order_attachment`
  MODIFY `order_attach_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `order_cart_settings`
--
ALTER TABLE `order_cart_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `points_range`
--
ALTER TABLE `points_range`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `point_system_settings`
--
ALTER TABLE `point_system_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `price_offers`
--
ALTER TABLE `price_offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=133;
--
-- AUTO_INCREMENT for table `product_comment`
--
ALTER TABLE `product_comment`
  MODIFY `product_comment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_field_group`
--
ALTER TABLE `product_field_group`
  MODIFY `product_field_group_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `product_review_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_setting`
--
ALTER TABLE `product_setting`
  MODIFY `product_setting_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `promo_categories`
--
ALTER TABLE `promo_categories`
  MODIFY `promo_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `sent_email_archive`
--
ALTER TABLE `sent_email_archive`
  MODIFY `sent_email_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `shipping_statuses`
--
ALTER TABLE `shipping_statuses`
  MODIFY `shipping_status_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `site_maintenance`
--
ALTER TABLE `site_maintenance`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `slider_style`
--
ALTER TABLE `slider_style`
  MODIFY `slider_style_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `slides_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sms_notification_settings`
--
ALTER TABLE `sms_notification_settings`
  MODIFY `sms_notification_settings_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sms_services`
--
ALTER TABLE `sms_services`
  MODIFY `sms_services_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `social_links_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `subscribe_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subscribed_products`
--
ALTER TABLE `subscribed_products`
  MODIFY `subscribed_list_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `system_settings_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `templates_email`
--
ALTER TABLE `templates_email`
  MODIFY `template_email_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ticket_replies`
--
ALTER TABLE `ticket_replies`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ui_settings`
--
ALTER TABLE `ui_settings`
  MODIFY `ui_settings_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_account_info_tbl`
--
ALTER TABLE `user_account_info_tbl`
  MODIFY `aid` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_billing_info_tbl`
--
ALTER TABLE `user_billing_info_tbl`
  MODIFY `bid` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_shipping_info_tbl`
--
ALTER TABLE `user_shipping_info_tbl`
  MODIFY `sid` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_total_point_tbl`
--
ALTER TABLE `user_total_point_tbl`
  MODIFY `tid` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `vendor_invoice`
--
ALTER TABLE `vendor_invoice`
  MODIFY `vendor_invoice_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vendor_monthly_fees`
--
ALTER TABLE `vendor_monthly_fees`
  MODIFY `fee_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vendor_news`
--
ALTER TABLE `vendor_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vendor_ratings`
--
ALTER TABLE `vendor_ratings`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vendor_rating_setting`
--
ALTER TABLE `vendor_rating_setting`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vendor_reports`
--
ALTER TABLE `vendor_reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vendor_reviews`
--
ALTER TABLE `vendor_reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vendor_review_setting`
--
ALTER TABLE `vendor_review_setting`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vendor_services`
--
ALTER TABLE `vendor_services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `veratad_settings`
--
ALTER TABLE `veratad_settings`
  MODIFY `veratad_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wholesales_settings`
--
ALTER TABLE `wholesales_settings`
  MODIFY `wholesale_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
