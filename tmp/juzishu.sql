-- MySQL dump 10.13  Distrib 5.5.28, for Linux (x86_64)
--
-- Host: localhost    Database: juzishu
-- ------------------------------------------------------
-- Server version	5.5.28-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `eps_article`
--

DROP TABLE IF EXISTS `eps_article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eps_article` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `keywords` varchar(150) NOT NULL,
  `summary` text NOT NULL,
  `content` text NOT NULL,
  `source` enum('original','copied','translational') NOT NULL,
  `copySite` varchar(60) NOT NULL,
  `copyURL` varchar(255) NOT NULL,
  `author` varchar(60) NOT NULL,
  `editor` varchar(60) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'normal',
  `type` varchar(30) NOT NULL,
  `views` mediumint(5) unsigned NOT NULL DEFAULT '0',
  `sticky` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `order` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order` (`order`),
  KEY `views` (`views`),
  KEY `sticky` (`sticky`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eps_article`
--

LOCK TABLES `eps_article` WRITE;
/*!40000 ALTER TABLE `eps_article` DISABLE KEYS */;
INSERT INTO `eps_article` VALUES (1,'心茶','','','','<p>前几日，为赶文稿埋头电脑中，一抬头天色微明，6点03分友人微信上传梅花图片。清晨，世纪公园的梅花还带着微微霜冻，清新、疏朗，萌动；看得人心一动儿一动儿的。透过梅图好像还看到友人那张自信、灿烂的笑脸。 <br />\n<img src=\"/juzishu/www/data/upload/201407/f_29e0828e069d563e495c716045640183.jpeg\" alt=\"\" /><br />\n<br />\n世纪公园，我住了四年的地方，但从未在清晨看过它的景色，无论是春暖花开、冬日雨雪。都说：年年岁岁花相似，岁岁年年人不同，其实说的不仅仅是时光、人，还有人心。。。同一时光相同的景致相同的人，心不同人亦不同。因为你总是在繁忙中忽略了身边最美的、最常见景色。 <br />\n<br />\n<img src=\"/juzishu/www/data/upload/201407/f_16080e90604954245f63766a25f80b37.jpg\" alt=\"\" /><br />\n在繁忙中选择让自己静下来，看看就在身边的景致：静心、观察、领悟，让心静下来，柔软温暖起来。走出来，如果你是事业有成的职场精英，不要宅在家\n中；走出来，如果你是学海中苦读的学子，不要再做低头族；走出来，如果你是有压抑感的“芯片孩子”，离开宅中的电视、放下手机的微信、移开手指中的电脑游\n戏，走出来，世纪公园来，3月8日上午10点，橘子树联盟的春季“梅花茶会”等着您。 <br />\n<br />\n<br />\n带一本书走一走，看看梅花、观观茶席、喝喝茶、听听诗、或选者坐一坐读读书，这样的日子美若天堂。 <br />\n<br />\n<br />\n来吧，十五位茶人、十五席赏心悦目的茶席等着你，为您奉上春日里的第一杯茶，温暖、清新、鲜爽、多情。。。，如果你喜欢，只需要在花雨缤纷的绿地\n上，捡起一朵梅花，轻轻投入茶席的清水盂中，表示一分春日的谢意。。。还有天心明月禅茶表演、民乐演奏、古诗配乐朗诵、茶席泡茶斗茶</p>','original','','','','admin','2014-07-19 22:38:00','2014-07-20 00:13:00','normal','page',20,'0',0),(2,'道德经','','','','<p>前几日，为赶文稿埋头电脑中，一抬头天色微明，6点03分友人微信上传梅花图片。清晨，世纪公园的梅花还带着微微霜冻，清新、疏朗，萌动；看得人心一动儿一动儿的。透过梅图好像还看到友人那张自信、灿烂的笑脸。 <br />\n<img src=\"/juzishu/www/data/upload/201407/f_29e0828e069d563e495c716045640183.jpeg\" alt=\"\" /><br />\n<br />\n世纪公园，我住了四年的地方，但从未在清晨看过它的景色，无论是春暖花开、冬日雨雪。都说：年年岁岁花相似，岁岁年年人不同，其实说的不仅仅是时光、人，还有人心。。。同一时光相同的景致相同的人，心不同人亦不同。因为你总是在繁忙中忽略了身边最美的、最常见景色。 <br />\n<br />\n<img src=\"/juzishu/www/data/upload/201407/f_16080e90604954245f63766a25f80b37.jpg\" alt=\"\" /><br />\n在繁忙中选择让自己静下来，看看就在身边的景致：静心、观察、领悟，让心静下来，柔软温暖起来。走出来，如果你是事业有成的职场精英，不要宅在家\n中；走出来，如果你是学海中苦读的学子，不要再做低头族；走出来，如果你是有压抑感的“芯片孩子”，离开宅中的电视、放下手机的微信、移开手指中的电脑游\n戏，走出来，世纪公园来，3月8日上午10点，橘子树联盟的春季“梅花茶会”等着您。 <br />\n<br />\n<br />\n带一本书走一走，看看梅花、观观茶席、喝喝茶、听听诗、或选者坐一坐读读书，这样的日子美若天堂。 <br />\n<br />\n<br />\n来吧，十五位茶人、十五席赏心悦目的茶席等着你，为您奉上春日里的第一杯茶，温暖、清新、鲜爽、多情。。。，如果你喜欢，只需要在花雨缤纷的绿地\n上，捡起一朵梅花，轻轻投入茶席的清水盂中，表示一分春日的谢意。。。还有天心明月禅茶表演、民乐演奏、古诗配乐朗诵、茶席泡茶斗茶</p>','original','','','admin','admin','2014-07-20 00:56:00','2014-07-20 00:55:38','normal','article',4,'0',0),(3,'橘子树','','','','<p>前几日，为赶文稿埋头电脑中，一抬头天色微明，6点03分友人微信上传梅花图片。清晨，世纪公园的梅花还带着微微霜冻，清新、疏朗，萌动；看得人心一动儿一动儿的。透过梅图好像还看到友人那张自信、灿烂的笑脸。 <br />\n<img src=\"/juzishu/www/data/upload/201407/f_29e0828e069d563e495c716045640183.jpeg\" alt=\"\" /><br />\n<br />\n世纪公园，我住了四年的地方，但从未在清晨看过它的景色，无论是春暖花开、冬日雨雪。都说：年年岁岁花相似，岁岁年年人不同，其实说的不仅仅是时光、人，还有人心。。。同一时光相同的景致相同的人，心不同人亦不同。因为你总是在繁忙中忽略了身边最美的、最常见景色。 <br />\n<br />\n<img src=\"/juzishu/www/data/upload/201407/f_16080e90604954245f63766a25f80b37.jpg\" alt=\"\" /><br />\n在繁忙中选择让自己静下来，看看就在身边的景致：静心、观察、领悟，让心静下来，柔软温暖起来。走出来，如果你是事业有成的职场精英，不要宅在家\n中；走出来，如果你是学海中苦读的学子，不要再做低头族；走出来，如果你是有压抑感的“芯片孩子”，离开宅中的电视、放下手机的微信、移开手指中的电脑游\n戏，走出来，世纪公园来，3月8日上午10点，橘子树联盟的春季“梅花茶会”等着您。 <br />\n<br />\n<br />\n带一本书走一走，看看梅花、观观茶席、喝喝茶、听听诗、或选者坐一坐读读书，这样的日子美若天堂。 <br />\n<br />\n<br />\n来吧，十五位茶人、十五席赏心悦目的茶席等着你，为您奉上春日里的第一杯茶，温暖、清新、鲜爽、多情。。。，如果你喜欢，只需要在花雨缤纷的绿地\n上，捡起一朵梅花，轻轻投入茶席的清水盂中，表示一分春日的谢意。。。还有天心明月禅茶表演、民乐演奏、古诗配乐朗诵、茶席泡茶斗茶</p>','original','','','','admin','2014-07-19 22:48:00','2014-07-20 00:12:52','normal','page',34,'0',0),(4,'精品书法','','','','<p>前几日，为赶文稿埋头电脑中，一抬头天色微明，6点03分友人微信上传梅花图片。清晨，世纪公园的梅花还带着微微霜冻，清新、疏朗，萌动；看得人心一动儿一动儿的。透过梅图好像还看到友人那张自信、灿烂的笑脸。 <br />\n<img src=\"/juzishu/www/data/upload/201407/f_29e0828e069d563e495c716045640183.jpeg\" alt=\"\" /><br />\n<br />\n世纪公园，我住了四年的地方，但从未在清晨看过它的景色，无论是春暖花开、冬日雨雪。都说：年年岁岁花相似，岁岁年年人不同，其实说的不仅仅是时光、人，还有人心。。。同一时光相同的景致相同的人，心不同人亦不同。因为你总是在繁忙中忽略了身边最美的、最常见景色。 <br />\n<br />\n<img src=\"/juzishu/www/data/upload/201407/f_16080e90604954245f63766a25f80b37.jpg\" alt=\"\" /><br />\n在繁忙中选择让自己静下来，看看就在身边的景致：静心、观察、领悟，让心静下来，柔软温暖起来。走出来，如果你是事业有成的职场精英，不要宅在家\n中；走出来，如果你是学海中苦读的学子，不要再做低头族；走出来，如果你是有压抑感的“芯片孩子”，离开宅中的电视、放下手机的微信、移开手指中的电脑游\n戏，走出来，世纪公园来，3月8日上午10点，橘子树联盟的春季“梅花茶会”等着您。 <br />\n<br />\n<br />\n带一本书走一走，看看梅花、观观茶席、喝喝茶、听听诗、或选者坐一坐读读书，这样的日子美若天堂。 <br />\n<br />\n<br />\n来吧，十五位茶人、十五席赏心悦目的茶席等着你，为您奉上春日里的第一杯茶，温暖、清新、鲜爽、多情。。。，如果你喜欢，只需要在花雨缤纷的绿地\n上，捡起一朵梅花，轻轻投入茶席的清水盂中，表示一分春日的谢意。。。还有天心明月禅茶表演、民乐演奏、古诗配乐朗诵、茶席泡茶斗茶</p>','original','','','','admin','2014-07-19 22:58:00','2014-07-20 00:12:46','normal','page',2,'0',0),(5,'经典研读','','','','<p>前几日，为赶文稿埋头电脑中，一抬头天色微明，6点03分友人微信上传梅花图片。清晨，世纪公园的梅花还带着微微霜冻，清新、疏朗，萌动；看得人心一动儿一动儿的。透过梅图好像还看到友人那张自信、灿烂的笑脸。 <br />\n<img src=\"/juzishu/www/data/upload/201407/f_29e0828e069d563e495c716045640183.jpeg\" alt=\"\" /><br />\n<br />\n世纪公园，我住了四年的地方，但从未在清晨看过它的景色，无论是春暖花开、冬日雨雪。都说：年年岁岁花相似，岁岁年年人不同，其实说的不仅仅是时光、人，还有人心。。。同一时光相同的景致相同的人，心不同人亦不同。因为你总是在繁忙中忽略了身边最美的、最常见景色。 <br />\n<br />\n<img src=\"/juzishu/www/data/upload/201407/f_16080e90604954245f63766a25f80b37.jpg\" alt=\"\" /><br />\n在繁忙中选择让自己静下来，看看就在身边的景致：静心、观察、领悟，让心静下来，柔软温暖起来。走出来，如果你是事业有成的职场精英，不要宅在家\n中；走出来，如果你是学海中苦读的学子，不要再做低头族；走出来，如果你是有压抑感的“芯片孩子”，离开宅中的电视、放下手机的微信、移开手指中的电脑游\n戏，走出来，世纪公园来，3月8日上午10点，橘子树联盟的春季“梅花茶会”等着您。 <br />\n<br />\n<br />\n带一本书走一走，看看梅花、观观茶席、喝喝茶、听听诗、或选者坐一坐读读书，这样的日子美若天堂。 <br />\n<br />\n<br />\n来吧，十五位茶人、十五席赏心悦目的茶席等着你，为您奉上春日里的第一杯茶，温暖、清新、鲜爽、多情。。。，如果你喜欢，只需要在花雨缤纷的绿地\n上，捡起一朵梅花，轻轻投入茶席的清水盂中，表示一分春日的谢意。。。还有天心明月禅茶表演、民乐演奏、古诗配乐朗诵、茶席泡茶斗茶</p>','original','','','','admin','2014-07-19 23:02:00','2014-07-20 00:12:39','normal','page',5,'0',0),(6,'禅者的初心','','','','<p>前几日，为赶文稿埋头电脑中，一抬头天色微明，6点03分友人微信上传梅花图片。清晨，世纪公园的梅花还带着微微霜冻，清新、疏朗，萌动；看得人心一动儿一动儿的。透过梅图好像还看到友人那张自信、灿烂的笑脸。 <br />\n<img src=\"/juzishu/www/data/upload/201407/f_29e0828e069d563e495c716045640183.jpeg\" alt=\"\" /><br />\n<br />\n世纪公园，我住了四年的地方，但从未在清晨看过它的景色，无论是春暖花开、冬日雨雪。都说：年年岁岁花相似，岁岁年年人不同，其实说的不仅仅是时光、人，还有人心。。。同一时光相同的景致相同的人，心不同人亦不同。因为你总是在繁忙中忽略了身边最美的、最常见景色。 <br />\n<br />\n<img src=\"/juzishu/www/data/upload/201407/f_16080e90604954245f63766a25f80b37.jpg\" alt=\"\" /><br />\n在繁忙中选择让自己静下来，看看就在身边的景致：静心、观察、领悟，让心静下来，柔软温暖起来。走出来，如果你是事业有成的职场精英，不要宅在家\n中；走出来，如果你是学海中苦读的学子，不要再做低头族；走出来，如果你是有压抑感的“芯片孩子”，离开宅中的电视、放下手机的微信、移开手指中的电脑游\n戏，走出来，世纪公园来，3月8日上午10点，橘子树联盟的春季“梅花茶会”等着您。 <br />\n<br />\n<br />\n带一本书走一走，看看梅花、观观茶席、喝喝茶、听听诗、或选者坐一坐读读书，这样的日子美若天堂。 <br />\n<br />\n<br />\n来吧，十五位茶人、十五席赏心悦目的茶席等着你，为您奉上春日里的第一杯茶，温暖、清新、鲜爽、多情。。。，如果你喜欢，只需要在花雨缤纷的绿地\n上，捡起一朵梅花，轻轻投入茶席的清水盂中，表示一分春日的谢意。。。还有天心明月禅茶表演、民乐演奏、古诗配乐朗诵、茶席泡茶斗茶</p>','original','','','','admin','2014-07-19 23:03:00','2014-07-20 00:12:32','normal','page',0,'0',0),(7,'面壁一日','','','','<p><img src=\"/juzishu/www/data/upload/201407/f_9bdd28e8c087623886f2c1fb1a2d9018.jpeg\" alt=\"\" /></p>\n<p><br />\n</p>\n<p>前几日，为赶文稿埋头电脑中，一抬头天色微明，6点03分友人微信上传梅花图片。清晨，世纪公园的梅花还带着微微霜冻，清新、疏朗，萌动；看得人心一动儿一动儿的。透过梅图好像还看到友人那张自信、灿烂的笑脸。 <br />\n<img src=\"/juzishu/www/data/upload/201407/f_29e0828e069d563e495c716045640183.jpeg\" alt=\"\" /><br />\n<br />\n世纪公园，我住了四年的地方，但从未在清晨看过它的景色，无论是春暖花开、冬日雨雪。都说：年年岁岁花相似，岁岁年年人不同，其实说的不仅仅是时光、人，还有人心。。。同一时光相同的景致相同的人，心不同人亦不同。因为你总是在繁忙中忽略了身边最美的、最常见景色。 <br />\n<br />\n<img src=\"/juzishu/www/data/upload/201407/f_16080e90604954245f63766a25f80b37.jpg\" alt=\"\" /><br />\n在繁忙中选择让自己静下来，看看就在身边的景致：静心、观察、领悟，让心静下来，柔软温暖起来。走出来，如果你是事业有成的职场精英，不要宅在家\n中；走出来，如果你是学海中苦读的学子，不要再做低头族；走出来，如果你是有压抑感的“芯片孩子”，离开宅中的电视、放下手机的微信、移开手指中的电脑游\n戏，走出来，世纪公园来，3月8日上午10点，橘子树联盟的春季“梅花茶会”等着您。 <br />\n<br />\n<br />\n带一本书走一走，看看梅花、观观茶席、喝喝茶、听听诗、或选者坐一坐读读书，这样的日子美若天堂。 <br />\n<br />\n<br />\n来吧，十五位茶人、十五席赏心悦目的茶席等着你，为您奉上春日里的第一杯茶，温暖、清新、鲜爽、多情。。。，如果你喜欢，只需要在花雨缤纷的绿地\n上，捡起一朵梅花，轻轻投入茶席的清水盂中，表示一分春日的谢意。。。还有天心明月禅茶表演、民乐演奏、古诗配乐朗诵、茶席泡茶斗茶</p>','original','','','','admin','2014-07-19 23:03:00','2014-07-20 00:11:54','normal','page',1,'0',0),(8,'文章1','','','','<p>前几日，为赶文稿埋头电脑中，一抬头天色微明，6点03分友人微信上传梅花图片。清晨，世纪公园的梅花还带着微微霜冻，清新、疏朗，萌动；看得人心一动儿一动儿的。透过梅图好像还看到友人那张自信、灿烂的笑脸。 <br />\n<img src=\"/juzishu/www/data/upload/201407/f_29e0828e069d563e495c716045640183.jpeg\" alt=\"\" /><br />\n<br />\n世纪公园，我住了四年的地方，但从未在清晨看过它的景色，无论是春暖花开、冬日雨雪。都说：年年岁岁花相似，岁岁年年人不同，其实说的不仅仅是时光、人，还有人心。。。同一时光相同的景致相同的人，心不同人亦不同。因为你总是在繁忙中忽略了身边最美的、最常见景色。 <br />\n<br />\n<img src=\"/juzishu/www/data/upload/201407/f_16080e90604954245f63766a25f80b37.jpg\" alt=\"\" /><br />\n在繁忙中选择让自己静下来，看看就在身边的景致：静心、观察、领悟，让心静下来，柔软温暖起来。走出来，如果你是事业有成的职场精英，不要宅在家\n中；走出来，如果你是学海中苦读的学子，不要再做低头族；走出来，如果你是有压抑感的“芯片孩子”，离开宅中的电视、放下手机的微信、移开手指中的电脑游\n戏，走出来，世纪公园来，3月8日上午10点，橘子树联盟的春季“梅花茶会”等着您。 <br />\n<br />\n<br />\n带一本书走一走，看看梅花、观观茶席、喝喝茶、听听诗、或选者坐一坐读读书，这样的日子美若天堂。 <br />\n<br />\n<br />\n来吧，十五位茶人、十五席赏心悦目的茶席等着你，为您奉上春日里的第一杯茶，温暖、清新、鲜爽、多情。。。，如果你喜欢，只需要在花雨缤纷的绿地\n上，捡起一朵梅花，轻轻投入茶席的清水盂中，表示一分春日的谢意。。。还有天心明月禅茶表演、民乐演奏、古诗配乐朗诵、茶席泡茶斗茶</p>','original','','','admin','admin','2014-07-20 00:56:00','2014-07-20 00:56:48','normal','article',1,'0',0),(9,'清晨茶会心得','','','','<p>前几日，为赶文稿埋头电脑中，一抬头天色微明，6点03分友人微信上传梅花图片。清晨，世纪公园的梅花还带着微微霜冻，清新、疏朗，萌动；看得人心一动儿一动儿的。透过梅图好像还看到友人那张自信、灿烂的笑脸。 <br />\n<img src=\"/juzishu/www/data/upload/201407/f_29e0828e069d563e495c716045640183.jpeg\" alt=\"\" /><br />\n<br />\n世纪公园，我住了四年的地方，但从未在清晨看过它的景色，无论是春暖花开、冬日雨雪。都说：年年岁岁花相似，岁岁年年人不同，其实说的不仅仅是时光、人，还有人心。。。同一时光相同的景致相同的人，心不同人亦不同。因为你总是在繁忙中忽略了身边最美的、最常见景色。 <br />\n<br />\n<img src=\"/juzishu/www/data/upload/201407/f_16080e90604954245f63766a25f80b37.jpg\" alt=\"\" /><br />\n在繁忙中选择让自己静下来，看看就在身边的景致：静心、观察、领悟，让心静下来，柔软温暖起来。走出来，如果你是事业有成的职场精英，不要宅在家\n中；走出来，如果你是学海中苦读的学子，不要再做低头族；走出来，如果你是有压抑感的“芯片孩子”，离开宅中的电视、放下手机的微信、移开手指中的电脑游\n戏，走出来，世纪公园来，3月8日上午10点，橘子树联盟的春季“梅花茶会”等着您。 <br />\n<br />\n<br />\n带一本书走一走，看看梅花、观观茶席、喝喝茶、听听诗、或选者坐一坐读读书，这样的日子美若天堂。 <br />\n<br />\n<br />\n来吧，十五位茶人、十五席赏心悦目的茶席等着你，为您奉上春日里的第一杯茶，温暖、清新、鲜爽、多情。。。，如果你喜欢，只需要在花雨缤纷的绿地\n上，捡起一朵梅花，轻轻投入茶席的清水盂中，表示一分春日的谢意。。。还有天心明月禅茶表演、民乐演奏、古诗配乐朗诵、茶席泡茶斗茶</p>','original','','','admin','','2014-07-20 00:14:00','2014-07-20 00:14:36','normal','article',0,'0',0),(10,'茶课笔记','','','','<p>前几日，为赶文稿埋头电脑中，一抬头天色微明，6点03分友人微信上传梅花图片。清晨，世纪公园的梅花还带着微微霜冻，清新、疏朗，萌动；看得人心一动儿一动儿的。透过梅图好像还看到友人那张自信、灿烂的笑脸。 <br />\n<img src=\"/juzishu/www/data/upload/201407/f_29e0828e069d563e495c716045640183.jpeg\" alt=\"\" /><br />\n<br />\n世纪公园，我住了四年的地方，但从未在清晨看过它的景色，无论是春暖花开、冬日雨雪。都说：年年岁岁花相似，岁岁年年人不同，其实说的不仅仅是时光、人，还有人心。。。同一时光相同的景致相同的人，心不同人亦不同。因为你总是在繁忙中忽略了身边最美的、最常见景色。 <br />\n<br />\n<img src=\"/juzishu/www/data/upload/201407/f_16080e90604954245f63766a25f80b37.jpg\" alt=\"\" /><br />\n在繁忙中选择让自己静下来，看看就在身边的景致：静心、观察、领悟，让心静下来，柔软温暖起来。走出来，如果你是事业有成的职场精英，不要宅在家\n中；走出来，如果你是学海中苦读的学子，不要再做低头族；走出来，如果你是有压抑感的“芯片孩子”，离开宅中的电视、放下手机的微信、移开手指中的电脑游\n戏，走出来，世纪公园来，3月8日上午10点，橘子树联盟的春季“梅花茶会”等着您。 <br />\n<br />\n<br />\n带一本书走一走，看看梅花、观观茶席、喝喝茶、听听诗、或选者坐一坐读读书，这样的日子美若天堂。 <br />\n<br />\n<br />\n来吧，十五位茶人、十五席赏心悦目的茶席等着你，为您奉上春日里的第一杯茶，温暖、清新、鲜爽、多情。。。，如果你喜欢，只需要在花雨缤纷的绿地\n上，捡起一朵梅花，轻轻投入茶席的清水盂中，表示一分春日的谢意。。。还有天心明月禅茶表演、民乐演奏、古诗配乐朗诵、茶席泡茶斗茶</p>','original','','','admin','','2014-07-20 00:14:00','2014-07-20 00:14:49','normal','article',0,'0',0),(11,'文章3','','','','<p>前几日，为赶文稿埋头电脑中，一抬头天色微明，6点03分友人微信上传梅花图片。清晨，世纪公园的梅花还带着微微霜冻，清新、疏朗，萌动；看得人心一动儿一动儿的。透过梅图好像还看到友人那张自信、灿烂的笑脸。 <br />\n<img src=\"/juzishu/www/data/upload/201407/f_29e0828e069d563e495c716045640183.jpeg\" alt=\"\" /><br />\n<br />\n世纪公园，我住了四年的地方，但从未在清晨看过它的景色，无论是春暖花开、冬日雨雪。都说：年年岁岁花相似，岁岁年年人不同，其实说的不仅仅是时光、人，还有人心。。。同一时光相同的景致相同的人，心不同人亦不同。因为你总是在繁忙中忽略了身边最美的、最常见景色。 <br />\n<br />\n<img src=\"/juzishu/www/data/upload/201407/f_16080e90604954245f63766a25f80b37.jpg\" alt=\"\" /><br />\n在繁忙中选择让自己静下来，看看就在身边的景致：静心、观察、领悟，让心静下来，柔软温暖起来。走出来，如果你是事业有成的职场精英，不要宅在家\n中；走出来，如果你是学海中苦读的学子，不要再做低头族；走出来，如果你是有压抑感的“芯片孩子”，离开宅中的电视、放下手机的微信、移开手指中的电脑游\n戏，走出来，世纪公园来，3月8日上午10点，橘子树联盟的春季“梅花茶会”等着您。 <br />\n<br />\n<br />\n带一本书走一走，看看梅花、观观茶席、喝喝茶、听听诗、或选者坐一坐读读书，这样的日子美若天堂。 <br />\n<br />\n<br />\n来吧，十五位茶人、十五席赏心悦目的茶席等着你，为您奉上春日里的第一杯茶，温暖、清新、鲜爽、多情。。。，如果你喜欢，只需要在花雨缤纷的绿地\n上，捡起一朵梅花，轻轻投入茶席的清水盂中，表示一分春日的谢意。。。还有天心明月禅茶表演、民乐演奏、古诗配乐朗诵、茶席泡茶斗茶</p>','original','','','admin','','2014-07-20 00:53:00','2014-07-20 00:53:42','normal','article',0,'0',0),(12,'文章5','','','','<p>前几日，为赶文稿埋头电脑中，一抬头天色微明，6点03分友人微信上传梅花图片。清晨，世纪公园的梅花还带着微微霜冻，清新、疏朗，萌动；看得人心一动儿一动儿的。透过梅图好像还看到友人那张自信、灿烂的笑脸。 <br />\n<img src=\"/juzishu/www/data/upload/201407/f_29e0828e069d563e495c716045640183.jpeg\" alt=\"\" /><br />\n<br />\n世纪公园，我住了四年的地方，但从未在清晨看过它的景色，无论是春暖花开、冬日雨雪。都说：年年岁岁花相似，岁岁年年人不同，其实说的不仅仅是时光、人，还有人心。。。同一时光相同的景致相同的人，心不同人亦不同。因为你总是在繁忙中忽略了身边最美的、最常见景色。 <br />\n<br />\n<img src=\"/juzishu/www/data/upload/201407/f_16080e90604954245f63766a25f80b37.jpg\" alt=\"\" /><br />\n在繁忙中选择让自己静下来，看看就在身边的景致：静心、观察、领悟，让心静下来，柔软温暖起来。走出来，如果你是事业有成的职场精英，不要宅在家\n中；走出来，如果你是学海中苦读的学子，不要再做低头族；走出来，如果你是有压抑感的“芯片孩子”，离开宅中的电视、放下手机的微信、移开手指中的电脑游\n戏，走出来，世纪公园来，3月8日上午10点，橘子树联盟的春季“梅花茶会”等着您。 <br />\n<br />\n<br />\n带一本书走一走，看看梅花、观观茶席、喝喝茶、听听诗、或选者坐一坐读读书，这样的日子美若天堂。 <br />\n<br />\n<br />\n来吧，十五位茶人、十五席赏心悦目的茶席等着你，为您奉上春日里的第一杯茶，温暖、清新、鲜爽、多情。。。，如果你喜欢，只需要在花雨缤纷的绿地\n上，捡起一朵梅花，轻轻投入茶席的清水盂中，表示一分春日的谢意。。。还有天心明月禅茶表演、民乐演奏、古诗配乐朗诵、茶席泡茶斗茶</p>','original','','','admin','','2014-07-20 00:53:00','2014-07-20 00:53:54','normal','article',0,'0',0),(13,'文章6','','','','<p>前几日，为赶文稿埋头电脑中，一抬头天色微明，6点03分友人微信上传梅花图片。清晨，世纪公园的梅花还带着微微霜冻，清新、疏朗，萌动；看得人心一动儿一动儿的。透过梅图好像还看到友人那张自信、灿烂的笑脸。 <br />\n<img src=\"/juzishu/www/data/upload/201407/f_29e0828e069d563e495c716045640183.jpeg\" alt=\"\" /><br />\n<br />\n世纪公园，我住了四年的地方，但从未在清晨看过它的景色，无论是春暖花开、冬日雨雪。都说：年年岁岁花相似，岁岁年年人不同，其实说的不仅仅是时光、人，还有人心。。。同一时光相同的景致相同的人，心不同人亦不同。因为你总是在繁忙中忽略了身边最美的、最常见景色。 <br />\n<br />\n<img src=\"/juzishu/www/data/upload/201407/f_16080e90604954245f63766a25f80b37.jpg\" alt=\"\" /><br />\n在繁忙中选择让自己静下来，看看就在身边的景致：静心、观察、领悟，让心静下来，柔软温暖起来。走出来，如果你是事业有成的职场精英，不要宅在家\n中；走出来，如果你是学海中苦读的学子，不要再做低头族；走出来，如果你是有压抑感的“芯片孩子”，离开宅中的电视、放下手机的微信、移开手指中的电脑游\n戏，走出来，世纪公园来，3月8日上午10点，橘子树联盟的春季“梅花茶会”等着您。 <br />\n<br />\n<br />\n带一本书走一走，看看梅花、观观茶席、喝喝茶、听听诗、或选者坐一坐读读书，这样的日子美若天堂。 <br />\n<br />\n<br />\n来吧，十五位茶人、十五席赏心悦目的茶席等着你，为您奉上春日里的第一杯茶，温暖、清新、鲜爽、多情。。。，如果你喜欢，只需要在花雨缤纷的绿地\n上，捡起一朵梅花，轻轻投入茶席的清水盂中，表示一分春日的谢意。。。还有天心明月禅茶表演、民乐演奏、古诗配乐朗诵、茶席泡茶斗茶</p>','original','','','admin','','2014-07-20 00:53:00','2014-07-20 00:54:06','normal','article',0,'0',0),(14,'文章7','','','','<p>前几日，为赶文稿埋头电脑中，一抬头天色微明，6点03分友人微信上传梅花图片。清晨，世纪公园的梅花还带着微微霜冻，清新、疏朗，萌动；看得人心一动儿一动儿的。透过梅图好像还看到友人那张自信、灿烂的笑脸。 <br />\n<img src=\"/juzishu/www/data/upload/201407/f_29e0828e069d563e495c716045640183.jpeg\" alt=\"\" /><br />\n<br />\n世纪公园，我住了四年的地方，但从未在清晨看过它的景色，无论是春暖花开、冬日雨雪。都说：年年岁岁花相似，岁岁年年人不同，其实说的不仅仅是时光、人，还有人心。。。同一时光相同的景致相同的人，心不同人亦不同。因为你总是在繁忙中忽略了身边最美的、最常见景色。 <br />\n<br />\n<img src=\"/juzishu/www/data/upload/201407/f_16080e90604954245f63766a25f80b37.jpg\" alt=\"\" /><br />\n在繁忙中选择让自己静下来，看看就在身边的景致：静心、观察、领悟，让心静下来，柔软温暖起来。走出来，如果你是事业有成的职场精英，不要宅在家\n中；走出来，如果你是学海中苦读的学子，不要再做低头族；走出来，如果你是有压抑感的“芯片孩子”，离开宅中的电视、放下手机的微信、移开手指中的电脑游\n戏，走出来，世纪公园来，3月8日上午10点，橘子树联盟的春季“梅花茶会”等着您。 <br />\n<br />\n<br />\n带一本书走一走，看看梅花、观观茶席、喝喝茶、听听诗、或选者坐一坐读读书，这样的日子美若天堂。 <br />\n<br />\n<br />\n来吧，十五位茶人、十五席赏心悦目的茶席等着你，为您奉上春日里的第一杯茶，温暖、清新、鲜爽、多情。。。，如果你喜欢，只需要在花雨缤纷的绿地\n上，捡起一朵梅花，轻轻投入茶席的清水盂中，表示一分春日的谢意。。。还有天心明月禅茶表演、民乐演奏、古诗配乐朗诵、茶席泡茶斗茶</p>','original','','','admin','','2014-07-20 00:54:00','2014-07-20 00:54:35','normal','article',0,'0',0);
/*!40000 ALTER TABLE `eps_article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eps_block`
--

DROP TABLE IF EXISTS `eps_block`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eps_block` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `title` varchar(60) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eps_block`
--

LOCK TABLES `eps_block` WRITE;
/*!40000 ALTER TABLE `eps_block` DISABLE KEYS */;
INSERT INTO `eps_block` VALUES (1,'latestArticle','最新文章','{\"category\":\"0\",\"limit\":\"7\"}'),(2,'hotArticle','热门文章','{\"category\":\"0\",\"limit\":\"7\"}'),(3,'latestProduct','最新活动','{\"icon\":\"icon-th\",\"category\":\"0\",\"limit\":\"3\",\"image\":\"1\",\"moreText\":\"\",\"moreUrl\":\"\"}'),(4,'hotProduct','热门产品','{\"category\":\"0\",\"limit\":\"3\",\"image\":\"show\"}'),(5,'slide','幻灯片',''),(6,'articleTree','文章分类','{\"showChildren\":\"0\"}'),(7,'productTree','产品分类','{\"showChildren\":\"0\"}'),(8,'blogTree','博客分类','{\"showChildren\":\"1\"}'),(9,'contact','联系我们',''),(10,'about','公司简介',''),(11,'links','友情链接',''),(12,'header','网站头部','');
/*!40000 ALTER TABLE `eps_block` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eps_book`
--

DROP TABLE IF EXISTS `eps_book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eps_book` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `keywords` varchar(150) NOT NULL,
  `summary` text NOT NULL,
  `content` text NOT NULL,
  `type` enum('book','chapter','article') NOT NULL,
  `parent` smallint(5) unsigned NOT NULL DEFAULT '0',
  `path` char(255) NOT NULL DEFAULT '',
  `grade` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `author` varchar(60) NOT NULL,
  `editor` varchar(60) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `views` mediumint(5) unsigned NOT NULL DEFAULT '0',
  `order` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `order` (`order`),
  KEY `parent` (`parent`),
  KEY `path` (`path`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eps_book`
--

LOCK TABLES `eps_book` WRITE;
/*!40000 ALTER TABLE `eps_book` DISABLE KEYS */;
/*!40000 ALTER TABLE `eps_book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eps_category`
--

DROP TABLE IF EXISTS `eps_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eps_category` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL DEFAULT '',
  `alias` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `keywords` varchar(150) NOT NULL,
  `parent` smallint(5) unsigned NOT NULL DEFAULT '0',
  `path` char(255) NOT NULL DEFAULT '',
  `grade` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `order` smallint(5) unsigned NOT NULL DEFAULT '0',
  `type` char(30) NOT NULL,
  `readonly` enum('0','1') NOT NULL DEFAULT '0',
  `moderators` varchar(255) NOT NULL,
  `threads` smallint(5) NOT NULL,
  `posts` smallint(5) NOT NULL,
  `postedBy` varchar(30) NOT NULL,
  `postedDate` datetime NOT NULL,
  `postID` mediumint(9) NOT NULL,
  `replyID` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tree` (`type`),
  KEY `order` (`order`),
  KEY `parent` (`parent`),
  KEY `path` (`path`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eps_category`
--

LOCK TABLES `eps_category` WRITE;
/*!40000 ALTER TABLE `eps_category` DISABLE KEYS */;
INSERT INTO `eps_category` VALUES (4,'国学经典','','','',0,',4,',1,10,'article','0','',0,0,'','2014-07-19 22:41:57',0,0),(3,'最新活动','','','',0,',3,',1,10,'product','0','',0,0,'','2014-07-19 22:37:29',0,0),(5,'书法','','','',0,',5,',1,20,'article','0','',0,0,'','2014-07-19 22:41:57',0,0),(6,'古琴','','','',0,',6,',1,30,'article','0','',0,0,'','2014-07-19 22:41:57',0,0),(7,'茶艺','','','',0,',7,',1,40,'article','0','',0,0,'','2014-07-19 22:41:57',0,0),(8,'中医','','','',0,',8,',1,50,'article','0','',0,0,'','2014-07-19 22:41:57',0,0);
/*!40000 ALTER TABLE `eps_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eps_config`
--

DROP TABLE IF EXISTS `eps_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eps_config` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `owner` char(30) NOT NULL DEFAULT '',
  `module` varchar(30) NOT NULL,
  `section` char(30) NOT NULL DEFAULT '',
  `key` char(30) DEFAULT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`owner`,`module`,`section`,`key`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eps_config`
--

LOCK TABLES `eps_config` WRITE;
/*!40000 ALTER TABLE `eps_config` DISABLE KEYS */;
INSERT INTO `eps_config` VALUES (1,'system','common','global','version','2.4'),(28,'system','common','site','lang','zh-cn'),(4,'system','common','global','ignoreAdminEntry','1'),(5,'system','common','site','theme','wide'),(26,'system','common','site','type','portal'),(27,'system','common','site','name','橘子树'),(35,'system','common','site','moduleEnabled',''),(29,'system','common','site','copyright','2009'),(30,'system','common','site','keywords',''),(31,'system','common','site','indexKeywords',''),(32,'system','common','site','slogan',''),(33,'system','common','site','desc','橘子树是...'),(34,'system','common','site','icp','沪备JT12345678'),(69,'system','common','nav','top','[{\"type\":\"system\",\"article\":\"0\",\"product\":\"0\",\"page\":\"1\",\"system\":\"home\",\"title\":\"\\u9996\\u9875\",\"url\":\"\\/juzishu\\/www\\/\",\"key\":\"0\",\"target\":\"\",\"class\":\"nav-system-home\",\"children\":[]},{\"type\":\"product\",\"article\":\"0\",\"product\":\"3\",\"page\":\"1\",\"system\":\"home\",\"title\":\"\\u6700\\u65b0\\u6d3b\\u52a8\",\"url\":\"\\/index.php?m=product&f=browse&categoryID=3\",\"key\":\"1\",\"target\":\"\",\"class\":\"nav-product-3\",\"children\":[]},{\"type\":\"custom\",\"article\":\"0\",\"product\":\"0\",\"page\":\"3\",\"system\":\"home\",\"title\":\"\\u8bfe\\u7a0b\",\"url\":\"\",\"key\":\"2\",\"target\":\"\",\"class\":\"\",\"children\":[{\"type\":\"page\",\"article\":\"0\",\"product\":\"0\",\"page\":\"1\",\"system\":\"home\",\"title\":\"\\u5fc3\\u8336\",\"url\":\"\\/index.php?m=page&f=view&pageID=1\",\"parent\":\"2\",\"key\":\"1000\",\"target\":\"\",\"class\":\"nav-page-1\",\"children\":[]},{\"type\":\"page\",\"article\":\"0\",\"product\":\"0\",\"page\":\"5\",\"system\":\"home\",\"title\":\"\\u7ecf\\u5178\\u7814\\u8bfb\",\"url\":\"\\/index.php?m=page&f=view&pageID=5\",\"parent\":\"2\",\"key\":\"1001\",\"target\":\"\",\"class\":\"nav-page-5\",\"children\":[]},{\"type\":\"page\",\"article\":\"0\",\"product\":\"0\",\"page\":\"4\",\"system\":\"home\",\"title\":\"\\u7cbe\\u54c1\\u4e66\\u6cd5\",\"url\":\"\\/index.php?m=page&f=view&pageID=4\",\"parent\":\"2\",\"key\":\"1002\",\"target\":\"\",\"class\":\"nav-page-4\",\"children\":[]},{\"type\":\"page\",\"article\":\"0\",\"product\":\"0\",\"page\":\"7\",\"system\":\"home\",\"title\":\"\\u9762\\u58c1\\u4e00\\u65e5\",\"url\":\"\\/index.php?m=page&f=view&pageID=7\",\"parent\":\"2\",\"key\":\"1003\",\"target\":\"\",\"class\":\"nav-page-7\",\"children\":[]}]},{\"type\":\"article\",\"article\":\"0\",\"product\":\"0\",\"page\":\"3\",\"system\":\"home\",\"title\":\"\\u5206\\u4eab\",\"url\":\"\\/index.php?m=article&f=index\",\"key\":\"3\",\"target\":\"\",\"class\":\"nav-article-0\",\"children\":[]},{\"type\":\"page\",\"article\":\"0\",\"product\":\"0\",\"page\":\"3\",\"system\":\"company\",\"title\":\"\\u6a58\\u5b50\\u6811\",\"url\":\"\\/index.php?m=page&f=view&pageID=3\",\"key\":\"4\",\"target\":\"\",\"class\":\"nav-page-3\",\"children\":[]}]'),(51,'system','common','site','logo','{\"fileID\":\"1\",\"pathname\":\"201407\\/f_b849a50d5213313ab3b382d6f8487131.jpg\",\"webPath\":\"\\/juzishu\\/www\\/data\\/upload\\/201407\\/f_b849a50d5213313ab3b382d6f8487131.jpg\",\"addedBy\":\"admin\",\"addedDate\":\"2014-07-19 23:19:06\"}'),(52,'system','common','slides','1','{\"title\":\"\\u592a\\u6781\",\"titleColor\":\"#FFF\",\"mainLink\":\"http:\\/\\/ali.linxun.info\\/juzishu\\/www\\/index.php?m=page&amp;f=view&amp;pageID=3\",\"backgroundType\":\"image\",\"backgroundColor\":\"#114DAD\",\"height\":\"\",\"label\":[\"\"],\"buttonClass\":[\"primary\"],\"buttonUrl\":[\"\"],\"summary\":\"\",\"id\":\"52\",\"image\":\"\\/juzishu\\/www\\/data\\/upload\\/201407\\/f_f713efcd5ecc32275782430b9ca0d933.jpg\",\"uid\":\"53cb3e75c000d\"}'),(53,'system','common','slides','2','{\"title\":\"\\u5fc3\\u8336\\u4e4b\\u65c5\",\"titleColor\":\"#FFF\",\"mainLink\":\"http:\\/\\/ali.linxun.info\\/juzishu\\/www\\/index.php?m=page&amp;f=view&amp;pageID=3\",\"backgroundType\":\"image\",\"backgroundColor\":\"#114DAD\",\"height\":\"\",\"label\":[\"\"],\"buttonClass\":[\"primary\"],\"buttonUrl\":[\"\"],\"summary\":\"\",\"id\":\"53\",\"image\":\"\\/juzishu\\/www\\/data\\/upload\\/201407\\/f_7f66098628a2479a04cee31b84b7dc1a.jpg\",\"uid\":\"53cb3e7bd5729\"}'),(54,'system','common','slides','3','{\"title\":\"\\u6893\\u8def\\u5bfa\",\"titleColor\":\"#FFF\",\"mainLink\":\"http:\\/\\/ali.linxun.info\\/juzishu\\/www\\/index.php?m=page&amp;f=view&amp;pageID=3\",\"backgroundType\":\"image\",\"backgroundColor\":\"#114DAD\",\"height\":\"\",\"label\":[\"\"],\"buttonClass\":[\"primary\"],\"buttonUrl\":[\"\"],\"summary\":\"\",\"id\":\"54\",\"image\":\"\\/juzishu\\/www\\/data\\/upload\\/201407\\/f_c0f4f4d2e466340672fbd327fee9310f.jpg\",\"uid\":\"53cb3e81c5cc5\"}'),(73,'system','common','links','index','<p style=\"text-align:center;font-size:13px;font-family:Monaco;color:#4F76CB;\"><span style=\"font-size:18px;color:#333333;\">法明同学：祝福你生日快乐，天天愉快！</span></p>'),(74,'system','common','links','all',''),(75,'system','common','links','uid','53ceeb0490ca4'),(60,'system','common','slides','4','{\"title\":\"\\u76db\\u590f\\u6e05\\u6668\\u8336\\u4f1a\",\"titleColor\":\"#FFF\",\"mainLink\":\"http:\\/\\/ali.linxun.info\\/juzishu\\/www\\/index.php?m=page&amp;f=view&amp;pageID=3\",\"backgroundType\":\"image\",\"backgroundColor\":\"#114DAD\",\"height\":\"\",\"label\":[\"\"],\"buttonClass\":[\"primary\"],\"buttonUrl\":[\"\"],\"summary\":\"\",\"id\":\"60\",\"image\":\"\\/juzishu\\/www\\/data\\/upload\\/201407\\/f_6bf53439ce6d81f8589ff928fd418952.jpg\",\"uid\":\"53cb3e884ecff\"}');
/*!40000 ALTER TABLE `eps_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eps_down`
--

DROP TABLE IF EXISTS `eps_down`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eps_down` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `account` char(30) DEFAULT NULL,
  `file` mediumint(5) DEFAULT NULL,
  `ip` char(15) NOT NULL,
  `time` datetime NOT NULL,
  `referer` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fileID` (`file`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eps_down`
--

LOCK TABLES `eps_down` WRITE;
/*!40000 ALTER TABLE `eps_down` DISABLE KEYS */;
/*!40000 ALTER TABLE `eps_down` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eps_file`
--

DROP TABLE IF EXISTS `eps_file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eps_file` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `pathname` char(50) NOT NULL,
  `title` char(90) NOT NULL,
  `extension` char(30) NOT NULL,
  `size` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `width` smallint(5) unsigned NOT NULL DEFAULT '0',
  `height` smallint(5) unsigned NOT NULL DEFAULT '0',
  `objectType` char(20) NOT NULL,
  `objectID` mediumint(9) NOT NULL,
  `addedBy` char(30) NOT NULL DEFAULT '',
  `addedDate` datetime NOT NULL,
  `public` enum('1','0') NOT NULL DEFAULT '1',
  `downloads` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `extra` varchar(255) NOT NULL,
  `primary` enum('1','0') DEFAULT '0',
  `editor` enum('1','0') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `object` (`objectType`,`objectID`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eps_file`
--

LOCK TABLES `eps_file` WRITE;
/*!40000 ALTER TABLE `eps_file` DISABLE KEYS */;
INSERT INTO `eps_file` VALUES (1,'201407/f_b849a50d5213313ab3b382d6f8487131.jpg','logo','jpg',8665,150,53,'logo',0,'admin','2014-07-19 23:19:06','1',0,'','0','0'),(2,'201407/f_f713efcd5ecc32275782430b9ca0d933.jpg','s1','jpg',128951,1140,271,'slide',0,'admin','2014-07-19 23:23:06','1',0,'','0','0'),(3,'201407/f_7f66098628a2479a04cee31b84b7dc1a.jpg','s2','jpg',207693,1140,269,'slide',0,'admin','2014-07-19 23:23:22','1',0,'','0','0'),(4,'201407/f_c0f4f4d2e466340672fbd327fee9310f.jpg','s3','jpg',253715,1140,271,'slide',0,'admin','2014-07-19 23:23:36','1',0,'','0','0'),(5,'201407/f_29e0828e069d563e495c716045640183.jpeg','mmexport1404616069081','jpeg',189775,600,398,'product',1,'admin','2014-07-19 23:31:21','1',0,'','0','1'),(6,'201407/f_16080e90604954245f63766a25f80b37.jpg','mmexport1404576270782','jpg',51496,549,549,'product',1,'admin','2014-07-19 23:31:34','1',0,'','1','1'),(7,'201407/f_f7e69ac1d5c6be60bd0459b5c5f5b6e5.jpg','mmexport1404576274921','jpg',57229,640,640,'product',2,'admin','2014-07-19 23:37:21','1',0,'','1','0'),(8,'201407/f_c95c072f8f0c6f8b5e8917271353583b.jpg','dushu','jpg',99158,600,450,'product',3,'admin','2014-07-19 23:38:01','1',0,'','1','1'),(9,'201407/f_9bdd28e8c087623886f2c1fb1a2d9018.jpeg','mmexport1404057899118','jpeg',115240,800,531,'product',4,'admin','2014-07-19 23:41:24','1',0,'','1','1'),(10,'201407/f_83a227174610408c55b40b1ac09ed7aa.jpeg','mmexport1404616342066','jpeg',148439,600,398,'product',5,'admin','2014-07-20 00:06:29','1',0,'','1','1'),(11,'201407/f_da8496873200648a12a7506901ed198a.jpeg','mmexport1404616350515','jpeg',235408,600,398,'product',6,'admin','2014-07-20 00:06:50','1',0,'','1','1'),(12,'201407/f_d99d3af7a3aa3a0b978e15f3ed753701.jpg','mmexport1404616027322','jpg',115820,600,398,'product',7,'admin','2014-07-20 00:07:17','1',0,'','1','1'),(13,'201407/f_5b323fd034332eeeba3a24b4c64b087c.jpg','mmexport1404541442348','jpg',88804,640,854,'product',8,'admin','2014-07-20 00:07:59','1',0,'','1','1'),(14,'201407/f_b1a29b83883611e5369a60bc60c28086.jpg','mmexport1404824643658','jpg',856269,1312,1312,'article',10,'admin','2014-07-20 00:22:36','1',0,'','1','0'),(15,'201407/f_90e5da0d07f9fffd73327150c2049634.jpg','mmexport1404527266670','jpg',48372,540,960,'article',9,'admin','2014-07-20 00:22:54','1',0,'','1','0'),(16,'201407/f_873b6560f4b7fb62fca46339e89fe945.jpeg','mmexport1404616338591','jpeg',133832,600,903,'article',8,'admin','2014-07-20 00:23:22','1',0,'','1','0'),(17,'201407/f_32367ea2ac6d368a5fc5c8bf539c4789.jpg','mmexport1404527266670','jpg',48372,540,960,'article',2,'admin','2014-07-20 00:28:09','1',0,'','1','0'),(18,'201407/f_6bf53439ce6d81f8589ff928fd418952.jpg','mmexport1404616350515','jpg',85183,600,142,'slide',0,'admin','2014-07-20 00:42:44','1',0,'','0','0'),(19,'201407/f_4401fd209de04d6349dfa00e42fb7dd9.jpg','1','jpg',34522,600,400,'product',9,'admin','2014-07-20 09:50:04','1',0,'','1','1'),(20,'201407/f_7854ba94980990c057ade603764dff5e.jpg','2','jpg',18322,600,400,'product',10,'admin','2014-07-20 09:51:33','1',0,'','1','1'),(21,'201407/f_e9934095bd58718c3f13e0628d50e03c.jpg','4','jpg',200073,600,397,'product',11,'admin','2014-07-20 09:52:10','1',0,'','1','1'),(22,'201407/f_d77348fc5d9523cec46413f2e7f61f2c.jpg','5','jpg',104283,400,600,'product',12,'admin','2014-07-20 09:52:58','1',0,'','1','1');
/*!40000 ALTER TABLE `eps_file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eps_layout`
--

DROP TABLE IF EXISTS `eps_layout`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eps_layout` (
  `page` varchar(30) NOT NULL,
  `region` varchar(30) NOT NULL,
  `blocks` text NOT NULL,
  UNIQUE KEY `layout` (`page`,`region`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eps_layout`
--

LOCK TABLES `eps_layout` WRITE;
/*!40000 ALTER TABLE `eps_layout` DISABLE KEYS */;
INSERT INTO `eps_layout` VALUES ('all','top','[{\"id\":\"12\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]'),('index_index','top','[{\"id\":\"5\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]'),('index_index','middle','[{\"id\":\"11\",\"grid\":\"12\",\"titleless\":\"1\",\"borderless\":\"1\"},{\"id\":\"3\",\"grid\":\"12\",\"titleless\":\"0\",\"borderless\":\"0\"}]'),('article_browse','side','[{\"id\":\"6\",\"grid\":\"0\",\"titleless\":\"\",\"borderless\":\"\"},{\"id\":\"1\",\"grid\":\"0\",\"titleless\":\"\",\"borderless\":\"\"}]'),('article_view','side','[{\"id\":\"6\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"9\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]'),('product_view','side','[{\"id\":\"4\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"7\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"9\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]'),('message_index','side','[{\"id\":\"9\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]'),('blog_index','side','[{\"id\":\"8\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]'),('blog_view','side','[{\"id\":\"8\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]'),('page_index','side','[{\"id\":\"2\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"9\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]');
/*!40000 ALTER TABLE `eps_layout` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eps_message`
--

DROP TABLE IF EXISTS `eps_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eps_message` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `type` char(20) NOT NULL,
  `objectType` varchar(30) NOT NULL DEFAULT '',
  `objectID` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `account` char(30) DEFAULT NULL,
  `from` char(30) NOT NULL,
  `to` char(30) NOT NULL,
  `phone` char(30) NOT NULL,
  `email` varchar(90) NOT NULL,
  `qq` char(30) NOT NULL,
  `date` datetime NOT NULL,
  `content` text NOT NULL,
  `link` varchar(100) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `status` char(20) NOT NULL,
  `public` enum('0','1') NOT NULL DEFAULT '1',
  `readed` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `object` (`objectType`,`objectID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eps_message`
--

LOCK TABLES `eps_message` WRITE;
/*!40000 ALTER TABLE `eps_message` DISABLE KEYS */;
/*!40000 ALTER TABLE `eps_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eps_oauth`
--

DROP TABLE IF EXISTS `eps_oauth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eps_oauth` (
  `account` varchar(30) NOT NULL,
  `provider` varchar(30) NOT NULL,
  `openID` varchar(60) NOT NULL,
  UNIQUE KEY `account` (`account`,`provider`,`openID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eps_oauth`
--

LOCK TABLES `eps_oauth` WRITE;
/*!40000 ALTER TABLE `eps_oauth` DISABLE KEYS */;
/*!40000 ALTER TABLE `eps_oauth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eps_product`
--

DROP TABLE IF EXISTS `eps_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eps_product` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `mall` varchar(255) NOT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `model` char(30) DEFAULT NULL,
  `color` char(20) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `unit` char(20) NOT NULL,
  `price` float(8,2) NOT NULL,
  `promotion` float(8,2) NOT NULL,
  `amount` mediumint(8) unsigned DEFAULT NULL,
  `keywords` varchar(150) NOT NULL,
  `summary` text NOT NULL,
  `content` text NOT NULL,
  `author` varchar(60) NOT NULL,
  `editor` varchar(60) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'normal',
  `views` mediumint(5) unsigned NOT NULL DEFAULT '0',
  `sticky` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `order` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order` (`order`),
  KEY `views` (`views`),
  KEY `sticky` (`sticky`),
  KEY `model` (`model`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eps_product`
--

LOCK TABLES `eps_product` WRITE;
/*!40000 ALTER TABLE `eps_product` DISABLE KEYS */;
INSERT INTO `eps_product` VALUES (1,'盛夏清晨茶会','','','','','','','',0.00,0.00,0,'','','<p>测试</p>\n<p>前几日，为赶文稿埋头电脑中，一抬头天色微明，6点03分友人微信上传梅花图片。清晨，世纪公园的梅花还带着微微霜冻，清新、疏朗，萌动；看得人心一动儿一动儿的。透过梅图好像还看到友人那张自信、灿烂的笑脸。 <br />\n<img src=\"/juzishu/www/data/upload/201407/f_29e0828e069d563e495c716045640183.jpeg\" alt=\"\" /><br />\n<br />\n世纪公园，我住了四年的地方，但从未在清晨看过它的景色，无论是春暖花开、冬日雨雪。都说：年年岁岁花相似，岁岁年年人不同，其实说的不仅仅是时光、人，还有人心。。。同一时光相同的景致相同的人，心不同人亦不同。因为你总是在繁忙中忽略了身边最美的、最常见景色。 <br />\n<br />\n<img src=\"/juzishu/www/data/upload/201407/f_16080e90604954245f63766a25f80b37.jpg\" alt=\"\" /><br />\n在繁忙中选择让自己静下来，看看就在身边的景致：静心、观察、领悟，让心静下来，柔软温暖起来。走出来，如果你是事业有成的职场精英，不要宅在家\n中；走出来，如果你是学海中苦读的学子，不要再做低头族；走出来，如果你是有压抑感的“芯片孩子”，离开宅中的电视、放下手机的微信、移开手指中的电脑游\n戏，走出来，世纪公园来，3月8日上午10点，橘子树联盟的春季“梅花茶会”等着您。 <br />\n<br />\n<br />\n带一本书走一走，看看梅花、观观茶席、喝喝茶、听听诗、或选者坐一坐读读书，这样的日子美若天堂。 <br />\n<br />\n<br />\n来吧，十五位茶人、十五席赏心悦目的茶席等着你，为您奉上春日里的第一杯茶，温暖、清新、鲜爽、多情。。。，如果你喜欢，只需要在花雨缤纷的绿地\n上，捡起一朵梅花，轻轻投入茶席的清水盂中，表示一分春日的谢意。。。还有天心明月禅茶表演、民乐演奏、古诗配乐朗诵、茶席泡茶斗茶</p>','admin','admin','2014-07-19 22:36:30','2014-07-19 23:31:38','normal',3,'0',0),(2,'梅花茶会','','','','','','','',0.00,0.00,0,'','','<p>测试</p>\n<p>前几日，为赶文稿埋头电脑中，一抬头天色微明，6点03分友人微信上传梅花图片。清晨，世纪公园的梅花还带着微微霜冻，清新、疏朗，萌动；看得人心一动儿一动儿的。透过梅图好像还看到友人那张自信、灿烂的笑脸。 <br />\n<img src=\"/juzishu/www/data/upload/201407/f_29e0828e069d563e495c716045640183.jpeg\" alt=\"\" /><br />\n<br />\n世纪公园，我住了四年的地方，但从未在清晨看过它的景色，无论是春暖花开、冬日雨雪。都说：年年岁岁花相似，岁岁年年人不同，其实说的不仅仅是时光、人，还有人心。。。同一时光相同的景致相同的人，心不同人亦不同。因为你总是在繁忙中忽略了身边最美的、最常见景色。 <br />\n<br />\n<img src=\"/juzishu/www/data/upload/201407/f_16080e90604954245f63766a25f80b37.jpg\" alt=\"\" /><br />\n在繁忙中选择让自己静下来，看看就在身边的景致：静心、观察、领悟，让心静下来，柔软温暖起来。走出来，如果你是事业有成的职场精英，不要宅在家\n中；走出来，如果你是学海中苦读的学子，不要再做低头族；走出来，如果你是有压抑感的“芯片孩子”，离开宅中的电视、放下手机的微信、移开手指中的电脑游\n戏，走出来，世纪公园来，3月8日上午10点，橘子树联盟的春季“梅花茶会”等着您。 <br />\n<br />\n<br />\n带一本书走一走，看看梅花、观观茶席、喝喝茶、听听诗、或选者坐一坐读读书，这样的日子美若天堂。 <br />\n<br />\n<br />\n来吧，十五位茶人、十五席赏心悦目的茶席等着你，为您奉上春日里的第一杯茶，温暖、清新、鲜爽、多情。。。，如果你喜欢，只需要在花雨缤纷的绿地\n上，捡起一朵梅花，轻轻投入茶席的清水盂中，表示一分春日的谢意。。。还有天心明月禅茶表演、民乐演奏、古诗配乐朗诵、茶席泡茶斗茶</p>','admin','','2014-07-19 23:32:26','2014-07-19 23:32:26','normal',1,'0',0),(3,'心灵读书会-叶少欣7月9日','','','','','','','',0.00,0.00,0,'','7月9日静安读书会','<p>测试</p>\n<p><br />\n</p>\n<p><img src=\"/juzishu/www/data/upload/201407/f_c95c072f8f0c6f8b5e8917271353583b.jpg\" alt=\"\" /></p>\n<p><br />\n</p>\n<p>前几日，为赶文稿埋头电脑中，一抬头天色微明，6点03分友人微信上传梅花图片。清晨，世纪公园的梅花还带着微微霜冻，清新、疏朗，萌动；看得人心一动儿一动儿的。透过梅图好像还看到友人那张自信、灿烂的笑脸。 <br />\n<img src=\"/juzishu/www/data/upload/201407/f_29e0828e069d563e495c716045640183.jpeg\" alt=\"\" /><br />\n<br />\n世纪公园，我住了四年的地方，但从未在清晨看过它的景色，无论是春暖花开、冬日雨雪。都说：年年岁岁花相似，岁岁年年人不同，其实说的不仅仅是时光、人，还有人心。。。同一时光相同的景致相同的人，心不同人亦不同。因为你总是在繁忙中忽略了身边最美的、最常见景色。 <br />\n<br />\n<img src=\"/juzishu/www/data/upload/201407/f_16080e90604954245f63766a25f80b37.jpg\" alt=\"\" /><br />\n在繁忙中选择让自己静下来，看看就在身边的景致：静心、观察、领悟，让心静下来，柔软温暖起来。走出来，如果你是事业有成的职场精英，不要宅在家\n中；走出来，如果你是学海中苦读的学子，不要再做低头族；走出来，如果你是有压抑感的“芯片孩子”，离开宅中的电视、放下手机的微信、移开手指中的电脑游\n戏，走出来，世纪公园来，3月8日上午10点，橘子树联盟的春季“梅花茶会”等着您。 <br />\n<br />\n<br />\n带一本书走一走，看看梅花、观观茶席、喝喝茶、听听诗、或选者坐一坐读读书，这样的日子美若天堂。 <br />\n<br />\n<br />\n来吧，十五位茶人、十五席赏心悦目的茶席等着你，为您奉上春日里的第一杯茶，温暖、清新、鲜爽、多情。。。，如果你喜欢，只需要在花雨缤纷的绿地\n上，捡起一朵梅花，轻轻投入茶席的清水盂中，表示一分春日的谢意。。。还有天心明月禅茶表演、民乐演奏、古诗配乐朗诵、茶席泡茶斗茶</p>','admin','admin','2014-07-19 23:36:37','2014-07-19 23:38:04','normal',7,'0',0),(4,'清晨瑜伽','','','','','','','',0.00,0.00,0,'','','<p>测试</p>\n<p><br />\n</p>\n<p><img src=\"/juzishu/www/data/upload/201407/f_9bdd28e8c087623886f2c1fb1a2d9018.jpeg\" alt=\"\" /></p>\n<p><br />\n</p>\n<p>前几日，为赶文稿埋头电脑中，一抬头天色微明，6点03分友人微信上传梅花图片。清晨，世纪公园的梅花还带着微微霜冻，清新、疏朗，萌动；看得人心一动儿一动儿的。透过梅图好像还看到友人那张自信、灿烂的笑脸。 <br />\n<img src=\"/juzishu/www/data/upload/201407/f_29e0828e069d563e495c716045640183.jpeg\" alt=\"\" /><br />\n<br />\n世纪公园，我住了四年的地方，但从未在清晨看过它的景色，无论是春暖花开、冬日雨雪。都说：年年岁岁花相似，岁岁年年人不同，其实说的不仅仅是时光、人，还有人心。。。同一时光相同的景致相同的人，心不同人亦不同。因为你总是在繁忙中忽略了身边最美的、最常见景色。 <br />\n<br />\n<img src=\"/juzishu/www/data/upload/201407/f_16080e90604954245f63766a25f80b37.jpg\" alt=\"\" /><br />\n在繁忙中选择让自己静下来，看看就在身边的景致：静心、观察、领悟，让心静下来，柔软温暖起来。走出来，如果你是事业有成的职场精英，不要宅在家\n中；走出来，如果你是学海中苦读的学子，不要再做低头族；走出来，如果你是有压抑感的“芯片孩子”，离开宅中的电视、放下手机的微信、移开手指中的电脑游\n戏，走出来，世纪公园来，3月8日上午10点，橘子树联盟的春季“梅花茶会”等着您。 <br />\n<br />\n<br />\n带一本书走一走，看看梅花、观观茶席、喝喝茶、听听诗、或选者坐一坐读读书，这样的日子美若天堂。 <br />\n<br />\n<br />\n来吧，十五位茶人、十五席赏心悦目的茶席等着你，为您奉上春日里的第一杯茶，温暖、清新、鲜爽、多情。。。，如果你喜欢，只需要在花雨缤纷的绿地\n上，捡起一朵梅花，轻轻投入茶席的清水盂中，表示一分春日的谢意。。。还有天心明月禅茶表演、民乐演奏、古诗配乐朗诵、茶席泡茶斗茶</p>','admin','','2014-07-19 23:41:35','2014-07-19 23:41:35','normal',1,'0',0),(5,'测试活动1','','','','','','','',0.00,0.00,0,'','','<p>测试</p>\n<p><br />\n</p>\n<p><img src=\"/juzishu/www/data/upload/201407/f_83a227174610408c55b40b1ac09ed7aa.jpeg\" alt=\"\" /></p>\n<p><br />\n</p>\n<p><img src=\"/juzishu/www/data/upload/201407/f_9bdd28e8c087623886f2c1fb1a2d9018.jpeg\" alt=\"\" /></p>\n<p><br />\n</p>\n<p>前几日，为赶文稿埋头电脑中，一抬头天色微明，6点03分友人微信上传梅花图片。清晨，世纪公园的梅花还带着微微霜冻，清新、疏朗，萌动；看得人心一动儿一动儿的。透过梅图好像还看到友人那张自信、灿烂的笑脸。 <br />\n<img src=\"/juzishu/www/data/upload/201407/f_29e0828e069d563e495c716045640183.jpeg\" alt=\"\" /><br />\n<br />\n世纪公园，我住了四年的地方，但从未在清晨看过它的景色，无论是春暖花开、冬日雨雪。都说：年年岁岁花相似，岁岁年年人不同，其实说的不仅仅是时光、人，还有人心。。。同一时光相同的景致相同的人，心不同人亦不同。因为你总是在繁忙中忽略了身边最美的、最常见景色。 <br />\n<br />\n<img src=\"/juzishu/www/data/upload/201407/f_16080e90604954245f63766a25f80b37.jpg\" alt=\"\" /><br />\n在繁忙中选择让自己静下来，看看就在身边的景致：静心、观察、领悟，让心静下来，柔软温暖起来。走出来，如果你是事业有成的职场精英，不要宅在家\n中；走出来，如果你是学海中苦读的学子，不要再做低头族；走出来，如果你是有压抑感的“芯片孩子”，离开宅中的电视、放下手机的微信、移开手指中的电脑游\n戏，走出来，世纪公园来，3月8日上午10点，橘子树联盟的春季“梅花茶会”等着您。 <br />\n<br />\n<br />\n带一本书走一走，看看梅花、观观茶席、喝喝茶、听听诗、或选者坐一坐读读书，这样的日子美若天堂。 <br />\n<br />\n<br />\n来吧，十五位茶人、十五席赏心悦目的茶席等着你，为您奉上春日里的第一杯茶，温暖、清新、鲜爽、多情。。。，如果你喜欢，只需要在花雨缤纷的绿地\n上，捡起一朵梅花，轻轻投入茶席的清水盂中，表示一分春日的谢意。。。还有天心明月禅茶表演、民乐演奏、古诗配乐朗诵、茶席泡茶斗茶</p>','admin','admin','2014-07-20 00:05:25','2014-07-20 00:06:32','normal',1,'0',0),(6,'活动2','','','','','','','',0.00,0.00,0,'','','<p>测试</p>\n<p><br />\n</p>\n<p><img src=\"/juzishu/www/data/upload/201407/f_da8496873200648a12a7506901ed198a.jpeg\" alt=\"\" /></p>\n<p><br />\n</p>\n<p><img src=\"/juzishu/www/data/upload/201407/f_9bdd28e8c087623886f2c1fb1a2d9018.jpeg\" alt=\"\" /></p>\n<p><br />\n</p>\n<p>前几日，为赶文稿埋头电脑中，一抬头天色微明，6点03分友人微信上传梅花图片。清晨，世纪公园的梅花还带着微微霜冻，清新、疏朗，萌动；看得人心一动儿一动儿的。透过梅图好像还看到友人那张自信、灿烂的笑脸。 <br />\n<img src=\"/juzishu/www/data/upload/201407/f_29e0828e069d563e495c716045640183.jpeg\" alt=\"\" /><br />\n<br />\n世纪公园，我住了四年的地方，但从未在清晨看过它的景色，无论是春暖花开、冬日雨雪。都说：年年岁岁花相似，岁岁年年人不同，其实说的不仅仅是时光、人，还有人心。。。同一时光相同的景致相同的人，心不同人亦不同。因为你总是在繁忙中忽略了身边最美的、最常见景色。 <br />\n<br />\n<img src=\"/juzishu/www/data/upload/201407/f_16080e90604954245f63766a25f80b37.jpg\" alt=\"\" /><br />\n在繁忙中选择让自己静下来，看看就在身边的景致：静心、观察、领悟，让心静下来，柔软温暖起来。走出来，如果你是事业有成的职场精英，不要宅在家\n中；走出来，如果你是学海中苦读的学子，不要再做低头族；走出来，如果你是有压抑感的“芯片孩子”，离开宅中的电视、放下手机的微信、移开手指中的电脑游\n戏，走出来，世纪公园来，3月8日上午10点，橘子树联盟的春季“梅花茶会”等着您。 <br />\n<br />\n<br />\n带一本书走一走，看看梅花、观观茶席、喝喝茶、听听诗、或选者坐一坐读读书，这样的日子美若天堂。 <br />\n<br />\n<br />\n来吧，十五位茶人、十五席赏心悦目的茶席等着你，为您奉上春日里的第一杯茶，温暖、清新、鲜爽、多情。。。，如果你喜欢，只需要在花雨缤纷的绿地\n上，捡起一朵梅花，轻轻投入茶席的清水盂中，表示一分春日的谢意。。。还有天心明月禅茶表演、民乐演奏、古诗配乐朗诵、茶席泡茶斗茶</p>','admin','admin','2014-07-20 00:05:39','2014-07-20 00:06:52','normal',1,'0',0),(7,'活动3','','','','','','','',0.00,0.00,0,'','','<p>测试</p>\n<p><br />\n</p>\n<p><img src=\"/juzishu/www/data/upload/201407/f_9bdd28e8c087623886f2c1fb1a2d9018.jpeg\" alt=\"\" /></p>\n<p><br />\n</p>\n<p>前几日，为赶文稿埋头电脑中，一抬头天色微明，6点03分友人微信上传梅花图片。清晨，世纪公园的梅花还带着微微霜冻，清新、疏朗，萌动；看得人心一动儿一动儿的。透过梅图好像还看到友人那张自信、灿烂的笑脸。 <br />\n<img src=\"/juzishu/www/data/upload/201407/f_29e0828e069d563e495c716045640183.jpeg\" alt=\"\" /><br />\n<br />\n世纪公园，我住了四年的地方，但从未在清晨看过它的景色，无论是春暖花开、冬日雨雪。都说：年年岁岁花相似，岁岁年年人不同，其实说的不仅仅是时光、人，还有人心。。。同一时光相同的景致相同的人，心不同人亦不同。因为你总是在繁忙中忽略了身边最美的、最常见景色。 <br />\n<br />\n<img src=\"/juzishu/www/data/upload/201407/f_16080e90604954245f63766a25f80b37.jpg\" alt=\"\" /><br />\n在繁忙中选择让自己静下来，看看就在身边的景致：静心、观察、领悟，让心静下来，柔软温暖起来。走出来，如果你是事业有成的职场精英，不要宅在家\n中；走出来，如果你是学海中苦读的学子，不要再做低头族；走出来，如果你是有压抑感的“芯片孩子”，离开宅中的电视、放下手机的微信、移开手指中的电脑游\n戏，走出来，世纪公园来，3月8日上午10点，橘子树联盟的春季“梅花茶会”等着您。 <br />\n<br />\n<br />\n带一本书走一走，看看梅花、观观茶席、喝喝茶、听听诗、或选者坐一坐读读书，这样的日子美若天堂。 <br />\n<br />\n<br />\n来吧，十五位茶人、十五席赏心悦目的茶席等着你，为您奉上春日里的第一杯茶，温暖、清新、鲜爽、多情。。。，如果你喜欢，只需要在花雨缤纷的绿地\n上，捡起一朵梅花，轻轻投入茶席的清水盂中，表示一分春日的谢意。。。还有天心明月禅茶表演、民乐演奏、古诗配乐朗诵、茶席泡茶斗茶</p>\n<img src=\"/juzishu/www/data/upload/201407/f_d99d3af7a3aa3a0b978e15f3ed753701.jpg\" alt=\"\" />','admin','','2014-07-20 00:07:19','2014-07-20 00:07:19','normal',1,'0',0),(8,'活动4','','','','','','','',0.00,0.00,0,'','','<p>测试</p>\n<p><br />\n</p>\n<p><img src=\"/juzishu/www/data/upload/201407/f_5b323fd034332eeeba3a24b4c64b087c.jpg\" alt=\"\" /></p>\n<p><br />\n</p>\n<p><img src=\"/juzishu/www/data/upload/201407/f_9bdd28e8c087623886f2c1fb1a2d9018.jpeg\" alt=\"\" /></p>\n<p><br />\n</p>\n<p>前几日，为赶文稿埋头电脑中，一抬头天色微明，6点03分友人微信上传梅花图片。清晨，世纪公园的梅花还带着微微霜冻，清新、疏朗，萌动；看得人心一动儿一动儿的。透过梅图好像还看到友人那张自信、灿烂的笑脸。 <br />\n<img src=\"/juzishu/www/data/upload/201407/f_29e0828e069d563e495c716045640183.jpeg\" alt=\"\" /><br />\n<br />\n世纪公园，我住了四年的地方，但从未在清晨看过它的景色，无论是春暖花开、冬日雨雪。都说：年年岁岁花相似，岁岁年年人不同，其实说的不仅仅是时光、人，还有人心。。。同一时光相同的景致相同的人，心不同人亦不同。因为你总是在繁忙中忽略了身边最美的、最常见景色。 <br />\n<br />\n<img src=\"/juzishu/www/data/upload/201407/f_16080e90604954245f63766a25f80b37.jpg\" alt=\"\" /><br />\n在繁忙中选择让自己静下来，看看就在身边的景致：静心、观察、领悟，让心静下来，柔软温暖起来。走出来，如果你是事业有成的职场精英，不要宅在家\n中；走出来，如果你是学海中苦读的学子，不要再做低头族；走出来，如果你是有压抑感的“芯片孩子”，离开宅中的电视、放下手机的微信、移开手指中的电脑游\n戏，走出来，世纪公园来，3月8日上午10点，橘子树联盟的春季“梅花茶会”等着您。 <br />\n<br />\n<br />\n带一本书走一走，看看梅花、观观茶席、喝喝茶、听听诗、或选者坐一坐读读书，这样的日子美若天堂。 <br />\n<br />\n<br />\n来吧，十五位茶人、十五席赏心悦目的茶席等着你，为您奉上春日里的第一杯茶，温暖、清新、鲜爽、多情。。。，如果你喜欢，只需要在花雨缤纷的绿地\n上，捡起一朵梅花，轻轻投入茶席的清水盂中，表示一分春日的谢意。。。还有天心明月禅茶表演、民乐演奏、古诗配乐朗诵、茶席泡茶斗茶</p>','admin','admin','2014-07-20 00:07:36','2014-07-20 00:08:02','normal',3,'0',0),(9,'活动5','','','','','','','',0.00,0.00,0,'','','<p>测试</p>\n<p><br />\n</p>\n<p><img src=\"/juzishu/www/data/upload/201407/f_4401fd209de04d6349dfa00e42fb7dd9.jpg\" alt=\"\" /></p>\n<p><br />\n</p>\n<p>前几日，为赶文稿埋头电脑中，一抬头天色微明，6点03分友人微信上传梅花图片。清晨，世纪公园的梅花还带着微微霜冻，清新、疏朗，萌动；看得人心一动儿一动儿的。透过梅图好像还看到友人那张自信、灿烂的笑脸。&nbsp;<br />\n<img src=\"/juzishu/www/data/upload/201407/f_29e0828e069d563e495c716045640183.jpeg\" alt=\"\" /><br />\n世纪公园，我住了四年的地方，但从未在清晨看过它的景色，无论是春暖花开、冬日雨雪。都说：年年岁岁花相似，岁岁年年人不同，其实说的不仅仅是时光、人，还有人心。。。同一时光相同的景致相同的人，心不同人亦不同。因为你总是在繁忙中忽略了身边最美的、最常见景色。&nbsp;<br />\n<img src=\"/juzishu/www/data/upload/201407/f_16080e90604954245f63766a25f80b37.jpg\" alt=\"\" /><br />\n在繁忙中选择让自己静下来，看看就在身边的景致：静心、观察、领悟，让心静下来，柔软温暖起来。走出来，如果你是事业有成的职场精英，不要宅在家 中；走出来，如果你是学海中苦读的学子，不要再做低头族；走出来，如果你是有压抑感的“芯片孩子”，离开宅中的电视、放下手机的微信、移开手指中的电脑游 戏，走出来，世纪公园来，3月8日上午10点，橘子树联盟的春季“梅花茶会”等着您。&nbsp;<br />\n<br />\n带一本书走一走，看看梅花、观观茶席、喝喝茶、听听诗、或选者坐一坐读读书，这样的日子美若天堂。&nbsp;<br />\n<br />\n来吧，十五位茶人、十五席赏心悦目的茶席等着你，为您奉上春日里的第一杯茶，温暖、清新、鲜爽、多情。。。，如果你喜欢，只需要在花雨缤纷的绿地 上，捡起一朵梅花，轻轻投入茶席的清水盂中，表示一分春日的谢意。。。还有天心明月禅茶表演、民乐演奏、古诗配乐朗诵、茶席泡茶斗茶</p>','admin','','2014-07-20 09:50:07','2014-07-20 09:50:07','normal',1,'0',0),(10,'活动6','','','','','','','',0.00,0.00,0,'','','<p><img src=\"/juzishu/www/data/upload/201407/f_7854ba94980990c057ade603764dff5e.jpg\" alt=\"\" /></p>\n<p><br />\n</p>\n<p>前几日，为赶文稿埋头电脑中，一抬头天色微明，6点03分友人微信上传梅花图片。清晨，世纪公园的梅花还带着微微霜冻，清新、疏朗，萌动；看得人心一动儿一动儿的。透过梅图好像还看到友人那张自信、灿烂的笑脸。&nbsp;<br />\n<img src=\"/juzishu/www/data/upload/201407/f_29e0828e069d563e495c716045640183.jpeg\" alt=\"\" /><br />\n世纪公园，我住了四年的地方，但从未在清晨看过它的景色，无论是春暖花开、冬日雨雪。都说：年年岁岁花相似，岁岁年年人不同，其实说的不仅仅是时光、人，还有人心。。。同一时光相同的景致相同的人，心不同人亦不同。因为你总是在繁忙中忽略了身边最美的、最常见景色。&nbsp;<br />\n<img src=\"/juzishu/www/data/upload/201407/f_16080e90604954245f63766a25f80b37.jpg\" alt=\"\" /><br />\n在繁忙中选择让自己静下来，看看就在身边的景致：静心、观察、领悟，让心静下来，柔软温暖起来。走出来，如果你是事业有成的职场精英，不要宅在家 中；走出来，如果你是学海中苦读的学子，不要再做低头族；走出来，如果你是有压抑感的“芯片孩子”，离开宅中的电视、放下手机的微信、移开手指中的电脑游 戏，走出来，世纪公园来，3月8日上午10点，橘子树联盟的春季“梅花茶会”等着您。&nbsp;<br />\n带一本书走一走，看看梅花、观观茶席、喝喝茶、听听诗、或选者坐一坐读读书，这样的日子美若天堂。&nbsp;<br />\n来吧，十五位茶人、十五席赏心悦目的茶席等着你，为您奉上春日里的第一杯茶，温暖、清新、鲜爽、多情。。。，如果你喜欢，只需要在花雨缤纷的绿地 上，捡起一朵梅花，轻轻投入茶席的清水盂中，表示一分春日的谢意。。。还有天心明月禅茶表演、民乐演奏、古诗配乐朗诵、茶席泡茶斗茶</p>','admin','','2014-07-20 09:51:35','2014-07-20 09:51:35','normal',2,'0',0),(11,'活动8','','','','','','','',0.00,0.00,0,'','','<p><img src=\"/juzishu/www/data/upload/201407/f_e9934095bd58718c3f13e0628d50e03c.jpg\" alt=\"\" /></p>\n<p><br />\n</p>\n<p>前几日，为赶文稿埋头电脑中，一抬头天色微明，6点03分友人微信上传梅花图片。清晨，世纪公园的梅花还带着微微霜冻，清新、疏朗，萌动；看得人心一动儿一动儿的。透过梅图好像还看到友人那张自信、灿烂的笑脸。&nbsp;<br />\n<img src=\"/juzishu/www/data/upload/201407/f_29e0828e069d563e495c716045640183.jpeg\" alt=\"\" /><br />\n世纪公园，我住了四年的地方，但从未在清晨看过它的景色，无论是春暖花开、冬日雨雪。都说：年年岁岁花相似，岁岁年年人不同，其实说的不仅仅是时光、人，还有人心。。。同一时光相同的景致相同的人，心不同人亦不同。因为你总是在繁忙中忽略了身边最美的、最常见景色。&nbsp;<br />\n<img src=\"/juzishu/www/data/upload/201407/f_16080e90604954245f63766a25f80b37.jpg\" alt=\"\" /><br />\n在繁忙中选择让自己静下来，看看就在身边的景致：静心、观察、领悟，让心静下来，柔软温暖起来。走出来，如果你是事业有成的职场精英，不要宅在家 中；走出来，如果你是学海中苦读的学子，不要再做低头族；走出来，如果你是有压抑感的“芯片孩子”，离开宅中的电视、放下手机的微信、移开手指中的电脑游 戏，走出来，世纪公园来，3月8日上午10点，橘子树联盟的春季“梅花茶会”等着您。&nbsp;<br />\n带一本书走一走，看看梅花、观观茶席、喝喝茶、听听诗、或选者坐一坐读读书，这样的日子美若天堂。&nbsp;<br />\n来吧，十五位茶人、十五席赏心悦目的茶席等着你，为您奉上春日里的第一杯茶，温暖、清新、鲜爽、多情。。。，如果你喜欢，只需要在花雨缤纷的绿地 上，捡起一朵梅花，轻轻投入茶席的清水盂中，表示一分春日的谢意。。。还有天心明月禅茶表演、民乐演奏、古诗配乐朗诵、茶席泡茶斗茶</p>','admin','','2014-07-20 09:52:13','2014-07-20 09:52:13','normal',1,'0',0),(12,'活动9','','','','','','','',0.00,0.00,0,'','','<p><img src=\"/juzishu/www/data/upload/201407/f_d77348fc5d9523cec46413f2e7f61f2c.jpg\" alt=\"\" /></p>\n<p><br />\n</p>\n<p>前几日，为赶文稿埋头电脑中，一抬头天色微明，6点03分友人微信上传梅花图片。清晨，世纪公园的梅花还带着微微霜冻，清新、疏朗，萌动；看得人心一动儿一动儿的。透过梅图好像还看到友人那张自信、灿烂的笑脸。&nbsp;<br />\n<img src=\"/juzishu/www/data/upload/201407/f_29e0828e069d563e495c716045640183.jpeg\" alt=\"\" /><br />\n世纪公园，我住了四年的地方，但从未在清晨看过它的景色，无论是春暖花开、冬日雨雪。都说：年年岁岁花相似，岁岁年年人不同，其实说的不仅仅是时光、人，还有人心。。。同一时光相同的景致相同的人，心不同人亦不同。因为你总是在繁忙中忽略了身边最美的、最常见景色。&nbsp;<br />\n<img src=\"/juzishu/www/data/upload/201407/f_16080e90604954245f63766a25f80b37.jpg\" alt=\"\" /><br />\n在繁忙中选择让自己静下来，看看就在身边的景致：静心、观察、领悟，让心静下来，柔软温暖起来。走出来，如果你是事业有成的职场精英，不要宅在家 中；走出来，如果你是学海中苦读的学子，不要再做低头族；走出来，如果你是有压抑感的“芯片孩子”，离开宅中的电视、放下手机的微信、移开手指中的电脑游 戏，走出来，世纪公园来，3月8日上午10点，橘子树联盟的春季“梅花茶会”等着您。&nbsp;<br />\n带一本书走一走，看看梅花、观观茶席、喝喝茶、听听诗、或选者坐一坐读读书，这样的日子美若天堂。&nbsp;<br />\n来吧，十五位茶人、十五席赏心悦目的茶席等着你，为您奉上春日里的第一杯茶，温暖、清新、鲜爽、多情。。。，如果你喜欢，只需要在花雨缤纷的绿地 上，捡起一朵梅花，轻轻投入茶席的清水盂中，表示一分春日的谢意。。。还有天心明月禅茶表演、民乐演奏、古诗配乐朗诵、茶席泡茶斗茶</p>','admin','','2014-07-20 09:53:01','2014-07-20 09:53:01','normal',9,'0',0);
/*!40000 ALTER TABLE `eps_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eps_product_custom`
--

DROP TABLE IF EXISTS `eps_product_custom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eps_product_custom` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `label` varchar(100) NOT NULL,
  `value` varchar(200) NOT NULL,
  `order` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `label` (`product`,`label`),
  KEY `product` (`product`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eps_product_custom`
--

LOCK TABLES `eps_product_custom` WRITE;
/*!40000 ALTER TABLE `eps_product_custom` DISABLE KEYS */;
INSERT INTO `eps_product_custom` VALUES (3,1,'','',0),(4,2,'','',0),(6,3,'','',0),(7,4,'','',0),(10,5,'','',0),(11,6,'','',0),(12,7,'','',0),(14,8,'','',0),(15,9,'','',0),(16,10,'','',0),(17,11,'','',0),(18,12,'','',0);
/*!40000 ALTER TABLE `eps_product_custom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eps_relation`
--

DROP TABLE IF EXISTS `eps_relation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eps_relation` (
  `type` char(20) NOT NULL,
  `id` mediumint(9) NOT NULL,
  `category` smallint(5) NOT NULL,
  UNIQUE KEY `relation` (`type`,`id`,`category`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eps_relation`
--

LOCK TABLES `eps_relation` WRITE;
/*!40000 ALTER TABLE `eps_relation` DISABLE KEYS */;
INSERT INTO `eps_relation` VALUES ('article',2,4),('article',8,4),('article',9,6),('article',10,7),('article',11,4),('article',12,4),('article',13,4),('article',14,4),('product',1,3),('product',2,3),('product',3,3),('product',4,3),('product',5,3),('product',6,3),('product',7,3),('product',8,3),('product',9,3),('product',10,3),('product',11,3),('product',12,3);
/*!40000 ALTER TABLE `eps_relation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eps_reply`
--

DROP TABLE IF EXISTS `eps_reply`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eps_reply` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `thread` mediumint(8) unsigned NOT NULL,
  `content` text NOT NULL,
  `author` char(30) NOT NULL,
  `editor` char(30) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `hidden` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `thread` (`thread`),
  KEY `author` (`author`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eps_reply`
--

LOCK TABLES `eps_reply` WRITE;
/*!40000 ALTER TABLE `eps_reply` DISABLE KEYS */;
/*!40000 ALTER TABLE `eps_reply` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eps_tag`
--

DROP TABLE IF EXISTS `eps_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eps_tag` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `rank` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tag` (`tag`),
  KEY `rank` (`rank`),
  KEY `link` (`link`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eps_tag`
--

LOCK TABLES `eps_tag` WRITE;
/*!40000 ALTER TABLE `eps_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `eps_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eps_thread`
--

DROP TABLE IF EXISTS `eps_thread`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eps_thread` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `board` mediumint(9) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(60) NOT NULL,
  `editor` varchar(60) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `readonly` tinyint(1) NOT NULL DEFAULT '0',
  `views` smallint(5) unsigned NOT NULL DEFAULT '0',
  `stick` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `replies` smallint(6) NOT NULL,
  `repliedBy` varchar(30) NOT NULL,
  `repliedDate` datetime NOT NULL,
  `replyID` mediumint(8) unsigned NOT NULL,
  `hidden` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `category` (`board`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eps_thread`
--

LOCK TABLES `eps_thread` WRITE;
/*!40000 ALTER TABLE `eps_thread` DISABLE KEYS */;
/*!40000 ALTER TABLE `eps_thread` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eps_user`
--

DROP TABLE IF EXISTS `eps_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eps_user` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `realname` char(30) NOT NULL DEFAULT '',
  `nickname` char(60) NOT NULL DEFAULT '',
  `admin` enum('no','common','super') NOT NULL DEFAULT 'no',
  `avatar` char(30) NOT NULL DEFAULT '',
  `birthday` date NOT NULL,
  `gender` enum('f','m','u') NOT NULL DEFAULT 'u',
  `email` char(90) NOT NULL DEFAULT '',
  `skype` char(90) NOT NULL,
  `qq` char(20) NOT NULL DEFAULT '',
  `yahoo` char(90) NOT NULL DEFAULT '',
  `gtalk` char(90) NOT NULL DEFAULT '',
  `wangwang` char(90) NOT NULL DEFAULT '',
  `site` varchar(100) NOT NULL,
  `mobile` char(11) NOT NULL DEFAULT '',
  `phone` char(20) NOT NULL DEFAULT '',
  `company` varchar(255) NOT NULL,
  `address` char(120) NOT NULL DEFAULT '',
  `zipcode` char(10) NOT NULL DEFAULT '',
  `visits` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT '',
  `last` datetime NOT NULL,
  `fails` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL,
  `join` datetime NOT NULL,
  `reset` char(64) NOT NULL,
  `locked` datetime NOT NULL,
  `public` varchar(30) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `admin` (`admin`),
  KEY `account` (`account`,`password`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eps_user`
--

LOCK TABLES `eps_user` WRITE;
/*!40000 ALTER TABLE `eps_user` DISABLE KEYS */;
INSERT INTO `eps_user` VALUES (1,'admin','b62a8689bc33b44b4cf34fe3447f41a0','admin','','super','','0000-00-00','u','','','','','','','','','','','','',12,'222.44.86.160','2014-07-23 09:44:44',0,'','2014-07-19 22:15:49','','0000-00-00 00:00:00','0');
/*!40000 ALTER TABLE `eps_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eps_wx_message`
--

DROP TABLE IF EXISTS `eps_wx_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eps_wx_message` (
  `id` mediumint(10) unsigned NOT NULL AUTO_INCREMENT,
  `public` smallint(3) NOT NULL,
  `wid` char(64) NOT NULL,
  `to` varchar(50) NOT NULL,
  `from` varchar(50) NOT NULL,
  `response` mediumint(8) unsigned NOT NULL,
  `content` text NOT NULL,
  `type` char(30) NOT NULL,
  `replied` tinyint(3) NOT NULL DEFAULT '0',
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eps_wx_message`
--

LOCK TABLES `eps_wx_message` WRITE;
/*!40000 ALTER TABLE `eps_wx_message` DISABLE KEYS */;
/*!40000 ALTER TABLE `eps_wx_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eps_wx_public`
--

DROP TABLE IF EXISTS `eps_wx_public`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eps_wx_public` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `account` varchar(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `appID` char(30) NOT NULL,
  `appSecret` char(32) NOT NULL,
  `url` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `qrcode` varchar(100) NOT NULL,
  `primary` tinyint(3) NOT NULL DEFAULT '0',
  `type` enum('subscribe','service') NOT NULL,
  `status` enum('wait','normal') NOT NULL,
  `certified` enum('1','0') NOT NULL DEFAULT '0',
  `addedDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eps_wx_public`
--

LOCK TABLES `eps_wx_public` WRITE;
/*!40000 ALTER TABLE `eps_wx_public` DISABLE KEYS */;
/*!40000 ALTER TABLE `eps_wx_public` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eps_wx_response`
--

DROP TABLE IF EXISTS `eps_wx_response`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eps_wx_response` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `public` smallint(3) NOT NULL,
  `key` varchar(100) NOT NULL,
  `group` varchar(100) NOT NULL,
  `type` enum('text','news','link') NOT NULL DEFAULT 'text',
  `source` varchar(100) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `key` (`public`,`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eps_wx_response`
--

LOCK TABLES `eps_wx_response` WRITE;
/*!40000 ALTER TABLE `eps_wx_response` DISABLE KEYS */;
/*!40000 ALTER TABLE `eps_wx_response` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-07-25  0:06:53
