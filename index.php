<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carnitas Murua Tijuana</title>
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
                    var nmPedido=0;
        function btn0(){
            document.getElementById(0).style.display = "block";
            document.getElementById(1).style.display = "none";
            document.getElementById(2).style.display = "none";
            document.getElementById(3).style.display = "none";
            document.getElementById(4).style.display = "none";
            document.getElementById(5).style.display = "none";
            document.getElementById(6).style.display = "none";
            document.getElementById(7).style.display = "none";
            document.getElementById(8).style.display = "none";
        }
        function btn1(){
            document.getElementById(0).style.display = "none";
            document.getElementById(1).style.display = "block";
            document.getElementById(2).style.display = "none";
            document.getElementById(3).style.display = "none";
            document.getElementById(4).style.display = "none";
            document.getElementById(5).style.display = "none";
            document.getElementById(6).style.display = "none";
            document.getElementById(7).style.display = "none";
            document.getElementById(8).style.display = "none";
        }
        function btn2(){
            document.getElementById(0).style.display = "none";
            document.getElementById(1).style.display = "none";
            document.getElementById(2).style.display = "block";
            document.getElementById(3).style.display = "none";
            document.getElementById(4).style.display = "none";
            document.getElementById(5).style.display = "none";
            document.getElementById(6).style.display = "none";
            document.getElementById(7).style.display = "none";
            document.getElementById(8).style.display = "none";
        }
        function btn3(){
            document.getElementById(0).style.display = "none";
            document.getElementById(1).style.display = "none";
            document.getElementById(2).style.display = "none";
            document.getElementById(3).style.display = "block";
            document.getElementById(4).style.display = "none";
            document.getElementById(5).style.display = "none";
            document.getElementById(6).style.display = "none";
            document.getElementById(7).style.display = "none";
            document.getElementById(8).style.display = "none";
        }
        function btn4(){
            document.getElementById(0).style.display = "none";
            document.getElementById(1).style.display = "none";
            document.getElementById(2).style.display = "none";
            document.getElementById(3).style.display = "none";
            document.getElementById(4).style.display = "block";
            document.getElementById(5).style.display = "none";
            document.getElementById(6).style.display = "none";
            document.getElementById(7).style.display = "none";
            document.getElementById(8).style.display = "none";
        }
        function btn5(){
            document.getElementById(0).style.display = "none";
            document.getElementById(1).style.display = "none";
            document.getElementById(2).style.display = "none";
            document.getElementById(3).style.display = "none";
            document.getElementById(4).style.display = "none";
            document.getElementById(5).style.display = "block";
            document.getElementById(6).style.display = "none";
            document.getElementById(7).style.display = "none";
            document.getElementById(8).style.display = "none";
        }
        function btn6(){
            document.getElementById(0).style.display = "none";
            document.getElementById(1).style.display = "none";
            document.getElementById(2).style.display = "none";
            document.getElementById(3).style.display = "none";
            document.getElementById(4).style.display = "none";
            document.getElementById(5).style.display = "none";
            document.getElementById(6).style.display = "block";
            document.getElementById(7).style.display = "none";
            document.getElementById(8).style.display = "none";
        }
        function btn7(){
            document.getElementById(0).style.display = "none";
            document.getElementById(1).style.display = "none";
            document.getElementById(2).style.display = "none";
            document.getElementById(3).style.display = "none";
            document.getElementById(4).style.display = "none";
            document.getElementById(5).style.display = "none";
            document.getElementById(6).style.display = "none";
            document.getElementById(7).style.display = "block";
            document.getElementById(8).style.display = "none";
        }
        function btn8(){
            document.getElementById("myForm").style.display= "flex"
            document.getElementById(0).style.display = "none";
            document.getElementById(1).style.display = "none";
            document.getElementById(2).style.display = "none";
            document.getElementById(3).style.display = "none";
            document.getElementById(4).style.display = "none";
            document.getElementById(5).style.display = "none";
            document.getElementById(6).style.display = "none";
            document.getElementById(7).style.display = "none";
            document.getElementById(8).style.display = "block";
        }
        function mostrarDatos() {
            nmPedido+=1;
            document.getElementById("myForm").style.display = "none";
            var nombre = document.getElementById("nombre").value;
            var correo = document.getElementById("correo").value;
            var telefono = document.getElementById("telefono").value;
            var redes = document.getElementById("redes").value;

            var datosMostrados = "Nombre: " + nombre + "<br>" +
                                 "Correo: " + correo + "<br>" +
                                 "Teléfono: " + telefono + "<br>" +
                                 "Pedido: " + redes;

            document.getElementById("datosMostrados").innerHTML = datosMostrados;
            document.getElementById("poto").innerHTML = "Pedido Nm. "+nmPedido+"<br>Estado: En proceso<br>";
            document.getElementById("nombre").value = "";
        document.getElementById("correo").value = "";
        document.getElementById("telefono").value = "";
        document.getElementById("redes").value = "";
        }
        function addNews() {
            // Obtener los valores del formulario
            var image = document.getElementById('image').files[0];
            var text = document.getElementById('text').value;

            // Crear elementos HTML para la nueva fila de la tabla
            var newRow = document.createElement('tr');
            var newCell1 = document.createElement('td');
            var newCell2 = document.createElement('td');
            var newImage = document.createElement('img');
            var newText = document.createTextNode(text);

            // Configurar la imagen
            newImage.classList.add('img');
            newImage.file = image;
            newImage.src = URL.createObjectURL(image);

            // Agregar imagen y texto a las celdas de la nueva fila
            newCell1.appendChild(newImage);
            newCell1.appendChild(document.createElement('br'));
            newCell1.appendChild(newText);

            // Agregar las celdas a la nueva fila
            newRow.appendChild(newCell1);
            newRow.appendChild(newCell2);

            // Agregar la nueva fila a la tabla
            document.getElementById('news-table').appendChild(newRow);
        }
        function addImageToGallery() {
    // Get the input element for selecting images
    var input = document.getElementById('gallery-image');
    // Get the selected file
    var file = input.files[0];

    if (file) {
        // Create a new image element
        var newImage = document.createElement('img');
        newImage.classList.add('grid-item');
        newImage.src = URL.createObjectURL(file);

        // Create a new grid item
        var newGridItem = document.createElement('div');
        newGridItem.classList.add('grid-item');
        newGridItem.appendChild(newImage);

        // Add the new grid item to the gallery
        var gallery = document.getElementById('gallery');
        gallery.appendChild(newGridItem);
    }
}
function checkPassword() {
    event.preventDefault();
    var enteredPassword = document.getElementById("password").value;
    // Aquí debes comparar la contraseña ingresada con la contraseña correcta
    var correctPassword = "Admin"; // Cambia "tu_contraseña_correcta" por tu contraseña real
    if (enteredPassword === correctPassword) {
        document.getElementById('news-form').style.display= "block";
        document.getElementById('GalForm').style.display= "block";
        document.getElementById('db').style.display= "block";
        return true; // Permite el envío del formulario
    } else {
        alert("Contraseña incorrecta. Inténtalo de nuevo.");
        return false; // Evita el envío del formulario
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
                    <li><button onclick="btn0()" class="btn">Portada</button></li>
                    <li><button onclick="btn1()" class="btn">Quienes somos</button></li>
                    <li><button onclick="btn2()" class="btn">Mision</button></li>
                    <li><button onclick="btn3()" class="btn">Vision</button></li>
                    <li><button onclick="btn4()" class="btn">Galeria</button></li>
                    <li><button onclick="btn5()" class="btn">Eventos</button></li>
                    <li><button onclick="btn6()" class="btn">Noticias</button></li>
                    <li><button onclick="btn7()" class="btn">Informe</button></li>
                    <li><button onclick="btn8()" class="btn">Contacto</button></li>
                    <li id="db" style="display:none;"><a href="mostrar.php" target="_blank"><button class="btn">Base de datos</button></a></li>
                    <li><a href="pedido.php" target="_blank"><button class="btn">Ver pedido</button></a></li>
                    <li><div id="passwordForm">
                        <form id="passwordCheckForm" onsubmit="return checkPassword()">
                            <label for="password">Contraseña:</label>
                            <input type="password" id="password" name="password">
                            <button onclick="checkPassword()" class="btn">Verificar</button>
                        </form>
                    </div></li>
                </ul>
            </nav>
            <div class="content">

                <div id="0" class="fade-in">
                    <h1 style="text-align: center;">⋆｡°✩Carnitas Murua-Tijuana⋆｡°✩ </h1><br><hr><br><center><img src="img6.jpeg" style="width: 400px; height: 400px;border-radius: 15px;" > <img src="21.jpeg" style="width: 400px; height: 400px;border-radius: 15px;" ></center>
                </div>

                <div id="1" class="fade-in" style="display: none;">
                    <h1 style="text-align: center;">⋆｡°✩ ¿Quienes Somos?⋆｡°✩ </h1><br><hr>Desde 1985, nuestro puesto de tacos de carnitas se ha convertido en un punto de referencia en Murua, cerca de la plaza Diamante y la escuela Mariano Matamoros. <center><img src="img2.png" style="width: 400px; height: 400px;border-radius: 15px;" ></center>Nos especializamos en la venta de tacos de carnitas, carnitas por kilo y chicharrón.<br><center><img src="14.jpeg" style="width: 400px; height: 400px;border-radius: 15px;" > <img src="17.jpeg" style="width: 400px; height: 400px;border-radius: 15px;" ></center><br>
                </div>
                <div id="2" class="fade-in" style="display: none;">
                    <h1 style="text-align: center;">⋆｡°✩ Mision⋆｡°✩ </h1><br><hr>Desde hace generaciones, nos hemos dedicado a la venta de carnitas por kilo y tacos de carnitas con el firme propósito de mantener vivo nuestro negocio familiar. Nuestro objetivo principal es poder sostenernos económicamente a través de esta tradición, mientras brindamos a nuestros clientes un buen servicio y un buen sabor en cada comida. Nos esforzamos constantemente por mejorar.<br><br><center><img src="18.jpeg" style="width: 400px; height: 400px;border-radius: 15px;" > <img src="19.jpeg" style="width: 400px; height: 400px;border-radius: 15px;" ></center><br><br><br>
                </div>
                <div id="3" class="fade-in"  style="display: none;">
                    <h1 style="text-align: center;">⋆｡°✩ Vision⋆｡°✩ </h1><br><hr>Nuestro objetivo es vender lo suficiente con el puesto de tacos para poder mantener económicamente, mientras mejoramos continuamente tanto en la preparación de la comida como en mi desempeño laboral. Aspiramos a crecer en el negocio y convertirlo en una sucursal más solicitada, eventualmente estableciendo un local fijo en lugar del puesto.<br><br><center><img src="20.jpeg" style="width: 400px; height: 400px;border-radius: 15px;" > <img src="15.jpeg" style="width: 400px; height: 400px;border-radius: 15px;" ></center><br><br><br><br><br>
                </div>
                <div id="4" class="fade-in" style="display: none;">
                    <h1 style="text-align: center;">⋆｡°✩ Galeria⋆｡°✩ </h1><br><hr><br>
                    <div class="grid-container" id="gallery">
                        <div class="grid-item"><img src="img7.jpeg"></div>
                        <div class="grid-item"><img src="img2.png"></div>
                        <div class="grid-item"><img src="img6.jpeg"></div>
                        <div class="grid-item"><img src="img8.jpeg"></div>
                        <div class="grid-item"><img src="img9.jpeg"></div>
                        <div class="grid-item"><img src="img10.jpeg"></div>
                        <div class="grid-item"><img src="11.jpeg"></div>
                        <div class="grid-item"><img src="12.jpeg"></div>
                        <div class="grid-item"><img src="13.jpeg"></div>
                        <div class="grid-item"><img src="14.jpeg"></div>
                        <div class="grid-item"><img src="15.jpeg"></div>
                        <div class="grid-item"><img src="16.jpeg"></div>
                        <div class="grid-item"><img src="17.jpeg"></div>
                        <div class="grid-item"><img src="18.jpeg"></div>
                        <div class="grid-item"><img src="19.jpeg"></div>
                        <div class="grid-item"><img src="20.jpeg"></div>
                        <div class="grid-item"><img src="21.jpeg"></div>
                        <div class="grid-item"><img src="22.jpeg"></div>
                        <div class="grid-item"><img src="23.jpeg"></div>
                        <div class="grid-item"><img src="24.jpeg"></div>
                        <div class="grid-item"><img src="25.jpeg"></div>
                        <div class="grid-item"><img src="26.jpeg"></div>
                        <div class="grid-item"><img src="27.jpeg"></div>
                        <div class="grid-item"><img src="28.jpeg"></div>
                    </div>
                    <br>
                    <div id="GalForm" style="display: none;"> 
                        <!-- Input to add new images -->
                    <input type="file" id="gallery-image" accept="image/*">
                    <button onclick="addImageToGallery()">Agregar Imagen</button>
                    </div>
                    
                </div>
                <div id="5" class="fade-in" style="display: none;">
                    <h1 style="text-align: center;">⋆｡°✩ Eventos⋆｡°✩ </h1><br><hr><br><h2>No vamos a Eventos a hacer tacos o servicio a domicilio</h2>Pero si Pedidos para fiestas pedido minimo 50 personas opreordenar pedidos de tacos usando la infomacion de contacto.<br><br>
                </div>
                <div id="6" class="fade-in" style="display: none;">
                    <h1 style="text-align: center;">⋆｡°✩ Noticias ⋆｡°✩</h1>
                    <hr>
                    <table id="news-table">
                        <tr>
                            <td><img src="img4.png" class="img"><br>Se está preparando un pedido para una fiesta para 200 personas en agosto.</td>
                            <td><img src="img4.png" class="img"><br>Se completó un pedido para una fiesta para 120 personas en febrero.</td>
                        </tr>
                        <tr>
                            <td><img src="img3.png" class="img"><br>No se abrió el local esta semana, debido a problemas personales del Dueño del lugar del local.</td>
                            <td><img src="img5.png" class="img"><br>Descuento en tacos durante toda semana santa.</td>
                        </tr>
                    </table>
                    <form id="news-form" style="display: none;">
                        <label for="image">Imagen:</label>
                        <input type="file" id="image" accept="image/*"><br><br>
                        <label for="text">Texto:</label><br>
                        <textarea id="text" rows="4" cols="50"></textarea><br><br>
                        <button type="button" onclick="addNews()">Agregar Noticia</button>
                    </form>
                </div>

                <div id="7" class="fade-in" style="display: none;">
                    <h1 style="text-align: center;">⋆｡°✩ Informe⋆｡°✩ </h1><br><hr><br>Horario laboral:<br>Lunes a viernes: 7:00 am a 2:00 pm<br>Sabado a domingo 8:00 am a 12:00 am<br><br>Precios:<br>Precio por Taco carnitas, mascisa, buche : 30$<br>Precio por orden: 120$<br>Precio por kilo de carnitas: 360$  <br>Precio por medio kilo: 180$.<br>Precio por cuarto de kilo: 90$<br>chicharron kilo: 320$<br>Medio kilo chicharron: 160$ <br>cuarto de kilo Chicharron: 80$<br>Bebidas: 30$<br><br><center><img src="12.jpeg" style="width: 400px; height: 400px;border-radius: 15px;" > <img src="21.jpeg" style="width: 400px; height: 400px;border-radius: 15px;" ></center><br>
                </div>
                <div id="8" class="fade-in" style="display: none;">
                    <h1 style="text-align: center;">⋆｡°✩ Contacto⋆｡°✩ </h1><br><hr> <div><br>
                        <p>Datos de contacto:</p><br>
                        Tel: 6642575813<br><br><hr><br>
                        <p>Datos de tu pedido</p><br><hr><br>
                        <form id="myForm" method="post">
                            <label for="name">Nombre:</label>
                            <input type="text" id="name" name="name"><br>

                            <label for="pedido">Pedido:</label>
                            <input type="text" id="pedido" name="pedido"><br>

                            <label for="cant">Cantidad:</label>
                            <input type="number" id="cant" name="cant"><br>

                            <label for="entrega">Entrega:</label>
                            <input type="text" id="entrega" name="entrega"><br>

                            <input type="submit" name="register" class="btn"><br>
                        </form>
                        <?php 
                            include("registrar.php");
                        ?>
                        <hr>
                        <center>
                            <h1>Encuesta</h1><br><hr><br>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSehljo3URNR2dxaZ3AF4150sVuChhcuFuZBlxt_1VyDAHkxsQ/viewform?usp=sf_link"><button class="btn">Encuesta</button></a>
                        </center>
                            <p id="poto"></p>
                        <p id="datosMostrados"></p>
                      <br><br><br>
                      </div><br><br>
                    
                </div>
            </div>
        </div>
    </div>
  <br>
      </div>
      <footer style="color: white;" class="footer">
        Carnitas Trabajo Paginas Web
        </footer>
        
</body>
</html>
