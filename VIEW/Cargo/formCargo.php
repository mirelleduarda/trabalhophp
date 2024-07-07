<?php

    namespace VIEW\Cargo;
    include_once 'C:\xampp\htdocs\trabalhophp\DAL\conexao.php';
    include_once 'C:\xampp\htdocs\trabalhophp\DAL\Cargo.php';

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
    <title>Cadastrar Cargo</title>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="../js/init.js"></script>

</head>

<body>
    <?php include_once '../menu.php'; ?>
    <div class="container blue-grey lighten-5 white-text col s6">
        <div class="center blue-grey darken-4">
            <h1>Cadastrar de Cargo</h1>
        </div>
        <div class="container black-text">
            <form action="insCargo.php" method="POST" class="col s6">
                <br>
                <div class="input-field col s8">
                    <input placeholder="Informe o nome do cargo" id="nome" name="txtNome" type="text"
                        class="lacuna validate">
                    <label class="form-cargo" for="nome">Nome</label>
                </div>

                <div class="input-field col s5">
                    <input placeholder="informe a descrição do cargo" id="data-nascimento" name="txtDescricao" type="text"
                        class="lacuna validate">
                    <label class="form-cargo" for="compra">Descrição</label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o Salario Base do cargo (apenas números)" id="SalarioBase" name="txtSalarioBase" type="text"
                        class="lacuna validate">
                    <label class="form-cargo" for="SalarioBase">Salario Base</label>
                </div>

                <div class="center blue-grey lighten-5 white-text col s6">
                    <div class="center blue-grey darken-4 col s6">
                        <br>
                        <button class="waves-effect waves-light btn green" type="submit"
                            onclick="JavaScript:location.href='lstCargo.php'">
                            Gravar <i class="material-icons">save</i>
                        </button>
                        <button class="waves-effect waves-light btn red" type="reset">
                            Limpar <i class="material-icons">clear_all</i>
                        </button>
                        <button class="waves-effect waves-light btn blue" type="button"
                            onclick="JavaScript:location.href='lstCargo.php'">
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

</body>

</html