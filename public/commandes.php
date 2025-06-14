<?php
    declare(strict_types=1);    
    require_once __DIR__ . '/../autoload.php';  
    use App\UI\Layout;
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
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/styles.css">
</head>
<body class="bg-blue-light">
    <?= Layout::getHeader('./', 'Commandes génériques'); ?>    
    <main class="container mb-5">          
        <?= Layout::getNavigation(); ?>       
        <nav class="navbar navbar-expand-md navbar-blue shadow-sm mt-4 mb-4 rounded-3">
            <div class="container">
                <ul class="nav nav-pills flex-wrap gap-2 justify-content-center">                  
                     <li class="nav-item"><a class="nav-link" href="#">... </a></li>
                </ul>
            </div>
        </nav>     

        <section id="restore" class="card card-blue mb-4 shadow-sm">
            <div class="card-body">
            <h2 class="card-title text-blue-dark h6">1. ...</h2>
            <pre><code class="language-bash">
            </code></pre>
            </div>
        </section>
        <?php include'sources.php' ?>
        <?= Layout::getFooter(); ?>
    </main>
    
    <button id="btn-top" class="btn btn-primary rounded-circle shadow"
        style="position:fixed; bottom:2rem; left:calc(50% + 540px); display:none; z-index:1030;">
        ↑
    </button>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Highlight.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
    <script src="<?= BASE_URL ?>/assets/js/main.js"></script>   
</body>
</html>
