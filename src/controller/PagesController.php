<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../model/Text.php';


class PagesController extends Controller {

  public function index() {

  $texts = Text::all();
  foreach ($texts as $text) {
    $this->set($text->part, $text->text);
  }

  }

/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

  public function logout() {

    $this->set('title','Logout');
  }
}
