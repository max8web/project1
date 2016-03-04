-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3307
-- Время создания: Мар 04 2016 г., 13:02
-- Версия сервера: 5.5.38-log
-- Версия PHP: 5.5.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `max-web`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalogs`
--

CREATE TABLE IF NOT EXISTS `catalogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Дамп данных таблицы `catalogs`
--

INSERT INTO `catalogs` (`id`, `name`, `showhide`) VALUES
(12, 'Приложения', 'show'),
(18, 'Компьютеры', 'show'),
(19, 'Сайты', 'show'),
(20, 'Магазины', 'show');

-- --------------------------------------------------------

--
-- Структура таблицы `maintexts`
--

CREATE TABLE IF NOT EXISTS `maintexts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `url` tinytext NOT NULL,
  `fon` tinytext NOT NULL,
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  `lang` enum('ru','en') NOT NULL DEFAULT 'ru',
  `putdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `body`, `url`, `fon`, `showhide`, `lang`, `putdate`) VALUES
(1, 'Кратко о PHP', '<p>PHP (англ. PHP: Hypertext Preprocessor - "PHP: первоначально Personal Home Page Tools - "Инструменты для создания персональных веб-страниц"; - скриптовый язык программирования общего назначения, интенсивно применяемый для разработки веб-приложений. В настоящее время поддерживается подавляющим большинством хостинг-провайдеров и является одним из лидеров среди языков программирования, применяющихся для создания динамических веб-сайтов. Язык и его интерпретатор разрабатываются группой энтузиастов в рамках проекта с открытым кодом. В области программирования для сети Интернет PHP - один из популярных сценарных языков (наряду с JSP, Perl и языками, используемыми в ASP.NET) благодаря своей простоте, скорости выполнения, богатой функциональности, кроссплатформенности и распространению исходных кодов на основе лицензии PHP. В настоящее время PHP используется сотнями тысяч разработчиков. Согласно рейтингу корпорации TIOBE, базирующемся на данных поисковых систем, в декабре 2012 года PHP находился на 6 месте среди языков программирования. К крупнейшим сайтам, использующим PHP, относятся Facebook, Wikipedia и др.</p>\r\n<p>Язык PHP используется примерно на 52% из 14,5 миллионов сайтов, работающих под Apache, который в свою очередь является самым распространенным севером в интернет (по разным оценкам около 70%), популярность которого быстро растет.</p>\r\n<p>PHP является самым молодым, перспективным и быстроразвивающимся из языков программирования для интернет, доля его использования по сравнению с другими языками быстро растет. Его основные преимущества: широкая поддержка различных технологий, совместимость с серверами, базами данных, простота и бесплатность.</p>', 'index', 'fon', 'show', 'ru', '2016-02-15'),
(3, 'О Компании', '<p>\r\nНаша компания образовалась в 2011 году. Мы являемся молодой перспективной компанией на рынке IT технологий. За короткое время мы начали сотрудничать с некоторыми компаниями из СНГ, Европы, Америки.</p>\r\n<p>\r\nМы профессионально занимаемся разработкой программного обеспечения, мобильных приложений (Android, IOS), смс-сервисом, созданием, продвижением, SEO оптимизацией, технической и информационной поддержкой и обслуживанием сайтов, а также предлагаем хостинг для наших клиентов.</p>\r\n<p>\r\nОсновная задача, которую мы ставим при разработке приложений – создание эффективных решений, способствующих развитию бизнеса наших клиентов и приносящих им максимальную прибыль.</p>\r\n<p>\r\nДля более подробного ознакомления с нашими услугами пройдите в интересующий Вас раздел выше! </p>', 'about_company', 'fon2', 'show', 'ru', '2016-02-15'),
(5, 'Вакансии', '<p>\r\nБлагодаря сервисам на сайте, вы сбережете время и получите уверенность в том, что поиск работы – это несложная и быстро выполнимая задача.</p>\r\n<p>\r\nПредлагаете вакансии в Беларуси? Нужны специалисты, которым интересна работа в Минске?</p>\r\n<p>\r\nЗнакомьтесь с регулярно обновляемыми резюме на РАБОТА.TUT.BY! Здесь вы найдете кандидатов на вакантную должность с необходимым стажем и набором навыков. Необходимо лишь разместить вакансию. Более того, получая доступ к нашей базе, вы сами выбираете время для изучения интересных резюме.</p>\r\n<p>\r\nВсе инструменты на сайте не раз доказывали свою эффективность. Пользуясь ими, вы определенно сократите время, затрачиваемое на размещение и закрытие вакансий в Минске и областных городах. Теперь вся информация о желающих найти работу в Минске оказывается в вашем распоряжении по первому же требованию.</p>', 'vacancy', 'fon4', 'show', 'ru', '2016-02-15'),
(7, 'Контакты', '<p>ЗАО «БелХард Групп»</p>\r\n<p>Адрес:</p>\r\n<p>ул. Мельникайте, 2-709</p>\r\n<p>220004, г. Минск, Республика Беларусь</p>\r\n<p>Тел./факс: (+375-17) 226-84-26</p>', 'contacts', 'fon5', 'show', 'ru', '2016-02-15'),
(8, 'Разработка сайтов', '<p>\r\nПрофессиональный сайт – это эффективный маркетинговый инструмент, который способен вывести бизнес на качественно новый уровень. Создание сайтов — основная специализация Студии Борового. За 11 лет работы нами реализованы более 500 проектов в области веб-дизайна, графического дизайна и брендинга. На счету созданных Студией веб-сайтов более 40 дипломов и наград международных конкурсов.</p>\r\n<p>\r\nВ зависимости от потребностей заказчиков мы изготавливаем сайты, различные по типу и функциональным возможностям. Однако какое бы решение не было бы для вас оптимальным — сайт-визитка, корпоративный или промо-сайт, интернет-магазин или информационный портал — вы можете быть уверены в том, что работа будет выполнена на самом высоком уровне.</p>\r\n<p>\r\nНаряду с юзабилити сайта для посетителей, мы уделяем особое внимание легкости управления им заказчиком. Для этой цели мы используем одну из самых популярных платформ в СНГ для управления сайтом — «1С-Битрикс». Это CMS, которая легко адаптируется под каждый проект и обеспечивает легкое и понятное управлением сайтом. Студия Борового является золотым сертифицированным партнером «1C-Битрикс».</p>', 'development', 'fon', 'show', 'ru', '2016-02-15'),
(9, 'Продвижение', '<p>\r\nПоисковое продвижение сайтов — одно из приоритетных направлений работы Студии Борового. За 7 лет работы мы помогли улучшить видимость в поисковых системах более 300 сайтам, многие из которых работают с нами сегодня.</p>\r\n<p>\r\nУ вас уже есть современный сайт, предлагающий широкий ассортимент товаров или услуг, но клиентов он приносит совсем мало из-за низкой посещаемости? Решить эту проблему можно с помощью продвижения сайта в поисковых системах. Качественная поисковая оптимизация может в разы увеличить посещаемость ресурса и позволяет ему занять лидирующие позиции в Яндексе и Google.</p>', 'promotion', 'fon', 'show', 'ru', '2016-02-15'),
(10, 'Доработка', '<p>\r\nЧасто так получается, что, заказав сайт у «мастеров», вы не довольны конечным результатом. Сайт получился не таким, каким вы его себе представляли и каким хотели его видеть. Деньги за работу заплачены, а вы остались у разбитого корыта, с недоделанным сайтом. С проблемой недоделанных, некачественных и некрасивых сайтов сталкиваются многие организации и компании. И это на самом деле проблема: плохое состояние сайта негативно сказывается на его работе и эффективности. За помощью вы всегда можете обратиться к нам, заказав услугу по доработке сайтов.</p>\r\n<p>\r\nТакже данную услугу часто заказывают владельцы интернет-магазинов, поскольку периодически нужно изменять функционал, добавлять новые товары, возможно где-то изменилась цена или описание товара. Сколько стоит услуга по доработке сайта зависит от того, какие поставленные задачи необходимо выполнить. Чтобы ваш сайт всегда выглядел профессионально и работал эффективно, будь то он на OpenCart, WordPress или Joomla, не важно сколько стоит потратить денег, ведь стоимость подобных услуг в Минске, да и по всей Беларуси, вполне доступна.</p>', 'rework', 'fon', 'show', 'ru', '2016-02-15'),
(11, 'Тестирование', '<p>\r\nХотите быть уверенными, что ваш сайт работает, как часы? Хотите знать, что сайт  понравится пользователям? Хотите понять, что заплатили деньги за создание и продвижение не зря? Тогда есть один надежный способ  - это проверить.  Тестирование сайта  определяет его функционал, его юзабилити и контент. Фактически тестирование сайта показывает, насколько успешно выполнены все работы по созданию веб-ресурса. На что нужно обратить внимание при тестировании заказчику, читаем дальше.</p>', 'testing', 'fon', 'show', 'ru', '2016-02-15'),
(12, 'Поддержка', '<p>\r\nЗа словами "поддержка сайта" в разных случаях скрываются задачи совершенно разного масштаба. Это обусловлено, в первую очередь, разными целями существования сайтов. Например, есть большая категория сайтов, которые сделаны просто для того, чтобы они были. Большой серьезной компании неприлично не иметь собственного сайта. Поддержка сайтов именно таких - это редкие типовые работы, внесение регулярных, часто, одинаковых изменений, с частотой раз в неделю. Поддержка проекта такого типа оценивается в часах работы специалистов. Например, 50-100 часов на год вперед.</p>\r\n<p>\r\nЕсть и совершенно другие примеры. Маркетологи могут использовать сайт, как активный инструмент работы с большой аудиторией. Такие сайты меняются ежедневно, буквально, ежечасно. Поддержка сайтов такого уровня сложный процесс и самое главное - это гибкость возможностей сайта, гибкость подрядчика, оперативность внесения информации. Поэтому, поддержку таких проектов можно оценивать, только исходя из усредненного объёма работ в месяц.</p>', 'support', 'fon', 'show', 'ru', '2016-02-15'),
(14, 'Наши работы', '<p>\r\nНиже, вы можете ознакомиться с нашими работами, а также приобрести их:\r\n</p>', 'works', 'fon3', 'show', 'ru', '2016-02-15');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `phone` tinytext NOT NULL,
  `zakaz` tinytext NOT NULL,
  `status` tinytext NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `zakaz`, `status`, `user_id`) VALUES
(26, 'Покупатель', 'email@email.ru', '4546464654', 'a:4:{i:54;i:1;i:55;i:1;i:62;i:1;i:64;i:1;}', 'Обрабатывается', 5),
(27, 'Админ', 'admin@mail.ru', '433435', 'a:2:{i:55;s:1:"5";i:54;s:1:"3";}', 'Отправлен', 3),
(28, 'Гость', 'mail@mail.ru', '13354464', 'a:3:{i:54;i:1;i:55;i:1;i:62;i:1;}', 'Завершен', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `prices`
--

CREATE TABLE IF NOT EXISTS `prices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `product_id` tinytext NOT NULL,
  `name` tinytext NOT NULL,
  `product_code` tinytext NOT NULL,
  `price` tinytext NOT NULL,
  `currency` tinytext NOT NULL,
  `dostavka` tinytext NOT NULL,
  `brand` tinytext NOT NULL,
  `address_facture` tinytext NOT NULL,
  `body` tinytext NOT NULL,
  `warranty` tinytext NOT NULL,
  `dostavka_day_minsk` tinytext NOT NULL,
  `price_dostavka_minsk` tinytext NOT NULL,
  `dostavka_day_belarus` tinytext NOT NULL,
  `price_dostavka_belarus` tinytext NOT NULL,
  `availability` tinytext NOT NULL,
  `address_service_centre` tinytext NOT NULL,
  `address_import` tinytext NOT NULL,
  `status` tinytext NOT NULL,
  `user_id` int(11) NOT NULL,
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  `created_at` date NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3743 ;

--
-- Дамп данных таблицы `prices`
--

INSERT INTO `prices` (`id`, `cat_id`, `product_id`, `name`, `product_code`, `price`, `currency`, `dostavka`, `brand`, `address_facture`, `body`, `warranty`, `dostavka_day_minsk`, `price_dostavka_minsk`, `dostavka_day_belarus`, `price_dostavka_belarus`, `availability`, `address_service_centre`, `address_import`, `status`, `user_id`, `showhide`, `created_at`, `updated_at`) VALUES
(3723, 12, '54', 'Товар №1', '111111', '100000', 'BYR', 'Доставка по всей Беларуси. Скидка на шиномонтаж. Гарантия.', 'Achilles', 'Мосавтошина', 'Описание товара', '12', '4', '40000', '4', '150000', 'в наличии', 'нет', 'нет ', 'update', 3, 'show', '2016-02-28', '2016-03-02 18:27:57'),
(3724, 20, '55', 'Товар №2', '211111', '1545600', 'BYR', 'Доставка по всей Беларуси. Скидка на шиномонтаж. Гарантия.', 'Achilles', 'Мосавтошина', 'нет', '12', '4', '40000', '4', '150000', 'под заказ', 'нет', 'нет ', 'update', 3, 'show', '2016-02-28', '2016-03-02 18:27:57'),
(3725, 20, '62', 'Товар №3', '311111', '1970700', 'BYR', 'Доставка по всей Беларуси. Скидка на шиномонтаж. Гарантия.', 'Achilles', 'Мосавтошина', 'нет', '12', '4', '40000', '4', '150000', 'в наличии', 'нет', 'нет ', 'update', 3, 'show', '2016-02-28', '2016-03-02 18:27:57'),
(3726, 19, '64', 'Товар №4', '411111', '488900', 'BYR', 'Доставка по всей Беларуси. Скидка на шиномонтаж. Гарантия.', 'Aeolus', 'Мосавтошина', 'нет', '12', '4', '40000', '4', '150000', 'под заказ', 'нет', 'нет ', 'update', 3, 'show', '2016-02-28', '2016-03-02 18:27:57'),
(3738, 18, '0', 'Товар №12', '811111', '541000', 'BYR', 'Доставка по всей Беларуси. Скидка на шиномонтаж. Гарантия.', 'Aeolus', 'Мосавтошина', 'нет', '12', '4', '40000', '4', '150000', 'под заказ', 'нет', 'нет ', 'update', 3, 'show', '2016-02-28', '2016-03-02 18:27:57'),
(3740, 19, '68', 'Товар №5', '511111', '515100', 'BYR', 'Доставка по всей Беларуси. Скидка на шиномонтаж. Гарантия.', 'Aeolus', 'Мосавтошина', 'нет', '12', '4', '40000', '4', '150000', 'в наличии', 'нет', 'нет ', 'update', 3, 'show', '2016-02-29', '2016-03-02 18:27:57'),
(3741, 12, '67', 'Товар №6', '611111', '534600', 'BYR', 'Доставка по всей Беларуси. Скидка на шиномонтаж. Гарантия.', 'Aeolus', 'Мосавтошина', 'нет', '12', '4', '40000', '4', '150000', 'под заказ', 'нет', 'нет ', 'update', 3, 'show', '2016-02-29', '2016-03-02 18:27:57'),
(3742, 19, '0', 'Товар №8', '711111', '560500', 'BYR', 'Доставка по всей Беларуси. Скидка на шиномонтаж. Гарантия.', 'Aeolus', 'Мосавтошина', 'нет', '12', '4', '40000', '4', '150000', 'в наличии', 'нет', 'нет ', 'update', 3, 'show', '2016-02-29', '2016-03-02 18:27:57');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `picture` tinytext NOT NULL,
  `price` tinytext NOT NULL,
  `cat_id` int(11) NOT NULL,
  `vip` int(11) NOT NULL,
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  `product_code` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `putdate` date NOT NULL,
  `api_url` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=72 ;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `body`, `picture`, `price`, `cat_id`, `vip`, `showhide`, `product_code`, `user_id`, `putdate`, `api_url`) VALUES
(54, 'Товар №1', 'Что означает i в маркировке наушников SR325is от Grado? improved (улучшенные)! Специалисты Grado взяли популярнейшую модель наушников и сделали ее еще лучше. В SR325is улучшена конструкция динамика, который заключен в увеличенный металлический корпус. Теперь переходные искажения практически не влияют на потоки воздуха и реакцию металлического корпуса на звуковые вибрации. Наушники Grado SR325is отлично передают высокие и низкие частоты, подчеркивая знаменитое качество звука в среднем диапазоне, которое является отличительной чертой наушников Grado.', 'image1456164353.jpg', '500', 12, 1, 'show', 111, 3, '2016-02-22', ''),
(55, 'Товар №2', 'Что означает i в маркировке наушников SR325is от Grado? improved (улучшенные)! Специалисты Grado взяли популярнейшую модель наушников и сделали ее еще лучше. В SR325is улучшена конструкция динамика, который заключен в увеличенный металлический корпус. Теперь переходные искажения практически не влияют на потоки воздуха и реакцию металлического корпуса на звуковые вибрации. Наушники Grado SR325is отлично передают высокие и низкие частоты, подчеркивая знаменитое качество звука в среднем диапазоне, которое является отличительной чертой наушников Grado.', 'image1456129280.jpg', '200', 20, 1, 'show', 222, 3, '2016-02-22', ''),
(62, 'Товар №3', 'Что означает i в маркировке наушников SR325is от Grado? improved (улучшенные)! Специалисты Grado взяли популярнейшую модель наушников и сделали ее еще лучше. В SR325is улучшена конструкция динамика, который заключен в увеличенный металлический корпус. Теперь переходные искажения практически не влияют на потоки воздуха и реакцию металлического корпуса на звуковые вибрации. Наушники Grado SR325is отлично передают высокие и низкие частоты, подчеркивая знаменитое качество звука в среднем диапазоне, которое является отличительной чертой наушников Grado.', 'image1456163544.jpg', '700', 20, 1, 'show', 777, 3, '2016-02-22', ''),
(64, 'Товар №4', 'Что означает i в маркировке наушников SR325is от Grado? improved (улучшенные)! Специалисты Grado взяли популярнейшую модель наушников и сделали ее еще лучше. В SR325is улучшена конструкция динамика, который заключен в увеличенный металлический корпус. Теперь переходные искажения практически не влияют на потоки воздуха и реакцию металлического корпуса на звуковые вибрации. Наушники Grado SR325is отлично передают высокие и низкие частоты, подчеркивая знаменитое качество звука в среднем диапазоне, которое является отличительной чертой наушников Grado.', 'image1456164485.jpg', '500', 19, 0, 'show', 444, 3, '2016-02-22', ''),
(67, 'Товар №6', 'Что означает i в маркировке наушников SR325is от Grado? improved (улучшенные)! Специалисты Grado взяли популярнейшую модель наушников и сделали ее еще лучше. В SR325is улучшена конструкция динамика, который заключен в увеличенный металлический корпус. Теперь переходные искажения практически не влияют на потоки воздуха и реакцию металлического корпуса на звуковые вибрации. Наушники Grado SR325is отлично передают высокие и низкие частоты, подчеркивая знаменитое качество звука в среднем диапазоне, которое является отличительной чертой наушников Grado.', 'image1456487689.jpg', '600', 12, 1, 'show', 666, 3, '2016-02-22', ''),
(68, 'Товар №5', '<p>Описание</p>', 'image1456932457.jpg', '1000', 19, 0, 'show', 0, 3, '2016-03-02', ''),
(69, 'Товар №10', '<p>Описание товара</p>', 'google1457077963.jpg', '1200', 0, 0, 'show', 0, 3, '2016-03-04', ''),
(70, 'Товар №11', '<p>Описание товара</p>', 'google1457077965.jpg', '1400', 0, 0, 'show', 0, 3, '2016-03-04', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fio` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `login` tinytext NOT NULL,
  `password` tinytext NOT NULL,
  `datereg` date NOT NULL,
  `lastvisit` datetime NOT NULL,
  `blockunblock` enum('unblock','block') NOT NULL DEFAULT 'unblock',
  `isadmin` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `fio`, `email`, `login`, `password`, `datereg`, `lastvisit`, `blockunblock`, `isadmin`) VALUES
(3, 'Админ', 'admin@mail.ru', 'admin', 'admin', '2016-02-24', '2016-02-24 18:52:02', 'unblock', '1'),
(4, 'fio2', 'mail@mail.ru', 'login2', 'pass2', '2016-02-18', '2016-02-18 20:57:37', 'unblock', '0'),
(5, 'Покупатель', 'email@email.ru', 'login', 'pass', '2016-02-17', '2016-02-17 10:20:48', 'unblock', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
