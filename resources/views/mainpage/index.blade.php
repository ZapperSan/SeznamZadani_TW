@extends('layouts.adminLayout')

@include('includes.flash')

@section('content')
<div class="container">
	<h1 class ="my-5">Vítejte na online přehledu zadání</h1>
	
	<h3 class ="my-5">Zadání s nejbližším deadlinem:</h3>
	@include('includes.assignmentcard')
</div>
@endsection