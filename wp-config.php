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
define('DB_NAME', '_wordpress_oc_p1');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'XAX7HZD!OEHh;^^M%c|n2^/&QO-*}+-tnYolZ>]1;(04F[~K5hsm.cfc>/8D~d1*');
define('SECURE_AUTH_KEY',  'bW-{aS$u9mK88Gv A!9FI/c/XXUg~(1%@L{m%zIT4[^|lB*jemyK]sCJlgm2/R76');
define('LOGGED_IN_KEY',    'X?2~,${(!f^0aa9RmT&{*mCl#7l?MCoA7H*_g{B4D*Qz,PZWtnJYiLrp i>evtBK');
define('NONCE_KEY',        '%P+sPH-a<|RL@OIEx#O4ir:fcw_1,ud#Dgc+s[73^&y,,S8r*6bi*L4XUKM_{1<:');
define('AUTH_SALT',        'dI6`U70ZUgR2oN?W{Cm#oj,MzV(SUjO#p /|3%AE&:uq;QW8Uk$vC?FjoZ9Z>)ro');
define('SECURE_AUTH_SALT', '6%P.@8fg%yYmxJN4ADGyx+CG9{N(*blqz=Pt42_y<KvqasvS3f:l2,-qyv@Wj79(');
define('LOGGED_IN_SALT',   'g|?erCfV>XPz#[ddH?7bM.AmN`0N_J0vF6q?|$I<s[_w#-EQ9IK /pyDf( _Bppm');
define('NONCE_SALT',       'NG^]AAfxA|u;2@p !31h)U*=a$u>rxwCL5)jCYJw59YT7Z9B/WbWU|NK#)Gg>;Ry');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = '_oc_wordpress';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
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