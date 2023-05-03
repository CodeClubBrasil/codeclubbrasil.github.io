<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'website_2016');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'kidscode');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Y;|W+NuRo:eRKiI-eDL8Z}Nv]iVS$<n<(~&YqCeli+2m/M%t??_9$C*u^3(2{D.+');
define('SECURE_AUTH_KEY',  'O5Bm,<46c+%AU7a ktcI.XucaT}_s,,JIv(h>/96-~V!gPRkQXm~TC-OU_@-$g#J');
define('LOGGED_IN_KEY',    '/tGqj->k<d@(a&WGtFyc0t~,-I-ls;;fNk5mx8,=vIo@scdcF<+(#-v,r;i%X=as');
define('NONCE_KEY',        'b a-|Av]f~1,j<4.bgh<c)Q@ic-jZuNxu.i-H6Dh@-*Ffwh%g)nrHc+0(_|V$u8{');
define('AUTH_SALT',        'UF-b/a+,zjfTUH%I>zLxW_Yu/Fvq1A6MiEvk}We`JJP8^Zep<U9]B|9/AvhMYXRI');
define('SECURE_AUTH_SALT', '*A2k|8U>rj}GgbLrS#k+Dj8&JeI-*thmm+23>G,L(Du/Jmmhy9GZXs[nwm`^z,,O');
define('LOGGED_IN_SALT',   '[kadK0InABjwz`~T%@}.B8&/p/<O(?&$</6UATa3OcX?5I0jk+`fi8zRt~+A=kpl');
define('NONCE_SALT',       '&JOxJp]]UpC29pX=^G3&0M/Pf6|cy0eOzCnt_ySj@gl|xw~w[qhPC`e#X|r65mCL');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

define('FS_METHOD', 'direct');

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
