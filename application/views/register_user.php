<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register User</title>
</head>
<body>
  <h1>Registration Users</h1>
  <?php if(isset($errors)): ?>
  <div style="color: red;"><?php echo $errors; ?></div>
  <?php endif; ?>
  <?php echo form_open(base_url() . 'users/register'); ?>
    <p>Username: <input type="text" name="username" value="<?php echo set_value('username') ?>"></p>
    <p>Email: <input type="email" name="email" value="<?php echo set_value('email') ?>"></p>
    <p>Password: <input type="password" name="password" value="<?php echo set_value('password') ?>"></p>
    <p>Password Comfirmed: <input type="password" name="password2" value="<?php echo set_value('password2') ?>"></p>
    <p>User Type:
      <select name="user_type">
        <option value="" selected="selected">--</option>
        <option value="admin" <?php echo set_select('user_type', 'admin');?>>Admin</option>
        <option value="author" <?php echo set_select('user_type', 'author');?>>Author</option>
        <option value="user" <?php echo set_select('user_type', 'user');?>>User</option>
      </select>
    </p>
    <p><?php echo form_submit('register', 'Register'); ?></p>
  <?php echo form_close(); ?>
</body>
</html>