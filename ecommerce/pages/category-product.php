<?php include 'pages/header.php'; ?>

<section class="bg-light py-3">
  <div class="container">
    <div class="row">

      <?php if(count($catWiseProduct) > 0) { ?>
        <?php foreach($catWiseProduct as $product) { ?>
          <div class="col-md-4">
            <div class="card mb-4 h-100">
              <img src="assets/img/products/<?php echo $product['image'];?>" alt="" class="card-img" height="250">
              <div class="card-body">
                <h3><?php echo $product['name'];?></h3>
                <h4>Price: Tk.<?php echo $product['price'];?>  </h4>
                <a href="action.php?page=product-details&&id=<?php echo $product['id']; ?>" class="btn btn-outline-success">Details</a>
              </div>
            </div>
          </div>
        <?php } ?>
      <?php } else { ?>
        <div class="col-md-12">
          <h3 class="text-center text-danger">No Product found in the current category</h3>
        </div>
      <?php } ?>
      
    </div>
  </div>
</section>

<?php include 'pages/footer.php'; ?>