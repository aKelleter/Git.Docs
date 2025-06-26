<?php
declare(strict_types=1);

const APP_NAME = "Git.Docs";
const APP_VER = "1.14.0-25062025-1655";
const BASE_URL = '/prj/Git.Docs';
const DEFAULT_MODULE = 'git';

const APP_MULTI_LANG = true;
const APP_DEFAULT_LANG = 'fr_BE';

define('ENV', 'dev'); // ou 'prod' (production) ou 'acc' (acceptance)
define('IS_PROD', ENV === 'prod');
define('IS_DEV', ENV === 'dev');
define('IS_ACC', ENV === 'acc');

define('DEBUG', IS_DEV || IS_ACC);

define('LOG_PATHFILE', ROOT_PATH . '/logs/' . ENV . '-' . date('Y-m-d') . '.log');
define('CACHE_PATH', ROOT_PATH . '/cache/' . ENV);
