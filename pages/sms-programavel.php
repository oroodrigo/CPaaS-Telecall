<?php
session_start();
if (empty($_SESSION["login"])){
  header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMS Programável - CPaas</title>
    <link rel="icon" href="../assets/img/favicon.png" sizes="192x192" />
    <link type="text/css" rel="stylesheet" href="../assets/css/styles.css" />
    <script
      src="https://kit.fontawesome.com/9945e62804.js"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body
    class="bg-slate-200 flex flex-col h-screen font-Poppins dark:bg-dark-bg"
  >
    <header
      class="bg-telecall-azul flex justify-between py-3 px-5 md:px-10 items-center"
    >
      <figure class="max-w-[150px] md:max-w-[200px]">
        <a href="../index.php"
          ><img
            src="../assets/img/logo_telecall_branco_vermelho_p.png"
            alt="Logo da Telecall"
          />
        </a>
      </figure>

      <section
        class="gap-10 items-center justify-center hidden md:flex md:justify-around menu-mobile z-10"
      >
        <div class="md:hidden">
          <i
            class="fa-solid fa-xmark self-end text-white text-2xl absolute top-5 right-7"
            id="close-menu-mobile"
          ></i>
        </div>
        <nav>
          <ul
            class="flex flex-col items-center justify-around gap-10 md:flex-row"
          >
            <li class="relative flex flex-col items-center">
              <p
                id="dropdown"
                class="text-white text-lg cursor-pointer select-none"
              >
                Serviços
                <i class="fa-solid fa-chevron-down text-white text-lg"></i>
              </p>
              <div
                id="menudropdown"
                class="w-[170px] md:w-[250px] max-h-0 top-10 static md:absolute bg-telecall-azul rounded overflow-hidden"
              >
                <ul class="w-full p-2">
                  <li class="w-full">
                    <a
                      class="text-white text-lg block rounded py-1 px-2 hover:bg-telecall-azul-hover"
                      href="./2fa.php"
                      >2FA</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-white text-lg block rounded py-1 px-2 hover:bg-telecall-azul-hover"
                      href="./numero-mascara.php"
                      >Número Máscara</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-white text-lg block rounded py-1 px-2 hover:bg-telecall-azul-hover"
                      href="./google-calls.php"
                      >Google Verified Calls</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-white text-lg block rounded py-1 px-2 hover:bg-telecall-azul-hover"
                      href="./sms-programavel.php"
                      >SMS Programável</a
                    >
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
          <i
            id="dark-btn"
            class="fa-solid fa-moon text-white text-lg cursor-pointer"
          ></i>
          <a
            class="text-white text-lg bg-telecall-vemelho hidden rounded-md px-3 py-1 hover:bg-telecall-vemelho-hover duration-150"
            href="./login.php"
            id="login-btn"
          >
            Entrar
            <i class="fa-solid fa-arrow-right ml-1 text-lg"></i
          ></a>

          <a
            href="../server/sair.php"
            class="text-white text-lg bg-telecall-vemelho hidden rounded-md px-3 py-1 hover:bg-telecall-vemelho-hover duration-150"
            id="logout-btn"
          >
            Sair
            <i class="fa-solid fa-arrow-right-to-bracket ml-1 text-lg"></i>
          </a>
        </section>
      </section>
      <div class="block md:hidden">
        <i
          class="fa-solid fa-bars text-white text-2xl"
          id="open-menu-mobile"
        ></i>
      </div>
    </header>

    <main>
      <article class="flex flex-col gap-10 my-5 p-3">
        <section class="flex justify-around py-6 w-full">
          <section
            class="flex flex-col items-center justify-center gap-5 text-center w-full md:w-1/2"
          >
            <h1
              class="text-3xl text-telecall-azul-hover font-bold dark:text-dark-title"
            >
              SMS Programável
            </h1>
            <h2
              class="text-xl text-telecall-azul font-semibold text-center dark:text-dark-text"
            >
              Conecte-se com seus clientes.
            </h2>
          </section>
          <figure class="w-1/2 hidden md:flex justify-center">
            <img
              class="max-w-[300px]"
              src="../assets/img/sms-programavel/undraw_personal_email_re_4lx7.svg  "
              alt=""
            />
          </figure>
        </section>

        <section class="flex flex-col gap-7 px-7 w-full mt-5">
          <h2
            class="text-3xl text-telecall-azul font-bold titulo relative w-1/5 dark:text-dark-title"
          >
            Benefícios
          </h2>
          <section class="flex mt-5">
            <figure class="w-1/2 hidden md:flex justify-center">
              <img
                class="max-w-[350px]"
                src="../assets/img/sms-programavel/undraw_messages_re_qy9x.svg"
                alt="imagem para simbolizar segurança"
              />
            </figure>
            <section class="md:w-1/2 md:pl-28">
              <ul class="flex flex-col justify-between h-full gap-3">
                <li class="flex gap-2">
                  <i
                    class="fa-solid fa-circle-check text-green-600 text-xl"
                  ></i>
                  <p class="text-md font-medium dark:text-dark-text">
                    Comunicação rápida, efetiva e escalável.
                  </p>
                </li>
                <li class="flex gap-2">
                  <i
                    class="fa-solid fa-circle-check text-green-600 text-xl"
                  ></i>
                  <p class="text-md font-medium dark:text-dark-text">
                    Baixo custo.
                  </p>
                </li>
                <li class="flex gap-2">
                  <i
                    class="fa-solid fa-circle-check text-green-600 text-xl"
                  ></i>
                  <p class="text-md font-medium dark:text-dark-text">
                    Personalização de data, hora e conteúdo.
                  </p>
                </li>
                <li class="flex gap-2">
                  <i
                    class="fa-solid fa-circle-check text-green-600 text-xl"
                  ></i>
                  <p class="text-md font-medium dark:text-dark-text">
                    Agendamento de campanhas.
                  </p>
                </li>
                <li class="flex gap-2">
                  <i
                    class="fa-solid fa-circle-check text-green-600 text-xl"
                  ></i>
                  <p class="text-md font-medium dark:text-dark-text">
                    Alta taxa de entrega e leitura.
                  </p>
                </li>
                <li class="flex gap-2">
                  <i
                    class="fa-solid fa-circle-check text-green-600 text-xl"
                  ></i>
                  <p class="text-md font-medium dark:text-dark-text">
                    Interação bidirecional: recebimento de respostas.
                  </p>
                </li>
              </ul>
            </section>
          </section>
        </section>

        <section class="flex flex-col gap-7 px-4 w-full mt-5">
          <h2
            class="text-3xl text-telecall-azul font-bold w-full pl-3 dark:text-dark-title"
          >
            Como funciona?
          </h2>
          <section class="flex mt-5">
            <section class="md:w-1/2 flex">
              <ul class="flex flex-col justify-between h-full gap-3 md:pl-16">
                <li class="flex gap-2">
                  <i
                    class="fa-solid fa-circle-check text-green-600 text-xl"
                  ></i>
                  <p class="text-md font-medium dark:text-dark-text">
                    O cliente abre o aplicativo e faz o pedido.
                  </p>
                </li>
                <li class="flex gap-2">
                  <i
                    class="fa-solid fa-circle-check text-green-600 text-xl"
                  ></i>
                  <p class="text-md font-medium dark:text-dark-text">
                    O entregador chega ao restaurante e o cliente ja é avisado.
                  </p>
                </li>
                <li class="flex gap-2">
                  <i
                    class="fa-solid fa-circle-check text-green-600 text-xl"
                  ></i>
                  <p class="text-md font-medium dark:text-dark-text">
                    Assim que o entregador inicia a rota o cliente recebe um
                    SMS.
                  </p>
                </li>
                <li class="flex gap-2">
                  <i
                    class="fa-solid fa-circle-check text-green-600 text-xl"
                  ></i>
                  <p class="text-md font-medium dark:text-dark-text">
                    O cliente vai sendo atualizado sobre cada status do seu
                    pedido.
                  </p>
                </li>
                <li class="flex gap-2">
                  <i
                    class="fa-solid fa-circle-check text-green-600 text-xl"
                  ></i>
                  <p class="text-md font-medium dark:text-dark-text">
                    Assim que o pedido é entregue é enviado um recibo.
                  </p>
                </li>
              </ul>
            </section>
            <figure class="w-1/2 hidden md:flex justify-center ml-3 md:ml-5">
              <img
                class="max-w-[300px]"
                src="../assets/img/sms-programavel/undraw_online_groceries_a02y.svg"
                alt="imagem para simbolizar segurança"
              />
            </figure>
          </section>
        </section>
      </article>
    </main>

    <footer
      class="bg-zinc-800 flex justify-between py-4 px-12 mt-5 gap-3 flex-wrap"
    >
      <section
        class="flex flex-col w-full items-center gap-2 xs:w-auto xs:items-start"
      >
        <h2 class="text-white text-md font-semibold tracking-wide sm:text-lg">
          Serviços
        </h2>
        <ul>
          <li>
            <a
              class="text-white/80 text-sm sm:text-md hover:text-white"
              href="./2fa.php"
              >2FA</a
            >
          </li>
          <li>
            <a
              class="text-white/80 text-sm sm:text-md hover:text-white"
              href="./numero-mascara.php"
              >Número Máscara</a
            >
          </li>
          <li>
            <a
              class="text-white/80 text-sm sm:text-md hover:text-white"
              href="./google-calls.php"
              >Google Verified Calls</a
            >
          </li>
          <li>
            <a
              class="text-white/80 text-sm sm:text-md hover:text-white"
              href="./sms-programavel.php"
              >SMS Programável</a
            >
          </li>
        </ul>
      </section>
      <section
        class="flex flex-col w-full items-center gap-2 xs:w-auto xs:items-start"
      >
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
            <a
              class="text-white/80 text-2xl hover:text-blue-700 duration-150"
              href="https://www.facebook.com/TelecallBr"
              target="_blank"
              ><i class="fa-brands fa-square-facebook"></i
            ></a>
          </li>
          <li>
            <a
              class="text-white/80 text-2xl hover:text-fuchsia-700 duration-150"
              href="https://www.instagram.com/telecallbr/"
              target="_blank"
              ><i class="fa-brands fa-instagram"></i
            ></a>
          </li>
          <li>
            <a
              class="text-white/80 text-2xl hover:text-sky-600 duration-150"
              href="https://www.linkedin.com/company/telecall/"
              target="_blank"
            >
              <i class="fa-brands fa-linkedin"></i
            ></a>
          </li>
        </ul>
        <a href="https://telecall.com" target="_blank" class="max-w-[130px]">
          <img
            src="../assets/img/logo_telecall_branco_vermelho_p.png"
            alt="logo da telecall"
          />
        </a>
      </section>
    </footer>

    <script type="module" src="../assets/js/script.js"></script>
  </body>
</html>
