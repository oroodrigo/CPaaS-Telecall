<?php
session_start();
if (empty($_SESSION["login"])) {
  header('Location: ../pages/login.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Google Verified Calls - CPaas</title>
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
          <li id="botao-area-unica">
            <?php
            if ($_SESSION['role'] === "admin") {
              echo '<a class="text-white text-lg block rounded py-1 px-2" href="/pages/dashboard.php">Dashboard</a>';
            } else {
              echo '<a class="text-white text-lg block rounded py-1 px-2" href="/pages/perfil.php">Perfil</a>';
            }
            ?>
          </li>
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
        <section class="flex flex-col items-center justify-center gap-5 text-center w-full md:w-1/2">
          <h1 class="text-3xl text-telecall-azul-hover font-bold dark:text-dark-title">
            Google Verified Calls
          </h1>
          <h2 class="text-xl text-telecall-azul font-semibold text-center dark:text-dark-text">
            Identifique chamadas spam com esse recurso inovador do Google.
          </h2>
        </section>
        <figure class="w-1/2 hidden md:flex justify-center">
          <img class="max-w-[300px]" src="../assets/img/google-verified-calls/undraw_verified_re_4io7.svg" alt="" />
        </figure>
      </section>

      <section class="flex flex-col gap-5 px-4 w-full">
        <h2 class="text-3xl text-telecall-azul font-bold titulo relative w-2/5 dark:text-dark-title">
          Chamadas Verificadas
        </h2>
        <p class="text-xl font-medium dark:text-dark-text">
          Esse novo recurso do Google, exclusivo para telefones Android,
          permite que empresas exibam para o cliente na hora da chamada sua
          marca, logotipo e até mesmo o motivo da chamada.
        </p>
        <p class="text-xl font-medium dark:text-dark-text">
          A Telecall é a primeira operadora de telecom no Brasil a oferecer
          esse recurso do Google.
        </p>
      </section>

      <section class="flex flex-col gap-7 px-4 w-full">
        <h2 class="text-3xl text-telecall-azul font-bold titulo relative w-1/4 dark:text-dark-title">
          Como funciona?
        </h2>
        <section class="flex flex-wrap gap-8 justify-center px-12 sm:justify-between w-full mx-auto">
          <div class="w-60 flex flex-col items-center gap-5">
            <figure>
              <img class="max-w-[200px]" src="../assets/img/google-verified-calls/atendente.png" alt="icone de atendente" />
            </figure>
            <p class="text-md font-medium text-justify dark:text-dark-text">
              Uma chamada telefônica de uma empresa assinante é feita para um
              cliente potencial ou existente.
            </p>
          </div>
          <div class="w-60 flex flex-col items-center gap-5 mt-10">
            <figure>
              <img class="max-w-[500px]" src="../assets/img/google-verified-calls/engrenagem.png" alt="icone de engrenagem" />
            </figure>
            <p class="text-md font-medium text-justify dark:text-dark-text">
              A solicitação é encaminhada para a Telecall, a chamada é
              processada e é adicionado as informações verificadas antes de
              encaminhá-la ao destinatário.
            </p>
          </div>
          <div class="w-60 flex flex-col items-center gap-5">
            <figure>
              <img class="max-w-[200px]" src="../assets/img/google-verified-calls/celular.png" alt="icone de celular" />
            </figure>
            <p class="text-md font-medium text-justify dark:text-dark-text">
              As informações aparecem na tela do celular do recipiente que
              atenderá a ligação com uma chamada de voz normal.
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
            <img class="max-w-[350px]" src="../assets/img/google-verified-calls/undraw_cloud_sync_re_02p1.svg" alt="imagem para simbolizar segurança" />
          </figure>
          <section class="md:w-1/2 md:ml-10">
            <ul class="flex flex-col justify-between h-full gap-3">
              <li class="flex gap-2">
                <i class="fa-solid fa-circle-check text-green-600 text-xl"></i>
                <p class="text-md font-medium text-justify dark:text-dark-text">
                  Estabeleça confiança, clientes são mais propensos a atender
                  chamadas de organizações com os quais estão familiarizadas e
                  com as quais já tem relação.
                </p>
              </li>
              <li class="flex gap-2">
                <i class="fa-solid fa-circle-check text-green-600 text-xl"></i>
                <p class="text-md font-medium text-justify dark:text-dark-text">
                  Melhore a experiência do cliente, clientes são mais
                  propensos a atender chamadas de organizações com os quais
                  estão familiarizadas e com as quais já tem relação.
                </p>
              </li>
              <li class="flex gap-2">
                <i class="fa-solid fa-circle-check text-green-600 text-xl"></i>
                <p class="text-md font-medium text-justify dark:text-dark-text">
                  Agiliza a conexão, quando o motivo da chamada é claro, a
                  chance de o cliente atender é muito maior e a conexão com
                  ele mais rápida e eficiente.
                </p>
              </li>
            </ul>
          </section>
        </section>
      </section>

      <section class="flex flex-col gap-7 px-6 w-full mt-5 relative">
        <h2 class="text-3xl text-telecall-azul font-bold titulo relative w-1/5 dark:text-dark-title">
          Casos de uso
        </h2>
        <section class="flex justify-between w-full">
          <ul class="flex flex-col gap-5 md:w-1/2">
            <li>
              <p class="text-lg font-medium dark:text-dark-text">
                Aviso de problemas de fraude de cartão de crédito.
              </p>
            </li>
            <li>
              <p class="text-lg font-medium dark:text-dark-text">
                Aviso de atrasos e cancelamentos de voos.
              </p>
            </li>
            <li>
              <p class="text-lg font-medium dark:text-dark-text">
                Agendamentos de serviços, entregas, reparos e instalações.
              </p>
            </li>
            <li>
              <p class="text-lg font-medium dark:text-dark-text">
                Avisos sobre agendamentos, exames e resultados.
              </p>
            </li>
            <li>
              <p class="text-lg font-medium dark:text-dark-text">
                Oferecer uma melhor experiência de vendas e promoções.
              </p>
            </li>
          </ul>
          <figure class="w-1/2 hidden md:flex justify-end">
            <img class="max-w-[300px]" src="../assets/img/google-verified-calls/Picture1.png" alt="icones diversos como aviao, caminhão pulso cardiaco, etc." />
          </figure>
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