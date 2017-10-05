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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'iH|MF6mP]TQA~2b(>j}pUS.Xt>g{KP.Z|7~hw5&e X1J%&.wbQc#cRcm(>3>o6to');
define('SECURE_AUTH_KEY',  'p%sb~EZ^M#@Zl&ng]9.kz|M%NrC)$bQEPte6. 9ptMHa%Q2[u6Z|9jgoS3IbQZS@');
define('LOGGED_IN_KEY',    'iwU7Zv}hTZH,t|^zC]<~(-ma.X_rlt_l/$f;+c}gtEmb-I[J$!.3DE~<vcwM6yKl');
define('NONCE_KEY',        'eYf$ie]M+ryPsy_zkYz($c9H1(yTJmB{1<r|tO%Z=/_n^f<4z{CH!kz?B^p7Y_]S');
define('AUTH_SALT',        ',5KxOH;dQ4|jI&.C+536PR!QC+oxWbU1v>w0U)FXk*H-UsGg.1[%V8-B4/$C%7]s');
define('SECURE_AUTH_SALT', '1>WZ[18famwbuxi*Li>]cGNg0|1Y`Ya?Jd.%1zcCA)tPJ*d:@Uw~{<VXdWv(0jY@');
define('LOGGED_IN_SALT',   'g,V6iq.4Z:T(Rc9}6lc6ES[ (_`w!f/wosxI/V1`/bmqaRugj7/{p8{wrrcx?#6-');
define('NONCE_SALT',       'mab>fqofB3U?i5SGk`>1N?z}$~z/9dw8%}LK3<rA|ocyiR=f75<@8 (ynFksg8.B');

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
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
