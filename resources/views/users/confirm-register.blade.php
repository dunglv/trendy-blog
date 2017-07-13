@extends('index')
@section('content')
	An Email have been sent to your email.Please check email and active your account by click on link in your email. See you later.
	<a href="{{ route('ui.home') }}">Back home and wath more</a>
@stop