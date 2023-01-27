<?php include 'includes/header.php'; ?>
<?php include 'includes/validate_data.php'; ?>
    
    <!-- <img src="img/logo3.png" class="w-25 mb-3" alt=""> -->
    <link rel="stylesheet" href="image_color.css">
    <img src="images/logo.png" class="color-change" alt="image">
    
    <h2 style="color: saddlebrown">Feedback</h2>
    <p class="lead text-center" style="color: saddlebrown">Leave feedback for Ranch Harmonija</p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-4 w-75">
      <div class="mb-3">
        <label for="name" class="form-label" style="color: saddlebrown">Name</label>
        <input type="text" class="form-control <?php echo $nameErr ? 'is-invalid': null; ?>" id="name" name="name" placeholder="Enter your name">
        <div class="invalid-feedback">
          <?php echo $nameErr; ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label" style="color: saddlebrown">Email</label>
        <input type="email" class="form-control <?php echo $emailErr ? 'is-invalid' : null; ?>" id="email" name="email" placeholder="Enter your email">
        <div class="invalid-feedback">
          <?php echo $emailErr; ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="body" class="form-label" style="color: saddlebrown">Feedback</label>
        <textarea class="form-control <?php echo $bodyErr ? 'is-invalid' : null; ?>" id="body" name="body" placeholder="Enter your feedback"></textarea>
        <div class="invalid-feedback">
          <?php echo $bodyErr; ?>
        </div>
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </div>
    </form>
    
    <?php include 'includes/footer.php'; ?>
