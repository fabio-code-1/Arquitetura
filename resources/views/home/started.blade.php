<div class="container">

    <div class="row justify-content-between gy-4">

        <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content">
                <h3>Contato</h3>
                <p>
                    Entre em contato conosco por e-mail para obter mais informações sobre nossos serviços.
                    Estamos sempre disponíveis para responder suas dúvidas e ajudá-lo da melhor maneira possível.
                </p>
                <p>
                    Envie-nos um e-mail com suas dúvidas e entraremos em contato o mais breve possível. Obrigado!
                </p>
                <p class="mb-5">
                    Se preferir, preencha o formulário acima para solicitar um orçamento ou mais informações sobre nossos serviços.
                </p>

                <a href="https://wa.me/5511981664628" target="_blank" data-aos="fade-up" data-aos-delay="200" class="btn-get-started-whats"><i class="bi bi-whatsapp"></i> FAÇA ORÇAMENTO PELO WHATSAPP</a>
            </div>
        </div>

        <div class="col-lg-5" data-aos="fade">
            <form action="forms/quote.php" method="post" class="php-email-form">
                <h3>PRECISA DE UM PROJETO?</h3>
                <p>Entre em contato conosco preenchendo o formulário abaixo para solicitar um orçamento personalizado para sua empresa.</p>
                <div class="row gy-3">
                    <div class="col-md-12 question">
                        <input type="text" name="name" class="form-control mt-4" placeholder="Nome" required>
                    </div>

                    <div class="col-md-12  question">
                        <input type="email" class="form-control mt-4" name="email" placeholder="Email" required>
                    </div>

                    <div class="col-md-12 question">
                        <input type="text" class="form-control mt-4" name="phone" placeholder="Telefone" required>
                    </div>

                    <div class="col-md-12 question">
                        <textarea class="form-control mt-4" name="message" rows="6" placeholder="Menssagem" required></textarea>
                    </div>

                    <div class="col-md-12 text-center">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Sua solicitação de orçamento foi enviada com sucesso. Obrigado!</div>
                        <button type="button" class="m-3" id="previousButton" onclick="showPreviousQuestion()">Anterior</button>
                        <button type="button" class="m-3" id="nextButton" onclick="showNextQuestion()">Próxima</button>
                        <button type="submit" id="submitButton" style="display: none;">Enviar</button>
                    </div>

                </div>
            </form>
        </div><!-- End Quote Form -->

    </div>

</div>