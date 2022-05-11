-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-05-11 18:45:20
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `437god`
--
CREATE DATABASE IF NOT EXISTS `437god` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `437god`;

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_picture` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `product_name` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `product_categories` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `product_price` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `product_type` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `product_instruction` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `products`
--

INSERT INTO `products` (`product_id`, `product_picture`, `product_name`, `product_categories`, `product_price`, `product_type`, `product_instruction`) VALUES
(1, 'img/portfolio/a1.png', '考試御守', '御守', '80', '<option>藍色</option>\r\n<option>紅色</option>', '在日本，御守是愿望的象征。御守最早用來辟邪和解除厄運，逐漸衍生到交通安全、安產、良緣、學業、健康等方面。現在，日本人尤其是女性每年都會購買更換御守，大家都用他來饋贈親朋以表達自己的祝愿，或是寄托希望、緩解壓力等等。所有商品百分百日本工藝，面料為日本京都名織物-金襴，手工精細，目前為止國內的廠家只能模仿花型及圖案，而金襴本身是無法模仿的哦。'),
(2, 'img/portfolio/a2.png', '戀愛御守', '御守', '80', '<option>粉紅色</option>\r\n<option>淺藍色</option>', '在日本，御守是愿望的象征。御守最早用來辟邪和解除厄運，逐漸衍生到交通安全、安產、良緣、學業、健康等方面。現在，日本人尤其是女性每年都會購買更換御守，大家都用他來饋贈親朋以表達自己的祝愿，或是寄托希望、緩解壓力等等。所有商品百分百日本工藝，面料為日本京都名織物-金襴，手工精細，目前為止國內的廠家只能模仿花型及圖案，而金襴本身是無法模仿的哦。'),
(3, 'img/portfolio/a3.png', '健康御守', '御守', '80', '<option>粉紅色</option>\r\n<option>藍色</option>', '在日本，御守是愿望的象征。御守最早用來辟邪和解除厄運，逐漸衍生到交通安全、安產、良緣、學業、健康等方面。現在，日本人尤其是女性每年都會購買更換御守，大家都用他來饋贈親朋以表達自己的祝愿，或是寄托希望、緩解壓力等等。所有商品百分百日本工藝，面料為日本京都名織物-金襴，手工精細，目前為止國內的廠家只能模仿花型及圖案，而金襴本身是無法模仿的哦。'),
(4, 'img/portfolio/a4.png', '求籤', '紀念品', '100', '<option>求籤</option>', '購買後可以前往求籤，進入解籤系統享有解籤資格。祝各位信徒們都可以心想事成，在籤詩中獲得救贖和希望解答。'),
(5, 'img/portfolio/b1.png', '線香', '佛具', '200', '<option>深紫色</option>\r\n<option>草綠色</option>', '・ 10厘米棒狀香。<br>\r\n・檀香的香氣柔和地散發出來，有一種清新餘韻。<br>\r\n※請使用香爐或不易燃的容器。<br>\r\n※處理火時要小心。即使在煙霧消失後，火種仍可能存在。<br>'),
(6, 'img/portfolio/b2.png', '刮痧板', '佛具', '180', '<option>黃金色</option>', '這座無教派的千年古寺，供奉著傳說中日本最古老的佛像「一光三尊阿弥陀如来像」，境內的本堂被指定為日本佛教建築國寶。而參拜完後，除了可以購買佛珠或御守回家之外，這裡還販售了寺方原創的「刮痧板」，透明的牛角形狀印上象徵善光寺的「善」字，兼具實用性與紀念性。'),
(7, 'img/portfolio/b3.png', '香皿', '佛具', '450', '<option>白色</option>', '香皿還重現了藥師寺東塔天花板的白鳳圖騰，精緻又具收藏價值。\r\n<br>* 燃燒時，是小心使用。\r\n<br>* 處理火時要小心。即使在煙霧消失後，火種仍可能存在。\r\n<br>* 瓷器小心易碎。'),
(8, 'img/portfolio/c1.png', '鳥居擺飾', '紀念品', '300', '<option>男人</option>\r\n<option>女人</option>\r\n<option>富士山</option>\r\n<option>鬼怪</option>\r\n<option>搖鈴</option>', '鳥居／とりい 是日本神社的建築之一，傳說是連接神明居住的神域與人類居住的俗世之通道，屬「結界」的一種。\r\n<br>鳥居有多種形狀，但大多均以兩根支柱與一至二根橫梁構成。 現在把鳥居成可擺飾的大小,\r\n<br>在日本或國外也都是受歡迎的紀念品, 如果將它們並排展示，那將是一個壯觀的景象。'),
(9, 'img/portfolio/c2.png', '佛珠', '紀念品', '650', '<option>綠色</option>\r\n<option>粉色</option>\r\n<option>藍色</option>', '此款佛珠自古以來即被視為避邪之聖物，其蘊藏著豐富的天然靈氣，有助於消除壓力、疲勞、濁氣等負面能量，也是友善、愛心以及希望的象徵。 無論是靜思冥想、唸經數珠時使用，或是隨身攜帶、掛置車上、家中神明配戴，都很合適，不僅十分漂亮還可以招來好福氣喔！'),
(10, 'img/portfolio/c3.png', '御守護太刀守', '紀念品', '650', '<option>金色</option>', '祀奉初代將軍德川家康的日光東照宮，寺境內的寶物館中，擁有2,000件藏品，其中兩把被列為國寶的太刀「銘助真」與「銘国宗」，尤其具有代表性。雖然這些寶物只能隔著櫥窗欣賞，但旅人們卻能夠把金色太刀造型的「御守護太刀守」買回家珍藏，當成擺設超有氣勢！');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
