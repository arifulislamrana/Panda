<!DOCTYPE html>
<html>

<head>
	<title>Panda</title>
	<link rel="stylesheet" type="text/css" href="/Assets/css/login.css">
</head>

<body>
	<div class="login-box" style="height: 73%">
        <img src="/Assets/images/logo.png" class="avatar">
        <h1>Login Here</h1>
        <form action="form1.html">
            @csrf
            <p>User Email</p>
            <input type="email" name="user email" placeholder="Enter User email" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <p>Confirm Password</p>
            <input type="password" name="cpassword" placeholder="Enter Password" required>
            <input type="submit" name="submit" value="Sign up">
            <a href="">Login</a>
        </form>
	</div>
</body>
</html>
