<?php include "partials/header.php"; ?>

<main class="container">
  <!-- <?php if ($fname): ?>
    <h1>Hello <?= $fname ?> </h1>
  <?php endif ?> -->
  <form method="POST">
    <div class="mb-3">
      <label for="fname" class="form-label">First name</label>
      <input type="text" class="form-control" id="fname" name="fname">
    </div>
    <div class="mb-3">
      <input type="submit" class="btn btn-primary" value="Enter">
    </div>
  </form>
</main>

<?php include "partials/footer.php"; ?>