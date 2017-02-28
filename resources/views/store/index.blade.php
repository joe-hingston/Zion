@extends('layouts.app')

@section('content')


    <div class="container">
        @if (Session::has('flash-message'))
            <div class="alert alert-danger" role="alert">
                {{Session::get('flash-message')}}
            </div>
        @endif
        <h3>You currently have {{ Auth::user()->taers }} Taers.</h3>
        <h2>Shop Items</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Taers</th>
                <th>Experience Requirement</th>
            </tr>
            </thead>
            <tbody>
    @foreach($storeitems as $shipupgrade)
        <tr>
            <td> {{$shipupgrade->upgrade_name}}</td>
            <td>{{$shipupgrade->upgrade_cost}}</td>
            <td>{{$shipupgrade->upgrade_experience_cost}}</td>
            <td>
                <form action="/purchaseshipupgrade" method="POST">
                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="_item_id" value="{{$shipupgrade->id}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button>Purchase</button>
                </form>
            </td>
        </tr>
    @endforeach
            </tbody>
        </table>
    </div>

@endsection
