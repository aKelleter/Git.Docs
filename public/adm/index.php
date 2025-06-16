<?php
declare(strict_types=1);    

use App\UI\Layout;

$pageTitle = 'Admin';
?>
<?= Layout::getHeader($pageTitle) ?>
<body>  
    <?= Layout::getSectionHeader(); ?>     
    <main class="container mb-5"> 
        <?= Layout::getNavigation(); ?>
        <div class="alert alert-success mt-5 shadow-sm">
            <h2 class="h4 text-center">Administration</h2>
            <hr>
            <p>
                <ul style="list-style-type:none;">
                    <li><a href="check" target="_blank">Configuration check </a></li>                    
                </ul>
            </p>
            <p class="text-center">
                <a href="<?=BASE_URL?>/git/index">Return to Git index</a>
            </p>
        </div>
        <?= Layout::getFooter() ?>
    </main>
    <?= Layout::getJSSection() ?>
</body>
</html>