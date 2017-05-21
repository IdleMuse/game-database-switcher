@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($gameinstances as $instance)
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        {{$instance->user->name}} : {{$instance->database_name}}
                    </div>
                </div>
            </div>
        @endforeach
        <div class="col-md-12">
            <a class="btn btn-raised btn-block" href="{{route('games.new')}}">New Game</a>
        </div>
    </div>
</div>
@endsection
