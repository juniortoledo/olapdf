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

    $filename = $_FILES["file"]["name"];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
    $file_ext = substr($filename, strripos($filename, '.')); // get file name
    $allowed_file_types = array('.doc', '.docx', '.rtf', '.pdf');

    // Rename file
    $newfilename = date('d-m-Y-h-i-s') . $file_ext;
    move_uploaded_file($_FILES["file"]["tmp_name"], 'assets/pdf/' . $newfilename);
    
    // $model->insert(array(
    //   'name' => $data['name'],
    //   'file_name' => $newfilename,
    //   'createdAt' => date('d/m/Y')
    // ), 'pdf');


    // header('location:'. URL . 'admin/diario@2022');
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
