


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN Y REGISTRO</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/66b9a8e339.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/registro.css">
    <script async>(function(w, d) { var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.setAttribute("src", "https://app.bluecaribu.com/conversion/integration/4e3e3231c046e0f11ff0291d39bb00b7"); h.appendChild(s); })(window, document);</script>

</head>


<body>

    <div class="head">
        <div class="head-container">
            <div class="info-head">
                <ul>
                    <li>Reclamos </li>
                    <li><a href="nosotros.html">Sobre Nosotros</a></li>
                    <li>Atencion al cliente</li>
                </ul>
            </div>

            <div class="comuni-head">
                <ul>
                    <li>+51 998741234</li>
                    <li><a href="contactanos.html">Contactanos</a></li>
                </ul>
            </div>

            <div class="login">
                <div class="imagen-login">
                    <a href="index.php "><img src="img/login.png"> </a>
                </div>
                <div class="tex-login">
                    <a href="registro.html">LOGIN</a>
                </div>
            </div>
        </div>
    </div>
    <!---------------------ENCABEZADO-------------------------------------------------------->
    <div class="encabezado">
        <div class="encabezado-container">
            <div class="items-rigth">
            <ul>
                <li><a href="https://www.facebook.com/A-lo-Bravo-Restaurant-106148685459340"><img src="img/facebook.png" alt=""></a>
                </li>
                <li><a href="https://www.instagram.com/alobravorestaurant/"><img src="img/logotipo-de-instagram.png" alt=""></a>
                </li>
                <li><a href="https://api.whatsapp.com/send?phone=+51945058125&text=Tenemos%20una%20gran%20variedad%20de%20platos%20a%20la%20carta.%20%22A%20lo%20Bravo%22%20lo%20atendera%20a%20la%20brevedad%20posible"><img src="img/icons8-whatsapp-24 (1).png" alt=""></a>
                </li>
            </ul>
            </div>
            <div class="logo-prin">
               <a href=""> <img src="img/klipartz.com (1).png" alt="" href="index.php"></a>
            </div>
            <div class="items-left">
                <ul>
                    <li><a href=""><img src="img/simbolo-de-interfaz-de-lupa-de-busqueda.png" alt=""></a>
                    </li>
                    <li><a href=""><img src="img/amor.png" alt=""></a>
                    </li>
                    <li><a href=""><img src="img/bolsa-de-la-compra.png" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!----------------BARRA DE MENU---------------------------------->
    <div class="barra-menu ">
        <div class="barra-menu-container">
            <ul>
                <li><a href="carta.html"> <img src="img/icons8-men??-de-restaurante-32.png">Carta</a></li>
                <li><a href="especiales.html"> <img src="img/icons8-cubiertos-32.png" alt=""> Especiales </a></li>
                <li><a href="EquipoTrabajo.html"><img src="img/icons8-drink-50.png" alt="">Equipo </a></li>
                <li><a href="Servicios.html" class=""> <img src="img/icons8-recoger-en-restaurante-50.png" alt=""> Servicios </a>
                </li>
                <li><a href="reservas.html"><img src="img/icons8-reserva-50.png" alt="">Reservas </a></li>
            </ul>
        </div>
    </div>
    <!------------------menu-mobile-------------->
    <div class="menu-mobile">
        <div class="menu-open-close">
            <div class="header">
                <a href="" class="logo"><img src="img/klipartz.com (1).png" alt=""></a>
                <a href="#" id="buttonOpenCloseMenu">
                    <i class="fa-solid fa-bars"></i>
                </a>
            </div>
            <div id="menu-mobile-items" class="menu-mobile-closed">

                <ul>

                    <li><a href="carta.html"><img src="img/icons8-men??-de-restaurante-32.png"> Carta</a></li>
                    <li><a href="especiales.html"> <img src="img/icons8-cubiertos-32.png" alt=""> Especiales </a></li>
                    <li><a href="especiales.html"><img src="img/icons8-drink-50.png" alt="">Equipo </a></li>
                    <li><a href="Servicios.html" class=""> <img src="img/icons8-recoger-en-restaurante-50.png" alt=""> Servicios </a>
                    </li>
                    <li><a href="reservas.html"><img src="img/icons8-reserva-50.png" alt=""> Reservas </a></li>
                </ul>
            </div>
        </div>
    </div>

    

    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>??Ya tienes una cuenta?</h3>
                    <p>Inicia sesi??n para entrar en la p??gina</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesi??n</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>??A??n no tienes una cuenta?</h3>
                    <p>Reg??strate para que puedas iniciar sesi??n</p>
                    <button id="btn__registrarse">Reg??strarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="php/login_usuario.php" class="formulario__login" method="POST">
                    <h2>Iniciar Sesi??n</h2>
                    <input type="text" placeholder="Correo Electronico" name='correo'>
                    <input type="password" placeholder="Contrase??a" name="contrasena">
                    <button>Entrar</button>
                </form>

                <!--Register-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register" >
                    <h2>Reg??strarse</h2>
                    <input type="text" placeholder="Nombre completo" name='nombre_completo'>
                    <input type="email" placeholder="Correo Electronico" name='correo'>
                    <input type="text" placeholder="Usuario" name='usuario'>
                    <input type="password" placeholder="Contrase??a" name='contrasena'>
                    <button>Reg??strarse</button>
                </form>
            </div>
        </div>

    </main>
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="Box">
                <figure>
                    <a href="#">
                        <img src="img/LogoStyle2.png" alt="Logo de SLee Dw">
                    </a>
                </figure>
            </div>
            <div class="Box">
                <h2>CONTACTANOS</h2>
                ALOBRAVO@GMAIL.COM
                <br><br>
                +51 998741234

                <h2>UBICACION</h2>
                AV. LAS FLORES 545<br><br>
                SAN JUAN DE LURIGANCHO <br><br>
                LIMA <br><br>
                PER??
            </div>

            <div class="Box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/A-lo-Bravo-Restaurant-106148685459340"><img src="img/facebook.png" width="50px" alt=""></a>
              <a href="https://www.instagram.com/alobravorestaurant/"><img src="img/logotipo-de-instagram.png" width="50px" alt=""></a>
              <a href="https://api.whatsapp.com/send?phone=+51945058125&text=Tenemos%20una%20gran%20variedad%20de%20platos%20a%20la%20carta.%20%22A%20lo%20Bravo%22%20lo%20atendera%20a%20la%20brevedad%20posible"><img src="img/icons8-whatsapp-24 (1).png"  width="60px"  alt=""></a>

                </div>

            </div>
            <div class="Box">
                <h2>SOBRE NOSOTROS <br><br>
                    SOMOS EL GRUPO N??1
                </h2>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>A LO BRAVO</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
    <script>

        const openCloseButton = document.querySelector('#buttonOpenCloseMenu');
        const menuMobileItems = document.querySelector('#menu-mobile-items');

        openCloseButton.addEventListener('click', e => {
            menuMobileItems.classList.toggle('menu-mobile-closed')
        })

    </script>
    <script src="js/registro.js"></script>
</body>

</html>