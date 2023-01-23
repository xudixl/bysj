-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2021-04-25 21:00:15
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
-- 数据库： `data`
--

-- --------------------------------------------------------

--
-- 表的结构 `contribute`
--

CREATE TABLE `contribute` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(60) NOT NULL,
  `content` varchar(3000) NOT NULL,
  `fb_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `member`
--

CREATE TABLE `member` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `MD` varchar(50) NOT NULL,
  `log_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `member`
--

INSERT INTO `member` (`id`, `email`, `username`, `password`, `MD`, `log_time`) VALUES
(1, '135792468@qq.com', '小王', '135792468', 'b7d9e2e1fea3c1aa481c50a63dafde65', '2021-04-25 20:16:03'),
(2, '135792468@qq.com', '小艺', 'xudi101009', '36f9482f7b77281afa49cc6a973562f3', '2021-04-25 20:49:46'),
(3, '135792468@qq.com', '花花', '135792468', 'b7d9e2e1fea3c1aa481c50a63dafde65', '2021-04-25 20:55:55');

-- --------------------------------------------------------

--
-- 表的结构 `title`
--

CREATE TABLE `title` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `log_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `title`
--

INSERT INTO `title` (`id`, `name`, `url`, `username`, `log_time`) VALUES
(109, '朝代地图', 'map_login.php', '花花', '2021-04-25 20:56:39'),
(108, '朝代地图', 'map_login.php', '花花', '2021-04-25 20:56:25'),
(107, '四大发明详情页', 'detail_login.php', '花花', '2021-04-25 20:56:18'),
(106, '朝代地图', 'map_login.php', '小王', '2021-04-25 20:48:40'),
(105, '朝代地图', 'map_login.php', '小王', '2021-04-25 20:48:26'),
(104, '四大发明详情页', 'detail_login.php', '小王', '2021-04-25 20:48:17'),
(103, '四大发明详情页', 'detail_login.php', '小王', '2021-04-25 20:48:14');

--
-- 转储表的索引
--

--
-- 表的索引 `contribute`
--
ALTER TABLE `contribute`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `contribute`
--
ALTER TABLE `contribute`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用表AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `title`
--
ALTER TABLE `title`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
