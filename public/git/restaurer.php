<?php
declare(strict_types=1);  

use App\UI\Template;
use App\UI\Layout;

$pageTitle = 'Git.Docs - Restauration';

// -----------------------------------------------
$tpl = new Template(ROOT_PATH . '/templates/git');
$tpl->setFile([
        'main'  => 'restaurer.html'    
]);

$tpl->setVar('Header', Layout::getHeader($pageTitle));
$tpl->setVar('SectionHeader', Layout::getSectionHeader());
$tpl->setVar('Navigation', Layout::getNavigation());
$tpl->setVar('Ressources', Layout::getRessources('restaurer'));
$tpl->setVar('Footer', Layout::getFooter());
$tpl->setVar('JSSection', Layout::getJSSection());

$tpl->pparse('display', 'main');
