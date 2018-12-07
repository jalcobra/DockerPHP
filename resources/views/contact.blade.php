@extends('plantilla')

@section('contenido')

    
<!-- 
    ================================================== 
        Global Page Section Start
    ================================================== -->
    <section class="global-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2>Contact</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{ route('home') }}">
                                    <i class="ion-ios-home"></i>
                                    Home
                                </a>
                            </li>
                            <li class="active">Contact</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- 
================================================== 
Contact Section Start
================================================== -->
<section id="contact-section">
<div class="container">
    <div class="row">
            <!-- se crea un if donde se pregunta si la llave flash existe -->
            @if(session()->has('flash'))
            <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <!-- se trae el mensaje de la session flash -->
                    {{ session()->get('flash') }}
            </div>
            @endif
            <!-- se cierra el if -->
        <div class="col-md-6">
            <div class="block">
                <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">CONTACTA CONMIGO</h2>
                <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, ea!
                     consectetur adipisicing elit. Dolore, ea!
                </p>
                <div class="contact-form">
                <form method="post" action="{{ route('messages') }}" role="form">
                    <!-- Se agrega un token de validacion, en laravel siempre se debe usar -->
                    {{ csrf_field() }}

                        <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                            <input type="text" placeholder="Nombre" class="form-control" name="name" id="name" required>
                        </div>
                        
                        <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                            <input type="email" placeholder="Email" class="form-control" name="email" id="email" required>
                        </div>
                        
                        <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                            <input type="text" placeholder="Asunto" class="form-control" name="subject" id="subject" required>
                        </div>
                        
                        <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                            <textarea rows="6" placeholder="Mensaje" class="form-control" name="body" id="message" required></textarea>    
                        </div>
                        
                        <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                            <input type="submit" class="btn btn-default btn-send" value="Enviar Mensaje">
                        </div>                      
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
             <div class="map-area">
                <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Find Us</h2>
                <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                    Si aute quis eu proident o cupidatat ne anim nescius, et est praesentibus, o quorum vidisse expetendis, nostrud eram quibusdam ad nam nostrud ubi.
                    
                </p>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.475234676721!2d-75.50789798571556!3d10.383778069158774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef625e76cfcd80f%3A0xd171f835b24529a2!2sUnnamed+Road%2C+Cartagena%2C+Bol%C3%ADvar!5e0!3m2!1ses!2sco!4v1540323538240" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
</section>  


    
@endsection
