@extends('layouts.app')

@section('title', 'Tutti i Treni')

@section('content')
    @foreach ($trains as $train)
        <h1>{{ $train->codice_treno }}</h1>
    @endforeach
@endsection
