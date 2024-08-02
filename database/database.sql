DROP DATABASE IF EXSITS couture_closet;
CREATE DATABASE IF NOT EXISTS couture_closet;
USE couture_closet;
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
INSERT INTO `category` VALUES (1,'demography','Women','','2024-08-02 00:08:56','2024-08-02 00:08:56'),(2,'demography','Kids','','2024-08-02 00:08:56','2024-08-02 00:08:56'),(3,'demography','Men','','2024-08-02 00:08:56','2024-08-02 00:08:56'),(4,'Size','XS','Extra Small','2024-08-02 00:08:56','2024-08-02 00:08:56'),(5,'Size','S','Small','2024-08-02 00:08:56','2024-08-02 00:08:56'),(6,'Size','M','Medium','2024-08-02 00:08:56','2024-08-02 00:08:56'),(7,'Size','L','Large','2024-08-02 00:08:56','2024-08-02 00:08:56'),(8,'Size','XL','Extra Large','2024-08-02 00:08:56','2024-08-02 00:08:56'),(9,'Size','XXL','Double Extra Large','2024-08-02 00:08:56','2024-08-02 00:08:56'),(10,'Brand','Nike','','2024-08-02 00:08:56','2024-08-02 00:08:56'),(11,'Brand','Adidas','','2024-08-02 00:08:56','2024-08-02 00:08:56'),(12,'Brand','Gucci','','2024-08-02 00:08:56','2024-08-02 00:08:56'),(13,'Brand','Zara','','2024-08-02 00:08:56','2024-08-02 00:08:56'),(14,'Brand','H&M','','2024-08-02 00:08:56','2024-08-02 00:08:56'),(15,'Brand','Levi\'s','','2024-08-02 00:08:56','2024-08-02 00:08:56'),(16,'Brand','Ralph Lauren','','2024-08-02 00:08:56','2024-08-02 00:08:56'),(17,'Brand','Uniqlo','','2024-08-02 00:08:56','2024-08-02 00:08:56'),(18,'Brand','Gap','','2024-08-02 00:08:56','2024-08-02 00:08:56'),(19,'Brand','Calvin Klein','','2024-08-02 00:08:56','2024-08-02 00:08:56');
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
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (9,'0001_01_01_000001_create_users_table',1),(10,'0001_01_01_000002_create_cache_table',1),(11,'2024_08_01_145226_create_orders_table',1),(12,'2024_08_01_155241_create_products_table',1);
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
INSERT INTO `order_items` VALUES (1,1,1,2,50.00,100.00),(2,1,2,1,5.00,5.00),(3,2,1,4,50.00,200.00),(4,3,3,3,100.00,300.00);
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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pst` decimal(10,2) NOT NULL,
  `gst` decimal(10,2) NOT NULL,
  `hst` decimal(10,2) NOT NULL,
  `sub_amount` decimal(10,2) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  KEY `orders_provincial_tax_rate_id_foreign` (`provincial_tax_rate_id`),
  CONSTRAINT `orders_provincial_tax_rate_id_foreign` FOREIGN KEY (`provincial_tax_rate_id`) REFERENCES `provincial_tax_rates` (`id`) ON DELETE RESTRICT,
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,1,'2024-08-02 00:08:56','test1@example.com',0.00,5.00,0.00,100.00,105.00,'77 Ulster St, Calgary, AB','77 Ulster St, Calgary, AB','2024-08-02 00:08:56','2024-08-02 00:08:56'),(2,2,2,'2024-08-02 00:08:56','test2@example.com',7.00,5.00,0.00,200.00,212.00,'130 Main St, Vancouver, BC','130 Main St, Vancouver, BC','2024-08-02 00:08:56','2024-08-02 00:08:56'),(3,3,3,'2024-08-02 00:08:56','test3@example.com',7.00,5.00,0.00,300.00,312.00,'321 Oaken St, Winnipeg, MB','321 Oaken St, Winnipeg, MB','2024-08-02 00:08:56','2024-08-02 00:08:56');
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
INSERT INTO `product_categories` VALUES (3,1,'2024-08-02 05:08:56','2024-08-02 05:08:56',NULL),(7,2,'2024-08-02 05:08:56','2024-08-02 05:08:56',NULL),(10,3,'2024-08-02 05:08:56','2024-08-02 05:08:56',NULL),(3,4,'2024-08-02 05:08:56','2024-08-02 05:08:56',NULL),(1,5,'2024-08-02 05:08:56','2024-08-02 05:08:56',NULL),(5,6,'2024-08-02 05:08:56','2024-08-02 05:08:56',NULL),(10,7,'2024-08-02 05:08:56','2024-08-02 05:08:56',NULL),(3,8,'2024-08-02 05:08:56','2024-08-02 05:08:56',NULL),(2,9,'2024-08-02 05:08:56','2024-08-02 05:08:56',NULL),(8,10,'2024-08-02 05:08:56','2024-08-02 05:08:56',NULL),(3,11,'2024-08-02 05:08:56','2024-08-02 05:08:56',NULL),(6,12,'2024-08-02 05:08:56','2024-08-02 05:08:56',NULL),(3,13,'2024-08-02 05:08:56','2024-08-02 05:08:56',NULL),(3,14,'2024-08-02 05:08:56','2024-08-02 05:08:56',NULL),(7,15,'2024-08-02 05:08:56','2024-08-02 05:08:56',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_images`
--

LOCK TABLES `product_images` WRITE;
/*!40000 ALTER TABLE `product_images` DISABLE KEYS */;
INSERT INTO `product_images` VALUES (1,1,'images/grey_sweater_1.jpg',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(2,2,'images/black_cardigan_1.jpg',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(3,3,'images/beige_cardigan_1.jpg',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(4,3,'images/beige_cardigan_2.jpg',0,2,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(5,4,'images/orange_cardigan_1.jpg',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(6,4,'images/orange_cardigan_2.jpg',0,2,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(7,5,'images/grey_check_jacket.jpg',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(8,6,'images/cream_jacket_1.jpg',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(9,7,'images/yellow_jacket_1.jpg',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(10,7,'images/yellow_jacket_2.jpg',0,2,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(11,8,'images/pink_feather_jacket_1.jpg',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(12,8,'images/pink_feather_jacket_2.jpg',0,2,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(13,9,'images/grey_jacket_1.jpg',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(14,10,'images/rust_cardigan_1.jpg',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(15,11,'images/beige_dress_1.jpg',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(16,12,'images/denim_jacket_1.jpg',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(17,13,'images/classic_bag.jpg',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(18,14,'images/brown_leather_jacket_1.jpg',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56');
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_reviews`
--

LOCK TABLES `product_reviews` WRITE;
/*!40000 ALTER TABLE `product_reviews` DISABLE KEYS */;
INSERT INTO `product_reviews` VALUES (1,1,3,2,3,'Review title for product 1','Review text for product 1',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(2,2,3,2,4,'Review title for product 2','Review text for product 2',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(3,3,2,2,3,'Review title for product 3','Review text for product 3',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(4,4,1,3,1,'Review title for product 4','Review text for product 4',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(5,5,2,3,4,'Review title for product 5','Review text for product 5',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(6,6,3,1,1,'Review title for product 6','Review text for product 6',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(7,7,2,2,2,'Review title for product 7','Review text for product 7',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(8,8,3,1,3,'Review title for product 8','Review text for product 8',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(9,9,2,3,4,'Review title for product 9','Review text for product 9',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(10,10,3,2,1,'Review title for product 10','Review text for product 10',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(11,11,2,2,3,'Review title for product 11','Review text for product 11',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(12,12,3,3,4,'Review title for product 12','Review text for product 12',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(13,13,3,3,3,'Review title for product 13','Review text for product 13',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(14,14,2,1,5,'Review title for product 14','Review text for product 14',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(15,15,3,1,4,'Review title for product 15','Review text for product 15',1,1,'2024-08-02 00:08:56','2024-08-02 00:08:56');
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
INSERT INTO `products` VALUES (1,'CC-001','Grey Sweater','A stylish grey sweater.',59.99,100,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(2,'CC-002','Black Cardigan','A trendy black cardigan.',79.99,50,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(3,'CC-003','Beige Cardigan','A cozy beige cardigan.',69.99,70,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(4,'CC-004','Orange Cardigan','A vibrant orange cardigan.',75.99,80,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(5,'CC-005','Grey Check Jacket','A stylish grey check jacket.',120.99,50,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(6,'CC-006','Cream Jacket','A classy cream jacket.',110.99,40,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(7,'CC-007','Yellow Jacket','A bright yellow jacket.',115.99,60,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(8,'CC-008','Pink Feather Jacket','A stylish pink feather jacket.',130.99,30,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(9,'CC-009','Grey Jacket','A versatile grey jacket.',105.99,75,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(10,'CC-010','Rust Cardigan','A warm rust cardigan.',85.99,90,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(11,'CC-011','Beige Dress','An elegant beige dress.',95.99,55,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(12,'CC-012','Denim Jacket','A classic denim jacket.',110.99,50,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(13,'CC-013','Classic Bag','A timeless classic bag.',150.99,25,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(14,'CC-014','Brown Leather Jacket','A premium brown leather jacket.',250.99,20,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(15,'CC-015','Product 15','Description for product 15',99.99,21,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(16,'CC-016','Product 16','Description for product 16',26.99,45,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(17,'CC-017','Product 17','Description for product 17',61.99,25,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(18,'CC-018','Product 18','Description for product 18',29.99,27,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(19,'CC-019','Product 19','Description for product 19',78.99,95,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(20,'CC-020','Product 20','Description for product 20',85.99,59,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(21,'CC-021','Product 21','Description for product 21',56.99,38,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(22,'CC-022','Product 22','Description for product 22',32.99,12,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(23,'CC-023','Product 23','Description for product 23',78.99,37,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(24,'CC-024','Product 24','Description for product 24',36.99,32,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(25,'CC-025','Product 25','Description for product 25',83.99,35,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(26,'CC-026','Product 26','Description for product 26',70.99,67,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(27,'CC-027','Product 27','Description for product 27',40.99,60,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(28,'CC-028','Product 28','Description for product 28',90.99,17,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(29,'CC-029','Product 29','Description for product 29',88.99,41,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(30,'CC-030','Product 30','Description for product 30',20.99,34,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(31,'CC-031','Product 31','Description for product 31',58.99,93,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(32,'CC-032','Product 32','Description for product 32',59.99,21,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(33,'CC-033','Product 33','Description for product 33',48.99,47,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(34,'CC-034','Product 34','Description for product 34',44.99,42,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(35,'CC-035','Product 35','Description for product 35',51.99,41,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(36,'CC-036','Product 36','Description for product 36',91.99,35,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(37,'CC-037','Product 37','Description for product 37',20.99,12,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(38,'CC-038','Product 38','Description for product 38',16.99,50,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(39,'CC-039','Product 39','Description for product 39',75.99,100,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(40,'CC-040','Product 40','Description for product 40',22.99,100,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(41,'CC-041','Product 41','Description for product 41',28.99,70,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(42,'CC-042','Product 42','Description for product 42',89.99,32,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(43,'CC-043','Product 43','Description for product 43',30.99,79,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(44,'CC-044','Product 44','Description for product 44',89.99,92,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(45,'CC-045','Product 45','Description for product 45',83.99,70,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(46,'CC-046','Product 46','Description for product 46',97.99,82,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(47,'CC-047','Product 47','Description for product 47',58.99,20,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(48,'CC-048','Product 48','Description for product 48',59.99,91,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(49,'CC-049','Product 49','Description for product 49',47.99,19,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(50,'CC-050','Product 50','Description for product 50',78.99,71,'2024-08-02 00:08:56','2024-08-02 00:08:56',NULL);
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
INSERT INTO `provincial_tax_rates` VALUES (1,'AB','Alberta',0.050,0.000,0.000,0.000,0.050,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(2,'BC','British Columbia',0.050,0.070,0.000,0.000,0.120,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(3,'MB','Manitoba',0.050,0.070,0.000,0.000,0.120,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(4,'NB','New Brunswick',0.000,0.000,0.150,0.000,0.150,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(5,'NL','Newfoundland and Labrador',0.000,0.000,0.150,0.000,0.150,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(6,'NS','Nova Scotia',0.000,0.000,0.150,0.000,0.150,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(7,'ON','Ontario',0.000,0.000,0.130,0.000,0.130,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(8,'PE','Prince Edward Island',0.000,0.000,0.150,0.000,0.150,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(9,'QC','Quebec',0.050,0.100,0.000,0.000,0.150,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(10,'SK','Saskatchewan',0.050,0.060,0.000,0.000,0.110,'2024-08-02 00:08:56','2024-08-02 00:08:56');
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
INSERT INTO `transactions` VALUES (1,1,'txn_001','Completed','Transaction completed successfully.','2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(2,2,'txn_002','Completed','Transaction completed successfully.','2024-08-02 00:08:56','2024-08-02 00:08:56',NULL),(3,3,'txn_003','Pending','Transaction pending.','2024-08-02 00:08:56','2024-08-02 00:08:56',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_addresses`
--

LOCK TABLES `user_addresses` WRITE;
/*!40000 ALTER TABLE `user_addresses` DISABLE KEYS */;
INSERT INTO `user_addresses` VALUES (1,1,'123 Main St','12345','New York','NY','USA',1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(2,2,'456 Elm St','67890','Los Angeles','CA','USA',1,'2024-08-02 00:08:56','2024-08-02 00:08:56'),(3,3,'789 Oak St','54321','Chicago','IL','USA',1,'2024-08-02 00:08:56','2024-08-02 00:08:56');
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
INSERT INTO `user_roles` VALUES (1,1,0,'admin','2024-08-02 00:08:56','2024-08-02 00:08:56'),(2,2,1,'customer','2024-08-02 00:08:56','2024-08-02 00:08:56'),(3,3,2,'guest','2024-08-02 00:08:56','2024-08-02 00:08:56');
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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'$2y$12$oUJLhBqNAkzviHRN2mHQ5eDmxytbfvLeXgH2VBdkE357eHz6LKvGq','admin','','admin@pace.com','1234567890','2024-08-02 05:08:56','PCnz2UhThU','2024-08-02 00:08:56','2024-08-02 00:08:56'),(2,'$2y$12$HO0oEXrxClj9dMHKvSag9.pmq5ngy4xQZMB/PoopedMdPHqDKSJvS','John','Doe','john@example.com','1234567890','2024-08-02 05:08:56','wMkVLmE8zc','2024-08-02 00:08:56','2024-08-02 00:08:56'),(3,'$2y$12$5w.YACqPhYMIXkaA3ibcnOuUDl9UV9jLsEf5sy5g0WBLQJpP93GLm','Jane','Smith','jane@example.com','9876543210','2024-08-02 05:08:56','NGhn1MgB4Y','2024-08-02 00:08:56','2024-08-02 00:08:56');
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

-- Dump completed on 2024-08-01 19:09:35
