# ✅ Git.Docs - Améliorations et Bonnes Pratiques

Ce document recense les améliorations techniques a apportées au projet **Git.Docs**, ainsi que des recommandations pour faire évoluer l'application et maintenir un code propre, modulaire et performant.

VERSION ACTUELLE
![Version](https://img.shields.io/badge/version-1.8.0-blue)

---

## ✅ 4. Sécurité

### 🔹 Validation manuelle des entrées
- Fonction centralisée : `sanitizeInput()` dans `Security.php`.

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
### 🔹 [FAIT] Menu généré automatiquement
---

## ✅ 8. Tests & outils développeur

### 🔹 Mode DEBUG
- Affichage conditionnel des erreurs :
```php
if (DEBUG) { ... }
```

---

## ✅ 9. Accessibilité & SEO

- Titres `<h1>`, `<h2>`, `label`, contraste conforme.
- Balises : `lang="fr"`, `meta`, `favicon`, etc.

---

## ✅ 10. [FAIT] Internationalisation simple (i18n)

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
