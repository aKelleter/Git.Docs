<?php
declare(strict_types=1);

namespace App\Module\Adm;

use App\UI\Template;
use App\UI\Layout;
use App\Security\Csrf;
use App\UI\Url;
use App\Core\CacheManager;
use App\Module\Adm\AdmView;

final class AdmController
{
    public static function index(): void
    {
        $pageTitle = 'Git.Docs - Administration';
      

        //-------------------------------------------------------------------------------

        // Génération de la vue
        $tpl = new Template(ROOT_PATH . '/templates/adm');
        $tpl->setFile(['main' => 'index.html']);

        $tpl->setVar([
            'Header'           => Layout::getHeader($pageTitle),
            'SectionHeader'    => Layout::getSectionHeader(),
            'Navigation'       => Layout::getNavigation(),                        
            'Url_adm_index'    => Url::format('/adm/index', [], true),
            'Url_adm_cache'    => Url::format('/adm/cache', [], true),
            'Footer'           => Layout::getFooter(),
            'JSSection'        => Layout::getJSSection(),
        ]);

        $tpl->pparse('display', 'main');
    }

    public static function cache(): void
    {
        $pageTitle = 'Git.Docs - Administration';
        $message = '';

        // Suppression fichier cache
        if (isset($_GET['delete'], $_GET['token'])) {
            if (Csrf::verifyToken($_GET['token'])) {
                $deleted = CacheManager::clearPage($_GET['delete']);
                $message = $deleted
                    ? '<div class="alert alert-success text-center mt-3">Fichier cache supprimé : ' . htmlspecialchars($_GET['delete']) . '</div>'
                    : '<div class="alert alert-warning text-center mt-3">Impossible de supprimer le fichier demandé.</div>';
            } else {
                $message = '<div class="alert alert-danger text-center mt-3">Jeton CSRF invalide.</div>';
            }
        }

        // Suppression totale du cache
        if (isset($_GET['clearCache'], $_GET['token'])) {
            if (Csrf::verifyToken($_GET['token'])) {
                $message = CacheManager::clear()
                    ? '<div class="alert alert-success text-center mt-3">Tous les fichiers de cache ont été supprimés.</div>'
                    : '<div class="alert alert-warning text-center mt-3">Aucun fichier à supprimer ou erreur.</div>';
            } else {
                $message = '<div class="alert alert-danger text-center mt-3">Jeton CSRF invalide.</div>';
            }
        }

        // Génération du token
        $csrfToken = Csrf::generateToken();
        
        //-------------------------------------------------------------------------------

        // Génération de la vue
        $tpl = new Template(ROOT_PATH . '/templates/adm');
        $tpl->setFile(['main' => 'cache.html']);

        $tpl->setVar([
            'Header'           => Layout::getHeader($pageTitle),
            'SectionHeader'    => Layout::getSectionHeader(),
            'Navigation'       => Layout::getNavigation(),
            'ListFilesCache'   => AdmView::renderListCachedFiles($csrfToken),
            'CsrfToken'        => $csrfToken,
            'CacheMessage'     => $message,
            'Url_adm_index'    => Url::format('/adm/index', [], true),
            'Url_adm_cache'    => Url::format('/adm/cache', [], true),
            'Footer'           => Layout::getFooter(),
            'JSSection'        => Layout::getJSSection(),
        ]);

        $tpl->pparse('display', 'main');
    }


}
