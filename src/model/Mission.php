<?php

use \Illuminate\Database\Eloquent\Model;

class Mission extends Model {
  // refer to a database table, an object us used here for demo purposes
  public $timestamps = true;

  public function missionComments() {
    return $this->hasMany(MissionComment::class);
  }
  public function ships() {
    return $this->hasMany(Ship::class);
  }
  public function supplies() {
    return $this->hasMany(Supply::class);
  }

    public static function validateMission($data){

    $errors = [];
    if(empty($data['title'])){
      $errors['title'] = 'Please fill in a title';
    }
    if(empty($data['date'])){
      $errors['date'] = 'Please choose a date';
      echo ($data['date']);
    }
    if(empty($data['description'])){
      $errors['description'] = 'Please fill in a description';
    }

    return $errors;
  }

  public static function validateUpdate($mission){

    $errors = [];

    if(empty($mission['title']) && empty($mission['description'])){
      $errors['updatetext'] = 'Please fill in something';
    }

    return $errors;
  }

}
