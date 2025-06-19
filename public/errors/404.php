<?php
declare(strict_types=1);  

use App\UI\Template;
use App\UI\Layout;

$pageTitle = 'Error - Git.Docs';

// -----------------------------------------------
$tpl = new Template(ROOT_PATH . '/templates/errors');
$tpl->setFile([
        'main'  => '404.html'    
]);

// Blocs
$tpl->setVar('Header', Layout::getHeader($pageTitle));
$tpl->setVar('SectionHeader', Layout::getSectionHeader());
$tpl->setVar('Navigation', Layout::getNavigation());

$tpl->setVar('MessageErreur', Layout::message(T_("Erreur 404 - Cette ressource n'existe pas"), "danger", "text-center"));

$tpl->setVar('Footer', Layout::getFooter());
$tpl->setVar('JSSection', Layout::getJSSection());

// Chaines de traduction spécifiques à la page


// Inclusion des chaînes de caractères à traduire
require_once ROOT_PATH . '/locale/strToTranslate.php';

$tpl->pparse('display', 'main');