<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SUPERMERCADOS ECONOMIA AYA/Registro</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="Css/normalize.css">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
  <link rel="stylesheet" href="resaltado.js">
  <link rel="shortcut icon" href="http://drive.google.com/uc?export=view&id=1SfSqPSFSHSOKbNPkrRsXGHPhFvOiQIEg" type="image/x-icon">
</head>

  <body>
  <header>
      <!-- Primero hacemos la franja roja-->
      <section class="franja-roja">      
            <div class="encierra-icono">
              <img src="http://drive.google.com/uc?export=view&id=15wda6PO-RNA2s29lximfU7ZAogsy43XB" alt="Icono de llamadas">
            </div>

            <div class="lineas">
              <p><strong> <a class="numer-uno" href="tel:+5732233398438">Lineas de atención: 32233398438-</a>
              <a class="numer-dos" href="tel:+573153400962">3153400962</a></strong></p><br>
            </div>

          <div class="iconos">
            <a class="links"  href="https://www.facebook.com/profile.php?id=100044680844154">
              <img src="http://drive.google.com/uc?export=view&id=1Imgm3YKNUU0jqT9LPhr4mxQpl4CQJzSe" class="social" alt="Facebook">
            </a>

            <a class="links" href="https://www.youtube.com/channel/UCZ0tWaE8nD4WwMQ69FniD2A">
              <img src="http://drive.google.com/uc?export=view&id=1SkgJjIaMb_vJ10cQzCmN3PlusnY2MJ0z" class="social" alt="YouTube">
            </a>


            <a class="links" href="https://web.telegram.org/k/">
              <img src="http://drive.google.com/uc?export=view&id=1RFYu17TrmI45p64EwTnw5Z4cp1eawAJu" class="social" alt="Telegram">
            </a>


            <a class="links" href="https://www.linkedin.com/feed/?trk=guest_homepage-basic_nav-header-signin">
              <img src="http://drive.google.com/uc?export=view&id=1aN2KZ5xUdro0P0kuoAuS7jUCGjAjJ5Xj" class="social" alt="LinkedIn">
            </a>
          </div>
      </section>

      <!--Empieza el menú de navegación-->
        <nav class="barra-nave">
          <div class="Logo">
            <img src="http://drive.google.com/uc?export=view&id=1SfSqPSFSHSOKbNPkrRsXGHPhFvOiQIEg" alt="Logo Supermercado">
          </div>
      
          <div class="titu-super">
            <h1 class="titulo">SUPERMERCADOS Y <br>
                DISTRIBUCIONES <br>
                ECONOMIA AYA</h1><br>
          </div>

          <div class="nues-esloga">
          <p class="eslogan">¡Compras inteligentes ahorros,<br> 
          constantes!</p><br>
          </div>

          <ul class="menu-nav">
            <li class="nav-item"><a href="inicio.html">Inicio<i class='bx bx-home'></i></a></li>
            <li class="nav-item"><a href="productos.html">Productos</a></li>
            <li class="nav-item"><a href="plaza.html">Plaza</a></li>
            <li class="nav-item"><a href="servicios.html">Servicios</a></li>
            <li class="nav-mayo"><a href="precios_may.html">Precios<br>
            <strong>Mayoristas</strong></a></li>
            <li class="nav-acerca"><a href="acerca_nos.html">Acerca de <br>
            <strong>Nosotros<i class='bx bx-chevron-down'></i></strong></a></li>
          </ul>

          <div class="usua">
          <img src="http://drive.google.com/uc?export=view&id=1Ly50udZ2RaDROYMvC-IVScBmr52ns-oZ" alt="usuario"></li>
          </div>

            <div class="registro">
              <ul class="registra"><a class="login" href="login.php">Registrate</a></ul>
            </div>
        </nav>
    </header>
        <!--Aqui finaliza el HEADER-->


    <!--A continuación el (login REGISTRO) de la página-->
    <section class="login_register">
      <div class="aden-login">
        <form class="formu" action="envio_datos.php" method="post">
          <h1 class="registrate">Regístrate</h1>
          <p>¡Conéctate con nosotros hoy!</p><br>
          
          <label>
            <i class='bx bx-user'></i>
            <input class="controls" type="text" id="nombre" name="bnombre_completo" placeholder="Nombre Completo" required><br>
            <br>
          </label>

          <label>
            <i class='bx bx-envelope'></i>
            <input class="controls" type="email" id="correo" name="bcorreo_electronico" placeholder="Correo Electrónico" required><br>
            <br>
          </label>

          <label>
            <i class='bx bx-phone'></i>
            <input class="controls" type="tel" id="telefono" name="bnumero_telefonico" placeholder="Número Telefónico" required><br>
            <br>
          </label>
  
          <label>
            <i class='bx bx-map'></i>
            <input class="controls" type="text" id="ciudad" name="bdepartamento" placeholder="Departamento" required><br>
            <br>
          </label>
  
          <label>
            <i class='bx bxs-city'></i>
            <input class="controls" type="text" id="ciudad" name="bciudad" placeholder="Ciudad" required><br>
            <br>
          </label>
  
          <p>Estoy de acuerdo con <a href="poli_term.html">Terminos y Condiciones</a></p><br>
          <div>
            <a href="inicio.html"><input class="register" type="submit" value="Regístrate"></a>  
            <!-- <a class="todo-regis" href="inicio.html">Registrate</a></ul> -->
          </div>
        </form>
      </div>
    </section>

    <!--Haremos el FOOTER-->
    <footer>
      <nav class="pie-pagina">
          <div class="acerca_nosotros">
            <h3>Acerca de Nosotros</h3>
          </div>

            <div class="primera-columna">
              <ul>
                <p>Neiva - Huila</p><br>
                <li>Calle 10 Sur No. 21-92</li>
                <p>Santa Isabel</p><br>
                <li>Cra 52 #26 A 03 Olaya</li>
                <p>Herrera</p>
              </ul>
            </div>

              <div class="ubica">
                <img src="http://drive.google.com/uc?export=view&id=1cgM_euKNWeGdKhlzNo31Y2NulpLA8UUp" alt="ubicación">  
              </div>

          <div class="importante">
            <h3>Importante</h3><br>
          </div>

            <div class="info-foot">
              <ul>
              <li><a href="poli_term.html">Política Privacidad -
                  <p>Términos y Condiciones</a></li><br></p>
              <li><a target="_blank" href="https://www.sic.gov.co/">Superintendencia de
                  <p>Industria y Comercio - 
                  SIC</a></li></p>
              </ul><br>
            </div>

          <div class="contacto-dueños">
            <h3>Contactanos</h3><br>
          </div>

              <div class="atencion">
                <img src="http://drive.google.com/uc?export=view&id=1DcvccSHxYHd1OSD26AensbrgZRonTllo" alt="Horario atención">
              </div>

              <div class="correo-uno">
                <img src="http://drive.google.com/uc?export=view&id=15Z8obCYh_3lHY_N8aDpixQxqmI3KyNk2" alt="Correo uno">
              </div>

              <div class="correo-dos">
                <img src="http://drive.google.com/uc?export=view&id=15Z8obCYh_3lHY_N8aDpixQxqmI3KyNk2" alt="Correo dos">  
              </div>

              <div class="horario-atencion">
                <p>Horario de atención: lunes a<br> domingos de 6:00 a.m a 8:30 p.m</p><br>  
              </div>

              <div class="dueño-uno">
                <p>Cristiancaya@hotmail.com</p><br>
              </div>
              
              <div class="dos-dueño">
                <p>Edwin10andres@gmail.com</p><br>
              </div>

              <div class="logo-super">
                <img src="http://drive.google.com/uc?export=view&id=1SfSqPSFSHSOKbNPkrRsXGHPhFvOiQIEg" alt="Logo Supermercado">
              </div>

              <div class="derechos">
                <p>©2023.SUPERMERCADOS LA ECONOMIA AYA
                |Todos los derechos reservados</p><br>  
              </div>

              <div class="datos-person">
                <p>01 8000 456220
                |Política de Tratamiento de Datos Personales</p>
              </div>
      </nav>
    </footer>
  </body>
</html>