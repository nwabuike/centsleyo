<?php if (count($errors) > 1) : ?>
  <div class="message error validation_errors" >
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php endif ?>