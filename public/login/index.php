<?php
declare(strict_types=1);

use App\Auth\Auth;
use App\UI\Layout;

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!Auth::login($_POST['username'], $_POST['password'])) {
        $error = 'Nom d’utilisateur ou mot de passe invalide.';
    } else {
        header('Location: ' . BASE_URL . '/git/commandes');
        exit;
    }
}
?>
<?= Layout::getHeader() ?>
<body>
    <?= Layout::getSectionHeader(); ?>
    <main class="container mb-5"> 
        <?= Layout::getNavigation(); ?>
        <h2>Connexion</h2>
        <?php if ($error): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
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
    <?= Layout::getFooter() ?>
    </main>
    <?= Layout::getJSSection() ?>
</body>
</html>
