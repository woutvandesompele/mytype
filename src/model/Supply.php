<?php

use \Illuminate\Database\Eloquent\Model;

class Supply extends Model {
  // refer to a database table, an object us used here for demo purposes
  public $timestamps = false;

  public function todo() {
    return $this->belongsTo(Mission::class);
  }

  public static function validateSupply($data){
    $errors = [];

    if(empty($data['supplyname'])){
      $errors['supplyname'] = "Please type in a supply";
    }

    if(strlen($data['supplyname']) > 15){
      $errors['supplyname'] = 'Supply name can only be max 15 characters';
    }

    if(empty($data['amount'])){
      $errors['supplyamount'] = "Please choose your amount";
    }
    return $errors;
  }

}
