@extends('layout')

@section('content')
    
<h2>Damage calculator</h2>
<div>
<select name="levels" id="levels">
@for ($i = 0; $i <= 18; $i++)
<option>{{ $i }}</option>
@endfor
</select>
<p>{{ $champion->class }}</p>
<p>{{ $champion->name }}</p>
<label>Enemy Champion</label>
<select name="enemy" id="enemy">
</select>
</div>

@endsection