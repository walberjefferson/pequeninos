<div class="pagina-estatica">
    <?php include('includes/header.php'); ?>

    <?php include("includes/redes_sociais.php"); ?>

    <div class="side-area-l">
        <div class="logo-area">
            <a href="profissionalizante.php" title="<?php $titulo_site; ?> - Pagina inicial" id="logo">
                <img class="" src="assets/images/logo-profissionalizante.jpg" alt="<?php echo $titulo_site; ?>">
            </a>
        </div>

        <div class="area-text">
            <div class="cont">
                <h3 class="area-text-titulo">Bem Vindo ao <br>Centro de Formação e Inclusão Profissional</h3>
                <div class="text-justify">
                    <p>O Centro de formação e inclusão profissional é um projeto de caráter profissionalizante que
                        preconiza em seu regimento interno a profissionalização de pessoas com alto nível de
                        subsistência da nossa comunidade e região, onde priorizamos a seleção de pessoas que não estejam
                        ingressadas no mercado de trabalho por falta de oportunidade e profissionalização.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim Side area L -->
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-4 col-xs-8 col-xs-offset-4 col-md-8 col-md-offset-3 col-lg-5 col-lg-offset-3">
            <div class="cont-area">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h3 class="titulo"></h3>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <?php for ($i = 1; $i <= 2; $i++) : ?>
                            <li data-target="#carousel-example-generic" data-slide-to="<?= $i; ?>"
                                class="<?= ($i == 1) ? 'active' : null; ?>"></li>
                        <?php endfor; ?>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php for ($i = 1; $i <= 2; $i++) : ?>
                            <div class="item <?= ($i == 1) ? 'active' : null; ?>">
                                <img src="galerias/profissionalizante/profissionalizante_<?= $i; ?>.jpg" class="">
                            </div>
                        <?php endfor; ?>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

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