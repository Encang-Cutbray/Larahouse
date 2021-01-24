@extends('mails.layout')
@section('content')
	<div class="ui icon floating message">
		<i class="inbox icon"></i>
		<div class="content">
			<div class="header">
				Email Verification {{$user->name}} / {{$user->email}}
			</div>
			<p>Click this link to complate your registration</p>
			<a href="">LINK</a>
		</div>
	</div>
@endsection
