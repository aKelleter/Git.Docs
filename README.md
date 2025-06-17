# Git.Docs

![Version](https://img.shields.io/badge/version-1.7.0-blue)

**Git.Docs** est une mini-application PHP qui synthétise les principales commandes Git utiles au quotidien, avec une interface claire, responsive et pédagogique.

---

## ✨ Fonctionnalités

- Interface responsive avec [Bootstrap 5.3](https://getbootstrap.com/)
- Pages modulaires (`home.php`, `branches.php`, etc.)
- Menu de navigation dynamique
- Composants réutilisables via une classe `Layout`
- Routage simple via une classe `Router`
- Coloration syntaxique auto avec [highlight.js](https://highlightjs.org/)
- Modules JavaScript en ES6 (`main.js`, `copy-button.js`, etc.)
- Boutons "copier" et retour haut de page
- Aucun framework requis, simple à déployer

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

## 🧩 Chargement automatique des classes

Les classes sont chargées automatiquement grâce à l’autoloader défini dans `autoload.php`.

L'autoloader est chargé dans le fichier 'public/pages/index.php'

Ce fichier `bootstrap.php` centralise :

- la définition de `ROOT_PATH`
- l’appel à l’autoloader
- tout ce qui devra être partagé globalement plus tard (ex: config, session, etc.)

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
