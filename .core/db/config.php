<?php
define("DB_HOST", getenv('DB_HOST')?getenv('DB_HOST'):'db');
define("DB_USER", getenv('DB_USER')?getenv('DB_USER'):'root');
define("DB_PASS", getenv('DB_PASS')?getenv('DB_PASS'):'');
define("DB_TABLE", getenv('DB_TABLE')?getenv('DB_TABLE'):'test');
define("DB_PORT", getenv('DB_PORT')?getenv('DB_PORT'):3306);
define("DB_CHAR_SET", getenv('DB_CHAR_SET')?getenv('DB_CHAR_SET'):'utf8mb4');
define("DB_DEFAULT_FETCH_MODE", getenv('DB_DEFAULT_FETCH_MODE')?getenv('DB_DEFAULT_FETCH_MODE'):\PDO::FETCH_OBJ);
define("DB_ERRMODE", getenv('DB_ERRMODE')?getenv('DB_ERRMODE'):\PDO::ERRMODE_EXCEPTION);

$options = [
    \PDO::ATTR_ERRMODE            => DB_ERRMODE,
    \PDO::ATTR_DEFAULT_FETCH_MODE => DB_DEFAULT_FETCH_MODE,
    /* \PDO::ATTR_EMULATE_PREPARES   => false, */
];

$dsn = "mysql:host=".DB_HOST.";dbname=".DB_TABLE.";port=".DB_PORT;

try {
    $GLOBALS['DB'] = new \PDO($dsn, DB_USER, DB_PASS, $options);
    /* $GLOBALS['DB']->exec('set names '.DB_CHAR_SET); */
} catch (\PDOException $e) {
    $GLOBALS['DB'] = null;
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
