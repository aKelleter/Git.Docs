<?php
declare(strict_types=1);    

use App\UI\Layout;
use App\Demo\Demo;

$pageTitle = 'Demo';
?>
<?= Layout::getHeader($pageTitle) ?>
<body>
    <?= Layout::getSectionHeader(); ?>       
    <main class="container mb-5"> 
        <?= Layout::getNavigation(); ?>
        <div class="main-div mt-5 p-2 bordered shadow-sm text-muted">
        <h2 class="text-center">Découvrir Git</h2>
        <hr>
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