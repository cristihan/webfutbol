<header class="header">
    
    <div class="content">
        
         

        <a href="{{ route('lang.switch','ca') }}">
            <img src="{{ asset('img/catalan_1.png') }}" alt='catalan' width="1px" height="1px" float="right" class='idioma'></a>
        <a href="{{ route('lang.switch','en') }}">
            <img src="{{ asset('img/english_1.png') }}" alt='english' width="1px" height="1px" float="right" class='idioma'></a>
        <a href="{{ route('lang.switch','es') }}">
            <img src="{{ asset('img/spain.png') }}" alt='español' width="1px" height="1px" float="right" class='idioma'></a>
            
        <img src="{{ asset('img/balon.png') }}" alt="logo" width="60px" height="60px"/>        
        <h1>
            Webfutbol
            <span>
                {{ trans('validation.attributes.app_name') }}
            </span>
            <span>Barcelona</span>
        </h1>
    </div>
</header>
