function afficherCommandeBash(commande, elementCible) {
  // Sécurité : on échappe les caractères spéciaux
  const safeCommande = commande
    .replace(/&/g, "&amp;")
    .replace(/</g, "&lt;")
    .replace(/>/g, "&gt;");

  // Génère le bloc HTML
  const html = `<pre><code class="language-bash">${safeCommande}</code></pre>`;

  // Affiche dans l’élément cible (par ex. un div avec id="sortie")
  document.querySelector(elementCible).innerHTML = html;

  // Si highlight.js est présent, coloration immédiate :
  if (window.hljs) {
    document.querySelector(elementCible + " code").classList.add('language-bash');
    hljs.highlightElement(document.querySelector(elementCible + " code"));
  }
}

// Nav active dynamique
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function() {
    document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active', 'link-orange'));
    this.classList.add('active', 'link-orange');
    });
});

// Affiche le bouton quand on scroll plus bas que 200px
window.addEventListener('scroll', function() {
  const btn = document.getElementById('btn-top');
  if (window.scrollY > 200) {
    btn.style.display = 'block';
  } else {
    btn.style.display = 'none';
  }
});

// Remonte en haut de la page en douceur
document.getElementById('btn-top').addEventListener('click', function() {
  window.scrollTo({top: 0, behavior: 'smooth'});
});

// Chargement de Highlight.JS
hljs.highlightAll();


// Ajoute un bouton copier à chaque bloc <pre><code>
document.querySelectorAll('pre > code').forEach((codeBlock, i) => {
  // Crée le bouton
  const btn = document.createElement('button');
  btn.className = "btn btn-outline-secondary btn-sm btn-copy position-absolute";
  btn.innerHTML = "Copier";
  btn.style.top = "8px";
  btn.style.right = "8px";
  btn.style.zIndex = "10";
  btn.type = "button";

  // Positionne le <pre> en relatif pour placer le bouton
  const pre = codeBlock.parentElement;
  pre.style.position = "relative";
  pre.appendChild(btn);

  // Action du bouton
  btn.addEventListener('click', () => {
    // Copie le contenu brut du code
    navigator.clipboard.writeText(codeBlock.innerText);
    btn.innerHTML = "✔ Copié !";
    setTimeout(() => btn.innerHTML = "Copier", 1500);
  });
});

