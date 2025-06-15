<?php
declare(strict_types=1);    

use App\UI\Layout;
use App\Test\Demo;

$pageTitle = 'Test';
?>
<?= Layout::getHeader($pageTitle) ?>
<body>       
    <main class="container mb-5"> 
     <div class="alert alert-success mt-5 shadow-sm">
        <h2 class="h4 text-center">Message</h2>
        <hr>
        <p class="text-center">
           <?= Demo::hello() ?> <br>
           <a href="home">Return to Home</a>

        </p>
    </div>
</body>
</html>