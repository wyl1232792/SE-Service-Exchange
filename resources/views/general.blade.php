@extends('master')

@section('layout')

@include('header')

<div id="body">
	@yield('body')
</div>

@include('footer')