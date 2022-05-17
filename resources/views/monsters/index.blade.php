@extends('template.base')

@section('title', 'Monsters')

@section('content')

    <div class="container">
        <h1>Monsters</h1>
        <a href="{{ route('monsters.create') }}" class="btn btn-primary">Create Monster</a>
        <div class="row">
            @foreach ($monsters as $monster)
                <div class="col-md-3 g-3">
                    <div class="card">
                        <div>Name: {{ $monster->name }} </div>
                        <div>Type: {{ $monster->type }} </div>
                        <div>Alignment: {{ $monster->alignment }} </div>
                        <div>Armor Class: {{ $monster->armor_class }} </div>
                        <div>Hit Points{{ $monster->hit_points }} </div>
                        <div>Size: {{ $monster->size }} </div>
                        <div>Strenght: {{ $monster->strength }} </div>
                        <div>Dexerity: {{ $monster->dexterity }} </div>
                        <div>Constitution: {{ $monster->constitution }} </div>
                        <div>Intelligence: {{ $monster->intelligence }} </div>
                        <div>Wisdom: {{ $monster->wisdom }} </div>
                        <div>Charisma: {{ $monster->charisma }} </div>
                        <div>Xp: {{ $monster->xp }} </div>
                        <div>Challenge rating: {{ $monster->challenge_rating }} </div>
                        <div>Hit dice: {{ $monster->hit_dice }} </div>
                        <div>Languages: {{ $monster->languages }} </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
