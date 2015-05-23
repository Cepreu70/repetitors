<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'tutor');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'J-P7t!)0^#|ubQ7a}vMWK!AN+Aq:mAHRgIxM@XyitC8^BG-U</C L K2&)qd-Q+W');
define('SECURE_AUTH_KEY',  '42_)go,Pgb?3-z;<x713A-do{Hn7^ty|aQdX+SCcCnDY!GF-gw*roLfeKk{V9Y*N');
define('LOGGED_IN_KEY',    'iDvh>4ZUAwRbEZ>EQc4;Hp+`yY2|Ocz]A(3=5PDA`|;Gv7w,E;]vW-?O-t[N*0e.');
define('NONCE_KEY',        'iQX*1q)pf:`Dg3F&sjqRj1nSlow)H^]3lJgk;kK1scw)Zg45l{5*3Yc%M{KbEP2W');
define('AUTH_SALT',        '{p35p70CK+? W!|mLF|(%DaHV-ot!>:{v=/-]MG(f(,fl}qO0mGD)QeU;?)j$B>)');
define('SECURE_AUTH_SALT', 'r$XC>v;KG]m5k7A_rqD3Gjtz?qy3YK7X9iZ|u[E~vV7|MgC0Ok,b#n)8-mqe>]7P');
define('LOGGED_IN_SALT',   '|NU$/Gu&C0YxgWYY8-~H2},]bZ$07moZH{5%J|]j,c-5|E| 5/r3QdnS4T2{C{+?');
define('NONCE_SALT',       'I6<M@(/gn.{|T5da23LJAaL=.n-wU`$r]oR c:P*CFSgN+z|&_QrNG NCYgkm-e5');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'tutor_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
