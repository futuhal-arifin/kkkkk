@extends('layout')
@section('content')
    @foreach($users as $user)
        <p>{{ $user->password }}</p>
    @endforeach
@stop