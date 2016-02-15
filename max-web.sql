-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3307
-- Время создания: Фев 15 2016 г., 12:10
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `body`, `url`, `showhide`, `lang`, `putdate`) VALUES
(1, 'Кратко о PHP', '<p>PHP (англ. PHP: Hypertext Preprocessor - "PHP: первоначально Personal Home Page Tools - "Инструменты для создания персональных веб-страниц"; - скриптовый язык программирования общего назначения, интенсивно применяемый для разработки веб-приложений. В настоящее время поддерживается подавляющим большинством хостинг-провайдеров и является одним из лидеров среди языков программирования, применяющихся для создания динамических веб-сайтов. Язык и его интерпретатор разрабатываются группой энтузиастов в рамках проекта с открытым кодом. В области программирования для сети Интернет PHP - один из популярных сценарных языков (наряду с JSP, Perl и языками, используемыми в ASP.NET) благодаря своей простоте, скорости выполнения, богатой функциональности, кроссплатформенности и распространению исходных кодов на основе лицензии PHP. В настоящее время PHP используется сотнями тысяч разработчиков. Согласно рейтингу корпорации TIOBE, базирующемся на данных поисковых систем, в декабре 2012 года PHP находился на 6 месте среди языков программирования. К крупнейшим сайтам, использующим PHP, относятся Facebook, Wikipedia и др.</p>\r\n<p>Язык PHP используется примерно на 52% из 14,5 миллионов сайтов, работающих под Apache, который в свою очередь является самым распространенным севером в интернет (по разным оценкам около 70%), популярность которого быстро растет.</p>\r\n<p>PHP является самым молодым, перспективным и быстроразвивающимся из языков программирования для интернет, доля его использования по сравнению с другими языками быстро растет. Его основные преимущества: широкая поддержка различных технологий, совместимость с серверами, базами данных, простота и бесплатность.</p>', 'index', 'show', 'ru', '2016-02-15'),
(3, 'О Компании', '<p>\r\nEPAM Systems – крупнейший поставщик услуг в области разработки проектного (заказного) программного обеспечения и решений в Центральной и Восточной Европе. Созданная в 1993 году, сегодня компания имеет представительства в 17 странах мира, около 11500+ высококвалифицированных специалистов в штате, и мы продолжаем активно расти. Реализовав тысячи сложных и масштабных решений для наших заказчиков по всему миру, EPAM Systems неизменно остается признанным лидером в таких областях, как:\r\n</p>\r\n<ul>\r\n    <li>Разработка, тестирование, сопровождение и поддержка заказного программного обеспечения и бизнес-приложений;</li>\r\n    <li>Интеграция приложений на базе продуктов SAP, Oracle, IBM, Microsoft;</li>\r\n    <li>Миграция приложений на новую интеграционную платформу;</li>\r\n    <li>Создание выделенных центров разработки (центров компетенции), центров тестирования и контроля качества программного обеспечения.</li>\r\n</ul>', 'about_company', 'show', 'ru', '2016-02-15'),
(5, 'Вакансии', '<p>\r\nБлагодаря сервисам на сайте, вы сбережете время и получите уверенность в том, что поиск работы – это несложная и быстро выполнимая задача.</p>\r\n<p>\r\nПредлагаете вакансии в Беларуси? Нужны специалисты, которым интересна работа в Минске?</p>\r\n<p>\r\nЗнакомьтесь с регулярно обновляемыми резюме на РАБОТА.TUT.BY! Здесь вы найдете кандидатов на вакантную должность с необходимым стажем и набором навыков. Необходимо лишь разместить вакансию. Более того, получая доступ к нашей базе, вы сами выбираете время для изучения интересных резюме.</p>\r\n<p>\r\nВсе инструменты на сайте не раз доказывали свою эффективность. Пользуясь ими, вы определенно сократите время, затрачиваемое на размещение и закрытие вакансий в Минске и областных городах. Теперь вся информация о желающих найти работу в Минске оказывается в вашем распоряжении по первому же требованию.</p>', 'vacancy', 'show', 'ru', '2016-02-15'),
(7, 'Контакты', '<p>ЗАО «БелХард Групп»</p>\r\n<p>Адрес:</p>\r\n<p>ул. Мельникайте, 2-709</p>\r\n<p>220004, г. Минск, Республика Беларусь</p>\r\n<p>Тел./факс</p>', 'contacts', 'show', 'ru', '2016-02-15');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
