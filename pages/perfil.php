<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - CPaaS</title>
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
      <a href="../index.php
        "><img src="../assets/img/logo_telecall_branco_vermelho_p.png" alt="Logo da Telecall" />
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
            session_start();
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
            <a class="text-white text-lg" href="../index.php
              #sobre">Sobre</a>
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

  <main class="flex-1 flex flex-col pb-10">
    <nav class="p-5">
      <ul class="breadcrumb">
        <li class="text-md text-blue-500 dark:text-dark-text">
          <a href="../index.php
            ">Início</a>
        </li>
        <li class="text-md text-blue-500 font-semibold cursor-pointer dark:text-dark-text">
          Perfil
        </li>
      </ul>
    </nav>

    <section id="box-login" class="flex justify-evenly flex-col items-center bg-gray-100 shadow-lg mx-auto w-4/5 p-3 gap-3 rounded-md my-auto lg:flex-row sm:w-1/2 dark:bg-dark-container">
      <section class="flex flex-col justify-center items-center pl-2 gap-10 lg:w-1/2">
        <h1 class="text-lg font-semibold pt-5 lg:mx-auto lg:text-xl">
          Veja e edite os dados da sua conta!
        </h1>
        <figure class="hidden lg:block">
          <img src="../assets/img/undraw_control_panel_re_y3ar.svg" alt="Homem mexendo em um painel de controle." />
        </figure>
      </section>
      <section class="flex flex-col p-5 rounded-lg" id="account_info">
        <?php
        echo "
          <fieldset class='flex flex-col gap-2 mt-5'>
            <label class='font-medium' for='nome'>Nome</label>
            <input class='rounded-md py-1 px-2 ml-2 w-full dark:bg-dark-input-bg focus:outline-none' id='nome' name='nome' type='text' readonly value='{$_SESSION['nome']}' />
          </fieldset>
          <fieldset class='flex flex-col gap-2 mt-5'>
            <label class='font-medium' for='nomeMaterno'>Nome da Mãe</label>
            <input class='rounded-md py-1 px-2 ml-2 w-full dark:bg-dark-input-bg focus:outline-none' id='nomeMaterno' name='nomeMaterno' type='text' readonly value='{$_SESSION['nomeMaterno']}' />
          </fieldset>
          <fieldset class='flex flex-col gap-2 mt-5'>
            <label class='font-medium' for='cpf'>CPF</label>
            <input class='rounded-md py-1 px-2 ml-2 w-full dark:bg-dark-input-bg focus:outline-none' id='cpf' name='cpf' type='text' readonly value='{$_SESSION['cpf']}' />
          </fieldset>
          <fieldset class='flex flex-col gap-2 mt-5'>
            <label class='font-medium' for='cep'>CEP</label>
            <input class='rounded-md py-1 px-2 ml-2 w-full dark:bg-dark-input-bg focus:outline-none' id='cep' name='cep' type='text' readonly value='{$_SESSION['cep']}' />
          </fieldset>
          <form class='flex flex-col gap-5' id='form_newPassword'>
            <div class='flex flex-col gap-3 md:flex-row' >
              <fieldset class='flex flex-col w-full md:w-2/3 gap-2 mt-5'>
                <label class='font-medium' for='senha'>Nova Senha</label>
                <div class='flex items-center border bg-white border-blue-500 border-[1] rounded-md w-full py-1 px-2 ml-2 gap-2 dark:border-dark-input-border dark:bg-dark-input-bg'>
                  <input class='border-none bg-transparent w-full focus:outline-none' id='senha' name='senha' type='password' autocomplete='off' minlength='8' data-mask='password' pattern='[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ]+$' required />
                  <i class='fa-solid fa-eye text-lg cursor-pointer show-btn'></i>
                </div>
              </fieldset>
              <button type='submit' id='entrar-btn' class='text-white border border-blue-500 bg-blue-500 rounded-md ml-2 py-1 px-2 w-full self-auto md:w-1/3 md:self-end
              hover:border-blue-600 hover:bg-blue-600 dark:border-dark-btn-azul dark:bg-dark-btn-azul dark:hover:border-dark-btn-azul-hover dark:hover:bg-dark-btn-azul-hover duration-150'>
                Trocar
              </button>
            </div>
            <span class='mensagem_erro text-red-600 ml-2'></span>
          </form>
          ";
        ?>
      </section>
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
  <script type="module" src="../assets/js/changePassword.js"></script>
</body>

</html>