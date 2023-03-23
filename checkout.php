<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Checkout</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- All CSS is here
            ============================================ -->
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="assets/css/vendor/linearicons.css">
    <link rel="stylesheet" href="assets/css/vendor/themify-icons.css">
    <!-- Others CSS -->
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.mb.ytplayer.min.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jarallax.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/plugins/easyzoom.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro&display=swap" rel="stylesheet">


</head>

<body>
    <div class="main-wrapper">
        <?php
            include("layout/pruen.html");
        ?>
        <div class="breadcrumb-area section-padding-1 bg-gray breadcrumb-ptb-1">
            <div class="container">
                <div class="breadcrumb-content text-left">
                    <div class="breadcrumb-title">
                        <h2>Checkout </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="checkout-main-area pt-90 pb-90">
            <div class="container">
                <div class="customer-zone mb-20">
                    <div class="your-order-area">
                        <h3>Tu Pedido</h3>
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-info-wrap" id="tablac">

                            </div>
                            <!-- <div class="payment-method">
                                <div class="pay-top sin-payment">
                                    <input id="payment_method_1" class="input-radio" type="radio" value="1" checked="checked" name="payment_method">
                                    <label for="payment_method_1"> Transferencia </label>
                                    <div class="payment-box payment_method_bacs">
                                        <p>Realiza tu pago por medio de una transferencia directamente a nuestra cuenta. Por favor utiliza tu número de Pedido como la referencia del pago.</p>
                                    </div>
                                </div>

                                <div class="pay-top sin-payment">
                                    <input id="payment-method-3" class="input-radio" type="radio" value="2" name="payment_method">
                                    <label for="payment-method-3">Efectivo  </label>
                                    <div class="payment-box payment_method_bacs">
                                        <p>Realizas el pago al momento de la entrega de tus productos.</p>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                        <div class="Place-order mt-40">
                            <button class="btnCrearpdf" onclick="pdf()">finalizar compra</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; BerryMuch 2021</p>
        </div>
    </footer>
    </div>

    <!-- All JS is here
    ============================================ -->

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- jquery -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap-notify.min.js"></script>
    <script src="assets/js/plugins/owl-carousel.js"></script>
    <script src="assets/js/plugins/slick.js"></script>
    <script src="assets/js/plugins/jquery.mb.ytplayer.min.js"></script>
    <script src="assets/js/plugins/magnific-popup.js"></script>
    <script src="assets/js/plugins/wow.js"></script>
    <script src="assets/js/plugins/instafeed.js"></script>
    <script src="assets/js/plugins/countdown.js"></script>
    <script src="assets/js/plugins/images-loaded.js"></script>
    <script src="assets/js/plugins/isotope.js"></script>
    <script src="assets/js/plugins/tilt.js"></script>
    <script src="assets/js/plugins/jquery-ui.js"></script>
    <script src="assets/js/plugins/jquery-ui-touch-punch.js"></script>
    <script src="assets/js/plugins/easyzoom.js"></script>
    <script src="assets/js/plugins/resizesensor.js"></script>
    <script src="assets/js/plugins/sticky-sidebar.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/ajax-mail.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <script src="js/check.js"></script>

    <?php
        if(isset($_GET['ced'])){
			$ced = $_GET['ced'];
		}
    ?>

    <script>
        function pdf() {
	        fetch('https://berrymuch.azurewebsites.net/api/carrito/api_carrito.php?action=mostrar')
	        //fetch('http://localhost/berryMuch/api/carrito/api_carrito.php?action=mostrar')
                .then(response => response.json())
                .then(data => {
                    let html = ``;
                    //console.log(data);
                    data.items.forEach(element => {
                        html += `
                            nombre = ${element.nombre} 
                            cantidad = ${element.cantidad}
                        `;
                    });
                    tot = data.info.total;
                    document.cookie = `items=${data.info.count}`;
                    ced = <?php echo $ced?>;
                    window.location.href = "https://berrymuch.azurewebsites.net/php/ingresarOrder.php?total=" + tot + '&info=' + html+ '&ced=' + ced;
                    //window.location.href = "http://localhost/berryMuch/dashboardbarrysoft/php_action/ingresarOrder.php?total=" + tot + '&info=' + html;
                });
        }
    </script>

</body>

</html>