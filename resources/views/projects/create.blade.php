@extends ('layouts.app')

@section('content')

	
	<form method="POST" action="/projects">
		@csrf

		<h1 class="heading is-1">Create a Project</h1>

		<div class="field">
			<label class="label" for="title">Title</div>

			<div class="control">
					<input type="text" class="input" name="title" placeholder="Title">
			</div>
		</div>

		<div class="field">
			<label class="label" for="description">Description</div>

			<div class="control">
					<textarea name="description" class="textarea"></textarea>
			</div>
		</div>

		<div class="field">
			<div class="control">
					<button type="submit" class="button is-link">CreateProject</button>
					<a href="/projects">Cancel</a>
			</div>
		</div>

	</form>

@endsection