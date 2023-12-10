@extends('layouts.app')

@section('title', 'List of Users')

@section('content')
    <h1>List of Users</h1>

    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }} - {{ $user->email }}</li>
        @endforeach
    </ul>
@endsection