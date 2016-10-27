@extends('layouts.master')

@section('title', 'Generate Random users')

@section ('page-header', 'Random Users Generator')


@section('content')
    <form method='POST' action='/users'>

      {{ str_random(40) }}

      <br>

        {{ csrf_field() }}

        <label>How many users? (Max:99)</label><br>
          <input type='text' name='num_users' value='{{ session('users',$users) }}'>
          @if($errors->has('num_users'))
          <span class="label label-danger">{{ $errors->first('num_users') }}</span>
          @endif
          <br><br>

          <label>Date of Birth: </label>
          <input checked="checked" name="DOB" type="checkbox" value="1">
<br><br>
          <label>Profile: </label>
          <input checked="checked" name="profile" type="checkbox" value="1">
<br><br>
          <label>Profile Picture: </label>
          <input checked="checked" name="profile_pic" type="checkbox" value="1">
<br><br>
        <input class="btn btn-primary btn-bold-big" type='submit' value='Generate Users'>


    </form>

<br><br>
<h3>Input Entered: {{ session('users',$users) }}</h3>

@if(!empty (session('data',$data)))
  @foreach (session('data',$data) as $key => $value)
      @foreach ($value as $key1 => $value1)
      @if($key1 == 'profile')
        {!! lorem(1) !!}
      @elseif ( $key1 == 'profile_pic')
      <div class="content">
              <!-- Returns an image (1024x1024) -->
              {!! lorem()->image(200, 180, ['class' => 'img-responsive']) !!}
          </div>
      @else
        {{$value1}} <br/>
      @endif

      @endforeach
      <br/>
  @endforeach
@endif
<br><br>




@endsection
