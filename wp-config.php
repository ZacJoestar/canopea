<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'new_canopea');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8*Fdz`yE6nJJ*-j*P7 Sqm21a)>*29LJ}z:*~r)_`i=T?6k.9m 7pX+C1uyBB^n}');
define('SECURE_AUTH_KEY',  '^5RxMu68^;:?ddBv{Vn2Qm0eGs$MC|NL[|ECX}_oeF2U0OW;? n$s#HUR}k&S~P2');
define('LOGGED_IN_KEY',    '=SnHR-K=UcYD4-po~j<GdrGnns*?6E!G Le$ee88y7dYc6s&0+CnE;pf3MHr]lU@');
define('NONCE_KEY',        'RQ-g2;{Hj^;}8;1SE][S.]Ivr~++FSUs}IFZd.j`<n=R}s>/t7ulbkZTZIf2C*Zq');
define('AUTH_SALT',        '-btF3lQq|q~inAB.q?pk!l2/I>CH2,NUG8O#*8p=UuB%FjQ )):5kJ& ;RLi?Y)<');
define('SECURE_AUTH_SALT', 'gzm3QLF!~}A6}Lx:kBYxArr{O)=D90Bw:oy$kzv:9s@GnN,C!5+0<k0!mxOd+xJP');
define('LOGGED_IN_SALT',   'V_?iLtq[l$P#^J}!QM.2Fo0S -00VI$fIhm|+4wfr}*Kn;LDHD0{Ko!!hhj2.v#&');
define('NONCE_SALT',       'O|sWvWz?vs,X=/6-iPIm+%_-m[T&yQ9Kd?-(#$[7ticq^#4NLcd+HuE8zB2)tp+K');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'can_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');