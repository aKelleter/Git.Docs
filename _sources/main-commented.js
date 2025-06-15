// main.js robuste et commenté
document.addEventListener("DOMContentLoaded", function () {
  console.log("main.js chargé et DOM prêt");

  // Fonction utilitaire pour afficher une commande bash dans un bloc ciblé
  function afficherCommandeBash(commande, elementCible) {
    const safeCommande = commande
      .replace(/&/g, "&amp;")
      .replace(/</g, "&lt;")
      .replace(/>/g, "&gt;");

    const html = `<pre><code class="language-bash">${safeCommande}</code></pre>`;

    const cible = document.querySelector(elementCible);
    if (cible) {
      cible.innerHTML = html;

      if (window.hljs) {
        const codeEl = cible.querySelector("code");
        if (codeEl) {
          codeEl.classList.add('language-bash');
          hljs.highlightElement(codeEl);
        }
      }
    }
  }

  // Active un lien du menu au clic
  const navLinks = document.querySelectorAll('.nav-link');
  if (navLinks.length > 0) {
    navLinks.forEach(link => {
      link.addEventListener('click', function () {
        navLinks.forEach(l => l.classList.remove('active', 'link-orange'));
        this.classList.add('active', 'link-orange');
      });
    });
  }

  // Affiche/Masque le bouton "haut de page" selon le scroll
  const btnTop = document.getElementById('btn-top');
  if (btnTop) {
    window.addEventListener('scroll', function () {
      btnTop.style.display = window.scrollY > 200 ? 'block' : 'none';
    });

    btnTop.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // Coloration syntaxique avec highlight.js
  if (window.hljs) {
    hljs.highlightAll();
  }

  // Ajout des boutons "Copier" sur chaque bloc <pre><code> si le navigateur supporte Clipboard API
  if (navigator.clipboard) {
    document.querySelectorAll('pre > code').forEach((codeBlock, i) => {
      const btn = document.createElement('button');
      btn.className = "btn btn-outline-secondary btn-sm btn-copy position-absolute";
      btn.innerHTML = "Copier";
      btn.style.top = "8px";
      btn.style.right = "8px";
      btn.style.zIndex = "10";
      btn.type = "button";

      const pre = codeBlock.parentElement;
      pre.style.position = "relative";
      pre.appendChild(btn);

      btn.addEventListener('click', () => {
        navigator.clipboard.writeText(codeBlock.innerText);
        btn.innerHTML = "✔ Copié !";
        setTimeout(() => btn.innerHTML = "Copier", 1500);
      });
    });
  }
});
