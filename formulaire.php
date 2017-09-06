<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/css/mdb.min.css" />
    <title></title>
  </head>
  <body>


    <form method='post' action='formulaire.php'>
        <p class="h5 text-center mb-4">Sign in</p>



        <div class="md-form">
            <i class="fa fa-lock prefix grey-text"></i>
            <input type="password" id="defaultForm-pass" name='motdepasse'  class="form-control">
            <label for="defaultForm-pass">Your password</label>
        </div>

        <div class="text-center">
            <button type='submit' class="btn btn-default">Login</button>
        </div>
    </form>
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
    <!-- Form login -->


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/js/mdb.min.js"></script>
  </body>
</html>
