@extends('template.base')
@section('title')

@section('content')

<h3>{{$monster->name}}</h3>
<div>{{ $monster->index }} </div>
<div>{{ $monster->type }} </div>
<div>{{ $monster->alignment }} </div>
<div>{{ $monster->armor_class }} </div>
<div>{{ $monster->hit_points }} </div>
<div>{{ $monster->size }} </div>
<div>{{ $monster->strength }} </div>
<div>{{ $monster->dexterity }} </div>
<div>{{ $monster->constitution }} </div>
<div>{{ $monster->intelligence }} </div>
<div>{{ $monster->wisdom }} </div>
<div>{{ $monster->charisma }} </div>
<div>{{ $monster->xp }} </div>
<div>{{ $monster->challenge_rating }} </div>
<div>{{ $monster->hit_dice }} </div>
<div>{{ $monster->languages }} </div>

@endsection
