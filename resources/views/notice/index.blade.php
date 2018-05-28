@extends('layouts.home')
@section('title','View all Notices')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center">All Notices</h1>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<th>#</th>
						<th>Title</th>
						<th>Body</th>
						<th>Created At:</th>
						<th></th>
					</thead>
					<tbody>
						@foreach ($notices as $notice)
							<tr>
								<th> {{ $notice->id }}</th>
								<td> {{ $notice->title }} </td>
								<td> {{ substr($notice->body, 0, 50)}} {{ strlen($notice->body) > 50 ? "...":" " }} </td>
								<td> {{date('M j, Y',strtotime($notice->created_at))}} </td>
								<td><a href="#"class="btn btn-default">View</a> <a href="#" class="btn btn-default">Edit</a>  <a href=""class="btn btn-default" >Delete</a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>		
	</div>
@stop