<?php include 'pages/header.php'; ?>

<section class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="assets/img/products/<?php echo $aProduct['image']; ?>" alt="" class="w-100">
      </div>
      <div class="col-md-6">
        <h2><?php echo $aProduct['name']; ?></h2>
        <h4>Price : TK. <?php echo $aProduct['price']; ?></h4>
        <p><?php echo $aProduct['description']; ?></p>
      </div>
    </div>
  </div>
</section>

<?php include 'pages/footer.php'; ?>