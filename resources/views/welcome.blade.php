@extends('layouts.app')

@section('title', 'Welcome')

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
@endsection