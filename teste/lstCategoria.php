<?php
  namespace VIEW\Categoria;
  include_once 'C:\xampp\htdocs\trabalhophp\BLL\Categoria.php';

  $bllCategoria = new \BLL\Categoria();
  $lstCategoria = $bllCategoria->Select();
?>

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
    <title>Listar Categorias</title>
</head>

<body>
    <?php include_once 'C:\xampp\htdocs\trabalhophp\VIEW\menu.php'; ?>
    
        <section>
            <div class="estilo-lista blue-grey lighten-5">
                <div class="center blue-grey darken-4">
                    <h1 class="titulo-lista white-text">Categorias</h1>
                </div>
                <table class=" highlight">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                    </tr>

                    <?php foreach ($lstCategoria as $categoria) { ?>
                        <tr>
                            <td><?php echo $categoria->getID(); ?></td>
                            <td><?php echo $categoria->getNome(); ?></td>
                            <td><?php echo $categoria->getDescricao(); ?></td>

                        </tr>
                    <?php } ?>
                </table>
            </div>
            <br>
        </section>

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
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html>