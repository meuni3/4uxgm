<html>
<head>
<link rel="stylesheet" href="mm.css" type="text/css"/>
</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="sign-p.php" method="post">
			<h1>Create Account</h1>
			
			<span>or use your email for registration</span>
			<input type="text" name="username" id="username" placeholder="Name" required>
			<input type="email" name="email" id="email" placeholder="Email">
			<input type="password" name="password" id="password" placeholder="Password" required >
			<button type="submit" style=background-color:black;>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="log-p.php" method="post">
			<h1>Sign in</h1>
			
			<span>or use your account</span>
			<input type="email" name="email" id="email" placeholder="Email" required>
			<input type="password" name="password" id="password" placeholder="Password" required>
		
			<button type="submit" style= background-color:black;>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Ready,Player!</h1>
				<p>Enter your personal details and start Playing with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>


<script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
</body>
</html>
