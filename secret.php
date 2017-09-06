<?php
if (isset($_POST['motdepasse']) AND htmlspecialchars($_POST['motdepasse'])) {
   $motdepasse=$_POST['motdepasse'];
  if ($motdepasse=='kangourou') {
    echo '<p>'.' '.'ACCES ACCORDE'.'</p>';
  }
  else {
    echo '<p>'.' '.'ACCES REFUSE'.'</p>';
  }
  # code...
}


 ?>
