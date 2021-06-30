@extends('layouts.adminLayout')

@section('content')
<div class="container">
	<h1 class ="my-5">Výsledky hledání:</h1>
	
	@foreach ($assignments as $assignment)
                @include('includes.assignmentcard')
    @endforeach
</div>
@endsection