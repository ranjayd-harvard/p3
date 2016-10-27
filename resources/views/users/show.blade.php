@extends('layouts.master')

@section('title', 'Generate Lorum Ipsum text')

@section ('page-header', 'Generated text ')

@section('content')
        <h1> Geneating {{ $paragraphs }} of {{ $dob }}</h1>
        <br><br>

        {!! lorem($paragraphs) !!}

@endsection
