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
define( 'DB_NAME', 'bestagence' );

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
define( 'AUTH_KEY',         '0#Dc2JmVr16xGop=yeFth%Wxv3y8H_N<,)/1=f}k|]!an%3~v({USx7OcUG6FSE3' );
define( 'SECURE_AUTH_KEY',  'qPPi},U5Hq;?zqL/iWI:}VKiD}AoUjvRm.{K.nhYC[~G/:(+k)X{6V|b6RRZ_!y.' );
define( 'LOGGED_IN_KEY',    '~Zj*o<_]HXz(=B#@ll(wN(w(E&x1xdv.6VNWsWzx+T5._,_GNidjBk+iN f1pdtL' );
define( 'NONCE_KEY',        '#qt:vwZC9DAK3Ha*@uNcR6&:x2E{I8my3VsTU2)B{Ht0#dZqbq{o`C+/=lsY8]qy' );
define( 'AUTH_SALT',        'Z{T#`oZeQ7!pLG#^oM;8HcTf@}q#kUP5*zlB7-GG^x%%(a>nU5_[ss|E@+1+AAo9' );
define( 'SECURE_AUTH_SALT', '??216a@Y!wZW_)vj(40v|!jy-8PKriah(~2+#cRhZg@3&l!~r>1|CEn GFz<=1:Y' );
define( 'LOGGED_IN_SALT',   'Y9KwxGb| }Xck7)C1@=7R*T@..@q^S0WoE/bnS|k4 cl*`HTPrhmO>y($%poFZT~' );
define( 'NONCE_SALT',       'B9ENk}9y5C!iB]lq6$K49jAq=WMon`+Q!d%NuL+*5?i :1J3Jmr)AHXBp -pcIvi' );
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
