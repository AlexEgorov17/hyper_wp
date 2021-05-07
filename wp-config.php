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
define( 'DB_NAME', 'hyper_wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'VAc44=]G1jvLWzw{fo=cn>LYn3I-5gM CwW*m~hUIFf&C0aV(2o,{,?hu_FSR!J(' );
define( 'SECURE_AUTH_KEY',  'F>Qi[{6LGB0.;&%n_G%gM+_[a|qA0.X|yC1D+XwM#b3_g-9?!2 0 F`D4y,s7;{)' );
define( 'LOGGED_IN_KEY',    ' |!^jVASjU)eWg}Z-z|KG,YT+P@?Rf$po%y|uVJo+u0]+3eK1(vdSS2L1CcgGKHP' );
define( 'NONCE_KEY',        'z$V^JG)Oj!C$Kep4m+)opcC4LNbS@Vl4KcMJT 88I,,9+!]]QcyH#H8:O@KbGTJ>' );
define( 'AUTH_SALT',        '.:I;[l%94w*;&<kDb:o6u*f}~Wl{W .R--ii&VG84XQav`X;1hB==8_i-6y0XDgn' );
define( 'SECURE_AUTH_SALT', '=JcYtmZ9<B{D2a,-B8R*6Bh!qlAA-p[,9vTE#}Ks~y sv[.5VnE4&FfF=,R~&WiK' );
define( 'LOGGED_IN_SALT',   'CP)5OQHFCwHo8?hFp(e;$Y3>Np+vyfw*YeXuGZ<uI8W827crYZM`#MT:o$--`noN' );
define( 'NONCE_SALT',       '.AKxcH#G`sieJ*m9QH:topEJ4Q>^`Mr2u{.MT(evy)ACPg-Ii&exgC6;i,*$zgH8' );

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
