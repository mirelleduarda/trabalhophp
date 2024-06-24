<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="logo.ico" href="/trabalhophp/images/logo.ico">
    <link rel="stylesheet" href="/trabalhophp/css/style.css">
    <link rel="stylesheet" href="/trabalhophp/css/carrossel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
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
                <li><a href="/trabalhophp/VIEW/Funcionarios/lstFuncionario.php">Funcionários</a></li>
                <li><a href="/trabalhophp/VIEW/Cargo/lstCargo.php">Cargos</a></li>
            </ul>
        </div>
    </nav>
    <!-- Carrossel -->
    <div class="slider">
        <div class="list">
            <div class="item">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiypFq4hLSiDgv6yIAVaUkYldYEUO1Yxhn0N3b3ARYY-j4rImmfi7jwQXf-9C_KOzJN3QlvcC85DqyWgTMUHZfelygmPODYqoiusL0tNq7VTsmzNEPFAGypEPjKjViS3ol8h0xA7AmvspA1CVtsXFRN0gEd3muPa2sz6u0GFcny1C8Ar0c5RDNhrmo91sY/s1620/cafe_el_obraje_cover.jpg" alt="">
            </div>
            <div class="item">
                <img src="\trabalhophp\images\espacocafe2.png" alt="">
            </div>
            <div class="item">
                <img src="\trabalhophp\images\espacocafe1.png" alt="">
            </div>
            <div class="item">
                <img src="https://images.adsttc.com/media/images/5cdb/1cab/284d/d1a5/0a00/0129/large_jpg/filippearaujo-4454.jpg?1557863564" alt="">
            </div>
        </div>
        <div class="buttons">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <ul class="dots">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <br>
    <div class="estilo-lista brown lighten-4">
        
        <p class="apresentacao__conteudo__texto">
            Bem-vindo ao nosso refúgio aromático, onde cada
            xícara conta uma história de paixão e precisão.
            Em nossa cafeteria, não servimos apenas café; criamos
            uma experiência sensorial que transcende o simples ato
            de tomar uma bebida. Cada grão é escolhido com cuidado,
            cada torra é uma sinfonia de sabores, e cada barista é um
            artista, dedicado a transformar sua visita em um momento inesquecível.
            
        </p>
        <br>
        <p class="apresentacao__conteudo__texto">
            Nossa jornada começa nas plantações distantes, onde os melhores
            grãos de café são colhidos à mão, com respeito pela terra e pelas
            mãos que cultivam essa preciosidade. No coração de nossa operação
            está o compromisso com a sustentabilidade e a qualidade, garantindo
            que cada xícara seja uma celebração do trabalho árduo dos produtores
            e da magia que o café carrega.
        </p>
        <br>
        <p class="apresentacao__conteudo__texto">
            Ao entrar em nossa cafeteria, você é recebido por um ambiente acolhedor,
            onde o aroma do café recém-moído dança no ar. Nossos baristas apaixonados
            estão prontos para guiá-lo por uma jornada de sabores, oferecendo não apenas
            bebidas exclusivas, mas também uma narrativa que conecta cada cliente à riqueza
            do café. Sinta-se em casa, relaxe e permita que cada gole o transporte para um
            universo de aromas e sensações, onde a simplicidade de uma xícara de café se torna
            uma experiência única e específica.
        </p>
    </div>
    <br>
    <footer class="rodape">
        <section class="footer">
            <div class="footer-row">
                <div class="footer-col">
                <h4>Informações</h4>
                <ul class="links">
                    <li><a href="#">Sobre nós</a></li>
                    <li><a href="#">Compressões</a></li>
                    <li><a href="#">Clientes</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Coleção</a></li>
                </ul>
                </div>

                <div class="footer-col">
                <h4>Obter Ajuda</h4>
                <ul class="links">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Envio</a></li>
                    <li><a href="#">Devoluções</a></li>
                    <li><a href="#">Status do Pedido</a></li>
                    <li><a href="#">Opções de Pagamento</a></li>
                </ul>
                </div>

                <div class="footer-col">
                <h4>Links Rápidos</h4>
                <ul class="links">
                    <li><a href="#">Termos e Condições</a></li>
                    <li><a href="#">Política de Privacidade</a></li>
                    <li><a href="#">Isenção de responsabilidade</a></li>
                </ul>
                </div>

                <div class="footer-col">
                <h4>Comunidades</h4>
                <ul class="links">
                    <li><a href="#">Eventos</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="#">Rede de Parceiros</a></li>
                </ul>

                <div class="icons">
                    <i class="fa-brands fa-whatsapp" onclick="window.location.href='https://wa.me/5518123456789'"></i>
                    <i class="fa-brands fa-instagram" onclick="window.location.href='https://www.instagram.com/'"></i>
                    <i class="fa-brands fa-facebook-f" onclick="window.location.href='https://www.facebook.com/?locale=pt_BR'"></i>
                    <i class="fa-regular fa-envelope" onclick="window.location.href='https://www.google.com/intl/pt-BR/gmail/about/'"></i>  
                </div>
                </div>
            </div>
        </section>
    </footer>  
        
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="/trabalhophp/VIEW/js/materialize.js"></script>
    <script src="/trabalhophp/VIEW/js/init.js"></script>
    <script src="/trabalhophp/VIEW/js/script.js"></script>
</body>
</html>
