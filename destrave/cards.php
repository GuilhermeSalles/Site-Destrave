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
            Escolha o Plano Perfeito para Você!
        </h2>

        <section class="card container grid">
            <div class="card__container grid">
                <!--==================== CARD 1 ====================-->
                <article class="card__content grid" aria-labelledby="basic-plan-title">

                    <header class="card__header">
                        <div class="card__header-circle grid">
                            <img src="assets/img/free-coin.png" alt="Ícone do plano gratuito" class="card__header-img">
                        </div>
                        <span class="card__header-subtitle">Free plan</span>
                        <h1 id="basic-plan-title" class="card__header-title">Basic</h1>
                    </header>

                    <ul class="card__list grid">
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon" aria-hidden="true"></i>
                            <p class="card__list-description">3 user requests</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon" aria-hidden="true"></i>
                            <p class="card__list-description">10 downloads per day</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon" aria-hidden="true"></i>
                            <p class="card__list-description">Daily content updates</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon" aria-hidden="true"></i>
                            <p class="card__list-description">Fully editable files</p>
                        </li>
                    </ul>

                    <button class="card__button" aria-label="Choose the Basic plan">Choose this plan</button>
                </article>

                <!--==================== CARD 2 ====================-->
                <article class="card__content grid" aria-labelledby="professional-plan-title">

                    <header class="card__header">
                        <div class="card__header-circle grid">
                            <img src="assets/img/pro-coin.png" alt="Ícone do plano profissional" class="card__header-img">
                        </div>
                        <span class="card__header-subtitle">Most popular</span>
                        <h1 id="professional-plan-title" class="card__header-title">Professional</h1>
                    </header>

                    <ul class="card__list grid">
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon" aria-hidden="true"></i>
                            <p class="card__list-description">100 user requests</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon" aria-hidden="true"></i>
                            <p class="card__list-description">Unlimited downloads</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon" aria-hidden="true"></i>
                            <p class="card__list-description">Unlock all features from our site</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon" aria-hidden="true"></i>
                            <p class="card__list-description">Daily content updates</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon" aria-hidden="true"></i>
                            <p class="card__list-description">Fully editable files</p>
                        </li>
                    </ul>

                    <button class="card__button" aria-label="Choose the Professional plan">Choose this plan</button>
                </article>

                <!--==================== CARD 3 ====================-->
                <article class="card__content grid" aria-labelledby="enterprise-plan-title">

                    <header class="card__header">
                        <div class="card__header-circle grid">
                            <img src="assets/img/enterprise-coin.png" alt="Ícone do plano Enterprise" class="card__header-img">
                        </div>
                        <span class="card__header-subtitle">For agencies</span>
                        <h1 id="enterprise-plan-title" class="card__header-title">Enterprise</h1>
                    </header>

                    <ul class="card__list grid">
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon" aria-hidden="true"></i>
                            <p class="card__list-description">Unlimited user requests</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon" aria-hidden="true"></i>
                            <p class="card__list-description">Unlimited downloads</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon" aria-hidden="true"></i>
                            <p class="card__list-description">Unlock all features from our site</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon" aria-hidden="true"></i>
                            <p class="card__list-description">Daily content updates</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon" aria-hidden="true"></i>
                            <p class="card__list-description">Fully editable files</p>
                        </li>
                    </ul>

                    <button class="card__button" aria-label="Choose the Enterprise plan">Choose this plan</button>
                </article>
            </div>
        </section>
    </section>

    <!--==================== Modal ====================-->
    <div id="myModal" class="modal" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-content" role="document">
            <span class="close" aria-label="Close modal">&times;</span>
            <h2 id="modalTitle">Formulário</h2>
            <p style="padding: 2rem 0;">Olá! É ótimo vê-lo aqui! Por favor, dedique um momento para preencher
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

                <label for="revenue">Qual o seu faturamento mensal médio?</label>
                <select id="revenue" name="user_revenue" required aria-required="true">
                    <option value="">Selecione</option>
                    <option value="menos_5000">Menos de R$ 5.000</option>
                    <option value="5000_10000">R$ 5.000 - R$ 10.000</option>
                    <option value="10000_20000">R$ 10.000 - R$ 20.000</option>
                    <option value="mais_20000">Mais de R$ 20.000</option>
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
        var btns = document.getElementsByClassName("card__button");

        // Get the <button> element that closes the modal
        var closeButton = document.querySelector(".close");

        // Get the hidden input field for the plan type
        var planTypeInput = document.getElementById("planType");

        // Define plan types
        var planTypes = {
            "Basic": "basic",
            "Professional": "professional",
            "Enterprise": "enterprise"
        };

        // When the user clicks the button, open the modal and set the plan type
        for (let btn of btns) {
            btn.addEventListener('click', function() {
                // Determine which plan was clicked
                var planTitle = this.closest('.card__content').querySelector(".card__header-title").innerText;

                // Set the hidden input field value based on the plan title
                planTypeInput.value = planTypes[planTitle] || "";

                // Open the modal
                modal.style.display = "block";
                modal.setAttribute("aria-hidden", "false");
            });
        }

        // When the user clicks on <button> (x), close the modal
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