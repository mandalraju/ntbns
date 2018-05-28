@extends('layouts.home')
@section('title','Create Notice')

@section('form')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Notice</h1>
			<hr>
			<form class="form-group" method="POST" action="{{route('notice.store')}}" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div>				
					<label for="title" class="form-group">Notice Title:</label>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"><i class="fa fa-pencil"></i></span>
						<input name="title" type="text" class="form-control" placeholder="Notice Title" aria-describedby="basic-addon1">
					</div>
				</div>
				<br>
				<div>
					<label for="image">Images for Notice:</label>
					<input type="file" name="image">
				</div>
				<br>
				<div>
					<label for="body" class="form-group">Notice Description:</label>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"><i class="fa fa-keyboard-o"></i></span>
						<textarea name="body" id="body" cols="30" rows="15" class="form-control" placeholder="Type the notice description here!!"></textarea>
					</div>
				</div>
				<br>
				<div>
					<button class="btn btn-success btn-lg btn-block">Create Post</button>
				</div>

			</form>
		</div>
	</div>
</div>
@endsection