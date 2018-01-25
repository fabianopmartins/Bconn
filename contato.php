<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> FM | Desenvolvimentos</title>
		<meta name="description" content="Foco em Desenvolvimento.">
		<meta name="keywords" content="Sites, Programas.">
		<meta name="author" content="Fabiano Martins">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">
		<link rel="icon" href="imagens/icon.png">
		<script type="text/javascript" src="javascript/jquery-3.3.1.js"></script>
	</head>
	<body>

		<!-- TOPO DO BOTÃÓ -->
		<div id="thisIsTheTop"></div>

		<!-- CABEÇALHO -->
		<header class="cabecalho container">
			<a href="index.html"><h1 class="logo"> FM | Desenvolvimentos</h1></a>
			<button class="btn-menu bg-gradiente bg-white"> <i class="fa fa-bars fa-lg" aria-hidden="true"></i> </button>
			<nav class="menu bg-white">	
				<a class="btn-close"><i class="fa fa-times"></i></a>
				<ul>
					<li><a class="bg-white" href="index.html">Quem Sou Eu</a></li>
					<li><a class="bg-white" href="portfolio.html">Portfólio</a></li>
					<li><a class="bg-white" href="contato.html">Contato</a></li>
				</ul>
			</nav>
		</header>		
		
		<!-- BANNER -->
		<div class="banner">
			<div class="title">
				<h2>Desenvolvedor Web Júnior</h2>
				<h3>Desenvolvimento de sites e programas com qualidade.</h3>
			</div>
		</div>

		<!-- CORPO DO SITE -->

			<!-- FORMULÁRIO DE CONTATOS -->

		<div class="container">
						
			<?php
				/*Variaveis do Formulario*/
				$nome = trim($_POST['txtnome']);
				$email = trim($_POST['txtemail']);
				$telefone = trim($_POST['txttelefone']);
				$mensagem = trim($_POST['txtmensagem']);

				$erros=1;

				if(($nome == "") || ($email == "") || ($telefone == "")) {
					$erros++;
						
			?>
					<script type="text/javascript" language="javascript">
						alert('Todos os Campos São Obrigatórios');
						window.location = "contatos.html";
					</script>
					<?php
				}

				/*verifica email, se digitado incorretamente*/
				$email = str_replace (" ", "", $email);
				$email = str_replace ("/", "", $email);
				$email = str_replace ("@.", "@", $email);
				$email = str_replace (".@", "@", $email);
				$email = str_replace (",", ".", $email);
				$email = str_replace (";", ".", $email);
				if(strlen($email)<8 || substr_count($email, "@")!=1 || substr_count($email, ".")==0) {
					$erros++;
					
					?>
					<script type="text/javascript" language="javascript">
						alert('Por favor, digite o E-mail corretamente');
						window.location = "contatos.html";
		 			</script>
					<?php
				}

					if($erros <= 1) {
						/*se não tiver algum erro continuara abaixo, se tiver é exibido as messagens configuradas acima*/
						/*Configuramos o e-mail para o qual serão enviadas as informações*/

						$remetente = "contato@fabianomartins.com.br";/*email de envio*/
						
						$seuemail = "fabiano.p.martins@gmail.com";/* email de destino*/

						/*Configuramos os cabeçalhos do e-mail*/
						$headers = "MIME-Version: 1.0\r\n";
						$headers .= "Content-type: text/html; charset=utf-8\r\n";/*para o envio com formatação HTML. Charset po ser iso-8859-1 também*/
						$headers .= "From: $remetente \r\n";/*Para "seu email"*/

						/*Configuramos o conteúdo do e-mail*/
						$conteudo = "Email enviado do site www.fabianomartins.com.br<br>";
						$conteudo .= "----------------------------------------<br>";
						$conteudo .= "<b>Nome:</b> $nome<br>";
						$conteudo .= "----------------------------------------<br>";
						$conteudo .= "<b>E-mail:</b> $email<br>";
						$conteudo .= "----------------------------------------<br>";
						$conteudo .= "<b>Telefone:</b> $telefone<br>";
						$conteudo .= "----------------------------------------<br>";
						$conteudo .= "<b>Mensagem:</b> $mensagem<br>";
						$conteudo .= "----------------------------------------<br>";
								
						/*Enviando o e-mail...*/
						$enviando = mail($seuemail, "www.fabianomartins.com.br", $conteudo, $headers);
						
						/*verifica se o e-mail foi enviado com sucesso*/
						if($enviando) {
					?>
							<br><br>							
							<table class="mensagem">		
								<tr valign="top">			
									<td align="center" >				
										<img src="imagens/ok.png" border="0"/>			
									</td>			
									<td align="left">				
										<font class="msgFont">
											Seu email foi enviado com sucesso!
										</font>
										<br>			
									</td>		
								</tr>		
							</table>
							<?php
						}else {
							?>
							<br><br>							
							<table class="mensagem">		
								<tr valign="top">			
									<td align="center" >				
										<img src="imagens/Erro.png" border="0"/>				
									</td>				
									<td align="left">					
										<font class="msgFont">
											Erro encontrado ao enviar o seu email !<br>
											Verifique o email informado !
										</font>
										<br>				
									</td>			
								</tr>		
							</table>
							<?php
						}
					}
							?>
		</div>

		<!-- BOTÃO VOLTAR PARA CIMA -->

		<img id="goToTopImg" src="imagens/arrow.png" border="0px" class="goToTop"  />

		<!-- RODAPÉ -->

		<footer class="rodape container bg-gradiente">
			<div class="social-icons">
				<a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
				<a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a>
				<a href="http://www.google.com"><i class="fa fa-google"></i></a>
				<a href="http://www.instagram.com"><i class="fa fa-instagram"></i></a>
				<a href="http://fabiano.p.martins@gmail.com"><i class="fa fa-envelope"></i></a>
			</div>
			<p class="copyright">Copyright &copy; FM 2018. Todos os direitos reservados.</p>
		</footer>
		<script type="text/javascript" src="javascript/script.js"></script>
	</body>
</html>