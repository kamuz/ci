<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Post index</title>
</head>
<body>
  <h1>Blog posts</h1>
  <?php if(!empty($posts)): ?>
    <?php foreach($posts as $row): ?>
    <h3><a href="<?php echo base_url(); ?>posts/post/<?php echo $row['post_id']; ?>"><?php echo $row['title']; ?></a></h3>
    <p><?php echo substr(strip_tags($row['post']), 0, 10) . "..."; ?></p>
    <p><a href="<?php echo base_url(); ?>posts/post/<?php echo $row['post_id']; ?>">Read more...</a></p>
    <?php endforeach; ?>
  <?php else: ?>
    <p>There are currently no posts on my blog!</p>
  <?php endif; ?>
  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</body>
</html>