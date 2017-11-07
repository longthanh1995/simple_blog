@extends('admin.layouts.master')
@section('head.title', 'Admin Dashboard')
@section('content')
<div class="col-md-9">
	<!-- Website Overview -->
	<div class="panel panel-default">
		<div class="panel-heading main-color-bg">
			<h3 class="panel-title">Users (Total: {!! $users->count() !!} users)</h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-12">
					<input class="form-control" type="text" placeholder="Filter Users...">
				</div>
			</div>
			<br>
			<table class="table table-striped table-hover">
				<tr>
					<th><input type="checkbox"></th>
					<th>Name</th>
					<th>Email</th>
					<th>Joined</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
				@foreach($users as $user)
					<tr>
						<td><input type="checkbox" class="list_users[]"></td>
						<td>{!! $user->name !!}</td>
						<td>{!! $user->email !!}</td>
						<td>{!! date('M j, Y', strtotime($user->created_at)) !!}</td>
						<td>
							@if($user->status == 0)
								<span class="label label-warning">Banned</span>
							@else 
								<span class="label label-success">Active</span>
							@endif
						</td>
						<td>
							<a class="btn btn-info btn-xs" href="#"><i class="fa fa-pencil"></i> Edit</a> 
							<a class="btn btn-danger btn-xs" href="#"><i class="fa fa-trash-o"></i> Delete</a>
						</td>
					</tr>
				@endforeach
			</table>
		</div>
	</div>

</div>
@stop