<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Contact Form with Captcha</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="bg">
    <img src="bg1.jpg" alt="">
  </div>
  
  <div class="container mt-5">
    
    <?php include('scripts/contact_form.php'); ?>

    <!---------------- Captcha error message ---------------------->
    <?php if(!empty($captchaError)) {?>
      <div class="form-group col-12 text-center">
        <div class="alert text-center <?php echo $captchaError['status']; ?>">
          <?php echo $captchaError['message']; ?>
        </div>
      </div>
    <?php }?>

    <!------------------- Contact form ------------------------>
    <form action="" name="contactForm" method="post" enctype="multipart/form-data">
      <h4>Contact Form with Captcha</h4>
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" id="name">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" id="email">
      </div>

      <div class="form-group">
        <label>Phone No.</label>
        <input type="tel" class="form-control" name="number" id="number">
      </div>

      <div class="row">
        <div class="form-group col-6">
          <label>Enter Captcha</label>
          <input type="text" class="form-control" name="captcha" id="captcha">
        </div>
        <div class="form-group col-6">
          <label>Captcha Code</label>
          <img src="scripts/captcha.php" alt="PHP Captcha">
        </div>
      </div>

      <input type="submit" name="send" value="Send" id="button" class="btn btn-dark btn-block">
    </form>
  </div>
</body>

</html>