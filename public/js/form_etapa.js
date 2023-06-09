var currentQuestion = 0;
var questions = document.getElementsByClassName('question');
var previousButton = document.getElementById('previousButton');
var nextButton = document.getElementById('nextButton');
var resetButton = document.getElementById('resetButton');
var submitButton = document.getElementById('submitButton');

function showQuestion(questionIndex) {
  questions[currentQuestion].style.display = 'none';
  currentQuestion = questionIndex;
  questions[currentQuestion].style.display = 'block';

  if (currentQuestion === 0) {
    previousButton.style.display = 'none';
  } else {
    previousButton.style.display = 'inline-block';
  }

  if (currentQuestion === questions.length - 1) {
    nextButton.style.display = 'none';
    submitButton.style.display = 'inline-block';
  } else {
    nextButton.style.display = 'inline-block';
    submitButton.style.display = 'none';
  }
}

function showNextQuestion() {
  if (currentQuestion < questions.length - 1) {
    var inputs = questions[currentQuestion].querySelectorAll('input[required]');
    var isValid = true;
    var errorMessage = '';

    for (var i = 0; i < inputs.length; i++) {
      if (inputs[i].value.trim() === '') {
        isValid = false;
        // Define a mensagem de erro para o primeiro campo vazio encontrado
        if (errorMessage === '') {
          errorMessage = 'Este campo é obrigatório';
        }
        // Adiciona a mensagem de erro apenas para o campo vazio atual
        var errorSpan = inputs[i].parentNode.querySelector('.error-message');
        if (!errorSpan) {
          errorSpan = document.createElement('span');
          errorSpan.className = 'error-message';
          inputs[i].parentNode.appendChild(errorSpan);
        }
        errorSpan.textContent = errorMessage;
        errorSpan.style.display = 'inline-block';

        // Adiciona classe de estilo para campo inválido
        inputs[i].classList.add('invalid-field');
      } else {
        // Remove a mensagem de erro do campo preenchido
        var errorSpan = inputs[i].parentNode.querySelector('.error-message');
        if (errorSpan) {
          errorSpan.style.display = 'none';
        }
        // Remove a classe de estilo do campo válido
        inputs[i].classList.remove('invalid-field');
      }
    }

    if (isValid) {
      showQuestion(currentQuestion + 1);
      removeInvalidFieldStyle(inputs);
    } else {
      addInvalidFieldStyle(inputs);
    }
  }
}

function addInvalidFieldStyle(inputs) {
  for (var i = 0; i < inputs.length; i++) {
    inputs[i].classList.add('invalid-field');
  }
}

function removeInvalidFieldStyle(inputs) {
  for (var i = 0; i < inputs.length; i++) {
    inputs[i].classList.remove('invalid-field');
  }
}



function showPreviousQuestion() {
  if (currentQuestion > 0) {
    showQuestion(currentQuestion - 1);
  }
}

showQuestion(currentQuestion);