-- MySQL dump 10.13  Distrib 5.5.40, for Win64 (x86)
--
-- Host: localhost    Database: projectforsmu
-- ------------------------------------------------------
-- Server version	5.5.40-log

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
-- Table structure for table `emp_info`
--

DROP TABLE IF EXISTS `emp_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emp_info` (
  `emp_nickname` varchar(50) DEFAULT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `emp_sex` varchar(50) DEFAULT NULL,
  `emp_age` varchar(50) DEFAULT NULL,
  `emp_phone_no` varchar(50) DEFAULT NULL,
  `emp_email` varchar(50) DEFAULT NULL,
  `emp_no` varchar(50) NOT NULL,
  `emp_department` varchar(50) DEFAULT NULL,
  `emp_position` varchar(50) DEFAULT NULL,
  `emp_entry_date` date DEFAULT NULL,
  `emp_borthday` date DEFAULT NULL,
  `emp_nation` varchar(50) DEFAULT NULL,
  `emp_identify` varchar(50) DEFAULT NULL,
  `emp_city` varchar(50) DEFAULT NULL,
  `emp_address` varchar(50) DEFAULT NULL,
  `emp_password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`emp_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_info`
--

LOCK TABLES `emp_info` WRITE;
/*!40000 ALTER TABLE `emp_info` DISABLE KEYS */;
INSERT INTO `emp_info` VALUES ('root','张三','男','23','13944556655','1425211552@qq.com','E00001','人事部','普通员工','2014-08-09','1992-02-12','汉族','342923199201213010','上海','上海市浦东新区临港新城海港大道1550号','111'),('stupidman','李四','男','25','18017385655','1605396773@qq.com','E00002','销售部','部门主管','2014-03-05','1985-07-05','汉族','342923199201243501','上海','上海市浦东新区浦建路725弄2号','111'),('candy','王五','女','21','18017523629','24253262@qq.com','E00003','财务部','普通员工','2015-03-04','1994-06-05','汉族','52214235463224464457','上海','上海市徐汇区桂箐路69号','111'),('girl','小米','女','22','18012345678','1234567@qq.com','E00004','财务部','部门主管','2015-04-01','1993-02-02','汉族','4564566789464647','上海','上海市浦东新区民生路1224弄','111'),('pig','小张','女','22','18012345673','123453437@qq.com','E00005','行政部','普通员工','2015-04-01','1993-02-15','汉族','456456678941545647','上海','上海市浦东新区民生路1224弄','111'),('pigit','小新','男','21','18012345633','154453437@qq.com','E00006','培训部','普通员工','2015-04-05','1994-06-15','汉族','456456672341545647','上海','上海市浦东新区民生路1225弄','111'),('tommy','汤米','男','25','18312345633','1534453437@qq.com','E00007','技术部','普通员工','2015-11-05','1990-06-15','美籍','456453472341545647','上海','上海市浦东新区临港新城海港大道1550号','111'),('goodboy','林正','男','24','18352345633','15354453437@qq.com','E00008','人事部','普通员工','2014-11-05','1991-06-15','汉族','45643472341545647','上海','上海市浦东新区临港新城海港大道1552号','111'),('goodbit','钱十','男','24','18352346633','1535445337@qq.com','E00009','销售部','普通员工','2014-12-05','1991-06-15','汉族','45643455341545647','上海','上海市浦东新区临港新城海港大道1554号','111'),('goodbit','赵七','男','24','18652346633','1535443337@qq.com','E00010','销售部','普通员工','2014-12-05','1991-12-15','汉族','45643455334545647','上海','上海市浦东新区临港新城海港大道1554号','111'),('test','李丽',NULL,NULL,'13916423620',NULL,'E00011','技术部','部门主管','2015-03-03',NULL,NULL,NULL,NULL,NULL,'123'),('',NULL,NULL,NULL,NULL,NULL,'E00012','培训部','普通员工','2014-08-08',NULL,'汉族','32134654774899',NULL,NULL,NULL),('',NULL,NULL,NULL,NULL,NULL,'E00013','培训部','普通员工','2014-08-08',NULL,'汉族','32134633434374899',NULL,NULL,NULL),('',NULL,NULL,NULL,NULL,NULL,'E00014','技术部','普通员工','2014-09-08',NULL,'汉族','321346332342344374899',NULL,NULL,NULL),(NULL,NULL,NULL,NULL,NULL,NULL,'E00015','财务部','普通员工','2015-04-28',NULL,NULL,'342923200212120010',NULL,NULL,NULL),(NULL,NULL,NULL,NULL,NULL,NULL,'E00016','财务部','普通员工','2015-04-30',NULL,NULL,'342923200212120078',NULL,NULL,NULL),(NULL,NULL,NULL,NULL,NULL,NULL,'E00017','财务部','普通员工','2015-04-30',NULL,NULL,'342923200212120078',NULL,NULL,NULL),(NULL,NULL,NULL,NULL,NULL,NULL,'E00018','财务部','普通员工','2015-04-30',NULL,NULL,'342923200212120078',NULL,NULL,NULL);
/*!40000 ALTER TABLE `emp_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `house_info`
--

DROP TABLE IF EXISTS `house_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house_info` (
  `house_no` varchar(50) NOT NULL,
  `house_type` varchar(50) DEFAULT NULL,
  `house_area` varchar(50) DEFAULT NULL,
  `house_price` varchar(50) DEFAULT NULL,
  `house_flag` varchar(50) DEFAULT NULL,
  `house_city` varchar(50) DEFAULT NULL,
  `house_address` varchar(50) DEFAULT NULL,
  `house_green_rating` varchar(50) DEFAULT NULL,
  `house_property` varchar(50) DEFAULT NULL,
  `house_owner_name` varchar(50) DEFAULT NULL,
  `house_owner_phone_no` varchar(50) DEFAULT NULL,
  `house_emp_no` varchar(50) DEFAULT NULL,
  `house_out_flag` varchar(50) DEFAULT '0',
  PRIMARY KEY (`house_no`),
  KEY `house_emp_no` (`house_emp_no`),
  CONSTRAINT `house_info_ibfk_1` FOREIGN KEY (`house_emp_no`) REFERENCES `emp_info` (`emp_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_info`
--

LOCK TABLES `house_info` WRITE;
/*!40000 ALTER TABLE `house_info` DISABLE KEYS */;
INSERT INTO `house_info` VALUES ('H00001','三室两厅','125平米','7500元/月','0','上海','上海市浦东新区南泉路金浦花园2号','35%','上海新兴物业','金一','13322445566',NULL,'0'),('H00002','两室一厅','80平米','200万元','1','上海','上海市浦东新区蓝村路23弄','35%','上海新兴物业','钱而','13322446688','E00001','0'),('H00003','一室一厅','60平米','3500元/月','0','上海','上海市浦东新区蓝村路27弄','35%','上海新兴物业','赵六','13522446688','E00001','0'),('H00004','三室两厅','100','8500','0','上海','上海市徐汇区桂箐路69号','38%','上海天山物业','成哥','18024569546',NULL,'0'),('H00005','一室一厅','35','3500','0','上海','浦东新区临港新城海港大道1550号','28%','上海海事大学','sha','135665544565',NULL,'0');
/*!40000 ALTER TABLE `house_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `login_emp_no` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'root','111','E00001'),(2,'admin','111','E00001');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meeting`
--

DROP TABLE IF EXISTS `meeting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meeting` (
  `meeting_id` int(11) NOT NULL AUTO_INCREMENT,
  `meeting_theme` varchar(200) DEFAULT NULL,
  `meeting_content` text,
  `meeting_address` varchar(200) DEFAULT NULL,
  `meeting_start` datetime DEFAULT NULL,
  `meeting_end` datetime DEFAULT NULL,
  PRIMARY KEY (`meeting_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meeting`
--

LOCK TABLES `meeting` WRITE;
/*!40000 ALTER TABLE `meeting` DISABLE KEYS */;
INSERT INTO `meeting` VALUES (1,'每周例行会议','本次会议的主要内容有：1送四大发生2按时缴费','3021会议室','2015-05-05 12:00:00','2015-04-07 14:05:00'),(2,'公司走向','本次会议的主要内容有：1送四大发生2按时缴费','3023会议室','2015-05-05 12:00:00','2015-04-07 14:05:00'),(3,'主题会议','这是一个重要的会议，所有员工必须参加，未到者请事先请假！','会议室3049','2015-05-05 12:00:00','2015-05-05 13:30:00'),(4,'主题会议','这是一个重要的会议，所有员工必须参加，未到者请事先请假！','会议室3049','2015-05-05 12:00:00','2015-05-05 13:30:00'),(5,'开会','新项目启动','会议室234','2015-04-29 12:15:00','2015-04-29 14:15:00');
/*!40000 ALTER TABLE `meeting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notice`
--

DROP TABLE IF EXISTS `notice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `notice_theme` varchar(50) DEFAULT NULL,
  `notice_content` text,
  `notice_emp_no` varchar(50) DEFAULT NULL,
  `notice_date` date DEFAULT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notice`
--

LOCK TABLES `notice` WRITE;
/*!40000 ALTER TABLE `notice` DISABLE KEYS */;
INSERT INTO `notice` VALUES (1,'这是测试标题1','这是测试内容1','E000001','2015-03-31'),(2,'这是测试标题2','这是测试内容2','E000002','2015-03-29'),(3,'这是测试标题3','这是测试内容3','E000003','2015-03-30'),(4,'这是测试标题4','这是测试内容4','E000004','2015-03-15'),(5,'这是测试标题5','这是测试内容5','E000005','2015-03-14'),(6,'这是测试标题6','这是测试内容6，于2015年2月25日在上海环球金融中心进行考察，考察时间为1小时，名额有限先到先得！','E000006','2015-03-16'),(7,'这是测试标题6','假如某个电脑生产商，它的数据库中保存着整机和配件的产品信息。用来保存整机产品信息的表叫做Pc；用来保存配件供货信息的表叫做Parts。在Pc表中有一个字段，用来描述这款电脑所使用的CPU型号；\n在Parts 表中相应有一个字段，描述的正是CPU的型号，我们可以把它想成是全部CPU的型号列表。很显然，这个厂家生产的电脑，其使用的CPU一定是供货信息表(parts)中存在的型号。这时，两个表中就存在一种约束关系(constraint)——Pc表中的CPU型号受到Parts 表中型号的约束。','E000006','2015-03-16'),(8,'五一放假','五一小长假来了，请个员工出行注意安全！',NULL,'2015-04-28'),(9,'这是公告','五一注意事项','E00001','2015-04-29');
/*!40000 ALTER TABLE `notice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roomer_info`
--

DROP TABLE IF EXISTS `roomer_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roomer_info` (
  `roomer_no` varchar(50) NOT NULL,
  `roomer_name` varchar(50) DEFAULT NULL,
  `roomer_sex` varchar(50) DEFAULT NULL,
  `roomer_phone_no` varchar(50) DEFAULT NULL,
  `roomer_email` varchar(50) DEFAULT NULL,
  `roomer_house_no` varchar(50) DEFAULT NULL,
  `roomer_date` date DEFAULT NULL,
  `roomer_period` varchar(50) DEFAULT NULL,
  `roomer_rent` varchar(50) DEFAULT NULL,
  `roomer_complete` varchar(50) DEFAULT NULL,
  `roomer_emp_no` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`roomer_no`),
  KEY `roomer_emp_no` (`roomer_emp_no`),
  CONSTRAINT `roomer_info_ibfk_1` FOREIGN KEY (`roomer_emp_no`) REFERENCES `emp_info` (`emp_no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roomer_info`
--

LOCK TABLES `roomer_info` WRITE;
/*!40000 ALTER TABLE `roomer_info` DISABLE KEYS */;
INSERT INTO `roomer_info` VALUES ('R00001','刘鑫','男','18817572422','1605396773@qq.com','H00001','2014-02-05','1','0','0',NULL),('R00002','丽丽','女','18817572442','1605396773@qq.com','H00003','2014-02-23','3','0','0','E00001'),('R00003','欣欣','女','18025456325','1605396773@qq.com','H00002','2014-02-23','1','1','0','E00001'),('R00004','小金','男','15866554451','1605396773@qq.com','H00001','2014-02-05','2','0','0',NULL),('R00005','刘小静','女','15922556655','1521364161@qq.com','H00004','2015-05-05','4','0','0','E00001'),('R00006','小李','男','18025426952','1605396773@qq.com','H00004','2015-04-28','2','0','0',NULL);
/*!40000 ALTER TABLE `roomer_info` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-04-29 16:32:14
