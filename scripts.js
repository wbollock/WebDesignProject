function newUserCheck() {
		const username = document.getElementById("username").value;
		const password = document.getElementById("password").value;
		const teamname = document.getElementById("teamname").value;
		const email = document.getElementById("email").value;

		if (username.length < 6) {
				document.getElementById("usernameLabel").innerHTML = "Username <p style='color:red'>(Username must be longer than 6 characters.)</p>";
		}
		else {
				document.getElementById("usernameLabel").innerHTML = "Username";
		}

		if (password.length < 6) {
				document.getElementById("passwordLabel").innerHTML = "Password <p style='color:red'>(Password must be longer than 6 characters.)</p>";
		}
		else {
				document.getElementById("passwordLabel").innerHTML = "Password";
		}

		emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if (email.match(emailRegex)) {
				document.getElementById("emailLabel").innerHTML = "Email <p style='color:red'>(Please use a valid email.)</p>";
		}
		else {
				document.getElementById("emailLabel").innerHTML = "Email";
		}
}

document.getElementById("submit-btn").addEventListener("click",function(event) {
		let test = newUserCheck();
		if (true) {
				event.preventDefault()
		}
});
