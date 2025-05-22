@extends('layouts.app')
@section('title', 'Contact')
@section('content')
    <h1>Contact</h1>
    <p>If you have any questions, feel free to reach out!</p>       
@include('components.Emailform')
    <p>For more information, visit our <a href="{{ route('home') }}">home page</a>.</p>     
@endsection