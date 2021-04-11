<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    
    <title>Home</title>
  


 
</head>
<body>
<div id="app">
    <div style="background-color: #343a40;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    @php $locale = session()->get('locale'); @endphp
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @switch($locale)
                                @case('en')
                                <img width="20" src="{{asset('images/us.jpg')}}">English
                                @break
                                @case('kz')
                                <img width="20" src="{{asset('images/kz.jpeg')}}"> Қазақ тілі
                                @break
                                @case('ru')
                                <img width="20" src="{{asset('images/ru.jpeg')}}"> Русский
                                @break
                                @default
                                <img width="20" src="{{asset('images/us.jpg')}}"> English
                            @endswitch
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/en"><img width="20" src="{{asset('images/us.jpg')}}"> English</a><br>
                            <a class="dropdown-item" href="/kz"><img width="20" src="{{asset('images/kz.jpeg')}}"> Қазақ тілі</a><br>
                            <a class="dropdown-item" href="/ru"><img width="20" src="{{asset('images/ru.jpeg')}}"> Русский язык</a>
                           
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <main class="py-4">
        @yield('content')
    </main>
</div>  
</body>
</html>