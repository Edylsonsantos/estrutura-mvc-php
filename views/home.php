<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GigaBet | Onde a sorte encontra o jogo!</title>
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
          <a href="#">Apostas</a>
        </li>
        <li class="item-nav">
          <a href="#">Históricos</a>
        </li>
        <li class="item-nav">
          <a href="#">Deposito</a>
        </li>
        <li class="item-nav">
          <a href="#">Conta</a>
        </li>
        <li class="item-nav">
          <a href="#">Login</a>
        </li>
        <div class="acesso">
          <button class="cadastro">Registar-se</button>
        </div>
      </ul>
      
      <div class="balance-container" id="balance-container">
        <span id="balance-amount" class="balance-amount"><i class="fas fa-money-bill-wave" style="margin-right: 8px;"></i> 1,500.00 <span>MZN</span></span>
        <div id="options" class="balance-options hidden">
          <button class="option-button">
            <i class="fas fa-user"></i> Conta
          </button>
          <button class="option-button">
            <i class="fas fa-wallet"></i> Depósito
          </button>
          <button class="option-button">
            <i class="fas fa-money-bill-wave"></i> Levantamento
          </button>
          <button class="option-button">
            <i class="fas fa-history"></i> Histórico
          </button>
          <button class="option-button">
            <i class="fas fa-sign-out-alt"></i> Sair
          </button>
        </div>
      </div>
      
      <i class="fa fa-bars" id="fa-bars" onclick="toggleMenu()"></i>
    </nav>
  </header>
</section>
<!--fim do header-->
<!--banner-->
<div class="banner">
  <img src="./assets/image/image.png" alt="">
  <div class="banner-btn">
    <div>
      <h2>Experimente a emoção de ganhar com GigaBet, onde cada aposta é uma chance de fazer história.</h2>
      <button class="cell">Aposte ja</button>
    </div>
  </div>
</div>
<!--main-->
<section class="container">
    <main>
      <!--Card de recursos-->
      <div class="container-card">
        <div class="card">
          <div class="icon">
            <i class='bx bx-football'></i>
          </div>
          <h3>Apostas</h3>
          <p>Oferecemos uma ampla variedade de opções de apostas para todos os tipos de usuários.</p>
        </div>
  
        <div class="card">
          <div class="icon">
            <i class='bx bx-wallet'></i>
          </div>
          <h3>Depósito</h3>
          <p>Processo de depósito seguro e rápido com múltiplas opções de pagamento.</p>
        </div>
  
        <div class="card">
          <div class="icon">
            <i class='bx bx-money'></i>
          </div>
          <h3>Levantamento</h3>
          <p>Retire seus ganhos de forma rápida e fácil, diretamente para sua carteira móvel.</p>
        </div>
  
        <div class="card">
          <div class="icon">
            <i class='bx bx-check-shield'></i>
          </div>
          <h3>Seguro</h3>
          <p>Aposte com confiança com nossas opções de seguro de aposta.</p>
        </div>
      </div>

      <!--funcionando-->
      <div class="deposito">
        <div class="table-header card-title">
          <p>Como depositar</p>
        </div>
        <div class="container-grid">
          <!-- Etapa 1: Acessar a Seção de Depósitos -->
          <div class="card">
            <div class="icon">
              <i class='bx bx-wallet'></i>
            </div>
            <h3>Etapa 1: Acessar a seção de Depósitos</h3>
            <p>Vá para a seção de depósitos na sua conta.</p>
            <h4>Como Acessar:</h4>
            <ol>
              <li><i class='bx bx-right-arrow-circle'></i> Faça login na sua conta.</li>
              <li><i class='bx bx-right-arrow-circle'></i> Vá para o menu principal.</li>
              <li><i class='bx bx-right-arrow-circle'></i> Selecione a opção "Depósitos".</li>
            </ol>
          </div>
        
          <!-- Etapa 2: Escolher Método de Pagamento -->
          <div class="card">
            <div class="icon">
              <i class='bx bx-credit-card'></i>
            </div>
            <h3>Etapa 2: Escolher Método de Pagamento</h3>
            <p>Escolha o método de pagamento da sua preference.</p>
            <h4>Opções de Pagamento:</h4>
            <ol>
              <li><img src="./assets/image/emola.png" alt="">eMola</li>
              <li><img src="./assets/image/mpesa.png" alt="">M-pesa</li>
            </ol>
          </div>
        
          <!-- Etapa 3: Confirmar e Completar Depósito -->
          <div class="card">
            <div class="icon">
              <i class='bx bx-check-circle'></i>
            </div>
            <h3>Etapa 3: Confirmar e Completar Depósito</h3>
            <p>Insira os detalhes necessários para o método escolhido e confirme o valor.</p>
            <h4>Como Completar:</h4>
            <ol>
              <li><i class='bx bx-right-arrow-circle'></i>Preencha os detalhes do pagamento.</li>
              <li><i class='bx bx-right-arrow-circle'></i>Insira o valor que deseja depositar.</li>
              <li><i class='bx bx-right-arrow-circle'></i>Revise as informações e confirme a transação.</li>
            </ol>
          </div>
        </div>
      </div>
      <br>
      <div class="deposito">
          <div class="table-header card-title">
            <p>Como apostar</p>
          </div>
          <div class="container-grid">
            <!-- Etapa 1: Escolher o Esporte ou Evento -->
            <div class="card">
              <div class="icon">
                <i class='bx bx-football'></i>
              </div>
              <h3>Etapa 1: Escolher o Esporte ou Cassino</h3>
              <p>Escolha entre uma ampla variedade de esportes e eventos disponíveis para apostas.</p>
              <h4>Como Escolher:</h4>
              <ol>
                <li><i class='bx bx-right-arrow-circle'></i>Faça login na sua conta.</li>
                <li><i class='bx bx-right-arrow-circle'></i>Navegue para a seção de apostas.</li>
                <li><i class='bx bx-right-arrow-circle'></i>Selecione o esporte ou evento desejado.</li>
              </ol>
            </div>
          
            <!-- Etapa 2: Selecionar o Tipo de Aposta -->
            <div class="card">
              <div class="icon">
                <i class='bx bx-selection'></i>
              </div>
              <h3>Etapa 2: Selecionar o Tipo de Aposta</h3>
              <p>Escolha o tipo de aposta que deseja fazer, como resultado final, placar exacto, entre outros.</p>
              <h4>Opções de Aposta:</h4>
              <ol>
                <li><i class='bx bx-right-arrow-circle'></i>Resultado Final</li>
                <li><i class='bx bx-right-arrow-circle'></i>Placar Exacto</li>
                <li><i class='bx bx-right-arrow-circle'></i>Outros tipos de apostas disponíveis</li>
              </ol>
            </div>
          
            <!-- Etapa 3: Realizar e Confirmar a Aposta -->
            <div class="card">
              <div class="icon">
                <i class='bx bx-check-circle'></i>
              </div>
              <h3>Etapa 3: Realizar e Confirmar a Aposta</h3>
              <p>Digite o valor da aposta, revise os detalhes e confirme a sua aposta.</p>
              <h4>Como Apostar:</h4>
              <ol>
                <li><i class='bx bx-right-arrow-circle'></i>Insira o valor que deseja apostar.</li>
                <li><i class='bx bx-right-arrow-circle'></i>Revise todas as informações da aposta.</li>
                <li><i class='bx bx-right-arrow-circle'></i>Confirme a sua aposta e aguarde os resultados.</li>
              </ol>
            </div>
          </div>
      </div>
      <br>
      <!--question-->
      <div class="deposito">        
        <div class="table-header" style="display: flex; flex-direction: column;">
            <p>Perguntas </p>
        </div>

    </div>
      <button class="close-fa scroll"><a href="#home"><i class="fa fa-arrow-up"></i></a></button>
    </main>
</section>

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
          <p>Email: suporte@gigabet.com</p>
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