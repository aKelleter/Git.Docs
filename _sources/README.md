# Git.Docs

**Git.Docs** est une mini application PHP qui synthétise les principales commandes Git utiles au quotidien, avec une interface simple, responsive et pédagogique.

---

## ✨ Fonctionnalités

- Interface Bootstrap 5.3 claire et mobile-friendly
- Pages modulaires (`home.php`, `branches.php`, etc.)
- Header, footer, navigation réutilisables (classe `Layout`)
- Coloration syntaxique automatique (highlight.js)
- Bouton "copier" sur les blocs de code
- Navigation fluide avec retour en haut de page
- Routage propre basé sur les URLs (`/git.docs/restaurer.php`, etc.)
- Modularisation JavaScript avec **ES6 Modules**

---

## 🗂️ Structure du projet

```
Git.Docs/
├── autoload.php
├── index.php              ← Point d’entrée pour les débutants (redirige vers public/)
├── public/
│   ├── index.php          ← Point d’entrée principal
│   ├── pages/             ← Contient toutes les pages de contenu
│   │   ├── home.php
│   │   ├── restaurer.php
│   │   └── ...
│   └── assets/
│       ├── css/
│       │   └── styles.css
│       └── js/
│           ├── main.js            ← Module principal
│           ├── navigation.js      ← Activation du menu
│           ├── btn-top.js         ← Bouton retour haut
│           ├── highlight.js       ← Coloration et fonction bash
│           └── copy-button.js     ← Boutons "copier"
├── src/
│   ├── UI/                ← Classe Layout (génération des blocs HTML)
│   └── Router/            ← Classe Router (routage interne)
└── includes/
    └── conf.php           ← Constantes globales : APP_NAME, BASE_URL, etc.
```

---

## 🔧 Installation

1. Placez le dossier `Git.Docs/` dans votre répertoire `Sites/` ou équivalent
2. Configurez Apache pour pointer vers `Git.Docs/public/`, ou laissez `index.php` le faire pour vous
3. Ouvrez `http://localhost:8080/git.docs/` dans votre navigateur

---

## 💡 Astuce pour les débutants

Le fichier `index.php` à la racine permet de lancer l'app **sans modifier votre configuration Apache**. Il redirige automatiquement vers `public/`.

---

## 📜 Licence

Projet personnel à visée pédagogique – librement réutilisable, modifiable et améliorable ✌️
