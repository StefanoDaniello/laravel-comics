<?php
$menu = [
    'CHARACTERS',
    'COMICS',
    'MOVIES',
    'TV',
    'GAMES',
    'COLLECTIBLES',
    'VIDEOS',
    'FANS',
    'NEWS',
    'SHOP'
];
?>

<header class="bg-light">

    <nav class="container d-flex justify-content-between py-4" >

        <div>
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo"/>
        </div>

        <ul class="d-flex align-items-center none-1">
            @foreach ($menu as $menuItem) 
            <li class="mx-2 fw-bold text-h " >
                {{$menuItem}}
                <div class="border-b"></div>
            </li>
            @endforeach
           
        </ul>

        <div class="mt-4 none-1" id="search-container">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Search"/>
        </div>
    </nav>


    <div id="logo">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="logo">
    </div>


</header>



<style lang="scss" scoped>
    .border-b{
        border:5px solid transparent;
    }
    .text-h:hover{
        color: #0C7CEC;
        .border-b{
        width: 100%;
        border-color:#0C7CEC;
        border-radius: 10px;
        transform: translate(0, 66px);
        transition: 0.5s ease-in-out;
        }
    }
    #search-container{
       position: relative;
        input{
            padding-left:25px;
            border: none;
            border-bottom: 2px solid #0C7CEC;
            outline: none;
            width: calc(100% - 25px);
            font-size: 15px;
            background-color: transparent;
        }
        i{
            position: absolute;
            left: 5px;
        }
    }
   
</style>