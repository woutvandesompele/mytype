<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../model/Text.php';


class PagesController extends Controller {

  public function index() {



  }

/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

  public function logout() {

    $this->set('title','Logout');
  }
}
