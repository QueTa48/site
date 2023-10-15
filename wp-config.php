<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'site' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'LKJHGpoiuy122' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9qQa|C7.2=0-h&_g=1);5h$>- Z5cedxlH`Cy:g-30M{!wF(+~/ho+ 1ya$IZ]3a' );
define( 'SECURE_AUTH_KEY',  'ek%(lVm ~9)WC--5vuQ0q {c?Q?Ye9?.vlJzg/Ysf#}vWE5sB+5H4?c#[:%LR+NI' );
define( 'LOGGED_IN_KEY',    '>X{D{ZYWUov}6|cIm-iPc,[yx?(J6fP&#bUaq}i2TVs/y:m*,Vg1C&)}MwntGE8~' );
define( 'NONCE_KEY',        '/sa7En0DU%12?Sn3 m/ixVq{!BZ,kiR^My;ov0]$PQZ=dYDHy@//T<v>({; P9mX' );
define( 'AUTH_SALT',        'M/R23tE}{x`>QD:0;~tAaqYv+wjYLLVg&$u`Q{/)_8QcNeV&uJ=CN5f6>/A)`cK-' );
define( 'SECURE_AUTH_SALT', '8& 3@lXG;k?E7C*vXIa7$i$hBYVz?<K%pAgO375H^6Xukc|%mJ4lYg?fvu,#4Oji' );
define( 'LOGGED_IN_SALT',   '6S30|4LM1v`FLka)7?fRAr=DKD]aKamw2&EHK%?U,I*2!c;q33#,m 6<S}DYkkP+' );
define( 'NONCE_SALT',       '}zcJH0GAqa*&ae~Ayv^3P$ElE^*$9Ic( ~SDj9v;t62YV^,xG4/KGi&`Ex2_DLHC' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
