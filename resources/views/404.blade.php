@extends('master.navbar')
@extends('master.layout')
@extends('master.css')

<!-- Main-error-wrapper -->
<div class="main-error-wrapper  page page-h ">
	<img src="{{URL::asset('assets/img/media/404.png')}}" class="error-page" alt="error">
	<h2>Oopps. The page you were looking for doesn't exist.</h2>
	<h6>You may have mistyped the address or the page may have moved.</h6><a class="btn btn-outline-danger" href="{{ url('/') }}">Back to Home</a>
</div>
<!-- /Main-error-wrapper -->
