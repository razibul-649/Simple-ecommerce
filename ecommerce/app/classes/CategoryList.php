<?php
namespace App\classes;

class CategoryList
{
  public $categories = [];

  public function __construct()
  {
    $this->categories = [
      0 => [
        'id' => 1,
        'name' => 'Electronics',
        'image' => 'category1.jpg',
      ],
      1 => [
        'id' => 2,
        'name' => 'Girls Fashion',
        'image' => 'category2.jpg',
      ],
      2 => [
        'id' => 3,
        'name' => 'Sports Item',
        'image' => 'category3.jpg',
      ],
      3 => [
        'id' => 4,
        'name' => 'Boys Fashion',
        'image' => 'category4.jpg',
      ],
      
    ];
  }

  public function getAllCategory()
  {
    return $this->categories;
  }
}