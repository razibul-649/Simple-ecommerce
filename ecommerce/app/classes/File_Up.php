<?php
namespace App\classes;

class File_Up
{
  private $name;
  private $imName;
  private $dirrct;
  private $tem;
  private $is_up;

  public function __construct($post2, $file2)
  {
    $this->name = $post2['name'];
    $this->imName = $file2["image_f"]["name"];
    $this->dirrct = 'assets/img/upfile/';
    $this->tem = $file2["image_f"]["tmp_name"];
  }

  public function uploadFile()
  {

    $this->is_up = move_uploaded_file($this->tempDirectory, $this->directory .$this->imageName);
    if($this->is_up) {
      return [
        'name' => $this->name,
        'image_path' => $this->dirrct . $this->imName
      ];
    } else {
      return 'Upload Failed and Please try again';
    }
  }
}