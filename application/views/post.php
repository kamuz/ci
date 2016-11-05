<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Post index</title>
</head>
<body>
  <?php if(!isset($post)): ?>
    <p>This page was access incorrectly.</p>
  <?php else: ?>
    <h1><?php echo $post['title']; ?></h1>
    <?php echo $post['post']; ?>
  <?php endif; ?>
  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</body>
</html>