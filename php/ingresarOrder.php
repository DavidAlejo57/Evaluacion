
<?php 	

session_start();
    require('../base/conex.php');

    if(isset($_GET['total'])){
        $total = $_GET['total'];
        $info = $_GET['info'];
        $cedula = $_GET['ced'];
    }

        $sql = "select nom_cli, ape_cli, tele_cli from cliente where ced_cli = '$cedula'";
        $r = mysqli_query($l, $sql);
        while($registro = mysqli_fetch_object($r)){
            $nombre = $registro->nom_cli;
            $apellido = $registro->ape_cli;
            $telefono = $registro->tele_cli;
        }
        $cliente = $nombre.' '.$apellido;


		
		$fecha=date('Y-m-d');
    
		$orderItemSql = "INSERT INTO pedido (cliente, telefono, fecha, productos, estado, estado_pedi, total) 
		VALUES ('$cliente', '$telefono', '$fecha','$info','Por entregar', 1, $total)";
	
		$r = mysqli_query($l, $orderItemSql) or die ("ERROR al ingresar datos");
session_destroy();

if($r){
    echo '<script language="javascript">alert("El pedido se realizo correctamente");window.location.href="https://berrymuch.azurewebsites.net/index.php"</script>'; 
}
?>