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
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `category` VALUES (1,'demography','Women','','2024-08-02 15:34:55','2024-08-02 15:34:55'),(2,'demography','Kids','','2024-08-02 15:34:55','2024-08-02 15:34:55'),(3,'demography','Men','','2024-08-02 15:34:55','2024-08-02 15:34:55'),(4,'size','XS','Extra Small','2024-08-02 15:34:55','2024-08-08 16:26:16'),(5,'size','S','Small','2024-08-02 15:34:55','2024-08-08 16:26:29'),(6,'size','M','Medium','2024-08-02 15:34:55','2024-08-08 16:26:29'),(7,'size','L','Large','2024-08-02 15:34:55','2024-08-08 16:26:29'),(8,'size','XL','Extra Large','2024-08-02 15:34:55','2024-08-08 16:26:29'),(9,'size','XXL','Double Extra Large','2024-08-02 15:34:55','2024-08-08 16:26:29'),(10,'brand','Nike','','2024-08-02 15:34:55','2024-08-08 16:26:29'),(11,'brand','Adidas','','2024-08-02 15:34:55','2024-08-08 16:26:29'),(12,'brand','Gucci','','2024-08-02 15:34:55','2024-08-08 16:26:29'),(13,'brand','Zara','','2024-08-02 15:34:55','2024-08-08 16:26:29'),(14,'brand','H&M','','2024-08-02 15:34:55','2024-08-08 16:26:29'),(15,'brand','Levi\'s','','2024-08-02 15:34:55','2024-08-08 16:26:29'),(16,'brand','Ralph Lauren','','2024-08-02 15:34:55','2024-08-08 16:26:29'),(17,'brand','Uniqlo','','2024-08-02 15:34:55','2024-08-08 16:26:29'),(18,'brand','Gap','','2024-08-02 15:34:55','2024-08-08 16:26:29'),(19,'brand','Calvin Klein','','2024-08-02 15:34:55','2024-08-08 16:26:29');
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (13,'0001_01_01_000001_create_users_table',1),(14,'0001_01_01_000002_create_cache_table',1),(15,'2024_08_01_145226_create_orders_table',1),(16,'2024_08_01_155241_create_products_table',1);
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
  `size` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `line_price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order_items_order_id_foreign` (`order_id`),
  KEY `order_items_product_id_foreign` (`product_id`),
  CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_items`
--

LOCK TABLES `order_items` WRITE;
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
INSERT INTO `order_items` VALUES (1,1,1,2,'S',50.00,100.00),(2,1,2,1,'L',5.00,5.00),(3,2,1,4,'M',50.00,200.00),(4,4,3,3,'XLL',100.00,300.00);
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
  `shipping_phone_number` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_phone_number` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` tinyint DEFAULT '1' COMMENT '1: Pending, 2: Processing, 3:Shipped, 4:Delivered',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  KEY `orders_provincial_tax_rate_id_foreign` (`provincial_tax_rate_id`),
  CONSTRAINT `orders_provincial_tax_rate_id_foreign` FOREIGN KEY (`provincial_tax_rate_id`) REFERENCES `provincial_tax_rates` (`id`) ON DELETE RESTRICT,
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,1,'2024-08-03 15:34:55','test1','test1@example.com',0.00,5.00,0.00,100.00,805.00,'431-331-1234','77 Ulster St, Calgary, AB','431-331-1234','77 Ulster St, Calgary, AB',1,'2024-08-02 15:34:55','2024-08-11 02:18:31'),(2,2,2,'2024-08-04 15:34:55','test2','test2@example.com',7.00,5.00,0.00,200.00,212.00,'431-332-1234','130 Main St, Vancouver, BC','431-332-1234','130 Main St, Vancouver, BC',1,'2024-08-02 15:34:55','2024-08-11 02:18:31'),(3,3,3,'2024-08-02 15:34:55','test3','test3@example.com',7.00,5.00,0.00,300.00,312.00,'431-333-1234','321 Oaken St, Winnipeg, MB','431-333-1234','321 Oaken St, Winnipeg, MB',1,'2024-08-02 15:34:55','2024-08-11 02:18:31'),(4,4,1,'2024-08-01 15:34:55','test4','test1@example.com',0.00,5.00,0.00,100.00,105.00,'431-334-1234','77 Ulster St, Calgary, AB','431-334-1234','77 Ulster St, Calgary, AB',1,'2024-08-02 15:34:55','2024-08-11 02:18:31'),(5,4,1,'2024-08-09 19:37:23','test5','Xiaorui@123.com',0.00,0.05,0.00,6.00,125.98,'431-335-1234','600 Guerrero Street, San Francisco, CA, r2y1z2','431-335-1234','600 Guerrero Street, San Francisco, CA, r2y1z2',1,'2024-08-10 00:37:23','2024-08-11 02:18:31'),(6,4,1,'2024-08-11 02:30:02','Rui Shaw','xx@123.com',0.00,0.05,0.00,6.00,125.98,'431-331-1234','600 Guerrero Street, San Francisco, CA, r2y1z2',NULL,'600 Guerrero Street, San Francisco, CA, r2y1z2',1,'2024-08-11 07:30:02','2024-08-11 07:30:02'),(7,4,1,'2024-08-11 02:33:36','Rui Shaw','xx@123.com',0.00,0.05,0.00,6.00,125.98,'431-331-1234','600 Guerrero Street, San Francisco, CA, r2y1z2',NULL,'600 Guerrero Street, San Francisco, CA, r2y1z2',1,'2024-08-11 07:33:36','2024-08-11 07:33:36'),(8,4,1,'2024-08-11 02:34:10','Rui Shaw','xx@123.com',0.00,0.05,0.00,6.00,125.98,'431-331-1234','600 Guerrero Street, San Francisco, CA, r2y1z2',NULL,'600 Guerrero Street, San Francisco, CA, r2y1z2',1,'2024-08-11 07:34:10','2024-08-11 07:34:10'),(9,4,1,'2024-08-11 03:08:08','Rui Shaw','xx@123.com',0.00,0.05,0.00,6.00,125.98,'431-331-1234','600 Guerrero Street, San Francisco, CA, r2y1z2',NULL,'600 Guerrero Street, San Francisco, CA, r2y1z2',1,'2024-08-11 08:08:08','2024-08-11 08:08:08');
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
INSERT INTO `password_reset_tokens` VALUES ('Xiaorui0629@gmail.com','$2y$12$EWVYaROi/Q7pwcZ5w4li4Oep9m8i68Pn2fZkNVYZB3p4tGl2M9QNi','2024-08-02 21:41:25');
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
INSERT INTO `product_categories` VALUES (7,1,'2024-08-02 20:34:55','2024-08-02 20:34:55',NULL),(1,2,'2024-08-02 20:34:55','2024-08-02 20:34:55',NULL),(5,3,'2024-08-02 20:34:55','2024-08-02 20:34:55',NULL),(7,4,'2024-08-02 20:34:55','2024-08-02 20:34:55',NULL),(2,5,'2024-08-02 20:34:55','2024-08-02 20:34:55',NULL),(9,6,'2024-08-02 20:34:55','2024-08-02 20:34:55',NULL),(4,7,'2024-08-02 20:34:55','2024-08-02 20:34:55',NULL),(4,8,'2024-08-02 20:34:55','2024-08-02 20:34:55',NULL),(2,9,'2024-08-02 20:34:55','2024-08-02 20:34:55',NULL),(10,10,'2024-08-02 20:34:55','2024-08-02 20:34:55',NULL),(10,11,'2024-08-02 20:34:55','2024-08-02 20:34:55',NULL),(4,12,'2024-08-02 20:34:55','2024-08-02 20:34:55',NULL),(7,13,'2024-08-02 20:34:55','2024-08-02 20:34:55',NULL),(10,14,'2024-08-02 20:34:55','2024-08-02 20:34:55',NULL),(9,15,'2024-08-02 20:34:55','2024-08-02 20:34:55',NULL),(5,51,'2024-08-08 23:35:53','2024-08-08 23:35:53',NULL),(9,51,'2024-08-08 23:35:53','2024-08-08 23:35:53',NULL),(10,51,'2024-08-08 23:35:53','2024-08-08 23:35:53',NULL),(1,53,'2024-08-08 23:41:45','2024-08-08 23:41:45',NULL),(2,53,'2024-08-08 23:41:45','2024-08-08 23:41:45',NULL),(16,54,'2024-08-09 10:31:44','2024-08-09 10:31:44',NULL),(15,55,'2024-08-09 18:43:44','2024-08-09 18:43:44',NULL),(16,55,'2024-08-09 18:43:44','2024-08-09 18:43:44',NULL),(17,55,'2024-08-09 18:43:44','2024-08-09 18:43:44',NULL),(1,57,'2024-08-09 19:11:39','2024-08-09 19:11:39',NULL),(2,57,'2024-08-09 19:11:39','2024-08-09 19:11:39',NULL),(3,57,'2024-08-09 19:11:39','2024-08-09 19:11:39',NULL),(4,57,'2024-08-09 19:32:42','2024-08-09 19:32:42',NULL),(1,58,'2024-08-09 19:33:47','2024-08-09 19:33:47',NULL),(1,60,'2024-08-09 20:46:14','2024-08-09 20:46:14',NULL),(2,60,'2024-08-09 20:46:14','2024-08-09 20:46:14',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_images`
--

LOCK TABLES `product_images` WRITE;
/*!40000 ALTER TABLE `product_images` DISABLE KEYS */;
INSERT INTO `product_images` VALUES (1,1,'images/grey_sweater_1.jpg',1,1,'2024-08-02 15:34:55','2024-08-09 20:45:24'),(2,2,'images/black_cardigan_1.jpg',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(3,3,'images/beige_cardigan_1.jpg',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(4,3,'images/beige_cardigan_2.jpg',0,2,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(5,4,'images/orange_cardigan_1.jpg',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(6,4,'images/orange_cardigan_2.jpg',0,2,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(7,5,'images/grey_check_jacket.jpg',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(8,6,'images/cream_jacket_1.jpg',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(9,7,'images/yellow_jacket_1.jpg',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(10,7,'images/yellow_jacket_2.jpg',0,2,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(11,8,'images/pink_feather_jacket_1.jpg',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(12,8,'images/pink_feather_jacket_2.jpg',0,2,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(13,9,'images/grey_jacket_1.jpg',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(14,10,'images/rust_cardigan_1.jpg',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(15,11,'images/beige_dress_1.jpg',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(16,12,'images/denim_jacket_1.jpg',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(17,13,'images/classic_bag.jpg',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(18,14,'images/brown_leather_jacket_1.jpg',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(19,51,'images/1723142153_____400x400.jpeg',1,1,'2024-08-08 23:35:53','2024-08-09 18:15:55'),(20,51,'images/1723142153_Avatar_Aang.png',0,1,'2024-08-08 23:35:53','2024-08-09 18:15:55'),(21,53,'images/1723142505_____400x400.jpeg',0,1,'2024-08-08 23:41:45','2024-08-08 23:41:45'),(22,54,'images/1723144993_channels4_profile.jpg',1,1,'2024-08-09 00:23:13','2024-08-09 09:53:11'),(25,54,'images/1723181392_____400x400.jpeg',0,1,'2024-08-09 10:29:52','2024-08-09 10:29:52'),(31,55,'images/1723210961_Avatar_Aang.png',1,1,'2024-08-09 18:42:41','2024-08-09 18:43:58'),(34,57,'images/1723213962_____400x400.jpeg',1,1,'2024-08-09 19:32:42','2024-08-09 19:33:06'),(36,58,'images/1723214048_____400x400.jpeg',1,1,'2024-08-09 19:34:08','2024-08-09 19:34:15'),(38,60,'images/1723218374_Avatar_Aang.png',1,1,'2024-08-09 20:46:14','2024-08-09 20:47:11');
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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_reviews`
--

LOCK TABLES `product_reviews` WRITE;
/*!40000 ALTER TABLE `product_reviews` DISABLE KEYS */;
INSERT INTO `product_reviews` VALUES (1,1,3,1,1,'Review title for product 1','Review text for product 1',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(2,2,2,1,1,'Review title for product 2','Review text for product 2',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(3,3,3,2,5,'Review title for product 3','Review text for product 3',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(4,4,3,1,5,'Review title for product 4','Review text for product 4',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(5,5,1,3,5,'Review title for product 5','Review text for product 5',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(6,6,2,3,2,'Review title for product 6','Review text for product 6',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(7,7,1,1,3,'Review title for product 7','Review text for product 7',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(8,8,2,1,5,'Review title for product 8','Review text for product 8',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(9,9,3,2,1,'Review title for product 9','Review text for product 9',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(10,10,3,2,3,'Review title for product 10','Review text for product 10',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(11,11,2,3,4,'Review title for product 11','Review text for product 11',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(12,12,2,3,5,'Review title for product 12','Review text for product 12',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(13,13,3,3,2,'Review title for product 13','Review text for product 13',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(14,14,2,1,1,'Review title for product 14','Review text for product 14',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(15,15,2,2,4,'Review title for product 15','Review text for product 15',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(16,3,4,2,5,'Review title for product 3','Review text for product 3',1,1,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(17,4,4,1,3,'Review title for product 4','Review text for product 4',1,1,'2024-08-02 15:34:55','2024-08-05 21:11:49'),(22,4,4,3,0,'','',1,1,'2024-08-02 15:34:55','2024-08-05 21:09:50'),(28,3,4,4,5,'fdsa','fdas',1,0,'2024-08-06 02:25:09','2024-08-06 02:25:09');
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
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'CC-001','Grey Sweater','A stylish grey sweater.',59.99,100,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(2,'CC-002','Black Cardigan','A trendy black cardigan.',79.99,50,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(3,'CC-003','Beige Cardigan','A cozy beige cardigan.',69.99,70,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(4,'CC-004','Orange Cardigan','A vibrant orange cardigan.',75.99,80,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(5,'CC-005','Grey Check Jacket','A stylish grey check jacket.',120.99,50,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(6,'CC-006','Cream Jacket','A classy cream jacket.',110.99,40,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(7,'CC-007','Yellow Jacket','A bright yellow jacket.',115.99,60,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(8,'CC-008','Pink Feather Jacket','A stylish pink feather jacket.',130.99,30,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(9,'CC-009','Grey Jacket','A versatile grey jacket.',105.99,75,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(10,'CC-010','Rust Cardigan','A warm rust cardigan.',85.99,90,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(11,'CC-011','Beige Dress','An elegant beige dress.',95.99,55,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(12,'CC-012','Denim Jacket','A classic denim jacket.',110.99,50,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(13,'CC-013','Classic Bag','A timeless classic bag.',150.99,25,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(14,'CC-014','Brown Leather Jacket','A premium brown leather jacket.',250.99,20,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(15,'CC-015','Product 15','Description for product 15',33.99,80,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(16,'CC-016','Product 16','Description for product 16',66.99,60,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(17,'CC-017','Product 17','Description for product 17',71.99,77,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(18,'CC-018','Product 18','Description for product 18',63.99,90,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(19,'CC-019','Product 19','Description for product 19',86.99,64,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(20,'CC-020','Product 20','Description for product 20',30.99,27,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(21,'CC-021','Product 21','Description for product 21',80.99,65,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(22,'CC-022','Product 22','Description for product 22',82.99,40,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(23,'CC-023','Product 23','Description for product 23',30.99,86,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(24,'CC-024','Product 24','Description for product 24',46.99,65,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(25,'CC-025','Product 25','Description for product 25',96.99,35,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(26,'CC-026','Product 26','Description for product 26',75.99,22,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(27,'CC-027','Product 27','Description for product 27',61.99,32,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(28,'CC-028','Product 28','Description for product 28',71.99,51,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(29,'CC-029','Product 29','Description for product 29',20.99,32,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(30,'CC-030','Product 30','Description for product 30',98.99,66,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(31,'CC-031','Product 31','Description for product 31',85.99,53,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(32,'CC-032','Product 32','Description for product 32',73.99,32,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(33,'CC-033','Product 33','Description for product 33',38.99,16,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(34,'CC-034','Product 34','Description for product 34',63.99,70,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(35,'CC-035','Product 35','Description for product 35',25.99,23,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(36,'CC-036','Product 36','Description for product 36',66.99,58,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(37,'CC-037','Product 37','Description for product 37',48.99,94,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(38,'CC-038','Product 38','Description for product 38',56.99,91,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(39,'CC-039','Product 39','Description for product 39',39.99,23,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(40,'CC-040','Product 40','Description for product 40',43.99,96,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(41,'CC-041','Product 41','Description for product 41',38.99,28,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(42,'CC-042','Product 42','Description for product 42',33.99,32,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(43,'CC-043','Product 43','Description for product 43',22.99,20,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(44,'CC-044','Product 44','Description for product 44',32.99,68,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(45,'CC-045','Product 45','Description for product 45',79.99,69,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(46,'CC-046','Product 46','Description for product 46',62.99,46,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(47,'CC-047','Product 47','Description for product 47',64.99,56,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(48,'CC-048','Product 48','Description for product 48',87.99,52,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(49,'CC-049','Product 49','Description for product 49',65.99,12,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(50,'CC-050','Product 50','Description for product 50',16.99,17,'2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(53,'cc-test-123','cc-test-123','fdafdafdafda',11.22,3,'2024-08-08 23:41:45','2024-08-09 19:01:31','2024-08-09 19:01:31'),(54,'testing-xiao-cj','testing-jacket-cj','fdsatesafdasfdsa',520.11,7,'2024-08-09 00:23:13','2024-08-09 19:02:10','2024-08-09 19:02:10'),(55,'test-xiao-rui','test-xiao-rui','test-xiao-rui',66.00,33,'2024-08-09 18:16:48','2024-08-09 19:02:28','2024-08-09 19:02:28'),(57,'testing-xiao-cj33','testing-xiao-cj33','1111111111111111',66.00,66,'2024-08-09 19:11:39','2024-08-09 19:34:21','2024-08-09 19:34:21'),(58,'categoriescategories','categoriescategories','categoriescategories',33.00,33,'2024-08-09 19:33:47','2024-08-09 19:34:39','2024-08-09 19:34:39'),(60,'categoriescategoriesfff','categoriescategoriesff','categoriescategories. xiaorui',11.00,11,'2024-08-09 20:46:14','2024-08-09 21:21:49',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provincial_tax_rates`
--

LOCK TABLES `provincial_tax_rates` WRITE;
/*!40000 ALTER TABLE `provincial_tax_rates` DISABLE KEYS */;
INSERT INTO `provincial_tax_rates` VALUES (1,'AB','Alberta',0.050,0.000,0.000,0.000,0.050,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(2,'BC','British Columbia',0.050,0.070,0.000,0.000,0.120,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(3,'MB','Manitoba',0.050,0.070,0.000,0.000,0.120,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(4,'NB','New Brunswick',0.000,0.000,0.150,0.000,0.150,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(5,'NL','Newfoundland and Labrador',0.000,0.000,0.150,0.000,0.150,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(6,'NS','Nova Scotia',0.000,0.000,0.150,0.000,0.150,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(7,'ON','Ontario',0.000,0.000,0.130,0.000,0.130,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(8,'PE','Prince Edward Island',0.000,0.000,0.150,0.000,0.150,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(9,'QC','Quebec',0.050,0.100,0.000,0.000,0.150,'2024-08-02 15:34:55','2024-08-02 15:34:55'),(10,'SK','Saskatchewan',0.050,0.060,0.000,0.000,0.110,'2024-08-02 15:34:55','2024-08-02 15:34:55');
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
INSERT INTO `sessions` VALUES ('GHnVPgSb8FS9v7PzSiP3VDLq4AtGrCwPvnNsXU8D',4,'127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36','YTo3OntzOjY6Il90b2tlbiI7czo0MDoicmxySjVycFdhc2hTbVVaeHJ4VXRCV2kzWUhmWnJ6TkJobkUwaE5XQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jaGVja291dCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjE6e2k6MDtzOjEyOiJ1c2VyLnN1Y2Nlc3MiO31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O3M6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTcyMzM0MDQ2NTt9czo0OiJ1c2VyIjthOjE6e3M6Nzoic3VjY2VzcyI7czozMDoiQ3JlYXRlZCBhbiBvcmRlciBzdWNjZXNzZnVsbHkhIjt9fQ==',1723345688);
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` VALUES (1,1,'txn_001','Completed','Transaction completed successfully.','2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(2,2,'txn_002','Completed','Transaction completed successfully.','2024-08-02 15:34:55','2024-08-02 15:34:55',NULL),(3,3,'txn_003','Pending','Transaction pending.','2024-08-02 15:34:55','2024-08-02 15:34:55',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_addresses`
--

LOCK TABLES `user_addresses` WRITE;
/*!40000 ALTER TABLE `user_addresses` DISABLE KEYS */;
INSERT INTO `user_addresses` VALUES (2,2,'456 Elm St','67890','Winnipeg','MB','CA',1,'2024-08-02 15:34:55','2024-08-05 17:46:47'),(3,3,'789 Oak St','54321','Winnipeg','MB','CA',1,'2024-08-02 15:34:55','2024-08-05 17:46:47'),(4,4,'123 Portage St','12345','Winnipeg','MB','CA',0,'2024-08-02 15:34:55','2024-08-05 17:46:47'),(5,4,'123 Portage St','12345','Winnipeg','MB','CA',0,'2024-08-02 15:34:55','2024-08-05 17:46:47'),(6,4,'fdsa','r2y1z2','Calgary','AB','CA',0,'2024-08-03 22:57:38','2024-08-04 08:56:54'),(7,4,'fdsa','r2z1z2','Calgary','AB','CA',0,'2024-08-03 22:59:07','2024-08-04 08:56:54'),(8,4,'fdsa','r2z1z2','Calgary','AB','CA',0,'2024-08-03 22:59:11','2024-08-05 21:44:58'),(29,4,'666 Guerrero Street','r3y3z3','Winnipeg','MB','CA',1,'2024-08-06 02:59:42','2024-08-06 19:13:47'),(33,1,'600 Guerrero Street','r2y1z2','St. John\'s','NL','CA',1,'2024-08-09 22:02:32','2024-08-09 22:02:39');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
INSERT INTO `user_roles` VALUES (1,1,0,'admin','2024-08-02 15:34:55','2024-08-02 15:34:55'),(2,2,1,'customer','2024-08-02 15:34:55','2024-08-02 15:34:55'),(3,3,2,'guest','2024-08-02 15:34:55','2024-08-02 15:34:55');
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
  `telephone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'$2y$12$.iccO3Cd/UVps7Hqso6e.uiUmmLWy6qhAEZ3yYpCVKVyt843/7n9W','admin','','admin@pace.com','1234567890','2024-08-02 20:34:55',1,'MVm5n4ilMNb5wtncm63yx4iGc1zMKPJEbHpTBNiQsmaIBMLpMU8GeQWeQ82U','2024-08-02 15:34:55','2024-08-09 18:23:56'),(2,'$2y$12$oQBuVP6iFTYMmfybr/ANOO0P5d1Ck2v3/GuFrN3MwqBIi5NHnvy7O','John','Doe','john@example.com','1234567890','2024-08-02 20:34:55',0,'7XumzPEJRuydrxkVPdreBXWqvjlQgheY8ftLgb1Hm9DtRfnhvGdzoQ9C70BQ','2024-08-02 15:34:55','2024-08-02 15:41:18'),(3,'$2y$12$wsInxSiUZkEFaCl5ENZRHOYCAiV7nyrnAauqgM6TpLrErlVi0SGfC','Jane','Smith','jane@example.com','9876543210','2024-08-02 20:34:55',0,'SeY7aFkLis','2024-08-02 15:34:55','2024-08-02 15:34:55'),(4,'$2y$12$EG/.LSCCbrvdZqJk5cSJ/eLxLVmdftcfOJFZKyKOK/qFBG6ffEbWS','Rui','Xiao','Xiaorui0629@gmail.com','12321321',NULL,0,NULL,'2024-08-02 20:51:24','2024-08-02 20:51:24'),(5,'$2y$12$AeNRg10zbOYVN217XRFFNOJ9BhSlo7yVsGQiZaW9jirlo.Ak4J4Sy','Rui','fdsafdsa','Xiaorui06291@gmail.com','(416) 555-0199',NULL,0,NULL,'2024-08-02 21:25:29','2024-08-02 21:25:29'),(6,'$2y$12$o4zfE4rjcUk3iRNMHqi9O.A86CWDQTQ7ZQEbDhF36Dwhcc90hFH5q','Rui','rrr','test@123.com','416-555-0199',NULL,0,NULL,'2024-08-02 21:26:18','2024-08-02 21:26:18');
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

-- Dump completed on 2024-08-10 22:23:46
