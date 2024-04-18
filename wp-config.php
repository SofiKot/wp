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
define( 'DB_NAME', '088-22_13093' );

/** Имя пользователя базы данных */
define( 'DB_USER', '088-22_13093' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '6da77e0e86db71a6c5cf' );

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
define( 'AUTH_KEY',         'CYTicK!-0wD{Q&$*^~&ur4H!o:v kqKKOa<>(LPs7hjpTT4r72 HfsT|799s<iIq' );
define( 'SECURE_AUTH_KEY',  '#:)`-<MZ9qX7?BcfCs-2[uZ)bw>(/:-S6(1e~Znnp)/XfzPL;9FYZarr2R1)1D*V' );
define( 'LOGGED_IN_KEY',    'C:7L4r/^FDN2b<9/){k?uTNp#M|c@_wZRLz&_#O~@}V4^C{PVq4H`RmDG&#XtQg7' );
define( 'NONCE_KEY',        '}TKptR)nZsfUdrEX#m{t ,TAu]=Z-NOy){9-rH|<1z^/tfSp|CQM ]kDN #Cl:pA' );
define( 'AUTH_SALT',        'NbEj})KLYFPYX?U|)k$!0!kR+v84r9/ZilxBOD]}x5qHpnBPK6`0/aiP|{-l9fQ.' );
define( 'SECURE_AUTH_SALT', 'aRq&NzhXd1/n:Kx5THWOm][b`v_L{D#vh.Ne-@P8g,>*lJV 8i)FD#`UEElDZ`./' );
define( 'LOGGED_IN_SALT',   'up*q%Gvm]m$[jm]Ol$hZCfaE-CVO=4oodGBW*Kqu0&w3-E?K`p/c,^9([L4v~jQd' );
define( 'NONCE_SALT',       '5G@96-1o2_bzw)-LrwBIapnHe_/SIsY%I3@qA32MWu-*)~d*.fCXq<ZqOnA^VR0N' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'nqATz_';


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