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
                <li><a href="/trabalhophp/VIEW/menu.php">Menu</a></li>
                <li><a href="/trabalhophp/VIEW/Categoria/lstCategoria.php">Categorias</a></li>
                <li><a href="badges.html">Cardápio</a></li>
                <li><a href="collapsible.html">Funcionários</a></li>
                <li><a href="/trabalhophp/VIEW/Cargo/lstCargo.php">Cargos</a></li>
            </ul>
        </div>
    </nav>
    <section>
        <div class="grid-container">
            <div class="espacocafe1">
                <img class="espacocafe1" src="/trabalhophp/images/espacocafe1.png">
            </div>
            <div class="espacocafe2">
                <img class="espacocafe2" src="/trabalhophp/images/espacocafe2.png">
            </div>
            <table>
                <p class="apresentacao__conteudo__texto">
                    Bem-vindo ao nosso refúgio aromático, onde cada
                    xícara conta uma história de paixão e precisão.
                    Em nossa cafeteria, não servimos apenas café; criamos
                    uma experiência sensorial que transcende o simples ato
                    de tomar uma bebida. Cada grão é escolhido com cuidado,
                    cada torra é uma sinfonia de sabores, e cada barista é um
                    artista, dedicado a transformar sua visita em um momento inesquecível.
                </p>
                
                <p class="apresentacao__conteudo__texto">
                    Nossa jornada começa nas plantações distantes, onde os melhores
                    grãos de café são colhidos à mão, com respeito pela terra e pelas
                    mãos que cultivam essa preciosidade. No coração de nossa operação
                    está o compromisso com a sustentabilidade e a qualidade, garantindo
                    que cada xícara seja uma celebração do trabalho árduo dos produtores
                    e da magia que o café carrega.
                </p>

                <p class="apresentacao__conteudo__texto">
                    Ao entrar em nossa cafeteria, você é recebido por um ambiente acolhedor,
                    onde o aroma do café recém-moído dança no ar. Nossos baristas apaixonados
                    estão prontos para guiá-lo por uma jornada de sabores, oferecendo não apenas
                    bebidas exclusivas, mas também uma narrativa que conecta cada cliente à riqueza
                    do café. Sinta-se em casa, relaxe e permita que cada gole o transporte para um
                    universo de aromas e sensações, onde a simplicidade de uma xícara de café se torna
                    uma experiência única e específica.
                </p>
            </table>    
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="/view/js/materialize.js"></script>
    <script src="/view/js/init.js"></script>
</body>
</html>
