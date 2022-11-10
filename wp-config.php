<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

define( 'ITSEC_ENCRYPTION_KEY', 'VUtefmlzRFJ0ZVBOa2M9e146IUIzO2t8MUV3I0NOajx8KFlwKSYvej16eUMjcVo6ekAvU1oselMua1IlV2loRw==' );

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp-demo' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'otthmane' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p[J/U4X+e!|sYd?hz.k8S~l;;h2RuD4.!t^124F~pyX2p&w^dGPx@8+9vrqfxg&1' );
define( 'SECURE_AUTH_KEY',  '-!rZcBHw`_5<?}3Q(+h -54.-aXs!uMU+RC0.vm}ixQs*p|]%?^z;7=MW]2Jtj(G' );
define( 'LOGGED_IN_KEY',    '(&o7oXjeYZ]7{-rY[x:$gP,w8U$[5mm;k4vi l[?CjYJ2c}K[_e%e{Jm!{gj:i>~' );
define( 'NONCE_KEY',        'c&*-wIBmger$:9[T}k1]Zb{o4)xIdZIg^Rh%Ce9m.{n!]8RZW/^6Q(*p[:`n[WJG' );
define( 'AUTH_SALT',        '&+D}[@/{UqN3@vl[]LvI(xXm_][i*v$d7Rt#>:d8rj}3U!Ig6L7<~8>ux`s4W;/i' );
define( 'SECURE_AUTH_SALT', '[>,<5$yn1G$lzFN$g#]*jV.Dyn:H,q>2y6pqo{2_I79^ip|X/I{%(E^#OlQt(o:%' );
define( 'LOGGED_IN_SALT',   'VNS2o)Pa:T`qYZ1Hq,6X,l.rO92i|%5v*>4.L _{TeCQ 5B[V*~21}ft6d,GxJt(' );
define( 'NONCE_SALT',       'A~/BGB*!0xkgUaoRCVjoD(q0/b@pz*J_clMy0y0+_F2i[I7(}}U9qwLJ(Ef!(gh/' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
