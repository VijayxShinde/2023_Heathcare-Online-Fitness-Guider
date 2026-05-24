<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create User</title>
    <link rel="stylesheet" href="Video&Images/style.css" />
  </head>
  <body class="create-U-body">
    <h1 class="title-register">REGISTERATION FOR FITNESS GUIDE</h1>
    <header class="header-createU">
      <div class="logo-box">
        <img src="Video&Images/logo.jpg" alt="logo" class="logo" />
      </div>

      <form
        name="create-user"
        action="registerDB.php"
        method="post"
        class="create-form"
				id="create-user"
      >
        <label class="user-ID-heading">User-ID&rarr;</label>
        <input type="text" name="userID" class="user-ID" placeholder="ENTER DIGITS" /> <br />
        <label class="user-name-heading">Name&rarr;</label>
        <input
          type="text"
          class="first-name"
					name="firstN"
          placeholder="ENTER FIRST NAME"
        /><br />
        <label class="user-surname-heading">Surname&rarr;</label>
        <input
          type="text"
          class="last-name"
					name="lastN"
          placeholder="ENTER LAST NAME"
        /><br />
        <label class="user-gender-heading">Gender&rarr;</label>
        <select name="gender" class="user-gender">  
				<option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
        <br />
        <label class="user-email-heading">Email&rarr;</label>
        <input type="text" class="email-id" name="emailID" placeholder="ENTER E-MAIL" /><br />
        <label class="user-password-heading">Password&rarr;</label>
        <input
          type="password"
          class="user-pass"
					name="passW"
          placeholder="CREATE A PASSWORD"
        /><br />
        <input
          type="submit"
          class="register-btn"
          name="submit"
          value="REGISTER"
        />
      </form>
    </header>
    <div class="copy-right-CU">
      <p>
        Copyright &copy;2022-2023 Computer Engineering Group, All Rights
        Reserved
      </p>
    </div>
		<script src="script.js"></script>
  </body>
</html>
