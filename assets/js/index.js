const element = document.querySelector('#monelement');
var form = document.querySelector('form');

function scrollToElement() {
    // Utilise la méthode `scrollIntoView()` pour faire défiler la page vers l'élément
    element.scrollIntoView({ behavior: 'smooth' });
  }

  const bouton = document.querySelector('#monbouton');
bouton.addEventListener('click', scrollToElement);

// formulaire
form.addEventListener('submit', function(event) {
  // Get the values of the checked boxes
  var options = [];
  var checkboxes = form.querySelectorAll('input[type=checkbox]:checked');
  for (var i = 0; i < checkboxes.length; i++) {
    options.push(checkboxes[i].value);
    console.log(1);
  }
    // Add the values to a hidden field in the form
    var hiddenField = document.createElement('input');
    hiddenField.setAttribute('type', 'hidden');
    hiddenField.setAttribute('name', 'options');
    hiddenField.setAttribute('value', options.join(','));
    form.appendChild(hiddenField);
  });