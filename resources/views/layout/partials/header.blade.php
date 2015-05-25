<header class="header">
    <div class="content">
<!--        <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Config::get('languages')[App::getLocale()] }} <b class="caret"></b></a>
    <ul class="dropdown-menu">
        @foreach (Config::get('languages') as $lang => $language)
            @if ($lang != App::getLocale())
                <li>
                    {!! link_to_route('lang.switch', $language, $lang) !!}
                </li>
            @endif
        @endforeach
    </ul>
</li>-->
        <a href=""><img src="{{ asset('img/catalan.png') }}" alt='catalan' width="1px" height="1px" float="right" class='idioma'></img></a>
        <a href=""><img src="{{ asset('img/english.png') }}" alt='english' width="1px" height="1px" float="right" class='idioma'></img></a>
        <img src="{{ asset('img/balon.png') }}" alt="logo" width="60px" height="60px"/>        
        <h1>
            Webfutbol
            <span>ESCUELA DE FUTBOL</span>
            <span>Barcelona</span>
        </h1>
    </div>
</header>
