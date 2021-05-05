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
define( 'DB_NAME', 'bkp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'SAzx8pjm?%p.dyBa`h$r>Spv>uCRMNwIW7P4`POvg0Msy4~z{FF}?mV]+7P8;woK' );
define( 'SECURE_AUTH_KEY',  'h>Lt+/e=Tn~66*~.E5+aV#}8L8=~,Bc41t0scZ(kK899j.F}%!T*${>*Z)X:aN&n' );
define( 'LOGGED_IN_KEY',    '&u^]l$wGWKG$L(o$HxMV t~S`<`p1=bA&R+8+x:am<b(_~>oVCAu|f )Ews,YRJN' );
define( 'NONCE_KEY',        '1{#;eG*T{WJfnl0KhNw gq$<Y%@]D>g3U8x,[al`h@vZcH;}=){#1(![<dcgZV#X' );
define( 'AUTH_SALT',        'mON6uS9-_kZ<s.yD*> `g^EY~7&qB9tx*D*[bf.K`Q=O1+eHL/U>#I4^#<13KmFN' );
define( 'SECURE_AUTH_SALT', 'p(kJ8FF|S&tF/&Y:tNYl?aR@e;2ncUZ^LzS;+GR9^vr0;$Wm==5^mJnKie@)y6HD' );
define( 'LOGGED_IN_SALT',   'Fjl1Rry?{NX*#F).2DJPS.XvO^Pg|l+py?j|tO0EqS bU,2VbYih(:0--.piJH3S' );
define( 'NONCE_SALT',       '.S5c{84- bYuf]ivtqLrNZ_zHJu&=Z>6rHLv4vprMAtT3(AvXTP#{B6/xaQ&N~|Y' );

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
