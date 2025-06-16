<?php
declare(strict_types=1);

// Définition des constantes de base
define('DS', DIRECTORY_SEPARATOR);
define('ROOT_PATH', __DIR__); // Important : défini avant d'inclure d'autres fichiers

// Charger la configuration
require_once ROOT_PATH . '/config/conf.php';
require_once ROOT_PATH . '/config/database.php';

// Charger l'autoloader
require_once ROOT_PATH . '/autoload.php';

use App\Database\Connection;

// Initialisation de la connexion
Connection::init(
    DB_DRIVER,
    [
        'path' => ROOT_PATH . '/datas/' . DB_NAME,
        'host' => DB_HOST,
        'dbname' => DB_NAME,
        'user' => DB_USER,
        'pass' => DB_PASS,
    ]
);
