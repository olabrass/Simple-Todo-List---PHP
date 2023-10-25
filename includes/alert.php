<?php

if(isset($_SESSION['message'])) :
    ?>
<!-- Alert Code -->
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Hey!</strong> <?= $_SESSION['message']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
<?php
unset($_SESSION['message']);
endif;
?>