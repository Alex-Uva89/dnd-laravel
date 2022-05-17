@extends('template.base')

@section('title', 'Home')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Home</h1>
                <a href="{{ route('monsters.index') }}" class="btn btn-primary">Monsters</a>
            </div>
        </div>
    </div>

@endsection
