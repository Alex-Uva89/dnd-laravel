@extends('template.base')
@section('title', 'Monster')

@section('content')

<h3>{{$monster->name}}</h3>
<div>index:{{ $monster->index }} </div>
<div>type:{{ $monster->type }} </div>
<div>alignment:{{ $monster->alignment }} </div>
<div>armor_class:{{ $monster->armor_class }} </div>
<div>hit_points:{{ $monster->hit_points }} </div>
<div>size:{{ $monster->size }} </div>
<div>strength:{{ $monster->strength }} </div>
<div>dexterity:{{ $monster->dexterity }} </div>
<div>constitution:{{ $monster->constitution }} </div>
<div>intelligence:{{ $monster->intelligence }} </div>
<div>wisdom:{{ $monster->wisdom }} </div>
<div>charisma:{{ $monster->charisma }} </div>
<div>xp:{{ $monster->xp }} </div>
<div>challenge_rating:{{ $monster->challenge_rating }} </div>
<div>hit_dice:{{ $monster->hit_dice }} </div>
<div>languages:{{ $monster->languages }} </div>

@endsection
