const form = document.getElementById("create-user");

form.addEventListener("submit", (event) => {
  // event.preventDefault();

  var user_id = document.forms["create-user"]["userID"].value;
  var name = document.forms["create-user"]["firstN"].value;
  var surname = document.forms["create-user"]["lastN"].value;
  var email = document.forms["create-user"]["emailID"].value;
  var password = document.forms["create-user"]["passW"].value;

  var user_id_regex = /^(?:\d{5,}|\d{1}\d{4,})$/;
  var name_regex = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/;
  var surname_regex = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/;
  var email_regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  var password_regex = /^(?=.*[0-9])(?=.*[a-zA-Z]).{6,}$/;

  if (user_id == "") {
    alert("User ID must be filled out");
    return false;
  } else if (!user_id_regex.test(user_id)) {
    alert(
      "User ID can only contain numbers and must be at least 5 digits long"
    );
    return false;
  }

  if (name == "") {
    alert("Name must be filled out");
    return false;
  } else if (!name_regex.test(name)) {
    alert("Name can only contain letters");
    return false;
  }

  if (surname == "") {
    alert("Surname must be filled out");
    return false;
  } else if (!surname_regex.test(surname)) {
    alert("Surname can only contain letters");
    return false;
  }

  if (email == "") {
    alert("Email must be filled out");
    return false;
  } else if (!email_regex.test(email)) {
    alert("Invalid email address");
    return false;
  }

  if (password == "") {
    alert("Password must be filled out");
    return false;
  } else if (!password_regex.test(password)) {
    alert("Password must be less than or 6 numbers and characters");
    return false;
  }

  const formData = {
    user_id: user_id,
    name: name,
    surname: surname,
    email: email,
  };

  fetch("registerDB.php", {
    method: "POST",
    body: JSON.stringify(formData),
  })
    .then((response) => response.json())
    .then((data) => console.log(data))
    .catch((error) => console.error(error));
});
