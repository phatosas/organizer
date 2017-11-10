@extends('layouts.master')

@section('title')
	Todo	
@endsection

@push('head')
@endpush

@section('content')
		 <div class="content">
         <div class="title m-b-md">
            Organizer
         </div>
	@if (Auth::check())
		<div class="page">
			<p>{{ date('l jS \of F Y') }}<p>
			@foreach($todos as $todo)
				@if (strtotime($todo->start_dt) >= strtotime("today") && strtotime($todo->start_dt) < strtotime("today 24:00"))
				<p>
				 {{ $todo->title }} 
				 {{ date('h:i A \-', strtotime($todo->start_dt)) }}
				 {{ date( 'h:i A', strtotime($todo->end_dt)) }}
				</p>
				@endif
			@endforeach
		</div>
	@endif
	</div>

@endsection

@push('body')
@endpush
