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
define( 'DB_NAME', 'wordPress' );

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
define( 'AUTH_KEY',         '7E}x,?8z(l t`*ecFu#(Jn5Lxe%M9*k~4N kAp3vj;`)=|M^~|(KuSbC5XqRkrI?' );
define( 'SECURE_AUTH_KEY',  'xFDu@M4ATUOs]?1mI<kV)bG9ew@6u|6/_CnWTdRC?GiKi1* 9oJ/A=V s;#AD7,;' );
define( 'LOGGED_IN_KEY',    'c+!1:}eO!M_nrQ=sf=gcU]`JGM!6ml6.!wE#/y@U!h.J)Tl=X`NmCw!3*VB#~Vv5' );
define( 'NONCE_KEY',        '160Y#ck-M#*vy.Rp3.W9QI5P=TmZu wQqxO>qlx)tAukDmMIsfL$!_FaLpupurJm' );
define( 'AUTH_SALT',        ',2Le_#z9Br6thGCW|@F)E$nM8bq{^)(=ZMq^:#7oMpkYO^Ao_?qdfP BrH8r}#y-' );
define( 'SECURE_AUTH_SALT', 'X&Wn53UCbrk&4u{#VF_,T[klQYpx%D5p9?0WU{IQ-KqZ4a~YQn63>i9;VjV!VY<w' );
define( 'LOGGED_IN_SALT',   '@m!%_ctYRAs~4j7mS?F<oD`8+htyrt{N2Du2%Fk2,4)iscrO}6TN}trt=Wn9X&)[' );
define( 'NONCE_SALT',       'RHGgK5Md*1p%u k0eBV$CjRN]oev:qCL1J~Y5l|Ce7fNlyhFC~DQb8??#oP?XWHv' );
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
