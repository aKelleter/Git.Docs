<?php
    declare(strict_types=1);    
    require_once __DIR__ . '/../../autoload.php';
    use App\UI\Layout;
    $pageTitle = 'Git.Docs - Commandes génériques';
?>
<?= Layout::getHeader('../../', $pageTitle) ?>
<body class="bg-blue-light">
    <?= Layout::getSectionHeader('./', 'Commandes génériques'); ?>    
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
        <?= Layout::getRessources('commandes'); ?>
        <?= Layout::getFooter(); ?>
    </main>    
    <button id="btn-top" class="btn btn-primary rounded-circle shadow"
        style="position:fixed; bottom:2rem; left:calc(50% + 540px); display:none; z-index:1030;">
        ↑
    </button>
    <?= Layout::getJSSection() ?>
</body>
</html>
