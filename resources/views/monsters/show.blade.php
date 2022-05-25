@extends('template.base')
@section('title', 'Monster')

@section('content')

<h3>{{$monster->name}}</h3>
<div>Index: {{ $monster->index }} </div>
<div>Type: {{ $monster->type }} </div>
<div>Alignment: {{ $monster->alignment }} </div>
<div>Armor_class: {{ $monster->armor_class }} </div>
<div>Hit_points: {{ $monster->hit_points }} </div>
<div>Size: {{ $monster->size }} </div>
<div>Strength: {{ $monster->strength }} </div>
<div>Dexterity: {{ $monster->dexterity }} </div>
<div>Constitution: {{ $monster->constitution }} </div>
<div>Intelligence: {{ $monster->intelligence }} </div>
<div>Wisdom: {{ $monster->wisdom }} </div>
<div>Charisma: {{ $monster->charisma }} </div>
<div>Xp: {{ $monster->xp }} </div>
<div>Challenge_rating: {{ $monster->challenge_rating }} </div>
<div>Hit_dice: {{ $monster->hit_dice }} </div>
<div>Languages: {{ $monster->languages }} </div>

@endsection
