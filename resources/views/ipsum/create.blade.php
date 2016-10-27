@extends('layouts.master')

@section('title', 'Generate Lorum Ipsum text')

@section ('page-header', 'Lorem Ipsum Generator')

@section('content')
    <form method='POST' action='/ipsum'>

        {{ csrf_field() }}

        <label>How many paragraphs of text you need to generate?</label><br>
          <input type='text' name='num_paragraphs' value='{{ old('num_paragraphs') }}'>
          @if($errors->has('num_paragraphs'))
          <span class="label label-danger">{{ $errors->first('num_paragraphs') }}</span>
          @endif
          <br><br>
        <input class="btn btn-primary btn-bold-big" type='submit' value='Generate Text'>


    </form>

<br><br>
<h3>Sample text:</h3>
<br><br>
    {!! lorem($paragraphs) !!}
@endsection
