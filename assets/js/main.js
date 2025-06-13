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
