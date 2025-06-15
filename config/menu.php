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
    'home' => [
        'label' => 'Sommaire',
        'url'   => 'home',
    ],
    'rubriques' => [
        'label' => 'Les rubriques',
        'dropdown' => [ // sous-rubriques
            'commandes'  => 'Les commandes',
            'restaurer'  => 'Restaurer',
            'branches'   => 'Les branches',
        ],
    ],
];

