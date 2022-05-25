@extends('template.base')

@section('title', 'Modifica il personaggio')

@section('content')
<div class="container">
    <form action="{{ route('admin.monsters.update', $monster->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="my-2">
            <label for="index" class="form-label">Index</label>
            <input armor_class="text" name="index" id="index" class="form-control" value="{{ old('index', $monster->index) }}">
        </div>
        @error('index')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="my-2">
            <label for="name" class="form-label">Name</label>
            <input armor_class="text" name="name" id="name" class="form-control" value="{{ old('name', $monster->name) }}">
        </div>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="my-2">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control" value="{{ old('type', $monster->type) }}">
        </div>
        @error('type')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="my-2">
            <label for="alignment" class="form-label">Alignment</label>
            <input type="text" name="alignment" id="alignment" class="form-control" value="{{ old('alignment', $monster->alignment) }}">
        </div>
        @error('alignment')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="my-2">
            <label for="size" class="form-label">Size</label>
            <input type="text" name="size" id="size" class="form-control" value="{{ old('size', $monster->size) }}">
        </div>
        @error('size')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="my-2">
            <label for="hit_dice" class="form-label">Hit Dice</label>
            <input type="text" name="hit_dice" id="hit_dice" class="form-control" value="{{ old('hit_dice', $monster->hit_dice) }}">
        </div>
        @error('hit_dice')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="my-2">
            <label for="languages" class="form-label">Languages</label>
            <input type="text" name="languages" id="languages" class="form-control" value="{{ old('languages', $monster->languages) }}">
        </div>
        @error('languages')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="my-2">
            <label for="armor_class" class="form-label">Armor Class</label>
            <input type="number" name="armor_class" id="armor_class" class="form-control" value="{{ old('armor_class', $monster->armor_class) }}">
        </div>
        @error('hit_points')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="my-2">
            <label for="hit_points" class="form-label">Hit Points</label>
            <input type="number" name="hit_points" id="hit_points" class="form-control" value="{{ old('hit_points', $monster->hit_points) }}">
        </div>
        @error('hit_points')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="my-2">
            <label for="strength" class="form-label">Strength</label>
            <input type="number" name="strength" id="strength" class="form-control" value="{{ old('strength', $monster->strength) }}">
        </div>
        @error('strenght')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="my-2">
            <label for="dexterity" class="form-label">Dexterity</label>
            <input type="number" name="dexterity" id="dexterity" class="form-control" value="{{ old('dexterity', $monster->dexterity) }}">
        </div>
        @error('dexterity')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="my-2">
            <label for="constitution" class="form-label">constitution</label>
            <input type="number" name="constitution" id="constitution" class="form-control" value="{{ old('constitution', $monster->constitution) }}">
        </div>
        @error('constitution')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="my-2">
            <label for="intelligence" class="form-label">Intelligence</label>
            <input type="number" name="intelligence" id="intelligence" class="form-control" value="{{ old('intelligence', $monster->intelligence) }}">
        </div>
        @error('intelligence')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="my-2">
            <label for="wisdom" class="form-label">Wisdom</label>
            <input type="number" name="wisdom" id="wisdom" class="form-control" value="{{ old('wisdom', $monster->wisdom) }}">
        </div>
        @error('wisdom')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="my-2">
            <label for="charisma" class="form-label">Charisma</label>
            <input type="number" name="charisma" id="charisma" class="form-control" value="{{ old('charisma', $monster->charisma) }}">
        </div>
        @error('charisma')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="my-2">
            <label for="xp" class="form-label">Xp</label>
            <input type="number" name="xp" id="xp" class="form-control" value="{{ old('xp', $monster->xp) }}">
        </div>
        @error('xp')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="my-2">
            <label for="challenge_rating" class="form-label">Challenge Rating</label>
            <input type="number" name="challenge_rating" id="challenge_rating" class="form-control" value="{{ old('challenge_rating', $monster->challenge_rating) }}">
        </div>
        @error('challenge_rating')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="my-4">
            <button class="btn btn-primary my-2">Salva</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
</div>
@endsection
