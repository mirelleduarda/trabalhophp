<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <title>Cadastrar Funcionário</title>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="../js/init.js"></script>
    
    <?php include_once 'C:\xampp\htdocs\lpadsphpt1\lpadsphpt120240606\BLL\Departamento.php' ?>

</head>

<body>
    <?php include_once '../menu.php'; ?>
    <div class="container blue-grey lighten-5 white-text col s6">
        <div class="center  blue-grey darken-4">
            <h1>Cadastro de Funcionário</h1>
        </div>
        <div class="container black-text">
            <form action="insInventario.php" method="POST" class="col s6">
                <br>
                <div class="input-field col s8">
                    <input placeholder="informe o id do software" id="software" name="txtSft" type="text"
                        class="validate">
                    <label class="form-funcionario" id="software" for="software">ID</label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o id do Equipamento" id="equipamento" name="txtEqpto" type="text"
                        class="validate black-text">
                    <label class="form-funcionario" for="responsavel">Nome</label>
                </div>

                <div class="input-field col s5">
                    <input placeholder="informe a data de instalação" id="instalacao" name="txtInst" type="date"
                        class="lacuna validate">
                    <label class="form-funcionario" for="compra">Data de Nascimento</label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o id do Equipamento" id="equipamento" name="txtEqpto" type="text"
                        class="validate">
                    <label class="form-funcionario" for="responsavel">CPF</label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o id do Equipamento" id="equipamento" name="txtEqpto" type="text"
                        class="validate">
                    <label class="form-funcionario" for="responsavel">Enderço</label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o id do Equipamento" id="equipamento" name="txtEqpto" type="text"
                        class="validate">
                    <label class="form-funcionario" for="responsavel">Cidade</label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o id do Equipamento" id="equipamento" name="txtEqpto" type="text"
                        class="validate">
                    <label class="form-funcionario" for="responsavel">Telefone</label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o id do Equipamento" id="equipamento" name="txtEqpto" type="text"
                        class="validate">
                    <label class="form-funcionario" for="responsavel">Email</label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o id do Equipamento" id="equipamento" name="txtEqpto" type="text"
                        class="validate">
                    <label class="form-funcionario" for="responsavel">ID do Cargo</label>
                </div>

                <div class="brown lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit">
                        Gravar <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn red" type="reset">
                        Limpar <i class="material-icons">clear_all</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button"
                        onclick="JavaScript:location.href='lstEquipamento.php'">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                    <br>
                    <br>
                </div>
            </form>
        </div>
    </div>
</body>

</html