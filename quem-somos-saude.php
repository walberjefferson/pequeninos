<?php include('includes/header.php'); ?>
<div class="pagina-estatica">
    <?php include("includes/redes_sociais.php"); ?>

    <div class="side-area-l">
        <div class="logo-area">
            <a href="saude.php" title="<?php $titulo_site; ?> - Pagina inicial" id="logo">
                <img class="" src="assets/images/logo_saude.png" alt="<?php echo $titulo_site; ?>">
            </a>
        </div>

        <div class="area-text">
            <div class="cont">
                <h3 class="area-text-titulo">Bem Vindo ao <br>Projeto Pequeninos Saúde</h3>
                <div class="text-justify">
                    <p>Oferecer assistência básica na área da saúde, a população carente, com profissionais qualificados.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-4 col-xs-8 col-xs-offset-4 col-md-8 col-md-offset-3 col-lg-5 col-lg-offset-3">
                <div class="cont-area">
                    <br>
                    <br>
                    <br>
                    <br>
                    <h3 class="titulo">Saiba mais sobre nós</h3>
                    <p><strong>Objetivo Geral:</strong> Oferecer assistência básica na área da saúde, a população
                        carente, com profissionais qualificados.</p>
                    <p><strong>Publico Alvo::</strong> Toda a Comunidade local.</p>

                    <p>
                        <strong>Áreas de atuação:</strong>
                    <ul class="lista">
                        <li><i class="fa fa-circle"></i> Clínico Geral</li>
                        <li><i class="fa fa-circle"></i> Nutricionista</li>
                        <li><i class="fa fa-circle"></i> Psicologia</li>
                        <li><i class="fa fa-circle"></i> Odontologia</li>
                        <li><i class="fa fa-circle"></i> Fisioterapia</li>
                    </ul>
                    </p>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <div class="side-area-r">
        <?php include("includes/header-icons.php"); ?>
        <?php include("includes/menu.php"); ?>
    </div>

    <div class="img-bg bg-fix">
        <img src="./assets/images/bg_only.jpg" alt="">
    </div>

    <?php include('includes/footer.php'); ?>
</div>