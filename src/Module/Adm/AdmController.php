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
        $message = '';

        // Suppression fichier cache
        if (isset($_GET['delete'], $_GET['token'])) {
            if (Csrf::verifyToken($_GET['token'])) {
                $deleted = CacheManager::clearPage($_GET['delete']);
                $message = $deleted
                    ? '<div class="alert alert-success">Fichier cache supprimé : ' . htmlspecialchars($_GET['delete']) . '</div>'
                    : '<div class="alert alert-warning">Impossible de supprimer le fichier demandé.</div>';
            } else {
                $message = '<div class="alert alert-danger">Jeton CSRF invalide.</div>';
            }
        }

        // Suppression totale du cache
        if (isset($_GET['clearCache'], $_GET['token'])) {
            if (Csrf::verifyToken($_GET['token'])) {
                $message = CacheManager::clear()
                    ? '<div class="alert alert-success">Tous les fichiers de cache ont été supprimés.</div>'
                    : '<div class="alert alert-warning">Aucun fichier à supprimer ou erreur.</div>';
            } else {
                $message = '<div class="alert alert-danger">Jeton CSRF invalide.</div>';
            }
        }
        //-------------------------------------------------------------------------------

        // Génération de la vue
        $tpl = new Template(ROOT_PATH . '/templates/adm');
        $tpl->setFile(['main' => 'index.html']);

        $csrfToken = Csrf::generateToken();

        $tpl->setVar([
            'Header'           => Layout::getHeader($pageTitle),
            'SectionHeader'    => Layout::getSectionHeader(),
            'Navigation'       => Layout::getNavigation(),
            'ListFilesCache'   => AdmView::renderListCachedFiles($csrfToken),
            'CacheMessage'     => $message,
            'Url_git_index'    => Url::format('/git/index', [], true),
            'Footer'           => Layout::getFooter(),
            'JSSection'        => Layout::getJSSection(),
        ]);

        $tpl->pparse('display', 'main');
    }
}
