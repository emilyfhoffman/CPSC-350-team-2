-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 23, 2011 at 03:13 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `recipes`
--
CREATE DATABASE IF NOT DEFINED `recipes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
GRANT ALL PRIVILEGES ON recipes.* to 'assist'@'localhost' identified by 'assist';
USE `recipes`;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE IF NOT EXISTS `recipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recipe_name` varchar(50) NOT NULL,
  `ingredients` blob NOT NULL,
  `instructions` blob NOT NULL,
  `dish_type` enum('breakfast','appetizer','main dish','side dish','dessert','drink') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `recipe_name`, `ingredients`, `instructions`, `dish_type`) VALUES
(1, '"Rise and Shine" Cranberry Apple Crisp', 0x312f322063757020206772616e756c617465642073756761720d3c62723e3220546273702e2020736e6970706564206472696564206372616e626572726965732c206472696564206368657272696573206f722064726965642064617465730d3c62723e31207473702e202066696e656c79207368726564646564206c656d6f6e207065656c0d3c62723e3120546273702e20206c656d6f6e206a756963650d3c62723e332f34207473702e202076616e696c6c610d3c62723e33206375707320207468696e6c7920736c696365642c207065656c6564204772616e6e7920536d697468206f7220636f6f6b696e67206170706c65730d3c62723e312063757020206672657368206f722066726f7a656e206372616e626572726965730d3c62723e322f33206375702020726f6c6c6564206f6174730d3c62723e312f332063757020207061636b65642062726f776e2073756761720d3c62723e3220546273702e2020616c6c2d707572706f736520666c6f75720d3c62723e312f32207473702e20206170706c6520706965207370696365206f722067726f756e642063617264616d6f6d0d3c62723e312f342063757020206368696c6c6564206275747465722c2063757420696e746f20736d616c6c207069656365730d3c62723e312f34206375702020666c616b656420636f636f6e75740d3c62723e48616c662d616e642d68616c662c206c6967687420637265616d2c2077686f6c65206d696c6b206f7220706c61696e206c6f77666174206f72206661742d6672656520796f6775727420286f7074696f6e616c290d3c62723e, 0x312e2047726561736520616e2038783878322d696e63682062616b696e6720646973682028322d717561727420737175617265293b207365742061736964652e20496e2061206c6172676520626f776c2c20636f6d62696e65206772616e756c617465642073756761722c206472696564206372616e626572726965732c206c656d6f6e207065656c20616e64206a7569636520616e642076616e696c6c612e204164642074686520736c69636564206170706c657320616e64206672657368206f722066726f7a656e206372616e626572726965732c2067656e746c7920746f7373696e672077656c6c20746f206576656e6c7920636f61742e20506c616365206170706c65206d69787475726520696e20707265706172656420646973682e0d3c62723e0d3c62723e322e20466f7220746f7070696e673a20496e206120736d616c6c20626f776c2c20636f6d62696e65206f6174732c2062726f776e2073756761722c20666c6f757220616e64206170706c65207069652073706963652e205573696e6720612070617374727920626c656e646572206f722032206b6e697665732c2063757420696e2062757474657220756e74696c206d69787475726520726573656d626c657320636f61727365206d65616c2e205374697220696e20636f636f6e75742e20537072696e6b6c6520746f7070696e67206576656e6c79206f766572206170706c65206d6978747572652e0d3c62723e0d3c62723e332e2042616b6520696e206120333530206465677265652046206f76656e20666f7220343020746f203435206d696e75746573206f7220756e74696c206170706c6573206172652074656e64657220616e6420746f7070696e6720697320676f6c64656e2e20436f6f6c206f6e20612077697265207261636b20666f72203130206d696e757465732e205365727665207761726d206f7220617420726f6f6d2074656d706572617475726520696e207368616c6c6f7720626f776c7320776974682068616c662d616e642d68616c662c20696620796f75206c696b652e204d616b657320362073657276696e67732e0d3c62723e4d616b652d4168656164205469700d3c62723e0d3c62723e507265706172652074686520746f7070696e6720757020746f203820686f757273206265666f72652073657276696e672e20436f76657220616e64206368696c6c2074686520667275697420637269737020756e74696c206e65656465642e0d3c62723e, 'breakfast'),
(2, '"Healthified" Cheese and Bacon Stuffed Muchrooms', 0x32342020206c617267652066726573682077686f6c65206d757368726f6f6d7320283120312f3220746f203220696e6368657320696e206469616d65746572290d3c62723e32207461626c6573706f6f6e732020726564756365642d6661742062616c73616d69632076696e61696772657474650d3c62723e32202020736c69636573206261636f6e0d3c62723e3120312f322074656173706f6f6e7320206f6c697665206f696c0d3c62723e312f3220637570202063686f7070656420726564206f6e696f6e0d3c62723e312f3320637570202066696e656c7920736872656464656420726564756365642d666174204974616c69616e2063686565736520626c656e640d3c62723e312f33206375702020726564756365642d666174206761726c69632d616e642d68657262732073707265616461626c6520636865657365202866726f6d20362e352d6f7a20636f6e7461696e6572290d3c62723e312f322074656173706f6f6e202044696a6f6e206d7573746172640d3c62723e32207461626c6573706f6f6e73202050726f67726573736fc2ae20706c61696e206272656164206372756d62730d3c62723e322074656173706f6f6e73202063686f70706564206672657368204974616c69616e2028666c61742d6c6561662920706172736c65790d3c62723e, 0x312e2048656174206f76656e20746f20333530206465677265657320462e2052656d6f7665207374656d732066726f6d206d757368726f6f6d733b207265736572766520636170732e2043686f7020656e6f756768207374656d7320746f206d65617375726520332f34206375702e20446973636172642072656d61696e696e67207374656d73206f72207265736572766520666f7220616e6f74686572207573652e20496e206c6172676520626f776c2c20746f7373206d757368726f6f6d206361707320776974682076696e61696772657474653b20706c616365207374656d20736964657320646f776e20696e20756e6772656173656420313578313078312d696e63682070616e2e0d3c62723e0d3c62723e322e2042616b65203130206d696e757465732e204c6574207374616e6420756e74696c20636f6f6c20656e6f75676820746f2068616e646c653b20647261696e2e0d3c62723e0d3c62723e332e204d65616e7768696c652c20696e2031302d696e6368206e6f6e737469636b20736b696c6c65742c20636f6f6b206261636f6e20756e74696c2063726973703b20647261696e206f6e20706170657220746f77656c2e204372756d626c65206261636f6e3b207365742061736964652e2052656d6f766520616e642064697363617264206472697070696e67732066726f6d20736b696c6c65742e0d3c62723e0d3c62723e342e20496e2073616d6520736b696c6c65742c206865617420312074656173706f6f6e206f6620746865206f6c697665206f696c206f766572206d656469756d20686561742e20416464206f6e696f6e20616e642063686f70706564206d757368726f6f6d207374656d733b20636f6f6b203420746f2036206d696e757465732c207374697272696e67206f63636173696f6e616c6c792c20756e74696c206f6e696f6e2069732074656e6465722e0d3c62723e0d3c62723e352e20496e206d656469756d20626f776c2c2073746972206f6e696f6e206d6978747572652c206261636f6e2c206368656573657320616e64206d75737461726420756e74696c2077656c6c20626c656e6465642e2053706f6f6e206d69787475726520696e746f206d757368726f6f6d20636170733b20706c6163652066696c6c656420736964657320757020696e2070616e2e20496e20736d616c6c20626f776c2c206d6978206272656164206372756d627320616e642072656d61696e696e6720312f322074656173706f6f6e206f6c697665206f696c3b207374697220696e20706172736c65792e20537072696e6b6c65206272656164206372756d62206d697874757265206f7665722066696c6c6564206d757368726f6f6d20636170732e0d3c62723e0d3c62723e362e2042616b6520313020746f203135206d696e75746573206f7220756e74696c2074686f726f7567686c792068656174656420616e6420636865657365206973206d656c7465642e205365727665207761726d2e0d3c62723e, 'appetizer'),
(3, 'Almond-Crusted Chicken', 0x3420736d616c6c2020736b696e6c6573732c20626f6e656c65737320636869636b656e206272656173742068616c76657320283120746f20312d312f34206c622e20746f74616c290d3c62723e312020206567672c206c696768746c792062656174656e0d3c62723e3220546273702e20206275747465726d696c6b0d3c62723e312f3220637570202066696e656c792063686f7070656420616c6d6f6e64730d3c62723e312f3220637570202070616e6b6f20284a6170616e6573652d7374796c65206272656164206372756d627329206f722066696e6520647279206272656164206372756d62730d3c62723e32207473702e2020736e697070656420667265736820726f73656d6172790d3c62723e312f34207473702e202073616c740d3c62723e3120546273702e20207065616e7574206f696c206f722063616e6f6c61206f696c0d3c62723e312020207368616c6c6f742c2063686f707065640d3c62723e38206375707320206672657368207370696e616368206c65617665730d3c62723e312f34207473702e202073616c740d3c62723e46726573686c792067726f756e6420626c61636b207065707065720d3c62723e4672657368206d696e74206c656176657320286f7074696f6e616c29, 0x312e20506c616365206f6e6520636869636b656e206272656173742068616c66206265747765656e20736865657473206f6620706c617374696320777261702e205769746820666c61742073696465206f66206d656174206d616c6c65742c20706f756e6420636869636b656e20746f20312f342d20746f20312f322d696e636820746869636b6e6573732e205265706561742077697468207468652072656d61696e696e67206272656173742068616c7665732e0d3c62723e0d3c62723e322e20496e207368616c6c6f77206469736820776869736b20746f6765746865722065676720616e64206275747465726d696c6b2e20496e20616e6f74686572207368616c6c6f77206469736820636f6d62696e6520616c6d6f6e64732c2070616e6b6f2c20726f73656d6172792c20616e6420312f342074656173706f6f6e2073616c742e2044697020636869636b656e20627265617374732c206f6e6520617420612074696d652c20696e20656767206d6978747572652c207475726e696e6720746f20636f61742e20416c6c6f772065786365737320746f2064726970206f66662c207468656e2064697020636869636b656e2070696563657320696e20616c6d6f6e64206d6978747572652c207475726e696e6720746f20636f61742e0d3c62723e0d3c62723e332e20496e2031322d696e6368206e6f6e737469636b20736b696c6c657420636f6f6b20636869636b656e2c2068616c6620617420612074696d65206966206e65636573736172792c20696e20686f74206f696c206f766572206d656469756d206865617420666f72203420746f2036206d696e75746573206f7220756e74696c206e6f206c6f6e6765722070696e6b2c207475726e696e67206f6e63652068616c66776179207468726f75676820636f6f6b696e672e2052656d6f766520636869636b656e2066726f6d20736b696c6c65743b206b656570207761726d2e0d3c62723e0d3c62723e342e20496e2073616d6520736b696c6c657420636f6f6b207368616c6c6f7420696e206472697070696e6773203320746f2035206d696e75746573206f72206a75737420756e74696c2074656e6465722c207374697272696e67206672657175656e746c792e20416464207370696e61636820616e6420312f342074656173706f6f6e2073616c743b20636f6f6b20616e6420746f73732061626f75742031206d696e757465206f72206a75737420756e74696c207370696e6163682069732077696c7465642e20536572766520636869636b656e20776974682077696c746564207370696e6163682e20537072696e6b6c652070657070657220616e64206d696e742e204d616b657320342073657276696e67732e0d3c62723e, 'main dish'),
(4, '"Healthified" Macaroni and Cheese', 0x322063757073202020756e636f6f6b656420726567756c6172206f722077686f6c6520776865617420656c626f77206d616361726f6e69202838206f7a290d3c62723e3220637570732020206661742d667265652028736b696d29206d696c6b0d3c62723e33207461626c6573706f6f6e73202020476f6c64204d6564616cc2ae20616c6c2d707572706f736520666c6f75720d3c62723e312074656173706f6f6e20202044696a6f6e206d7573746172640d3c62723e312f342074656173706f6f6e20202073616c740d3c62723e312f342074656173706f6f6e20202067726f756e6420626c61636b207065707065720d3c62723e312f382074656173706f6f6e20202067726f756e6420726564207065707065722028636179656e6e65290d3c62723e322063757073202020736872656464656420726564756365642d666174207368617270204368656464617220636865657365202838206f7a290d3c62723e, 0x312e20496e20332d717561727420736175636570616e2c20636f6f6b20616e6420647261696e206d616361726f6e69206173206469726563746564206f6e207061636b6167652e2052657475726e20746f20736175636570616e3b20636f76657220746f206b656570207761726d2e0d3c62723e0d3c62723e322e204d65616e7768696c652c2068656174206f76656e20746f20333530206465677265657320462e20537072617920382d696e6368207371756172652028322d71756172742920676c6173732062616b696e672064697368207769746820636f6f6b696e672073707261792e20496e20322d717561727420736175636570616e2c2073746972206d696c6b2c20666c6f75722c206d7573746172642c2073616c742c20626c61636b2070657070657220616e6420726564207065707065722077697468207769726520776869736b20756e74696c20736d6f6f74682e20436f6f6b206f766572206d656469756d20686561742c207374697272696e6720636f6e7374616e746c792c20756e74696c206d69787475726520626f696c7320616e6420746869636b656e732e2052656d6f76652066726f6d20686561742e205374697220696e2063686565736520756e74696c206d656c7465642e0d3c62723e0d3c62723e332e204164642063686565736520736175636520746f20636f6f6b6564206d616361726f6e693b206d69782077656c6c2e2053706f6f6e20696e746f2062616b696e6720646973682e0d3c62723e0d3c62723e342e2042616b6520323020746f203235206d696e75746573206f7220756e74696c2065646765732061726520627562626c792e0d3c62723e5469703a0d3c62723e4869676820416c7469747564652028333530302d36353030206674293a20496e207374657020342c2062616b6520323520746f203330206d696e757465732e0d3c62723e, 'side dish'),
(5, '"Be Mine" Lollipops', 0x38206f756e63657320206173736f72746564207265642c2070696e6b2c20616e642f6f7220636c65617220686172642063616e646965730d3c62723e333520746f20363020283220746f2033206f756e6365732920206173736f7274656420736d616c6c206465636f7261746976652063616e646965732c2073756368206173207265642063696e6e616d6f6e2063616e646965732c20736d616c6c206e6f6e70617265696c732c20636f6c6f7265642063616e6479206865617274732c2073706963652064726f70732c20616e642067756d64726f70730d3c62723e4c6f6c6c69706f7020737469636b730d3c62723e, 0x312e20506c61636520756e7772617070656420686172642063616e6469657320696e206120686561767920706c6173746963206261672c207468656e20706c61636520626167206f6e20746f70206f66206120666f6c64656420746f77656c20616e642063727573682063616e6469657320696e746f20736d616c6c206368756e6b7320776974682061206d656174206d616c6c6574206f7220736d616c6c2068616d6d65722e0d3c62723e0d3c62723e322e204d616b65206f6e6c792032206f722033206c6f6c6c69706f7073206174206f6e652074696d652e204c696e6520612062616b696e67207368656574207769746820666f696c3b206c696768746c79206772656173652074686520666f696c2e2055736520617070726f78696d6174656c7920312d312f3220746f2032207461626c6573706f6f6e73206f662074686520637275736865642063616e647920706572206c6f6c6c69706f7020616e6420706c616365206f6e20666f696c2e2043616e6479206c617965722073686f756c6420626520312f3420746f20312f3220696e636820746869636b2e2041646420736d616c6c206465636f7261746976652063616e6469657320746f20637275736865642063616e646965732e0d3c62723e0d3c62723e332e2042616b6520696e206120333530206465677265652046206f76656e20666f72203620746f2038206d696e75746573206f7220756e74696c2063616e646965732061726520636f6d706c6574656c79206d656c7465642e20436f6f6c203330207365636f6e64732e20517569636b6c7920617474616368206120737469636b20746f207468652062617365206f662065616368206c6f6c6c69706f702c207477697374696e672074686520737469636b20746f20636f766572206c6f6c6c69706f7020656e642077697468206d656c7465642063616e64792e20496620646573697265642c206361726566756c6c79207072657373206d6f726520736d616c6c2063616e6469657320696e746f20686f74206c6f6c6c69706f70732e20436f6f6c2e205065656c20666f696c2066726f6d206c6f6c6c69706f70732e2053746f72652c20636f76657265642c20696e206120636f6f6c2c2064727920706c61636520666f7220757020746f2031207765656b2e204d616b65732038206c6f6c6c69706f70732e2009, 'dessert'),
(6, 'Apple Martinis', 0x312020206f72616e67652c2063757420696e746f207765646765730d3c62723e202053756761720d3c62723e3320637570732020766f646b61206f722067696e0d3c62723e332f3420637570202066726f7a656e206170706c65206a7569636520636f6e63656e74726174652c207468617765640d3c62723e312f33206375702020647279207665726d6f7574680d3c62723e4963652063756265730d3c62723e4672657368206f72616e6765207065656c2074776973747320286f7074696f6e616c290d3c62723e, 0x312e20527562206f72616e6765207765646765732061726f756e64207468652072696d73206f66203132206d617274696e6920676c61737365732e204469702072696d7320696e746f20612064697368206f6620737567617220746f20636f61742072696d733b207365742061736964652e0d3c62723e0d3c62723e322e20496e2061207069746368657220636f6d62696e6520766f646b612c206170706c65206a7569636520636f6e63656e74726174652c20616e64207665726d6f7574682e20506c6163652069636520637562657320696e2061206d617274696e69207368616b65722e20466f722065616368206472696e6b2c2061646420312f3320637570206f6620746865207379727570206d6978747572653b207368616b652e2053747261696e20696e746f206f6e65206f6620746865207072657061726564206d617274696e6920676c61737365732e20496620646573697265642c206761726e6973682077697468206f72616e6765207065656c207477697374732e0d3c62723e0d3c62723e332e204d616b65732031322073657276696e67730d3c62723e0d3c62723e342e204f72616e6765204d617274696e69733a20507265706172652061732061626f76652c2065786365707420737562737469747574652036207461626c6573706f6f6e732066726f7a656e206f72616e6765206a7569636520636f6e63656e74726174652c207468617765642c20666f7220746865206170706c65206a7569636520636f6e63656e74726174652e204f6d697420746865206f72616e6765207065656c206761726e6973682e0d3c62723e, 'drink');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `email_address` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`email_address`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
