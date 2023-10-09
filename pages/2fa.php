<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>2FA - CPaas</title>
  <link rel="icon" href="../assets/img/favicon.png" sizes="192x192" />
  <link type="text/css" rel="stylesheet" href="../assets/css/styles.css" />
  <script src="https://kit.fontawesome.com/9945e62804.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body class="bg-slate-200 flex flex-col h-screen font-Poppins dark:bg-dark-bg">
  <header class="bg-telecall-azul flex justify-between py-3 px-5 md:px-10 items-center">
    <figure class="max-w-[150px] md:max-w-[200px]">
      <a href="../index.php"><img src="../assets/img/logo_telecall_branco_vermelho_p.png" alt="Logo da Telecall" />
      </a>
    </figure>

    <section class="gap-10 items-center justify-center hidden md:flex md:justify-around menu-mobile z-10">
      <div class="md:hidden">
        <i class="fa-solid fa-xmark self-end text-white text-2xl absolute top-5 right-7" id="close-menu-mobile"></i>
      </div>
      <nav>
        <ul class="flex flex-col items-center justify-around gap-10 md:flex-row">
          <li class="relative flex flex-col items-center">
            <p id="dropdown" class="text-white text-lg cursor-pointer select-none">
              Serviços
              <i class="fa-solid fa-chevron-down text-white text-lg"></i>
            </p>
            <div id="menudropdown" class="w-[170px] md:w-[250px] max-h-0 top-10 static md:absolute bg-telecall-azul rounded overflow-hidden">
              <ul class="w-full p-2">
                <li class="w-full">
                  <a class="text-white text-lg block rounded py-1 px-2 hover:bg-telecall-azul-hover" href="./2fa.php">2FA</a>
                </li>
                <li>
                  <a class="text-white text-lg block rounded py-1 px-2 hover:bg-telecall-azul-hover" href="./numero-mascara.php">Número Máscara</a>
                </li>
                <li>
                  <a class="text-white text-lg block rounded py-1 px-2 hover:bg-telecall-azul-hover" href="./google-calls.php">Google Verified Calls</a>
                </li>
                <li>
                  <a class="text-white text-lg block rounded py-1 px-2 hover:bg-telecall-azul-hover" href="./sms-programavel.php">SMS Programável</a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a class="text-white text-lg" href="../index.php#sobre">Sobre</a>
          </li>
        </ul>
      </nav>
      <section class="flex flex-col gap-10 items-center md:flex-row">
        <i id="dark-btn" class="fa-solid fa-moon text-white text-lg cursor-pointer"></i>
        <a class="text-white text-lg bg-telecall-vemelho hidden rounded-md px-3 py-1 hover:bg-telecall-vemelho-hover duration-150" href="./login.php" id="login-btn">
          Entrar
          <i class="fa-solid fa-arrow-right ml-1 text-lg"></i></a>

        <button class="text-white text-lg bg-telecall-vemelho hidden rounded-md px-3 py-1 hover:bg-telecall-vemelho-hover duration-150" id="logout-btn">
          Sair
          <i class="fa-solid fa-arrow-right-to-bracket ml-1 text-lg"></i>
        </button>
      </section>
    </section>
    <div class="block md:hidden">
      <i class="fa-solid fa-bars text-white text-2xl" id="open-menu-mobile"></i>
    </div>
  </header>

  <main>
    <article class="flex flex-col gap-10 my-5 p-3">
      <section class="flex justify-around py-6 w-full">
        <section class="flex flex-col items-center justify-center gap-5 w-full text-center md:w-1/2">
          <h1 class="text-3xl text-telecall-azul-hover font-bold dark:text-dark-title">
            2FA - Autenticação de dois fatores
          </h1>
          <h2 class="text-xl text-telecall-azul font-semibold dark:text-dark-text">
            Reforçe sua estratégia de segurança empresarial.
          </h2>
        </section>
        <figure class="w-1/2 hidden md:flex justify-center">
          <img class="max-w-[375px]" src="../assets/img/undraw_two_factor_authentication_namy.svg" alt="" />
        </figure>
      </section>

      <section class="flex flex-col gap-7 px-4 w-full">
        <h2 class="text-3xl text-telecall-azul font-bold titulo relative w-1/4 dark:text-dark-title">
          Como funciona?
        </h2>
        <section class="flex flex-wrap gap-6 justify-center lg:justify-between lg:w-4/5 mx-auto">
          <div class="w-60 flex flex-col items-center gap-5">
            <figure>
              <img class="max-w-[200px]" src="../assets/img/2fa/computador 1.png" alt="icone de computador" />
            </figure>
            <p class="text-md font-medium text-justify dark:text-dark-text">
              Usuário acessa seu site o aplicativo e digita a senha cadastrada
              para entrar em seu perfil ou completar uma transação.
            </p>
          </div>
          <div class="w-60 flex flex-col items-center gap-5">
            <figure>
              <img class="max-w-[200px]" src="../assets/img/2fa/exclamacao vermelha.png" alt="exclamação vermelha" />
            </figure>
            <p class="text-md font-medium text-justify dark:text-dark-text">
              A Telecall recebe a tentativa de login e solicita que o usuário
              insira seu número de telefone para autorizar o acesso.
            </p>
          </div>
          <div class="w-60 flex flex-col items-center gap-5">
            <figure>
              <img class="max-w-[200px]" src="../assets/img/2fa/celular.png" alt="icone de celular" />
            </figure>
            <p class="text-md font-medium text-justify dark:text-dark-text">
              Após inserir seu número, a Telecall envia para o usuário por
              SMS, chamada ou e-mail um código PIN de uso único.
            </p>
          </div>
          <div class="w-60 flex flex-col items-center gap-5">
            <figure>
              <img class="max-w-[200px]" src="../assets/img/2fa/computador 2.png" alt="icone de computador" />
            </figure>
            <p class="text-md font-medium text-justify dark:text-dark-text">
              O usuário insere o código site ou aplicativo para concluir o
              processo de verificação.
            </p>
          </div>
        </section>
      </section>

      <section class="flex flex-col gap-7 px-4 w-full mt-5">
        <h2 class="text-3xl text-telecall-azul font-bold titulo relative w-1/5 dark:text-dark-title">
          Benefícios
        </h2>
        <section class="flex mt-5">
          <figure class="w-1/2 hidden md:flex justify-center">
            <img class="max-w-[350px]" src="../assets/img/2fa/undraw_security_re_a2rk.svg" alt="imagem para simbolizar segurança" />
          </figure>
          <section class="md:w-1/2">
            <ul class="flex flex-col justify-between h-full gap-3">
              <li class="flex items-center gap-2">
                <i class="fa-solid fa-circle-check text-green-600 text-xl"></i>
                <p class="text-md font-medium dark:text-dark-text">
                  Ofereça segurança aprimorada para seus clientes.
                </p>
              </li>
              <li class="flex items-center gap-2">
                <i class="fa-solid fa-circle-check text-green-600 text-xl"></i>
                <p class="text-md font-medium dark:text-dark-text">
                  Reduza casos de fraude e invasões e evite o acesso a dados
                  por invasores.
                </p>
              </li>
              <li class="flex items-center gap-2">
                <i class="fa-solid fa-circle-check text-green-600 text-xl"></i>
                <p class="text-md font-medium dark:text-dark-text">
                  Envio de OTP por meio de vários canais, incluindo SMS, voz
                  ou e-mail.
                </p>
              </li>
              <li class="flex items-center gap-2">
                <i class="fa-solid fa-circle-check text-green-600 text-xl"></i>
                <p class="text-md font-medium dark:text-dark-text">
                  Flexibilidade de canais garante que o usuário conseguirá
                  completar a tarefa desejada mesmo quando tiver problema com
                  um deles.
                </p>
              </li>
              <li class="flex items-center gap-2">
                <i class="fa-solid fa-circle-check text-green-600 text-xl"></i>
                <p class="text-md font-medium dark:text-dark-text">
                  API simples e de rápida implementação.
                </p>
              </li>

              <li class="flex items-center gap-2">
                <i class="fa-solid fa-circle-check text-green-600 text-xl"></i>
                <p class="text-md font-medium dark:text-dark-text">
                  Plataforma intuitiva que permite visualizar relatórios de
                  uso por dia, mês ou ano e pesquisar usando diversos
                  critérios de filtro
                </p>
              </li>
            </ul>
          </section>
        </section>
      </section>

      <section class="flex flex-col gap-7 px-4 w-full mt-5">
        <h2 class="text-3xl text-telecall-azul font-bold titulo relative w-1/5 dark:text-dark-title">
          Quem usa?
        </h2>
        <section>
          <ul class="flex flex-col xs:flex-row flex-wrap gap-10 px-6 sm:justify-around sm:gap-0 md:justify-between">
            <li class="flex flex-col items-center gap-2">
              <i class="fa-solid fa-coins text-5xl dark:text-dark-title"></i>
              <p class="text-xl font-medium dark:text-dark-text">Finanças</p>
              <figure>
                <img src="../assets/img/icons/bradesco.png" alt="icone do app bradesco" />
              </figure>
              <figure>
                <img src="../assets/img/icons/picpay.png" alt="icone do app picpay" />
              </figure>
              <figure>
                <img src="../assets/img/icons/mercado pago.png" alt="icone do app mercado pago" />
              </figure>
            </li>
            <li class="flex flex-col items-center gap-2">
              <i class="fa-solid fa-heart-pulse text-5xl dark:text-dark-title"></i>
              <p class="text-xl font-medium dark:text-dark-text">Saúde</p>
              <figure>
                <img src="../assets/img/icons/amil.png" alt="icone do app amil" />
              </figure>
            </li>
            <li class="flex flex-col items-center gap-2">
              <i class="fa-solid fa-plane -rotate-45 text-5xl dark:text-dark-title"></i>
              <p class="text-xl font-medium dark:text-dark-text">Turismo</p>
              <figure>
                <img src="../assets/img/icons/airbnb.png" alt="icone do app airbnb" />
              </figure>
              <figure>
                <img src="../assets/img/icons/booking.png" alt="icone do app booking" />
              </figure>
            </li>
            <li class="flex flex-col items-center gap-2">
              <i class="fa-solid fa-cart-shopping text-5xl dark:text-dark-title"></i>
              <p class="text-xl font-medium dark:text-dark-text">Varejo</p>
              <figure>
                <img src="../assets/img/icons/amazon e apple store.png" alt="icone do app amazon e apple store.png" />
              </figure>
              <figure>
                <img src="../assets/img/icons/mercado livre.png" alt="icone do app mercado livre " />
              </figure>
            </li>
            <li class="flex flex-col items-center gap-2">
              <i class="fa-solid fa-box text-5xl dark:text-dark-title"></i>
              <p class="text-xl font-medium dark:text-dark-text">Logistica</p>
              <figure>
                <img src="../assets/img/icons/ifood.png" alt="icone do app ifood" />
              </figure>
              <figure>
                <img src="../assets/img/icons/rappi.png" alt="icone do app rappi" />
              </figure>
              <figure>
                <img src="../assets/img/icons/uber.png" alt="icone do app uber" />
              </figure>
            </li>
            <li class="flex flex-col items-center gap-2">
              <i class="fa-solid fa-building-columns text-5xl dark:text-dark-title"></i>
              <p class="text-xl font-medium dark:text-dark-text">Governo</p>
              <figure>
                <img src="../assets/img/icons/cnh digital.png" alt="icone do app cnh digital" />
              </figure>
              <figure>
                <img src="../assets/img/icons/cpf digital.png" alt="icone do app cpf digital" />
              </figure>
            </li>
          </ul>
        </section>
      </section>
    </article>
  </main>

  <footer class="bg-zinc-800 flex justify-between py-4 px-12 mt-5 gap-3 flex-wrap">
    <section class="flex flex-col w-full items-center gap-2 xs:w-auto xs:items-start">
      <h2 class="text-white text-md font-semibold tracking-wide sm:text-lg">
        Serviços
      </h2>
      <ul>
        <li>
          <a class="text-white/80 text-sm sm:text-md hover:text-white" href="./2fa.php">2FA</a>
        </li>
        <li>
          <a class="text-white/80 text-sm sm:text-md hover:text-white" href="./numero-mascara.php">Número Máscara</a>
        </li>
        <li>
          <a class="text-white/80 text-sm sm:text-md hover:text-white" href="./google-calls.php">Google Verified Calls</a>
        </li>
        <li>
          <a class="text-white/80 text-sm sm:text-md hover:text-white" href="./sms-programavel.php">SMS Programável</a>
        </li>
      </ul>
    </section>
    <section class="flex flex-col w-full items-center gap-2 xs:w-auto xs:items-start">
      <h2 class="text-white text-md font-semibold tracking-wide sm:text-lg">
        Contato
      </h2>
      <ul class="flex flex-col gap-1">
        <li class="text-white/80 text-sm sm:text-md">(21) 3030-1010</li>
        <li class="text-white/80 text-sm sm:text-md">0800 030 2016</li>
        <li class="text-white/80 text-sm sm:text-md">suporte@telecall.com</li>
      </ul>
    </section>
    <section class="flex flex-col w-full items-center gap-3 xs:w-auto">
      <h2 class="text-white text-md font-semibold tracking-wide sm:text-lg">
        Redes Sociais
      </h2>
      <ul class="flex justify-between w-2/4 xs:w-full">
        <li>
          <a class="text-white/80 text-2xl hover:text-blue-700 duration-150" href="https://www.facebook.com/TelecallBr" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
        </li>
        <li>
          <a class="text-white/80 text-2xl hover:text-fuchsia-700 duration-150" href="https://www.instagram.com/telecallbr/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        </li>
        <li>
          <a class="text-white/80 text-2xl hover:text-sky-600 duration-150" href="https://www.linkedin.com/company/telecall/" target="_blank">
            <i class="fa-brands fa-linkedin"></i></a>
        </li>
      </ul>
      <a href="https://telecall.com" target="_blank" class="max-w-[130px]">
        <img src="../assets/img/logo_telecall_branco_vermelho_p.png" alt="logo da telecall" />
      </a>
    </section>
  </footer>

  <script type="module" src="../assets/js/script.js"></script>
</body>

</html>