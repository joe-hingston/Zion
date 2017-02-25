@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Hero</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('hero.store') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('hero_name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="hero_name" type="text" class="form-control" name="hero_name" value="{{ old('hero_name') }}" required autofocus>

                                    @if ($errors->has('hero_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('hero_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('hero_gender') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Gender</label>

                                <div class="col-md-6">

                                    <select class="form-control" name="hero_gender" id ="hero_gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="mayonnaise">Whatever you want me to be baby</option>
                                    </select>

                                    @if ($errors->has('hero_gender'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('hero_gender') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('faction_id') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Faction</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="faction_id" id ="faction_id">
                                    @foreach ($factions as $faction)
                                        <option value="{{ $faction->id }}">{{ $faction->name }}</option>
                                    @endforeach
                                    </select>

                                    @if ($errors->has('faction_id'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('faction_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <h4>Appearance shit</h4>

                            <p>lots of cool appearance shit which we'll record and serialize for a hero_appearance field</p>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Create
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
