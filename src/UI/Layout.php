<?php
declare(strict_types=1);

namespace App\UI;

final class Layout
{
    /**
     * Retourne la section header de l'application
     * 
     * @param string $path 
     * @param string $subtitle 
     * @return string 
     */
    public static function getHeader(string $path = './', string $subtitle = ''): string
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
                        <a class="nav-link" href="$base_url/public/index.php">Sommaire</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Les rubriques
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="$base_url/public/commandes.php">Les commandes</a></li>
                        <li><a class="dropdown-item" href="$base_url/public/restaurer.php">Restaurer</a></li>
                        <li><a class="dropdown-item" href="$base_url/public/branches.php">Les branches</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>         
        HTML;
    }
}
