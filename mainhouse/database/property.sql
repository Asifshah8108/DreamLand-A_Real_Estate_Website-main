-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 08:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `Admin_Name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `Admin_Password` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `mob_no` varchar(100) NOT NULL,
  `CreateDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `Admin_Name`, `admin_email`, `Admin_Password`, `dob`, `mob_no`, `CreateDate`) VALUES
(1, 'Ankush', 'ankush1109@gmail.com', '4ba29b9f9e5732ed33761840f4ba6c53', '2002-05-01', '9966554477', '2022-12-25 08:19:11'),
(2, 'Asif', 'asifshah12@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '2002-01-01', '9635412675', '2022-12-28 15:14:57');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile` int(10) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `FirstName`, `LastName`, `Email`, `Mobile`, `Message`, `useremail`, `createDate`) VALUES
(1, 'Mehak', 'Dhavan', 'mehak324@gmail.com', 2147483647, 'I saw one beautiful villa in your website and I send the request also but no reply is received so i am contacting you for my request pls reply as soon as possible...\r\n', 'singhankush1109@gmail.com', '2022-12-13 12:14:35'),
(3, 'John', 'Doe', 'johndoe12@gmail.com', 2147483647, 'Property', 'singhankush1109@gmail.com', '2023-04-24 07:51:51');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `pageName` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `detail` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `pageName`, `type`, `detail`) VALUES
(1, 'Terms and Conditions', 'Terms', '<h2><strong>Welcome to Makan - Real Estate!</strong></h2>\r\n\r\n<p>These terms and conditions outline the rules and regulations for the use of AA company\'s Website, located at http://localhost/mainhouse/.</p>\r\n\r\n<p>By accessing this website we assume you accept these terms and conditions. Do not continue to use Makan - Real Estate if you do not agree to take all of the terms and conditions stated on this page.</p>\r\n\r\n<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: \"Client\", \"You\" and \"Your\" refers to you, the person log on this website and compliant to the Company’s terms and conditions. \"The Company\", \"Ourselves\", \"We\", \"Our\" and \"Us\", refers to our Company. \"Party\", \"Parties\", or \"Us\", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>\r\n\r\n<h3><strong>Cookies</strong></h3>\r\n\r\n<p>We employ the use of cookies. By accessing Makan - Real Estate, you agreed to use cookies in agreement with the AA company\'s Privacy Policy. </p>\r\n\r\n<p>Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>\r\n\r\n<h3><strong>License</strong></h3>\r\n\r\n<p>Unless otherwise stated, AA company and/or its licensors own the intellectual property rights for all material on Makan - Real Estate. All intellectual property rights are reserved. You may access this from Makan - Real Estate for your own personal use subjected to restrictions set in these terms and conditions.</p>\r\n\r\n<p>You must not:</p>\r\n<ul>\r\n    <li>Republish material from Makan - Real Estate</li>\r\n    <li>Sell, rent or sub-license material from Makan - Real Estate</li>\r\n    <li>Reproduce, duplicate or copy material from Makan - Real Estate</li>\r\n    <li>Redistribute content from Makan - Real Estate</li>\r\n</ul>\r\n\r\n \r\n\r\n<p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. AA company does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of AA company,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, AA company shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>\r\n\r\n<p>AA company reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>\r\n\r\n<p>You warrant and represent that:</p>\r\n\r\n<ul>\r\n    <li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>\r\n    <li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>\r\n    <li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>\r\n    <li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>\r\n</ul>\r\n\r\n<p>You hereby grant AA company a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>\r\n\r\n<h3><strong>Hyperlinking to our Content</strong></h3>\r\n\r\n<p>The following organizations may link to our Website without prior written approval:</p>\r\n\r\n<ul>\r\n    <li>Government agencies;</li>\r\n    <li>Search engines;</li>\r\n    <li>News organizations;</li>\r\n    <li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>\r\n    <li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>\r\n</ul>\r\n\r\n<p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party’s site.</p>\r\n\r\n<p>We may consider and approve other link requests from the following types of organizations:</p>\r\n\r\n<ul>\r\n    <li>commonly-known consumer and/or business information sources;</li>\r\n    <li>dot.com community sites;</li>\r\n    <li>associations or other groups representing charities;</li>\r\n    <li>online directory distributors;</li>\r\n    <li>internet portals;</li>\r\n    <li>accounting, law and consulting firms; and</li>\r\n    <li>educational institutions and trade associations.</li>\r\n</ul>\r\n\r\n<p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of AA company; and (d) the link is in the context of general resource information.</p>\r\n\r\n<p>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party’s site.</p>\r\n\r\n<p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to AA company. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>\r\n\r\n<p>Approved organizations may hyperlink to our Website as follows:</p>\r\n\r\n<ul>\r\n    <li>By use of our corporate name; or</li>\r\n    <li>By use of the uniform resource locator being linked to; or</li>\r\n    <li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party’s site.</li>\r\n</ul>\r\n\r\n<p>No use of AA company\'s logo or other artwork will be allowed for linking absent a trademark license agreement.</p>\r\n\r\n<h3><strong>iFrames</strong></h3>\r\n\r\n<p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>\r\n\r\n<h3><strong>Content Liability</strong></h3>\r\n\r\n<p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>\r\n\r\n<h3><strong>Your Privacy</strong></h3>\r\n\r\n<p>Please read Privacy Policy</p>\r\n\r\n<h3><strong>Reservation of Rights</strong></h3>\r\n\r\n<p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it’s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>\r\n\r\n<h3><strong>Removal of links from our website</strong></h3>\r\n\r\n<p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>\r\n\r\n<p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>\r\n\r\n<h3><strong>Disclaimer</strong></h3>\r\n\r\n<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>\r\n\r\n<ul>\r\n    <li>limit or exclude our or your liability for death or personal injury;</li>\r\n    <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>\r\n    <li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>\r\n    <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>\r\n</ul>\r\n\r\n<p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>\r\n\r\n<p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>'),
(2, 'Privacy Policy', 'policy', '<p align=\"justify\">At Makan - Real Estate, accessible from http://localhost/mainhouse/, one of our main priorities is\n  the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded\n  by Makan - Real Estate and how we use it.</p>\n<p align=\"justify\">If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.\n</p>\n<p align=\"justify\">This Privacy Policy applies only to our online activities and is valid for visitors to our website\n  with regards to the information that they shared and/or collect in Makan - Real Estate. This policy is not applicable\n  to any information collected offline or via channels other than this website.\n<h2 align=\"justify\">Consent</h2>\n<p align=\"justify\">By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>\n<h2 align=\"justify\">Information we collect</h2>\n<p align=\"justify\">The personal information that you are asked to provide, and the reasons why you are asked to provide\n  it, will be made clear to you at the point we ask you to provide your personal information.</p>\n<p align=\"justify\">If you contact us directly, we may receive additional information about you such as your name, email address, phone\n  number, the contents of the message and/or attachments you may send us, and any other information you may choose to\n  provide.</p>\n<p align=\"justify\">When you register for an Account, we may ask for your contact information, including items such as\n  name, company name, address, email address, and telephone number.</p>\n<h2 align=\"justify\">How we use your information</h2>\n<p align=\"justify\">We use the information we collect in various ways, including to:</p>\n<ul>\n  <li style=\"text-align: justify;\">1. Provide, operate, and maintain our website</li>\n  <li style=\"text-align: justify;\">2. Improve, personalize, and expand our website</li>\n  <li style=\"text-align: justify;\">3. Understand and analyze how you use our website</li>\n  <li style=\"text-align: justify;\">4. Develop new products, services, features, and functionality</li>\n  <li style=\"text-align: justify;\">5. Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>\n  <li style=\"text-align: justify;\">6. Send you emails</li>\n  <li style=\"text-align: justify;\">7. Find and prevent fraud</li>\n</ul>\n<h2 align=\"justify\">Log Files</h2>\n<p>Makan - Real Estate follows a standard procedure of using log files. These files log visitors when they visit\n  websites. All hosting companies do this and a part of hosting services\' analytics. The information collected by log\n  files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp,\n  referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally\n  identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users\'\n  movement on the website, and gathering demographic information.</p>\n<h2 align=\"justify\">Advertising Partners Privacy Policies</h2>\n<p align=\"justify\">You may consult this list to find the Privacy Policy for each of the advertising partners of Makan - Real Estate.</p>\n<p align=\"justify\">Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in\n  their respective advertisements and links that appear on Makan - Real Estate, which are sent directly to users\'\n  browser. They automatically receive your IP address when this occurs. These technologies are used to measure the\n  effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites\n  that you visit.</p>\n<p align=\"justify\">Note that Makan - Real Estate has no access to or control over these cookies that are used by third-party\n  advertisers.</p>\n<h2 align=\"justify\">Third Party Privacy Policies</h2>\n<p align=\"justify\">Makan - Real Estate\'s Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to\n  consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include\n  their practices and instructions about how to opt-out of certain options. </p>\n<p align=\"justify\">You can choose to disable cookies through your individual browser options. To know more detailed information about\n  cookie management with specific web browsers, it can be found at the browsers\' respective websites.</p>\n<h2 align=\"justify\">CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>\n<p align=\"justify\">Under the CCPA, among other rights, California consumers have the right to:</p>\n<p align=\"justify\">Request that a business that collects a consumer\'s personal data disclose the categories and specific pieces of\n  personal data that a business has collected about consumers.</p>\n<p align=\"justify\">Request that a business delete any personal data about the consumer that a business has collected.</p>\n<p align=\"justify\">Request that a business that sells a consumer\'s personal data, not sell the consumer\'s personal data.</p>\n<p align=\"justify\">If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please\n  contact us.</p>\n<h2 align=\"justify\">GDPR Data Protection Rights</h2>\n<p align=\"justify\">We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the\n  following:</p>\n<p align=\"justify\">The right to access – You have the right to request copies of your personal data. We may charge you a small fee for\n  this service.</p>\n<p align=\"justify\">The right to rectification – You have the right to request that we correct any information you believe is inaccurate.\n  You also have the right to request that we complete the information you believe is incomplete.</p>\n<p align=\"justify\">The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</p>\n<p align=\"justify\">The right to restrict processing – You have the right to request that we restrict the processing of your personal\n  data, under certain conditions.</p>\n<p align=\"justify\">The right to object to processing – You have the right to object to our processing of your personal data, under\n  certain conditions.</p>\n<p align=\"justify\">The right to data portability – You have the right to request that we transfer the data that we have collected to\n  another organization, or directly to you, under certain conditions.</p>\n<p align=\"justify\">If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please\n  contact us.</p>\n<h2 align=\"justify\">Children\'s Information</h2>\n<p align=\"justify\">Another part of our priority is adding protection for children while using the internet. We encourage parents and\n  guardians to observe, participate in, and/or monitor and guide their online activity.</p>\n<p align=\"justify\">Makan - Real Estate does not knowingly collect any Personal Identifiable Information from children under the age of\n  13. If you think that your child provided this kind of information on our website, we strongly encourage you to\n  contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>'),
(3, 'Our Services', 'service', '<h2>1. Terms</h2>\r\n\r\n<p>By accessing this Website, accessible from http://localhost/mainhouse/, you are agreeing to be bound by these Website Terms and Conditions of Use and agree that you are responsible for the agreement with any applicable local laws. If you disagree with any of these terms, you are prohibited from accessing this site. The materials contained in this Website are protected by copyright and trade mark law.</p>\r\n\r\n<h2>2. Use License</h2>\r\n\r\n<p>Permission is granted to temporarily download one copy of the materials on AA company\'s Website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:</p>\r\n\r\n<ul>\r\n    <li>modify or copy the materials;</li>\r\n    <li>use the materials for any commercial purpose or for any public display;</li>\r\n    <li>attempt to reverse engineer any software contained on AA company\'s Website;</li>\r\n    <li>remove any copyright or other proprietary notations from the materials; or</li>\r\n    <li>transferring the materials to another person or \"mirror\" the materials on any other server.</li>\r\n</ul>\r\n\r\n<h2>3. Disclaimer</h2>\r\n\r\n<p>All the materials on AA company’s Website are provided \"as is\". AA company makes no warranties, may it be expressed or implied, therefore negates all other warranties. Furthermore, AA company does not make any representations concerning the accuracy or reliability of the use of the materials on its Website or otherwise relating to such materials or any sites linked to this Website.</p>\r\n\r\n<h2>4. Limitations</h2>\r\n\r\n<p>AA company or its suppliers will not be hold accountable for any damages that will arise with the use or inability to use the materials on AA company’s Website, even if AA company or an authorize representative of this Website has been notified, orally or written, of the possibility of such damage. Some jurisdiction does not allow limitations on implied warranties or limitations of liability for incidental damages, these limitations may not apply to you.</p>\r\n\r\n<h2>5. Revisions and Errata</h2>\r\n\r\n<p>The materials appearing on AA company’s Website may include technical, typographical, or photographic errors. AA company will not promise that any of the materials in this Website are accurate, complete, or current. AA company may change the materials contained on its Website at any time without notice. AA company does not make any commitment to update the materials.</p>\r\n\r\n<h2>6. Links</h2>\r\n\r\n<p>AA company has not reviewed all of the sites linked to its Website and is not responsible for the contents of any such linked site. The presence of any link does not imply endorsement by AA company of the site. The use of any linked website is at the user’s own risk.</p>\r\n\r\n<h2>7. Site Terms of Use Modifications</h2>\r\n\r\n<p>AA company may revise these Terms of Use for its Website at any time without prior notice. By using this Website, you are agreeing to be bound by the current version of these Terms and Conditions of Use.</p>\r\n\r\n<h2>8. Your Privacy</h2>\r\n\r\n<p>Please read our Privacy Policy.</p>\r\n\r\n<h2>9. Governing Law</h2>\r\n\r\n<p>Any claim related to AA company\'s Website shall be governed by the laws of in without regards to its conflict of law provisions.</p>'),
(4, 'Cookies', 'cookies', '<h1 align=\"justify\">Cookie Policy for Makan - Real Estate</h1>  <p align=\"justify\">This is the Cookie Policy for Makan - Real Estate, accessible from http://localhost/mainhouse/</p>  <p align=\"justify\"><strong>What Are Cookies</strong></p>  <p align=\"justify\">As is common practice with almost all professional websites this site uses cookies, which are tiny files that are downloaded to your computer, to improve your experience. This page describes what information they gather, how we use it and why we sometimes need to store these cookies. We will also share how you can prevent these cookies from being stored however this may downgrade or \'break\' certain elements of the sites functionality.</p>  <p align=\"justify\"><strong>How We Use Cookies</strong></p>  <p align=\"justify\">We use cookies for a variety of reasons detailed below. Unfortunately in most cases there are no industry standard options for disabling cookies without completely disabling the functionality and features they add to this site. It is recommended that you leave on all cookies if you are not sure whether you need them or not in case they are used to provide a service that you use.</p>  <p align=\"justify\"><strong>Disabling Cookies</strong></p>  <p align=\"justify\">You can prevent the setting of cookies by adjusting the settings on your browser (see your browser Help for how to do this). Be aware that disabling cookies will affect the functionality of this and many other websites that you visit. Disabling cookies will usually result in also disabling certain functionality and features of the this site. Therefore it is recommended that you do not disable cookies.</p> <p align=\"justify\"><strong>The Cookies We Set</strong></p>  <ul>  <li style=\"text-align: justify;\">     <p align=\"justify\">Account related cookies</p>     <p align=\"justify\">If you create an account with us then we will use cookies for the management of the signup process and general administration. These cookies will usually be deleted when you log out however in some cases they may remain afterwards to remember your site preferences when logged out.</p> </li>  <li style=\"text-align: justify;\">     <p align=\"justify\">Login related cookies</p>     <p align=\"justify\">We use cookies when you are logged in so that we can remember this fact. This prevents you from having to log in every single time you visit a new page. These cookies are typically removed or cleared when you log out to ensure that you can only access restricted features and areas when logged in.</p> </li>   <li style=\"text-align: justify;\">     <p align=\"justify\">Orders processing related cookies</p>     <p align=\"justify\">This site offers e-commerce or payment facilities and some cookies are essential to ensure that your order is remembered between pages so that we can process it properly.</p> </li>   <li style=\"text-align: justify;\">     <p align=\"justify\">Forms related cookies</p>     <p align=\"justify\">When you submit data to through a form such as those found on contact pages or comment forms cookies may be set to remember your user details for future correspondence.</p> </li>   </ul>  <p align=\"justify\"><strong>Third Party Cookies</strong></p>  <p align=\"justify\">In some special cases we also use cookies provided by trusted third parties. The following section details which third party cookies you might encounter through this site.</p>  <ul>  <li style=\"text-align: justify;\">     <p align=\"justify\">This site uses Google Analytics which is one of the most widespread and trusted analytics solution on the web for helping us to understand how you use the site and ways that we can improve your experience. These cookies may track things such as how long you spend on the site and the pages that you visit so we can continue to produce engaging content.</p>     <p align=\"justify\">For more information on Google Analytics cookies, see the official Google Analytics page.</p> </li>          </ul>  <p align=\"justify\"><strong>More Information</strong></p>  <p align=\"justify\">Hopefully that has clarified things for you and as was previously mentioned if there is something that you aren\'t sure whether you need or not it\'s usually safer to leave cookies enabled in case it does interact with one of the features you use on our site.</p>  <p align=\"justify\">However if you are still looking for more information then you can contact us through one of our preferred contact methods:</p>  <ul> <li style=\"text-align: justify;\">Email: loremipsum@gmail.com</li>  </ul>'),
(5, 'About Us', 'about', '<p>We are the students persuing BCA this is our final year project.</p>\r\n<p>We decided this topic because recently we were facing issues of buying and selling of property and this though created an idea of creating this project.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `post_personal`
--

CREATE TABLE `post_personal` (
  `id` int(11) NOT NULL,
  `Full_name` varchar(100) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `Person_Email` varchar(100) NOT NULL,
  `mobileno` int(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `houses_id` int(100) NOT NULL,
  `postDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_personal`
--

INSERT INTO `post_personal` (`id`, `Full_name`, `DOB`, `Person_Email`, `mobileno`, `gender`, `occupation`, `houses_id`, `postDate`) VALUES
(1, 'Ravendra', '2000-02-10', 'ravendra@gmail', 2147483647, 'Male', 'Worker', 0, '2022-12-24 09:45:15');

-- --------------------------------------------------------

--
-- Table structure for table `propertytypes`
--

CREATE TABLE `propertytypes` (
  `id` int(11) NOT NULL,
  `ptypes` varchar(120) NOT NULL,
  `creationdate` timestamp NULL DEFAULT current_timestamp(),
  `updatedate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `propertytypes`
--

INSERT INTO `propertytypes` (`id`, `ptypes`, `creationdate`, `updatedate`) VALUES
(1, 'Appartment', '2022-12-04 10:45:23', NULL),
(2, 'Home', '2022-12-04 10:46:02', NULL),
(3, 'Flat', '2022-12-04 10:46:02', NULL),
(4, 'Villa', '2022-12-04 10:46:02', NULL),
(5, 'Shop', '2022-12-04 10:46:02', NULL),
(6, 'TownHouse', '2022-12-04 10:46:02', NULL),
(7, 'Office', '2023-01-01 09:16:23', NULL),
(8, 'Garage', '2023-01-01 09:16:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `saved`
--

CREATE TABLE `saved` (
  `s_Id` int(11) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `houses_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saved`
--

INSERT INTO `saved` (`s_Id`, `userEmail`, `houses_id`) VALUES
(8, 'singhankush1109@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookings`
--

CREATE TABLE `tbl_bookings` (
  `b_Id` int(11) NOT NULL,
  `requestNo` bigint(12) DEFAULT NULL,
  `useremail` varchar(100) NOT NULL,
  `bkid` int(11) NOT NULL,
  `houseName` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `PhoneNo` int(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UptoDate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bookings`
--

INSERT INTO `tbl_bookings` (`b_Id`, `requestNo`, `useremail`, `bkid`, `houseName`, `Name`, `PhoneNo`, `Email`, `Message`, `status`, `createDate`, `UptoDate`) VALUES
(1, 817641710, 'singhankush1109@gmail.com', 8, 'Oberoi Villa', 'Vivek', 2147483647, 'vivek@gmail.com', 'I am vivek oberoi giving this property to sallu bhai', 2, '2023-01-01 11:48:22', '2023-01-31 15:23:48'),
(2, 935943898, 'singhankush1109@gmail.com', 9, 'Gaiety Galaxy', 'Ankush', 2147483647, 'ankush@gmail.com', 'I love this villa', 0, '2023-01-01 11:48:52', '2023-01-01 11:48:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_houses`
--

CREATE TABLE `tbl_houses` (
  `t_Id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pimg1` varchar(100) NOT NULL,
  `pimg2` varchar(100) NOT NULL,
  `pimg3` varchar(100) NOT NULL,
  `pimg4` varchar(100) NOT NULL,
  `pimg5` varchar(100) NOT NULL,
  `furnish_status` varchar(100) NOT NULL,
  `BHK` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `location_url` varchar(999) NOT NULL,
  `pcapacity` int(100) NOT NULL,
  `ptype` int(11) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `availabilty` int(11) NOT NULL,
  `Sqft` varchar(10000) NOT NULL,
  `btype` varchar(100) NOT NULL,
  `plocation` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `parea` varchar(100) NOT NULL,
  `floorno` int(11) NOT NULL,
  `pAge` int(15) NOT NULL,
  `totalroom` int(11) NOT NULL,
  `Bedrooms` int(11) NOT NULL,
  `LivingRoom` int(11) NOT NULL,
  `Kitchen` int(11) NOT NULL,
  `Bathroom` int(11) NOT NULL,
  `cameras` int(11) DEFAULT NULL,
  `wifi` int(11) DEFAULT NULL,
  `gym` int(11) DEFAULT NULL,
  `pool` int(11) DEFAULT NULL,
  `elevator` int(11) DEFAULT NULL,
  `airconditioner` int(11) DEFAULT NULL,
  `balcony` int(11) DEFAULT NULL,
  `parks` int(11) DEFAULT NULL,
  `clubhouse` int(11) DEFAULT NULL,
  `dogpark` int(11) DEFAULT NULL,
  `garage` int(11) DEFAULT NULL,
  `total_amenities` int(11) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_houses`
--

INSERT INTO `tbl_houses` (`t_Id`, `pname`, `pimg1`, `pimg2`, `pimg3`, `pimg4`, `pimg5`, `furnish_status`, `BHK`, `description`, `location_url`, `pcapacity`, `ptype`, `price`, `availabilty`, `Sqft`, `btype`, `plocation`, `country`, `state`, `city`, `parea`, `floorno`, `pAge`, `totalroom`, `Bedrooms`, `LivingRoom`, `Kitchen`, `Bathroom`, `cameras`, `wifi`, `gym`, `pool`, `elevator`, `airconditioner`, `balcony`, `parks`, `clubhouse`, `dogpark`, `garage`, `total_amenities`, `RegDate`, `UpdationDate`) VALUES
(1, 'Demon vila', 'castle1.jpg', 'castle3.png', 'castle5.jpeg', 'castle41.jpg', 'castle3.png', 'Furnished', 5, '<p>this is the house of famous anime demon slayer character yorichi he is the legend and the inventor of sun breathing.</p>\r\n<p>&nbsp;</p>', '', 0, 1, '2 Lakh', 0, '24600000000', 'Sale', 'demon valley', 'japan', 'entertainment district arc', 'kajakistan', '', 15, 1000, 999, 999, 999, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, '2022-12-04 12:41:36', '2023-01-01 11:17:42'),
(2, 'Vanilla Resort', 'property-1.jpg', 'property-2.jpg', 'property-3.jpg', 'property-4.jpg', 'property-5.jpg', '', 0, 'This property is near lakeside with a beautiful sideview and it has good looks through the balcony.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60446.629541547416!2d73.37670325517784!3d18.757362591391264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be801098bdf8145%3A0x696b4a60a5e28658!2sLonavala%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1670241511747!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 4, 3, '25000', 1, '4000', 'rent', 'Paris', 'Paris', '', 'Creitiel', '', 0, 10, 0, 4, 0, 0, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, '2022-12-04 12:41:36', '2022-12-31 07:34:34'),
(3, 'Plaza Town', 'property-1.jpg', 'property-2.jpg', 'property-3.jpg', 'house-1.png', 'property-5.jpg', '', 0, '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9555256.44048097!2d-13.429650327648346!3d54.21856353646619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x25a3b1142c791a9%3A0xc4f8a0433288257a!2sUnited%20Kingdom!5e0!3m2!1sen!2sin!4v1670241097728!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 3, 1, '95000', 1, '5120', 'rent', 'Lonava', 'India', '', 'Pune', '', 0, 25, 0, 3, 0, 0, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, '2022-12-05 07:32:48', '2022-12-27 13:43:24'),
(4, 'Pan Tapri', 'property-1.jpg', 'property-2.jpg', 'property-3.jpg', 'property-4.jpg', 'property-5.jpg', '', 0, '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.201200462732!2d72.8318490148195!3d18.92248638717619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d1684a08e4c5%3A0x783a5ec96eda8bea!2sTaj%20Hotel%20view%20point!5e0!3m2!1sen!2sin!4v1670251710177!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 3, 5, '2000', 1, '2700', 'sale', 'San Franciso', 'United States', '', 'California', '', 0, 20, 0, 2, 0, 0, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, '2022-12-05 14:49:28', '2022-12-27 13:43:31'),
(5, 'Dharavi Colony', 'property-1.jpg', '', '', '', '', '', 0, '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15085.54437018795!2d72.8486317777998!3d19.046754993673634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8d72abf2d35%3A0x5ba0b162df2aa82e!2sDharavi%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1670251932352!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 5, 2, '25000', 1, '2000', 'sale', '25 Mavan', '', '', '', '', 0, 18, 0, 3, 0, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-12-05 14:52:57', '2022-12-27 13:40:26'),
(6, 'Mango Vila', 'property-2.jpg', '', '', '', '', '', 0, '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120898.38853016793!2d73.35511811640626!3d18.75020270000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2ab27c2faca59%3A0x29e1b24f6ad7a3f6!2sMango%20Villa!5e0!3m2!1sen!2sin!4v1670252085770!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 8, 4, '50000', 0, '8000', 'rent', 'Malavi', '', '', '', '', 0, 0, 0, 2, 0, 0, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-12-05 14:55:50', '2022-12-09 17:21:17'),
(7, 'Mehak Shop', 'property-5.jpg', '', '', '', '', '', 0, '', '', 5, 5, '8000', 0, '3000', 'rent', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-12-09 15:49:41', '2022-12-27 14:33:26'),
(8, 'Oberoi Villa', 'property-3.jpg', 'house-2.png', 'property-5.jpg', 'house-5.png', 'property-1.jpg', 'Furnished', 5, '', '', 0, 4, '5000000', 0, '5000 sqft', 'Sale', 'Versova,Andheri', 'India', 'Maharashtra', 'Mumbai', '', 10, 15, 2, 2, 2, 2, 2, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, '2022-12-22 16:37:46', '2022-12-31 07:39:40'),
(9, 'Gaiety Galaxy', '6f0262630e56b36c21b11cfe9ae582ed.jpg', '926c49647c090f1b6505248747c9cca6.jpg', '6ed1f0b30bb0de11fb89e4591f901149.jpg', 'e7e44edc4970235215fccaacf2ccbd51.jpg', 'a727f58b9bb30190cbba7e8996781a21.jpg', 'Furnished', 5, '', '', 0, 2, '400000000', 0, '40000', 'Sale', 'Bandra Worli Sea Link', 'India', 'Maharashtra', 'Mumbai', '', 5, 20, 0, 5, 3, 2, 5, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 0, 0, '2022-12-29 11:45:24', '2023-01-01 09:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `review_id` int(11) NOT NULL,
  `hid` int(100) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `mail` varchar(100) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`review_id`, `hid`, `user_name`, `user_rating`, `user_review`, `mail`, `datetime`) VALUES
(1, 1, 'Yuvraj', 4, 'I like the house and the structure of house is good', 'singhankush1109@gmail.com', '2023-01-01 11:10:27'),
(2, 1, 'Vivek', 3, 'Spent three days with a group of 10. The accommodation, staff and facilities were excellent. The staff were very friendly and helpful, ensuring that our stay was one of the best during our visit to India.', '', '2023-01-01 11:11:25'),
(3, 1, 'Sahil', 4, 'Really friendly and helpful hosts. Very accommodating and a few extra touches added to the stay. Lots of helpful tips and stops advised during our stay, which we would have missed out on! The room we were given exceeded our expectations too!', '', '2023-01-01 11:11:58'),
(4, 2, 'Anonymous', 4, 'Property was located near to Douro River where I could see the River view from the room windows, amazing! Room was clean and amenities available in room met my expectations. Monica was friendly and inviting. I’m glad I’ve stayed in Top Flat during my stay in Porto.', '', '2023-01-01 11:12:32'),
(5, 3, 'Amit', 1, 'I loved this website so much', 'asif12@gmail.com', '2023-01-01 11:13:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `Contact No` int(100) NOT NULL,
  `DOB` varchar(50) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `code`, `image`, `Contact No`, `DOB`, `Address`, `City`, `Country`, `RegDate`, `UpdationDate`) VALUES
(1, 'Ankush Singh', 'singhankush1109@gmail.com', '4ba29b9f9e5732ed33761840f4ba6c53', '', 'Ankush Singh - 2022.12.03 - 04.09.49pm.jpg', 2147483647, '11/09/2002', 'Andheri', 'Mumbai', 'India', '2022-11-26 16:54:26', '2022-12-28 12:44:28'),
(18, 'Asif', 'asif12@gmail.com', '4cf63499fe11022e443f2d4bcbe056a6', '', '', 0, NULL, NULL, '', '', '2022-12-31 07:11:01', '2022-12-31 07:11:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_personal`
--
ALTER TABLE `post_personal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propertytypes`
--
ALTER TABLE `propertytypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saved`
--
ALTER TABLE `saved`
  ADD PRIMARY KEY (`s_Id`);

--
-- Indexes for table `tbl_bookings`
--
ALTER TABLE `tbl_bookings`
  ADD PRIMARY KEY (`b_Id`);

--
-- Indexes for table `tbl_houses`
--
ALTER TABLE `tbl_houses`
  ADD PRIMARY KEY (`t_Id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post_personal`
--
ALTER TABLE `post_personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `propertytypes`
--
ALTER TABLE `propertytypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `saved`
--
ALTER TABLE `saved`
  MODIFY `s_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_bookings`
--
ALTER TABLE `tbl_bookings`
  MODIFY `b_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_houses`
--
ALTER TABLE `tbl_houses`
  MODIFY `t_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
