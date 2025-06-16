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

    <div class="alert alert-info mt-4 shadow-sm">
        <h2 class="h4 text-center">Bienvenue sur Git.Docs</h2>
        <hr>
        <p class="text-justify">
            Ce site a pour objectif de rassembler et de présenter, de façon claire et synthétique, les principales commandes Git utiles au quotidien.              
            Que vous soyez débutant ou utilisateur confirmé, vous trouverez ici des rappels rapides pour manipuler les branches, gérer vos commits, ou retrouver les commandes essentielles à l’aide de quelques clics.
        </p>
        <p class="mb-0 text-center">
            N’hésitez pas à explorer le menu pour accéder aux différentes rubriques. <br> Bonne navigation&nbsp;!
        </p>
    </div>

    <div class="alert alert-secondary shadow-sm">
        <h6>Découvrir Git</h6>
        <ul style="list-style: none; padding-left: 0;">
            <li><a href="https://git-scm.com/docs/git/fr">Git-scm.com (français)</a></li>
            <li><a target="_blank" href="https://www.atlassian.com/fr/git/glossary#commands">Atlassian (commandes)</a> </li>
            <li><a target="_blank" href="https://www.atlassian.com/fr/git/tutorials/using-branches">Atlassian (branches)</a></li>
        </ul>
    </div>
    <?= Layout::getFooter() ?>
    </main>
    <?= Layout::getJSSection() ?>
</body>
</html>
