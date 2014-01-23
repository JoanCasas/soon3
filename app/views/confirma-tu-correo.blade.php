@extends('master')

@section('menu')
	<li><a href="http://www.oasis4x4.com">Volver a Oasis4x4</a></li>
@stop

@section('content')

<div class="background-gray">
        <div class="starter-template">
          <h1 class="centered">Ya casi estamos!</h1>
          <p class="lead centered">
              Ahora solo queda confirmar tu correo electrónico mediante el enlace de confirmación que te hemos enviado.</br> <br> 
          </p>
        </div> <!-- final .starter-template -->
      </div> <!-- final background1 -->
      
<div class="background-white">
        <div class="starter-template">
          <h3>Para que sea más fácil, aquí tienes algunos de los correos mas habituales:</h3>
          <div class="wraper-mails">
	          <div class="gmail correo">
		          <img class="img-desktop" src="{{ url('images/gmail.jpg')}}" alt="Correo electronico de google Gmail">
		          <img class="img-mobile" src="{{ url('images/gmail-mobile.jpg')}}" alt="Correo electronico de google Gmail pequeña">
		          <a href="http://www.gmail.com" class="mail-link"></a>
	          </div>
	          <div class="outlook correo">
		          <img class="img-desktop" src="{{ url('images/outlook.jpg')}}" alt="Correo electronico de Microsoft Hotmail-Outlook">
		          <img class="img-mobile" src="{{ url('images/outlook-mobile.jpg')}}" alt="Correo electronico de Microsoft Hotmail-Outlook pequeña">
		          <a href="http://www.hotmail.com" class="mail-link"></a>	
	          </div>
	          <div class="yahoo correo">
		          <img class="img-desktop" src="{{ url('images/yahoo.jpg')}}" alt="Correo electronico de Yahoo">
		          <img class="img-mobile" src="{{ url('images/yahoo-mobile.jpg')}}" alt="Correo electronico de Yahoo pequeña">
		          <a href="http://es.mail.yahoo.com/" class="mail-link"></a>	
	          </div>
	          <div class="aol correo">
		          <img class="img-desktop" src="{{ url('images/aol.jpg')}}" alt="Correo electronico de Aol">
		          <img class="img-mobile" src="{{ url('images/aol-mobile.jpg')}}" alt="Correo electronico de Aol">
		          <a href="http://mail.aol.com" class="mail-link"></a>	
	          </div>
          </div>
        </div> <!-- final .starter-template -->
      </div> <!-- final background2 -->


@stop