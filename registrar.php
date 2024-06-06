<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['pedido']) >= 1 && strlen($_POST['cant']) >= 1 && strlen($_POST['entrega']) >= 1) {
	    $name = trim($_POST['name']);
	    $pedido = trim($_POST['pedido']);
		$cant = trim($_POST['cant']);
		$precio = $cant*30;
        $entrega = trim($_POST['entrega']);
	    $consulta = "INSERT INTO datos(nombre, pedido, precio, entrega, cantidad) VALUES ('$name','$pedido','$precio','$entrega','$cant')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	echo "<script>alert('¡Tu pedido se realizo correctamente!');</script>";
           <?php
	    } else {
	    	?> 
	    	echo "<script>alert('¡Ups ha ocurrido un error!');</script>";
           <?php
	    }
    }   else {
	    	?> 
	    	echo "<script>alert('¡Por favor complete los campos!');</script>";
           <?php
    }
}

?>