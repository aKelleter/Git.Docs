# Git.Docs — Documentation Git simplifiée

> Un petit projet PHP conçu pour apprendre à organiser proprement une application web, sans framework.

---

## 📁 Structure du projet

```
Git.Docs/
├── index.php               ← Redirige vers `public/index.php` (aucune config Apache nécessaire)
├── autoload.php            ← Charge la configuration et les composants UI
├── config/
│   └── conf.php            ← Constantes globales de l'application (nom, version, etc.)
├── public/
│   ├── index.php           ← Point d'entrée principal de l'application
│   ├── commandes.php       ← Pages de contenu
│   ├── ...                 ← (autres pages comme `branches.php`, etc.)
├── src/
│   └── UI/
│       └── Layout.php      ← Composants HTML (header/footer) regroupés en classe statique
├── assets/
│   ├── css/
│   │   └── styles.css      ← Feuilles de styles personnalisées
│   └── js/
│       └── main.js         ← Fichiers JavaScript (si besoin)
```

---

## 🧩 Comment ça fonctionne ?

- Ouvre ton navigateur sur [`http://localhost/Git.Docs`](http://localhost/Git.Docs)
- Le fichier `index.php` à la racine redirige **en toute transparence** vers `public/index.php`
- Le code PHP charge :
  - La configuration (`config/conf.php`)
  - Les composants d’interface (`src/UI/Layout.php`)
- Le rendu HTML utilise la classe `Layout::getHeader()` et `Layout::getFooter()` pour structurer les pages

---

## 🎓 Objectif pédagogique

Ce projet montre :
- Comment organiser un projet PHP de manière **propre et modulaire**
- Comment séparer :
  - le code source (`src/`)
  - la configuration (`config/`)
  - les fichiers accessibles par le navigateur (`public/`)
- Comment structurer des composants HTML réutilisables dans une **classe statique**
- Comment charger le tout avec un simple fichier `autoload.php` sans Composer

---

## 🚀 Et après ?

Une fois à l’aise avec cette base, on pourra :
- Ajouter Composer pour autoload automatique
- Créer un petit système de routage (`?page=...`)
- Ajouter un moteur de templates (facultatif)
- Se connecter à une base de données
- Gérer des formulaires

---

## 📄 Licence

Ce projet est libre d’usage à des fins pédagogiques, d’apprentissage ou d’évolution personnelle.  
Feel free to fork! ✌️
