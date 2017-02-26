@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    @if (Session::has('flash-message'))
                    <div class="alert alert-danger" role="alert">
                        {{Session::get('flash-message')}}
                    </div>
                    @endif

                    <ul class="list-group">

                        @foreach (Auth::user()->heroes as $hero)
                            <li class="list-group-item">

                                <form action="{{ URL::route('hero.destroy',$hero['id']) }}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button>Delete</button>
                                </form>

                                <span class="badge">{{ $hero->faction->name }} </span>
                                <a href=" {{route('hero.index')}}/{{$hero->id}}" >{{ $hero->hero_name }} </a> <button class="btn btn-large btn-primary">Enter Space</button>
                            </li>


                        @endforeach
                    </ul>

                    <a href="/hero/create">Create a hero!</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
