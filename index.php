<?php
    require_once 'conf.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>GIT.Docs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Highlight.js -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/github-dark.min.css">
  <!-- Custom palette -->
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body class="bg-blue-light">    
    <header class="py-5 mb-4 text-center header-custom">
        <h1 class="display-5 fw-bold mb-0 text-white">
            Git : Docs
        </h1>
    </header>
    <main class="container mb-5"> 
    <?php include'nav.php'; ?>

    <div class="alert alert-info mt-4">
        <h2 class="h4 text-center">Bienvenue sur Git Docs</h2>
        <hr>
        <p class="text-justify">
            Ce site a pour objectif de rassembler et de présenter, de façon claire et synthétique, les principales commandes Git utiles au quotidien.              
            Que vous soyez débutant ou utilisateur confirmé, vous trouverez ici des rappels rapides pour manipuler les branches, gérer vos commits, ou retrouver les commandes essentielles à l’aide de quelques clics.
        </p>
        <p class="mb-0 text-center">
            N’hésitez pas à explorer le menu pour accéder aux différentes rubriques. Bonne navigation&nbsp;!
        </p>
    </div>

    <div class="alert alert-secondary">
        <h6>Découvrir Git avec Atlassian</h6>
        <ul style="list-style: none; padding-left: 0;">
            <li><a target="_blank" href="https://www.atlassian.com/fr/git/glossary#commands">Atlassian (commandes)</a> </li>
            <li><a target="_blank" href="https://www.atlassian.com/fr/git/tutorials/using-branches">Atlassian (branches)</a></li>
        </ul>
    </div>

    </main>
    <footer class="text-center text-secondary py-4">
        Git.Docs - <?= APP_VER ?>
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Highlight.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
    <script src="assets/js/main.js"></script>   
</body>
</html>
