<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\CrudModel;

class Main extends Controller
{
  /**
   * view index
   */
  public function index()
  {
    $model = new CrudModel();
    $files = $model->getAll('pdf');
    // render view
    self::render('index', ['files' => $files]);
  }

  // admin
  public function admin($data)
  {
    

    if($data['senha'] === 'diario@2022') {
      self::render('admin');
    } else {
      header('location:' . URL);
    }
  }

  // upload
  public function upload($data)
  {
    $model = new CrudModel();
    
    $model->insert(array(
      'name' => $data['name'],
      'file_name' => self::upload($_FILES['image']),
      'createdAt' => date('d/m/Y')
    ), 'pdf');


    header('location:'. URL . 'admin/diario@2022');
  }

  /**
   * view error
   */
  public function error()
  {
    // render error
    self::render('error');
  }
}
