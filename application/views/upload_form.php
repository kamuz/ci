<div style="color: red"><?php echo $error; ?></div>

<?php echo form_open_multipart('upload/do_upload'); ?>

<input type="file" name="userfile">
<input type="submit" value="Upload">

<?php echo form_close(); ?>