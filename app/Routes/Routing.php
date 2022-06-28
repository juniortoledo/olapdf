<?php

namespace App\Routes;

use CoffeeCode\Router\Router;

class Routing
{
  public $router;

  public function __construct()
  {
    $this->router = new Router(URL);
    $this->router->namespace('App\Controllers');

    // home
    $this->router->get('/', 'Main:index');

    // home
    $this->router->get('/admin/{senha}', 'Main:admin');
    $this->router->post('/upload', 'Main:upload');

    // route erros
    $this->router->get('/error', 'Main:error');

    $this->router->dispatch();

    // erros
    if ($this->router->error()) {
      $this->router->redirect('/error');
    }
  }
}
