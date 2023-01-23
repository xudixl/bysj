-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2022-06-08 22:00:55
-- 服务器版本： 5.7.26
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `article`
--

-- --------------------------------------------------------

--
-- 表的结构 `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `about`
--

INSERT INTO `about` (`id`, `title`, `content`) VALUES
(5, '企业宗旨', '诚信 爱国 创新\r\n我门要共同努力！'),
(6, '企业董事长', '许迪');

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- 表的结构 `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `site` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `suppot` varchar(255) NOT NULL,
  `nexttel` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `home` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `contact`
--

INSERT INTO `contact` (`id`, `site`, `tel`, `suppot`, `nexttel`, `fax`, `home`, `email`) VALUES
(4, '福建省福州市', '13312345678', '售后技术支持', '188123456789', '010-8812346', 'www.guanlixitong.com', '32112345@qq.com');

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `dep` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `dep`, `name`, `sex`, `work`) VALUES
(14, 15, '吴俊', '男', '技术员'),
(13, 15, '李家俊', '男', '技术员'),
(12, 16, '张臣杰', '男', '保洁');

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `imgname` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `goodtime` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`id`, `title`, `imgname`, `price`, `goodtime`) VALUES
(15, '郑楚天', '', '0', '2022-06-08 21:56:50'),
(16, '李家俊', '', '10', '2022-06-08 21:56:25'),
(17, '张臣杰', '', '5', '2022-06-08 21:56:32');

--
-- 转储表的索引
--

--
-- 表的索引 `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 使用表AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
