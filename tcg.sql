-- MySQL dump 10.13  Distrib 8.0.15, for Win64 (x86_64)
--
-- Host: localhost    Database: tcg
-- ------------------------------------------------------
-- Server version	8.0.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `activity` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `activity` (`activity`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,1,'Только крепость духовных скреп ни к чему нас не обязывает','Каждый из нас понимает очевидную вещь: реализация намеченных плановых заданий позволяет выполнить важные задания по разработке соответствующих условий активизации.','<p>В своем стремлении улучшить пользовательский опыт мы упускаем, что явные признаки победы институциализации заблокированы в рамках своих собственных рациональных ограничений. Приятно, граждане, наблюдать, как активно развивающиеся страны третьего мира, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут подвергнуты целой серии независимых исследований. В своем стремлении улучшить пользовательский опыт мы упускаем, что тщательные исследования конкурентов, превозмогая сложившуюся непростую экономическую ситуацию, функционально разнесены на независимые элементы. В целом, конечно, постоянное информационно-пропагандистское обеспечение нашей деятельности способствует повышению качества благоприятных перспектив.</p>\r\n\r\n<p>Банальные, но неопровержимые выводы, а также явные признаки победы институциализации обнародованы. Сложно сказать, почему действия представителей оппозиции и по сей день остаются уделом либералов, которые жаждут быть объективно рассмотрены соответствующими инстанциями. Ясность нашей позиции очевидна: современная методология разработки предопределяет высокую востребованность направлений прогрессивного развития. Как принято считать, базовые сценарии поведения пользователей, превозмогая сложившуюся непростую экономическую ситуацию, представлены в исключительно положительном свете. Следует отметить, что внедрение современных методик прекрасно подходит для реализации анализа существующих паттернов поведения. Учитывая ключевые сценарии поведения, перспективное планирование в значительной степени обусловливает важность своевременного выполнения сверхзадачи.</p>','2018-08-26 07:45:03','2019-06-06 07:48:40'),(2,1,'Зима близко','Банальные, но неопровержимые выводы, а также активно развивающиеся страны третьего мира объединены в целые кластеры себе подобных.','<p>Каждый из нас понимает очевидную вещь: выбранный нами инновационный путь играет важную роль в формировании поэтапного и последовательного развития общества. Равным образом, сложившаяся структура организации позволяет оценить значение поставленных обществом задач. Имеется спорная точка зрения, гласящая примерно следующее: стремящиеся вытеснить традиционное производство, нанотехнологии формируют глобальную экономическую сеть и при этом - объективно рассмотрены соответствующими инстанциями. Но явные признаки победы институциализации неоднозначны и будут в равной степени предоставлены сами себе. В частности, реализация намеченных плановых заданий говорит о возможностях распределения внутренних резервов и ресурсов.</p>\r\n\r\n<p>Не следует, однако, забывать, что глубокий уровень погружения позволяет оценить значение глубокомысленных рассуждений. Приятно, граждане, наблюдать, как реплицированные с зарубежных источников, современные исследования неоднозначны и будут своевременно верифицированы. Предварительные выводы неутешительны: повышение уровня гражданского сознания требует определения и уточнения прогресса профессионального сообщества.</p>','2018-10-23 07:45:03','2019-06-06 07:47:50'),(3,1,'С новым годом!!!','Повседневная практика показывает, что глубокий уровень погружения однозначно фиксирует необходимость приоритизации разума над эмоциями.','<p>В рамках спецификации современных стандартов, акционеры крупнейших компаний лишь добавляют фракционных разногласий и в равной степени предоставлены сами себе. В рамках спецификации современных стандартов, сторонники тоталитаризма в науке неоднозначны и будут смешаны с неуникальными данными до степени совершенной неузнаваемости, из-за чего возрастает их статус бесполезности.</p>\r\n\r\n<p>Вот вам яркий пример современных тенденций - современная методология разработки создает предпосылки для кластеризации усилий. Реализация намеченных плановых заданий обеспечивает широкому кругу (специалистов) участие в формировании вывода текущих активов.</p>','2018-12-29 21:00:00','2019-06-06 07:48:24'),(4,1,'Цена вопроса не важна, когда чистый разум не скован границами','Кстати, активно развивающиеся страны третьего мира ассоциативно распределены по отраслям.','<p>Но выбранный нами инновационный путь не оставляет шанса для модели развития. Но убежденность некоторых оппонентов является качественно новой ступенью как самодостаточных, так и внешне зависимых концептуальных решений. Следует отметить, что новая модель организационной деятельности однозначно определяет каждого участника как способного принимать собственные решения касаемо системы массового участия. Но элементы политического процесса лишь добавляют фракционных разногласий и функционально разнесены на независимые элементы.</p>\r\n\r\n<p>Современные технологии достигли такого уровня, что перспективное планирование в значительной степени обусловливает важность соответствующих условий активизации. В рамках спецификации современных стандартов, представители современных социальных резервов представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны быть преданы социально-демократической анафеме. Прежде всего, реализация намеченных плановых заданий является качественно новой ступенью соответствующих условий активизации. Разнообразный и богатый опыт говорит нам, что социально-экономическое развитие, в своем классическом представлении, допускает внедрение системы обучения кадров, соответствующей насущным потребностям.</p>','2019-02-15 07:45:03','2019-06-06 07:47:25'),(5,1,'Лифтеры теперь ближе!','Уважаемые соседи! Наш подрядчик разместил аварийную службу по лифтам. Теперь время ожидания помощи меньше!','<p>Безусловно, постоянное информационно-пропагандистское обеспечение нашей деятельности предопределяет высокую востребованность переосмысления внешнеэкономических политик. Внезапно, некоторые особенности внутренней политики представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны быть описаны максимально подробно. Прежде всего, современная методология разработки требует анализа модели развития. С другой стороны, курс на социально-ориентированный национальный проект не оставляет шанса для благоприятных перспектив. Но семантический разбор внешних противодействий предопределяет высокую востребованность распределения внутренних резервов и ресурсов. Есть над чем задуматься: базовые сценарии поведения пользователей лишь добавляют фракционных разногласий и объявлены нарушающими общечеловеческие нормы этики и морали.</p>\r\n\r\n<p>В рамках спецификации современных стандартов, акционеры крупнейших компаний своевременно верифицированы. Сложно сказать, почему явные признаки победы институциализации набирают популярность среди определенных слоев населения, а значит, должны быть смешаны с неуникальными данными до степени совершенной неузнаваемости, из-за чего возрастает их статус бесполезности. Ясность нашей позиции очевидна: понимание сути ресурсосберегающих технологий создает необходимость включения в производственный план целого ряда внеочередных мероприятий с учетом комплекса своевременного выполнения сверхзадачи. Лишь акционеры крупнейших компаний набирают популярность среди определенных слоев населения, а значит, должны быть преданы социально-демократической анафеме.</p>','2019-04-01 07:45:03','2019-06-06 07:46:42'),(6,1,'Установка дефлекторов на вентиляцию','соседи! В нашем доме проводятся работы по установке дефлекторов на вентиляционные короба.','<p>Господа, синтетическое тестирование требует от нас анализа первоочередных требований. Но представители современных социальных резервов обнародованы. Идейные соображения высшего порядка, а также повышение уровня гражданского сознания предопределяет высокую востребованность своевременного выполнения сверхзадачи! Имеется спорная точка зрения, гласящая примерно следующее: активно развивающиеся страны третьего мира лишь добавляют фракционных разногласий и преданы социально-демократической анафеме. Представители современных социальных резервов призывают нас к новым свершениям, которые, в свою очередь, должны быть призваны к ответу.</p>\r\n\r\n<p>Имеется спорная точка зрения, гласящая примерно следующее: активно развивающиеся страны третьего мира могут быть указаны как претенденты на роль ключевых факторов. Также как синтетическое тестирование способствует повышению качества новых предложений. Приятно, граждане, наблюдать, как явные признаки победы институциализации подвергнуты целой серии независимых исследований. Также как глубокий уровень погружения предопределяет высокую востребованность распределения внутренних резервов и ресурсов. Как уже неоднократно упомянуто, предприниматели в сети интернет, превозмогая сложившуюся непростую экономическую ситуацию, превращены в посмешище, хотя само их существование приносит несомненную пользу обществу. С другой стороны, понимание сути ресурсосберегающих технологий не дает нам иного выбора, кроме определения экспериментов, поражающих по своей масштабности и грандиозности.</p>','2019-06-06 07:45:03','2019-06-06 07:45:03');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `gallery` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `preview` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `activity` (`activity`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (1,'sverdlovsk','Свердловск','/img/sverdlovsk/sverdlovsk-1.jpg',1),(2,'flowers','Цветы нашего двора','/img/flowers/flowers-1.jpg',1),(3,'poems','Стихи','/img/poems/poems-1.jpg',1);
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery_items`
--

DROP TABLE IF EXISTS `gallery_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `gallery_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gallery_id` int(10) unsigned NOT NULL,
  `image` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `gallery_id` (`gallery_id`),
  CONSTRAINT `gallery_items_ibfk_1` FOREIGN KEY (`gallery_id`) REFERENCES `gallery` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery_items`
--

LOCK TABLES `gallery_items` WRITE;
/*!40000 ALTER TABLE `gallery_items` DISABLE KEYS */;
INSERT INTO `gallery_items` VALUES (1,1,'/img/sverdlovsk/sverdlovsk-1.jpg'),(2,1,'/img/sverdlovsk/sverdlovsk-2.jpg'),(3,1,'/img/sverdlovsk/sverdlovsk-3.jpg'),(4,1,'/img/sverdlovsk/sverdlovsk-4.jpg'),(5,1,'/img/sverdlovsk/sverdlovsk-5.jpg'),(6,1,'/img/sverdlovsk/sverdlovsk-6.jpg'),(7,1,'/img/sverdlovsk/sverdlovsk-7.jpg'),(8,1,'/img/sverdlovsk/sverdlovsk-8.jpg'),(9,1,'/img/sverdlovsk/sverdlovsk-9.jpg'),(10,1,'/img/sverdlovsk/sverdlovsk-10.jpg'),(11,1,'/img/sverdlovsk/sverdlovsk-11.jpg'),(12,1,'/img/sverdlovsk/sverdlovsk-12.jpg'),(13,1,'/img/sverdlovsk/sverdlovsk-13.jpg'),(14,1,'/img/sverdlovsk/sverdlovsk-14.jpg'),(15,1,'/img/sverdlovsk/sverdlovsk-15.jpg'),(16,1,'/img/sverdlovsk/sverdlovsk-16.jpg'),(17,1,'/img/sverdlovsk/sverdlovsk-17.jpg'),(18,1,'/img/sverdlovsk/sverdlovsk-18.jpg'),(19,1,'/img/sverdlovsk/sverdlovsk-19.jpg'),(20,1,'/img/sverdlovsk/sverdlovsk-20.jpg'),(21,1,'/img/sverdlovsk/sverdlovsk-21.jpg'),(22,1,'/img/sverdlovsk/sverdlovsk-22.jpg'),(23,1,'/img/sverdlovsk/sverdlovsk-23.jpg'),(24,1,'/img/sverdlovsk/sverdlovsk-24.jpg'),(25,1,'/img/sverdlovsk/sverdlovsk-25.jpg'),(26,1,'/img/sverdlovsk/sverdlovsk-26.jpg'),(27,1,'/img/sverdlovsk/sverdlovsk-27.jpg'),(28,1,'/img/sverdlovsk/sverdlovsk-28.jpg'),(29,1,'/img/sverdlovsk/sverdlovsk-29.jpg'),(30,1,'/img/sverdlovsk/sverdlovsk-30.jpg'),(31,1,'/img/sverdlovsk/sverdlovsk-31.jpg'),(32,1,'/img/sverdlovsk/sverdlovsk-32.jpg'),(33,1,'/img/sverdlovsk/sverdlovsk-33.jpg'),(34,1,'/img/sverdlovsk/sverdlovsk-34.jpg'),(35,1,'/img/sverdlovsk/sverdlovsk-35.jpg'),(36,1,'/img/sverdlovsk/sverdlovsk-36.jpg'),(37,1,'/img/sverdlovsk/sverdlovsk-37.jpg'),(38,1,'/img/sverdlovsk/sverdlovsk-38.jpg'),(39,1,'/img/sverdlovsk/sverdlovsk-39.jpg'),(40,2,'/img/flowers/flowers-1.jpg'),(41,2,'/img/flowers/flowers-2.jpg'),(42,2,'/img/flowers/flowers-3.jpg'),(43,2,'/img/flowers/flowers-4.jpg'),(44,2,'/img/flowers/flowers-5.jpg'),(45,2,'/img/flowers/flowers-6.jpg'),(46,2,'/img/flowers/flowers-7.jpg'),(47,2,'/img/flowers/flowers-8.jpg'),(48,2,'/img/flowers/flowers-9.jpg'),(49,2,'/img/flowers/flowers-10.jpg'),(50,2,'/img/flowers/flowers-11.jpg'),(51,3,'/img/poems/poems-1.jpg'),(52,3,'/img/poems/poems-2.jpg'),(53,3,'/img/poems/poems-3.jpg');
/*!40000 ALTER TABLE `gallery_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `sort` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES (1,'Новости','news','navigation__news',1),(2,'Наше ТСЖ','homeowners','navigation__homeowners',2),(3,'Услуги','services','navigation__services',3),(4,'Отчётность','report','navigation__report',4),(5,'Справочник','manual','navigation__manual',5),(6,'Полезное','helpful','navigation__helpful',6),(7,'Галерея','gallery','navigation__gallery',7);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-19 21:58:22
