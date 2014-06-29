@extends('layout.signin')

@section('content')
            <!-- if there are login errors, show them here -->
@if(Auth::check())
    <p class="navbar-text pull-right">
        Hello {{ Auth::user()->fullname }}
        <a href="{{ URL::to('logout')}}" >Logout</a>
    </p>
@endif

{{ Form::open(array('url' => 'login','class'=>'form-signin')) }}
        <h1>{{ Config::get('site.name')}}</h1>
        <h2 class="form-signin-heading">Please sign in</h2>
            @if (Session::get('loginError'))
                <div class="alert alert-danger">{{ Session::get('loginError') }}</div>
                     <button type="button" class="close" data-dismiss="alert"></button>
            @endif
        <p>
            {{ $errors->first('email') }}
            {{ $errors->first('password') }}
        </p>

        <p>
            {{ Form::label('email', 'Email Address') }}
            {{ Form::text('email', Input::old('email')) }}
        </p>
        <p>
            {{ Form:: label('password', 'Password') }}
            {{ Form::password('password') }}
        </p>
        <p>
            <label class="checkbox">
              <input type="checkbox" id="checks" value="remember-me" checked="checked">
              Remember me
              <span class="check" for="checks"></span>
            </label>
        </p>

    <p>{{ Form::submit('Submit!',array('class'=>'btn btn-primary')) }}</p>
{{ Form::close() }}

@stop