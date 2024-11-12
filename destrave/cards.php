<!DOCTYPE html>

<head>
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/card.css">
    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
</head>

<body>

    <!--==================== QUESTIONS ====================-->
    <section class="questions section" id="plans" aria-labelledby="plans-title">
        <h2 id="plans-title" class="section__title-center questions__title container" style="color: white;">
            O Plano Perfeito para Você!
        </h2>

        <section class="plans-section container" style="display: flex; justify-content: center; align-items: center;">
            <div class="plan">
                <img src="assets/img/2.png" alt="Plano Performance" class="plan-image">
                <button class="plan-button" data-plan="Performance" aria-label="Escolher Plano">Escolher este plano</button>
            </div>
        </section>
    </section>


    <!--==================== MODAL ====================-->
    <div id="myModal" class="modal" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-content" role="document">
            <span class="close" aria-label="Close modal">&times;</span>
            <h2 id="modalTitle">Formulário</h2>
            <p style="padding: 2rem 0;">Olá! Por favor, dedique um momento para preencher
                este formulário com atenção. É uma oportunidade valiosa para a nossa equipe entender melhor seu
                negócio e suas necessidades.</p>
            <form id="modalForm" action="processar_formulario.php" method="POST">
                <input type="hidden" id="planType" name="planType">

                <label for="name">Qual é o seu nome?</label>
                <input type="text" id="name" name="user_name" required aria-required="true"><br>

                <label for="phone">Qual o seu melhor telefone para contato?</label>
                <input type="tel" id="phone" name="user_tel" required aria-required="true"><br>

                <label for="email">Qual é o seu principal e-mail?</label>
                <input type="email" id="email" name="user_email" required aria-required="true"><br>

                <label for="social">Qual é a sua principal rede social?</label>
                <input type="text" id="social" name="user_social" required aria-required="true" placeholder="Ex: Instagram, Facebook"><br>

                <label for="revenue">Qual o seu faturamento mensal médio?</label>
                <select id="revenue" name="user_revenue" required aria-required="true">
                    <option value="">Selecione</option>
                    <option value="menos_5000">Menos de R$ 30.000,00</option>
                    <option value="5000_10000">R$ 30.000,00 - R$ 50.000,00</option>
                    <option value="10000_20000">R$ 50.000,00 - R$ 100.000,00</option>
                    <option value="mais_20000">Mais de R$ 100.000,00</option>
                    <option value="nao_invisto">Não invisto</option>
                </select><br>

                <label for="marketing">Você já investe em anúncios online e marketing?</label>
                <select id="marketing" name="user_marketing" required aria-required="true">
                    <option value="">Selecione</option>
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
                </select><br>

                <button type="submit" class="card__button">Enviar</button>
            </form>

        </div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the buttons that open the modal
        var btns = document.querySelectorAll(".plan-button");

        // Get the <span> element that closes the modal
        var closeButton = document.querySelector(".close");

        // Get the hidden input field for the plan type
        var planTypeInput = document.getElementById("planType");

        // When the user clicks the button, open the modal and set the plan type
        btns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                // Set the hidden input field value to the selected plan
                planTypeInput.value = this.getAttribute("data-plan");

                // Open the modal
                modal.style.display = "block";
                modal.setAttribute("aria-hidden", "false");
            });
        });

        // When the user clicks on <span> (x), close the modal
        closeButton.addEventListener('click', function() {
            modal.style.display = "none";
            modal.setAttribute("aria-hidden", "true");
        });

        // When the user clicks anywhere outside of the modal, close it
        window.addEventListener('click', function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
                modal.setAttribute("aria-hidden", "true");
            }
        });
    </script>

</body>

</html>