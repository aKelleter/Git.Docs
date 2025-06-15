# ✅ Git.Docs - Améliorations et Bonnes Pratiques

Ce document recense les améliorations techniques a apportées au projet **Git.Docs**, ainsi que des recommandations pour faire évoluer l'application et maintenir un code propre, modulaire et performant.

VERSION ACTUELLE
![Version](https://img.shields.io/badge/version-1.2.0-blue)

---

## ✅ 1. Organisation et propreté du code

### 🔹 Autoload maison plus intelligent
- Autoloader récursif pour charger automatiquement les classes dans `src/` (plus de `require_once` manuel).
- Regroupement des classes par domaine : `Router`, `UI`, `Helpers`, `Services`, etc.

### 🔹 Variables d’environnement (au lieu de `conf.php`)
- Chargement d’un fichier `.env` ou `.env.php` **non versionné** avec les constantes sensibles.

Exemple :
```php
define('APP_NAME', $_ENV['APP_NAME'] ?? 'Git.Docs');
```

---

## ✅ 2. Séparation logique HTML / PHP

### 🔹 Vues et mise en page
- Utilisation d’un dossier `views/` avec des templates simples.
- Exemple d’appel :  
```php
Layout::render('restaurer', ['pageTitle' => '...']);
```
→ Charge le fichier `views/restaurer.php`.

---

## ✅ 3. Gestion centralisée des erreurs

### 🔹 Custom error handler
- Log des erreurs dans un fichier `logs/` :
```php
set_error_handler('App\Core\ErrorHandler::handle');
```

### 🔹 Pages 404 / 500 personnalisées
- Routing vers des pages d’erreur dédiées avec messages clairs.

---

## ✅ 4. Sécurité

### 🔹 Validation manuelle des entrées
- Fonction centralisée : `sanitizeInput()` dans `Security.php`.

### 🔹 Protection XSS / CSRF
- Préparation d’un **token CSRF global** si des formulaires sont ajoutés.

---

## ✅ 5. Optimisations frontend

### 🔹 Lazy loading JS
- Chargement uniquement des modules nécessaires par page.

### 🔹 Préchargement des ressources critiques
```html
<link rel="preload" href="styles.css" as="style">
```

### 🔹 Design system léger
- Classes CSS réutilisables : `.btn-orange`, `.callout-info`, etc.

---

## ✅ 6. Interactions utilisateur

### 🔹 Système d’alerte utilisateur
```php
Layout::flash('Message enregistré !');
```
→ Affiche un **toast** ou un bloc Bootstrap temporaire.

### 🔹 Historique de navigation
- Breadcrumb simple ou page « récemment visitée ».

---

## ✅ 7. Navigation dynamique

### 🔹 Menu généré automatiquement
```php
$routes = [
  'home' => 'Sommaire',
  'branches' => 'Branches',
  'restaurer' => 'Restaurer',
];
```
→ Facile à maintenir, évite le HTML statique.

---

## ✅ 8. Tests & outils développeur

### 🔹 Mode DEBUG
- Affichage conditionnel des erreurs :
```php
if (DEBUG) { ... }
```

### 🔹 Fichier `dev.php`
- Permet de :
  - Tester du code PHP.
  - Afficher les constantes/env/routes.

---

## ✅ 9. Accessibilité & SEO

- Titres `<h1>`, `<h2>`, `label`, contraste conforme.
- Balises : `lang="fr"`, `meta`, `favicon`, etc.

---

## ✅ 10. Internationalisation simple (i18n)

### 🔹 Multi-langue léger
- Fichiers : `lang/fr.php`, `lang/en.php`, ...
- Fonction d’aide :
```php
t('header.title'); // → $lang['header']['title']
```

---

## 🧭 En résumé

| Thème                    | Gain                     | Complexité     |
|--------------------------|--------------------------|----------------|
| Autoload récursif        | Propreté, extensibilité  | 🟠 Moyenne     |
| Templates `.php`         | Séparation logique       | 🟢 Facile      |
| Routing + erreurs        | Fiabilité, debug         | 🟢 Facile      |
| JS modulaire dynamique   | Performances frontend    | 🟠 Moyenne     |
| i18n simple              | Accessibilité            | 🟠 Moyenne     |
| Menu dynamique           | Facilité de maintenance  | 🟢 Facile      |

---

**💡 Projet léger, clair, évolutif. Sans dépendance ni framework.**