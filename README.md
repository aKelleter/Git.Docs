# Git.Docs

![Version](https://img.shields.io/badge/version-1.2.0-blue)
[→ Voir le dépôt GitHub](https://github.com/aKelleter/Git.Docs)

**Git.Docs** est une mini-application PHP qui synthétise les principales commandes Git utiles au quotidien, avec une interface claire, responsive et pédagogique.

---

## ✨ Fonctionnalités

- Interface responsive avec [Bootstrap 5.3](https://getbootstrap.com/)
- Pages modulaires (`home.php`, `branches.php`, etc.)
- Composants réutilisables via une classe `Layout`
- Routage simple via une classe `Router`
- Coloration syntaxique auto avec [highlight.js](https://highlightjs.org/)
- Modules JavaScript en ES6 (`main.js`, `copy-button.js`, etc.)
- Boutons "copier" et retour haut de page
- Aucun framework requis, simple à déployer

---

## 🗂️ Arborescence du projet

```
Git.Docs/
├── autoload.php
├── index.php              ← Redirige vers public/
├── includes/
│   └── conf.php           ← Constantes : APP_NAME, BASE_URL, etc.
├── public/
│   ├── index.php          ← Point d’entrée principal
│   ├── pages/
│   │   ├── home.php
│   │   ├── restaurer.php
│   │   └── ...
│   └── assets/
│       ├── css/
│       │   └── styles.css
│       └── js/
│           ├── main.js (module)
│           ├── navigation.js
│           ├── btn-top.js
│           ├── highlight.js
│           └── copy-button.js
├── src/
│   ├── UI/                ← Composants HTML
│   └── Router/            ← Routage
```

---

## 🚀 Démarrage local

```bash
git clone https://github.com/aKelleter/Git.Docs.git
cd Git.Docs
```

1. Placez le dossier dans `~/Sites/` (ou équivalent)
2. Accédez à [http://localhost:8080/git.docs/](http://localhost:8080/git.docs/)
3. Pas besoin de config Apache grâce à `index.php` à la racine

---

## 🧩 Modules JavaScript

Les scripts sont découpés en modules ES6 :

| Fichier              | Description                        |
|----------------------|------------------------------------|
| `main.js`            | Initialise tout                    |
| `navigation.js`      | Menu actif au clic                 |
| `btn-top.js`         | Bouton retour haut                 |
| `highlight.js`       | Highlight.js + `afficherCommandeBash()` |
| `copy-button.js`     | Boutons "copier"                   |

> Inclus automatiquement via :
```html
<script type="module" src="/assets/js/main.js"></script>
```

---

## 📜 Licence

Projet personnel à but pédagogique – librement réutilisable, modifiable et partageable.
