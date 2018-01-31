<html>
<style>
body { background: #2a72de;}

</style>
<body>
<div style="width: 500px; background: #fff; border: 1px solid #e4e4e4; padding: 70px; margin: 90px auto;border-radius: 10px">

<form action="signup.php" method="POST">
<h1>Signup Form</h1>
<hr/>
</br>

<h3>Name:</h3>	
<p><input type="text" name="name"></p>
<h3>Email:</h3>
<p><input type="text" name="email"></p>
<h3>Password:</h3>
<p><input type="password" name="pass"></p>

<p class="buttonp">
<button type="submit"name="signup" value="SIGN UP">Sign Up</button>
</p>
<p>Already a member? <a href="index.php">Login here</a></p>
</form>
</body>
</html>
