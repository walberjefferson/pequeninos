<div class="pagina-estatica">
    <?php include('includes/header.php'); ?>

    <?php include("includes/redes_sociais.php"); ?>

    <div class="side-area-l">
        <div class="logo-area logo-teens">
            <a href="pequeninos-teens.php" title="<?php $titulo_site; ?> - Pagina inicial" id="logo">
                <img class="" src="assets/images/logo_teens.png" alt="<?php echo $titulo_site; ?>">
            </a>
        </div>

        <div class="area-text">
            <div class="cont">
                <h3 class="area-text-titulo">Bem Vindo ao Projeto Pequeninos Teens</h3>

                <p class="text-justify">Em dezembro de 2014 surgiu outro projeto, o Pequeninos Teens, com o intuito de
                    capacitar e profissionalizar adolescentes e jovens, com faixa etária de 13 à 20 anos, com cursos de
                    computação; mecânica de auto; mecânica de moto; musica; massagens e estética corporal; desenho
                    artístico; corte e escova; colorimetria capilar; eletricidade predial, entre outros. Todos os cursos
                    são oferecidos de forma gratuita à 400 jovens, desenvolvendo estes para o mercado de trabalho e
                    despertando nestes o sonho de ser um profissional qualificado, onde em muitos casos eles já nem
                    almejavam mais isso.</p>
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
                <br>
                <br>
                <h3 class="titulo"></h3>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <?php for ($i = 1; $i <= 15; $i++) : ?>
                            <li data-target="#carousel-example-generic" data-slide-to="<?= $i; ?>"
                                class="<?= ($i == 1) ? 'active' : null; ?>"></li>
                        <?php endfor; ?>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php for ($i = 1; $i <= 15; $i++) : ?>
                            <div class="item <?= ($i == 1) ? 'active' : null; ?>">
                                <img src="galerias/teens/teens_<?= $i; ?>.jpg" class="">
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