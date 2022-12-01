<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Seip</title>
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/my-styles.css">
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-light bg-light shadow">
    <div class="container">
      <a href="action.php?page=home" class="navbar-brand">Logo</a>
      <ul class="navbar-nav">
        <li><a href="action.php?page=home" class="nav-link">Home</a></li>
        <li><a href="action.php?page=all-product" class="nav-link">All Product</a></li>
        <li><a href="action.php?page=all-files" class="nav-link">File_Upload</a></li>

        <li class="dropdown">
          <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product Category List</a>
          <ul class="dropdown-menu">

            <?php foreach($categories as $category) { ?>
              <li><a href="action.php?page=category-product&&category-id=<?php echo $category['id']; ?>" class="dropdown-item"><?php echo $category['name']; ?></a></li>
            <?php } ?>
            
          </ul>
        </li>
      </ul>
    </div>
  </nav>