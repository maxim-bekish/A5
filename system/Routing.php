<?php

class Router
{
   private $pages = array();
   function addRout($url, $path)
   {
      $this->pages[$url] = $path;
   }
   function rout($url)
   {
      $path = $this->pages[$url];
      $file_dir = 'src/' . $path;

      if ($path === '') {
         require "404.php";
         die();
      }
      if (file_exists($file_dir)) {
         require $file_dir;
      } else {

         require "404.php";
         die();
      }
   }
}

?>