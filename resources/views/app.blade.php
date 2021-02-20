<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles Tailwind-->
        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}
		{{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}

        <!-- Styles Semantic -->
		<link rel="stylesheet" href="{{url('css/semantic.min.css')}}">

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
		@inertia
	</body>
	<script src="{{url('js/jquery.min.js')}}"></script>
	<script src="{{url('js/semantic.min.js')}}"></script>
</html>
