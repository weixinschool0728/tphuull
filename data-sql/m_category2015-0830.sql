-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 08 月 30 日 07:56
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `model_init`
--

-- --------------------------------------------------------

--
-- 表的结构 `m_category`
--

CREATE TABLE IF NOT EXISTS `m_category` (
  `cat_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(90) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `pid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `deleted` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '删除1 正常0',
  `grade` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`),
  KEY `parent_id` (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `m_category`
--

INSERT INTO `m_category` (`cat_id`, `cat_name`, `keywords`, `pid`, `sort_order`, `deleted`, `grade`) VALUES
(1, '策划师', '策划师', 0, 50, 0, 0),
(2, '司仪', '司仪', 0, 50, 0, 0),
(3, '摄像', '摄像', 0, 50, 0, 0),
(4, '摄影', '摄影', 0, 50, 0, 0),
(5, '车队', '车队', 0, 50, 0, 0),
(6, '跟妆', '跟妆', 0, 50, 0, 0),
(7, '布置', '布置', 0, 50, 0, 0),
(8, '演艺', '演艺', 0, 50, 0, 0),
(9, '舞美', '舞美', 0, 50, 0, 0),
(10, '酒店', '酒店', 0, 50, 0, 0),
(11, '喜铺', '喜铺', 0, 50, 0, 0),
(12, '男|女', '男|女', 1, 50, 0, 0),
(13, '500元', '500', 1, 50, 0, 0),
(14, '风格', '风格', 1, 50, 0, 0),
(15, '中式', '中式', 1, 50, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
