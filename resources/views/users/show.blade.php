@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
		<div class="col-md-12">
			<h1>User Details</h1>

			<div class="well well-small">
				<h3>{{ $user->name }} <small>{{ $user->email }}</small></h3>

				<a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
			</div>
		</div>
	</div>
</div>
@endsection