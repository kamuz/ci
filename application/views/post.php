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
    <hr>
    <h2>Comments</h2>
    <?php if(count($comments) > 0): ?>
      <?php foreach($comments as $row): ?>
        <p><strong><?php echo $row['username'] ?></strong> said at <?php echo date('d/m/Y H:i A', strtotime($row['date_added'])) ?><br><?php echo $row['comment'] ?></p>
        <hr>
      <?php endforeach; ?>
    <?php else: ?>
      <p>There are currently no comment.</p>
    <?php endif; ?>
    <?php echo form_open(base_url() . 'comments/add_comment/' . $post['post_id']); ?>
    <label for="message">Message:</label><br>
    <textarea name="comment" id="message"></textarea><br>
    <p>Captcha code:<br><?php echo $captcha ?><br><input type="text" name="captcha"></p>
    <input type="submit" value="Add comment">
    <?php echo form_close(); ?>
  <?php endif; ?>
  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</body>
</html>