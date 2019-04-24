function newUserCheck() {
		const username = document.getElementById("username").value;
		const password = document.getElementById("password").value;
		const passwordConfirm = document.getElementById("passwordConfirm").value;
		const teamname = document.getElementById("teamname").value;
		const email = document.getElementById("email").value;
		let correct = true;

		if (username.length < 6) {
				document.getElementById("usernameLabel").innerHTML = "Username <p style='color:red'>(Username must be longer than 6 characters.)</p>";
				correct = false;
		}
		else {
				document.getElementById("usernameLabel").innerHTML = "Username";
				correct = true;
		}

		if (password.length < 6) {
				document.getElementById("passwordLabel").innerHTML = "Password <p style='color:red'>(Password must be longer than 6 characters.)</p>";
				correct = false;
		}
		else {
				document.getElementById("passwordLabel").innerHTML = "Password";
				correct = true;
		}
		if (password != passwordConfirm) {
				document.getElementById("passwordLabel").innerHTML = "Password <p style='color:red'>(Passwords must match.)</p>";
				correct = false;
		}

		if (teamname.length < 1) {
				document.getElementById("teamnameLabel").innerHTML = "Team Name <p style='color:red'>(Team Name must not be empty.)</p>";
				correct = false;
		}

		// emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		// if (!email.match(emailRegex)) {
		// 		document.getElementById("emailLabel").innerHTML = "Email <p style='color:red'>(Please use a valid email.)</p>";
		// 		correct = false;
		// }
		// else {
		// 		document.getElementById("emailLabel").innerHTML = "Email";
				// correct = true;
		// }
		if (correct === false) {
				return false;
		}
		else {
				return true;
		}
}

document.getElementById("submit-btn").addEventListener("click",function(event) {
		let test = newUserCheck();
		console.log(test);
		if (test === false) {
				event.preventDefault()
		}
});
