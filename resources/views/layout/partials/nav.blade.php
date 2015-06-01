<nav class="nav">
    <div class="content">
        <ul>
            <li><a href="{{ route('app.index') }}">{{ trans('validation.attributes.inicio') }}</a></li>
            <li><a href="{{ route('jugadores.create') }}">{{ trans('validation.attributes.inscripcion_escuela') }}</a></li>
            <li><a href="{{ route('categorias.index') }}">{{ trans('validation.attributes.categorias') }}</a></li>
            <li><a href="{{ route('entrenamientos.index') }}">{{ trans('validation.attributes.entrenamiento') }}</a></li>
            <li><a href="#">{{ trans('validation.attributes.competicion') }}</a></li>            
            <li><a href="{{ route('users.index') }}">{{ trans('validation.attributes.entrenadores') }}</a></li> 
            <li><a href="{{ route('partidos.index') }}">{{ trans('validation.attributes.partidos') }}</a></li> 
             <li><a href="#">{{ trans('validation.attributes.estadisticas') }}</a></li> 
           
        </ul>
    </div>
</nav>