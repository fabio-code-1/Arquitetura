<!DOCTYPE html>
<html>

<head>
  <title>Questionário de Filtro</title>
  <style>
    .question {
      display: none;
    }

    .invalid-field {
      border: 1px solid red;
    }

    .error-message {
      display: none;
      color: red;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <h1>Questionário de Filtro</h1>
  <form id="questionnaireForm">
    <div class="question">
      <label for="name">Nome:</label>
      <input type="text" id="name" name="name" required><br>
      <span class="error-message">Este campo é obrigatório</span><br><br>
    </div>

    <div class="question">
      <label for="contact">Contato (e-mail ou telefone):</label>
      <input type="text" id="contact" name="contact" required><br>
      <span class="error-message">Este campo é obrigatório</span><br><br>
    </div>

    <div class="question">
      <label for="objective">Objetivo do projeto:</label>
      <input type="text" id="objective" name="objective" required><br>
      <span class="error-message">Este campo é obrigatório</span><br><br>
    </div>

    <div class="question">
      <label for="property-type">Tipo de propriedade:</label>
      <input type="text" id="property-type" name="property-type" required><br>
      <span class="error-message">Este campo é obrigatório</span><br><br>
    </div>

    <div class="question">
      <label for="area-size">Tamanho aproximado da área:</label>
      <input type="text" id="area-size" name="area-size" required><br>
      <span class="error-message">Este campo é obrigatório</span><br><br>
    </div>

    <div class="question">
      <label for="own-property">Você possui um terreno ou propriedade?</label><br>
      <input type="radio" id="own-property-yes" name="own-property" value="yes" required>
      <label for="own-property-yes">Sim</label><br>
      <input type="radio" id="own-property-no" name="own-property" value="no" required>
      <label for="own-property-no">Não</label><br>
      <input type="radio" id="own-property-help" name="own-property" value="help" required>
      <label for="own-property-help">Não, preciso de ajuda para encontrar um terreno</label><br><br>
    </div>

    <div class="question">
      <label for="budget">Orçamento estimado:</label>
      <input type="text" id="budget" name="budget" required><br>
      <span class="error-message">Este campo é obrigatório</span><br><br>
    </div>

    <div class="question">
      <label for="architectural-style">Estilo arquitetônico preferido:</label>
      <input type="text" id="architectural-style" name="architectural-style" required><br>
      <span class="error-message">Este campo é obrigatório</span><br><br>
    </div>

    <div class="question">
      <label for="legal-restrictions">Restrições legais ou regulamentares:</label>
      <input type="text" id="legal-restrictions" name="legal-restrictions" required><br>
      <span class="error-message">Este campo é obrigatório</span><br><br>
    </div>

    <div class="question">
      <label for="timeline">Prazo de conclusão do projeto:</label>
      <input type="text" id="timeline" name="timeline" required><br>
      <span class="error-message">Este campo é obrigatório</span><br><br>
    </div>

    <span class="error-message"></span>

    <input type="button" id="previousButton" value="Anterior" onclick="showPreviousQuestion()">
    <input type="button" id="nextButton" value="Próxima" onclick="showNextQuestion()">
    <input type="button" id="resetButton" value="Redefinir" onclick="resetForm()">
    <input type="submit" id="submitButton" value="Enviar" style="display: none;">

  </form>

  <script>
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
  </script>
</body>

</html>