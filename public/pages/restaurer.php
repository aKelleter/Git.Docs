<?php
    declare(strict_types=1);    
    require_once __DIR__ . '/../../autoload.php';
    use App\UI\Layout;
    $pageTitle = 'Git.Docs - Restauration';
?>
<?= Layout::getHeader('../../', $pageTitle) ?>
<body class="bg-blue-light">
    <?= Layout::getSectionHeader('./', 'Restauration'); ?>      
    <main class="container mb-5">          
        <?= Layout::getNavigation(); ?>        
        <nav class="navbar navbar-expand-md navbar-blue shadow-sm mt-4 mb-4 rounded-3">
            <div class="container">
                <ul class="nav nav-pills flex-wrap gap-2 justify-content-center">                  
                    <li class="nav-item"><a class="nav-link" href="#restore">Remettre les fichiers modifiés (non committés) dans leur état initial</a></li>
                </ul>
            </div>
        </nav>     

        <section id="restore" class="card card-blue mb-4 shadow-sm">
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
        <?= Layout::getRessources('restore'); ?>
        <?= Layout::getFooter(); ?>
    </main>
    <button id="btn-top" class="btn btn-primary rounded-circle shadow"
        style="position:fixed; bottom:2rem; left:calc(50% + 540px); display:none; z-index:1030;">
        ↑
    </button>
    <?= Layout::getJSSection() ?>
</body>
</html>

