@extends('game.layout')

@section('content')

@if( $request->input('action') == 'newgame')
	
	 @include('game.partials.playground')

@else

	 @include('game.partials.welcome')

@endif

@endsection