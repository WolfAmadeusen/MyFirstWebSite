-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 12 2023 г., 07:40
-- Версия сервера: 8.0.29
-- Версия PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mywebsite`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bd_users`
--

CREATE TABLE `bd_users` (
  `id` int NOT NULL,
  `FIO` varchar(200) NOT NULL,
  `login` varchar(200) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `about__me` text,
  `photo` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `bd_users`
--

INSERT INTO `bd_users` (`id`, `FIO`, `login`, `age`, `gender`, `about__me`, `photo`, `password`) VALUES
(1, 'Maxim Golden Boxer', 'lorem399inf', '34', 'man', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis soluta distinctio eum magnam magni laborum enim natus rerum quam porro.', 'cyberpunk2077.jpeg', 'a926b52976ce5e0787a480fbc94acb77'),
(3, 'Wolf Amadeusen Franzisk', 'WolfAmadeusen', '80', 'man', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque repudiandae, placeat veniam suscipit cumque natus vel esse tenetur qui dolorem laboriosam saepe porro veritatis voluptatibus, voluptas reiciendis unde atque nam non eligendi. Mollitia, illum asperiores nesciunt, sit obcaecati impedit, numquam labore voluptatibus consectetur atque magni velit ipsam omnis magnam? Doloremque asperiores optio natus eos consectetur aut reprehenderit aliquid molestiae itaque, ea a deserunt totam repellat facere numquam debitis nulla ducimus nostrum consequuntur dolorem. Excepturi rem reprehenderit consequuntur magnam hic itaque possimus libero quo amet eaque placeat deleniti porro autem, vero rerum illo sint quaerat ipsa? Ipsa sapiente obcaecati pariatur voluptate.', 'cyberpunk2077.jpeg', '0a7f3b0d4d2b1b64550ad6ae1eaad576'),
(4, 'Napalion Banapart of Franch', 'Napalion', '51', 'wooman', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis nemo autem voluptatem! Repellat, nulla. Suscipit dolor eligendi voluptates consectetur ad, porro exercitationem explicabo libero beatae. Nemo blanditiis, quo, adipisci numquam quibusdam atque omnis et quasi repellat repellendus iure consectetur distinctio ipsum, eveniet cumque aliquid vel eligendi deserunt iste minus. Quaerat voluptatem error aliquid harum consectetur omnis deserunt provident. Corrupti, vero ipsam. Nam hic vel magni reprehenderit veritatis dolor magnam dicta assumenda mollitia, aut dignissimos illum doloribus pariatur repellendus fugit sequi non cumque molestiae voluptates rerum tempora itaque, debitis beatae deleniti! Accusamus dicta nobis minus cumque, quaerat impedit quidem fugiat aut.', 'nato.jpg', '4ae1f3b1759e7435fa5a8a1ce451a7c6'),
(6, 'Olha petrovna japaniko', 'Morpech babushka Olha', '67', 'Мужчина', 'Я учительница, мне 67, у меня 8 котов. Люблю писать статьи', 'grandmather.jpg', 'd56b699830e77ba53855679cb1d252da'),
(7, 'Maxim Golden Boxer', 'Maximus', '51', 'Мужчина', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, accusamus officia animi illo aut molestiae omnis! Nemo, iure odio sed eius inventore aliquid placeat accusantium architecto ullam nulla non ducimus facilis quaerat vero ipsam reiciendis consectetur soluta distinctio mollitia eligendi quia? Iste veritatis autem, corporis at eius pariatur nesciunt reiciendis, perspiciatis doloribus natus officiis cumque provident illo maxime architecto assumenda sit aspernatur odit in quae minima. Esse labore quos, sapiente rem neque officia inventore doloremque. Laudantium itaque omnis nemo dolores aliquid rem, quas sint architecto assumenda totam beatae esse fugiat cupiditate similique exercitationem eos aperiam labore tempora molestias vero. Architecto.', 'take__two.jpg', 'ac39de61cd760bc06a48361d7763de33'),
(8, 'Wolf Ganza Amadeusen', 'WolfAmadeusen', '100', 'Мужчина', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea ullam modi repellat nobis, fugiat rerum veniam eum nulla ipsum quia nihil ab explicabo in ducimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea ullam modi repellat nobis, fugiat rerum veniam eum nulla ipsum quia nihil ab explicabo in ducimus.', 'gamming2.jpg', '32f015c3425590e7406990f5303727ca'),
(9, 'Lorenso Images Path', 'Lorenso', '25', 'Мужчина', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit cum, perferendis recusandae, dicta delectus placeat quae aspernatur nesciunt autem accusantium perspiciatis, voluptas deleniti quis ullam vero. Officia possimus dolores eveniet dolore facilis voluptate quidem assumenda ipsum minima, officiis ad dicta, maiores rerum animi iusto sapiente tempora numquam itaque sed debitis ullam excepturi? Consequuntur reprehenderit inventore esse, sequi dolore vero assumenda quis a, repudiandae voluptatem sed minima. Inventore excepturi et neque deleniti molestias minus placeat consectetur blanditiis dicta dolorem, recusandae ullam non perferendis. Ipsa eos illo distinctio, vitae possimus ea velit odit neque voluptatem maxime ad animi aliquid facere dolorum obcaecati?', 'без названия.jpg', '8c866b79370b821990881f0d85680141'),
(10, 'Wolf Amadeusen Deuch', 'Wolf Amadeusen', '190', 'Другое', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea ullam modi repellat nobis, fugiat rerum veniam eum nulla ipsum quia nihil ab explicabo in ducimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea ullam modi repellat nobis, fugiat rerum veniam eum nulla ipsum quia nihil ab explicabo in ducimus.', 'gamming2.jpg', '32f015c3425590e7406990f5303727ca');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bd_users`
--
ALTER TABLE `bd_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bd_users`
--
ALTER TABLE `bd_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
