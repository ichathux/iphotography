@extends('layouts.sample')

@section('content')
			<br><br>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">                       
    				<img src="/upload/profile picture/{{ $user->picture }}" style="width: 150px; height: 150px; border-radius: 50%; float: left; margin-right: 25px;">
    				<form enctype="multipart/form-data" action="/profile" method="POST">
    					<label>Update Profile Picture</label>
    					<input type="file" name="profile_picture">
    					<input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
    					<input type="submit" class="pull-right btn btn-sm btn-primary">
    				</form>
    				<h2>
                     <div class="page-header">
  {{ Auth::user()->name }} Profile</h2>
</div>       
					
                        
                    </div>
                </div>
            </div>
      
@endsection