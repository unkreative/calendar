<?php
// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

$paths = array("/path/to/entity-files");
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'foo',
);

$config = ORMSetup::createAttributeMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);