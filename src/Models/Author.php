<?php

  namespace App;
  use App\Models\Model;

class Author extends Model{
  protected string $name;

  public function __construct(){
    parent::__construct();
  }
  
}