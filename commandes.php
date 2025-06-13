<?php
    require_once 'conf.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>GIT : Commandes génériques</title>
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
        <h2 class="text-white">
            - Commandes génériques -
        </h2>       
    </header>   
    
    <main class="container mb-5">          
        <?php include'nav.php'; ?>        
        <nav class="navbar navbar-expand-md navbar-blue shadow-sm mt-4 mb-4 rounded-3">
            <div class="container">
                <ul class="nav nav-pills flex-wrap gap-2 justify-content-center">                  
                    <li class="nav-item"><a class="nav-link" href="#restore">Remettre les fichiers modifiés (non committés) dans leur état initial</a></li>
                </ul>
            </div>
        </nav>     

        <section id="restore" class="card card-blue mb-4">
            <div class="card-body">
            <h2 class="card-title text-blue-dark h6">1. Remettre les fichiers modifiés (non committés) dans leur état initial (celui du dernier commit) et ainsi annuler toutes tes modifications locales non enregistrées.</h2>
            <pre><code class="language-bash">git restore .

#Pour un fichier spécifique
git restore chemin/vers/fichier

#Pour revenir à une version propre sur la branche (et aussi enlever les fichiers non trackés) :
git restore .
git clean -fd

#Attention, git clean -fd supprime tout fichier/dossier non suivi par git, donc prudence !
            </code></pre>
            </div>
        </section>
        <?php include'sources.php' ?>
    </main>

    <footer class="text-center text-secondary py-4">
        Git.Docs - <?= APP_VER ?>
    </footer>
    <button id="btn-top" class="btn btn-primary rounded-circle shadow"
        style="position:fixed; bottom:2rem; left:calc(50% + 540px); display:none; z-index:1030;">
        ↑
    </button>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Highlight.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
    <script src="assets/js/main.js"></script>   
</body>
</html>
