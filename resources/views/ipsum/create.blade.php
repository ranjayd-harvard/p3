@extends('layouts.master')

@section('title', 'Generate Lorum Ipsum text')

@section ('page-header', 'Lorem Ipsum Generator')

@section('content')
    <form method='POST' action='/ipsum'>

      <div class="formBg">
        {{ csrf_field() }}

        <label>How many paragraphs of text you need to generate?</label><br>
          <input type='text' name='num_paragraphs' value='{{ old('num_paragraphs') }}'>
          @if($errors->has('num_paragraphs'))
          <span class="label label-danger">{{ $errors->first('num_paragraphs') }}</span>
          @endif
          <br><br>
        <input class="btn btn-primary btn-bold-big" type='submit' value='Generate Text'>

      </div>
    </form>
<hr>
<h2>Sample text:</h2>

<br>
    {!! lorem($paragraphs) !!}

    <hr>
@endsection
