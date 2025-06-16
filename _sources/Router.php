<?php
declare(strict_types=1);

namespace App\Router;

/**
 * Mini routeur pour une application simple sans framework.
 * Résout l'URL à partir de la requête et inclut la page correspondante.
 */
final class Router
{
    /**
     * Base de l'URL (chemin relatif à la racine du serveur).
     * Doit correspondre à la constante BASE_URL définie dans config/conf.php
     */
    public static string $basePath = BASE_URL;

    /**
     * Dossier contenant les pages à inclure.
     */
    public static string $pagesDir = __DIR__ . '/../../public/pages/';

    /**
     * Résout l'URL demandée en nom de page.
     * Exemple : "/git.docs/commandes" → "commandes"
     * Si vide : retourne "home"
     * 
     * @return string 
     */
    public static function resolve(): string
    {
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        $base = trim(self::$basePath, '/');

        // Comparaison insensible à la casse
        if (!empty($base) && stripos($uri, $base) === 0) {
            $uri = trim(substr($uri, strlen($base)), '/');
        }
        // Si l'URI est vide, on retourne le module par défaut
        return $uri ?: DEFAULT_MODULE.'/index';
    }


    /**
     * Capture et retourne le contenu HTML de la page à afficher.
     * Si la page n'existe pas, retourne une erreur 404.
     * 
     * @return string 
     */
    public static function render(): string
    {
        $page = self::resolve();
        $pageFile = rtrim(self::$pagesDir, '/') . "/{$page}.php";

        ob_start();
        if (file_exists($pageFile)) {
            require $pageFile;
        } else {
            http_response_code(404);
            echo "<div class='alert alert-danger'>Page introuvable</div>";
        }
        return ob_get_clean();
    }
}
