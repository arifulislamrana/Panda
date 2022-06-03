<!DOCTYPE html>
<html>

<head>
	<title>Panda</title>
	<link rel="stylesheet" type="text/css" href="/Assets/css/login.css">
</head>

<body>
	<div class="login-box">
        <img src="/Assets/images/logo.png" class="avatar">
        <h1>Login Here</h1>
        <form action="form1.html">
            @csrf
            <p>User Email</p>
            <input type="email" name="email" placeholder="Enter User email" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="submit" name="submit" value="Login">
            <a href="">Sign up</a>
        </form>
	</div>
</body>
</html>
