
<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>academiaMael</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--Creando el estilo y descripcion de nuestra pagina web para la visualizacion de nuestro usuarios-->
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">Academia Mael</a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="image/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicio</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>

            </nav>
        </div>
        <div class="header-content container">
            <div class="header-txt">
                <h1>¿Quienes somos?</h1>
                <p>
                    Somos un espacio dedicado al desarrollo de atletas destacados
                    en el taekwondo, donde se promueve un ambiente familiar y de 
                    apoyo mutuo. En Mael, no solo se busca la excelencia en el,
                    deporte,sino tambien se fomenta valores como la diciplina y el
                    compañerismo, creando asi una comunidad unida y comprometida con 
                    el crecimiento personal y deportivo de cada miembro.

                </p>
                <a href="#" class="btn-1">informacion</a>

            </div>
            <div class="header-img">
                <img src="image/left.jpg" alt="">

            </div>

        </div>

    </header>
    
    <section class="about container">
        <div class="about-img">
            <img src="image/about.jpg" alt="">

        </div>
        <div class="about-txt">
            <h2>¡Bienvenido!</h2>
            <p>
                Únete a nuestra familia y descubre el poder del verdadero espíritu 
                deportivo en la Academia Mael.
            </p>
            <br>
            <p>
                "Descubre tu potencial, desafía tus límites y conviértete en la mejor 
                versión de ti mismo en la Academia Mael. Juntos, alcanzaremos nuevas 
                alturas y lograremos grandes cosas. ¡Únete a nuestra familia y descubre 
                el poder que hay en ti!"

            </p>

        </div>
        
    </section>
    <!--Servicios que contiene la academia-->
    <main class="servicios">
        <h2>Servicios</h2>
        <div class="servicios-content container">

            <div class="servicio-1">
                <i class="fas fa-hand-rock"></i>
                <h3>Entrenamiento</h3>
            </div>

            <div class="servicio-1">
                <i class="fas fa-hammer"></i>
                <h3>Calistenia</h3>
            </div>

            <div class="servicio-1">
                <i class="fas fa-dumbbell"></i>
                <h3>GYM</h3>
            </div>

        </div>

    </main>

    <section class="formulario container">
        
        <form method=" post" autocomplete="off">

            <h2>Agendar inscripcion</h2>

            <div class="input-group">

                <div class="input-container">
                    <input type="text" name="name" id="name" placeholder="Nombre y apellido">
                    <i class="fa-solid fa-user"></i>

                </div>
    
                <div class="input-container">
                    <input type="tel" name="phone" id="phone" placeholder="Numero telefonico">
                    <i class="fa-solid fa-phone"></i>
            
                </div>
    
                <div class="input-container">
                    <input type="email" name="email" id="email" placeholder="Correo electronico">
                    <i class="fa-solid fa-envelope"></i>

                    
                </div>
    
                <div class="input-container">
                    <textarea name="message" id="message" cols="30" rows="5" placeholder="Detalle de la inscripcion" ></textarea>
                   
                    
                </div>

                <input class="btn" type="submit" value="Enviar" onClick="myFuction()">

            </div>
        </form>
        
    </section>

    <footer class="footer">
        <div class="footer-content container">

            <div class="link">
                <a href="#" class="logo">logo</a>
            </div>
            <div class="link">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
                
            </div>

        </div>
    </footer>
    <?php
        include("send.php");
    ?>
    <script>
        function myfuction(){
            window.location.href="http://localhost/paginamael"
        }
    </script>
</body>