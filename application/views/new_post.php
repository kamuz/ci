<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Post index</title>
</head>
<body>
    <h1>New post</h1>
    <form action="<?php echo base_url(); ?>posts/add" method="post">
      <p>Title: <input type="text" name="title"></p>
      <p>Text of post: <textarea name="post"></textarea></p>
      <input type="submit" value="Add post">
      <p>Active: <input type="radio" name="active" checked value="1">Yes  <input type="radio" name="active" value="0">No </p>
    </form>
  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</body>
</html>