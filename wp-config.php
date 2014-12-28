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
define('DB_NAME', 'wp4');

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
define('AUTH_KEY',         'F`O`CjCK}MrzS&IG,,OVS5|pN=~0e#^i|B]5]C~*y+l(O7hCnFzvayWuz=tJv K4');
define('SECURE_AUTH_KEY',  'ziA72O2P)A2KUqt3$q<w[#krNv+?_kd:nBG-O}{_5h<b^z<n&H-2KaTx@@rp7z?(');
define('LOGGED_IN_KEY',    'ui+9`iJ=.Vo-SnW<I%,lW|W3I}aO`&w69%e eLS)DKEe+-l+AfJ+8>eNfJRNS^jU');
define('NONCE_KEY',        'n-B)_ci4jr66_d[0~,[zTwZ19IQ&D,:,f+W#|a-=&ui1O~1ze,i2K5+MUbim)[?R');
define('AUTH_SALT',        '|#s$?n Zev@:5zbx!m<t=x<*)-`~6jvw1Kp_qnYg>L5rl5&*x3-peZnPUWXeFPC6');
define('SECURE_AUTH_SALT', 'Pj3Xo e*|}W.h?2eIF8-|%DsO^qrV^|Lr-/@mc66K1*z^VK>yR-nv(VpVATz0QG1');
define('LOGGED_IN_SALT',   's3f=h>W%|]$W^c;])hG.drUyrr6(!9L0P+2&2H8 q_+]@d+2qTAV+D)w25{=R#l ');
define('NONCE_SALT',       ')4mbb+Cjn)3`lO=}q>0-h?4Q23j*kRvRb1S$,++?PV0m;+&F{i?+eR*6fiZ-)E}j');

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
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
