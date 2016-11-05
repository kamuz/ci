<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register User</title>
</head>
<body>
  <h1>Registration</h1>
  <?php echo form_open(base_url() . 'users/register'); ?>
    <p>Username: <input type="text" name="username"></p>
    <p>Password: <input type="password" name="password"></p>
    <p>User Type:
      <select name="user_type">
        <option value="" selected="selected">--</option>
        <option value="admin">Admin</option>
        <option value="author">Author</option>
        <option value="user">User</option>
      </select>
    </p>
    <p><?php echo form_submit('', 'Register'); ?></p>
  <?php echo form_close(); ?>
</body>
</html>