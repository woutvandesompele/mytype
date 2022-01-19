<?php

use \Illuminate\Database\Eloquent\Model;

class MissionComment extends Model {

  public function todo() {
    return $this->belongsTo(Mission::class);
  }

  public static function validateComment($data){
    $errors = [];

    if(empty($data['text'])){
      $errors['text'] = "Please fill in a text";
    }
    if(!isset($data['mission_id'])){
      $errors['mission_id'] = "Please fill in a mission_id";
    }
    return $errors;
  }

}
