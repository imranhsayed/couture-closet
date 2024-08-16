-- MySQL dump 10.13  Distrib 8.0.31, for macos12 (arm64)
--
-- Host: localhost    Database: couture_closet
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'demography','Women','','2024-08-16 11:58:37','2024-08-16 11:58:37'),(2,'demography','Kids','','2024-08-16 11:58:37','2024-08-16 11:58:37'),(3,'demography','Men','','2024-08-16 11:58:37','2024-08-16 11:58:37'),(4,'size','XS','Extra Small','2024-08-16 11:58:37','2024-08-16 11:58:37'),(5,'size','S','Small','2024-08-16 11:58:37','2024-08-16 11:58:37'),(6,'size','M','Medium','2024-08-16 11:58:37','2024-08-16 11:58:37'),(7,'size','L','Large','2024-08-16 11:58:37','2024-08-16 11:58:37'),(8,'size','XL','Extra Large','2024-08-16 11:58:37','2024-08-16 11:58:37'),(9,'size','XXL','Double Extra Large','2024-08-16 11:58:37','2024-08-16 11:58:37'),(10,'brand','Nike','','2024-08-16 11:58:37','2024-08-16 11:58:37'),(11,'brand','Adidas','','2024-08-16 11:58:37','2024-08-16 11:58:37'),(12,'brand','Gucci','','2024-08-16 11:58:37','2024-08-16 11:58:37'),(13,'brand','Zara','','2024-08-16 11:58:37','2024-08-16 11:58:37'),(14,'brand','H&M','','2024-08-16 11:58:37','2024-08-16 11:58:37'),(15,'brand','Levi\'s','','2024-08-16 11:58:37','2024-08-16 11:58:37'),(16,'brand','Ralph Lauren','','2024-08-16 11:58:37','2024-08-16 11:58:37'),(17,'brand','Uniqlo','','2024-08-16 11:58:37','2024-08-16 11:58:37'),(18,'brand','Gap','','2024-08-16 11:58:37','2024-08-16 11:58:37'),(19,'brand','Calvin Klein','','2024-08-16 11:58:37','2024-08-16 11:58:37');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (25,'0001_01_01_000001_create_users_table',1),(26,'0001_01_01_000002_create_cache_table',1),(27,'2024_08_01_145226_create_orders_table',1),(28,'2024_08_01_155241_create_products_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint unsigned NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `quantity` bigint unsigned NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `line_price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order_items_order_id_foreign` (`order_id`),
  KEY `order_items_product_id_foreign` (`product_id`),
  CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_items`
--

LOCK TABLES `order_items` WRITE;
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
INSERT INTO `order_items` VALUES (1,1,1,2,'XS',50.00,100.00),(2,1,2,1,'S',5.00,5.00),(3,2,1,4,'M',50.00,200.00),(4,3,3,3,'L',100.00,300.00),(5,5,4,2,'M',75.99,151.98),(6,5,7,1,'S',115.99,115.99),(7,6,10,2,'L',85.99,171.98),(8,7,13,1,'M',150.99,150.99),(9,7,15,3,'S',55.99,167.97),(10,8,18,1,'XL',200.99,200.99),(11,9,21,1,'L',150.99,150.99),(12,9,24,2,'M',20.99,41.98),(13,10,27,3,'L',25.99,77.97),(14,10,30,1,'M',110.99,110.99),(15,11,33,2,'S',95.99,191.98),(16,12,36,1,'M',65.99,65.99),(17,12,39,2,'L',85.99,171.98),(18,13,42,1,'XL',120.99,120.99),(19,13,45,1,'S',150.99,150.99),(20,14,48,2,'M',85.99,171.98),(21,15,2,3,'L',79.99,239.97),(22,16,5,1,'XL',120.99,120.99),(23,16,8,1,'M',130.99,130.99),(24,17,11,2,'S',95.99,191.98),(25,18,14,1,'M',250.99,250.99),(26,19,17,3,'S',35.99,107.97),(27,19,20,1,'M',65.99,65.99),(28,20,23,2,'L',60.99,121.98),(29,20,26,2,'S',40.99,81.98),(30,21,29,1,'M',120.99,120.99),(31,21,32,2,'L',55.99,111.98),(32,22,35,1,'M',85.99,85.99),(33,22,38,2,'S',75.99,151.98),(34,23,41,2,'L',85.99,171.98),(35,23,44,1,'M',130.99,130.99),(36,24,47,2,'S',95.99,191.98),(37,25,50,3,'M',85.99,257.97);
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `provincial_tax_rate_id` bigint unsigned NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pst` decimal(10,2) NOT NULL,
  `gst` decimal(10,2) NOT NULL,
  `hst` decimal(10,2) NOT NULL,
  `sub_amount` decimal(10,2) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `shipping_phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1' COMMENT '1: Processing, 2: Shipped, 3:Delivered, 4:Cancelled',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  KEY `orders_provincial_tax_rate_id_foreign` (`provincial_tax_rate_id`),
  CONSTRAINT `orders_provincial_tax_rate_id_foreign` FOREIGN KEY (`provincial_tax_rate_id`) REFERENCES `provincial_tax_rates` (`id`) ON DELETE RESTRICT,
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,1,'2024-08-15 15:16:47','Store Manager','admin@pace.com',0.00,5.25,0.00,105.00,110.25,'431-333-1234','77 Ulster St, Calgary, AB','431-333-1234','77 Ulster St, Calgary, AB',1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(2,2,2,'2024-08-14 13:21:08','John Smith','john@example.com',14.00,10.00,0.00,200.00,224.00,'431-333-1234','130 Main St, Vancouver, BC','431-333-1234','130 Main St, Vancouver, BC',2,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(3,3,3,'2024-08-11 19:50:43','Jane Smith','jane@example.com',21.00,15.00,0.00,300.00,336.00,'431-333-1234','321 Oaken St, Winnipeg, MB','431-333-1234','321 Oaken St, Winnipeg, MB',3,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(4,4,4,'2024-08-15 20:11:01','Rui Xio','rui@example.com',0.00,0.00,60.00,400.00,460.00,'431-333-1234','1234 Elm St, Toronto, ON','431-333-1234','1234 Elm St, Toronto, ON',4,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(5,2,2,'2024-08-14 19:24:12','John Smith','john@example.com',18.76,13.40,0.00,267.97,300.13,'431-555-9821','130 Main St, Vancouver, BC','431-555-9821','130 Main St, Vancouver, BC',1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(6,2,2,'2024-08-15 10:10:22','John Smith','john@example.com',12.04,8.60,0.00,171.98,192.62,'431-555-9821','130 Main St, Vancouver, BC','431-555-9821','130 Main St, Vancouver, BC',2,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(7,2,2,'2024-08-16 14:55:30','John Smith','john@example.com',22.33,15.95,0.00,318.96,357.24,'431-555-9821','130 Main St, Vancouver, BC','431-555-9821','130 Main St, Vancouver, BC',3,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(8,2,2,'2024-08-12 23:46:30','John Smith','john@example.com',14.07,10.05,0.00,200.99,225.11,'431-555-9821','130 Main St, Vancouver, BC','431-555-9821','130 Main St, Vancouver, BC',1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(9,2,2,'2024-08-12 19:50:07','John Smith','john@example.com',13.51,9.65,0.00,192.97,216.13,'431-555-9821','130 Main St, Vancouver, BC','431-555-9821','130 Main St, Vancouver, BC',4,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(10,3,3,'2024-08-15 09:42:31','Jane Smith','jane@example.com',13.23,9.45,0.00,188.96,211.64,'431-555-9822','321 Oaken St, Winnipeg, MB','431-555-9822','321 Oaken St, Winnipeg, MB',1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(11,3,3,'2024-08-12 12:30:58','Jane Smith','jane@example.com',13.44,9.60,0.00,191.98,215.02,'431-555-9822','321 Oaken St, Winnipeg, MB','431-555-9822','321 Oaken St, Winnipeg, MB',2,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(12,4,7,'2024-08-16 01:52:03','Rui Xio','rui@example.com',0.00,0.00,30.94,237.97,268.91,'431-555-9821','1234 Elm St, Toronto, ON','431-555-9821','1234 Elm St, Toronto, ON',4,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(13,4,7,'2024-08-14 01:55:43','Rui Xio','rui@example.com',0.00,0.00,35.36,271.98,307.34,'431-555-9821','1234 Elm St, Toronto, ON','431-555-9821','1234 Elm St, Toronto, ON',1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(14,5,9,'2024-08-13 01:59:07','Donald Obi','donald@example.com',17.20,8.60,0.00,171.98,197.78,'431-555-9833','385 Grande Allée O, Québec, QC','431-555-9833','385 Grande Allée O, Québec, QC',2,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(15,5,9,'2024-08-13 20:57:56','Donald Obi','donald@example.com',24.00,12.00,0.00,239.97,275.97,'431-555-9833','385 Grande Allée O, Québec, QC','431-555-9833','385 Grande Allée O, Québec, QC',1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(16,6,5,'2024-08-14 08:57:38','Parth Kher','parth@example.com',0.00,0.00,37.80,251.98,289.78,'431-555-9816','100 Prince Philip Dr, St. John\'s, NL','431-555-9816','100 Prince Philip Dr, St. John\'s, NL',3,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(17,6,5,'2024-08-10 21:42:10','Parth Kher','parth@example.com',0.00,0.00,28.80,191.98,220.78,'431-555-9816','100 Prince Philip Dr, St. John\'s, NL','431-555-9816','100 Prince Philip Dr, St. John\'s, NL',2,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(18,7,6,'2024-08-14 07:43:31','Snigdha Chately','snigdha@example.com',0.00,0.00,37.65,250.99,288.64,'431-444-9821','1505 Barrington St, Halifax, NS','431-444-9821','1505 Barrington St, Halifax, NS',1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(19,7,6,'2024-08-13 21:48:01','Snigdha Chatley','snigdha@example.com',0.00,0.00,26.09,173.96,200.05,'431-444-9821','1505 Barrington St, Halifax, NS','431-444-9821','1505 Barrington St, Halifax, NS',2,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(20,8,10,'2024-08-14 15:48:29','Imran Saiyad','imran@example.com',12.24,10.20,0.00,203.96,226.40,'4310059821','2405 Legislative Dr, Regina, SK','4310059821','2405 Legislative Dr, Regina, SK',3,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(21,8,10,'2024-08-12 04:01:36','Imran Saiyad','imran@example.com',13.98,11.65,0.00,232.97,258.60,'4310059821','2405 Legislative Dr, Regina, SK','4310059821','2405 Legislative Dr, Regina, SK',4,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(22,9,8,'2024-08-11 14:11:52','Manish Kumar','manish@example.com',0.00,0.00,35.70,237.97,273.67,'5678901234','165 Richmond St, Charlottetown, PE','5678901234','165 Richmond St, Charlottetown, PE',2,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(23,9,8,'2024-08-15 11:09:45','Manish Kumar','manish@example.com',0.00,0.00,45.45,302.97,348.42,'5678901234','165 Richmond St, Charlottetown, PE','5678901234','165 Richmond St, Charlottetown, PE',1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(24,10,11,'2024-08-13 19:40:59','Aman Dawar','aman@example.com',0.00,9.60,0.00,191.98,201.58,'4318901234','4510 50 Ave, Yellowknife, NT','4318901234','4510 50 Ave, Yellowknife, NT',3,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(25,10,11,'2024-08-11 10:27:12','Aman Dawar','aman@example.com',0.00,12.90,0.00,257.97,270.87,'4318901234','4510 50 Ave, Yellowknife, NT','4318901234','4510 50 Ave, Yellowknife, NT',1,'2024-08-16 11:58:37','2024-08-16 11:58:37');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_categories`
--

DROP TABLE IF EXISTS `product_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_categories` (
  `category_id` bigint unsigned NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  KEY `product_categories_category_id_foreign` (`category_id`),
  KEY `product_categories_product_id_foreign` (`product_id`),
  CONSTRAINT `product_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  CONSTRAINT `product_categories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_categories`
--

LOCK TABLES `product_categories` WRITE;
/*!40000 ALTER TABLE `product_categories` DISABLE KEYS */;
INSERT INTO `product_categories` VALUES (3,1,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(8,1,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(12,1,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(1,2,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(6,2,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(13,2,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(3,3,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(9,3,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(18,3,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(1,4,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(6,4,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(11,4,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(3,5,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(8,5,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(19,5,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(3,6,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(4,6,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(13,6,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(1,7,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(4,7,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(14,7,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(1,8,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(7,8,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(18,8,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(1,9,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(4,9,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(13,9,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(3,10,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(8,10,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(17,10,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(1,11,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(5,11,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(13,11,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(3,12,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(4,12,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(18,12,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(1,13,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(5,13,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(19,13,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(1,14,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(7,14,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(19,14,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(1,15,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(5,15,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(12,15,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(2,16,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(6,16,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(13,16,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(1,17,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(8,17,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(18,17,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(3,18,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(9,18,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(12,18,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(3,19,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(8,19,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(14,19,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(1,20,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(4,20,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(14,20,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(3,21,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(5,21,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(11,21,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(3,22,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(8,22,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(17,22,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(3,23,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(7,23,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(13,23,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(3,24,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(8,24,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(10,24,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(1,25,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(8,25,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(19,25,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(1,26,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(8,26,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(11,26,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(3,27,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(4,27,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(19,27,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(3,28,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(5,28,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(10,28,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(1,29,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(4,29,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(13,29,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(3,30,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(9,30,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(16,30,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(1,31,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(5,31,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(18,31,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(1,32,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(4,32,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(16,32,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(1,33,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(7,33,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(19,33,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(3,34,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(9,34,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(18,34,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(1,35,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(9,35,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(17,35,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(1,36,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(9,36,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(17,36,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(3,37,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(8,37,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(18,37,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(1,38,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(8,38,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(12,38,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(3,39,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(8,39,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(18,39,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(1,40,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(5,40,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(17,40,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(3,41,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(4,41,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(13,41,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(3,42,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(9,42,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(12,42,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(3,43,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(5,43,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(16,43,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(1,44,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(9,44,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(15,44,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(1,45,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(8,45,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(13,45,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(3,46,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(4,46,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(13,46,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(1,47,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(7,47,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(10,47,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(1,48,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(7,48,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(18,48,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(3,49,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(6,49,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(13,49,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(1,50,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(4,50,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(17,50,'2024-08-16 11:58:37','2024-08-16 11:58:37',NULL);
/*!40000 ALTER TABLE `product_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint unsigned NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_primary` tinyint(1) NOT NULL DEFAULT '0',
  `display_order` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `product_images_product_id_foreign` (`product_id`),
  CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_images`
--

LOCK TABLES `product_images` WRITE;
/*!40000 ALTER TABLE `product_images` DISABLE KEYS */;
INSERT INTO `product_images` VALUES (1,1,'images/men_grey_sweater_1.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(2,2,'images/women_black_cardigan_1.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(3,3,'images/men_beige_cardigan_1.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(4,3,'images/men_beige_cardigan_2.jpg',0,2,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(5,4,'images/women_orange_cardigan_1.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(6,4,'images/women_orange_cardigan_2.jpg',0,2,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(7,5,'images/men_grey_check_jacket.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(8,6,'images/men_cream_jacket_1.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(9,7,'images/women_yellow_jacket_1.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(10,7,'images/women_yellow_jacket_2.jpg',0,2,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(11,8,'images/women_pink_feather_jacket_1.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(12,8,'images/women_pink_feather_jacket_2.jpg',0,2,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(13,9,'images/women_grey_jacket_1.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(14,9,'images/women_grey_jacket_2.jpg',0,2,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(15,10,'images/men_rust_cardigan_1.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(16,11,'images/women_beige_dress_1.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(17,12,'images/men_denim_jacket_1.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(18,13,'images/women_classic_bag.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(19,14,'images/women_brown_leather_jacket_1.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(20,15,'images/women_red_dress.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(21,16,'images/kids_blue_jacket.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(22,17,'images/women_pink_off-shoulder_top.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(23,18,'images/men_black_coat.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(24,19,'images/men_white_cardigan.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(25,20,'images/women_mustard_dress.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(26,21,'images/men_beige_long_coat.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(27,22,'images/men_red_jacket.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(28,23,'images/men_brown_trousers.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(29,24,'images/men_hat_1.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(30,24,'images/men_hat_2.jpg',0,2,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(31,25,'images/women_denim_cord_set_1.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(32,25,'images/women_denim_cord_set_2.jpg',0,2,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(33,26,'images/women_white_polka_dot_top.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(34,27,'images/men_black_cap.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(35,28,'images/men_black_nike_tee.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(36,29,'images/women_grey_cord_set.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(37,30,'images/men_black_cord_set.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(38,31,'images/women_beige_long_coat.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(39,32,'images/women_green_top.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(40,33,'images/women_white_dress.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(41,34,'images/men_maroon_cardigan.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(42,35,'images/women_purple_bag.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(43,36,'images/women_yellow_skirt.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(44,37,'images/men_olive_green_jacket.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(45,38,'images/women_pink_sweater.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(46,39,'images/men_rust_shirt.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(47,40,'images/women_white_bag.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(48,41,'images/men_brown_sweater.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(49,42,'images/men_black_long_coat.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(50,43,'images/men_brown_sweat_shirt.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(51,44,'images/women_beige_cord_set.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(52,45,'images/women_pink_feather_jacket_1.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(53,46,'images/women_beige_jacket.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(54,47,'images/men_wool_thread_jacket.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(55,48,'images/women_yellow_cord_set.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(56,49,'images/men_white_cardigan.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(57,50,'images/women_beige_long_coat.jpg',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37');
/*!40000 ALTER TABLE `product_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_reviews`
--

DROP TABLE IF EXISTS `product_reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_reviews` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `order_id` bigint unsigned NOT NULL,
  `rating` int NOT NULL COMMENT 'rating >= 1 AND rating <= 5',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verified_purchase` tinyint(1) NOT NULL DEFAULT '1',
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_reviews_user_id_product_id_order_id_unique` (`user_id`,`product_id`,`order_id`),
  KEY `product_reviews_product_id_foreign` (`product_id`),
  KEY `product_reviews_order_id_foreign` (`order_id`),
  CONSTRAINT `product_reviews_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  CONSTRAINT `product_reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  CONSTRAINT `product_reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_reviews`
--

LOCK TABLES `product_reviews` WRITE;
/*!40000 ALTER TABLE `product_reviews` DISABLE KEYS */;
INSERT INTO `product_reviews` VALUES (1,1,2,1,5,'Incredibly Comfortable and Perfect for Everyday Use','I was pleasantly surprised by how comfortable this product is. It fits perfectly and has quickly become my go-to choice for daily wear. The fabric is soft and breathable, making it ideal for long hours of use. Even after multiple washes, it still looks as good as new. Highly recommend this to anyone looking for a reliable and stylish option.',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(2,2,3,2,3,'Great Value for Money, A Few Minor Flaws','This product offers good value for its price. The design is appealing, and the material feels durable. However, there are a few minor flaws, such as the stitching in some areas not being as strong as expected. Despite this, it’s still a good buy for the price, and I’m generally satisfied with my purchase.',1,0,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(3,2,2,3,4,'Perfect Fit, Excellent Quality','This product fits me perfectly, and the quality is outstanding. I’ve worn it multiple times, and it has maintained its shape and color. The attention to detail in the craftsmanship is evident, and it’s clear that this product was made to last. I’m extremely happy with this purchase and would recommend it to others without hesitation.',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(4,4,3,1,4,'Good Design, But Material Could Be Better','The design of this product is definitely eye-catching, and it fits well. However, the material feels a bit thin and not as durable as I had hoped. It’s still a decent product, but I’m not sure how long it will last with regular use. If the material were a bit thicker, it would be perfect.',1,0,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(5,5,2,2,5,'Outstanding Quality, Will Definitely Purchase Again','I’m very impressed with the quality of this product. It has quickly become one of my favorites due to its excellent craftsmanship and the comfort it provides. The fabric is soft yet sturdy, and it has held up well even after several washes. I will definitely be purchasing more from this brand in the future.',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(6,1,3,3,4,'Decent Product, But Room for Improvement','The product is decent overall, but I think there’s room for improvement. The fit is good, and the design is stylish, but the material feels a bit cheap compared to other products in the same price range. It’s not bad, but I was expecting a little more in terms of quality.',1,0,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(7,2,2,1,5,'Meets Expectations, Nothing Extraordinary','This product meets the basic expectations, but it’s not exceptional. The fit is fine, and the quality is adequate, but there’s nothing about it that really stands out. It’s a good option if you’re looking for something simple and affordable, but don’t expect anything too special.',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(8,3,3,2,3,'Stylish and Comfortable, Very Satisfied','I’m really pleased with this product. It’s both stylish and comfortable, making it a great choice for everyday wear. The material is soft and feels great against the skin, and the fit is just right. I’ve received several compliments on it already. I’m very satisfied with this purchase and would recommend it to others.',1,0,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(9,4,2,3,5,'Average Quality, Expected More for the Price','The product is okay, but I expected a bit more considering the price. The design is nice, but the material feels somewhat lacking in quality. It’s not bad, but it’s not great either. I think there are better options available in this price range, and I would probably choose something else next time.',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(10,5,3,1,5,'Excellent Value for Money, Highly Recommend','This product offers excellent value for money. The quality is impressive, and the fit is just right. It’s a versatile piece that works well for both casual and semi-formal occasions. I’m very happy with this purchase and would highly recommend it to anyone looking for a high-quality product at a reasonable price.',1,1,'2024-08-16 11:58:37','2024-08-16 11:58:37');
/*!40000 ALTER TABLE `product_reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `sku` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Example: For a brand, medium-sized t-shirt, the SKU might be "CC-NIKE-M-001"',
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock_quantity` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_sku_unique` (`sku`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'CC-001','Men Grey Sweater','A stylish grey sweater for men.',59.99,100,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(2,'CC-002','Women Black Cardigan','A trendy black cardigan for women.',79.99,50,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(3,'CC-003','Men Beige Cardigan','A cozy beige cardigan for men.',69.99,70,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(4,'CC-004','Women Orange Cardigan','A vibrant orange cardigan for women.',75.99,80,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(5,'CC-005','Men Grey Check Jacket','A stylish grey check jacket for men.',120.99,50,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(6,'CC-006','Men Cream Jacket','A classy cream jacket for men.',110.99,40,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(7,'CC-007','Women Yellow Jacket','A bright yellow jacket for women.',115.99,60,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(8,'CC-008','Women Pink Feather Jacket','A stylish pink feather jacket for women.',130.99,30,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(9,'CC-009','Women Grey Jacket','A versatile grey jacket for women.',105.99,75,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(10,'CC-010','Men Rust Cardigan','A warm rust cardigan for men.',85.99,90,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(11,'CC-011','Women Beige Dress','An elegant beige dress for women.',95.99,55,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(12,'CC-012','Men Denim Jacket','A classic denim jacket for men.',110.99,50,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(13,'CC-013','Women Classic Bag','A timeless classic bag for women.',150.99,25,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(14,'CC-014','Women Brown Leather Jacket','A premium brown leather jacket for women.',250.99,20,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(15,'CC-015','Women Red Dress','A stylish red dress for women.',55.99,45,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(16,'CC-016','Kids Blue Jacket','A cute blue jacket for kids.',45.99,85,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(17,'CC-017','Women Pink Off-Shoulder Top','A stylish pink off-shoulder top for women.',35.99,40,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(18,'CC-018','Men Black Coat','A premium black coat for men.',200.99,35,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(19,'CC-019','Men White Cardigan','A sleek white cardigan for men.',75.99,60,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(20,'CC-020','Women Mustard Dress','A vibrant mustard dress for women.',65.99,70,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(21,'CC-021','Men Beige Long Coat','A classy beige coat for men.',150.99,30,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(22,'CC-022','Men Red Jacket','A bold red jacket for men.',95.99,55,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(23,'CC-023','Men Brown Trousers','Comfortable brown trousers for men.',60.99,70,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(24,'CC-024','Men Hat','A stylish men’s hat.',20.99,100,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(25,'CC-025','Women Denim Cord Set','A chic denim cord set for women.',130.99,40,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(26,'CC-026','Women White Polka Dot Top','A playful white polka dot top for women.',40.99,75,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(27,'CC-027','Men Black Cap','A sleek black cap for men.',25.99,100,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(28,'CC-028','Men Black Nike Tee','A sporty black Nike tee for men.',50.99,60,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(29,'CC-029','Women Grey Cord Set','A cozy grey cord set for women.',120.99,55,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(30,'CC-030','Men Black Cord Set','A trendy black cord set for men.',110.99,50,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(31,'CC-031','Women Beige Long Coat','A sleek beige long coat for women.',145.99,45,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(32,'CC-032','Women Green Top','A fashionable green top for women.',55.99,90,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(33,'CC-033','Women White Dress','A classy white dress for women.',95.99,60,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(34,'CC-034','Men Maroon Cardigan','A cozy maroon cardigan for men.',70.99,65,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(35,'CC-035','Women Purple Bag','A trendy purple bag for women.',85.99,40,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(36,'CC-036','Women Yellow Skirt','A vibrant yellow skirt for women.',65.99,70,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(37,'CC-037','Men Olive Green Jacket','A stylish olive green jacket for men.',105.99,75,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(38,'CC-038','Women Pink Sweater','A cozy pink sweater for women.',75.99,90,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(39,'CC-039','Men Rust Shirt','A trendy rust shirt for men.',85.99,50,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(40,'CC-040','Women White Bag','A sleek white bag for women.',95.99,55,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(41,'CC-041','Men Brown Sweater','A comfortable brown sweater for men.',85.99,60,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(42,'CC-042','Men Black Long Coat','A formal black coat for men.',120.99,50,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(43,'CC-043','Men Brown Leather Jacket','A premium brown leather jacket for men.',150.99,20,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(44,'CC-044','Women Beige Cord Set','A cozy beige cord set for women.',130.99,30,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(45,'CC-045','Women Pink Feather Jacket','A chic pink feather jacket for women.',150.99,25,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(46,'CC-046','Men Beige Jacket','A stylish beige jacket for men.',110.99,50,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(47,'CC-047','Women Denim Jacket','A casual denim jacket for women.',95.99,45,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(48,'CC-048','Women White Skirt','A trendy white skirt for women.',85.99,55,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(49,'CC-049','Men White Cardigan','A comfortable white cardigan for men.',75.99,60,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL),(50,'CC-050','Women Beige Long Coat','Sleek beige long coat for women.',85.99,60,'2024-08-16 11:58:35','2024-08-16 11:58:35',NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provincial_tax_rates`
--

DROP TABLE IF EXISTS `provincial_tax_rates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `provincial_tax_rates` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `province_code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gst_rate` decimal(5,3) NOT NULL,
  `pst_rate` decimal(5,3) NOT NULL,
  `hst_rate` decimal(5,3) NOT NULL,
  `vat_rate` decimal(5,3) NOT NULL DEFAULT '0.000',
  `total_tax_rate` decimal(5,3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `provincial_tax_rates_province_code_unique` (`province_code`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provincial_tax_rates`
--

LOCK TABLES `provincial_tax_rates` WRITE;
/*!40000 ALTER TABLE `provincial_tax_rates` DISABLE KEYS */;
INSERT INTO `provincial_tax_rates` VALUES (1,'AB','Alberta',0.050,0.000,0.000,0.000,0.050,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(2,'BC','British Columbia',0.050,0.070,0.000,0.000,0.120,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(3,'MB','Manitoba',0.050,0.070,0.000,0.000,0.120,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(4,'NB','New Brunswick',0.000,0.000,0.150,0.000,0.150,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(5,'NL','Newfoundland and Labrador',0.000,0.000,0.150,0.000,0.150,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(6,'NS','Nova Scotia',0.000,0.000,0.150,0.000,0.150,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(7,'ON','Ontario',0.000,0.000,0.130,0.000,0.130,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(8,'PE','Prince Edward Island',0.000,0.000,0.150,0.000,0.150,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(9,'QC','Quebec',0.050,0.100,0.000,0.000,0.150,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(10,'SK','Saskatchewan',0.050,0.060,0.000,0.000,0.110,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(11,'NT','Northwest Territories',0.050,0.000,0.000,0.000,0.050,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(12,'NU','Nunavut',0.050,0.000,0.000,0.000,0.050,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(13,'YT','Yukon',0.050,0.000,0.000,0.000,0.050,'2024-08-16 11:58:37','2024-08-16 11:58:37');
/*!40000 ALTER TABLE `provincial_tax_rates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('BZJxwMI4b9gjmv1oJeeZRfGwzGP2lh0ZaPBYWJIV',1,'127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoiS25oZXlCcXZPYmY5UU5aR1lZWEdYMlZrZjRGZ2JIc1VzeDBHNTRWeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9jYXRlZ29yeSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzIzODA5NTY5O319',1723809591);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transactions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint unsigned NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `response` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transactions_order_id_foreign` (`order_id`),
  CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` VALUES (1,1,'16020','1','{\"ref_number\":50,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2024-16122\",\"errors\":[],\"trans_id\":16122}}','2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(2,2,'16021','1','{\"ref_number\":50,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2024-16122\",\"errors\":[],\"trans_id\":16122}}','2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(3,3,'16022','1','{\"ref_number\":50,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2024-16122\",\"errors\":[],\"trans_id\":16122}}','2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(4,4,'16023','1','{\"ref_number\":50,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2024-16123\",\"errors\":[],\"trans_id\":16123}}','2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(5,5,'16024','1','{\"ref_number\":50,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2024-16124\",\"errors\":[],\"trans_id\":16124}}','2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(6,6,'16025','1','{\"ref_number\":50,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2024-16125\",\"errors\":[],\"trans_id\":16125}}','2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(7,7,'16026','1','{\"ref_number\":50,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2024-16126\",\"errors\":[],\"trans_id\":16126}}','2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(8,8,'16027','1','{\"ref_number\":50,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2024-16127\",\"errors\":[],\"trans_id\":16127}}','2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(9,9,'16028','1','{\"ref_number\":50,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2024-16128\",\"errors\":[],\"trans_id\":16128}}','2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(10,10,'16029','1','{\"ref_number\":50,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2024-16129\",\"errors\":[],\"trans_id\":16129}}','2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(11,11,'16030','1','{\"ref_number\":50,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2024-16130\",\"errors\":[],\"trans_id\":16130}}','2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(12,12,'16031','1','{\"ref_number\":50,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2024-16131\",\"errors\":[],\"trans_id\":16131}}','2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(13,13,'16032','1','{\"ref_number\":50,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2024-16132\",\"errors\":[],\"trans_id\":16132}}','2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(14,14,'16033','1','{\"ref_number\":50,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2024-16133\",\"errors\":[],\"trans_id\":16133}}','2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(15,15,'16034','1','{\"ref_number\":50,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2024-16134\",\"errors\":[],\"trans_id\":16134}}','2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(16,16,'16035','1','{\"ref_number\":50,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2024-16135\",\"errors\":[],\"trans_id\":16135}}','2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(17,17,'16036','1','{\"ref_number\":50,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2024-16136\",\"errors\":[],\"trans_id\":16136}}','2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(18,18,'16037','1','{\"ref_number\":50,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2024-16137\",\"errors\":[],\"trans_id\":16137}}','2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(19,19,'16038','1','{\"ref_number\":50,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2024-16138\",\"errors\":[],\"trans_id\":16138}}','2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(20,20,'16039','1','{\"ref_number\":50,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2024-16139\",\"errors\":[],\"trans_id\":16139}}','2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(21,21,'16040','1','{\"ref_number\":50,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2024-16140\",\"errors\":[],\"trans_id\":16140}}','2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(22,22,'16041','1','{\"ref_number\":50,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2024-16141\",\"errors\":[],\"trans_id\":16141}}','2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(23,23,'16042','1','{\"ref_number\":50,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2024-16142\",\"errors\":[],\"trans_id\":16142}}','2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(24,24,'16043','1','{\"ref_number\":50,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2024-16143\",\"errors\":[],\"trans_id\":16143}}','2024-08-16 11:58:37','2024-08-16 11:58:37',NULL),(25,25,'16044','1','{\"ref_number\":50,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2024-16144\",\"errors\":[],\"trans_id\":16144}}','2024-08-16 11:58:37','2024-08-16 11:58:37',NULL);
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_addresses`
--

DROP TABLE IF EXISTS `user_addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_addresses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_primary` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_addresses_user_id_foreign` (`user_id`),
  CONSTRAINT `user_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_addresses`
--

LOCK TABLES `user_addresses` WRITE;
/*!40000 ALTER TABLE `user_addresses` DISABLE KEYS */;
INSERT INTO `user_addresses` VALUES (1,1,'123 Main St','R1A3R5','New York','NY','USA',1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(2,2,'456 Elm St','R6T8A0','Los Angeles','CA','USA',1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(3,3,'789 Oak St','R5C3S1','Chicago','IL','USA',1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(4,3,'789 Oak St','R5Z3N1','Chicago','IL','USA',1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(5,4,'123 Maple St','R67890','Winnipeg','MB','CANADA',1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(6,5,'456 Pine St','R98765','Los Angeles','CA','USA',1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(7,6,'101 Birch St','R11223','Winnipeg','MB','CANADA',1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(8,7,'202 Cedar St','233445','Houston','TX','USA',1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(9,8,'303 Elm St','355667','Winnipeg','MB','CANADA',1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(10,9,'404 Walnut St','377889','Dallas','TX','USA',1,'2024-08-16 11:58:37','2024-08-16 11:58:37'),(11,10,'505 Chestnut St','399001','Mohali','PB','INDIA',1,'2024-08-16 11:58:37','2024-08-16 11:58:37');
/*!40000 ALTER TABLE `user_addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `role_type` tinyint NOT NULL COMMENT '0: admin, 1: customer, 2: guests',
  `role_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'role_type = 0 -> admin, role_type = 1 -> customer, role_type = 2 -> guests',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_user_role` (`user_id`,`role_name`),
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
INSERT INTO `user_roles` VALUES (1,1,0,'admin','2024-08-16 11:58:37','2024-08-16 11:58:37'),(2,2,1,'customer','2024-08-16 11:58:37','2024-08-16 11:58:37'),(3,3,2,'guest','2024-08-16 11:58:37','2024-08-16 11:58:37'),(4,4,1,'customer','2024-08-16 11:58:37','2024-08-16 11:58:37'),(5,5,2,'customer','2024-08-16 11:58:37','2024-08-16 11:58:37'),(6,6,1,'customer','2024-08-16 11:58:37','2024-08-16 11:58:37'),(7,7,2,'customer','2024-08-16 11:58:37','2024-08-16 11:58:37'),(8,8,1,'customer','2024-08-16 11:58:37','2024-08-16 11:58:37'),(9,9,2,'guest','2024-08-16 11:58:37','2024-08-16 11:58:37'),(10,10,1,'customer','2024-08-16 11:58:37','2024-08-16 11:58:37');
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'$2y$12$DqCwRgxcUQ/a03/4f/yIJ.LqZH6p7lQGvKhwHl2NzV7dhc2aDVwRG','Store Manager','','admin@pace.com','4318889201','2024-08-16 16:58:35',1,'5045qMWwXR','2024-08-16 11:58:35','2024-08-16 11:58:35'),(2,'$2y$12$sDsxukGWmZAaQ3rT2eXfL.o4QWyzzjvuUd9q7mlOM8A.hBpSAhEAC','John','Smith','john@example.com','431-555-9821','2024-08-16 16:58:35',0,'gq60akaoCa','2024-08-16 11:58:37','2024-08-16 11:58:37'),(3,'$2y$12$Uw4eksbX2mrkqToa.CIi0.4Bhfj9/ZsxJs.adfOr01vU57y0zP6Ee','Jane','Smith','jane@example.com','431-555-9822','2024-08-16 16:58:36',0,'WgWpMta9c9','2024-08-16 11:58:37','2024-08-16 11:58:37'),(4,'$2y$12$f0a.Jn15ZvCgNlAenkFoZOtqg6kBxCHwAWMyB0.N61uyESyCpQxtC','Rui','Xio','rui@example.com','431-555-9821','2024-08-16 16:58:36',0,'v0K4En1vpx','2024-08-16 11:58:37','2024-08-16 11:58:37'),(5,'$2y$12$sJhfcD5bW6xuHI8g0Xd0mOBqyryWTvhXb1naIcpXUz7lC2mtiwSZe','Donald','Obi','donald@example.com','431-555-9833','2024-08-16 16:58:36',0,'D7F06RL3Vv','2024-08-16 11:58:37','2024-08-16 11:58:37'),(6,'$2y$12$g.WKdLYkvF7r7AxWnlReSeUvNvMsfOSbdyyS4HjPEGeUAMRmygMQW','Parth','Kher','parth@example.com','431-555-9816','2024-08-16 16:58:36',0,'k4MGpWPZUa','2024-08-16 11:58:37','2024-08-16 11:58:37'),(7,'$2y$12$B4P6KiXFOJ0RN3sFHKUYMexnj0tI9zZv00JpV/IbaPDCetQZwNkja','Snigdha','Ch','snigdha@example.com','431-444-9821','2024-08-16 16:58:37',0,'wfXEO3VwQE','2024-08-16 11:58:37','2024-08-16 11:58:37'),(8,'$2y$12$gOpBRiJ4YHXj/7JVdSJOCezsucAsOIYbxJ74gK2NF14ucz4OHeF1S','Imran','Saiyad','imran@example.com','4310059821','2024-08-16 16:58:37',0,'0LGjapwCW9','2024-08-16 11:58:37','2024-08-16 11:58:37'),(9,'$2y$12$X3oBFUpmgdxG1tO9NFwCieIZwbKbiZnIm4e1fKx/Kg2qTtc3AX/Ze','Manish','Kumar','manish@example.com','5678901234','2024-08-16 16:58:37',0,'M1TRKwdJLV','2024-08-16 11:58:37','2024-08-16 11:58:37'),(10,'$2y$12$P1A/h11AHCOJFOhcUMdXT.4UqHAMowFf4xTB4zDvIQSRIB/S3Hk32','Aman','Dawar','aman@example.com','4318901234','2024-08-16 16:58:37',0,'6TT9CcbRDz','2024-08-16 11:58:37','2024-08-16 11:58:37');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-08-16  7:00:25
