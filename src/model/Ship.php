<?php

use \Illuminate\Database\Eloquent\Model;

class Ship extends Model {
  // refer to a database table, an object us used here for demo purposes
  public $timestamps = true;

  public function todo() {
    return $this->belongsTo(Mission::class);
  }

  public static function validateShip($data){
    $errors = [];

    if(empty($data['amount'])){
      $errors['shipamount'] = "Please choose your amount";
    }
    return $errors;
  }
}
