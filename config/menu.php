<?php
declare(strict_types=1);


/**
 * Menu principal avec support pour les sous-éléments (dropdown)
 * 
 * Chaque entrée est un tableau associatif avec :
 * - label : le texte affiché dans le menu
 * - auth : visibilité selon l'état de connexion
 *  - true → visible uniquement connecté
 *  - false → visible uniquement non connecté
 *  - null ou non défini → toujours visible
 * 
 * Exemple :
 * 'git/index' => ['label' => 'Sommaire', 'auth' => null]
 * 
 * Chaque entrée peut être un tableau pour les sous-éléments.
 * Exemple :
 * 'Les rubriques' => [
 *     'module/ressource1' => ['label' => 'Commandes Git', 'auth' => null],
 *     'module/ressource2' => ['label' => 'Restaurer', 'auth' => null],
 *     'module/ressource3' => ['label' => 'Les branches', 'auth' => null],
 * ]
 */
return [
    'git/index' => ['label' => 'Sommaire', 'auth' => null],                 // toujours visible
    'Les rubriques' => [
        'git/commandes' => ['label' => 'Commandes Git', 'auth' => null],
        'git/restaurer' => ['label' => 'Restaurer', 'auth' => null],
        'git/branches' => ['label' => 'Les branches', 'auth' => null],
    ],    
    'links/index' => ['label' => 'Liens', 'auth' => null],
    'adm/index' => ['label' => 'Interface admin', 'auth' => true],          // visible uniquement connecté
    'login/index' => ['label' => 'Login', 'auth' => false],                 // visible uniquement non connecté
];
