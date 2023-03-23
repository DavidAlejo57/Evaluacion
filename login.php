<!DOCTYPE html>
<html lang="en">

<head>
    <title>Berry Much</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, 
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/fontawesome-all.css" rel="stylesheet" />

    <link rel="icon" href="img1/logo1.png" type="image/jpg" />

</head>

<body>
    <h2></h2>
    <div class=" w3l-login-form">
        <h2>Datos de tu pedido</h2>
        <form action="#" method="POST">
            <h1><a href="index.php"><img class="logo-login" src="images/logo-14.png"></a></h1>
            <div class=" w3l-form-group">
                <label>Cédula:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" placeholder="Cédula" required="requiered" id="cedula" name="cedula" />
                </div>
            </div>
            <!-- <div class=" w3l-form-group">
                <label>Contraseña:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" id="contra" name="contra" placeholder="Contraseña" required="required" />    
                </div>
            </div> -->
            <!-- <div class=" w3l-form-group">
                <a href="registro.php">No tienes cuenta? Registrate aqui</a>
            </div>
            <div class=" w3l-form-group">
                <a href="recuperar.php">Olvidaste tu contraseña? Recuperala aqui</a>
            </div> -->
            <button type="submit" >Verificar</button>
        </form>
        <!-- <p class=" w3l-register-p">¿No tiene una cuenta?<a href="#" class="register"> Registrate</a></p> -->
        <?php
        session_start();
        require "base/conex.php"; 
        if(isset($_POST['cedula'])){
            $cedula = $_POST['cedula'];
            $_SESSION['cedu'] = $cedula;
            if($cedula==""){
                echo '<script language="javascript">alert("Debe ingresar los datos requeridos");window.location.href="login.php"</script>'; 
            }else{
                $sql = "select * from cliente where ced_cli = '$cedula'";
                $r = mysqli_query($l, $sql);
                $n = mysqli_num_rows($r); 
                if($n==1){
                    echo '<script language="javascript">alert("Comprobacion existosa");window.location.href="checkout.php?ced=' .$cedula. '"</script>';
                }else{
                    echo '<script language="javascript">alert("Ayudanos con tu informacion");window.location.href="registro.php"</script>';
                }

            }
        }
?>

    </div>
</body>

</html>