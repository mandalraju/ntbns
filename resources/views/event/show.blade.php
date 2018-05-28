@extends('layouts.home')
@section('title','View Event')

@section('newevent')
<div class="container-fluid">
	<div class="col-md-8 col-md-offset-2">
		<div class="content">
			<div class="row">
				<div class="card">
					<div class="header">
					<h4 class="title">{{$event->title}}</h4>
						<p class="category">Uploaded by: {{ Auth::user()->name }} </p>
						<hr>
					</div>
					<div class="content">
						<div class="">
							@if ($event->image)
							<img class="" src="{{ URL::asset('images/'.$event->image) }}" height="700" width="400">
							<br>
							<a target="_blank" href="{{URL::asset('images/'.$event->image)}}">Viwe Pic</a>
							@endif
							<article class="text-center	">{{ $event->body}}</article>
						</div>
					
						<div class="footer">
							<div class="stats">
								<i class=""></i>Uploaded at: {{ date('M j, Y h:ia',strtotime($event->created_at)) }}
								<br>
								<i class=""></i>Updated at: {{ date('M j, Y h:ia',strtotime($event->updated_at)) }}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection