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
                        <div>{{ $monster->index }} </div>
                        <div>{{ $monster->name }} </div>
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
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
