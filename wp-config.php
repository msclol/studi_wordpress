<?php
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
define( 'DB_NAME', 'graduate_wp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         'W[05t(#s`7T<t6)DE!aR5n~m<y^w8Vs9(HTe#}0bH6<D@j:X+g$nXelB<+B/h<bw' );
define( 'SECURE_AUTH_KEY',  '5%W9w5L!hU=ncNXeYp?6<aK(`HZ[.r*7O(b*]K7{TI<Xtb&|)uBroEpm|`w!{rbZ' );
define( 'LOGGED_IN_KEY',    'F(s@/2}ih9b,a!Q@^O{!rw}%Yf/gOYdf-<,GrS;!meNZZ9w7s3c+-pwWdNhY0:>2' );
define( 'NONCE_KEY',        'qmdx!Q2jIPZg1~s`lj2aY@Zzf),;6@wy5~C5<Pm3h|(iHC62&ObhMZTP_!1dnkxi' );
define( 'AUTH_SALT',        '~0K?u8|08|5BEY?C*nNET%)|QRf,62}a3<yn)>1O<S:|z7lmz]V9,wtB}duG bI~' );
define( 'SECURE_AUTH_SALT', 'rP(8HYUTEIT??l>gz9eGK!k:iWl>^plO=yuv%Ov1_q$&,Y,sZ84;Swp8Y&>0$^}P' );
define( 'LOGGED_IN_SALT',   'o{oq4>qc )fT&2AG(CS]$5VYYb](F,`Mv5$N>vrJ}IhLXFk2*myRYK6[J>D vl;Z' );
define( 'NONCE_SALT',       '?)MwX_de_r3]l$uX71:,ejuhK{meh*wzplWS$H>+>$3)|U09YMgRu>05PH>$Gsp{' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'gwp_';

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
