<?php 
	require_once 'modules/wt-api.php';
	$num = mt_rand(10, 100);
	$wt = new wt_api($num);
	$bit = $wt->valor_bitcoin();	
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="description" content="A página indica o valor de 1 Bitcoin em R$ no momento atual.">
		<meta name="author" content="Lucas dos Santos Silva">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet"> 
		<link rel="icon" href="img/icon.png">
		<title>Compre 1 Bitcoin</title>
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	</head>
	<body>
		<main class="quantocusta">
			<article class="preco">
				<h1>Quanto custa 1 Bitcoin?</h1>

				<div class="valor">
					<?php if($wt->is_error() == false); ?>
					<p> R$ <?php echo(str_replace('.',',',$bit['lowest_ask_inexact'])); ?> </p>	
					<p class="aviso">Pode haver atrasos na atualização dos valores.</p>		 	
				</div>
					<center><a href="index.php" class="atualizar">Atualizar</a></center>
			</article>
		</main>

		<div class = "relogio" id="real-clock">
			<script type="text/javascript">
				var clock = document.getElementById('real-clock');
    			setInterval(function () {
    			clock.innerHTML = ((new Date).toLocaleString().substr(11, 8));}, 1000);
			</script>
		</div>
	</body>
</html>