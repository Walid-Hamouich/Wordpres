<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         ')n Yn=8wi$MRcHlt?^b7z&TOSc4njyX8:Z^lz]-Z9Z:WF`aQpf*;E#cU5kLb=14[' );
define( 'SECURE_AUTH_KEY',  '@SH+:[cVrF)NnKDHy#m]gEXeNcB%-gT{HDR=!cDW2yg,Dou2xnBFl]wAu,{3B&DQ' );
define( 'LOGGED_IN_KEY',    'V#8Bix|4kOdY$j&# V_M{G0;y<B|CmW9f[G*DlN:nxy>%^[w:oz:xt7.E?A3JjWD' );
define( 'NONCE_KEY',        'lvhfA,zahr (eYrvN!k`$.V.@5=[|R9Jb<vLf2(=Az0UF^q6&m!|:OC{6+pUCf7|' );
define( 'AUTH_SALT',        '%6gmpn8Q$3V_)-w+X1iAWk+=#sa[&2ZslLN-(iGp{wWtiOK4$LT)g+6/=`-42!ZX' );
define( 'SECURE_AUTH_SALT', 'gd^K_hR-tcy#lZ?b{+-?2dl#Gb<B79f6,c|B?@QK:2n)qGy-aqZF!/Q|X<Vi?$Mk' );
define( 'LOGGED_IN_SALT',   'Zv>_:}lKmT_P8.V~P+# 6<)R~x$Sb:hFl[[cj)+[$j8j!ew>46wA7?Uj-<yFul9q' );
define( 'NONCE_SALT',       'R24ICf%<JGGaX&=~2hl)#X]f;u/^yVHv:yyf2J[E`)|`@0U3t]#tK,?2fp%4w|tR' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
