<section class="inscripciones_inicio">

    <h1>
        <a href="#">{{ trans('validation.attributes.inscripcion') }}</a>        
    </h1>

    <div class="contenido">
        <a href="{{ route('jugadores.create') }}" class="boton_1">{{ trans('validation.attributes.inscribite') }}
           
        </a>
    </div>

    <img src="{{ asset('img/inscripciones.png') }}" alt="inscripciones" class="cover"/>

</section>