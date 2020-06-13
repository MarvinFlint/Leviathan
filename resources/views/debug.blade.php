@extends('layout')

@section('content')
    
<div class="main calc">
    <div class="left">
        <h3>Kennen</h3>
        <label for="level">Level</label>
        <select name="level" id="level">
            <option value="0">Select a level</option>
            @for ($i = 1; $i <= 18; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
        <label for="hp">Hp:<span class="hp"></span></label>
        <label for="ar">Armor:<span class="ar"></span></label>
        <label for="mr">Mr:<span class="mr"></span></label>
        <label for="ap">Ap:<span class="ap"></span></label>
        <label for="mpen">Mpen<span class="mpen"></span></label>
        <h4>Items</h4>
        <p>Klick on items you have</p>
        <div class="items">
            <img class="item" data-name="protobelt" data-ap="60" src="/images/items/protobelt.webp" alt="proto">
            <img class="item" data-name="morellomonicon" data-ap="70" src="/images/items/morellomonicon.webp" alt="proto">
        </div>
    </div>
    <div class="right">
        <h3>Enemy</h3>
        @php
            $champions = [
                'Shen',
                'Irelia',
                'Jax'
            ];
            $championCount = count($champions);
        @endphp
        <label for="enemy">Champ</label>
        <select name="enemy" id="enemy">
            <option value="default">Select an enemy champion</option>
            @for ($i = 0; $i < $championCount; $i++)
            <option value="{{ $champions[$i] }}">{{ $champions[$i] }}</option>
            @endfor     
        </select>
        <label for="enemyLevel">Level</label>
        <select name="enemyLevel" id="enemyLevel">
            <option value="0">Select a level</option>
            @for ($i = 1; $i <= 18; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
    </div>
</div>

@endsection