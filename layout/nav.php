<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <img width="20%" height="10%" src="images/logobann-14.png"  alt="Logo BerryMuch">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="miell.php">Informate APIZZ</a></li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Nuestros Productos</a>
                   
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <li><a class="dropdown-item" href="frutosrojos.php">Frutos Rojos</a></li>
                        <li><a class="dropdown-item" href="Miel.php">Miel de Abeja</a></li>
                        <li><a class="dropdown-item" href="Arreglos.php">Arreglos y decoraciones</a></li>
                    </ul>
                </li>
            </ul>
            <li class="carrito">
                <?php
                session_start();
                    if(isset($_SESSION['cedu'])){
                        echo '<a href="checkout.php" class="btn-carrito"><img src="https://img.icons8.com/ios-glyphs/30/000000/add-shopping-cart.png"/></a>';
                    }else{
                        echo '<a href="login.php" class="btn-carrito"><img src="https://img.icons8.com/ios-glyphs/30/000000/add-shopping-cart.png"/></a>';
                    }
                ?>
                
            </li>
        </div>
    </div>
</nav>