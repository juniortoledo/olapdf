<?php

namespace App\Core;

use League\Plates\Engine;
use ReallySimpleJWT\Token;

class Controller
{
  /**
   * render views
   */
  public function render($page, $array = [])
  {
    $view = new Engine('app/views');
    echo $view->render($page, $array);
  }

  /**
   * check if user is logged in
   */
  public function isAuth($sessionName, $url)
  {
    !$_SESSION[$sessionName] ? header('location:' . $url) : '';
  }

  /**
   * image upload
   */
  public function upload($data)
  {
    $filename = $_FILES["file"]["name"];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
    $file_ext = substr($filename, strripos($filename, '.')); // get file name
    $allowed_file_types = array('.doc', '.docx', '.rtf', '.pdf');

    // Rename file
    $newfilename = date('d-m-Y-h-i-s') . $file_ext;
    move_uploaded_file($_FILES["file"]["tmp_name"], ASSETS . 'pdf/' . $newfilename);
    
    return $newfilename;
  }

  /**
   * delete the file
   */
  public function deleteImage($name)
  {
    unlink(ASSETS . 'images' . '/' . $name);
  }

  /**
   * receive json
   */
  public function response($data)
  {
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    return $data;
  }

  /**
   * to send json
   */
  public function send($array, $httpCode)
  {
    http_response_code($httpCode);

    echo json_encode($array);
  }
}
