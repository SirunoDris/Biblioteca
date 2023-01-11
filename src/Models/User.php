<?php

  namespace App\Models;
  use App\Models\Model;
  use App\Models\Loan;

  class User extends Model{
    public function __construct(){
      parent::__construct();
   
    } 
    /*
    public function loans(){
      return $this->hasMany(Loan::class);
    }
    */
  }