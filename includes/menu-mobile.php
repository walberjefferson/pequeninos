<div class="hamburger hamburger--collapse-r">
    <div class="hamburger-box">
        <div class="hamburger-inner"></div>
    </div>
</div>

<nav class="responsive_menu">
    <ul>
        <li <?php if (strpos($_SERVER[ 'PHP_SELF'], 'quem-somos.php')) echo 'class="active"';?>><a href="quem-somos.php">Sobre Nós</a></li>
        <li <?php if (strpos($_SERVER[ 'PHP_SELF'], 'da')) echo 'class="active"';?>><a href="http://lumen.etc.br/ide/doacao_mensal.php">Doações</a></li>
        <li <?php if (strpos($_SERVER[ 'PHP_SELF'], 'galeria_fotos.php')) echo 'class="active"';?>><a href="galeria_fotos.php">Galeria de fotos</a></li>
        <li <?php if (strpos($_SERVER[ 'PHP_SELF'], 'da')) echo 'class="active"';?>><a href="http://lumen.etc.br/ide/">ONG IDE</a></li>
        <li <?php if (strpos($_SERVER[ 'PHP_SELF'], 'da')) echo 'class="active"';?>><a href="http://lumen.etc.br/ide/fale-conosco.php">Contato</a></li>
    </ul>
</nav>