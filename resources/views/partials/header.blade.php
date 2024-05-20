<header class="bg-white">
   <div id="logo" class="text-center">
        <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
   </div>
   <div id="main-menu">
        <nav class="navbar-nav container navbar-light">
            <ul>
                <li>
                    <a class="nav-link {{ Route::currentRouteName() == 'welcome' ? 'active text-warning' : ''}}" 
                        href="{{route('welcome')}}">
                        Home
                    </a>
                </li>
                <li>
                    <a class="nav-link {{ Route::currentRouteName() == 'about' ? 'active text-warning' : ''}}" 
                        href="{{route('about')}}">
                        About
                    </a>
                </li>
            </ul>
        </nav>
   </div>
</header>