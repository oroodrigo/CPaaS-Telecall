<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastro - CPaaS</title>
  <link rel="icon" href="../assets/img/favicon.png" sizes="192x192" />
  <link rel="stylesheet" href="../assets/css/styles.css" />
  <script src="https://kit.fontawesome.com/9945e62804.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body class="bg-slate-200 font-Poppins dark:bg-dark-bg">
  <header class="bg-telecall-azul flex justify-between py-3 px-10 items-center">
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

        <a 
          href="../server/sair.php"
          class="text-white text-lg bg-telecall-vemelho hidden rounded-md px-3 py-1 hover:bg-telecall-vemelho-hover duration-150" id="logout-btn">
          Sair
          <i class="fa-solid fa-arrow-right-to-bracket ml-1 text-lg"></i>
        </a>
      </section>
    </section>
    <div class="block md:hidden">
      <i class="fa-solid fa-bars text-white text-2xl" id="open-menu-mobile"></i>
    </div>
  </header>

  <main>
    <nav class="p-5">
      <ul class="breadcrumb">
        <li class="text-md text-blue-500 dark:text-dark-text">
          <a href="../index.php"> Início</a>
        </li>
        <li class="text-md text-blue-500 font-semibold cursor-pointer dark:text-dark-text">
          Cadastro
        </li>
      </ul>
    </nav>
    <div class="flex flex-col justify-center items-center bg-gray-100 shadow-lg mx-auto w-4/5 p-3 gap-3 rounded-md mb-10 sm:w-1/2 dark:bg-dark-container">
      <figure>
        <img class="mt-5 mx-auto" id="barraDeEstagio" src="../assets/img/status-1.png" alt="barra de estagio 1" />
      </figure>
      <h1 class="text-center text-3xl font-semibold p-10">
        Preencha os campos abaixo para criar sua conta!
      </h1>
      <form class="flex flex-col gap-2 w-full mx-auto justify-center items-center" id="form_userInfo">
      <section id="cadastro1" class="flex flex-col justify-center items-center">
        <fieldset class="flex flex-col gap-2 w-3/4">
          <label class="font-medium text-md" for="nome">Nome</label>
          <input class="border border-blue-500 border-[1] rounded-md w-full py-1 px-2 ml-2 dark:border-dark-input-border dark:bg-dark-input-bg" id="nome" name="nome" type="text" placeholder="Ex: Hemiliano da Silva Figueiredo" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$" minlength="15" maxlength="60" required />
          <span class="mensagem_erro text-red-600 ml-2"></span>
        </fieldset>
        <div class="flex flex-col gap-2 w-3/4 lg:flex-row lg:gap-20 xl:gap-32">
          <fieldset class="flex flex-col xl:w-3/4 gap-2">
            <label class="font-medium text-md" for="nascinemnto">Nascimento</label>
            <input class="border border-blue-500 border-[1] rounded-md py-1 px-2 ml-2 dark:border-dark-input-border dark:bg-dark-input-bg" id="nascimento" name="nascimento" type="date" required />
            <span class="mensagem_erro text-red-600 ml-2"></span>
          </fieldset>
          <fieldset class="flex flex-col items-start gap-2 xl:w-3/4 2xl:items-center">
            <legend class="font-medium text-md">Sexo</legend>
            <div class="flex flex-col gap-2 self-start flex-wrap ml-2 mt-2 2xl:flex-row">
              <div class="flex gap-1">
                <input id="feminino" name="sexo" value="feminino" type="radio" required />
                <label class="font-normal" for="feminino">Feminino</label>
              </div>
              <div class="flex gap-1">
                <input id="masculino" name="sexo" value="masculino" type="radio" required />
                <label class="font-normal" for="masculino">Masculino</label>
              </div>
              <div class="flex gap-1">
                <input id="prefiro_nao_responder" name="sexo" value="prefiro_nao_responder" type="radio" required />
                <label class="font-normal" for="prefiro_nao_responder">Prefiro não responder</label>
              </div>
            </div>
            <span class="mensagem_erro text-red-600 ml-2"></span>
          </fieldset>
        </div>
        <fieldset class="flex flex-col gap-2 w-3/4">
          <label class="font-medium text-md" for="nome_materno">Nome Materno</label>
          <input class="border border-blue-500 border-[1] rounded-md w-full py-1 px-2 ml-2 dark:border-dark-input-border dark:bg-dark-input-bg" id="nome_materno" name="nome_materno" type="text" placeholder="Ex: Maria das Dores da Silva" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$" required />
          <span class="mensagem_erro text-red-600 ml-2"></span>
        </fieldset>
        <fieldset class="flex flex-col gap-2 w-3/4">
          <label class="font-medium text-md" for="cpf">CPF</label>
          <input class="mask border border-blue-500 border-[1] rounded-md w-full py-1 px-2 ml-2 dark:border-dark-input-border dark:bg-dark-input-bg" minlength="11" id="cpf" name="cpf" type="text" data-mask="cpf" placeholder="000.000.000-00" pattern="\d{3}\.?\d{3}\.?\d{3}\.?-?\d{2}" autocomplete="off" required />
          <span class="mensagem_erro text-red-600 ml-2"></span>
        </fieldset>
        <div class="flex flex-col gap-2 w-3/4 lg:flex-row lg:gap-20 xl:gap-32">
          <fieldset class="flex flex-col xl:w-3/4 gap-2">
            <label class="font-medium text-md" for="celular">Celular</label>
            <input class="mask border border-blue-500 border-[1] rounded-md w-full py-1 px-2 ml-2 dark:border-dark-input-border dark:bg-dark-input-bg" id="celular" name="celular" type="text" data-mask="phone" placeholder="xx-xxxxxxxxx" required />
            <span class="mensagem_erro text-red-600 ml-2"></span>
          </fieldset>
          <fieldset class="flex flex-col xl:w-3/4 gap-2">
            <label class="font-medium text-md" for="telefone">Telefone</label>
            <input class="mask border border-blue-500 border-[1] rounded-md w-full py-1 px-2 ml-2 dark:border-dark-input-border dark:bg-dark-input-bg" id="telefone" name="telefone" type="text" data-mask="phone" placeholder="xx-xxxxxxxx" required />
            <span class="mensagem_erro text-red-600 ml-2"></span>
          </fieldset>
        </div>
        <fieldset class="flex flex-col gap-2 w-3/4">
          <label class="font-medium text-md" for="login">Login</label>
          <input class="border border-blue-500 border-[1] rounded-md w-full py-1 px-2 ml-2 dark:border-dark-input-border dark:bg-dark-input-bg" id="login_cadastro" name="login_cadastro" type="text" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$" minlength="6" maxlength="6" required />
          <span class="mensagem_erro text-red-600 ml-2"></span>
        </fieldset>
        <fieldset class="flex flex-col gap-2 w-3/4">
          <label class="font-medium text-md" for="senha">Senha</label>
          <div class="flex items-center border bg-white border-blue-500 border-[1] rounded-md w-full py-1 px-2 ml-2 gap-2 dark:border-dark-input-border dark:bg-dark-input-bg">
            <input class="w-full bg-transparent border-none focus:outline-none" id="senha" name="senha" type="password" minlength="8" autocomplete="off" data-mask="password" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$" required />
            <i class="fa-solid fa-eye text-lg cursor-pointer show-btn"></i>
          </div>
          <span class="mensagem_erro text-red-600 ml-2"></span>
        </fieldset>
        <fieldset class="flex flex-col gap-2 w-3/4">
          <label class="font-medium text-md" for="confirma_senha">Confirmar Senha</label>
          <div class="flex items-center border bg-white border-blue-500 border-[1] rounded-md w-full py-1 px-2 ml-2 gap-2 dark:border-dark-input-border dark:bg-dark-input-bg">
            <input class="w-full bg-transparent border-none focus:outline-none" id="confirma_senha" name="confirma_senha" type="password" minlength="8" autocomplete="off" data-mask="password" required />
            <i class="fa-solid fa-eye text-lg cursor-pointer show-btn"></i>
          </div>
          <span class="mensagem_erro text-red-600 ml-2"></span>
        </fieldset>
        <div>
          <button id="avançar-btn" class="text-white font-normal bg-blue-500 rounded-md p-3 w-40 my-4 hover:bg-blue-800 duration-150 dark:bg-dark-btn-azul dark:hover:bg-dark-btn-azul-hover">
            Avançar
          </button>
          <span></span>
        </div>
        </section>
        <section id="cadastro2" class="flex-col justify-center items-center hidden">
          <fieldset class="flex flex-col gap-2 w-3/4">
            <label for="cep">CEP</label>
            <input
              class="border border-blue-500 border-[1] rounded-md w-full py-1 px-2 ml-2 dark:border-dark-input-border dark:bg-dark-input-bg"
              id="cep"
              name="cep"
              type="text"
              placeholder="Digite seu CEP"
              minlength="8"
              required
            />
            <span class="text-red-600 ml-2 mensagem_erro"></span>
          </fieldset>
          <fieldset class="flex flex-col gap-2 w-3/4">
            <label for="endereco">Endereço</label>
            <input
              class="border border-blue-500 border-[1] rounded-md w-full py-1 px-2 ml-2 dark:border-dark-input-border dark:bg-dark-input-bg"
              id="endereco"
              name="endereco"
              type="text"
              placeholder="Digite seu endereço"
              required
            />
            <span></span>
          </fieldset>
          <div class="flex flex-col gap-2 w-3/4 xl:flex-row xl:gap-20">
            <fieldset class="flex flex-col gap-2 xl:w-3/4">
              <label for="endereco_numero">Número</label>
              <input
                class="border border-blue-500 w-full border-[1] rounded-md py-1 px-2 ml-2 dark:border-dark-input-border dark:bg-dark-input-bg"
                id="endereco_numero"
                name="endereco_numero"
                type="number"
                placeholder="Número"
                required
              />
              <span></span>
            </fieldset>
            <fieldset class="flex flex-col gap-2 xl:w-3/4">
              <label for="endereco_complemento">Complemento</label>
              <input
                class="border border-blue-500 w-full border-[1] rounded-md py-1 px-2 ml-2 dark:border-dark-input-border dark:bg-dark-input-bg"
                id="endereco_complemento"
                name="endereco_complemento"
                type="text"
                placeholder="(opcional)"
              />
              <span></span>
            </fieldset>
          </div>
          <fieldset class="flex flex-col gap-2 w-3/4">
            <label for="bairro">Bairro</label>
            <input
              class="border border-blue-500 border-[1] rounded-md w-full py-1 px-2 ml-2 dark:border-dark-input-border dark:bg-dark-input-bg"
              id="bairro"
              name="bairro"
              type="text"
              placeholder="Digite o seu bairro"
              required
            />
            <span></span>
          </fieldset>
          <div class="flex flex-col gap-2 w-3/4 xl:flex-row xl:gap-20">
            <fieldset class="flex flex-col gap-2 xl:w-3/4">
              <label for="cidade">Cidade</label>
              <input
                class="border border-blue-500 w-full border-[1] rounded-md py-1 px-2 ml-2 dark:border-dark-input-border dark:bg-dark-input-bg"
                id="cidade"
                name="cidade"
                type="text"
                placeholder="Digite a sua cidade"
                required
              />
              <span></span>
            </fieldset>
            <fieldset class="flex flex-col gap-2 xl:w-3/4">
              <label for="estado">Estado</label>
              <select
                class="border border-blue-500 w-full border-[1] rounded-md py-1 px-2 ml-2 dark:border-dark-input-border dark:bg-dark-input-bg"
                id="estado"
                name="estado"
                type="text"
                placeholder="Complemento"
                required
              >
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espirito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
                <option value="EX">Estrangeiro</option>
              </select>
            </fieldset>
          </div>
          <div>
            <button
              id="enviar-btn"
              class="text-white bg-blue-500 rounded-md p-3 w-40 my-4 hover:bg-blue-800 duration-150 dark:bg-dark-btn-azul dark:hover:bg-dark-btn-azul-hover"
              type="submit"
            >
              Avançar
            </button>
            <span></span>
          </div>
        </section>
      </form>
    </div>
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
  <script type="module" src="../assets/js/main.js"></script>
  <script type="module" src="../assets/js/validations/busca-cep.js"></script>
</body>

</html>