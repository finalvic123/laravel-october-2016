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
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@forelse($users as $user)
							<tr>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
								<td>
									{{-- edit, show details, delete --}}
									<a href="{{ route('users.show',['user' => $user->id]) }}" class="btn btn-primary">Details</a>

									<a href="{{ route('users.edit',['user' => $user->id]) }}" class="btn btn-warning">Edit</a>

									<div onclick="confirmDelete({{ $user->id }})" 
										class="btn btn-danger">Delete</div>
								</td>
							</tr>
						@empty
							<tr>
								<td colspan="3" class="danger">No users available</td>
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

@section('scripts')
<script type="text/javascript">
	function confirmDelete(id) {
		if(confirm('Are you sure want to delete this record?')) {
			var data = {
				_token : window.Laravel.csrfToken,
				_method : 'delete'
			}
			$.post('/users/' + id, data, function(data, textStatus, xhr) {
				alert(data);
				window.location = '{{ route('users.index') }}';
			});
		}
	}
</script>
@endsection