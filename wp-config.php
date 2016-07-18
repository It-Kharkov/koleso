<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'WPCACHEHOME', '/home/kolesofc/public_html/koleso-f.com.ua/kolesof/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'kolesofc_database');

/** Имя пользователя MySQL */
define('DB_USER', 'kolesofc_user');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'P5K!-!C+m30h');

/** Имя сервера MySQL */
define('DB_HOST', 'db.cloud434.nic.ua');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '7}]@A?=xY/KDmP[L$6G.nRM+GS@CsHp;w~L2[vMBL#16zW7GZgzHfqo#{_Tr;CF~');
define('SECURE_AUTH_KEY',  'dtY@grBDh?_HoPy)veFA$O#1y^O1.`dq8vY+VK@+n8/vm=hjX/?);EC8w1b@M]wr');
define('LOGGED_IN_KEY',    '=mb,}=KPe[~3z~3%-m%TkX:l=cJv|v--H|IL)YAuPF>FeXhPE+4YQbi^f?2+zros');
define('NONCE_KEY',        'mj$;m1c;`Rf$d&&{^M:,H |E2%Rb{?X^FtRs^8RWLCcrz*$3A^XmzR4!fH90^PRN');
define('AUTH_SALT',        'RoVMeG;_%@1(t*V8,=/(?nJeik{6Gp&A,({&pPYY}pe<}B&>r+(^h!@7!&kUWA:?');
define('SECURE_AUTH_SALT', 'nvS]/z}31f9g7A/yTsK*IDAW8TebpOCgS)OmNBf!s,dA7tvr>4`mI}@;3MF!=u%k');
define('LOGGED_IN_SALT',   'pUw.{Trp%gqrlkWLhi3JXgCQ&=L}Mxx5gWE m~v.V2:^(jWXus,;pJL/[>rPD=6$');
define('NONCE_SALT',       'CZBVAf-;h)B/}FwH~a4}P#qOj9txG=LkW{{NP)s{ZyEM#8{/yA4Gh=z`fi&8l4F!');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

define( 'WP_CACHE', true );

define('WP_POST_REVISIONS', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
