<?php

require_once 'vendor/autoload.php';
use App\classes\CategoryList;
use App\classes\Product;

$result = [
  'name' => '',
  'image_path' => 'assets/img/photo-blank.jpg'
];

$category = new CategoryList();
$categories = $category->getAllCategory();



if(isset($_GET['page']))
{
  if($_GET['page'] == 'home')
  {
    include 'pages/home.php';
  }
  else if($_GET['page'] == 'all-product')
  {
    include 'pages/all-product.php';
  }else if($_GET['page'] == 'all-product')
  {
    include 'pages/all-product.php';
  }
  else if($_GET['page'] == 'category-product')
  {
    $category_id = $_GET['category-id'];
    $product = new Product();
    $catWiseProduct = $product->getProductByCategory($category_id);
    
    include 'pages/category-product.php';
  }else if($_GET['page'] == 'all-files')
    {
      include 'pages/Fhome.php';
    }else if($_GET['page'] == 'product-details')
    {
      $product_id = $_GET['id'];
      $product = new Product();
      $aProduct = $product->getProductById($product_id);
  
      include 'pages/product-details.php';
    }

  }else if(isset($_POST['uploadBtn']))
{
  $fileUpload = new FileUpload($_POST, $_FILES);
  $result = $fileUpload->uploadFile();
  include 'pages/fhome.php';
}

