<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
</head>
<body>
<h1>Login</h1>
<?php if($error == 1): ?>
  <p style="background: red; color: white;">Your username / password did not match!</p>
<?php endif; ?>

<form action="<?php echo base_url()?>users/login" method="post">
  <p>Username: <input type="text" name="username"></p>
  <p>Password: <input type="password" name="password"></p>
  <p><input type="submit" value="Login"></p>
</form>
</body>
</html>