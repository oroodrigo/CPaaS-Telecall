<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Verificação de dois fatores - CPaaS</title>
  <link rel="icon" href="../assets/img/favicon.png" sizes="192x192" />
  <link rel="stylesheet" href="../assets/css/styles.css" />
  <script src="https://kit.fontawesome.com/9945e62804.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body class="h-screen flex flex-col bg-slate-200 font-Poppins dark:bg-dark-bg">
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

  <main class="flex-1 flex flex-col">
    <nav class="p-5">
      <ul class="breadcrumb">
        <li class="text-md text-blue-500 dark:text-dark-text">
          <a href="../index.php"> Início</a>
        </li>
        <li class="text-md text-blue-500  dark:text-dark-text">
          <a href="./login.php"> Login</a>
        </li>
        <li class="text-md text-blue-500 font-semibold cursor-pointer dark:text-dark-text">
          2FA
        </li>
      </ul>
    </nav>

    <section class="bg-gray-100 shadow-lg mx-auto w-1/2 p-3 rounded-md mb-24 mt-auto dark:bg-dark-container">
      <h1 class="text-lg md:text-2xl text-black text-center font-semibold ml-3 my-4">
        Verificação de duas etapas!
      </h1>
      <p class="tex-md text-black font-semibold text-center text-lg md:2xl ml-3 my-8">
        Nos ajude a manter a sua conta segura com uma verificação de segurança.
      </p>
      <form class="flex flex-col gap-4 w-full mx-auto justify-center items-center " id="form_2fa">
        <fieldset class="flex flex-col justify-center gap-2 w-3/4">
          <label class="text-md text-center md:text-left" for="pergunta_secreta">Selecione uma das perguntas abaixo.</label>
          <select class="border border-blue-500 w-full border-[1] rounded-md py-1 px-2 ml-2 dark:border-dark-input-border dark:bg-dark-input-bg" id="pergunta_secreta" name="pergunta_secreta" type="text" required>
            <option value="nome_materno">Qual o nome da sua mãe?</option>
            <option value="data_nascimento">Qual a data do seu nascimento?</option>
            <option value="cep">Qual o CEP do seu endereço?</option>
          </select>
        </fieldset>
        <fieldset class="flex flex-col gap-2 w-3/4">
          <label class="text-md text-center md:text-left" for="resposta_secreta">Digite a resposta abaixo.</label>
          <input class="border border-blue-500 border-[1] rounded-md w-full py-1 px-2 ml-2 dark:border-dark-input-border dark:bg-dark-input-bg" id="resposta_secreta" name="resposta_secreta" type="text" required>
          <span class="mensagem_erro text-red-600 ml-2"></span>
        </fieldset>
        <section class="flex flex-col justify-center items-center gap-2 w-full md:flex-row">
          <button id="enviar-btn" class="text-white font-normal bg-blue-500 rounded-md p-3 w-full sm:w-1/2 md:w-30 lg:w-40 my-4 hover:bg-blue-800 duration-150 dark:bg-dark-btn-azul dark:hover:bg-dark-btn-azul-hover">
            Enviar
          </button>
          <a href="./login.php" id="voltar-btn" class="text-white text-center font-normal bg-blue-500 rounded-md p-3 w-full sm:w-1/2  md:w-30 lg:w-40 my-4 hover:bg-blue-800 duration-150 dark:bg-dark-btn-azul dark:hover:bg-dark-btn-azul-hover">
            Voltar
          </a>
        </section>
      </form>
    </section>
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