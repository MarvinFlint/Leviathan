@extends('layout')

@section('header')
<header>
<h2>Search and select your champion</h2>    
</header>    
@endsection

@section('content')

<main>
    <div class="select">
        <h2>Select your champion</h2>
        <div>            
            @for ($i = 0; $i <= 5; $i++)
            <div class="champ">
                <img class="test">
            </div>           
            @endfor
        </div>
    </div>
</main>
    
@endsection
