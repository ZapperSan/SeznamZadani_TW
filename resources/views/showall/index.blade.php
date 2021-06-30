@extends('layouts.adminLayout')

@section('content')

@if(Session::has('success'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
@endif
<div class="container">
	<h1 class ="my-5">Všechna zadání:</h1>
	
	@foreach ($assigments as $assignment)
                @include('includes.assignmentcard')
    @endforeach
</div>
@endsection