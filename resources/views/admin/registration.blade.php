@extends('main')

@section('content')

<div class="row justify-content-center">
	<div class="col-md-4">
		<div class="card">
		<div class="card-header">Registration</div>
		<div class="card-body">
			<form action="{{ route('validate_registration') }}" method="POST">
				@csrf
				<div class="form-group mb-3">
					<input type="text" name="name" class="form-control" placeholder="Name" />
				</div>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
				<div class="form-group mb-3">
					<input type="text" name="email" class="form-control" placeholder="Email Address" />
				</div>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
				<div class="form-group mb-3">
					<input type="password" name="password" class="form-control" placeholder="Password" />
				</div>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="form-group mb-3">
					<input type="password" name="confirmpass" class="form-control" placeholder="Confirm Password" />
				</div>
                @error('confirmpass')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
				<div class="d-grid mx-auto">
					<button type="submit" class="btn btn-dark btn-block">Register</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection
