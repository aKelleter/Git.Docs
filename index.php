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
        <nav class="navbar navbar-expand-md navbar-blue shadow-sm mb-4 rounded-3">
        <div class="container">
                <ul class="nav nav-pills flex-wrap gap-2 justify-content-center">
                    <li class="nav-item"><a class="nav-link link-orange active" href="index.php">Sommaire</a></li>
                    <li class="nav-item"><a class="nav-link" href="commandes.php">Les commandes</a></li>   
                    <li class="nav-item"><a class="nav-link" href="branches.php">Les branches</a></li>
                </ul>
        </div>
        </nav>         
    </main>
    <footer class="text-center text-secondary py-4">
        Git.Docs - <a href="https://www.atlassian.com/fr/git/tutorials/using-branches">Atlassian (branches)</a>
    </footer>
    <!-- Bootstrap JS (optionnel si tu veux dropdown/nav, etc) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-X7tZnM+K4CAzDjQDZtYfAYJ5U2bVHRW4pSw6V4jkO5q9lo6PSb6bFo3mzF23F6X6" crossorigin="anonymous"></script>
    <script>    
        // Nav active dynamique
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function() {
            document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active', 'link-orange'));
            this.classList.add('active', 'link-orange');
            });
        });
    </script>
</body>
</html>
