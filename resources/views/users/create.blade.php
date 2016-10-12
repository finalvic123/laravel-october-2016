@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
		<div class="col-md-12">
			<h1>Create New User</h1>

			<div class="well well-small">
				<form 
					class="form-horizontal" 
					method="post" 
					action="{{ route('users.store') }}"
				>
					<fieldset>

					{{ csrf_field() }}

					{{-- <input type="hidden" name="some" value="some1"> --}}

					<!-- Form Name -->
					<legend>New User</legend>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="name">Name</label>  
					  <div class="col-md-4">
					  <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">
					  {{-- Display Error --}}
					    @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="email">E-mail</label>  
					  <div class="col-md-4">
					  <input id="email" name="email" type="text" placeholder="" class="form-control input-md">
					     @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
					  </div>
					</div>
					
					<!-- Password input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="password">Password</label>
					  <div class="col-md-4">
					    <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">
					    @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
					  </div>
					</div>

					<!-- Password input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="password_confirmation">Retype Password</label>
					  <div class="col-md-4">
					    <input id="password_confirmation" name="password_confirmation" type="password" placeholder="" class="form-control input-md" required="">
					    
					    @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
					  </div>
					</div>

					

					<!-- Button (Double) -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for=""></label>
					  <div class="col-md-8">
					    <button id="" name="" class="btn btn-success">Save</button>
					    <a href="{{ route('users.index') }}" class="btn btn-danger">Cancel</a>
					  </div>
					</div>

					</fieldset>
					</form>

				
			</div>
		</div>
	</div>
</div>
@endsection