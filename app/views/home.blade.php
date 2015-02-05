@extends('layouts.base')

@section('head')
	@parent
	<link href={{URL::asset("assets/css/style.css")}} rel="stylesheet">
@stop

@section('wrapper')
	<div class="wrapper">
		<header class="header">
			Header part!
		</header>
		<div class="container">
			<div class="top-container">fixed search bar</div>
			<div class="content-container">
				<div class="box">box</div>
				<div class="box">box</div>
				<div class="box">box</div>
				<div class="box">box</div>
				<div class="box">box</div>
				<div class="box">box</div>
				<div class="box">box</div>
				<div class="box">box</div>
				<div class="box">box</div>
				<div class="box">box</div>
				<div class="box">box</div>
				<div class="box">box</div>
				<div class="box">box</div>
				<div class="box">box</div>
				<div class="box">box</div>
			</div>
		</div>
	</div>
@stop