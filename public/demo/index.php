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
        <div class="alert alert-success mt-5 shadow-sm">
            <h2 class="h4 text-center">Page de démonstration</h2>
            <hr>
            <p class="text-center">
            <?= Demo::hello() ?> <br>
            <a href="<?=BASE_URL?>/git/index">Return to Git index</a>
            </p>
        </div>
        <?= Layout::getFooter() ?>
    </main>
    <?= Layout::getJSSection() ?>
</body>
</html>