<?php 
  include_once 'C:\xampp\htdocs\trabalhophp\MODEL\Produtos.php';
  include_once 'C:\xampp\htdocs\trabalhophp\BLL\Produtos.php'; 
  $ID = (int)$_GET['ID']; 
 // echo 'ID: ' . $id . "</br>";
  
  $bllProd = new BLL\Produtos();
  $produtos = $bllProd->SelectByID($ID);

 // echo "Descricao: ". $produtos->getDescricao() . "</br>";
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
    <title>Cadastrar Produtos</title>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="../js/init.js"></script>

</head>

<body>
    <?php include_once '../menu.php'; ?>
    <div class="container blue-grey lighten-5 white-text col s6">
        <div class="center blue-grey darken-4">
            <h1>Editar Produtos</h1>
        </div>
        <div class="container black-text">
            <form action="formEditProdutos.php" method="POST" class="col s6">
                <br>
                <div class="input-field col s8">
                    <input value="<?php echo $ID; ?>" id="funcionario" name="txtID" type="text"
                        class="lacuna validate">
                    <label class="form-produto" id="funcionario" for="funcionario">ID</label>
                </div>

                <div class="input-field col s8">
                    <input value="<?php echo $produtos->getNome(); ?>" id="nome" name="txtNome" type="text"
                        class="lacuna validate">
                    <label class="form-produto" for="nome">Nome</label>
                </div>

                <div class="input-field col s5">
                    <input value="<?php echo $produtos->getDescricao(); ?>" id="descricao" name="txtDescProduto" type="text"
                        class="lacuna validate">
                    <label class="form-produto" for="descricao">Descrição</label>
                </div>

                <div class="input-field col s8">
                    <input value="<?php echo $produtos->getPreco(); ?>" id="CPF" name="txtPreco" type="number"
                        class="lacuna validate">
                    <label class="form-produto" for="preco">Preço</label>
                </div>

                <div class="input-field col s8">
                    <input value="<?php echo $produtos->getCategoriaID(); ?>" id="categoriaId" name="txtCatId" type="number"
                        class="lacuna validate">
                    <label class="form-produto" for="categoriaID">Categoria ID</label>
                </div>

                <div class="input-field col s8">
                    <input value="<?php echo $produtos->getIngredientes(); ?>" id="ingrediente" name="txtIngredientes" type="text"
                        class="lacuna validate">
                    <label class="form-produto" for="ingrediente">Ingredientes</label>
                </div>

                <div class="center blue-grey lighten-5 white-text col s6">
                    <div class="center blue-grey darken-4 col s6">
                        <br>
                        <button class="waves-effect waves-light btn green" type="submit">
                            Salvar <i class="material-icons">save</i>
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
</body>

</html