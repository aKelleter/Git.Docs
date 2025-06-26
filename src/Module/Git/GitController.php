<?php
declare(strict_types=1);

namespace App\Module\Git;

use App\UI\Template;
use App\UI\Layout;

final class GitController
{
    /**
     * Contrôleur de la page public/git/index.php
     * 
     * @return void 
     */
    public static function index(): void
    {
        $pageTitle = 'Git.Docs';

        // -----------------------------------------------
        $tpl = new Template(ROOT_PATH . '/templates/git');
        $tpl->setFile([
                'main'  => 'index.html'    
        ]);

        /*
        // Activation du cache
        if (IS_PROD || isset($_GET['forceCache'])) {
            $tpl->enableCache(true);
            $tpl->setCacheDir(CACHE_PATH);
            $tpl->setCacheTTL(600); // 10 min en prod
        }
        */    

        // Blocs
        $tpl->setVar('Header', Layout::getHeader($pageTitle));
        $tpl->setVar('SectionHeader', Layout::getSectionHeader());
        $tpl->setVar('Navigation', Layout::getNavigation());
        $tpl->setVar('BtnTop', Layout::getBtnTop());
        $tpl->setVar('Footer', Layout::getFooter());
        $tpl->setVar('JSSection', Layout::getJSSection());

        // Chaines de traduction spécifiques à la page
        $tpl->setVar('STR_PRESENTATION', T_("Ce site a pour objectif de rassembler et de présenter, de façon claire et synthétique, les principales commandes Git utiles au quotidien. Que vous soyez débutant ou utilisateur confirmé, vous trouverez ici des rappels rapides pour manipuler les branches, gérer vos commits, ou retrouver les commandes essentielles à l’aide de quelques clics."));
        $tpl->setVar('STR_N_HESITEZ_PAS', T_("N’hésitez pas à explorer le menu pour accéder aux différentes rubriques.")); 
        $tpl->setVar('STR_BONNE_NAVIGATION', T_("Bonne navigation !"));

        // Inclusion des chaînes de caractères à traduire
        require_once ROOT_PATH . '/locale/strToTranslate.php';

        $tpl->pparse('display', 'main');
    }

    /**
     * Contrôleur de la page public/git/branches.php
     * 
     * @return void 
     */
    public static function branches(): void
    {
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
        $tpl->setVar('BtnTop', Layout::getBtnTop());
        $tpl->setVar('Footer', Layout::getFooter());
        $tpl->setVar('JSSection', Layout::getJSSection());

        // Inclusion des chaînes de caractères à traduire
        require_once ROOT_PATH . '/locale/strToTranslate.php';

        $tpl->pparse('display', 'main');
    }

    /**
     * Contrôleur de la page public/git/commandes.php
     * 
     * @return void 
     */
    public static function commandes(): void
    {
        $pageTitle = 'Git.Docs - Commandes génériques';

        // -----------------------------------------------
        $tpl = new Template(ROOT_PATH . '/templates/git');
        $tpl->setFile([
                'main'  => 'commandes.html'    
        ]);

        $tpl->setVar('Header', Layout::getHeader($pageTitle));
        $tpl->setVar('SectionHeader', Layout::getSectionHeader());
        $tpl->setVar('Navigation', Layout::getNavigation());
        $tpl->setVar('Ressources', Layout::getRessources('commandes'));
        $tpl->setVar('Footer', Layout::getFooter());
        $tpl->setVar('BtnTop', Layout::getBtnTop());
        $tpl->setVar('JSSection', Layout::getJSSection());

        // Inclusion des chaînes de caractères à traduire
        require_once ROOT_PATH . '/locale/strToTranslate.php';

        $tpl->pparse('display', 'main');
    }

    /**
     * Contrôleur de la page public/git/restaurer.php
     * 
     * @return void 
     */
    public static function restaurer(): void
    {
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
        $tpl->setVar('BtnTop', Layout::getBtnTop());
        $tpl->setVar('Footer', Layout::getFooter());
        $tpl->setVar('JSSection', Layout::getJSSection());

        // Inclusion des chaînes de caractères à traduire
        require_once ROOT_PATH . '/locale/strToTranslate.php';

        $tpl->pparse('display', 'main');
    }
}