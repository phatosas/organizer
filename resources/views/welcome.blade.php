@extends('layouts.master')

@section('title')
	Welcome
@endsection

@push('head')

@endpush

@section('content')

	
	@if (Auth::check())
            <div class="content">
                <div class="title m-b-md">
                    Organizer
                </div>

                <div class="links">
                    <a href="{{ url('/calender') }}">Calender</a>
					<a href="{{ url('/todo') }}">Todo</a>
                    <a href="https://laracasts.com">Notes</a>
                    <a href="https://laravel-news.com">Budget</a>
					<a href="https://laravel-news.com">Reminders</a>
					
                </div>
					
            </div>
	@else
            <div class="content">
                <div class="title m-b-md">
                    Organizer
                </div>
            </div>
	@endif

@endsection

@push('body')
@endpush
