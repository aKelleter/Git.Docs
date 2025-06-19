<?php
declare(strict_types=1);

namespace App\Core;

final class CacheManager
{
    public static function clear(string $env = ENV): bool
    {
        $dir = ROOT_PATH . '/cache/' . $env;

        if (!is_dir($dir)) {
            return false;
        }

        $files = glob($dir . '/*.html');
        if ($files === false) {
            return false;
        }

        foreach ($files as $file) {
            @unlink($file);
        }

        return true;
    }

    public static function clearPage(string $filename): bool
    {
        $file = self::getCacheDir() . '/' . basename($filename); // sécurité
        return is_file($file) && unlink($file);
    }

    public static function getCacheDir(string $env = ENV): string
    {
        return ROOT_PATH . '/cache/' . $env;
    }

    public static function listCacheFiles(string $env = ENV): array
    {
        // Chemin du dossier de cache
        $dir = self::getCacheDir($env);
       
        // Si le dossier n'existe pas, on retourne une liste vide
        if (!is_dir($dir)) {
            return [];
        }

        // On cherche tous les fichiers HTML dans le dossier
        $files = glob($dir . '/*.html');
       
        // Si aucune correspondance ou erreur, on retourne une liste vide
        if (!is_array($files)) {
            return [];
        }

        // On filtre les fichiers illisibles (optionnel, pour être plus sûr)
        $files = array_filter($files, 'is_readable');

        // On trie les fichiers par date de modification (du plus récent au plus ancien)
        usort($files, function ($a, $b) {
            return filemtime($b) <=> filemtime($a);
        });

        //DEBUG// prtr($files);
        // On retourne la liste triée
        return $files;
    }

}
