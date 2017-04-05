CREATE TABLE IF NOT EXISTS `tt_admins` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'SUB' COMMENT 'SUP->Super-Admin, SUB-> Sub-Admin',
  `status` varchar(1) NOT NULL DEFAULT '1' COMMENT '0->Inactive, 1->Active',
  `last_login` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tt_admins`
--

INSERT INTO `tt_admins` (`id`, `username`, `password`, `email`, `type`, `status`, `last_login`, `created`, `modified`) VALUES
(1, 'admin', '9056398d17c645650e7eb98ea7d274d6d0ae2c89', 'arun@corfuit.org', 'SUP', '1', '2017-01-04 19:31:21', '2013-08-23 13:46:45', '2017-01-05 05:16:10');

-- --------------------------------------------------------

--
-- Table structure for table `tt_pages`
--

CREATE TABLE IF NOT EXISTS `tt_pages` (
  `id` int(11) NOT NULL,
  `alias_name` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `page_description` text,
  `status` varchar(1) NOT NULL DEFAULT '1' COMMENT '0,1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tt_pages`
--

INSERT INTO `tt_pages` (`id`, `alias_name`, `meta_title`, `meta_description`, `meta_keywords`, `page_description`, `status`, `created`, `modified`) VALUES
(1, 'about-us', 'About Us', 'About Us', 'About Us', '<p><strong>Corfuit Consulting</strong> is UAE&#39;s leading provider of staffing solutions mastering Talent Acquisition and Human Resource Outsourcing. We provide recruitment solution to Banking &amp; Financial Services, Real Estate, Automobile &amp; Engineering, IT &amp; Telecom, Education, Manufacturing, Engineering, Hotels, Aviation, Facility Management sectors. Being specialists in these areas we understand the product and the catering market in depth and this knowledge enables us to source the best candidate in an effective manner.</p>\r\n\r\n<p>Our drive of working towards consumer delight along with providing the best in class recruitment solutions has ensured that we are now the partners of choice for leading organizations. We act as a bridge between the employees and the job seekers creating a win-win situation for both. We have an extensive network and a highly skilled team of experts and professionals, which makes our understanding of this business unparalleled. We provide one stop solution for manpower and placement related requirements. We have a collaborative approach while working with our clients and try and provide tailored solution to all their requirements.</p>\r\n\r\n<p><strong>&quot;We understand...What you Need....Who you Need....When you Need....so, We will always be the best bet to Hire for you&quot;</strong></p>\r\n\r\n<p><strong>Vision</strong><br />\r\nTo be the leader in providing talent acquisition and outsourcing services in the UAE known for our expertise to consistently facilitate an optimum result for both our clients and candidates.</p>\r\n\r\n<p><strong>Mission<br />\r\n&quot;Recruiting right talent will always have higher returns than almost any training program that can be developed&quot;.</strong></p>\r\n\r\n<p>We exist to help clients source better. Better sourcing leads to better performance, better talent retention, satisfied client and happy job seeker resulting in quality long term relationships with us. We work together as a team:- &quot;Together Everyone Achieves More&quot;</p>\r\n\r\n<p>That&#39;s Corfuit Consulting&#39;s raison d&#39;&ecirc;tre</p>\r\n\r\n<p><strong>Core Values</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong>Integrity:</strong> We uphold and embrace the highest standards of professional and personal trust , honesty and ethics.</li>\r\n	<li><strong>Collaboration:</strong> We believe in working as a team with our clients and candidate to help them achieve their goal and share knowledge for continuous improvement and innovation.</li>\r\n	<li><strong>Break Through Results:</strong> We strive for delivering better and before the committed timelines.</li>\r\n	<li><strong>Respect:</strong> We deal with all our clients and candidates with utmost respect and dignity</li>\r\n	<li><strong>Efficiency: </strong> We believe in providing desired results in stipulated timeframe.</li>\r\n	<li><strong>Quality: </strong> We focus on the quality of jobs as well as candidates we are catering to.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '1', '2017-01-05 12:45:12', '2017-01-05 11:41:34'),
(2, 'our-services', 'Our Services', 'Our Services', 'Our Services', '<p><b>Talent Acquisition</b></p>\r\n\r\n<p>Corfuit Consulting has provided workforce solutions to customers in various industries and have a vast experience of outsourcing employees. We are a company that has evolved with changing times and have been successful in all our undertakings because we go an extra mile to understand a companyâ€™s requirements and provide them with manpower solutions that are just perfect. Creating A Difference.</p>\r\n\r\n<p><b>Clients</b></p>\r\n<p>We source candidates to meet our clientsâ€™ needs for professional and technical employees in the fields of banking, finance, accounting, engineering, hotels and information technology. Our talent acquisition team has the brightest and most experienced individuals in the industry today. We have a robust recruitment process considering the unique challenges of the industries we serve, and understand the needs of our clients and associates better than anyone.</p>\r\n\r\n<p><b>Candidates</b></p>\r\n<p>Our team of professional recruiters have the industry knowledge and insight that it takes to be able to match your skills and experience with your dream job. We want to be there at every stage of your career â€“ because as your life changes, your definition of job satisfaction and requirement changes as well. Our specialized HR team offers not only better jobs, but also skill training and career advice. At Corfu IT Consulting  we aim to change the way you think about "work".</p>\r\n\r\n<p><b>Outsourcing</b></p>\r\n<p>Outsourcing is the contracting out of a business process, which an organization may have previously performed internally or has a new need for, to an independent organization from which the process is purchased back as a service. HR Outsourcing also known as contract staffing is a growing trend in the UAE. Today, many companies are realizing the benefits of outsourcing Abu Dhabi & Outsourcing Dubai. Previously, saving cost was the key driver for outsourcing UAE. Today however outsourcing is a corporate strategic decision that has several important benefits.</p>', '1', '2017-01-05 12:52:21', '2017-01-04 21:46:55'),
(3, 'terms', 'Terms Of Use', 'Terms Of Use', 'Terms Of Use', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac orci enim. Nam sed varius leo. Sed tincidunt tortor id tempor auctor. Nullam non interdum mi, nec euismod orci. Pellentesque commodo nulla id est scelerisque, quis laoreet nisi vehicula. Ut ornare libero sed vulputate vehicula. Nam eu elementum turpis. Integer felis odio, tincidunt nec dui sed, rhoncus tempor tortor. Quisque finibus volutpat urna, sit amet porta augue facilisis at. Quisque in augue sit amet nisl pulvinar lobortis. Cras lacinia, purus in volutpat auctor, nibh mi auctor ex, quis ultricies purus massa ac turpis. Nullam velit ipsum, lacinia vitae egestas vel, accumsan vel dui. Sed justo massa, ultrices at sem ultrices, aliquam congue lectus. Pellentesque bibendum neque neque. Aliquam erat volutpat.</p>\r\n\r\n<p>Nam non efficitur nulla, a faucibus velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis justo non nunc dictum eleifend. Praesent laoreet, nunc ut vehicula rutrum, urna eros ullamcorper odio, ut mollis magna odio in nisl. Pellentesque eu lacinia mauris, ac pharetra ante. Sed ut nisl sed neque facilisis lobortis. Morbi libero nisi, luctus in ante vitae, viverra venenatis velit.</p>\r\n\r\n<p>Duis dapibus, mauris ac malesuada posuere, mi velit consequat est, dictum venenatis leo eros et velit. Donec rutrum ipsum ut quam vehicula interdum. Maecenas nec efficitur sem, eget consectetur justo. Nulla eu gravida sapien, at tristique turpis. Nullam vitae consequat justo. Nulla ornare ultricies erat ac interdum. Integer id commodo metus. In a augue tincidunt, efficitur neque in, tincidunt sapien. Sed sodales fermentum nulla, ut molestie nisi molestie quis. Phasellus augue diam, laoreet et sapien vitae, vestibulum blandit metus.</p>\r\n\r\n<p>Nam et velit id massa gravida rutrum eu sit amet sapien. Phasellus at vulputate dui. Donec quis vulputate risus. Maecenas ante eros, faucibus vitae metus eget, ultricies varius quam. Nulla finibus, eros quis elementum luctus, neque libero ultrices dolor, id vehicula arcu nulla nec justo. Mauris molestie lorem eget faucibus ornare. Donec erat ex, maximus quis risus nec, pretium gravida justo. Donec felis orci, efficitur in malesuada nec, pellentesque eu nisl. Sed vestibulum ex sed sapien venenatis porttitor. Aenean consectetur, velit ut porta mollis, lorem ante vulputate ante, sed commodo tellus leo sed dolor. Fusce risus mi, vestibulum eget fringilla ut, faucibus nec mauris. Phasellus id turpis mollis, consequat ante eu, posuere dolor. Donec laoreet ipsum non mauris vulputate, eget elementum augue auctor. Maecenas a sapien et felis dignissim bibendum. Ut gravida lacus tempus ipsum consequat, sit amet molestie elit porta. Etiam a consectetur quam.</p>\r\n\r\n<p>Aliquam gravida tortor ante. Cras laoreet justo non lorem rhoncus, in condimentum massa luctus. Nunc gravida vehicula felis, sit amet eleifend ipsum porta a. Praesent tempor vulputate tellus, nec tempor leo. Donec sit amet est ut purus posuere viverra. Aenean ut gravida justo, non cursus elit. Phasellus ut nibh nec neque ultrices pharetra. Suspendisse potenti. Cras vulputate erat in lorem faucibus accumsan. Fusce elementum tempor lobortis. Vestibulum quis enim mauris. Aliquam auctor neque a elit fermentum facilisis.&nbsp;</p>\r\n', '1', '2017-01-05 12:52:21', '2017-01-04 21:48:03'),
(4, 'privacy', 'Privacy Policy', 'Privacy Policy', 'Privacy Policy', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac orci enim. Nam sed varius leo. Sed tincidunt tortor id tempor auctor. Nullam non interdum mi, nec euismod orci. Pellentesque commodo nulla id est scelerisque, quis laoreet nisi vehicula. Ut ornare libero sed vulputate vehicula. Nam eu elementum turpis. Integer felis odio, tincidunt nec dui sed, rhoncus tempor tortor. Quisque finibus volutpat urna, sit amet porta augue facilisis at. Quisque in augue sit amet nisl pulvinar lobortis. Cras lacinia, purus in volutpat auctor, nibh mi auctor ex, quis ultricies purus massa ac turpis. Nullam velit ipsum, lacinia vitae egestas vel, accumsan vel dui. Sed justo massa, ultrices at sem ultrices, aliquam congue lectus. Pellentesque bibendum neque neque. Aliquam erat volutpat.</p>\r\n\r\n<p>Nam non efficitur nulla, a faucibus velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis justo non nunc dictum eleifend. Praesent laoreet, nunc ut vehicula rutrum, urna eros ullamcorper odio, ut mollis magna odio in nisl. Pellentesque eu lacinia mauris, ac pharetra ante. Sed ut nisl sed neque facilisis lobortis. Morbi libero nisi, luctus in ante vitae, viverra venenatis velit.</p>\r\n\r\n<p>Duis dapibus, mauris ac malesuada posuere, mi velit consequat est, dictum venenatis leo eros et velit. Donec rutrum ipsum ut quam vehicula interdum. Maecenas nec efficitur sem, eget consectetur justo. Nulla eu gravida sapien, at tristique turpis. Nullam vitae consequat justo. Nulla ornare ultricies erat ac interdum. Integer id commodo metus. In a augue tincidunt, efficitur neque in, tincidunt sapien. Sed sodales fermentum nulla, ut molestie nisi molestie quis. Phasellus augue diam, laoreet et sapien vitae, vestibulum blandit metus.</p>\r\n\r\n<p>Nam et velit id massa gravida rutrum eu sit amet sapien. Phasellus at vulputate dui. Donec quis vulputate risus. Maecenas ante eros, faucibus vitae metus eget, ultricies varius quam. Nulla finibus, eros quis elementum luctus, neque libero ultrices dolor, id vehicula arcu nulla nec justo. Mauris molestie lorem eget faucibus ornare. Donec erat ex, maximus quis risus nec, pretium gravida justo. Donec felis orci, efficitur in malesuada nec, pellentesque eu nisl. Sed vestibulum ex sed sapien venenatis porttitor. Aenean consectetur, velit ut porta mollis, lorem ante vulputate ante, sed commodo tellus leo sed dolor. Fusce risus mi, vestibulum eget fringilla ut, faucibus nec mauris. Phasellus id turpis mollis, consequat ante eu, posuere dolor. Donec laoreet ipsum non mauris vulputate, eget elementum augue auctor. Maecenas a sapien et felis dignissim bibendum. Ut gravida lacus tempus ipsum consequat, sit amet molestie elit porta. Etiam a consectetur quam.</p>\r\n\r\n<p>Aliquam gravida tortor ante. Cras laoreet justo non lorem rhoncus, in condimentum massa luctus. Nunc gravida vehicula felis, sit amet eleifend ipsum porta a. Praesent tempor vulputate tellus, nec tempor leo. Donec sit amet est ut purus posuere viverra. Aenean ut gravida justo, non cursus elit. Phasellus ut nibh nec neque ultrices pharetra. Suspendisse potenti. Cras vulputate erat in lorem faucibus accumsan. Fusce elementum tempor lobortis. Vestibulum quis enim mauris. Aliquam auctor neque a elit fermentum facilisis.&nbsp;</p>\r\n', '1', '2017-01-05 12:52:21', '2017-01-04 21:47:58'),
(5, 'contact', 'Contact Us', 'Contact Us', 'Contact Us', 'Contact Us', '1', '2017-01-05 16:45:52', '2017-01-05 11:52:16'),
(6, 'home', 'Home', 'Home', 'Home', 'Home', '1', '2017-01-05 16:45:52', '2017-01-05 16:45:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tt_admins`
--
ALTER TABLE `tt_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tt_pages`
--
ALTER TABLE `tt_pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tt_admins`
--
ALTER TABLE `tt_admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tt_pages`
--
ALTER TABLE `tt_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;