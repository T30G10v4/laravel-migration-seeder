@extends('layouts.app')

@section('title', 'Tutti i Treni')
@endsection

@section('content')
@foreach ($trains as $train)
    <h1>{{ $train->codice - treno }}</h1>
@endforeach
@endsection
