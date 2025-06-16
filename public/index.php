<?php
declare(strict_types=1);

require_once __DIR__ . '/../bootstrap.php';

use App\Router\Router;

$content = Router::render();
$page = Router::resolve();
//DEBUG//echo 'PAGE : ' . $page; 
echo $content;



