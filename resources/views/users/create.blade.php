@extends('layouts.master')

@section('title', 'Generate Random users')

@section ('page-header', 'Random Users Generator')


@section('content')
    <form method='POST' action='/users'>

      <div class="formBg">
        {{ csrf_field() }}

        <label>How many users? (Max:99)</label><br>
          <input type='text' name='num_users' value='{{ session('users',$users) }}'>
          @if($errors->has('num_users'))
          <span class="label label-danger">{{ $errors->first('num_users') }}</span>
          @endif
          <br>

          <label>Date of Birth: </label>
          <input type="checkbox" name="dob" checked="checked">
<br>
          <label>Profile: </label>
          <input type="checkbox" name="profile"  checked="checked">
<br>
          <label>Profile Picture: </label>
          <input type="checkbox" name="profile_pic"  checked="checked">
<br>
        <input class="btn btn-primary btn-bold-big" type='submit' value='Generate Users'>
      </div>

    </form>

<hr>
<h3>Generated data for <strong>{{ session('users',$users) }}</strong> users</h3>

@if(!empty (session('data',$data)))
  @foreach (session('data',$data) as $key => $value)

    <div class="row">
      <div class="col-md-12 colPadding">
      @foreach ($value as $key1 => $value1)
      @if($key1 == 'profile')
        {!! lorem(1) !!}
      @elseif ( $key1 == 'profile_pic')
      <div class="content">
              <!-- Returns an image (1024x1024) -->
              {!! lorem()->image(200, 180, ['class' => 'img-responsive']) !!}
          </div>
      @elseif ( $key1 == 'name')
       <strong>{{$value1}}</strong>
      @else
        {{$value1}}
      @endif
      <br/>

      @endforeach
      </div></div>
  @endforeach
@endif
<br><br>




@endsection
