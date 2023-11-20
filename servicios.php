<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPERMERCADOS LA ECONOMIA AYA/Servicios</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Css/normalize.css">
    <link rel="shortcut icon" href="http://drive.google.com/uc?export=view&id=1SfSqPSFSHSOKbNPkrRsXGHPhFvOiQIEg" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <script src="scrip_telegram.js"></script>
</head>

  <body>
    <?php
      session_start();
      if (!isset($_SESSION["buser_complet"])) {
      // Redirigir al usuario a la página de inicio de sesión
      header("Location: inicio_sesion.php");
      exit();
    }
    ?> 
    <header>
      <!-- Primero hacemos la franja roja-->
      <section class="franja-roja">      
        <img src="http://drive.google.com/uc?export=view&id=15wda6PO-RNA2s29lximfU7ZAogsy43XB" class="encierra-icono" alt="Icono de llamadas">

        <p class="lineas"> <a href="tel:+5732233398438">Lineas de atención: 32233398438 - 3153400962 <a href="tel:+573153400962"></a></p>

        <a target="_blank" class="links" href="https://www.facebook.com/profile.php?id=100044680844154">
          <img src="http://drive.google.com/uc?export=view&id=1Imgm3YKNUU0jqT9LPhr4mxQpl4CQJzSe" class="sociala" alt="Facebook">
        </a>

        <a target="_blank" class="links" href="https://www.youtube.com/channel/UCZ0tWaE8nD4WwMQ69FniD2A">
          <img src="http://drive.google.com/uc?export=view&id=1SkgJjIaMb_vJ10cQzCmN3PlusnY2MJ0z" class="social" alt="YouTube">
        </a>

        <a target="_blank" class="links" href="https://web.telegram.org/k/">
          <img src="http://drive.google.com/uc?export=view&id=1RFYu17TrmI45p64EwTnw5Z4cp1eawAJu" class="social" alt="Telegram">
        </a>

        <a target="_blank" class="links" href="https://www.linkedin.com/feed/?trk=guest_homepage-basic_nav-header-signin">
          <img src="http://drive.google.com/uc?export=view&id=1aN2KZ5xUdro0P0kuoAuS7jUCGjAjJ5Xj" class="social" alt="LinkedIn">
        </a>
      </section>

      <!--Empieza el menú de navegación-->
        <nav class="barra-nave">
          <img src="http://drive.google.com/uc?export=view&id=1SfSqPSFSHSOKbNPkrRsXGHPhFvOiQIEg" class="Logo" alt="Logo Supermercado">

          <h1 class="titulo">SUPERMERCADOS Y <br> DISTRIBUCIONES LA <br> ECONOMIA AYA</h1>
          <p class="eslogan">¡Compras inteligentes ahorros,<br> constantes!</p>

          <ul class="nav-barra">
            <li class="nav-item"><a href="inicio.php">Inicio<i class='bx bx-home'></i></a></li>
            <li class="nav-item"><a href="productos.php">Productos</a></li>
            <li class="nav-item"><a href="plaza.php">Plaza</a></li>
            <li class="nav-item"><a href="servicios.php">Servicios</a></li>
            <li class="nav-mayo"><a href="precios_may.php">Precios<br>
            <strong>Mayoristas</strong></a></li>
            <li class="nav-acerca"><a href="acerca_nos.php">Acerca de <br>
            <strong>Nosotros<i class='bx bx-chevron-down'></i></strong></a></li>
            <li><img src="http://drive.google.com/uc?export=view&id=1gQEfUh73GiC-aImOyq1uvO4UUWsrt2De" alt="cerrar"></li>
            <li class="sesion"><a class="regis-titu" href="cerrar.php">Cerrar Sesión</a></li>
        </ul>
      </nav>
            <div class="float-tele">
              <img src="http://drive.google.com/uc?export=view&id=1EfPZU41xnEg-Y4_K5C7fkanuzrCt7FrU" class="telegram" 
              alt="App Telegram" onclick="window.open('https://t.me/supereconomiaaya', 'telegram', 'width=700, height=700');">
            </div>
    </header>
    <!--Aqui finaliza el HEADER-->

    <!--CONTENIDO PRINCIPAL DE LA PÁGINA-->
    <main>
    <section>
        <h3 class="servi-ofre">Los servicios que ofrecemos en nuestra empresa son los siguientes:</h3>
      </section>

        <section>
          <div class="parrafo-amplia">
            <p class="renglones"><strong>Amplia Variedad de Productos:</strong> Nos enorgullecemos de ofrecerte una selección diversa y <br>
            completa de productos de la canasta familiar, así como una frescura inigualable en nuestras <br> frutas y verduras. Desde 
            productos básicos hasta exquisiteces, nuestra tienda está <br> cuidadosamente surtida para satisfacer todas 
            tus necesidades y deseos culinarios.</p>
        </div>
          <div class="slider-uno">
            <img src="http://drive.google.com/uc?export=view&id=1gBWQGE_1Q_B2A8IiqxmxpvrPQVgD-c3Z" class="grano-uno" alt="pro granos">
            <img src="http://drive.google.com/uc?export=view&id=1K6ZhZb2kjC90anP39gaJgd9IgWsZuCWb" alt="granos">
          </div>
        </section>

        <section>
          <div class="parrafo-domicilios">
            <p class="renglones"><strong>Domicilios Eficientes:</strong> ¿Necesitas tus compras entregadas en tu puerta? ¡Nosotros nos <br>
              encargamos! Ofrecemos un servicio de entrega a domicilio en todos los barrios de la ciudad <br> de Neiva-Huila, y también 
              en los diferentes pueblos y corregimientos de nuestro <br> departamento. Nuestro equipo de reparto está dedicado a 
              llevar tus compras directamente a <br> tu hogar, con puntualidad y cuidado.</p>
          </div>
          <div class="slider-dos">
            <img src="http://drive.google.com/uc?export=view&id=1pSoZaTO223soDE3XzFW1dYFjPlX2kj3c" alt="carro">
          </div>
        </section>

        <section>
          <div class="parrafo-servicio">
            <p class="renglones"><strong>Servicio Personalizado:</strong> Creemos que cada cliente es único. Por eso, nuestro equipo 
            está <br> preparado para brindarte un servicio personalizado y atento. Si necesitas ayuda para <br> encontrar un producto
            específico o tienes preguntas sobre estos, nuestro personal amable y <br> conocedor está siempre dispuesto a ayudarte.</p>
          </div>
          <div class="slider-tres">
            <img src="http://drive.google.com/uc?export=view&id=15EXl3O8Derz-6RdKY9gvwLAkRp-y5p63" alt="servicio">
          </div>
        </section>
        
        <section>
          <div class="parrafo-frescura">
            <p class="renglones"><strong>Calidad y Frescura Garantizadas:</strong> La calidad es nuestra máxima prioridad. Trabajamos <br> 
            incansablemente para garantizar que cada producto que llega a tu hogar sea fresco, <br> saludable y delicioso. Nuestras 
            frutas y verduras son seleccionadas cuidadosamente para <br> asegurar su frescura y sabor natural.</p>
          </div>
          <div class="slider-cuatro">
            <img src="http://drive.google.com/uc?export=view&id=1l_5j86AVD3LblqRVsXfQ2RIv4yE3U7ez" alt="canasta plaza">
          </div>
        </section>

        <section>
          <div class="parrafo-impacto">
            <p class="renglones"><strong>Impacto Positivo en Nuestros Clientes:</strong> Más allá de simplemente vender, nos esforzamos <br> por crear un 
            impacto positivo en la vida de nuestros clientes. Queremos que tu experiencia <br> de compra sea no solo conveniente, sino 
            también agradable y memorable. Estamos aquí <br> para hacer tu vida más fácil y satisfactoria.</p>
          </div>
          <div class="slider-cinco">
            <img src="http://drive.google.com/uc?export=view&id=1gZuOXZO2eZ8VOVGg1JNmAPzBCCBK_QmT" alt="caritas">
          </div>
        </section> 
        
        <section>
          <div class="parrafo-contacto">
            <h3>Contacto</h3>
            <p class="renglones">Para obtener más información sobre nuestros servicios y realizar tu pedido puedes <br>
            visitar todo nuestro sitio web o comunicarse con nosotros a través de los números de <br> teléfono o mediante nuestro 
            canal de Telegram dándole un click en el icono de la app <br> que aparece arriba en la esquina superior derecha, el 
            cual lo redirige al canal ya antes <br> mencionado.</p>
          </div>
          <div class="slider-seis">
            <img src="http://drive.google.com/uc?export=view&id=1yXLCNSO9hLvvjnfWn-iL5dwmC6xQxQph" alt="celular">
          </div>
        </section>
    </main>
    
    <!--Haremos el FOOTER-->
    <footer>
      <nav class="pie-pagina">
        <h3 class="acerca_nosotros">Acerca de Nosotros</h3>
        <img src="http://drive.google.com/uc?export=view&id=1cgM_euKNWeGdKhlzNo31Y2NulpLA8UUp" class="ubica" alt="ubicación">  
          <ul class="primera-columna">
            <p class="caluroso">Neiva - Huila</p><br>
            <li class="Calle">Calle 10 Sur No. 21-92</li>
            <p class="isab">Santa Isabel</p>
            <li class="Carre">Cra 52 #26 A 03 Olaya</li>
            <p class="Olaya">Herrera</p>
          </ul>

        <h3 class="importante">Importante</h3>
          <ul class="info-foot">
          <li><a href="poli_term.html">Política Privacidad - <p class="condi">Términos y Condiciones</a></li></p>
          <li class="inten"><a target="_blank" href="https://www.sic.gov.co/">Superintendencia de
              <p class="indus">Industria y Comercio SIC</a></li></p>
          </ul>

        <h3 class="contacto-dueños">Contactanos</h3>
        <img src="http://drive.google.com/uc?export=view&id=1DcvccSHxYHd1OSD26AensbrgZRonTllo" class="atencion" alt="Horario atención">
        <img src="http://drive.google.com/uc?export=view&id=15Z8obCYh_3lHY_N8aDpixQxqmI3KyNk2" class="correo-uno" alt="Correo uno">
        <img src="http://drive.google.com/uc?export=view&id=15Z8obCYh_3lHY_N8aDpixQxqmI3KyNk2" class="correo-dos" alt="Correo dos">  
        <p class="horario-atencion">Horario de atención: lunes a<br> domingos de 6:00 a.m a 8:30 p.m</p>  
        <p class="dueño-uno">Cristiancaya@hotmail.com</p>
        <p class="dos-dueño">Edwin10andres@gmail.com</p>
        <img src="http://drive.google.com/uc?export=view&id=1SfSqPSFSHSOKbNPkrRsXGHPhFvOiQIEg" class="logo-super" alt="Logo Supermercado">
        <p class="derechos">©2023.SUPERMERCADOS LA ECONOMIA AYA <br>|Todos los derechos reservados</p> 
        <p class="datos-person">01 8000 456220|Política de Tratamiento de Datos Personales</p>
      </nav>
    </footer>
  </body>
</html>