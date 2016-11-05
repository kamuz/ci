<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Post index</title>
</head>
<body>
  <h1>Blog posts</h1>
  <?php if($this->session->userdata('user_id')): ?>
    <p>You are logged in!</p>
    <p>User Type: <?php echo $this->session->userdata('user_type') ?></p>
    <p><a href="<?php echo base_url() ?>users/logout">Logout</a></p>
  <?php else: ?>
  <p><a href="<?php echo base_url() ?>users/login">Login</a> | <a href="<?php echo base_url() ?>users/register">Register</a></p>
  <?php endif; ?>
  <h2><a href="<?php echo base_url() . 'posts/add' ?>">Add new post</a></h2>
  <?php if(!empty($posts)): ?>
    <?php foreach($posts as $row): ?>
    <h3><a href="<?php echo base_url(); ?>posts/post/<?php echo $row['post_id']; ?>"><?php echo $row['title']; ?></a></h3>
    <div>
      <a href="<?php echo base_url(); ?>posts/edit/<?php echo $row['post_id']; ?>">Edit</a> | <a href="<?php echo base_url(); ?>posts/delete/<?php echo $row['post_id']; ?>">Delete</a>
    </div>
    <p><?php echo substr(strip_tags($row['post']), 0, 10) . "..."; ?></p>
    <p><a href="<?php echo base_url(); ?>posts/post/<?php echo $row['post_id']; ?>">Read more...</a></p>
    <?php endforeach; ?>
    <?php echo $pages; ?>
  <?php else: ?>
    <p>There are currently no posts on my blog!</p>
  <?php endif; ?>
  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</body>
</html>