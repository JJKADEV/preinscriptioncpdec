const boutonPrecedent = document.getElementById('bouton-precedent');
const boutonSuivant = document.getElementById('bouton-suivant');
const premierePartie = document.getElementById('formulaireab');
const deuxiemePartie = document.getElementById('deuxieme-partie');

// Ajoutez des écouteurs d'événements aux boutons
boutonSuivant.addEventListener('click', (event) => {
  event.preventDefault(); // Empêcher la soumission du formulaire
  premierePartie.style.display = 'none';
  deuxiemePartie.style.display = 'block';
});

boutonPrecedent.addEventListener('click', (event) => {
  event.preventDefault(); // Empêcher la soumission du formulaire
  premierePartie.style.display = 'block';
  deuxiemePartie.style.display = 'none';
});