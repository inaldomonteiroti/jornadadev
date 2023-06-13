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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'jornadadev' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'V}fjrc#RQ,RzCp!mTV,R25EfE(]:6=?3HZi85}kx;_/.VEvvZoV4F9#7XbS=zz$i' );
define( 'SECURE_AUTH_KEY',  '#&pta#)ph=/V(~!LrOlO;Uhs<S.hx1wJQ/%N*nOKzhF Iey R%x5@<0suq:vCZtc' );
define( 'LOGGED_IN_KEY',    '4H1C;m!2F:(L)u!2*#!(u[LgA5]@76>!l/E7Y5Te2`W=#5-6<`*4Gk9Rqzb_T5>W' );
define( 'NONCE_KEY',        'E_#m#gj# pyU#CVA*T?kAs/~IVOp&,]2K107i$O3Ed<(uCpWL-e,2am{KJ#qvetN' );
define( 'AUTH_SALT',        'RQKS:Csx1fAjx6jKS&,3otq`i/@Z04<%),myu.IETl@,K}7`*$:!~Q=r|~#}7yq_' );
define( 'SECURE_AUTH_SALT', 'fgrZ&26tS{M{e}b,SGyiP6Pg}aw4BiAdP,s~*8c*zBNs1VWN(SVKIKu;xiZxP.tp' );
define( 'LOGGED_IN_SALT',   'ck*h0G=o Q%kP^#l8[NS]IXYqe=Op@]7UT}$F =/>GuH-1 )6T7,:4+I]r1Ow* O' );
define( 'NONCE_SALT',       '5,LNo`uJUW4$U^2cGL-C-]^lSkdW~r-hYj)_R%|9Q5r~Co|}!}S%%oZkayfFUvrc' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
