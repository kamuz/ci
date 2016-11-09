<h3 style="color: green">Your file was successfully uploaded!</h3>
<ul>
  <?php foreach($upload_data as $key => $value): ?>
    <li><?php echo $key . ' : ' . $value ?></li>
  <?php endforeach; ?>
</ul>