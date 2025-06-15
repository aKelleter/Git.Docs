<?php
    declare(strict_types=1);    
    require_once __DIR__ . '/../../autoload.php';
    use App\UI\Layout;
    $pageTitle = 'Git.Docs - Les branches';
?>
<?= Layout::getHeader('../../', $pageTitle) ?>
<body class="bg-blue-light">
    <?= Layout::getSectionHeader('./', 'Travailler avec les branche'); ?>  
    <main class="container mb-5">  
        <?= Layout::getNavigation(); ?>
        <nav class="navbar navbar-expand-md navbar-blue shadow-sm mt-4 mb-4 rounded-3  shadow-sm">
            <div class="container nav-scroll">
                <ul class="nav nav-pills flex-wrap gap-1 justify-content-center">
                <li class="nav-item"><a class="nav-link link-orange active" href="#lister-local">Lister local</a></li>
                <li class="nav-item"><a class="nav-link" href="#lister-all">Lister local &amp; distant</a></li>
                <li class="nav-item"><a class="nav-link" href="#creer">Créer une branche</a></li>
                <li class="nav-item"><a class="nav-link" href="#creer-bascule">Créer &amp; basculer</a></li>
                <li class="nav-item"><a class="nav-link" href="#changer">Changer de branche</a></li>
                <li class="nav-item"><a class="nav-link" href="#push">Pousser une branche</a></li>
                <li class="nav-item"><a class="nav-link" href="#fusion">Fusionner</a></li>
                <li class="nav-item"><a class="nav-link" href="#supprimer-local">Supprimer locale</a></li>
                <li class="nav-item"><a class="nav-link" href="#supprimer-distant">Supprimer distante</a></li>
                <li class="nav-item"><a class="nav-link" href="#log">Commits (ligne)</a></li>
                <li class="nav-item"><a class="nav-link" href="#reset-1">Annuler dernier commit</a></li>
                <li class="nav-item"><a class="nav-link" href="#reset-n">Annuler N commits</a></li>
                <li class="nav-item"><a class="nav-link" href="#recup-dist">Récupérer branche distante</a></li>                    
                </ul>
            </div>
        </nav>


        <section id="lister-local" class="card card-blue mb-4 shadow-sm">
            <div class="card-body">
                <h2 class="card-title text-blue-dark h6">1. Lister les branches du dépôt local</h2>
                <pre><code class="language-bash">git branch</code></pre>
            </div>
        </section>

        <section id="lister-all" class="card card-blue mb-4 shadow-sm">
            <div class="card-body">
                <h2 class="card-title text-blue-dark h6">2. Lister les branches du dépôt local et distant</h2>
                <pre><code class="language-bash">git branch -a</code></pre>
            </div>
        </section>

        <section id="creer" class="card card-blue mb-4 shadow-sm">
            <div class="card-body">
                <h2 class="card-title text-blue-dark h6">3. Créer une branche</h2>
                <pre><code class="language-bash">git branch [nom_de_la_nouvelle_branche]
# exemple : git branch colors
                </code></pre>
            </div>
        </section>

        <section id="creer-bascule" class="card card-blue mb-4 shadow-sm">
            <div class="card-body">
                <h2 class="card-title text-blue-dark h6">4. Créer une branche et basculer dessus directement</h2>
                <pre><code class="language-bash">git checkout -b [nom_de_la_nouvelle_branche]
# exemple :  git checkout -b colors
                </code></pre>
            </div>
        </section>

        <section id="changer" class="card card-blue mb-4 shadow-sm">
            <div class="card-body">
            <h2 class="card-title text-blue-dark h6">5. Changer de branche</h2>
            <pre><code class="language-bash">
git checkout [nom_de_la_branche]
# exemple : git checkout colors
# OU (depuis Git 2.23)
git switch [nom_de_la_branche]
# exemple : git switch colors
            </code></pre>
            </div>
        </section>

        <section id="push" class="card card-blue mb-4 shadow-sm">
            <div class="card-body">
            <h2 class="card-title text-blue-dark h6">6. Pousser une branche locale sur un dépôt distant</h2>
            <pre><code class="language-bash">git push -u [dépôt_distant] [nom_de_la_branche]</code></pre>
            </div>
        </section>

        <section id="fusion" class="card card-blue mb-4 shadow-sm">
            <div class="card-body">
            <h2 class="card-title text-blue-dark h6">7. Fusionner sa branche locale sur la branche principale (main/master)</h2>
            <pre><code class="language-bash"># On se place d'abord sur la branche principale
git switch main/master

# On fusionne la branche avec la branche principale
git merge [nom_de_la_branche_a_fusionner]
# exemple : git merge colors
            </code></pre>
            </div>
        </section>

        <section id="supprimer-local" class="card card-blue mb-4 shadow-sm">
            <div class="card-body">
            <h2 class="card-title text-blue-dark h6">8. Supprimer une branche locale</h2>
            <pre><code class="language-bash"># Il faut au préalable se placer sur la branche principale (main) :  
git switch main
git branch -d [nom_de_la_branche]
# exemple :  git branch -d colors
            </code></pre>
            </div>
        </section>

        <section id="supprimer-distant" class="card card-blue mb-4">
            <div class="card-body">
            <h2 class="card-title text-blue-dark h6">9. Supprimer une branche distante</h2>
            <pre><code class="language-bash">git push [nom_du_dépôt_distant(souvent origin)] -d [nom_de_la_branche]
# exemple : git push origin -d colors

# autre commande
git push origin --delete [nom_de_la_branche]
# exemple : git push origin --delete colors
            </code></pre>
            </div>
        </section>

        <section id="log" class="card card-blue mb-4 shadow-sm">
            <div class="card-body">
            <h2 class="card-title text-blue-dark h6">10. Lister les commits sur une seule ligne</h2>
            <pre><code class="language-bash">git log --oneline --graph

#EXEMPLE :
* 8e0c4e8 (HEAD -> master, origin/regime_alimentaire) CREATE: creation du fieldset regime alimentaire dans la fiche detenu.
* 5011371 Test_color 2 Nav_bar
* 63ae139 Test_color Nav_bar
* 77401a5 (origin/master, origin/HEAD) Minor update on detenu-functions.php
* 4e61bbe DEBUG: (fiche detenu et page des sorties definitives) Empecher le changement de classement et la sortie définitive d'un détenu qui possède une cellule réservée (en cellule temporaire)
* 355e2cd LAUNCH DEV 1.0.8 WITH PROD 1.0.8 : 10 OCT 2023
* 6603cc9 initial commit
            </code></pre>
            </div>
        </section>

        <section id="reset-1" class="card card-blue mb-4 shadow-sm">
            <div class="card-body">
            <h2 class="card-title text-blue-dark h6">11. Revenir un commit en arrière, annuler le commit le plus récent</h2>
            <pre><code class="language-bash">git reset --hard HEAD^

#Exemple :
HEAD is now at 5011371 Test_color 2 Nav_bar
            </code></pre>
            </div>
        </section>

        <section id="reset-n" class="card card-blue mb-4 shadow-sm">
            <div class="card-body">
            <h2 class="card-title text-blue-dark h6">12. Revenir de 2 à n commits en arrière avec le tilde ~</h2>
            <pre><code class="language-bash">git reset --hard HEAD~2

#Exemple :
HEAD is now at 77401a5 Minor update on detenu-functions.php
            </code></pre>
            </div>
        </section>

        <section id="recup-dist" class="card card-blue mb-4 shadow-sm">
            <div class="card-body">
            <h2 class="card-title text-blue-dark h6">13. Récupérer une branche distante dans le dépôt local</h2>
            <pre><code class="language-bash">git fetch [nom_du_dépôt_distant] [nom_de_la_branche_distante]:[nom_de_la_branche_locale]

# Se positionner ensuite sur la branche fraîchement récupérée 
# avec la commande checkout ou switch
git checkout [nom_de_la_branche_locale]
            </code></pre>
            </div>
        </section>
        <?= Layout::getRessources('branches'); ?>
        <?= Layout::getFooter(); ?>
    </main>
    <button id="btn-top" class="btn btn-primary rounded-circle shadow"
        style="position:fixed; bottom:2rem; left:calc(50% + 540px); display:none; z-index:1030;">
        ↑
    </button>
    <?= Layout::getJSSection() ?>
</body>
</html>
