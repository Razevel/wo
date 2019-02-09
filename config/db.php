<?php

// Приватные настройки не для opensource (логин, пароль пароль)
$private = require_once __DIR__ . '/_private.php';

return [
    'class' => 'yii\db\Connection',
    'dsn' => $private['db']['driver'].':host='.$private['db']['host'].';dbname=' . $private['db']['name'],
    'username' => $private['db']['username'],
    'password' => $private['db']['password'],
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
