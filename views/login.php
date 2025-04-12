<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Onde a sorte encontra o jogo!</title>    
    <link rel="shortcut icon" href="./assets/image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/style.all.css">
    <link rel="stylesheet" href="./assets/css/fontawesome.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!--header-top-->
    <section class="header-top">
        <header>
        <div class="logo">
            <img src="/assets/image/logo.png" alt="" class="logo scroll" id="home">
        </div>
        <nav>
            <ul id="list-nav">
            <li class="item-nav active-nav">
                <a href="#" class="active-nav">Inicio</a>
            </li>
            <li class="item-nav">
                <a href="#">Jogos</a>
            </li>
            <li class="item-nav">
                <a href="#">Apostas</a>
            </li>
            <li class="item-nav">
                <a href="#">Históricos</a>
            </li>
            <li class="item-nav">
                <a href="#">Deposito</a>
            </li>
            <li class="item-nav">
                <a href="#">Suporte</a>
            </li>
            </ul>

            <i class="fa fa-bars" id="fa-bars" onclick="toggleMenu()"></i>
        </nav>
        </header>
    </section>
    <!--fim do header-->
    <!--main-->
    <section class="container">
        <main>
            <!-- Login -->
            <div id="id01" class="modal-login">
                <form class="modal-content animate" action="./login" method="POST">
                    <p class="title-login">Login</p>
                    <div class="container">

                        <?php if (isset($_GET['error'])): ?>
                            <p class="error-text" style="display: flex;"><i class='bx bx-info-circle'></i>   <?php echo htmlspecialchars($_GET['error']); ?></p>    
                        <?php endif; ?>

                        <div class="input-moz">
                            <div class="input-cell">
                                <div class="input-number">
                                    <label for="prefixo">Prefixo</label>
                                    <input type="text" class="input-moz" required disabled value="+258">
                                </div>
                                <div class="input-number" style="width: 100%;">
                                    <label for="cell">Número de telefone</label>
                                    <input type="tel" name="cell" id="cell" style="width: 100%;" required>
                                </div>
                            </div>
                            <p class="error-text" id="cellError"><i class='bx bx-info-circle'></i> Preencha este campo com um número de telefone válido.</p>
                        </div>
                        <label for="psw">Senha</label>
                        <div class="input-moz">
                            <input type="password" placeholder="" name="psw" id="psw" required>
                            <p class="error-text" id="pswError"><i class='bx bx-info-circle'></i> Preencha este campo com sua senha, deve conter pelo menos 8 caracteres, incluindo pelo menos uma letra e um número.</p>
                        </div>
                        <span class="recover-psw">Esqueceu sua senha?<a href="#"> Recupere sua senha</a></span>
                        <button type="submit">
                            <span>Login</span>
                        </button>
                    </div>
                    <div class="container" style="align-items: center; display: flex; justify-content: space-between;">
                        <a href="./form" class="cancelbtn"><span>Registrar-se</span></a>
                    </div>
                </form>
            </div>
        </main>
    </section>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            let isValid = true;

            // Validar Telefone
            const cell = document.getElementById('cell').value;
            const cellError = document.getElementById('cellError');
            const cellPattern = /^(84|85|82|83|86|87)[0-9]{7}$/;
            if (!cellPattern.test(cell)) {
                cellError.style.display = 'block';
                isValid = false;
            } else {
                cellError.style.display = 'none';
            }

            // Validar Senha
            const psw = document.getElementById('psw').value;
            const pswError = document.getElementById('pswError');
            if (psw.trim() === "") {
                pswError.style.display = 'block';
                isValid = false;
            } else {
                pswError.style.display = 'none';
            }

            if (!isValid) {
                event.preventDefault();
            }
        });
    </script>
    <!--fim do main-->

    <!--footer-->
    <footer>
    <div class="footer-container">
        <div class="footer-row">
        <div class="footer-column">
            <h4>Sobre Nós</h4>
            <p>Bem-vindo ao GigaBet, a casa de apostas onde a sorte encontra o jogo! Na GigaBet, oferecemos uma plataforma inovadora e segura para você fazer suas apostas e sentir a emoção das vitórias. Com uma ampla variedade de jogos, garantimos uma experiência única e envolvente para todos os nossos usuários.</p>
            <div style="display: flex; justify-content: space-between;">
            <img src="./assets/image/logo.png" alt="+18" width="100px">
            <img src="./assets/image/+18.png" alt="" width="70px">
            </div>
        </div>
        <div class="footer-column">
            <h4>Links</h4>
            <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Apostas</a></li>
            <li><a href="#">Depósito</a></li>
            <li><a href="#">Saque</a></li>
            <li><a href="#">Contato</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h4>Contato</h4>
            <p>Email: suporte@luckybet.com</p>
            <p>Endereço: Avenida Liberdade dos Heróis, Quelimane, Moçambique</p>
            <p>Telefone: (+258) 86 1234 56</p>
        </div>
        <div class="footer-column">
            <h4>Termos e Condições</h4>
            <p><a href="termos.html">Termos e Condições</a></p>
            <p><a href="privacidade.html">Política de Privacidade</a></p>
        </div>
        </div>
        <p class="footer-footer">
        2024 &copy; Todos os Direitos Reservados. Gigabet.
        </p>
    </div>
    </footer>
    <!--fim do footer-->

    <script>
    function toggleMenu() {
    var navMenu = document.getElementById("list-nav");
    navMenu.classList.toggle("show");
    }

    document.addEventListener('DOMContentLoaded', function() {
        var balance = document.getElementById('balance-container');
        var options = document.getElementById('options');

        balance.addEventListener('mouseover', function() {
            options.classList.remove('hidden');
        });

        balance.addEventListener('mouseout', function() {
            options.classList.add('hidden');
        });
    });

    //scroll tag posicao
    var links = document.querySelectorAll('.scroll a');

    for (var i = 0; i < links.length; i++) {
    links[i].addEventListener('click', function(e) {
        e.preventDefault();

        var target = this.getAttribute('href').substring(1);
        var targetElement = document.getElementById(target);

        if (targetElement) {
        var targetTop = targetElement.offsetTop;

        window.scrollTo({
            top: targetTop,
            behavior: 'smooth'
        });
        }
    });
    }
    </script>
</body>
</html>