@extends('layouts.home')
@section('title','View Notice')

@section('newnotice')
<div class="container-fluid">
	<div class="col-md-8 col-md-offset-2">
		<div class="content">
			<div class="row">
				<div class="card">
					<div class="header">
					<h4 class="title">{{$notice->title}}</h4>
						<p class="category">Uploaded by: {{ Auth::user()->name }} </p>
						<hr>
					</div>
					<div class="content">
						<div class="description chart-legend">
							@if ($notice->image)
								<img src=" {{asset('images/'.$notice->image)}} height="700" width="400" ">
								<br><br>
								<a href="{{asset('images/'.$notice->image)}}" style="color:blue;">View Full Picture</a>
							@endif
							<hr>
							<article> {{ $notice->body }} </article>
						</div>
						<div class="footer">
							<hr>
							<div class="stats">
								<i class=""></i> Updated at: {{ date('M j, y h:ia',strtotime($notice->updated_at)) }}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection