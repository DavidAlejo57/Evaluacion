<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tienda BerryMuch</title>
    <!-- Favicon-->
    <link rel=icon href="img1/logo.ico" type="image/ico">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <?php
        include("layout/nav.php");
    ?>
    <!-- Header-->
    <header class="bg-w py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder"> </h1>

            </div>
        </div>
    </header>
    <section id="about" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">


                <div class="col-md-6 col-sm-12">
                    <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                        <img src="images/about-image.jpg" class="img-responsive" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php
                    $response = json_decode(file_get_contents('https://berrymuch.azurewebsites.net/api/productos/api_productos.php?categoria=3'), true);
                    if($response['statuscode']==200){
                        foreach($response['items'] as $item){
                            include('layout/items.php');
                        }
                    }else{

                    }
                ?>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <?php
        include("layout/footer.html");
    ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="js/main.js"></script>
</body>

</html>