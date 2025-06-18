<?php
declare(strict_types=1);  

use App\UI\Template;
use App\UI\Layout;

$pageTitle = 'Git.Docs - Liens';

// -----------------------------------------------
$tpl = new Template(ROOT_PATH . '/templates/links');
$tpl->setFile([
        'main'  => 'index.html'    
]);

$tpl->setVar('Header', Layout::getHeader($pageTitle));
$tpl->setVar('SectionHeader', Layout::getSectionHeader());
$tpl->setVar('Navigation', Layout::getNavigation());
$tpl->setVar('Footer', Layout::getFooter());
$tpl->setVar('JSSection', Layout::getJSSection());

// Inclusion des chaînes de caractères à traduire
require_once ROOT_PATH . '/locale/strToTranslate.php';

$tpl->pparse('display', 'main');
