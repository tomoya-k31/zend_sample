-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- ホスト: localhost
-- 生成時間: 2012 年 3 月 15 日 03:26
-- サーバのバージョン: 5.5.9
-- PHP のバージョン: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `zend_sample`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `zend_test`
--

CREATE TABLE `zend_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- テーブルのデータをダンプしています `zend_test`
--

INSERT INTO `zend_test` VALUES(1, 'Paolo Nutine', 'Sunny Side Up');
INSERT INTO `zend_test` VALUES(2, 'Florence + The Machine', 'Lungs');
INSERT INTO `zend_test` VALUES(3, 'Massive Attack', 'Heligoland');
INSERT INTO `zend_test` VALUES(4, 'Andre Rieu', 'Forever Vienna');
INSERT INTO `zend_test` VALUES(5, 'Sade', 'Soldier of Love');
INSERT INTO `zend_test` VALUES(6, 'test_artist', 'test_title');
