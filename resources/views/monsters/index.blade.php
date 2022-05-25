@extends('template.base')

@section('title', 'Monsters')

@section('content')

    <div class="container">
        <h1>Monsters</h1>
        <a href="{{ route('admin.monsters.create') }}" class="btn btn-primary">Create Monster</a>
        <div class="row mb-3 gap-3">
            @foreach ($monsters as $monster)
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <a class="btn btn-primary" href="{{ route('admin.monsters.show', $monster->id) }}">Open Card</a>
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
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('admin.monsters.edit', $monster->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('admin.monsters.destroy', $monster->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $monsters->links() }}
    </div>

@endsection
