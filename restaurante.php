<?php include('includes/header.php'); ?>

<?php include("includes/redes_sociais.php"); ?>

<div class="side-area-l">
	<div class="logo-area">
		<a href="restaurante.php" title="<?php $titulo_site; ?> - Pagina inicial" id="logo">
			<img class="" src="assets/images/logo-restaurante.jpg" alt="<?php echo $titulo_site; ?>">
		</a>
	</div>
	
	<div class="area-text">
		<div class="cont">
            <h3 class="area-text-titulo">Bem Vindo ao <br>Projeto Pequeninos Restaurante Social</h3>
			<div class="text-justify">
                <p>No segundo semestre de 2015, diante do auto nível de subsistência de muitas famílias em nossa cidade,
                    surge um novo projeto o centro de formação e geração de renda denominado Restaurante Social
                    Pequeninos, onde foram cadastradas inicialmente 50 famílias, em estado de vulnerabilidade.</p>
			</div>
		</div>
	</div>
</div>

<div class="side-area-r">
	<?php include("includes/header-icons.php"); ?>
	<?php include("includes/menu.php"); ?>
</div>

<div class="img-bg bg-height bg-restaurante">
<!--	<img src="./assets/images/img-bg-restaurante.jpg" alt="">-->
</div>

<?php include('includes/footer.php'); ?>