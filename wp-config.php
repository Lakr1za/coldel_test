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
define( 'DB_NAME', 'coldel-wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '}NTX>X7GOorGXh:Pq `GR|0}ZX,sJ(JjoK~ah#@NnNP|; QWPVQw-I$/b)K<vv=T' );
define( 'SECURE_AUTH_KEY',  'M-tjN}A% .uOty|BN`X)Qcq=cxD[uUwH6z0krr0U}{z$>Hftx*&78gm!uU>k~}vT' );
define( 'LOGGED_IN_KEY',    '(hJbONU#]!%36s$3j3}Dc.J4--9qtcE59u[IrT6_+*_)]d_+6$O0!_V[|N24J)JA' );
define( 'NONCE_KEY',        'GgLYt@CrQo}(pF1y2hC-p0nVqY33*{ARz$KH<+d2Uey{(C4jlsDY,w)OD}!L6i%+' );
define( 'AUTH_SALT',        'depOwTj7PNKkt1OUzZEhb;[P~p3Cy1r_Ia+iktz)N_eqcmW/U;$Xk3`ELHvnFicF' );
define( 'SECURE_AUTH_SALT', '@qf_>%S^sXZ VWchs<Psahgx1R0d#WwSvtqJ9<U;HV9*,,i:x`1vB/%^JjApcCRH' );
define( 'LOGGED_IN_SALT',   ']FC&ai!SD$EZ{]Y%ATh8HY{i;~B5!=t7;kwgr__(#(AUmduJV(#00]%WQoRZ]?1c' );
define( 'NONCE_SALT',       'fs~vsA8xWAzk]vo/2ihMgcG8+vP[!=3nYCudEi<3s>zjpqYjh?aU$=h2anv$:?{F' );

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
