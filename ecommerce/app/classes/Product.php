<?php
namespace App\classes;

class Product
{
  public $products = [];
  public $catProducts = [];

  public function __construct()
  {
    $this->products = [
      0 => [
        'id' => 1,
        'category_id' => 1,
        'name' => 'Xaomi Node 9',
        'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old..',
        'price' => 55000,
        'image' => 'product1.jpg'
      ],
      1 => [
        'id' => 2,
        'category_id' => 1,
        'name' => 'Samsung Galexy ',
        'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.',
        'price' => 119500,
        'image' => 'product2.jpg'
      ],
      2 => [
        'id' => 3,
        'category_id' => 2,
        'name' => 'T Shirt',
        'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.',
        'price' => 1300,
        'image' => 'product3.jpg'
      ],
      3 => [
        'id' => 4,
        'category_id' => 2,
        'name' => 'Jens Pant',
        'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.',
        'price' => 3500,
        'image' => 'product4.jpg'
      ],
      4 => [
        'id' => 5,
        'category_id' => 3,
        'name' => 'Icc Cricket Bat',
        'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.',
        'price' => 4400,
        'image' => 'product5.jpg'
      ],
      5 => [
        'id' => 6,
        'category_id' => 3,
        'name' => 'FIFA Quatar Footbal',
        'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here.',
        'price' => 3500,
        'image' => 'product6.jpg'
      ],
    ];
  }

  public function getProductByCategory($c_id)
  {
    foreach($this->products as $product)
    {
      if($product['category_id'] == $c_id)
      {
        array_push($this->catProducts, $product);
      }
    }

    return $this->catProducts;
  }

  public function getProductById($p_id)
  {
    foreach($this->products as $product)
    {
      if($product['id'] == $p_id)
      {
        return $product;
      }
    }
  }
}
