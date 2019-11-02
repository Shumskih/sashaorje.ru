<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Sasha Orje') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="">
<header class="header">
    <nav class="nav d-inline-flex align-items-center justify-content-between pl-5 pr-5">
        <div class="logo ml-5">
            <h1 class="title"><a href="{{ route('index') }}"><span class="title-name">Sasha</span> <span
                        class="title-surname">Orje</span></a></h1>
        </div>
        <div class="links mr-5">
            <ul class="d-inline-flex">
                <li class="">
                    <a href="">Categories</a>
                </li>
                <li class="">
                    <a href="">Contacts</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<main class="main d-flex">
    <aside class="video-previews d-flex flex-column justify-content-around pl-2 pr-2">
        <div class="arrow-up text-center">
            <svg class="playlist-arrow" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 x="0px" y="0px"
                 width="284.929px" height="284.929px" viewBox="0 0 284.929 284.929"
                 style="enable-background:new 0 0 284.929 284.929;"
                 xml:space="preserve" fill="#ffffff">
<g>
    <path d="M282.082,195.285L149.028,62.24c-1.901-1.903-4.088-2.856-6.562-2.856s-4.665,0.953-6.567,2.856L2.856,195.285
		C0.95,197.191,0,199.378,0,201.853c0,2.474,0.953,4.664,2.856,6.566l14.272,14.271c1.903,1.903,4.093,2.854,6.567,2.854
		c2.474,0,4.664-0.951,6.567-2.854l112.204-112.202l112.208,112.209c1.902,1.903,4.093,2.848,6.563,2.848
		c2.478,0,4.668-0.951,6.57-2.848l14.274-14.277c1.902-1.902,2.847-4.093,2.847-6.566
		C284.929,199.378,283.984,197.188,282.082,195.285z"/>
</g>
</svg>
        </div>
        <div class="image-preview">
            <img class="preview" title="" alt=""
                 src="https://i.ytimg.com/vi/W7IxvKsZVMQ/hqdefault.jpg?sqp=-oaymwEjCPYBEIoBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLDp1MzhTMMpqbYB3lDQpwxVPijj-A"
                 width="100%" height="100%"/>
            <img class="youtube-icon" src="{{ asset('images/youtube.svg') }}" alt="" width="30px" height="30px">
        </div>
        <div class="image-preview">
            <img class="preview" title="" alt=""
                 src="https://i.ytimg.com/vi/w5MyMeRpTGQ/hqdefault.jpg?sqp=-oaymwEjCPYBEIoBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLBpXHYa8tRxbo2EF17V29YvQregTA"
                 width="100%" height="100%"/>
            <img class="youtube-icon" src="{{ asset('images/youtube.svg') }}" alt="" width="30px" height="30px">
        </div>
        <div class="image-preview">
            <img class="preview" title="" alt=""
                 src="https://i.ytimg.com/vi/2Dtx-FdKUkw/hqdefault.jpg?sqp=-oaymwEjCPYBEIoBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLCuY98tpGFfdMdNeSiSvaepKIIwDQ"
                 width="100%" height="100%"/>
            <img class="youtube-icon" src="{{ asset('images/youtube.svg') }}" alt="" width="30px" height="30px">
        </div>
        <div class="image-preview">
            <img class="preview" title="" alt=""
                 src="https://i.ytimg.com/vi/oMh7BkWxf88/hqdefault.jpg?sqp=-oaymwEjCPYBEIoBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLC_EsGwr-EvoBKwoTKgw8x5eAjzLg"
                 width="100%" height="100%"/>
            <img class="youtube-icon" src="{{ asset('images/youtube.svg') }}" alt="" width="30px" height="30px">
        </div>
        <div class="image-preview">
            <img class="preview" title="" alt=""
                 src="https://i.ytimg.com/vi/CkJKa1AptbE/hqdefault.jpg?sqp=-oaymwEjCPYBEIoBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLAQsRG_zhI_DpMRg_F2_LSAMDoz5w"
                 width="100%" height="100%"/>
            <img class="youtube-icon" src="{{ asset('images/youtube.svg') }}" alt="" width="30px" height="30px">
        </div>
        <div class="image-preview">
            <img class="preview" title="" alt=""
                 src="https://i.ytimg.com/vi/rAZfFcWIhqw/hqdefault.jpg?sqp=-oaymwEjCPYBEIoBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLAqo9Vv1mAt2sNw2xxXjLrTlHiGOg"
                 width="100%" height="100%"/>
            <img class="youtube-icon" src="{{ asset('images/youtube.svg') }}" alt="" width="30px" height="30px">
        </div>
        <div class="arrow-down text-center">
            <svg class="playlist-arrow" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 x="0px" y="0px"
                 width="284.929px" height="284.929px" viewBox="0 0 284.929 284.929"
                 style="enable-background:new 0 0 284.929 284.929;"
                 xml:space="preserve" fill="#ffffff">
<g>
    <path d="M282.082,76.511l-14.274-14.273c-1.902-1.906-4.093-2.856-6.57-2.856c-2.471,0-4.661,0.95-6.563,2.856L142.466,174.441
		L30.262,62.241c-1.903-1.906-4.093-2.856-6.567-2.856c-2.475,0-4.665,0.95-6.567,2.856L2.856,76.515C0.95,78.417,0,80.607,0,83.082
		c0,2.473,0.953,4.663,2.856,6.565l133.043,133.046c1.902,1.903,4.093,2.854,6.567,2.854s4.661-0.951,6.562-2.854L282.082,89.647
		c1.902-1.903,2.847-4.093,2.847-6.565C284.929,80.607,283.984,78.417,282.082,76.511z"/>
</g>
</svg>
        </div>
    </aside>
    <div class="play-icon">
        <svg class="play-icon--arrow" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px"
             width="357px" height="357px" viewBox="0 0 357 357" style="enable-background:new 0 0 357 357;"
             xml:space="preserve" fill="white">
            <g>
                <g id="play-arrow">
                    <polygon points="38.25,0 38.25,357 318.75,178.5 		"/>
                </g>
            </g>
        </svg>
    </div>
</main>
<footer class="footer"></footer>
</body>
</html>
