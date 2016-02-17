-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3307
-- Время создания: Фев 17 2016 г., 12:56
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
-- Структура таблицы `maintexts`
--

CREATE TABLE IF NOT EXISTS `maintexts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `url` tinytext NOT NULL,
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  `lang` enum('ru','en') NOT NULL DEFAULT 'ru',
  `putdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `body`, `url`, `showhide`, `lang`, `putdate`) VALUES
(1, 'Кратко о PHP', '<p>PHP (англ. PHP: Hypertext Preprocessor - "PHP: первоначально Personal Home Page Tools - "Инструменты для создания персональных веб-страниц"; - скриптовый язык программирования общего назначения, интенсивно применяемый для разработки веб-приложений. В настоящее время поддерживается подавляющим большинством хостинг-провайдеров и является одним из лидеров среди языков программирования, применяющихся для создания динамических веб-сайтов. Язык и его интерпретатор разрабатываются группой энтузиастов в рамках проекта с открытым кодом. В области программирования для сети Интернет PHP - один из популярных сценарных языков (наряду с JSP, Perl и языками, используемыми в ASP.NET) благодаря своей простоте, скорости выполнения, богатой функциональности, кроссплатформенности и распространению исходных кодов на основе лицензии PHP. В настоящее время PHP используется сотнями тысяч разработчиков. Согласно рейтингу корпорации TIOBE, базирующемся на данных поисковых систем, в декабре 2012 года PHP находился на 6 месте среди языков программирования. К крупнейшим сайтам, использующим PHP, относятся Facebook, Wikipedia и др.</p>\r\n<p>Язык PHP используется примерно на 52% из 14,5 миллионов сайтов, работающих под Apache, который в свою очередь является самым распространенным севером в интернет (по разным оценкам около 70%), популярность которого быстро растет.</p>\r\n<p>PHP является самым молодым, перспективным и быстроразвивающимся из языков программирования для интернет, доля его использования по сравнению с другими языками быстро растет. Его основные преимущества: широкая поддержка различных технологий, совместимость с серверами, базами данных, простота и бесплатность.</p>', 'index', 'show', 'ru', '2016-02-15'),
(3, 'О Компании', '<p>\r\nEPAM Systems – крупнейший поставщик услуг в области разработки проектного (заказного) программного обеспечения и решений в Центральной и Восточной Европе. Созданная в 1993 году, сегодня компания имеет представительства в 17 странах мира, около 11500+ высококвалифицированных специалистов в штате, и мы продолжаем активно расти. Реализовав тысячи сложных и масштабных решений для наших заказчиков по всему миру, EPAM Systems неизменно остается признанным лидером в таких областях, как:\r\n</p>\r\n<ul>\r\n    <li>Разработка, тестирование, сопровождение и поддержка заказного программного обеспечения и бизнес-приложений;</li>\r\n    <li>Интеграция приложений на базе продуктов SAP, Oracle, IBM, Microsoft;</li>\r\n    <li>Миграция приложений на новую интеграционную платформу;</li>\r\n    <li>Создание выделенных центров разработки (центров компетенции), центров тестирования и контроля качества программного обеспечения.</li>\r\n</ul>', 'about_company', 'show', 'ru', '2016-02-15'),
(5, 'Вакансии', '<p>\r\nБлагодаря сервисам на сайте, вы сбережете время и получите уверенность в том, что поиск работы – это несложная и быстро выполнимая задача.</p>\r\n<p>\r\nПредлагаете вакансии в Беларуси? Нужны специалисты, которым интересна работа в Минске?</p>\r\n<p>\r\nЗнакомьтесь с регулярно обновляемыми резюме на РАБОТА.TUT.BY! Здесь вы найдете кандидатов на вакантную должность с необходимым стажем и набором навыков. Необходимо лишь разместить вакансию. Более того, получая доступ к нашей базе, вы сами выбираете время для изучения интересных резюме.</p>\r\n<p>\r\nВсе инструменты на сайте не раз доказывали свою эффективность. Пользуясь ими, вы определенно сократите время, затрачиваемое на размещение и закрытие вакансий в Минске и областных городах. Теперь вся информация о желающих найти работу в Минске оказывается в вашем распоряжении по первому же требованию.</p>', 'vacancy', 'show', 'ru', '2016-02-15'),
(7, 'Контакты', '<p>ЗАО «БелХард Групп»</p>\r\n<p>Адрес:</p>\r\n<p>ул. Мельникайте, 2-709</p>\r\n<p>220004, г. Минск, Республика Беларусь</p>\r\n<p>Тел./факс</p>', 'contacts', 'show', 'ru', '2016-02-15'),
(8, 'Разработка сайтов', '<p>\r\nПрофессиональный сайт – это эффективный маркетинговый инструмент, который способен вывести бизнес на качественно новый уровень. Создание сайтов — основная специализация Студии Борового. За 11 лет работы нами реализованы более 500 проектов в области веб-дизайна, графического дизайна и брендинга. На счету созданных Студией веб-сайтов более 40 дипломов и наград международных конкурсов.</p>\r\n<p>\r\nВ зависимости от потребностей заказчиков мы изготавливаем сайты, различные по типу и функциональным возможностям. Однако какое бы решение не было бы для вас оптимальным — сайт-визитка, корпоративный или промо-сайт, интернет-магазин или информационный портал — вы можете быть уверены в том, что работа будет выполнена на самом высоком уровне.</p>\r\n<p>\r\nНаряду с юзабилити сайта для посетителей, мы уделяем особое внимание легкости управления им заказчиком. Для этой цели мы используем одну из самых популярных платформ в СНГ для управления сайтом — «1С-Битрикс». Это CMS, которая легко адаптируется под каждый проект и обеспечивает легкое и понятное управлением сайтом. Студия Борового является золотым сертифицированным партнером «1C-Битрикс».</p>', 'development', 'show', 'ru', '2016-02-15'),
(9, 'Продвижение', '<p>\r\nПоисковое продвижение сайтов — одно из приоритетных направлений работы Студии Борового. За 7 лет работы мы помогли улучшить видимость в поисковых системах более 300 сайтам, многие из которых работают с нами сегодня.</p>\r\n<p>\r\nУ вас уже есть современный сайт, предлагающий широкий ассортимент товаров или услуг, но клиентов он приносит совсем мало из-за низкой посещаемости? Решить эту проблему можно с помощью продвижения сайта в поисковых системах. Качественная поисковая оптимизация может в разы увеличить посещаемость ресурса и позволяет ему занять лидирующие позиции в Яндексе и Google.</p>', 'promotion', 'show', 'ru', '2016-02-15'),
(10, 'Доработка', '<p>\r\nЧасто так получается, что, заказав сайт у «мастеров», вы не довольны конечным результатом. Сайт получился не таким, каким вы его себе представляли и каким хотели его видеть. Деньги за работу заплачены, а вы остались у разбитого корыта, с недоделанным сайтом. С проблемой недоделанных, некачественных и некрасивых сайтов сталкиваются многие организации и компании. И это на самом деле проблема: плохое состояние сайта негативно сказывается на его работе и эффективности. За помощью вы всегда можете обратиться к нам, заказав услугу по доработке сайтов.</p>\r\n<p>\r\nТакже данную услугу часто заказывают владельцы интернет-магазинов, поскольку периодически нужно изменять функционал, добавлять новые товары, возможно где-то изменилась цена или описание товара. Сколько стоит услуга по доработке сайта зависит от того, какие поставленные задачи необходимо выполнить. Чтобы ваш сайт всегда выглядел профессионально и работал эффективно, будь то он на OpenCart, WordPress или Joomla, не важно сколько стоит потратить денег, ведь стоимость подобных услуг в Минске, да и по всей Беларуси, вполне доступна.</p>', 'rework', 'show', 'ru', '2016-02-15'),
(11, 'Тестирование', '<p>\r\nХотите быть уверенными, что ваш сайт работает, как часы? Хотите знать, что сайт  понравится пользователям? Хотите понять, что заплатили деньги за создание и продвижение не зря? Тогда есть один надежный способ  - это проверить.  Тестирование сайта  определяет его функционал, его юзабилити и контент. Фактически тестирование сайта показывает, насколько успешно выполнены все работы по созданию веб-ресурса. На что нужно обратить внимание при тестировании заказчику, читаем дальше.</p>', 'testing', 'show', 'ru', '2016-02-15'),
(12, 'Поддержка', '<p>\r\nЗа словами "поддержка сайта" в разных случаях скрываются задачи совершенно разного масштаба. Это обусловлено, в первую очередь, разными целями существования сайтов. Например, есть большая категория сайтов, которые сделаны просто для того, чтобы они были. Большой серьезной компании неприлично не иметь собственного сайта. Поддержка сайтов именно таких - это редкие типовые работы, внесение регулярных, часто, одинаковых изменений, с частотой раз в неделю. Поддержка проекта такого типа оценивается в часах работы специалистов. Например, 50-100 часов на год вперед.</p>\r\n<p>\r\nЕсть и совершенно другие примеры. Маркетологи могут использовать сайт, как активный инструмент работы с большой аудиторией. Такие сайты меняются ежедневно, буквально, ежечасно. Поддержка сайтов такого уровня сложный процесс и самое главное - это гибкость возможностей сайта, гибкость подрядчика, оперативность внесения информации. Поэтому, поддержку таких проектов можно оценивать, только исходя из усредненного объёма работ в месяц.</p>', 'support', 'show', 'ru', '2016-02-15'),
(14, 'Наши работы', '<p>\r\nНиже, вы можете ознакомиться с нашими работами:\r\n</p>', 'works', 'show', 'ru', '2016-02-15');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `fio`, `email`, `login`, `password`, `datereg`, `lastvisit`, `blockunblock`) VALUES
(1, 'fio', 'erer@mail.ru', 'login', 'pass', '2016-02-17', '2016-02-17 09:52:05', 'unblock'),
(3, 'fio', 'email@email.ru', 'login', 'pass', '2016-02-17', '2016-02-17 10:20:48', 'unblock');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
