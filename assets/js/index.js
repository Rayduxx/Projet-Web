

function scrollToElement() {
    // Utilise la méthode `scrollIntoView()` pour faire défiler la page vers l'élément
    form.scrollIntoView({ behavior: 'smooth' });
  }

  const bouton = document.querySelector('#monbouton');
bouton.addEventListener('click', scrollToElement);

// // formulaire
// form.addEventListener('submit', function(event) {
//   // Get the values of the checked boxes
//   var options = [];
//   var checkboxes = form.querySelectorAll('input[type=checkbox]:checked');
//   for (var i = 0; i < checkboxes.length; i++) {
//     options.push(checkboxes[i].value);
//     console.log(1);
//   }
//     // Add the values to a hidden field in the form
//     var hiddenField = document.createElement('input');
//     hiddenField.setAttribute('type', 'hidden');
//     hiddenField.setAttribute('name', 'options');
//     hiddenField.setAttribute('value', options.join(','));
//     form.appendChild(hiddenField);
//   });
const form = document.getElementById('question-form');
const questions = form.querySelectorAll('.question');
const nextBtn = document.getElementById('next-btn');
let currentQuestion = 0;

function showNextQuestion(e) {
  e.preventDefault();
  // Hide current question
  questions[currentQuestion].style.opacity = '0';
  questions[currentQuestion].style.visibility = 'hidden';
  
  // Show next question
  currentQuestion++;
  if (currentQuestion >= questions.length) {
    //If there are no more questions, submit form
    form.submit();
  } else {
    questions[currentQuestion].style.opacity = '1';
    questions[currentQuestion].style.visibility = 'visible';
  }
}

// Add event listener to Next button
nextBtn.addEventListener('click', showNextQuestion);