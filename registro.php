<!DOCTYPE html>
<html lang="es">

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

<body class="registro" >
    <p></p>
    <div class=" w3l-login-form">
        <h2>REGISTRO</h2>
        <form action="#" method="POST">
            <div class=" w3l-form-group">
                <label>Cédula:</label>
                <div class="group">
                <i class="far fa-address-card"></i>
                    <input type="text" class="form-control" placeholder="Cédula" required="requiered" id="cedula" name="cedula" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Nombre</label>
                <div class="group">
                <i class="fas fa-user"></i>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required="required" />    
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Apellido</label>
                <div class="group">
                <i class="fas fa-user"></i>
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required="required" />    
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Correo Electronico</label>
                <div class="group">
                <i class="far fa-envelope"></i>
                    <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo Electronico" required="required" />    
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Telefono</label>
                <div class="group">
                <i class="fas fa-mobile"></i>
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" required="required" />    
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Direccion</label>
                <div class="group">
                <i class="fas fa-home"></i>
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required="required" />    
                </div>
            </div>
            <button type="submit" >REGISTRARSE</button>
        </form>
        <!-- <p class=" w3l-register-p">¿No tiene una cuenta?<a href="#" class="register"> Registrate</a></p> -->
        <?php
        session_start();
        require "base/conex.php"; 
        if(isset($_POST['cedula'])&& isset($_POST['nombre'])
        && isset($_POST['apellido']) && isset($_POST['correo'])&& isset($_POST['telefono']) && 
        isset($_POST['direccion'])){
            $cedula = $_POST['cedula'];
            $_SESSION['cedu'] = $cedula;
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $dire = $_POST['direccion'];
            if($cedula=="" || $nombre==""|| $apellido=="" ||
            $correo=="" || $telefono=="" ||
            $dire==""){
                echo '<script language="javascript">alert("Debe ingresar los datos requeridos");window.location.href="registro.php"</script>'; 
            }else{
                $sql = "insert into cliente(nom_cli,ape_cli,corre_cli,tele_cli,direc_cli,ced_cli) 
                values('$nombre','$apellido','$correo','$telefono','$dire','$cedula')";
                $r = mysqli_query($l, $sql) or die ("ERROR al ingresar datos");
                if($r){
                    echo '<script language="javascript">alert("El registro se realizo correctamente");window.location.href="checkout.php?ced=' .$cedula. '"</script>'; 
            }
        }
    }
?>
    </div>
    <p></p>
</body>

</html>