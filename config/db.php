<?php
// use Symfony\Component\Dotenv\Dotenv;

// $dotenv = new Dotenv();
// $dotenv->load(__DIR__ . '/../.env'); 

return [
   'class' => 'yii\db\Connection',
   'dsn' => 'mysql:host=' . $_ENV['MYSQL_HOST'] . ';dbname=' . $_ENV['MYSQL_NAME'],
   'username' => $_ENV['MYSQL_USER'],
   'password' => $_ENV['MYSQL_PASS'],
   'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
