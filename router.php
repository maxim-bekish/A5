<?php
// router.php
class Router
{
   private $routes = [];

   public function add($uri, $callback)
   {
      $this->routes[$uri] = $callback;
   }

   public function run()
   {
      $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
      if (array_key_exists($uri, $this->routes)) {
         call_user_func($this->routes[$uri]);
      } else {
         echo "404 Not Found";
      }
   }
}
