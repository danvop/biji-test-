<?php

namespace App\Core;

class SimpleImage
{
    public $image;
    public $image_type;
    public $width;
    public $height;

    public function load($filename)
    {
        $image_info = getimagesize($filename);
        $this->image_type = $image_info[2];
        $this->width = $image_info[0];
        $this->height = $image_info[1];
        if ($this->image_type == IMAGETYPE_JPEG) {
            $this->image = imagecreatefromjpeg($filename);
        } elseif ($this->image_type == IMAGETYPE_GIF) {
            $this->image = imagecreatefromgif($filename);
        } elseif ($this->image_type == IMAGETYPE_PNG) {
            $this->image = imagecreatefrompng($filename);
        }
    }
    public function save($filename, $image_type = IMAGETYPE_JPEG, $compression = 75, $permissions = null)
    {
        if ($image_type == IMAGETYPE_JPEG) {
            imagejpeg($this->image, $filename, $compression);
        } elseif ($image_type == IMAGETYPE_GIF) {
            imagegif($this->image, $filename);
        } elseif ($image_type == IMAGETYPE_PNG) {
             imagepng($this->image, $filename);
        }
        if ($permissions != null) {
            chmod($filename, $permissions);
        }
    }
   // public function output($image_type=IMAGETYPE_JPEG) {
   //    if( $image_type == IMAGETYPE_JPEG ) {
   //       imagejpeg($this->image);
   //    } elseif( $image_type == IMAGETYPE_GIF ) {
   //       imagegif($this->image);
   //    } elseif( $image_type == IMAGETYPE_PNG ) {
   //       imagepng($this->image);
   //    }
   // }
   // public function getWidth() {
   //    return imagesx($this->image);
   // }
   // public function getHeight() {
   //    return imagesy($this->image);
   // }
   // public function resizeToHeight($height) {
   //    $ratio = $height / $this->getHeight();
   //    $width = $this->getWidth() * $ratio;
   //    $this->resize($width,$height);
   // }
   // public function resizeToWidth($width) {
   //    $ratio = $width / $this->getWidth();
   //    $height = $this->getheight() * $ratio;
   //    $this->resize($width,$height);
   // }
   // public function scale($scale) {
   //    $width = $this->getWidth() * $scale/100;
   //    $height = $this->getheight() * $scale/100;
   //    $this->resize($width,$height);
   // }
    public function resize($maxWidth, $maxHeight)
    {
        $scale = min($maxWidth/$this->width, $maxHeight/$this->height);
        $newWidth = ceil($scale*$this->width);
        $newHeight = ceil($scale*$this->height);
        $new_image = imagecreatetruecolor($newWidth, $newHeight);

        imagecopyresampled($new_image, $this->image, 0, 0, 0, 0, $newWidth, $newHeight, $this->width, $this->height);


        $this->image = $new_image;
    }
}
