@extends('app')
@section('content')
    <div class="container">
        <form action="{{ route('login') }}" method="POST" class="form-signin">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <h2 class="form-signin-heading">Please sign in</h2>
            @error('email')
                <div class="form-group has-error">
                    <label class="control-label">{{ $message }}</label>    
                </div>
            @enderror
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>

    </div> <!-- /container -->
@endsection