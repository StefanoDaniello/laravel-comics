@extends('layouts.app')

@section('title', 'home')

@section('content')
    <h2>Welcome</h2>
    <a href="/about-me">about</a>
    <ul>
        
        @foreach ($comics as $comic)
            <li>
                {{$comic['title']}}
            </li>
        @endforeach
    </ul>

    <!-- 
   <div id="main-menu">
        <nav class="navbar-nav container navbar-light">
            <ul>
                <li>
                    <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active text-warning' : ''}}" 
                        href="{{route('home')}}">
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
   </div> -->
@endsection