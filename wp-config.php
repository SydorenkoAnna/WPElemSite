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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_e_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ajY:f}h4F]Tvn`9%gg6]$Z+Sjry2/ L{4?olhwi;TO>1(En{WiGw0/<7=4hi0;dt' );
define( 'SECURE_AUTH_KEY',  '$M>A$tq6w4<d$?3)teZ;S,j{^HM3PU]uDWUkBCyYAlEqW/Cl*kL`~$kHUq|JOGHk' );
define( 'LOGGED_IN_KEY',    '|*m0ua?D+5a^)(5X9<(//iWE$sN%C;UmOodor&,<~wEecx?8S(fP3JB&|^_d5LM5' );
define( 'NONCE_KEY',        'I. 3ktR?h pGWgL,#],b)yF vu`-F_EQ{Wv|n1__z?9[(yvV:S$fR05u`Us,TC^/' );
define( 'AUTH_SALT',        '.5eT(de{>4BE&%s5huLp|Yw PVP~m*0FDJs^56z=;aELQr!UK]T7t0:>E];P%kg#' );
define( 'SECURE_AUTH_SALT', '~[t3mGQth~]ay0a5p$dD9Gwmbtx#aa1mt_T5Ia/Kma.w?2spw2CD=$NZm^+[1#kf' );
define( 'LOGGED_IN_SALT',   '|N@v8$e PCl{mq$U ^f|?d95;1Z?uoSRsNDBt-m||w&B!M*hYFZNzhv..gK$>@?s' );
define( 'NONCE_SALT',       '*|j$iS|Uyw2.Pc&~D,PIU4G1>v89qZt*bgLT+4,KA{=1+k,h|&E>t;|DvT/6b?GP' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
