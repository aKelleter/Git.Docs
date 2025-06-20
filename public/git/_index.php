<?php
    declare(strict_types=1);    
    
    use App\UI\Layout;
    $pageTitle = 'Git.Docs';
?>
<?= Layout::getHeader($pageTitle) ?>
<body>    
    <?= Layout::getSectionHeader(); ?>
    <main class="container mb-5"> 
    <?= Layout::getNavigation(); ?>

    <div class="main-div mt-5 p-2 bordered shadow-sm text-muted">
        <h2 class="h4 text-center">Bienvenue sur Git.Docs</h2>
        <hr>
        <p class="text-justify">
            Ce site a pour objectif de rassembler et de présenter, de façon claire et synthétique, les principales commandes Git utiles au quotidien.              
            Que vous soyez débutant ou utilisateur confirmé, vous trouverez ici des rappels rapides pour manipuler les branches, gérer vos commits, ou retrouver les commandes essentielles à l’aide de quelques clics.
        </p>
        <p class="mb-0 text-center">
            N’hésitez pas à explorer le menu pour accéder aux différentes rubriques. </p>
        <p class="text-center mt-3"> Bonne navigation&nbsp;!</p>
        
    </div>
    <?= Layout::getFooter() ?>
    </main>
    <?= Layout::getJSSection() ?>
</body>
</html>
