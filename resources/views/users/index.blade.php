@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
		<div class="col-md-12">
			<h1>Users Management</h1>
			{{ $users->links() }}
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>E-Mail</th>
						</tr>
					</thead>
					<tbody>
						@forelse($users as $user)
							<tr>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
							</tr>
						@empty
							<tr>
								<td colspan="2" class="danger">No users available</td>
							</tr>
						@endforelse
					</tbody>
				</table>
			</div>
			{{ $users->links() }}
		</div>
    </div>
</div>
@endsection