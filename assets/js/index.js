const element = document.querySelector('#monelement');

function scrollToElement() {
    // Utilise la méthode `scrollIntoView()` pour faire défiler la page vers l'élément
    element.scrollIntoView({ behavior: 'smooth' });
  }

  const bouton = document.querySelector('#monbouton');
bouton.addEventListener('click', scrollToElement);