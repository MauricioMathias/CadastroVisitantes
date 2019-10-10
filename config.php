<?php

/* Nome do banco de dados */
define('DB_NAME', 'wba_crud');

/* Usuário do banco MySQL*/
define('DB_USER', 'root');

/* Senha do banco MySQL*/
define('DB_PASSWORD', '');

/* Nome do Host MySQL*/
define('DB_HOST', 'localhost');

/* Caminho absoluto para a pasta do sistema*/
if (!defined('ABSPATH'))
		define('ABSPATH', dirname(__FILE__) . '/');

/* Caminho no server para o sistema*/
if (!defined('BASEURL'))
		define('BASEURL', '/projeto');

/* Caminho do arquivo de banco de dados*/
if (!defined('DBAPI'))
		define('DBAPI', ABSPATH . 'inc/database.php');

/* Caminhos dos templates de header e footer*/
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');

?>
