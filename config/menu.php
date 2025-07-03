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
    'git/index' => ['label' => T_('Accueil'), 'auth' => null],                 // toujours visible
    T_('Les rubriques') => [
        'git/cloner-ajouter' => ['label' => T_('1. Cloner - Ajouter un dépôt'), 'auth' => null],
        'git/ajouter-supprimer' => ['label' => T_('2. Ajouter - Supprimer - Renommer'), 'auth' => null],
        'git/commiter-syncroniser' => ['label' => T_('3. Commiter et syncroniser '), 'auth' => null],
        'git/annuler-actions' => ['label' => T_('4. Annuler des actions '), 'auth' => null],

        
        'git/branches' => ['label' => T_('5. Les branches'), 'auth' => null],
        'git/restaurer' => ['label' => T_('6. Restaurer'), 'auth' => null],    
    ],
    'links/index' => ['label' => T_('Liens'), 'auth' => null],
    'adm/index' => ['label' => T_('Administration'), 'auth' => true],          // visible uniquement connecté
    'login/index' => ['label' => T_('Identification'), 'auth' => false],                 // visible uniquement non connecté
];
