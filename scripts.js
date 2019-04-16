function newUserCheck() {
		const username = document.getElementById("username").value;
		const password = document.getElementById("password").value;
		const teamname = document.getElementById("teamname").value;
		const email = document.getElementById("email").value;

		if (username.length < 6) {
				document.getElementById("usernameLabel").innerHTML = "<p style='color:red'>Username must be longer than 6 characters.</p>";
		}
}

document.getElementById("submit-btn").addEventListener("click",function(event) {
		let test = newUserCheck();
		if (true) {
				event.preventDefault()
		}
}
