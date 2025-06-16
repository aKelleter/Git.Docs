<?php
declare(strict_types=1);

/**
 * Fichier de configuration du menu de navigation
 * 
 * Chaque entrée représente :
 *   - la clé : identifiant de la page (slug dans l'URL, ex: /home, /branches)
 *   - la valeur : libellé affiché dans le menu
 */

/**
 * Menu principal avec support pour les sous-éléments (dropdown)
 */

return [
    'git/index' => 'Sommaire',
    'Les rubriques' => [
        'git/commandes' => 'Commandes Git',
        'git/restaurer' => 'Restaurer',
        'git/branches' => 'Les branches'
    ],
    'adm/index' => 'Interface admin',
    'demo/index' => 'Demo', 
    'login/index' => 'Login'
];
