<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p style="color:red; font-size: 18px;"><?php echo $error?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>