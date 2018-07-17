<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'site');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'lisiane');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'senha123');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');
define('FS_METHOD','direct');


/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0{IulY^E#Z3&KeEN(Q;nKDBOo5Q5mM~$v_]Wlj8+$Nrk;@$(pK;z|0H3Q^=u^fDV');
define('SECURE_AUTH_KEY',  'UdtloB(2tQj?>ACN0I)ayBoUwn03RW3]-a}]2@_(w0]v0DE0?-[?kR[,SjMnS9Fs');
define('LOGGED_IN_KEY',    'Y|se_bW[%P`5`A}%Lk#&#4/<]w Wt;PdgUS|wKyh3]6gaZ_ziNH^8S`HXpaY8(tq');
define('NONCE_KEY',        'YUI*V{@&q^}*?g-d-_b#m1GMFiMSY+{Ty#-(+2H9y[ {M:f1Z2H}?3{;.?G2^N=U');
define('AUTH_SALT',        'js42>^v9B^K61bu=3tzPSH,o/v&rmTfXX6]i#/ppP%:$:gmMQ34iWuaqF KsD{ S');
define('SECURE_AUTH_SALT', '/A-7^_|s5>UyNR>ol}-CVV{~0cx_EvU{@q9e o)_ZZIc(dp};Fem^ndp{0hABUM4');
define('LOGGED_IN_SALT',   '(3zmjbWu]/c6bTu7VjO}~3_*hh:Z`TgY7?:L4[DAqCn1na%`phN)P>,t7[HV|?F5');
define('NONCE_SALT',       '@kP4[<+5xi HyWF7{+^K_5cjAozbc;o/r${v6Di@}0/bP}+W%jM6WU7u[Qc4-19}');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
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
