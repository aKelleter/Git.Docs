<?php
declare(strict_types=1);

namespace App\UI;

final class Layout
{
    
    
    /**
     * Retourne l'entête HTML de la page
     * `
     * @param string $path 
     * @param string $title 
     * @return string 
     */
    public static function getHeader(string $path = './' , string $title = '') : string
    {
        $base_url = BASE_URL;
        return <<<HTML
        <!DOCTYPE html>
            <html lang="fr">
            <head>
                <meta charset="UTF-8">
                <title>$title</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- Bootstrap -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
                <!-- Highlight.js -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/github-dark.min.css">
                <!-- Custom palette -->
                <link rel="stylesheet" href=" $base_url/assets/css/styles.css">
            </head>
        HTML;
    }
    
    /**
     * Retourne la section header de l'application
     * 
     * @param string $path 
     * @param string $subtitle 
     * @return string 
     */
    public static function getSectionHeader(string $path = './', string $subtitle = ''): string
    {
        $app_name = APP_NAME;
        $html_subtitle = !empty($subtitle) ? "<h2 class=\"text-white\"> - $subtitle - </h2>" : '';

        return <<<HTML
        <header class="py-5 mb-4 text-center header-custom">
            <h1 class="display-5 fw-bold mb-0 text-white">$app_name</h1>
            $html_subtitle
        </header>
        HTML;
    }

    /**
     * Retourne la section footer de l'application
     * 
     * @param string $path 
     * @return string 
     */
    public static function getFooter(string $path = './'): string
    {
        $app_name = APP_NAME;
        $version = APP_VER;

        return <<<HTML
        <footer class="text-center text-secondary py-4">
            $app_name - $version
        </footer>
        HTML;
    }

    /**
     * Retourne le menu de navigation principal de l'application
     * 
     * @param string $path 
     * @return string 
     */
    public static function getNavigation(string $path='./') : string
    {       
        $base_url = BASE_URL;
        return <<<HTML
        <nav class="navbar navbar-expand-md navbar-blue shadow-sm mb-4 rounded-3 shadow-sm">
            <div class="container">
                <ul class="nav nav-pills justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="$base_url/home">Sommaire</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Les rubriques
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="$base_url/commandes">Les commandes</a></li>
                        <li><a class="dropdown-item" href="$base_url/restaurer">Restaurer</a></li>
                        <li><a class="dropdown-item" href="$base_url/branches">Les branches</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>         
        HTML;
    }

    /**
     * Retourne les liens de ressources de la page passée en paramètre
     * 
     * @param string $page 
     * @return string 
     */
    public static function getRessources(string $page) : string 
    {
        switch($page)
        {
            case 'branches' :
                return <<<HTML
                <div class="callout mb-4">      
                    <div>
                        <h6>Sources</h6>
                        <ul>
                            <li><a href="https://kinsta.com/fr/base-de-connaissances/git-delete-branche-locale/" target="_blank" rel="noopener">Kinsta : supprimer une branche locale</a></li>
                            <li><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7475886-apprehendez-le-systeme-de-branches" target="_blank" rel="noopener">OpenClassrooms : appréhender le système de branches</a></li>
                            <li><a href="https://git-scm.com/book/fr/v2/Les-branches-avec-Git-Les-branches-en-bref" target="_blank" rel="noopener">Git SCM : branches en bref</a></li>            
                            <li><a class="mb-3" target="_blank" href="https://www.atlassian.com/fr/git/tutorials/using-branches">Atlassian (les branches)</a> </li>            
                        </ul>            
                    </div>
                </div>
                HTML;
                break;

            default :
                return '';
        }
    }

    public static function getJSSection(string $path = './') : string 
    {
        $base_url = BASE_URL;

        return <<<HTML
            <!-- Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Highlight.js -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>            
            <script type="module" src="$base_url/assets/js/main.js"></script>

        HTML;
    }

}
