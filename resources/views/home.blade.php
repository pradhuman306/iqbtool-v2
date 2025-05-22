<!DOCTYPE html>
@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>{{ $content['title'] ?? 'No Title' }}</h1>
    <p>{{ $content['body'] ?? 'No Content' }}</p>
@endsection
