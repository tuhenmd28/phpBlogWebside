-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 06:45 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `addpage`
--

CREATE TABLE `addpage` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addpage`
--

INSERT INTO `addpage` (`id`, `name`, `body`) VALUES
(1, 'About  Us', '<p><strong><span style=\"font-size: medium;\">About Us page</span></strong></p>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>&nbsp;</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n<p>&nbsp;</p>'),
(2, 'Products', '<h1><span style=\"font-size: medium; font-family: \'arial black\', \'avant garde\';\"><strong>Products page</strong></span></h1>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n<p><span style=\"font-size: medium; font-family: \'arial black\', \'avant garde\';\"><strong><br /></strong></span></p>'),
(14, 'Privacy ', '<p>Privacy page</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cras ornare arcu dui vivamus. Sed enim ut sem viverra aliquet. Sociis natoque penatibus et magnis dis parturient montes nascetur. Nec sagittis aliquam malesuada bibendum. Mi sit amet mauris commodo quis imperdiet massa tincidunt nunc. Mi eget mauris pharetra et ultrices neque. Placerat duis ultricies lacus sed turpis tincidunt id. Sit amet est placerat in egestas erat imperdiet. Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum. Purus faucibus ornare suspendisse sed nisi. Lobortis feugiat vivamus at augue eget arcu dictum varius. Quis hendrerit dolor magna eget est lorem. Urna et pharetra pharetra massa massa ultricies mi. Rhoncus mattis rhoncus urna neque viverra. Eget egestas purus viverra accumsan in nisl nisi.</p>\r\n<p>Mattis vulputate enim nulla aliquet porttitor lacus. Aliquam ultrices sagittis orci a scelerisque purus semper. Ultrices dui sapien eget mi proin. Facilisis magna etiam tempor orci eu lobortis. Sit amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Porta nibh venenatis cras sed felis eget velit. Adipiscing diam donec adipiscing tristique risus nec feugiat in. Suscipit tellus mauris a diam maecenas sed. Venenatis a condimentum vitae sapien. Elementum nibh tellus molestie nunc non blandit. Fames ac turpis egestas maecenas pharetra.</p>\r\n<p>Bibendum ut tristique et egestas quis ipsum suspendisse ultrices. Odio aenean sed adipiscing diam donec. Arcu non sodales neque sodales ut etiam sit. Ut sem viverra aliquet eget. Aliquet sagittis id consectetur purus ut faucibus pulvinar elementum integer. Posuere lorem ipsum dolor sit amet. Quam pellentesque nec nam aliquam sem et tortor. Sed vulputate odio ut enim blandit. Feugiat scelerisque varius morbi enim nunc faucibus. Cras fermentum odio eu feugiat. Felis bibendum ut tristique et. Tristique senectus et netus et malesuada fames ac. Aliquet lectus proin nibh nisl condimentum id venenatis a. Est pellentesque elit ullamcorper dignissim cras. Nunc id cursus metus aliquam eleifend. Urna duis convallis convallis tellus id interdum velit laoreet id.</p>\r\n<p>Neque volutpat ac tincidunt vitae. Nibh praesent tristique magna sit amet purus gravida quis. Non blandit massa enim nec dui nunc mattis enim ut. Tincidunt augue interdum velit euismod in pellentesque massa placerat duis. Convallis tellus id interdum velit laoreet id donec. Elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at augue. Et ligula ullamcorper malesuada proin libero nunc consequat interdum. Turpis nunc eget lorem dolor. Nibh venenatis cras sed felis eget velit aliquet sagittis id. Sit amet est placerat in. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Congue eu consequat ac felis donec et.</p>\r\n<p>Lorem dolor sed viverra ipsum. Fermentum odio eu feugiat pretium nibh ipsum consequat nisl vel. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Congue eu consequat ac felis donec et. Ac turpis egestas integer eget. Urna id volutpat lacus laoreet non curabitur. Placerat in egestas erat imperdiet sed. Nam aliquam sem et tortor consequat id. Nunc consequat interdum varius sit. Volutpat blandit aliquam etiam erat velit scelerisque in. Sed augue lacus viverra vitae congue eu consequat ac. Quis commodo odio aenean sed adipiscing diam donec adipiscing tristique. Proin fermentum leo vel orci porta. Mauris commodo quis imperdiet massa tincidunt nunc pulvinar. Cras pulvinar mattis nunc sed blandit libero volutpat sed. Leo vel fringilla est ullamcorper eget nulla facilisi etiam. Ante in nibh mauris cursus mattis molestie a iaculis at. Mauris ultrices eros in cursus turpis. Diam sollicitudin tempor id eu nisl nunc mi ipsum faucibus. Sit amet justo donec enim.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `valid` int(11) NOT NULL COMMENT '0=Delete,1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `valid`) VALUES
(1, 'Java', 1),
(2, 'PHH', 1),
(3, 'HTML ', 1),
(4, 'CSS', 1),
(5, 'javaScript', 1),
(6, 'C++', 1),
(10, 'Go', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `body` text NOT NULL,
  `status` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `email`, `body`, `status`, `date`) VALUES
(22, 'Md Mehedi', 'Hasan', 'tuhenmddd28@gmail.com', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from.....', 0, '2022-03-07 05:51:30'),
(24, 'Md', 'Sakil', 'mdomit64@gmail.com', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a', 1, '2022-03-07 06:45:26'),
(25, 'Md', 'Sohag', 'mmd748904@gmail.com', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from', 0, '2022-03-07 07:40:51'),
(27, 'Md Mohibul', 'Islam', 'mmd748904@gmail.com', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from', 1, '2022-03-07 07:41:34'),
(28, 'Md Mohibul', 'Islam', 'mmd748904@gmail.com', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from', 1, '2022-03-07 07:53:07'),
(29, 'Md', 'Anik', 'tuhenmddd28@gmail.com', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from.....', 0, '2022-03-07 08:33:52');

-- --------------------------------------------------------

--
-- Table structure for table `copyrightfooter`
--

CREATE TABLE `copyrightfooter` (
  `id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `copyrightfooter`
--

INSERT INTO `copyrightfooter` (`id`, `text`) VALUES
(1, 'Copyright Training with live project.');

-- --------------------------------------------------------

--
-- Table structure for table `logotitle`
--

CREATE TABLE `logotitle` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logotitle`
--

INSERT INTO `logotitle` (`id`, `logo`, `title`, `description`) VALUES
(7, 'uploade/logo.png', 'Programing Blog Webside', ' Learn and share your knowledge');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `valid` int(11) NOT NULL COMMENT '0=Delete,1=Active\r\n',
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `cat`, `title`, `body`, `image`, `author`, `tags`, `date`, `valid`, `userid`) VALUES
(21, 3, 'My html post here', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'uploade/10391e489c.jpg', 'Admin', 'html,html markup language,html codding', '2022-03-03 09:30:34', 1, 8),
(22, 1, 'My Java Post Title ', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'uploade/a26ad7a019.jpg', 'Admin', 'java,java programer,java codding', '2022-03-03 09:36:04', 1, 8),
(23, 5, 'My JavaScript Post Title Here', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'uploade/7c61426e99.png', 'Admin', 'javaScript ,javaScript Programer,javascript codding', '2022-03-03 09:39:16', 1, 8),
(25, 1, 'My Java Post Title Here', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'uploade/b502f21abb.jpeg', 'Author', 'java,java programer', '2022-03-03 09:41:56', 1, 6),
(26, 5, 'My javaScript Post Title ', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'uploade/6307b78819.jpg', 'Author', 'javaScript ,javaScript Programer', '2022-03-03 09:47:35', 1, 6),
(27, 2, 'My New PHP Post', '<p>New php post to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'uploade/a3d6059ec3.png', 'Author', 'php,php programer,php codding', '2022-03-03 09:49:57', 1, 6),
(28, 4, 'My CSS Post Title ', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'uploade/c79259f46e.png', 'Editor', 'css,css style sheet', '2022-03-03 09:51:57', 1, 10),
(29, 2, 'My PHP Post Title Here', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'uploade/96ea7e7477.png', 'Editor', 'php,php programer', '2022-03-03 09:53:22', 1, 10),
(30, 2, 'My PHP Post Title Here', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'uploade/36d2791169.jpg', 'Editor', 'php,php programer', '2022-03-03 09:54:34', 1, 10),
(31, 1, 'Java Post Title Here', ' <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'uploade/3cce563eb8.jpg', 'Md Mehedi hasan Tuhen ', 'java,java programer', '2022-03-03 09:55:43', 1, 0),
(32, 4, 'NEW CSS POST ', ' <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', 'uploade/c153abdfba.jpg', 'Md Tuhen ', 'css,css style sheet', '2022-03-04 11:35:18', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sliderimage`
--

CREATE TABLE `sliderimage` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliderimage`
--

INSERT INTO `sliderimage` (`id`, `title`, `image`, `link`) VALUES
(8, 'Slider Image ', 'uploade/a46e5cb833.jpg', ''),
(9, 'Slider Image', 'uploade/27aa4dc43a.jpg', ''),
(10, 'Slider Image', 'uploade/3e7bb2ae08.jpg', ''),
(12, 'new Image update', 'uploade/bee4c0d516.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `googleplus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `facebook`, `twitter`, `linkedin`, `googleplus`) VALUES
(1, 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.linkedin.com', 'https://www.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` int(11) NOT NULL,
  `theme` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `theme`) VALUES
(1, 'green');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `details` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `userName`, `password`, `email`, `details`, `role`) VALUES
(6, 'Md Rana', 'Author', '202cb962ac59075b964b07152d234b70', 'mdomit64@gmail.com', '<p>some text</p>', 2),
(8, 'Md. Mehedi Hasan', 'Admin', '827ccb0eea8a706c4c34a16891f84e7b', 'tuhenmddd28@gmail.com', '<p>some text writing here</p>', 1),
(10, 'Md Omit Hasan', 'Editor', '81dc9bdb52d04dc20036dbd8313ed055', 'mmd748904@gmail.com', '<p>some text writing here</p>', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addpage`
--
ALTER TABLE `addpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copyrightfooter`
--
ALTER TABLE `copyrightfooter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logotitle`
--
ALTER TABLE `logotitle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliderimage`
--
ALTER TABLE `sliderimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addpage`
--
ALTER TABLE `addpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `copyrightfooter`
--
ALTER TABLE `copyrightfooter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logotitle`
--
ALTER TABLE `logotitle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `sliderimage`
--
ALTER TABLE `sliderimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
