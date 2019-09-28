-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2019 年 9 月 28 日 15:40
-- サーバのバージョン： 5.7.26
-- PHP のバージョン: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `gs_db_test`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_an_table`
--

CREATE TABLE `gs_an_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `naiyou` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_an_table`
--

INSERT INTO `gs_an_table` (`id`, `name`, `email`, `naiyou`, `indate`) VALUES
(1, '山崎', 'test@jp', 'ないよ', '2019-09-21 16:17:18'),
(2, '山崎', 'test1@jp', 'ないよ', '2019-09-21 16:28:09'),
(3, '鈴木', 'test2@jp', 'ないよ', '2019-09-21 16:28:09'),
(4, '田中', 'test10@jp', 'ないよ', '2019-09-21 16:28:09'),
(5, '杉山', 'test20@jp', 'ないよ', '2019-09-21 16:28:09'),
(6, '児玉', 'test30@jp', 'ないよ', '2019-09-21 16:28:09'),
(7, 'lalaby', 'lalaby@test.com', 'hello,bro.whats upp??', '2019-09-21 17:42:14'),
(8, '山崎', 'test1@jp', 'ないよ', '2019-09-21 18:02:19'),
(9, '鈴木', 'test2@jp', 'ないよ', '2019-09-21 18:02:19'),
(10, '田中', 'test10@jp', 'ないよ', '2019-09-21 18:02:19'),
(11, '杉山', 'test20@jp', 'ないよ', '2019-09-21 18:02:19'),
(12, '児玉', 'test30@jp', 'ないよ', '2019-09-21 18:02:19'),
(13, 'susie', 'lalaby@test.com', '', '2019-09-21 18:18:33'),
(14, 'brad', 'lalaby@test.com', 'ssss', '2019-09-21 23:29:55'),
(15, 'susie', 'brapi@hotmail.com', 'hihihihi', '2019-09-21 23:31:41');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_an_table`
--
ALTER TABLE `gs_an_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `gs_an_table`
--
ALTER TABLE `gs_an_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
