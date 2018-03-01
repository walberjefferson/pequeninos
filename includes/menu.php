<nav class="menu">
    <?php // var_dump(strpos($_SERVER['PHP_SELF'], 'teens')); ?>
    <?php if (strpos($_SERVER['PHP_SELF'], 'teens')) : ?>
        <ul>
            <li><a href="quem-somos-teens.php">Sobre Nós</a></li>
            <li><a href="http://lumen.etc.br/ide/doacao_mensal.php">Doações</a></li>
            <li><a href="galeria_fotos_teens.php">Galeria de fotos</a></li>
            <li><a href="http://lumen.etc.br/ide/">ONG IDE</a></li>
            <li><a href="http://lumen.etc.br/ide/fale-conosco.php">Contato</a></li>
        </ul>
    <?php elseif (strpos($_SERVER['PHP_SELF'], 'saude')) : ?>
        <ul>
            <li><a href="quem-somos-saude.php">Sobre Nós</a></li>
            <li><a href="http://lumen.etc.br/ide/doacao_mensal.php">Doações</a></li>
            <li><a href="galeria_fotos_saude.php">Galeria de fotos</a></li>
            <li><a href="http://lumen.etc.br/ide/">ONG IDE</a></li>
            <li><a href="http://lumen.etc.br/ide/fale-conosco.php">Contato</a></li>
        </ul>
    <?php elseif (strpos($_SERVER['PHP_SELF'], 'casa')) : ?>
        <ul>
            <li><a href="quem-somos-casa.php">Sobre Nós</a></li>
            <li><a href="http://lumen.etc.br/ide/doacao_mensal.php">Doações</a></li>
            <li><a href="galeria_fotos_casa.php">Galeria de fotos</a></li>
            <li><a href="http://lumen.etc.br/ide/">ONG IDE</a></li>
            <li><a href="http://lumen.etc.br/ide/fale-conosco.php">Contato</a></li>
        </ul>
    <?php elseif (strpos($_SERVER['PHP_SELF'], 'restaurante')) : ?>
        <ul>
            <li><a href="quem-somos-restaurante.php">Sobre Nós</a></li>
            <li><a href="http://lumen.etc.br/ide/doacao_mensal.php">Doações</a></li>
            <li><a href="galeria_fotos_restaurante.php">Galeria de fotos</a></li>
            <li><a href="http://lumen.etc.br/ide/">ONG IDE</a></li>
            <li><a href="http://lumen.etc.br/ide/fale-conosco.php">Contato</a></li>
        </ul>
    <?php elseif (strpos($_SERVER['PHP_SELF'], 'profissionalizante')) : ?>
        <ul>
            <li><a href="quem-somos-profissionalizante.php">Sobre Nós</a></li>
            <li><a href="http://lumen.etc.br/ide/doacao_mensal.php">Doações</a></li>
            <li><a href="galeria_fotos_profissionalizante.php">Galeria de fotos</a></li>
            <li><a href="http://lumen.etc.br/ide/">ONG IDE</a></li>
            <li><a href="http://lumen.etc.br/ide/fale-conosco.php">Contato</a></li>
        </ul>
    <?php elseif (strpos($_SERVER['PHP_SELF'], 'sports')) : ?>
        <ul>
            <li><a href="quem-somos-sports.php">Sobre Nós</a></li>
            <li><a href="http://lumen.etc.br/ide/doacao_mensal.php">Doações</a></li>
            <li><a href="galeria_fotos_sports.php">Galeria de fotos</a></li>
            <li><a href="http://lumen.etc.br/ide/">ONG IDE</a></li>
            <li><a href="http://lumen.etc.br/ide/fale-conosco.php">Contato</a></li>
        </ul>
    <?php else : ?>
        <ul>
            <li><a href="quem-somos.php">Sobre Nós</a></li>
            <li><a href="http://lumen.etc.br/ide/doacao_mensal.php">Doações</a></li>
            <li><a href="galeria_fotos.php">Galeria de fotos</a></li>
            <li><a href="http://lumen.etc.br/ide/">ONG IDE</a></li>
            <li><a href="http://lumen.etc.br/ide/fale-conosco.php">Contato</a></li>
        </ul>
    <?php endif; ?>
</nav>
