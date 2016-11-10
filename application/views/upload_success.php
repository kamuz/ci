<h3 style="color: green">Your file was successfully uploaded!</h3>

<?php
echo '<pre>';
print_r($upload_data);
echo '</pre>';

?>

<a href="<?php base_url() ?>upload">Upload another file</a>