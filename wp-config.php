<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'b2s_blog');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '0c(,,q:h^LL4');

/** Nome do host do MySQL */
define('DB_HOST', 'http://bee2sharebd.cenocz9wukam.us-east-1.rds.amazonaws.com/');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'oz&30M1!&[<3HSB?l,L`&VL&Me+?!}Y$p}OiLECxnnx(DtC#q{ED:nVZt=cV3,Fw');
define('SECURE_AUTH_KEY',  '^6yC/]L,F{yhr)Fv|&lbt9[RPvF|H0{<$F#kvg{>/c9gpVBIb>Y{?mJMEPUC[:_f');
define('LOGGED_IN_KEY',    ',dYy9<Fd.i +*CMa=ImTkRI)pXwtktnY:a.2 @|V4 W:,V!jeDw2F_@_bhMl6bln');
define('NONCE_KEY',        'XBL)Y|?pnzX1Jx0>8}EZ^2@Ig-lem `5yhBQ?muVXu<>&%LoTOeG YRM,xLT|j)Q');
define('AUTH_SALT',        '3nUMXO7+0B$S*t0U((#BH75M`C?Y<uLa1 K[rmpnYA:nno}Z5nIT*N^j#Nof|I4*');
define('SECURE_AUTH_SALT', 'x^uIv4:!mF!M$BaRx`>lST;U&vg@#s5 3)n~/b[rnL>yU)%iU4W(UKs5YMbkvbUA');
define('LOGGED_IN_SALT',   'rnc:i:e}!!A1&ln/Ap(tMKrs.;jbh]rANZ.HR9swE2?#E9ArKOt7-8gq+$#0$Yc0');
define('NONCE_SALT',       'F.S[oD]4/lY83g<$5S:<UIb?za;>/98qj_Xmq=oke==$s&z nRt7mNBO[R!s*y+i');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'b2s_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
