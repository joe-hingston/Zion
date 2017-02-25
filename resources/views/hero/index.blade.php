@extends('layouts.app')

@section('content')

    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$hero->name}}</div>

                <div class="panel-body">

                    <ul class="list-group">

                        <li>
                            Experience: {{$hero->hero_experience}}
                        </li>
                        <li>
                           Gender: {{$hero->hero_gender}}
                        </li>
                        <li>
                            User Id: {{$hero->user_id}}
                        </li>
                        <li>
                            Hero Clan: {{$hero->hero_clan_id}}
                        </li>
                            <li class="list-group-item">
                                <span class="badge">{{ $hero->faction->name }} </span>
                                {{ $hero->hero_name }}
                            </li>

                    </ul>

                    {{ dd($hero->heroships) }}

                </div>
            </div>
        </div>
    </div>
    </div>

@endsection