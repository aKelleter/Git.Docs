<?php
/**
 * Fichier de configuration du menu
 * Structure : clé = URL relative, valeur = libellé ou tableau de sous-liens
 */

return [
    'home' => 'Sommaire',
    'Les rubriques' => [
        'backend/index' => 'Interface admin',
        'backend/users' => 'Utilisateurs',
        'module_a/index' => 'Module A - Accueil',
        'module_a/login' => 'Module A - Connexion',
        'commandes' => 'Commandes Git',
        'restaurer' => 'Restaurer',
        'branches' => 'Les branches'
    ]
];
