<?php 
include("con_db.php");

// Consulta para obtener los datos de la tabla
$consulta = "SELECT * FROM datos";
$resultado = mysqli_query($conex, $consulta);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Datos</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body{
    background-color: #FDBCB4;
    width: 100%;
    margin:0px;
    padding: 0px;
    overflow-y:scroll;
    overflow-x: hidden;
}
header{
    width: 100%;
    background: #C63637;
   border-bottom: #ffffff 2px solid ;
  position: relative;
  padding: 0px 30px;
  height: 70px;
  font-size: 30px;
  color: #ffffff;
  line-height: 70px;
  margin: auto;
  display: flex;
  align-items: center;
}
.body-text{
    margin-left: 5%;
    margin-right: 5%;
    font-size: 30px;
    margin-bottom: 100px;
    margin-top: 100px;
    background: #2c2c2c;
    border-radius: 20px;
    padding: 10px 30px;
    color: #ececec;
}
.img
{
    width: 150px; height: 150px;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    border-radius: 10px;
}
  .footer{
    background:  #C63637;
  padding:30px 0px;
  text-align:center;
  border-top: white 2px solid;
  }
  .btn {
        border-radius: 10px;
        height: 75px;
        background-color: #FDE1B4;
        color: black;
        border-style: solid;
        border: none;
        box-shadow: rgba(0, 0, 0, .2) 0 3px 5px -1px,rgba(0, 0, 0, .14) 0 6px 10px 0,rgba(0, 0, 0, .12) 0 1px 18px 0;
        width: 200px;
        transition: all 0.3s ease; /* Transición suave para los cambios */
    }

    /* Estilo cuando el cursor pasa por encima del botón */
    .btn:hover {
        background-color: #FFD699; /* Cambia el color de fondo */
        transform: translateY(-3px); /* Levanta ligeramente el botón */
        box-shadow: rgba(0, 0, 0, .2) 0 6px 10px 0,rgba(0, 0, 0, .14) 0 1px 18px 0,rgba(0, 0, 0, .12) 0 3px 5px -1px; /* Ajusta la sombra */
    }

    /* Estilo cuando se hace clic en el botón */
    .btn:active {
        background-color: #FDE1B4; /* Restaura el color de fondo */
        transform: translateY(0); /* Vuelve a la posición original */
        box-shadow: rgba(0, 0, 0, .2) 0 3px 5px -1px,rgba(0, 0, 0, .14) 0 6px 10px 0,rgba(0, 0, 0, .12) 0 1px 18px 0; /* Restaura la sombra */
    }


@keyframes moveHeader {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(+100%);
    }
  }
  
  #anim {
    animation: moveHeader 15s infinite;
  }
  .barra{
  box-shadow: rgba(0, 0, 0, .2) 0 3px 5px -1px,rgba(0, 0, 0, .14) 0 6px 10px 0,rgba(0, 0, 0, .12) 0 1px 18px 0;
  
    background-color: #779ECB;
    color: #000000;
    border-bottom: #ffffff 2px solid;
  }
  
/* Reset de estilos básicos */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Estilos para el contenedor principal */
.container {
    display: flex;
}

/* Estilos para la barra lateral */
.sidebar {
box-shadow: rgba(0, 0, 0, .2) 0 3px 5px -1px,rgba(0, 0, 0, .14) 0 6px 10px 0,rgba(0, 0, 0, .12) 0 1px 18px 0;

    margin-left: 5%;
    margin-right: 5%;
    font-size: 30px;
    margin-bottom: 100px;
    margin-top: 100px;
    background: #FB8576;
    border-radius: 20px;
    padding: 10px 30px;
    color: #ececec;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li {
    padding: 10px;
    border-bottom: 1px solid #ffffff;
}

.sidebar ul li a {
    color: #000000;
    text-decoration: none;
    display: block;
}

.sidebar ul li a:hover {
    background-color: #ffffff;
}

/* Estilos para el contenido principal */
.content {
box-shadow: rgba(0, 0, 0, .2) 0 3px 5px -1px,rgba(0, 0, 0, .14) 0 6px 10px 0,rgba(0, 0, 0, .12) 0 1px 18px 0;

    flex-grow: 1;
    margin-left: 5%;
    margin-right: 5%;
    font-size: 30px;
    margin-bottom: 100px;
    margin-top: 100px;
    background: #FB8576;
    border-radius: 20px;
    padding: 10px 30px;
    color: #ececec;
}
table {
    width: 100%;
    border-collapse: collapse;
}

table th, table td {
    border: 1px solid #ffffff;
    padding: 8px;
    text-align: center;
}

table th {
    background-color: #fffcfc;
}
form {
    margin: 0 auto;
    color: #ffffff;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-left: 5%;
    margin-right: 5%;
}
input[type="text"],
    input[type="email"],
    input[type="tel"] {
        width: 50%;
        padding: 10px;
        border-radius: 10px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
.grid-container {
  padding: 20px 100px;
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); /* Cuadrícula con columnas automáticas, cada una de 200px de ancho mínimo */
  grid-gap: 10px; /* Espacio entre las imágenes */
}

.grid-item {
  overflow: hidden; /* Para que las imágenes no sobresalgan del contenedor */
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  border-radius: 10px;
  width: 200px;
  height: 200px; /* Ajusta la altura de la imagen de manera proporcional */
}

.grid-item img {
    overflow: hidden;
  width: 100%; /* Ajusta la imagen al tamaño del contenedor */
  height: 100%; /* Ajusta la altura de la imagen de manera proporcional */
}
@keyframes aparecer {
    0% {
            opacity: 0;
            transform: translateX(70px); /* Desplaza el elemento 50px hacia la izquierda */
        }
        100% {
            opacity: 1;
            transform: translateX(0); /* Vuelve al punto original */
        }
    }

    /* Aplica la animación de aparecer a los elementos con la clase .fade-in */
    .fade-in {
        animation: aparecer 1s ease-in-out forwards;
    }

    </style>
    <script>
        function cerrar(){
            if (confirm("¿Estás seguro de que quieres cerrar esta ventana?")) {
        window.close();
    }
        }    
    </script>
</head>
<body>

<header><p>Carnitas Murua-Tijuana</p></header>
    <div class="barra"><div id="anim">Tacos de Carnitas </div></div>

        <div class="container">
            <nav class="sidebar">
                <p style="text-align: center;">Menú<br>-` ♡ ´-</p><br><hr>
                <ul>
                    <li><button onclick="cerrar()" class="btn">Regresar</button></li>
                </ul>
            </nav>
            <div class="content">

                <div id="0" class="fade-in">
                <h2 style="text-align:center;">Datos de tu pedido</h2><br><hr><br>

<table >
    <thead>
        <tr style="color: black;">
            <th>Nm Pedido</th>
            <th>Usuario</th>
            <th>Pedido</th>
            <th>Precio</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        if ($resultado && mysqli_num_rows($resultado) > 0) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($fila['id']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['nombre']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['pedido']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['precio']) . "</td>";
                echo "<td>En proceso</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5' class='bad'>No hay datos en la tabla</td></tr>";
        }
        ?>
    </tbody>
</table>

                </div>
</body>
</html>

<?php 
mysqli_free_result($resultado);
mysqli_close($conex);
?>
