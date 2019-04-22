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

		if (teamname.length < 1) {
				document.getElementById("teamnameLabel").innerHTML = "Team Name <p style='color:red'>(Team Name must not be empty.)</p>";
		}

		emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if (!email.match(emailRegex)) {
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
