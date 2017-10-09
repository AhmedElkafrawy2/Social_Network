@extends('layouts.app')

@section('content')
<div class="content-login-page">
    <div class="container">
        <div class="row">
             @include('welcomepagelogo')
            <div class="col-md-8 col-md-offset-2 reg-margin-body">
                   
                    

                    <div class="panel-body col-md-12">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                <label for="firstname" class="col-md-4 control-label">First Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                    @if ($errors->has('firstname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('firstname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                <label for="lastname" class="col-md-4 control-label">Last Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                    @if ($errors->has('lastname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            <div class="form-group gender-container">
                                
                                <label for="email" class="col-md-4 control-label">Gender</label>
                                <div class="col-md-6">
                                    <label class="radio-inline"><input type="radio" name="optradio" value="male" checked>Male</label>
                                    <label class="radio-inline"><input type="radio" name="optradio" value="female">Female</label>
                                </div>
                            </div>
                            <div class="form-group birthday-register">
                                <div class="col-md-1">
                                    
                                    <label for="email" class="control-label">BirthDay</label>
                                </div>
                                <div class="col-md-1{{ $errors->has('birth-day') ? ' has-error' : '' }}">
                                    <select class="form-control" name="birth-day">
                                        <option value="0">D</option>
                                        <?php
                                            for($i=1 ; $i<= 31 ; $i++){

                                                echo "<option>". $i ."</option>";
                                            }
                                        ?>

                                    </select>

                                </div>
                                <div class="col-md-1{{ $errors->has('birth-month') ? ' has-error' : '' }}">
                                    <select class="form-control"  name="birth-month">
                                        <option value="0">M</option>
                                        <?php
                                        for($i=1 ; $i<= 12 ; $i++){
                                          
                                            echo "<option>". $i ."</option>";
                                        }
                                        ?>
                                    
                                    </select>
                                </div>
                                <div class="col-md-1{{ $errors->has('birth-year') ? ' has-error' : '' }}">
                                    <select class="form-control"  name="birth-year">
                                        <option value="0">Y</option>
                                        <?php
                                        for($i=1990 ; $i<= 2017 ; $i++){
                                          
                                            echo "<option>". $i ."</option>";
                                        }
                                        ?>
                                    
                                    </select>
                                </div>
                                

                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                
            </div>
        </div>
    </div>
</div>    
@endsection
