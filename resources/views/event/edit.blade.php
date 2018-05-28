@extends('layouts.home')
@section('title','Create Events')

@section('form')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Edit Event</h1>
			<hr>
			<form class="form-group" method="PATCH" action="{{route('event.update',$event->id)}}" enctype="multipart/form-data">
				<div>				
					<label for="title" class="form-group">Event Title:</label>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"><i class="fa fa-pencil"></i></span>
						<input name="title" type="text" class="form-control" value=" {!! $event->title !!} " aria-describedby="basic-addon1">
					</div>
				</div>
				<br>
				<div>
					<label for="image">Images for Event:</label>
					<input type="file" name="image">
				</div>
				<br>
				<div>
					<label for="body" class="form-group">Event Description:</label>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"><i class="fa fa-keyboard-o"></i></span>
						<textarea name="body" id="body" cols="30" rows="15" class="form-control" >{!! $event->body !!}</textarea>
					</div>
				</div>
				<br>
				<div>
					<button class="btn btn-success btn-lg btn-block">Create Event</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection