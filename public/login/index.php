<?php
declare(strict_types=1);

use App\Auth\Auth;
use App\UI\Layout;

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!Auth::login($_POST['username'], $_POST['password'])) {
        $error = 'Nom d’utilisateur ou mot de passe invalide.';
    } else {
        header('Location: ' . BASE_URL . '/adm/index');
        exit;
    }
}
?>
<?= Layout::getHeader() ?>
<body>
    <?= Layout::getSectionHeader(); ?>
    <main class="container mb-5"> 
        <?= Layout::getNavigation(); ?>       
        <?php if ($error): ?>
            <div class="alert alert-danger text-center"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <div class="main-div mt-5 p-2 bordered shadow-sm text-muted">
            <h3 class="text-center">Veuillez vous identifier</h3>
            <hr>        
            <form method="post">
                <div class="mb-3">
                    <label for="username">Nom d’utilisateur</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button class="btn btn-primary">Se connecter</button>
            </form>
        </div>
    <?= Layout::getFooter() ?>
    </main>
    <?= Layout::getJSSection() ?>
</body>
</html>
