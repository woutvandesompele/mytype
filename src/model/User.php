<?php

use \Illuminate\Database\Eloquent\Model;

class User extends Model {
  // refer to a database table, an object us used here for demo purposes
  public $timestamps = true;

  public static function validateLogin($datausername, $datapassword){

    $errors = [];
    if(!empty($datausername['username'])){
      $errors['username'] = 'Please fill in a username';
    }
    if(!empty($datapassword['password'])){
      $errors['password'] = 'Please fill in a password';
    }

    return $errors;
  }

    public static function validateCreateUser($newUser, $ranks){

    $queryUsername = User::where('username','LIKE','%' . $newUser['username'] . '%')->get();

    $errors = [];
    $newUser['rank'] = preg_replace('/\s*/', '', $newUser['rank']);

    if (count($queryUsername) >= 1)
    {
        $errors['username'] = 'Username already exists';
    }

    if(strlen($newUser['password']) < 5){
      $errors['password'] = 'Minimum required characters is 5';
    }

    if(empty($newUser['password'])){
      $errors['password'] = 'Please fill in a password';
    }

    if(empty($newUser['username'])){
      $errors['username'] = 'Please fill in a username';
    }

    if(empty($newUser['rank'])){
      $errors['rank'] = 'Please fill in a rank';
    }

    return $errors;
  }
}
