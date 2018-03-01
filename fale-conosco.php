<?php include('includes/header.php'); ?>

<?php include("includes/redes_sociais.php"); ?>


<section>
	<div class="container quem-somos-area">
        <h2 class="titulo-interno">Fale conosco</h2>
		
        <form action="enviacontato.php" method="post">
            <div class="row">
                <div class="col-md-5">
                    <fieldset>
                        <label for="">Empresa</label>
                        <input type="text" class="form-control" name="empresa" id="" required />
                    </fieldset>
                    <fieldset>
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" id="" required />
                    </fieldset>
                    <fieldset>
                        <label for="">Fone</label>
                        <input type="text" class="form-control phone" name="telefone" id="" required />
                    </fieldset>
                </div>
                <div class="col-md-7">
                    <fieldset>
                        <label for="">Mensagem</label>
                        <textarea type="text" class="form-control" name="mensagem" id="" rows="7" required > </textarea>
                    </fieldset>
                    <fieldset class="text-right">
                        <button type="submit" class="btn btn-blue" >Enviar</button>
                    </fieldset>
                </div>
            </div>
        </form>
	</div>
</section>

<section>
		<div class="container">
            <h2 class="titulo-interno">Onde estamos</h2>
			
            <div id="map" class="map"></div>
            <script type="text/javascript">
            var map;
            var myLatLng = {lat: -7.0610249, lng: -36.3552578};
            var cliente = "<?php echo $titulo_site; ?>";

            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                scrollwheel: false,
                zoom: 15
                });
                    // Create a marker and set its position.
                    var marker = new google.maps.Marker({
                        map: map,
                        position: myLatLng,
                        title: cliente
                    });
                    }
                </script>
                <script async defer	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUoWkSapLLL3W0sNLSbdY7uLnbANcRCw&callback=initMap"></script>
                </div>
		</div>
</section>


<?php include('includes/footer.php'); ?>