
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>
    <link rel="stylesheet" href="Video&Images/style.css" />
  </head>
  <body class="lg-body">
    <div class="lg-div"><br>
      <h1 class="heading-login">The Fitness Guide</h1>
      <img src="Video&Images/logo.jpg" alt="logo" class="logo-login" />
      <form class="login-form" method="post" action="loginDB.php">
        <input type="text" class="userN" name="user_id" placeholder="ENTER USER-ID" />
        <input type="password" class="passW" name="password" placeholder="ENTER PASSWORD" /><br>
        <button type="submit" name="submit" class="lg-btn" value="login">LOGIN</button>
      </form>
      <p class="lg-copyright">
        Copyright &copy;2022-2023 Computer Engineering Group, All Rights
        Reserved
      </p>
    </div>
  </body>
</html>
