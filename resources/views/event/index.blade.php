@extends('layouts.home')
@section('title','View all Events')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center">All Events</h1>
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
						@foreach ($events as $event)
							<tr>
								<th> {{ $event->id }} </th>
								<td> {{ $event->title }} </td>
								<td> {{ substr($event->body,0,50)}} {{ strlen($event->body) > 50 ? "...":" "}} </td>
								<td> {{ date('M j,Y',strtotime($event->created_at)) }} </td>
								<td><a href="{{route('event.show',$event->id)}}"class="btn btn-default">View</a> <a href="{{route('event.edit',$event->id)}}" class="btn btn-default">Edit</a>  <a href=""class="btn btn-default" >Delete</a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>		
	</div>
@stop