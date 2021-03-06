<!DOCTYPE html>
<html>

<head>
	<title>Panda</title>
	<link rel="stylesheet" type="text/css" href="/Assets/css/login.css">
</head>

<body>
	<div class="login-box">
        @if(count($errors) > 0 )
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul class="p-0 m-0" style="list-style: none;">
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            </div>
        @endif
        <img src="/Assets/images/logo.jpg" class="avatar">
        <h1>Login Here</h1>
        <form action="{{ Route('loginPost') }}" method="POST">
            @csrf
            <p>User Email</p>
            <input type="email" name="email" placeholder="Enter User email" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="submit" name="submit" value="Login">
            <a href="{{ Route('signUpGet') }}">Sign up</a>
        </form>
	</div>
</body>
</html>
