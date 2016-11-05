<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Post index</title>
</head>
<body>
  <h1>Edit post</h1>
  <a href="<?php echo base_url() ?>">Go to list of the posts</a>
  <?php if($success == 1): ?>
    <p style="color: white; background: green;">This post has been updated!</p>
  <?php endif; ?>
  <form action="<?php echo base_url(); ?>posts/edit/<?php echo $post['post_id'] ?>" method="post">
    <p>Title: <input type="text" name="title" value="<?php echo $post['title'] ?>"></p>
    <p>Text of post: <textarea name="post"><?php echo $post['post'] ?></textarea></p>
    <p>Active: <input type="radio" name="active" <?php if($post['active'] == 1) echo 'checked' ?> value="1">Yes  <input type="radio" name="active" <?php if($post['active'] == 0) echo 'checked' ?> value="0">No </p>
    <input type="submit" value="Edit post">
  </form>
</body>
</html>