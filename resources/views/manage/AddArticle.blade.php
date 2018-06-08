@extends('layouts.app')

@section('content')
	<div class="container">
		<form action="add" method="POST">
			{{csrf_field()}}
			<div class="form-group">
				<label for="use">Name:</label>
				<input type="text" name="title" class="form-control">
			</div>
			<div class="form-group">
				<label for="use">body:</label>
				<textarea rows="4" cols="50" name="body" class="form-control"></textarea>
			</div>
			</br>
			<input type="submit" vlaue="add new" class="btn btn-primary"/>
		</form>

	</div>
@endsection