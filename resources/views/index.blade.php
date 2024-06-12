<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    
    <title>Filadelfia</title>
</head>
<body>

    <header>
        <div class="contenedor margin_container">
            <img src="{{ asset('images/logo.png') }}" alt="Filadelfia" class="logo">
            <nav class="navegacion_principal">
                <a href="#">Inicio</a>
                <a href="#">Alas de Miranda</a>
                <a href="#">Contacto</a>
                <a href="#">Donar</a>
                <a href="#">Recursos</a>
            </nav>
        </div>
    </header>

    <section class="banner">
        <div class="font_banner">
            <div class="grid_doble">
                <div class="titulo_banner">
                    <h1>Fieles de <br> FILADELFIA</h1>
                    
                    <div> 

                    </div>
                </div>
                <div class="content_banner">
                    <div class="marco">
                        <h2>Donde el amor a Dios <br> y a la familia es lo mas importante</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum dicta labore illum itaque expedita! At ad quibusdam voluptas, 
                            illum dolores repellat iste voluptatibus, officia dolorum dolor, inventore saepe numquam a.</p>
                        <div class="boton_unir">
                            <a href="#">Unetenos!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <section class="margin_container">
        <h2>Nuestros Pastores</h2>
        <div class= "seccion_pastores">
            <img src="{{ asset('images/pastores.jpg') }}" alt="Pastores">
            <div>
                
                <h3>Amir y Yomaira de Alcoba</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio ratione, corrupti vel placeat sunt in iste optio! 
                    Quas quisquam ratione maxime, corporis rerum laborum assumenda dolores similique vitae deserunt mollitia minus 
                    deleniti blanditiis vero, ex odit libero saepe necessitatibus ut dicta tempore ipsum earum accusantium possimus? 
                    Recusandae, odio, autem harum doloribus nesciunt, reiciendis deserunt esse dolorum laudantium ab corporis laborum 
                    architecto nam non? Alias similique esse consequatur nihil natus deserunt dolorem temporibus reiciendis perspiciatis 
                    praesentium. Inventore sed facere laudantium possimus doloribus eos at praesentium enim fuga vel, consequatur 
                    quia iure animi natus repellendus tempore saepe tempora soluta quasi, beatae alias.</p>
            </div>   
        </div>
         
    </section>

</body>
</html>