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
define('DB_NAME', 'stroibis_db-en');

/** Имя пользователя MySQL */
define('DB_USER', 'stroibis_mysql');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '/c6zcBvV');

/** Имя сервера MySQL */
define('DB_HOST', 'stroibis.mysql');

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
define('AUTH_KEY',         '(>,``w)p);SNf*FJ4B{en-.,_!#QtVS|~UJ%u]~K,q#bN/S~A+sm7= =Y0|uLO-t');
define('SECURE_AUTH_KEY',  '+I|t0q*K=d~h.;u^thS&-S$-q}$6P12AlyXI++JMqm|@SphnY2;jhPh:v@-Glvw|');
define('LOGGED_IN_KEY',    '*tkZdRxh7auldpT-fJZ9Y|B15d8Mcr{f%O!>Uu7n++_tIq3h8T#GIC<Y1+7PC>nQ');
define('NONCE_KEY',        '+V/izTzW4>UpD4(V.3M|_&It!S`;`rTr_JP=QA$~j16>jKY|vV/ANYDb?tQ@wX-L');
define('AUTH_SALT',        '557syYe1V |m#~k*3QqR|4oHRF.K8{k$Ai9nnu%d`.g/Qd18yeb~r?HLHj+fl[qN');
define('SECURE_AUTH_SALT', 'iIM#YBXkW~p!pwatH j7|sv/1,c0Gx6WL e|LhP{-Q|`u B33HkMlfw4,Ex.1U1V');
define('LOGGED_IN_SALT',   'rF0Abdw/(p}M/RbFp>vy^=*u0C--?{_J]lMgdgA#Zf0iI_VrU=]v@K<#u3oJz^A)');
define('NONCE_SALT',       '+j2#$}sA8BgE?EMp*8t*:1k96u@C]K)rpcv1 }_nR-u4U1QS+rLFkAPG.H+f^_-^');

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
