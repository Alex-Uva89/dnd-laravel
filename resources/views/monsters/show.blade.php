@extends('template.base')
@section('title', 'Monster')

@section('content')

<div class="container">
    <div class="card m-4">
        <h3 class="border border-warning p-2  text-center">{{$monster->name}}</h3>
        <div class="d-flex justify-content-around">
            <div class="p-3">
                <div>Index: {{ $monster->index }} </div>
                <div>Type: {{ $monster->type }} </div>
                <div>Alignment: {{ $monster->alignment }} </div>
                <div>Armor_class: {{ $monster->armor_class }} </div>
                <div>Hit_points: {{ $monster->hit_points }} </div>
                <div>Size: {{ $monster->size }} </div>
                <div>Strength: {{ $monster->strength }} </div>
                <div>Dexterity: {{ $monster->dexterity }} </div>
            </div>
            <div class="p-3">
                <div>Constitution: {{ $monster->constitution }} </div>
                <div>Intelligence: {{ $monster->intelligence }} </div>
                <div>Wisdom: {{ $monster->wisdom }} </div>
                <div>Charisma: {{ $monster->charisma }} </div>
                <div>Xp: {{ $monster->xp }} </div>
                <div>Challenge_rating: {{ $monster->challenge_rating }} </div>
                <div>Hit_dice: {{ $monster->hit_dice }} </div>
                <div>Languages: {{ $monster->languages }} </div>
            </div>
        </div>
        <a class="btn btn-white" href="{{ url()->previous() }}">Indietro</a>

    </div>

@endsection
