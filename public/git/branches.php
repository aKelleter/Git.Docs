<?php
declare(strict_types=1);  

use App\UI\Template;
use App\UI\Layout;

$pageTitle = 'Git.Docs - Les branches';

// -----------------------------------------------
$tpl = new Template(ROOT_PATH . '/templates/git');
$tpl->setFile([
        'main'  => 'branches.html'    
]);

$tpl->setVar('Header', Layout::getHeader($pageTitle));
$tpl->setVar('SectionHeader', Layout::getSectionHeader());
$tpl->setVar('Navigation', Layout::getNavigation());
$tpl->setVar('Ressources', Layout::getRessources('branches'));
$tpl->setVar('Footer', Layout::getFooter());
$tpl->setVar('JSSection', Layout::getJSSection());

$tpl->pparse('display', 'main');
