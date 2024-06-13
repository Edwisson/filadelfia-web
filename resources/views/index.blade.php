
    @extends('layouts.app')
    
    @section('content')
    
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
  
    @endsection
