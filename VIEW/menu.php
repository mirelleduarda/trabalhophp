 

<!DOCTYPE html>
<html lang="pt-br">
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
    <title>Cafeteria</title>
</head>
<body>
    <header>
        <img class="imgheader" src="/trabalhophp/images/header.png">
        <div class="imagemlogo">
            <img class="logoheader" src="/trabalhophp/images/logoheader.png"> 
        </div>
        <div class="tituloheader">
            <h1 class="titulo">Coffee House</h1>
        </div>
        
    </header>
    <nav class="nav-corpo brown darken-1">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo right">
                <div>
                    <i class="iconelogin"><span class="large material-icons">account_circle</span>  </i>
                    <!-- <i class="userlogin"><?php echo $_SESSION['login']; ?></i> -->
                </div>
            </a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="/trabalhophp/VIEW/inicio.php">Início</a></li>
                <li><a href="/trabalhophp/VIEW/Categoria/lstCategoria.php">Categorias</a></li>
                <li><a href="badges.html">Cardápio</a></li>
                <li><a href="collapsible.html">Funcionários</a></li>
                <li><a href="/trabalhophp/VIEW/Cargo/lstCargo.php">Cargos</a></li>
            </ul>
        </div>
    </nav>
    <!-- <section>
        <div class="grid-container">
            <div class="espacocafe1">
                <img class="espacocafe1" src="/trabalhophp/images/espacocafe1.png">
            </div>
            <div class="espacocafe2">
                <img class="espacocafe2" src="/trabalhophp/images/espacocafe2.png">
            </div>
        </div>
        
    </section> -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="/view/js/materialize.js"></script>
    <script src="/view/js/init.js"></script>
</body>
</html>
