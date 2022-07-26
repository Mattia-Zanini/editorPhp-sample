<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni database
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'wordpress' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'V/W387Ahy2CxO}O[*Q_@@xi>^w90jcl9-K;4JO*.Bw(JsC#hA.pN/}@Kq:Pv;=qD' );
define( 'SECURE_AUTH_KEY',  '*8PCAWBENu(io]nacao:i7q`V.dTtX6zx(lhD3/FF@<{Q$~hYFLu3P[_*M./trF@' );
define( 'LOGGED_IN_KEY',    '~6SfwHS5{m]muG.Z9$3$D4czSJotH!@>CGPJkLp]uk!GlxfvB%@ry8,QQRrW#zw_' );
define( 'NONCE_KEY',        '4}<x:.:I:]8Xx3z|c:}/am9W$N$DX~Iw/0S2hnRLPKitDba90?6Ej24z>IB]G_6D' );
define( 'AUTH_SALT',        '=7iV<S,j*D^j!aB~,T&2J Vg{0^</I{ XJ&1Z%iw-5|IAad]RgOW+^8sh<RSsWTq' );
define( 'SECURE_AUTH_SALT', '&^u4R6HVhbtGlms&5`:vi&7I4+$`E1+@kee8 .#NH;%wtvWdT_%f5*|M!jJ}-EeO' );
define( 'LOGGED_IN_SALT',   '>o*@3x.5#oYM6%M!0g3(+T~.uZcxe=At#@:&l^7%NjPS!pLP-US0Lb[lt,=VlhDZ' );
define( 'NONCE_SALT',       'Zv?VDBV:aJC^iUJT<mSQMvAq<]Wl2+0D-}y5T-USh_ 17ZN~|4X};xM1-n6;db:{' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
