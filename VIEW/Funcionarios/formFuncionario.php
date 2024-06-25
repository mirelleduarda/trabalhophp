<?php

    namespace VIEW\Funcionario;
    include_once 'C:\xampp\htdocs\trabalhophp\DAL\conexao.php';
    include_once 'C:\xampp\htdocs\trabalhophp\DAL\Funcionario.php';

    session_start(); // Inicie a sessão
    $erro = isset($_SESSION['erro']) ? $_SESSION['erro'] : '';

?>


<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="logo.ico" href="/trabalhophp/images/logo.ico">
    <link rel="stylesheet" href="/trabalhophp/css/style.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Cadastrar Funcionário</title>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="../js/init.js"></script>

</head>

<body>
    <?php include_once '../menu.php'; ?>
    <div class="container blue-grey lighten-5 white-text col s6">
        <div class="center blue-grey darken-4">
            <h1>Cadastro de Funcionário</h1>
        </div>
        <div class="container black-text">
            <form action="insFuncionario.php" method="POST" class="col s6">
                <br>
                <div class="input-field col s8">
                    <input placeholder="Informe o nome do funcionário" id="nome" name="txtNome" type="text"
                        class="lacuna validate">
                    <label class="form-funcionario" for="nome">Nome</label>
                </div>

                <div class="input-field col s5">
                    <input placeholder="informe a data de nascimento do funcionário" id="data-nascimento" name="txtDataNascimento" type="date"
                        class="lacuna validate">
                    <label class="form-funcionario" for="compra">Data de Nascimento</label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o CPF do funcionário (apenas números)" id="CPF" name="txtCPF" type="text"
                        class="lacuna validate">
                    <label class="form-funcionario" for="CPF">CPF</label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o endereço do funcionário" id="endereco" name="txtEndereco" type="text"
                        class="lacuna validate">
                    <label class="form-funcionario" for="endereco">Endereço</label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe a cidade do funcionário" id="cidade" name="txtCidade" type="text"
                        class="lacuna validate">
                    <label class="form-funcionario" for="cidade">Cidade</label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o telefone do funcionário" id="telefone" name="txtTelefone" type="text"
                        class="lacuna validate">
                    <label class="form-funcionario" for="telefone">Telefone</label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o e-mail do funcionário" id="email" name="txtEmail" type="email"
                        class="lacuna validate">
                    <label class="form-funcionario" for="responsavel">E-mail</label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o ID do cargo do funcionário" id="cargoID" name="txtCargoID" type="text"
                        class="lacuna validate">
                    <label class="form-funcionario" for="cargoID">ID do Cargo</label>
                </div>
                <div class="center blue-grey lighten-5 white-text col s6">
                    <div class="center blue-grey darken-4 col s6">
                        <br>
                        <button class="waves-effect waves-light btn green" type="submit">
                            Gravar <i class="material-icons">save</i>
                        </button>
                        <button class="waves-effect waves-light btn red" type="reset">
                            Limpar <i class="material-icons">clear_all</i>
                        </button>
                        <button class="waves-effect waves-light btn blue" type="button"
                            onclick="JavaScript:location.href='lstFuncionario.php'">
                            Voltar <i class="material-icons">arrow_back</i>
                        </button>
                        <div><br></div>
                    </div>
                </div>
            </form>
            <br>
        </div>
    </div>
    
    <br>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var errorMessage = '<?php echo $erro; ?>';
        if (errorMessage) {
            var errorDiv = document.getElementById('error-message');
            if (errorDiv) { // Verifica se o elemento foi encontrado
                errorDiv.textContent = errorMessage;
                errorDiv.style.display = 'block';
                M.toast({html: errorMessage, classes: 'rounded red'});
            } else {
                console.error('Elemento com ID "error-message" não encontrado.');
            }
        }
        });
    </script>

</body>

</html