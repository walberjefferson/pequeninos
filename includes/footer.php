<footer>
    <div class="footer">
        CNPJ: 17.620.399/0001-06 - Gerson Ouriques de Lima,13, Alto São José - Soledade, Paraiba, Brazil -
        contato@projetopequeninos.com.br - (83) 99636-8710
    </div>
</footer>

<!-- Scripts de terceiros usados na aplicação -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="./assets/js/biblioteca.min.js"></script>

<!-- Font-awesome CDN -->
<script src="https://use.fontawesome.com/f0b16580b6.js"></script>

<!-- Componentes a serem inseridos na biblioteca  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
<script src="./assets/js/jquery.mask.js"></script>
<script src="./assets/js/wow/wow.js"></script>

<!-- Scripts da aplicação -->
<script src="./assets/js/scripts.min.js"></script>
<script>

    jQuery(function ($) {
        var altura = $(document).height();
        var largura = $(document).width();
        if (largura > 500) {
            $('.bg-height').height(altura);
        }
    });
    // $(function () {

    // 	new WOW().init();

    // 	var $window = $(window); //Window object

    // 	var scrollTime = 1.2; //Scroll time
    // 	var scrollDistance = 170; //Distance. Use smaller value for shorter scroll and greater value for longer scroll

    // 	$window.on("mousewheel DOMMouseScroll", function (event) {

    // 		event.preventDefault();

    // 		var delta = event.originalEvent.wheelDelta / 120 || -event.originalEvent.detail / 3;
    // 		var scrollTop = $window.scrollTop();
    // 		var finalScroll = scrollTop - parseInt(delta * scrollDistance);

    // 		TweenMax.to($window, scrollTime, {
    // 			scrollTo: {
    // 				y: finalScroll,
    // 				autoKill: true
    // 			},
    // 			ease: Power1.easeOut, //For more easing functions see https://api.greensock.com/js/com/greensock/easing/package-detail.html
    // 			autoKill: true,
    // 			overwrite: 5
    // 		});

    // 	});

    // });
</script>
</body>

</html>