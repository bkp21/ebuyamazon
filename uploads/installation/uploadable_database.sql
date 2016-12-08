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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `phone`, `address`, `email`, `password`, `role`, `timestamp`) VALUES
(1, 'Mr. Master Admin', '', '', 'admin@shop.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '1', '1437476969'),
(2, 'Mr. Accountant', '017', 'dhk', 'accountant@shop.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '4', '1430737266'),
(3, 'Mr manager', '021525566', 'Niketon Dhaka', 'manager@shop.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '6', '1433682938');

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
(23, 'vendor_home', 'after_filter', '1', '', '');

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
(1, 'Quibusdam deleniti dicta molestiae quia mollitia ', '<p [removed]="line-height: 17.1429px;">Nobis adipisci quia enim repellendus. Et placeat, velit ipsum, illum, minus rerum reiciendis ut dolor et molestiae sunt, eum est autem porro eum et sint cupiditate reprehenderit, incidunt, est dolore animi, voluptas e</p>', 'Consequatur', '2015-09-23', '<p [removed]="line-height: 17.1429px;"></p><p [removed]="line-height: 17.1429px;" 17.1429px;"="">Nobis adipisci quia enim repellendus. Et placeat, velit ipsum, illum, minus rerum reiciendis ut dolor et molestiae sunt, eum est autem porro eum et sint cupiditate reprehenderit, incidunt, est dolore animi, voluptas et quo facilis omnis libero dolor reiciendis est beatae est ut eiusmod sed deserunt ullamco cillum deserunt et beatae deserunt sapiente modi excepteur tempor doloremque irure ex accusantium quasi ratione nihil ipsa, deserunt dolor quia quasi ab cupiditate aperiam atque a irure dicta odio non perferendis est, nulla ut dolor ut duis aliquam non earum totam deserunt molestiae voluptatibus qui tenetur hic eius et et exercitation ex Nam.</p><div [removed]="line-height: 17.1429px;">Nobis adipisci quia enim repellendus. Et placeat, velit ipsum, illum, minus rerum reiciendis ut dolor et molestiae sunt, eum est autem porro eum et sint cupiditate reprehenderit, incidunt, est dolore animi, voluptas et quo facilis omnis libero dolor reiciendis est beatae est ut eiusmod sed deserunt ullamco cillum deserunt et beatae deserunt sapiente modi excepteur tempor doloremque irure ex accusantium quasi ratione nihil ipsa, deserunt dolor quia quasi ab cupiditate aperiam atque a irure dicta odio non perferendis est, nulla ut dolor ut duis aliquam non earum totam deserunt molestiae voluptatibus qui tenetur hic eius et et exercitation ex Nam.</div><div [removed]="line-height: 17.1429px;">  </div>', '', '1', 0);
INSERT INTO `blog` (`blog_id`, `title`, `summery`, `author`, `date`, `description`, `status`, `blog_category`, `number_of_view`) VALUES
(2, 'Pariatur At a ut ut cupidatat velit explicabo', 'Ea itaque dignissimos anim corrupti, aliquam necessitatibus iste pariatur. Ipsam ea temporibus aspernatur quia odio dolorem sit, ullam alias beatae aliquam modi incidunt, est fugiat vel tenetur et molestias ut culpa consequatur, dolorum sit, nesciunt, vel ut harum corporis amet, ex et sed aperiam minim blanditiis sit, minima ad et iusto quis aut reprehenderit, velit optio, animi, autem provident, vel aute.', 'Cupiditate ', '2002-06-18', 'Ipsum et ad vel est, quas rem minima ex in cillum sit reprehenderit in odit eum rerum sit, illum, nobis saepe est voluptates quis placeat, repellendus. Autem ut est Nam iure quam fugiat, cumque incididunt magnam dolor quae architecto dolor facilis duis qui esse, laboriosam, nihil qui obcaecati voluptatibus duis eos omnis occaecat temporibus eu dolor voluptatem.<span [removed]="line-height: 17.1429px;"><p [removed]="line-height: 17.1429px;" 17.1429px;"="">Nobis adipisci quia enim repellendus. Et placeat, velit ipsum, illum, minus rerum reiciendis ut dolor et molestiae sunt, eum est autem porro eum et sint cupiditate reprehenderit, incidunt, est dolore animi, voluptas et quo facilis omnis libero dolor reiciendis est beatae est ut eiusmod sed deserunt ullamco cillum deserunt et beatae deserunt sapiente modi excepteur tempor doloremque irure ex accusantium quasi ratione nihil ipsa, deserunt dolor quia quasi ab cupiditate aperiam atque a irure dicta odio non perferendis est, nulla ut dolor ut duis aliquam non earum totam deserunt molestiae voluptatibus qui tenetur hic eius et et exercitation ex Nam.</p><div [removed]="line-height: 17.1429px;">Nobis adipisci quia enim repellendus. Et placeat, velit ipsum, illum, minus rerum reiciendis ut dolor et molestiae sunt, eum est autem porro eum et sint cupiditate reprehenderit, incidunt, est dolore animi, voluptas et quo facilis omnis libero dolor reiciendis est beatae est ut eiusmod sed deserunt ullamco cillum deserunt et beatae deserunt sapiente modi excepteur tempor doloremque irure ex accusantium quasi ratione nihil ipsa, deserunt dolor quia quasi ab cupiditate aperiam atque a irure dicta odio non perferendis est, nulla ut dolor ut duis aliquam non earum totam deserunt molestiae voluptatibus qui tenetur hic eius et et exercitation ex Nam.</div><div [removed]="line-height: 17.1429px;">  </div></span>', '', '1', 0);
INSERT INTO `blog` (`blog_id`, `title`, `summery`, `author`, `date`, `description`, `status`, `blog_category`, `number_of_view`) VALUES
(3, 'Ab quis quod voluptas proident amet aute odit consequatur voluptas at architecto fugiat', 'Eum numquam aut labore voluptates commodo id eos, Nam et eum quidem delectus, tempor fuga. Sit, quo autem ut sunt, do autem soluta enim et cupidatat illum, iure in voluptate esse, exercitationem qui numquam nostrum voluptate accusamus consectetur quis libero in.', 'Hic facere omnis ut sunt enim commodi similique', '1974-10-05', '<p [removed]="line-height: 17.1429px;"></p><p [removed]="line-height: 17.1429px;" 17.1429px;"="">Nobis adipisci quia enim repellendus. Et placeat, velit ipsum, illum, minus rerum reiciendis ut dolor et molestiae sunt, eum est autem porro eum et sint cupiditate reprehenderit, incidunt, est dolore animi, voluptas et quo facilis omnis libero dolor reiciendis est beatae est ut eiusmod sed deserunt ullamco cillum deserunt et beatae deserunt sapiente modi excepteur tempor doloremque irure ex accusantium quasi ratione nihil ipsa, deserunt dolor quia quasi ab cupiditate aperiam atque a irure dicta odio non perferendis est, nulla ut dolor ut duis aliquam non earum totam deserunt molestiae voluptatibus qui tenetur hic eius et et exercitation ex Nam.</p><div [removed]="line-height: 17.1429px;">Nobis adipisci quia enim repellendus. Et placeat, velit ipsum, illum, minus rerum reiciendis ut dolor et molestiae sunt, eum est autem porro eum et sint cupiditate reprehenderit, incidunt, est dolore animi, voluptas et quo facilis omnis libero dolor reiciendis est beatae est ut eiusmod sed deserunt ullamco cillum deserunt et beatae deserunt sapiente modi excepteur tempor doloremque irure ex accusantium quasi ratione nihil ipsa, deserunt dolor quia quasi ab cupiditate aperiam atque a irure dicta odio non perferendis est, nulla ut dolor ut duis aliquam non earum totam deserunt molestiae voluptatibus qui tenetur hic eius et et exercitation ex Nam.</div><div [removed]="line-height: 17.1429px;">  </div>', '', '1', 0),
(4, 'Ad aut tenetur aut enim quod doloribus quia ', 'Voluptatem id accusantium exercitation et cumque repellendus. Accusamus rerum aute nisi amet, duis aliquip in tempora sed qui expedita molestiae unde fugit, aut pariatur? Eiusmod.', 'Quia veniam', '1983-08-20', '<p [removed]="line-height: 17.1429px;">Accusamus sit, consectetur, impedit, quae distinctio. Vel voluptas amet, blanditiis ut consectetur, consequatur, nesciunt, sint aliquam odio occaecat non ex laudantium, et dolorem ex laborum architecto odit magni qui maiores architecto qui et et eu accusantium labore elit, corrupti, nobis amet, elit, qui sed exercitationem deserunt vel voluptatem, est fugiat, sed tempore, enim tempore, nihil ea eligendi eligendi qui culpa, repudiandae odio consectetur, voluptas consequuntur animi, non.</p><p [removed]="line-height: 17.1429px;">Accusamus sit, consectetur, impedit, quae distinctio. Vel voluptas amet, blanditiis ut consectetur, consequatur, nesciunt, sint aliquam odio occaecat non ex laudantium, et dolorem ex laborum architecto odit magni qui maiores architecto qui et et eu accusantium labore elit, corrupti, nobis amet, elit, qui sed exercitationem deserunt vel voluptatem, est fugiat, sed tempore, enim tempore, nihil ea eligendi eligendi qui culpa, repudiandae odio consectetur, voluptas consequuntur animi, non.</p><p [removed]="line-height: 17.1429px;">Accusamus sit, consectetur, impedit, quae distinctio. Vel voluptas amet, blanditiis ut consectetur, consequatur, nesciunt, sint aliquam odio occaecat non ex laudantium, et dolorem ex laborum architecto odit magni qui maiores architecto qui et et eu accusantium labore elit, corrupti, nobis amet, elit, qui sed exercitationem deserunt vel voluptatem, est fugiat, sed tempore, enim tempore, nihil ea eligendi eligendi qui culpa, repudiandae odio consectetur, voluptas consequuntur animi, non.</p><p [removed]="line-height: 17.1429px;"> </p>', '', '2', 1);
INSERT INTO `blog` (`blog_id`, `title`, `summery`, `author`, `date`, `description`, `status`, `blog_category`, `number_of_view`) VALUES
(5, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', '<p><span [removed]="line-height: 1.42857; text-align: justify;"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,</span><br></p>', '', '2015-10-14', '<div [removed]="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></div><div [removed]="margin-bottom: 14px; padding: 0px;">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p></div>', NULL, '6', 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `name`, `description`, `category`, `added_by`) VALUES
(1, 'Demo Brand 1', '0', '1', ''),
(2, 'Demo Brand 2', '0', '1', ''),
(3, 'Demo Brand 3', '0', '2', ''),
(4, 'Demo Brand 4', '0', '2', ''),
(5, 'Demo Brand 5', '0', '1', ''),
(6, 'Demo Brand 6', '0', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `business_settings`
--

CREATE TABLE IF NOT EXISTS `business_settings` (
  `business_settings_id` int(11) NOT NULL,
  `type` longtext,
  `status` varchar(10) DEFAULT NULL,
  `value` longtext CHARACTER SET utf8 COLLATE utf8_bin
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_settings`
--

INSERT INTO `business_settings` (`business_settings_id`, `type`, `status`, `value`) VALUES
(1, 'paypal_email', 'ok', 'kadir_bm@yahoo.com'),
(2, 'shipping_cost', 'ok', '0'),
(3, 'shipping_cost_type', '', 'product_wise'),
(4, 'currency', '', '$'),
(6, 'shipment_info', '', '<p><p></p><div class="col-md-6" style="text-align: center; color: red; font-size: 20px;"><i style="background-color: rgb(239, 239, 239);">This is a very good situation that is making it more and more complex everyday</i></div><span style="line-height: 17.142858505249px;">However, this is one of the most</span><span style="line-height: 17.142858505249px;">However, this is one of the most</span><span style="line-height: 17.142858505249px;">However, this is one of the most</span><span style="line-height: 17.142858505249px;">However, this is one of the most</span><span style="line-height: 17.142858505249px;">However, this is one of the most</span><span style="line-height: 17.142858505249px;">However, this is one of the most</span><span style="line-height: 17.142858505249px;">However, this is one of the most</span><span style="line-height: 17.142858505249px;">However, this is one of the most</span><span style="line-height: 17.142858505249px;">However, this is one of the most</span><span style="line-height: 17.142858505249px;">However, this is one of the most</span><span style="line-height: 17.142858505249px;">However, this is one of the most</span><span style="line-height: 17.142858505249px;">However, this is one of the most</span><span style="line-height: 17.142858505249px;">However, this is one of the most</span><span style="line-height: 17.142858505249px;">However, this is one of the most</span><span style="line-height: 17.142858505249px;">However, this is one of the most</span><span style="line-height: 17.142858505249px;">However, this is one of the most</span><span style="line-height: 17.142858505249px;">However, this is one of the most</span><span style="line-height: 17.142858505249px;">However, this is one of the most</span><span style="line-height: 17.142858505249px;">However, this is one of the most</span><span style="line-height: 17.142858505249px;">However, this is one of the most</span><span style="line-height: 17.142858505249px;">However, this is one of the most</span><span style="line-height: 17.142858505249px;">However, this is one of the most</span></p><p><span style="line-height: 17.142858505249px;"><br></span><div class="col-md-6" style="color:red;font-size:20px;"><i>Snippet Set</i></div><span style="line-height: 17.142858505249px;"><br></span><br><p></p></p>'),
(7, 'currency_name', '', 'Dollar'),
(8, 'exchange', '', '1'),
(9, 'paypal_set', '', 'ok'),
(10, 'paypal_type', '', 'sandbox'),
(11, 'faqs', '', '[]'),
(12, 'cash_set', '', 'ok'),
(13, 'stripe_set', '', 'ok'),
(14, 'stripe_secret', '', ''),
(15, 'stripe_publishable', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL,
  `category_name` longtext,
  `description` longtext
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `description`) VALUES
(1, 'Electronics', '0'),
(2, 'Automobile', '0'),
(3, 'Women', '0'),
(4, 'Men', '0'),
(5, 'Kids', '0'),
(6, 'Digital Product', NULL),
(7, 'Example Category 2', NULL),
(8, 'Example Category 3', NULL),
(9, 'Example Category 4', NULL),
(10, 'Example Category 5', NULL);

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
('11772a7617470c2e1af3dd56ebc92b7358bd782a', '::1', 1444989966, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434343938393831383b74696d657374616d707c693a313434343938393936353b636f6d706172657c733a323a225b5d223b),
('8980ba093bf8181b7bc8933b620d677572a5b9e2', '::1', 1444989822, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434343938393831353b74696d657374616d707c693a313434343938393831353b636f6d706172657c733a323a225b5d223b73656172636865645f6361747c733a313a2230223b6c6f67696e7c733a333a22796573223b61646d696e5f6c6f67696e7c733a333a22796573223b61646d696e5f69647c733a313a2231223b61646d696e5f6e616d657c733a31363a224d722e204d61737465722041646d696e223b7469746c657c733a353a2261646d696e223b757365725f6c6f67696e7c733a333a22796573223b757365725f69647c733a313a2231223b757365725f6e616d657c733a31323a224d722e20437573746f6d6572223b),
('a0c965d6386f8aea5084fb01bc1c5868a57cc7a4', '::1', 1444982420, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434343937373737333b74696d657374616d707c693a313434343938323431333b636f6d706172657c733a323a225b5d223b);

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
-- Table structure for table `general_settings`
--

CREATE TABLE IF NOT EXISTS `general_settings` (
  `general_settings_id` int(11) NOT NULL,
  `type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `value` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`general_settings_id`, `type`, `value`) VALUES
(1, 'system_name', 'Active Super Shop'),
(2, 'system_email', 'admin@shop.com'),
(3, 'system_title', 'Active Super Shop'),
(4, 'address', ''),
(5, 'phone', ''),
(6, 'language', 'english'),
(9, 'terms_conditions', ''),
(10, 'fb_appid', ''),
(11, 'fb_secret', ''),
(12, 'google_languages', '{}'),
(24, 'meta_description', ''),
(25, 'meta_keywords', ''),
(26, 'meta_author', 'ActiveItZone'),
(27, 'captcha_public', '6LdsXPQSAAAAALRQB-m8Irt6-2_s2t10QsVnndVN'),
(28, 'captcha_private', '6LdsXPQSAAAAAFEnxFqW9qkEU_vozvDvJFV67yho'),
(29, 'application_name', 'Super Shop'),
(30, 'client_id', ''),
(31, 'client_secret', ''),
(32, 'redirect_uri', ''),
(33, 'api_key', ''),
(44, 'contact_about', ''),
(39, 'contact_phone', ''),
(40, 'contact_email', ''),
(41, 'contact_website', ''),
(42, 'footer_text', '<p><br></p>'),
(43, 'footer_category', '["1","2"]'),
(38, 'contact_address', ''),
(45, 'admin_notification_sound', 'no'),
(46, 'admin_notification_volume', '10.00'),
(47, 'privacy_policy', ''),
(48, 'discus_id', 'activeittest'),
(49, 'home_notification_sound', 'ok'),
(50, 'homepage_notification_volume', '10.00'),
(51, 'fb_login_set', 'no'),
(52, 'g_login_set', 'no'),
(53, 'slider', 'no'),
(54, 'revisit_after', '2'),
(55, 'default_member_product_limit', '5'),
(56, 'fb_comment_api', ''),
(57, 'comment_type', 'disqus'),
(58, 'vendor_system', 'ok'),
(59, 'cache_time', '5'),
(60, 'file_folder', 'jfkfkiriwnfjkmskdcsdfas'),
(62, 'slides', 'ok');

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
  `Chinese` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci
) ENGINE=InnoDB AUTO_INCREMENT=843 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(1, 'home', 'Home', 'বাড়ি', 'Hogar', 'الصفحة الرئيسية', 'Accueil', '家'),
(2, 'toggle_navigation', 'Toggle Navigation', 'টগল ন্যাভিগেশন', 'Activar Navegación', 'تبديل للملاحة', 'Basculer la navigation', '切换导航'),
(3, 'our_products', 'Our Products', 'আমাদের পণ্য', 'Nuestros Productos', 'منتجاتنا', 'Nos Produits', '我们的产品'),
(4, 'featured_product', 'Featured Product', 'বৈশিষ্ট্যযুক্ত পণ্য', 'Producto Destacado', 'المنتج المميز', 'Produit En Vedette', '特色产品'),
(5, 'see_more', 'See More', 'আরো দেখুন', 'Ver Más', 'شاهد المزيد', 'Voir Plus', '查看更多'),
(6, 'contact', 'Contact', 'যোগাযোগ', 'Contacto', 'اتصال', 'Contact', '联系'),
(7, 'search_product', 'Search Product', 'অনুসন্ধান পণ্য', 'Buscar Producto', 'البحث عن منتج', 'Recherche produit', '搜索产品'),
(8, 'choose_category', 'Choose Category', 'বিভাগ নির্বাচন করুন', 'Escoja una Categoría', 'اختر الفئة', 'Choisissez Catégorie', '选择类别'),
(9, 'choose_sub_category', 'Choose Sub Category', 'উপ বিভাগ চয়ন করুন', 'Elige categoría Sub', 'اختر الفئة الرئيسية', 'Choisissez Sous catégorie', '选择子类别'),
(10, 'latest_products', 'Latest Products', 'সাম্প্রতিক পণ্যসমূহ', 'Últimos Productos', 'أحدث المنتجات', 'Derniers produits', '最新产品'),
(11, 'most_sold', 'Most Sold', 'সবথেকে বেশি বিক্রিত', 'Lo más Vendido', 'الأكثر مبيعا', 'La plupart Vendu', '最畅销的'),
(12, 'most_viewed_products', 'Most Viewed Products', 'সর্বাধিক দেখা পণ্য', 'Productos más vistas', 'المنتجات الأكثر مشاهدة', 'Produits les plus consultés', '大多数浏览过的产品'),
(13, 'email_address', 'Email Address', 'এটি ইমেল ঠিকানা', 'Dirección De Correo Electrónico', 'عنوان البريد الإلكتروني', 'Adresse e-mail', '电子邮件地址'),
(14, 'subscribe', 'Subscribe', 'সদস্যতা', 'Suscribir', 'الاشتراك', 'S''abonner', '订阅'),
(15, 'categories', 'Categories', 'বিভাগ', 'Categorías', 'الفئات', 'Catégories', '分类'),
(16, 'useful_links', 'Useful Links', 'দরকারী লিংক', 'Enlaces Útiles', 'روابط مفيدة', 'Liens Utiles', '相关链接'),
(17, 'all_products', 'All Products', 'সব পণ্য', 'Todos Los Productos', 'جميع المنتجات', 'Tous Les Produits', '所有产品'),
(18, 'featured', 'Featured', 'বৈশিষ্ট্যযুক্ত', 'Destacado', 'ظهرت', 'Sélection', '精选'),
(19, 'contact_us', 'Contact Us', 'আমাদের সাথে যোগাযোগ করুন', 'Contáctenos', 'اتصل بنا', 'Contactez Nous', '联系我们'),
(20, 'phone', 'Phone', 'ফোন', 'Teléfono', 'هاتف', 'Téléphone', '电话'),
(21, 'website', 'Website', 'ওয়েবসাইট', 'Sitio web', 'الموقع', 'Site Internet', '网站'),
(22, 'email', 'Email', 'এটি ইমেল', 'Email', 'البريد الإلكتروني', 'Email', '电子邮件'),
(23, 'facebook', 'Facebook', 'ফেসবুক', 'Facebook', 'الفيسبوك', 'Facebook', 'Facebook的'),
(24, 'twitter', 'Twitter', 'টুইটার', 'Gorjeo', 'تغريد', 'Gazouillement', '推特'),
(25, 'google_plus', 'Google Plus', 'গুগল প্লাস', 'Google Plus', 'جوجل بلس', 'Google Plus', '谷歌加'),
(26, 'youtube', 'Youtube', 'ইউটিউব', 'Youtube', 'يوتيوب', 'Youtube', 'YouTube的'),
(27, 'all_rights_reserved', 'All Rights Reserved', 'সর্বস্বত্ব সংরক্ষিত', 'Todos Los Derechos Reservados', 'جميع الحقوق محفوظة', 'Tous Droits Réservés', '版权所有'),
(28, 'terms_&_condition', 'Terms & Condition', 'বিধি - নিষেধ এবং শর্তাবলী', 'Términos Y Condiciones', 'الشروط والأحكام', 'Termes &amp; Conditions', '条款及条件'),
(29, 'privacy_policy', 'Privacy Policy', 'গোপনীয়তা নীতি', 'Política De Privacidad', 'سياسة الخصوصية', 'Politique de confidentialité', '隐私政策'),
(30, 'product_added_to_cart', 'Product Added To Cart', 'পণ্য কার্ট যোগ', 'Producto añadido al carrito', 'أضيف المنتج للسلة', 'Produit ajouté au panier', '产品已加入购物车'),
(31, 'added_to_cart', 'Added To Cart', 'কার্ট যোগ', 'Añadido a la cesta', 'تم إضافته للسلة', 'Ajouté au panier', '添加到购物车'),
(32, 'product_quantity_exceed_availability!', 'Product Quantity Exceed Availability!', 'উত্পাদনের মোট পরিমানের সহজলভ্যতা অতিক্রম!', 'Producto Cantidad Exceed disponibles!', 'المنتج الكمية تتجاوز توافر!', 'Produit Quantité dépassera la disponibilité!', '产品数量超越空房！');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(33, 'product_already_added_to_cart!', 'Product Already Added To Cart!', 'পণ্য ইতিমধ্যে কার্ট যোগ!', 'Ya Producto añadido a la cesta!', 'المنتج أضفت إلى السلة!', 'Produit Déjà ajouté au panier!', '产品已添加到购物车！'),
(34, 'product_added_to_wishlist', 'Product Added To Wishlist', 'পণ্য শুরুতেই যোগ', 'Producto añadido a la lista de deseos', 'أضيف المنتج الى قائمه التمني', 'Produit ajouté à la liste', '产品添加到收藏'),
(35, 'added_to_wishlist', 'Added To Wishlist', 'শুরুতেই যোগ', 'Añadido a Mis Favoritos', 'أضيف الى قائمة الامنيات', 'Ajouté à la liste', '添加到收藏'),
(36, 'adding_to_wishlist..', 'Adding To Wishlist..', 'লটারি যোগ ..', 'Agregando a Mis Favoritos ..', 'إضافة إلى قائمة الامنيات ..', 'Ajout dans la liste ..', '添加到收藏..'),
(37, 'product_removed_from_wishlist', 'Product Removed From Wishlist', 'পণ্য সাইফুল থেকে সরানো হয়েছে', 'Producto Fuera De Regalos', 'تمت إزالة المنتج من قائمة الامنيات', 'Produit retiré de la liste d''envies', '产品移出收藏'),
(38, 'product_rated_successfully', 'Product Rated Successfully', 'পণ্য সফলভাবে রেট', 'Producto puntuado', 'المنتج تقييمه بنجاح', 'Produit nominale succès', '产品额定成功'),
(39, 'product_rating_failed', 'Product Rating Failed', 'পণ্য নির্ধারণ ব্যর্থ', 'Calificación del producto Falló', 'تقييم المنتج فشل', 'Évaluation du produit Échec', '产品评分失败'),
(40, 'you_already_rated_this_product', 'You Already Rated This Product', 'যদি আপনি ইতিমধ্যেই এই পণ্য রেট', 'Ya has puntuado este producto', 'كنت إذا تقييمه هذا المنتج', 'Vous déjà évalué ce produit', '您已经评价过此产品'),
(41, 'working..', 'Working..', 'ওয়ার্কিং ..', 'Trabajo ..', 'العمل ..', 'De travail ..', '工作..'),
(42, 'you_already_subscribed', 'You Already Subscribed', 'আপনি ইতিমধ্যেই সদস্যতা', 'Usted ya Suscrito', 'كنت مشتركا بالفعل', 'Vous êtes déjà inscrit', '你已经订阅'),
(43, 'you_subscribed_successfully', 'You Subscribed Successfully', 'আপনি সফলভাবে সদস্যতা', 'Usted Suscrito con éxito', 'كنت قد اشتركت بنجاح', 'Vous avez souscrit avec succès', '您已成功订阅'),
(44, 'you_already_subscribed_thrice_from_this_browser', 'You Already Subscribed Thrice From This Browser', 'যদি আপনি ইতিমধ্যেই এই ব্রাউজার থেকে তিনবার সাবস্ক্রাইব', 'Usted ya Suscrito Thrice De Este Browser', 'كنت مشتركا بالفعل ثلاث مرات من هذا المتصفح', 'Vous êtes déjà inscrit trois fois depuis ce navigateur', '你已经订阅三次从这个浏览器'),
(45, 'logging_in..', 'Logging In..', 'লগ ইন ..', 'Iniciar Sesión ..', 'تسجيل الدخول ..', 'Connexion ..', '在登录..'),
(46, 'you_logged_in_successfully', 'You Logged In Successfully', 'আপনি সফলভাবে লগ ইন', 'Usted ha entrado en el éxito', 'لقد دخلت بنجاح', 'Vous êtes connecté avec succès', '你登录成功'),
(47, 'login_failed!_try_again!', 'Login Failed! Try Again!', 'লগইন ব্যর্থ! </font><font>আবার চেষ্টা করুন!', 'Error De Inicio De Sesion! </font><font>Inténtalo De Nuevo!', 'فشل تسجيل الدخول! </font><font>حاول مرة أخرى!', 'Échec De La Connexion! </font><font>Essaye Encore!', '登录失败！</font><font>再试一次！'),
(48, 'submitting..', 'Submitting..', 'জমা ..', 'Envío de ..', 'تقديم ..', 'Envoi ..', '提交..'),
(49, 'email_sent_successfully', 'Email Sent Successfully', 'এটি ইমেল সফলভাবে পাঠানো', 'Email Enviado Satisfactoriamente', 'البريد الإلكتروني المرسلة بنجاح', 'Courriel envoyé avec succès', '电子邮件发送成功'),
(50, 'email_does_not_exist!', 'Email Does Not Exist!', 'ইমেইলটির কোন অস্তিত্ব নেই!', 'Email no existe!', 'البريد الإلكتروني غير موجود!', 'Email ne existe pas!', '电子邮件不存在！'),
(51, 'email_sending_failed!_try_again', 'Email Sending Failed! Try Again', 'এটি ইমেল ব্যর্থ পাঠানোর! </font><font>আবার চেষ্টা করুন', 'Envío de correo electrónico Error! </font><font>Inténtalo De Nuevo', 'إرسال البريد الإلكتروني فشل! </font><font>حاول مرة أخرى', 'Email envoi a échoué! </font><font>Essaye Encore', '电子邮件发送失败！</font><font>再试一次'),
(52, 'logging_in', 'Logging In', 'লগ ইন', 'Iniciar Sesión', 'تسجيل الدخول', 'Connexion', '在登录');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(53, 'adding_to_cart..', 'Adding To Cart..', 'কার্ট যোগ ..', 'Añadiendo al carro ..', 'إضافة إلى السلة ..', 'Ajout au panier ..', '添加到购物车..'),
(54, 'product_removed_from_cart', 'Product Removed From Cart', 'পণ্য কার্ট থেকে সরানো হয়েছে', 'Producto Fuera de la cesta', 'تمت إزالة المنتج من السلة', 'Produit retiré du panier', '产品移出车'),
(55, 'the_field_is_required', 'The Field Is Required', 'আপনি উত্তর দিবেন না', 'El campo es obligatorio', 'مطلوب الميدان', 'Le champ est obligatoire', '该字段是必须的'),
(56, 'logout', 'Logout', 'প্রস্থান', 'Cerrar Sesión', 'خروج', 'Se Déconnecter', '登出'),
(57, 'login', 'Login', 'লগইন', 'Iniciar Sesión', 'تسجيل الدخول', 'S''identifier', '登录'),
(58, 'register', 'Register', 'নিবন্ধন', 'Registrarse', 'تسجيل', 'Inscription', '注册'),
(59, 'sign_in', 'Sign In', 'প্রবেশ কর', 'Ingresar', 'تسجيل الدخول', 'S''inscrire', '签到'),
(60, 'do_not_have_account_?_click_', 'Do Not Have Account ? Click ', 'সেট ব্যবহার করা হয়নি? </font><font>দেখার জন্য ক্লিক করুন', 'No tiene cuenta? </font><font>Haga clic en', 'ليس لديك حساب؟ </font><font>انقر', 'Ne pas avoir un compte? </font><font>Cliquez', '没有帐户？</font><font>点击'),
(61, 'sign_up', 'Sign Up', 'নিবন্ধন করুন', 'Contratar', 'سجل', 'Signer', '签字'),
(62, 'add_to_cart', 'Add To Cart', 'কার্ট যোগ করুন', 'Añadir A La Cesta', 'أضف إلى السلة', 'Ajouter Au Panier', '添加到购物车'),
(63, 'to_registration_.', 'To Registration .', 'নিবন্ধন করুন.', 'Para inscripción.', 'إلى التسجيل.', 'Pour inscription.', '登记。'),
(64, 'password', 'Password', 'পাসওয়ার্ড', 'Contraseña', 'كلمة السر', 'Mot de passe', '密码'),
(65, 'forget_your_password_?', 'Forget Your Password ?', 'আপনার পাসওয়ার্ড ভুলে গেছেন?', 'Olvidaste Tu Contraseña?', 'نسيت كلمة المرور؟', 'Mot De Passe Oublié?', '忘记密码？'),
(66, 'log_in', 'Log In', 'আপনার যাত্রা শুরু করুন', 'Iniciar Sesión', 'تسجيل الدخول', 'S''identifier', '登录'),
(67, 'forgot_password', 'Forgot Password', 'পাসওয়ার্ড ভুলে গেছেন', 'Has Olvidado Tu Contraseña', 'نسيت كلمة المرور', 'Mot De Passe Oublié', '忘记密码'),
(68, 'submit', 'Submit', 'জমা দিন', 'Enviar', 'عرض', 'Soumettre', '提交'),
(69, 'close', 'Close', 'ঘনিষ্ঠ', 'Cerrar', 'قريب', 'Fermer', '关闭'),
(70, 'already_signed Up?_click', 'Already Signed Up? Click', 'ইতিমধ্যে সাইন আপ? </font><font>দেখার জন্য ক্লিক করুন', 'Ya está inscrito? </font><font>Haga clic en', 'توقيع بالفعل؟ </font><font>انقر', 'Déjà inscrit? </font><font>Cliquez', '已注册？</font><font>点击'),
(71, 'to_login_your_account', 'To Login Your Account', 'আপনার একাউন্টে লগইন করার জন্য', 'Para Entrar Tu Cuenta', 'لتسجيل الدخول إلى حسابك', 'Pour Connexion Votre compte', '要登录您的账户'),
(72, 'confirm_password', 'Confirm Password', 'পাসওয়ার্ড নিশ্চিত করুন', 'Confirmar Contraseña', 'تأكيد كلمة السر', 'Confirmez Le Mot De Passe', '确认密码'),
(73, 'your_first_name', 'Your First Name', 'তোমার নামের প্রথম অংশ', 'Su Nombre', 'الاسم الأول', 'Ton Prénom', '你的名字'),
(74, 'your_last_name', 'Your Last Name', 'তোমার শেষ নাম', 'Tu Apellido', 'اسمك الاخير', 'Votre Nom De Famille', '你的姓氏'),
(75, 'address_line_1', 'Address Line 1', 'ঠিকানা লেখার জায়গা 1', 'Dirección Línea 1', 'العنوان سطر 1', 'Adresse 1', '地址第一行'),
(76, 'address_line_2', 'Address Line 2', 'ঠিকানা লাইন ২', 'Dirección Línea 2', 'سطر العنوان 2', 'Adresse Ligne 2', '地址行2'),
(77, 'city', 'City', 'শহর', 'Ciudad', 'مدينة', 'Ville', '城市'),
(78, 'ZIP', 'ZIP', 'জিপ', 'Postal', 'ZIP', 'Postal', 'ZIP'),
(79, 'password_mismatched', 'Password Mismatched', 'পাসওয়ার্ড মিলছে না', 'Contraseña Mismatched', 'كلمة المرور غير متطابقة', 'Mot de passe Mismatched', '密码不匹配'),
(80, 'products', 'Products', 'পণ্য', 'Productos', 'المنتجات', 'Produits', '制品'),
(81, 'filter_by', 'Filter By', 'দ্বারা ফিল্টার', 'Filtrado Por', 'تصفية حسب', 'Filtrer Par', '过滤方式'),
(82, 'category', 'Category', 'শ্রেণী', 'Categoría', 'فئة', 'Catégorie', '类别'),
(83, 'price', 'Price', 'মূল্য', 'Precio', 'السعر', 'Prix', '价格'),
(84, 'results', 'Results', 'ফলাফল', 'Resultados', 'النتائج', 'Résultats', '结果');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(85, 'sign_in_to_your_account', 'Sign In To Your Account', 'আপনার অ্যাকাউন্টে সাইন ইন করুন', 'Iniciar Sesión En Su Cuenta', 'تسجيل الدخول إلى حسابك', 'Connectez-vous à votre compte', '登录到您的帐户'),
(86, 'forget_password', 'Forget Password', 'পাসওয়ার্ড ভুলে', 'Contraseña Olvidada', 'نسيت كلمة المرور', 'Mot De Passe Oublié', '忘记密码'),
(87, 'email_sent_with_new_password!', 'Email Sent With New Password!', 'এটি ইমেল নতুন পাসওয়ার্ড দিয়ে পাঠানো হয়েছে!', 'Correo electrónico enviado con la nueva contraseña!', 'البريد الإلكتروني المرسلة وكلمة المرور الجديدة!', 'Email envoyé avec nouveau mot de passe!', '电子邮件发送的新密码！'),
(88, 'cancelled', 'Cancelled', 'বাতিল হয়েছে', 'Cancelado', 'إلغاء', 'Annulé', '取消'),
(89, 'this_field_is_required', 'This Field Is Required', 'ঘরটি অবশ্যই পূরণ করতে হবে', 'Este Campo Es Requerido', 'هذه الخانة مطلوبه', 'Ce Champ Est Obligatoire', '这是必填栏'),
(90, 'signing_in...', 'Signing In...', 'সাইন ইন ...', 'Firmar En ...', 'تسجيل الدخول ...', 'Connectez-Vous ...', '登录...'),
(91, 'new_password_sent_to_your_email', 'New Password Sent To Your Email', 'আপনার ইমেল প্রেরণ নতুন পাসওয়ার্ড', 'Nueva contraseña enviada a su correo electrónico', 'كلمة السر الجديدة المرسلة إلى البريد الإلكتروني الخاص بك', 'Nouveau mot de passe envoyé à votre e-mail', '发送到您的邮箱新密码'),
(92, 'login_failed!', 'Login Failed!', 'লগইন ব্যর্থ!', 'Error De Inicio De Sesion!', 'فشل تسجيل الدخول!', 'Échec De La Connexion!', '登录失败！'),
(93, 'wrong_e-mail_address!_try_again', 'Wrong E-mail Address! Try Again', 'ভুল ইমেইল ঠিকানা! </font><font>আবার চেষ্টা করুন', 'Mail E-mail! </font><font>Inténtalo De Nuevo', 'الخطأ عنوان البريد الإلكتروني! </font><font>حاول مرة أخرى', 'Mauvaise adresse e-mail! </font><font>Essaye Encore', '错误的电子邮件地址！</font><font>再试一次'),
(94, 'login_successful!', 'Login Successful!', 'সফল লগইন!', 'Inicio de sesión correcto!', 'دخول ناجح!', 'Connexion Réussie!', '登录成功！'),
(95, 'SUCCESS!', 'SUCCESS!', 'সাফল্য!', 'ÉXITO!', 'النجاح!', 'SUCCÈS!', '成功了！'),
(96, 'reset_password', 'Reset Password', 'পাসওয়ার্ড রিসেট করুন', 'Restablecer La Contraseña', 'إعادة تعيين كلمة المرور', 'Réinitialiser Le Mot De Passe', '重设密码'),
(97, 'visit_home_page', 'Visit Home Page', 'হোম পেজ দেখুন', 'Visita la página de Inicio', 'زيارة الصفحة الرئيسية', 'Visitez la page d''accueil', '访问主页'),
(98, 'profile', 'Profile', 'প্রোফাইল', 'Perfil', 'الملف الشخصي', 'Profil', '轮廓'),
(99, 'dashboard', 'Dashboard', 'ড্যাশবোর্ড', 'Tablero', 'لوحة القيادة', 'Tableau de bord', '仪表盘'),
(100, '24_hours_stock', '24 Hours Stock', '24 ঘন্টা স্টক', '24 Horas de la', '24 ساعة المالية', '24 Heures Stock', '24小时股票'),
(101, '24_hours_sale', '24 Hours Sale', '24 ঘন্টা বিক্রয়', '24 Horas Venta', '24 ساعة بيع', '24 Heures Vente', '24小时销售'),
(102, '24_hours_destroy', '24 Hours Destroy', '24 ঘন্টা ধ্বংস', '24 Horas Destroy', '24 ساعة تدمير', '24 Heures Destroy', '24小时销毁'),
(103, 'pending_order_map', 'Pending Order Map', 'পেন্ডিং অর্ডারের ম্যাপ', 'Orden Pendiente Mapa', 'في انتظار ترتيب خريطة', 'Commande de cartes en attente', '挂单地图'),
(104, 'present_customer_live_on_your_store', 'Present Customer Live On Your Store', 'আপনার দোকান উপস্থিত গ্রাহক লাইভ', 'Presente en Vivo al cliente en su tienda', 'الحالي العملاء يعيشون على مخزن لديك', 'Présent en direct à la clientèle sur votre boutique', '目前客户住在你的店'),
(105, 'category_wise_monthly_stock', 'Category Wise Monthly Stock', 'বিভাগের বিজ্ঞ মাসিক স্টক', 'Categoría Wise Mensual Stock', 'فئة الحكيم المالية الشهرية', 'Catégorie Wise mensuel Stock', '明智类股票月刊'),
(106, 'category_wise_monthly_sale', 'Category Wise Monthly Sale', 'বিভাগের বিজ্ঞ মাসিক বিক্রয়', 'Categoría Wise Mensual Venta', 'الفئة بيع الحكيم شهري', 'Catégorie Wise vente mensuel', '分类明智每月销售'),
(107, 'category_wise_monthly_destroy', 'Category Wise Monthly Destroy', 'বিভাগের বিজ্ঞ মাসিক ধ্বংস', 'Categoría Wise Mensual Destroy', 'تدمير فئة الحكيم شهري', 'Détruisez Catégorie Wise mensuel', '分类明智每月销毁');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(108, 'category_wise_monthly_grand_profit', 'Category Wise Monthly Grand Profit', 'বিভাগের বিজ্ঞ মাসিক গ্র্যান্ড লাভ', 'Categoría Wise Mensual Gran Beneficio', 'فئة الحكيم الشهرية الكبرى الربح', 'Catégorie Wise mensuel de Grand Profit', '分类明智每月利润大'),
(109, 'cost', 'Cost', 'মূল্য', 'Costo', 'كلفة', 'Coût', '费用'),
(110, 'value', 'Value', 'মান', 'Valor', 'قيمة', 'Valeur', '值'),
(111, 'loss', 'Loss', 'ক্ষতি', 'Pérdida', 'خسارة', 'Perte', '失利'),
(112, 'profit', 'Profit', 'লাভ', 'Beneficio', 'ربح', 'Bénéfice', '利润'),
(113, 'sub-category', 'Sub-category', 'উপ-বিভাগ', 'Sub-categoría', 'الفئة الفرعية', 'Sous-catégorie', '分类别'),
(114, 'brands', 'Brands', 'ব্লগ', 'Marcas', 'العلامات التجارية', 'Marques', '品牌'),
(115, 'product_stock', 'Product Stock', 'পণ্য স্টক', 'Stock del producto', 'الأسهم المنتج', 'Stock de produits', '产品库存'),
(116, 'sale', 'Sale', 'বিক্রয়', 'Venta', 'بيع', 'Vente', '卖'),
(117, 'reports', 'Reports', 'প্রতিবেদন', 'Informes', 'تقارير', 'Rapports', '报告'),
(118, 'product_compare', 'Product Compare', 'পণ্য তুলনা', 'Producto Comparar', 'المنتج قارن', 'Produit Comparer', '产品比较'),
(119, 'product_wishes', 'Product Wishes', 'পণ্য শুভেচ্ছা', 'Los deseos del producto', 'التمنيات المنتج', 'Voeux du produit', '产品愿望'),
(120, 'customers', 'Customers', 'গ্রাহকরা', 'Clientes', 'الزبائن', 'Clientèle', '客户'),
(121, 'create_new_page', 'Create New Page', 'নতুন পৃষ্ঠা তৈরি করুন', 'Crear nueva página', 'إنشاء صفحة جديدة', 'Créer une page', '创建新页面'),
(122, 'create_slider', 'Create Slider', 'স্লাইডার তৈরি করুন', 'Crear deslizante', 'إنشاء المتزلج', 'Créer Curseur', '创建滑块'),
(123, 'front_settings', 'Front Settings', 'ফ্রন্ট সেটিংস', 'Ajustes delanteros', 'إعدادات الأمامية', 'Réglages avant', '前方设置'),
(124, 'banner_settings', 'Banner Settings', 'ব্যানার সেটিংস', 'Ajustes Banner', 'إعدادات راية', 'Paramètres de Bannière', '横幅设置'),
(125, 'site_settings', 'Site Settings', 'সাইট সেটিংস', 'Configuración del sitio', 'إعدادات الموقع', 'Paramètres du site', '网站设置'),
(126, 'staffs', 'Staffs', 'কর্মীরা', 'Estados Mayores', 'الموظفين', 'Staffs', '工作人员'),
(127, 'all_staffs', 'All Staffs', 'সমস্ত লাঠি', 'Todos los Estados Mayores', 'كل الأركان', 'Tous les états-majors', '所有员工'),
(128, 'staff_permissions', 'Staff Permissions', 'স্টাফ অনুমতি', 'Permisos de los funcionarios', 'ضوابط الموظفين', 'Permission de personnel', '工作人员权限'),
(129, 'messaging', 'Messaging', 'মেসেজিং', 'Mensajería', 'الرسائل', 'Messagerie', '消息'),
(130, 'newsletters', 'Newsletters', 'নিউজ লেটার', 'Boletines', 'النشرات الإخبارية', 'Bulletins', '简讯'),
(131, 'contact_messages', 'Contact Messages', 'যোগাযোগ বার্তা', 'Contacto Mensajes', 'رسائل الاتصال', 'Contacts Messages', '联系信息'),
(132, 'language', 'Language', 'ভাষা', 'Idioma', 'لغة', 'Langue', '语言'),
(133, 'business_settings', 'Business Settings', 'ব্যবসায়ের সেটিংসের', 'Configuración de negocio', 'إعدادات التجارية', 'Réglages d''affaires', '商业环境'),
(134, 'manage_admin_profile', 'Manage Admin Profile', 'অ্যাডমিন প্রোফাইল গালাগাল প্রতিবেদন করো', 'Administrar perfil de administrador', 'إدارة الملف الشخصي ل admin', 'Gérer un profil administrateur', '管理管理员配置'),
(135, 'SEO_proggres', 'SEO Proggres', 'এসইও Proggres', 'SEO Proggres', 'SEO Proggres', 'SEO Proggres', 'SEO Proggres'),
(136, 'online_tutorial', 'Online Tutorial', 'অনলাইন টিউটোরিয়াল', 'Tutorial en línea', 'دروس عبر الإنترنت', 'Didacticiel en ligne', '在线教程'),
(137, 'checkout', 'Checkout', 'হোটেল হইতে বিদায়সময়', 'Revisa', 'الدفع', 'Check-Out', '查看'),
(138, 'deleted_successfully', 'Deleted Successfully', 'সফলভাবে মোছা হয়েছে', 'Eliminado correctamente', 'حذف بنجاح', 'Supprimé avec succès', '成功删除'),
(139, 'cancel', 'Cancel', 'বাতিল', 'Cancelar', 'إلغاء', 'Annuler', '取消'),
(140, 'required', 'Required', 'প্রয়োজনীয়', 'Necesario', 'مطلوب', 'Requis', '需要'),
(141, 'must_be_a_number', 'Must Be A Number', 'একটি সংখ্যা হতে হবে', 'Debe Ser Un Número', 'يجب أن يكون هناك عدد', 'Doit être un nombre', '必须是数字');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(142, 'must_be_a_valid_email_address', 'Must Be A Valid Email Address', 'একটি বৈধ ইমেইল ঠিকানা আবশ্যক', 'Debe ser una dirección de correo electrónico válida', 'يجب أن يكون عنوان بريد إلكتروني صالح', 'Doit être une adresse e-mail valide', '必须是一个有效的E-Mail地址'),
(143, 'save', 'Save', 'সংরক্ষণ', 'Guardar', 'حفظ', 'Sauvegarder', '保存'),
(144, 'product_published!', 'Product Published!', 'পণ্য প্রকাশিত!', 'Producto Publicado!', 'المنتج النشر!', 'Publié produit!', '产品发布！'),
(145, 'product_unpublished!', 'Product Unpublished!', 'পণ্য অপ্রকাশিত!', 'Producto Inédito!', 'المنتج غير منشورة!', 'Produit inédit!', '产品未公布！'),
(146, 'product_featured!', 'Product Featured!', 'পণ্য দেখানো হয়েছে!', 'Producto Destacado!', 'منتج مميز!', 'Produit vedette!', '产品特色！'),
(147, 'product_unfeatured!', 'Product Unfeatured!', 'পণ্য Unfeatured!', 'Sin rasgos producto!', 'Unfeatured المنتج!', 'Unfeatured produit!', '产品Unfeatured！'),
(148, 'slider_published!', 'Slider Published!', 'স্লাইডার প্রকাশিত!', 'Deslizador Publicado!', 'المنزلق نشر!', 'Publié curseur!', '滑块发布！'),
(149, 'slider_unpublished!', 'Slider Unpublished!', 'স্লাইডার অপ্রকাশিত!', 'Deslizador Inédito!', 'التمرير غير منشورة!', 'Curseur inédit!', '滑块未公布！'),
(150, 'page_published!', 'Page Published!', 'পৃষ্ঠা প্রকাশিত!', 'Página Publicado!', 'الصفحة نشر!', 'Publié page!', '网页发布！'),
(151, 'page_unpublished!', 'Page Unpublished!', 'পাতা অপ্রকাশিত!', 'Página Inédito!', 'الصفحة غير منشورة!', 'Page inédite!', '页面未公布！'),
(152, 'notification_sound_enabled!', 'Notification Sound Enabled!', 'বিজ্ঞপ্তি সাউন্ড সক্ষম!', 'Notificación de sonido activado!', 'الإخطار الصوت المتعددة!', 'Notification sonore activé!', '通知启用声音！'),
(153, 'notification_sound_disabled!', 'Notification Sound Disabled!', 'বিজ্ঞপ্তি সাউন্ড নিষ্ক্রিয়!', 'Notificación de sonido discapacitados!', 'الإخطار الصوت معطل!', 'Notification sonore handicapés!', '通知声音残疾人！'),
(154, 'google_login_enabled!', 'Google Login Enabled!', 'গুগল লগ-ইন সক্রিয়!', 'Google Login Habilitado!', 'جوجل الدخول ممكن!', 'Google Connexion activé!', '谷歌登录启用！'),
(155, 'google_login_disabled!', 'Google Login Disabled!', 'গুগল লগইন অক্ষম!', 'Google Acceso de minusválidos!', 'جوجل تسجيل الدخول معطل!', 'Google Login Disabled!', '谷歌禁用登录！'),
(156, 'facebook_login_enabled!', 'Facebook Login Enabled!', 'ফেসবুক লগ-ইন সক্রিয়!', 'Facebook Login Habilitado!', 'الفيسبوك تسجيل الدخول ممكن!', 'Facebook Connexion activé!', 'Facebook的登录启用！'),
(157, 'facebook_login_disabled!', 'Facebook Login Disabled!', 'ফেসবুক লগইন অক্ষম!', 'Facebook Login discapacitados!', 'الفيسبوك تسجيل الدخول معطل!', 'Facebook Login Disabled!', 'Facebook的登录禁用！'),
(158, 'paypal_payment_disabled!', 'Paypal Payment Disabled!', 'পেপ্যাল ​​পেমেন্ট অক্ষম!', 'El pago de PayPal habilitado!', 'باي بال الدفع معطل!', 'Paiement Paypal désactivé!', '支付宝付款禁用！'),
(159, 'paypal_payment_enabled!', 'Paypal Payment Enabled!', 'পেপ্যাল ​​পেমেন্ট সক্ষম!', 'El pago de PayPal Habilitado!', 'باي بال الدفع المتعددة!', 'Paiement Paypal activé!', 'Paypal支付启用！'),
(160, 'manage_categories', 'Manage Categories', 'বিভাগ গালাগাল', 'Gestionar Categorías', 'إدارة الفئات', 'Gérer Les Catégories', '管理类别'),
(161, 'add_category', 'Add Category', 'বিভাগ যোগ করুন', 'Guardar Categoría', 'إضافة فئة', 'Ajouter Catégorie', '添加类别'),
(162, 'successfully_added!', 'Successfully Added!', 'সফলভাবে যোগ করা হয়েছে!', 'Con éxito Añadido!', 'واضاف بنجاح!', 'Ajouté avec succès!', '添加成功！'),
(163, 'create_category', 'Create Category', 'বিভাগ তৈরি করুন', 'Crear categoría', 'إنشاء الفئة', 'Créer une catégorie', '创建类别'),
(164, 'no', 'No', 'না', 'No', 'لا', 'Non', '没有'),
(165, 'name', 'Name', 'নাম', 'Nombre', 'اسم', 'Nom', '名字'),
(166, 'options', 'Options', 'বিকল্প', 'Opciones', 'خيارات', 'Options', '选项'),
(167, 'manage_sub_categories', 'Manage Sub Categories', 'উপ বিভাগ গালাগাল', 'Administrar Sub Categorías', 'إدارة الفئات الفرعية', 'Gérer Sous-catégories', '管理子分类');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(168, 'add_sub-category', 'Add Sub-category', 'উপ-বিভাগ যোগ করুন', 'Añadir Sub-categoría', 'إضافة فئة الفرعية', 'Ajouter Sous-catégorie', '添加子类别'),
(169, 'create_sub_category', 'Create Sub Category', 'উপ বিভাগ তৈরি করুন', 'Crear Subcategoría', 'إنشاء التصنيف الفرعي', 'Créez Sous catégorie', '创建子类别'),
(170, 'sub_category', 'Sub Category', 'সাব বিভাগ', 'Sub Categoría', 'التصنيف الفرعي', 'Sous catégorie', '子类别'),
(171, 'manage_brands', 'Manage Brands', 'ব্র্যান্ড পরিচালনা', 'Administrar las marcas', 'إدارة العلامات التجارية', 'Gérer Marques', '管理品牌'),
(172, 'add_brand', 'Add Brand', 'ব্র্যান্ড যোগ', 'Añadir Marca', 'إضافة العلامة التجارية', 'Ajouter Marque', '添加品牌'),
(173, 'create_brand', 'Create Brand', 'ব্র্যান্ড তৈরি করুন', 'Crear Marca', 'إنشاء العلامة التجارية', 'Créer Marque', '创建品牌'),
(174, 'logo', 'Logo', 'লোগো', 'Logo', 'الشعار', 'Logo', '徽标'),
(175, 'brand', 'Brand', 'ব্র্যান্ড', 'Marca', 'علامة تجارية', 'Marque', '牌'),
(176, 'manage_product', 'Manage Product', 'পণ্য গালাগাল প্রতিবেদন করো', 'Manejo de Producto', 'إدارة المنتج', 'Gérer produit', '管理产品'),
(177, 'add_product', 'Add Product', 'পণ্য যোগ করুন', 'Añadir Producto', 'إضافة منتج', 'Ajouter un produit', '添加产品'),
(178, 'create_product', 'Create Product', 'পণ্য তৈরি করুন', 'Crear Producto', 'إنشاء المنتج', 'Créez produit', '创建产品'),
(179, 'back_to_product_list', 'Back To Product List', 'পিছনে পণ্য তালিকায়', 'Volver al listado de productos', 'الرجوع إلى قائمة المنتجات', 'Retour à la liste de produit', '返回产品列表'),
(180, 'image', 'Image', 'ভাবমূর্তি', 'Imagen', 'صورة', 'Image', '图像'),
(181, 'title', 'Title', 'খেতাব', 'Título', 'عنوان', 'Titre', '称号'),
(182, 'current_quantity', 'Current Quantity', 'বর্তমান পরিমাণ', 'Cantidad actual', 'الكمية الحالية', 'Quantité actuelle', '电流量'),
(183, 'publish', 'Publish', 'প্রকাশ করা', 'Publicar', 'نشر', 'Publier', '发布'),
(184, 'product', 'Product', 'পণ্য', 'Producto', 'المنتج', 'Produit', '产品'),
(185, 'quantity', 'Quantity', 'পরিমাণ', 'Cantidad', 'كمية', 'Quantité', '数量'),
(186, 'sale Price', 'Sale Price', 'বিক্রয় মূল্য', 'Precio De Venta', 'سعر البيع', 'Prix ​​De Vente', '销售价格'),
(187, 'creation Date', 'Creation Date', 'তৈরির তারিখ', 'Fecha De Creacion', 'تاريخ الإنشاء', 'Date De Création', '创建日期'),
(188, 'manage_banner', 'Manage Banner', 'ব্যানার গালাগাল প্রতিবেদন করো', 'Administrar Banner', 'إدارة راية', 'Gérer Bannière', '管理横幅'),
(189, 'homepage', 'Homepage', 'হোম পেজ', 'Página principal', 'الصفحة الرئيسية', 'Page d''accueil', '主页'),
(190, 'category_page', 'Category Page', 'বিভাগ পাতায় লেখা', 'Categoría Página', 'الفئة الصفحة', 'Catégorie page', '分类页'),
(191, 'featured_page', 'Featured Page', 'আলোচিত পাতা', 'Página Destacado', 'صفحة مميزة', 'Vedette page', '推荐页面'),
(192, 'after_slider', 'After Slider', 'স্লাইডার পর', 'Después deslizante', 'بعد المتزلج', 'Après Curseur', '后滑块'),
(193, 'select_banner_image', 'Select Banner Image', 'ব্যানার চিত্র নির্বাচন করুন', 'Seleccionar Imagen del Anuncio', 'حدد راية صورة', 'Sélectionnez Banner Image', '选择横幅图片'),
(194, 'link', 'Link', 'লিংক', 'Enlace', 'صلة', 'Lien', '链接'),
(195, 'updating..', 'Updating..', 'আপডেট ..', 'Actualizando ..', 'تحديث ..', 'Mise à jour ..', '更新..'),
(196, 'settings_updated!', 'Settings Updated!', 'সেটিংস আপডেট!', 'Ajustes Actualizado!', 'الإعدادات المحدثة!', 'Paramètres Mise à jour!', '设置更新！'),
(197, 'update', 'Update', 'আপডেট', 'Actualización', 'التحديث', 'Mise À Jour', '更新'),
(198, 'after_featured', 'After Featured', 'পরে বৈশিষ্ট্যযুক্ত', 'Después destacados', 'بعد مميزة', 'Après vedette', '精选后'),
(199, 'after_search', 'After Search', 'অনুসন্ধান পর', 'Después de Búsqueda', 'بعد البحث', 'Après Recherche', '经过搜索'),
(200, 'after_category', 'After Category', 'বিভাগ পরে', 'Después Categoría', 'بعد الفئة', 'Après Catégorie', '分类后，'),
(201, 'after_latest', 'After Latest', 'সর্বশেষ পর', 'Después reciente', 'بعد آخر', 'Après Dernières', '经过最新');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(202, 'after_popular', 'After Popular', 'জনপ্রিয় পর', 'Después populares', 'بعد الشعبية', 'Après populaire', '之后人气'),
(203, 'after_most_viewed', 'After Most Viewed', 'সাম্প্রতিক পর', 'After Most Viewed', 'بعد الأكثر مشاهدة', 'Après plus consultés', '最受欢迎之后'),
(204, 'after_filters', 'After Filters', 'ফিল্টার পর', 'Después de Filtros', 'بعد الفلاتر', 'Après Filtres', '经过过滤器'),
(205, 'after_most_sold', 'After Most Sold', 'সবথেকে বেশি বিক্রিত পর', 'Después de más vendidos', 'بعد الأكثر مبيعا', 'Après les plus vendus', '最畅销的后'),
(206, 'banner_published!', 'Banner Published!', 'ব্যানার প্রকাশিত!', 'Banner Publicado!', 'راية نشر!', 'Bannière Publié!', '横幅发布！'),
(207, 'banner_unpublished!', 'Banner Unpublished!', 'ব্যানার অপ্রকাশিত!', 'Banner Inédito!', 'راية غير منشورة!', 'Bannière inédit!', '未公布的旗帜！'),
(208, 'manage_site', 'Manage Site', 'সাইট পরিচালনা', 'Administrar sitio', 'إدارة الموقع', 'Gérer le site', '管理网站'),
(209, 'general_settings', 'General Settings', 'সাধারণ সেটিংস', 'Configuración General', 'الإعدادات العامة', 'Réglages Généraux', '常规设置'),
(210, 'favicon', 'Favicon', 'ফেভিকন', 'Favicon', 'فافيكون', 'Favicon', '网站图标'),
(211, 'social_media', 'Social Media', 'সামাজিক মাধ্যম', 'Medio Social', 'وسائل التواصل الاجتماعي', 'Médias Sociaux', '社交媒体'),
(212, 'social_login_configuaration', 'Social Login Configuaration', 'সামাজিক প্রবেশ করুন Configuaration', 'Social Acceso de configuaration', 'تسجيل الدخول الاجتماعي Configuaration', 'Social Connexion configuaration', '社会登录Configuaration'),
(213, 'product_comment_settings', 'Product Comment Settings', 'পণ্য মন্তব্য সেটিংস', 'Configuración de producto Comentario', 'إعدادات المنتج تعليق', 'Produit Commentez Paramètres', '商品评论设置'),
(214, 'SEO', 'SEO', 'এসইও', 'SEO', 'SEO', 'SEO', '搜索引擎优化'),
(215, 'captcha_settings', 'Captcha Settings', 'ক্যাপচা সেটিংস', 'Ajustes Captcha', 'إعدادات CAPTCHA', 'Paramètres Captcha', '验证码设置'),
(216, 'home_page', 'Home Page', 'হোম পেজ', 'Home Page', 'الصفحة الرئيسية', 'Page d''accueil', '主页'),
(217, 'contact_page', 'Contact Page', 'যোগাযোগের পৃষ্ঠায়', 'Página de contacto', 'صفحة الاتصال', 'Page de contact', '联系方式页面'),
(218, 'footer', 'Footer', 'পাদলেখ', 'Pie de página', 'تذييل', 'Pied de page', '页脚'),
(219, 'system_name', 'System Name', 'সিস্টেম নাম', 'Nombre del sistema', 'اسم النظام', 'Name System', '系统名称'),
(220, 'system_email', 'System Email', 'সিস্টেম ইমেল', 'Sistema de Correo', 'نظام البريد الإلكتروني', 'Système Email', '电子邮件系统'),
(221, 'system_title', 'System Title', 'সিস্টেম শিরোনাম', 'Sistema Título', 'نظام العنوان', 'Système Titre', '系统标题'),
(222, 'admin_notification_sound', 'Admin Notification Sound', 'অ্যাডমিন বিজ্ঞপ্তি সাউন্ড', 'Sonido de notificación de administración', 'مشرف صوت الإعلام', 'Administrateur notification sonore', '管理员通知声音'),
(223, 'admin_notification_volume', 'Admin Notification Volume', 'অ্যাডমিন বিজ্ঞপ্তি ভলিউম', 'Volumen de Notificación de administración', 'مشرف إعلام حجم', 'Administrateur volume de la notification', '管理员通知音量'),
(224, 'Volume_:_', 'Volume : ', 'ভলিউম: ', 'Volumen: ', 'الصوت: ', 'Volume: ', '体积： '),
(225, 'homepage_notification_sound', 'Homepage Notification Sound', 'হোম পেজ বিজ্ঞপ্তি সাউন্ড', 'Notificación de sonido Página de inicio', 'الصفحة الرئيسية صوت الإعلام', 'Page d''accueil de notification sonore', '首页通知声音'),
(226, 'homepage_notification_volume', 'Homepage Notification Volume', 'হোম পেজ বিজ্ঞপ্তি ভলিউম', 'Volumen Notificación Homepage', 'الصفحة الرئيسية إعلام حجم', 'Page d''accueil Volume de notification', '首页通知音量'),
(227, 'saving', 'Saving', 'রক্ষা', 'Ahorro', 'إنقاذ', 'Économie', '节约'),
(228, 'home_category', 'Home Category', 'হোম বিভাগ', 'Inicio Categoría', 'home الفئة', 'Accueil Catégorie', '首页分类'),
(229, 'home_brands', 'Home Brands', 'হোম ব্র্যান্ড', 'Inicio Marcas', 'الرئيسية ماركات', 'Accueil Marques', '家居品牌');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(230, 'manage_category_page', 'Manage Category Page', 'বিষয়শ্রেণী পাতা গালাগাল প্রতিবেদন করো', 'Administrar Categoría Página', 'إدارة الفئة الصفحة', 'Gérer Catégorie page', '管理分类页'),
(231, 'side_bar_position', 'Side Bar Position', 'সাইড বার অবস্থান', 'Barra lateral Posición', 'الجانب بار الوظيفة', 'Side Bar Position', '边栏位置'),
(232, 'upload_logo', 'Upload Logo', 'আপলোড লোগো', 'Subir Logo', 'تحميل الشعار', 'Upload Logo', '上传徽标'),
(233, 'drop_logos_to_upload', 'Drop Logos To Upload', 'আপলোড লোগো ছাড়ুন', 'Caída Logos Para Sube', 'إسقاط شعارات لتحميل', 'Déposez Logos Pour télécharger', '降标志上传'),
(234, 'or_click_to_pick_manually', 'Or Click To Pick Manually', 'অথবা ম্যানুয়ালি চয়ন করার জন্য ক্লিক করুন', 'O Haga clic para seleccionar manualmente', 'أو انقر لاختيار يدويا', 'Ou Cliquez sur pour choisir manuellement', '或点击手动选择'),
(235, 'all_logos', 'All Logos', 'সমস্ত প্রতীক', 'Todos los logos', 'كل الشعارات', 'Tous les Logos', '所有徽标'),
(236, 'select_logo', 'Select Logo', 'নির্বাচন লোগো', 'Seleccione Logo', 'حدد الشعار', 'Sélectionnez Logo', '选择标识'),
(237, 'place', 'Place', 'জায়গা', 'Lugar', 'مكان', 'Endroit', '地方'),
(238, 'admin_logo', 'Admin Logo', 'অ্যাডমিন লোগো', 'Logo de administración', 'المشرف الشعار', 'Administrateur Logo', '管理员标识'),
(239, 'successfully_selected!', 'Successfully Selected!', 'সফলভাবে নির্বাচিত!', 'Con éxito seleccionada!', 'مختارة بنجاح!', 'Sélectionné avec succès!', '成功入选！'),
(240, 'change', 'Change', 'পরিবর্তন', 'Cambio', 'تغيير', 'Changement', '变化'),
(241, 'homepage_header_logo', 'Homepage Header Logo', 'হোম পেজ শিরোলেখ লোগো', 'Página de inicio Logo Cabecera', 'الصفحة الرئيسية رأس الشعار', 'Accueil Logo Header', '首页页眉徽标'),
(242, 'homepage_footer_logo', 'Homepage Footer Logo', 'হোম পেজ পাদলেখ লোগো', 'Página de inicio Pie de página Logo', 'الصفحة الرئيسية تذييل شعار', 'Accueil Footer Logo', '网页页脚徽标'),
(243, 'select_favicon', 'Select Favicon', 'নির্বাচন ফেভিকন', 'Seleccione Favicon', 'حدد فافيكون', 'Sélectionnez Favicon', '选择网站图标'),
(244, 'social_links', 'Social Links', 'সামাজিক লিংক', 'Enlaces Sociales', 'الروابط الاجتماعية', 'Liens sociaux', '社会联系'),
(245, 'discus_settings', 'Discus Settings', 'চাকতি সেটিংস', 'Ajustes Discus', 'إعدادات رمي ​​القرص', 'Réglages Discus', '铁饼设置'),
(246, 'discus_ID', 'Discus ID', 'চাকতি আইডি', 'Discus ID', 'رمي القرص ID', 'Discus ID', '七彩ID'),
(247, 'facebook_login_settings', 'Facebook Login Settings', 'ফেসবুক লগইন সেটিংগুলি', 'Facebook Entrar Configuración', 'الفيسبوك تسجيل الدخول إعدادات', 'Facebook Paramètres de connexion', 'Facebook的登录设置'),
(248, 'status', 'Status', 'অবস্থা', 'Estado', 'حالة', 'Statut', '状态'),
(249, 'google+_login_settings', 'Google+ Login Settings', 'Google + লগইন সেটিংগুলি', 'Google+ Entrar Configuración', 'في Google+ الدخول إعدادات', 'Google+ Paramètres de connexion', 'Google+的登录设置'),
(250, 'public_key', 'Public Key', 'সর্বজনীন কী', 'Clave Pública', 'المفتاح العام', 'À clé publique', '公钥'),
(251, 'private_key', 'Private Key', 'ব্যক্তিগত কী', 'Clave Privada', 'مفتاح خاص', 'Clé privée', '私钥'),
(252, 'manage_search_engine_optimization', 'Manage Search Engine Optimization', 'সার্চ ইঞ্জিন অপ্টিমাইজেশান গালাগাল প্রতিবেদন করো', 'Administrar la optimización del Search Engine', 'إدارة محرك البحث الأمثل', 'Gérer Search Engine Optimization', '管理搜索引擎优化'),
(253, 'keywords', 'Keywords', 'মূলশব্দ', 'Palabras clave', 'الكلمات المفتاحية', 'Mots-clés', '关键词'),
(254, 'author', 'Author', 'লেখক', 'Autor', 'مؤلف', 'Auteur', '笔者'),
(255, 'description', 'Description', 'বিবরণ', 'Descripción', 'وصف', 'Description', '描述'),
(256, 'contact_address', 'Contact Address', 'যোগাযোগের ঠিকানা', 'Dirección De Contacto', 'عنوان الإتصال', 'Adresse De Contact', '联系地址'),
(257, 'contact_phone', 'Contact Phone', 'ফোনে যোগাযোগ', 'Teléfono De Contacto', 'الاتصال الهاتف', 'Numéro Du Contact', '联系电话'),
(258, 'contact_email', 'Contact Email', 'যোগাযোগের ই - মেইল', 'Email De Contacto', 'تواصل بالبريد الاكتروني', 'Email Du Contact', '联系人电子邮件');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(259, 'contact_website', 'Contact Website', 'যোগাযোগ ওয়েবসাইট', 'Contacto Sitio web', 'الإتصال الموقع', 'Contact Site', '联系网站'),
(260, 'contact_about', 'Contact About', 'সম্পর্কে যোগাযোগ', 'Contacto Acerca', 'الاتصال عن', 'Contactez-propos', '联系关于'),
(261, 'footer_category', 'Footer Category', 'পাদলেখ বিভাগ', 'Pie de página Categoría', 'تذييل الفئة', 'Pied de page Catégorie', '页脚类别'),
(262, 'footer_text', 'Footer Text', 'পাদলেখ শিরোনাম', 'Texto De Pie De Página', 'تذييل النص', 'Pied de texte', '页脚文本'),
(263, 'really_want_to_delete_this_logo?', 'Really Want To Delete This Logo?', 'সত্যিই এই লোগো মুছে ফেলতে চান?', 'Realmente desea eliminar este logotipo?', 'حقا تريد حذف هذا الشعار؟', 'Vraiment de vouloir supprimer ce logo?', '真的要删除这个标志？'),
(264, 'manage_languages', 'Manage Languages', 'ভাষা পরিচালনা', 'Administrar Idiomas', 'إدارة اللغات', 'Gérer les langues', '管理语言'),
(265, 'add_language', 'Add Language', 'নতুন ভাষা যোগ করা', 'Agregar idioma', 'إضافة اللغة', 'Ajouter une langue', '添加语言'),
(266, 'add_new_word', 'Add New Word', 'নতুন শব্দ যোগ', 'Añadir nueva palabra', 'إضافة جديد وورد', 'Ajout d''un mot', '添加新词'),
(267, 'really_want_to_delete_this_language?', 'Really Want To Delete This Language?', 'সত্যিই এই ভাষা মুছে ফেলতে চান?', 'Realmente desea eliminar este idioma?', 'حقا تريد حذف هذه اللغة؟', 'Vraiment de vouloir supprimer cette langue?', '真的要删除这种语言？'),
(268, 'saving..', 'Saving..', 'সংরক্ষণ ..', 'Ahorrar ..', 'إنقاذ ..', 'Enregistrement ..', '节能..'),
(269, 'delete_language', 'Delete Language', 'ভাষা মুছে দিতে', 'Eliminar Idioma', 'حذف اللغة', 'Supprimer Langue', '删除语言'),
(270, 'select_language', 'Select Language', 'ভাষা নির্বাচন কর', 'Seleccione Idioma', 'اختار اللغة', 'Choisir La Langue', '选择语言'),
(271, 'word', 'Word', 'শব্দ', 'Palabra', 'كلمة', 'Mot', '字'),
(272, 'translation', 'Translation', 'অনুবাদ', 'Traducción', 'ترجمة', 'Traduction', '翻译'),
(273, 'updated!', 'Updated!', 'আপডেট করা হয়েছে!', 'Actualizado!', 'تحديث!', 'Mise à jour!', '更新！'),
(274, 'really_want_to_delete_this_word?', 'Really Want To Delete This Word?', 'সত্যিই এই শব্দ মুছে ফেলতে চান?', 'Realmente desea eliminar esta Palabra?', 'حقا تريد حذف هذه الكلمة؟', 'Vraiment de vouloir supprimer cette Parole?', '真的要删除这个字？'),
(275, 'delete', 'Delete', 'মুছে দিন', 'Borrar', 'حذف', 'Effacer', '删除'),
(276, 'translate', 'Translate', 'অনুবাদ করা', 'Traducir', 'ترجم', 'Traduire', '翻译'),
(277, 'save_all', 'Save All', 'সব সংরক্ষণ করুন', 'Salvar A Todos', 'احفظ الكل', 'Sauver Tous', '保存全部'),
(278, 'manage_profile', 'Manage Profile', 'প্রোফাইল গালাগাল প্রতিবেদন করো', 'Administrar perfil', 'إدارة الملف', 'Gérer le profil', '管理个人资料'),
(279, 'manage_details', 'Manage Details', 'বিস্তারিত গালাগাল প্রতিবেদন করো', 'Administrar Detalles', 'إدارة تفاصيل', 'Gérer Détails', '管理细则'),
(280, 'address', 'Address', 'ঠিকানা', 'Dirección', 'عنوان', 'Adresse', '地址'),
(281, 'profile_updated!', 'Profile Updated!', 'প্রোফাইল আপডেট!', 'Perfil Actualizado!', 'يتم تجديد!', 'Profil Mis À Jour!', '个人资料已更新！'),
(282, 'update_profile', 'Update Profile', 'হালনাগাদ প্রফাইল', 'Actualización Del Perfil', 'تحديث الملف', 'Mettre À Jour Le Profil', '更新个人资料'),
(283, 'change_password', 'Change Password', 'পাসওয়ার্ড পরিবর্তন করুন', 'Cambiar La Contraseña', 'تغيير كلمة المرور', 'Changer Le Mot De Passe', '更改密码'),
(284, 'current_password', 'Current Password', 'বর্তমান পাসওয়ার্ড', 'Contraseña Actual', 'كلمة السر الحالية', 'Mot De Passe Actuel', '当前密码'),
(285, 'new_password*', 'New Password*', 'নতুন পাসওয়ার্ড *', 'Nueva Contraseña *', 'كلمة سر جديدة *', 'Nouveau Mot De Passe *', '新密码*'),
(286, 'password_updated!', 'Password Updated!', 'পাসওয়ার্ড আপডেট করা হয়েছে!', 'Contraseña Actualizada!', 'كلمة التحديث!', 'Mot de passe Mise à jour!', '密码更新！'),
(287, 'update_password', 'Update Password', 'আপডেট পাসওয়ার্ড', 'Actualizar contraseña', 'تحديث كلمة المرور', 'Mise à jour le mot de passe', '更新密码');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(288, 'incorrect_password!', 'Incorrect Password!', 'ভুল পাসওয়ার্ড৤!', 'Contraseña Incorrecta!', 'كلمة المرور غير صحيحة!', 'Mot De Passe Incorrect!', '密码不正确！'),
(289, 'manage_business_settings', 'Manage Business Settings', 'ব্যবসা সেটিংস পরিচালনা করুন', 'Administrar configuración de negocio', 'إدارة إعدادات الشركة', 'Gérer les paramètres commerciaux', '管理业务设置'),
(290, 'paypal_payment', 'Paypal Payment', 'পেপ্যাল ​​পেমেন্ট', 'Pago Paypal', 'باي بال الدفع', 'Paiement Paypal', '支付宝付款'),
(291, 'paypal_email', 'Paypal Email', 'PayPal এর ইমেইল', 'E-Mail De Paypal', 'باي بال البريد الإلكتروني', 'Paypal Email', '贝宝电子邮件'),
(292, 'paypal_account_type', 'Paypal Account Type', 'PayPal অ্যাকাউন্ট প্রকার', 'PayPal Tipo de cuenta', 'باي بال نوع الحساب', 'Type de compte Paypal', '贝宝账户类型'),
(293, 'currency_name', 'Currency Name', 'মুদ্রার নাম', 'Nombre moneda', 'اسم العملة', 'Nom de la devise', '货币名称'),
(294, 'currency_symbol', 'Currency Symbol', 'মুদ্রা প্রতীক', 'Símbolo de moneda', 'رمز العملة', 'Symbole monétaire', '货币符号'),
(295, 'shipping_cost_type', 'Shipping Cost Type', 'শিপিং খরচ প্রকার', 'Envios Tipo Costo', 'تكلفة الشحن نوع', 'Frais de port Type de coût', '运费类型'),
(296, 'product_wise', 'Product Wise', 'পণ্য প্রজ্ঞাময়', 'Sabio Producto', 'المنتج الحكيم', 'Wise Produit', '产品智者'),
(297, 'fixed', 'Fixed', 'স্থায়ী', 'Fijo', 'ثابت', 'Fixé', '固定'),
(298, 'shipping_cost_(If_fixed)', 'Shipping Cost (If Fixed)', 'শিপিং খরচ (সংশোধন করা হয়েছে যদি)', 'El coste de envío (Si Fijo)', 'تكلفة الشحن (إذا كان ثابت)', 'Coût de l''expédition (Si fixe)', '运费（如果固定）'),
(299, 'shipment_info', 'Shipment Info', 'চালান তথ্য', 'Envío Info', 'شحنة معلومات', 'Infos expédition', '出货信息'),
(300, 'FAQs', 'FAQs', 'প্রায়শই জিজ্ঞাসিত প্রশ্নাবলী', 'Preguntas frecuentes', 'أسئلة وأجوبة', 'FAQs', '常见问题解答'),
(301, 'question', 'Question', 'প্রশ্ন', 'Pregunta', 'سؤال', 'Question', '题'),
(302, 'answer', 'Answer', 'উত্তর', 'Respuesta', 'إجابة', 'Répondre', '答案'),
(303, 'add_more_FAQs', 'Add More FAQs', 'প্রায়শই জিজ্ঞাসিত প্রশ্নাবলী যোগ', 'Añadir Más preguntas frecuentes', 'إضافة المزيد من أسئلة وأجوبة', 'Ajouter Plus de FAQ', '添加更多常见问题解答'),
(304, 'send_newsletter', 'Send Newsletter', 'নিউজলেটার পাঠাতে', 'Enviar Newsletter', 'إرسال النشرة الإخبارية', 'Envoyer lettre', '发送新闻'),
(305, 'e-mails_(users)', 'E-mails (users)', 'ই-মেইল (ব্যবহারকারী)', 'Correos electrónicos (usuarios)', 'رسائل البريد الإلكتروني (المستخدمين)', 'E-mails (utilisateurs)', '电子邮件（用户）'),
(306, 'e-mails_(subscribers)', 'E-mails (subscribers)', 'ই-মেইল (সদস্য)', 'Correos electrónicos (usuarios registrados)', 'رسائل البريد الإلكتروني (مشترك)', 'E-mails (abonnés)', '电子邮件（用户）'),
(307, 'from_:_email_address', 'From : Email Address', 'থেকে: এটি ইমেল ঠিকানা', 'De: Dirección de correo electrónico', 'من: عنوان البريد الإلكتروني', 'De: Adresse électronique', '来自：电子邮件地址'),
(308, 'newsletter_subject', 'Newsletter Subject', 'নিউজলেটার বিষয়', 'Boletín Asunto', 'النشرة الموضوع', 'Lettre Sujet', '时事主题'),
(309, 'newsletter_content', 'Newsletter Content', 'নিউজলেটার বিষয়বস্তু', 'Boletín de contenido', 'النشرة المحتوى', 'Bulletin contenu', '通讯内容'),
(310, 'sending', 'Sending', 'পাঠানো', 'Enviando', 'إرسال', 'Envoi', '发出'),
(311, 'sent!', 'Sent!', 'পাঠানো হয়েছে!', 'Enviado!', 'أرسلت!', 'Envoyé!', '发送！'),
(312, 'send', 'Send', 'পাঠান', 'Enviar', 'إرسال', 'Envoyer', '发送'),
(313, 'subject', 'Subject', 'বিষয়', 'Tema', 'موضوع', 'Sujet', '学科'),
(314, 'date', 'Date', 'তারিখ', 'Fecha', 'تاريخ', 'Date', '日期'),
(315, 'message', 'Message', 'বার্তা', 'Mensaje', 'رسالة', 'Message', '信息'),
(316, 'date_time', 'Date Time', 'তারিখ সময়', 'Fecha Y Hora', 'التاريخ الوقت', 'Date Heure', '日期时间'),
(317, 'reply', 'Reply', 'উত্তর', 'Responder', 'رد', 'Répondre', '回复'),
(318, 'manage_staffs', 'Manage Staffs', 'কর্মীরা পরিচালনা', 'Administrar Estados Mayores', 'إدارة الأركان', 'Gérer Staffs', '管理职员');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(319, 'add_staff', 'Add Staff', 'স্টাফ যোগ', 'Añadir Staff', 'إضافة للموظفين', 'Ajouter personnel', '增加员工'),
(320, 'create_admin', 'Create Admin', 'অ্যাডমিন তৈরি করুন', 'Crear administración', 'إنشاء الادارية', 'Créer Administrateur', '创建管理员'),
(321, 'role', 'Role', 'ভূমিকা', 'Papel', 'دور', 'Rôle', '角色'),
(322, 'edit_admin', 'Edit Admin', 'সম্পাদনা অ্যাডমিন', 'Editar administración', 'تحرير المشرف', 'Modifier Administrateur', '编辑管理'),
(323, 'successfully_edited!', 'Successfully Edited!', 'সফলভাবে সম্পাদিত হয়েছে!', 'Editado con éxito!', 'حرره بنجاح!', 'Edité avec succès!', '编辑成功！'),
(324, 'edit', 'Edit', 'সম্পাদন করা', 'Editar', 'تحرير', 'Éditer', '编辑'),
(325, 'sddress', 'Sddress', 'Sddress', 'Sddress', 'Sddress', 'Sddress', 'Sddress'),
(326, 'Manage_roles', 'Manage Roles', 'ভূমিকা গালাগাল প্রতিবেদন করো', 'Administrar funciones', 'إدارة الأدوار', 'Gérer les rôles', '管理角色'),
(327, 'add_role', 'Add Role', 'ভূমিকা যোগ', 'Añadir Rol', 'إضافة دور', 'Ajouter un rôle', '添加角色'),
(328, 'create_role', 'Create Role', 'ভূমিকা তৈরি করুন', 'Crear Rol', 'إنشاء دور', 'Créer un rôle', '创建角色'),
(329, 'back_to_role_list', 'Back To Role List', 'পিছনে ভূমিকা তালিকায়', 'Volver a la lista Rol', 'الرجوع إلى قائمة دور', 'Retour à la liste de Rôle', '返回角色列表'),
(330, 'edit_role', 'Edit Role', 'সম্পাদনা ভূমিকা', 'Editar Papel', 'تحرير الدور', 'Modifier Rôle', '编辑角色'),
(331, 'really_want_to_delete_this?', 'Really Want To Delete This?', 'সত্যিই এই মুছে ফেলতে চান?', 'Realmente desea eliminar este?', 'حقا تريد حذف هذا؟', 'Vraiment de vouloir supprimer ce?', '真的要删除吗？'),
(332, 'manage_slider', 'Manage Slider', 'স্লাইডার পরিচালনা', 'Administrar deslizante', 'إدارة المتزلج', 'Gérer Curseur', '管理滑块'),
(333, 'slider_list', 'Slider List', 'স্লাইডার তালিকা', 'Lista deslizante', 'قائمة المنزلق', 'Liste curseur', '滑块名单'),
(334, 'slider_serial', 'Slider Serial', 'স্লাইডার সিরিয়াল', 'Serial deslizante', 'المنزلق المسلسل', 'Curseur de série', '滑盖系列'),
(335, 'successfully_serialized!', 'Successfully Serialized!', 'সফলভাবে ধারাবাহিকভাবে!', 'Con éxito Serialized!', 'تسلسل بنجاح!', 'Sérialisé succès!', '成功连载！'),
(336, 'ID', 'ID', 'আইডি', 'Identificación', 'الهوية', 'ID', 'ID'),
(337, 'manage_page', 'Manage Page', 'পাতা গালাগাল প্রতিবেদন করো', 'Administrar Página', 'إدارة الصفحة', 'Gérer la page', '管理页面'),
(338, 'add_page', 'Add Page', 'পৃষ্ঠা যুক্ত করুন', 'Añadir Página', 'أضف الصفحة', 'Ajouter une page', '添加页面'),
(339, 'create_page', 'Create Page', 'পাতা তৈরি করুন', 'Crear Página', 'انشئ صفحة', 'Créer Une Page', '创建页'),
(340, 'back_to_page_list', 'Back To Page List', 'প্রথম পাতা তালিকায়', 'Volver a la lista Página', 'الرجوع إلى قائمة الصفحة', 'Retour à la liste de la page', '返回页面列表'),
(341, 'page_name', 'Page Name', 'পৃষ্ঠার নাম', 'Nombre De La Página', 'اسم الصفحة', 'Nom de la page', '页面名称'),
(342, 'page', 'Page', 'পৃষ্ঠা', 'Página', 'صفحة', 'Page', '页面'),
(343, 'sale_price', 'Sale Price', 'বিক্রয় মূল্য', 'Precio De Venta', 'سعر البيع', 'Prix ​​De Vente', '销售价格'),
(344, 'creation_date', 'Creation Date', 'তৈরির তারিখ', 'Fecha De Creacion', 'تاريخ الإنشاء', 'Date De Création', '创建日期'),
(345, 'page_title', 'Page Title', 'পাতা শিরোনাম', 'Título De La Página', 'عنوان الصفحة', 'Titre De La Page', '页面标题'),
(346, 'parmalink', 'Parmalink', 'Parmalink', 'Parmalink', 'Parmalink', 'Parmalink', 'Parmalink'),
(347, 'tags', 'Tags', 'ট্যাগ্স', 'Etiquetas', 'الكلمات', 'Mots clés', '标签'),
(348, 'number_of_page_parts', 'Number Of Page Parts', 'পাতা অংশ সংখ্যা', 'Número de las partes Page', 'عدد الأجزاء الصفحة', 'Nombre de pages Pièces', '页零件数量'),
(349, 'lets_start_to_create_your_page', 'Lets Start To Create Your Page', 'আপনার পৃষ্ঠা তৈরি করতে শুরু করি', 'Vamos a empezar a crear su página', 'يتيح البدء في إنشاء الصفحة الخاصة بك', 'Permet de commencer à créer votre page', '让我们开始创建你的页面'),
(350, 'parts', 'Parts', 'যন্ত্রাংশ', 'Partes', 'أجزاء', 'Parties', '零件');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(351, 'reset', 'Reset', 'রিসেট', 'Reajustar', 'إعادة تعيين', 'Réinitialiser', '重置'),
(352, 'upload', 'Upload', 'আপলোড', 'Subir', 'تحميل', 'Télécharger', '上传'),
(353, 'select_size', 'Select Size', 'নির্বাচন আকার', 'Selecciona El Tamaño', 'حدد الحجم', 'Sélectionnez La Taille', '选择尺寸'),
(354, 'one-fourth', 'One-fourth', 'এক চতুর্থাংশ', 'Un cuarto', 'ربع', 'Un quart', '四分之一'),
(355, 'one-third', 'One-third', 'এক-তৃতীয়াংশ', 'Un tercio', 'ثلث', 'Un tiers', '三分之一'),
(356, 'half', 'Half', 'অর্ধেক', 'Mitad', 'نصف', 'Moitié', '半'),
(357, 'two-third', 'Two-third', 'দুই-তৃতীয়াংশ', 'Dos tercios', 'ثلثي', 'Deux tiers', '三分之二'),
(358, 'three-fourth', 'Three-fourth', 'তিন-চতুর্থাংশ', 'Tres cuartos', 'ثلاثة أرباع', 'Trois-quatrième', '三十四'),
(359, 'full', 'Full', 'পূর্ণ', 'Completo', 'كامل', 'Complet', '满'),
(360, 'select_type', 'Select Type', 'নির্বাচন করুন প্রকার', 'Seleccionar tipo', 'حدد نوع', 'Sélectionner le type', '选择类型'),
(361, 'content', 'Content', 'সন্তুষ্ট', 'Contenido', 'محتوى', 'Contenu', '内容'),
(362, 'widget', 'Widget', 'উইজেট', 'Widget', 'القطعة', 'Widget', '小工具'),
(363, 'most_viewed', 'Most Viewed', 'সর্বাধিক দেখা', 'Más Vistos', 'الأكثر مشاهدة', 'Le Plus Regardé', '最受关注'),
(364, 'not_more_than_4_columns!', 'Not More Than 4 Columns!', 'অনধিক 4 কলাম!', 'No más de 4 columnas!', 'لا يزيد على 4 أعمدة!', 'Pas plus de 4 colonnes!', '不超过4列！'),
(365, 'category_name', 'Category Name', 'নামের তালিকা', 'Nombre De La Categoría', 'اسم التصنيف', 'Nom De Catégorie', '分类名称'),
(366, 'edit_category', 'Edit Category', 'সম্পাদনা বিভাগ', 'Editar categoría', 'تحرير الفئة', 'Modifier une catégorie', '编辑类别'),
(367, 'sub-category_name', 'Sub-category Name', 'উপ-বিভাগ নাম', 'Sub-categoría Nombre', 'الفئة الفرعية اسم', 'Sous-catégorie Nom', '子类别名称'),
(368, 'edit_sub-category', 'Edit Sub-category', 'সম্পাদনা করুন উপ-বিভাগ', 'Editar Sub-categoría', 'تحرير التصنيف الفرعى-', 'Modifier la sous-catégorie', '编辑子类别'),
(369, 'brand_name', 'Brand Name', 'পরিচিতিমুলক নাম', 'Nombre De La Marca', 'اسم العلامة التجارية', 'Marque', '品牌'),
(370, 'brand_logo', 'Brand Logo', 'ব্র্যান্ড লোগো', 'Logotipo De La Marca', 'شعار العلامة التجارية', 'Logo De La Marque', '品牌标识'),
(371, 'select_brand_logo', 'Select Brand Logo', 'নির্বাচন ব্র্যান্ড লোগো', 'Seleccionar logo de la marca', 'حدد شعار العلامة التجارية', 'Sélectionnez une marque Logo', '选择品牌标识'),
(372, 'edit_brand', 'Edit Brand', 'সম্পাদনা করুন ব্র্যান্ড', 'Editar Marca', 'تحرير العلامة التجارية', 'Modifier Marque', '编辑品牌'),
(373, 'product_title', 'Product Title', 'পণ্য শিরোনাম', 'Título del producto', 'عنوان المنتج', 'Titre du produit', '产品名称'),
(374, 'unit', 'Unit', 'একক', 'Unidad', 'وحدة', 'Unité', '单元'),
(375, 'unit_(e.g._kg,_pc_etc.)', 'Unit (e.g. Kg, Pc Etc.)', 'ইউনিট (যেমন কেজি, পিসি ইত্যাদি)', 'Unidad (por ejemplo Kg, ordenador, etc.)', 'وحدة (مثلا كلغ، والكمبيوتر الخ.)', 'Unité (ex Kg, ordinateur, etc.)', '单位（如斤，PC等设备）'),
(376, 'purchase_price', 'Purchase Price', 'ক্রয় মূল্য', 'Precio De Compra', 'سعر الشراء', 'Prix ​​D''Achat', '购买价格'),
(377, 'shipping_cost', 'Shipping Cost', 'শিপিং খরচ', 'Costo De Envío', 'تكلفة الشحن', 'Frais De Port', '运输费'),
(378, 'product_tax', 'Product Tax', 'পণ্য ট্যাক্স', 'Fiscal Producto', 'الضريبة المنتج', 'Impôt sur le produit', '产品税'),
(379, 'product_discount', 'Product Discount', 'পণ্যের ডিসকাউন্ট', 'Descuento del producto', 'الخصم المنتج', 'Remise de produit', '产品折扣'),
(380, 'images', 'Images', 'ছবি', 'Imágenes', 'الصور', 'Images', '图片'),
(381, 'choose_file', 'Choose File', 'ফাইল পছন্দ কর', 'Elija El Archivo', 'اختر ملف', 'Choisissez Fichier', '选择文件'),
(382, 'color', 'Color', 'রঙ', 'Color', 'اللون', 'Couleur', '颜色'),
(383, 'add_more_colors', 'Add More Colors', 'আরো রঙ যোগ করুন', 'Añadir más colores', 'إضافة المزيد من الألوان', 'Ajouter plus de couleurs', '添加更多颜色');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(384, 'if_you_need_more_field_for_your_product_,_please_click_here_for_more...', 'If You Need More Field For Your Product , Please Click Here For More...', 'আপনি আপনার পণ্যের জন্য আরো মাঠ প্রয়োজন হয়, তাহলে আরও বেশির জন্য এখানে ক্লিক করুন ...', 'Si necesita más campo para su producto, por favor haga clic aquí para Más ...', 'إذا كنت بحاجة إلى المزيد من الميدان للمنتج الخاص بك، الرجاء انقر هنا للمزيد ...', 'Si vous désirez plus de terrain pour votre produit, S''il vous plaît Cliquez ici pour plus ...', '如果你需要更多的现场为您的产品，请点击这里查看更多...'),
(385, 'add_more_fields', 'Add More Fields', 'আরো ক্ষেত্র যোগ করুন', 'Añadir más campos', 'إضافة المزيد من الحقول', 'Ajouter d''autres champs', '添加更多的字段'),
(386, 'product_has_been_uploaded!', 'Product Has Been Uploaded!', 'পণ্য আপলোড করা হয়েছে!', 'Producto se ha cargado!', 'المنتج قد تم إيداع!', 'Produit a été téléchargé!', '产品已上传！'),
(387, 'field_name', 'Field Name', 'ক্ষেত্র নাম', 'Nombre Del Campo', 'اسم الحقل', 'Nom De Domaine', '字段名称'),
(388, 'field_value', 'Field Value', 'ক্ষেত্রের মান', 'Campo Valor', 'قيمة الحقل', 'Champ Valeur', '字段值'),
(389, 'out_of_stock', 'Out Of Stock', 'মজুদ শেষ', 'Agotado', 'إنتهى من المخزن', 'Rupture De Stock', '缺货'),
(390, 'view_product', 'View Product', 'আমাদের পণ্য', 'Ver Producto', 'عرض المنتج', 'Voir le produit', '查看产品'),
(391, 'successfully_viewed!', 'Successfully Viewed!', 'সফলভাবে দেখা!', 'Visto éxito!', 'مشاهدة بنجاح!', 'Vu succès!', '成功查看！'),
(392, 'view', 'View', 'দৃশ্য', 'Vista', 'عرض', 'Vue', '视图'),
(393, 'view_discount', 'View Discount', 'দেখুন বাট্টা', 'Ver descuento', 'عرض الخصم', 'Voir Discount', '查看折扣'),
(394, 'viewing_discount!', 'Viewing Discount!', 'বাট্টা দেখছেন!', 'Viendo el descuento!', 'عرض خصم!', 'Regarde un rabais!', '查看折扣！'),
(395, 'discount', 'Discount', 'ডিসকাউন্ট', 'Descuento', 'خصم', 'Remise', '折扣'),
(396, 'add_product_quantity', 'Add Product Quantity', 'উত্পাদনের মোট পরিমানের যোগ', 'Añadir Producto Cantidad', 'إضافة منتج الكمية', 'Ajouter Produit Quantité', '添加产品数量'),
(397, 'quantity_added!', 'Quantity Added!', 'পরিমাণ যোগ করা হয়েছে!', 'Cantidad añadida!', 'الكمية المضافة!', 'Quantité Ajouté!', '添加量！'),
(398, 'stock', 'Stock', 'স্টক', 'Valores', 'الأوراق المالية', 'Stock', '股票'),
(399, 'reduce_product_quantity', 'Reduce Product Quantity', 'পণ্য পরিমাণ হ্রাস করুন', 'Reducir Producto Cantidad', 'تقليل كمية المنتج', 'Réduire Produit Quantité', '减少产品数量'),
(400, 'quantity_reduced!', 'Quantity Reduced!', 'পরিমাণ কমিয়ে!', 'Cantidad rebajado!', 'كمية خفض!', 'Quantité réduit!', '数量减少！'),
(401, 'destroy', 'Destroy', 'ধ্বংস করা', 'Destruir', 'هدم', 'Détruire', '破坏'),
(402, 'edit_product', 'Edit Product', 'সম্পাদনা পণ্য', 'Editar Producto', 'تحرير المنتج', 'Modifier le produit', '编辑产品'),
(403, 'rate', 'Rate', 'হার', 'Tarifa', 'معدل', 'Taux', '率'),
(404, 'total', 'Total', 'মোট', 'Total', 'مجموع', 'Total', '总'),
(405, 'reason_note', 'Reason Note', 'কারণ উল্লেখ্য', 'Motivo Nota', 'السبب ملاحظة', 'Raison Remarque', '原因说明'),
(406, 'manage_your_product_stock', 'Manage Your Product Stock', 'আপনার পণ্য স্টক পরিচালনা', 'Administre su stock del producto', 'إدارة الأسهم الخاصة بك المنتج', 'Gérer votre produit Stock', '管理你的产品库存'),
(407, 'destroy_product_entry', 'Destroy Product Entry', 'পণ্য এন্ট্রি ধ্বংস', 'Destruye Entrada Producto', 'تدمير دخول المنتج', 'Détruisez Entrée produit', '销毁产品入境'),
(408, 'add_stock_entry_taken!', 'Add Stock Entry Taken!', 'স্টক এন্ট্রি নেওয়া যোগ!', 'Añadir Tomado de la entrada Stock!', 'إضافة المحصلة دخول سوق الأسهم!', 'Ajouter Stock Entrée pris!', '添加股票输入上当受骗！'),
(409, 'add_product_stock', 'Add Product Stock', 'পণ্য স্টক যোগ করুন', 'Añadir stock del producto', 'إضافة منتج المالية', 'Ajouter le produit Stock', '添加产品库存'),
(410, 'destroy_entry_taken!', 'Destroy Entry Taken!', 'এন্ট্রি নেওয়া ধ্বংস!', 'Destruye Tomado de entrada!', 'تدمير المحصلة الدخول!', 'Détruisez Entrée pris!', '摧毁条目获取！');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(411, 'create_stock', 'Create Stock', 'স্টক তৈরি করুন', 'Crear archivo', 'إنشاء البورصة', 'Créer Stock', '创建库存'),
(412, 'entry_type', 'Entry Type', 'এন্ট্রি টাইপ', 'Tipo de entrada', 'نوع الدخول', 'Type d''entrée', '条目类型'),
(413, 'note', 'Note', 'বিঃদ্রঃ', 'Nota', 'ملاحظة', 'Note', '注意'),
(414, 'added_quantity_will_be_reduced.', 'Added Quantity Will Be Reduced.', 'যোগ করা হয়েছে পরিমাণ হ্রাস করা হবে.', 'Cantidad añadida será reducido.', 'وأضاف الكمية ستنخفض.', 'Ajouté Quantité sera réduite.', '加入数量将减少。'),
(415, 'manage_sale', 'Manage Sale', 'বিক্রয় গালাগাল প্রতিবেদন করো', 'Administrar Venta', 'إدارة بيع', 'Gérer Vente', '销售管理'),
(416, 'sale_code', 'Sale Code', 'বিক্রয় কোড', 'Venta Código', 'بيع مدونة', 'Vente code', '销售守则'),
(417, 'buyer', 'Buyer', 'ক্রেতা', 'Comprador', 'مشتر', 'Acheteur', '买主'),
(418, 'delivery_status', 'Delivery Status', 'ডেলিভারি স্থিতি', 'Estado De Entrega', 'حالة التسليم', 'Statut De Livraison', '交货状态'),
(419, 'payment_status', 'Payment Status', 'লেনদেনের অবস্থা', 'Estado De Pago', 'حالة السداد', 'Statut De Paiement', '付款状态'),
(420, 'sales', 'Sales', 'বিক্রয়', 'Ventas', 'مبيعات', 'Ventes', '销售'),
(421, 'choose_your_slider_style', 'Choose Your Slider Style', 'আপনার স্লাইডার শৈলী চয়ন করুন', 'Elija su estilo deslizante', 'اختيار المتزلج طريقتك', 'Choisissez votre style Slider', '选择您的滑盖造型'),
(422, 'play', 'Play', 'খেলা', 'Jugar', 'لعب', 'Jouer', '玩'),
(423, 'choose', 'Choose', 'নির্বাচন করা', 'Escoger', 'اختار', 'Choisir', '选择'),
(424, 'enter_preview', 'Enter Preview', 'সম্পূর্ণ বিবরণের পূর্বরূপ দেখুন লিখুন', 'Introduzca Prevista', 'أدخل معاينة', 'Entrez Aperçu', '进入预览'),
(425, 'creating_slider..', 'Creating Slider..', 'স্লাইডার তৈরি ..', 'Crear deslizante ..', 'خلق المتزلج ..', 'Création curseur ..', '创建滑块..'),
(426, 'slider_added!', 'Slider Added!', 'স্লাইডার যোগ করা হয়েছে!', 'Deslizador Agregado', 'المنزلق واضاف!', 'Curseur Ajouté!', '滑块增加！'),
(427, 'select_background_image', 'Select Background Image', 'নির্বাচন পটভূমি চিত্র', 'Seleccione la imagen de fondo', 'اختر صورة الخلفية', 'Sélectionnez l''image de fond', '选择背景图片'),
(428, 'select_image', 'Select Image', 'নির্বাচন করুন', 'Seleccionar Imagen', 'اختر صورة', 'Sélectionner l''image', '选择图片'),
(429, 'font-color', 'Font-color', 'ফন্টের রং', 'Color de fuente', 'لون الخط', 'Couleur de police', '字体颜色'),
(430, 'background_color', 'Background Color', 'পেছনের রঙ', 'Color De Fondo', 'لون الخلفية', 'Couleur De Fond', '背景颜色'),
(431, 'clean', 'Clean', 'পরিষ্কার', 'Limpio', 'نظيف', 'Propre', '清洁'),
(432, 'slider_serial_saved!', 'Slider Serial Saved!', 'সিরিয়াল সংরক্ষিত এখানে ক্লিক করুন!', 'Slider Guardados de serie!', 'المنزلق المسلسل المحفوظ!', 'Curseur série Saved!', '滑盖系列救了！'),
(433, 'permissions', 'Permissions', 'অনুমতি', 'Permisos', 'أذونات', 'Autorisations', '权限'),
(434, 'off', 'Off', 'বন্ধ', 'Apagado', 'بعيدا', 'De', '离'),
(435, 'add_to_wishlist', 'Add To Wishlist', 'চাহিদাপত্রে যোগ করা', 'Añadir A La Lista De Deseos', 'اضف الى قائمة الامنيات', 'Ajouter À La Liste De Souhaits', '添加到收藏'),
(436, 'our_available_brands', 'Our Available Brands', 'আমাদের উপলব্ধ ব্রান্ডের', 'Nuestras Marcas disponibles', 'علاماتنا التجارية المتاحة', 'Nos Marques disponibles', '我们现有的品牌'),
(437, 'product_color_options', 'Product Color Options', 'পণ্য রঙ বিকল্প', 'Opciones de color Producto', 'خيارات المنتج اللون', 'options de couleur de produit', '产品颜色选项'),
(438, 'add_colors', 'Add Colors', 'রঙ যোগ করুন', 'Añadir colores', 'إضافة الألوان', 'Ajouter des couleurs', '添加颜色'),
(439, 'preview', 'Preview', 'সম্পূর্ণ বিবরণের পূর্বরূপ দেখুন', 'Preestreno', 'معاينة', 'Aperçu', '预习'),
(440, 'related_products', 'Related Products', 'সংশ্লিষ্ট পণ্য', 'Productos Relacionados', 'المنتجات ذات الصلة', 'Produits Connexes', '相关产品'),
(441, 'full_description', 'Full Description', 'পূর্ণ বিবরণ', 'Descripción Completa', 'الوصف الكامل', 'Description Complète', '完整说明');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(442, 'additional_specification', 'Additional Specification', 'অতিরিক্ত স্পেসিফিকেশন', 'Especificación adicional', 'مواصفات إضافية', 'Spécification Supplémentaire', '其他规格'),
(443, 'reviews', 'Reviews', 'পর্যালোচনা', 'Opiniones', 'التعليقات', 'Avis', '点评'),
(444, 'add_to wishlist', 'Add To Wishlist', 'চাহিদাপত্রে যোগ করা', 'Añadir A La Lista De Deseos', 'اضف الى قائمة الامنيات', 'Ajouter À La Liste De Souhaits', '添加到收藏'),
(445, 'featured_products', 'Featured Products', 'বৈশিষ্ট্যযুক্ত পণ্য', 'Productos Destacados', 'منتجات مميزة', 'Produits Présentés', '特色产品'),
(446, 'our_contacts', 'Our Contacts', 'আমাদের পরিচিতি', 'Nuestros Contactos', 'دليل المنسوبين', 'Nos Contacts', '我们的联系方式'),
(447, 'about_us', 'About Us', 'আমাদের সম্পর্কে', 'Sobre Nosotros', 'عنا', 'A Propos De Nous', '关于我们'),
(448, 'get_in_touch', 'Get In Touch', 'যোগাযোগ করুন', 'Ponerse En Contacto', 'الحصول على اتصال', 'Entrer en contact', '保持联系'),
(449, 'contacts_form', 'Contacts Form', 'পরিচিতিতে ফরম', 'Contactos Formulario', 'اتصالات نموذج', 'Formulaire de contacts', '联系表格'),
(450, 'e-mail', 'E-mail', 'ই-মেইল', 'Email', 'البريد الإلكتروني', 'Email', '电子邮件'),
(451, 'sending..', 'Sending..', 'পাঠানো ..', 'Enviando ..', 'إرسال ..', 'Envoi ..', '正在发送。'),
(452, 'send_message:', 'Send Message:', 'বার্তা পাঠাও:', 'Enviar Mensaje:', 'أرسل رسالة:', 'Envoyer Le Message:', '发信息：'),
(453, 'message_sent!', 'Message Sent!', 'বার্তা প্রদান!', 'Mensaje Enviado!', 'تم إرسال الرسالة!', 'Message Envoyé!', '消息已发送！'),
(454, 'incorrect_captcha!', 'Incorrect Captcha!', 'ভুল ক্যাপচা!', 'Captcha Incorrecto!', 'كلمة التحقق غير صحيح!', 'Captcha Incorrecte!', '验证码不正确！'),
(455, 'my_profile', 'My Profile', 'আমার প্রোফাইল', 'Mi Perfil', 'ملفي الشخصي', 'Mon Profil', '我的简历'),
(456, 'personal_information', 'Personal Information', 'ব্যক্তিগত তথ্য', 'Información Personal', 'معلومات شخصية', 'Information Personnelle', '个人信息'),
(457, 'total_purchase', 'Total Purchase', 'মোট ক্রয়', 'Compra total', 'إجمالي شراء', 'Total Achat', '总购买'),
(458, 'last_7_days', 'Last 7 Days', 'শেষ 7 দিন', 'Últimos 7 días', 'اخر 7 ايام', 'Les 7 derniers jours', '最近7天'),
(459, 'last_30_days', 'Last 30 Days', 'গত 30 দিনে', 'Últimos 30 Días', 'اخر 30 يوم', '30 derniers jours', '最后30天'),
(460, 'wished_products', 'Wished Products', 'আকাঙ্ক্ষিত পণ্য', 'Productos deseados', 'المنتجات تمنى', 'Produits souhaité', '希望产品'),
(461, 'user_since', 'User Since', 'ব্যবহারকারী যেহেতু', 'Usuario desde', 'المستخدم منذ', 'Utilisateur depuis', '用户自'),
(462, 'last_login', 'Last Login', 'সর্বশেষ লগইন', 'Último Acceso', 'آخر تسجيل دخول', 'Dernière Connexion', '上次登录'),
(463, 'purchase_history', 'Purchase History', 'ক্রয় ইতিহাস', 'Historial De Compras', 'تاريخ شراء', 'Historique D''Achat', '购买记录'),
(464, 'wishlist', 'Wishlist', 'লটারি', 'Lista', 'مفضلة', 'Liste', '心愿'),
(465, 'edit_info', 'Edit Info', 'সম্পাদনা তথ্য', 'Editar información', 'تحرير معلومات', 'Modifier les informations', '编辑信息'),
(466, 'invoice', 'Invoice', 'চালান', 'Factura', 'فاتورة', 'Facture', '发票'),
(467, 'availability', 'Availability', 'উপস্থিতি', 'Disponibilidad', 'توفر', 'Disponibilité', '可用性'),
(468, 'purchase', 'Purchase', 'ক্রয়', 'Compra', 'شراء', 'Achat', '购买'),
(469, 'remove', 'Remove', 'অপসারণ', 'Quitar', 'إزالة', 'Supprimer', '拆除'),
(470, 're-write your_first_name', 'Re-write Your First Name', 'আপনার নামের প্রথম অংশ পুনরায় লিখুন', 'Vuelva a escribir su nombre', 'إعادة كتابة الاسم الأول', 'Re-écrire Votre Prénom', '重新写你的名字'),
(471, 're-write your_last_name', 'Re-write Your Last Name', 'আপনার পদবি পুনরায় লিখুন', 'Vuelva a escribir su apellido', 'إعادة كتابة الاسم الأخير', 'Re-écrire Votre Nom', '重新写你的姓'),
(472, 're-write_your_phone_number', 'Re-write Your Phone Number', 'আপনার ফোন নম্বর পুনরায় লিখুন', 'Vuelva a escribir su número de teléfono', 'إعادة كتابة رقم الهاتف الخاص بك', 'Re-écrire votre numéro de téléphone', '重新写你的电话号码');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(473, 'ZIP_Code', 'ZIP Code', 'মার্কিন', 'Código postal', 'الرمز البريدي', 'Code postal', '邮政编码'),
(474, 'city_name', 'City Name', 'শহরের নাম', 'Nombre De La Ciudad', 'اسم المدينة', 'Nom De La Ville', '城市的名字'),
(475, 'your_skype_id', 'Your Skype Id', 'আপনার স্কাইপ আইডি', 'Tu Identificacion De Skype', 'رقم سكايب الخاص بك', 'Votre Identifiant Skype', '你的Skype帐号'),
(476, 'your_facebook_profile_link', 'Your Facebook Profile Link', 'আপনার ফেসবুক প্রোফাইল লিঙ্ক', 'Su perfil de Facebook Enlace', 'الخاص بك الفيسبوك ملف الموقع', 'Votre profil Facebook Lien', '你的Facebook个人资料链接'),
(477, 'your_google+_profile_link', 'Your Google+ Profile Link', 'আপনার Google+ প্রোফাইল লিংক', 'Su Google+ Enlace', 'في + Google ملف الموقع', 'Votre profil Google+ Lien', '您的Google+个人资料链接'),
(478, 'browse', 'Browse', 'ব্রাউজ করুন', 'Explorar', 'تصفح', 'Feuilleter', '浏览'),
(479, 'update_info', 'Update Info', 'আপডেট তথ্য', 'Actualizar Información', 'تحديث معلومات', 'Information De Mise À Jour', '更新信息'),
(480, 'enter_your_current_password', 'Enter Your Current Password', 'আপনার বর্তমান পাসওয়ার্ডটি প্রবেশ করান', 'Introduce Tu Contraseña Actual', 'أدخل كلمة المرور الحالية', 'Entrer Votre Mot De Passe Actuel', '输入当前的密码'),
(481, 'new_password', 'New Password', 'নতুন পাসওয়ার্ড', 'Nueva Contraseña', 'كلمة سر جديدة', 'Nouveau Mot De Passe', '新密码'),
(482, 'enter_your_new_password', 'Enter Your New Password', 'আপনার নতুন পাসওয়ার্ড লিখুন', 'Ingrese su nueva contraseña', 'أدخل كلمة المرور الجديدة', 'Entrez votre nouveau mot de passe', '输入新密码'),
(483, 'confirm_new_password', 'Confirm New Password', 'নিশ্চিত কর নতুন গোপননম্বর', 'Confirmar Nueva Contraseña', 'تأكيد كلمة السر الجديدة', 'Confirmer Le Nouveau Mot De Passe', '确认新密码'),
(484, 're-enter_your_new_password', 'Re-enter Your New Password', 'আপনার নতুন পাসওয়ার্ড আবার লিখুন', 'Vuelva a introducir su nueva contraseña', 'إعادة إدخال كلمة المرور الجديدة', 'Re-entrez votre nouveau mot de passe', '重新输入新密码'),
(485, 'save_password', 'Save Password', 'পাসওয়ার্ড সংরক্ষণ', 'Guardar Contraseña', 'حفظ كلمة المرور', 'Enregistrer Le Mot De Passe', '保存密码'),
(486, 'incorrect_password', 'Incorrect Password', 'ভুল পাসওয়ার্ড৤', 'Contraseña Incorrecta', 'كلمة المرور غير صحيحة', 'Mot De Passe Incorrect', '密码不正确'),
(487, 'terms_conditions', 'Terms Conditions', 'শর্তাবলী', 'Términos Y Condiciones', 'الشروط والأحكام', 'Termes Et Conditions', '条款细则'),
(488, 'give_a_rating', 'Give A Rating', 'একটি রেটিং দিতে', 'Give A Clasificación', 'إعطاء تقييم', 'Donner une note', '给予评级'),
(489, 'tax', 'Tax', 'কর', 'Impuesto', 'ضريبة', 'Impôt', '税'),
(490, 'shipping', 'Shipping', 'পরিবহন', 'Envío', 'الشحن', 'Livraison', '送货'),
(491, 'grand_total', 'Grand Total', 'সর্বমোট', 'Gran Total', 'المجموع الإجمالي', 'Total', '累计'),
(492, 'empty_cart', 'Empty Cart', 'খালি ট্রলি', 'Vaciar el carro', 'فارغة سلة', 'Panier Vide', '清空购物车'),
(493, 'added_to wishlist', 'Added To Wishlist', 'শুরুতেই যোগ', 'Añadido a Mis Favoritos', 'أضيف الى قائمة الامنيات', 'Ajouté à la liste', '添加到收藏'),
(494, 'available', 'Available', 'উপলব্ধ', 'Disponible', 'متاح', 'Disponible', '可用的'),
(495, 'remove_from_wishlist', 'Remove From Wishlist', 'সাইফুল থেকে সরান', 'Quitar de la lista', 'إزالة من قائمة الامنيات', 'Supprimer de la Liste', '从收藏中删除'),
(496, 'my_cart', 'My Cart', 'আমার কার্ট', 'Mi Carrito', 'سلة التسوق', 'Mon panier', '我的购物车'),
(497, 'shopping_cart', 'Shopping Cart', 'বাজারের ব্যাগ', 'Carrito De Compras', 'عربة التسوق', 'Panier', '购物车'),
(498, 'review_&_edit_your_product', 'Review & Edit Your Product', 'পর্যালোচনা ও সম্পাদনা করুন আপনার পণ্য', 'Revisión y edición de su producto', 'مراجعة وتحرير منتجك', 'Consulter et modifier votre produit', '审查和编辑你的产品'),
(499, 'qty', 'Qty', 'Qty', 'Cantidad', 'الكمية', 'Quantité', '数量'),
(500, 'option', 'Option', 'পছন্দ', 'Opción', 'خيار', 'Option', '选项'),
(501, 'shipping_info', 'Shipping Info', 'জাহাজীকরন তথ্য', 'Información De Envío', 'معلومات الشحن', 'Info Livraison', '航运信息');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(502, 'shipping_and_address_info', 'Shipping And Address Info', 'গ্রেপ্তার এবং ঠিকানা তথ্য', 'Envío y Dirección Info', 'الشحن وعنوان معلومات', 'Adresse d''expédition et Infos', '航运及地址信息'),
(503, 'shipping_address', 'Shipping Address', 'প্রেরণের ঠিকানা', 'Dirección De Envío', 'عنوان الشحن', 'Adresse De Livraison', '邮寄地址'),
(504, 'first_name', 'First Name', 'প্রথম নাম', 'Nombre', 'الاسم الأول', 'Prénom', '名字'),
(505, 'last_name', 'Last Name', 'নামের শেষাংশ', 'Apellido', 'اسم العائلة', 'Nom De Famille', '姓'),
(506, 'zip/postal_code', 'Zip/postal Code', 'জিপ / পোস্টাল কোড', 'Postal / Código Postal', 'الرمز البريدي / الرمز البريدي', 'Zip / code postal', '邮编/邮政编码'),
(507, 'payment', 'Payment', 'প্রদান', 'Pago', 'دفع', 'Paiement', '付款'),
(508, 'select_payment_method', 'Select Payment Method', 'নির্বাচন পেমেন্ট পদ্ধতি', 'Seleccione el método de pago', 'اختر طريقة الدفع', 'Sélectionnez la méthode de paiement', '请选择支付方式'),
(509, 'choose_a_payment_method', 'Choose A Payment Method', 'একটি পেমেন্ট পদ্ধতি বেছে নিন', 'Elija un método de pago', 'اختيار طريقة الدفع', 'Choisissez une méthode de paiement', '选择付款方式'),
(510, 'frequently_asked_questions', 'Frequently Asked Questions', 'সচরাচর জিজ্ঞাস্য', 'Preguntas Frecuentes', 'أسئلة مكررة', 'Questions Fréquemment Posées', '经常问的问题'),
(511, 'subtotal', 'Subtotal', 'উপমোট', 'Total parcial', 'حاصل الجمع', 'Total', '小计'),
(512, 'invoice_paper', 'Invoice Paper', 'চালান পেপার', 'Papel Factura', 'فاتورة ورقة', 'Papier facture', '发票纸'),
(513, 'invoice_no', 'Invoice No', 'চালান নং', 'Factura No', 'رقم الفاتورة', 'NumFacture', '发票号码'),
(514, 'client_information:', 'Client Information:', 'ক্লায়েন্ট তথ্য:', 'Información Del Cliente:', 'معلومات العميل:', 'Renseignements sur le client:', '客户资料：'),
(515, 'first_name:', 'First Name:', 'প্রথম নাম:', 'Nombre:', 'الاسم الأول:', 'Prénom:', '名字：'),
(516, 'last_name:', 'Last Name:', 'নামের শেষাংশ:', 'Apellido:', 'اسم العائلة:', 'Nom De Famille:', '姓：'),
(517, 'city_:', 'City :', 'নগরী:', 'Ciudad:', 'مدينة:', 'Ville:', '城市：'),
(518, 'peyment_details_:', 'Peyment Details :', 'Peyment বিবরণ:', 'Peyment Detalles:', 'PEYMENT تفاصيل:', 'Peyment Détails:', 'Peyment详细信息：'),
(519, 'payment_status_:', 'Payment Status :', 'লেনদেনের অবস্থা:', 'Estado De Pago:', 'حالة السداد:', 'Statut De Paiement:', '付款状态：'),
(520, 'payment_method_:', 'Payment Method :', 'মূল্যপরিশোধ পদ্ধতি:', 'Forma De Pago:', 'طريقة الدفع:', 'Mode de paiement:', '付款方式：'),
(521, 'payment_invoice', 'Payment Invoice', 'পেমেন্ট চালান', 'Factura De Pago', 'دفع الفاتورة', 'Paiement de facture', '付款发票'),
(522, 'item', 'Item', 'আইটেম', 'Artículo', 'العنصر', 'Article', '项目'),
(523, 'unit_cost', 'Unit Cost', 'ইউনিট খরচ', 'Costo Unitario', 'تكلفة الوحدة', 'Coût Unitaire', '单价'),
(524, 'sub_total_amount', 'Sub Total Amount', 'উপ মোট পরিমাণ', 'Sub Total Importe', 'جنوب المبلغ الكلي لل', 'Sous Montant total', '小计金额'),
(525, 'print', 'Print', 'ছাপা', 'Impresión', 'طباعة', 'Impression', '打印'),
(526, 'manage_users', 'Manage Users', 'ব্যবহারকারী গালাগাল প্রতিবেদন', 'Administrar usuarios', 'إدارة المستخدمين', 'Gérer les utilisateurs', '管理用户'),
(527, 'view_profile', 'View Profile', 'প্রোফাইল দেখা', 'Ver Perfil', 'الملف الشخصي', 'Voir Le Profil', '查看资料'),
(528, 'users', 'Users', 'ব্যবহারকারীরা', 'Usuarios', 'المستخدمين', 'Utilisateurs', '用户'),
(529, 'product_sale_comparison', 'Product Sale Comparison', 'পণ্য বিক্রয় তুলনা', 'Comparación de productos Venta', 'مقارنة بيع المنتج', 'Comparaison de vente de produit', '产品销售比较'),
(530, 'product_sale_comparison_report', 'Product Sale Comparison Report', 'পণ্য বিক্রয় তুলনা রিপোর্ট', 'Venta de productos ¡Comparar Reportar', 'المنتج بيع مقارنة تقرير', 'Vente de produit Rapport de comparaison', '产品销售比较报告'),
(531, 'get_stock_report', 'Get Stock Report', 'স্টক প্রতিবেদন করুন', 'Obtén Stock Reportar', 'الحصول على الأوراق المالية تقرير', 'Obtenez Stock Rapport', '获取库存报告');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(532, 'delivery_payment', 'Delivery Payment', 'ডেলিভারি পেমেন্ট', 'Entrega Pago', 'تسليم الدفع', 'Livraison Paiement', '货到付款'),
(533, 'invoice_no:', 'Invoice No:', 'চালান নং:', 'Factura No:', 'رقم الفاتورة:', 'NO FACTURE:', '发票号码：'),
(534, 'date_:', 'Date :', 'তারিখ:', 'Fecha:', 'تاريخ:', 'Date:', '日期：'),
(535, 'client_information', 'Client Information', 'ক্লায়েন্ট তথ্য', 'Información Del Cliente', 'معلومات العميل', 'Renseignements sur le client', '客户信息'),
(536, 'payment_detail', 'Payment Detail', 'পেমেন্ট বিস্তারিত', 'Detalle de Pago', 'دفع التفاصيل', 'Paiement Détail', '付款明细'),
(537, 'payment_method', 'Payment Method', 'মূল্যপরিশোধ পদ্ধতি', 'Forma De Pago', 'طريقة الدفع', 'Mode de paiement', '付款方式'),
(538, 'payment_date', 'Payment Date', 'টাকা প্রদানের তারিখ', 'Día De Pago', 'تاريخ الدفع', 'Date De Paiement', '支付日期'),
(539, 'zipcode', 'Zipcode', 'পিনকোড', 'Código Postal', 'الرمز البريدي', 'Code Postal', '邮政编码'),
(540, 'marker_location', 'Marker Location', 'মার্কার অবস্থান', 'Marcador de ubicación', 'علامة الموقع', 'Marker Localisation', '标记位置'),
(541, 'payment_details', 'Payment Details', 'বিস্তারিত হিসাব', 'Detalles Del Pago', 'تفاصيل الدفع', 'Détails de paiement', '付款详情'),
(542, 'reduced_quantity_will_be_added.', 'Reduced Quantity Will Be Added.', 'কমিয়ে পরিমাণ যোগ করা হবে.', 'Cantidad reducida se añadirán.', 'انخفاض الكمية ستضاف.', 'Quantité réduite seront ajoutés.', '减少数量将增加。'),
(543, 'monetary_loss', 'Monetary Loss', 'আর্থিক ক্ষতি', 'Resultado Monetario', 'فقدان النقدي', 'Perte monétaire', '金钱损失'),
(544, 'details_of', 'Details Of', 'বিস্তারিত', 'Detalles De', 'تفاصيل', 'Détails de', '详细信息'),
(545, 'tag', 'Tag', 'ট্যাগ', 'Etiqueta', 'بطاقة', 'Balise', '标签'),
(546, 'colors', 'Colors', 'রঙ', 'Colores', 'الألوان', 'Couleurs', '颜色'),
(547, 'user', 'User', 'ব্যবহারকারী', 'Usuario', 'المستخدم', 'Utilisateur', '用户'),
(548, 'phone_number', 'Phone Number', 'ফোন নম্বর', 'Número Telefónico', 'رقم الهاتف', 'numéro de téléphone', '电话号码'),
(549, 'view_contact_message', 'View Contact Message', 'দেখুন যোগাযোগ বার্তা', 'Ver contacto Mensaje', 'عرض طرق الاتصال رسالة', 'Voir Contact Message', '查看联系信息'),
(550, 'view_message', 'View Message', 'দেখুন বার্তা', 'Ver Mensaje', 'إرسال رسالة خاصة إلى', 'Voir le message', '查看留言'),
(551, 'message_from', 'Message From', 'থেকে বার্তা', 'Mensaje De', 'رسالة من', 'Message De', '从消息'),
(552, 'date_&_time', 'Date & Time', 'তারিখ সময়', 'Fecha Y Hora', 'التاريخ والوقت', 'Date et heure', '日期时间'),
(553, 'reply_contact_message', 'Reply Contact Message', 'যোগাযোগ বার্তা উত্তর', 'Responder Contacto Mensaje', 'رد الاتصال رسالة', 'Répondre Contact Message', '回复留言联系'),
(554, 'successfully_replied!', 'Successfully Replied!', 'সফলভাবে জবাব দিয়েছেন!', 'Respondió con éxito!', 'أجاب بنجاح!', 'Répondit succès!', '成功作答！'),
(555, 'reply_message', 'Reply Message', 'বার্তা উত্তর', 'Responder Mensaje', 'الرد رسالة', 'Message De Réponse', '回复留言'),
(556, 'view_original_message', 'View Original Message', 'মূল বার্তা দেখুন', 'Ver mensaje original', 'عرض الرسالة الأصلية', 'Voir Original Message', '查看原始消息'),
(557, 'new_word', 'New Word', 'নতুন শব্দ', 'Palabra Nueva', 'كلمة جديدة', 'Nouveau Mot', '新词'),
(558, 'already_exists!', 'Already Exists!', 'আগে থেকেই আছে!', 'Ya Existe!', 'موجود بالفعل!', 'Existe Déjà!', '已经存在！'),
(559, 'language_name', 'Language Name', 'ভাষার নাম', 'Nombre de Idioma', 'اسم اللغة', 'Nom de la langue', '语言名称'),
(560, 'new_language', 'New Language', 'নতুন ভাষা', 'Nuevo Idioma', 'لغة جديدة', 'Nouvelle Langue', '新的语言'),
(561, 'do_you_really_want_to_delete_this_language?', 'Do You Really Want To Delete This Language?', 'আপনি কি সত্যিই এই ভাষা মুছে দিতে চান?', '¿Realmente desea eliminar este idioma?', 'هل حقا تريد حذف هذه اللغة؟', 'Êtes-vous sûr de vouloir supprimer cette langue?', '你真的要删除这个语言？'),
(562, 'unknown_user', 'Unknown User', 'অজানা ব্যবহারকারী', 'Usuario Desconocido', 'مجهول العضو', 'Utilisateur Inconnu', '未知用户');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(563, 'slider_enabled!', 'Slider Enabled!', 'সক্ষম স্লাইডার!', 'Deslizador Habilitado!', 'المنزلق ممكن!', 'Curseur activé!', '滑块启用！'),
(564, 'slider_disabled!', 'Slider Disabled!', 'স্লাইডার অক্ষম!', 'Deslizador discapacitados!', 'التمرير معطل!', 'Curseur handicapés!', '滑块残疾人！'),
(565, 'cash_payment_enabled!', 'Cash Payment Enabled!', 'নগদ অর্থ প্রদান সক্ষম!', 'Pago Dinero en efectivo habilitado!', 'الدفع نقدا تمكين!', 'Paiement en espèces activé!', '现金支付启用！'),
(566, 'cash_payment_disabled!', 'Cash Payment Disabled!', 'নগদ অর্থ প্রদান করা হবে নিষ্ক্রিয়!', 'Pago Dinero en efectivo habilitado!', 'الدفع نقدا معطل!', 'Paiement en espèces désactivé!', '现金付款禁用！'),
(567, 'slider', 'Slider', 'স্লাইডার', 'Deslizador', 'المنزلق', 'Curseur', '滑块'),
(568, 'cash_payment', 'Cash Payment', 'নগদে টাকা প্রদান', 'Pago al contado', 'دفع نقدا', 'Paiement en espèces', '现金支付'),
(569, 'revisit_after', 'Revisit After', 'পরবর্তীতে পরিদর্শন', 'Revisar Después', 'إعادة النظر بعد', 'Revoir Après', '回访后'),
(570, 'days', 'Days', 'দিন', 'Días', 'أيام', 'Jours', '天'),
(571, 'you_registered_successfully', 'You Registered Successfully', 'আপনি সাফল্যের সাথে নিবন্ধিত', 'Usted registrado correctamente', 'كنت مسجل بنجاح', 'Vous enregistré avec succès', '你成功注册'),
(572, 'registration_failed!_try_again!', 'Registration Failed! Try Again!', 'নিবন্ধন অকৃতকার্য! </font><font>আবার চেষ্টা কর!', '¡Registro fallido! </font><font>¡Inténtalo de nuevo!', 'فشل في التسجيل! </font><font>حاول مرة أخرى!', 'Échec de l''enregistrement! </font><font>Essaye encore!', '注册失败！</font><font>再试一次！'),
(573, 'registering..', 'Registering..', 'নিবন্ধীকরণ ..', 'Registrando ..', 'تسجيل ..', 'Enregistrement ..', '注册..'),
(574, 'you_logged_out_successfully', 'You Logged Out Successfully', 'আপনি সফলভাবে লগ আউট', 'Usted cerrado la sesión con éxito', 'قمت بتسجيل بنجاح', 'Vous vous êtes connecté avec succès', '您已注销成功'),
(575, 'stripe_payment', 'Stripe Payment', 'ডোরা পেমেন্ট', 'Raya Pago', 'شريط الدفع', 'Stripe paiement', '条纹付款'),
(576, 'stripe_secret_key', 'Stripe Secret Key', 'ডোরা সিক্রেট কী', 'Raya clave secreta', 'شريط سر مفتاح', 'Stripe Secret Key', '条纹秘密钥匙'),
(577, 'stripe_publishable_key', 'Stripe Publishable Key', 'ডোরা প্রকাশযোগ্য কী', 'Raya Publicable clave', 'شريط للنشر مفتاح', 'Stripe Publiable clé', '条纹可发布重点'),
(578, 'your_card_details_verified!', 'Your Card Details Verified!', 'আপনার কার্ড বিবরণ যাচাই!', 'Su Tarjeta detalles verificado!', 'بطاقتك تفاصيل التحقق!', 'Votre carte Détails Vérifié!', '您的信用卡资料验证！'),
(579, 'pay_with_stripe', 'Pay With Stripe', 'ডোরা দিয়ে দিতে', 'Pagará con la raya', 'دفع مع الشريط', 'Payez à rayures', '支付随着条纹'),
(580, 'color_schemes', 'Color Schemes', 'কালার স্কিম', 'Combinaciones de colores', 'أنظمة الألوان', 'Jeux de couleurs', '配色方案'),
(581, 'header_color', 'Header Color', 'শিরোলেখ রঙ', 'Cabecera color', 'رأس اللون', 'Header couleur', '标题颜色'),
(582, 'footer_color', 'Footer Color', 'পাদলেখ রঙ', 'Pie de página en color', 'تذييل اللون', 'Pied de couleur', '页脚颜色'),
(583, 'select', 'Select', 'নির্বাচন করা', 'Seleccionar', 'اختار', 'Sélectionner', '选择'),
(584, 'cart_emptied', 'Cart Emptied', 'কার্ট emptied', 'Cesta Vaciado', 'عربة أفرغ', 'Panier Vidé', '购物车清空'),
(585, 'header/footer_color_scheme', 'Header/footer Color Scheme', 'হেডার / ফুটার বর্ণবিন্যাস', 'Encabezado / pie de página Esquema de color', 'رأس / تذييل نظام الألوان', 'En-tête / pied de page Color Scheme', '页眉/页脚配色方案'),
(586, 'header_/_footer_scheme', 'Header / Footer Scheme', 'শিরোলেখ / পাদলেখ প্রকল্প', 'Encabezado Pie de página Esquema /', 'رأس / تذييل مخطط', 'Tête / pied Scheme', '页眉/页脚计划'),
(587, 'choode_your_scheme', 'Choode Your Scheme', 'আপনার স্কিম Choode', 'Choode Su Esquema', 'Choode مخطط لديك', 'Choode Votre Scheme', 'Choode你的计划'),
(588, 'edit_page', 'Edit Page', 'সম্পাদনা পাতা', 'Editar Página', 'تعديل الصفحة', 'Modifier la page', '编辑页面'),
(589, 'ddd', 'Ddd', 'DDD', 'Ddd', 'DDD', 'Ddd', 'DDD');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(590, 'page_code', 'Page Code', 'পৃষ্ঠা কোড', 'Página de códigos', 'كود الصفحة', 'Code Page', '页面代码'),
(591, 'page_tags', 'Page Tags', 'পাতা ট্যাগ', 'Página Etiquetas', 'الصفحة الكلمات', 'Page Tags', '标签页'),
(592, 'column', 'Column', 'স্তম্ভ', 'Columna', 'عمود', 'Colonne', '柱'),
(593, 'gg', 'Gg', 'GG', 'Gg', 'زز', 'Gg', 'GG'),
(594, 'if_you_need_more_choice_options_for_your_product_,please_click_here.', 'If You Need More Choice Options For Your Product ,please Click Here.', 'আপনি আপনার পণ্যের জন্য আরো পছন্দ বিকল্প প্রয়োজন, এখানে ক্লিক করুন.', 'Si usted necesita más opciones de elección para su producto, por favor haga clic aquí.', 'إذا كنت بحاجة إلى المزيد من الخيارات الخيارات للمنتج الخاص بك، الرجاء الضغط هنا.', 'Si vous souhaitez plus d''options choix pour votre produit, s''il vous plaît Cliquez ici.', '如果您需要更多的选择选项，为您的产品，请点击这里。'),
(595, 'add_option', 'Add Option', 'অপশন যোগ', 'Añadir Opción', 'إضافة خيار', 'Ajouter une option', '添加选项'),
(596, 'customer_input_title', 'Customer Input Title', 'গ্রাহক ইনপুট শিরোনাম', 'Cliente Título de entrada', 'العميل إدخال عنوان', 'Entrée client Titre', '顾客输入标题'),
(597, 'add_options_for_choice', 'Add Options For Choice', 'পছন্দ জন্য বিকল্প যোগ', 'Agregar opciones para la opción', 'إضافة خيارات للاختيار', 'Ajouter des Options For Choice', '添加选项供选择'),
(598, 'add_customer_input_options', 'Add Customer Input Options', 'গ্রাহক ইনপুট বিকল্প যোগ', 'Añadir Opciones de entrada del cliente', 'إضافة خيارات الإدخال العملاء', 'Ajouter Options d''entrée à la clientèle', '添加用户输入选项'),
(599, 'if_you_need_more_choice_options_for_customers_of_this_product_,please_click_here.', 'If You Need More Choice Options For Customers Of This Product ,please Click Here.', 'আপনি এই পণ্যের গ্রাহকদের জন্য আরো পছন্দ বিকল্প প্রয়োজন, এখানে ক্লিক করুন.', 'Si usted necesita más opciones de elección para los clientes de este producto, por favor haga clic aquí.', 'إذا كنت بحاجة إلى المزيد من الخيارات الخيارات للعملاء من هذا المنتج، يرجى النقر هنا.', 'Si vous souhaitez plus d''options choix pour les clients de ce produit, s''il vous plaît Cliquez ici.', '如果您需要更多的选择方式供客户选择本产品，请点击这里。'),
(600, 'option_name', 'Option Name', 'বিকল্প নাম', 'Nombre de la opción', 'الخيار اسم', 'Nom de l''option', '选项​​名称'),
(601, 'product_details', 'Product Details', 'পণ্যের বিবরণ', 'Detalles Del Producto', 'تفاصيل المنتج', 'Détails du produit', '产品详情'),
(602, 'business_details', 'Business Details', 'ব্যবসার বিবরণ', 'Detalles del negocio', 'تفاصيل العمل', 'Détails d''affaires', '业务细节'),
(603, 'customer_choice_options', 'Customer Choice Options', 'গ্রাহকের পছন্দ বিকল্প', 'Opciones de elección de los clientes', 'خيارات اختيار العملاء', 'Options choix du client', '客户选择选项'),
(604, 'choose_one', 'Choose One', 'একটি নির্বাচন করুন', 'Elige uno', 'اختر واحدا', 'Choisissez-en un', '选一个'),
(605, 'choices', 'Choices', 'গ্রেপ্তার', 'Elecciones', 'الخيارات', 'Choix', '选择'),
(606, 'change_choices', 'Change Choices', 'পরিবর্তন গ্রেপ্তার', 'Cambiar opciones', 'تغيير خيارات', 'Changer choix', '更改选择'),
(607, 'coupon_discount', 'Coupon Discount', 'কুপন ডিসকাউন্ট', 'Cupón de Descuento', 'خصم القسيمة', 'Coupon de réduction', '优惠券折扣'),
(608, 'discount_coupon', 'Discount Coupon', 'ডিসকাউন্ট কুপন', 'Cupón de descuento', 'خصم القسيمة', 'Coupon de réduction', '优惠券'),
(609, 'manage_coupons', 'Manage Coupons', 'কুপন পরিচালনা', 'Administrar Cupones', 'إدارة كوبونات', 'Gérer Coupons', '管理优惠券'),
(610, 'add_coupon', 'Add Coupon', 'কুপন যোগ', 'Añadir Cupón', 'إضافة القسيمة', 'Ajouter Coupon', '添加优惠券'),
(611, 'create_coupon', 'Create Coupon', 'কুপন তৈরি', 'Crear Cupón', 'إنشاء القسيمة', 'Créer Coupon', '创建优惠券'),
(612, 'coupon', 'Coupon', 'কুপন', 'Cupón', 'كوبون', 'Coupon', '优惠券'),
(613, 'coupon_title', 'Coupon Title', 'কুপন শিরোনাম', 'Cupón Título', 'قسيمة العنوان', 'Coupon Titre', '优惠券标题'),
(614, 'valid_till', 'Valid Till', 'বৈধ', 'Válido hasta', 'صالحة ل', 'Valable Pour', '有效期至');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(615, 'coupon_discount_for', 'Coupon Discount For', 'জন্য কুপন ডিসকাউন্ট', 'Cupón Descuento Para', 'كوبون خصم ل', 'Coupon de réduction Pour', '优惠券折扣'),
(616, 'discount_type', 'Discount Type', 'ছাড়ের ধরন', 'Tipo de descuento', 'نوع الخصم', 'Type de remise', '量贩式'),
(617, 'discount_value', 'Discount Value', 'বাট্টা মূল্য', 'Valor Descuento', 'قيمة الخصم', 'Valeur Remise', '贴现值'),
(618, 'coupon_logo', 'Coupon Logo', 'কুপন লোগো', 'Cupón Logo', 'قسيمة الشعار', 'Coupon Logo', '优惠券标志'),
(619, 'select_coupon_logo', 'Select Coupon Logo', 'নির্বাচন কুপন লোগো', 'Seleccione Cupón Logo', 'حدد القسيمة الشعار', 'Sélectionnez Coupon Logo', '选择优惠券标志'),
(620, 'code', 'Code', 'কোড', 'Código', 'رمز', 'Code', '代码'),
(621, 'added_by', 'Added By', 'দ্বারা যোগ', 'Añadido por', 'اضيف بواسطة', 'Ajouté par', '通过添加'),
(622, 'coupon_code', 'Coupon Code', 'কুপন কোড', 'Código Promocional', 'رمز القسيمة', 'Code Promo', '优惠券代码'),
(623, 'edit_coupon', 'Edit Coupon', 'সম্পাদনা কুপন', 'Editar Cupón', 'تحرير القسيمة', 'Modifier Coupon', '编辑优惠券'),
(624, 'coupon_discount_on', 'Coupon Discount On', 'কুপন ডিসকাউন্ট উপর', 'Cupón de descuento en las', 'كوبون خصم على', 'Coupon de réduction Sur', '优惠券折扣'),
(625, 'coupon_already_activated', 'Coupon Already Activated', 'কুপন ইতিমধ্যে সক্রিয়', 'Cupón sido activado', 'القسيمة إذا المنشط', 'Coupon déjà activé', '优惠券已激活'),
(626, 'applying..', 'Applying..', 'প্রয়োগ ..', 'Aplicando ..', 'تطبيق ..', 'Application ..', '应用..'),
(627, 'coupon_not_valid', 'Coupon Not Valid', 'বৈধ নয় কুপন', 'Cupón no válido', 'القسيمة غير صالح', 'Coupon non valide', '优惠券无效'),
(628, 'coupon_discount_successful', 'Coupon Discount Successful', 'কুপন ডিসকাউন্ট সফল', 'Cupón Descuento Exitosa', 'قسيمة الخصم الناجح', 'Coupon de réduction réussie', '优惠券折扣成功'),
(629, 'apply_coupon', 'Apply Coupon', 'কুপন প্রয়োগ করুন', 'Aplicar cupón', 'تطبيق القسيمة', 'Appliquer Coupon', '申请优惠券'),
(630, 'coupon_discount_activated', 'Coupon Discount Activated', 'কুপন ডিসকাউন্ট সক্রিয়', 'Cupón Descuento Activado', 'خصم القسيمة المنشط', 'Bon de réduction Activé', '优惠券折扣激活'),
(631, 'enabled!', 'Enabled!', 'সক্রিয়!', 'Habilitado!', 'تمكين!', 'Enabled!', '启用！'),
(632, 'disabled!', 'Disabled!', 'পংগু!', 'Habilitado!', 'معاق!', 'Désactivé!', '残疾人！'),
(633, 'be_a_seller', 'Be A Seller', 'একটি বিক্রেতা হতে', 'Sea Un Vendedor', 'يكون البائع', 'Soyez un vendeur', '成为一个卖家'),
(634, 'already_a_seller?', 'Already A Seller?', 'ইতিমধ্যে একটি বিক্রেতা?', '¿Ya es usted vendedor?', 'إذا كنت بائع؟', 'Déjà un vendeur?', '已经是卖家？'),
(635, 'click', 'Click', 'দেখার জন্য ক্লিক করুন', 'Haga clic en', 'انقر', 'Cliquez', '点击'),
(636, 'company', 'Company', 'কোম্পানি', 'Empresa', 'شركة', 'Entreprise', '公司'),
(637, 'display_name', 'Display Name', 'ডিসপ্লে নাম', 'Mostrar nombre', 'اسم العرض', 'Afficher un nom', '显示名称'),
(638, 'vendors', 'Vendors', 'বিক্রেতা', 'Los vendedores', 'الباعة', 'Les vendeurs', '厂商'),
(639, 'manage_vendors', 'Manage Vendors', 'বিক্রেতারা পরিচালনা', 'Administrar proveedores', 'إدارة الباعة', 'Gérer vendeurs', '管理供应商'),
(640, 'total_sale', 'Total Sale', 'মোট বিক্রয়', 'Venta total', 'إجمالي بيع', 'Total Vente', '总销售额'),
(641, 'vendor', 'Vendor', 'বিক্রেতা', 'Vendedor', 'بائع', 'Fournisseur', '供应商'),
(642, 'due_amount', 'Due Amount', 'কারণে পরিমাণ', 'Cantidad a pagar', 'المبلغ المستحق', 'Montant dû', '到期金额'),
(643, 'pay', 'Pay', 'বেতন', 'Pagar', 'دفع', 'Payer', '付'),
(644, 'membership_type', 'Vendorship Type', 'Vendorship ধরন', 'Tipo Vendorship', 'نوع Vendorship', 'Type de Vendorship', 'Vendorship类型'),
(645, 'create_membership', 'Create Vendorship', 'Vendorship তৈরি', 'Crear Vendorship', 'إنشاء Vendorship', 'Créer Vendorship', '创建Vendorship'),
(646, 'membership', 'Vendorship', 'Vendorship', 'Vendorship', 'Vendorship', 'Vendorship', 'Vendorship'),
(647, 'timespan', 'Timespan', 'এইসব', 'Espacio de tiempo', 'المدى الزمني', 'Timespan', '时间跨度');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(648, 'add_membership', 'Add Vendorship', 'Vendorship করো', 'Añadir Vendorship', 'إضافة Vendorship', 'Ajouter Vendorship', '添加Vendorship'),
(649, 'edit_membership', 'Edit Vendorship', 'সম্পাদনা Vendorship', 'Editar Vendorship', 'تحرير Vendorship', 'Modifier Vendorship', '编辑Vendorship'),
(650, 'for', 'For', 'জন্য', 'Por', 'إلى', 'Pour', '为'),
(651, 'maximum_products', 'Maximum Products', 'সর্বাধিক পণ্য', 'Productos Máximos', 'المنتجات القصوى', 'Produits maximum', '最大产品'),
(652, 'lifetime', 'Lifetime', 'জীবনকাল', 'Vida', 'حياة', 'Durée de vie', '一生'),
(653, 'manage_vendor_profile', 'Manage Vendor Profile', 'বিক্রেতার প্রোফাইল পরিচালনা', 'Administrar perfil de proveedor', 'إدارة بائع الشخصي', 'Gérer Profil vendeur', '管理供应商档案'),
(654, 'settings', 'Settings', 'সেটিংস', 'Ajustes', 'الإعدادات', 'Paramètres', '设置'),
(655, 'contact_message', 'Contact Message', 'যোগাযোগ বার্তা', 'Contacto Mensaje', 'الاتصال رسالة', 'Contact Message', '联系方式留言'),
(656, 'choose_product', 'Choose Product', 'পণ্য নির্বাচন', 'Elija Producto', 'اختيار المنتج', 'Choisissez un produit', '选择产品'),
(657, 'full_invoice', 'Full Invoice', 'সম্পূর্ণ চালান', 'Factura completa', 'الفاتورة كاملة', 'Facture complet', '全部发票'),
(658, 'invoice_for', 'Invoice For', 'জন্য চালান', 'Para Factura', 'فاتورة ل', 'Facture de', '发票'),
(659, 'admin', 'Admin', 'অ্যাডমিন', 'Administración', 'المشرف', 'Administrateur', '管理员'),
(660, 'account_not_approved._wait_for_approval.', 'Account Not Approved. Wait For Approval.', 'অ্যাকাউন্ট অনুমোদিত নয়. </font><font>অনুমোদনের জন্য অপেক্ষা করুন.', 'Cuenta No Aprobado. </font><font>Esperar la aprobación.', 'الحساب غير المعتمدة. </font><font>الانتظار للحصول على الموافقة.', 'Compte non approuvé. </font><font>Attendre l''approbation.', '帐户不获批准。</font><font>等待审批。'),
(661, 'payment_stat', 'Payment Stat', 'পেমেন্ট Stat', 'Stat Pago', 'دفع ستات', 'Paiement Stat', '支付统计'),
(662, 'total_sold', 'Total Sold', 'মোট বিক্রি', 'Total Vendido', 'إجمالي تباع', 'Vendu total', '累计售出'),
(663, 'paid_by_customer', 'Paid By Customer', 'গ্রাহকের দ্বারা প্রদান', 'Pagado por el cliente', 'التي يدفعها العملاء', 'Payé par le client', '支付客户'),
(664, 'paid_to_vendor', 'Paid To Vendor', 'বিক্রেতার দেওয়া', 'Pagado a proveedor', 'دفعت إلى بائع', 'Payé au fournisseur', '支付给供应商'),
(665, 'due_to_vendor', 'Due To Vendor', 'দরুন বিক্রেতা', 'Debido a proveedor', 'ونظرا إلى البائع', 'En raison de vendeur', '由于供应商'),
(666, 'vendor_home', 'Vendor Home', 'বিক্রেতার হোম', 'Vendedor Inicio', 'بائع الصفحة الرئيسية', 'Fournisseur Accueil', '供应商首页'),
(667, 'vendor_homepage', 'Vendor Homepage', 'বিক্রেতার হোমপেজ', 'Vendedor Homepage', 'بائع الصفحة الرئيسية', 'Accueil du vendeur', '供应商首页'),
(668, 'after_vendor_featured', 'After Vendor Featured', 'বিক্রেতার আলোচিত পরে', 'Después de proveedores destacados', 'بعد بائع مميزة', 'Après vendeur vedette', '供应商精选后'),
(669, 'vendor_notification_sound', 'Vendor Notification Sound', 'বিক্রেতার বিজ্ঞপ্তি শব্দ', 'Vendedor sonido de notificación', 'بائع إعلام الصوت', 'Notification vendeur sonore', '供应商通知声音'),
(670, 'vendor_notification_volume', 'Vendor Notification Volume', 'বিক্রেতার বিজ্ঞপ্তি ভলিউম', 'Vendedor volumen Notificación', 'بائع إعلام حجم', 'Fournisseur notification Volume', '供应商的通知音量'),
(671, 'vendor_logo', 'Vendor Logo', 'বিক্রেতার লোগো', 'Vendedor Logo', 'بائع الشعار', 'Vendor Logo', '销售商标志'),
(672, 'vendor_images', 'Vendor Images', 'বিক্রেতার ছবি', 'Imágenes de proveedores', 'صور بائع', 'Images fournisseurs', '供应商形象'),
(673, 'select_banner', 'Select Banner', 'নির্বাচন ব্যানার', 'Seleccione Banner', 'حدد شعار', 'Sélectionnez Bannière', '选择旗帜'),
(674, 'manage_payment_receiving_settings', 'Manage Payment Receiving Settings', 'পেমেন্ট পাওয়ার সেটিংস পরিচালনা করুন', 'Administrar configuración de recepción de pago', 'إدارة إعدادات الدفع الاستلام', 'Gérer les paramètres de réception de paiements', '管理的收款设置');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(675, 'select_product', 'Select Product', 'নির্বাচন পণ্য', 'Seleccionar producto', 'حدد المنتج', 'Sélectionner un produit', '选择产品'),
(676, 'pay_vendor', 'Pay Vendor', 'পে বিক্রেতার', 'Vendedor Paga', 'دفع البائع', 'Pay vendeur', '支付供应商'),
(677, 'cash_on_delivery_to_vendor', 'Cash On Delivery To Vendor', 'বিলি নগদ বিক্রেতা', 'Pago contra entrega al proveedor', 'نقدا عند التسليم لبائع', 'Cash On Delivery Pour fournisseur', '货到付款到供应商'),
(678, 'due', 'Due', 'দরুন', 'Debido', 'بسبب', 'Dû', '应有'),
(679, 'partially_paid', 'Partially Paid', 'আংশিকভাবে প্রদত্ত', 'Parcialmente Pagado', 'دفعت جزئيا', 'Partiellement payé', '部分支付'),
(680, 'fully_paid', 'Fully Paid', 'সম্পূর্ণ পরিশোধ', 'Totalmente pagado', 'مدفوع بالكامل', 'Entièrement payé', '缴足'),
(681, 'total_cash_on_delivery_to_vendor', 'Total Cash On Delivery To Vendor', 'বিক্রেতা ডেলিভারি মোট ক্যাশ', 'Total activos líquidos en el envío a Vendor', 'مجموع نقدا عند التسليم لالبائع', 'Total en espèces sur la livraison à vendeur', '总货到付款到供应商'),
(682, 'paid_cash_on_delivery_to_vendor', 'Paid Cash On Delivery To Vendor', 'বিক্রেতা বিলি নগদ পরিশোধের', 'Pagado Pago contra entrega al proveedor', 'تدفع نقدا عند التسليم لبائع', 'Payés par contre remboursement au fournisseur', '支付货到付款到供应商'),
(683, 'by_admin', 'By Admin', 'দ্বারা অ্যাডমিন', 'Por Admin', 'من طرف Admin', 'Par admin', '由Admin'),
(684, 'cash_on_delivery', 'Cash On Delivery', 'প্রদানোত্তর পরিশোধ', 'Pago contra entrega', 'الدفع عند التسليم', 'Paiement À La Livraison', '货到付款'),
(685, 'upgrade', 'Upgrade', 'আপগ্রেড', 'Modernización', 'تطوير', 'Améliorer', '提升'),
(686, 'choose_membership', 'Choose Vendorship', 'Vendorship চয়ন', 'Elija Vendorship', 'اختيار Vendorship', 'Choisissez Vendorship', '选择Vendorship'),
(687, 'details', 'Details', 'বিস্তারিত', 'Detalles', 'تفاصيل', 'Détails', '详细信息'),
(688, 'method', 'Method', 'পদ্ধতি', 'Método', 'طريقة', 'Méthode', '方法'),
(689, 'maximum_product', 'Maximum Product', 'সর্বাধিক পণ্য', 'Máximo Producto', 'الحد الأقصى المنتج', 'Produit maximum', '最大产品'),
(690, 'default', 'Default', 'ডিফল্ট', 'Defecto', 'افتراضي', 'Par défaut', '默认'),
(691, 'free', 'Free', 'বিনামূল্যে', 'Gratis', 'حر', 'Libre', '自由'),
(692, 'manage_membership_settings', 'Manage Vendorship Settings', 'Vendorship সেটিংস পরিচালনা করুন', 'Administrar configuración Vendorship', 'إدارة إعدادات Vendorship', 'Gérer les paramètres Vendorship', '管理Vendorship设置'),
(693, 'upgrade_membership', 'Upgrade Vendorship', 'Vendorship আপগ্রেড', 'Actualiza Vendorship', 'ترقية Vendorship', 'Améliorez Vendorship', '升级Vendorship'),
(694, 'about', 'About', 'প্রায়', 'Sobre', 'حول', 'Sur', '大约'),
(695, 'paid_by_customers', 'Paid By Customers', 'গ্রাহকদের দ্বারা প্রদত্ত', 'Pagado por los clientes', 'يدفعها العملاء', 'Payés par les clients', '支付的客户'),
(696, 'due_from_admin', 'Due From Admin', 'অ্যাডমিন থেকে কারণে', 'Debido De admin', 'بسبب من المسؤول', 'En raison par Admin', '由于从管理员'),
(697, 'membership_expiration', 'Vendorship Expiration', 'Vendorship মেয়াদপূর্তির', 'Vencimiento Vendorship', 'Vendorship انتهاء الصلاحية', 'Vendorship Expiration', 'Vendorship过期'),
(698, 'membership_details', 'Vendorship Details', 'Vendorship বিস্তারিত', 'Vendorship Detalles', 'Vendorship تفاصيل', 'Vendorship Détails', 'Vendorship详细'),
(699, 'amount', 'Amount', 'পরিমাণ', 'Cantidad', 'كمية', 'Quantité', '量'),
(700, 'cash', 'Cash', 'নগদ', 'Efectivo', 'نقد', 'Argent comptant', '现金'),
(701, 'paypal', 'Paypal', 'পেপ্যাল', 'PayPal', 'باي بال', 'Paypal', '支付宝'),
(702, 'str ipe', 'Str Ipe', 'Str IPE', 'Str Ipe', 'شارع بورصة البترول الدولية', 'Str Ipe', '海峡蚁'),
(703, 'stripe', 'Stripe', 'ডোরা', 'Raya', 'شريط', 'Stripe', '条纹'),
(704, 'products_of', 'Products Of', 'পণ্য', 'Artículos de', 'منتجات', 'Produits De', '产品'),
(705, 'all_vendors', 'All Vendors', 'সকল বিক্রেতাদের', 'Todos los vendedores', 'جميع الباعة', 'Tous les vendeurs', '所有厂商');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(706, 'all_categories', 'All Categories', 'সব ধরনের', 'Todas Las Categorías', 'جميع الفئات', 'Toutes Catégories', '所有类别'),
(707, 'after_filter', 'After Filter', 'ফিল্টার পরে', 'Después de Filtro', 'بعد تصفية', 'Après Filtre', '过滤后'),
(708, 'sitemap_link', 'Sitemap Link', 'সাইট ম্যাপ লিংক', 'Mapa del sitio Enlace', 'رابط خريطة الموقع', 'Plan du site Lien', '地图链接'),
(709, 'social_network_reach', 'Social Network Reach', 'সামাজিক নেটওয়ার্ক পৌঁছানো', 'Red de Alcance Social', 'شبكة ريتش الاجتماعية', 'Réseau portée sociale', '社会网络覆盖'),
(710, 'alexa_traffic_metrics', 'Alexa Traffic Metrics', 'আলেক্সা ট্রাফিক ম্যাট্রিক', 'Alexa Traffic Métrica', 'اليكسا المرور القياسات', 'Alexa Traffic Metrics', 'Alexa的流量指标'),
(711, 'alexa_traffic_graphs', 'Alexa Traffic Graphs', 'আলেক্সা ট্রাফিক গ্রাফ', 'Alexa Traffic Gráficos', 'اليكسا المرور الرسوم البيانية', 'Alexa Traffic Graphiques', 'Alexa的流量图'),
(712, 'search_index', 'Search Index', 'সহায়িকাসন্ধানসূচি', 'Buscar Índice', 'مؤشر البحث', 'Recherche Index', '搜索索引'),
(713, 'alexa_traffic_rank', 'Alexa Traffic Rank', 'আলেক্সা ট্রাফিক মান', 'Alexa ranking de tráfico', 'رتبة اليكسا المرور', 'Alexa Traffic Rank', 'Alexa排名'),
(714, 'your_email_address', 'Your Email Address', 'আপনার ইমেইল ঠিকানা', 'Tu Correo Electrónico', 'بريدك الإلكتروني', 'Votre adresse E-mail', '您的电子邮件地址'),
(715, 'uploaded_maximum_products', 'Uploaded Maximum Products', 'ঊর্ধ্বভরণকৃত সর্বাধিক পণ্য', 'Subida Productos Máximos', 'منتجات محملة الأقصى', 'Téléchargées produits maximum', '上传的最大产品'),
(716, 'payment_settings', 'Payment Settings', 'পেমেন্ট সেটিংস', 'Ajustes de Pago', 'إعدادات الدفع', 'Réglages de paiement', '付款设置'),
(717, 'my_packages', 'My Packages', 'আমার প্যাকেজ', 'Mis Paquetes', 'بلدي الحزم', 'Mes Forfaits', '我的包'),
(718, 'registration_successful!', 'Registration Successful!', 'অস্ত্রোপচার!', '¡Registro exitoso!', 'نجاح عملية التسجيل!', 'Inscription réussi!', '注册成功！'),
(719, 'please_check_your_email_inbox', 'Please Check Your Email Inbox', 'আপনার ইমেইল ইনবক্স চেক করুন দয়া করে', 'Por favor revise su bandeja de entrada de correo electrónico', 'يرجى التحقق من بريدك الالكتروني', 'S''il vous plaît vérifier votre boite email', '请检查您的电子邮件收件箱'),
(720, 'visit_my_homepage', 'Visit My Homepage', 'আমার হোমপেজে যান', 'Visita Mi Página de Inicio', 'زيارتي الصفحة الرئيسية', 'Visitez ma page d''accueil', '访问我的主页'),
(721, 'next', 'Next', 'পরবর্তী', 'Siguiente', 'التالى', 'Suivant', '下一个'),
(722, 'previous', 'Previous', 'পূর্ববর্তী', 'Anterior', 'سابق', 'Précédent', '上一页'),
(723, 'total_uploaded_products', 'Total Uploaded Products', 'মোট আপলোড পণ্য', 'Total Productos subidos', 'مجموع المنتجات حملت', 'Total des Produits téléchargées', '共上传产品'),
(724, 'uploaded_published_products', 'Uploaded Published Products', 'ঊর্ধ্বভরণকৃত প্রকাশিত পণ্য', 'Productos Publicados Subida', 'منتجات محملة المنشورة', 'Produits téléchargées Publié', '上传发布产品'),
(725, 'already_uploaded_maximum_products!', 'Already Uploaded Maximum Products!', 'ইতিমধ্যে আপলোড সর্বাধিক পণ্য!', 'Ya cargados Productos Máximo!', 'تم الرفع بالفعل منتجات الأقصى!', 'Déjà téléchargé produits maximum!', '已上传最高的产品！'),
(726, 'upgrade_your_membership', 'Upgrade Your Vendorship', 'তোমার Vendorship আপগ্রেড', 'Actualiza Tu Vendorship', 'ترقية Vendorship لديك', 'Améliorez votre Vendorship', '升级你的Vendorship'),
(727, 'membership_payments', 'Vendorship Payments', 'Vendorship পেমেন্টস্', 'Pagos Vendorship', 'المدفوعات Vendorship', 'Paiements de Vendorship', 'Vendorship付款'),
(728, 'manage_membership_payments', 'Manage Vendorship Payments', 'Vendorship পেমেন্ট পরিচালনা', 'Administrar Pagos Vendorship', 'إدارة المدفوعات Vendorship', 'Gérer les paiements Vendorship', '管理Vendorship付款'),
(729, 'upgraded_membership', 'Upgraded Vendorship', 'আপগ্রেড Vendorship', 'Vendorship actualizado', 'Vendorship ترقية', 'Vendorship amélioré', '升级Vendorship');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(730, 'view_payment_details', 'View Payment Details', 'দেখুন পেমেন্ট বিস্তারিত', 'Ver los detalles del pago', 'عرض تفاصيل الدفع', 'Voir les détails de paiement', '查看付款明细'),
(731, 'confirm_payment', 'Confirm Payment', 'পেমেন্ট নিশ্চিত', 'Confirmar Pago', 'تأكيد الدفع', 'Confirmer le paiement', '确认付款'),
(732, 'datetime', 'Datetime', 'তারিখ সময়', 'Fecha y hora', 'التاريخ والوقت', 'Datetime', '日期时间'),
(733, 'membership_to_upgrade', 'Vendorship To Upgrade', 'আপগ্রেড করার Vendorship', 'Vendorship Para actualizar', 'Vendorship لترقية', 'Vendorship Pour mettre à niveau', 'Vendorship升级'),
(734, 'paid', 'Paid', 'প্রদত্ত', 'Pagado', 'دفع', 'Payé', '付费'),
(735, 'check_details', 'Check Details', 'বিবরণ চেক', 'Compruebe Detalles', 'تحقق من التفاصيل', 'Consultez les détails', '查看详情'),
(736, 'type', 'Type', 'আদর্শ', 'Tipo', 'اكتب', 'Type', '类型'),
(737, 'none', 'None', 'না', 'Ninguno', 'لا شيء', 'Aucun', '无'),
(738, 'facebook_comment', 'Facebook Comment', 'ফেসবুক মন্তব্য', 'Facebook comentario', 'الفيسبوك تعليق', 'Facebook Commentaire', 'Facebook的评论'),
(739, 'disqus_comment', 'Disqus Comment', 'Disqus মন্তব্য', 'Disqus comentario', 'هارد تعليق', 'Disqus Commentaire', 'DISQUS评论'),
(740, 'fb_comment_id', 'Fb Comment Id', 'আইডি মন্তব্য FB', 'Fb Comentario Id', 'أف ب تعليق رقم', 'Fb Id Commentaire', 'FB注释ID'),
(741, 'seal', 'Seal', 'সীল', 'Foca', 'ختم', 'Joint', '密封'),
(742, 'membership_seal', 'Vendorship Seal', 'Vendorship সীল', 'Vendorship Seal', 'Vendorship الختم', 'Seal Vendorship', 'Vendorship密封'),
(743, 'select_membership_seal', 'Select Vendorship Seal', 'Vendorship সীল নির্বাচন', 'Seleccione Vendorship Seal', 'حدد Vendorship الختم', 'Sélectionnez Seal Vendorship', '选择Vendorship密封'),
(744, 'vendor_list', 'Vendor List', 'বিক্রেতা তালিকা', 'Lista de proveedores', 'قائمة بائع', 'Liste de fournisseurs', '供应商列表'),
(745, 'vendorship_timesapn', 'Vendorship Timesapn', 'Vendorship Timesapn', 'Vendorship Timesapn', 'Vendorship Timesapn', 'Vendorship Timesapn', 'Vendorship Timesapn'),
(746, 'remaining', 'Remaining', 'অবশিষ্ট', 'Restante', 'المتبقية', 'Restant', '剩余'),
(747, 'my_products', 'My Products', 'আমার পণ্য', 'Mis Productos', 'منتجاتي', 'Mes produits', '我的产品'),
(748, 'product_list', 'Product List', 'পণ্য তালিকা', 'Lista de productos', 'قائمة المنتجات', 'Liste de produits', '产品列表'),
(749, 'vendor_registration', 'Vendor Registration', 'বিক্রেতার নিবন্ধন', 'Proveedores Directorio', 'التسجيل بائع', 'Enregistrement des fournisseurs', '供应商登记'),
(750, 'customer_login', 'Customer Login', 'গ্রাহক লগইন', 'Acceso del cliente', 'دخول العملاء', 'Connexion client', '客户登录'),
(751, 'customer_registration', 'Customer Registration', 'গ্রাহক নিবন্ধন', 'Registro Clientes', 'التسجيل العملاء', 'Inscription à la clientèle', '客户注册'),
(752, 'pending_vendors', 'Pending Vendors', 'অপেক্ষারত বিক্রেতারা', 'Los vendedores pendientes', 'الباعة في انتظار', 'Les vendeurs en attente', '待供应商'),
(753, 'vendor_stattistics', 'Vendor Stattistics', 'বিক্রেতার Stattistics', 'Vendedor Stattistics', 'بائع Stattistics', 'Fournisseur Stattistics', '供应商Stattistics'),
(754, 'notification_email_sent_to_vendor!', 'Notification Email Sent To Vendor!', 'বিজ্ঞপ্তি ইমেইল বিক্রেতা পাঠানো হয়েছে!', 'Notificación por correo electrónico enviado a vendedor!', 'إشعار البريد الإلكتروني المرسلة إلى البائع!', 'Courriel de notification envoyé au vendeur!', '通知邮件发送给供应商！'),
(755, 'vendor_approval', 'Vendor Approval', 'বিক্রেতার অনুমোদন', 'Aprobación de proveedores', 'بائع الموافقة', 'Approbation du vendeur', '供应商认证'),
(756, 'approval', 'Approval', 'অনুমোদন', 'Aprobación', 'موافقة', 'Approbation', '审批'),
(757, 'approve', 'Approve', 'অনুমোদন করা', 'Aprobar', 'الموافقة', 'Approuver', '赞成'),
(758, 'postpone', 'Postpone', 'মুলতবি করা', 'Posponer', 'تأجيل', 'Reporter', '延期'),
(759, 'vendor_system', 'Vendor System', 'বিক্রেতার সিস্টেম', 'Sistema Vendor', 'نظام بائع', 'Système du vendeur', '供应商体系');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(760, 'our_vendors', 'Our Vendors', 'আমাদের বিক্রেতারা', 'Nuestros proveedores', 'الباعة لدينا', 'Nos fournisseurs', '我们的供应商'),
(761, 'homepage_cache_time', 'Homepage Cache Time', 'হোমপেজ ক্যাশে সময়', 'Página de caché Tiempo', 'الصفحة الرئيسية الكاش الوقت', 'Page d''accueil Cache Temps', '首页缓存时间'),
(762, 'search_for', 'Search For', 'সন্ধান করা', 'Buscar', 'بحث عن', 'Rechercher', '搜索'),
(763, 'total_vendors', 'Total Vendors', 'মোট বিক্রেতারা', 'Los vendedores totales', 'مجموع الباعة', 'Nombre de fournisseurs', '总供应商'),
(764, 'Sample Page', 'Sample Page', 'নমুনা পৃষ্ঠা', 'Página de Ejemplo', 'عينة الصفحة', 'Page d''exemple', '示例页面'),
(765, 'vendorship_timespan', 'Vendorship Timespan', 'Vendorship এইসব', 'Vendorship Timespan', 'Vendorship زمنية', 'Vendorship Timespan', 'Vendorship时间跨度'),
(766, 'blog', 'Blog', 'ব্লগ', 'Blog', 'مدونة', 'Blog', '博客'),
(767, 'all_blogs', 'All Blogs', 'সকল ব্লগ', 'Todos los blogs', 'كل المدونات', 'Tous les blogs', '所有博客'),
(768, 'all_blog_categories', 'All Blog Categories', 'সকল ব্লগ বিভাগ', 'Todas las Categorías del blog', 'جميع أقسام المدونة', 'Tous blog Catégories', '所有博客分类'),
(769, 'manage_blog', 'Manage Blog', 'ব্লগ পরিচালনা', 'Administrar Blog', 'إدارة المدونة', 'Gérer Blog', '管理博客'),
(770, 'add_blog', 'Add Blog', 'ব্লগ যোগ', 'Añadir Blog', 'إضافة المدونة', 'Ajouter Blog', '加入博客'),
(771, 'create_blog', 'Create Blog', 'ব্লগ তৈরি করুন', 'Crear Blog', 'إنشاء مدونة', 'Créer un blog', '创建博客'),
(772, 'back_to_blog_list', 'Back To Blog List', 'পিছনে তালিকা ব্লগ', 'Volver a la lista de blogs', 'العودة إلى قائمة المدونة', 'Retour à la liste Blog', '返回博客列表'),
(773, 'edit_blog', 'Edit Blog', 'সম্পাদনা ব্লগ', 'Editar Blog', 'تحرير المدونة', 'Modifier Blog', '编辑博客'),
(774, 'add_blog_category', 'Add Blog Category', 'ব্লগ বিভাগ যোগ', 'Añadir Blog Categoría', 'إضافة المدونة الفئة', 'Ajouter Blog Catégorie', '加入博客类别'),
(775, 'create_blog_category', 'Create Blog Category', 'ব্লগ বিভাগ তৈরি করুন', 'Crear Blog Categoría', 'إنشاء مدونة الفئة', 'Créer un blog Catégorie', '创建博客类别'),
(776, 'edit_blog_category', 'Edit Blog Category', 'সম্পাদনা ব্লগ বিভাগ', 'Editar Blog Categoría', 'تحرير المدونة الفئة', 'Modifier Blog Catégorie', '编辑博客类别'),
(777, 'blog_category', 'Blog Category', 'ব্লগ বিভাগ', 'Blog Categoría', 'بلوق الفئة', 'Blog Catégorie', '博客类别'),
(778, 'blog_details', 'Blog Details', 'ব্লগ বিবরণ', 'Blog detalles', 'تفاصيل بلوق', 'Détails blog', '博客详细'),
(779, 'blog_title', 'Blog Title', 'ব্লগ শিরোনাম', 'Titulo de Blog', 'عنوان المدونة', 'Titre du Blog', '博客标题'),
(780, 'summery', 'Summery', 'গ্রীষ্মের বৈশিষ্ট্যপূর্ণ', 'Estival', 'صيفي', 'D''été', '综述'),
(781, 'blog_has_been_uploaded!', 'Blog Has Been Uploaded!', 'ব্লগ আপলোড করা হয়েছে!', 'Blog se ha cargado!', 'بلوق تم تحميل!', 'Blog a été téléchargé!', '博客已经上传！'),
(782, 'blog_categories', 'Blog Categories', 'ব্লগ বিভাগ', 'Categorías del blog', 'بلوق الفئات', 'Blog Catégories', '博客分类'),
(783, 'downloadable_product_folder_name', 'Downloadable Product Folder Name', 'ডাউনলোডযোগ্য পণ্য ফোল্ডার নাম', 'Carpeta Descargable Productos', 'تحميل المنتج اسم المجلد', 'Téléchargeable produit Nom du dossier', '可下载的产品文件夹名称'),
(784, 'product_is_a_file', 'Product Is A File', 'পণ্যের একটি ফাইল', 'Producto es un archivo', 'المنتج هو ملف', 'Produit est un fichier', '产品是一个文件'),
(785, 'video', 'Video', 'ভিডিও', 'Vídeo', 'فيديو', 'Vidéo', '视频'),
(786, 'audio', 'Audio', 'অডিও', 'Audio', 'سمعي', 'Acoustique', '音频'),
(787, 'software', 'Software', 'সফটওয়্যার', 'Software', 'البرمجيات', 'Logiciels', '软体'),
(788, 'etc.', 'Etc.', 'প্রভৃতি', 'Etcétera', 'إلخ', 'Etc.', '等等。'),
(789, 'product_file', 'Product File', 'পণ্য ফাইলের', 'Archivo de productos', 'ملف المنتج', 'Fiche produit', '产品文件'),
(790, 'compressed', 'Compressed', 'কম্প্রেস', 'Comprimido', 'مضغوط', 'Comprimé', '压缩'),
(791, 'quick_view', 'Quick View', 'তারাতারি দেখা', 'Vista rápida', 'نظرة سريعة', 'Aperçu', '快速浏览'),
(792, 'compare', 'Compare', 'তুলনা', 'Comparar', 'قارن', 'Comparer', '比');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(793, 'todays_deal', 'Todays Deal', 'আজকের ডীল', 'Trato de hoy', 'صفقة اليوم', 'Todays affaire', '今天的交易'),
(794, 'product_added_to_compared', 'Product Added To Compared', 'পণ্য তুলনা যোগ', 'Producto añadido a la comparación', 'وأضاف المنتج لمقارنة', 'Produit ajouté à la comparaison', '产品加入对比'),
(795, 'compared', 'Compared', 'তুলনায়', 'Comparado', 'مقارنة', 'Comparé', '相比'),
(796, 'product_removed_from_compare', 'Product Removed From Compare', 'পণ্য তুলনা থেকে সরানো', 'Producto eliminadas del Comparar', 'إزالة المنتجات من قارن', 'Produit retiré du comparateur', '产品移出比较'),
(797, 'compare_category_full', 'Compare Category Full', 'সম্পূর্ণ শ্রেণী তুলনা', 'Comparar Categoría Completo', 'قارن الفئة كامل', 'Comparez Catégorie complet', '比较分类全部'),
(798, 'product_already_added_to_compare', 'Product Already Added To Compare', 'পণ্য ইতিমধ্যে তুলনা যোগ', 'Producto Ya agregación a la comparación', 'المنتج أضفت إلى قارن', 'Produit Déjà ajouté à comparer', '产品已添加到比较'),
(799, 'reset_compare_list', 'Reset Compare List', 'তালিকা তুলনা রিসেট', 'Restablecer la lista de comparación', 'إعادة تعيين قائمة قارن', 'Réinitialiser la liste de comparaison', '复位比较列表'),
(800, 'back_to_home', 'Back To Home', 'বাড়িতে ফিরে যাও', 'De vuelta a casa', 'الرجوع إلى الصفحة الرئيسية', 'De retour à la maison', '返回首页'),
(801, 'latest_blogs', 'Latest Blogs', 'সর্বশেষ ব্লগ', 'Últimos Blogs', 'أحدث المدونات', 'Derniers Blogs', '最新博客'),
(802, 'wish', 'Wish', 'ইচ্ছা', 'Deseos', 'أتمنى', 'Souhaiter', '希望'),
(803, 'wished', 'Wished', 'কাম্য', 'Deseado', 'تمنى', 'Souhaité', '希望'),
(804, 'wishing..', 'Wishing..', 'তবেই ..', 'Deseando..', 'متمنيا ..', 'Souhaitant ..', '许愿..'),
(805, 'unvailable', 'Unvailable', 'Unvailable', 'Unvailable', 'أونفيلبل', 'Unvailable', 'Unvailable'),
(806, 'today''s_deal', 'Today''s Deal', 'আজ এর ডীল', 'La oferta de hoy', 'صفقة اليوم', 'Aujourd''hui, Deal', '今日团购'),
(807, 'digital_product', 'Digital Product', 'ডিজিটাল পণ্য', 'Digital Producto', 'المنتج الرقمي', 'Digitals', '数字产品'),
(808, 'update_product_file', 'Update Product File', 'আপডেট পণ্য ফাইলের', 'Actualizar archivo de Producto', 'تحديث ملف المنتج', 'Mise à jour Fiche produit', '更新产品文件'),
(809, 'maximum_size', 'Maximum Size', 'সর্বাধিক আকার', 'Tamaño máximo', 'الحد الأقصى لحجم', 'Taille maximale', '最大尺寸'),
(810, 'text', 'Text', 'পাঠ', 'Texto', 'نص', 'Texte', '正文'),
(811, 'downloads', 'Downloads', 'জনপ্রিয়তা', 'Descargas', 'التحميلات', 'Téléchargements', '下载'),
(812, 'download', 'Download', 'ডাউনলোড', 'Descargar', 'تحميل', 'Télécharger', '下载'),
(813, 'download_permission_denied', 'Download Permission Denied', 'ডাউনলোড অনুমতি অস্বীকৃত', 'Descargar Permiso denegado', 'تحميل الإذن مرفوض', 'Télécharger Autorisation refusée', '下载权限被拒绝'),
(814, 'product_in_todays_deal!', 'Product In Todays Deal!', 'আজকের চুক্তি পণ্য!', 'Producto en el actual Deal!', 'المنتج في هذه الأيام صفقة!', 'Produit Dans Todays Deal!', '产品在今天的交易！'),
(815, 'product_removed_from_todays_deal!', 'Product Removed From Todays Deal!', 'আজকের চুক্তি থেকে সরানো পণ্য!', 'Producto eliminadas del de hoy Deal!', 'المنتج إزالتها من هذه الأيام صفقة!', 'Produit retiré du Todays Deal!', '产品中删除从今天的交易！'),
(816, 'vendor_locator', 'Vendor Locator', 'বিক্রেতার লোকেটার', 'Localizador de proveedores', 'بائع محدد', 'Localisateur de vendeur', '销售商定位器'),
(817, 'store_locator', 'Store Locator', 'দোকান লোকেটার', 'Localizador de tiendas', 'فروعنا', 'Localisateur de magasin', '新店'),
(818, 'search_vendors', 'Search Vendors', 'অনুসন্ধান বিক্রেতারা', 'Buscar proveedores', 'الباعة بحث', 'Les fournisseurs de recherche', '搜索厂商'),
(819, 'go', 'Go', 'যাওয়া', 'Irse', 'اذهب', 'Aller', '走');
INSERT INTO `language` (`word_id`, `word`, `english`, `Bangla`, `Spanish`, `Arabic`, `French`, `Chinese`) VALUES
(820, 'search_vendor_by_title,_location,_address_etc.', 'Search Vendor By Title, Location, Address Etc.', 'শিরোনাম দ্বারা অনুসন্ধান বিক্রেতার, অবস্থান, ঠিকানা ইত্যাদি', 'Búsqueda de proveedores por Título, ubicación, dirección, etc.', 'البحث البائعين حسب العنوان، الموقع، عنوان إلخ', 'Recherche vendeur par titre, Lieu, adresse, etc.', '搜索供应商通过标题，地点，地址等'),
(821, 'search_product_by_title,_description_etc.', 'Search Product By Title, Description Etc.', 'শিরোনাম, বিবরণ ইত্যাদি দ্বারা অনুসন্ধান পণ্য', 'Búsqueda de productos por Título, Descripción Etc.', 'البحث عن منتج حسب العنوان، الوصف إلخ', 'Recherche de produits par Titre, Description Etc.', '产品搜索按标题，描述等，'),
(822, 'top_slides', 'Top Slides', 'শীর্ষ স্লাইড', 'Top Diapositivas', 'أعلى الشرائح', 'Top Diapositives', '小刀架'),
(823, 'manage_slidess', 'Manage Slidess', 'Slidess পরিচালনা', 'Administrar Slidess', 'إدارة Slidess', 'Gérer Slidess', '管理Slidess'),
(824, 'add_slides', 'Add Slides', 'স্লাইড যুক্ত', 'Añadir Diapositivas', 'إضافة الشرائح', 'Ajouter Diapositives', '添加幻灯片'),
(825, 'create_slides', 'Create Slides', 'স্লাইড তৈরি', 'Crear diapositivas', 'إنشاء الشرائح', 'Création de diapositives', '创建幻灯片'),
(826, 'edit_slides', 'Edit Slides', 'সম্পাদনা স্লাইড', 'Editar Diapositivas', 'تحرير الشرائح', 'Modifier les diapositives', '编辑幻灯片'),
(827, 'slides', 'Slides', 'স্লাইড', 'Diapositivas', 'الشرائح', 'Diapositives', '幻灯片'),
(828, 'slider_settings', 'Slider Settings', 'স্লাইডার সেটিংস', 'Configurar deslizador', 'إعدادات المنزلق', 'Réglages Slider', '滑块设置'),
(829, 'layer_slider', 'Layer Slider', 'লেয়ার স্লাইডার', 'Capa deslizante', 'طبقة المتزلج', 'Curseur Layer', '层滑块'),
(830, 'category_menu_slider', 'Category Menu Slider', 'বিভাগ মেনু স্লাইডার', 'Categoría Menú deslizante', 'فئة القائمة المتزلج', 'Catégorie Menu Curseur', '分类菜单滑块'),
(831, 'quick', 'Quick', 'দ্রুত', 'Rápida', 'سريع', 'Vite', '速'),
(832, 'slides_name', 'Slides Name', 'স্লাইড নাম', 'Nombre Diapositivas', 'اسم الشرائح', 'Nom Diapositives', '幻灯片名称'),
(833, 'slides_logo', 'Slides Logo', 'স্লাইড লোগো', 'Diapositivas Logo', 'الشرائح الشعار', 'Diapositives Logo', '幻灯片徽标'),
(834, 'select_slides_logo', 'Select Slides Logo', 'স্লাইড লোগো নির্বাচন', 'Seleccione Diapositivas Logo', 'حدد الشرائح الشعار', 'Sélectionnez Diapositives Logo', '选择幻灯片徽标'),
(835, 'manage_top_slides', 'Manage Top Slides', 'শীর্ষ স্লাইড গালাগাল প্রতিবেদন', 'Administrar Top Diapositivas', 'إدارة الشرائح الأعلى', 'Gérer Top Diapositives', '管理小刀架'),
(836, 'slider_on_/_off', 'Slider On / Off', 'স্লাইডার / বন্ধ', 'Control deslizante de encendido / apagado', 'المنزلق تشغيل / إيقاف', 'Curseur On / Off', '滑开/关'),
(837, 'most_viewed_blogs', 'Most Viewed Blogs', 'ব্লগই দেখা', 'Más Vistas Blogs', 'الأكثر مشاهدة المدونات', 'Meilleurs affichages Blogs', '最多查看博客'),
(838, 'choose_a+product', 'Choose A+product', 'একটি A + পণ্য চয়ন', 'Elija un producto +', 'اختيار المنتج +', 'Choisissez un produit +', '选择A +产品'),
(839, 'choose_a_product', 'Choose A Product', 'একটি পণ্য চয়ন', 'Elija un producto', 'اختر المنتج', 'Choisissez un produit', '选择一个产品'),
(840, 'activate', 'Activate', 'সক্রিয় করা', 'Activar', 'تفعيل', 'Activer', '激活'),
(841, 'select_slide_banner', 'Select Slide Banner', 'নির্বাচন স্লাইড ব্যানার', 'Seleccione Banner Slide', 'حدد شعار الشريحة', 'Sélectionnez Bannière de diapositives', '选择幻灯片旗帜'),
(842, 'downloading...', 'Downloading...', 'ডাউনলোড হচ্ছে ...', 'Descargando ...', 'تحميل ...', 'Téléchargement ...', '下载...');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE IF NOT EXISTS `logo` (
  `logo_id` int(11) NOT NULL,
  `name` longtext
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`logo_id`, `name`) VALUES
(2, '');

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
(1, 'Gold', '300', '30', '', 10),
(2, 'Platinum', '3500', '30', '', 50);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

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
(70, 'slides', 'slides', 'parent', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL,
  `rating_num` int(11) NOT NULL DEFAULT '0',
  `rating_total` int(11) NOT NULL DEFAULT '0',
  `rating_user` longtext COLLATE utf8_unicode_ci NOT NULL,
  `title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sub_category` int(11) NOT NULL,
  `num_of_imgs` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sale_price` decimal(20,2) NOT NULL DEFAULT '0.00',
  `purchase_price` decimal(20,2) NOT NULL DEFAULT '0.00',
  `shipping_cost` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0.00',
  `add_timestamp` longtext COLLATE utf8_unicode_ci NOT NULL,
  `featured` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tag` longtext COLLATE utf8_unicode_ci,
  `status` longtext COLLATE utf8_unicode_ci NOT NULL,
  `front_image` longtext COLLATE utf8_unicode_ci,
  `brand` longtext COLLATE utf8_unicode_ci NOT NULL,
  `current_stock` int(11) DEFAULT '0',
  `unit` longtext COLLATE utf8_unicode_ci NOT NULL,
  `additional_fields` longtext COLLATE utf8_unicode_ci NOT NULL,
  `number_of_view` int(11) NOT NULL DEFAULT '0',
  `background` longtext COLLATE utf8_unicode_ci,
  `discount` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0.00',
  `discount_type` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tax` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0.00',
  `tax_type` longtext COLLATE utf8_unicode_ci NOT NULL,
  `color` longtext COLLATE utf8_unicode_ci NOT NULL,
  `options` longtext COLLATE utf8_unicode_ci,
  `main_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `added_by` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `download` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `download_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deal` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=126 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(1, 0, 0, '', 'Apple Macbook', 1, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nulla tincidunt, posuere lacus sit amet, feugiat ligula. Pellentesque nisl sem, venenatis in tortor congue, aliquam fermentum neque. Cras lectus libero, malesuada id nisl vel, pulvinar finibus ex. Morbi id purus ac ex tempor mollis sed quis arcu. Vivamus eget luctus ipsum. Suspendisse vel vulputate orci, sit amet pretium erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vestibulum odio sed mi efficitur semper. Fusce quis odio rhoncus sapien tristique hendrerit. Sed mattis tellus vel magna aliquam feugiat.</span><br></p>', 1, '4', '1200.00', '1000.00', '10', '1434108235', 'ok', 'apple,mac', 'ok', '0', '11', 76, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '5', 'percent', '["rgba(235,235,235,1)","rgba(212,183,83,1)","rgba(133,133,133,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, 'ok'),
(2, 0, 0, '', 'i-mac', 1, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nulla tincidunt, posuere lacus sit amet, feugiat ligula. Pellentesque nisl sem, venenatis in tortor congue, aliquam fermentum neque. Cras lectus libero, malesuada id nisl vel, pulvinar finibus ex. Morbi id purus ac ex tempor mollis sed quis arcu. Vivamus eget luctus ipsum. Suspendisse vel vulputate orci, sit amet pretium erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vestibulum odio sed mi efficitur semper. Fusce quis odio rhoncus sapien tristique hendrerit. Sed mattis tellus vel magna aliquam feugiat.</span><br></p>', 2, '2', '1200.00', '850.00', '15', '1434108411', '0', 'imac,apple', 'ok', '0', '11', 86, 'pc', '{"name":"false","value":"false"}', 0, NULL, '2.5', 'percent', '10', 'percent', '["rgba(227,227,227,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(3, 0, 0, '', 'Apple watch', 1, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nulla tincidunt, posuere lacus sit amet, feugiat ligula. Pellentesque nisl sem, venenatis in tortor congue, aliquam fermentum neque. Cras lectus libero, malesuada id nisl vel, pulvinar finibus ex. Morbi id purus ac ex tempor mollis sed quis arcu. Vivamus eget luctus ipsum. Suspendisse vel vulputate orci, sit amet pretium erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vestibulum odio sed mi efficitur semper. Fusce quis odio rhoncus sapien tristique hendrerit. Sed mattis tellus vel magna aliquam feugiat.</span><br></p>', 3, '4', '700.00', '550.00', '10', '1434123841', '0', 'apple ,apple watch,watch,modern watch', 'ok', '0', '11', 43, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '2', 'percent', '["rgba(255,255,255,1)","rgba(219,219,219,1)","rgba(61,61,61,1)","rgba(255,189,110,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(4, 0, 0, '', 'ipad', 1, '<h1 style="font-size: 20px; margin-top: 7px; margin-bottom: 7px; color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; line-height: normal;"><span style="font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere velit eu turpis efficitur gravida. Nunc mollis felis nec faucibus viverra. Pellentesqueut sapien sit amet purus finibus ornare. Ut posuere nec massa ut mattis. Morbi nec viverra neque, nec semper urna. Suspendisse potenti. Suspendisse blandit volutpat enim sit amet malesuada. Duis congue arcu in egestas volutpat. Cras sapien ex, fermentum ac purus in, gravida congue felis. Vestibulum quis ornare quam. In vestibulum condimentum quam ac pharetra. Vivamus auctor et magna et maximus. Phasellus et ipsum et lacus dictum iaculis a a quam. Donec aliquam dictum suscipit. Donec ante quam, lacinia eget elit nec, facilisis interdum neque.</span><br></h1>', 12, '1', '500.00', '350.00', '10', '1434124301', '0', 'tablet,pad,ipad', 'ok', '0', '11', 18, 'pc', '{"name":"false","value":"false"}', 0, NULL, '2', 'percent', '4', 'percent', '["rgba(255,255,255,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(5, 0, 0, '', 'Man casual suit', 4, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum odio felis, mattis nec cursus non, consectetur et lacus. Maecenas non faucibus leo. Suspendisse vestibulum justo justo, in mattis elit aliquam sed. Vestibulum eget nisi malesuada, convallis eros quis, posuere turpis. Sed placerat sapien vitae scelerisque tincidunt. Suspendisse imperdiet eros a quam ultricies viverra. Nunc dui felis, pulvinar ut mattis sit amet, volutpat non risus. Fusce lobortis sapien a risus venenatis tempor. Vivamus sodales tellus ex, vitae commodo dolor lacinia ac. Morbi mattis tempor dolor at viverra.&nbsp;</span><br></p>', 7, '5', '90.00', '60.00', '', '1434194676', '0', 'suit men,manz suit,menz wear', 'ok', '0', '', 95, 'pc', '{"name":"false","value":"false"}', 0, NULL, '2', 'percent', '', 'percent', '["rgba(173,186,255,1)","rgba(84,84,84,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(6, 0, 0, '', 'Mans shirt', 4, '<p style="text-align: center;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify;">Praesent feugiat, tellus at mollis molestie, urna arcu imperdiet eros, id efficitur justo ex ac risus. Mauris a purus nec lectus fermentum hendrerit. Donec porttitor fringilla tellus et finibus. Aliquam venenatis urna nec tincidunt tempor. Suspendisse potenti. Nullam porttitor bibendum purus, nec scelerisque elit ultricies ac. Integer tincidunt congue diam id congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur ligula nulla, malesuada sed quam cursus, convallis pharetra nibh. &nbsp;</span><br></p>', 7, '2', '35.00', '25.00', '', '1434195639', '0', 'shirt,mans shirt,shirt for man,casual shirt', 'ok', '0', '', 29, 'pc', '{"name":"false","value":"false"}', 0, NULL, '1', 'percent', '0', 'percent', '["rgba(84,73,73,1)","rgba(0,0,0,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(7, 0, 0, '', 'shoe', 4, '<p><span style="text-align: justify;">Aenean varius erat sit amet metus cursus convallis. Integer elementum nec metus consectetur efficitur. Curabitur varius quam arcu, vitae imperdiet massa lacinia in. Vestibulum posuere arcu quis enim condimentum molestie. Integer sed lacus porta, ultrices sapien sit amet, rhoncus neque. Morbi vitae pharetra nunc. Pellentesque non imperdiet libero. Vivamus ac nisl nec enim pharetra congue.</span><br></p>', 9, '3', '40.00', '33.00', '', '1434195983', '0', 'male shoe ,shoe for male', 'ok', '0', '', 80, 'pc', '{"name":"[\\"\\"]","value":"[\\"\\"]"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(0,0,0,1)","rgba(245,7,7,1)","rgba(0,0,0,1)"]', '[{"no":"0","title":"size","name":"choice_0","type":"single_select","option":["X","XL","XXL"]}]', '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(8, 0, 0, '', 'casual leather jacket', 4, '<p><span style="text-align: justify;">Aenean varius erat sit amet metus cursus convallis. Integer elementum nec metus consectetur efficitur. Curabitur varius quam arcu, vitae imperdiet massa lacinia in. Vestibulum posuere arcu quis enim condimentum molestie. Integer sed lacus porta, ultrices sapien sit amet, rhoncus neque. Morbi vitae pharetra nunc. Pellentesque non imperdiet libero. Vivamus ac nisl nec enim pharetra congue.</span></p><p><span style="text-align: justify;"><br></span><br></p>', 7, '1', '65.00', '50.00', '4', '1434196305', '0', 'jacket,man jacket,leather jacket', 'ok', '0', '', 51, 'pc', '{"name":"false","value":"false"}', 0, NULL, '4', 'percent', '', 'percent', '["rgba(10,0,0,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(9, 0, 0, '', 'stylish leather jacket', 4, '<p><span style="text-align: justify;">Aenean varius erat sit amet metus cursus convallis. Integer elementum nec metus consectetur efficitur. Curabitur varius quam arcu, vitae imperdiet massa lacinia in. Vestibulum posuere arcu quis enim condimentum molestie. Integer sed lacus porta, ultrices sapien sit amet, rhoncus neque. Morbi vitae pharetra nunc. Pellentesque non imperdiet libero. Vivamus ac nisl nec enim pharetra congue.</span></p><p><span style="text-align: justify;"><br></span><br></p>', 7, '1', '55.00', '34.00', '4', '1434196498', '0', 'jacket,stylish jacket', 'ok', '0', '', 4, '4', '{"name":"false","value":"false"}', 0, NULL, '7', 'percent', '', 'percent', '["rgba(87,1,1,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(10, 0, 0, '', 'Mans sunglass', 4, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di caratteri e li assemblò per preparare un testo campione. È sopravvissuto non solo a più di cinque secoli, ma anche al passaggio alla videoimpaginazione, pervenendoci sostanzialmente inalterato. Fu reso popolare, negli anni ’60, con la diffusione dei fogli di caratteri trasferibili “Letraset”, che contenevano passaggi del Lorem Ipsum, e più recentemente da software di impaginazione come Aldus PageMaker, che includeva versioni del Lorem Ipsum. &nbsp;</span><br></p>', 7, '2', '25.00', '15.00', '2', '1434196909', '0', 'sunglass,manz shades,mans sunglass', 'ok', '0', '', 29, 'pc', '{"name":"false","value":"false"}', 0, NULL, '2', 'percent', '', 'percent', '["rgba(115,4,4,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(11, 0, 0, '', 'Mans black suit ', 4, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di caratteri e li assemblò per preparare un testo campione. È sopravvissuto non solo a più di cinque secoli, ma anche al passaggio alla videoimpaginazione, pervenendoci sostanzialmente inalterato. Fu reso popolare, negli anni ’60, con la diffusione dei fogli di caratteri trasferibili “Letraset”, che contenevano passaggi del Lorem Ipsum, e più recentemente da software di impaginazione come Aldus PageMaker, che includeva versioni del Lorem Ipsum.</span><br></p>', 7, '1', '98.00', '79.00', '2', '1434197039', '0', 'black suit,manz black suit,stylish black suit', 'ok', '0', '', 98, '5', '{"name":"false","value":"false"}', 0, NULL, '8', 'percent', '', 'percent', '["rgba(204,204,204,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(12, 0, 0, '', 'Manz jacket', 4, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di caratteri e li assemblò per.</span><br></p>', 7, '1', '51.00', '43.00', '', '1434197186', '0', 'jacket,black jacket,black stylish jacket,stylish jacket', 'ok', '0', '', 85, 'pc', '{"name":"false","value":"false"}', 0, NULL, '5', 'percent', '', 'percent', '["rgba(204,204,204,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(13, 0, 0, '', 'Manz casual black suit', 4, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di caratteri e li assemblò per preparare un testo campione. È sopravvissuto non solo a più di cinque secoli, ma anche al passaggio alla videoimpaginazione, pervenendoci sostanzialmente inalterato. Fu reso popolare, negli anni ’60, con la diffusione dei fogli di caratteri trasferibili “Letraset”, che contenevano passaggi del Lorem Ipsum, e più recentemente da software di impaginazione come Aldus PageMaker, che includeva versioni del Lorem Ipsum.</span></p>', 7, '5', '99.00', '68.00', '8', '1434197364', '0', 'suit,black suit,manz black suit,manz black stylish suit', 'ok', '0', '', 75, '55', '{"name":"false","value":"false"}', 0, NULL, '6', 'percent', '', 'percent', '["rgba(204,204,204,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(14, 0, 0, '', 'Mac pro', 1, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sem nibh, aliquam sed sapien rutrum, rhoncus egestas justo. Proin faucibus, ante vitae aliquam blandit, justo erat porttitor felis, in interdum nibh neque eu orci. Morbi tincidunt sapien diam, vel commodo augue aliquet ac. Nulla eu maximus est. Morbi a consequat urna. Ut ac condimentum elit. Quisque pharetra mollis odio, vitae accumsan erat gravida id. Quisque nec lacinia dui, nec cursus ipsum. In pretium mattis bibendum. Nulla vehicula tincidunt augue, ac pellentesque odio tristique eget. Curabitur suscipit enim velit, vitae tempor metus varius pellentesque. Nam dictum id libero sed rhoncus.&nbsp;</span><br></p>', 2, '5', '1200.00', '900.00', '20', '1434230565', '0', 'mac,macpro,apple', 'ok', '0', '11', 93, 'pc', '{"name":"[\\"Model\\",\\"Year\\",\\"Compant\\"]","value":"[\\"Mac pro 2015\\",\\"2012\\",\\"Apple inc\\"]"}', 0, NULL, '', 'percent', '2', 'percent', '["rgba(0,0,0,1)","rgba(224,224,224,1)","rgba(179,179,179,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(15, 0, 0, '', 'Mac mini', 1, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sem nibh, aliquam sed sapien rutrum, rhoncus egestas justo. Proin faucibus, ante vitae aliquam blandit, justo erat porttitor felis, in interdum nibh neque eu orci. Morbi tincidunt sapien diam, vel commodo augue aliquet ac. Nulla eu maximus est. Morbi a consequat urna. Ut ac condimentum elit. Quisque pharetra mollis odio, vitae accumsan erat gravida id. Quisque nec lacinia dui, nec cursus ipsum. In pretium mattis bibendum. Nulla vehicula tincidunt augue, ac pellentesque odio tristique eget. Curabitur suscipit enim velit, vitae tempor metus varius pellentesque. Nam dictum id libero sed rhoncus.&nbsp;</span><br></p>', 2, '1', '700.00', '500.00', '10', '1434230773', 'ok', 'apple,mac mini', 'ok', '0', '11', 53, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '5', 'percent', '["rgba(232,232,232,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(16, 1, 5, '["4"]', 'Mini mac', 1, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sem nibh, aliquam sed sapien rutrum, rhoncus egestas justo. Proin faucibus, ante vitae aliquam blandit, justo erat porttitor felis, in interdum nibh neque eu orci. Morbi tincidunt sapien diam, vel commodo augue aliquet ac. Nulla eu maximus est. Morbi a consequat urna. Ut ac condimentum elit. Quisque pharetra mollis odio, vitae accumsan erat gravida id. Quisque nec lacinia dui, nec cursus ipsum. In pretium mattis bibendum. Nulla vehicula tincidunt augue, ac pellentesque odio tristique eget. Curabitur suscipit enim velit, vitae tempor metus varius pellentesque. Nam dictum id libero sed rhoncus.&nbsp;</span><br></p>', 2, '2', '600.00', '450.00', '10', '1434230991', '0', 'apple,macmin,mini computer', 'ok', '0', '11', 1, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '5', 'percent', '["rgba(204,204,204,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(17, 0, 0, '', 'Macbook pro', 1, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sem nibh, aliquam sed sapien rutrum, rhoncus egestas justo. Proin faucibus, ante vitae aliquam blandit, justo erat porttitor felis, in interdum nibh neque eu orci. Morbi tincidunt sapien diam, vel commodo augue aliquet ac. Nulla eu maximus est. Morbi a consequat urna. Ut ac condimentum elit. Quisque pharetra mollis odio, vitae accumsan erat gravida id. Quisque nec lacinia dui, nec cursus ipsum. In pretium mattis bibendum. Nulla vehicula tincidunt augue, ac pellentesque odio tristique eget. Curabitur suscipit enim velit, vitae tempor metus varius pellentesque. Nam dictum id libero sed rhoncus.&nbsp;</span><br></p>', 1, '2', '1200.00', '900.00', '10', '1434232469', '0', 'mac,apple,macbook pro', 'ok', '0', '11', 50, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '5', 'percent', '["rgba(204,204,204,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(18, 0, 0, '', 'Apple Watch', 1, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sem nibh, aliquam sed sapien rutrum, rhoncus egestas justo. Proin faucibus, ante vitae aliquam blandit, justo erat porttitor felis, in interdum nibh neque eu orci. Morbi tincidunt sapien diam, vel commodo augue aliquet ac. Nulla eu maximus est. Morbi a consequat urna. Ut ac condimentum elit. Quisque pharetra mollis odio, vitae accumsan erat gravida id. Quisque nec lacinia dui, nec cursus ipsum. In pretium mattis bibendum. Nulla vehicula tincidunt augue, ac pellentesque odio tristique eget. Curabitur suscipit enim velit, vitae tempor metus varius pellentesque. Nam dictum id libero sed rhoncus.&nbsp;</span><br></p>', 3, '5', '700.00', '500.00', '10', '1434232558', 'ok', 'apple watch,watch', 'ok', '0', '11', 18, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '5', 'percent', '["rgba(204,204,204,1)","rgba(38,38,38,1)","rgba(255,215,110,1)","rgba(247,247,247,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(19, 0, 0, '', 'Toyota v6', 2, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus dapibus lorem. Praesent non suscipit justo. Quisque leo diam, mattis sit amet fermentum non, rutrum vitae mi. Mauris magna nibh, finibus non hendrerit non, aliquet eget ex. Morbi semper molestie malesuada. Pellentesque id nunc varius, gravida magna tristique, vulputate metus. Nulla et lobortis urna. Ut dictum nisi et arcu pretium mattis.</span><br></p>', 10, '1', '5999.00', '4000.00', '150', '1434277334', '0', 'toyota,car,v6', 'ok', '0', '4', 48, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '5', 'percent', '["rgba(252,234,205,1)","rgba(0,0,0,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(20, 0, 0, '', 'Marcedez E', 2, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus dapibus lorem. Praesent non suscipit justo. Quisque leo diam, mattis sit amet fermentum non, rutrum vitae mi. Mauris magna nibh, finibus non hendrerit non, aliquet eget ex. Morbi semper molestie malesuada. Pellentesque id nunc varius, gravida magna tristique, vulputate metus. Nulla et lobortis urna. Ut dictum nisi et arcu pretium mattis. &nbsp;</span><br></p>', 10, '1', '9800.00', '7800.00', '150', '1434277565', '0', 'marcedez,car', 'ok', '0', '2', 43, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '5', 'percent', '["rgba(150,150,150,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(21, 0, 0, '', 'BMW Bike', 2, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus dapibus lorem. Praesent non suscipit justo. Quisque leo diam, mattis sit amet fermentum non, rutrum vitae mi. Mauris magna nibh, finibus non hendrerit non, aliquet eget ex. Morbi semper molestie malesuada. Pellentesque id nunc varius, gravida magna tristique, vulputate metus. Nulla et lobortis urna. Ut dictum nisi et arcu pretium mattis.&nbsp;</span><br></p>', 11, '2', '3900.00', '2500.00', '100', '1434278511', '0', 'bike,bmw,superbike', 'ok', '0', '5', 15, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '20', 'percent', '["rgba(204,204,204,1)","rgba(54,54,54,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(22, 0, 0, '', 'Audi R8', 2, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus dapibus lorem. Praesent non suscipit justo. Quisque leo diam, mattis sit amet fermentum non, rutrum vitae mi. Mauris magna nibh, finibus non hendrerit non, aliquet eget ex. Morbi semper molestie malesuada. Pellentesque id nunc varius, gravida magna tristique, vulputate metus. Nulla et lobortis urna. Ut dictum nisi et arcu pretium mattis.&nbsp;</span><br></p>', 10, '2', '8999.00', '6999.00', '200', '1434278658', '0', 'audi,car', 'ok', '0', '1', 33, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '15', 'percent', '["rgba(204,204,204,1)","rgba(77,72,72,1)","rgba(255,255,255,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(23, 0, 0, '', 'Marcedez 2015', 2, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus dapibus lorem. Praesent non suscipit justo. Quisque leo diam, mattis sit amet fermentum non, rutrum vitae mi. Mauris magna nibh, finibus non hendrerit non, aliquet eget ex. Morbi semper molestie malesuada. Pellentesque id nunc varius, gravida magna tristique, vulputate metus. Nulla et lobortis urna. Ut dictum nisi et arcu pretium mattis. &nbsp;</span><br></p>', 10, '1', '5900.00', '4000.00', '100', '1434278930', '0', 'marcedez,car,supercar', 'ok', '0', '2', 0, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '20', 'percent', '["rgba(255,247,205,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(24, 0, 0, '', 'HMV Hummer', 2, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus dapibus lorem. Praesent non suscipit justo. Quisque leo diam, mattis sit amet fermentum non, rutrum vitae mi. Mauris magna nibh, finibus non hendrerit non, aliquet eget ex. Morbi semper molestie malesuada. Pellentesque id nunc varius, gravida magna tristique, vulputate metus. Nulla et lobortis urna. Ut dictum nisi et arcu pretium mattis.&nbsp;</span><br></p>', 10, '8', '15000.00', '8000.00', '500', '1434279056', '0', 'hummer,hmv', 'ok', '0', '7', 35, 'pc', '{"name":"false","value":"false"}', 0, NULL, '5', 'percent', '20', 'percent', '["rgba(0,0,0,1)","rgba(255,250,223,1)","rgba(204,204,204,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(26, 0, 0, '', 'Canon 5D', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 13, '1', '1200.00', '800.00', '20', '1434326950', '0', 'camera,dslr', 'ok', '0', '16', 48, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '7', 'percent', '["rgba(64,64,64,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(27, 0, 0, '', 'Nikon 6D', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 13, '2', '1400.00', '900.00', '20', '1434327041', '0', 'camera,nikon,DSLR camera', 'ok', '0', '15', 48, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '7', 'percent', '["rgba(54,54,54,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(28, 0, 0, '', 'Nikon 7D', 1, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 13, '2', '800.00', '450.00', '10', '1434327112', '0', 'camera,nikon,DSLR camera', 'ok', '0', '15', 48, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '5', 'percent', '["rgba(204,204,204,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(29, 0, 0, '', 'Apple Thunderbolt', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 3, '2', '700.00', '500.00', '20', '1434327483', '0', 'apple,thunderbolt,thunderbolt display,computer monitor', 'ok', '0', '11', 48, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '5', 'percent', '["rgba(0,0,0,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(30, 0, 0, '', 'Women lingerie', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 14, '1', '25.00', '10.00', '2', '1434328497', '0', 'women', 'ok', '0', '', 142, '', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(255,159,217,1)","rgba(0,0,0,1)","rgba(171,171,171,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(32, 0, 0, '', 'Ladies Nightwear', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 14, '4', '20.00', '12.00', '', '1434328882', '0', 'women,nightwear', 'ok', '0', '', 187, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(132,0,179,1)","rgba(33,0,0,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(33, 0, 0, '', 'Women glass', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 15, '1', '50.00', '35.00', '', '1434331644', '0', 'glass,women glass', 'ok', '0', '', 191, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(107,107,107,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(34, 0, 0, '', 'Ladies Jeans', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 4, '1', '50.00', '30.00', '', '1434331799', '0', 'dress', 'ok', '0', '', 20, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(200,228,255,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(35, 0, 0, '', 'Ladies Scirt', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 4, '1', '25.00', '12.00', '2', '1434350044', '0', 'skirt,ladies skirt', 'ok', '0', '', 192, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(255,184,244,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(36, 0, 0, '', 'Ladies Gaon', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 4, '1', '35.00', '20.00', '', '1434350203', '0', 'skirt,dress', 'ok', '0', '', 126, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '2', 'percent', '["rgba(38,38,38,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(37, 0, 0, '', 'Hair Oil', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 15, '5', '10.00', '5.00', '', '1434350428', '0', 'women hair', 'ok', '0', '', 90, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(15,15,15,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(38, 0, 0, '', 'Ladies Nightwear', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 14, '3', '45.00', '30.00', '', '1434350906', '0', 'women,nightwear', 'ok', '0', '', 185, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(192,156,250,1)","rgba(124,224,237,1)","rgba(255,215,215,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(39, 0, 0, '', 'Red Hat', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 15, '1', '20.00', '10.00', '', '1434350994', '0', 'women,hat,red hat', 'ok', '0', '', 190, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(204,204,204,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, ''),
(40, 0, 0, '', 'Sunroof Glass', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 15, '0', '100.00', '60.00', '10', '1434351364', '0', 'women glass,glass', 'ok', '0', '', 293, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '5', 'percent', '["rgba(56,56,56,1)"]', NULL, '0', '{"type":"vendor","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(58, 0, 0, '', 'Mini Nightwear', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 14, '1', '50.00', '22.00', '', '1434380882', '0', 'women,ladies', 'ok', '0', '', 183, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '2', 'percent', '["rgba(43,43,43,1)","rgba(199,0,12,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(59, 0, 0, '', 'Ladies Nightwear', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 14, '3', '60.00', '35.00', '', '1434381049', '0', 'women,nightwear', 'ok', '0', '', 164, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(3,0,173,1)","rgba(69,69,69,1)","rgba(155,0,250,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(60, 0, 0, '', 'Hp Envy', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 1, '2', '700.00', '550.00', '10', '1434387711', '0', 'hp,laptop', 'ok', '0', '13', 60, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '2', 'percent', '["rgba(204,204,204,1)","rgba(125,125,125,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(61, 0, 0, '', 'Alienware Gamnig', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 1, '2', '900.00', '750.00', '20', '1434387815', '0', 'gaming laptop,gaming pc,alienware', 'ok', '0', '14', 37, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '5', 'percent', '["rgba(113,229,255,1)","rgba(255,49,62,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(62, 0, 0, '', 'Dell Inspiron', 1, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. &nbsp;</span><br></p>', 1, '2', '600.00', '450.00', '10', '1434388149', '0', 'dell,laptop', 'ok', '0', '12', 136, 'pc', '{"name":"false","value":"false"}', 0, NULL, '5', 'percent', '5', 'percent', '["rgba(240,240,240,1)","rgba(61,61,61,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(63, 0, 0, '', 'Samsung Galaxy', 1, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. &nbsp;</span><br></p>', 12, '2', '500.00', '350.00', '', '1434391302', '0', 'samsung,tablet', 'ok', '0', '', 199, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(122,122,122,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(64, 0, 0, '', 'Samsung Galaxy S6', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 17, '4', '500.00', '350.00', '10', '1434392970', '0', 'samsung,smartphone', 'ok', '0', '', 200, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(0,112,4,1)","rgba(255,248,190,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(65, 0, 0, '', 'Nikon', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 13, '2', '2000.00', '1200.00', '20', '1434393757', '0', 'camera,DSLR,nikon,HD photo', 'ok', '0', '15', 199, 'pc', '{"name":"false","value":"false"}', 0, NULL, '15', 'percent', '10', 'percent', '["rgba(54,54,54,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(66, 0, 0, '', 'Lumia 535', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 17, '2', '500.00', '300.00', '10', '1434403357', '0', 'nokia,microsoft,lumia', 'ok', '0', '', 29, 'pc', '{"name":"false","value":"false"}', 0, NULL, '25', 'percent', '5', 'percent', '["rgba(1,148,255,1)","rgba(255,255,255,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(67, 0, 0, '', 'Beats ', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 3, '5', '1000.00', '750.00', '', '1434404376', '0', 'beats,headphone', 'ok', '0', '', 98, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(255,229,179,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(68, 0, 0, '', 'Xperia z', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 17, '2', '500.00', '300.00', '', '1434404735', '0', 'sony,xperia', 'ok', '0', '', 1, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(41,41,41,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(69, 0, 0, '', 'i-phone 6', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 17, '2', '1000.00', '800.00', '10', '1434404933', '0', 'iphone,phone,smartphone', 'ok', '0', '11', 98, 'pc', '{"name":"false","value":"false"}', 0, NULL, '5', 'percent', '5', 'percent', '["rgba(204,204,204,1)","rgba(0,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(70, 0, 0, '', 'i-phone 6 plus', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 17, '2', '900.00', '750.00', '10', '1434454359', '0', 'iphone,iphone 6,smartphone', 'ok', '0', '11', 100, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '5', 'percent', '["rgba(33,33,33,1)","rgba(255,255,255,1)","rgba(255,231,144,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(71, 0, 0, '', 'Ducati 1000', 2, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 11, '2', '2000.00', '1200.00', '120', '1434468268', '0', 'Superbike,racing bike,ducati', 'ok', '0', '9', 20, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '10', 'percent', '["rgba(196,0,0,1)","rgba(0,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(72, 0, 0, '', 'BMW 1200', 2, '<h6 style="margin-top: 0px; margin-bottom: 13px; padding: 0px; border: 0px; display: table-cell; vertical-align: top; width: 824px; word-wrap: break-word; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;<br></h6>', 11, '2', '2500.00', '1800.00', '200', '1434469309', '0', 'BMW,super bike,bike', 'ok', '0', '5', 3, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '7', 'percent', '["rgba(0,0,0,1)","rgba(250,219,58,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(73, 0, 0, '', 'Yamaha R15', 2, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 11, '2', '1500.00', '1100.00', '100', '1434469993', '0', 'bike,yamaha,r15,yamaha R15', 'ok', '0', '8', 44, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '5', 'percent', '["rgba(0,35,217,1)","rgba(0,0,0,1)","rgba(232,5,5,1)","rgba(242,242,242,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(74, 0, 0, '', 'Yamaha R-1', 2, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 11, '2', '2200.00', '1500.00', '200', '1434470074', '0', 'Yamaha,Yamaha R1', 'ok', '0', '8', 44, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '7', 'percent', '["rgba(0,0,0,1)","rgba(255,255,255,1)","rgba(255,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(75, 0, 0, '', 'Honda', 2, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 11, '2', '2000.00', '1500.00', '100', '1434470143', '0', 'Honda', 'ok', '0', '6', 44, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '10', 'percent', '["rgba(255,153,0,1)","rgba(0,0,0,1)","rgba(222,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(76, 0, 0, '', 'Kids wear', 5, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 19, '1', '25.00', '10.00', '', '1434470580', '0', 'kids,dress', 'ok', '0', '', 200, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(208,255,192,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(77, 0, 0, '', 'Kids casual', 5, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. &nbsp;</span><br></p>', 19, '1', '30.00', '18.00', '', '1434470631', '0', 'kids', 'ok', '0', '', 100, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(176,0,0,1)","rgba(192,225,255,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(78, 0, 0, '', 'School Dress', 5, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. &nbsp;</span><br></p>', 19, '1', '100.00', '75.00', '', '1434470742', '0', 'school dress,dress kids', 'ok', '0', '', 100, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(255,255,255,1)","rgba(0,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(80, 0, 0, '', 'Monkey Hat', 5, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 19, '1', '10.00', '5.00', '', '1434471241', '0', 'kids', 'ok', '0', '', 200, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(255,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(81, 0, 0, '', 'Kidz skirt', 5, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 19, '1', '45.00', '30.00', '', '1434473219', '0', 'kids', 'ok', '0', '', 100, '', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(247,242,221,1)","rgba(255,182,248,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(82, 0, 0, '', 'Mini Skirt', 5, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 19, '1', '25.00', '10.00', '', '1434473389', '0', 'kids,baby skirt', 'ok', '0', '', 108, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(215,250,255,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(83, 0, 0, '', 'Casual Dress', 5, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 19, '0', '50.00', '25.00', '', '1434473866', '0', 'kids wear', 'ok', '0', '', 48, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(255,243,243,1)","rgba(186,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(84, 0, 0, '', 'Baby wear', 5, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 19, '1', '50.00', '30.00', '', '1434474195', '0', 'baby wear,kids wear', 'ok', '0', '', 104, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(212,237,255,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(85, 0, 0, '', 'Kids keds', 5, '<span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span>', 20, '1', '60.00', '35.00', '', '1434474575', '0', 'kids shos', 'ok', '0', '', 50, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '5', 'percent', '["rgba(255,255,255,1)","rgba(154,176,255,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(86, 0, 0, '', 'Girl''s shoes', 5, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 20, '1', '20.00', '10.00', '', '1434474693', '0', 'girls shoe,shoe', 'ok', '0', '', 50, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '5', 'percent', '["rgba(255,255,255,1)","rgba(247,157,222,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(87, 0, 0, '', 'Casual shoes', 5, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 20, '1', '50.00', '30.00', '', '1434474971', '0', '', 'ok', '0', '', 4, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(168,61,80,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(88, 0, 0, '', 'Sports shoes', 5, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 20, '1', '80.00', '60.00', '', '1434475064', '0', 'shoes,kids', 'ok', '0', '', 15, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(0,16,163,1)","rgba(71,191,242,1)","rgba(255,233,37,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(89, 0, 0, '', 'Kids accessories', 5, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 19, '1', '25.00', '10.00', '', '1434477111', '0', 'kids', 'ok', '0', '', 154, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(255,255,255,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(90, 0, 0, '', 'Kids Sneakers', 5, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 20, '1', '120.00', '80.00', '', '1434477486', '0', 'kids,sneakers,comfort,shoes', 'ok', '0', '', 14, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(255,255,255,1)","rgba(201,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(91, 0, 0, '', 'Bridal Dress', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 18, '2', '500.00', '300.00', '', '1434477688', '0', 'bridal,bridal dress', 'ok', '0', '', 20, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '5', 'percent', '["rgba(255,255,255,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(92, 0, 0, '', 'Wedding dress', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 18, '1', '400.00', '250.00', '', '1434477888', '0', '', 'ok', '0', '', 3, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '5', 'percent', '["rgba(204,204,204,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(93, 0, 0, '', 'Wedding wear', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 18, '1', '250.00', '100.00', '8', '1434478018', '0', '', 'ok', '0', '', 3, 'pc', '{"name":"false","value":"false"}', 0, NULL, '10', 'percent', '5', 'percent', '["rgba(255,255,255,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(94, 0, 0, '', 'Bride Wear', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 18, '3', '500.00', '250.00', '5', '1434478127', '0', '', 'ok', '0', '', 33, 'pc', '{"name":"false","value":"false"}', 0, NULL, '10', 'percent', '5', 'percent', '["rgba(255,255,255,1)","rgba(214,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(95, 1, 3, '["21"]', 'Wedding Dress', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 18, '1', '500.00', '300.00', '3', '1434478274', 'ok', '', 'ok', '0', '', 0, 'pc', '{"name":"false","value":"false"}', 0, NULL, '10', 'percent', '3', 'percent', '["rgba(255,255,255,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(96, 0, 0, '', 'i-pad 2', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 12, '2', '700.00', '500.00', '20', '1434543996', '0', 'apple,ipad ,ipad 2', 'ok', '0', '11', 20, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '5', 'percent', '["rgba(255,255,255,1)","rgba(248,250,152,1)","rgba(28,27,27,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(97, 0, 0, '', 'Alienware Gaming', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 2, '1', '800.00', '600.00', '100', '1434544767', '0', '', 'ok', '0', '14', 50, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(0,0,0,1)","rgba(227,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(98, 1, 4, '["22"]', 'Lenovo Gaming', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 2, '1', '2000.00', '1500.00', '80', '1434545096', '0', 'gaming pc,game', 'ok', '0', '', 44, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(8,8,8,1)","rgba(0,82,204,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(99, 0, 0, '', 'i-pad mini', 1, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 12, '2', '500.00', '350.00', '20', '1434561266', '0', 'ipad,pad,ipad mini', 'ok', '0', '11', 48, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '10', 'percent', '["rgba(255,212,161,1)","rgba(130,130,130,1)","rgba(255,255,255,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(100, 0, 0, '', 'Black shoes', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 6, '1', '120.00', '75.00', '5', '1434562633', '0', 'show,ladies shoes', 'ok', '0', '', 94, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '2', 'percent', '["rgba(0,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(101, 0, 0, '', 'Wedding shoes', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 6, '2', '150.00', '90.00', '10', '1434563072', '0', 'shoe,wedding shoe', 'ok', '0', '', 49, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '5', 'percent', '["rgba(227,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(102, 0, 0, '', 'Women shoes', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 6, '1', '80.00', '60.00', '5', '1434563166', '0', 'ladies shoes', 'ok', '0', '', 54, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(230,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(103, 0, 0, '', 'Stylish Shoes', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. &nbsp;</span><br></p>', 6, '2', '100.00', '80.00', '10', '1434563274', '0', 'ladies shoes,shoes', 'ok', '0', '', 78, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(255,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(104, 0, 0, '', 'Casual shoes', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. &nbsp;</span><br></p>', 6, '2', '150.00', '100.00', '15', '1434563583', '0', 'ladies shoes,casual shoes', 'ok', '0', '', 99, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(229,191,134,1)","rgba(0,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(105, 1, 5, '["4"]', 'Lamborghini veneno', 2, '<p><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 1.42857143; text-align: justify;">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 21, '2', '20000.00', '18000.00', '400', '1434575898', '0', 'Super car,car,Lamborghini veneno,Lamborghini,veneno', 'ok', '0', '10', 15, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '20', 'percent', '["rgba(87,87,87,1)","rgba(207,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(106, 0, 0, '', 'Audi R8', 2, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. &nbsp;</span><br></p>', 21, '1', '16000.00', '14000.00', '1000', '1434576559', 'ok', 'car,audi', 'ok', '0', '1', 0, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '12', 'percent', '["rgba(255,255,255,1)","rgba(0,0,0,1)","rgba(224,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(107, 0, 0, '', 'BMW M8', 2, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 21, '1', '18000.00', '16000.00', '1500', '1434576757', '0', 'sports car,audi,bmw', 'ok', '0', '5', 0, 'pc', '{"name":"[\\"Speed\\",\\"Engine\\"]","value":"[\\"450MPH\\",\\"6000cc\\"]"}', 0, NULL, '', 'percent', '15', 'percent', '["rgba(255,255,255,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(108, 0, 0, '', 'Audi i-8', 2, '<p><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 1.42857143; text-align: justify;">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 21, '4', '22000.00', '18000.00', '400', '1434578272', '0', 'audi i 8,audi,super car', 'ok', '0', '1', 3, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '15.5254', 'percent', '["rgba(204,204,204,1)","rgba(255,255,255,1)","rgba(25,25,25,1)","rgba(49,218,255,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(109, 0, 0, '', 'Ladies underwear', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 14, '2', '15.00', '8.00', '', '1434658318', '0', 'ladies underwear', 'ok', '0', '', 489, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '5', 'percent', '["rgba(255,215,251,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(110, 0, 0, '', 'Mini skirt', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 4, '1', '100.00', '50.00', '20', '1434658738', '0', '', 'ok', '0', '', 100, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(255,200,200,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(111, 0, 0, '', 'winter coat', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 4, '2', '220.00', '120.00', '5', '1434659328', '0', '', 'ok', '0', '', 38, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '5', 'percent', '["rgba(217,0,0,1)","rgba(51,41,41,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(112, 0, 0, '', 'Ladies T-shirt', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 4, '2', '55.00', '25.00', '5', '1434659416', '0', '', 'ok', '0', '', 492, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '5', 'percent', '["rgba(41,41,41,1)","rgba(255,255,255,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(113, 0, 0, '', 'Silk', 3, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 4, '2', '120.00', '75.00', '', '1434659802', '0', '', 'ok', '0', '', 81, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '', 'percent', '["rgba(144,255,235,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(114, 0, 0, '', 'Casual Dress', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 4, '1', '200.00', '120.00', '5', '1434659860', '0', '', 'ok', '0', '', 64, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '5', 'percent', '["rgba(0,0,0,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(115, 0, 0, '', 'Nightwear', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 14, '1', '150.00', '90.00', '5', '1434659990', 'ok', '', 'ok', '0', '', 61, 'pc', '{"name":"false","value":"false"}', 0, NULL, '', 'percent', '2', 'percent', '["rgba(255,207,207,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, '');
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(116, 1, 4, '["23"]', 'Ladies Nightdress', 3, '<p><span style="line-height: 17.142858505249px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.142858505249px; text-align: justify;">&nbsp;</span><span style="line-height: 17.142858505249px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 4, '1', '100.00', '60.00', '', '1434660084', '0', '', 'ok', '0', '', 70, 'pc', '{"name":"false","value":"false"}', 1, NULL, '', 'percent', '', 'percent', '["rgba(255,136,136,1)","rgba(46,45,45,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(117, 1, 2, '["1"]', 'Men Perfume', 4, '														<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. &nbsp;</span><br></p>', 8, '1', '1200.00', '1000.00', '100', '1435080539', 'ok', 'men perfume,perfume', 'ok', '0', '', 3, 'pc', '{"name":"false","value":"false"}', 0, NULL, '500', 'amount', '50', 'percent', '["rgba(0,39,138,1)","rgba(250,250,250,1)"]', NULL, '0', '{"type":"admin","id":"1"}', NULL, NULL, ''),
(123, 0, 0, '[]', '3D Mockup', 6, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 25, '1', '0.00', '0.00', '0.00', '1444989604', '0', 'mockup', 'ok', NULL, '', NULL, 'pc', '{"name":"null","value":"null"}', 0, NULL, '', 'percent', '0.00', 'percent', '["rgba(204,204,204,1)"]', '[]', '0', '{"type":"admin","id":"1"}', 'ok', '123_c9d473f735b8433e41ed_product_123_1.jpg', NULL);
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(119, 0, 0, '[]', 'Product Box Mockup', 6, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><br></p>', 25, '1', '39.00', '39.00', '0', '1444673552', '0', 'graphics,mockup', 'ok', NULL, '', 0, 'pc', '{"name":"null","value":"null"}', 0, NULL, '0', 'percent', '0', 'percent', '["rgba(119,0,212,1)"]', '[]', '0', '{"type":"admin","id":"1"}', 'ok', '119_413c44bcbe44e486b5b2_banner.zip', 'ok'),
(120, 0, 0, '[]', 'James Bond Spectre', 6, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. &nbsp;</span><br></p>', 26, '1', '10.00', '10.00', '0', '1444772708', 'ok', '', 'ok', NULL, '', 0, 'pc', '{"name":"null","value":"null"}', 0, NULL, '0', 'percent', '0', 'percent', '["rgba(204,204,204,1)"]', '[]', '0', '{"type":"admin","id":"1"}', 'ok', '120_0728a868d798cf5f0ccd_New folder (2).zip', 'ok'),
(121, 0, 0, '[]', 'HTML 5 Documentation', 6, '<span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</span><p><br></p>', 27, '1', '0.00', '0.00', '0.00', '1444773967', '0', 'html,html5,book,pdf', 'ok', NULL, '', 0, 'pc', '{"name":"null","value":"null"}', 0, NULL, '100', 'percent', '0.00', 'percent', '["rgba(204,204,204,1)"]', '[]', '0', '{"type":"admin","id":"1"}', 'ok', '121_ba5615c1817ed8de6329_html5_tutorial.pdf', NULL);
INSERT INTO `product` (`product_id`, `rating_num`, `rating_total`, `rating_user`, `title`, `category`, `description`, `sub_category`, `num_of_imgs`, `sale_price`, `purchase_price`, `shipping_cost`, `add_timestamp`, `featured`, `tag`, `status`, `front_image`, `brand`, `current_stock`, `unit`, `additional_fields`, `number_of_view`, `background`, `discount`, `discount_type`, `tax`, `tax_type`, `color`, `options`, `main_image`, `added_by`, `download`, `download_name`, `deal`) VALUES
(122, 0, 0, '[]', 'CSS3 Documentation', 6, '<span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', 27, '1', '0.00', '0.00', '0.00', '1444776167', '0', 'css,html,css3', 'ok', NULL, '', 0, 'pc', '{"name":"null","value":"null"}', 0, NULL, '100', 'percent', '0.00', 'percent', '["rgba(204,204,204,1)"]', '[]', '0', '{"type":"admin","id":"1"}', 'ok', '122_24f682a3658c2e6a4cc4_css3-cheat-sheet.pdf', NULL),
(124, 0, 0, '[]', 'Creative Logo', 6, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 25, '1', '0.00', '0.00', '0.00', '1444989671', '0', 'logo', 'ok', NULL, '', NULL, 'pc', '{"name":"null","value":"null"}', 0, NULL, '', 'percent', '0.00', 'percent', '["rgba(204,204,204,1)"]', '[]', '0', '{"type":"admin","id":"1"}', 'ok', '124_824e73a9d9ebe57b338d_product_125_1.jpg', NULL),
(125, 0, 0, '[]', 'Macbook Mockup', 6, '<p><span style="line-height: 17.1429px; text-align: justify;">Lorem Ipsum</span><span style="line-height: 17.1429px; text-align: justify;">&nbsp;</span><span style="line-height: 17.1429px; text-align: justify;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 25, '1', '0.00', '0.00', '0.00', '1444989729', '0', 'graphics', 'ok', NULL, '', NULL, 'pc', '{"name":"null","value":"null"}', 0, NULL, '', 'percent', '0.00', 'percent', '["rgba(204,204,204,1)"]', '[]', '0', '{"type":"admin","id":"1"}', 'ok', '125_6950ab5091a10ea8d9f0_product_126_1.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `permission` varchar(100) DEFAULT NULL,
  `description` longtext
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `name`, `permission`, `description`) VALUES
(1, 'master', '', 'Master Admin. Adds Admin. Provides account roles.'),
(5, 'Product Manager', '["13","17","21","37","41","45","49"]', 'Manages Products'),
(4, 'Accountant', '["9","13","17","21"]', 'Accountancy and Support'),
(6, 'Manager', '["5","13","29","33","37","41","57","63"]', 'Manager of Active Super shop');

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
  `viewed` longtext
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`sale_id`, `sale_code`, `buyer`, `product_details`, `shipping_address`, `vat`, `vat_percent`, `shipping`, `payment_type`, `payment_status`, `payment_details`, `payment_timestamp`, `grand_total`, `sale_datetime`, `delivary_datetime`, `delivery_status`, `viewed`) VALUES
(4, '2015104', '1', '{"07e1cd7dca89a1678042477183b7ac3f":{"id":"119","qty":1,"option":"{\\"color\\":{\\"title\\":\\"Color\\",\\"value\\":\\"\\"}}","price":39,"name":"Product-Box-Mockup","shipping":"0","tax":0,"image":"http:\\/\\/localhost\\/activesupershop\\/v1.3\\/uploads\\/product_image\\/product_119_1_thumb.jpg","coupon":"","rowid":"07e1cd7dca89a1678042477183b7ac3f","subtotal":39},"eb160de1de89d9058fcb0b968dbbbd68":{"id":"117","qty":1,"option":"{\\"color\\":{\\"title\\":\\"Color\\",\\"value\\":\\"\\"}}","price":700,"name":"Men-Perfume","shipping":"100","tax":600,"image":"http:\\/\\/localhost\\/activesupershop\\/v1.3\\/uploads\\/product_image\\/product_117_1_thumb.jpg","coupon":"","rowid":"eb160de1de89d9058fcb0b968dbbbd68","subtotal":700}}', '{"firstname":"Mr. Customer","email":"customer@shop.com","lastname":"Boy","phone":"(88) 090 0938","address1":"Dhaka","address2":"Bangladesh","city":"Dhaka","zip":"1212","langlat":"(12.44819535767321, 76.66826244013669)","payment_type":"cash_on_delivery"}', '600', '', '100', 'cash_on_delivery', '[{"admin":"","status":"paid"}]', '', NULL, '1439', '1444743436', '', '[{"admin":"","status":"delivered","delivery_time":""}]', 'ok'),
(2, '2015102', '1', '{"735b90b4568125ed6c3f678819b6e058":{"id":"67","qty":1,"option":"{\\"color\\":{\\"title\\":\\"Color\\",\\"value\\":\\"rgba(255,229,179,1)\\"}}","price":1000,"name":"Beats","shipping":0,"tax":0,"image":"http:\\/\\/localhost:10\\/shop13\\/uploads\\/product_image\\/product_67_1_thumb.jpg","coupon":"","rowid":"735b90b4568125ed6c3f678819b6e058","subtotal":1000},"5ef059938ba799aaa845e1c2e8a762bd":{"id":"118","qty":1,"option":"{\\"color\\":{\\"title\\":\\"Color\\",\\"value\\":\\"rgba(204,204,204,1)\\"}}","price":50,"name":"digital-2","shipping":"100","tax":10,"image":"http:\\/\\/localhost:10\\/shop13\\/uploads\\/product_image\\/product_118_1_thumb.jpg","coupon":"","rowid":"5ef059938ba799aaa845e1c2e8a762bd","subtotal":50}}', '{"firstname":"Mr. Customer","email":"customer@shop.com","lastname":"Boy","phone":"(88) 090 0938","address1":"Dhaka","address2":"Bangladesh","city":"Dhaka","zip":"1212","langlat":"(12.44819535767321, 76.66826244013669)","payment_type":"cash_on_delivery"}', '10', '', '100', 'cash_on_delivery', '[{"admin":"","status":"paid"}]', '', NULL, '1160', '1444344245', '', '[{"admin":"","status":"pending","delivery_time":""}]', NULL),
(3, '2015103', '1', '{"07e1cd7dca89a1678042477183b7ac3f":{"id":"119","qty":1,"option":"{\\"color\\":{\\"title\\":\\"Color\\",\\"value\\":\\"rgba(119,0,212,1)\\"}}","price":39,"name":"Product-Box-Mockup","shipping":"0","tax":0,"image":"http:\\/\\/localhost\\/activesupershop\\/v1.3\\/uploads\\/product_image\\/product_119_1_thumb.jpg","coupon":"","rowid":"07e1cd7dca89a1678042477183b7ac3f","subtotal":39}}', '{"firstname":"Mr. Customer","email":"customer@shop.com","lastname":"Boy","phone":"(88) 090 0938","address1":"Dhaka","address2":"Bangladesh","city":"Dhaka","zip":"1212","langlat":"(12.44819535767321, 76.66826244013669)","payment_type":"cash_on_delivery"}', '0', '', '0', 'cash_on_delivery', '[{"admin":"","status":"paid"}]', '', NULL, '39', '1444673766', '', '[{"admin":"","status":"delivered","delivery_time":""}]', 'ok');
INSERT INTO `sale` (`sale_id`, `sale_code`, `buyer`, `product_details`, `shipping_address`, `vat`, `vat_percent`, `shipping`, `payment_type`, `payment_status`, `payment_details`, `payment_timestamp`, `grand_total`, `sale_datetime`, `delivary_datetime`, `delivery_status`, `viewed`) VALUES
(5, '2015105', '1', '{"5ef059938ba799aaa845e1c2e8a762bd":{"id":"118","qty":1,"option":"{\\"color\\":{\\"title\\":\\"Color\\",\\"value\\":\\"\\"}}","price":50,"name":"digital-2","shipping":"100","tax":10,"image":"http:\\/\\/localhost\\/activesupershop\\/v1.3\\/uploads\\/product_image\\/product_118_1_thumb.jpg","coupon":"","rowid":"5ef059938ba799aaa845e1c2e8a762bd","subtotal":50},"da4fb5c6e93e74d3df8527599fa62642":{"id":"120","qty":1,"option":"{\\"color\\":{\\"title\\":\\"Color\\",\\"value\\":\\"rgba(204,204,204,1)\\"}}","price":10,"name":"James-Bond-Spectre","shipping":"0","tax":0,"image":"http:\\/\\/localhost\\/activesupershop\\/v1.3\\/uploads\\/product_image\\/product_120_1_thumb.jpg","coupon":"","rowid":"da4fb5c6e93e74d3df8527599fa62642","subtotal":10}}', '{"firstname":"Mr. Customer","email":"customer@shop.com","lastname":"Boy","phone":"(88) 090 0938","address1":"Dhaka","address2":"Bangladesh","city":"Dhaka","zip":"1212","langlat":"(12.44819535767321, 76.66826244013669)","payment_type":"cash_on_delivery"}', '10', '', '100', 'cash_on_delivery', '[{"admin":"","status":"paid"}]', '', NULL, '170', '1444772995', '', '[{"admin":"","status":"delivered","delivery_time":""}]', 'ok'),
(6, '2015106', '1', '{"4c56ff4ce4aaf9573aa5dff913df997a":{"id":"121","qty":1,"option":"{\\"color\\":{\\"title\\":\\"Color\\",\\"value\\":\\"rgba(204,204,204,1)\\"}}","price":0,"name":"HTML-5-Documentation","shipping":"0.00","tax":0,"image":"http:\\/\\/localhost\\/activesupershop\\/v1.3\\/uploads\\/product_image\\/product_121_1_thumb.jpg","coupon":"","rowid":"4c56ff4ce4aaf9573aa5dff913df997a","subtotal":0}}', '{"firstname":"Mr. Customer","email":"customer@shop.com","lastname":"Boy","phone":"(88) 090 0938","address1":"Dhaka","address2":"Bangladesh","city":"Dhaka","zip":"1212","langlat":"(12.44819535767321, 76.66826244013669)","payment_type":"cash_on_delivery"}', '0', '', '0', 'cash_on_delivery', '[{"admin":"","status":"paid"}]', '', NULL, '0', '1444774847', '', '[{"admin":"","status":"delivered","delivery_time":""}]', 'ok'),
(7, '2015107', '1', '{"a0a080f42e6f13b3a2df133f073095dd":{"id":"122","qty":1,"option":"{\\"color\\":{\\"title\\":\\"Color\\",\\"value\\":\\"\\"}}","price":0,"name":"CSS3-Documentation","shipping":"0.00","tax":0,"image":"http:\\/\\/localhost\\/activesupershop\\/v1.3\\/uploads\\/product_image\\/product_122_1_thumb.jpg","coupon":"","rowid":"a0a080f42e6f13b3a2df133f073095dd","subtotal":0},"4c56ff4ce4aaf9573aa5dff913df997a":{"id":"121","qty":1,"option":"{\\"color\\":{\\"title\\":\\"Color\\",\\"value\\":\\"\\"}}","price":0,"name":"HTML-5-Documentation","shipping":"0.00","tax":0,"image":"http:\\/\\/localhost\\/activesupershop\\/v1.3\\/uploads\\/product_image\\/product_121_1_thumb.jpg","coupon":"","rowid":"4c56ff4ce4aaf9573aa5dff913df997a","subtotal":0}}', '{"firstname":"Mr. Customer","email":"customer@shop.com","lastname":"Boy","phone":"(88) 090 0938","address1":"Dhaka","address2":"Bangladesh","city":"Dhaka","zip":"1212","langlat":"(12.44819535767321, 76.66826244013669)","payment_type":"cash_on_delivery"}', '0', '', '0', 'cash_on_delivery', '[{"admin":"","status":"paid"}]', '', NULL, '0', '1444776296', '', '[{"admin":"","status":"delivered","delivery_time":""}]', 'ok');

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
(1, '{"images":["ase"],"texts":[{"name":"text_1","text":"WELCOME TO","color":"rgba(255,255,255,1)","background":"rgba(196,4,189,1)"},{"name":"text_2","text":"YOUR SHOP NAME","color":"rgba(255,255,255,1)","background":"rgba(141,0,176,1)"}]}', 'ok', 'Welcome', '2', 1),
(2, '{"images":[],"texts":[{"name":"text_1","text":"WELCOME","color":"rgba(255,255,255,1)","background":"rgba(0,0,0,0)"},{"name":"text_2","text":"YOUR SHOP NAME","color":"rgba(255,255,255,1)","background":"rgba(0,0,0,0)"},{"name":"text_3","text":"SHOP TITLE","color":"rgba(255,255,255,1)","background":"rgba(0,0,0,0)"}]}', 'ok', 'Welcome 2', '1', 2);

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
(2, 'WELCOME TYPE 2', '{\r\n   "full_slide_style":"data-ls=\\"slidedelay:4500;transition2d:24,25,27,28,34,35,37,38,110,113;\\"",\r\n   "background":"bg_apple",\r\n   "images":[\r\n      {\r\n         "show_name":"Image 1",\r\n         "name":"ase",\r\n         "style":"top:20px; left:50%;width:220px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; offsetyin:top; durationin:4600; easingin:easeOutQuad; fadein:false; rotatein:-10; offsetxout:0; durationout:1500;"\r\n      }\r\n   ],\r\n   "texts":[\r\n      {\r\n         "element":"h5",\r\n         "show_name":"WELCOME TO",\r\n         "name":"text_1",\r\n         "style":"top:260px; left:50%; text-align: center;  font-weight: 300; width:300px; height:60px; font-size:30px; line-height:60px; border-radius:5px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; scalexin:0; scaleyin:0; offsetxout:0; offsetyout:top; durationout:750; durationin:1000; fadeout:false;",\r\n         "color":"#ffffff",\r\n         "background":"#C404BD"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"YOUR SHOP NAME",\r\n         "name":"text_2",\r\n         "style":"top:340px; left:50%; text-align: center; font-weight: 300; width:500px; height:100px; font-size:40px; line-height:100px; border-radius:5px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; scalexin:0; scaleyin:0; offsetxout:0; offsetyout:bottom; durationin:1000; durationout:750; fadeout:false;",\r\n         "color":"#ffffff",\r\n         "background":"#8D00B0"\r\n      }\r\n   ]\r\n}');
INSERT INTO `slider_style` (`slider_style_id`, `name`, `value`) VALUES
(3, 'SLIDER TYPE 1', '{\r\n   "full_slide_style":"data-ls=\\"slidedelay:7000;transition2d:76,77,78,79;\\"",\r\n   "background":"bg_apple",\r\n   "images":[\r\n      {\r\n         "show_name":"Product Image 1",\r\n         "name":"circle_1",\r\n         "style":"top:35%; left:60%;width:200px; white-space: nowrap; ",\r\n         "data_ls":"offsetxin:0; offsetyin:top; durationin:750; delayin:1500; easingin:easeOutQuart; fadein:false; offsetxout:right; durationout:1000; showuntil:1; easingout:easeInQuart; fadeout:false; "\r\n      },\r\n      {\r\n         "show_name":"Product Image 2",\r\n         "name":"circle_2",\r\n         "style":"top:35%; left:60%;width:200px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; offsetyin:top; durationin:750; delayin:3000; easingin:easeOutQuart; fadein:false; offsetxout:right; durationout:1000; showuntil:1; easingout:easeInQuart; fadeout:false; "\r\n      },\r\n      {\r\n         "show_name":"Product Image 3",\r\n         "name":"circle_3",\r\n         "style":"top:35%; left:60%;width:200px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; offsetyin:top; durationin:750; delayin:4500; easingin:easeOutQuart; fadein:false; offsetxout:right; durationout:1000; easingout:easeInQuart; fadeout:false; "\r\n      }\r\n   ],\r\n   "texts":[\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_1",\r\n         "style":"top:105px; left:30px; text-align: center; font-weight: 300; width:30px; height:30px; font-size:30px; line-height:30px; border-radius:100px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; durationin:750; easingin:easeOutQuint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5;",\r\n         "color":"#ffffff",\r\n         "background":"#C404BD",\r\n         "other":"fixed"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 1",\r\n         "name":"product_feature_1",\r\n         "style":"top:100px; left:85px; font-weight: 300; font-size:25px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:left; easingin:easeOutBack; fadein:false; scalexin:0.1; scaleyin:0.1; offsetxout:left; durationout:750; fadeout:false; scalexout:0.1; scaleyout:0.1;",\r\n         "color":"#000",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_2",\r\n         "style":"top:155px; left:30px; font-weight: 300; text-align: center; width:30px; height:30px; font-size:30px; line-height:30PX; border-radius:100px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; durationin:750; delayin:500; easingin:easeOutQuint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#C404BD",\r\n         "other":"fixed"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 2",\r\n         "name":"product_feature_2",\r\n         "style":"top:150px; left:85px; font-weight: 300; font-size:25px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:left; delayin:500; easingin:easeOutBack; fadein:false; scalexin:0.1; scaleyin:0.1; offsetxout:left; durationout:750; fadeout:false; scalexout:0.1; scaleyout:0.1;",\r\n         "color":"#000",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_3",\r\n         "style":"top:205px; left:30px; font-weight: 300; text-align: center; width:30px; height:30px; font-size:30px; line-height:30PX; border-radius:100px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; durationin:750; delayin:1000; easingin:easeOutQuint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#C404BD",\r\n         "other":"fixed"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 3",\r\n         "name":"product_feature_3",\r\n         "style":"top:200px; left:85px;  font-weight: 300; font-size:25px; white-space: nowrap; ",\r\n         "data_ls":"offsetxin:left; delayin:1000; easingin:easeOutBack; fadein:false; scalexin:0.1; scaleyin:0.1; offsetxout:left; durationout:750; fadeout:false; scalexout:0.1; scaleyout:0.1;",\r\n         "color":"#000",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_4",\r\n         "style":"top:255px; left:30px; font-weight: 300; text-align: center; width:30px; height:30px; font-size:30px; line-height:30PX;  border-radius:100px; white-space: nowrap; ",\r\n         "data_ls":"offsetxin:0; durationin:750; delayin:1500; easingin:easeOutQuint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5;",\r\n         "color":"#ffffff",\r\n         "background":"#C404BD",\r\n         "other":"fixed"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 4",\r\n         "name":"product_feature_4",\r\n         "style":"top:250px; left:85px;  font-weight: 300; font-size:25px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:left; delayin:1500; easingin:easeOutBack; fadein:false; scalexin:0.1; scaleyin:0.1; offsetxout:left; durationout:750; fadeout:false; scalexout:0.1; scaleyout:0.1;",\r\n         "color":"#000",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_5",\r\n         "style":"top:305px; left:30px; font-weight: 300; text-align: center; width:30px; height:30px; font-size:30px; line-height:30PX; border-radius:100px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; durationin:750; delayin:2000; easingin:easeOutQuint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#C404BD",\r\n         "other":"fixed"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 5",\r\n         "name":"product_feature_5",\r\n         "style":"top:300px; left:85px;  font-weight: 300; font-size:25px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:left; delayin:2000; easingin:easeOutBack; fadein:false; scalexin:0.1; scaleyin:0.1; offsetxout:left; durationout:750; fadeout:false; scalexout:0.1; scaleyout:0.1;",\r\n         "color":"#000",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT TITLE 1",\r\n         "name":"product_title_1",\r\n         "style":"top:65%; left:60%; font-weight: 300; font-size:30px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; durationin:450; delayin:1750; easingin:easeOutQuart; scalexin:0; scaleyin:0; offsetxout:0; durationout:1000; showuntil:51; easingout:easeInQuart; scalexout:3; scaleyout:3;",\r\n         "color":"#000",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT TITLE 2",\r\n         "name":"product_title_2",\r\n         "style":"top:65%; left:60%; font-weight: 300; font-size:30px; white-space: nowrap; ",\r\n         "data_ls":"offsetxin:0; durationin:450; delayin:3250; easingin:easeOutQuart; scalexin:0; scaleyin:0; offsetxout:0; durationout:1000; showuntil:51; easingout:easeInQuart; scalexout:3; scaleyout:3;",\r\n         "color":"#000",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT TITLE 3",\r\n         "name":"product_title_3",\r\n         "style":"top:65%; left:60%; font-weight: 300; font-size:30px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; durationin:450; delayin:4750; easingin:easeOutQuart; scalexin:0; scaleyin:0; offsetxout:0; durationout:1000; easingout:easeInQuart; scalexout:3; scaleyout:3;",\r\n         "color":"#000",\r\n         "background":"rgba(0,0,0,0)"\r\n      }\r\n   ]\r\n}');
INSERT INTO `slider_style` (`slider_style_id`, `name`, `value`) VALUES
(4, 'SLIDER TYPE 2', '{\r\n   "full_slide_style":"data-ls=\\"slidedelay:4500;transition2d:105,106;\\"",\r\n   "background":"bg_apple",\r\n   "images":[\r\n      {\r\n         "style":"top:100px;left:80px; white-space:nowrap; width:220px;",\r\n         "data_ls":"offsetxin:left;durationin:1500; delayin:1400; fadein:false; offsetxout:left; durationout:1000; fadeout:false; ",\r\n         "name":"semi_long_1",\r\n         "show_name":"PRODUCT IMAGE 1"\r\n      },\r\n      {\r\n         "style":"top:100px;left:180px; white-space:nowrap;width:220px; ",\r\n         "data_ls":"offsetxin:left;durationin:1500; delayin:1200; fadein:false; offsetxout:left; durationout:1000; fadeout:false; ",\r\n         "name":"semi_long_2",\r\n         "show_name":"PRODUCT IMAGE 2"\r\n      },\r\n      {\r\n         "style":"top:100px;left:280px; white-space:nowrap; width:220px;",\r\n         "data_ls":"offsetxin:left;durationin:1500; delayin:1000; fadein:false; offsetxout:left; durationout:1000; fadeout:false; ",\r\n         "name":"semi_long_3",\r\n         "show_name":"PRODUCT IMAGE 3"\r\n      }\r\n   ],\r\n   "texts":[\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT TITLE",\r\n         "name":"product_title",\r\n         "style":"top:20px;left:700px; font-weight:300; font-size:40px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:1000; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#000",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 1",\r\n         "name":"product_feature_1",\r\n         "style":"top:100px;left:761px; font-weight:300; font-size:30px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;delayin:800; easingin:easeoutquint; scalexin:0.8; scaleyin:0.8; offsetxout:0; durationout:750; scalexout:0.8; scaleyout:0.8; ",\r\n         "color":"#8d00b0",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 2",\r\n         "name":"product_feature_2",\r\n         "style":"top:150px;left:761px; font-weight:300; font-size:30px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;delayin:1300; easingin:easeoutquint; scalexin:0.8; scaleyin:0.8; offsetxout:0; durationout:750; scalexout:0.8; scaleyout:0.8; ",\r\n         "color":"#8d00b0",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURe 3",\r\n         "name":"product_feature_3",\r\n         "style":"top:200px;left:761px; font-weight:300; font-size:30px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;delayin:1800; easingin:easeoutquint; scalexin:0.8; scaleyin:0.8; offsetxout:0; durationout:750; scalexout:0.8; scaleyout:0.8; ",\r\n         "color":"#8d00b0",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 4",\r\n         "name":"product_feature_4",\r\n         "style":"top:250px;left:761px; font-weight:300; font-size:30px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;delayin:2300; easingin:easeoutquint; scalexin:0.8; scaleyin:0.8; offsetxout:0; durationout:750; scalexout:0.8; scaleyout:0.8; ",\r\n         "color":"#8d00b0",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 5",\r\n         "name":"product_feature_5",\r\n         "style":"top:300px;left:761px; font-weight:300; font-size:30px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;delayin:2800; easingin:easeoutquint; scalexin:0.8; scaleyin:0.8; offsetxout:0; durationout:750; scalexout:0.8; scaleyout:0.8; ",\r\n         "color":"#8d00b0",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 6",\r\n         "name":"product_feature_6",\r\n         "style":"top:350px;left:761px; font-weight:300; font-size:30px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;delayin:3300; easingin:easeoutquint; scalexin:0.8; scaleyin:0.8; offsetxout:0; durationout:750; scalexout:0.8; scaleyout:0.8; ",\r\n         "color":"#8d00b0",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_1",\r\n         "style":"top:107px;left:710px; font-weight:300; text-align:center; width:30px; height:30px; font-size:30px; line-height:30px; border-radius:100px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:750; delayin:500; easingin:easeoutquint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#c404bd"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_2",\r\n         "style":"top:157px;left:710px; font-weight:300; text-align:center; width:30px; height:30px; font-size:30px; line-height:30px; border-radius:100px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:750; delayin:1000; easingin:easeoutquint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#c404bd"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_3",\r\n         "style":"top:207px;left:710px; font-weight:300; text-align:center; width:30px; height:30px; font-size:30px; line-height:30px; border-radius:100px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:750; delayin:1500; easingin:easeoutquint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#c404bd"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_4",\r\n         "style":"top:257px;left:710px; font-weight:300; text-align:center; width:30px; height:30px; font-size:30px; line-height:30px; border-radius:100px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:750; delayin:2000; easingin:easeoutquint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#c404bd"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_5",\r\n         "style":"top:307px;left:710px; font-weight:300; text-align:center; width:30px; height:30px; font-size:30px; line-height:30px; border-radius:100px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:750; delayin:2500; easingin:easeoutquint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#c404bd"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_6",\r\n         "style":"top:357px;left:710px; font-weight:300; text-align:center; width:30px; height:30px; font-size:30px; line-height:30px; border-radius:100px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:750; delayin:3000; easingin:easeoutquint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#c404bd"\r\n      }\r\n   ]\r\n}');
INSERT INTO `slider_style` (`slider_style_id`, `name`, `value`) VALUES
(5, 'SLIDER TYPE 3', '{\r\n   "full_slide_style":"data-ls=\\"slidedelay:7500;transition2d:105,106;\\"",\r\n   "background":"bg_apple",\r\n   "images":[\r\n      {\r\n         "style":"top:100px;left:580px;width:220px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:right;durationin:1500; delayin:1400; fadein:false; offsetxout:left; durationout:1000; fadeout:false; ",\r\n         "name":"semi_long_1",\r\n         "show_name":"PRODUCT IMAGE 1"\r\n      },\r\n      {\r\n         "style":"top:100px;left:680px;width:220px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:right;durationin:1500; delayin:1200; fadein:false; offsetxout:left; durationout:1000; fadeout:false; ",\r\n         "name":"semi_long_2",\r\n         "show_name":"PRODUCT IMAGE 2"\r\n      },\r\n      {\r\n         "style":"top:100px;left:780px;width:220px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:right;durationin:1500; delayin:1000; fadein:false; offsetxout:left; durationout:1000; fadeout:false; ",\r\n         "name":"semi_long_3",\r\n         "show_name":"PRODUCT IMAGE 3"\r\n      }\r\n   ],\r\n   "texts":[\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT TITLE",\r\n         "name":"product_title",\r\n         "style":"top:20px;left:80px; font-weight:300; font-size:40px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:1000; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#000",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_1",\r\n         "style":"top:107px;left:71px; font-weight:300; text-align:center; width:30px; height:30px; font-size:30px; line-height:30px; border-radius:100px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:750; delayin:500; easingin:easeoutquint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#c404bd"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 1",\r\n         "name":"product_feature_1",\r\n         "style":"top:100px;left:116px; font-weight:300; font-size:30px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;delayin:800; easingin:easeoutquint; scalexin:0.8; scaleyin:0.8; offsetxout:0; durationout:750; scalexout:0.8; scaleyout:0.8; ",\r\n         "color":"#8d00b0",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_2",\r\n         "style":"top:157px;left:71px; font-weight:300; text-align:center; width:30px; height:30px; font-size:30px; line-height:30px; border-radius:100px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:750; delayin:1000; easingin:easeoutquint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#c404bd"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 2",\r\n         "name":"product_feature_2",\r\n         "style":"top:150px;left:116px; font-weight:300; font-size:30px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;delayin:1300; easingin:easeoutquint; scalexin:0.8; scaleyin:0.8; offsetxout:0; durationout:750; scalexout:0.8; scaleyout:0.8; ",\r\n         "color":"#8d00b0",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_3",\r\n         "style":"top:207px;left:71px; font-weight:300; text-align:center; width:30px; height:30px; font-size:30px; line-height:30px; border-radius:100px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:750; delayin:1500; easingin:easeoutquint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#c404bd"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 3",\r\n         "name":"product_feature_3",\r\n         "style":"top:200px;left:116px; font-weight:300; font-size:30px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;delayin:1800; easingin:easeoutquint; scalexin:0.8; scaleyin:0.8; offsetxout:0; durationout:750; scalexout:0.8; scaleyout:0.8; ",\r\n         "color":"#8d00b0",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_4",\r\n         "style":"top:257px;left:71px; font-weight:300; text-align:center; width:30px; height:30px; font-size:30px; line-height:30px; border-radius:100px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:750; delayin:2000; easingin:easeoutquint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#c404bd"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 4",\r\n         "name":"product_feature_4",\r\n         "style":"top:250px;left:116px; font-weight:300; font-size:30px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;delayin:2300; easingin:easeoutquint; scalexin:0.8; scaleyin:0.8; offsetxout:0; durationout:750; scalexout:0.8; scaleyout:0.8; ",\r\n         "color":"#8d00b0",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_5",\r\n         "style":"top:307px;left:71px; font-weight:300; text-align:center; width:30px; height:30px; font-size:30px; line-height:30px; border-radius:100px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:750; delayin:2500; easingin:easeoutquint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#c404bd"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 5",\r\n         "name":"product_feature_5",\r\n         "style":"top:300px;left:116px; font-weight:300; font-size:30px; white-space:nowrap;",\r\n         "data_ls":"offsetxin:0;delayin:2800; easingin:easeoutquint; scalexin:0.8; scaleyin:0.8; offsetxout:0; durationout:750; scalexout:0.8; scaleyout:0.8; ",\r\n         "color":"#8d00b0",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"+",\r\n         "name":"feature_bullet_6",\r\n         "style":"top:357px;left:71px; font-weight:300; text-align:center; width:30px; height:30px; font-size:30px; line-height:30px; border-radius:100px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:750; delayin:3000; easingin:easeoutquint; rotatein:90; scalexin:0.5; scaleyin:0.5; offsetxout:0; durationout:750; rotateout:90; scalexout:0.5; scaleyout:0.5; ",\r\n         "color":"#ffffff",\r\n         "background":"#c404bd"\r\n      },\r\n      {\r\n         "element":"h5",\r\n         "show_name":"PRODUCT FEATURE 6",\r\n         "name":"product_feature_6",\r\n         "style":"top:350px;left:116px; font-weight:300; font-size:30px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;delayin:3300; easingin:easeoutquint; scalexin:0.8; scaleyin:0.8; offsetxout:0; durationout:750; scalexout:0.8; scaleyout:0.8; ",\r\n         "color":"#8d00b0",\r\n         "background":"rgba(0,0,0,0)"\r\n      }\r\n   ]\r\n}');
INSERT INTO `slider_style` (`slider_style_id`, `name`, `value`) VALUES
(6, 'SLIDER TYPE 4', '{\r\n   "full_slide_style":"data-ls=\\"slidedelay:7500;transition2d:105,106;\\"",\r\n   "background":"bg_apple",\r\n   "images":[\r\n      {\r\n         "name":"long_1",\r\n         "style":"top:60px;left:578px;width:200px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:4000; delayin:1500; easingin:easeinoutquad; scalexin:1.1; scaleyin:1.1; offsetxout:0; durationout:1000; scalexout:0.9; scaleyout:0.9; ",\r\n         "show_name":"PRODUCT IMAGE 1"\r\n      },\r\n      {\r\n         "name":"semi_long_1",\r\n         "style":"top:170px;left:800px;width:200px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:4000; delayin:1500; easingin:easeinoutquad; scalexin:1.1; scaleyin:1.1; offsetxout:0; durationout:1000; scalexout:0.9; scaleyout:0.9; ",\r\n         "show_name":"PRODUCT IMAGE 2"\r\n      },\r\n      {\r\n         "name":"square_1",\r\n         "style":"top:265px;left:1020px;width:200px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:4000; delayin:1500; easingin:easeinoutquad; scalexin:1.1; scaleyin:1.1; offsetxout:0; durationout:1000; scalexout:0.9; scaleyout:0.9; ",\r\n         "show_name":"PRODUCT IMAGE 3"\r\n      }\r\n   ],\r\n   "texts":[\r\n      {\r\n         "element":"h1",\r\n         "show_name":"PRODUCT TITLE",\r\n         "name":"product_title",\r\n         "style":"top:20px;left:50px; font-size:50px; font-weight:300; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:3000; delayin:500; easingin:easeoutelastic; rotatexin:90; transformoriginin:50; bottom; 0; offsetxout:0; rotatexout:90; transformoriginout:50; ",\r\n         "color":"#000",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"div",\r\n         "show_name":"PRODUCT FEATURE 1",\r\n         "name":"product_feature_1",\r\n         "style":"top:100px;left:50px; text-align:justify; width:500px; font-size:20px; ",\r\n         "data_ls":"offsetxin:-150;durationin:2000; delayin:500; easingin:easeinoutquart; rotateyin:-40; offsetxout:-150; durationout:1000; rotateyout:-40; ",\r\n         "color":"#470467",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"div",\r\n         "show_name":"PRODUCT FEATURE 2",\r\n         "name":"product_feature_2",\r\n         "style":"top:150px;left:50px; text-align:justify; width:500px; font-size:20px; ",\r\n         "data_ls":"offsetxin:-150;durationin:2000; delayin:1000; easingin:easeinoutquart; rotateyin:-40; offsetxout:-150; durationout:1000; rotateyout:-40; ",\r\n         "color":"#470467",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"div",\r\n         "show_name":"PRODUCT FEATURE 3",\r\n         "name":"product_feature_3",\r\n         "style":"top:200px;left:50px; text-align:justify; width:500px; font-size:20px; ",\r\n         "data_ls":"offsetxin:-150;durationin:2000; delayin:1500; easingin:easeinoutquart; rotateyin:-40; offsetxout:-150; durationout:1000; rotateyout:-40; ",\r\n         "color":"#470467",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"div",\r\n         "show_name":"PRODUCT FEATURE 4",\r\n         "name":"product_feature_4",\r\n         "style":"top:250px;left:50px; text-align:justify; width:500px; font-size:20px; ",\r\n         "data_ls":"offsetxin:-150;durationin:2000; delayin:2000; easingin:easeinoutquart; rotateyin:-40; offsetxout:-150; durationout:1000; rotateyout:-40; ",\r\n         "color":"#470467",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"div",\r\n         "show_name":"PRODUCT FEATURE 5",\r\n         "name":"product_feature_5",\r\n         "style":"top:300px;left:50px; text-align:justify; width:500px; font-size:20px; ",\r\n         "data_ls":"offsetxin:-150;durationin:2000; delayin:2500; easingin:easeinoutquart; rotateyin:-40; offsetxout:-150; durationout:1000; rotateyout:-40; ",\r\n         "color":"#470467",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"div",\r\n         "show_name":"PRODUCT FEATURE 6",\r\n         "name":"product_feature_6",\r\n         "style":"top:350px;left:50px; text-align:justify; width:500px; font-size:20px; ",\r\n         "data_ls":"offsetxin:-150;durationin:2000; delayin:3000; easingin:easeinoutquart; rotateyin:-40; offsetxout:-150; durationout:1000; rotateyout:-40; ",\r\n         "color":"#470467",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"div",\r\n         "show_name":"PRODUCT FEATURE 7",\r\n         "name":"product_feature_7",\r\n         "style":"top:400px;left:50px; text-align:justify; width:500px; font-size:20px; ",\r\n         "data_ls":"offsetxin:-150;durationin:2000; delayin:3500; easingin:easeinoutquart; rotateyin:-40; offsetxout:-150; durationout:1000; rotateyout:-40; ",\r\n         "color":"#470467",\r\n         "background":"rgba(0,0,0,0)"\r\n      }\r\n   ]\r\n}');
INSERT INTO `slider_style` (`slider_style_id`, `name`, `value`) VALUES
(7, 'SLIDER TYPE 5', '{\r\n   "full_slide_style":"data-ls=\\"slidedelay:7500;transition2d:73,102;\\"",\r\n   "background":"bg_apple",\r\n   "images":[\r\n      {\r\n         "name":"long_1",\r\n         "style":"top:50%; left:50%;width:200px; white-space:nowrap;",\r\n         "data_ls" : "",\r\n         "show_name":"IMAGE"\r\n      }\r\n   ],\r\n   "texts":[\r\n      {\r\n         "element":"h6",\r\n         "show_name":"PRICE",\r\n         "name":"price",\r\n         "style":"top:55%; left:39%; durationin:500; delayin:600; fadein:false; rotatein:30; durationout:500; fadeout:false; slidedirection:fade; slideoutdirection:fade; scalein:0.1; scaleout:0.1; font-weight:300; box-shadow:0px 2px 8px -2px black; padding-top:5px; padding-right:20px; padding-bottom:5px; padding-left:20px; font-size:30px; color:#ffffff; background:#B816B2; border-radius:5px; white-space:nowrap;",\r\n         "data_ls" : "",\r\n         "color":"#ffffff",\r\n         "background":"#b816b2"\r\n      },\r\n      {\r\n         "element":"h6",\r\n         "show_name":"PRODUCT TITLE",\r\n         "name":"product_title",\r\n         "style":"top:45%; left:36%; durationin:500; delayin:500; fadein:false; rotatein:-30; durationout:500; fadeout:false; slidedirection:fade; slideoutdirection:fade; scalein:0.1;scaleout:0.1; font-weight:300; box-shadow:0px 2px 8px -2px black; padding-top:5px; padding-right:20px; padding-bottom:5px; padding-left:20px; font-size:30px; color:#ffffff; background:#760093;border-radius:5px; white-space:nowrap;",\r\n         "data_ls" : "",\r\n         "color":"#ffffff",\r\n         "background":"#760093"\r\n      }\r\n   ]\r\n}');
INSERT INTO `slider_style` (`slider_style_id`, `name`, `value`) VALUES
(8, 'SLIDER TYPE 6', '{\r\n   "full_slide_style":"data-ls=\\"slidedelay:7500;transition2d:73,102;\\"",\r\n   "background":"bg_apple",\r\n   "images":[\r\n      {\r\n         "style":"top:100px;left:100px; width:250px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:3000; delayin:1500; rotateyin:90; transformoriginin:left; 0; offsetxout:0; durationout:750; rotateyout:90; transformoriginout:left; ",\r\n         "name":"semi_long_1",\r\n         "show_name":"PRODUCT IMAGE 1"\r\n      },\r\n      {\r\n         "style":"top:100px;left:400px; width:250px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:3000; delayin:1500; rotateyin:-90; transformoriginin:right; 0; offsetxout:0; durationout:750; rotateyout:90; transformoriginout:right; ",\r\n         "name":"semi_long_2",\r\n         "show_name":"PRODUCT IMAGE 2"\r\n      }\r\n   ],\r\n   "texts":[\r\n      {\r\n         "element":"h1",\r\n         "show_name":"PRODUCT TITLE",\r\n         "name":"product_title",\r\n         "style":"font-family:Roboto;top:25px; left:192px; font-weight:100; text-align:center; width:340px; font-size:40px; border-radius:5px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:2500; delayin:2000; easingin:easeoutelastic; rotatexin:90; transformoriginin:50; bottom; 0; offsetxout:0; rotateout:-90; transformoriginout:left; ",\r\n         "color":"#34009d",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":" DUMMY TEXT 1",\r\n         "name":"dummy_text_1",\r\n         "style":"top:50px;left:800px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; border-radius:4px; white-space:nowrap; ",\r\n         "data_ls":"durationin:1500;delayin:2300; rotatein:20; rotatexin:30; scalexin:1.5; scaleyin:1.5; transformoriginin:left; 0; durationout:750; rotateout:20; rotatexout:-30; scalexout:0; scaleyout:0; transformoriginout:left; ",\r\n         "color":"#ffffff",\r\n         "background":"#740091"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 2",\r\n         "name":"dummy_text_2",\r\n         "style":"top:90px;left:800px; font-weight:300; font-size:24px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:1500; delayin:2700; rotateyin:90; skewxin:60; transformoriginin:25; 0; offsetxout:100; durationout:750; skewxout:60; ",\r\n         "color":"#ff00f6",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 3",\r\n         "name":"dummy_text_3",\r\n         "style":"top:150px;left:800px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; border-radius:4px; white-space:nowrap; ",\r\n         "data_ls":"durationin:1500;delayin:3000; rotatein:20; rotatexin:30; scalexin:1.5; scaleyin:1.5; transformoriginin:left; 0; durationout:750; rotateout:20; rotatexout:-30; scalexout:0; scaleyout:0; transformoriginout:left; ",\r\n         "color":"#ffffff",\r\n         "background":"#740091"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 4",\r\n         "name":"dummy_text_4",\r\n         "style":"top:190px;left:800px; font-weight:300; font-size:24px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:1500; delayin:3400; rotateyin:90; skewxin:60; transformoriginin:25; 0; offsetxout:100; durationout:750; skewxout:60; ",\r\n         "color":"#ff00f6",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 5",\r\n         "name":"dummy_text_5",\r\n         "style":"top:250px;left:800px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; border-radius:4px; white-space:nowrap; ",\r\n         "data_ls":"durationin:1500;delayin:3700; rotatein:20; rotatexin:30; scalexin:1.5; scaleyin:1.5; transformoriginin:left; 0; durationout:750; rotateout:20; rotatexout:-30; scalexout:0; scaleyout:0; transformoriginout:left; ",\r\n         "color":"#ffffff",\r\n         "background":"#740091"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 6",\r\n         "name":"dummy_text_6",\r\n         "style":"top:290px;left:799px; font-weight:300; font-size:24px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:1500; delayin:4100; rotateyin:90; skewxin:60; transformoriginin:25; 0; offsetxout:100; durationout:750; skewxout:60; ",\r\n         "color":"#ff00f6",\r\n         "background":"rgba(0,0,0,0)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 7",\r\n         "name":"dummy_text_7",\r\n         "style":"top:360px;left:800px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; border-radius:4px; white-space:nowrap; ",\r\n         "data_ls":"durationin:1500;delayin:4400; rotatein:20; rotatexin:30; scalexin:1.5; scaleyin:1.5; transformoriginin:left; 0; durationout:750; rotateout:20; rotatexout:-30; scalexout:0; scaleyout:0; transformoriginout:left; ",\r\n         "color":"#ffffff",\r\n         "background":"#740091"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 8",\r\n         "name":"dummy_text_8",\r\n         "style":"top:400px;left:799px; font-weight:300; font-size:24px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:1500; delayin:4800; rotateyin:90; skewxin:60; transformoriginin:25; 0; offsetxout:100; durationout:750; skewxout:60; ",\r\n         "color":"#ff00f6",\r\n         "background":"rgba(0,0,0,0)"\r\n      }\r\n   ]\r\n}');
INSERT INTO `slider_style` (`slider_style_id`, `name`, `value`) VALUES
(9, 'SLIDER TYPE 7', '{\r\n   "full_slide_style":"data-ls=\\"slidedelay:7500;transition2d:73,102;\\"",\r\n   "background":"bg_apple",\r\n   "images":[\r\n      {\r\n         "style":"top:50px; left:50%;width:278px; white-space:nowrap;",\r\n         "data_ls":"durationin:1500;scalexin:0.8; scaleyin:0.8; scalexout:0.8; scaleyout:0.8; ",\r\n         "name":"semi_long_1",\r\n         "show_name":"IMAGE"\r\n      }\r\n   ],\r\n   "texts":[\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 1",\r\n         "name":"dummy_text_1",\r\n         "style":"top:80px;left:20px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;durationin:2000; delayin:1000; offsetxout:-50; durationout:1000; ",\r\n         "color":"#fd2931",\r\n         "background":"rgba(255,255,255,0.85)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 2",\r\n         "name":"dummy_text_2",\r\n         "style":"top:140px;left:20px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;durationin:2000; delayin:1500; offsetxout:-50; durationout:1000; ",\r\n         "color":"#fd2931",\r\n         "background":"rgba(255,255,255,0.85)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 3",\r\n         "name":"dummy_text_3",\r\n         "style":"top:200px;left:20px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;durationin:2000; delayin:2000; offsetxout:-50; durationout:1000; ",\r\n         "color":"#fd2931",\r\n         "background":"rgba(255,255,255,0.85)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 4",\r\n         "name":"dummy_text_4",\r\n         "style":"top:260px;left:20px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;durationin:2000; delayin:2500; offsetxout:-50; durationout:1000; ",\r\n         "color":"#fd2931",\r\n         "background":"rgba(255,255,255,0.85)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 5",\r\n         "name":"dummy_text_5",\r\n         "style":"top:320px;left:20px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;durationin:2000; delayin:3000; offsetxout:-50; durationout:1000; ",\r\n         "color":"#fd2931",\r\n         "background":"rgba(255,255,255,0.85)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 6",\r\n         "name":"dummy_text_6",\r\n         "style":"top:380px;left:20px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;durationin:2000; delayin:3500; offsetxout:-50; durationout:1000; ",\r\n         "color":"#fd2931",\r\n         "background":"rgba(255,255,255,0.85)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"PRODUCT TITLE",\r\n         "name":"product_title",\r\n         "style":"top:50%;left:900px; font-weight:100; text-align:right; padding:15px; font-size:40px; line-height:37px; font-family:roboto; border-radius:4px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:2500; delayin:3250; easingin:easeoutelastic; rotatexin:90; transformoriginin:50; top; 0; offsetxout:0; durationout:1000; rotatexout:90; transformoriginout:50; bottom; ",\r\n         "color":"#fff",\r\n         "background":"#11008b"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 6",\r\n         "name":"dummy_text_6",\r\n         "style":"top:505px;left:983px; font-family:; flower; font-size:30px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;delayin:3500; skewxin:60; scalexin:1.5; offsetxout:-50; durationout:1000; skewxout:60; scalexout:1.5; ",\r\n         "color":"#d9482b",\r\n         "background":"rgba(0,0,0,0)"\r\n      }\r\n   ]\r\n}');
INSERT INTO `slider_style` (`slider_style_id`, `name`, `value`) VALUES
(10, 'SLIDER TYPE 8', '{\r\n   "full_slide_style":"data-ls=\\"slidedelay:7000;transition2d:76,77,78,79;\\"",\r\n   "background":"bg_apple",\r\n   "images":[\r\n      {\r\n         "style":"top:120px; left:42%;width:180px; white-space:nowrap; ",\r\n         "data_ls":"durationin:1500;scalexin:0.8; scaleyin:0.8; scalexout:0.8; scaleyout:0.8; ",\r\n         "name":"semi_long_1",\r\n         "show_name":"PRODUCT IMAGE 1"\r\n      },\r\n      {\r\n         "style":"top:120px; left:58%;width:180px; white-space:nowrap; ",\r\n         "data_ls":"durationin:1500;scalexin:0.8; scaleyin:0.8; scalexout:0.8; scaleyout:0.8; ",\r\n         "name":"semi_long_2",\r\n         "show_name":"PRODUCT IMAGE 2"\r\n      },\r\n      {\r\n         "style":"top:50px; left:50%;width:200px; white-space:nowrap; ",\r\n         "data_ls":"durationin:1500;scalexin:0.8; scaleyin:0.8; scalexout:0.8; scaleyout:0.8; ",\r\n         "name":"long_1",\r\n         "show_name":"PRODUCT IMAGE 3"\r\n      }\r\n   ],\r\n   "texts":[\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 1",\r\n         "name":"dummy_text_1",\r\n         "style":"top:80px;left:20px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;durationin:2000; delayin:1000; offsetxout:-50; durationout:1000; ",\r\n         "color":"#fd2931",\r\n         "background":"rgba(255,255,255,0.85)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 2",\r\n         "name":"dummy_text_2",\r\n         "style":"top:140px;left:20px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;durationin:2000; delayin:1500; offsetxout:-50; durationout:1000; ",\r\n         "color":"#fd2931",\r\n         "background":"rgba(255,255,255,0.85)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 3",\r\n         "name":"dummy_text_3",\r\n         "style":"top:200px;left:20px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;durationin:2000; delayin:2000; offsetxout:-50; durationout:1000; ",\r\n         "color":"#fd2931",\r\n         "background":"rgba(255,255,255,0.85)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 4",\r\n         "name":"dummy_text_4",\r\n         "style":"top:260px;left:20px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;durationin:2000; delayin:2500; offsetxout:-50; durationout:1000; ",\r\n         "color":"#fd2931",\r\n         "background":"rgba(255,255,255,.85)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 5",\r\n         "name":"dummy_text_5",\r\n         "style":"top:320px;left:20px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;durationin:2000; delayin:3000; offsetxout:-50; durationout:1000; ",\r\n         "color":"#fd2931",\r\n         "background":"rgba(255,255,255,0.85)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 6",\r\n         "name":"dummy_text_6",\r\n         "style":"top:380px;left:20px; font-weight:300; height:40px; padding-right:10px; padding-left:10px; font-size:30px; line-height:37px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;durationin:2000; delayin:3500; offsetxout:-50; durationout:1000; ",\r\n         "color":"#fd2931",\r\n         "background":"rgba(255,255,255,0.85)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"PRODUCT TITLE",\r\n         "name":"product_title",\r\n         "style":"top:50%;left:900px; font-weight:100; text-align:right; padding:15px; font-size:40px; line-height:37px; font-family:roboto; border-radius:4px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:0;durationin:2500; delayin:3250; easingin:easeoutelastic; rotatexin:90; transformoriginin:50; top; 0; offsetxout:0; durationout:1000; rotatexout:90; transformoriginout:50; bottom; ",\r\n         "color":"#fff",\r\n         "background":"#11008b"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"DUMMY TEXT 7",\r\n         "name":"dummy_text_7",\r\n         "style":"top:505px;left:983px; font-family:; flower; font-size:30px; white-space:nowrap; ",\r\n         "data_ls":"offsetxin:-50;delayin:3500; skewxin:60; scalexin:1.5; offsetxout:-50; durationout:1000; skewxout:60; scalexout:1.5; ",\r\n         "color":"#000",\r\n         "background":"rgba(0,0,0,0)"\r\n      }\r\n   ]\r\n}');
INSERT INTO `slider_style` (`slider_style_id`, `name`, `value`) VALUES
(11, 'WELCOME TYPE 3', '{\r\n   "full_slide_style":"data-ls=\\"slidedelay:8000;transition2d:4;\\"",\r\n   "background":"bg_apple",\r\n   "images":[\r\n      {\r\n         "show_name":"Image 1",\r\n         "name":"ase",\r\n         "style":"top:45%; left:45%;width:200px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; durationin:1500; delayin:3000; rotateyin:90; transformoriginin:right 50% 0; offsetxout:0; durationout:1500; showuntil:1000; rotateyout:-90; transformoriginout:right 50% 0;"\r\n      }\r\n   ],\r\n   "texts":[\r\n      {\r\n         "element":"p",\r\n         "show_name":"Introducing",\r\n         "name":"text_1",\r\n         "style":"top:40%; left:50%; font-weight: 300; font-size:30px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:50; durationin:750; easingin:easeOutBack; skewxin:-50; offsetxout:-50; durationout:600; showuntil:1500; easingout:easeInBack; skewxout:50;",\r\n         "color":"#C505BD",\r\n         "background":"rgba(1,1,1,0)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"Your Shop Name",\r\n         "name":"text_2",\r\n         "style":"top:50%; left:50%; font-weight: 300; font-size:50px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:-100; durationin:750; delayin:250; easingin:easeOutBack; skewxin:-50; offsetxout:100; durationout:600; showuntil:1500; easingout:easeInBack; skewxout:50;",\r\n         "color":"#8D00AF",\r\n         "background":"rgba(1,1,1,0)"\r\n      },\r\n      {\r\n         "element":"p",\r\n         "show_name":"your Shop Slogan",\r\n         "name":"text_3",\r\n         "style":"top:47%; left:690px; font-weight: 300; font-size:35px; white-space: nowrap;",\r\n         "data_ls":"offsetxin:0; durationin:1500; delayin:3000; rotateyin:90; transformoriginin:left 50% 0; offsetxout:0; durationout:1500; showuntil:1500; rotateyout:-90; transformoriginout:left 50% 0;",\r\n         "color":"#8D00AF",\r\n         "background":"rgba(1,1,1,0)"\r\n      }\r\n   ]\r\n}');
INSERT INTO `slider_style` (`slider_style_id`, `name`, `value`) VALUES
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
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

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
(78, 'destroy', '6', '27', '121', '1', NULL, '0', 'sale', '1444776296', '7', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE IF NOT EXISTS `subscribe` (
  `subscribe_id` int(11) NOT NULL,
  `email` varchar(600) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `sub_category_id` int(11) NOT NULL,
  `sub_category_name` longtext,
  `category` longtext
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_category_id`, `sub_category_name`, `category`) VALUES
(1, 'Laptop', '1'),
(2, 'Desktop', '1'),
(3, 'Accessories', '1'),
(4, 'Dress', '3'),
(5, 'Perfume', '3'),
(6, 'Shoe', '3'),
(7, 'Dress', '4'),
(8, 'Perfume', '4'),
(9, 'Shoe', '4'),
(10, 'Four wheeler', '2'),
(11, 'Two wheeler', '2'),
(12, 'Tablet', '1'),
(13, 'Camera', '1'),
(14, 'Women secret', '3'),
(15, 'Accessories', '3'),
(16, 'Women Cosmetics', '3'),
(17, 'Mobile', '1'),
(18, 'Bridal', '3'),
(19, 'Dress', '5'),
(20, 'Shoes', '5'),
(21, 'Super Car', '2'),
(22, 'Super Bike', '2'),
(23, 'HTML Template', '6'),
(24, 'PHP Script', '6'),
(25, 'Graphics', '6'),
(26, 'Movie', '6'),
(27, 'Book(.pdf)', '6');

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
(6, 'admin_login_logo', '18'),
(7, 'admin_nav_logo', '18'),
(8, 'home_top_logo', '16'),
(9, 'home_bottom_logo', '2'),
(10, 'home_category', '["1","2","3","6"]'),
(11, 'fav_ext', 'png'),
(12, 'side_bar_pos_category', 'right'),
(13, 'home_brand', '["1","2","3","4","5","6"]'),
(14, 'footer_color', NULL),
(15, 'header_color', 'purple');

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `surname`, `email`, `phone`, `address1`, `address2`, `city`, `zip`, `langlat`, `password`, `fb_id`, `g_id`, `g_photo`, `creation_date`, `google_plus`, `skype`, `facebook`, `wishlist`, `last_login`, `downloads`) VALUES
(1, 'Mr. Customer', 'Boy', 'customer@shop.com', '(88) 090 0938', 'Dhaka', 'Bangladesh', 'Dhaka', '1212', '(12.44819535767321, 76.66826244013669)', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '', '', '', '1436652284', '', '', '', '["115","106","95","117","118"]', '1444986151', '[{"sale":2,"product":"118"},{"sale":4,"product":"119"},{"sale":5,"product":"118"},{"sale":5,"product":"120"},{"sale":6,"product":"121"},{"sale":7,"product":"122"},{"sale":7,"product":"121"}]');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `name`, `email`, `password`, `company`, `display_name`, `address1`, `address2`, `status`, `membership`, `create_timestamp`, `approve_timestamp`, `member_timestamp`, `member_expire_timestamp`, `details`, `last_login`, `facebook`, `skype`, `google_plus`, `twitter`, `youtube`, `pinterest`, `stripe_details`, `paypal_email`, `preferred_payment`, `cash_set`, `stripe_set`, `paypal_set`, `phone`, `keywords`, `description`, `lat_lang`) VALUES
(1, 'Mr. Vendor', 'vendor@shop.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Vendor Pvt. Ltd.', 'Vendor Shop', 'dhaka', 'Address', 'approved', '1', 1439049705, 0, 0, 1451606400, '', 0, '', '', '', '', '', '', '', '', '', '', '[]', '', '', '', '', '(23.74319497113364, 90.40212959191285)'),
(2, 'Example Vendor', 'vendor1@shop.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Example Vendor', 'Example Vendor', 'Example Road', 'Example House', 'approved', '0', 1444161452, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(3, 'Example Vendor', 'vendor2@shop.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Example Vendor', 'Example Vendor', 'Example Road', 'Example House', 'approved', '0', 1444161452, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(4, 'Example Vendor', 'vendor3@shop.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Example Vendor', 'Example Vendor', 'Example Road', 'Example House', 'approved', '0', 1444161452, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(5, 'Example Vendor', 'vendor4@shop.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Example Vendor', 'Example Vendor', 'Example Road', 'Example House', 'approved', '0', 1444161452, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(6, 'Example Vendor', 'vendor5@shop.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Example Vendor', 'Example Vendor', 'Example Road', 'Example House', 'approved', '0', 1444161452, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(7, 'Example Vendor', 'vendor6@shop.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Example Vendor', 'Example Vendor', 'Example Road', 'Example House', 'approved', '0', 1444161452, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(8, 'Example Vendor', 'vendor7@shop.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Example Vendor', 'Example Vendor', 'Example Road', 'Example House', 'approved', '0', 1444161452, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(9, 'Ishmael Dodson', 'vuharupy@gmail.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 'Mayo and Zimmerman Trading', 'Randall Garcia', 'Corrupti amet quos placeat velit odit labore labore est et voluptatibus amet aliquam quos sint et obcaecati debitis mollit incidunt', 'Anim rerum ad velit est aut aute iure reprehenderit labore in ipsum', 'pending', '0', 1444818277, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '(0,0)');

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

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
-- Indexes for table `contact_message`
--
ALTER TABLE `contact_message`
  ADD PRIMARY KEY (`contact_message_id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`general_settings_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`word_id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`logo_id`);

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
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

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
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_category_id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `business_settings`
--
ALTER TABLE `business_settings`
  MODIFY `business_settings_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `contact_message`
--
ALTER TABLE `contact_message`
  MODIFY `contact_message_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `general_settings_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `word_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=843;
--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `membership_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `membership_payment`
--
ALTER TABLE `membership_payment`
  MODIFY `membership_payment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
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
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `social_links_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `subscribe_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `ui_settings`
--
ALTER TABLE `ui_settings`
  MODIFY `ui_settings_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `vendor_invoice`
--
ALTER TABLE `vendor_invoice`
  MODIFY `vendor_invoice_id` int(11) NOT NULL AUTO_INCREMENT;