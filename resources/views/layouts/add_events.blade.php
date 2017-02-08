@extends('layouts.admin')

@section('content')

        @if  (Auth::guest())

        <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        @else
        <div id="page-content-wrapper">
    <h3>Add News<span class="label label-default"></span></h3>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <script src="{{asset('ckeditor.js')}}"></script>
            <form  action="insert_events" method="post" file="true" enctype="multipart/form-data">

            <input type="text" class="form-control" placeholder="Title" aria-describedby="sizing-addon2" name="title" style="width:300px;" />
            <br>
            <input type="date" class="form-control" placeholder="Date" aria-describedby="sizing-addon2" name="date" style="width:300px;" />
            <br>
            <input type="time" class="form-control" placeholder="Time" aria-describedby="sizing-addon2" name="time" style="width:300px;" />
            
            <br><br>
            <textarea style="width: 500px;" cols="80" id="editor1" name="editor1" rows="10">
            </textarea>
            <script>
                CKEDITOR.replace( 'editor1' );
            </script>

            <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
            <input type="file" name="image"/></br>
            <p>
                <input type="submit" value="Submit">
            </p>
        </form>
        </br>

                            
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div>
                        
        @endif


@endsection

