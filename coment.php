<?php
$sql = "SELECT * FROM comentarios";
$conexao = new PDO('mysql:host=127.0.0.1;dbname=site','root','');
$resultado = $conexao->query($sql);
$lista = $resultado->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Comentarios</title>
		<link rel="stylesheet" href="rosto/modelo.css">
	</head>
	<body>
<div class="tela">
	<div class="header">
		<div class="titulo logo">
			<p class="glitch"> < - < Sedex > - ></p>
		</div>
			<div class="titulo menu">		
				<a href="index.html">Home</a>
				<a href="hobbies.html">hobbies</a>
				<a href="#pixel">Artes</a>
				<a href="coment.html">Comentarios</a>
			</div>
	</div>
		<div class="conteudo">
	 <div class="gatinho left">	
		<img src="rosto\imagens\gato.gif"
		onmouseover="this.src= 'rosto/imagens/gatoglitch.gif'"
		onmouseout="this.src='rosto/imagens/gato.gif'" >
	 </div>
					<div class="gatinho texto center">
				<h3 style=" color: cyan; text-align: center; margin-top:5%; ">Comentarios Recentes</h3>
                <?php foreach ($lista as $linha): ?>
		            	<div class="coment">
		        		<p class="recado"><?php echo $linha['comentario'] ?></p>			
			        	<h4 class="nome"><?php echo $linha['nome'] ?> - <?php echo $linha['turma'] ?></h4>
		    	        </div>
                 <?php endforeach ?>
			</div>
			<div class="gatinho right">
				<img src="rosto\imagens\gato.gif"
				onmouseover="this.src= 'rosto/imagens/gatoglitch.gif'"
				onmouseout="this.src='rosto/imagens/gato.gif'" >
			</div>


</div>
</div>
	</body>
</html>
