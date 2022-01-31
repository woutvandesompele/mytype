<?php
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection([
 'driver'    => 'mysql',
 'host'      => getenv('PHP_DB_HOST') ?: 'ID339008_mytype.db.webhosting.be',
 'database'  => getenv('PHP_DB_DATABASE') ?: 'ID339008_mytype',
 'username'  => getenv('PHP_DB_USERNAME') ?: 'ID339008_mytype',
 'password'  => getenv('PHP_DB_PASSWORD') ?: 'sS2y3tSckYJD',
 'charset'   => 'utf8mb4',
 'collation' => 'utf8mb4_unicode_ci',
 'prefix'    => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();
